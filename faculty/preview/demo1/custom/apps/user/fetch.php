<?php
$connect = mysqli_connect("localhost", "root", "", "edunet");
$cid=$_GET['id'];

$sql = "SELECT * FROM tblweek
         WHERE course_id=$cid"; 
   $result = mysqli_query($connect,$sql);
   ?>
    <?php
    if(mysqli_num_rows($result)==0)
    {
        echo "<option value='0'>No Week Available,please provide week</option>";
    }
    while($row=mysqli_fetch_array($result))
    {
        //echo "<script>alert('$row[week_title]');</script>";
     echo "<option value=". $row['week_id'] .">". $row['week_title'] ."</option>";
    }
   
?>
