<?php
session_start();
$facultyid=$_SESSION['facultyid'];
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

    <title>Edunet-Faculty || Add Question</title>
    <meta name="description" content="Add user example">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="../../../../../themes/favicon.ico" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
<link href="../../../../../themes/favicon.ico" sizes="128x128" rel="shortcut icon" />
    <!--begin::Fonts -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Roboto:300,400,500,600,700">
    <!--end::Fonts -->
  <link rel="stylesheet" href="../../../../../themes/metronic/theme/default/demo1/dist/assets/css/popup.css">
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
                                    Add Question
                                </h3>

                                <span class="kt-subheader__separator kt-subheader__separator--v"></span>

                                <div class="kt-subheader__group" id="kt_subheader_search">
                                    <span class="kt-subheader__desc" id="kt_subheader_total">
                                        Enter Question details and submit </span>

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
                                                    Question
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
                                                    <div class="kt-heading kt-heading--md">Question Details:</div>
                                                    <div class="kt-section kt-section--first">
                                                        <div class="kt-wizard-v4__form">
                                                            <div class="row">
                                                                <div class="col-xl-12">
                                                                    <div class="kt-section__body">
                                                                     
                                                                        <div class="form-group row">
                                                                            <label
                                                                                class="col-xl-3 col-lg-3 col-form-label">Question </label>
                                                                            <div class="col-lg-9 col-xl-9">
                                                                                <input class="form-control" type="text" id="que" name="que"
                                                                                placeholder="Enter Question Here.." value="<?php if(isset($_POST['que'])) echo "$_POST[que]"; ?>">
                                                                                <span id="que_error" class="kt-font-danger"></span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label
                                                                                class="col-xl-3 col-lg-3 col-form-label">Options</label>
                                                                            <div class="col-xl-4 col-lg-4 col-form-label">
                                                                                <input class="form-control" type="text" id="op1" name="op1"
                                                                                placeholder="Option_A." value="<?php if(isset($_POST['op1'])) echo "$_POST[op1]"; ?>">
                                                                                <span id="op1_error" class="kt-font-danger"></span>
                                                                            </div>
                                                                            
                                                                            <div class="col-xl-3 col-lg-4 col-form-label">
                                                                                <input class="form-control" type="text" id="op2" name="op2"
                                                                                placeholder="Option_B." value="<?php if(isset($_POST['op2'])) echo "$_POST[op2]"; ?>">
                                                                                <span id="op2_error" class="kt-font-danger"></span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label
                                                                                class="col-xl-3 col-lg-3 col-form-label"></label>
                                                                                <div class="col-xl-3 col-lg-4 col-form-label">
                                                                                <input class="form-control" type="text" id="op3" name="op3"
                                                                                placeholder="Option_C." value="<?php if(isset($_POST['op3'])) echo "$_POST[op3]"; ?>">
                                                                                <span id="op3_error" class="kt-font-danger"></span>
                                                                            </div>
                                                                            <div class="col-xl-3 col-lg-4 col-form-label">
                                                                                <input class="form-control" type="text" id="op4" name="op4"
                                                                                placeholder="Option_D." value="<?php if(isset($_POST['op4'])) echo "$_POST[op4]"; ?>">
                                                                                <span id="op4_error" class="kt-font-danger"></span>
                                                                            </div>
                                                                        </div>
                                                                        
                                                                        <div class="form-group row">
                                                                            <label
                                                                                class="col-xl-3 col-lg-3 col-form-label">Answer</label>
                                                                            <div class="col-lg-9 col-xl-8">
                                                                                 <select id="ans" name="ans" class="btn btn-outline-primary">
                                                                                
                                                                              
                                                                                
                                                                                        <option value="1">option A</option> 
                                                                                         <option value="2">option B</option> 
                                                                                          <option value="3">option C</option> 
                                                                                           <option value="4">option D</option> 
                                                                                       
                                                                                
                                                                                </select>
                                                                                <span id="ans_error" class="kt-font-danger"></span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label
                                                                                class="col-xl-3 col-lg-3 col-form-label">Explanation</label>
                                                                            <div class="col-lg-9 col-xl-9">
                                                                                <input class="form-control" type="text" id="exp" name="exp"
                                                                                placeholder="Proviode Elplanation Here.." value="<?php if(isset($_POST['exp'])) echo "$_POST[exp]"; ?>">
                                                                                <span id="exp_error" class="kt-font-danger"></span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label
                                                                                class="col-xl-3 col-lg-3 col-form-label">Course</label>&nbsp;
                                                                                &nbsp;
                                                                                    <select id="course" name="course" class="btn btn-outline-success" >
                                                                                        <option value="1">Select Course</option>
                                                                                        <?php
                                                                                            $query="SELECT * FROM `tblcourse` where course_t_id='$facultyid'";
                                                                                            $res=mysqli_query($con,$query);
                                                                                            //$row=mysqli_fetch_array($res);
                                                                                            while($row=mysqli_fetch_array($res))
                                                                                            {
                                                                                                echo '<option value='. $row['course_id'] .'>' . $row['course_name'] . '</option>'; 
                                                                                                //echo '<li><a href="#" id ='. $row['f_id'] .'>' . $row['f_name'] . '</a></li>'; 
                                                                                            }
                                                                                        ?>
                                                                                    
                                                                                    </select> 
                                                                                    <span id="course_error" class="kt-font-danger"></span>  
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label
                                                                                class="col-xl-3 col-lg-3 col-form-label">Exam</label>
                                                                                &nbsp;&nbsp;&nbsp;
                                                                                <select id="exam" name="exam" class="btn btn-outline-primary">
                                                                                <option value="1">Select Exam</option>
                                                                                </select>
                                                                                <span id="all_error" class="kt-font-danger"></span>
                                                                                <span id="week_error" class="kt-font-danger"></span>
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
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js" type="text/javascript"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

<script>

$( "select[name='course']" ).change(function () {
    var stateID = $(this).val();
    //alert(stateID);
    if(stateID) {
        $.ajax({
            url: "fetchexam.php",
            dataType: 'text',
            data: {'id':stateID},
            success: function(data) {
                $('#exam').html(data);
            }
        });
    }
});
</script>
  <script>
    $(document).ready(function(){
        $('form').submit(function () {

            // Get the Login Name value and trim it
            var name = $.trim($('#que').val());
            var ans=$.trim($('#ans').val());
            var op1=$.trim($('#op1').val());
            var op2=$.trim($('#op2').val());
            var op3=$.trim($('#op3').val());
            var op4=$.trim($('#op4').val());
            var exp=$.trim($('#exp').val());
            //var price = $.trim($('#courseprice').val());
            // Check if empty of not
            if (name  === '') {
                
                $('#que_error').html("*");
                $('#que_error').show();
                return false;
            }
            else{
                $('#que_error').hide();
                if (op1  === '') {
                    $('#op1_error').html("*");
                    $('#op1_error').show();
                return false;
                }
                else{
                    $('#op1_error').hide();
                    if (op2  === '') {
                        $('#op2_error').html("*");
                        $('#op2_error').show();
                    return false;
                    }
                    else{
                        $('#op2_error').hide();
                        if (op3  === '') {
                            $('#op3_error').html("*");
                            $('#op3_error').show();
                        return false;
                        }
                        else{
                            $('#op3_error').hide();
                            if (op4  === '') {
                                $('#op4_error').html("*");
                                $('#op4_error').show();
                            return false;
                            }
                            else{
                                $('#op4_error').hide();
                                if (ans  === '') {
                                    $('#ans_error').html("*");
                                    $('#ans_error').show();
                                return false;
                                }
                                else{
                                    $('#ans_error').hide();
                                    if (exp  === '') {
                                        $('#exp_error').html("*");
                                        $('#exp_error').show();
                                    return false;
                                    }
                                    else{
                                        $('#exp_error').hide();
                                            
                                        }
                        
                                }                    
                            }
                        } 
                   }
                }
            }
                
                    
                

});
        $('#que').keypress(function(){
           fname = $('#que').val();
          var fname_regx = /^[a-z ,'-_"0-9A-Z]{1,500}$/;
          if(fname.match(fname_regx))
          {
            $('#que_error').hide();
          }
          else
          {
            $('#que_error').html("*Enter Valid Question");
            $('#que_error').show();  
            // $('#firstname').focus();

          }

        });

        $('#ans').keypress(function(){
           mname = $('#ans').val();
          var mname_regx = /^[a-z -_A-Z0-9]{0,1}$/;
          if(mname.match(mname_regx))
          {
            $('#ans_error').hide();
          }
          else
          {
            $('#ans_error').html("Enter Proper Answer");
            $('#ans_error').show();
            // $('#middlexam').focus();

          }

        });
        $('#exp').keypress(function(){
           mname = $('#exp').val();
          var mname_regx = /^[a-z -_A-Z0-9]{1,150}$/;
          if(mname.match(mname_regx))
          {
            $('#exp_error').hide();
          }
          else
          {
            $('#exp_error').html("Enter proper Explanation");
            $('#exp_error').show();
            // $('#middlexam').focus();

          }

        });

       
    });
</script>
<?php
        if(isset($_POST['btninsert']))
        {
            $insert="";
        $que    = $_REQUEST['que'];
        $ans    =  $_REQUEST['ans'];
        $op1=$_REQUEST['op1'];
        $op2=$_REQUEST['op2'];
        $op3=$_REQUEST['op3'];
        $op4=$_REQUEST['op4'];
        $exp=$_REQUEST['exp'];

        $courseid     =  $_REQUEST['course'];
        $examid=$_REQUEST['exam'];
            if($examid == 0 || $examid == 1)
        {
            echo "<script>   
                        $(document).ready(function(){
                            $('#week_error').html('please select week'); 
                        });
                        </script>";   
        }
        else if($courseid == 1)
        {
            echo "<script>   
                        $(document).ready(function(){
                            $('#course_error').html('please select course'); 
                        });
                        </script>";   
        }
        else
        {
            if(empty($que) ||empty($ans) ||empty($op1)||empty($op2) ||empty($op3) ||empty($op4) ||empty($exp)  )
            {
                echo "<script>   
                        $(document).ready(function(){
                            $('#all_error').html('All Data Must be Filled'); 
                        });
                        </script>";   
                        
                        //echo "<script>alert('$insert');</script>";        
            }
            else
            {
                $insert = "INSERT INTO `tblquestionmcq` VALUES(NULL,'$que','1','$op1','$op2','$op3','$op4','$ans','$exp','$examid','$courseid')";
                           // $insert = "UPDATE `tblweek` set week_title='$que',chap_name='$ans', course_description='$ans', course_full_description='$cfulldescription',course_photo_path='$store', course_status='$coursestatus',course_start_date='$startdate',course_end_date='$enddate',course_prize='$courseprice' where course_id=$cid";
                            if(mysqli_query($con,$insert) or die(mysqli_error($con)))
                            {
                                echo "
                                <script>
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Sucess',
                                    text: 'Record Updated Successfully.',
                                }).then(function() {
                                    window.location ='http://localhost/edunet/faculty/preview/demo1/crud/metronic-datatable/advanced/allquestion.php';
                                });
                                </script>
        
                                ";
                            }
                    //echo "<script>alert('$insert');</script>";
                    //echo $insert_row;  
                }
            }
        }
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