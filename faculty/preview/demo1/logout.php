<?php
include_once("connection.php");
session_start();
if(!isset($_SESSION['facultyid']))
{
	header("Location:../../index.php");
}
unset($_SESSION['facultyid']);
echo "<meta http-equiv='Refresh' content='1; URL=http://localhost/edunet/faculty/index.php'/>";
?>