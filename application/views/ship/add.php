
<div class="main-content">
    <div class="main-content-inner">
        <div class="breadcrumbs ace-save-state" id="breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="ace-icon fa fa-home home-icon"></i>
                    <a href="<?= base_url('dashboard') ?>">Home</a>
                </li>

                <li>
                    <a href="<?= base_url('ship') ?>">Ship</a>
                </li>
                <li class="active">Add</li>
            </ul><!-- /.breadcrumb -->
        </div>

        <div class="page-content">
            <div class="row">
                <div class="col-xs-12">
                    <!-- PAGE CONTENT BEGINS -->
                    <?= form_open('shipadd',array('class' => 'form-horizontal','role'=>'form')) ?>
                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Name </label>

                            <div class="col-sm-9">
                                <input type="text"  placeholder="Name" name="name" value="<?=  set_value('name','') ?>" class="col-xs-10 col-sm-7" />
                                <?= form_error('name') ?>
                            </div>
                            
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Type </label>

                            <div class="col-sm-9">
								<select name="type" class="col-xs-10 col-sm-7" />
									<option value="ship" <?php echo set_select('type','ship', ( !empty($data) && $data == "ship" ? TRUE : FALSE )); ?>>Ship</option>
									<option value="speedboat" <?php echo set_select('type','speedboat', ( !empty($data) && $data == "speedboat" ? TRUE : FALSE )); ?>>Speed Boat</option>
								</select>
                                <?= form_error('type') ?>
                            </div>
                            
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Capacity </label>

                            <div class="col-sm-9">
                                <input type="text" placeholder="Capacity" name="capacity" value="<?=  set_value('capacity','') ?>" class="col-xs-10 col-sm-7" />
                                <?= form_error('capacity') ?>
                            </div>
                            
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Start from CTG </label>

                            <div class="col-sm-9">
                                <input type="text" placeholder="Start from CTG" name="ctg_start" value="<?=  set_value('ctg_start','') ?>" class="col-xs-10 col-sm-7 input-mask-time" />
                                <?= form_error('ctg_start') ?>
                            </div>
                            
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Start from Sandwip </label>

                            <div class="col-sm-9">
                                <input type="text" id="form-field-1" placeholder="Start from Sandwip" name="sandwip_start" value="<?=  set_value('sandwip_start','') ?>" class="input-mask-time col-xs-10 col-sm-7" />
                                <?= form_error('sandwip_start') ?>
                            </div>
                            
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Fare </label>

                            <div class="col-sm-9">
                                <input type="text" id="form-field-1" placeholder="Fare" name="fare" value="<?=  set_value('fare','') ?>" class="col-xs-10 col-sm-7" />
                                <?= form_error('fare') ?>
                            </div>
                           
                        </div>
						<div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Status </label>

                            <div class="col-sm-9">
								<select name="status" class="col-xs-10 col-sm-7" />
									<option value="1" <?php echo set_select('status','1', ( !empty($data) && $data == "1" ? TRUE : FALSE )); ?>>Active</option>
									<option value="0" <?php echo set_select('status','0', ( !empty($data) && $data == "0" ? TRUE : FALSE )); ?>>Inactive</option>
								</select>
                                <?= form_error('status') ?>
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
