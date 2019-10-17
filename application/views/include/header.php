<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Fact Check</title>
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url()?>assets/images/favicon.png">
	
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/
	css?family=Livvic:300,400,400i,500,600,700&display=swap" rel="stylesheet">
	<!-- Custom Stylesheet -->
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/style.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/toastr.css">
	<!-- Custom Stylesheet -->
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/owl.animate.css">
	<script src="<?php echo base_url()?>assets/js/jquery-2.2.4.js" type="text/javascript"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>


</head>
<body>
	<!-- header -->
	<header id="header" class="header">
		<div class="container">
			<div class="row">
				<div class="logo">
					<a href="<?php echo base_url()?>"><img src="<?php echo base_url()?>assets/images/logo.png" alt=""></a>
				</div>
				<a href="javascript:void(0);" class="toggle">
					<span></span>
					<span></span>
					<span></span>
				</a>
				<ul>
					<li><a href="<?php echo base_url()?>about">about us</a></li>
					<li><a href="<?php echo base_url()?>contact-us">Contact us</a></li>
					<li class="login"><a href="javascript:void(0);" class="trigger-popup" data-target="login-popup">login</a></li>
				</ul>
			</div>
		</div>
	</header>


	<!-- Login Popup -->
	<div class="custom-popup login-popup" role="alert">
		<div class="custom-popup-container">
			<a href="javascript:void(0)" class="custom-popup-close">x</a>
			<h4>Search your home</h4>
			<form>
				<ul>
					<li>
						<input type="email" name="email" class="loginbox" id="login_email" required="">
						<span class="highlight"></span>
						<label>Email</label>
			    	</li>
			    	<li>
						<input type="password" name="password" class="loginbox" id="login_password" required="">
						<span class="highlight"></span>
						<label>Password</label>
			    	</li>
					<li>
						<input type="button" value="Login" id="btn_login" class="btn btn-blue">
					</li>
				</ul>
			</form>
			<a href="javascript:void(0);" class="trigger-popup forger-password" data-target="forger-password-popup">Forgot your password?</a>
			<p>Don't have an account? <a href="javascript:void(0)" class="trigger-popup" data-target="signup-popup">Create One!</a></p>
		</div>
	</div>

	<!-- Forget Password Popup -->
	<div class="custom-popup forger-password-popup" role="alert">
		<div class="custom-popup-container">
			<a href="javascript:void(0)" class="custom-popup-close">x</a>
			<h4>Forgot your password?</h4>
			<p>Enter your Email Address here to receive a link to change password.</p>
			<form>
				<ul>
					<li>
						<input type="email" name="forgot_email" id="forgot_email" required="">
						<span class="highlight"></span>
						<label>Email</label>
				    </li>
				    <li>
	    				<label></label>
						<input type="button" id="mail_send" value="Send Email" class="btn btn-blue">
	    			</li>
				</ul>
			</form>
		</div>
	</div>

	<!-- Sign Up Popup -->
	<div class="custom-popup signup-popup" role="alert">
		<div class="custom-popup-container popup-container-large">
			<a href="javascript:void(0)" class="custom-popup-close">x</a>
			<h4>create an account</h4>
			<p>Welcome! Register for an account</p>
			<form>
				<ul>
					<li>
						<div class="col-2">
							<input type="text" name="name" class="signupbox" id="name" required="">
							<span class="highlight"></span>
							<label>Full Name</label>
						</div>
						<div class="col-2">
							<input type="email" name="email" class="signupbox" id="email" required="">
							<span class="highlight"></span>
							<label>Email</label>
						</div>
					</li>
					<li>
						<div class="col-2">
							<input type="text" name="company" class="signupbox" id="company" required="">
							<span class="highlight"></span>
							<label>Company Name</label>
						</div>
						<div class="col-2">
							<input type="password" name="password" class="signupbox" id="password" required="">
							<span class="highlight"></span>
							<label>Password</label>
						</div>
					</li>
					<li>
						<div class="col-2">
							<input type="password" name="cpassword" class="signupbox" id="cpassword" required="">
							<span class="highlight"></span>
							<label>Confirm Password</label>
						</div>
						<div class="col-2">
							<div class="block">
				    			<input  name="licence_image" id="licence_image" class="signupbox" type="file" placeholder="Add profile picture" onchange="readURL(this);">
	  							<label for="licence_image">Upload ID proof</label>
				    		</div>
				    		<figure><img id="blah"  src="#" alt=""/></figure>
						</div>
					</li>
			    	<li>
			    		<input type="button" value="Sign up Now!" id="btn_signup" name="btn_signup" class="btn btn-blue">
			    	</li>
				</ul>
			</form>
			<p class="gap15">Already have an account? <a href="javascript:void(0)" class="trigger-popup" data-target="login-popup">Login!</a></p>
		</div>
	</div>

	<script type="text/javascript">
		
		$(".loginbox").keyup(function(event) {
			if (event.keyCode === 13) {
				$("#btn_login").click();
			}
		});

		$(".signupbox").keyup(function(event) {
			if (event.keyCode === 13) {
				$("#btn_signup").click();
			}
		});


		function readURL(input) {
			if (input.files && input.files[0]) {
				var reader = new FileReader();
				reader.onload = function(e) {
					$('#blah').attr('src', e.target.result);
				}
				reader.readAsDataURL(input.files[0]);
			}
		}

		$(document).ready(function(){
			$("#btn_signup").click(function(){
				var name =  $("#name").val();
				var email =  $("#email").val();
				var company =  $("#company").val();
				var password =  $("#password").val();
				var cpassword =  $("#cpassword").val();
				var licence_image =  $("#licence_image").val();

				if(name == ''){
					toastr["error"]("Please enter name");
					return false;
				}
				if(email == ''){
					toastr["error"]("Please enter valid email");
					return false;
				}
				if(company == ''){
					toastr["error"]("Please enter company name");
					return false;
				}
				if(password == ''){
					toastr["error"]("Please enter password");
					return false;
				}
				if(cpassword == ''){
					toastr["error"]("Please enter confirm password ");
					return false;
				}
				if(password != cpassword){
					toastr["error"]("Both password is not same");
					return false;
				}
				if(licence_image == ''){
					toastr["error"]("Please select image");
					return false;
				}

				var formdata = new FormData();
				var fileinput = $('#licence_image')[0].files[0];
				formdata.append("name", name);
				formdata.append("email", email);
				formdata.append("company", company);
				formdata.append("password", password);
				formdata.append("cpassword", cpassword);
				formdata.append("licence_image", fileinput);
				var ajaxReq = $.ajax({
					url: '<?php echo base_url()?>user/registration',
					type: 'POST',
					processData: false,
					contentType: false,
					data: formdata,
					beforeSend: function (xhr) {
					},
					success: function (data) {
						var obj = jQuery.parseJSON(data);

						if(obj.status){
							$('#name').val("");
							$('#email').val("");
							$('#company').val("");
							$('#password').val("");
							$('#cpassword').val("");
							toastr.success('Registration Successful', '', {
								onHidden: function() {
									window.location.href = "<?php echo base_url()?>";
								}
							});
						}else{
							toastr["error"](obj.message);
						}
					}
				});
			});
		});

		$(document).ready(function(){
			$("#btn_login").click(function(){
				var email =  $("#login_email").val();
				var password =  $("#login_password").val();
				if(email == ''){
					toastr["error"]("Please enter valid email");
					return false;
				}
				if(password == ''){
					toastr["error"]("Please enter password");
					return false;
				}
				var formdata = new FormData();
				formdata.append("email", email);
				formdata.append("password", password);
				var ajaxReq = $.ajax({
					url: '<?php echo base_url()?>user/login',
					type: 'POST',
					processData: false,
					contentType: false,
					data: formdata,
					beforeSend: function (xhr) {
					},
					success: function (data) {
						var obj = jQuery.parseJSON(data);

						if(obj.status){
							$('#login_email').val("");
							$('#login_password').val("");

							window.location.href = "<?php echo base_url()."dashboard"?>";
						}else{
							toastr["error"]("Login fail");
						}	
					}
				});
			});
		});
	</script>
