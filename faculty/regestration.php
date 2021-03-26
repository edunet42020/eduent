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
	<link href="images/favicon.ico" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
<link href="images/favicon.ico" sizes="128x128" rel="shortcut icon" />
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
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100" style="padding-top:60px;">
				<div class="login100-pic js-tilt" style="padding-top:100px;" data-tilt>
					<img src="images/img-01.png" alt="IMG">
				</div>
						<div class="sign_up_form inner_page">
						<div class="heading">
							<h3 class="text-center">Register to start explain</h3>
							<p class="text-center">Have an account? <a class="text-thm" href="index.php">Login</a></p>
						</div>
							<form action="#" enctype="multipart/form-data" method="post">
								 <div class="text-center alert-success col-md-offset-4 col-md-4 col-sm-offset-4 col-sm-4" style="padding:5px;" id="signin_success"></div>
           						 <div class="text-center alert-danger col-md-offset-4 col-md-4 col-sm-offset-4 col-sm-4" style="padding:5px;" id="signin_error"></div>
								<div class="form-group">
							    	<input type="text" class="form-control wrap-input100 validate-input" id="firstname" name="firstname" placeholder="enter your Full name" onclick="facname()">
							    	<small id="firstname_error" class="text-danger"></small>
								</div>
								<div class="form-group">
							    	<input type="email" class="form-control wrap-input100 validate-input" id="email" name="email" placeholder="enter your Email address">
							    	<small id="email_error" class="text-danger"></small>
								</div>
								<div class="form-group">
							    	<input type="text" class="form-control wrap-input100 validate-input" id="mobile" name="mobile" placeholder="enter your phone number">
							    	<small id="number_error" class="text-danger"></small>
								</div> 
								<div class="form-group">
							    	<textarea class="form-control wrap-input100 validate-input" id="description" name="description" placeholder="write something about you" rows="3" onclick="desc()" cols=25></textarea>
							    	<small id="description_error" class="text-danger"></small>
								</div>
								<div class="form-group">
               						 <label for="">Uploade Photo:</label>
                					<input type="file" class="form-control wrap-input100 validate-input" id="filename" placeholder="Attach File.." name="photo">
                					<small id="photo_error" class="text-danger"></small>
             					 </div>
								<div class="form-group">
							    	<input type="text" class="form-control" id="qualification" name="qualification" placeholder="enter your qualification" onclick="comma()">
							    	<small id="qualification_error" class="text-danger"></small>
								</div>
								<div class="form-group">
							    	<input type="password" class="form-control wrap-input100 validate-input" id="pass" name="pass" placeholder="enter your Password">
							    	<small id="pass_error" class="text-danger"></small>
								</div>
								<button type="submit" class="login100-form-btn" style="border-radius:20px;" name="btnreg">Register</button>
							</form>
					</div>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>

<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script type="text/javascript">
		function comma()
		{
			alert("values must be seprated By comma, Just like Bca,Mca");
		}
		function desc()
		{
			alert("write something about you , on the basis of that criteria we will provide you course to teach [ex. \"I am expert in coding\"]");
		}
		function facname()
		{
			alert("Write your firstname and last name[ex. \"Brinda Chanchad\"]");
		}
	</script>
 <script>
    $(document).ready(function(){
        // alert("hello");
        $('#signin_success').hide();
        $('#signin_error').hide();
        // $('#firstname_error').hide();

        $('#firstname').keypress(function(){
           fname = $('#firstname').val();
          var fname_regx = /^[a-zA-Z ]*$/;
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
        $('#description').keypress(function(){
           mname = $('#description').val();
          var mname_regx = /^[a-zA-Z0-9 .]{3,160}$/;
          if(mname.match(mname_regx))
          {
            $('#description_error').hide();
          }
          else
          {
            $('#description_error').html("Enter Valid description");
            $('#description_error').show();
            // $('#middlename').focus();

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
        $('#qualification').keypress(function(){
           lname = $('#qualification').val();
          var lname_regx = /^[a-zA-Z, ]{3,16}$/;
          if(lname.match(lname_regx))
          {
            $('#qualification_error').hide();
          }
          else
          {
            $('#qualification_error').html("Enter qualification");
            $('#qualification_error').show();  
            // $('#qualification').focus();

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
  $fname    = $_POST['firstname'];
  //echo $fname."<br>";
  $email    =  $_REQUEST['email'];
  //echo $email."<br>";
  $mobile   =  $_REQUEST['mobile']; 
  //echo $mobile."<br>";
  $description  =  $_REQUEST['description']; 
  //echo $description."<br>";
  $qualification =  $_REQUEST['qualification'];
  //echo $qualification."<br>";
  $pass     =  $_REQUEST['pass'];  
  //echo $pass."<br>";  
  $photo    = $_FILES['photo'];
 //print_r($photo);
   $uniquesavename=time().uniqid(rand());   
  $image_tmp_name=$_FILES['photo']['tmp_name'];
  $upload_folder_name="../admin/themes/metronic/theme/default/demo1/dist/assets/media/faculty/".$uniquesavename.$_FILES['photo']['name'];
  $user_img_type=$_FILES['photo']['type'];
  //echo $user_img_type;
  $photo_size = $_FILES['photo']['size'];//30720byte = 30kb =0.0293mb = 0.00003gb //2097152
   $store=$uniquesavename.$_FILES['photo']['name'];

  //echo "<script>alert('$image_tmp_name');</script>";
  // echo "<script>alert('$upload_folder_name');</script>";
  // echo "<script>alert('$user_img_type');</script>";
  	if( empty($fname) || empty($email) ||  empty($mobile) || empty($description) || empty($qualification) || empty($photo) || empty($pass))
  	{
	    echo "<script>   
	              $(document).ready(function(){
	                  $('#firstname_error').html('*'); 
	                   $('#email_error').html('*'); 
	                    $('#number_error').html('*'); 
	                    $('#description_error').html('*');    
	                  $('#qualification_error').html('*');  
	                  $('#photo_error').html('*');  
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
			    if(preg_match("/^[a-zA-Z ]{1,16}$/",$fname))
				{

				    if(preg_match("/^[a-zA-Z ,.]{3,16}$/",$qualification))
				    {
				        if(preg_match("/^[0-9]{10}$/",$mobile))
				        {
				        	
						    $select="select f_id from tblfaculty where f_emailid='$email'";
				            $res=mysqli_query($conn,$select);
				  			$count=mysqli_num_rows($res);
				  			//echo $count;
		                  	if($count>0)
		                    {
                      		    echo "<script>   
                                $(document).ready(function(){
                                $('#email_error').html(\"Email already exists\");
            					$('#email_error').show(); 
                                });
                                </script>";
				            }
						    else
						    {
						        move_uploaded_file($image_tmp_name,$upload_folder_name);
				                $insert = "insert into tblfaculty(f_name,f_emailid,f_ph_no,f_description,f_photo_Path,f_qualification,f_pwd,f_status) values('$fname','$email', $mobile,'$description','$store','$qualification','$encode_pass','De-Active')";
				                //echo $insert; 

				                $insert_row=mysqli_query($conn,$insert);
				                if($insert_row > 0)
				                {
				                    echo "<script>   
		                            $(document).ready(function(){
	                                $('#signin_success').html('Sign In success Fully..');    
	                                $('#signin_success').show();
		                            });
	                           		</script>";
	                           		$select_aid="select emailid,a_name from tbladmin limit 1";
	                           		$data_admin=mysqli_query($conn,$select_aid);
	                           		$ad=mysqli_fetch_array($data_admin);
	                           		$adminid=$ad['emailid'];
	                           		$aname=$ad['a_name'];
	                           		 $fullname = $aname;
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
										
										$mail->Subject = 'This Mail Send By edunet\'s faculty';
										$mail->Body    = 'I am currently regestred in edunet as faculty , please check my qualification and expertisation and make me active.';
										$mail->AltBody = 'welcome to Edunet';
										$username=$adminid;
										$mail ->AddAddress($username, $fullname);
										if(!$mail->send()) 
						                {
						                    echo "<script>   
						                        $(document).ready(function(){
						                        $('#signin_error').html('Email Could not Be Sent. Please Connect To Internet.');    
						                        $('#signin_error').show();
						                        });
						                    </script>";
						      
						                } 
						                else 
						                {echo "<script>
        swal('Done!','kindly wait for our admins confirmation','success');
     	</script>";

						                }
						                echo "<meta http-equiv='Refresh' content='1; URL=http://localhost/edunet/faculty/index.php?g=1'/>";                                
				                }
				                   
				                    
				                else
				                {
				                    echo "<script>   
		                            $(document).ready(function(){
	                                $('#signin_error').html('Problem In Sign IN..');    
	                                $('#signin_error').show();
		                            });
			                        </script>";
				                }
					        //}
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
		                $('#qualification_error').html('Enter Valid qualification'); 
		                $('#qualification_error').show();
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
		}
		else
		{
			echo "<script>   
         	$(document).ready(function(){
            $('#photo_error').html('Please select valid photograph');     
            $('#photo_error').show();
          	});
      		</script>";
		}  
	}
}
?>