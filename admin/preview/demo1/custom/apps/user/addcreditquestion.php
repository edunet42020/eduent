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
define("imageroot","C:/xampp/htdocs/edunet/themes/metronic/theme/default/demo1/dist/assets/media/users/");

?>

<!DOCTYPE html>

<html lang="en">
<!-- begin::Head -->
<head>
    <meta charset="utf-8" />

    <title>EduNEt || Add credit question</title>
    <meta name="description" content="Add user example">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="../../../../../themes/favicon.ico" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
<link href="../../../../../themes/favicon.ico" sizes="128x128" rel="shortcut icon" />
    <!--begin::Fonts -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Roboto:300,400,500,600,700">
    <!--end::Fonts -->

    <link href="../../../../../themes/metronic/theme/default/demo1/dist/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ajaxy/1.6.1/scripts/jquery.ajaxy.min.js" integrity="sha256-jfr3oM7h2TWPi2Q0O0vPuRh+pc0eSfWfpZ2nHXt8tFQ=" crossorigin="anonymous"></script>



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
        require(rootpath."/asideindex.php");
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
                                    New credit exam question
                                </h3>

                                <span class="kt-subheader__separator kt-subheader__separator--v"></span>

                                <div class="kt-subheader__group" id="kt_subheader_search">
                                    <span class="kt-subheader__desc" id="kt_subheader_total">
                                        Enter credit exam question details and submit </span>

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
                                                    credit exam question
                                                </div>
                                                <div class="kt-wizard-v4__nav-label-desc">
                                                    credit exam question Information
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
                                                <!--begin: Form Wizard Step 1   http://localhost/edunet/preview/demo1/custom/apps/user/addcredit exam question.php -->
                                                <div class="kt-wizard-v4__content" data-ktwizard-type="step-content"
                                                    data-ktwizard-state="current">
                                                    <div class="kt-heading kt-heading--md">credit exam question Details:</div>
                                                    <div class="kt-section kt-section--first">
                                                        <div class="kt-wizard-v4__form">
                                                            <div class="row">
                                                                <div class="col-xl-12">
                                                                    <div class="kt-section__body">
                                                                        
                                                                        <div class="form-group row">
                                                                            <label
                                                                                class="col-xl-3 col-lg-3 col-form-label">credit exam question</label>
                                                                            <div class="col-lg-9 col-xl-9">
                                                                                <input class="form-control" type="text" id="ename" name="ename"
                                                                                placeholder="Enter credit exam question.">
                                                                                <span id="ename_error" class="kt-font-danger"></span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label
                                                                                class="col-xl-3 col-lg-3 col-form-label">option 1</label>
                                                                            <div class="col-lg-9 col-xl-9">
                                                                                <input class="form-control" type="text" id="eplace" name="op1"
                                                                                placeholder="Enter option 1">
                                                                                <span id="eplace_error" class="kt-font-danger"></span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label
                                                                                class="col-xl-3 col-lg-3 col-form-label">option 2</label>
                                                                            <div class="col-lg-9 col-xl-9">
                                                                                <input class="form-control" type="text" id="eplace2" name="op2"
                                                                                placeholder="Enter option 2">
                                                                                <span id="eplace_error2" class="kt-font-danger"></span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label
                                                                                class="col-xl-3 col-lg-3 col-form-label">option 3</label>
                                                                            <div class="col-lg-9 col-xl-9">
                                                                                <input class="form-control" type="text" id="eplace3" name="op3"
                                                                                placeholder="Enter option 3">
                                                                                <span id="eplace_error3" class="kt-font-danger"></span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label
                                                                                class="col-xl-3 col-lg-3 col-form-label">option 4</label>
                                                                            <div class="col-lg-9 col-xl-9">
                                                                                <input class="form-control" type="text" id="eplace4" name="op4"
                                                                                placeholder="Enter option 4">
                                                                                <span id="eplace_error4" class="kt-font-danger"></span>
                                                                            </div>
                                                                        </div>
                                                                                  
                                                                            
                                                                        </div>
                                                                       <div class="form-group row">
                                                                            <label
                                                                                class="col-xl-3 col-lg-3 col-form-label">answer</label>
                                                                            <div class="col-lg-9 col-xl-9">
                                                                                 <select id="opans" name="opans" class="btn btn-outline-primary">
                                                                                
                                                                              
                                                                                
                                                                                        <option value="1">option A</option> 
                                                                                         <option value="2">option B</option> 
                                                                                          <option value="3">option C</option> 
                                                                                           <option value="4">option D</option> 
                                                                                       
                                                                                
                                                                                </select>
                                                                                <span id="eplace_error" class="kt-font-danger"></span>
                                                                            </div>
                                                                        </div>
                                                                        

                                                                       
                                                                        <div class="form-group row">
                                                                            <label
                                                                                class="col-xl-3 col-lg-3 col-form-label">credit exam Date</label>
                                                                            <div class="col-lg-9 col-xl-9">
                                                                                <div class="input-group">
                                                                                    <div class="input-group-prepend">
                                                                                        <span
                                                                                            class="input-group-text"><i
                                                                                                class="la la-calendar-times-o "></i></span>
                                                                                    </div>
                                                                                    <input type="date"
                                                                                        class="form-control"
                                                                                        id="edate"
                                                                                        name="edate"
                                                                                        aria-describedby="basic-addon1">
                                                                                        
                                                                                </div>
                                                                                
                                                                                    <span id="edate_error" class="kt-font-danger"></span>
                                                                            </div>
                                                                        </div>
                                                                       
                                                                       <span id="efees_error" class="kt-font-danger"></span>
                                                                        
                                                                        
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

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  

           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>


  <script>
    $(document).ready(function(){
        // alert("hello");

        $('#ename').keypress(function(){
           fname = $('#ename').val();
          var fname_regx = /^[a-z', A-Z]{1,200}$/;
          if(fname.match(fname_regx))
          {
            $('#ename_error').hide();
          }
          else
          {
            $('#ename_error').html("*Enter Valid credit exam questions");
            $('#ename_error').show();  
            // $('#firstname').focus();

          }

        });

        $('#eplace').keypress(function(){
           mname = $('#eplace').val();
          var mname_regx = /^[a-z-_ A-Z0,9]{1,50}$/;
          if(mname.match(mname_regx))
          {
            $('#eplace_error').hide();
          }
          else
          {
            $('#eplace_error').html("Enter Valid option 1");
            $('#eplace_error').show();
            // $('#middlename').focus();

          }

        });
  $('#eplace2').keypress(function(){
           mname = $('#eplace2').val();
          var mname_regx = /^[a-z-_ A-Z0,9]{1,50}$/;
          if(mname.match(mname_regx))
          {
            $('#eplace_error2').hide();
          }
          else
          {
            $('#eplace_error2').html("Enter Valid option 2");
            $('#eplacee_error2').show();
            // $('#middlename').focus();

          }

        });
    $('#eplace3').keypress(function(){
           mname = $('#eplace3').val();
          var mname_regx = /^[a-z-_ A-Z0,9]{1,50}$/;
          if(mname.match(mname_regx))
          {
            $('#eplace_error3').hide();
          }
          else
          {
            $('#eplace_error3').html("Enter Valid option 3");
            $('#eplacee_error3').show();
            // $('#middlename').focus();

          }

        });
      $('#eplace4').keypress(function(){
           mname = $('#eplace4').val();
          var mname_regx = /^[a-z-_ A-Z0,9]{1,50}$/;
          if(mname.match(mname_regx))
          {
            $('#eplace_error4').hide();
          }
          else
          {
            $('#eplace_error4').html("Enter Valid option 4");
            $('#eplacee_error4').show();
            // $('#middlename').focus();

          }

        });
   

      
        
        
    });
</script>
<?php
        if(isset($_POST['btninsert']))
        {
            $insert="";
        $ename    = $_REQUEST['ename'];
        $o1 = $_REQUEST['op1'];
        $o2 = $_REQUEST['op2'];
        $o3 = $_REQUEST['op3'];
        $o4 = $_REQUEST['op4'];
        $ans = (int)$_REQUEST['opans'];
        
        $edate = $_REQUEST['edate'];
           
            if( empty($ename) ||empty($o1) || empty($o2) || empty($o3) || empty($o4) || empty($ans)|| empty($edate) )
            {
                echo "<script>   
                        $(document).ready(function(){
                            $('#efees_error').html('All Data Must be Filled'); 
                        });
                        </script>";   
                       
                        
            }
            else
            {
                    
             
                $insert = "INSERT INTO `tblcreditexam` VALUES(NULL,'$ename','$o1','$o2','$o3','$o4',$ans,'$edate')";
            
                
                $insert_row=mysqli_query($con,$insert) or die($mysqli -> error);
                echo "<script>alert('Record Inserted');</script>";
                
            }
        } 
    ?>  