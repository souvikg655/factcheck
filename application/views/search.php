<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Fact Check</title>
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/style.css">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url()?>assets/images/favicon.png">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<!-- Autocomplete input -->
	<script src="<?php echo base_url()?>assets/js/bundle.min.js" type="text/javascript"></script>
</head>

<body>
	<div class="search">
		<div class="topber">
			<div class="container">
				<div class="row">
					<div class="logo">
						<a href="<?php echo base_url()?>"><img src="<?php echo base_url()?>assets/images/logo.png" alt=""></a>
					</div>
					<div class="result">
						<h6>your search match with</h6>
						<button class="trigger-popup" data-target="serach-results-popup">100</button>
					</div>
				</div>
			</div>
		</div>
		<div class="search-type">
			<div class="container">
				<div class="white-box add-home">
					<h4>Location</h4>
					<form action="javaScript:Void(0);">
						<ul>
							<li>
								<div class="col-2">
									<h6>Area</h6>
									<div class="col">
										<span class="single-select" id="area"></span>
										<span class="highlight"></span>
									</div>
								</div>
								<div class="col-2">
									<h6>Municipality Name</h6>
									<div class="multi-select">
										<span class="multi-select"></span>
									</div>
								</div>
							</li>
						</ul>
					</form>
				</div>
				<div class="white-box add-home">
					<h4>Address</h4>
					<form action="javaScript:Void(0);">
						<ul>
							<li>
								<div class="col-3">
									<h6>Street #</h6>
									<div class="col">
										<div class="col-2">
											<input type="text" name="" id="" required="">
											<span class="highlight"></span>
											<label>From</label>
										</div>
										<div class="col-2">
											<input type="text" name="" id="" required="">
											<span class="highlight"></span>
											<label>To</label>
										</div>
									</div>
								</div>
								<div class="col-3">
									<h6>Street Name</h6>
									<div class="col">
										<input type="text" name="" id="" required="">
										<span class="highlight"></span>
									</div>
								</div>
								<div class="col-3">
									<h6>Postal Code</h6>
									<div class="col">
										<input type="text" name="" id="" required="">
										<span class="highlight"></span>
									</div>
								</div>
							</li>
						</ul>
					</form>
				</div>
				<div class="white-box add-home">
					<h4>Property Characteristics</h4>
					<form action="javaScript:Void(0);">
						<ul>
							<li>
								<div class="col-2">
									<h6>Property Type</h6>
									<div class="col">
										<input type="text" name="" id="" required="">
										<span class="highlight"></span>
									</div>
								</div>
								<div class="col-2">
									<h6>Apx sqft</h6>
									<div class="col">
										<input type="text" name="" id="" required="">
										<span class="highlight"></span>
									</div>
								</div>
							</li>
						</ul>
					</form>
				</div>
			</div>
		</div>
	</div>

	<!-- Login Popup -->
	<div class="custom-popup serach-results-popup" role="alert">
		<div class="custom-popup-container">
			<a href="javascript:void(0)" class="custom-popup-close">x</a>
			<h6>Your search has been matched with 10 properties. Do you want to get them on your email?</h6>
			<form>
				<ul>
					<li>
						<input type="email" name="email" class="loginbox" id="login_email" required="">
						<span class="highlight"></span>
						<label>Enter your Email</label>
					</li>
					<li>
						<input type="button" value="Login" id="btn_login" class="btn btn-blue">
					</li>
				</ul>
			</form>
		</div>
	</div>

	<!-- Jqery Library -->
	<script src="<?php echo base_url()?>assets/js/jquery-2.2.4.js" type="text/javascript"></script>
	<!-- Owl Carousal -->
	<script src="<?php echo base_url()?>assets/js/owl.carousel.js" type="text/javascript"></script>
	<!-- jquery-ui.js -->
	<script src="<?php echo base_url()?>assets/js/jquery-ui.js" type="text/javascript"></script>
	<!-- Custom Jquery -->
	<script src="<?php echo base_url()?>assets/js/function.js" type="text/javascript"></script>
	<script src="<?php echo base_url()?>assets/js/search.js" type="text/javascript"></script>
	
</body>
</html>