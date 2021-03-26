<?php
include_once("connection.php");
session_start();
if(!isset($_SESSION['id']))
{
	header("Location:index.php");
}
else
{
	$id=$_SESSION['id'];
}
$select="select * from tbluser where u_id=$id";
$res=mysqli_query($conn,$select);
$result=mysqli_fetch_array($res);
$photo=$result['u_photo_path'];
//echo $photo."<br>";
unlink("../admin/themes/metronic/theme/default/demo1/dist/assets/media/user/" . $photo);
$delete="delete from tbluser where u_id=$id";
//echo $delete;
mysqli_query($conn,$delete);
unset($_SESSION['id']);
echo "<meta http-equiv='Refresh' content='1; URL=http://localhost/edunet/user/index.php?das'/>";
?>