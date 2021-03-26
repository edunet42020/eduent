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

    <title>EduNet-faculty || change password</title>
    <meta name="description" content="Updates and statistics">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="../../themes/favicon.ico" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
<link href="../../themes/favicon.ico" sizes="128x128" rel="shortcut icon" />
    <!--begin::Fonts -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Roboto:300,400,500,600,700">
        <link rel="stylesheet" href="../../themes/metronic/theme/default/demo1/dist/assets/css/edunet-style.css" />
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
<body>
	<div class="row">
    <div class="col-md-4 col-xs-4"></div>
      <div class="col-sm-12 col-lg-6 offset-lg-3">
        <div><h1>Change password</h1></div>
          <div class="login_form inner_page">
            <div class="kt-portlet">
              <div class="kt-portlet__body kt-portlet__body--fit">
                <div class="kt-grid">
                  <div class="kt-grid__item kt-grid__item--fluid kt-wizard-v4__wrapper">
                    <form class="kt-form" id="kt_user_add_form" enctype="multipart/form-data" action="" method="post">
                      <div class="kt-wizard-v4__content" data-ktwizard-type="step-content"
                                                    data-ktwizard-state="current">
                        <div class="kt-heading kt-heading--md">Change password</div>
                          <div class="kt-section kt-section--first">
                            <div class="kt-wizard-v4__form">
                              <div class="row">
                                <div class="col-xl-12">
                                  <div class="kt-section__body">
                                    <div class="alert alert-danger" id="change_failed"></div>
                                    <div class="alert alert-danger" id="ummatch_password"></div>
                                    <div class="alert alert-success" id="change_success"></div>
                                      <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label">Old password</label>
                                          <div class="col-lg-6 col-xl-6">
                                            <input type="password" class="form-control" placeholder="Current password" id="currentpassword" name="currentpassword"/>
                                              <span id="current_error" class="kt-font-danger"></span>
                                          </div>
                                      </div>
                                       <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label">New password</label>
                                          <div class="col-lg-6 col-xl-6">
                                            <input type="password" class="form-control" placeholder="New Password" id="newpassword" name="newpassword"/>
                                            <span id="new_error" class="kt-font-danger"></span>
                                          </div>
                                        </div>
                                        <div class="form-group row">
                                          <label class="col-xl-3 col-lg-3 col-form-label">confirm password</label>
                                            <div class="col-lg-6 col-xl-6">
                                              <input type="password" class="form-control" placeholder="Confirm Password" id="confirmpassword" name="confirmpassword"/>
                                              <span id="confirm_error" class="kt-font-danger"></span>
                                            </div>                                   
                                        </div>
                                        <div class="form-group row">
                                          <div class="col-md-12 cl-xs-12 col-lg-12 kt-form__actions">
                                            <button class="btn btn-success btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u" type="submit" value="Change Password" name="changepassword" >
                                               change password
                                            </button>
                                            <a href="index.php"></a><button type="reset" class="btn btn-danger btn-wide" id="btnreset" name="btnreset" >cancel</button>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
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