<div class="main-content">
    <div class="main-content-inner">
        <div class="breadcrumbs ace-save-state" id="breadcrumbs">
            <ul class="breadcrumb">
                <li><i class="ace-icon fa fa-home home-icon"></i><a href="<?= base_url('dashboard') ?>">Home</a></li>
                <li><a href="<?= base_url('order') ?>">Order</a></li>
                <li class="active">Update</li>
            </ul><!-- /.breadcrumb -->
        </div>
<style>
.fare_cal_am{
	font-size:24px;
	color:green;
	font-weight:bold;
	padding-left:25px;
}
</style>
        <div class="page-content">
            <div class="row">
                <div class="col-xs-12">
                    <!-- PAGE CONTENT BEGINS -->
                    <?= form_open('orderedit/'.$data->id,array('class' => 'form-horizontal','role'=>'form')) ?>
                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Customer Name </label>
                            <div class="col-sm-9">
                                <input type="text"  placeholder="Full Name" name="customer_name" value="<?=  set_value('customer_name',$data->customer_name) ?>" class="col-xs-10 col-sm-7" />
                                <?= form_error('customer_name') ?>
                            </div>
                        </div>
						<div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Customer Contact </label>
                            <div class="col-sm-9">
                                <input type="text"  placeholder="Contact Number" name="contact_no" value="<?=  set_value('contact_no',$data->contact_no) ?>" class="col-xs-10 col-sm-7" />
                                <?= form_error('contact_no') ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Start From</label>
                            <div class="col-sm-9">
                                <select name="from_location" class="col-xs-10 col-sm-7 from_location" onchange="journy_details()" />
									<option value="CTG" <?php echo set_select('from_location','CTG', ( !empty($data) && $data->from_location == "CTG" ? TRUE : FALSE )); ?>>CTG</option>
									<option value="Sandwip" <?php echo set_select('from_location','Sandwip', ( !empty($data) && $data->from_location == "Sandwip" ? TRUE : FALSE )); ?>>Sandwip</option>
								</select>
								<?= form_error('from_location') ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Ship </label>
                            <div class="col-sm-9">
								<select name="ship_id" class="col-xs-10 col-sm-7 ship_id" onchange="journy_details()" />
									<option value="">Select Ship</option>
									<?php if($ships){
										foreach($ships as $s){ ?>
											<option value="<?= $s->id ?>" <?= set_select('ship_id',$s->id, ( !empty($data) && $data->ship_id == $s->id ? TRUE : FALSE )); ?>><?= $s->name ?> (<?= $s->type ?>)</option>
									<?php } } ?>
								</select>
                                <?= form_error('ship_id') ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Journy Date </label>
                            <div class="col-sm-9">
                                <input type="date" placeholder="Journy Date" name="journey_date" value="<?= set_value('journey_date',$data->journey_date) ?>" class="col-xs-10 col-sm-7 journey_date" />
                                <?= form_error('journey_date') ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Journy Time </label>
                            <div class="col-sm-9">
                                <input type="text" placeholder="Journy Time" name="journey_time" value="<?= set_value('journey_time',$data->journey_time) ?>" class="col-xs-10 col-sm-7 input-mask-time journey_time" />
                                <?= form_error('journey_time') ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Fare </label>
                            <div class="col-sm-9">
                                <input type="text" placeholder="Fare" name="fare" value="<?=  set_value('fare',$data->fare) ?>" class="col-xs-10 col-sm-7 fare" />
                                <?= form_error('fare') ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Number Of Seat</label>
                            <div class="col-sm-9">
                                <input type="text" onkeyup="fare_cal(this.value)" placeholder="Number Of Seat" name="no_of_seat" value="<?=  set_value('no_of_seat',$data->no_of_seat) ?>" class="col-xs-10 col-sm-7" />
                                <?= form_error('no_of_seat') ?>
								<span class="fare_cal_am"></span>
                            </div>
							
                        </div>
						
                        <div class="clearfix form-actions">
                            <div class="col-md-offset-3 col-md-9">
                                <button class="btn btn-info" type="submit">
                                    <i class="ace-icon fa fa-check bigger-110"></i>
                                    Submit
                                </button>

                                &nbsp; &nbsp; &nbsp;
                                <button class="btn" type="reset">
                                    <i class="ace-icon fa fa-undo bigger-110"></i>
                                    Reset
                                </button>
                            </div>
                        </div>
                   <?= form_close() ?>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.page-content -->
    </div>
</div><!-- /.main-content -->

			
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
