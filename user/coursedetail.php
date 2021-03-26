<?php
  include_once("connection.php");

  session_start();
    if(!isset($_SESSION['id']))
{
   
}
else
{
    $id=$_SESSION['id'];
}
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="academy, college, coursera, courses, education, elearning, kindergarten, lms, lynda, online course, online education, school, training, udemy, university">
<meta name="description" content="Edumy - LMS Online Education Course & School HTML Template">
<meta name="CreativeLayers" content="ATFN">
<!-- css file -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
 <link rel="stylesheet" href="css/stylebutton.css">

<!-- Responsive stylesheet -->
<link rel="stylesheet" href="css/responsive.css">
<!-- Title -->
<title>Edunet || course detail</title>
<!-- Favicon -->
<link href="images/favicon.ico" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
<link href="images/favicon.ico" sizes="128x128" rel="shortcut icon" />
</head>
<body>
  <?php
  include("subheader.php");
  ?>
  <section class="inner_page_breadcrumb">
   
  </section>
 
  <?php
        $cid=$_REQUEST['course_id'];
        //echo $cid;
        $fid=$_REQUEST['teacher_id'];
        //echo $fid;
        $query="select * from tblcourse where course_id=$cid";
        //echo $query;
        $res=mysqli_query($conn,$query);
        $result=mysqli_fetch_array($res);
         $query1="select * from tblfaculty where f_id=$fid";

        //echo $query;
        $res1=mysqli_query($conn,$query1);
        $result1=mysqli_fetch_array($res1);
        $photofac=$result1['f_photo_path'];
        $photo=$result['course_photo_path'];
        $teachername=$result1['f_name'];
        $coursename=$result['course_name'];
  ?>

<section class="our-team pb40">
 <div class="container-fluid">
          <span class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8" style="border-left:1px solid; border-right:1px solid;">
                  <!-- <h1 class="text-black text-center">Course Name</h1> -->
                      <div class="text-center">
                           <a href="<?php echo "../admin/themes/metronic/theme/default/demo1/dist/assets/media/course/".$photo;?>"> <img src="<?php echo "../admin/themes/metronic/theme/default/demo1/dist/assets/media/course/".$photo;?>" alt="no image" class="img-thumbnail img-responsive" style="height:50vh;width:30vw;"></a>
                      </div>
                      <div class="text-center" style="padding:10px;"><i class="flaticon-user"></i> By <span style="text-transform: uppercase;font-weight:bold;color:#0cc3ea;"><?php echo $teachername;?></span></div>
                      <div class="text-center text-capitalize" style="font-size:28px;padding-bottom:5px;color:#000;text-transform: capitalize;"><?php echo $coursename; ?></div>

                      <hr style="padding-top:5px;">

                      <div class="row" style="padding-bottom:5px;text-align: center;">
                              <div class="col-lg-4"><?php echo "$result[course_start_date]"; ?></div>
                           
                              <div class="col-lg-4"><?php echo "$result[course_end_date]"; ?></div>
                    
                              <div class="col-lg-4"><?php echo "$result[course_status]"; ?></div>
                      </div>

                        <div class="col-md-10 col-xs-offset-1" style="margin-left: 8.33333333%;"><?php echo $result['course_description']; ?> </div>
                        <div class="col-md-10 col-xs-offset-1" style="margin-left: 8.33333333%;"><?php echo $result['course_full_description']; ?> </div>
                     

                     
                      
                      
                      <?php
                      $daa=date("Y-m-d");
                            $select_syllabus="select * from tblsyllabus where Course_id=$cid";
                            $syllabus=mysqli_query($conn,$select_syllabus);
                            $total=mysqli_num_fields($syllabus);
                            $res=mysqli_fetch_array($syllabus);
                            $i=1;
                            if(isset($res))
                            { ?>
                                <div style="margin-left :50px;padding-top:10px;font-size:30px;color:#000;">Syllabus</div>
                         <?php    while(($total-3) >= 0)
                            {
                              if($i==($res[$i]==""))break;
                              echo "<div class='row text-center' style='padding-top:10px;'>";      
                                      echo "<div class='col-md-4  col-sm-4 text-right'>Chapter $i:</div>";                 
                                      echo "<div class='col-md-8 col-sm-8 text-left text-capitalize'>$res[$i]</div>";                 
                              echo "</div>";      
                                $i++;
                                $total--;
                            }
                          }
                            
                      ?>
                      <hr>
                      <div class="row text-center" style="padding-left:50px;padding-top:10px;">
                        <div class="col-md-4">
                          <a href="<?php echo "../admin/themes/metronic/theme/default/demo1/dist/assets/media/faculty/".$photofac;?>">
                            <img src="<?php echo "../admin/themes/metronic/theme/default/demo1/dist/assets/media/faculty/".$photofac;?>" alt="Image Not Found" class="img-thumbnail" style="height:auto;width:10vw;">
                          </a>
                        </div>
                        <div class="col-md-8">
                          <?php echo "$result1[f_description]";?>
                        
                        </div>
                      </div>
                      <div class="text-center" style="padding-top:10px;">
                          <?php
                      if(isset($_SESSION['id']))
                      {
                          $id=$_SESSION['id'];
                        $course_id=$result['course_id'];
                          $status=$result['course_status'];
                        $select_course="select * from tblusercourse where user_id=$id and course_id=$course_id";
              $res111=mysqli_query($conn,$select_course);
              $count_course=mysqli_num_rows($res111);
              if($count_course>0)
              { ?>
                <button class="btn btn-danger btnred btntransparent">Already Enrolled</button>
              <?php 
              }
              else if($result['course_start_date']<=$daa)
              { ?>
                  <button class="btn btn-danger btnred btntransparent">Enrollment closed</button>
              <?php } 
              else
              {             
                          if($status == "Active")
                            {
                                $select_question = mysqli_query($conn,"select * from tblquestionmcq where course_id=$course_id");
                                $count = mysqli_num_rows($select_question);
                                $select_video=mysqli_query($conn,"select * from tblvideo where v_course_id=$course_id");
                                $count_video=mysqli_num_rows($select_video);
                                if($count == 0 || $count_video == 0)
                                {                               ?>
                                        <button class="btn btn-danger btnred btntransparent">Under Construction</button>
                              <?php
                                }
                                 else if($result['course_start_date']<=$daa)
              { ?>
                  <button class="btn btn-danger btnred btntransparent">Enrollment closed</button>
              <?php }
                                else
                                {
                              ?>
                                  <a href="enrollcourse.php?cid=<?php echo "$result[course_id]";?>">
                                    <button class="btn btn-success btngreen btntransparent">Enroll now</button>
                                  </a>
                                  
                              <?php
                              } ?>
                                
                       
                      
                      <?php
                          }
                        }                      
                   }
                     else
                     {
                        
                        $course_id=$result['course_id'];
                        $status=$result['course_status'];
                          if($status == "Active")
                          {
                              $select_question = mysqli_query($conn,"select * from tblquestionmcq where course_id=$course_id");
                              $count = mysqli_num_rows($select_question);
                              $select_video=mysqli_query($conn,"select * from tblvideo where v_course_id=$course_id");
                              $count_video=mysqli_num_rows($select_video);
                              if($count == 0 || $count_video == 0)
                              {
                              ?>
                                      <button class="btn btn-danger btnred btntransparent">Under Construction</button>
                              <?php
                              }
                               else if($result['course_start_date']<=$daa)
              { ?>
                  <button class="btn btn-danger btnred btntransparent">Enrollment closed</button>
              <?php }
                              else
                              {
                              ?>
                                 
                                  <a href="enrollcourse.php?cid=<?php echo "$result[course_id]";?>">
                                  <button class="btn btn-success btngreen btntransparent">Enroll now</button>

                                  </a>

                            <?php
                            } ?>
                              
             
                    
                    <?php
                        }                      

    
                      }?>
                   
                      </div>
                </div>
                <div class="col-md-2"></div>
          </span>

    </div>    
</section>
<?php
  include_once("footer.php");
?>

<!-- Wrapper End -->
<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script type="text/javascript" src="js/jquery-3.3.1.js"></script>
<script type="text/javascript" src="js/jquery-migrate-3.0.0.min.js"></script>
<script type="text/javascript" src="js/popper.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.mmenu.all.js"></script>
<script type="text/javascript" src="js/ace-responsive-menu.js"></script>
<script type="text/javascript" src="js/bootstrap-select.min.js"></script>
<script type="text/javascript" src="js/isotop.js"></script>
<script type="text/javascript" src="js/snackbar.min.js"></script>
<script type="text/javascript" src="js/simplebar.js"></script>
<script type="text/javascript" src="js/parallax.js"></script>
<script type="text/javascript" src="js/scrollto.js"></script>
<script type="text/javascript" src="js/jquery-scrolltofixed-min.js"></script>
<script type="text/javascript" src="js/jquery.counterup.js"></script>
<script type="text/javascript" src="js/wow.min.js"></script>
<script type="text/javascript" src="js/progressbar.js"></script>
<script type="text/javascript" src="js/slider.js"></script>
<script type="text/javascript" src="js/timepicker.js"></script>
<!-- Custom script for all pages --> 
<script type="text/javascript" src="js/script.js"></script>
</body>


</html>