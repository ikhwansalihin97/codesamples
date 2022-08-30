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
								<h5 class="text-dark font-weight-bold my-1 mr-5">List</h5>

								<!--end::Page Title-->

								<!--begin::Breadcrumb-->
								<ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
									<li class="breadcrumb-item text-muted">
										<a href="" class="text-muted"><?php echo ucwords(strtolower($menu));?></a>
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
								if(isset($actions)){
									echo implode(' ', $actions);
								}
							?>
						</div>
						
					</div>
				</div>

				<!--end::Subheader-->
				
				
				<div class="content flex-column-fluid" id="kt_content">
					<!--begin::Dashboard-->
					
					<!--begin::Portlet-->
					<div class="card card-custom">
						<div class="card-header">
							<div class="card-title">
								<span class="card-icon">
									<i class="flaticon-open-box"></i>
								</span>
								<h3 class="card-label">
									<?php echo $title;?> 
								</h3>
							</div>
								<div class="card-toolbar">
									<?php
									$urlAction = base_url() . $this->uri->segment(1) . '/' . $this->uri->segment(2) .'/'. $this->uri->segment(3);
									?>
									<form action ="<?php echo isset($urlAction) && $urlAction != '' ? $urlAction : '#';?>" method="POST" class="search-form">
											<div class="input-group">
												<input type="text" name="search_name" value="<?php echo isset($search_data["search"]) ? $search_data['search'] : '';?>" class="form-control" placeholder="Search for...">
												<input type="hidden" class="filterselectValue" name="filter" value="<?php echo isset($search_data["filter"]) ? $search_data["filter"] : '';?>" />
												<input type="hidden" class="filterselectbyValue" name="filterBy" value="<?php echo isset($search_data["filterBy"]) ? $search_data["filterBy"] : '';?>" />
												<input type="hidden" name="sql_sort" value="<?php echo isset($search_data["sql_sort"]) ? $search_data["sql_sort"] : '';?>" />
												<input type="hidden" name="sql_sort_column" value="<?php echo isset($search_data["sql_sort_column"]) ? $search_data["sql_sort_column"] : '';?>" class="sql-sort-column" />
												<input type="hidden" name="download" value="false" />
												<input type="hidden" name="download_type" value="" />
												<span class="input-group-append">
													<button class="btn btn-primary" type="submit" style="z-index:0;">
														Go!
													</button>
												</span>
											</div>
									</form>
								</div>
						</div>
						<div class="card-body">
							<?php 
							echo isset($total_rows) ? "<span class='label label-xl label-inline label-pill label-success'> Total Data : " . $total_rows . "</span>" : '';
							?>
							<div class="row justify-content-end mb-5">
								<button class="btn btn-outline-success btn-wide mr-2 submitfilterForm" type="button" disabled>Filter <i class="flaticon-search"></i></button>
								<a class="btn btn-outline-success btn-wide mr-6" href="<?php echo base_url() . "secure/" . $this->uri->segment(2) . '/' . $this->uri->segment(3);?>">Clear Filter <i class="flaticon-interface-1"></i></a>
							</div>
							<div class="form-group row">
								<div class="col-md-4">
									<label>Filter By</label>
									<select name="filterSelect" class="form-control filterSelect">
										<option value="" readonly disabled selected>Choose</option>
									<?php
										foreach($filter as $value=>$label){
											$selected = '';
											
											
											if(isset($search_data["filter"]) && $search_data["filter"] == $value)
											{
												$selected = 'selected';
											}
											
											echo '<option value="'.$value.'" '.$selected.'>'.$label.'</option>';
										}
									?>
									</select>
								</div>
							
							
							<?php
								// ad($selectFilter);
								if(isset($selectFilter) && is_array($selectFilter) && sizeof($selectFilter) > 0)
								{ 
									foreach($selectFilter as $row=>$val)
									{		
							?>
									<div class="col-md-4 filterBySelect" id="<?php echo $row;?>" style="<?php echo isset($search_data["filter"]) && $search_data["filter"] == $row ? '' : 'display:none';?>">
										<label><?php echo ucwords(str_replace('_',' ',$row));?></label>
										<select class="form-control filterBy">
										<option value="" readonly disabled selected>Choose</option>
										<?php
										foreach($val as $a=>$b)
										{
											if($b != "")
											{
												echo isset($search_data["filterBy"]) &&  $search_data["filterBy"] == $b ? '<option data-select="'.$b.'" value="'.$b.'" selected >'. $b . '</option>' : '<option data-select="'.$b.'" value="'.$b.'" >'. $b . '</option>';
											}

											// echo '<option value="'.$b.'" >'. $b . '</option>';
										}
										?>
										</select>
									</div>
							<?php
									}
								}
							?>
							
							
							</div>
							<!--begin::Section-->
							<div class="kt-section">
								<div class="kt-section__content">
									<div class="table-responsive">
										<table class="table table-bordered table-striped">
											<?php 
												if(empty($rows)){
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
																No Data Available
																</a>
																<div class="text-dark-75">
																There is currently no data available for this list.
																</div>
															   </div>
															  </div>
															 </div>
															</div>';
												}else{
																
													echo '<thead><tr>';
													foreach($rows[0] as $header=>$val){
														$w = '';
														
														if(ISSET($sort) AND array_key_exists($header, $sort) != FALSE)
														{
															$s = isset($search_data["sql_sort"]) && $search_data["sql_sort_column"] == $sort[$header] ? '<i class="fa fa-sort-' . strtolower($search_data["sql_sort"]) .' text-dark"> </i>' : '<i class="fa fa-sort text-dark"> </i>';
														}
														
														if(ISSET($width) AND array_key_exists($header, $width) != FALSE) $w = 'style="width: '.$width[$header].'px"';
														if(ISSET($sort) AND array_key_exists($header, $sort) != FALSE) $header = '<a href="javascript:void(0)" class="tbl-sorting" data-col="'. $sort[$header] . '" style="text-decoration:none;color:#3F4254;"> ' . $header .' <span style="text-decoration:none;margin-left:5px;"> ' . $s .'</span></a>';
														echo '<th '.$w.'>'.$header.'</th>';
													}
													echo '</tr></thead>';
													echo '<tbody>';
													foreach($rows as $row){
														echo '<tr>';
														foreach($row as $key=>$val){
															// dd($key);
															$align = '';
															if(ISSET($align_right) AND array_search($key, $align_right) !== FALSE) $align = 'text-right';
															if(ISSET($align_center) AND array_search($key, $align_center) !== FALSE) $align = 'text-center';

															echo '<td class="'.$align.'" style="vertical-align: middle;">'.$val.'</td>';
														}
														echo '</tr>';
													}
													echo '</tbody>';

												}
											?>
										</table>
									</div>
								</div>
							</div>
							<!--end::Section-->
							<div class="d-flex flex-wrap py-2 mr-3 justify-content-end">
								<?php echo isset($pagination) ? $pagination : ""; ?>
							</div>
						</div>
					</div>

					<!--end::Portlet-->

					<!--end::Dashboard-->

					
				</div>

				<!--end::Content-->
			</div>

			<!--begin::Content Wrapper-->
		</div>


<!--end::Container-->

<?php
$this->load->view('metronic/secure/m_footer');
?>
<script src="<?php echo base_url();?>template/metronic/demo8_v7/dist/assets/js/pages/features/miscellaneous/sweetalert2.js"></script>
<script type="text/javascript">
$(function() {
	
	$(".download-button").click(function() {
		
		$("input[name='download']").val('true');
		$('.search-form').submit();
	});
	
	$(".yearly-download-button").click(function() {
		
		$("input[name='download']").val('true');
		$("input[name='download_type']").val('yearly');
		$('.search-form').submit();
	});
	
	$('.btn-approve-receipt').click(function(){
		var ReceiptId = $(this).attr('data-ReceiptId');
		var InvoiceId = $(this).attr('data-InvoiceId');
		
		Swal.fire({
			title: "Are you sure?",
			text: "You won't be able to revert this!",
			icon: "warning",
			showCancelButton: true,
			confirmButtonText: "Yes, Approve it!"
		}).then(function(result) {
			if (result.value) {
				$.ajax({
					url: baseUrl + 'secure/approve_receipt',
					method: "POST",
					data: { ReceiptId : ReceiptId, InvoiceId : InvoiceId},
					dataType:'json',
					async:true,
					success: function(response){
						if(response['result'] == 'success')
						{
							toastr.success(response['message']);
							setTimeout(function(){
								location.href = baseUrl + 'secure/list/receipts';
							}, 2000);
						}
						else
						{
							toastr.error(response['message']);
						}
					}
				});
			}
		});
	});
	
	$('.btn-reject-receipt').click(function(){
		var ReceiptId = $(this).attr('data-ReceiptId');
		var InvoiceId = $(this).attr('data-InvoiceId');
		
		Swal.fire({
			title: "Are you sure?",
			text: "You won't be able to revert this!",
			icon: "warning",
			showCancelButton: true,
			confirmButtonText: "Yes, Delete it!"
		}).then(function(result) {
			if (result.value) {
				$.ajax({
					url: baseUrl + 'secure/reject_receipt',
					method: "POST",
					data: { ReceiptId : ReceiptId, InvoiceId : InvoiceId},
					dataType:'json',
					async:true,
					success: function(response){
						if(response['result'] == 'success')
						{
							toastr.success(response['message']);
							setTimeout(function(){
								location.href = baseUrl + 'secure/list/receipts';
							}, 2000);
						}
						else
						{
							toastr.error(response['message']);
						}
					}
				});
			}
		});
	});
	
	$('.btn-approve').click(function(){
		var tableId = $(this).attr('data-tableId');
		var table = $(this).attr('data-table');
		var dataId = $(this).attr('data-Id');
		
		$.ajax({
			url: baseUrl + 'secure/approve_lesson_update_request',
			method: "POST",
			data: { table : table, tableId : tableId, dataId : dataId },
			dataType:'json',
			async:true,
			success: function(response){
				if(response['result'] == 'success')
				{
					toastr.success(response['message']);
					setTimeout(function(){
						location.href = baseUrl + 'secure/list/lesson_update_request';
					}, 2000);
				}
				else
				{
					toastr.error(response['message']);
				}
			}
		});
	});
	
	$('.btnReject').click(function(){
		var tableId = $(this).attr('data-tableId');
		var table = $(this).attr('data-table');
		var dataId = $(this).attr('data-Id');
		
		$.ajax({
			url: baseUrl + 'secure/reject_lesson_update_request',
			method: "POST",
			data: { table : table, tableId : tableId, dataId : dataId },
			dataType:'json',
			async:true,
			success: function(response){
				if(response['result'] == 'success')
				{
					toastr.success(response['message']);
					setTimeout(function(){
						location.href = baseUrl + 'secure/list/lesson_update_request';
					}, 2000);
				}
				else
				{
					toastr.error(response['message']);
				}
			}
		});
	});
	
	
	$('.btnReturnCredit,.btnBurnCredit').click(function(){
		var type = $(this).attr('data-type');
		var dataId = $(this).attr('data-Id');
		var stringType = '';
		
		if(type == 'return')
		{
			stringType = 'return';
		}
		else
		{
			stringType = 'burn';
		}
		
		Swal.fire({
			title: "Are you sure?",
			text: "You won't be able to revert this!",
			icon: "warning",
			showCancelButton: true,
			confirmButtonText: "Yes, " + stringType + " it!"
		}).then(function(result) {
			if (result.value) {
				
				KTApp.block('#kt_body', {
					overlayColor: '#000000',
					state: 'primary',
					message: 'Processing...'
				});
			
				$.ajax({
				url: baseUrl + 'secure/burn_credit_process',
				method: "POST",
				data: { type : type, dataId : dataId },
				dataType:'json',
				async:true,
				success: function(response){
					if(response['result'] == 'success')
					{
						toastr.success(response['message']);
						
						if(type == 'return')
						{
							stringType = 'Returned!';
						}
						else
						{
							stringType = 'Burned!';
						}
						
						Swal.fire(
							stringType,
							"Student credit has been process.",
							"success"
						)
						setTimeout(function(){
							location.href = baseUrl + 'secure/list/burn_credit';
						}, 2000);
					}
					else
					{
						toastr.error(response['message']);
					}
				}
			});
		
				
			}
		});		
	});
	
	$('.btnDeleteCanceledClass').click(function(){
		var key = $(this).attr('data-key');
		
		
		Swal.fire({
			title: "Are you sure?",
			text: "You won't be able to revert this!",
			icon: "warning",
			showCancelButton: true,
			confirmButtonText: "Yes, Delete it!"
		}).then(function(result) {
			if (result.value) {
				
				KTApp.block('#kt_body', {
					overlayColor: '#000000',
					state: 'primary',
					message: 'Processing...'
				});
			
				$.ajax({
				url: baseUrl + 'secure/delete_canceled_class',
				method: "POST",
				data: { key : key},
				dataType:'json',
				async:true,
				success: function(response){
					if(response['result'] == 'success')
					{
						toastr.success(response['message']);
						
						Swal.fire(
							'Deleted!',
							"Canceled class data has been deleted.",
							"success"
						)
						setTimeout(function(){
							location.href = baseUrl + 'secure/list/class_canceled';
						}, 2000);
					}
					else
					{
						toastr.error(response['message']);
						KTApp.unblock('#kt_body');
						
					}
				}
			});
		
				
			}
		});		
	});
	
	$('.btnDeleteLesson').click(function(){
		var key = $(this).attr('data-key');
		
		Swal.fire({
			title: "Are you sure?",
			text: "You won't be able to revert this!",
			icon: "warning",
			showCancelButton: true,
			confirmButtonText: "Yes, Delete it!"
		}).then(function(result) {
			if (result.value) {
				
				KTApp.block('#kt_body', {
					overlayColor: '#000000',
					state: 'primary',
					message: 'Processing...'
				});
			
				$.ajax({
				url: baseUrl + 'secure/delete_lesson',
				method: "POST",
				data: { key : key},
				dataType:'json',
				async:true,
				success: function(response){
					if(response['result'] == 'success')
					{
						toastr.success(response['message']);
						
						Swal.fire(
							'Deleted!',
							"Lesson data has been deleted.",
							"success"
						)
						setTimeout(function(){
							location.href = baseUrl + 'secure/list/student_lesson_score';
						}, 2000);
					}
					else
					{
						toastr.error(response['message']);
						KTApp.unblock('#kt_body');
						
					}
				}
			});
		
				
			}
		});		
	});
	
	
	
	
});
</script>
<?php
$this->load->view('metronic/secure/m_footer_close');
?>

