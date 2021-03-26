<?php
include_once("connection.php");
session_start();
if(!isset($_SESSION['id']))
{
	header("Location:page-login.php");
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
<title>Edunet || You-Tube embeded video</title>
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
?>			<section class="inner_page_breadcrumb">
	</section>

	<div class="row">
		<div class="col-lg-6 offset-lg-3">
			<div class="main-title text-center">
				<h2 class="mt0">Extra video</h2>
				<p>These videos are might help you to make your future bright</p>
			</div>
		</div>
	</div>
	<section class="school-category-courses pt30">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
					<iframe width="262" height="165" src="https://www.youtube.com/embed/gfmPVg5-c8E" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
					<iframe width="262" height="165" src="https://www.youtube.com/embed/JRBUMuKumG0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
					<iframe width="262" height="165" src="https://www.youtube.com/embed/5Kg4q0Vq5UU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
					<iframe width="262" height="165" src="https://www.youtube.com/embed/SHxSOFgMs9A" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
					<iframe width="262" height="165" src="https://www.youtube.com/embed/36nTaTMmMww" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
					<iframe width="262" height="165" src="https://www.youtube.com/embed/jc1t0KFsOcs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
					<iframe width="262" height="165" src="https://www.youtube.com/embed/WiwewX7C0QQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
					<iframe width="262" height="165" src="https://www.youtube.com/embed/lDNrRZSgUtM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</section>
				

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
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/sweetalert.min.js"></script>
</body>

</html>
