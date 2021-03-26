<?php
include_once("connection.php");
session_start();
if(isset($_REQUEST['btnlogin']))
{

	$id=$_REQUEST['userid'];
	$pwd=$_REQUEST['userpwd'];
		$encodepwd=base64_encode($pwd);
		$select="select * from tbluser where u_email_id='$id' and u_password='$encodepwd'";
			$res=mysqli_query($conn,$select);
			$count=mysqli_num_rows($res);
			$result=mysqli_fetch_array($res);
			
			if ($count>0)
			{
				$uid=$result[u_id];
				$status=$result['u_status'];
				//echo $status;
				if($status=='Active')
				{
					$_SESSION['id']=$uid;
					header("location:index.php?userid1=$uid");	
				}
				else
				{
					header("location:index.php?usin");
				}
				
			}
			else
			{
				header("location:index.php?btnlogin");
			}
}
?>