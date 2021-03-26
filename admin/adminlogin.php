<?php
include_once("connection.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Admin Login</title>
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
						Admin Login
					</span>
					
					<div class="wrap-input100 validate-input" data-validate = "Invalid Email:xya@gmail.com">
						<input class="input100" type="text" name="username" placeholder="Enter Your Username" id="data-validate_email">
						<span class="focus-input100"></span>
						<span class="symbol-input100" >
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>
					<div>
						<span id="data-validate_error_email" style="font-size:14px;color:red;"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Password" id="data-validate_password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					<div>
						<span id="data-validate_error_password" style="font-size:14px;color:red;"></span>
					</div>
						<div class="control-group ">
            			<div id="login_successfully" class="alert alert-success"></div> 
					</div> 
					<div class="control-group ">
            			<div id="login_failed" class="alert alert-danger"></div> 
          			</div>   
					<div class="container-login100-form-btn">
						<input type="submit" name="adminlogin" value="login" class="login100-form-btn" style="cursor:pointer;">
					</div>


					<!-- <div class="text-center p-t-12">
						<span class="txt1">
							Forgot
						</span>
						<a class="txt2" href="#">
							Username / Password?
						</a>
					</div>
					 -->
				</form>
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
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>

<script>
		$(function(){
			$('#login_failed').hide();
			$('#login_successfully').hide();
			$("#data-validate_error_password").hide();
			
			var error_password = false;
			
			$("#data-validate_password").focusout(function(){
				check_password();
			});
			
			$("#data-validate_email").focusout(function(){
				check_email();
			});

			function check_email()
			{
				var pattern_email=/^\w+[\+\.w-]*@([\w-]+\.)*\w+[\w-]*\.([a-z]{2,4}|\d+)+/i;
				var email=$("#data-validate_email").val();
				// alert(email);
				// if(email!==null)
				// {	
				// 	$("#data-validate_error_email").html("Please Enter Email address");
				// 	$("#data-validate_error_email").show();
				// 	error_password = true	;
				// }
			
				if(pattern_email.test(email)==false)
				{
						$("#data-validate_error_email").html("Please Enter valid Email");
						$("#data-validate_error_email").show();
						error_password = true;
				}
				else
				{
					$("#data-validate_error_email").hide();	
				}
			}
			function check_password()
			{

				var pass_length=$("#data-validate_password").val().length;
				// alert(pass_length);
				if(pass_length < 8)
				{
					
					$("#data-validate_error_password").html("Password Must At least 8 character");
					$("#data-validate_error_password").show();
					error_password = true;
				}
				else
				{
					$("#data-validate_error_password").hide();

				}
			}
		});
	</script>	
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>

<?php 
if(isset($_POST['adminlogin']))
{
	// echo "<script>alert('hello');</script>";

	$username=$_POST['username'];
	// echo "<script>alert('$username');</script>";
	// return;
	$pwd=$_POST['password'];

	$encodepwd=base64_encode($pwd);

	// echo "<script>alert('$encodepwd');</script>";
		$query="select * from tbladmin where emailid='$username' AND password='$encodepwd'";
		//echo $query;
		$res=mysqli_query($conn,$query);
		$count=mysqli_num_rows($res);
	
	// echo "<script>alert($select);</script>";
	
	//$data=mysqli_query($con,$select);
	//$row=mysqli_num_rows($data);

	if($count>0)
	{
		// echo "<script>alert('Login Successfully..');</script>";
		echo "	<script>   
					$(document).ready(function(){
						$('#login_successfully').html('Login Successfully...');    
					$('#login_successfully').show();
					});
				</script>";
		$_SESSION['AdminUsername']=$username;
		echo "<meta http-equiv='Refresh' content='1; URL=http://localhost/edunet/admin/preview/demo1/index.php'/>";
	}
	else
	{
 		// echo "<script>alert('Invalid UserName Or Password..!!');</script>";
		 echo "	<script>   
		 $(document).ready(function(){
			 $('#login_failed').html('Invalid UserName Or Password..!!');    
		 $('#login_failed').show();
		 });
	 </script>";

	}


	// $data=sqlsrv_query($cnn,$select);

	// $result=sqlsrv_fetch_array($data);
	// $r=$result['Adminusername'];
	// $p=$result['Password'];

	// if($r==$username && $p==$encodepwd)
	// {
	// 	 echo "<script>alert('Login Successfully');</script>";
	// 	 $_SESSION['AdminUsername']=$r;
	// 	 echo "<meta http-equiv='Refresh' content='0; URL=http://localhost/onlinelearing/admin/admindashboard.php'/>";
	// }
	// else
	// {	
	// 	echo "<script>alert('Invalid Username And Password');</script>";
	// }
}
?>