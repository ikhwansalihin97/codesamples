<?php
$this->load->view('metronic/secure/m_header');
?>
	<!--begin::Container-->
	<div class="d-flex flex-row flex-column-fluid container-fluid">

		<!--begin::Content Wrapper-->
		<div class="main d-flex flex-column flex-row-fluid">

			<!--[html-partial:include:{"file":"partials/_subheader/subheader-v1.html"}]/-->
			<!--begin::Subheader-->
			<div class="subheader py-2 py-lg-6" id="kt_subheader">
				<div class="w-100 d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">

					<!--begin::Info-->
					<div class="d-flex align-items-center flex-wrap mr-1">

						<!--begin::Page Heading-->
						<div class="d-flex align-items-baseline flex-wrap mr-5">

							<!--begin::Page Title-->
							<h5 class="text-dark font-weight-bold my-1 mr-5">Apps Home</h5>

							<!--end::Page Title-->

							<!--begin::Breadcrumb-->
							<ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
								<li class="breadcrumb-item text-muted">
									<a href="" class="text-muted">CQMS Application for homepage</a>
								</li>
								<li class="breadcrumb-item text-muted">
									<a href="" class="text-muted"><?php echo $title;?></a>
								</li>
							</ul>

							<!--end::Breadcrumb-->
						</div>

						<!--end::Page Heading-->
					</div>

					<!--end::Info-->
					<div class="d-flex align-items-center">
						<?php
							// if($actions){
								// echo implode(' ', $actions);
							// }
						?>
					</div>
					
				</div>
			</div>

			<!--end::Subheader-->
			
			
			<div class="content flex-column-fluid" id="kt_content">
				<!--begin::Notice-->
				<?php
				if(user()->group_type == 'admin' || user()->group_type == 'root' || user()->group_type == 'sales'){
				?>
				
				<div class="alert alert-custom alert-white alert-shadow fade show gutter-b" role="alert">
					<div class="alert-icon">
						<span class="svg-icon svg-icon-primary svg-icon-xl">
							<!--begin::Svg Icon | path:assets/media/svg/icons/Tools/Compass.svg-->
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
								<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
									<rect x="0" y="0" width="24" height="24" />
									<path d="M7.07744993,12.3040451 C7.72444571,13.0716094 8.54044565,13.6920474 9.46808594,14.1079953 L5,23 L4.5,18 L7.07744993,12.3040451 Z M14.5865511,14.2597864 C15.5319561,13.9019016 16.375416,13.3366121 17.0614026,12.6194459 L19.5,18 L19,23 L14.5865511,14.2597864 Z M12,3.55271368e-14 C12.8284271,3.53749572e-14 13.5,0.671572875 13.5,1.5 L13.5,4 L10.5,4 L10.5,1.5 C10.5,0.671572875 11.1715729,3.56793164e-14 12,3.55271368e-14 Z" fill="#000000" opacity="0.3" />
									<path d="M12,10 C13.1045695,10 14,9.1045695 14,8 C14,6.8954305 13.1045695,6 12,6 C10.8954305,6 10,6.8954305 10,8 C10,9.1045695 10.8954305,10 12,10 Z M12,13 C9.23857625,13 7,10.7614237 7,8 C7,5.23857625 9.23857625,3 12,3 C14.7614237,3 17,5.23857625 17,8 C17,10.7614237 14.7614237,13 12,13 Z" fill="#000000" fill-rule="nonzero" />
								</g>
							</svg>
							<!--end::Svg Icon-->
						</span>
					</div>
					<div class="alert-text">CQMS Application home page</div>
				</div>
				<!--end::Notice-->
				<!--begin::Card-->
				<div class="row">
					<div class="col-md-12">
						<div class="card card-custom gutter-b">
							<div class="card-header">
								<div class="card-title">
									<h3 class="card-label"><?php echo $title;?></h3>
								</div>
							</div>
							<div class="card-body">
								
									<!--begin::Accordion-->
									<div class="accordion accordion-toggle-arrow" id="accordionExample4">
										<div class="card">
											<div class="card-header" id="headingOne4">
												<div class="card-title" data-toggle="collapse" data-target="#collapseOne4">
												<i class="flaticon2-avatar"></i>Manage Student</div>
											</div>
											<div id="collapseOne4" class="collapse show" data-parent="#accordionExample4">
												<div class="card-body">
													<a href="/secure/register_student" class="btn btn-primary mb-2">Register New Student</a>
													<a href="/secure/list/register_review" class="btn btn-primary mb-2">Student Registration Review</a>
													<a href="/secure/list/student" class="btn btn-primary mb-2">All Student List</a>
													<a href="/secure/list/student_lesson_score" class="btn btn-primary mb-2">View Student Score</a>
													<a href="/secure/list/lesson_update_request" class="btn btn-primary mb-2">Lesson Update Requested</a>
													<a href="/secure/list/burn_credit" class="btn btn-primary mb-2">Burn Credit</a>
													<a href="/secure/list/class_canceled" class="btn btn-primary mb-2">Canceled Class List</a>
													<a href="/secure/list/payments" class="btn btn-primary mb-2">Payment List</a>
												</div>
											</div>
										</div>
										<div class="card">
											<div class="card-header" id="headingTwo4">
												<div class="card-title collapsed" data-toggle="collapse" data-target="#collapseTwo4">
												<i class="flaticon-presentation"></i>Manage Teacher</div>
											</div>
											<div id="collapseTwo4" class="collapse" data-parent="#accordionExample4">
												<div class="card-body">
													<a href="/secure/list/payout" data-pageUrl="list/payout" class="btn btn-primary mb-2">Manage Teacher Payout</a>
													<a href="/open/custom_payout_list" target="_blank" class="btn btn-primary mb-2">Custom Teacher Payout</a>
													<a href="/secure/list/report_link?page=1" class="btn btn-primary mb-2">Teacher Report Links</a>
													<a href="/secure/teacher_form_simple" class="btn btn-primary mb-2">Add New Teacher</a>
												</div>
											</div>
										</div>
										<div class="card">
											<div class="card-header" id="headingThree4">
												<div class="card-title collapsed" data-toggle="collapse" data-target="#collapseThree4">
												<i class="flaticon-open-box"></i>Manage Modules & Packages</div>
											</div>
											<div id="collapseThree4" class="collapse" data-parent="#accordionExample4">
												<div class="card-body">
													<a href="/secure/list/modules" class="btn btn-primary mb-2">Modules List</a>
													<a href="/secure/form_modules" class="btn btn-primary mb-2">Add New Module</a>
													<a href="/secure/list/packages" class="btn btn-primary mb-2">Packages List</a>
													<a href="/secure/form_packages" class="btn btn-primary mb-2">Add New Package</a>
												</div>
											</div>
										</div>
										<?php if(is_wabot()):?>
										<div class="card">
											<div class="card-header" id="headingThree4">
												<div class="card-title collapsed" data-toggle="collapse" data-target="#wabotMenu">
												<i class="flaticon-open-box"></i>Manage Whatsapp</div>
											</div>
											<div id="wabotMenu" class="collapse" data-parent="#wabotMenu">
												<div class="card-body">
													<a href="/secure/list/whatsapp_queue" class="btn btn-info mb-2">Blasted Message List</a>
													<a href="/secure/whatsapp_blast_form" class="btn btn-info mb-2">Create New Blast</a>
													<a href="/secure/list/blast_phone" class="btn btn-info mb-2">Phone No List</a>
													<a href="/secure/blast_phone_form" class="btn btn-info mb-2">Add New Phone</a>
													<a href="/secure/wabot_settings" class="btn btn-info mb-2">Wabot Settings</a>
												</div>
											</div>
										</div>
										<?php endif;?>
									</div>
									<!--end::Accordion-->
								
								
								
							</div>
						</div>
					</div>
				</div>
				<?php
				}
				?>
				<!--end::Card-->
				<?php
				if(user()->group_type == 'teacher')
				{
				?>
				
				<?php

					$total_used_ch = $total_remain_ch = 0;
					
					foreach($students as $stu){
						$stu = (object)$stu;
						$total_used_ch += $stu->used_ch;
						$total_remain_ch += $stu->remaining_ch;
					}
					
					$total_used_rm = $total_lesson_credit->credit * config('teacher_rm_per_ch');
					$total_remain_rm = $total_remain_ch * config('teacher_rm_per_ch');
					
				?>
				
				<div class="row">
					
					<div class="col-md-12">
						<!--begin::Card-->
						<div class="card card-custom gutter-b">
							<div class="card-header">
								<div class="card-title">
									<h3 class="card-label">My Students</h3>
								</div>
								<div class="card-toolbar">
									<?php
									$urlAction = base_url() . "secure/home";
									?>
									<form action ="<?php echo isset($urlAction) && $urlAction != '' ? $urlAction : '#';?>" method="POST" class="search-form">
											<div class="input-group">
												<input type="text" class="form-control" name="search_name" value="<?php echo isset($search_data["search"]) ? $search_data['search'] : '';?>" placeholder="Search for...">
												<input type="hidden" name="sql_sort" value="<?php echo isset($search_data["sql_sort"]) ? $search_data["sql_sort"] : '';?>" />
												<input type="hidden" name="sql_sort_column" value="<?php echo isset($search_data["sql_sort_column"]) ? $search_data["sql_sort_column"] : '';?>" class="sql-sort-column" />
												<div class="input-group-append">
													<button class="btn btn-success" style="z-index:0;" type="submit">Go!</button>
												</div>
											</div>
									</form>
								</div>
							</div>
							<div class="card-body">
								<!--begin::Example-->
								<div class="row justify-content-end mb-5">
									<a class="btn btn-outline-success btn-wide mr-6" href="<?php echo base_url() . "secure/home";?>">Clear Filter <i class="flaticon-interface-1"></i></a>
								</div>
								<div class="example mb-10">
									<div class="example-preview">
										<div class="hide-mobile">
											<div class="table-responsive">
												<table class="table table-bordered table-striped"> 	
													<thead>
														<tr>
															
															<th >
																<a href="javascript:void(0)" class="tbl-sorting" data-col="student_id" style="text-decoration:none;color:#3F4254;"> Student ID <span style="text-decoration:none;margin-left:5px;"> <i class="fa fa-sort<?php echo isset($search_data["sql_sort"]) && $search_data["sql_sort_column"] == "student_id" ? "-".strtolower($search_data["sql_sort"]) : "";?> text-dark"> </i> </span></a>
															</th>
															<th style="width: 210px">
																<a href="javascript:void(0)" class="tbl-sorting" data-col="username" style="text-decoration:none;color:#3F4254;"> Student Name <span style="text-decoration:none;margin-left:5px;"> <i class="fa fa-sort<?php echo isset($search_data["sql_sort"]) && $search_data["sql_sort_column"] == "username" ? "-".strtolower($search_data["sql_sort"]) : "";?> text-dark"> </i> </span></a>
															</th>
															<th>
																<a href="javascript:void(0)" class="tbl-sorting" data-col="status" style="text-decoration:none;color:#3F4254;"> Status <span style="text-decoration:none;margin-left:5px;"> <i class="fa fa-sort<?php echo isset($search_data["sql_sort"]) && $search_data["sql_sort_column"] == "status" ? "-".strtolower($search_data["sql_sort"]) : "";?> text-dark"> </i> </span></a>
															</th>
															<th>
																<a href="javascript:void(0)" class="tbl-sorting" data-col="last_lesson" style="text-decoration:none;color:#3F4254;"> Last Lesson <span style="text-decoration:none;margin-left:5px;"> <i class="fa fa-sort<?php echo isset($search_data["sql_sort"]) && $search_data["sql_sort_column"] == "last_lesson" ? "-".strtolower($search_data["sql_sort"]) : "";?> text-dark"> </i> </span></a>
															</th>
															<th>
																<a href="javascript:void(0)" class="tbl-sorting" data-col="used_credit" style="text-decoration:none;color:#3F4254;"> Credit Used <span style="text-decoration:none;margin-left:5px;"> <i class="fa fa-sort<?php echo isset($search_data["sql_sort"]) && $search_data["sql_sort_column"] == "used_credit" ? "-".strtolower($search_data["sql_sort"]) : "";?> text-dark"> </i> </span></a>
															</th>
															<th>
																<a href="javascript:void(0)" class="tbl-sorting" data-col="balance_credit" style="text-decoration:none;color:#3F4254;"> Remaining Credit <span style="text-decoration:none;margin-left:5px;"> <i class="fa fa-sort<?php echo isset($search_data["sql_sort"]) && $search_data["sql_sort_column"] == "balance_credit" ? "-".strtolower($search_data["sql_sort"]) : "";?> text-dark"> </i> </span></a>
															</th>
															<th style="width: 220px">Action</th>
														</tr>
													</thead>
													<tbody>
														<?php

															foreach($students as $stu){
																// ad($stu);
																$stu = (object)$stu;
																$action = [];
																$action[] = '<div class="btn-group" role="group" aria-label="Basic example">';
																if(!can_access('maintenance') AND $stu->remaining_ch > 0 AND $stu->status == 'active') $action[] = '<a href="/secure/lesson_score_form/'.$stu->class_key.'/false" class="btn btn-td btn-primary">New Lesson</a>';
																// if(!can_access('maintenance')) $action[] = '<a href="/secure/lesson_score_form/'.$stu->teacher_key.'/'.$stu->class_id.'" class="btn btn-td btn-success">New Score</a>';
																
																$action[] = '<a href="/secure/list/student_lesson_score/'.encrypt_data(array('search'=>$stu->username)).'" class="btn btn-td btn-success">Score List</a>';
																$action[] = '</div>';

																$latest = $stu->latest_lesson;
																if($latest == null) $latest = 'N/A';

																echo '<tr>';
																echo '<td style="vertical-align: middle;">SID-'.pad_zero($stu->student_id).'</td>';
																echo '<td style="vertical-align: middle;">'.$stu->name.'</td>';
																echo '<td style="vertical-align: middle;">'.ucfirst(strtolower($stu->status)).'</td>';
																echo '<td style="vertical-align: middle;">'.$latest.'</td>';
																echo '<td style="vertical-align: middle;">'.$stu->used_ch.'</td>';
																echo '<td style="vertical-align: middle;">'.$stu->remaining_ch.'</td>';
																echo '<td style="vertical-align: middle;">'.implode(' ',$action).'</td>';
																echo '</tr>';
															}
														?>

														<?php if(empty($students)): ?>
															<tr>
																<td colspan="7" class="text-center">No data</td>
															</tr>
														<?php endif; ?>
													</tbody>
												</table>
											</div>
										</div>
										<div class="show-mobile">
											<?php 
											// ad($students);
											if(empty($students)){
												echo '<div class="card card-custom wave wave-animate wave-danger mb-8 mb-lg-0">
														 <div class="card-body">
														  <div class="d-flex align-items-center p-5">
														   <div class="mr-6">
															<span class="svg-icon svg-icon-danger svg-icon-4x">
															<!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\legacy\metronic\theme\html\demo8\dist/../src/media/svg/icons\General\Sad.svg-->
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<rect x="0" y="0" width="24" height="24"/>
																	<rect fill="#000000" opacity="0.3" x="2" y="2" width="20" height="20" rx="10"/>
																	<path d="M6.16794971,14.5547002 C5.86159725,14.0951715 5.98577112,13.4743022 6.4452998,13.1679497 C6.90482849,12.8615972 7.52569784,12.9857711 7.83205029,13.4452998 C8.9890854,15.1808525 10.3543313,16 12,16 C13.6456687,16 15.0109146,15.1808525 16.1679497,13.4452998 C16.4743022,12.9857711 17.0951715,12.8615972 17.5547002,13.1679497 C18.0142289,13.4743022 18.1384028,14.0951715 17.8320503,14.5547002 C16.3224187,16.8191475 14.3543313,18 12,18 C9.64566871,18 7.67758127,16.8191475 6.16794971,14.5547002 Z" fill="#000000" transform="translate(12.000000, 15.499947) scale(1, -1) translate(-12.000000, -15.499947) "/>
																</g>
															</svg>
															<!--end::Svg Icon-->
															</span>
														   </div>
														   <div class="d-flex flex-column">
															<a href="#" class="text-dark text-hover-primary font-weight-bold font-size-h4 mb-3">
															No Students Available
															</a>
															<div class="text-dark-75">
															Teacher currently have no students registered.
															</div>
														   </div>
														  </div>
														 </div>
														</div>';
											}
											else
											{
												$count = 0;
												foreach($students as $stu)
												{
													echo isset($count) && $count == 0 ? '<div class="row">' :'';
													$stu = (object)$stu;
													$action = [];
													
													$action[] = '<div class="btn-group" role="group" aria-label="Basic example">';
													if(!can_access('maintenance') AND $stu->remaining_ch > 0 AND $stu->status == 'active') $action[] = '<a href="/secure/lesson_score_form/'.$stu->class_key.'/false" class="btn btn-td btn-primary">New Lesson</a>';
													// if(!can_access('maintenance')) $action[] = '<a href="/secure/lesson_score_form/'.$stu->teacher_key.'/'.$stu->class_id.'" class="btn btn-td btn-success">New Score</a>';
													
													$action[] = '<a href="/secure/list/student_lesson_score/'.encrypt_data(array('search'=>$stu->username)).'" class="btn btn-td btn-success">Score List</a>';
													$action[] = '</div>';
													
													$latest = $stu->latest_lesson;
													if($latest == null) $latest = 'N/A';
											?>
												
													<!--begin::Col-->
													<div class="col-12">
														<!--begin::Card-->
														
														<div class="card card-custom gutter-b card-stretch">
															<div class="card-header">
																<div class="card-title">
																	<h3 class="card-label"> <?php echo isset($stu->name) && $stu->name != "" ? $stu->name :'';?>
																</div>
															</div>
															<!--begin::Body-->
															<div class="card-body pt-4">
																
																<!--begin::Desc-->
																<p class="text-dark-75 font-weight-bolder mb-7">Status : <?php echo isset($stu->status) && $stu->status != "" ? ucfirst(strtolower($stu->status)) :'';?></p>
																<!--end::Desc-->
																<!--begin::Info-->
																<div class="mb-7">
																	<div class="d-flex justify-content-between align-items-center">
																		<span class="text-dark-75 font-weight-bolder mr-2">Last Lesson:</span>
																		<span class="text-muted text-hover-primary"><?php echo isset($latest) && $latest != "" ? $latest :'';?></span>
																	</div>
																	<div class="d-flex justify-content-between align-items-center my-1">
																		<span class="text-dark-75 font-weight-bolder mr-2">Used Credit:</span>
																		<span class="text-muted text-hover-primary"><?php echo isset($stu->used_ch) && $stu->used_ch != "" ? $stu->used_ch :'0';?></span>
																	</div>
																	<div class="d-flex justify-content-between align-items-center">
																		<span class="text-dark-75 font-weight-bolder mr-2">Balance Credit:</span>
																		<span class="text-muted text-hover-primary"><?php echo isset($stu->remaining_ch) && $stu->remaining_ch != "" ? $stu->remaining_ch :'0';?></span>
																	</div>
																</div>
																<!--end::Info-->
																<?php echo isset($action) ? implode(' ',$action) :'';?>
															</div>
															<!--end::Body-->
														</div>
														<!--end::Card-->
													</div>
													<!--end::Col-->
												
											<?php
													$count++;
													echo isset($count) && $count == 10 ? '</div>' :'';
													if($count == 10)
													{
														$count = 0;
													}
												}
												
												if($count != 0 && $count < 10)
												{
													echo '</div>';
												}
											}
											?>
											
										</div>
										<div class="d-flex flex-wrap py-2 mr-3 justify-content-end">
										<?php echo isset($pagination) ? $pagination : ""; ?>
										</div>
									</div>
									
								</div>
								
								
							</div>
						</div>
						<!--end::Card-->
						
					</div>
					
				</div>
				
				<div class="row">
					<div class="col-md-4 col-sm-12">
					<!--begin::Mixed Widget 16-->
						<div class="card card-custom gutter-b card-stretch">
							<!--begin::Header-->
							<div class="alert alert-custom alert-white alert-shadow fade show" role="alert">
								<div class="alert-icon">
									<span class="svg-icon svg-icon-primary svg-icon-xl">
										<!--begin::Svg Icon | path:assets/media/svg/icons/Tools/Compass.svg-->
										<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<rect x="0" y="0" width="24" height="24"/>
												<circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10"/>
												<rect fill="#000000" x="11" y="10" width="2" height="7" rx="1"/>
												<rect fill="#000000" x="11" y="7" width="2" height="2" rx="1"/>
											</g>
										</svg>
										<!--end::Svg Icon-->
									</span>
								</div>
								<div class="alert-text"><code> 1 Credit  </code> = <code> 1 session </code> =  <code> 30 minute lesson  </code></div>
							</div>
							
							<div class="card-header border-0 ">
								<div class="card-title">
									<div class="card-label">
										<div class="font-weight-bolder">Credit Payout Information</div>
										<div class="font-size-sm text-muted mt-2">Total Credit : <?php echo $total_lesson_credit->credit+$total_remain_ch?></div>
									</div>
								</div>
							</div>
							<!--end::Header-->
							<!--begin::Body-->
							<div class="card-body d-flex flex-column">
								<!--begin::Chart-->
								<div class="d-flex justify-content-center">
									<div id="kt_mixed_widget_16_chart" style="height: 300px"></div>
								</div>
								<!--end::Chart-->
								<!--begin::Items-->
								<div class="mt-10 mb-5">
									<div class="row row-paddingless mb-10">
										<!--begin::Item-->
										<div class="col">
											<div class="d-flex align-items-center mr-2">
												<!--begin::Symbol-->
												<div class="symbol symbol-45 symbol-light-success mr-4 flex-shrink-0">
													<div class="symbol-label">
														<span class="svg-icon svg-icon-lg svg-icon-success">
															<!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Cart3.svg-->
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<rect x="0" y="0" width="24" height="24"/>
																	<path d="M9,10 L9,19 L10.1525987,19.3841996 C11.3761964,19.7920655 12.6575468,20 13.9473319,20 L17.5405883,20 C18.9706314,20 20.2018758,18.990621 20.4823303,17.5883484 L21.231529,13.8423552 C21.5564648,12.217676 20.5028146,10.6372006 18.8781353,10.3122648 C18.6189212,10.260422 18.353992,10.2430672 18.0902299,10.2606513 L14.5,10.5 L14.8641964,6.49383981 C14.9326895,5.74041495 14.3774427,5.07411874 13.6240179,5.00562558 C13.5827848,5.00187712 13.5414031,5 13.5,5 L13.5,5 C12.5694044,5 11.7070439,5.48826024 11.2282564,6.28623939 L9,10 Z" fill="#000000"/>
																	<rect fill="#000000" opacity="0.3" x="2" y="9" width="5" height="11" rx="1"/>
																</g>
															</svg>
															<!--end::Svg Icon-->
														</span>
													</div>
												</div>
												<!--end::Symbol-->
												<!--begin::Title-->
												<div>
													<div class="font-size-h4 text-dark-75 font-weight-bolder"><?php echo $total_lesson_credit->credit?> Credit</div>
													<div class="font-size-sm text-muted font-weight-bold mt-1">Credit Fulfilled</div>
												</div>
												<!--end::Title-->
											</div>
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="col">
											<div class="d-flex align-items-center mr-2">
												<!--begin::Symbol-->
												<div class="symbol symbol-45 symbol-light-danger mr-4 flex-shrink-0">
													<div class="symbol-label">
														<span class="svg-icon svg-icon-lg svg-icon-danger">
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<rect x="0" y="0" width="24" height="24"/>
																	<path d="M8,3 L8,3.5 C8,4.32842712 8.67157288,5 9.5,5 L14.5,5 C15.3284271,5 16,4.32842712 16,3.5 L16,3 L18,3 C19.1045695,3 20,3.8954305 20,5 L20,21 C20,22.1045695 19.1045695,23 18,23 L6,23 C4.8954305,23 4,22.1045695 4,21 L4,5 C4,3.8954305 4.8954305,3 6,3 L8,3 Z" fill="#000000" opacity="0.3"/>
																	<path d="M11,2 C11,1.44771525 11.4477153,1 12,1 C12.5522847,1 13,1.44771525 13,2 L14.5,2 C14.7761424,2 15,2.22385763 15,2.5 L15,3.5 C15,3.77614237 14.7761424,4 14.5,4 L9.5,4 C9.22385763,4 9,3.77614237 9,3.5 L9,2.5 C9,2.22385763 9.22385763,2 9.5,2 L11,2 Z" fill="#000000"/>
																	<rect fill="#000000" opacity="0.3" x="10" y="9" width="7" height="2" rx="1"/>
																	<rect fill="#000000" opacity="0.3" x="7" y="9" width="2" height="2" rx="1"/>
																	<rect fill="#000000" opacity="0.3" x="7" y="13" width="2" height="2" rx="1"/>
																	<rect fill="#000000" opacity="0.3" x="10" y="13" width="7" height="2" rx="1"/>
																	<rect fill="#000000" opacity="0.3" x="7" y="17" width="2" height="2" rx="1"/>
																	<rect fill="#000000" opacity="0.3" x="10" y="17" width="7" height="2" rx="1"/>
																</g>
															</svg><!--end::Svg Icon-->
														</span>
													</div>
												</div>
												<!--end::Symbol-->
												<!--begin::Title-->
												<div>
													<div class="font-size-h4 text-dark-75 font-weight-bolder"><?php echo $total_remain_ch?> Credit</div>
													<div class="font-size-sm text-muted font-weight-bold mt-1">Remained Credit</div>
												</div>
												<!--end::Title-->
											</div>
										</div>
										<!--end::Item-->
									</div>
									<div class="row row-paddingless">
										<!--begin::Item-->
										<div class="col">
											<div class="d-flex align-items-center mr-2">
												<!--begin::Symbol-->
												<div class="symbol symbol-45 symbol-light-success mr-4 flex-shrink-0">
													<div class="symbol-label">
														<span class="svg-icon svg-icon-lg svg-icon-success">
															<!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Cart3.svg-->
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<rect x="0" y="0" width="24" height="24"/>
																	<path d="M2,6 L21,6 C21.5522847,6 22,6.44771525 22,7 L22,17 C22,17.5522847 21.5522847,18 21,18 L2,18 C1.44771525,18 1,17.5522847 1,17 L1,7 C1,6.44771525 1.44771525,6 2,6 Z M11.5,16 C13.709139,16 15.5,14.209139 15.5,12 C15.5,9.790861 13.709139,8 11.5,8 C9.290861,8 7.5,9.790861 7.5,12 C7.5,14.209139 9.290861,16 11.5,16 Z" fill="#000000" opacity="0.3" transform="translate(11.500000, 12.000000) rotate(-345.000000) translate(-11.500000, -12.000000) "/>
																	<path d="M2,6 L21,6 C21.5522847,6 22,6.44771525 22,7 L22,17 C22,17.5522847 21.5522847,18 21,18 L2,18 C1.44771525,18 1,17.5522847 1,17 L1,7 C1,6.44771525 1.44771525,6 2,6 Z M11.5,16 C13.709139,16 15.5,14.209139 15.5,12 C15.5,9.790861 13.709139,8 11.5,8 C9.290861,8 7.5,9.790861 7.5,12 C7.5,14.209139 9.290861,16 11.5,16 Z M11.5,14 C12.6045695,14 13.5,13.1045695 13.5,12 C13.5,10.8954305 12.6045695,10 11.5,10 C10.3954305,10 9.5,10.8954305 9.5,12 C9.5,13.1045695 10.3954305,14 11.5,14 Z" fill="#000000"/>
																</g>
															</svg>
															<!--end::Svg Icon-->
														</span>
													</div>
												</div>
												<!--end::Symbol-->
												<!--begin::Title-->
												<div>
													<div class="font-size-h4 text-dark-75 font-weight-bolder">RM <?php echo number_format($total_used_rm,2); ?></div>
													<div class="font-size-sm text-muted font-weight-bold mt-1">Payout Pending</div>
												</div>
												<!--end::Title-->
											</div>
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="col">
											<div class="d-flex align-items-center mr-2">
												<!--begin::Symbol-->
												<div class="symbol symbol-45 symbol-light-danger mr-4 flex-shrink-0">
													<div class="symbol-label">
														<span class="svg-icon svg-icon-lg svg-icon-danger">
															<!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Barcode-read.svg-->
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<rect x="0" y="0" width="24" height="24"/>
																	<rect fill="#000000" opacity="0.3" x="11.5" y="2" width="2" height="4" rx="1"/>
																	<rect fill="#000000" opacity="0.3" x="11.5" y="16" width="2" height="5" rx="1"/>
																	<path d="M15.493,8.044 C15.2143319,7.68933156 14.8501689,7.40750104 14.4005,7.1985 C13.9508311,6.98949895 13.5170021,6.885 13.099,6.885 C12.8836656,6.885 12.6651678,6.90399981 12.4435,6.942 C12.2218322,6.98000019 12.0223342,7.05283279 11.845,7.1605 C11.6676658,7.2681672 11.5188339,7.40749914 11.3985,7.5785 C11.2781661,7.74950085 11.218,7.96799867 11.218,8.234 C11.218,8.46200114 11.2654995,8.65199924 11.3605,8.804 C11.4555005,8.95600076 11.5948324,9.08899943 11.7785,9.203 C11.9621676,9.31700057 12.1806654,9.42149952 12.434,9.5165 C12.6873346,9.61150047 12.9723317,9.70966616 13.289,9.811 C13.7450023,9.96300076 14.2199975,10.1308324 14.714,10.3145 C15.2080025,10.4981676 15.6576646,10.7419985 16.063,11.046 C16.4683354,11.3500015 16.8039987,11.7268311 17.07,12.1765 C17.3360013,12.6261689 17.469,13.1866633 17.469,13.858 C17.469,14.6306705 17.3265014,15.2988305 17.0415,15.8625 C16.7564986,16.4261695 16.3733357,16.8916648 15.892,17.259 C15.4106643,17.6263352 14.8596698,17.8986658 14.239,18.076 C13.6183302,18.2533342 12.97867,18.342 12.32,18.342 C11.3573285,18.342 10.4263378,18.1741683 9.527,17.8385 C8.62766217,17.5028317 7.88033631,17.0246698 7.285,16.404 L9.413,14.238 C9.74233498,14.6433354 10.176164,14.9821653 10.7145,15.2545 C11.252836,15.5268347 11.7879973,15.663 12.32,15.663 C12.5606679,15.663 12.7949989,15.6376669 13.023,15.587 C13.2510011,15.5363331 13.4504991,15.4540006 13.6215,15.34 C13.7925009,15.2259994 13.9286662,15.0740009 14.03,14.884 C14.1313338,14.693999 14.182,14.4660013 14.182,14.2 C14.182,13.9466654 14.1186673,13.7313342 13.992,13.554 C13.8653327,13.3766658 13.6848345,13.2151674 13.4505,13.0695 C13.2161655,12.9238326 12.9248351,12.7908339 12.5765,12.6705 C12.2281649,12.5501661 11.8323355,12.420334 11.389,12.281 C10.9583312,12.141666 10.5371687,11.9770009 10.1255,11.787 C9.71383127,11.596999 9.34650161,11.3531682 9.0235,11.0555 C8.70049838,10.7578318 8.44083431,10.3968355 8.2445,9.9725 C8.04816568,9.54816454 7.95,9.03200304 7.95,8.424 C7.95,7.67666293 8.10199848,7.03700266 8.406,6.505 C8.71000152,5.97299734 9.10899753,5.53600171 9.603,5.194 C10.0970025,4.85199829 10.6543302,4.60183412 11.275,4.4435 C11.8956698,4.28516587 12.5226635,4.206 13.156,4.206 C13.9160038,4.206 14.6918294,4.34533194 15.4835,4.624 C16.2751706,4.90266806 16.9686637,5.31433061 17.564,5.859 L15.493,8.044 Z" fill="#000000"/>
																</g>
															</svg>
															<!--end::Svg Icon-->
														</span>
													</div>
												</div>
												<!--end::Symbol-->
												<!--begin::Title-->
												<div>
													<div class="font-size-h4 text-dark-75 font-weight-bolder">RM <?php echo number_format($total_remain_rm,2); ?></div>
													<div class="font-size-sm text-muted font-weight-bold mt-1">Remained Payout</div>
												</div>
												<!--end::Title-->
											</div>
										</div>
										<!--end::Item-->
									</div>
								</div>
								<!--end::Items-->
							</div>
							<!--end::Body-->
						</div>
						<!--end::Mixed Widget 16-->
					</div>
					<div class="col-md-4 col-sm-12">
						<!--begin::List Widget 7-->
						<div class="card card-custom card-stretch gutter-b">
							<!--begin::Header-->
							<div class="card-header border-0">
								<h3 class="card-title font-weight-bolder text-dark">Class Summary</h3>
								<div class="card-toolbar">
									
								</div>
							</div>
							<!--end::Header-->
							<!--begin::Body-->
							<div class="card-body pt-0">
								
								<?php
								if(isset($class_summary) && sizeof($class_summary) > 0)
								{
									$count_class_summary = 0;
									foreach($class_summary as $row_class_summary)
									{
								?>
									<!--begin::Item-->
									<div class="d-flex align-items-center flex-wrap <?php echo $count_class_summary < 6 ? "mb-8" : "" ;?>">
										<!--begin::Symbol-->
										<div class="symbol symbol-50 symbol-light mr-5">
											<span class="symbol-label">
												<img src="<?php echo base_url();?>assets/icons/file-check.svg" class="h-50 align-self-center" alt="" />
											</span>
										</div>
										<!--end::Symbol-->
										<!--begin::Text-->
										<div class="d-flex flex-column flex-grow-1 mr-2">
											<a href="<?php echo base_url() . 'secure/user_profile/'. encrypt_data($row_class_summary->user_id);?>" class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1"><?php echo isset($row_class_summary->username) && $row_class_summary->username != "" ? $row_class_summary->username : 'name missing';?></a>
											<span class="text-muted font-weight-bold"><?php echo isset($row_class_summary->module_name) && $row_class_summary->module_name != "" ? ucfirst(str_replace('_', ' ',$row_class_summary->module_name)) : 'module missing';?> <code> <?php echo isset($row_class_summary->module_chapter) && $row_class_summary->module_chapter != "" ? $row_class_summary->module_chapter : 'chapter missing';?> </code></span>
										</div>
										<!--end::Text-->
										<?php
										if(isset($row_class_summary->grade) && $row_class_summary->grade != "" && $row_class_summary->grade == "A")
										{
										?>
											<span class="label label-xl label-light label-inline my-lg-0 my-2 text-success font-weight-bolder"><?php echo isset($row_class_summary->grade) && $row_class_summary->grade != "" ? $row_class_summary->grade : 'score missing';?></span>
										<?php
										}
										else if(isset($row_class_summary->grade) && $row_class_summary->grade != "" && $row_class_summary->grade == "B")
										{
										?>
											<span class="label label-xl label-light label-inline my-lg-0 my-2 text-info font-weight-bolder"><?php echo isset($row_class_summary->grade) && $row_class_summary->grade != "" ? $row_class_summary->grade : 'score missing';?></span>
										<?php
										}
										else if(isset($row_class_summary->grade) && $row_class_summary->grade != "" && $row_class_summary->grade == "C")
										{
										?>
											<span class="label label-xl label-light label-inline my-lg-0 my-2 text-warning font-weight-bolder"><?php echo isset($row_class_summary->grade) && $row_class_summary->grade != "" ? $row_class_summary->grade : 'score missing';?></span>
										<?php
										}
										else
										{
										?>
											<span class="label label-xl label-light label-inline my-lg-0 my-2 text-danger font-weight-bolder"><?php echo isset($row_class_summary->grade) && $row_class_summary->grade != "" ? $row_class_summary->grade : 'score missing';?></span>
										<?php
										}
										?>
									</div>
									<!--end::Item-->
								<?php
										$count_class_summary++;
									}
								}
								?>
								
								
								
								
								
								
							</div>
							<!--end::Body-->
						</div>
						<!--end::List Widget 7-->
					</div>
					
					<div class="col-md-4 col-sm-12">
						<!--begin::List Widget 8-->
						<div class="card card-custom card-stretch gutter-b">
							<!--begin::Header-->
							<div class="card-header border-0">
								<h3 class="card-title font-weight-bolder text-dark">Canceled Class Summary</h3>
								<div class="card-toolbar">
									<a href="<?php echo base_url() . '/secure/list/class_canceled/';?>" class="btn btn-primary font-weight-bold ">Canceled Class List</a>
								</div>
							</div>
							<!--end::Header-->
							<!--begin::Body-->
							<div class="card-body pt-0">
								
								<?php
								if(isset($canceled_class) && sizeof($canceled_class) > 0)
								{
									$count_canceled_class = 0;
									foreach($canceled_class as $row_canceled_class)
									{
								?>
								<!--begin::Item-->
								<div class="<?php echo $count_canceled_class < 6 ? "mb-5" : "" ;?>">
									<!--begin::Section-->
									<div class="d-flex align-items-center">
										<!--begin::Symbol-->
										<div class="symbol symbol-45 symbol-light mr-5">
											<span class="symbol-label">
												<img src="<?php echo base_url();?>template/metronic/demo8_v7/dist/assets/media/svg/avatars/004-boy-1.svg" class="h-50 align-self-center" alt="" />
											</span>
										</div>
										<!--end::Symbol-->
										<!--begin::Text-->
										<div class="d-flex flex-column flex-grow-1">
											<a href="<?php echo base_url() . 'secure/user_profile/'. encrypt_data($row_canceled_class->user_id);?>" class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1"><?php echo isset($row_canceled_class->username) && $row_canceled_class->username != "" ? $row_canceled_class->username : 'name missing';?></a>
											<span class="text-muted font-weight-bold"><?php echo isset($row_canceled_class->canceled_class_date) && $row_canceled_class->canceled_class_date != "" ? date("d-M-Y", strtotime($row_canceled_class->canceled_class_date)) : 'date missing';?></span>
										</div>
										<!--end::Text-->
										<?php
										if(isset($row_canceled_class->canceled_by) && $row_canceled_class->canceled_by != "" && $row_canceled_class->canceled_by == "student")
										{
										?>
										<span class="label label-xl label-light label-inline my-lg-0 my-2 text-danger font-weight-bolder"><?php echo isset($row_canceled_class->canceled_by) && $row_canceled_class->canceled_by != "" ? $row_canceled_class->canceled_by : 'cancel by missing';?></span>
										<?php
										}
										else
										{
										?>
										<span class="label label-xl label-light label-inline my-lg-0 my-2 text-primary font-weight-bolder"><?php echo isset($row_canceled_class->canceled_by) && $row_canceled_class->canceled_by != "" ? $row_canceled_class->canceled_by : 'cancel by missing';?></span>
										<?php
										}
										?>
									</div>
									<!--end::Section-->
									<!--begin::Desc-->
									<p class="text-dark-50 m-0 pt-5 font-weight-normal"><?php echo isset($row_canceled_class->canceled_reason) && $row_canceled_class->canceled_reason != "" ? $row_canceled_class->canceled_reason : 'reason missing';?></p>
									<?php
									if(isset($row_canceled_class->follow_up_remarks) && $row_canceled_class->follow_up_remarks != "")
									{
									?>
										<p class="text-warning m-0 font-weight-lighter"><?php echo isset($row_canceled_class->follow_up_remarks) && $row_canceled_class->follow_up_remarks != "" ? $row_canceled_class->follow_up_remarks : 'follow up missing';?></p>
										<!--end::Desc-->
									<?php
									}
									?>
								</div>
								<!--end::Item-->
								
								<?php
										$count_canceled_class++;
									}
								}
								?>
							</div>
							<!--end::Body-->
						</div>
						<!--end: Card-->
						<!--end::List Widget 8-->
					</div>
					
				</div>
				
				
				<?php
				}
				
				if(user()->group_type == 'student')
				{
					// ad($user_info);
					// ad($student_credit);
					// ad($student_info);
				?>
					<!--begin::Education-->
					<div class="row">
						<!--begin::Aside-->
						<div class="col-sm-3">
							<!--begin::Nav Panel Widget 2-->
							<div class="card card-custom gutter-b">
								<!--begin::Body-->
								<div class="card-body">
									<!--begin::Wrapper-->
									<div class="d-flex justify-content-between flex-column pt-4 h-100">
										<!--begin::Container-->
										<div class="pb-5">
											<!--begin::Header-->
											<div class="d-flex flex-column flex-center">
												<!--begin::Symbol-->
												<div class="symbol symbol-120 symbol-circle symbol-success overflow-hidden">
													<span class="symbol-label">
														<img src="<?php echo base_url();?>template/metronic/dist/assets/media/svg/avatars/007-boy-2.svg" class="h-75 align-self-end" alt="" />
													</span>
												</div>
												<!--end::Symbol-->
												<!--begin::Username-->
												<a href="#" class="card-title font-weight-bolder text-dark-75 text-hover-primary font-size-h4 m-0 pt-7 pb-1"><?php echo isset($user_info->fullname) && $user_info->fullname != "" ? $user_info->fullname :'';?></a>
												<!--end::Username-->
												<!--begin::Info-->
												<div class="font-weight-bold text-dark-50 font-size-sm pb-6"><?php echo isset($student_info->tag) && $student_info->tag != "" ? $student_info->tag :'';?>, <?php echo isset($user_info->dob) && $user_info->dob != "" ? date_diff(date_create($user_info->dob), date_create(date("Y-m-d")))->format('%y') . ' Years Old'  :'';?></div>
												<!--end::Info-->
											</div>
											<!--end::Header-->
											<!--begin::Body-->
											<div class="pt-1">
												<!--begin::Text-->
												<p class="text-dark-75 font-weight-nirmal font-size-lg m-0 pb-7"><?php echo isset($student_info->join_reason) && $student_info->join_reason != "" ? $student_info->join_reason :'';?></p>
												<!--end::Text-->
												<!--begin::Item-->
												<div class="d-flex align-items-center pb-9">
													<!--begin::Symbol-->
													<div class="symbol symbol-45 symbol-light mr-4">
														<span class="symbol-label">
															<span class="svg-icon svg-icon-2x svg-icon-dark-50">
																<!--begin::Svg Icon | path:assets/media/svg/icons/Media/Equalizer.svg-->
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24" />
																		<rect fill="#000000" opacity="0.3" x="13" y="4" width="3" height="16" rx="1.5" />
																		<rect fill="#000000" x="8" y="9" width="3" height="11" rx="1.5" />
																		<rect fill="#000000" x="18" y="11" width="3" height="9" rx="1.5" />
																		<rect fill="#000000" x="3" y="13" width="3" height="7" rx="1.5" />
																	</g>
																</svg>
																<!--end::Svg Icon-->
															</span>
														</span>
													</div>
													<!--end::Symbol-->
													<!--begin::Text-->
													<div class="d-flex flex-column flex-grow-1">
														<a href="#" class="text-dark-75 text-hover-primary mb-1 font-size-lg font-weight-bolder">Ricky Hunt</a>
														<span class="text-muted font-weight-bold">PHP, SQLite, Artisan CLI</span>
													</div>
													<!--end::Text-->
													<!--begin::label-->
													<span class="font-weight-bolder label label-xl label-light-success label-inline px-3 py-5 min-w-45px">2.8</span>
													<!--end::label-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center pb-9">
													<!--begin::Symbol-->
													<div class="symbol symbol-45 symbol-light mr-4">
														<span class="symbol-label">
															<span class="svg-icon svg-icon-2x svg-icon-dark-50">
																<!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24" />
																		<rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5" />
																		<path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" fill="#000000" opacity="0.3" />
																	</g>
																</svg>
																<!--end::Svg Icon-->
															</span>
														</span>
													</div>
													<!--end::Symbol-->
													<!--begin::Text-->
													<div class="d-flex flex-column flex-grow-1">
														<a href="#" class="text-dark-75 text-hover-primary mb-1 font-size-lg font-weight-bolder">Modules</a>
														<span class="text-muted font-weight-bold">Successful Fellas</span>
													</div>
													<!--end::Text-->
													<!--begin::label-->
													<span class="font-weight-bolder label label-xl label-light-danger label-inline px-3 py-5 min-w-45px">7</span>
													<!--end::label-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center pb-9">
													<!--begin::Symbol-->
													<div class="symbol symbol-45 symbol-light mr-4">
														<span class="symbol-label">
															<span class="svg-icon svg-icon-2x svg-icon-dark-50">
																<!--begin::Svg Icon | path:assets/media/svg/icons/Home/Globe.svg-->
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24" />
																		<path d="M13,18.9450712 L13,20 L14,20 C15.1045695,20 16,20.8954305 16,22 L8,22 C8,20.8954305 8.8954305,20 10,20 L11,20 L11,18.9448245 C9.02872877,18.7261967 7.20827378,17.866394 5.79372555,16.5182701 L4.73856106,17.6741866 C4.36621808,18.0820826 3.73370941,18.110904 3.32581341,17.7385611 C2.9179174,17.3662181 2.88909597,16.7337094 3.26143894,16.3258134 L5.04940685,14.367122 C5.46150313,13.9156769 6.17860937,13.9363085 6.56406875,14.4106998 C7.88623094,16.037907 9.86320756,17 12,17 C15.8659932,17 19,13.8659932 19,10 C19,7.73468744 17.9175842,5.65198725 16.1214335,4.34123851 C15.6753081,4.01567657 15.5775721,3.39010038 15.903134,2.94397499 C16.228696,2.49784959 16.8542722,2.4001136 17.3003976,2.72567554 C19.6071362,4.40902808 21,7.08906798 21,10 C21,14.6325537 17.4999505,18.4476269 13,18.9450712 Z" fill="#000000" fill-rule="nonzero" />
																		<circle fill="#000000" opacity="0.3" cx="12" cy="10" r="6" />
																	</g>
																</svg>
																<!--end::Svg Icon-->
															</span>
														</span>
													</div>
													<!--end::Symbol-->
													<!--begin::Text-->
													<div class="d-flex flex-column flex-grow-1">
														<a href="#" class="text-dark-75 text-hover-primary mb-1 font-size-lg font-weight-bolder">Progress</a>
														<span class="text-muted font-weight-bold">Successful Fellas</span>
													</div>
													<!--end::Text-->
													<!--begin::label-->
													<span class="font-weight-bolder label label-xl label-light-info label-inline py-5 min-w-45px">+23</span>
													<!--end::label-->
												</div>
												<!--end::Item-->
											</div>
											<!--end::Body-->
										</div>
										<!--eng::Container-->
										<!--begin::Footer-->
										<div class="d-flex flex-center" id="kt_sticky_toolbar_chat_toggler_1" data-toggle="tooltip" title="" data-placement="right" data-original-title="Chat Example">
											<button class="btn btn-primary font-weight-bolder font-size-sm py-3 px-14" data-toggle="modal" data-target="#kt_chat_modal">Write a Message</button>
										</div>
										<!--end::Footer-->
									</div>
									<!--end::Wrapper-->
								</div>
								<!--end::Body-->
							</div>
							<!--end::Nav Panel Widget 2-->
							<!--begin::List Widget 17-->
							<div class="card card-custom gutter-b">
								<!--begin::Header-->
								<div class="card-header border-0 pt-5">
									<h3 class="card-title align-items-start flex-column">
										<span class="card-label font-weight-bolder text-dark">Class Video Link</span>
										<span class="text-muted mt-3 font-weight-bold font-size-sm">24 Class</span>
									</h3>
									
								</div>
								<!--end::Header-->
								<!--begin::Body-->
								<div class="card-body pt-4">
									<!--begin::Container-->
									<div>
										<!--begin::Item-->
										<div class="d-flex align-items-center mb-8">
											<!--begin::Symbol-->
											<div class="symbol mr-5 pt-1">
												<div class="symbol-label min-w-65px min-h-100px" style="background-image: url('assets/media/books/4.png')"></div>
											</div>
											<!--end::Symbol-->
											<!--begin::Info-->
											<div class="d-flex flex-column">
												<!--begin::Title-->
												<a href="#" class="text-dark-75 font-weight-bolder text-hover-primary font-size-lg">Darius The Great</a>
												<!--end::Title-->
												<!--begin::Text-->
												<span class="text-muted font-weight-bold font-size-sm pb-4">Amazing Short Story About
												<br />Darius greatness</span>
												<!--end::Text-->
												<!--begin::Action-->
												<div>
													<button type="button" class="btn btn-light font-weight-bolder font-size-sm py-2">Book Now</button>
												</div>
												<!--end::Action-->
											</div>
											<!--end::Info-->
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex align-items-center mb-8">
											<!--begin::Symbol-->
											<div class="symbol mr-5 pt-1">
												<div class="symbol-label min-w-65px min-h-100px" style="background-image: url('assets/media/books/12.png')"></div>
											</div>
											<!--end::Symbol-->
											<!--begin::Info-->
											<div class="d-flex flex-column">
												<!--begin::Title-->
												<a href="#" class="text-dark-75 font-weight-bolder text-hover-primary font-size-lg">Wild Blues</a>
												<!--end::Title-->
												<!--begin::Text-->
												<span class="text-muted font-weight-bold font-size-sm pb-4">Amazing Short Story About
												<br />Darius greatness</span>
												<!--end::Text-->
												<!--begin::Action-->
												<div>
													<button type="button" class="btn btn-light font-weight-bolder font-size-sm py-2">Book Now</button>
												</div>
												<!--end::Action-->
											</div>
											<!--end::Info-->
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex align-items-center">
											<!--begin::Symbol-->
											<div class="symbol mr-5 pt-1">
												<div class="symbol-label min-w-65px min-h-100px" style="background-image: url('assets/media/books/13.png')"></div>
											</div>
											<!--end::Symbol-->
											<!--begin::Info-->
											<div class="d-flex flex-column">
												<!--begin::Title-->
												<a href="#" class="text-dark-75 font-weight-bolder text-hover-primary font-size-lg">Simple Thinking</a>
												<!--end::Title-->
												<!--begin::Text-->
												<span class="text-muted font-weight-bold font-size-sm pb-4">Amazing Short Story About
												<br />Darius greatness</span>
												<!--end::Text-->
												<!--begin::Action-->
												<div>
													<button type="button" class="btn btn-light font-weight-bolder font-size-sm py-2">Book Now</button>
												</div>
												<!--end::Action-->
											</div>
											<!--end::Info-->
										</div>
										<!--end::Item-->
									</div>
									<!--end::Container-->
								</div>
								<!--end::Body-->
							</div>
							<!--end::List Widget 17-->
							<!--begin::List Widget 9-->
							<div class="card card-custom gutter-b">
								<!--begin::Header-->
								<div class="card-header align-items-center border-0 mt-4">
									<h3 class="card-title align-items-start flex-column">
										<span class="font-weight-bolder text-dark">My Activity</span>
										<span class="text-muted mt-3 font-weight-bold font-size-sm">890,344 Sales</span>
									</h3>
									
								</div>
								<!--end::Header-->
								<!--begin::Body-->
								<div class="card-body pt-4">
									<!--begin::Timeline-->
									<div class="timeline timeline-6 mt-3">
										<!--begin::Item-->
										<div class="timeline-item align-items-start">
											<!--begin::Label-->
											<div class="timeline-label font-weight-bolder text-dark-75 font-size-lg">08:42</div>
											<!--end::Label-->
											<!--begin::Badge-->
											<div class="timeline-badge">
												<i class="fa fa-genderless text-warning icon-xl"></i>
											</div>
											<!--end::Badge-->
											<!--begin::Text-->
											<div class="font-weight-mormal font-size-lg timeline-content text-muted pl-3">Outlines keep you honest. And keep structure</div>
											<!--end::Text-->
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="timeline-item align-items-start">
											<!--begin::Label-->
											<div class="timeline-label font-weight-bolder text-dark-75 font-size-lg">10:00</div>
											<!--end::Label-->
											<!--begin::Badge-->
											<div class="timeline-badge">
												<i class="fa fa-genderless text-success icon-xl"></i>
											</div>
											<!--end::Badge-->
											<!--begin::Content-->
											<div class="timeline-content d-flex">
												<span class="font-weight-bolder text-dark-75 pl-3 font-size-lg">AEOL meeting</span>
											</div>
											<!--end::Content-->
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="timeline-item align-items-start">
											<!--begin::Label-->
											<div class="timeline-label font-weight-bolder text-dark-75 font-size-lg">14:37</div>
											<!--end::Label-->
											<!--begin::Badge-->
											<div class="timeline-badge">
												<i class="fa fa-genderless text-danger icon-xl"></i>
											</div>
											<!--end::Badge-->
											<!--begin::Desc-->
											<div class="timeline-content font-weight-bolder font-size-lg text-dark-75 pl-3">Make deposit
											<a href="#" class="text-primary">USD 700</a>. to ESL</div>
											<!--end::Desc-->
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="timeline-item align-items-start">
											<!--begin::Label-->
											<div class="timeline-label font-weight-bolder text-dark-75 font-size-lg">16:50</div>
											<!--end::Label-->
											<!--begin::Badge-->
											<div class="timeline-badge">
												<i class="fa fa-genderless text-primary icon-xl"></i>
											</div>
											<!--end::Badge-->
											<!--begin::Text-->
											<div class="timeline-content font-weight-mormal font-size-lg text-muted pl-3">Indulging in poorly driving and keep structure keep great</div>
											<!--end::Text-->
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="timeline-item align-items-start">
											<!--begin::Label-->
											<div class="timeline-label font-weight-bolder text-dark-75 font-size-lg">21:03</div>
											<!--end::Label-->
											<!--begin::Badge-->
											<div class="timeline-badge">
												<i class="fa fa-genderless text-danger icon-xl"></i>
											</div>
											<!--end::Badge-->
											<!--begin::Desc-->
											<div class="timeline-content font-weight-bolder text-dark-75 pl-3 font-size-lg">New order placed
											<a href="#" class="text-primary">#XF-2356</a>.</div>
											<!--end::Desc-->
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="timeline-item align-items-start">
											<!--begin::Label-->
											<div class="timeline-label font-weight-bolder text-dark-75 font-size-lg">23:07</div>
											<!--end::Label-->
											<!--begin::Badge-->
											<div class="timeline-badge">
												<i class="fa fa-genderless text-info icon-xl"></i>
											</div>
											<!--end::Badge-->
											<!--begin::Text-->
											<div class="timeline-content font-weight-mormal font-size-lg text-muted pl-3">Outlines keep and you honest. Indulging in poorly driving</div>
											<!--end::Text-->
										</div>
										<!--end::Item-->
									</div>
									<!--end::Timeline-->
								</div>
								<!--end: Card Body-->
							</div>
							<!--end: List Widget 9-->
						</div>
						<!--end::Aside-->
						<!--begin::Content-->
						<div class="col-sm-6">
							<div class="row">
									<!--begin::Forms Widget 8-->
									<div class="card card-custom gutter-b">
										<!--begin::Body-->
										<div class="card-body">
											<!--begin::Top-->
											<div class="d-flex align-items-center">
												<!--begin::Symbol-->
												<div class="symbol symbol-45 symbol-light mr-5">
													<span class="symbol-label">
														<span class="svg-icon svg-icon-lg svg-icon-primary">
															<!--begin::Svg Icon | path:assets/media/svg/icons/General/Clipboard.svg-->
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<rect x="0" y="0" width="24" height="24" />
																	<path d="M8,3 L8,3.5 C8,4.32842712 8.67157288,5 9.5,5 L14.5,5 C15.3284271,5 16,4.32842712 16,3.5 L16,3 L18,3 C19.1045695,3 20,3.8954305 20,5 L20,21 C20,22.1045695 19.1045695,23 18,23 L6,23 C4.8954305,23 4,22.1045695 4,21 L4,5 C4,3.8954305 4.8954305,3 6,3 L8,3 Z" fill="#000000" opacity="0.3" />
																	<path d="M11,2 C11,1.44771525 11.4477153,1 12,1 C12.5522847,1 13,1.44771525 13,2 L14.5,2 C14.7761424,2 15,2.22385763 15,2.5 L15,3.5 C15,3.77614237 14.7761424,4 14.5,4 L9.5,4 C9.22385763,4 9,3.77614237 9,3.5 L9,2.5 C9,2.22385763 9.22385763,2 9.5,2 L11,2 Z" fill="#000000" />
																	<rect fill="#000000" opacity="0.3" x="7" y="10" width="5" height="2" rx="1" />
																	<rect fill="#000000" opacity="0.3" x="7" y="14" width="9" height="2" rx="1" />
																</g>
															</svg>
															<!--end::Svg Icon-->
														</span>
													</span>
												</div>
												<!--end::Symbol-->
												<!--begin::Info-->
												<div class="d-flex flex-column flex-grow-1">
													<a href="#" class="text-dark-75 text-hover-primary mb-1 font-size-lg font-weight-bolder">WWII Quiz Pt 1</a>
													<div class="d-flex">
														<div class="d-flex align-items-center pr-5">
															<span class="svg-icon svg-icon-md svg-icon-primary pr-1">
																<!--begin::Svg Icon | path:assets/media/svg/icons/Home/Clock.svg-->
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24" />
																		<path d="M12,22 C7.02943725,22 3,17.9705627 3,13 C3,8.02943725 7.02943725,4 12,4 C16.9705627,4 21,8.02943725 21,13 C21,17.9705627 16.9705627,22 12,22 Z" fill="#000000" opacity="0.3" />
																		<path d="M11.9630156,7.5 L12.0475062,7.5 C12.3043819,7.5 12.5194647,7.69464724 12.5450248,7.95024814 L13,12.5 L16.2480695,14.3560397 C16.403857,14.4450611 16.5,14.6107328 16.5,14.7901613 L16.5,15 C16.5,15.2109164 16.3290185,15.3818979 16.1181021,15.3818979 C16.0841582,15.3818979 16.0503659,15.3773725 16.0176181,15.3684413 L11.3986612,14.1087258 C11.1672824,14.0456225 11.0132986,13.8271186 11.0316926,13.5879956 L11.4644883,7.96165175 C11.4845267,7.70115317 11.7017474,7.5 11.9630156,7.5 Z" fill="#000000" />
																	</g>
																</svg>
																<!--end::Svg Icon-->
															</span>
															<span class="text-muted font-weight-bold">Due 04 Sep</span>
														</div>
														<div class="d-flex align-items-center">
															<span class="svg-icon svg-icon-md svg-icon-primary pr-1">
																<!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-arrange.svg-->
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24" />
																		<path d="M5.5,4 L9.5,4 C10.3284271,4 11,4.67157288 11,5.5 L11,6.5 C11,7.32842712 10.3284271,8 9.5,8 L5.5,8 C4.67157288,8 4,7.32842712 4,6.5 L4,5.5 C4,4.67157288 4.67157288,4 5.5,4 Z M14.5,16 L18.5,16 C19.3284271,16 20,16.6715729 20,17.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,17.5 C13,16.6715729 13.6715729,16 14.5,16 Z" fill="#000000" />
																		<path d="M5.5,10 L9.5,10 C10.3284271,10 11,10.6715729 11,11.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,11.5 C4,10.6715729 4.67157288,10 5.5,10 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,12.5 C20,13.3284271 19.3284271,14 18.5,14 L14.5,14 C13.6715729,14 13,13.3284271 13,12.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z" fill="#000000" opacity="0.3" />
																	</g>
																</svg>
																<!--end::Svg Icon-->
															</span>
															<span class="text-muted font-weight-bold">P1 U.S. History</span>
														</div>
													</div>
												</div>
												<!--end::Info-->
												
											</div>
											<!--end::Top-->
											<!--begin::Bottom-->
											<div class="pt-3">
												<!--begin::Text-->
												<p class="text-dark-75 font-size-lg font-weight-normal pt-5 mb-2">Outlines keep you honest. They stop you from indulging in poorly thought-out metaphors about driving and keep you focused on the overall structure of your post</p>
												<!--end::Text-->
												<!--begin::Description-->
												<p class="text-dark-75 font-size-lg font-weight-normal pt-5">1. Write “Hello World”
												<br />2. Create basic Function
												<br />3. Connect to DataBase
												<br />4. Add info to DataBase
												<br />5. Generate Invoice
												<br />
												<span class="pt-7 d-block">Mr. Liam</span></p>
												<!--end::Description-->
												<!--begin::Action-->
												<a href="#" class="btn btn-hover-text-primary btn-hover-icon-primary btn-sm btn-text-dark-50 bg-hover-light-primary rounded font-weight-bolder font-size-sm p-2">
												<span class="svg-icon svg-icon-md svg-icon-dark-25 pr-2">
													<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Group-chat.svg-->
													<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
														<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
															<rect x="0" y="0" width="24" height="24" />
															<path d="M16,15.6315789 L16,12 C16,10.3431458 14.6568542,9 13,9 L6.16183229,9 L6.16183229,5.52631579 C6.16183229,4.13107011 7.29290239,3 8.68814808,3 L20.4776218,3 C21.8728674,3 23.0039375,4.13107011 23.0039375,5.52631579 L23.0039375,13.1052632 L23.0206157,17.786793 C23.0215995,18.0629336 22.7985408,18.2875874 22.5224001,18.2885711 C22.3891754,18.2890457 22.2612702,18.2363324 22.1670655,18.1421277 L19.6565168,15.6315789 L16,15.6315789 Z" fill="#000000" />
															<path d="M1.98505595,18 L1.98505595,13 C1.98505595,11.8954305 2.88048645,11 3.98505595,11 L11.9850559,11 C13.0896254,11 13.9850559,11.8954305 13.9850559,13 L13.9850559,18 C13.9850559,19.1045695 13.0896254,20 11.9850559,20 L4.10078614,20 L2.85693427,21.1905292 C2.65744295,21.3814685 2.34093638,21.3745358 2.14999706,21.1750444 C2.06092565,21.0819836 2.01120804,20.958136 2.01120804,20.8293182 L2.01120804,18.32426 C1.99400175,18.2187196 1.98505595,18.1104045 1.98505595,18 Z M6.5,14 C6.22385763,14 6,14.2238576 6,14.5 C6,14.7761424 6.22385763,15 6.5,15 L11.5,15 C11.7761424,15 12,14.7761424 12,14.5 C12,14.2238576 11.7761424,14 11.5,14 L6.5,14 Z M9.5,16 C9.22385763,16 9,16.2238576 9,16.5 C9,16.7761424 9.22385763,17 9.5,17 L11.5,17 C11.7761424,17 12,16.7761424 12,16.5 C12,16.2238576 11.7761424,16 11.5,16 L9.5,16 Z" fill="#000000" opacity="0.3" />
														</g>
													</svg>
													<!--end::Svg Icon-->
												</span>24 Comments</a>
												<!--end::Action-->
											</div>
											<!--end::Bottom-->
											<!--begin::Separator-->
											<div class="separator separator-solid mt-6 mb-4"></div>
											<!--end::Separator-->
											<!--begin::Editor-->
											<form class="position-relative">
												<textarea id="kt_forms_widget_8_input" class="form-control border-0 p-0 pr-10 resize-none" rows="1" placeholder="Any Question?"></textarea>
												<div class="position-absolute top-0 right-0 mt-n1 mr-n2">
													<span class="btn btn-icon btn-sm btn-hover-icon-primary">
														<i class="flaticon2-clip-symbol icon-ms"></i>
													</span>
												</div>
											</form>
											<!--edit::Editor-->
										</div>
										<!--end::Body-->
									</div>
									<!--end::Forms Widget 8-->
							</div>
						</div>
						<!--end::Content-->
						<div class="col-sm-3">
							<!--begin: Stats Widget 19-->
							<div class="card card-custom bg-light-success gutter-b">
								<!--begin::Body-->
								<div class="card-body my-3">
									<a href="<?php echo base_url().'open/payment_process/'.user()->group_id;?>" target="_blank" class="card-title font-weight-bolder text-success text-hover-state-dark font-size-h6 mb-4 d-block">Billing Information</a>
									<div class="font-weight-bold text-muted font-size-sm">
									<span class="text-dark-75 font-size-h2 font-weight-bolder mr-2">67%</span>Average</div>
									<div class="progress progress-xs mt-7 bg-success-o-60">
										<div class="progress-bar bg-success" role="progressbar" style="width: 67%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
								</div>
								<!--end:: Body-->
							</div>
							<!--end: Stats:Widget 19-->
							<!--begin::Stats Widget 20-->
							<div class="card card-custom bg-light-warning gutter-b">
								<!--begin::Body-->
								<div class="card-body my-4">
									<a href="#" class="card-title font-weight-bolder text-warning font-size-h6 mb-4 text-hover-state-dark d-block">Credit Fulfilment</a>
									<div class="font-weight-bold text-muted font-size-sm">
									<span class="text-dark-75 font-weight-bolder font-size-h2 mr-2">87K%</span>23k to goal</div>
									<div class="progress progress-xs mt-7 bg-warning-o-60">
										<div class="progress-bar bg-warning" role="progressbar" style="width: 87%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
								</div>
								<!--end::Body-->
							</div>
							<!--end::Stats Widget 20-->
							<!--begin::List Widget 18-->
							<div class="card card-custom gutter-b">
								<!--begin::Header-->
								<div class="card-header border-0 pt-7">
									<h3 class="card-title align-items-start flex-column">
										<span class="card-label font-weight-bold font-size-h4 text-dark-75">Latest Accidents</span>
										<span class="text-muted mt-3 font-weight-bold font-size-sm">Last week
										<span class="text-primary font-weight-bolder">9 accidents</span></span>
									</h3>
									<div class="card-toolbar">
										<ul class="nav nav-pills nav-pills-sm nav-dark">
											<li class="nav-item ml-0">
												<a class="nav-link py-2 px-4 font-weight-bolder font-size-sm" data-toggle="tab" href="#kt_tab_pane_1_1">Year</a>
											</li>
											<li class="nav-item">
												<a class="nav-link py-2 px-4 active font-weight-bolder font-size-sm" data-toggle="tab" href="#kt_tab_pane_2_2">Month</a>
											</li>
										</ul>
									</div>
								</div>
								<!--end::Header-->
								<!--begin::Body-->
								<div class="card-body pt-1">
									<div class="tab-content mt-5" id="myTabLIist18">
										<!--begin::Tap pane-->
										<div class="tab-pane fade" id="kt_tab_pane_1_1" role="tabpanel" aria-labelledby="kt_tab_pane_1_1">
											<!--begin::Form-->
											<div class="form">
												<!--begin::Item-->
												<div class="d-flex align-items-center pb-9">
													<!--begin::Symbol-->
													<div class="symbol symbol-60 symbol-2by3 flex-shrink-0 mr-4">
														<div class="symbol-label" style="background-image: url('assets/media/stock-600x400/img-25.jpg')"></div>
													</div>
													<!--end::Symbol-->
													<!--begin::Section-->
													<div class="d-flex flex-column flex-grow-1">
														<!--begin::Title-->
														<a href="#" class="text-dark-75 font-weight-bolder text-hover-primary font-size-lg mb-1">Nike &amp; Blue</a>
														<!--end::Title-->
														<!--begin::Desc-->
														<span class="text-dark-50 font-weight-normal font-size-sm">Your website will have long term business should think about those term business</span>
														<!--begin::Desc-->
													</div>
													<!--end::Section-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center pb-9">
													<!--begin::Symbol-->
													<div class="symbol symbol-60 symbol-2by3 flex-shrink-0 mr-4">
														<div class="symbol-label" style="background-image: url('assets/media/stock-600x400/img-24.jpg')"></div>
													</div>
													<!--end::Symbol-->
													<!--begin::Section-->
													<div class="d-flex flex-column flex-grow-1">
														<!--begin::Title-->
														<a href="#" class="text-dark-75 font-weight-bolder text-hover-primary font-size-lg mb-1">Red Boots</a>
														<!--end::Title-->
														<!--begin::Desc-->
														<span class="text-dark-50 font-weight-normal font-size-sm">Have long term business objectives. You should think about those long term business</span>
														<!--begin::Desc-->
													</div>
													<!--end::Section-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center pb-9">
													<!--begin::Symbol-->
													<div class="symbol symbol-60 symbol-2by3 flex-shrink-0 mr-4">
														<div class="symbol-label" style="background-image: url('assets/media/stock-600x400/img-20.jpg')"></div>
													</div>
													<!--end::Symbol-->
													<!--begin::Section-->
													<div class="d-flex flex-column flex-grow-1">
														<!--begin::Title-->
														<a href="#" class="text-dark-75 font-weight-bolder font-size-lg text-hover-primary mb-1">Cup &amp; Green</a>
														<!--end::Title-->
														<!--begin::Desc-->
														<span class="text-dark-50 font-weight-normal font-size-sm">Your company your website have long term business objectives. You should think about</span>
														<!--begin::Desc-->
													</div>
													<!--end::Section-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center pb-6">
													<!--begin::Symbol-->
													<div class="symbol symbol-60 symbol-2by3 flex-shrink-0 mr-4">
														<div class="symbol-label" style="background-image: url('assets/media/stock-600x400/img-19.jpg')"></div>
													</div>
													<!--end::Symbol-->
													<!--begin::Section-->
													<div class="d-flex flex-column flex-grow-1">
														<!--begin::Title-->
														<a href="#" class="text-dark-75 font-weight-bolder text-hover-primary font-size-lg mb-1">Yellow Background</a>
														<!--end::Title-->
														<!--begin::Desc-->
														<span class="text-dark-50 font-weight-normal font-size-sm">Your company will have long term business objectives You should think about those long</span>
														<!--begin::Desc-->
													</div>
													<!--end::Section-->
												</div>
												<!--end::Item-->
											</div>
											<!--end::Form-->
										</div>
										<!--end::Tap pane-->
										<!--begin::Tap pane-->
										<div class="tab-pane fade show active" id="kt_tab_pane_2_2" role="tabpanel" aria-labelledby="kt_tab_pane_2_2">
											<!--begin::Form-->
											<div class="form">
												<!--begin::Item-->
												<div class="d-flex align-items-center pb-9">
													<!--begin::Symbol-->
													<div class="symbol symbol-60 symbol-2by3 flex-shrink-0 mr-4">
														<div class="symbol-label" style="background-image: url('assets/media/stock-600x400/img-20.jpg')"></div>
													</div>
													<!--end::Symbol-->
													<!--begin::Section-->
													<div class="d-flex flex-column flex-grow-1">
														<!--begin::Title-->
														<a href="#" class="text-dark-75 font-weight-bolder font-size-lg text-hover-primary mb-1">Cup &amp; Green</a>
														<!--end::Title-->
														<!--begin::Desc-->
														<span class="text-dark-50 font-weight-normal font-size-sm">Your company your website have long term business objectives. You should think about</span>
														<!--begin::Desc-->
													</div>
													<!--end::Section-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center pb-9">
													<!--begin::Symbol-->
													<div class="symbol symbol-60 symbol-2by3 flex-shrink-0 mr-4">
														<div class="symbol-label" style="background-image: url('assets/media/stock-600x400/img-19.jpg')"></div>
													</div>
													<!--end::Symbol-->
													<!--begin::Section-->
													<div class="d-flex flex-column flex-grow-1">
														<!--begin::Title-->
														<a href="#" class="text-dark-75 font-weight-bolder text-hover-primary font-size-lg mb-1">Yellow Background</a>
														<!--end::Title-->
														<!--begin::Desc-->
														<span class="text-dark-50 font-weight-normal font-size-sm">Your company will have long term business objectives You should think about those long</span>
														<!--begin::Desc-->
													</div>
													<!--end::Section-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center pb-9">
													<!--begin::Symbol-->
													<div class="symbol symbol-60 symbol-2by3 flex-shrink-0 mr-4">
														<div class="symbol-label" style="background-image: url('assets/media/stock-600x400/img-25.jpg')"></div>
													</div>
													<!--end::Symbol-->
													<!--begin::Section-->
													<div class="d-flex flex-column flex-grow-1">
														<!--begin::Title-->
														<a href="#" class="text-dark-75 font-weight-bolder text-hover-primary font-size-lg mb-1">Nike &amp; Blue</a>
														<!--end::Title-->
														<!--begin::Desc-->
														<span class="text-dark-50 font-weight-normal font-size-sm">Your website will have long term business should think about those term business</span>
														<!--begin::Desc-->
													</div>
													<!--end::Section-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center pb-6">
													<!--begin::Symbol-->
													<div class="symbol symbol-60 symbol-2by3 flex-shrink-0 mr-4">
														<div class="symbol-label" style="background-image: url('assets/media/stock-600x400/img-24.jpg')"></div>
													</div>
													<!--end::Symbol-->
													<!--begin::Section-->
													<div class="d-flex flex-column flex-grow-1">
														<!--begin::Title-->
														<a href="#" class="text-dark-75 font-weight-bolder text-hover-primary font-size-lg mb-1">Red Boots</a>
														<!--end::Title-->
														<!--begin::Desc-->
														<span class="text-dark-50 font-weight-normal font-size-sm">Have long term business objectives. You should think about those long term business</span>
														<!--begin::Desc-->
													</div>
													<!--end::Section-->
												</div>
												<!--end::Item-->
											</div>
											<!--end::Form-->
										</div>
										<!--end::Tap pane-->
									</div>
								</div>
								<!--end::Body-->
							</div>
							<!--end::List Widget 18-->
						</div>
					</div>
				<?php
				}
				?>
				
			</div>
			<!--end::Content-->

		</div>
		<!--end::Content Wrapper-->
	</div>
	<!--end::Container-->
		


<?php
if(user()->group_type == 'teacher')
{
?>
<script type="text/javascript">
// boolean outputs "" if false, "1" if true
var creditFulfilled = "<?php echo $total_lesson_credit->credit?>";
var totalCredit = "<?php echo $total_lesson_credit->credit+$total_remain_ch?>";
var totalPercentage = (creditFulfilled/71)*100;
</script>


<?php
}
?>


<?php
$this->load->view('metronic/secure/m_footer');
?>

<?php
$this->load->view('metronic/secure/m_footer_close');
?>
