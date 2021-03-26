<?php
include_once("connection.php");
session_start();
if(!isset($_SESSION['facultyid']))
{
	header("Location:login.php");
}
?>
<?php
	echo "welcome";
?>