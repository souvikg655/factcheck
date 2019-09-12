<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Dashboard</title>
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i,800&display=swap" rel="stylesheet">
	<!-- Custom Stylesheet -->
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/style.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/toastr.css">

	<!-- Custom Stylesheet -->
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/owl.carousel.min.css">
	<!-- custom scrollbar css -->
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/mCustomScrollber.css">
	<!-- lightbox -->
	<link href='<?php echo base_url()?>assets/css/simplelightbox.min.css' rel='stylesheet' type='text/css'>

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>


</head>
<body>
	<!-- Header -->
	<header id="header" class="site-header">
		<div class="logo">
			<a href="<?php echo base_url()?>" title=""><img src="<?php echo base_url()?>assets/images/logo.png" alt=""></a>
		</div>
		<div class="right-header">
			<h6>Points: <span><?=$points ?></span></h6>
			<div class="dropdown notification">
				<a href="javascript:void(0);" title="" class="bell">
					<span>3</span>
				</a>
				<div class="notificationSlide">
					<ul>
						<li>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis aperiam illo voluptatibus totam ducimus aliquam ullam voluptates, nostrum, enim culpa, est ut quos voluptas expedita recusandae tenetur non labore nesciunt!
						</li>
						<li>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis aperiam illo voluptatibus totam ducimus aliquam ullam voluptates, nostrum!
						</li>
					</ul>
				</div>
			</div>
			<div class="dropdown user-profile">
				<a href="javascript:void(0);" title="" class="profile">
					<?=$user_name ?> <!-- <?php echo $user_name ?> -->
				</a>
				<div class="clickslide">
					<ul>
						<!-- <li><a href="javascript:void(0);" title="">Change Password</a></li> -->
						<li><a href="<?php echo base_url()?>user/logout" title="">log out</a></li>
					</ul>
				</div>
			</div>
			<a href="javascript:void(0);" class="toggle">
				<span></span>
				<span></span>
				<span></span>
			</a>
		</div>
	</header>

	<!-- Main Content -->
	<div class="main-content">
		<div class="left-aside">
			<nav>
				<ul>
					
					<li class="profile-settings <?php echo $menu_type=='profile'?'active':''; ?> "><a href="<?php echo base_url()?>user-profile" title="">Profile</a></li>
					
					<?php 
					if($approval=="ACCEPTED"){
					?>
					<li class="list <?php echo $menu_type=='list'?'active':''; ?>"><a href="<?php echo base_url()?>dashboard" title="">list</a></li>
					
					<li class="add <?php echo $menu_type=='add_new'?'active':''; ?>"><a href="<?php echo base_url()?>add-home" title="">add new</a></li>
					<?php } ?>
				</ul>
			</nav>
		</div>
