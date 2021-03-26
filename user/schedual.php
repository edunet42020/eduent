<?php
error_reporting(0);
include_once("connection.php");
session_start();
if(!isset($_SESSION['id']))
{
  header("Location:index.php");
}
// echo "Welcome ".$_SESSION['Firstname'].$_SESSION['Middlename'];
$Userid = $_SESSION['id'];
// echo $userphoto;
?>

<?php
if(isset($_GET['course_id']))
{  $courseid = $_GET['course_id'];
    $_SESSION['courseid']=$courseid;
    $select = "select * from tblcourse where course_id=$courseid";
    $data = mysqli_query($conn,$select);
    $result = mysqli_fetch_array($data);
    $course_name = $result['course_name'];
    $course_descrition=$result['course_full_description'];
    
//    echo "<br>";
    
//    return;
    
}
$cntweek = array();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Edunet || schedule of the course</title>

    
<link href="images/favicon.ico" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
<link href="images/favicon.ico" sizes="128x128" rel="shortcut icon" />

    <!-- Bootstrap CSS -->    
     <link rel="stylesheet" href="assets/css/bootstrap.min.css"> 
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->

<!--		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css" integrity="sha384-PmY9l28YgO4JwMKbTvgaS7XNZJ30MK9FAZjjzXtlqyZCqBY6X6bXIkM++IkyinN+" crossorigin="anonymous">-->
		<!-- Fonts Awesome -->
	<link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
  <link rel="stylesheet" href="assets/css/innernav.css">

    <style>
   
    </style>
  </head>
  <body> 

    
  <?php include_once("topheadercourse.php");?>

        <div class="container shadow" style="border:1px solid #787576;width:99.9%;">
            <div class="container-fluid" style="border-bottom:2px solid #787576;margin-bottom:5px;">
<!--                <h1 class="text-capitalize" >Welcome to Matrix Education</h1>-->
                <h3 class="text-uppercase" ><?php echo $course_name;?></h3>
            </div>
            <div class="row">
                <div class="col-md-9 col-sm-9">
                    <div class="row" style="margin-left: 10px;margin-right: 10px;">
                        <h4>Schedule  For Week</h4>
                    <?php
                            
                            $select_week = "SELECT * FROM tblweek WHERE course_id=".$courseid;
                            $data = mysqli_query($conn,$select_week);
                            ?>
                            <table align="center" class="table table-condensed">
                                <tr>
                                    <th>Week Title</th>
                                    <th>Week Name</th>
                                    <th>Week Start Date</th>
                                    <th>Week End Date</th>
                                </tr>
                        <?php
                            while($week_res = mysqli_fetch_array($data))
                            {
                                $weekstartdate = date_create($week_res['start_date']);
                                $weekstartdateformate = date_format($weekstartdate,"d/m/Y");
                                
                                $weekenddate = date_create($week_res['end_date']);
                                $weekenddateformate = date_format($weekenddate,"d/m/Y");
                                
                                echo "<tr>";
                                echo "<td>".$week_res['week_title']."</td>";
                                echo "<td>".$week_res['chap_name']."</td>";
                                echo "<td>".$weekstartdateformate."</td>";
                                echo "<td>".$weekenddateformate."</td>";
                                echo "</tr>";
                            }
                        ?>
                        </table>
                        

                    </div>
                    
                    <div class="row" style="margin-left: 10px;margin-right:10px;">
                        <h4>Schedule  For Exams</h4>
                    <?php
                            
                            $select_week_exam = "SELECT * FROM tblexam as e,tblweek as w WHERE w.week_id = e.week_id AND w.course_id=".$courseid;
//                            echo $select_week_exam;
//                        return;
                            $data = mysqli_query($conn,$select_week_exam);
                            ?>
                            <table align="center" class="table table-condensed">
                                <tr>
                                    <th>Exam Title</th>
                                    <th>Exam Name</th>
                                    <th>Week Name</th>
                                </tr>
                        <?php
                            while($week_res = mysqli_fetch_array($data))
                            {
                                echo "<tr>";
                                echo "<td>".$week_res['exam_no']."</td>";
                                echo "<td>".$week_res['exam_name']."</td>";
                                echo "<td>".$week_res['chap_name']."</td>";
                                echo "</tr>";
                            }
                        ?>
                        </table>
                        

                    </div>
                    
                </div>
              <div class="col-md-3 col-sm-3">
                <div class="jumbotron" style="padding-left:10px;padding-top:10px;">
                <div style="padding-bottom:10px;" class="text-success">Some Important Dates:</div>
                  <div>
                  <?php  echo "Today's Date is:";
                          $today = date("M d,Y");
                        echo $today;      
                  ?>
                  </div>
                  <div>
                    <?php 
                            echo "Start date:";
                              $startdate=date_create($result['course_start_date']);
                              $startdateformate=date_format($startdate,"M d,Y");
                              echo $startdateformate;
                              
                    ?>
                  </div>
                  <div>
                    <?php 
                            echo "End date:";
                            $enddate=date_create($result['course_end_date']);
                            $enddateformate=date_format($enddate,"M d,Y");
                            echo $enddateformate;          
                    ?>
                  </div>              
                </div>
                
              </div>
            </div>
            <!-- <button class="align-content-end" id="click" style="margin-left:95%;padding-bottom:2px;">Click</button> -->

    
    
    
    
    
    
    <!-- <script>
    $(document).ready(function(){
      $("button").click(function(){
          $("#jumbotron").hide();
      });

    });
    </script> -->
  <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/nivo-lightbox.min.js"></script>
    <script type="text/javascript" src="assets/js/sweetalert.min.js"></script>

  </body>
  </html>