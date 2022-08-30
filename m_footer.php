			<!--begin::Footer-->
					<div class="footer py-4 d-flex flex-lg-column" id="kt_footer">

						<!--begin::Container-->
						<div class="container-fluid d-flex flex-column flex-md-row align-items-center justify-content-between">

							<!--begin::Copyright-->
							<div class="text-dark order-2 order-md-1">
								<?php
								/* <span class="text-muted font-weight-bold mr-2">2021©</span> */
								?>
								<span class="text-muted font-weight-bold mr-2"><?php echo isset($execution_time) && $execution_time != "" ? 'Execution Time : ' . $execution_time :'';?></span>
								<a href="https://celikalquran.com/" target="_blank" class="text-white text-hover-primary">Celik Al Quran</a>
							</div>

							<!--end::Copyright-->

							<!--begin::Nav-->
							<div class="nav nav-dark order-1 order-md-2">
								<a href="http://keenthemes.com/metronic" target="_blank" class="nav-link pr-3 pl-0 text-muted text-hover-primary">About</a>
								<a href="http://keenthemes.com/metronic" target="_blank" class="nav-link px-3 text-muted text-hover-primary">Team</a>
								<a href="http://keenthemes.com/metronic" target="_blank" class="nav-link pl-3 pr-0 text-muted text-hover-primary">Contact</a>
							</div>

							<!--end::Nav-->
						</div>

						<!--end::Container-->
					</div>

					<!--end::Footer-->
				</div>

				<!--end::Wrapper-->
			</div>

			<!--end::Page-->
		</div>

		<!--end::Main-->
		
	

	

		<!--[html-partial:include:{"file":"partials/_extras/scrolltop.html"}]/-->
		
		<!--begin::Scrolltop-->
		<div id="kt_scrolltop" class="scrolltop">
			<span class="svg-icon">

				<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Up-2.svg-->
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
						<polygon points="0 0 24 0 24 24 0 24" />
						<rect fill="#000000" opacity="0.3" x="11" y="10" width="2" height="10" rx="1" />
						<path d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z" fill="#000000" fill-rule="nonzero" />
					</g>
				</svg>

				<!--end::Svg Icon-->
			</span>
		</div>

		<!--end::Scrolltop-->
		<script>
			var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";
			var baseUrl = "<?php echo base_url();?>"
		</script>

		<!--begin::Global Config(global config for global JS scripts)-->
		<script>
			var KTAppSettings = {
				"breakpoints": {
					"sm": 576,
					"md": 768,
					"lg": 992,
					"xl": 1200,
					"xxl": 1200
				},
				"colors": {
					"theme": {
						"base": {
							"white": "#ffffff",
							"primary": "#8950FC",
							"secondary": "#E5EAEE",
							"success": "#1BC5BD",
							"info": "#6993FF",
							"warning": "#FFA800",
							"danger": "#F64E60",
							"light": "#F3F6F9",
							"dark": "#212121"
						},
						"light": {
							"white": "#ffffff",
							"primary": "#EEE5FF",
							"secondary": "#ECF0F3",
							"success": "#C9F7F5",
							"info": "#E1E9FF",
							"warning": "#FFF4DE",
							"danger": "#FFE2E5",
							"light": "#F3F6F9",
							"dark": "#D6D6E0"
						},
						"inverse": {
							"white": "#ffffff",
							"primary": "#ffffff",
							"secondary": "#212121",
							"success": "#ffffff",
							"info": "#ffffff",
							"warning": "#ffffff",
							"danger": "#ffffff",
							"light": "#464E5F",
							"dark": "#ffffff"
						}
					},
					"gray": {
						"gray-100": "#F3F6F9",
						"gray-200": "#ECF0F3",
						"gray-300": "#E5EAEE",
						"gray-400": "#D6D6E0",
						"gray-500": "#B5B5C3",
						"gray-600": "#80808F",
						"gray-700": "#464E5F",
						"gray-800": "#1B283F",
						"gray-900": "#212121"
					}
				},
				"font-family": "Poppins"
			};
		</script>

		<!--end::Global Config-->

		<!--begin::Global Theme Bundle(used by all pages)-->
		<script src="<?php echo base_url();?>template/metronic/demo8_v7/dist/assets/plugins/global/plugins.bundle.js?v=<?php echo time();?>"></script>
		<script src="<?php echo base_url();?>template/metronic/demo8_v7/dist/assets/plugins/custom/prismjs/prismjs.bundle.js"></script>
		<script src="<?php echo base_url();?>template/metronic/demo8_v7/dist/assets/js/scripts.bundle.js"></script>

		<!--end::Global Theme Bundle-->

		<!--begin::Page Vendors(used by this page)-->
		<script src="<?php echo base_url();?>template/metronic/demo8_v7/dist/assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>

		<!--end::Page Vendors-->

		<!--begin::Page Scripts(used by this page)-->
		<script src="<?php echo base_url();?>template/metronic/demo8_v7/dist/assets/js/pages/widgets.js?v=<?php echo time();?>"></script>
		
		<script type="text/javascript">
		$(function() {
			//Sorting the table when clicked at the each column
			$(".tbl-sorting, .tbl-sorting-asc, .tbl-sorting-desc").click(function() {
				$("input[name='download']").val('false');
				$("input[name='download_type']").val('');
				$(".sql-sort-column").val($(this).attr('data-col'));
				$('.search-form').submit();
			});
			
			$(".filterSelect").change(function() {
			
				var filterValue = $(this).val();
				$(".filterselectbyValue").val('');
				$('.parent-div').css('display','block');
				$('.filterBySelect').css('display','none');
				$("#"+filterValue).css('display','block');
				$("#small"+filterValue).css('display','block');
				$(".filterselectValue").val(filterValue);
				
			});
			
			$(".sortSelect").change(function() {
			
				var sortValue = $(this).val();
				
				$(".sql_sort_column").val('');
				$(".sql_sort_column").val(sortValue);
				$('.search-form').submit();
				
			});
			
			$(".filterBy").change(function() {
				
				
				var filterselectValue = $(this).val();
				
				$('.submitfilterForm').prop('disabled',false);
				$(".filterselectbyValue").val(filterselectValue);
				
			});
			
			$('.submitfilterForm').click(function(){
				
				if($(".filterselectbyValue").val() == "")
				{
					toastr.error("Please select filter value first in order to filter.");
				}
				else
				{
					$('.search-form').submit();
				}
			});
			
			$('#js_form_modules').submit(function(event){
				
				event.preventDefault();
				
				var values = $(this).serialize();
				
				$.ajax({
					url: baseUrl + 'secure/form_modules',
					method: "POST",
					data: values,
					dataType:'json',
					async:true,
					success: function(response){
						if(response['result'] == 'success')
						{
							toastr.success(response['message']);
							setTimeout(function(){
								location.href = baseUrl + 'secure/list/modules';
							}, 2000);
						}
						else
						{
							toastr.error(response['message']);
						}
					}
				});
			});
			
			$('#js_form_packages').submit(function(event){
				
				event.preventDefault();
				
				var values = $(this).serialize();
				
				$.ajax({
					url: baseUrl + 'secure/form_packages',
					method: "POST",
					data: values,
					dataType:'json',
					async:true,
					success: function(response){
						if(response['result'] == 'success')
						{
							toastr.success(response['message']);
							setTimeout(function(){
								location.href = baseUrl + 'secure/list/packages';
							}, 2000);
						}
						else
						{
							toastr.error(response['message']);
						}
					}
				});
			});
			
		});
		</script>

		<script type="text/javascript">
		$(document).ready(function(){
		
		
			var filterselectbyValue = $('.filterselectbyValue').val();
			
			if(filterselectbyValue != '')
			{
				$('.parent-div').css('display','block');
			}
			
			console.log(window.location);

			$('select[name=page]').on('change', function(){
				new_page = $(this).val();

				url = window.location.pathname+'?page='+new_page;

				pagin = <?php echo json_encode(pagin());?>;

				if(pagin.column != '') url = url+'&column='+pagin.column+'&search='+pagin.search;

				window.location.href = url;

			});

			$('select[name=column]').on('change', function(){
				let val = $(this).val();

				if(val.indexOf('=') != -1){
					let exp = val.split('=');
					$('input[name=search]').val(exp[1]);
				}else{
					$('input[name=search]').val('');
				}
			});
			

		});
		</script>
		
		<?php 
		if($this->session->userdata('system-toastr-message') != ''){ 
			$toastr_type = $this->session->userdata('message-toastr-type');
			$toastr_message = $this->session->userdata('system-toastr-message');
			if($toastr_type == 'success')
			{
		?>
		   <script type="text/javascript">
			toastr.success(<?php echo '"'. $toastr_message . '"';  ?>);
		   </script>
	   <?php  
			}
			else if($toastr_type == 'error')
			{
		?>		
			<script type="text/javascript">
			toastr.error(<?php echo '"'. $toastr_message . '"';  ?>);
			</script>
		<?php  
			}
			else if($toastr_type == 'info')
			{
		?>		
			<script type="text/javascript">
			toastr.info(<?php echo '"'. $toastr_message . '"';  ?>);
			</script>
		<?php  
			}
			else if($toastr_type == 'warning')
			{
		?>		
			<script type="text/javascript">
			toastr.warning(<?php echo '"'. $toastr_message . '"';  ?>);
			</script>		
		<?php 		
			}
				$this->session->unset_userdata('system-toastr-message');
				$this->session->unset_userdata('message-toastr-type');
			}
		?>
		<!--end::Page Scripts-->