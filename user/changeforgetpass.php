<?php
include_once("connection.php");
session_start();
if(!isset($_SESSION['fullname']) && (!isset($_SESSION['userid'])))
{
	header("Location:index.php?le");
}
if(isset($_SESSION['userid']))
{
    $userid = $_SESSION['userid'];
}
  if(isset($_SESSION['id']))
  {
    $id=$_SESSION['id'];
  }

?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="academy, college, coursera, courses, education, elearning, kindergarten, lms, lynda, online course, online education, school, training, udemy, university">
<meta name="description" content="Edumy - LMS Online Education Course & School HTML Template">
<meta name="CreativeLayers" content="ATFN">
<!-- css file -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
<!-- Responsive stylesheet -->
<link rel="stylesheet" href="css/responsive.css">
<!-- Title -->
<title>Edunet || change forget password</title>
<!-- Favicon -->
<link href="images/favicon.ico" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
<link href="images/favicon.ico" sizes="128x128" rel="shortcut icon" />

</head>
<body>
<div class="wrapper">
  <div class="preloader"></div>

  <!-- Main Header Nav -->
  <?php
    include_once("subheader.php");
  ?>
  <!-- Inner Page Breadcrumb -->
  <section class="inner_page_breadcrumb">
  </section>
  
     <!-- <a href="index.php" class="btn btn-info" style="margin-top:4px;">Home</a> -->
      <div class="row">
        <div class="col-md-4 col-sm-4 col-xs-12"></div>
        <div class="col-md-4 col-sm-4 col-xs-12">
          
            <form class="form-container" method="post" action="">
            <div class="alert alert-danger" id="login_failed"></div>
            <div class="alert alert-success" id="login_success"></div>
            <h1 style="color:#fff;">Change Password</h1>
              <div class="form-group">
                <label for=""><i class="fa fa-lock"></i> Enter New Password</label>
                <input type="password" class="form-control" placeholder="Enter Your Password" id="newpass" name="newpass"/>
                <small id="newpass_error" class="text-danger"></small>
              </div>
              <div class="form-group">
                <label for=""><i class="fa fa-lock"></i> Enter Re New Password:</label>
                <input type="password" class="form-control" placeholder="Enter Your Password" id="repass" name="repass"/>
                <small id="repass_error" class="text-danger"></small>
              </div>
             f
            </form>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12"></div>
      </div>
   </div>
   
  <?php
  include_once("footer.php");
?>
<!-- Wrapper End -->
<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script type="text/javascript" src="js/jquery-3.3.1.js"></script>
<script type="text/javascript" src="js/jquery-migrate-3.0.0.min.js"></script>
<script type="text/javascript" src="js/popper.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.mmenu.all.js"></script>
<script type="text/javascript" src="js/ace-responsive-menu.js"></script>
<script type="text/javascript" src="js/bootstrap-select.min.js"></script>
<script type="text/javascript" src="js/snackbar.min.js"></script>
<script type="text/javascript" src="js/simplebar.js"></script>
<script type="text/javascript" src="js/parallax.js"></script>
<script type="text/javascript" src="js/scrollto.js"></script>
<script type="text/javascript" src="js/jquery-scrolltofixed-min.js"></script>
<script type="text/javascript" src="js/jquery.counterup.js"></script>
<script type="text/javascript" src="js/wow.min.js"></script>
<script type="text/javascript" src="js/progressbar.js"></script>
<script type="text/javascript" src="js/slider.js"></script>
<script type="text/javascript" src="js/timepicker.js"></script>
<script type="text/javascript" src="js/wow.min.js"></script>
<!-- Custom script for all pages --> 
<script type="text/javascript" src="js/script.js"></script>
    <script type="text/javascript" src="js/sweetalert.min.js"></script>
    <script type="text/javascript" src="js/jquery.slicknav.js"></script>
    <script>
    $(document).ready(function(){
        $('#newpass_error').hide();
        $('#repass_error').hide();
        $('#login_failed').hide();
        $('#login_success').hide();
        $('#confpass_error').hide();
    

        $('#newpass').keyup(function(){
          var pass = $('#newpass').val();
          // var pass_regx = ;
          if(pass.length >= 8 && pass.length <= 20)
          {
            $('#newpass_error').hide();
          }
          else
          {
            $('#newpass_error').html("password must between 8 to 20 character");
            $('#newpass_error').show();  
            // $('#pass').focus();  
          }
        });
        
        $('#repass').keyup(function(){
          var repass = $('#repass').val();
          var newpass = $('#newpass').val();
          // var pass_regx = ;
            
            
          if(repass.length >= 8 && repass.length <= 20)
          {
              $('#repass_error').hide();
            
              if(repass == newpass)
              {
                 $('#repass_error').hide(); 
              }
              else
              {
                $('#repass_error').html("password doesn't matched.");
                $('#repass_error').show();   
              }
          }
          else
          {
            $('#repass_error').html("password must between 8 to 20 character");
            $('#repass_error').show();  
            // $('#pass').focus();  
          }
        });
        
        $('#confpass').keyup(function(){
          var confpass = $('#confpass').val();
          var newpass = $('#newpass').val();
          // var pass_regx = ;
            
            
          if(confpass.length >= 8 && confpass.length <= 20)
          {
              $('#confpass_error').hide();
            
              if(confpass == newpass)
              {
                 $('#confpass_error').hide(); 
              }
              else
              {
                $('#confpass_error').html("password doesn't matched.");
                $('#confpass_error').show();   
              }
          }
          else
          {
            $('#confpass_error').html("password must between 8 to 20 character");
            $('#confpass_error').show();  
            // $('#pass').focus();  
          }
        });
        
        
    });
    </script>

  </body>
</html>
<?php
if(isset($_POST['changepass']))
{
//        echo "<script>alert('button pressed..');</script>";
        $newpass =  $_POST['newpass'];
        $repass =  $_POST['repass'];
       // $conpass = $_POST['confpass'];
    
        if(empty($newpass) || empty($repass))
        {
            echo "<script>
                        $(document).ready(function(){
                            $('#newpass_error').html('*');
                            $('#repass_error').html('*');
                            $('#confpass_error').html('*');
                            $('#newpass_error').show();
                            $('#repass_error').show();
                            $('#confpass_error').show();
                        });
                
                  </script>";
        }
        else
        {
            if($newpass == $repass)
            {
                                          $encodenewpass = base64_encode($repass);
                        
                    $update_pass = "update tbluser set u_password='$encodenewpass' where u_id=".$userid  ;    echo $update_pass;
                        $row = mysqli_query($conn,$update_pass);
                        
                        if($row > 0)
                        {
                             echo "<script>
                                            $(document).ready(function(){
                                                swal('Done!', 'Password Change Successfully!', 'success') 
                                    });
                                    </script>";
                            echo "<meta http-equiv='Refresh' content='5; URL=http://localhost/edunet/user/index.php'/>";
                        }
                        else
                        {
                            echo "<script>
                                            $(document).ready(function(){
                                                sweetAlert('Oops...', 'Something went wrong!', 'error');    
                                    });
                                    </script>";
                        }
                        
                        
              }
            
            else
            {
                 echo "<script>
                        $(document).ready(function(){
                            
                            $('#repass_error').html('password not matched');
                            $('#repass_error').show();
                        });
                
                  </script>";
            }
        }
}
    
    
?>