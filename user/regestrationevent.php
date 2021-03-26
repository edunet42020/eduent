<?php
	include('connection.php');
	session_start();
	$eid=$_REQUEST['e_id'];
	//echo $eid;
	$fess=$_REQUEST['fees'];
	if(!isset($_SESSION['id']))
{
	header("Location:regestrationevent1.php?e_id=$eid&fees=$fess");
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
<title>Edunet || Regestration event</title>
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
	<?php
		$select="select * from tbluser where u_id=$id";
		//echo $select;
		$res=mysqli_query($conn,$select);
		$result=mysqli_fetch_array($res);
	?>
	<!-- Our LogIn Register -->
	<section class="our-log-reg bgc-fa">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-lg-6 offset-lg-3">
					<div class="sign_up_form inner_page">
						<div class="heading">
							<h3 class="text-center">Register for Event</h3>
														<h6 class="text-center"><button class="btn btn-info"><a href="regestrationevent1.php?e_id=<?php echo "$eid"; ?>&fees=<?php echo "$fess"; ?>">want to regestration for another user</a></button></h6>
						</div> 
						<div class="details">
							<form action="payment/PayUMoney_form.php" method="get">
							
								<div class="form-group">
							    	<input type="text" class="form-control" id="firstname" name="firstname" value="<?php echo "$result[u_first_name]";?>" readonly>
							    	<small id="firstname_error" class="text-danger"></small>
								</div>
								</div>
									 <div class="form-group">
							    	<input type="email" class="form-control" id="email" name="email" value="<?php echo "$result[u_email_id]";?>" readonly>
							    	<small id="email_error" class="text-danger"></small>
								</div>
								 <div class="form-group">
							    	<input type="text" class="form-control" id="mobile" name="mobile" value="<?php echo "$result[u_ph_no]";?>" readonly>
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
</body>
</html>
    </script>
  </body>
</html>
<?php 
?>