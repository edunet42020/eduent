<?php
if(isset($_GET['examid']) && isset($_GET['course_id']))
{
    $examid = $_GET['examid'];
    $courseid = $_GET['course_id'];
//    return;
    header("Location:examinstruction.php?examid=$examid&course_id=$courseid");
}
?>