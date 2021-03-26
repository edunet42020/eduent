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
	$cid=$_REQUEST['cid'];
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
<title>Edunet || Enroll course</title>
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
		$select1="select * from tblcourse where course_id=$cid";
		//echo $select;
		$res1=mysqli_query($conn,$select1);
		$result1=mysqli_fetch_array($res1);
		$s="select no_of_credit from tblcredit where u_id=$id";
		//echo $s;
		$r=mysqli_query($conn,$s);
		$rc=mysqli_fetch_array($r);
		if($rc['no_of_credit']>=100)
		{
			//echo "hello";
			$credit=$rc['no_of_credit']-100;
			//echo $credit;
			$up="update tblcredit set no_of_credit=$credit where u_id=$id";
			mysqli_query($conn,$up);
			$course=$result1['course_prize']-$result1['course_prize']*10/100;

                        
		}
		else
		{
			$course=$result1['course_prize'];
		}
	?>
	<!-- Our LogIn Register -->
	<section class="our-log-reg bgc-fa">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-lg-6 offset-lg-3">
					<div class="sign_up_form inner_page">
						<div class="heading">
							<h3 class="text-center">Register for course</h3>
						</div> 
						<div class="details">
							<form action="paymentcourse/PayUMoney_form.php" method="get">
							
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
							    	<input type="text" class="form-control" id="fees" name="fees" value="<?php echo $course;?>" readonly>
							    	<small id="fee_error" class="text-danger"></small>
								</div>
								<input type="hidden" value="<?php echo "$cid";?>" name="eid">
								<button type="submit" class="btn btn-log btn-block btn-thm2" name="btnreg">Enroll</button>
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
<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script type="text/javascript" src="js/jquery-3.3.1.js"></script>
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

</body>
</html>
<?php
								if($course!=$result1['course_prize'])
								{
									$dismoney=$result1['course_prize']-$course;
								echo "<script>
                                swal('Done!','you got discount of rs. $dismoney on course price..','success');
                              </script>";
                              }
?>