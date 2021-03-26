<?php
if(isset($_GET['videoid']) && isset($_GET['course_id']))
{
    $videoid = $_GET['videoid'];
    
//    $_SESSION['videoid'] = $videoid;
    $courseid = $_GET['course_id'];
    header("Location:innercourse.php?videoid=$videoid&course_id=$courseid");
}
?>