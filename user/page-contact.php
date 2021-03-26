<?php 
	include_once("connection.php");
	session_start();
	if(!isset($_SESSION['id']))
{
	//header("Location:page-login.php");
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
<link rel="stylesheet" href="css/stylebutton.css">
 
<!-- Responsive stylesheet -->
<link rel="stylesheet" href="css/responsive.css">
<!-- Title -->
<title>Edunet || page-contact</title>
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

	<!-- How It's Work -->
	<section class="our-contact">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-lg-4">
					<div class="contact_localtion text-center">
						<div class="icon"><span class="flaticon-placeholder-1"></span></div>
						<h4>Our Location</h4>
						<p>Near I.C.Gandhi school,Sumul dairy road,Surat-395001.</p>
					</div>
				</div>
				<div class="col-sm-6 col-lg-4">
					<div class="contact_localtion text-center">
						<div class="icon"><span class="flaticon-phone-call"></span></div>
						<h4>Contact Detail</h4>
						<p class="mb0">Mobile:98765 43210<br> Fax: (+096) 468 235</p>
					</div>
				</div>
				<div class="col-sm-6 col-lg-4">
					<div class="contact_localtion text-center">
						<div class="icon"><span class="flaticon-email"></span></div>
						<h4>Write Some Words</h4>
						<p><a href="edunetbrm@gmail.com">edunetbrm@gmail.com</a></p>
					</div>
				</div>
			</div>
			<div class="row">
		
					<div class="col-md-6 col-sm-6">
                <!-- Start Map Section -->
                
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3719.4833164079614!2d72.83759451430103!3d21.212674786851537!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be04ee555e249f7%3A0xa1d2559a8c0e03c6!2sRavindar%20Ashok%20bhai%20Patel!5e0!3m2!1sen!2sin!4v1586533112041!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                <!-- End Map Section -->
          
				</div>
				<div class="col-lg-6 form_grid">
					<h4 class="mb5">Send a Message</h4>
					<p>give your feedback and suggestion here.</p>
		            <form class="contact_form" id="contact_form" name="contact_form" action="insertfeedback.php" method="post" novalidate="novalidate">
						<div class="row">
			                <div class="col-sm-12">
			             
			                </div>
			                <div class="col-sm-12">
			                    <div class="form-group">
			                    	<label for="exampleInputEmail">Your Email</label>
			                    	<input id="form_email" name="form_email" class="form-control required email" required="required" type="email">
			                    </div>
			                </div>
			                <div class="col-sm-12">
			                   
			                </div>
			                <div class="col-sm-12">
	                            <div class="form-group">
	                            	<label for="exampleInputEmail1">Your Message</label>
	                                <textarea id="form_message" name="form_message" class="form-control required" rows="5" required="required"></textarea>
	                            </div>
			                    <div class="form-group ui_kit_button mb0">
				                    <h1><button type="submit" class="btn btn-success btngreen btntransparent" style="border-radius: 20px;">submit</button></h1>
			                    </div>
			                </div>
		                </div>
		            </form>
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
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAAz77U5XQuEME6TpftaMdX0bBelQxXRlM&amp;callback=initMap"type="text/javascript"></script>
<script type="text/javascript" src="js/googlemaps1.js"></script>
<!-- Custom script for all pages --> 
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="assets/js/nivo-lightbox.min.js"></script>
<script type="text/javascript" src="assets/js/sweetalert.min.js"></script>

</body>
</html>
<?php
	if(isset($_REQUEST['msgfeed']))
	{
		echo "hello";
		echo "<script>
                swal('Done!','Thank You For Your FeedBack..','success');
              </script>";
	}
?>