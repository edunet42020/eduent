<?php
	include_once("connection.php");
	session_start();
	if(isset($_SESSION['id']))
	{
		header("location:index.php?urali");
	}
	if(isset($_SESSION['id']))
	{
		$id=$_SESSION['id'];
	}
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="academy, college, coursera, courses, education, elearning, kindergarten, lms, lynda, online course, online education, school, training, udemy, university">
<meta name="description" content="Edumy - LMS Online Education Course & School HTML Template">
<meta name="CreativeLayers" content="ATFN">
<!-- css file -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
 
<!-- Responsive stylesheet -->
<link rel="stylesheet" href="css/responsive.css">
<!-- Title -->
<title>Edunet || page-login</title>
<!-- Favicon -->
<link href="images/favicon.ico" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
<link href="images/favicon.ico" sizes="128x128" rel="shortcut icon" />

</head>
<body>
<div class="wrapper">
	<div class="preloader"></div>

	<!-- Main Header Nav -->
	<?php
		include_once("subheader.php");
	?>
	<!-- Inner Page Breadcrumb -->
	<section class="inner_page_breadcrumb">
	</section>
	<!-- Our LogIn Register -->
	<section class="our-log bgc-fa">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-lg-6 offset-lg-3">
					<div class="login_form inner_page">
						<form action="checkuser.php" method="post">
							<div class="heading">
								<h3 class="text-center">Login to your account</h3>
								<p class="text-center">Don't have an account? <a class="text-thm" href="page-register.php">Sign Up!</a></p>
							</div>
							 <div class="form-group">
							 	 <label for=""><i class="flaticon-email"></i> UserName:</label>
						    	<input type="email" class="form-control" id="username" placeholder="Email Address" name="userid">
						    	 <small id="username_error" class="text-danger"></small>
							</div>
							<div class="form-group">
								 <label for=""><i class="fa fa-lock"></i> Password:</label>
						    	<input type="password" class="form-control" id="pass" placeholder="Password" name="userpwd">
						    	 <small id="pass_error" class="text-danger"></small>
							</div>
							<div class="form-group custom-control custom-checkbox">
								<a class="tdu btn-fpswd text-center" href="forgetpassword.php">Forgot Password?</a> |
								<a class="tdu btn-fpswd text-center" href="page-register.php"> Create new account</a>
							</div>

							<button type="submit" class="btn btn-block btn-thm2" name="btnlogin" style="border-radius: 30px;">Login</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Our Footer -->
	<?php
	include_once("footer.php");
?>
<!-- Wrapper End -->
<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script type="text/javascript" src="js/jquery-3.3.1.js"></script>
<script type="text/javascript" src="js/jquery-migrate-3.0.0.min.js"></script>
<script type="text/javascript" src="js/popper.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.mmenu.all.js"></script>
<script type="text/javascript" src="js/ace-responsive-menu.js"></script>
<script type="text/javascript" src="js/bootstrap-select.min.js"></script>
<script type="text/javascript" src="js/snackbar.min.js"></script>
<script type="text/javascript" src="js/simplebar.js"></script>
<script type="text/javascript" src="js/parallax.js"></script>
<script type="text/javascript" src="js/scrollto.js"></script>
<script type="text/javascript" src="js/jquery-scrolltofixed-min.js"></script>
<script type="text/javascript" src="js/jquery.counterup.js"></script>
<script type="text/javascript" src="js/wow.min.js"></script>
<script type="text/javascript" src="js/progressbar.js"></script>
<script type="text/javascript" src="js/slider.js"></script>
<script type="text/javascript" src="js/timepicker.js"></script>
<script type="text/javascript" src="js/wow.min.js"></script>
<!-- Custom script for all pages --> 
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="assets/js/nivo-lightbox.min.js"></script>
    <script type="text/javascript" src="assets/js/sweetalert.min.js"></script>
 <script>
    $(document).ready(function(){
       	$('#username_error').hide();
        $('#pass_error').hide();

       
        $('#username').keypress(function(){
          var email = $('#username').val();
          // var email_regx = /^\w+[\+\.w-]*@([\w-]+\.)*\w+[\w-]*\.([a-z]{2,4}|\d+)+/i;
          var email_regx =  /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
          if(email.match(email_regx))
          {
            $('#username_error').hide();
          }
          else
          {
            $('#username_error').html("Enter Valid Email.");
            $('#username_error').show();  
            // $('#email').focus();
          }
        });
        $('#pass').keypress(function(){
          var pass = $('#pass').val();
          // var pass_regx = ;
          if(pass.length > 8 && pass.length < 20)
          {
            $('#pass_error').hide();
          }
          else
          {
            $('#pass_error').html("password must between 8 to 20 character");
            $('#pass_error').show();  
            // $('#pass').focus();  
          }
        });
    });
    </script>
 	 
 	 
</body>

</html>
