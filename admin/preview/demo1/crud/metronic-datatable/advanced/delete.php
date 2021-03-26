<?php

$id=$_POST['delete_id'];

$connect = mysqli_connect("localhost", "root", "", "edunet");
echo "<script> alert('delete from tbluser where u_id=$id');</script>";
$sql="DELETE FROM `tbluser` WHERE u_id = '$id' ";
if(mysqli_query($con,$sql))
{
    echo "Successfull deletion";
}
?>