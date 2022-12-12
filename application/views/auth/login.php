<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Login Page - SHIP Admin</title>

		<meta name="description" content="User login page" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>" />
		<link rel="stylesheet" href="<?= base_url('assets/font-awesome/4.5.0/css/font-awesome.min.css') ?>" />

		<!-- text fonts -->
		<link rel="stylesheet" href="<?= base_url('assets/css/fonts.googleapis.com.css') ?>" />

		<!-- ace styles -->
		<link rel="stylesheet" href="<?= base_url('assets/css/ace.min.css') ?>" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="<?= base_url('assets/css/ace-part2.min.css') ?>" />
		<![endif]-->
		<link rel="stylesheet" href="<?= base_url('assets/css/ace-rtl.min.css') ?>" />

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="<?= base_url('assets/css/ace-ie.min.css') ?>" />
		<![endif]-->

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="<?= base_url('assets/js/html5shiv.min.js') ?>"></script>
		<script src="<?= base_url('assets/js/respond.min.js') ?>"></script>
		<![endif]-->
	</head>

	<body class="login-layout">
		<div class="main-container">
			<div class="main-content">
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1">
						<div class="login-container">
							<div class="center">
								<h1>
									<i class="ace-icon fa fa-leaf green"></i>
									<span class="red">Ship Ticket Managment</span>
									<span class="white" id="id-text2">Application</span>
								</h1>
								<h4 class="blue" id="id-company-text">&copy; Sandwip-Chittagong Ferry Service</h4>
							</div>
							<div class="space-6"></div>

							<div class="position-relative">
								<div id="login-box" class="login-box visible widget-box no-border">
									<div class="widget-body">
										<div class="widget-main">
											<h4 class="header blue lighter bigger">
												<i class="ace-icon fa fa-coffee green"></i>
												Please Enter Your Information
											</h4>
										<?php if($this->session->flashdata('message')){ ?>
											<?= $this->session->flashdata('message') ?>
										<?php } ?>
											<div class="space-6"></div>

											<?= form_open('login') ?>
												<fieldset>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" name="email" class="form-control" placeholder="Contact/Email" value="<?= set_value('email','')?>" />
															<i class="ace-icon fa fa-user"></i>
														</span>
														<?= form_error('email') ?>
													</label>

													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="password" name="password" class="form-control" placeholder="Password" />
															<i class="ace-icon fa fa-lock"></i>
														</span>
														<?= form_error('password') ?>
													</label>

													<div class="space"></div>

													<div class="clearfix">
														<label class="inline">
															<input type="checkbox" class="ace" />
															<span class="lbl"> Remember Me</span>
														</label>

														<button type="submit" class="width-35 pull-right btn btn-sm btn-primary">
															<i class="ace-icon fa fa-key"></i>
															<span class="bigger-110">Login</span>
														</button>
													</div>

													<div class="space-4"></div>
												</fieldset>
											</form>
											<div class="space-6"></div>

										</div><!-- /.widget-main -->

										<div class="toolbar clearfix">
											<div>
												<a href="<?= base_url('forget') ?>" data-target="#forgot-box" class="forgot-password-link">
													<i class="ace-icon fa fa-arrow-left"></i>
													I forgot my password
												</a>
											</div>

											<div>
												<a href="<?= base_url('register') ?>" data-target="#signup-box" class="user-signup-link">
													I want to register
													<i class="ace-icon fa fa-arrow-right"></i>
												</a>
											</div>
										</div>
									</div><!-- /.widget-body -->
								</div><!-- /.login-box -->
							</div><!-- /.position-relative -->

							<div class="navbar-fixed-top align-right">
								<br />
								&nbsp;
								<a id="btn-login-dark" href="#">Dark</a>
								&nbsp;
								<span class="blue">/</span>
								&nbsp;
								<a id="btn-login-blur" href="#">Blur</a>
								&nbsp;
								<span class="blue">/</span>
								&nbsp;
								<a id="btn-login-light" href="#">Light</a>
								&nbsp; &nbsp; &nbsp;
							</div>
						</div>
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div><!-- /.main-content -->
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script src="<?= base_url('assets/js/jquery-2.1.4.min.js') ?>"></script>

		<!-- <![endif]-->

		<!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='<?= base_url('assets/js/jquery.mobile.custom.min.js') ?>'>"+"<"+"/script>");
		</script>

		<!-- inline scripts related to this page -->
		<script type="text/javascript">
			//you don't need this, just used for changing background
			jQuery(function($) {
			 $('#btn-login-dark').on('click', function(e) {
				$('body').attr('class', 'login-layout');
				$('#id-text2').attr('class', 'white');
				$('#id-company-text').attr('class', 'blue');
				
				e.preventDefault();
			 });
			 $('#btn-login-light').on('click', function(e) {
				$('body').attr('class', 'login-layout light-login');
				$('#id-text2').attr('class', 'grey');
				$('#id-company-text').attr('class', 'blue');
				
				e.preventDefault();
			 });
			 $('#btn-login-blur').on('click', function(e) {
				$('body').attr('class', 'login-layout blur-login');
				$('#id-text2').attr('class', 'white');
				$('#id-company-text').attr('class', 'light-blue');
				
				e.preventDefault();
			 });
			 
			});
		</script>
	</body>
</html>
