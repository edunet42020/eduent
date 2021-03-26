<?php
session_start();
ob_start();
require("C:/xampp/htdocs/edunet/faculty/preview/demo1/connection.php");
define("ROOT_PATH", $_SERVER["DOCUMENT_ROOT"]);
define("rootpath","C:/xampp/htdocs/edunet/faculty/preview/demo1");
define("imageroot","http://localhost/edunet/admin/themes/metronic/theme/default/demo1/dist/assets/media/");

?>
<?php
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
<!-- begin::Head -->
<head>
    <meta charset="utf-8" />

    <title>Edunet-Faculty || Add Course</title>
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
  <link rel="stylesheet" href="../../../../../themes/metronic/theme/default/demo1/dist/assets/css/popup.css">
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
                                                                                        <div class="kt-avatar__holder"  ><img  src="" height="120" width="120" id="image" /></div>
                                                                                        
                                                                                        <label class="kt-avatar__upload" data-toggle="kt-tooltip" title="" data-original-title="Change avatar">
                                                                                            <i class="fa fa-pen"></i>
                                                                                            <input type='file' id="filename" name="photo" onchange="showImage.call(this)" />
                                                                                        </label>
                                                                                        <span id="photo_error" class="kt-font-danger"></span>
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
                                                                                placeholder="Enter Course Name."
                                                                                value="<?php echo isset($_POST["cname"]) ? $_POST["cname"] : ''; ?>"
                                                                                >
                                                                                <span id="cname_error" class="kt-font-danger"></span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label
                                                                                class="col-xl-3 col-lg-3 col-form-label">Category</label>&nbsp;
                                                                                &nbsp;
                                                                                    <select id="ccategory" name="ccategory" class="btn btn-outline-success">
                                                                                    
                                                                                        <?php
                                                                                            $query="select * from `tblcategory`";
                                                                                            $res=mysqli_query($con,$query);
                                                                                            //$row=mysqli_fetch_array($res);
                                                                                            while($row=mysqli_fetch_array($res))
                                                                                            {
                                                                                                echo '<option value='. $row['category_id'] .'>' . $row['category_name'] . '</option>'; 
                                                                                                //echo '<li><a href="#" id ='. $row['f_id'] .'>' . $row['f_name'] . '</a></li>'; 
                                                                                            }
                                                                                        ?>
                                                                                    
                                                                                    </select>
                                                                               
                                                                                
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label
                                                                                class="col-xl-3 col-lg-3 col-form-label">course_description</label>
                                                                            <div class="col-lg-9 col-xl-9">
                                                                                <input class="form-control" type="text" id="cdescription" name="cdescription"
                                                                                placeholder="Enter Basic Description."
                                                                                value="<?php echo isset($_POST["cdescription"]) ? $_POST["cdescription"] : ''; ?>"
                                                                                >
                                                                                <span id="cdescription_error" class="kt-font-danger"></span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label
                                                                                class="col-xl-3 col-lg-3 col-form-label">Detailed Description</label>
                                                                            <div class="col-lg-9 col-xl-9">
                                                                                <textarea class="form-control" rows="3" id="cfulldescription" name="cfulldescription" placeholder="Enter Detailed Description  "><?php echo isset($_POST["cfulldescription"]) ? $_POST["cfulldescription"] : ''; ?></textarea>
                                                                                    <span id="cfulldescription_error" class="kt-font-danger"></span>
                                                                            </div>
                                                                        </div>
                                                                       
                                                                        <div class="form-group row">
                                                                            <label
                                                                                class="col-xl-3 col-lg-3 col-form-label">Status</label>
                                                                            <div class="col-lg-9 col-xl-9">
                                                                            <span class="kt-switch">
                                                                                <label>
                                                                                    <input type="checkbox" value="1" name="cstatus" id="cstatus" checked>
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
                                                                                        value="<?php echo isset($_POST["coursestartdate"]) ? $_POST["coursestartdate"] : ''; ?>"
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
                                                                                        id="courseenddate"
                                                                                        name="courseenddate"
                                                                                        value="<?php echo isset($_POST["courseenddate"]) ? $_POST["courseenddate"] : ''; ?>"
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
                                                                                        id="courseprice"
                                                                                        name="courseprice"
                                                                                        value="<?php echo isset($_POST["courseprice"]) ? $_POST["courseprice"] : ''; ?>"
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
                <?php 
                    require_once("../../../footer.php");
               ?>
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


    $(document).ready(function(){
        $('form').submit(function () {

        // Get the Login Name value and trim it
        var name = $.trim($('#cname').val());
        var description=$.trim($('#cdescription').val());
        var  fulldescription= $.trim($('#cfulldescription').val());
        var coursestartdate = $.trim($('#coursestartdate').val());
        var courseenddate = $.trim($('#courseenddate').val());
        var price = $.trim($('#courseprice').val());
        // Check if empty of not
        if (name  === '') {
            
            $('#cname_error').html("*");
            $('#cname_error').show();
            return false;
        }
        else{
            $('#cname_error').hide();
            if (description  === '') {
                $('#cdescription_error').html("*");
                $('#cdescription_error').show();
            return false;
            }
            else{
                $('#cdescription_error').hide();
                if (fulldescription  === '') {
                    $('#cfulldescription_error').html("*");
                    $('#cfulldescription_error').show();
                    return false;
                }
                else
                {
                    $('#cfulldescription_error').hide(); 
                    if (coursestartdate  === '') {
                        $('#coursestartdate_error').html("*");
                        $('#coursestartdate_error').show();
                        return false;
                    }
                    else{
                        $('#coursestartdate_error').hide();
                        if (courseenddate  === '') {
                            $('#courseenddate_error').html("*");
                            $('#courseenddate_error').show();
                            return false;
                        }
                        else{
                            $('#courseenddate_error').hide();
                            if(coursestartdate >= courseenddate)
                            {
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Invalid Choice Of Date!',
                                    text: 'End date should be greater than the Start date..',
                                })
                                $('#courseenddate_error').html("End date should be greater than the Start date");
                                $('#courseenddate_error').show();
                                return false;
                            }
                            else
                            {
                                $('#courseenddate_error').hide();
                                if(price === '')
                                {
                                    $('#courseprice_error').html("*");
                                    $('#courseprice_error').show();
                                    return false;
                                }
                                else
                                {
                                    $('#courseprice_error').hide();
                                }
                            }
                        }
                    }
                }
            }
        }
        

        });
                
        // alert("hello");
       


        $('#cname').keypress(function(){
           fname = $('#cname').val();
          var fname_regx = /^[a-z A-Z]{1,20}$/;
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
          var mname_regx = /^[a-z ,.!?(){}'"A-Z]{1,50}$/;
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
          var lname_regx = /^[a-z ,.!?(){}'"A-Z]{1,200}$/;
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
        $cname    = $_REQUEST['cname'];
        $cdescription    =  $_REQUEST['cdescription'];
        $cfulldescription    =  $_REQUEST['cfulldescription'];
       // $cfaculty   = (int)$_REQUEST['cfaculty'];
       $facultyid=$_SESSION['facultyid'];
        $ccategory   = (int)$_REQUEST['ccategory'];
        //$ccheck    = $_REQUEST['cstatus'];
        $photo    = $_FILES['photo'];
        $coursestartdate     =$_REQUEST['coursestartdate'];
        $courseenddate    =  $_REQUEST['courseenddate'];
        $courseprice     =  $_REQUEST['courseprice'];       
        
        $uniquesavename=time().uniqid(rand());
        //$active = isset($_POST['Active']) && $_POST['Active']  ? "1" : "0";

        if(isset($_REQUEST['cstatus']))
        {
            $ccheck    = $_REQUEST['cstatus'];
        }
        else
        {
            $ccheck    = 2;
        }
        if($ccheck==1)
        {
            $cstatus="Active";
        }
        else
        {
            $cstatus="Deactive";
        }
        $image_tmp_name=$_FILES['photo']['tmp_name'];
       
        $upload_folder_name="../../../../../../admin/themes/metronic/theme/default/demo1/dist/assets/media/course/".$uniquesavename.$_FILES['photo']['name'];
        $user_img_type=$_FILES['photo']['type'];
        $photo_size = $_FILES['photo']['size'];//30720byte = 30kb =0.0293mb = 0.00003gb //2097152
        $store=$uniquesavename.$_FILES['photo']['name'];

            $start = $_POST['coursestartdate'];
            $start = new DateTime($start);
    
            $end = $_POST['courseenddate'];
            $end = new DateTime($end);
            
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
            elseif($start > $end) {
                echo "<script>   
                        $(document).ready(function(){
                            $('#coursestartdate_error').html('Start date should be smaller than the end date');
                            $('#courseenddate_error').html('End date should be Bigger than the Start date'); 
                        });
                        </script>";     
                        return false;     
            }
            else
            {
                if($user_img_type=="image/jpeg" || $user_img_type=="image/jpg" || $user_img_type=="image/png")
                {
                    // echo "<script>alert('$cstatus');</script>";
                    move_uploaded_file($image_tmp_name,$upload_folder_name);
                    //move_uploaded_file($_FILES['photo']['tmp_name'], rootpath."/videoimage/  ".$_FILES['photo']['name']); 
                    $insert = "INSERT INTO `tblcourse` VALUES(NULL,'$cname','$cdescription','$cfulldescription','$store','$cstatus','$coursestartdate','$courseenddate','$courseprice',$facultyid,'$ccategory')";
                    echo $insert; 
                    //echo "<script>alert('$insert');</script>";
                    if(mysqli_query($con,$insert))
                    { 

                        echo "
                        <script>
                        Swal.fire({
                            icon: 'success',
                            title: 'Sucess',
                            text: 'Record Inserted Successfully.',
                        }).then(function() {
                            window.location ='http://localhost/edunet/faculty/preview/demo1/crud/metronic-datatable/advanced/allcourse.php';
                        });
                        </script>

                        ";
                        //header("Location: ../../../crud/metronic-datatable/advanced/allcourse.php");
                    }
                    //echo $insert_row;  
                }
                else{
                    echo "<script>   
                    $(document).ready(function(){
                        $('#photo_error').html('Invalid Image'); 
                    });
                    </script>";
                }
            }
        } 
        ob_flush();
    ?>  
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