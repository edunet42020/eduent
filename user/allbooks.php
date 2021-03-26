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
<link rel="stylesheet" href="css/stylebutton.css">
 
<!-- Responsive stylesheet -->
<link rel="stylesheet" href="css/responsive.css">
<!-- Title -->
<title>Edunet || All Books</title>
<!-- Favicon -->
<link href="images/favicon.ico" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
<link href="images/favicon.ico" sizes="128x128" rel="shortcut icon" />
</head>
<body>
    <?php
        $query="select u_first_name , u_last_name , u_photo_path from tbluser where u_id=$id";
        //echo $query;
        $res=mysqli_query($conn,$query);
        $result=mysqli_fetch_array($res);
        $username = $result['u_first_name']." ".$result['u_last_name'];
        //$user_name=$result[u_first_name]." ".$result[u_last_name];
        //echo $username;
        $photo=$result['u_photo_path'];
        //echo $photo;
    ?>
    <div class="wrapper">
        <div class="preloader"></div>
        <!-- Main Header Nav -->
        <?php 
            include_once("subheader.php");
        ?>          
        <section class="inner_page_breadcrumb">
        </section>
        <div class="row" style="padding:40px;">
    <?php
                        $select_book = "select * from tblpdf";
                        $data_book = mysqli_query($conn,$select_book);
                        while($res_book = mysqli_fetch_assoc($data_book))
                        {
                            $path = "../admin/themes/metronic/theme/default/demo1/dist/assets/media/book/"."$res_book[pdf_path]";
                            $img="../admin/themes/metronic/theme/default/demo1/dist/assets/media/bookimage/"."$res_book[pdf_image]";
                            ?>
                            <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6" align="center">
                                <a href="<?php echo $path;?>">
                                    <img src="<?php echo $img; ?>" alt="click here" style="height:auto;width:auto;">
                                    <p align="center"><?php echo $res_book['pdf_name'];?></p>    
                                </a>
                            </div>
                                
                            <?php 
                    }
                        ?>
                    </div>
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

