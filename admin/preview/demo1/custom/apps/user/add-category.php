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

?>

<!DOCTYPE html>

<html lang="en">
<!-- begin::Head -->
<head>
    <meta charset="utf-8" />

    <title>EduNet || Add Category</title>
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
                                    New Category
                                </h3>

                                <span class="kt-subheader__separator kt-subheader__separator--v"></span>

                                <div class="kt-subheader__group" id="kt_subheader_search">
                                    <span class="kt-subheader__desc" id="kt_subheader_total">
                                        Enter Category details</span>

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
                                                    Category
                                                </div>
                                                <div class="kt-wizard-v4__nav-label-desc">
                                                    Category Information
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
                                                    <div class="kt-heading kt-heading--md">Category Details:</div>
                                                    <div class="kt-section kt-section--first">
                                                        <div class="kt-wizard-v4__form">
                                                            <div class="row">
                                                                <div class="col-xl-12">
                                                                    <div class="kt-section__body">
                                                                    <div class="form-group row">
                                                                            <label
                                                                                class="col-xl-3 col-lg-3 col-form-label">Category Picture</label>
                                                                                <div class="col-lg-9 col-xl-6">
                                                                                    <div class="kt-avatar kt-avatar--outline kt-avatar--circle- kt-avatar--changed" id="kt_user_edit_avatar">
                                                                                        <div class="kt-avatar__holder"  ><img  src="" height="120" width="120" id="image" /></div>
                                                                                        
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
                                                                                class="col-xl-3 col-lg-3 col-form-label">Category Name</label>
                                                                            <div class="col-lg-9 col-xl-9">
                                                                                <input class="form-control" type="text" id="category_name" name="category_name"
                                                                                placeholder="Enter Category Name.">
                                                                                <span id="category_name_error" class="kt-font-danger"></span>
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
    <script src="../../../../../themes/metronic/theme/default/demo1/dist/assets/sweetalert.js"></script>

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
        $('form').submit(function () {

            // Get the Login Name value and trim it
            var cname = $.trim($('#category_name').val());

            // Check if empty of not
            if (cname  === '') {
                
                $('#category_name_error').html("Category Name Required");
                $('#category_name_error').show();
                return false;
            }
            else{
                $('#category_name_error').hide();
            }
        });
       

        $('#category_name').keypress(function(){
           fname = $('#category_name').val();
          var fname_regx = /^[a-z_-',:A-Z]{1,100}$/;
          if(fname.match(fname_regx))
          {
            $('#category_name_error').hide();
          }
          else
          {
            $('#category_name_error').html("*Enter Valid Category Name, only alphabet allowed, write at leate 3 to 20 character");
            $('#category_name_error').show();  
            // $('#firstname').focus();

          }

        });

       
        
    });
</script>
<?php
        if(isset($_POST['btninsert']))
        {
            $insert="";
        $category_name    = $_REQUEST['category_name'];
        $uniquesavename=time().uniqid(rand());
        $image_tmp_name=$_FILES['photo']['tmp_name'];
        $upload_folder_name="../../../../../themes/metronic/theme/default/demo1/dist/assets/media/category/".$uniquesavename.$_FILES['photo']['name'];
        $user_img_type=$_FILES['photo']['type'];
        $photo_size = $_FILES['photo']['size'];//30720byte = 30kb =0.0293mb = 0.00003gb //2097152
        $store=$uniquesavename.$_FILES['photo']['name'];


        //echo "<script>alert('$fname');</script>";
        // echo "<script>alert('$image_tmp_name');</script>";
        //echo "<script>alert('$upload_folder_name');</script>";
        //echo "<script>alert('$user_img_type');</script>";
            if(empty($category_name) )
            {
                echo "<script>   
                        $(document).ready(function(){
                            $('#category_name_error').html('All Data Must be Filled'); 
                        });
                        </script>";   
                        //$insert = "INSERT INTO `tblcategory` VALUES(NULL,'$category_name','$cdescription','$cfulldescription','$store','$cstatus','$Categorystartdate','$Categoryenddate','$Categoryprice','$cfaculty','1')";
                        //echo "<script>alert('$insert');</script>";        
            }
            else
            {
                if($user_img_type=="image/jpeg" || $user_img_type=="image/jpg" || $user_img_type=="image/png")
                {
                        // echo "<script>alert('$cstatus');</script>";
                        move_uploaded_file($image_tmp_name,$upload_folder_name);
                        //move_uploaded_file($_FILES['photo']['tmp_name'], rootpath."/videoimage/  ".$_FILES['photo']['name']); 
                        $insert = "INSERT INTO `tblcategory` VALUES(NULL,'$category_name','$store')";
                            //echo $insert; 
                            //echo "<script>alert('$insert');</script>";
                        if(mysqli_query($con,$insert))
                        { 

                            echo "
                            <script>
                            Swal.fire({
                                icon: 'success',
                                title: 'Sucess',
                                text: 'Category Inserted Successfully.',
                            }).then(function() {
                                window.location ='http://localhost/edunet/admin/preview/demo1/crud/metronic-datatable/advanced/allcategories.php';
                            });
                            </script>

                            ";
                            //header("Location: ../../../crud/metronic-datatable/advanced/allcourse.php");
                        }  
                }
                else
                {
                    echo "<script>   
                                        $(document).ready(function(){
                                            $('#photo_error').html('Please select valid photpgraph');     
                                          $('#photo_error').show();
                                        });
                                    </script>";
                                  
                            
                    }  
            }
        } 
    ?>  