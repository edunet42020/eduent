<?php
session_start();
if(!isset($_SESSION['AdminUsername']))
{
    header("Location:../../adminlogin.php");
}
else
{
    $id=$_SESSION['AdminUsername'];
}
?>
<?php
include_once("connection.php");
define("ROOT_PATH", $_SERVER["DOCUMENT_ROOT"]);
define("rootpath","C:/xampp/htdocs/edunet/admin/preview/demo1");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />

    <title>Edunet || Admin Dashboard</title>
    <meta name="description" content="Updates and statistics">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="../../themes/favicon.ico" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
<link href="../../themes/favicon.ico" sizes="128x128" rel="shortcut icon" />
    <!--begin::Fonts -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Roboto:300,400,500,600,700">
    <!--end::Fonts -->
<link rel="stylesheet" href="../../themes/metronic/theme/default/demo1/dist/assets/css/edunet-style.css" />
    <!--begin::Page Vendors Styles(used by this page) -->
    <link
        href="../../themes/metronic/theme/default/demo1/dist/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css"
        rel="stylesheet" type="text/css" />
    <!--end::Page Vendors Styles -->

    <!--begin::Global Theme Styles(used by all pages) -->
    <link href="../../themes/metronic/theme/default/demo1/dist/assets/plugins/global/plugins.bundle.css"
        rel="stylesheet" type="text/css" />
    <link href="../../themes/metronic/theme/default/demo1/dist/assets/css/style.bundle.css" rel="stylesheet"
        type="text/css" />
    <!--end::Global Theme Styles -->

    <!--begin::Layout Skins(used by all pages) -->
    <link href="../../themes/metronic/theme/default/demo1/dist/assets/css/skins/header/base/light.css" rel="stylesheet"
        type="text/css" />
    <link href="../../themes/metronic/theme/default/demo1/dist/assets/css/skins/header/menu/light.css" rel="stylesheet"
        type="text/css" />
    <link href="../../themes/metronic/theme/default/demo1/dist/assets/css/skins/brand/dark.css" rel="stylesheet"
        type="text/css" />
    <link href="../../themes/metronic/theme/default/demo1/dist/assets/css/skins/aside/dark.css" rel="stylesheet"
        type="text/css" />
    <!--end::Layout Skins -->
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="shortcut icon"
        href="https://keenthemes.com/metronic/themes/metronic/theme/default/demo1/dist/assets/media/logos/favicon.ico" />
<style>
.zoom:hover
{
    transform: scale(1.3);
    transition: .5s;
}
</style>
</head>

<!-- end::Head -->

<!-- begin::Body -->

<body
    class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--fixed kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading">

    <!-- begin:: Page -->
    <!-- begin:: Header Mobile -->
    <div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed ">
        <div class="kt-header-mobile__logo">
            <a href="index.php">
                <img alt="Logo"
                    src="http://localhost/edunet/admin/themes/metronic/theme/default/demo1/dist/assets/media/logos/logo-light1.png" />
            </a>
        </div>
        <div class="kt-header-mobile__toolbar">
            <button class="kt-header-mobile__toggler kt-header-mobile__toggler--left"
                id="kt_aside_mobile_toggler"><span></span></button>

            <button class="kt-header-mobile__toggler" id="kt_header_mobile_toggler"><span></span></button>

            <button class="kt-header-mobile__topbar-toggler" id="kt_header_mobile_topbar_toggler"><i
                    class="flaticon-more"></i></button>
        </div>
    </div>
    <!-- end:: Header Mobile -->
    <div class="kt-grid kt-grid--hor kt-grid--root">
    <!--    Begin :aside  -->
    <?php
        require(rootpath."/asideindex.php");
    ?>

<!--    end :aside  --> 



            <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">
            <?php
        require(rootpath."/headerindex.php");
    ?>
 <!-- begin:: Header -->
                
                    <!-- end:: Content Head -->
                    <!-- begin:: Content -->
                    <div class="kt-container--fluid  kt-grid__item kt-grid__item--fluid">
                        <!--Begin::Dashboard 1-->
                        <!--Begin::Row-->
                       
                        <!--End::Row-->

                        <!--Begin::Row-->
                       
                                <!--end:: Widgets/Tasks -->
                           
                            
    
    
    <div class="container-fluid">
    <div class="quick-actions_homepage" style="width: 100%;
    text-align: center;
    position: relative;
    float: left;
    margin-top: 10px;">
      <ul class="quick-actions" style="margin-left: 10%;display: block;
    color: #fff;
    font-size: 14px;
    font-weight: lighter;">
        <li class="bg_lb" style="width:20vw;height: 20vh;transition: .5s;">
            <a href="alluserreport.php"> <i class="fas fa-users icon-2x" style="margin-top: 20px;"></i><span class="label label-important zoom" style="padding:10px;width: 2vw;margin-right:5px;border-radius: 10px; "><?php 
                
                        $user = mysqli_fetch_array(mysqli_query($con,"SELECT COUNT(u_id) as totaluser FROM tbluser"));
                        echo $user['totaluser'];
                ?></span> Total Register Users </a> 
        </li>
        <li class="bg_lg span5" style="width:20vw;height: 20vh;transition: .5s;"> 
            <a href="allcoursewiseuserreport.php"> <i class="fas fa-book-open icon-2x" style="margin-top: 20px;"></i><span class="label label-important zoom" style="padding:10px;width: 2vw;margin-right:5px;border-radius: 10px; "><?php 
                
                        $entrolluser = mysqli_fetch_array(mysqli_query($con,"SELECT COUNT(c.Course_id) as totalentrolluser FROM tbluser as u,tblusercourse as uc,tblcourse as c WHERE u.u_id = uc.user_id AND c.course_id=uc.course_id"));
                        echo $entrolluser['totalentrolluser'];
                ?></span> Total User Course Wise</a> 
          
        </li>
        <li class="bg_ly" style="width:20vw;height: 20vh;transition: .5s;"> 
            <a href="allteacherreport.php"> <i class="fas fa-chalkboard-teacher icon-2x" style="margin-top: 20px;"></i><span class="label label-important  zoom" style="padding:10px;width: 2vw;margin-right:5px;margin-top:3px;border-radius: 10px; ">
                <?php
                $teacher = mysqli_fetch_array(mysqli_query($con,"SELECT COUNT(f_id) as totalteacher FROM tblfaculty"));
                        echo $teacher['totalteacher'];
                ?>
                </span> Total Available Teachers </a> 
        </li>
        <li class="bg_lg" style="width:20vw;height: 20vh;transition: .5s;"> 
            <a href="allcoursereport.php"> <i class="fas fa-book-reader icon-2x" style="margin-top: 20px;"></i><span class="label label-important zoom" style="padding:10px;width: 2vw;margin-right:5px;border-radius: 10px; ">
                <?php
                $course = mysqli_fetch_array(mysqli_query($con,"SELECT COUNT(course_id) as totalcourse FROM tblcourse"));
                        echo $course['totalcourse'];
                ?>
                </span> Total Courses </a> 
        </li>
        <li class="bg_ls" style="width:20vw;height: 20vh;transition: .5s;"> 
             <a href="allbookreport.php"> <i class="fas fa-book icon-2x" style="margin-top: 20px;"></i><span class="label label-important zoom" style="padding:10px;width: 2vw;margin-right:5px;margin-top:3px;border-radius: 10px; ">
                <?php
                $book = mysqli_fetch_array(mysqli_query($con,"SELECT COUNT(pdf_id) as totalbook FROM tblpdf"));
                        echo $book['totalbook'];
                ?>
                </span> Total Available Books </a> 
        </li>
        <li class="bg_lg" style="width:20vw;height: 20vh;transition: .5s;"> 
            <a href="alleventreport.php"> <i class="far fa-calendar-check icon-2x" style="margin-top: 20px;"></i><span class="label label-important zoom" style="padding:10px;width: 2vw;margin-right:5px;margin-top:3px;border-radius: 10px; ">
                <?php
                $event = mysqli_fetch_array(mysqli_query($con,"SELECT COUNT(event_id) as totalevent FROM tblevent"));
                        echo $event['totalevent'];
                ?>
                </span> Total Available Event </a> 
        </li>
        <li class="bg_lb" style="width:20vw;height: 20vh;transition: .5s;"> 
            <a href="allcategoryreport.php"> <i class="fa fa-list-alt icon-2x" style="margin-top: 20px;"></i><span class="label label-important zoom" style="padding:10px;width: 2vw;margin-right:5px;margin-top:3px;border-radius: 10px; ">
                <?php
                $category = mysqli_fetch_array(mysqli_query($con,"SELECT COUNT(*) as totalcategory FROM tblcategory"));
                        echo $category['totalcategory'];
                ?>
                </span> Total Available Category</a> 
        </li>
        <li class="bg_ly" style="width:20vw;height: 20vh;transition: .5s;"> 
            <a href="#"> <i class="fas fa-certificate icon-2x" style="margin-top: 20px;"></i><span class="label label-important  zoom" style="padding:10px;width: 2vw;margin-right:5px;margin-top:3px;border-radius: 10px; ">
                <?php
                $certificate = mysqli_fetch_array(mysqli_query($con,"SELECT COUNT(*) as totalcertificate FROM tblcertificate"));
                        echo $certificate['totalcertificate'];
                ?>
                </span> Total Passout students</a> 
        </li>
      </ul>
    </div>

    </div>
                                    
                                            
                                           
                                          
                        <!--End::Dashboard 1-->
                    </div>


                    <!-- end:: Content -->
              

                <!-- begin:: Footer -->
                <div class="kt-footer  kt-grid__item kt-grid kt-grid--desktop kt-grid--ver-desktop" id="kt_footer">
                    <div class="kt-container  kt-container--fluid ">
                        <div class="kt-footer__copyright">
                            2020&nbsp;&copy;&nbsp;<a href="http://keenthemes.com/metronic" target="_blank"
                                class="kt-link">EduNet</a>
                        </div>
                        <div class="kt-footer__menu">
                            <a href="http://localhost/edunet/admin/preview/demo1/index.php" target="_blank"
                                class="kt-footer__menu-link kt-link">About</a>
                            <a href="#" target="_blank"
                                class="kt-footer__menu-link kt-link">Team</a>
                            <a href="#" target="_blank"
                                class="kt-footer__menu-link kt-link">Contact</a>
                        </div>
                    </div>
                </div>
                <!-- end:: Footer -->
            </div>
        </div>
    </div>
  
    <div id="kt_scrolltop" class="kt-scrolltop">
        <i class="fa fa-arrow-up"></i>
    </div>
   
    <script>
        var KTAppOptions = {
            "colors": {
                "state": {
                    "brand": "#5d78ff",
                    "dark": "#282a3c",
                    "light": "#ffffff",
                    "primary": "#5867dd",
                    "success": "#34bfa3",
                    "info": "#36a3f7",
                    "warning": "#ffb822",
                    "danger": "#fd3995"
                },
                "base": {
                    "label": [
                        "#c5cbe3",
                        "#a1a8c3",
                        "#3d4465",
                        "#3e4466"
                    ],
                    "shape": [
                        "#f0f3ff",
                        "#d9dffa",
                        "#afb4d4",
                        "#646c9a"
                    ]
                }
            }
        };
    </script>
    <!-- end::Global Config -->

    <!--begin::Global Theme Bundle(used by all pages) -->
    <script src="../../themes/metronic/theme/default/demo1/dist/assets/plugins/global/plugins.bundle.js"
        type="text/javascript"></script>
    <script src="../../themes/metronic/theme/default/demo1/dist/assets/js/scripts.bundle.js"
        type="text/javascript"></script>
    <!--end::Global Theme Bundle -->

    <!--begin::Page Vendors(used by this page) -->
    <script
        src="../../themes/metronic/theme/default/demo1/dist/assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"
        type="text/javascript"></script>
    <script src="http://maps.google.com/maps/api/js?key=AIzaSyBTGnKT7dt597vo9QgeQ7BFhvSRP4eiMSM"
        type="text/javascript"></script>
    <script src="../../themes/metronic/theme/default/demo1/dist/assets/plugins/custom/gmaps/gmaps.js"
        type="text/javascript"></script>
    <!--end::Page Vendors -->

    <!--begin::Page Scripts(used by this page) -->
    <script src="../../themes/metronic/theme/default/demo1/dist/assets/js/pages/dashboard.js"
        type="text/javascript"></script>
    <!--end::Page Scripts -->
</body>

</html>