<?php
	include_once("connection.php");
  session_start();
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
<title>Edunet || page-register</title>
<!-- Favicon -->
<link href="images/favicon.ico" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
<link href="images/favicon.ico" sizes="128x128" rel="shortcut icon" />

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
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
		<div class="container">
			<div class="row">
				<div class="col-xl-6 offset-xl-3 text-center">
					<div class="breadcrumb_content">
						<h4 class="breadcrumb_title">Register</h4>
						<ol class="breadcrumb">
						    <li class="breadcrumb-item"><a href="#">Home</a></li>
						    <li class="breadcrumb-item active" aria-current="page">Register</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Our LogIn Register -->
	<section class="our-log-reg bgc-fa">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-lg-6 offset-lg-3">
					<div class="sign_up_form inner_page">
						<div class="heading">
							<h3 class="text-center">Register to start learning</h3>
							<p class="text-center">Have an account? <a class="text-thm" href="page-login.php">Login</a></p>
						</div>
						<div class="details">
							<form action="#" enctype="multipart/form-data" method="post">
								 <div class="text-center alert-success col-md-offset-4 col-md-4 col-sm-offset-4 col-sm-4" style="padding:5px;" id="signin_success"></div>
           						 <div class="text-center alert-danger col-md-offset-4 col-md-4 col-sm-offset-4 col-sm-4" style="padding:5px;" id="signin_error"></div>
								<div class="form-group">
							    	<input type="text" class="form-control" id="firstname" name="firstname" placeholder="enter your first name">
							    	<small id="firstname_error" class="text-danger"></small>
								</div>
								<div class="form-group">
							    	<input type="text" class="form-control" id="middlename" name="middlename" placeholder="enter your middle name">
							    	<small id="middlename_error" class="text-danger"></small>
								</div>
								<div class="form-group">
							    	<input type="text" class="form-control" id="lastname" name="lastname" placeholder="enter your last name">
							    	<small id="lastname_error" class="text-danger"></small>
								</div>
								<div class="form-group">
               						 <label for="">Uploade Photo:</label>
                					<input type="file" class="form-control" id="filename" placeholder="Attach File.." name="photo">
                					<small id="photo_error" class="text-danger"></small>
             					 </div>
             					 <div class="form-group">
							    	<input type="text" class="form-control" id="address" name="address" placeholder="enter your address">
							    	<small id="address_error" class="text-danger"></small>
								</div>
								 <div class="form-group">
							    	<input type="text" class="form-control" id="mobile" name="mobile" placeholder="enter your phone number">
							    	<small id="number_error" class="text-danger"></small>
								</div>
								 <div class="form-group">
							    	<input type="email" class="form-control" id="email" name="email" placeholder="enter your Email Address">
							    	<small id="email_error" class="text-danger"></small>
								</div>
								<div class="form-group">
							    	<input type="password" class="form-control" id="pass" name="pass" placeholder="enter your Password">
							    	<small id="pass_error" class="text-danger"></small>
								</div>
								<button type="submit" class="btn btn-block btn-thm2" name="btnlogin" style="border-radius: 30px;" name="btnreg">Register</button>
							</form>
						</div>
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

</body>
</html>
 <script>
    $(document).ready(function(){
        // alert("hello");
        $('#signin_success').hide();
        $('#signin_error').hide();
        // $('#firstname_error').hide();

        $('#firstname').keypress(function(){
           fname = $('#firstname').val();
          var fname_regx = /^[a-zA-Z]{1,20}$/;
          if(fname.match(fname_regx))
          {
            $('#firstname_error').hide();
          }
          else
          {
            $('#firstname_error').html("Enter Valid first Name");
            $('#firstname_error').show();  
            // $('#firstname').focus();

          }

        });

        $('#middlename').keypress(function(){
           mname = $('#middlename').val();
          var mname_regx = /^[a-zA-Z]{1,16}$/;
          if(mname.match(mname_regx))
          {
            $('#middlename_error').hide();
          }
          else
          {
            $('#middlename_error').html("Enter Valid Middle Name");
            $('#middlename_error').show();
            // $('#middlename').focus();

          }

        });

        $('#lastname').keypress(function(){
           lname = $('#lastname').val();
          var lname_regx = /^[a-zA-Z]{1,16}$/;
          if(lname.match(lname_regx))
          {
            $('#lastname_error').hide();
          }
          else
          {
            $('#lastname_error').html("Enter Valid last Name");
            $('#lastname_error').show();  
            // $('#lastname').focus();

          }

        });

        $('#mobile').keypress(function(){
          mobile = $('#mobile').val();
          var mobile_regx = /^[0-9]{10}$/;
          if(mobile.match(mobile_regx))
          {
            $('#number_error').hide();
          }
          else
          {
            $('#number_error').html("Enter Valid Number..");
            $('#number_error').show();  
            // $('#mobile').focus();

          }

        });
        
        $('#filename').keypress(function(){
          filename = $('#filename').val().length;
          // alert(mobile);
          // var mobile_regx = /^[0-9]{10}$/;
          if(filename != 0)
          {
            $('#photo_error').hide();
          }
          else
          {
            $('#photo_error').html("Invalid file format..");
            $('#photo_error').show();  
            // $('#filename').focus();

          }
        });            
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

        $('#pass').keypress(function(){
          var pass = $('#pass').val();
          // var pass_regx = ;
          if(pass.length > 8 && pass.length < 20)
          {
            $('#pass_error').hide();
          }
          else
          {
            $('#pass_error').html("password must between 8 to 20 character");
            $('#pass_error').show();  
            // $('#pass').focus();  
          }
        });
       
        
    });
    </script>
      </body>
</html>
<?php 

if(isset($_POST['btnreg']))
{
  // echo "<script>alert('Button Pressed...');</script>";
  $fname    = $_REQUEST['firstname'];
  $mname    =  $_REQUEST['middlename'];
  $lname    =  $_REQUEST['lastname'];
  $address  =  $_REQUEST['address'];
  $mobile   =  $_REQUEST['mobile'];  
  $photo    = $_FILES['photo'];
  $email    =  $_REQUEST['email'];
  $pass     =  $_REQUEST['pass'];     
   $uniquesavename=time().uniqid(rand());   
  $image_tmp_name=$_FILES['photo']['tmp_name'];
   $upload_folder_name="../admin/themes/metronic/theme/default/demo1/dist/assets/media/user/".$uniquesavename.$_FILES['photo']['name'];
  $user_img_type=$_FILES['photo']['type'];
  $photo_size = $_FILES['photo']['size'];//30720byte = 30kb =0.0293mb = 0.00003gb //2097152

   $store=$uniquesavename.$_FILES['photo']['name'];
  // echo "<script>alert('$image_tmp_name');</script>";
  // echo "<script>alert('$upload_folder_name');</script>";
  // echo "<script>alert('$user_img_type');</script>";
  if( empty($fname) || empty($mname) || empty($lname) || empty($address) || empty($mobile) || empty($photo) || empty($email) || empty($pass))
  {
    echo "<script>   
              $(document).ready(function(){
                  $('#firstname_error').html('*'); 
                  $('#middlename_error').html('*');  
                  $('#lastname_error').html('*');  
                  $('#address_error').html('*');  
                  $('#number_error').html('*');  
                  $('#photo_error').html('*');  
                  $('#email_error').html('*');  
                  $('#pass_error').html('*'); 
                // $('#all_error').show();
              });
          </script>";
  }
  else
  {
          if($user_img_type=="image/jpeg" || $user_img_type=="image/jpg" || $user_img_type=="image/png")
          {
            
                            $encode_pass = base64_encode($pass);
                            if(filter_var($email,FILTER_VALIDATE_EMAIL))
                            {
                                if(preg_match("/^[a-zA-Z]{1,16}$/",$fname))
                                {
                                    
                                    if(preg_match("/^[a-zA-Z]{1,16}$/",$mname))
                                    {
                                        
                                        if(preg_match("/^[a-zA-Z]{1,16}$/",$lname))
                                        {
                                            if(preg_match("/^[0-9]{10}$/",$mobile))
                                            {
                                               $select="select * from tbluser where u_email_id='$email'";
                                                $res=mysqli_query($conn,$select);
                                              $count=mysqli_num_rows($res);
                                             // echo $count;
                                              if($count>0)
                                              {
                                                  echo "<script>   
                                                          $(document).ready(function(){
                                                              $('#email_error').html('email already exists..');    
                                                              $('#email_error').show();
                                                          });
                                                      </script>";
                                              }
                                             else
                                             {
                                                move_uploaded_file($image_tmp_name,$upload_folder_name);
                                                $insert = "insert into tbluser values(NULL,'$fname','$mname','$lname','$store','$address', $mobile,'$email','$encode_pass','Active')";
                                                //echo $insert; 
                                                $insert_row=mysqli_query($conn,$insert);
                                                //echo $insert_row;
                                                //echo $email;
                                               
                                                //echo $select;
                                                if($insert_row > 0)
                                                {
                                                  echo "<script>   
                                                            $(document).ready(function(){
                                                                $('#signin_success').html('Sign In success Fully..');    
                                                              $('#signin_success').show();
                                                            });
                                                        </script>";
                                                    echo "<meta http-equiv='Refresh' content='1; URL=http://localhost/edunet/user/page-login.php'/>";
                                                    $fullname = $fname." ".$lname;
                                                                    require   'PHPMailer/PHPMailerAutoload.php';
  $mail =new PHPMailer();
  $mail ->isSMTP();
  $mail ->SMTPAuth = true;
  $mail ->SMTPSecure = 'ssl';
  $mail ->Host = "smtp.gmail.com";
  $mail ->Port = 465;
  $mail ->isHTML(true);
  $mail ->Username = "edunet42020@gmail.com";
  $mail ->Password = '8zwvepeyulbrinda';
  $mail ->SetFrom("edunet42020@gmail.com");
  $mail ->Subject = 'hello world';
  $mail->Subject = 'This Mail Send By edunet';
  $mail->Body    = 'you are suceess fully regestred in Edunet';
  $mail->AltBody = 'welcom to Edunet';
  $username=$email;
  $mail ->AddAddress($username, $fullname);

                if(!$mail->send()) 
                {
    //                echo 'Message could not be sent.';
                    echo "  <script>   
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

                    echo "  <script>   
                                  $(document).ready(function(){
                                    $('#login_success').html('Email Send Successfully.');    
                                  $('#login_success').show();
                                });
                            </script>";

    //                echo 'Message has been sent';
                }
                echo "<meta http-equiv='Refresh' content='1; URL=http://localhost/edunet/user/page-login.php'/>";
        } 
                                         
                                                
                                                else
                                                {
                                                  echo "<script>   
                                                            $(document).ready(function(){
                                                                $('#signin_error').html('Problem In Sign IN..');    
                                                                $('#signin_error').show();
                                                            });
                                                        </script>";
                                                    // echo "<meta http-equiv='Refresh' content='10; URL=http://localhost/onlinelearing/admin/addcourse.php'/>";
                                                }
                                             }
                                          }
                                            else
                                            {
                                                echo "<script>   
                                                      $(document).ready(function(){
                                                         $('#number_error').html('Enter Valid mobile Number); 
                                                        $('#number_error').show();
                                                      });
                                                    </script>";
                                            }
                                        }
                                        else
                                        {
                                            echo "<script>   
                                                      $(document).ready(function(){
                                                         $('#lastname_error').html('Enter Valid Last Name'); 
                                                        $('#lastname_error').show();
                                                      });
                                                    </script>";
                                        }
                                    }
                                    else
                                    {
                                        
                                        echo "<script>   
                                          $(document).ready(function(){
                                             $('#middlename_error').html('Enter Valid Middle Name'); 
                                            $('#middlename_error').show();
                                          });
                                      </script>";
                                    }
                                }
                                else
                                {
                                    echo "<script>   
                                      $(document).ready(function(){
                                         $('#firstname_error').html('Enter Valid First Name'); 
                                        $('#firstname_error').show();
                                      });
                                  </script>";
                                     
                  
                                }
                            }
                            else
                            {
                                echo "<script>   
                                      $(document).ready(function(){
                                          $('#email_error').html('Please Enter Valid Email');     
                                        $('#email_error').show();
                                      });
                                  </script>";
                                
                            }
                          }else
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