<?php
$connect = mysqli_connect("localhost", "root", "", "edunet");
$cid=$_GET['id'];

$sql = "SELECT * FROM tblexam
         WHERE course_id=$cid"; 
   $result = mysqli_query($connect,$sql);
   ?>
    <?php
    if(mysqli_num_rows($result)==0)
    {
        echo "<option value='0'>No exam Available,please provide exam</option>";
    }
    while($row=mysqli_fetch_array($result))
    {
       // echo "<script>alert($row[exam_title]);</script>";
     echo "<option value=". $row['exam_id'] .">". $row['exam_name'] ."</option>";

}
?>