<?php
include_once("connection.php");
session_start();
if(!isset($_SESSION['AdminUsername']))
{
	header("Location:../../adminlogin.php");
}
unset($_SESSION['AdminUsername']);
echo "<meta http-equiv='Refresh' content='1; URL=http://localhost/edunet/admin/adminlogin.php'/>";
?>