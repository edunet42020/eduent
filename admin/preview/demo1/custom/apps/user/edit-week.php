<?php
session_start();
if(!isset($_SESSION['AdminUsername']))
{
    header("Location:../../../../../adminlogin.php");
}
else
{
    $id=$_SESSION['AdminUsername'];
}
?>
<?php

require("C:/xampp/htdocs/edunet/admin/preview/demo1/connection.php");
define("ROOT_PATH", $_SERVER["DOCUMENT_ROOT"]);
define("rootpath","C:/xampp/htdocs/edunet/admin/preview/demo1");
define("imageroot","http://localhost/edunet/admin/themes/metronic/theme/default/demo1/dist/assets/media/");
$cid=$_REQUEST['id'];
$query="SELECT * FROM `tblweek` WHERE week_id=$cid";
//echo "<script>alert(". $query .")</script>";
$result=mysqli_query($con,$query);
$row=mysqli_fetch_array($result);
$courseid=$row['course_id'];
$data=mysqli_query($con,"SELECT * FROM `tblcourse` WHERE course_id=$courseid");
$rowdata=mysqli_fetch_array($data);
$coursename=$rowdata['course_name'];
$startdate=$row['start_date'];
$enddate=$row['end_date'];

//echo strftime('%Y-%m-%d', strtotime($row['course_start_date']));
//echo "<script>alert('$fname');</script>";

?>

<!DOCTYPE html>

<html lang="en">
<!-- begin::Head -->
<head>
    <meta charset="utf-8" />

    <title>EduNet || Edit Week</title>
    <meta name="description" content="Add user example">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--begin::Fonts -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Roboto:300,400,500,600,700">
    <!--end::Fonts -->
<link href="../../../../../themes/favicon.ico" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
<link href="../../../../../themes/favicon.ico" sizes="128x128" rel="shortcut icon" />
    <link href="../../../../../themes/metronic/theme/default/demo1/dist/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ajaxy/1.6.1/scripts/jquery.ajaxy.min.js" integrity="sha256-jfr3oM7h2TWPi2Q0O0vPuRh+pc0eSfWfpZ2nHXt8tFQ=" crossorigin="anonymous"></script>

    <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="Stylesheet" type="text/css" />

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>


    <!--begin::Page Custom Styles(used by this page) -->
    <link href="../../../../../themes/metronic/theme/default/demo1/dist/assets/css/pages/wizard/wizard-4.css"
        rel="stylesheet" type="text/css" />
    <!--end::Page Custom Styles -->

    <!--begin::Global Theme Styles(used by all pages) -->
    <link href="../../../../../themes/metronic/theme/default/demo1/dist/assets/plugins/global/plugins.bundle.css"
        rel="stylesheet" type="text/css" />
    <link href="../../../../../themes/metronic/theme/default/demo1/dist/assets/css/style.bundle.css" rel="stylesheet"
        type="text/css" />
    <!--end::Global Theme Styles -->

    <!--begin::Layout Skins(used by all pages) -->

    <link href="../../../../../themes/metronic/theme/default/demo1/dist/assets/css/skins/header/base/light.css"
        rel="stylesheet" type="text/css" />
    <link href="../../../../../themes/metronic/theme/default/demo1/dist/assets/css/skins/header/menu/light.css"
        rel="stylesheet" type="text/css" />
    <link href="../../../../../themes/metronic/theme/default/demo1/dist/assets/css/skins/brand/dark.css"
        rel="stylesheet" type="text/css" />
    <link href="../../../../../themes/metronic/theme/default/demo1/dist/assets/css/skins/aside/dark.css"
        rel="stylesheet" type="text/css" />
    <!--end::Layout Skins -->

    <link rel="shortcut icon"
        href="https://keenthemes.com/metronic/themes/metronic/theme/default/demo1/dist/assets/media/logos/favicon.ico" />

    <!-- Hotjar Tracking Code for keenthemes.com -->
</head>
<!-- end::Head -->

<!-- begin::Body -->

<body
    class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--fixed kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading">

    <!-- begin:: Page -->

    <!-- begin:: Header Mobile -->
    <div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed ">
        <div class="kt-header-mobile__logo">
            <a href="../../../index.php">
                <img alt="Logo"
                    src="../../../../../themes/metronic/theme/default/demo1/dist/assets/media/logos/logo-light.png" />
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
    <?php
       require_once(rootpath."/asideindex.php");
    ?>
            <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">
                
                <?php
                    require(rootpath."/headerindex.php");
                ?>
                <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
                    <!-- begin:: Content Head -->
                    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
                        <div class="kt-container  kt-container--fluid ">
                            <div class="kt-subheader__main">

                                <h3 class="kt-subheader__title">
                                    Edit Week
                                </h3>

                                <span class="kt-subheader__separator kt-subheader__separator--v"></span>

                                <div class="kt-subheader__group" id="kt_subheader_search">
                                    <span class="kt-subheader__desc" id="kt_subheader_total">
                                        Change Week details and submit </span>

                                </div>

                            </div>
                            <div class="kt-subheader__toolbar">

                                <div class="btn-group">
                                    <button type="button" class="btn btn-brand btn-bold">

                                        Back </button>
                                
                                    
                                </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- end:: Content Head -->
                    <!-- begin:: Content -->
                    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
                        <div class="kt-wizard-v4" id="kt_user_add_user" data-ktwizard-state="step-first">
                            <!--begin: Form Wizard Nav -->
                            <div class="kt-wizard-v4__nav">
                                <div class="kt-wizard-v4__nav-items nav">
                                    <!--doc: Replace A tag with SPAN tag to disable the step link click -->
                                    <div class="kt-wizard-v4__nav-item nav-item" data-ktwizard-type="step"
                                        data-ktwizard-state="current">
                                        <div class="kt-wizard-v4__nav-body">
                                            <div class="kt-wizard-v4__nav-number">
                                                1
                                            </div>
                                            <div class="kt-wizard-v4__nav-label">
                                                <div class="kt-wizard-v4__nav-label-title">
                                                    Week
                                                </div>
                                                <div class="kt-wizard-v4__nav-label-desc">
                                                    Week Information
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end: Form Wizard Nav -->

                            <div class="kt-portlet">
                                <div class="kt-portlet__body kt-portlet__body--fit">
                                    <div class="kt-grid">
                                        <div class="kt-grid__item kt-grid__item--fluid kt-wizard-v4__wrapper">
                                            <!--begin: Form Wizard Form-->
                                            <form class="kt-form" id="kt_user_add_form" enctype="multipart/form-data" action="" method="post">
                                                <!--begin: Form Wizard Step 1-->
                                                <div class="kt-wizard-v4__content" data-ktwizard-type="step-content"
                                                    data-ktwizard-state="current">
                                                    <div class="kt-heading kt-heading--md">Week Details:</div>
                                                    <div class="kt-section kt-section--first">
                                                        <div class="kt-wizard-v4__form">
                                                            <div class="row">
                                                                <div class="col-xl-12">
                                                                    <div class="kt-section__body">
                                                                     
                                                                        <div class="form-group row">
                                                                            <label
                                                                                class="col-xl-3 col-lg-3 col-form-label">Week title</label>
                                                                            <div class="col-lg-9 col-xl-9">
                                                                                <input class="form-control" type="text" id="wname" name="wname"
                                                                                placeholder="Enter Week Title." value="<?php echo $row['week_title']; ?>">
                                                                                <span id="wname_error" class="kt-font-danger"></span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label
                                                                                class="col-xl-3 col-lg-3 col-form-label">chapter Name</label>
                                                                            <div class="col-lg-9 col-xl-9">
                                                                                <input class="form-control" type="text" id="cname" name="cname"
                                                                                placeholder="Enter Chapter Name." value="<?php echo $row['chap_name']; ?>">
                                                                                <span id="cname_error" class="kt-font-danger"></span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label
                                                                                class="col-xl-3 col-lg-3 col-form-label">Course Name</label>
                                                                                &nbsp;&nbsp;&nbsp;
                                                                                <input type="text" readonly id="coname" name="coname" value="<?php echo $coursename;  ?>" class="btn btn-outline-primary">
                                                                                
                                                                        </div>
                                                                        
                                                                        <div class="form-group row">
                                                                            <label
                                                                                class="col-xl-3 col-lg-3 col-form-label">Start Date</label>
                                                                            <div class="col-lg-9 col-xl-9">
                                                                                <div class="input-group">
                                                                                    <div class="input-group-prepend">
                                                                                        <span
                                                                                            class="input-group-text"><i
                                                                                                class="la la-calendar"></i></span>
                                                                                    </div>
                                                                                    <input type="date"
                                                                                        class="form-control"
                                                                                        id="startdate"
                                                                                        value="<?php echo $startdate; ?>"
                                                                                        name="startdate"
                                                                                        aria-describedby="basic-addon1">
                                                                                        
                                                                                </div>
                                                                                
                                                                                    <span id="startdate_error" class="kt-font-danger"></span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label
                                                                                class="col-xl-3 col-lg-3 col-form-label">Course End Date</label>
                                                                            <div class="col-lg-9 col-xl-9">
                                                                                <div class="input-group">
                                                                                    <div class="input-group-prepend">
                                                                                        <span
                                                                                            class="input-group-text" ><i
                                                                                                class="la la-calendar-plus-o "></i></span>
                                                                                    </div>
                                                                                    <input 
                                                                                        type="date"
                                                                                        class="form-control"
                                                                                        value="<?php echo $enddate; ?>"
                                                                                        id="enddate"
                                                                                        name="enddate"
                                                                                        aria-describedby="basic-addon1">
                                                                                    
                                                                                        
                                                                                </div>
                                                                                
                                                                                    <span id="enddate_error" class="kt-font-danger"></span>
                                                                            </div>
                                                                        </div> 
                                                                       
                                                                        
                                                                        
                                                                        <div class="form-group row">
                                                                            <div class="col-md-3 kt-form__actions">
                                                                            
                                                                                <button class="btn btn-success btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u" type="submit" id="btninsert" name="btninsert" >
                                                                                    Submit
                                                                                        </button>&nbsp;
                                                                                <button type="reset" class="btn btn-danger btn-wide" id="btnreset" name="btnreset" >Reset</button>
                                                                            </div>
                                                                        </div>
                                                            
                                                                        <!--<div class="form-group form-group-last row">
                                                                            <label
                                                                                class="col-xl-3 col-lg-3 col-form-label">Company
                                                                                Site</label>
                                                                            <div class="col-lg-9 col-xl-9">
                                                                                <div class="input-group">
                                                                                    <input type="text"
                                                                                        class="form-control"
                                                                                        placeholder="Username"
                                                                                        value="loop">
                                                                                    <div class="input-group-append">
                                                                                        <span
                                                                                            class="input-group-text">.com</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>--> 
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end: Form Wizard Step 1-->

                                                <!--begin: Form Actions -->
                                               
                                                <!--end: Form Actions -->
                                            </form>
                                            <!--end: Form Wizard Form-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end:: Content -->
                </div>

                <!-- begin:: Footer -->
                <div class="kt-footer  kt-grid__item kt-grid kt-grid--desktop kt-grid--ver-desktop" id="kt_footer">
                    <div class="kt-container  kt-container--fluid ">
                        <div class="kt-footer__copyright">
                            2020&nbsp;&copy;&nbsp;<a href="http://edunet/preview/demo1" target="_blank"
                                class="kt-link">Edunet</a>
                        </div>
                        <div class="kt-footer__menu">
                            <a href="http://keenthemes.com/metronic" target="_blank"
                                class="kt-footer__menu-link kt-link">About</a>
                            <a href="http://keenthemes.com/metronic" target="_blank"
                                class="kt-footer__menu-link kt-link">Team</a>
                            <a href="http://keenthemes.com/metronic" target="_blank"
                                class="kt-footer__menu-link kt-link">Contact</a>
                        </div>
                    </div>
                </div>
                <!-- end:: Footer -->
            </div>
        </div>
    </div>
    <!-- end:: Page -->

    <!-- begin::Scrolltop -->
    <div id="kt_scrolltop" class="kt-scrolltop">
        <i class="fa fa-arrow-up"></i>
    </div>
    <!-- end::Scrolltop -->

    <!-- begin::Global Config(global config for global JS sciprts) -->
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
    <script src="../../../../../themes/metronic/theme/default/demo1/dist/assets/plugins/global/plugins.bundle.js"
        type="text/javascript"></script>
    <script src="../../../../../themes/metronic/theme/default/demo1/dist/assets/js/scripts.bundle.js"
        type="text/javascript"></script>
    <!--end::Global Theme Bundle -->


    <!--begin::Page Scripts(used by this page) -->
    <script src="../../../../../themes/metronic/theme/default/demo1/dist/assets/js/pages/custom/user/add-user.js"
        type="text/javascript"></script>
    <!--end::Page Scripts -->
</body>
<!-- end::Body -->

<!-- Mirrored from keenthemes.com/metronic/preview/demo1/custom/apps/user/add-user.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 23 Jan 2020 10:53:52 GMT -->

</html>
<script src="../../../../../themes/metronic/theme/default/demo1/dist/assets/sweetalert.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js" type="text/javascript"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>


  <script>
    $(document).ready(function(){
        var date = $("#startdate").datepicker('getDate'); 
        date.setDate(date.getDate() + 6);
        $("#enddate").val($.datepicker.formatDate('dd/mm/yy', date));
        // alert("hello");
        $('form').submit(function () {

            // Get the Login Name value and trim it
            var name = $.trim($('#wname').val());
            var cname=$.trim($('#cname').val());
            var startdate = $.trim($('#startdate').val());
            var enddate = $.trim($('#enddate').val());
            //var price = $.trim($('#courseprice').val());
            // Check if empty of not
            if (name  === '') {
                
                $('#wname_error').html("*");
                $('#wname_error').show();
                return false;
            }
            else{
                $('#wname_error').hide();
                if (cname  === '') {
                    $('#cname_error').html("*");
                    $('#cname_error').show();
                return false;
                }
                else{
                    $('#cname_error').hide();
                        if (startdate  === '') {
                            $('#startdate_error').html("*");
                            $('#startdate_error').show();
                            return false;
                        }
                        else{
                            $('#startdate_error').hide();
                            
                        }
                    }
                }
    });


        $('#wname').keypress(function(){
           fname = $('#wname').val();
          var fname_regx = /^[a-zA-Z]{3,20}$/;
          if(fname.match(fname_regx))
          {
            $('#wname_error').hide();
          }
          else
          {
            $('#wname_error').html("*Enter Valid Course Name");
            $('#wname_error').show();  
            // $('#firstname').focus();

          }

        });

        $('#cname').keypress(function(){
           mname = $('#cname').val();
          var mname_regx = /^[a-zA-Z]{5,20}$/;
          if(mname.match(mname_regx))
          {
            $('#cname_error').hide();
          }
          else
          {
            $('#cname_error').html("Enter proper Chapter Name");
            $('#cname_error').show();
            // $('#middlename').focus();

          }

        });

        $('#courseprice').keypress(function(){
          mobile = $('#courseprice').val();
          var mobile_regx = /^[0-9]{1,5}$/;
          if(mobile.match(mobile_regx))
          {
            $('#courseprice_error').hide();
          }
          else
          {
            $('#courseprice_error').html("Character Not allowed");
            $('#courseprice_error').show();  
            // $('#mobile').focus();

          }

        });
        
        
    });
</script>
<?php
        if(isset($_POST['btninsert']))
        {
            $insert="";
        $wname    = $_REQUEST['wname'];
        $cname    =  $_REQUEST['cname'];
       // $cfulldescription    =  $_REQUEST['cfulldescription'];
        //$cfaculty   = (int)$_REQUEST['cfaculty'];
        
        //$photos    = $_FILES['photo'];
        $startdate     =$_REQUEST['startdate'];
        $enddate    =  $_REQUEST['enddate'];
       // $course     =  $_REQUEST['course'];       
        //$originalphoto=$photo;

        //$active = isset($_POST['Active']) && $_POST['Active']  ? "1" : "0";
        //echo "<script>alert('$fname');</script>";
        // echo "<script>alert('$image_tmp_name');</script>";
        //echo "<script>alert('$upload_folder_name');</script>";
        //echo "<script>alert('$user_img_type');</script>";
            if(empty($wname) ||empty($cname) || empty($startdate)|| empty($enddate))
            {
                echo "<script>   
                        $(document).ready(function(){
                            $('#courseprice_error').html('All Data Must be Filled'); 
                        });
                        </script>";   
                       // $insert = "INSERT INTO `tblcourse` VALUES(NULL,'$wname','$cname','$cfulldescription','$store','$cstatus','$startdate','$enddate','$courseprice','$cfaculty','1')";
                        //echo "<script>alert('$insert');</script>";        
            }
            else
            {
                            $weekid=$row['week_id'];
                            $insert = "UPDATE `tblweek` SET week_title='$wname',chap_name='$cname',start_date ='$startdate',end_date='$enddate' WHERE week_id=$weekid";
                            if(mysqli_query($con,$insert) or die(mysqli_error($con)))
                            {
                                echo "
                                <script>
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Sucess',
                                    text: 'Record Updated Successfully.',
                                }).then(function() {
                                    window.location ='http://localhost/edunet/admin/preview/demo1/crud/metronic-datatable/advanced/allweek.php';
                                });
                                </script>
        
                                ";
                            }

                    // echo "<script>alert('$cstatus');</script>";
                   
                    //move_uploaded_file($_FILES['photo']['tmp_name'], rootpath."/videoimage/  ".$_FILES['photo']['name']); 
                   // $insert = "UPDATE `tblcourse` set week_title='$wname',course_photo_path='$store', course_description='$cname', course_full_description='$cfulldescription',course_photo_path='$store', course_status='$coursestatus',course_start_date='$startdate',course_end_date='$enddate',course_prize='$courseprice' where course_id=$cid";
                    //echo $insert;
                    //echo "<script>alert('$insert');</script>";
                    
                    //echo $insert_row;  
                }
            }
        
    ?>  