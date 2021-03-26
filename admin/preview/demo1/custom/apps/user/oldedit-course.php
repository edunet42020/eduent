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

require("C:/xampp/htdocs/edunet/preview/demo1/connection.php");
define("ROOT_PATH", $_SERVER["DOCUMENT_ROOT"]);
define("rootpath","C:/xampp/htdocs/edunet/preview/demo1");
define("imageroot","http://localhost/edunet/themes/metronic/theme/default/demo1/dist/assets/media/");
$cid=$_REQUEST['id'];
$query="SELECT * FROM `tblcourse` WHERE course_id=$cid";
//echo "<script>alert(". $query .")</script>";
$result=mysqli_query($con,$query);
$row=mysqli_fetch_array($result);
$photo=$row['course_photo_path'];
$fid=$row['course_t_id'];
$fq="SELECT * FROM `tblfaculty` WHERE f_id=$fid";
$res=mysqli_query($con,$fq);
$ro=mysqli_fetch_assoc($res);
$pri=$row['course_prize'];
$fname=$ro['f_name'];
$st=$row['course_status'];
$startdate=$row['course_start_date'];
$enddate=$row['course_end_date'];

//echo strftime('%Y-%m-%d', strtotime($row['course_start_date']));
//echo "<script>alert('$fname');</script>";

?>

<!DOCTYPE html>

<html lang="en">
<!-- begin::Head -->
<head>
    <meta charset="utf-8" />

    <title>Edunet | Edit Course</title>
    <meta name="description" content="Add user example">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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
                                    New Course
                                </h3>

                                <span class="kt-subheader__separator kt-subheader__separator--v"></span>

                                <div class="kt-subheader__group" id="kt_subheader_search">
                                    <span class="kt-subheader__desc" id="kt_subheader_total">
                                        Enter Course details and submit </span>

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
                                                    Course
                                                </div>
                                                <div class="kt-wizard-v4__nav-label-desc">
                                                    Course Information
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
                                                    <div class="kt-heading kt-heading--md">Course Details:</div>
                                                    <div class="kt-section kt-section--first">
                                                        <div class="kt-wizard-v4__form">
                                                            <div class="row">
                                                                <div class="col-xl-12">
                                                                    <div class="kt-section__body">
                                                                    <div class="form-group row">
                                                                            <label
                                                                                class="col-xl-3 col-lg-3 col-form-label">Course Picture</label>
                                                                                <div class="col-lg-9 col-xl-6">
                                                                                    <div class="kt-avatar kt-avatar--outline kt-avatar--circle- kt-avatar--changed" id="kt_user_edit_avatar">
                                                                                        <div class="kt-avatar__holder"  ><img  src="<?php echo "../../../../../themes/metronic/theme/default/demo1/dist/assets/media/course/".$photo; ?>" height="120" width="120" id="image" /></div>
                                                                                        
                                                                                        <label class="kt-avatar__upload" data-toggle="kt-tooltip" title="" data-original-title="Change avatar">
                                                                                            <i class="fa fa-pen"></i>
                                                                                            <input type='file' id="filename" name="photo" onchange="showImage.call(this)" />
                                                                                        </label>
                                                                                        <span id="photo_error"></span>
                                                                                        <script>
                                                                                            function showImage()
                                                                                            {
                                                                                                if(this.files && this.files[0])
                                                                                                {
                                                                                                    var obj = new FileReader();
                                                                                                    obj.onload=function(data){
                                                                                                    var image=document.getElementById("image");
                                                                                                    image.src=data.target.result;
                                                                                                    image.style.display="block";

                                                                                                    }
                                                                                                    obj.readAsDataURL(this.files[0]);
                                                                                                }
                                                                                            }
                                                                                            
                                                                                        </script>



                                                                                    </div>
                                                                                </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label
                                                                                class="col-xl-3 col-lg-3 col-form-label">Course Name</label>
                                                                            <div class="col-lg-9 col-xl-9">
                                                                                <input class="form-control" type="text" id="cname" name="cname"
                                                                                placeholder="Enter Course Name." value="<?php echo $row['course_name']; ?>">
                                                                                <span id="cname_error" class="kt-font-danger"></span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label
                                                                                class="col-xl-3 col-lg-3 col-form-label">course_description</label>
                                                                            <div class="col-lg-9 col-xl-9">
                                                                                <input class="form-control" type="text" id="cdescription" name="cdescription"
                                                                                placeholder="Enter Basic Description Name." value="<?php echo $row['course_description']; ?>">
                                                                                <span id="cdescription_error" class="kt-font-danger"></span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label
                                                                                class="col-xl-3 col-lg-3 col-form-label">Detailed Description</label>
                                                                            <div class="col-lg-9 col-xl-9">
                                                                                <textarea class="form-control" rows="3" id="cfulldescriptions" name="cfulldescription"  placeholder="Enter Detailed Description  "><?php echo $row['course_full_description']; ?></textarea>
                                                                                    <span id="cfulldescription_error" class="kt-font-danger"></span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label
                                                                                class="col-xl-3 col-lg-3 col-form-label">Faculty</label>
                                                                                <input type="text" readonly id="cfaculty" name="cfaculty" value="<?php echo $fname;  ?>" class="btn btn-outline-primary">
                                                                                
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label
                                                                                class="col-xl-3 col-lg-3 col-form-label">Status</label>
                                                                            <div class="col-lg-9 col-xl-9">
                                                                            <span class="kt-switch">
                                                                                <label>
                                                                                    <input type="checkbox" value="Active" name="cstatus" id="cstatus" <?php if($st=="Active")echo "checked"; ?>>
                                                                                    <span></span>
                                                                                </label>
                                                                            </span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label
                                                                                class="col-xl-3 col-lg-3 col-form-label">Course Start Date</label>
                                                                            <div class="col-lg-9 col-xl-9">
                                                                                <div class="input-group">
                                                                                    <div class="input-group-prepend">
                                                                                        <span
                                                                                            class="input-group-text"><i
                                                                                                class="la la-calendar"></i></span>
                                                                                    </div>
                                                                                    <input type="date"
                                                                                        class="form-control"
                                                                                        id="coursestartdate"
                                                                                        value="<?php echo strftime('%Y-%m-%d',strtotime($startdate)); ?>"
                                                                                        name="coursestartdate"
                                                                                        aria-describedby="basic-addon1">
                                                                                        
                                                                                </div>
                                                                                
                                                                                    <span id="coursestartdate_error" class="kt-font-danger"></span>
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
                                                                                        value="<?php echo strftime('%Y-%m-%d',strtotime($enddate)); ?>"
                                                                                        id="courseenddate"
                                                                                        name="courseenddate"
                                                                                        aria-describedby="basic-addon1">
                                                                                        
                                                                                </div>
                                                                                
                                                                                    <span id="courseenddate_error" class="kt-font-danger"></span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label
                                                                                class="col-xl-3 col-lg-3 col-form-label">Price</label>
                                                                            <div class="col-lg-9 col-xl-9">
                                                                                <div class="input-group">
                                                                                    <div class="input-group-prepend">
                                                                                        <span
                                                                                            class="input-group-text"><i
                                                                                                class="la la-rupee"></i></span>
                                                                                    </div>
                                                                                    <input type="text"
                                                                                        class="form-control"
                                                                                        value="<?php echo $pri; ?>"
                                                                                        id="courseprice"
                                                                                        name="courseprice"
                                                                                        aria-describedby="basic-addon1">
                                                                                        
                                                                                </div>
                                                                                
                                                                                    <span id="courseprice_error" class="kt-font-danger"></span>
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

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  

           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>


  <script>
      
    $(document).ready(function(){
        // alert("hello");
        


        $('#cname').keypress(function(){
           fname = $('#cname').val();
          var fname_regx = /^[a-zA-Z]{3,20}$/;
          if(fname.match(fname_regx))
          {
            $('#cname_error').hide();
          }
          else
          {
            $('#cname_error').html("*Enter Valid Course Name");
            $('#cname_error').show();  
            // $('#firstname').focus();

          }

        });

        $('#cdescription').keypress(function(){
           mname = $('#cdescription').val();
          var mname_regx = /^[a-zA-Z]{5,20}$/;
          if(mname.match(mname_regx))
          {
            $('#cdescription_error').hide();
          }
          else
          {
            $('#cdescription_error').html("Enter proper description");
            $('#cdescription_error').show();
            // $('#middlename').focus();

          }

        });

        $('#cfulldescription').keypress(function(){
           lname = $('#cfulldescription').val();
          var lname_regx = /^[a-zA-Z]{10,56}$/;
          if(lname.match(lname_regx))
          {
            $('#cfulldescription_error').hide();
          }
          else
          {
            $('#cfulldescription_error').html("Provide Enough description");
            $('#cfulldescription_error').show();  
            // $('#lastname').focus();

          }

        });

        $('#courseprice').keypress(function(){
          mobile = $('#courseprice').val();
          var mobile_regx = /^[0-9]$/;
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
        $cname    = $_REQUEST['cname'];
        $cdescription    =  $_REQUEST['cdescription'];
        $cfulldescription    =  $_REQUEST['cfulldescription'];
        $cfaculty   = (int)$_REQUEST['cfaculty'];
        
        $photos    = $_FILES['photo'];
        $coursestartdate     =$_REQUEST['coursestartdate'];
        $courseenddate    =  $_REQUEST['courseenddate'];
        $courseprice     =  $_REQUEST['courseprice'];       
        

        //$active = isset($_POST['Active']) && $_POST['Active']  ? "1" : "0";
        if(isset($_REQUEST['cstatus']))
        {
            $coursestatus="Active";
        
        }
        else
        {
            $coursestatus="Deactive";
        }
       
       
       
       
        

        //echo "<script>alert('$fname');</script>";
        // echo "<script>alert('$image_tmp_name');</script>";
        //echo "<script>alert('$upload_folder_name');</script>";
        //echo "<script>alert('$user_img_type');</script>";
            if(empty($cname) ||empty($cdescription) || empty($cfulldescription) || empty($coursestartdate)|| empty($courseenddate) || empty( $courseprice) )
            {
                echo "<script>   
                        $(document).ready(function(){
                            $('#courseprice_error').html('All Data Must be Filled'); 
                        });
                        </script>";   
                       // $insert = "INSERT INTO `tblcourse` VALUES(NULL,'$cname','$cdescription','$cfulldescription','$store','$cstatus','$coursestartdate','$courseenddate','$courseprice','$cfaculty','1')";
                        //echo "<script>alert('$insert');</script>";        
            }
            else
            {
                
                    if(isset($_FILES['photo']))
                    {
                        $user_img_type=$_FILES['photo']['type'];
                        $photo_size = $_FILES['photo']['size'];//30720byte = 30kb =0.0293mb = 0.00003gb //2097152
                        if($user_img_type=="image/jpeg" || $user_img_type=="image/jpg" || $user_img_type=="image/png")
                        {
                            $uniquesavename=time().uniqid(rand());
                            $image_tmp_name=$_FILES['photo']['tmp_name'];
                            $upload_folder_name="../../../../../themes/metronic/theme/default/demo1/dist/assets/media/course/".$uniquesavename.$_FILES['photo']['name'];                     
                            $store=$uniquesavename.$_FILES['photo']['name'];
                            move_uploaded_file($image_tmp_name,$upload_folder_name);
                            $insert = "UPDATE `tblcourse` set course_name='$cname',course_photo_path='$store', course_description='$cdescription', course_full_description='$cfulldescription',course_photo_path='$store', course_status='$coursestatus',course_start_date='$coursestartdate',course_end_date='$courseenddate',course_prize='$courseprice' where course_id=$cid";
                            $insert_row=mysqli_query($con,$insert) or die(mysqli_error($con));
                        }
                        else
                        {
                            echo "<script>
                            $(document).ready(function(){
                                $('#photo_error').html('photo not changed'); 
                            });
                            </script>
                            
                            ";
                        }
                    }
                    else
                    {
                        $store=$photo;
                        $insert = "UPDATE `tblcourse` set course_name='$cname', course_description='$cdescription', course_full_description='$cfulldescription',course_photo_path='$store', course_status='$coursestatus',course_start_date='$coursestartdate',course_end_date='$courseenddate',course_prize='$courseprice' where course_id=$cid";
                        $insert_row=mysqli_query($con,$insert) or die(mysqli_error($con));    
                        echo "<script>alert('hey');</script>";
                    }
                    // echo "<script>alert('$cstatus');</script>";
                   
                    //move_uploaded_file($_FILES['photo']['tmp_name'], rootpath."/videoimage/  ".$_FILES['photo']['name']); 
                   // $insert = "UPDATE `tblcourse` set course_name='$cname',course_photo_path='$store', course_description='$cdescription', course_full_description='$cfulldescription',course_photo_path='$store', course_status='$coursestatus',course_start_date='$coursestartdate',course_end_date='$courseenddate',course_prize='$courseprice' where course_id=$cid";
                    //echo $insert;
                    //echo "<script>alert('$insert');</script>";
                    
                    //echo $insert_row;  
                }
            }
        
    ?>  