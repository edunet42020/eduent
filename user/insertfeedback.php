<?php
	include("connection.php");
	$email=$_REQUEST['form_email'];
	
	$message=$_REQUEST['form_message'];
	
	$ins="insert into tblfeedback(email_id,message) values('$email','$message')";
	//echo $ins;
	mysqli_query($conn,$ins);
	header("location:page-contact.php?msgfeed='ok'");
?>