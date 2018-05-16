<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="zxx">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="robots" content="index,follow">

    <title>HIVEE - Need Money Need HIVEE</title>

    <!-- Bootstrap Core CSS -->
	<link rel="stylesheet" href="<?php echo base_url('assets/plugins/bootstrap/css/bootstrap.min.css') ?> ">
	
	<!-- Bootstrap Select Option css -->
	<link rel="stylesheet" href="<?php echo base_url('assets/plugins/bootstrap/css/bootstrap-select.min.css') ?> ">
	
    <!-- Icons -->
    <link href="<?php echo base_url('assets/plugins/icons/css/icons.css') ?>" rel="stylesheet">
    
    <!-- Animate -->
    <link href="<?php echo base_url('assets/plugins/animate/animate.css') ?>" rel="stylesheet">
    
    <!-- Bootsnav -->
    <link href="<?php echo base_url('assets/plugins/bootstrap/css/bootsnav.css') ?> " rel="stylesheet">
	
	<!-- Nice Select Option css -->
	<link rel="stylesheet" href="<?php echo base_url('assets/plugins/nice-select/css/nice-select.css') ?>">
	
	<!-- Aos Css -->
    <link href="<?php echo base_url('assets/plugins/aos-master/aos.css') ?>" rel="stylesheet">

	<!-- Slick Slider -->
    <link href="<?php echo base_url('assets/plugins/slick-slider/slick.css') ?> " rel="stylesheet">	
    
    <!-- Custom style -->
    <link href="<?php echo base_url('assets/css/style.css') ?> " rel="stylesheet">
	<link href="<?php echo base_url('assets/css/responsiveness.css') ?> " rel="stylesheet">
	
	<!-- Custom Color -->
    <link href="<?php echo base_url('assets/css/skin/default.css') ?> " rel="stylesheet">
    <link href="<?php echo base_url('assets/css/skin/baru.css') ?> " rel="stylesheet">

	
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
    
	</head>
	
	<body>
		<!-- ======================= Start Navigation ===================== -->
		<nav class="navbar navbar-default navbar-mobile navbar-fixed light bootsnav">
			<div class="container">
			
				<!-- Start Logo Header Navigation -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
						<i class="fa fa-bars"></i>
					</button>
					<a class="navbar-brand" href="#">
						<img src="<?php echo base_url('assets/img/hivee.png') ?>" class="logo logo-scrolled" alt="">
					</a>

				</div>
				<!-- End Logo Header Navigation -->

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="navbar-menu">
				
					<ul class="nav navbar-nav navbar-left" data-in="fadeInDown" data-out="fadeOutUp">
					
						<li class="dropdown">
							<a href="index.html#" data-toggle="dropdown">Home</a>
						</li>
					
						<li class="dropdown">
							<a href="<?php echo site_url('') ?>" >For Company</a>
						</li>
						
						<li class="dropdown">
							<a href="<?php echo site_url('home/home_kandidat') ?>" >For Candidate</a>
						</li>
						
						<li class="dropdown">
							<a href="index.html#" class="dropdown-toggle" data-toggle="dropdown">More</a>
							<ul class="dropdown-menu animated fadeOutUp">
								<li><a href="about.html">About</a></li>
								<li><a href="contact.html">Contact</a></li>
								<li><a href="#">Careers</a></li>
								<li><a href="#">Site Policy</a></li>
							</ul>
						</li>
						
					</ul>
					
					<ul class="nav navbar-nav navbar-right">
						<li class="br-right"><a href="<?php echo base_url('login/loginkandidat')?>"  data-toggle="modal" ><i class="login-icon ti-user"></i>Login</a></li>
					</ul>
						
				</div>
				<!-- /.navbar-collapse -->
			</div>   
		</nav>
		<!-- ======================= End Navigation ===================== -->
		<!-- Sign Up Window Code -->
		<div class="modal fade" id="signin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content" id="myModalLabel1">
					<div class="modal-body">
						<div class="text-center"><img src=" <?php echo base_url('assets/img/hivee.png') ?>" alt="" class="gambar img-responsive "></div>
						
						<!-- Nav tabs -->
							
						<!-- Tab panels -->
						<div class="tab-content">
						
							<!-- Employer Panel 1-->
							<div class="tab-pane fade in show active" id="employer" role="tabpanel">
								<form>
									
									<div class="form-group">
										<label>User Name</label>
										<input type="text" class="form-control" placeholder="User Name">
									</div>
									
									<div class="form-group">
										<label>Password</label>
										<input type="password" class="form-control" placeholder="*********">
									</div>
									
									<div class="form-group">
										<span class="custom-checkbox">
											<input type="checkbox" id="4">
											<label for="4"></label>Remember me
										</span>
										<a href="index.html#" title="Forget" class="fl-right">Forgot Password?</a>
									</div>
									<div class="form-group text-center">
										<button type="button" class="btn theme-btn full-width btn-m">LogIn </button>
									</div>
									
								</form>
								<div class="log-option"><span>OR</span></div>								
								<div class="row mrg-bot-20">
									<div class="col-md-6">
										<a href="index.html#" title="" class="fb-log-btn log-btn"><i class="fa fa-facebook"></i>Sign In With Facebook</a>
									</div>
									<div class="col-md-6">
										<a href="index.html#" title="" class="gplus-log-btn log-btn"><i class="fa fa-google-plus"></i>Sign In With Google+</a>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12 text-center">
										<p style=''>Don't have an account? <a href=""><b>Create Account</b></a></p>
									</div>
								</div>
							</div>
							<!--/.Panel 1-->
						</div>
						<!-- Tab panels -->
					</div>
				</div>
			</div>
		</div> 	  
		<!-- End Sign Up Window -->