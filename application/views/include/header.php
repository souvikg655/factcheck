<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Fact Check</title>
	
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i" rel="stylesheet">
	<!-- Custom Stylesheet -->
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/style.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/toastr.css">
	<!-- Custom Stylesheet -->
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/owl.carousel.min.css">
	<script src="<?php echo base_url()?>assets/js/jquery-2.2.4.js" type="text/javascript"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

	<link href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>

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
				<a href="javascript:void(0);" class="toggle">
					<span></span>
					<span></span>
					<span></span>
				</a>
			</div>
		</div>
	</header>


	<div class="popupbox" id="popuprel">
		<div id="intabdiv" class="flex-body">
			<h4>Login</h4>
			<h6>Welcome! Login to your account</h6>
			<form action="JavaScript:Void(0);" method="POST" name="login">
				<ul>
					<li>
						<input type="email" name="email" class="loginbox" id="login_email" placeholder="Email">
					</li>
					<li>
						<input type="password" name="password" class="loginbox" id="login_password" placeholder="Password">
					</li>
					<li>
						<input type="button" value="Login" id="btn_login" class="btn btn-blue">
						<span class="more">
							<span>Forgot your password?</span>
							<p id="enter-text">Enter your Email Address here to receive a link to change password.</p>
							<ul>
								<li>
									<input type="email" name="forgot_email" id="forgot_email" placeholder="Email">
								</li>
								<li>
									<label></label>
									<input type="button" id="mail_send" value="Send Email" class="btn btn-blue">
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
			<form action="JavaScript:Void(0);" method="POST"  enctype='multipart/form-data'>
				<ul>
					<li>
						<input type="text" name="name" class="signupbox" id="name" placeholder="Full Name">
					</li>
					<li>
						<input type="email" name="email" class="signupbox" id="email" placeholder="Email">
					</li>
					<li>
						<input type="text" name="company" class="signupbox" id="company" placeholder="Company Name">
					</li>
					<li>
						<input type="password" name="password" class="signupbox" id="password" placeholder="Password">
					</li>
					<li>
						<input type="password" name="cpassword" class="signupbox" id="cpassword" placeholder="Confirm Password">
					</li>
					<li>
						<div class="block">
							<input  name="licence_image" id="licence_image" class="signupbox" type="file" placeholder="Add profile picture" onchange="readURL(this);">
							<label for="licence_image">Upload ID proof</label>
						</div>
						<figure>
							<img id="blah"  src="#" alt=""/>
						</figure>
					</li>
					<li>
						<input type="button" value="Sign up Now!" id="btn_signup" name="btn_signup" class="btn btn-blue">
					</li>
					<li><p>Already have an account? <a href="javascript:void(0)" class="signup-button2">Login!</a></p></li>
				</ul>
			</form>
		</div>
		<div id="close2"><a href="#"><img src="assets/images/close_pop.png" alt="close-button"></a></div>
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

							window.location.href = "<?php echo base_url()."home/dashboard"?>";
						}else{
							toastr["error"]("Login fail");
						}	
					}
				});
			});
		});

	</script>
