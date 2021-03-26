<?php
	include_once("connection.php");
	session_start();
    if(!isset($_SESSION['id']))
{
   
}
else
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
<title>Edunet  Regestration event</title>
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
	<section class="our-log-reg bgc-fa">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-lg-6 offset-lg-3">
					<div class="sign_up_form inner_page">
						<div class="heading">
							<h3 class="text-center">Register for Event</h3>
						</div>
						<div class="details">
							<form action="payment/PayUMoney_form.php" method="get">
								<div>
								<input type="hidden" name="eid" value="<?php echo "$_REQUEST[e_id]"; ?>">
								</div>
								<div class="form-group">
							    	<input type="text" class="form-control" id="firstname" name="firstname" placeholder="enter your first name">
							    	<small id="firstname_error" class="text-danger"></small>
								</div>
								</div>
									 <div class="form-group">
							    	<input type="email" class="form-control" id="email" name="email" placeholder="enter your Email Address">
							    	<small id="email_error" class="text-danger"></small>
								</div>
								 <div class="form-group">
							    	<input type="text" class="form-control" id="mobile" name="mobile" placeholder="enter your phone number">
							    	<small id="number_error" class="text-danger"></small>
								</div>
								<div class="form-group">
							    	<input type="text" class="form-control" id="fees" name="fees" value="<?php echo "$_REQUEST[fees]";?>" readonly>
							    	<small id="fee_error" class="text-danger"></small>
								</div>
								<input type="hidden" value="<?php echo "$_REQUEST[e_id]";?>" name="eid">
								<button type="submit" class="btn btn-log btn-block btn-thm2" name="btnreg">Register-Event</button>
							</form>
						</div>
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
    <script>
    $(document).ready(function(){
        // alert("hello");
      
        // $('#firstname_error').hide();

        $('#firstname').keypress(function(){
           fname = $('#firstname').val();
          var fname_regx = /^[a-zA-Z]{1,20}$/;
          if(fname.match(fname_regx))
          {
            $('#firstname_error').hide();
          }
          else
          {
            $('#firstname_error').html("Enter Valid first Name");
            $('#firstname_error').show();  
            // $('#firstname').focus();

          }

        });

        $('#mobile').keypress(function(){
          mobile = $('#mobile').val();
          var mobile_regx = /^[0-9]{10}$/;
          if(mobile.match(mobile_regx))
          {
            $('#number_error').hide();
          }
          else
          {
            $('#number_error').html("Enter Valid Number..");
            $('#number_error').show();  
            // $('#mobile').focus();

          }

        });
                  
        $('#email').keypress(function(){
          var email = $('#email').val();
          // var email_regx = /^\w+[\+\.w-]*@([\w-]+\.)*\w+[\w-]*\.([a-z]{2,4}|\d+)+/i;
          var email_regx =  /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
          if(email.match(email_regx))
          {
            $('#email_error').hide();
          }
          else
          {
            $('#email_error').html("Enter Valid Email.");
            $('#email_error').show();  
            // $('#email').focus();
          }
        });  
        
    });
    </script>
  </body>
</html>
<?php 
if(isset($_POST['btnreg']))
{
$fname    = $_REQUEST['firstname'];
$email    =  $_REQUEST['email'];
 $mobile   =  $_REQUEST['mobile'];  
 if (empty($fname) || empty($email) || empty($mobile))
 { ?>
 	<script>   
        $(document).ready(function(){
	    $('#firstname_error').html('*'); 
	    $('#number_error').html('*');  
	    $('#email_error').html('*'); 
              });
    </script>
 <?php }
}
?>