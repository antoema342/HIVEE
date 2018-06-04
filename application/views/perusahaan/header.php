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
		<nav class="navbar navbar-default navbar-mobile navbar-fixed white no-background bootsnav">
			<div class="container">
			
				<!-- Start Logo Header Navigation -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
						<i class="fa fa-bars"></i>
					</button>
					<a class="navbar-brand" href="<?php echo site_url('perusahaan') ?>">
						<img src="<?php echo base_url('assets/img/hivee_light.png')?>" class="logo logo-display" alt="">
						<img src="<?php echo base_url('assets/img/hivee.png') ?>" class="logo logo-scrolled" alt="">
					</a>

				</div>
				<!-- End Logo Header Navigation -->

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="navbar-menu">
				
					<ul class="nav navbar-nav navbar-left" data-inh="fadeInDown" data-out="fadeOutUp">
					
						<li class="dropdown">
							<a href= " <?php echo site_url('perusahaan') ?>" class="">Home</a>
						</li>
					
						<li class="dropdown">
							<a href="<?php echo site_url('perusahaan/create') ?>" class="">Create Job</a>
						</li>
						
						<li class="dropdown">
							<a href="<?php echo site_url('perusahaan/manage') ?>" class="">Manage Job</a>
						</li>								
					</ul>
					
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown sign-up">
							<a class="dropdown-toggle btn-signup red-btn" data-toggle="dropdown" href="">
								<img src="<?php echo base_url('assets/img/company.png') ?>" class="img-responsive img-circle" alt=""> <?php echo strtoupper($this->session->userdata('nama')); ?>
							</a>
							<ul class="dropdown-menu animated fadeOutUp">
								<li><a href="<?php echo site_url ('perusahaan/editcompany') ?>">Edit profile</a></li>
								<li><a href="<?php echo site_url('perusahaan/change') ?>">Change Password</a></li>
							</ul>
						</li> 
						<li class="br-right"><a href="<?php echo base_url('login?logout=signout');?>"><i class="login-icon ti-power-off"></i>Logout</a></li>
					</ul>
						
				</div>
				<!-- /.navbar-collapse -->
			</div>   
		</nav>
		<!-- ======================= End Navigation ===================== --> 	