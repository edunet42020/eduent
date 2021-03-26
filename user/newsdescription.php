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
<!-- Responsive stylesheet -->
<link rel="stylesheet" href="css/responsive.css">
<!-- Title -->
<title>Edunet || News description</title>
<!-- Favicon -->
<link href="images/favicon.ico" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
<link href="images/favicon.ico" sizes="128x128" rel="shortcut icon" />


</head>
<body>
	<?php
	include("subheader.php");
	?>
	<section class="inner_page_breadcrumb">
		<div class="container">
			<div class="row">
				<div class="col-xl-6 offset-xl-3 text-center">
					<div class="breadcrumb_content">
						<h4 class="breadcrumb_title">Courses</h4>
						<ol class="breadcrumb">
						    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
						    <li class="breadcrumb-item active" aria-current="page">courses</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
	</section>
	  <section>
                  <div class="container">
                  <div class="row">
                    <div class="col-md-12">
                        <div class="events">
                            <ul>
                               <?php
                               			$nid=$_REQUEST['nid'];
                                        $select_news = "select * from tblnews where news_id=$nid";
                                //        echo $select_news;
                                        $data = mysqli_query($conn,$select_news);
                                        
                                        

                                ?>
                                <?php while($available_news  = mysqli_fetch_array($data))
                                {
                                    $img = "../admin/themes/metronic/theme/default/demo1/dist/assets/media/news/".$available_news['news_image_path'];
                                    //echo $img;
                                    $newsstartdate=date_create($available_news['news_date']);
                                    $newsstartdateformate=date_format($newsstartdate,"d/m/Y");
                                ?>
                                <li>
                                	<h3><?php echo $available_news['news_title']?></h3>
                                	<h3><?php echo $newsstartdateformate;?></a></h3>
                                    <div class="time">
<!--                                        <h2>24 <br><span>June</span></h2>-->
                                          
                                            <BR CLEAR=”left” />
                                    </div>
                                    <div class="details">
                                       <div class="container float-right">	 
										<p style="float: left; clear: left">  <p style="float: left; clear: left"><img src="<?php echo $img;?>" alt="No Image Available" width="200px; height:200px;"></p></p>
										<h4><?php echo "$available_news[news_description]";?></h4>
                                        </p>
                                        </div>
                                    </div>
                                    <div style="clear: both;"></div>
                                </li>
                                <?php 
                                }
                                ?>
                            <ul>
                        </div>
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
</html>