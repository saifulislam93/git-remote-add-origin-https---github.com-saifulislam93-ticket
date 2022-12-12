<div class="main-content" id="main-content">
    <div class="main-content-inner">
        
        <div class="page-content">
            <div class="row">
                <div class="col-xs-12">
<div class='csstyle' id='cart' style="">
		<tr><th><div style="grid-header:20px;color:red;text-align: center;">Sandwip-Chittagong Ferry Service</th></div></td></tr>
			
		<div><h3 style = "color:blue;text-align:center;"><?= $data->name ?> (<?= $data->type ?>)</h3></div>
	
	<div style="grid-area:right;10px;color:green;text-align: center;"><h3 style = "color:#000000;text-align:right;"></h3>Serial No. <?=  $data->from_location ?>-<?=  $data->ship_id ?>-<?=  $data->id ?></div>								  							  
		<table class="table"><tr><td><div><span class = "title_span">Customer Name:</td><td><span class = "content_span"><?=  $data->customer_name ?></span></span></div></td></tr>
		<tr><td><div class="title"><span class = "title_span">Customer Contact: </td><td><span class = "content_span"><?= $data->contact_no ?> </span></span></div></td></tr>
		<tr><td><div class="title"><span class = "title_span">Start From:</td><td><span class = "content_span"><?= $data->from_location ?></span></span></div></td></tr>
		<tr><td><div class="title"><span class = "title_span">Journey Date:</td><td><span class = "content_span"><?= date('d M, Y',strtotime($data->journey_date)) ?></span></span></div></td></tr>
		<tr><td><div class="title" ><span class = "title_span">Journey Time:</td><td><span class = "content_span"><?= date('h:iA',strtotime($data->journey_time)) ?></span></span></div></td></tr>
		<tr><td><div class="title"><span class = "title_span">Number of seat:</td><td><span class = "content_span"> <?= $data->no_of_seat ?></span></span></div></td></tr>
		<tr><td><div class="title"><span class = "title_span">Grand Total:</td><td><span class = "content_span"><?= $data->fare*$data->no_of_seat ?></span></span></div></td></tr>
	
		<tr><td colspan="2"><div><h4 style="text-align:center" id="safe_journey">Have a safe journey</h4></div></td></tr>						  
	</table>	
</div>
<div class="text-center btnstt" >
<button type="button" class="btn btnstt btn-lg btn-default btn-success print_no" onclick="print_this('main-content')">Print Token!</button>	

</div>
<style>

.btnstt{
	margin-top: 8px;
	width: 60%;
	margin-left: 20%;
}

@media print{
	.print_no{
		display:none;
	}
}
.title{
grid-area: left;
}
.title_span{
color:#010002;
text-align:left
}
.content_span{
color:#a52a2a;
}
#safe_journey{
	text-align:center;
	color: navy;
	font-family: Arial, Helvetica, sans-serif;;
}
#cart{
	width:50%;
	margin-left:30%;
	padding: 3px 15px;font-size: 20px;
	border:2px solid #000000;
	border-radius: 15px;
	
}
</style>	
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


	<script>

 function print_this(id) {
    var prtContent = document.getElementById(id);
    var WinPrint = window.open('', '', 'left=0,top=0,width=800,height=900,toolbar=0,scrollbars=0,status=0');
    
    
    WinPrint.document.write(prtContent.innerHTML);
    WinPrint.document.close();
    WinPrint.setTimeout(function(){
      WinPrint.focus();
      WinPrint.print();
      WinPrint.close();
    }, 1000);
}


</script>