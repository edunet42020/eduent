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
<title>Edunet || News</title>
<!-- Favicon -->
<link href="images/favicon.ico" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
<link href="images/favicon.ico" sizes="128x128" rel="shortcut icon" />

</head>
<body>
	<?php
	include("subheader.php");
	?>
	<section class="inner_page_breadcrumb">
		
	</section>
<section class="our-team pb40">
		<div class="container">
			<div class="row">
	<?php
		$select="select * from tblnews order by news_date desc";
		//echo $select;
		$res=mysqli_query($conn,$select);
		while($result=mysqli_fetch_array($res))
		{ 
			 $img = "../admin/themes/metronic/theme/default/demo1/dist/assets/media/news/".$result['news_image_path'];?>
			<div class="col-lg-6 col-xl-4">
				<a href="newsdescription.php?nid=<?php echo "$result[news_id]";?>">
							<div class="top_courses">
								<div class="thumb">
									<img src="<?php echo $img;?>" alt="No Image Available" style="height: auto;width: 500px;">
								</div>
								<div class="details">
									<div class="tc_content">
										<h5><?php echo "$result[news_title]";?></h5>
									</div>
							</div>
							<div class="details">
									<h3><button class='btn btn-info btnblue btntransparent'>Click here for detail</button></h3>
							</div>
						</div>
					</a>
				</div>
	<?php	}
		?>
					
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
<script type="text/javascript" src="js/isotop.js"></script>
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
</body>

