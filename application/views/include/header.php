<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Fact Check</title>
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i" rel="stylesheet">
	<!-- Custom Stylesheet -->
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/style.css">
	<!-- Custom Stylesheet -->
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/owl.carousel.min.css">
</head>
<body>
	<!-- header -->
	<header id="header" class="header">
		<div class="container">
			<div class="row">
				<div class="logo">
					<a href="<?php echo base_url()?>"><img src="<?php echo base_url()?>assets/images/logo.png" alt=""></a>
				</div>
				<ul>
					<li><a href="javascript:void(0);">about us</a></li>
					<li><a href="javascript:void(0);">Contact us</a></li>
					<li class="login"><a href="javascript:void(0);" rel="popuprel" class="popup">login</a></li>
					<li><a href="javascript:void(0);" rel="popuprel2" class="popup">register</a></li>
				</ul>
			</div>
		</div>
	</header>


	<div class="popupbox" id="popuprel">
		<div id="intabdiv" class="flex-body">
			<h4>Login</h4>
			<h6>Welcome! Login to your account</h6>
			<form action="<?php echo base_url()?>user/login" method="POST" name="login">
				<ul>
					<li>
						<input type="email" name="emailid" id="emailid" placeholder="Email">
					</li>
					<li>
						<input type="password" name="password" id="password" placeholder="Password">
					</li>
					<li>
						<input type="submit" value="Login" class="btn btn-blue">
						<span class="more">
							<span>Forgot your password?</span>
							<p id="enter-text">Enter your Email Address here to receive a link to change password.</p>
							<ul>
								<li>
									<input type="email" name="forgot_email" id="forgot_email" placeholder="Email">
								</li>
								<li>
									<label></label>
									<input type="submit" value="Send Email" class="btn btn-blue">
								</li>
							</ul>
						</span>
					</li>
					<li><p>Don't have an account? <a href="javascript:void(0)" class="signup-button">Create One!</a></p></li>
				</ul>
			</form>     
		</div>
		<div id="close"><a href="#"><img src="assets/images/close_pop.png" alt="close-button"></a></div>
	</div>
	<!-- Registration Popup -->
	<div class="popupbox2" id="popuprel2">
		<div id="intabdiv2" class="flex-body">
			<h4>create an account</h4>
			<h6>Welcome! Register for an account</h6>
		    <form action="<?php echo base_url()?>user/registration" method="POST" name="registration" enctype='multipart/form-data'>
			    <ul>
			    	<li>
						<input type="text" name="name" id="name" placeholder="Full Name">
			    	</li>
			    	<li>
						<input type="email" name="email" id="email" placeholder="Email">
			    	</li>
			    	<li>
						<input type="password" name="password" id="password" placeholder="Password">
			    	</li>
			    	<li>
			    		<input type="password" name="cpassword" id="cpassword" placeholder="Confirm Password">
			    	</li>
			    	<li>

			    		<input id="file1" name="licence_image" id="licence_image" type="file" placeholder="Add profile picture">
  						<!-- <label for="file1">Upload Property Picture</label> -->
  						<label for="file1">Upload ID proof</label>
			    	</li>
			    	<!-- <li>
			    		<p>
			    			Register as a
			    			<span>
				    			<input type="radio" id="test1" name="radio-group" checked>realter
				    		</span>
				    		<span for="">
				    			<input type="radio" id="test2" name="radio-group">Normal User
				    		</span>
			    		</p>
			    	</li> -->
			    	<li>
			    		<input type="submit" value="Sign up Now!" class="btn btn-blue">
			    	</li>
			    	<li><p>Already have an account? <a href="javascript:void(0)" class="signup-button2">Login!</a></p></li>
			    </ul>
		    </form>
	    </div>
	    <div id="close2"><a href="#"><img src="assets/images/close_pop.png" alt="close-button"></a></div>
	</div>