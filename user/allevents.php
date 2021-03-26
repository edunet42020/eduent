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
<title>Edunet || All Events</title>
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

	<!-- Main Blog Post Content -->
<section class="popular-courses pb0 pt0">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 offset-lg-3">
					<div class="main-title text-center">
						<h3 class="mt30">Upcoming Events</h3>
						<p>Grant that I may always desire more than I can accomplish.</p>
					</div>
				</div>
			</div>
			<section class="our-team pb40">
		<div class="container">
			<div class="row">
				<?php
	$date=date("Y-m-d");
							//echo $date;
							$query="select * from tblevent where event_date > '$date'";
							//echo $query;
							$res=mysqli_query($conn,$query);
							$count=mysqli_num_rows($res);
							if($count>0)
							{
							while($result=mysqli_fetch_array($res))
								{ ?>


			<div class="col-lg-6 col-xl-4">
							<div class="top_courses">
								<div class="thumb">
									<img class="img-whp" width="550px" height="275px" src="<?php echo "../admin/themes/metronic/theme/default/demo1/dist/assets/media/event/"."$result[event_photo_path]"; ?>" alt="No Image Available">
								</div>
								<div class="details">
									<div class="tc_content">
										<h5><?php echo "$result[event_name]";?></h5>
										
										<?php 
											 $eventdate=date_create($result['event_date']);
                    $eventformate=date_format($eventdate,"d/m/Y");
										?>
										
									</div>
									
									<div class="text-center" style="padding-top:10px;padding-bottom: 20px;">
										<?php $id=$result['event_id'];?>
										<a href="event.php?eid=<?php echo $id?>"><button class="btn btn-info btnblue btntransparent">Read More</button></a>
									</div>
								</div>
							</div>
						</div>
									<?php
								}
							}
							else
							{ ?>
								<h3 class="h3">No Events are available</h3>
							<?php }
						?>			</div>
				</div>
							</section>
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
<!-- Custom script for all pages --> 
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="assets/js/nivo-lightbox.min.js"></script>
<script type="text/javascript" src="assets/js/sweetalert.min.js"></script>

</body>
</html>
<?php
    if(isset($_REQUEST['msg']))
    {
        echo "<script>
		swal('Opps!','Your regestration is not complete','error');      
		</script>";
    }
?>