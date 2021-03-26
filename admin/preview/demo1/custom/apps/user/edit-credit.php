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
$query="SELECT * FROM `tblcreditexam` WHERE ce_id=$cid";
//echo "<script>alert(". $query .")</script>";
$result=mysqli_query($con,$query);
$row=mysqli_fetch_array($result);
$question=$row['ce_question'];
$op1=$row['ce_op1'];
$op2=$row['ce_op2'];
$op3=$row['ce_op3'];
$op4=$row['ce_op4'];
$ans=$row['ans'];
$date=$row['ce_date'];

//echo strftime('%Y-%m-%d', strtotime($row['course_start_date']));
//echo "<script>alert('$fname');</script>";

?>

<!DOCTYPE html>

<html lang="en">
<!-- begin::Head -->
<head>
    <meta charset="utf-8" />

    <title>EduNet || Edit Question</title>
    <meta name="description" content="Add user example">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--begin::Fonts -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Roboto:300,400,500,600,700">
    <!--end::Fonts -->

    <link href="../../../../../themes/metronic/theme/default/demo1/dist/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ajaxy/1.6.1/scripts/jquery.ajaxy.min.js" integrity="sha256-jfr3oM7h2TWPi2Q0O0vPuRh+pc0eSfWfpZ2nHXt8tFQ=" crossorigin="anonymous"></script>

<link href="../../../../../themes/favicon.ico" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
<link href="../../../../../themes/favicon.ico" sizes="128x128" rel="shortcut icon" />

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
                                    Edit question
                                </h3>

                                <span class="kt-subheader__separator kt-subheader__separator--v"></span>

                                <div class="kt-subheader__group" id="kt_subheader_search">
                                    <span class="kt-subheader__desc" id="kt_subheader_total">
                                        change question details and submit </span>

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
                                                    Credit exam question
                                                </div>
                                                <div class="kt-wizard-v4__nav-label-desc">
                                                    Question Information
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
                                                    <div class="kt-heading kt-heading--md">Questions Details:</div>
                                                    <div class="kt-section kt-section--first">
                                                        <div class="kt-wizard-v4__form">
                                                            <div class="row">
                                                                <div class="col-xl-12">
                                                                    <div class="kt-section__body">
                                                              
                                                                        <div class="form-group row">
                                                                            <label
                                                                                class="col-xl-3 col-lg-3 col-form-label">Question</label>
                                                                            <div class="col-lg-9 col-xl-9">
                                                                                <input class="form-control" type="text" id="question" name="question"
                                                                                placeholder="Enter Question" value="<?php echo $row['ce_question']; ?>">
                                                                                <span id="question_error" class="kt-font-danger"></span>
                                                                            </div>
                                                                        </div>
                                                                         <div class="form-group row">
                                                                            <label
                                                                                class="col-xl-3 col-lg-3 col-form-label">option 1</label>
                                                                            <div class="col-lg-9 col-xl-9">
                                                                                <input class="form-control" type="text" id="op1" name="op1"
                                                                                placeholder="Enter Option 1" value="<?php echo $row['ce_op1']; ?>">
                                                                                <span id="op1_error" class="kt-font-danger"></span>
                                                                            </div>
                                                                        </div>
                                                                         <div class="form-group row">
                                                                            <label
                                                                                class="col-xl-3 col-lg-3 col-form-label">option 2</label>
                                                                            <div class="col-lg-9 col-xl-9">
                                                                                <input class="form-control" type="text" id="op2" name="op2"
                                                                                placeholder="Enter option2" value="<?php echo $row['ce_op2']; ?>">
                                                                                <span id="op2_error" class="kt-font-danger"></span>
                                                                            </div>
                                                                        </div>
                                                                         <div class="form-group row">
                                                                            <label
                                                                                class="col-xl-3 col-lg-3 col-form-label">option 3</label>
                                                                            <div class="col-lg-9 col-xl-9">
                                                                                <input class="form-control" type="text" id="op3" name="op3"
                                                                                placeholder="Enter Option 3" value="<?php echo $row['ce_op3']; ?>">
                                                                                <span id="op3_error" class="kt-font-danger"></span>
                                                                            </div>
                                                                        </div>
                                                                         <div class="form-group row">
                                                                            <label
                                                                                class="col-xl-3 col-lg-3 col-form-label">option 4</label>
                                                                            <div class="col-lg-9 col-xl-9">
                                                                                <input class="form-control" type="text" id="op4" name="op4"
                                                                                placeholder="Enter Option 4" value="<?php echo $row['ce_op4']; ?>">
                                                                                <span id="op4_error" class="kt-font-danger"></span>
                                                                            </div>
                                                                        </div>
                                                                         <div class="form-group row">
                                                                            <label
                                                                                class="col-xl-3 col-lg-3 col-form-label">Answer</label>
                                                                            <div class="col-lg-9 col-xl-9">
                                                                                <input class="form-control" type="text" id="ans" name="ans"
                                                                                placeholder="Enter Answer" value="<?php echo $row['ans']; ?>">
                                                                                <span id="ans_error" class="kt-font-danger"></span>
                                                                            </div>
                                                                        </div>
                                                          
                                                                        <div class="form-group row">
                                                                            <label
                                                                                class="col-xl-3 col-lg-3 col-form-label">Exam Date</label>
                                                                            <div class="col-lg-9 col-xl-9">
                                                                                <div class="input-group">
                                                                                    <div class="input-group-prepend">
                                                                                        <span
                                                                                            class="input-group-text"><i
                                                                                                class="la la-calendar"></i></span>
                                                                                    </div>
                                                                                    <input type="date"
                                                                                        class="form-control"
                                                                                        id="examdate"
                                                                                        value="<?php echo $date; ?>"
                                                                                        name="examdate"
                                                                                        aria-describedby="basic-addon1">
                                                                                        
                                                                                </div>
                                                                                
                                                                                    <span id="coursestartdate_error" class="kt-font-danger"></span>
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

           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>


  <script>
      
   


        $('#question').keypress(function(){
           fname = $('#question').val();
          var fname_regx = /^[a-zA-Z]{1,200}$/;
          if(fname.match(fname_regx))
          {
            $('#question_error').hide();
          }
          else
          {
            $('#question_error').html("Enter Valid question");
            $('#question_error').show();  
            // $('#firstname').focus();

          }

        });
        $('#op1').keypress(function(){
           op1 = $('#op1').val();
          var op1_regx = /^[a-zA-Z0-9]{1,50}$/;
          if(op1.match(op1_regx))
          {
            $('#op1_error').hide();
          }
          else
          {
            $('#op1_error').html("Enter Valid option 1");
            $('#op1_error').show();  
            // $('#firstname').focus();

          }

        });
        $('#op2').keypress(function(){
           op2 = $('#op2').val();
          var op21_regx = /^[a-zA-Z0-9]{1,50}$/;
          if(op2.match(op2_regx))
          {
            $('#op2_error').hide();
          }
          else
          {
            $('#op2_error').html("Enter Valid option 2");
            $('#op2_error').show();  
            // $('#firstname').focus();

          }

        });
        $('#op3').keypress(function(){
           op3 = $('#op3').val();
          var op3_regx = /^[a-zA-Z0-9]{1,50}$/;
          if(op3.match(op3_regx))
          {
            $('#op3_error').hide();
          }
          else
          {
            $('#op3_error').html("Enter Valid option 3");
            $('#op3_error').show();  
            // $('#firstname').focus();

          }

        });
$('#op4').keypress(function(){
           op4 = $('#op4').val();
          var op4_regx = /^[a-zA-Z0-9]{1,50}$/;
          if(op4.match(op4_regx))
          {
            $('#op4_error').hide();
          }
          else
          {
            $('#op4_error').html("Enter Valid option 4");
            $('#op4_error').show();  
            // $('#firstname').focus();

          }

        });
$('#ans').keypress(function(){
           ans = $('#ans').val();
          var ans_regx = /^[0-9]{1,2}$/;
          if(ans.match(ans_regx))
          {
            $('#ans_error').hide();
          }
          else
          {
            $('#ans_error').html("Enter Valid answer ,answer must be in format 1,2,3,4");
            $('#ans_error').show();  
            // $('#firstname').focus();

          }

        });
       
</script>
<?php
        if(isset($_POST['btninsert']))
        {
            $insert="";
        $question    = $_REQUEST['question'];
        $op1    = $_REQUEST['op1'];
        $op2   = $_REQUEST['op2'];
        $op3    = $_REQUEST['op3'];
        $op4    = $_REQUEST['op4'];
        $ans    = $_REQUEST['ans'];
        $coursestartdate     =$_REQUEST['examdate'];
            if(empty($question) ||empty($op1) || empty($op2) || empty($op3) || empty($op4) || empty($ans)|| empty($coursestartdate))
            {
                echo "<script>   
                        $(document).ready(function(){
                            $('#coursestartdate_error').html('All Data Must be Filled'); 
                        });
                        </script>";   
                     
            }
            else
            {
                
                    $insert = "UPDATE `tblcreditexam` set ce_question='$question',ce_op1='$op1',ce_op2='$op2',ce_op3='$op3',ce_op4='$op4',ans=$ans,ce_date='$date' where ce_id=$cid";
                            if(mysqli_query($con,$insert) or die(mysqli_error($con)))
                            {
                                echo "
                                <script>
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Sucess',
                                    text: 'Record Updated Successfully.',
                                }).then(function() {
                                    window.location ='http://localhost/edunet/admin/preview/demo1/crud/metronic-datatable/advanced/allcreditquestion.php';
                                });
                                </script>
        
                                ";
                            }
                        
                        else
                        {
                            
                            if(mysqli_query($con,$insert) or die(mysqli_error($con)))
                            {
                                echo "
                                <script>
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Sucess',
                                    text: 'Record Updated Successfully.',
                                }).then(function() {
                                    window.location ='http://localhost/edunet/admin/preview/demo1/crud/metronic-datatable/advanced/allcreditquestion.php';
                                });
                                </script>
        
                                ";
                            }
                            
                        }
                    
               
                }
            }
        
    ?>  