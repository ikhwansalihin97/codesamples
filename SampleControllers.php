<?php

class SampleControllers extends CI_Controller{

	function __construct(){
		parent::__construct();
		
		security_checking(array('root','admin','teacher','sales','student'));
		
		if($this->uri->segment(2) == "home" && $this->input->post())
		{
			$search_data = array(
				'search' => trim($this->input->post('search_name')),
				'sql_sort_column' => trim($this->input->post('sql_sort_column')),
				'sql_sort' => trim($this->input->post('sql_sort'))
			);
			
			redirect('secure/home/'. encrypt_data($search_data));
		}
		
		if($this->uri->segment(2) == "list" && $this->input->post())
		{
			$search_data = array(
				'search' => trim($this->input->post('search_name')),
				'filter' => trim($this->input->post('filter')),
				'filterBy' => trim($this->input->post('filterBy')),
				'sql_sort_column' => trim($this->input->post('sql_sort_column')),
				'sql_sort' => trim($this->input->post('sql_sort')),
				'download' => trim($this->input->post('download')),
				'download_type' => trim($this->input->post('download_type'))
			);
			
			redirect('secure/list/'. $this->uri->segment(3) .'/'.encrypt_data($search_data));
		}
		
		if($this->uri->segment(2) == "user_profile" && $this->input->post())
		{
			$search_data = array(
				'filter' => trim($this->input->post('filter')),
				'filterBy' => trim($this->input->post('filterBy')),
				'sql_sort_column' => trim($this->input->post('sql_sort_column')),
				'sql_sort' => trim($this->input->post('sql_sort')),
				'download' => trim($this->input->post('download'))
			);
			
			redirect('secure/user_profile/'. $this->uri->segment(3) .'/'.encrypt_data($search_data));
		}
		
	}


	function index(){

		redirect('/secure/home');
	}

	function home($encrypted = "")
	{
		
		if($encrypted == "")
		{
			$encrypted = encrypt_data(array());
			redirect('secure/home/'. $encrypted);
		}
		else
		{	
			$search_data = decrypt_data($encrypted);
			
			if(is_array($search_data))
			{
				if(isset($search_data['sql_sort_column']) != '') 
				{
					if($search_data['sql_sort'] == 'alpha-up')
					{
						$search_data['sql_sort'] = 'ASC';
					}
					else
					{
						$search_data['sql_sort'] = "DESC";
					}
						
				}
				
				if(user()->group_type == 'admin' OR user()->group_type == 'root'){
			

				}
		
				if(user()->group_type == 'teacher'){
					$teacher_id = user()->group_id;
					$teacher = $this->db->where('id', $teacher_id)
										->get('teacher')
										->row();
					$data['teacher'] = $teacher;
					$data['total_lesson_credit'] = $this->Teacher->total_lesson($teacher->id);
					$data['arr_data'] = $this->Teacher->my_student($teacher->id,$search_data,$teacher->teacher_key);
					$data['students'] = $data['arr_data']['students'];
					$data['total_students'] = $data['arr_data']['total_rows'];
					$data['class_summary'] = $this->Teacher->class_summary($teacher->id);
					$data['canceled_class'] = $this->Teacher->canceled_class($teacher->id);
				}
				
				if(user()->group_type == 'student')
				{
					$student_id = user()->group_id;
					$user_info = $this->db->where('user.id', user()->id)
								->join('user_info', 'user_info.user_id = user.id', 'LEFT')
								->get('user')
								->row();
					$student_credit = $this->db->where('id', $student_id)
									->get('student_credit')
									->row();
					$student_info = $this->db->where('student_id', $student_id)
									->get('student_info')
									->row();
					$data['user_info'] = $user_info;
					$data['user_info']->id = user()->id;
					$data['student_credit'] = $student_credit;
					$data['student_info'] = $student_info;
				}
				
				
				if(isset($search_data['sql_sort_column']) != '') 
				{
					if($search_data['sql_sort'] == 'ASC')
					{
						$search_data['sql_sort'] = 'alpha-down';
					}
					else
					{
						$search_data['sql_sort'] = "alpha-up";
					}
				}
					
				$data['search_data'] = $search_data;
			}
			else
			{
				redirect('secure/home');
			}
		}
		
		$data['title'] = 'App Home';
		$data['brief'] = 'CQMS Application home page.';

		$month = date('F');

		$stats = [
			'lesson' => ['label'=>$month.' Lesson', 'ch'=>false, 'rm'=>false],
			'payment' => ['label'=>$month.' Payment', 'ch'=>false, 'rm'=>false],
			'pending_payout' => ['label'=>$month.' Pending Payout', 'ch'=>false, 'rm'=>false],
			'revenue' => ['label'=>$month.' Revenue', 'ch'=>false, 'rm'=>false],
			'new_student' => ['label'=>$month.' New Student', 'total'=>false],
			'total_student' => ['label'=>$month.' Total Student', 'total'=>false],
		];

		$data['stats'] = $stats;

		$data["menu"] = "dashboard";
		$data["submenu"] = "CQMS Application home page";

		$this->load->view('metronic/secure/m_home', $data);
	}

	
	public function registration_form()
	{
		$data['title'] = 'Registration';
		$data['brief'] = 'New Student Registration Form';
		
		if($_POST)
		{
			$rs = $this->User->open_registration_form($_POST);
			
			if(isset($rs['result']) && $rs['result'] == true)
			{
				set_message($rs['message'],'success');
				redirect('open/login');
			}
			else
			{
				$data['form_data'] = $_POST;
				set_message($rs['message'],'danger');
				
			}
		}
		
		$data['country_iso'] = $this->db->query("SELECT * FROM `country_iso` WHERE `IMPORTANCE` IS NOT NULL ORDER BY `IMPORTANCE` ASC")->result();
		// $data['package_list'] = $this->db->query("SELECT * FROM `packages` WHERE `status` = 'available' AND `student_registration` = 'available' ORDER BY `id` ASC")->result();
		
		$this->load->view('metronic/registration/registration_form_body_v.php',$data);
	}
	
	
	function list($modelKey = NULL, $encrypted = ""){
		
		
		if($encrypted == "")
		{
			$encrypted = encrypt_data(array());
			redirect('secure/list/'. $modelKey .'/'. $encrypted);
		}
		else
		{	
			$search_data = decrypt_data($encrypted);
			
			if(is_array($search_data))
			{
				if(isset($search_data['sql_sort_column']) != '') 
				{
					if($search_data['sql_sort'] == 'up')
					{
						$search_data['sql_sort'] = 'ASC';
					}
					else
					{
						$search_data['sql_sort'] = "DESC";
					}
				}
				
				
				$key = $modelKey;
		
				$models = [
					'student' => 'SampleUserModel',
				];
				
				$model = $models[$key];
				
				if($key == 'lesson_update_request')
				{
					$is_admin = User()->group_type == 'root' || User()->group_type == 'admin';
					
					if(!$is_admin)
					{
						set_toastr_message('Access denied, user unauthorized.','error');
						redirect('secure/home');
					}
				}
				
				$method = $key.'_list';
				
				$data = $this->$model->$method($search_data);
				
				if($data == false)
				{
					redirect('secure');
				}
				
				if(isset($search_data['sql_sort_column']) != '') 
				{
					if($search_data['sql_sort'] == 'ASC')
					{
						$search_data['sql_sort'] = 'down';
					}
					else
					{
						$search_data['sql_sort'] = "up";
					}
				}
			
				$data['search_data'] = $search_data;
			}
			else
			{
				redirect('secure/list/'. $modelKey .'/'. $encrypted);
			}
		}
		
		if(str_contains($key,'student'))
		{
			$data["menu"] = "student";
			
			if(str_contains($method,'student_list'))
			{
				$data["submenu"] = "student_list";
			}
			
			
		}
		
		$this->load->view('metronic/secure/m_list', $data);
	}

	
}