<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Booking Form HTML Template</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="<?= base_url('assets/front/css/bootstrap.min.css')?>" />

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="<?= base_url('assets/front/css/style.css')?>" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>
	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="col-md-7 col-md-push-4">
						<div class="booking-cta">
							<h2 style="color:#00FF00; text-transform:capitalize;MediumSeaGreen;border:2px solid Tomato;">Have a Save journey to Sandwip-Chittagong</h2>
							
							<h3 style="color:aqua;"><i><b>Is it your new journey to Sandwip?</b></i></h3>
							<h2 style="background-color:Tomato;border:2px solid Tomato;text-align:center" ><i>Welcome to Our Paradise</h2></i><br><br><br><br><br><br><br><br><br><br><br>
							<p >It is at the estuary of the Meghna River on the Bay of Bengal and separated from the Chittagong coast by Sandwip Channel. It has a population of nearly 350,000. There are fifteen wards, 62 mahallas and 34 villages on Sandwip Island. The island is 50 kilometres (31 mi) long and 5–15 kilometres (3.1–9.3 mi) wide. It is at the north-east side of the Bay of Bengal, near the main port city of Chittagong. It is bounded by Companiganj on the north, Bay of Bengal on the south, Sitakunda and Mirsharai, and Sandwip Channel on the east, Noakhali Sadar, Hatiya and Meghna estuary on the west...
							</p>
						</div>
					</div>
					<div class="col-md-4 col-md-pull-7">
						<div class="booking-form">
						<?php if($this->session->flashdata('message')){ ?>
					<?= $this->session->flashdata('message') ?>
				<?php } ?>
							<?= form_open("welcome/create_order") ?>
								<div class="form-group">
									<span class="form-label">Your Name</span>
									<input name="customer_name" class="form-control" type="text" placeholder="Enter your name">
								</div>
								<div class="form-group">
									<span class="form-label">Your Contact</span>
									<input name="contact_no" class="form-control" type="text" placeholder="Enter your contact">
								</div>
								<div class="form-group">
									<span class="form-label">Your Destination</span>
									<select name="from_location" class="form-control from_location" onchange="journy_details()" />
										<option value="CTG" <?php echo set_select('from_location','CTG', ( !empty($data) && $data == "CTG" ? TRUE : FALSE )); ?>>CTG</option>
										<option value="Sandwip" <?php echo set_select('from_location','Sandwip', ( !empty($data) && $data == "Sandwip" ? TRUE : FALSE )); ?>>Sandwip</option>
									</select>
									<?= form_error('from_location') ?>
								</div>
								<div class="form-group">
									<span class="form-label">Ship</span>
									<select name="ship_id" class="form-control ship_id" onchange="journy_details()" />
										<option value="">Select Ship</option>
										<?php if($ships){
											foreach($ships as $s){ ?>
												<option value="<?= $s->id ?>" <?= set_select('ship_id',$s->id, ( !empty($data) && $data == $s->id ? TRUE : FALSE )); ?>><?= $s->name ?> (<?= $s->type ?>)</option>
										<?php } } ?>
									</select>
                                <?= form_error('ship_id') ?>
								</div>
								<div class="row">
									<div class="col-sm-6">
										<div class="form-group">
											<span class="form-label">Journy Date</span>
											<input type="date" placeholder="Journy Date" name="journey_date" value="<?= set_value('journey_date',date('Y-m-d')) ?>" class="form-control journey_date" />
											<?= form_error('journey_date') ?>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<span class="form-label">Journy Time</span>
											<input type="text" placeholder="Journy Time" name="journey_time" value="<?= set_value('journey_time','') ?>" class="form-control input-mask-time journey_time" />
											<?= form_error('journey_time') ?>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-6">
										<div class="form-group">
											<span class="form-label">Number Of Seat</span>
											<select name="no_of_seat" onchange="fare_cal(this.value)" class="form-control">
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
												<option value="4">5</option>
												<option value="4">6</option>
											</select>
											<span class="select-arrow"></span>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<span class="form-label">Fare/Rent</span>
											<input type="text" readonly placeholder="Fare" name="fare" value="<?=  set_value('fare','') ?>" class="form-control fare" />
											<?= form_error('fare') ?>
											<span class="fare_cal_am"></span>
										</div>
									</div>
								</div>
								<div class="form-btn">
									<button type="submit" class="submit-btn">Check availability</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
		<!--[if !IE]> -->
		<script src="<?= base_url('assets/js/jquery-2.1.4.min.js') ?>"></script>
		<!-- <![endif]-->
		<!-- ace settings handler -->
		<script src="<?= base_url('assets/js/ace-extra.min.js') ?>"></script>
	
	<script src="<?= base_url('assets/js/jquery-ui.custom.min.js') ?>"></script>
	<script src="<?= base_url('assets/js/jquery.ui.touch-punch.min.js') ?>"></script>
	<script src="<?= base_url('assets/js/chosen.jquery.min.js') ?>"></script>
	<script src="<?= base_url('assets/js/spinbox.min.js') ?>"></script>
	<script src="<?= base_url('assets/js/bootstrap-datepicker.min.js') ?>"></script>
	<script src="<?= base_url('assets/js/bootstrap-timepicker.min.js') ?>"></script>
	<script src="<?= base_url('assets/js/moment.min.js') ?>"></script>
	<script src="<?= base_url('assets/js/daterangepicker.min.js') ?>"></script>
	<script src="<?= base_url('assets/js/bootstrap-datetimepicker.min.js') ?>"></script>
	<script src="<?= base_url('assets/js/bootstrap-colorpicker.min.js') ?>"></script>
	<script src="<?= base_url('assets/js/jquery.knob.min.js') ?>"></script>
	<script src="<?= base_url('assets/js/autosize.min.js') ?>"></script>
	<script src="<?= base_url('assets/js/jquery.inputlimiter.min.js') ?>"></script>
	<script src="<?= base_url('assets/js/jquery.maskedinput.min.js') ?>"></script>
	<script src="<?= base_url('assets/js/bootstrap-tag.min.js') ?>"></script>

		
		<!-- inline scripts related to this page -->
		<script type="text/javascript">
		var shipdata={<?php if($ships){
						foreach($ships as $d){
							?><?= $d->id ?>:{
						  "name":"<?=$d->name?>",
						  "capacity":"<?=$d->capacity?>",
						  "ctg_start":"<?=$d->ctg_start?>",
						  "sandwip_start":"<?=$d->sandwip_start?>",
						  "fare":"<?=$d->fare?>",
						},<?php }} ?>};
						
		function journy_details(){
			var from_location=$('.from_location').val();
			var ship_id=$('.ship_id').val();
			if(ship_id){
				$('.fare').val((shipdata[ship_id].fare));
				if(from_location=="CTG")
					$('.journey_time').val((shipdata[ship_id].ctg_start));
				else
					$('.journey_time').val((shipdata[ship_id].sandwip_start));
			}
		}
		function fare_cal(e){
			var fare =parseInt($('.fare').val());
			$('.fare_cal_am').text("Total: BDT"+fare*parseInt(e));
		}
			jQuery(function($) {
				$('#id-disable-check').on('click', function() {
					var inp = $('#form-input-readonly').get(0);
					if(inp.hasAttribute('disabled')) {
						inp.setAttribute('readonly' , 'true');
						inp.removeAttribute('disabled');
						inp.value="This text field is readonly!";
					}
					else {
						inp.setAttribute('disabled' , 'disabled');
						inp.removeAttribute('readonly');
						inp.value="This text field is disabled!";
					}
				});
			
				if(!ace.vars['touch']) {
					$('.chosen-select').chosen({allow_single_deselect:true}); 
					//resize the chosen on window resize
			
					$(window)
					.off('resize.chosen')
					.on('resize.chosen', function() {
						$('.chosen-select').each(function() {
							 var $this = $(this);
							 $this.next().css({'width': $this.parent().width()});
						})
					}).trigger('resize.chosen');
					//resize chosen on sidebar collapse/expand
					$(document).on('settings.ace.chosen', function(e, event_name, event_val) {
						if(event_name != 'sidebar_collapsed') return;
						$('.chosen-select').each(function() {
							 var $this = $(this);
							 $this.next().css({'width': $this.parent().width()});
						})
					});
			
			
					$('#chosen-multiple-style .btn').on('click', function(e){
						var target = $(this).find('input[type=radio]');
						var which = parseInt(target.val());
						if(which == 2) $('#form-field-select-4').addClass('tag-input-style');
						 else $('#form-field-select-4').removeClass('tag-input-style');
					});
				}
			
			
				
				$.mask.definitions['~']='[+-]';
				$('.input-mask-time').mask('99:99');
				$('.input-mask-phone').mask('(999) 999-9999');
				$('.input-mask-eyescript').mask('~9.99 ~9.99 999');
				$(".input-mask-product").mask("a*-999-a999",{placeholder:" ",completed:function(){alert("You typed the following: "+this.val());}});
			
				//datepicker plugin
				//link
				$('.date-picker').datepicker({
					autoclose: true,
					todayHighlight: true
				})
				//show datepicker when clicking on the icon
				.next().on(ace.click_event, function(){
					$(this).prev().focus();
				});
			
				//or change it into a date range picker
				$('.input-daterange').datepicker({autoclose:true});
			
			
				//to translate the daterange picker, please copy the "examples/daterange-fr.js" contents here before initialization
				$('input[name=date-range-picker]').daterangepicker({
					'applyClass' : 'btn-sm btn-success',
					'cancelClass' : 'btn-sm btn-default',
					locale: {
						applyLabel: 'Apply',
						cancelLabel: 'Cancel',
					}
				})
				.prev().on(ace.click_event, function(){
					$(this).next().focus();
				});
			
			
				$('.timepicker1').timepicker({
					minuteStep: 1,
					showSeconds: true,
					showMeridian: false,
					disableFocus: true,
					icons: {
						up: 'fa fa-chevron-up',
						down: 'fa fa-chevron-down'
					}
				}).on('focus', function() {
					$('.timepicker1').timepicker('showWidget');
				}).next().on(ace.click_event, function(){
					$(this).prev().focus();
				});
				
				
			
				
				if(!ace.vars['old_ie']) $('#date-timepicker1').datetimepicker({
				 //format: 'MM/DD/YYYY h:mm:ss A',//use this option to display seconds
				 icons: {
					time: 'fa fa-clock-o',
					date: 'fa fa-calendar',
					up: 'fa fa-chevron-up',
					down: 'fa fa-chevron-down',
					previous: 'fa fa-chevron-left',
					next: 'fa fa-chevron-right',
					today: 'fa fa-arrows ',
					clear: 'fa fa-trash',
					close: 'fa fa-times'
				 }
				}).next().on(ace.click_event, function(){
					$(this).prev().focus();
				});
				
			
				$('#colorpicker1').colorpicker();
				//$('.colorpicker').last().css('z-index', 2000);//if colorpicker is inside a modal, its z-index should be higher than modal'safe
			
				$('#simple-colorpicker-1').ace_colorpicker();
				//$('#simple-colorpicker-1').ace_colorpicker('pick', 2);//select 2nd color
				//$('#simple-colorpicker-1').ace_colorpicker('pick', '#fbe983');//select #fbe983 color
				//var picker = $('#simple-colorpicker-1').data('ace_colorpicker')
				//picker.pick('red', true);//insert the color if it doesn't exist
			
			
				$(".knob").knob();
				
				
				var tag_input = $('#form-field-tags');
				try{
					tag_input.tag(
					  {
						placeholder:tag_input.attr('placeholder'),
						//enable typeahead by specifying the source array
						source: ace.vars['US_STATES'],//defined in ace.js >> ace.enable_search_ahead
						/**
						//or fetch data from database, fetch those that match "query"
						source: function(query, process) {
						  $.ajax({url: 'remote_source.php?q='+encodeURIComponent(query)})
						  .done(function(result_items){
							process(result_items);
						  });
						}
						*/
					  }
					)
			
					//programmatically add/remove a tag
					var $tag_obj = $('#form-field-tags').data('tag');
					$tag_obj.add('Programmatically Added');
					
					var index = $tag_obj.inValues('some tag');
					$tag_obj.remove(index);
				}
				catch(e) {
					//display a textarea for old IE, because it doesn't support this plugin or another one I tried!
					tag_input.after('<textarea id="'+tag_input.attr('id')+'" name="'+tag_input.attr('name')+'" rows="3">'+tag_input.val()+'</textarea>').remove();
					//autosize($('#form-field-tags'));
				}
				
				
				/////////
				$('#modal-form input[type=file]').ace_file_input({
					style:'well',
					btn_choose:'Drop files here or click to choose',
					btn_change:null,
					no_icon:'ace-icon fa fa-cloud-upload',
					droppable:true,
					thumbnail:'large'
				})
				
				//chosen plugin inside a modal will have a zero width because the select element is originally hidden
				//and its width cannot be determined.
				//so we set the width after modal is show
				$('#modal-form').on('shown.bs.modal', function () {
					if(!ace.vars['touch']) {
						$(this).find('.chosen-container').each(function(){
							$(this).find('a:first-child').css('width' , '210px');
							$(this).find('.chosen-drop').css('width' , '210px');
							$(this).find('.chosen-search input').css('width' , '200px');
						});
					}
				})
				/**
				//or you can activate the chosen plugin after modal is shown
				//this way select element becomes visible with dimensions and chosen works as expected
				$('#modal-form').on('shown', function () {
					$(this).find('.modal-chosen').chosen();
				})
				*/
			
				
				
				$(document).one('ajaxloadstart.page', function(e) {
					autosize.destroy('textarea[class*=autosize]')
					
					$('.limiterBox,.autosizejs').remove();
					$('.daterangepicker.dropdown-menu,.colorpicker.dropdown-menu,.bootstrap-datetimepicker-widget.dropdown-menu').remove();
				});
			
			});
		</script>
	
</body>

</html>