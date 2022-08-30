<?php

class SampleUserModel extends CI_Model{

	function __construct(){
		parent::__construct();
	}

	
	function student_list($search_data = array()){

		$data['title'] = 'Student List';
		$data['brief'] = 'All students available for you to manage';
		
		$is_download = (isset($search_data['download']) && $search_data['download'] == 'true');
		
		if(is_level('cso')){
			$cso = user();
		}
		
		$where = " WHERE `student_credit`.`id` IN (SELECT MAX(`id`) as `id` FROM `student_credit` GROUP BY  `student_id`) ";
		
		$orderby = "`student`.`id`";
		
		$status = 'active';
		
		if(is_array($search_data) && sizeof($search_data) > 0){
			
			if(isset($search_data['sql_sort_column']) && $search_data['sql_sort_column'] != "")
			{
				$orderby = $search_data['sql_sort_column'];
			}
			else
			{
				$orderby = "`student`.`id`";
			}
			
			if(!isset($search_data['sql_sort']))
			{
				$search_data['sql_sort'] = "DESC";
			}
			
			if(isset($search_data['filter']) && $search_data['filter'] != "")
			{
				if(isset($search_data['filterBy']) && $search_data['filterBy'] != "")
				{
					if($search_data['filter'] == 'code')
					{
						$search_data['filter'] = '`teacher`.`code`';
					}
					
					if($search_data['filter'] == 'status')
					{
						$search_data['filter'] = '`student`.`status`';
						
						if($search_data['filterBy'] == 'Inactive')
						{
							$status = strtolower($search_data['filterBy']);
							$search_data['filterBy'] = strtolower($search_data['filterBy']);
							
						}
						
						if($search_data['filterBy'] == 'Removed')
						{
							$search_data['filterBy'] = strtolower($search_data['filterBy']);
							$status = strtolower($search_data['filterBy']);
						
							$where = '';
						}
						
					}
					
					$where .= ($where == "" ? " WHERE " : " AND ") . $search_data['filter'] ." = " . $this->db->escape($search_data['filterBy']) . " ";
					
				}
			}
			
			if(isset($search_data['search']) && $search_data['search'] != "")
			{
				$where .= ($where == "" ? " WHERE " : " AND ") . " ( `user`.`phone` LIKE " . $this->db->escape("%".$search_data['search']."%") . " OR `user`.`username` LIKE " . $this->db->escape("%".$search_data['search']."%")  . " OR `student`.`status` LIKE " . $this->db->escape("%".$search_data['search']."%") . " ) ORDER BY " .  $orderby . " " . $search_data['sql_sort'] ;
			}
			else
			{
				$where .= " ORDER BY " . $orderby . " " . $search_data['sql_sort'] ;
			}
			
		}
		else
		{
			$where .= " ORDER BY " . $orderby . " DESC";
		}
		
		
		if($status != 'removed')
		{
			$sql = "SELECT `class_table`.`class_key`,`class_table`.`class_id`,`student`.`id`,`user`.`username`,`user`.`phone`,`student`.`user_id`,`student`.`intake`,`student`.`status`,`student`.`student_key`, `student`.`create_date`, `student`.`modify_date`,`packages`.`package_name`,`packages`.`package_credit`, `student_credit`.`total_credit`,`student_credit`.`used_credit`,`student_credit`.`balance_credit`,`class`.`teacher_id`,`teacher`.`code`,`student`.`current_teacher_id` FROM `student` LEFT JOIN `user` ON `user`.`id` = `student`.`user_id` LEFT JOIN `packages` ON `student`.`current_package_id` = `packages`.`id` LEFT JOIN ( SELECT MAX(`id`) as `class_id`,`student_id`,`class_key` FROM `class` WHERE `status` = " . $this->db->escape($status) . " GROUP BY `student_id` ) AS `class_table` ON `class_table`.`student_id` = `student`.`id`  LEFT JOIN `class` ON `class_table`.`class_id` = `class`.`id` LEFT JOIN `teacher` ON `class`.`teacher_id` = `teacher`.`id` LEFT JOIN `student_credit` ON `student_credit`.`student_id` = `student`.`id` " . $where ;
		}
		else
		{
			$sql = "SELECT `class_table`.`class_key`,`class_table`.`class_id`,`student`.`id`,`user`.`username`,`user`.`phone`,`student`.`user_id`,`student`.`intake`,`student`.`status`,`student`.`student_key`, `student`.`create_date`, `student`.`modify_date`,`packages`.`package_name`,`packages`.`package_credit`,`class`.`teacher_id`,`teacher`.`code`,`student`.`current_teacher_id`, `removed_student`.`removed_date`,`removed_student`.`removed_reason` FROM `student` LEFT JOIN `user` ON `user`.`id` = `student`.`user_id` LEFT JOIN `packages` ON `student`.`current_package_id` = `packages`.`id` LEFT JOIN ( SELECT MAX(`id`) as `class_id`,`student_id`,`class_key` FROM `class` WHERE `status` = " . $this->db->escape($status) . " GROUP BY `student_id` ) AS `class_table` ON `class_table`.`student_id` = `student`.`id`  LEFT JOIN `class` ON `class_table`.`class_id` = `class`.`id` LEFT JOIN `teacher` ON `class`.`teacher_id` = `teacher`.`id` LEFT JOIN `removed_student` ON `removed_student`.`student_id` = `student`.`id` " . $where ;
		}
		
		$query = $this->db->query($sql);
		
		$data['total_rows'] = $query->num_rows();

		$config['base_url'] = base_url() . 'secure/list/student/' . $this->uri->segment(4);
		$config['uri_segment'] = 5;
		$config['total_rows'] = $data['total_rows'];
		$config['per_page'] = 10;
		
		$this->pagination->initialize($config);

		$data['pagination'] = $this->pagination->create_links();
		$data['num_per_page'] = $config['per_page'];
		
		$limit = ' LIMIT 0, ' . $config['per_page'];
		
		if($data['total_rows'] > 0) {
			if($this->uri->segment($config['uri_segment']) AND is_numeric($this->uri->segment($config['uri_segment'])))
			{
				$limit = ' LIMIT ' . $this->uri->segment($config['uri_segment']) . ', ' . $config['per_page'];
			}
			else
			{
				$limit = ' LIMIT 0, ' . $config['per_page'];
			}
		}
		
		if($is_download === true)
		{
			if($status != 'removed')
			{
				$sql_query = "SELECT `class_table`.`class_key`,`class_table`.`class_id`,`student`.`id`,`user`.`username`,`user`.`phone`,`student`.`user_id`,`student`.`intake`,`student`.`status`,`student`.`student_key`, `student`.`create_date`, `student`.`modify_date`,`packages`.`package_name`,`packages`.`package_credit`, `student_credit`.`total_credit`,`student_credit`.`used_credit`,`student_credit`.`balance_credit`,`class`.`teacher_id`,`teacher`.`code`,`student`.`current_teacher_id` FROM `student` LEFT JOIN `user` ON `user`.`id` = `student`.`user_id` LEFT JOIN `packages` ON `student`.`current_package_id` = `packages`.`id` LEFT JOIN ( SELECT MAX(`id`) as `class_id`,`student_id`,`class_key` FROM `class` WHERE `status` = " . $this->db->escape($status) . " GROUP BY `student_id` ) AS `class_table` ON `class_table`.`student_id` = `student`.`id`  LEFT JOIN `class` ON `class_table`.`class_id` = `class`.`id` LEFT JOIN `teacher` ON `class`.`teacher_id` = `teacher`.`id` LEFT JOIN `student_credit` ON `student_credit`.`student_id` = `student`.`id` " . $where ;
			}
			else
			{
				$sql_query = "SELECT `class_table`.`class_key`,`class_table`.`class_id`,`student`.`id`,`user`.`username`,`user`.`phone`,`student`.`user_id`,`student`.`intake`,`student`.`status`,`student`.`student_key`, `student`.`create_date`, `student`.`modify_date`,`packages`.`package_name`,`packages`.`package_credit`,`class`.`teacher_id`,`teacher`.`code`,`student`.`current_teacher_id`,`removed_student`.`removed_date`,`removed_student`.`removed_reason`,`removed_student`.`removed_source`,`user_info`.`occupation` FROM `student` LEFT JOIN `user` ON `user`.`id` = `student`.`user_id` LEFT JOIN `packages` ON `student`.`current_package_id` = `packages`.`id` LEFT JOIN ( SELECT MAX(`id`) as `class_id`,`student_id`,`class_key` FROM `class` WHERE `status` = " . $this->db->escape($status) . " GROUP BY `student_id` ) AS `class_table` ON `class_table`.`student_id` = `student`.`id`  LEFT JOIN `class` ON `class_table`.`class_id` = `class`.`id` LEFT JOIN `teacher` ON `class`.`teacher_id` = `teacher`.`id` LEFT JOIN `removed_student` ON `removed_student`.`student_id` = `student`.`id` LEFT JOIN `user_info` ON `user_info`.`user_id` =  `student`.`user_id` " . $where ;
			}
		}
		else
		{
			if($status != 'removed')
			{
				$sql_query = "SELECT `class_table`.`class_key`,`class_table`.`class_id`,`student`.`id`,`user`.`username`,`user`.`phone`,`student`.`user_id`,`student`.`intake`,`student`.`status`,`student`.`student_key`, `student`.`create_date`, `student`.`modify_date`,`packages`.`package_name`,`packages`.`package_credit`, `student_credit`.`total_credit`,`student_credit`.`used_credit`,`student_credit`.`balance_credit`,`class`.`teacher_id`,`teacher`.`code`,`student`.`current_teacher_id` FROM `student` LEFT JOIN `user` ON `user`.`id` = `student`.`user_id` LEFT JOIN `packages` ON `student`.`current_package_id` = `packages`.`id` LEFT JOIN ( SELECT MAX(`id`) as `class_id`,`student_id`,`class_key` FROM `class` WHERE `status` = " . $this->db->escape($status) . " GROUP BY `student_id` ) AS `class_table` ON `class_table`.`student_id` = `student`.`id`  LEFT JOIN `class` ON `class_table`.`class_id` = `class`.`id` LEFT JOIN `teacher` ON `class`.`teacher_id` = `teacher`.`id` LEFT JOIN `student_credit` ON `student_credit`.`student_id` = `student`.`id` " . $where . $limit ;
			}
			else
			{
				$sql_query = "SELECT `class_table`.`class_key`,`class_table`.`class_id`,`student`.`id`,`user`.`username`,`user`.`phone`,`student`.`user_id`,`student`.`intake`,`student`.`status`,`student`.`student_key`, `student`.`create_date`, `student`.`modify_date`,`packages`.`package_name`,`packages`.`package_credit`,`class`.`teacher_id`,`teacher`.`code`,`student`.`current_teacher_id`,`removed_student`.`removed_date`,`removed_student`.`removed_reason` FROM `student` LEFT JOIN `user` ON `user`.`id` = `student`.`user_id` LEFT JOIN `packages` ON `student`.`current_package_id` = `packages`.`id` LEFT JOIN ( SELECT MAX(`id`) as `class_id`,`student_id`,`class_key` FROM `class` WHERE `status` = " . $this->db->escape($status) . " GROUP BY `student_id` ) AS `class_table` ON `class_table`.`student_id` = `student`.`id`  LEFT JOIN `class` ON `class_table`.`class_id` = `class`.`id` LEFT JOIN `teacher` ON `class`.`teacher_id` = `teacher`.`id` LEFT JOIN `removed_student` ON `removed_student`.`student_id` = `student`.`id` " . $where . $limit ;
			}
		}
		
		$data['query'] = $this->db->query($sql_query);
		
		$result = $data['query']->result();
		
		$student_ids = array_column($result, 'id');
		
		$rows = [];
		
		if($this->uri->segment(5) == "")
		{
			$j = 1;
			
		}
		else
		{
			$j = $this->uri->segment(5)+1;
		}
		
		foreach($result as $i=>$res)
		{
			$remarks = "";
			if(isset($res->current_teacher_id) && $res->current_teacher_id != '')
			{
				$teacher_id = $res->current_teacher_id;
			}
			else
			{
				$teacher_id = $res->teacher_id;
			}
			
			$sql_teacher = "SELECT * FROM `teacher` WHERE `id` = " . $this->db->escape($teacher_id) . " LIMIT 1";
			$query_teacher = $this->db->query($sql_teacher);
			
			$action = "";
			
			if($query_teacher->num_rows() > 0)
			{
				$teacher_data = $query_teacher->row();
				
				$action = '<div class="btn-group" role="group" aria-label="Basic example"> <a href="/secure/list/student_lesson_score/'.encrypt_data(array('search'=>$res->username)).'" class="btn btn-success btn-td">score list</a>';
				$action .= ' <a href="/secure/lesson_score_form/'.$res->class_key.'/false" class="btn btn-info btn-td">manual score</a></div>';
			}
			
			if($res->status != 'active')
			{
				if($res->status == 'inactive')
				{
					$inactive_sql = "SELECT * FROM `inactive_student` WHERE `student_id` = " . $this->db->escape($res->id) . " LIMIT 1";
					$query_inactive = $this->db->query($inactive_sql);
					
					$remarks = '';
					if($query_inactive->num_rows() > 0)
					{
						$inactive_data = $query_inactive->row();
						$table_status = $res->status . '<br>[' . $inactive_data->inactive_reason . ']';
						$remarks = $inactive_data->inactive_reason;
					}
					else
					{
						$table_status = $res->status;
					}
				}
				else
				{
					
					$removed_sql = "SELECT * FROM `removed_student` WHERE `student_id` = " . $this->db->escape($res->id) . " LIMIT 1";
					$query_removed = $this->db->query($removed_sql);
					
					$remarks = '';
					if($query_removed->num_rows() > 0)
					{
						$removed_data = $query_removed->row();
						$table_status = $res->status . '<br>[' . $removed_data->removed_reason . ']';
						$remarks = $removed_data->removed_reason;
					}
					else
					{
						$table_status = $res->status;
					}
				}
			}
			else
			{
				$table_status = $res->status;
			}
		
			$row = [
				'#' => $j++,
				'ID' => 'ST'.pad_zero($res->id),
				'Name' => '<a href="/secure/user_profile/'. encrypt_data($res->user_id) .'">'. $res->username .'</a><br> <small>[' . $res->phone . ']</small>',
				'Teacher' => isset($teacher_data->code) && $teacher_data->code != '' ? ucwords(strtolower($teacher_data->code)) : '-',
				'Package Name' => $res->package_name != '' ? $res->package_name : '-',
				'Credit' => $res->package_credit != '' && isset($res->balance_credit) ? $res->package_credit . '<br><span class="badge badge-info"> balance : ' . $res->balance_credit . '</span>' : '-',
				'Intake' => $res->intake != '' ? date("F Y", strtotime($res->intake)) : '-',
				'Register Date' => format_date($res->create_date),
				'Status' => isset($table_status) && $table_status != '' ? $table_status : '-',
				'Action' => $action,
			];
			
			if($status == 'removed')
			{
				unset($row['Credit']);
				unset($row['Status']);
				unset($row['Action']);
				unset($row['Action']);
				$row['Removed Date'] = isset($res->removed_date) && $res->removed_date != "" ? format_date($res->removed_date) : '';
				$row['Status'] = isset($res->removed_reason) && $res->removed_reason != '' ? $res->removed_reason : '-';
				$row['Action'] = $action;
			}
			
			if($is_download)
			{
				if($status == 'removed')
				{
					unset($row);
					
					$sql_last_lesson = "SELECT * FROM `lesson` WHERE `student_id` = " . $this->db->escape($res->id) . " ORDER BY `date` DESC LIMIT 1";
					$query_last_lesson = $this->db->query($sql_last_lesson)->row();
				
					$row['ID'] = 'ST'.pad_zero($res->id);
					$row['Nama Pelajar'] =  ucwords(strtolower($res->username));
					$row['Nombor Telefon'] = $res->phone . "\t";
					$row['Pekerjaan'] = $res->occupation;
					$row['Nama Guru'] = isset($teacher_data->code) && $teacher_data->code != '' ? ucwords(strtolower($teacher_data->code)) : '-';
					$row['Intake'] = $res->intake != '' ? format_date($res->intake) : '-';
					$row['Tarikh Join CQ'] = format_date($res->create_date);
					$row['Tarikh Berhenti CQ'] = format_date($res->removed_date);
					$row['Modul Terakhir'] = isset($query_last_lesson->module_name) && $query_last_lesson->module_name != '' ? $query_last_lesson->module_name : '-';
					$row['Tajuk Modul'] = isset($query_last_lesson->module_chapter) && $query_last_lesson->module_chapter != '' ? $query_last_lesson->module_chapter : '-';
					$row['Sebab Berhenti'] = isset($res->removed_reason) && $res->removed_reason != '' ? $res->removed_reason : '-';
					$row['Sumber Maklumat Berhenti'] = isset($res->removed_source) && $res->removed_source != '' ? $res->removed_source : '-';
					$row['Package Name'] = $res->package_name != '' ? $res->package_name : '-';
					$row['Status'] = $res->status;
				}
				else
				{
					$row['Name'] = $res->username;
					unset($row['#']);
					unset($row['Action']);
					unset($row['Credit']);
					unset($row['Status']);
					$row['Credit'] = $res->package_credit;
					$row['Remarks'] = $remarks;
					$row['Status'] = $res->status;
					$row['Modify Date'] = $res->modify_date != NULL ? format_date($res->modify_date) : "-";
				}
			}
			
			$rows[] = $row;
			unset($class_data);
			unset($teacher_data);
		}
		
		if($is_download)
		{
			if(isset($search_data['filter']) && $search_data['filter'] == '`student`.`status`')
			{
				download_csv($rows, 'cqms_'.$search_data['filterBy'].'_student_list_'.today().'.csv');
			}
			else
			{
				download_csv($rows, 'cqms_all_student_list_'.today().'.csv');
			}
			exit;
		}
		
		$filter = [
			'teacher.code' => 'Teacher Code',
			'student.intake' => 'Intake',
			'student.status' => 'Status',
		];
		

		$width = [ 
			'#' => 40,
			'ID' => 80,
			'Name' => 150,
			'Teacher' => 80,
			'Package Name' => 150,
			'Credit' => 100,
			'Status' => 100,
			'Intake' => 100,
			'Register Date' => 100,
			'Removed Date' => 100,
			'Action' => 100,
		];
		
		$center = [
			'Action',
			'Credit'
		];
		
		$data['actions'] = [
			'<a href="javascript:void();" class="btn btn-info download-button mr-2">Download</a>',
			'<a href="/secure/register_student" class="btn btn-info">Add New Student</a>',
		];
		
		
		$sort = [
		'ID' => '`student`.`id`',
		'Name' => '`user`.`username`',
		'Teacher' => '`teacher`.`code`',
		'Package Name' => '`packages`.`package_name`',
		'Credit' => '`packages`.`package_credit`',
		'Intake' => '`student`.`intake`',
		'Register Date' => '`student`.`create_date`',
		'Removed Date' => '`removed_student`.`removed_date`',
		'Status' => '`student`.`status`',
		];
		
		if($status == 'removed')
		{
			unset($sort['Status']);
			$sort['Status'] = '`removed_student`.`removed_reason`';
		}
		
		
		$data['total'] = $data['total_rows'];
		$data['rows'] = $rows;
		$data['width'] = $width;
		$data['align_center'] = $center;
		$data['sort'] = $sort;
		
		foreach($filter as $row=> $val)
		{
			$explodeFilter = explode('.',$row);
			$tableName = $explodeFilter[0];
			$columnName = $explodeFilter[1];
			
			
			
			$sql_query = "SELECT DISTINCT(`".$columnName."`) FROM `" . $tableName . "`";
			$query = $this->db->query($sql_query)->result();
			
			foreach($query as $a=>$b)
			{
				if($columnName == 'code')
				{
					$data['selectFilter'][$columnName][] = ucwords(strtolower($b->$columnName));
				}
				else
				{
					$data['selectFilter'][$columnName][] = ucwords($b->$columnName);
				}
				
			}
		}
		
		$filter = [
			'code' => 'Teacher Code',
			'intake' => 'Student Intake',
			'status' => 'Student Status',
		];
		
		$data['filter'] = $filter;
		
		return $data;
	}
	
	function open_registration_form($post = array())
	{
		if(isset($post) && sizeof($post) > 0)
		{
			/* Array
			(
				[student_name] => Ikhwan Salihin
				[student_email] => ikhwansalihin97@gmail.com
				[phone_country] => 60
				[phone] => 0193151362
				[package] => 33
				[intake] => 2022-08-01
				[occupation] => Government
				[gender] => male
				[dob] => 09/11/1997
				[marital_status] => single
				[address] => 250, Jalan Bunga Tanjung 2
				[state] => Selangor
				[country] => Malaysia
				[join_reason] => Join reason
				[goal] => Join goal
				[prev_experience] => Previous Experience
			) */
			
			if(isset($post['student_name']) && $post['student_name'] == '')
			{
				$response['result'] = false;
				$response['message'] = 'Student name empty, please fill in to proceed with registration.';
				return $response;
			}
			
			if(isset($post['student_email']) && $post['student_email'] != "")
			{
				if(!filter_var($post['student_email'], FILTER_VALIDATE_EMAIL)) {
					
					$response['result'] = false;
					$response['message'] = "Please enter valid email address to proceed with registration.";
					
					return $response;
				}
			}
			
			if(isset($post['phone']) && $post['phone'] != "" )
			{
				if($post['phone_country'] == '60')
				{
					$phone = format_phone_country($post['phone'],$post['phone_country']);
				}
				else
				{
					$phone = $post['phone'];
				}
				
				$phone_sql = "SELECT * FROM `user` WHERE `phone` = " . $this->db->escape($phone) . " LIMIT 1";
				$phone_query = $this->db->query($phone_sql);
				
				if($phone_query->num_rows() > 0 )
				{
					$response['result'] = false;
					$response['message'] = "Phone number is already registered, please use another number or contact administrator to resolve this issue.";
					
					return $response;
				}
				
				$process_phone = "SELECT * FROM `open_registration` WHERE `phone` = " . $this->db->escape($phone) . " LIMIT 1";
				$process_query = $this->db->query($process_phone);
				
				if($process_query->num_rows() > 0 )
				{
					$response['result'] = false;
					$response['message'] = "Phone number is already in process to register, please wait for your account to be registered or contact administrator if you never registered before.";
					
					return $response;
				}
				
			}
			else
			{
				$response['result'] = false;
				$response['message'] = "Phone number field blank, please fill in to proceed.";
				
				return $response;
			}
			
			
			
			if(!isset($post['intake']))
			{
				$response['result'] = false;
				$response['message'] = "No intake choosen, please choose desired intake to proceed.";
				
				return $response;
			}
			
			$db_data = array(
			'student_name'=>isset($post['student_name']) && $post['student_name'] != '' ? ucwords(strtolower($post['student_name'])) : '',
			'student_email'=>isset($post['student_email']) && $post['student_email'] != '' ? strtolower($post['student_email']) : '',
			'phone'=>isset($phone) && $phone != '' ? $phone : '',
			'intake'=>isset($post['intake']) && $post['intake'] != '' ? date("Y-m-01",strtotime(strtr($post['intake'], '/', '-'))) :'',
			'occupation'=>isset($post['occupation']) && $post['occupation'] != '' ? ucwords(strtolower($post['occupation'])) : '',
			'gender'=>isset($post['gender']) && $post['gender'] != '' ? ucwords(strtolower($post['gender'])) : '',
			'dob'=>isset($post['dob']) && $post['dob'] != '' ? date("Y-m-d",strtotime(strtr($post['dob'], '/', '-'))) :'',
			'marital_status'=>isset($post['marital_status']) && $post['marital_status'] != '' ? ucwords(strtolower($post['marital_status'])) : '',
			'address'=>isset($post['address']) && $post['address'] != '' ? trim($post['address']) : '',
			'state'=>isset($post['state']) && $post['state'] != '' ? trim(ucwords(strtolower($post['state']))) : '',
			'country'=>isset($post['country']) && $post['country'] != '' ? trim(ucwords(strtolower($post['country']))) : '',
			'join_reason'=>isset($post['join_reason']) && $post['join_reason'] != '' ? trim(ucwords(strtolower($post['join_reason']))) : '',
			'goal'=>isset($post['goal']) && $post['goal'] != '' ? trim(ucwords(strtolower($post['goal']))) : '',
			'prev_experience'=>isset($post['prev_experience']) && $post['prev_experience'] != '' ? trim(ucwords(strtolower($post['prev_experience']))) : '',
			'status'=>'process',
			'create_date'=>date("Y-m-d H:i:s"),
			);
			
			$rs = $this->db->insert("open_registration",$db_data);
			
			if(isset($rs) && $rs == true)
			{
				$response['result'] = true;
				$response['message'] = 'Thank You ! Registration completed successfully. We are going to process your registration and will be in contact for class onboarding.';
				return $response;
			}
			else
			{
				$response['result'] = false;
				$response['message'] = 'Please fill in the form in order to register.';
				return $response;
			}
		}
		else
		{
			$response['result'] = false;
			$response['message'] = 'Please fill in the form in order to register.';
			return $response;
			
		}
	}
	

}