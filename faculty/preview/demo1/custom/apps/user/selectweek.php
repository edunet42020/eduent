<?php
$connect = mysqli_connect("localhost", "root", "", "edunet");
echo "<script>alert('inside');</script>";
$output='';
$sql="SELECT * FROM tblweek where course_id='".$_POST["courseid"]."' order by week_title'";
$result=mysqli_query($connect,$sql);
while($row=mysqli_fetch_array($result))
{

    $output .= ' <option value="'. $row['week_id'] .'">'.$row['week_title'].'</option>';

}
 echo $output;

?>
<?php
session_start();
$facultyid=$_SESSION['facultyid'];
$id=$_POST['courseid'];
//pagination.php  
$connect = mysqli_connect("localhost", "root", "", "edunet");
echo $id;

?>