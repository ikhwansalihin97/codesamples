<!DOCTYPE html>

<!--
Template Name: Metronic - Bootstrap 4 HTML, React, Angular 11 & VueJS Admin Dashboard Theme
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: https://1.envato.market/EA4JP
Renew Support: https://1.envato.market/EA4JP
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en">

	<!--begin::Head-->
	<head>
		<base href="">
		<meta charset="utf-8" />
		<title><?php echo $title?></title>
		<meta name="description" content="<?php echo $brief; ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

		<link rel="canonical" href="https://keenthemes.com/metronic" />

		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />

		<!--end::Fonts-->

		<!--begin::Page Vendors Styles(used by this page)-->
		<link href="<?php echo base_url();?>template/metronic/demo8_v7/dist/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />

		<!--end::Page Vendors Styles-->

		<!--begin::Global Theme Styles(used by all pages)-->
		<link href="<?php echo base_url();?>template/metronic/demo8_v7/dist/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url();?>template/metronic/demo8_v7/dist/assets/plugins/custom/prismjs/prismjs.bundle.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url();?>template/metronic/demo8_v7/dist/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />

		<!--end::Global Theme Styles-->

		<!--begin::Layout Themes(used by all pages)-->

		<!--end::Layout Themes-->
		<link rel="shortcut icon" href="<?php echo base_url('assets/icons/favicon.png');?>" />
		
		<style>
		@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@800&family=Lato:wght@400&display=swap');
		/*@import url('https://fonts.googleapis.com/css2?&display=swap');*/
		
		.burger-icon span {
			background-color:white;
		}
		
		.burger-icon span::before {
			background-color:white;
		}
		
		.burger-icon span::after {
			background-color:white;
		}
		
		.small_display {
			display : none;  
		}
		  
		.border-dashed {
			border-style: dashed !important;
		}
		
		.filter_display {
			display : flex;  
		}
		
		.was-validated .form-control:invalid, .form-control.is-invalid {
			background-position: right calc(1.375em + 0.325rem) center;
		}
		.custom-font-size-h4{
			font-size: 1.35rem !important;
		}
		  
		.custom-font-size-sm{
			font-size: 0.925rem;
		}
		
		@media only screen and (min-width: 980px) {
			.sd_label_position {
				text-align : right; 
			}
		}
		
		.review_box .list {
			margin-top : 10px; 
		}
		  
		.review_box .list {
		  display: inline-block;
		  padding-left: 10px;
		  padding-right: 10px;
		}
		
		.review_box .list li {
		  display: inline-block;
		}
		
		.review_box .list li a {
		  display: inline-block;
		}
		
		.review_box .list li a i {
		  color: #fbd600;
		}
		
		.hide-mobile {
			display: block;
		}
		
		.show-mobile {
			display: none;
		}
		
		@media only screen and (max-width: 600px) {
		  /* CSS that should be displayed if width is equal to or less than 600px goes here */
		  
		  .sd_label_position {
			text-align : left; 
		  }
		  
		  .sd-mt-2 {
			margin-top : 1rem !important; 
		  }
		  
		  .btn-gap-small-device {
			margin-bottom: 1.25rem !important;
			margin-top: 1.25rem !important;
		  }
		  .review_box .list {
			margin-top : 0px; 
		  }
		  
		  .custom-font-size-h4{
			font-size: 1.2rem !important;
		  }
		  
		  .custom-font-size-sm{
			font-size: 0.725rem;
		  }
		  
		  .filter_display {
			display : none;  
		  }
		  
		  .small_display {
			display : block;  
		  }
		  
		  .hide-mobile {
				display: none;
			}
			
			.show-mobile {
				display: block;
			}
		}
		</style>
	
	</head>

	<!--end::Head-->
	
	<!--begin::Body-->
	<body id="kt_body" class="header-static subheader-enabled page-loading" style="background-image: url(<?php echo base_url();?>template/metronic/demo8_v7/dist/assets/media/bg/bg-8.jpg);">

		<!--[html-partial:include:{"file":"layout.html"}]/-->
		<!--begin::Main-->
		<div class="d-flex flex-column flex-root">

			<!--begin::Page-->
			<div class="d-flex flex-row flex-column-fluid page">

				<!--begin::Wrapper-->
				<div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">

					<!--[html-partial:include:{"file":"partials/_header-mobile.html"}]/-->
					<!--begin::Header Mobile-->
					<div id="kt_header_mobile" class="header-mobile">

						<!--begin::Logo-->
						<a href="<?php echo base_url() . 'secure';?>" class="max-h-30px" >
							<img alt="Logo" src="<?php echo base_url();?>assets/logo/cq-logo-dark.svg" class="logo-default h-25px h-lg-30px max-h-30px" />
						</a>

						<!--end::Logo-->

						<!--begin::Toolbar-->
						<div class="d-flex align-items-center">
							<button class="btn p-0 burger-icon burger-icon-left ml-4" id="kt_header_mobile_toggle">
								<span ></span>
							</button>
							<button class="btn p-0 ml-2" id="kt_header_mobile_topbar_toggle">
								<span class="svg-icon svg-icon-light svg-icon-xl">

									<!--begin::Svg Icon | path:assets/media/svg/icons/General/User.svg-->
									<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
										<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
											<polygon points="0 0 24 0 24 24 0 24" />
											<path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
											<path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
										</g>
									</svg>

									<!--end::Svg Icon-->
								</span>
							</button>
						</div>

						<!--end::Toolbar-->
					</div>

					<!--end::Header Mobile-->

					<!--[html-partial:include:{"file":"partials/_header.html"}]/-->
					<!--begin::Header-->
					<div id="kt_header" class="header">

						<!--begin::Container-->
						<div class="container-fluid">

							<!--begin::Left-->
							<div class="d-none d-lg-flex align-items-center mr-3">

								<!--begin::Logo-->
								<a href="<?php echo base_url() . 'secure';?>" >
									<img alt="Logo" src="<?php echo base_url();?>assets/logo/cq-logo-dark.svg" class="logo-default h-25px h-lg-30px" />
								</a>

								<!--end::Logo-->
							</div>

							<!--end::Left-->

							<!--begin::Topbar-->
							<div class="topbar topbar-minimize">
								
								<!--begin::Quick panel-->
								<div class="topbar-item mr-3">
									<div class="btn w-auto btn-light btn-pill d-inline-flex align-items-center btn-lg active ">
										<span class="text-muted font-weight-bold font-size-base mr-1">Hi </span>
										<span class="text-dark-50 font-weight-bolder font-size-base mr-3"><?php echo user()->username;?> !</span>
									</div>

								</div>

								<!--end::Quick panel-->
								
								<!--begin::User-->
								<div class="dropdown">

									<!--begin::Toggle-->
									<div class="topbar-item" data-toggle="dropdown" data-offset="0px,0px">
										<div class="btn btn-icon btn-clean h-40px w-40px btn-dropdown active">
											<span class="svg-icon svg-icon-lg">

												<!--begin::Svg Icon | path:assets/media/svg/icons/General/User.svg-->
												<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
													<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
														<polygon points="0 0 24 0 24 24 0 24" />
														<path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
														<path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
													</g>
												</svg>

												<!--end::Svg Icon-->
											</span>
										</div>
									</div>

									<!--end::Toggle-->

									<!--begin::Dropdown-->
									<div class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-anim-up dropdown-menu-lg p-0">

										<!--[html-partial:include:{"file":"partials/_extras/dropdown/user.html"}]/-->
										<!--begin::Header-->
										<div class="d-flex align-items-center p-8 rounded-top">

											<!--begin::Symbol-->
											<div class="symbol symbol-md bg-light-primary mr-3 flex-shrink-0">
												<img src="<?php echo base_url();?>template/metronic/demo8_v7/dist/assets/media/users/default.jpg" alt="" />
											</div>

											<!--end::Symbol-->

											<!--begin::Text-->
											<div class="text-dark m-0 flex-grow-1 mr-3 font-size-h5"><?php echo user()->username;?></div>
											<!--<span class="label label-light-success label-lg font-weight-bold label-inline">3 messages</span>-->

											<!--end::Text-->
										</div>
										<div class="separator separator-solid"></div>

										<!--end::Header-->

										<!--begin::Nav-->
										<div class="navi navi-spacer-x-0 pt-5">

											<!--begin::Item-->
											<a href="/secure/user_profile" class="navi-item px-8">
												<div class="navi-link">
													<div class="navi-icon mr-2">
														<i class="flaticon2-calendar-3 text-success"></i>
													</div>
													<div class="navi-text">
														<div class="font-weight-bold">My Profile</div>
														<div class="text-muted">Account settings and more
															<span class="label label-light-danger label-inline font-weight-bold">update</span>
														</div>
													</div>
												</div>
											</a>

											<!--end::Item-->

											<!--begin::Item-->
											

											<!--end::Item-->
											
											<!--begin::Footer-->
											<div class="navi-separator mt-3"></div>
											<div class="navi-footer px-8 py-5">
												<a href="/open/logout" class="btn btn-light-primary font-weight-bold">Sign Out</a>
												
											</div>

											<!--end::Footer-->
										</div>

										<!--end::Nav-->
									</div>

									<!--end::Dropdown-->
								</div>

								<!--end::User-->
							</div>

							<!--end::Topbar-->
						</div>

						<!--end::Container-->
					</div>

					<!--end::Header-->
					
					<!--[html-partial:include:{"file":"partials/_header-menu.html"}]/-->
					<!--begin::Header Menu Wrapper-->
					<div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
						<div class="container-fluid">

							<!--begin::Header Menu-->
							<div id="kt_header_menu" class="header-menu header-menu-left header-menu-mobile header-menu-layout-default header-menu-root-arrow">

								<!--begin::Header Nav-->
								<ul class="menu-nav">
									<li class="menu-item menu-item-submenu menu-item-rel <?php echo isset($menu) && $menu == "dashboard" ? 'menu-item-open menu-item-here' : '';?>" data-menu-toggle="click" aria-haspopup="true">
										<a href="javascript:;" class="menu-link menu-toggle">
											<span class="menu-text">Dashboard</span>
											<i class="menu-arrow"></i>
										</a>
										<div class="menu-submenu menu-submenu-classic menu-submenu-left">
											<ul class="menu-subnav">
												<li class="menu-item <?php echo isset($submenu) && $submenu == "CQMS Application home page" ? 'menu-item-active' : '';?>" aria-haspopup="true">
													<a href="<?php echo base_url();?>secure/home" class="menu-link">
														<span class="menu-text">CQMS Application homepage</span>
														<span class="menu-desc"></span>
													</a>
												</li>
											</ul>
										</div>
									</li>
									<?php
									if(user()->group_type == 'admin' || user()->group_type == 'root')
									{
									?>
									<li class="menu-item menu-item-submenu menu-item-rel <?php echo isset($menu) && $menu == "student" ? 'menu-item-here menu-item-open' : '';?>" data-menu-toggle="click" aria-haspopup="true">
										<a href="javascript:;" class="menu-link menu-toggle">
											<span class="menu-text">Student</span>
											<span class="menu-desc"></span>
											<i class="menu-arrow"></i>
										</a>
										<div class="menu-submenu menu-submenu-classic menu-submenu-left">
											<ul class="menu-subnav">
												<li class="menu-item <?php echo isset($submenu) && $submenu == "forms" ? 'menu-item-active' : '';?>" aria-haspopup="true">
													<a href="<?php echo base_url();?>secure/register_student" class="menu-link">
														<span class="svg-icon menu-icon">

															<!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Box2.svg-->
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<rect x="0" y="0" width="24" height="24" />
																	<path d="M4,9.67471899 L10.880262,13.6470401 C10.9543486,13.689814 11.0320333,13.7207107 11.1111111,13.740321 L11.1111111,21.4444444 L4.49070127,17.526473 C4.18655139,17.3464765 4,17.0193034 4,16.6658832 L4,9.67471899 Z M20,9.56911707 L20,16.6658832 C20,17.0193034 19.8134486,17.3464765 19.5092987,17.526473 L12.8888889,21.4444444 L12.8888889,13.6728275 C12.9050191,13.6647696 12.9210067,13.6561758 12.9368301,13.6470401 L20,9.56911707 Z" fill="#000000" />
																	<path d="M4.21611835,7.74669402 C4.30015839,7.64056877 4.40623188,7.55087574 4.5299008,7.48500698 L11.5299008,3.75665466 C11.8237589,3.60013944 12.1762411,3.60013944 12.4700992,3.75665466 L19.4700992,7.48500698 C19.5654307,7.53578262 19.6503066,7.60071528 19.7226939,7.67641889 L12.0479413,12.1074394 C11.9974761,12.1365754 11.9509488,12.1699127 11.9085461,12.2067543 C11.8661433,12.1699127 11.819616,12.1365754 11.7691509,12.1074394 L4.21611835,7.74669402 Z" fill="#000000" opacity="0.3" />
																</g>
															</svg>

															<!--end::Svg Icon-->
														</span>
														<span class="menu-text">Register New Student</span>
														
													</a>
												</li>
												<li class="menu-item <?php echo isset($submenu) && $submenu == "student_list" ? 'menu-item-active' : '';?>" aria-haspopup="true">
													<a href="<?php echo base_url();?>secure/list/student" class="menu-link">
														<span class="svg-icon menu-icon">

															<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Add-user.svg-->
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<polygon points="0 0 24 0 24 24 0 24" />
																	<path d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																	<path d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
																</g>
															</svg>

															<!--end::Svg Icon-->
														</span>
														<span class="menu-text">Student List</span>
													</a>
												</li>
												<li class="menu-item <?php echo isset($submenu) && $submenu == "review_registration" ? 'menu-item-active' : '';?>" aria-haspopup="true">
													<a href="<?php echo base_url();?>secure/list/register_review" class="menu-link">
														<span class="svg-icon menu-icon">

															<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Add-user.svg-->
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<polygon points="0 0 24 0 24 24 0 24" />
																	<path d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																	<path d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
																</g>
															</svg>

															<!--end::Svg Icon-->
														</span>
														<span class="menu-text">Review Registration List</span>
													</a>
												</li>
												<li class="menu-item <?php echo isset($submenu) && $submenu == "student_lesson_score" ? 'menu-item-active' : '';?>" aria-haspopup="true">
													<a href="/secure/list/student_lesson_score" class="menu-link">
														<span class="svg-icon menu-icon">

															<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Add-user.svg-->
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<polygon points="0 0 24 0 24 24 0 24"/>
																	<path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
																	<rect fill="#000000" x="6" y="11" width="9" height="2" rx="1"/>
																	<rect fill="#000000" x="6" y="15" width="5" height="2" rx="1"/>
																</g>
															</svg>

															<!--end::Svg Icon-->
														</span>
														<span class="menu-text">Student Lesson Score List</span>
													</a>
												</li>
												<li class="menu-item <?php echo isset($submenu) && $submenu == "student_profile" ? 'menu-item-active' : '';?>" aria-haspopup="true">
													<a href="<?php echo base_url();?>secure/list/student" class="menu-link">
														<span class="svg-icon menu-icon">
															<!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\legacy\metronic\theme\html\demo8\dist/../src/media/svg/icons\Communication\Address-card.svg-->
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<rect x="0" y="0" width="24" height="24"/>
																	<path d="M6,2 L18,2 C19.6568542,2 21,3.34314575 21,5 L21,19 C21,20.6568542 19.6568542,22 18,22 L6,22 C4.34314575,22 3,20.6568542 3,19 L3,5 C3,3.34314575 4.34314575,2 6,2 Z M12,11 C13.1045695,11 14,10.1045695 14,9 C14,7.8954305 13.1045695,7 12,7 C10.8954305,7 10,7.8954305 10,9 C10,10.1045695 10.8954305,11 12,11 Z M7.00036205,16.4995035 C6.98863236,16.6619875 7.26484009,17 7.4041679,17 C11.463736,17 14.5228466,17 16.5815,17 C16.9988413,17 17.0053266,16.6221713 16.9988413,16.5 C16.8360465,13.4332455 14.6506758,12 11.9907452,12 C9.36772908,12 7.21569918,13.5165724 7.00036205,16.4995035 Z" fill="#000000"/>
																</g>
															</svg>
															<!--end::Svg Icon-->
														</span>
														<span class="menu-text">Student Profile</span>
													</a>
												</li>
												<li class="menu-item menu-item-submenu <?php echo isset($submenu) && in_array($submenu,array('burn_credit')) ? 'menu-item-active' : '';?>" data-menu-toggle="hover" aria-haspopup="true">
													<a href="<?php echo base_url();?>secure/list/student" class="menu-link menu-toggle">
														<span class="svg-icon menu-icon">

															<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Add-user.svg-->
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<polygon points="0 0 24 0 24 24 0 24" />
																	<path d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																	<path d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
																</g>
															</svg>

															<!--end::Svg Icon-->
														</span>
														<span class="menu-text">Student Credit List</span>
														<i class="menu-arrow"></i>
													</a>
													<div class="menu-submenu menu-submenu-classic menu-submenu-right">
														<ul class="menu-subnav">
															<li class="menu-item <?php echo isset($submenu) && $submenu == "credit_list" ? 'menu-item-active' : '';?>" aria-haspopup="true">
																<a href="<?php echo base_url() . 'secure/list/student_ch';?>" class="menu-link">
																	<i class="menu-bullet menu-bullet-dot">
																		<span></span>
																	</i>
																	<span class="menu-text">Credit List</span>
																</a>
															</li>
															<li class="menu-item <?php echo isset($submenu) && $submenu == "burn_credit" ? 'menu-item-active' : '';?>" aria-haspopup="true">
																<a href="<?php echo base_url() . 'secure/list/burn_credit';?>" class="menu-link">
																	<i class="menu-bullet menu-bullet-dot">
																		<span></span>
																	</i>
																	<span class="menu-text">Burn Credit</span>
																</a>
															</li>
															<?php
															/* 
															<li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
																<a href="javascript:;" class="menu-link menu-toggle">
																	<i class="menu-bullet menu-bullet-dot">
																		<span></span>
																	</i>
																	<span class="menu-text">Extensions</span>
																	<i class="menu-arrow"></i>
																</a>
																<div class="menu-submenu menu-submenu-classic menu-submenu-right">
																	<ul class="menu-subnav">
																		<li class="menu-item" aria-haspopup="true">
																			<a href="crud/datatables/extensions/buttons.html" class="menu-link">
																				<i class="menu-bullet menu-bullet-dot">
																					<span></span>
																				</i>
																				<span class="menu-text">Buttons</span>
																			</a>
																		</li>
																		<li class="menu-item" aria-haspopup="true">
																			<a href="crud/datatables/extensions/colreorder.html" class="menu-link">
																				<i class="menu-bullet menu-bullet-dot">
																					<span></span>
																				</i>
																				<span class="menu-text">ColReorder</span>
																			</a>
																		</li>
																		<li class="menu-item" aria-haspopup="true">
																			<a href="crud/datatables/extensions/keytable.html" class="menu-link">
																				<i class="menu-bullet menu-bullet-dot">
																					<span></span>
																				</i>
																				<span class="menu-text">KeyTable</span>
																			</a>
																		</li>
																		<li class="menu-item" aria-haspopup="true">
																			<a href="crud/datatables/extensions/responsive.html" class="menu-link">
																				<i class="menu-bullet menu-bullet-dot">
																					<span></span>
																				</i>
																				<span class="menu-text">Responsive</span>
																			</a>
																		</li>
																		<li class="menu-item" aria-haspopup="true">
																			<a href="crud/datatables/extensions/rowgroup.html" class="menu-link">
																				<i class="menu-bullet menu-bullet-dot">
																					<span></span>
																				</i>
																				<span class="menu-text">RowGroup</span>
																			</a>
																		</li>
																		<li class="menu-item" aria-haspopup="true">
																			<a href="crud/datatables/extensions/rowreorder.html" class="menu-link">
																				<i class="menu-bullet menu-bullet-dot">
																					<span></span>
																				</i>
																				<span class="menu-text">RowReorder</span>
																			</a>
																		</li>
																		<li class="menu-item" aria-haspopup="true">
																			<a href="crud/datatables/extensions/scroller.html" class="menu-link">
																				<i class="menu-bullet menu-bullet-dot">
																					<span></span>
																				</i>
																				<span class="menu-text">Scroller</span>
																			</a>
																		</li>
																		<li class="menu-item" aria-haspopup="true">
																			<a href="crud/datatables/extensions/select.html" class="menu-link">
																				<i class="menu-bullet menu-bullet-dot">
																					<span></span>
																				</i>
																				<span class="menu-text">Select</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</li>
															 */
															?>
														</ul>
													</div>
												</li>
											</ul>
										</div>
									</li>
									<li class="menu-item menu-item-submenu menu-item-rel <?php echo isset($menu) && $menu == "teacher" ? 'menu-item-here menu-item-open' : '';?>" data-menu-toggle="click" aria-haspopup="true">
										<a href="javascript:;" class="menu-link menu-toggle">
											<span class="menu-text">Teacher</span>
											<span class="menu-desc"></span>
											<i class="menu-arrow"></i>
										</a>
										<div class="menu-submenu menu-submenu-classic menu-submenu-left">
											<ul class="menu-subnav">
												<li class="menu-item <?php echo isset($submenu) && $submenu == "forms" ? 'menu-item-active' : '';?>" aria-haspopup="true">
													<a href="<?php echo base_url();?>secure/teacher_form_simple" class="menu-link">
														<span class="svg-icon menu-icon">

															<!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Box2.svg-->
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<rect x="0" y="0" width="24" height="24" />
																	<path d="M4,9.67471899 L10.880262,13.6470401 C10.9543486,13.689814 11.0320333,13.7207107 11.1111111,13.740321 L11.1111111,21.4444444 L4.49070127,17.526473 C4.18655139,17.3464765 4,17.0193034 4,16.6658832 L4,9.67471899 Z M20,9.56911707 L20,16.6658832 C20,17.0193034 19.8134486,17.3464765 19.5092987,17.526473 L12.8888889,21.4444444 L12.8888889,13.6728275 C12.9050191,13.6647696 12.9210067,13.6561758 12.9368301,13.6470401 L20,9.56911707 Z" fill="#000000" />
																	<path d="M4.21611835,7.74669402 C4.30015839,7.64056877 4.40623188,7.55087574 4.5299008,7.48500698 L11.5299008,3.75665466 C11.8237589,3.60013944 12.1762411,3.60013944 12.4700992,3.75665466 L19.4700992,7.48500698 C19.5654307,7.53578262 19.6503066,7.60071528 19.7226939,7.67641889 L12.0479413,12.1074394 C11.9974761,12.1365754 11.9509488,12.1699127 11.9085461,12.2067543 C11.8661433,12.1699127 11.819616,12.1365754 11.7691509,12.1074394 L4.21611835,7.74669402 Z" fill="#000000" opacity="0.3" />
																</g>
															</svg>

															<!--end::Svg Icon-->
														</span>
														<span class="menu-text">Register New Teacher</span>
														
													</a>
												</li>
												<li class="menu-item <?php echo isset($submenu) && $submenu == "report_link" ? 'menu-item-active' : '';?>" aria-haspopup="true">
													<a href="<?php echo base_url();?>secure/list/report_link?page=1" class="menu-link">
														<span class="svg-icon menu-icon">

															<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Add-user.svg-->
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<polygon points="0 0 24 0 24 24 0 24" />
																	<path d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																	<path d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
																</g>
															</svg>

															<!--end::Svg Icon-->
														</span>
														<span class="menu-text">Report Links List</span>
													</a>
												</li>
											</ul>
										</div>
									</li>
									<li class="menu-item menu-item-submenu menu-item-rel <?php echo isset($menu) && ( $menu == "module" || $menu == "package" ) ? 'menu-item-here menu-item-open' : '';?>" data-menu-toggle="click" aria-haspopup="true">
										<a href="javascript:;" class="menu-link menu-toggle">
											<span class="menu-text">Modules & Package</span>
											<span class="menu-desc"></span>
											<i class="menu-arrow"></i>
										</a>
										<div class="menu-submenu menu-submenu-classic menu-submenu-left">
											<ul class="menu-subnav">
												<li class="menu-item <?php echo isset($submenu) && $submenu == "modules" ? 'menu-item-active' : '';?>" aria-haspopup="true">
													<a href="<?php echo base_url();?>secure/list/modules" class="menu-link">
														<span class="svg-icon menu-icon">
															<!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\legacy\metronic\theme\html\demo8\dist/../src/media/svg/icons\Communication\Archive.svg-->
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<rect x="0" y="0" width="24" height="24"/>
																	<path d="M4.5,3 L19.5,3 C20.3284271,3 21,3.67157288 21,4.5 L21,19.5 C21,20.3284271 20.3284271,21 19.5,21 L4.5,21 C3.67157288,21 3,20.3284271 3,19.5 L3,4.5 C3,3.67157288 3.67157288,3 4.5,3 Z M8,5 C7.44771525,5 7,5.44771525 7,6 C7,6.55228475 7.44771525,7 8,7 L16,7 C16.5522847,7 17,6.55228475 17,6 C17,5.44771525 16.5522847,5 16,5 L8,5 Z" fill="#000000"/>
																</g>
															</svg><!--end::Svg Icon-->
														</span>
														<span class="menu-text">Modules List</span>
													</a>
												</li>
												<li class="menu-item <?php echo isset($submenu) && $submenu == "forms_modules" ? 'menu-item-active' : '';?>" aria-haspopup="true">
													<a href="<?php echo base_url();?>secure/form_modules" class="menu-link">
														<span class="svg-icon menu-icon">

															<!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Box2.svg-->
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<rect x="0" y="0" width="24" height="24" />
																	<path d="M4,9.67471899 L10.880262,13.6470401 C10.9543486,13.689814 11.0320333,13.7207107 11.1111111,13.740321 L11.1111111,21.4444444 L4.49070127,17.526473 C4.18655139,17.3464765 4,17.0193034 4,16.6658832 L4,9.67471899 Z M20,9.56911707 L20,16.6658832 C20,17.0193034 19.8134486,17.3464765 19.5092987,17.526473 L12.8888889,21.4444444 L12.8888889,13.6728275 C12.9050191,13.6647696 12.9210067,13.6561758 12.9368301,13.6470401 L20,9.56911707 Z" fill="#000000" />
																	<path d="M4.21611835,7.74669402 C4.30015839,7.64056877 4.40623188,7.55087574 4.5299008,7.48500698 L11.5299008,3.75665466 C11.8237589,3.60013944 12.1762411,3.60013944 12.4700992,3.75665466 L19.4700992,7.48500698 C19.5654307,7.53578262 19.6503066,7.60071528 19.7226939,7.67641889 L12.0479413,12.1074394 C11.9974761,12.1365754 11.9509488,12.1699127 11.9085461,12.2067543 C11.8661433,12.1699127 11.819616,12.1365754 11.7691509,12.1074394 L4.21611835,7.74669402 Z" fill="#000000" opacity="0.3" />
																</g>
															</svg>

															<!--end::Svg Icon-->
														</span>
														<span class="menu-text">Module Form</span>
														
													</a>
												</li>
												<li class="menu-item <?php echo isset($submenu) && $submenu == "packages" ? 'menu-item-active' : '';?>" aria-haspopup="true">
													<a href="<?php echo base_url();?>secure/list/packages" class="menu-link">
														<span class="svg-icon menu-icon">
															<!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\legacy\metronic\theme\html\demo8\dist/../src/media/svg/icons\Communication\Archive.svg-->
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<rect x="0" y="0" width="24" height="24"/>
																	<path d="M4.5,3 L19.5,3 C20.3284271,3 21,3.67157288 21,4.5 L21,19.5 C21,20.3284271 20.3284271,21 19.5,21 L4.5,21 C3.67157288,21 3,20.3284271 3,19.5 L3,4.5 C3,3.67157288 3.67157288,3 4.5,3 Z M8,5 C7.44771525,5 7,5.44771525 7,6 C7,6.55228475 7.44771525,7 8,7 L16,7 C16.5522847,7 17,6.55228475 17,6 C17,5.44771525 16.5522847,5 16,5 L8,5 Z" fill="#000000"/>
																</g>
															</svg><!--end::Svg Icon-->
														</span>
														<span class="menu-text">Packages List</span>
													</a>
												</li>
												<li class="menu-item <?php echo isset($submenu) && $submenu == "forms_packages" ? 'menu-item-active' : '';?>" aria-haspopup="true">
													<a href="<?php echo base_url();?>secure/form_packages" class="menu-link">
														<span class="svg-icon menu-icon">

															<!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Box2.svg-->
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<rect x="0" y="0" width="24" height="24" />
																	<path d="M4,9.67471899 L10.880262,13.6470401 C10.9543486,13.689814 11.0320333,13.7207107 11.1111111,13.740321 L11.1111111,21.4444444 L4.49070127,17.526473 C4.18655139,17.3464765 4,17.0193034 4,16.6658832 L4,9.67471899 Z M20,9.56911707 L20,16.6658832 C20,17.0193034 19.8134486,17.3464765 19.5092987,17.526473 L12.8888889,21.4444444 L12.8888889,13.6728275 C12.9050191,13.6647696 12.9210067,13.6561758 12.9368301,13.6470401 L20,9.56911707 Z" fill="#000000" />
																	<path d="M4.21611835,7.74669402 C4.30015839,7.64056877 4.40623188,7.55087574 4.5299008,7.48500698 L11.5299008,3.75665466 C11.8237589,3.60013944 12.1762411,3.60013944 12.4700992,3.75665466 L19.4700992,7.48500698 C19.5654307,7.53578262 19.6503066,7.60071528 19.7226939,7.67641889 L12.0479413,12.1074394 C11.9974761,12.1365754 11.9509488,12.1699127 11.9085461,12.2067543 C11.8661433,12.1699127 11.819616,12.1365754 11.7691509,12.1074394 L4.21611835,7.74669402 Z" fill="#000000" opacity="0.3" />
																</g>
															</svg>

															<!--end::Svg Icon-->
														</span>
														<span class="menu-text">Package Form</span>
														
													</a>
												</li>
											</ul>
										</div>
									</li>
									<li class="menu-item menu-item-submenu menu-item-rel <?php echo isset($menu) && $menu == "finance" ? 'menu-item-here menu-item-open' : '';?>" data-menu-toggle="click" aria-haspopup="true">
										<a href="javascript:;" class="menu-link menu-toggle">
											<span class="menu-text">Finance</span>
											<span class="menu-desc"></span>
											<i class="menu-arrow"></i>
										</a>
										<div class="menu-submenu menu-submenu-classic menu-submenu-left">
											<ul class="menu-subnav">
												<li class="menu-item <?php echo isset($submenu) && $submenu == "student_payments" ? 'menu-item-active' : '';?>" aria-haspopup="true">
													<a href="<?php echo base_url();?>secure/list/payments" class="menu-link">
														<span class="svg-icon menu-icon">

															<!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Box2.svg-->
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<rect x="0" y="0" width="24" height="24" />
																	<path d="M4,9.67471899 L10.880262,13.6470401 C10.9543486,13.689814 11.0320333,13.7207107 11.1111111,13.740321 L11.1111111,21.4444444 L4.49070127,17.526473 C4.18655139,17.3464765 4,17.0193034 4,16.6658832 L4,9.67471899 Z M20,9.56911707 L20,16.6658832 C20,17.0193034 19.8134486,17.3464765 19.5092987,17.526473 L12.8888889,21.4444444 L12.8888889,13.6728275 C12.9050191,13.6647696 12.9210067,13.6561758 12.9368301,13.6470401 L20,9.56911707 Z" fill="#000000" />
																	<path d="M4.21611835,7.74669402 C4.30015839,7.64056877 4.40623188,7.55087574 4.5299008,7.48500698 L11.5299008,3.75665466 C11.8237589,3.60013944 12.1762411,3.60013944 12.4700992,3.75665466 L19.4700992,7.48500698 C19.5654307,7.53578262 19.6503066,7.60071528 19.7226939,7.67641889 L12.0479413,12.1074394 C11.9974761,12.1365754 11.9509488,12.1699127 11.9085461,12.2067543 C11.8661433,12.1699127 11.819616,12.1365754 11.7691509,12.1074394 L4.21611835,7.74669402 Z" fill="#000000" opacity="0.3" />
																</g>
															</svg>

															<!--end::Svg Icon-->
														</span>
														<span class="menu-text">Student Payments</span>
														
													</a>
												</li>
												<li class="menu-item <?php echo isset($submenu) && $submenu == "receipt_uploads" ? 'menu-item-active' : '';?>" aria-haspopup="true">
													<a href="<?php echo base_url();?>secure/list/receipts" class="menu-link">
														<span class="svg-icon menu-icon">

															<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Add-user.svg-->
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<polygon points="0 0 24 0 24 24 0 24" />
																	<path d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																	<path d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
																</g>
															</svg>

															<!--end::Svg Icon-->
														</span>
														<span class="menu-text">Receipt Upload List</span>
													</a>
												</li>
											</ul>
										</div>
									</li>
									<?php
									}
									?>
									<?php
									if(user()->group_type == 'teacher')
									{
										$teacher = $this->db->where('id', user()->group_id)->get('teacher')->row();
									?>
									<li class="menu-item menu-item-submenu menu-item-rel  <?php echo isset($menu) && $menu == "student_lesson_score" ? 'menu-item-here menu-item-open' : '';?>">
										<a href="/secure/list/student_lesson_score" class="menu-link">
											<span class="menu-text">Lesson Score List</span>
										</a>
									</li>
									<li class="menu-item menu-item-submenu menu-item-rel  <?php echo isset($menu) && $menu == "class_canceled" ? 'menu-item-here menu-item-open' : '';?>">
										<a href="/secure/list/class_canceled" class="menu-link">
											<span class="menu-text">Canceled Class List</span>
										</a>
									</li>
									<?php
										if($this->session->userdata('group_id') == '44' || $this->session->userdata('group_id') == '38') // guru id selain dari penyelia (currently raimi)
										{
									?>
										<li class="menu-item menu-item-submenu menu-item-rel <?php echo isset($menu) && $menu == "teacher" ? 'menu-item-here menu-item-open' : '';?>" data-menu-toggle="click" aria-haspopup="true">
											<a href="javascript:;" class="menu-link menu-toggle">
												<span class="menu-text">Teacher</span>
												<span class="menu-desc"></span>
												<i class="menu-arrow"></i>
											</a>
											<div class="menu-submenu menu-submenu-classic menu-submenu-left">
												<ul class="menu-subnav">
													<li class="menu-item <?php echo isset($submenu) && $submenu == "report_link" ? 'menu-item-active' : '';?>" aria-haspopup="true">
														<a href="<?php echo base_url();?>secure/list/report_link?page=1" class="menu-link">
															<span class="svg-icon menu-icon">

																<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Add-user.svg-->
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<polygon points="0 0 24 0 24 24 0 24" />
																		<path d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																		<path d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
																	</g>
																</svg>

																<!--end::Svg Icon-->
															</span>
															<span class="menu-text">Report Links List</span>
														</a>
													</li>
												</ul>
											</div>
										</li>
									<?php
										}
									}
									?>
									
									<?php if(is_wabot()): ?>
									<li class="menu-item menu-item-submenu menu-item-rel <?php echo isset($menu) && ( $menu == "module" || $menu == "package" ) ? 'menu-item-here menu-item-open' : '';?>" data-menu-toggle="click" aria-haspopup="true">
										<a href="javascript:;" class="menu-link menu-toggle">
											<span class="menu-text">Whatsapp</span>
											<span class="menu-desc"></span>
											<i class="menu-arrow"></i>
										</a>
										<div class="menu-submenu menu-submenu-classic menu-submenu-left">
											<ul class="menu-subnav">
												<li class="menu-item <?php echo isset($submenu) && $submenu == "modules" ? 'menu-item-active' : '';?>" aria-haspopup="true">
													<a href="<?php echo base_url();?>secure/list/whatsapp_queue" class="menu-link">
														<span class="svg-icon menu-icon">
															<!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\legacy\metronic\theme\html\demo8\dist/../src/media/svg/icons\Communication\Archive.svg-->
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<rect x="0" y="0" width="24" height="24"/>
																	<path d="M4.5,3 L19.5,3 C20.3284271,3 21,3.67157288 21,4.5 L21,19.5 C21,20.3284271 20.3284271,21 19.5,21 L4.5,21 C3.67157288,21 3,20.3284271 3,19.5 L3,4.5 C3,3.67157288 3.67157288,3 4.5,3 Z M8,5 C7.44771525,5 7,5.44771525 7,6 C7,6.55228475 7.44771525,7 8,7 L16,7 C16.5522847,7 17,6.55228475 17,6 C17,5.44771525 16.5522847,5 16,5 L8,5 Z" fill="#000000"/>
																</g>
															</svg><!--end::Svg Icon-->
														</span>
														<span class="menu-text">Blasted Message List</span>
													</a>
												</li>
												<li class="menu-item <?php echo isset($submenu) && $submenu == "forms_modules" ? 'menu-item-active' : '';?>" aria-haspopup="true">
													<a href="<?php echo base_url();?>secure/whatsapp_blast_form" class="menu-link">
														<span class="svg-icon menu-icon">

															<!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Box2.svg-->
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<rect x="0" y="0" width="24" height="24" />
																	<path d="M4,9.67471899 L10.880262,13.6470401 C10.9543486,13.689814 11.0320333,13.7207107 11.1111111,13.740321 L11.1111111,21.4444444 L4.49070127,17.526473 C4.18655139,17.3464765 4,17.0193034 4,16.6658832 L4,9.67471899 Z M20,9.56911707 L20,16.6658832 C20,17.0193034 19.8134486,17.3464765 19.5092987,17.526473 L12.8888889,21.4444444 L12.8888889,13.6728275 C12.9050191,13.6647696 12.9210067,13.6561758 12.9368301,13.6470401 L20,9.56911707 Z" fill="#000000" />
																	<path d="M4.21611835,7.74669402 C4.30015839,7.64056877 4.40623188,7.55087574 4.5299008,7.48500698 L11.5299008,3.75665466 C11.8237589,3.60013944 12.1762411,3.60013944 12.4700992,3.75665466 L19.4700992,7.48500698 C19.5654307,7.53578262 19.6503066,7.60071528 19.7226939,7.67641889 L12.0479413,12.1074394 C11.9974761,12.1365754 11.9509488,12.1699127 11.9085461,12.2067543 C11.8661433,12.1699127 11.819616,12.1365754 11.7691509,12.1074394 L4.21611835,7.74669402 Z" fill="#000000" opacity="0.3" />
																</g>
															</svg>

															<!--end::Svg Icon-->
														</span>
														<span class="menu-text">Create New Blast</span>
														
													</a>
												</li>
												<li class="menu-item <?php echo isset($submenu) && $submenu == "packages" ? 'menu-item-active' : '';?>" aria-haspopup="true">
													<a href="<?php echo base_url();?>secure/list/blast_phone" class="menu-link">
														<span class="svg-icon menu-icon">
															<!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\legacy\metronic\theme\html\demo8\dist/../src/media/svg/icons\Communication\Archive.svg-->
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<rect x="0" y="0" width="24" height="24"/>
																	<path d="M4.5,3 L19.5,3 C20.3284271,3 21,3.67157288 21,4.5 L21,19.5 C21,20.3284271 20.3284271,21 19.5,21 L4.5,21 C3.67157288,21 3,20.3284271 3,19.5 L3,4.5 C3,3.67157288 3.67157288,3 4.5,3 Z M8,5 C7.44771525,5 7,5.44771525 7,6 C7,6.55228475 7.44771525,7 8,7 L16,7 C16.5522847,7 17,6.55228475 17,6 C17,5.44771525 16.5522847,5 16,5 L8,5 Z" fill="#000000"/>
																</g>
															</svg><!--end::Svg Icon-->
														</span>
														<span class="menu-text">Phone No List</span>
													</a>
												</li>
												<li class="menu-item <?php echo isset($submenu) && $submenu == "forms_packages" ? 'menu-item-active' : '';?>" aria-haspopup="true">
													<a href="<?php echo base_url();?>secure/blast_phone_form" class="menu-link">
														<span class="svg-icon menu-icon">

															<!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Box2.svg-->
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<rect x="0" y="0" width="24" height="24" />
																	<path d="M4,9.67471899 L10.880262,13.6470401 C10.9543486,13.689814 11.0320333,13.7207107 11.1111111,13.740321 L11.1111111,21.4444444 L4.49070127,17.526473 C4.18655139,17.3464765 4,17.0193034 4,16.6658832 L4,9.67471899 Z M20,9.56911707 L20,16.6658832 C20,17.0193034 19.8134486,17.3464765 19.5092987,17.526473 L12.8888889,21.4444444 L12.8888889,13.6728275 C12.9050191,13.6647696 12.9210067,13.6561758 12.9368301,13.6470401 L20,9.56911707 Z" fill="#000000" />
																	<path d="M4.21611835,7.74669402 C4.30015839,7.64056877 4.40623188,7.55087574 4.5299008,7.48500698 L11.5299008,3.75665466 C11.8237589,3.60013944 12.1762411,3.60013944 12.4700992,3.75665466 L19.4700992,7.48500698 C19.5654307,7.53578262 19.6503066,7.60071528 19.7226939,7.67641889 L12.0479413,12.1074394 C11.9974761,12.1365754 11.9509488,12.1699127 11.9085461,12.2067543 C11.8661433,12.1699127 11.819616,12.1365754 11.7691509,12.1074394 L4.21611835,7.74669402 Z" fill="#000000" opacity="0.3" />
																</g>
															</svg>

															<!--end::Svg Icon-->
														</span>
														<span class="menu-text">Add New Phone</span>
														
													</a>
												</li>
												<li class="menu-item <?php echo isset($submenu) && $submenu == "forms_packages" ? 'menu-item-active' : '';?>" aria-haspopup="true">
													<a href="<?php echo base_url();?>secure/wabot_settings" class="menu-link">
														<span class="svg-icon menu-icon">

															<!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Box2.svg-->
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<rect x="0" y="0" width="24" height="24" />
																	<path d="M4,9.67471899 L10.880262,13.6470401 C10.9543486,13.689814 11.0320333,13.7207107 11.1111111,13.740321 L11.1111111,21.4444444 L4.49070127,17.526473 C4.18655139,17.3464765 4,17.0193034 4,16.6658832 L4,9.67471899 Z M20,9.56911707 L20,16.6658832 C20,17.0193034 19.8134486,17.3464765 19.5092987,17.526473 L12.8888889,21.4444444 L12.8888889,13.6728275 C12.9050191,13.6647696 12.9210067,13.6561758 12.9368301,13.6470401 L20,9.56911707 Z" fill="#000000" />
																	<path d="M4.21611835,7.74669402 C4.30015839,7.64056877 4.40623188,7.55087574 4.5299008,7.48500698 L11.5299008,3.75665466 C11.8237589,3.60013944 12.1762411,3.60013944 12.4700992,3.75665466 L19.4700992,7.48500698 C19.5654307,7.53578262 19.6503066,7.60071528 19.7226939,7.67641889 L12.0479413,12.1074394 C11.9974761,12.1365754 11.9509488,12.1699127 11.9085461,12.2067543 C11.8661433,12.1699127 11.819616,12.1365754 11.7691509,12.1074394 L4.21611835,7.74669402 Z" fill="#000000" opacity="0.3" />
																</g>
															</svg>

															<!--end::Svg Icon-->
														</span>
														<span class="menu-text">Wabot Settings</span>
														
													</a>
												</li>
											</ul>
										</div>
									</li>
									<?php endif;?>
								</ul>

								<!--end::Header Nav-->
							</div>

							<!--end::Header Menu-->
						</div>
					</div>
					
					<!--end::Header Menu Wrapper-->