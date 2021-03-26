<?php
include_once("connection.php");
session_start();
if(!isset($_SESSION['id']))
{
	header("Location:page-login.php");
}

$Userid = $_SESSION['id'];

?>

<?php
if(isset($_GET['course_id']))
{
    $courseid = $_GET['course_id'];
    $_SESSION['courseid']=$courseid;
    $select = "select * from tblcourse where course_id=$courseid";
    $data = mysqli_query($conn,$select);
    $result = mysqli_fetch_array($data);
    $course_name = $result['course_name'];
    $course_descrition=$result['course_full_description'];
    $fid=$result['course_t_id'];

}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Edunet || Course dashboard</title>

   
<link href="images/favicon.ico" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
<link href="images/favicon.ico" sizes="128x128" rel="shortcut icon" />
   
     <link rel="stylesheet" href="assets/css/bootstrap.min.css"> 

	<link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
  <link rel="stylesheet" href="assets/css/innernav.css">

    <style>
    .certificate
    {
        margin: 5px;
        color:#fff;
        background-color: rgba(255,143,57,1.00);
        border:none;
        box-sizing: border-box;
        border-radius: 10px;
        -webkit-box-shadow: 1px 1px 10px 0px rgba(255,143,57,1.00);
        -moz-box-shadow: 1px 1px 10px 0px rgba(255,143,57,1.00);
         box-shadow: 1px 1px 10px 0px rgba(255,143,57,1.00);
        transition: .5s;
    }
    .certificate:hover
    {
        margin: 5px;
        color:#fff;
        background-color: rgba(81,64,148,1);
        border:none;
        box-sizing: border-box;
        border-radius: 10px;
        -webkit-box-shadow: 1px 1px 10px 0px rgba(81,64,148,1);
        -moz-box-shadow: 1px 1px 10px 0px rgba(81,64,148,1);
         box-shadow: 1px 1px 10px 0px rgba(81,64,148,1);
        transform: scale(1.1);
        transition: .5s;
        cursor: pointer;
    }
    </style>
  </head>
  <body> 

    
  <?php include_once("topheadercourse.php");?>

    
     
  
        <div class="container shadow" style="border:1px solid #787576;width:99.9%;">
            <div class="container-fluid" style="border-bottom:2px solid #787576;margin-bottom:5px;">
                <h1 class="text-capitalize" >Welcome to Edunet</h1>
                <h5 class="text-uppercase" ><?php echo $course_name;?></h5>
            </div>
            <div class="row">
              <div class="col-md-9 col-sm-9">
                  <div class="jumbotron" style="padding-top:5px;padding-left:10px;" class="text-justify" id="jumbotron">
                  <p>About course</p> 
                    <div class="container text-black text-wrap" style="padding-left:50px;">
                    This course, designed weeks wise and in each week you will learn concept through <b> video, reading material, graded/ungraded assessments </b> and improve your knowledge about this course.
                    </div>
                    <div class="container" style="margin-top:20px;" class="text-justify">
                          <big><b>Standard guidelines:</b></big>
                          <div style="margin-left:20px;">1.Click on <b><?php echo $course_name;?> videos</b> tab to get started with the course Introduction module.</div>
                          <div style="margin-left:20px;">2.Click on the <b>Progress</b> tab to show your progress.</div>
                          <div style="margin-left:20px;">3.Click on the <b>Schedule</b> tab to show your schedule.</div>
                    </div>
                    <div class="container" style="margin-top:20px;">
                        <big><b>Important Notes:</b></big>
                        <div style="margin-left:20px;">1.Complete given task in giving time otherwise you can't do that task after completing time.</div>
                        <div style="margin-left:20px;">2.There is also available demo question regarding to your course, please try to solve it. It cannot affect on your score.</div>
                        <div style="margin-left:20px;">3.What ever date and time provide during course which is consider as IST[Indian Standard Time].</div>
                        <div style="margin-left:20px;">4.Before downloading certificate, please visit progress tab first and then download the certificate.</div>
                        <div style="margin-left:20px;">5.Please visit extra video link that might help you to make your future bright.</div>
                    </div>
                    
                    <div class="container" style="margin-top:20px;">
                        <big><b>Course Description</b></big>
                        <div class="row">
                          <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                          
                          <div style="margin-left:20px;" class="text-justify"><?php echo $course_descrition;?></div>
                          </div>
                          <div class="col-md-2"></div>
                          <div class="col-md-2"></div>
                        </div>
                    </div>
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
                <div class="alert alert-success">
                    <form class="form-container" method="post" action="">
                      <input type="hidden" name="u_id" value="<?php echo $Userid; ?>">
                       <input type="hidden" name="f_id" value="<?php echo $fid; ?>">    
                      Enter Your Email:
                      <div class="form-group">
                          <input type="email" class="form-control" placeholder="Enter Your Email" id="email" name="email" required/>
                      </div>
                        Write Your Review:    
                      <div class="form-group">
                          <textarea class="form-control" placeholder="Write Your Review" id="review" name="review" required></textarea>
                      </div>
                      <input type="submit" class="btn btn-block certificate" value="Submit" name="feedback">
                    </form>
                </div>
              </div>
            </div>
    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
  	<script type="text/javascript" src="assets/js/nivo-lightbox.min.js"></script>
  	<script type="text/javascript" src="assets/js/sweetalert.min.js"></script>

  </body>
  </html>
<?php
if(isset($_POST['feedback']))
{
    $email=$_REQUEST['email'];
    $uid=$_REQUEST['u_id'];
    $fid=$_REQUEST['f_id'];
  $message=$_REQUEST['review'];
  
  $ins="insert into tblmessage(user_id,f_id,email_id,message) values($uid,$fid,'$email','$message')";
  //echo $ins;
  $row=mysqli_query($conn,$ins);
    
    
    if($row > 0)
    {
        echo "<script>
                swal('Done!','Thank You For Your FeedBack..countinously check your mail for reply of our faculty','success');
              </script>";

              echo "<meta http-equiv='Refresh' content='1; URL=http://localhost/edunet/user/f.php?c_id=$courseid'/>";
    }
    else
    {
        
        echo "<script>
                swal('Opps!','Try Again','error');
              </script>";
    }
}
?>