<?php
	include_once("connection.php");
	session_start();
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
<title>Edunet || forget password</title>
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
	<!-- Our LogIn Register -->
	<section class="our-log bgc-fa">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-lg-6 offset-lg-3">
					<div class="login_form inner_page">
						<form action="" method="post">
							<div class="heading">
								<h3 class="text-center">forget password</h3>
							</div>
							 <div class="form-group">
							 	  <div class="alert alert-danger" id="login_failed"></div>
            <div class="alert alert-success" id="login_success"></div>
							 	 <label for=""><i class="flaticon-user"></i> UserName:</label>
						    	<input type="email" class="form-control" placeholder="Enter Your Email" id="email" name="userid">
						    	 <small id="email_error" class="text-danger"></small>
							</div>
							<button type="submit" class="btn btn-log btn-block btn-thm2" name="btnforget">send Email</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Our Footer -->
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
<script>
    $(document).ready(function(){
        // alert("hello");  
         $('#login_failed').hide();
        $('#login_success').hide();
          
        $('#email').keypress(function(){
          var email = $('#email').val();
          // var email_regx = /^\w+[\+\.w-]*@([\w-]+\.)*\w+[\w-]*\.([a-z]{2,4}|\d+)+/i;
          var email_regx =  /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
          if(email.match(email_regx))
          {
            $('#email_error').hide();
          }
          else
          {
            $('#email_error').html("Enter Valid Email.");
            $('#email_error').show();  
            // $('#email').focus();
          }
        });        
    });
    </script>
</body>

</html>
<?php
if(isset($_POST['btnforget']))
{
  // echo "<script>alert('hello');</script>";
    $username  = $_POST['userid'];
//    return;
    
    if(empty($username))
    {
        echo "<script>
             $(document).ready(function(){
              $('#username_error').html('*');
//              $('#pass_error').html('*');
              $('#username_error').show();
//              $('#pass_error').show();
             }); 
            </script>";
    }
    else
    {
        $select = "select * from tbluser where u_email_id='$username'";
  //    echo $select;
        $data = mysqli_query($conn,$select);
//        print_r($data);
//        return;
        $row = mysqli_num_rows($data);
//        echo $row;
//        return;
        $select_res = mysqli_fetch_array($data);
        
        $fullname = ucwords($select_res['u_first_name'])." ".ucwords($select_res['u_middle_name']);
//        echo "<pre>";
//        echo $fullname;
//        print_r($select_res);
//        return;
        $_SESSION['fullname'] = $fullname;
        $_SESSION['userid']=$select_res['u_id'];
        
        if($row > 0)
        {
                require   'PHPMailer/PHPMailerAutoload.php';
	$mail =new PHPMailer();
	$mail ->isSMTP();
	$mail ->SMTPAuth = true;
	$mail ->SMTPSecure = 'ssl';
	$mail ->Host = "smtp.gmail.com";
	$mail ->Port = 465;
	$mail ->isHTML(true);
	$mail ->Username = "edunetbrm@gmail.com";
	$mail ->Password = '8zwvepeyul';
	$mail ->SetFrom("edunetbrm@gmail.com");
	$mail ->Subject = 'hello world';
	$mail->Subject = 'This Mail Send By edunet';
	$mail->Body    = '<a href="http://localhost/edunet/user/changeforgetpass.php">Click Here To Change Your Password..</a>';
	$mail->AltBody = 'Please Click Upper given link to change Youe Password!!';

	$mail ->AddAddress($username, $fullname);

                if(!$mail->send()) 
                {
    //                echo 'Message could not be sent.';
                    echo "	<script>   
                            $(document).ready(function(){
                              $('#login_failed').html('Email Could not Be Sent. Please Connect To Internet.');    
                              $('#login_failed').show();
                            });
                        </script>";
    //                echo 'Mailer Error: ' . $mail->ErrorInfo;
                     unset($_SESSION['fullname']);
                     unset($_SESSION['userid']);
                } 
                else 
                {

                    echo "	<script>   
                                  $(document).ready(function(){
                                    $('#login_success').html('Email Send Successfully.');    
                                  $('#login_success').show();
                                });
                            </script>";
    //                echo 'Message has been sent';
                }
        }
        else
        {
             echo "	<script>   
                        $(document).ready(function(){
                          $('#login_failed').html('Invalid Email Address!!');    
                          $('#login_failed').show();
                        });
                    </script>";
        }
    }
    
}
?>