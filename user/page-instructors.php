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
<link rel="stylesheet" href="css/style2.css">
<!-- Responsive stylesheet -->
<link rel="stylesheet" href="css/responsive.css">
<!-- Title -->
<title>Edunet || page-instructors</title>
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

	<!-- Our Team Members -->
	<div><h1>Popular instructor</h1></div>
	
	<div class="row con">      
        <?php 
            $select_teacher = "select * from tblfaculty";
            //echo $select_teacher;
            $teacher = mysqli_query($conn,$select_teacher);    
            while($availabel_teacher = mysqli_fetch_array($teacher))
            {
               $img = "../admin/themes/metronic/theme/default/demo1/dist/assets/media/faculty/".$availabel_teacher['f_photo_path'];
        ?>  
        <a href="instructorcourse.php?iid=<?php echo $availabel_teacher['f_id']; ?>">
        <div class="box">
            <div class="imgBox">
                    <img src="<?php echo $img;?>" style="max-width: 100%;max-height: 100%;">
            </div>
                <div class="content">
                    <h2 style="text-transform:capitalize;"><?php echo $availabel_teacher['f_name'];?></h2>
                    <p><?php echo $availabel_teacher['f_description'];?><br>
                                                <?php echo "Qualification:".$availabel_teacher['f_qualification'];?>
                    </p>
                </div>
        </div>
    </a>
        <?php
                }
        ?>
<!--        <div style="clear: both;"></div>-->
    </div>

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
</body>

</html>