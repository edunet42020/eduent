<?php
define("ROOT_PATH", $_SERVER["DOCUMENT_ROOT"]);
define("rootpath","C:/xampp/htdocs/edunet/faculty/preview/demo1");

?>
<?php
include_once("connection.php");
session_start();
if(!isset($_SESSION['facultyid']))
{
    header("Location:../../index.php");
}
else
{
    $id=$_SESSION['facultyid'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />

    <title>EduNet-faculty || Dashboard</title>
    <meta name="description" content="Updates and statistics">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="../../themes/favicon.ico" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
<link href="../../themes/favicon.ico" sizes="128x128" rel="shortcut icon" />
    <!--begin::Fonts -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Roboto:300,400,500,600,700">
        <link rel="stylesheet" href="../../themes/metronic/theme/default/demo1/dist/assets/css/edunet-style.css" />
        <link rel="stylesheet" href="../../themes/metronic/theme/default/demo1/dist/assets/css/popup.css">
    <!--end::Fonts -->

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

    <link rel="shortcut icon"
        href="https://keenthemes.com/metronic/themes/metronic/theme/default/demo1/dist/assets/media/logos/favicon.ico" />
</head>
<style>
.zoom:hover
{
    transform: scale(1.3);
    transition: .5s;
}
</style>
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
                    src="http://localhost/edunet/themes/metronic/theme/default/demo1/dist/assets/media/logos/logo-light.png" />
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
        require_once(rootpath."/asideindex.php");
    ?>
            <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">
            <?php
        require(rootpath."/headerindex.php");
    ?>
                <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

                    <!-- begin:: Content Head -->
                    <div class="kt-subheader  kt-grid__item" id="kt_subheader">
                        <div class="kt-container  kt-container--fluid ">
                            <div class="kt-subheader__main">

                                <h3 class="kt-subheader__title">Home</h3>

                               

                                
                            </div>
                            
                        </div>
                    </div>
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
            <a href="totaluser.php"> <i class="fas fa-users icon-2x" style="margin-top: 20px;"></i><span class="label label-important zoom" style="padding:10px;width: 2vw;margin-right:5px;border-radius: 10px; "><?php 
                
                        $user = mysqli_fetch_array(mysqli_query($con,"select count(user_id) as totaluser from tblusercourse where course_id In (SELECT course_id FROM `tblcourse` WHERE `course_t_id` = $id)"));
                        echo $user['totaluser'];
                ?></span> Total Register Users </a> 
        </li>
       
        <li class="bg_ly" style="width:20vw;height: 20vh;transition: .5s;"> 
            <a href="#"> <i class="fas fa-chalkboard-teacher icon-2x" style="margin-top: 20px;"></i><span class="label label-important  zoom" style="padding:10px;width: 2vw;margin-right:5px;margin-top:3px;border-radius: 10px; ">
                <?php
                $teacher = mysqli_fetch_array(mysqli_query($con,"SELECT COUNT(v_id) as totalteacher FROM tblvideo where v_f_id=$id"));
                        echo $teacher['totalteacher'];
                ?>
                </span>Your Video </a> 
        </li>
        <li class="bg_lg" style="width:20vw;height: 20vh;transition: .5s;"> 
            <a href="#"> <i class="fas fa-book-reader icon-2x" style="margin-top: 20px;"></i><span class="label label-important zoom" style="padding:10px;width: 2vw;margin-right:5px;border-radius: 10px; ">
                <?php
                $course = mysqli_fetch_array(mysqli_query($con,"SELECT COUNT(course_id) as totalcourse FROM tblcourse where course_t_id=$id"));
                        echo $course['totalcourse'];
                ?>
                </span> Total Courses </a> 
        </li>
        <li class="bg_ls" style="width:20vw;height: 20vh;transition: .5s;"> 
             <a href="#"> <i class="fas fa-book icon-2x" style="margin-top: 20px;"></i><span class="label label-important zoom" style="padding:10px;width: 2vw;margin-right:5px;margin-top:3px;border-radius: 10px; ">
                <?php
                $book = mysqli_fetch_array(mysqli_query($con,"SELECT COUNT(q_id) as totalbook FROM tblquestionmcq where course_id in (select course_id from tblcourse where course_t_id=$id)"));
                        echo $book['totalbook'];
                ?>
                </span> Total Available Questions </a> 
        </li>
        <li class="bg_lg" style="width:20vw;height: 20vh;transition: .5s;"> 
            <a href="#"> <i class="far fa-calendar-check icon-2x" style="margin-top: 20px;"></i><span class="label label-important zoom" style="padding:10px;width: 2vw;margin-right:5px;margin-top:3px;border-radius: 10px; ">
                <?php
                $event = mysqli_fetch_array(mysqli_query($con,"SELECT COUNT(exam_id) as totalevent FROM tblexam where course_id in (select course_id from tblcourse where course_t_id=$id)"));
                        echo $event['totalevent'];
                ?>
                </span> Total Available exams</a> 
        </li>
        <li class="bg_lb" style="width:20vw;height: 20vh;transition: .5s;"> 
            <a href="totalcategory.php"> <i class="fa fa-list-alt icon-2x" style="margin-top: 20px;"></i><span class="label label-important zoom" style="padding:10px;width: 2vw;margin-right:5px;margin-top:3px;border-radius: 10px; ">
                <?php
                $category = mysqli_fetch_array(mysqli_query($con,"SELECT COUNT(*) as totalcategory FROM tblcategory"));
                        echo $category['totalcategory'];
                ?>
                </span> Total Available Category</a> 
        </li>
        <li class="bg_ly" style="width:20vw;height: 20vh;transition: .5s;"> 
            <a href="passoutstudent.php"> <i class="fas fa-certificate icon-2x" style="margin-top: 20px;"></i><span class="label label-important  zoom" style="padding:10px;width: 2vw;margin-right:5px;margin-top:3px;border-radius: 10px; ">
                <?php
                $certificate = mysqli_fetch_array(mysqli_query($con,"SELECT COUNT(*) as totalcertificate FROM tblcertificate where course_id in (select course_id from tblcourse where course_t_id=$id)"));
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
               <?php 
                    require_once("footer.php");
               ?>
                <!-- end:: Footer -->
            </div>
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
<!-- end::Body -->

<!-- Mirrored from keenthemes.com/metronic/preview/demo1/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 23 Jan 2020 10:52:58 GMT -->

</html>
<script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
 <script>
    $(document).ready(function(){
      $("#change_failed").hide();
      $("#ummatch_password").hide();
      $("#change_success").hide();
   
     $('#currentpassword').keypress(function(){
           var currpass = $('#currentpassword').val();
         
          if(currpass.length > 8 && currpass.length < 20)
          {
            $('#current_error').hide();
          }
          else
          {
            $('#current_error').html("password must between 8 to 20 character");
            $('#current_error').show(); 
            // $('#firstname').focus();

          }

        });

        $('#newpassword').keydown(function(){
          // alert("heoolonckjkc");
          var newpass = $('#newpassword').val();
          // var pass_regx = ;
          if(newpass.length > 8 && newpass.length < 20)
          {
            $('#new_error').hide();
          }
          else
          {
            $('#new_error').html("password must between 8 to 20 character");
            $('#new_error').show();  
            // $('#pass').focus();  
          }
        });
        
        $('#confirmpassword').keydown(function(){
          // alert("heoolonckjkc");
          var confpass = $('#confirmpassword').val();
          // var pass_regx = ;
          if(confpass.length > 8 && confpass.length < 20)
          {
            $('#confirm_error').hide();
          }
          else
          {
            $('#confirm_error').html("password must between 8 to 20 character");
            $('#confirm_error').show();  
            // $('#pass').focus();  
          }
        });
    });

   
  </script>
<?php
if(isset($_REQUEST['changepassword']))
{
    //echo $id;
    $select = "select  * from  tblfaculty where f_id=$id";
    // echo $select;
    $data = mysqli_query($con,$select);
    $result = mysqli_fetch_array($data);
    // print_r($result);
    $dbpassword = $result['f_pwd'];
    $dbuserid   = $result['f_id'];
    // echo $userid;
    // return;
    $dbdecodepass = base64_decode($dbpassword);
    // echo $dbpassword;
    // echo $dbdecodepass;
    if(isset($_REQUEST['changepassword']))
    {
        $formcurrentpassword = $_REQUEST['currentpassword'];
        $formnewpassword = $_REQUEST['newpassword'];
        $formconfirmpassword = $_REQUEST['confirmpassword'];
        if( empty($formcurrentpassword) || empty($formnewpassword) || empty($formconfirmpassword) )
        {
            echo "<script>
                $(document).ready(function(){
                  $('#current_error').html('Enter current password');
                  $('#new_error').html('Enter new password');
                  $('#current_error').show();
                  $('#new_error').show();
                  $('#confirm_error').html('Enter confirm password');
                  $('#confirm_error').show();
                }); 
                </script>";
        }
        else
        {
          if($dbdecodepass == $formcurrentpassword)
          { 

             if($formnewpassword == $formconfirmpassword)
             {
                $encodenewpass = base64_encode($formnewpassword);

                $update = "update tblfaculty set f_pwd='$encodenewpass' where f_id=$id";
                $data = mysqli_query($con,$update);
               // echo $update;
                // $row  = mysqli_num_rows($data);
                // return;
                // $row = mysqli_num_rows($data);

                if( $data)
                {
                  echo "<script>
                  $(document).ready(function(){
                              $('#change_success').html('password change successfully..');
                              $('#change_success').show(); 
                            });
                        </script>";
                  echo "<meta http-equiv='Refresh' content='1; URL=http://localhost/edunet/faculty/preview/demo1/index.php?userid=$id'/>";                       
                } 
                else
                {
                  echo "<script>
                          $(document).ready(function(){
                            swal('Opps!','Password Does not changed..','error');
                          });
                        </script>";
                }
             }
             else
             {
                  echo "<script>
                          $(document).ready(function(){
                            $('#ummatch_password').html('Confirm Password not match with New Password.');
                            $('#ummatch_password').show(); 
                          });
                      </script>";
             }
              
          }
          else
          {
              echo "<script>
                        $(document).ready(function(){
                           $('#ummatch_password').html('Current password Is Invalid..');
                           $('#ummatch_password').show(); 
                        });
                    </script>";
          }
        }
    }
    else
    {
        echo "unsucessful.............";
    }
}
?>