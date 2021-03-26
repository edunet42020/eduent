<?php
include_once("connection.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Edunet</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
  <!--<link rel="icon" type="image/png" href="images/icons/fav1.png"/>-->
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="css/util.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <!--===============================================================================================-->
  <link href="images/favicon.ico" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
<link href="images/favicon.ico" sizes="128x128" rel="shortcut icon" />

</head>
<body>
  
  <div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100" style="padding-top:60px;">
        <div class="login100-pic js-tilt" data-tilt>
          <img src="images/img-01.png" alt="IMG">
        </div>
        <form class="login100-form validate-form" method="post" action="">
          
          <span class="login100-form-title" style="padding-bottom:20px;" >
            Forget password
          </span>

          <div class="wrap-input100 validate-input" data-validate = "Invalid Email:xya@gmail.com">
            <input class="input100" type="email" name="userid" placeholder="Enter Your Email" id="email">
            <span class="focus-input100"></span>
            <span class="symbol-input100" >
              <i class="fa fa-envelope" aria-hidden="true"></i>
            </span>
          </div>
         
           <div class="alert alert-danger" id="login_failed"></div>
            <div class="alert alert-success" id="login_success"></div>
           
           <div class="container-login100-form-btn">
            <input type="submit" name="btnforget" value="send Email" class="login100-form-btn" style="cursor:pointer;">
          </div>
            </form>
          <!-- <div class="text-center p-t-12">
            <span class="txt1">
              Forgot
            </span>
            <a class="txt2" href="#">
              Username / Password?
            </a>
          </div>
           -->
         </div>   
      </div>
  
  </div>
  
  

  
	<!-- Our LogIn Register -->
							
						
						

	<!-- Our Footer -->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>

<!--===============================================================================================-->
  <script src="vendor/bootstrap/js/popper.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/tilt/tilt.jquery.min.js"></script>
  <script >
    $('.js-tilt').tilt({
      scale: 1.1
    })
  </script>
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
<script src="js/main.js"></script>
  <script type="text/javascript" src="js/sweetalert.min.js"></script>

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
        $select = "select * from tblfaculty where f_emailid='$username'";
     // echo $select;
        $data = mysqli_query($conn,$select);
//        print_r($data);
//        return;
        $row = mysqli_num_rows($data);
//        echo $row;
//        return;
        $select_res = mysqli_fetch_array($data);
        
        $fullname = ucwords($select_res['f_name']);
//        echo "<pre>";
//        echo $fullname;
//        print_r($select_res);
//        return;
        $_SESSION['fullname'] = $fullname;
        $_SESSION['userid']=$select_res['f_id'];
        
        if($row > 0)
        {
                require   '../user/PHPMailer/PHPMailerAutoload.php';
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
  $pwd = rand();
  //echo $pwd;
	$mail->Body    = 'it is your new password please go and login:'.$pwd;
	$mail->AltBody = 'Please Click Upper given link to change Your Password!!';

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
                            $encodepwd=base64_encode($pwd);
                          $update="update tblfaculty set f_pwd='$encodepwd' where f_emailid='$username'";
                         // echo $update;
                          mysqli_query($conn,$update);
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