<?php
error_reporting(0);
include_once("connection.php");
session_start();
if(!isset($_SESSION['id']))
{
	header("Location:page-login.php");
}
// echo "Welcome ".$_SESSION['Firstname'].$_SESSION['Middlename'];

$Userid = $_SESSION['id'];
// echo $userphoto;
$que_id=array();
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
    
    
   $date12=date("Y-m-d");
     $select_week_id="select week_id from tblweek where start_date <= '$date12' and end_date >= '$date12' and course_id = $courseid";
                       // echo $select_week_id;
                        $week_data=mysqli_query($conn,$select_week_id);
                        $week_id=mysqli_fetch_array($week_data);
                        $weekid=$week_id['week_id'];
    $select_first = "select * from tblvideo AS v,tblweek AS w where w.week_id = v.v_week_id and  v.v_course_id=$courseid and v.v_week_id=$weekid Limit 0,1";
   // echo $select_first;
    
    $select_first_data = mysqli_query($conn,$select_first);
    $select_first_data_ans = mysqli_fetch_array($select_first_data);
    $first_week_title = $select_first_data_ans['week_title'];
    $first_week_name = $select_first_data_ans['week_title'];
    $first_video_name = $select_first_data_ans['v_name'];
    $first_videoid = $select_first_data_ans['v_id'];
    $first_video_path  =$select_first_data_ans['v_path'];
    //echo $first_video_path;
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Edunet || Exam instruction</title>

    
<link href="images/favicon.ico" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
<link href="images/favicon.ico" sizes="128x128" rel="shortcut icon" />

    <!-- Bootstrap CSS -->    
     <link rel="stylesheet" href="assets/css/bootstrap.min.css"> 
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->

<!--		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css" integrity="sha384-PmY9l28YgO4JwMKbTvgaS7XNZJ30MK9FAZjjzXtlqyZCqBY6X6bXIkM++IkyinN+" crossorigin="anonymous">-->
		<!-- Fonts Awesome -->
	<link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/solid.css" integrity="sha384-r/k8YTFqmlOaqRkZuSiE9trsrDXkh07mRaoGBMoDcmA58OHILZPsk29i2BsFng1B" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/regular.css" integrity="sha384-IG162Tfx2WTn//TRUi9ahZHsz47lNKzYOp0b6Vv8qltVlPkub2yj9TVwzNck6GEF" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/brands.css" integrity="sha384-BKw0P+CQz9xmby+uplDwp82Py8x1xtYPK3ORn/ZSoe6Dk3ETP59WCDnX+fI1XCKK" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/fontawesome.css" integrity="sha384-4aon80D8rXCGx9ayDt85LbyUHeMWd3UiBaWliBlJ53yzm9hqN21A+o1pqoyK04h+" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/innernav.css">

    <style>
   *{
		margin: 0px;
		padding: 0px;
	}
	nav
	{
    /* padding-top:0px; */
		height: auto;
		font-family: 'Arial';
  	}
	.item label
	{
		display: block;
		padding:5px;
		background-color: #434343;
		font-size:15px;
		cursor: pointer;
		color:#fff;
    border-bottom: solid 2px #aaa;
    border-radius:5px;
	}
	.item label:hover
	{
    background-color: #d2673a;
    padding-left:20px;
    transition:.5s;
	}
	.item ul
	{
    width:100%;
		list-style: none;
		overflow: hidden;
		max-height: 0;
    transition: all .5s linear;
	}
	.item ul li a
	{
    width:100%;
    height:20%;
    padding:5px;
		display: block;
    text-decoration: none;
    text-align:left;
		background-color: #fafafa;
		color:#333;
    transition: all .5s linear;
    border-radius:5px;    
	}
	.item ul li a:hover
	{
    background-color: #9CF;
    padding-left:20px;
    transition:.5s;
    border-bottom: solid 2px #000;
    cursor: pointer;
    /* border:30px; */

	}
	.item input:checked ~ ul
	{
		height: auto;
		max-height:500px;
    transform: all;
    /* transition:.10s; */
	}
	.item input
	{
		display: none;
  }
  .row .link
  {
    text-decoration:none;
  }
    </style>
  </head>
  <body> 

    
  <?php include_once("topheadercourse.php");?>

     

        <div class="container shadow" style="border:1px solid #787576;width:99.9%;margin-top:5px;">
            <div class="container-fluid" style="margin-bottom:5px;padding-top:10px;">
             <div class="row">
                <div class="col-md-3" style="border-right:1px solid #787576;">
                <nav>
                    
                    
                    
                    
                    
<!--          -------------------  Stating dynamic week -----------------------          -->
                    
                           
                    <?php
                       $video_link = "select * from tblvideo as v, tblweek as w where v.v_week_id = w.week_id AND w.course_id = v.v_course_id and w.course_id = $courseid and v_week_id=$weekid";
//                       echo $video_link;
//                    return;
                        $video_data = mysqli_query($conn,$video_link);
//                        $video_res = mysqli_fetch_array($video_data);
//                        $week = 1;
//                    $video_res = array();
                        echo "<div class='item'>";
                        echo "<input type='checkbox' id='check'>";
                        echo  "<label for='check'>videos:</label>";
//                          $select_exam = "SELECT COUNT(examid) as totalexam,examno,examname FROM exammst WHERE week_id=".$video_res['week_id'];
//                                
//                            echo $select_exam;
//                                    $fetch_exam = mysqli_query($con,$select_exam);
//                                    $fetch_exam_data = mysqli_fetch_array($fetch_exam);
//                            echo "<pre>";
//                            print_r($fetch_exam_data);
//                          return;          
//                        $fetch_exam_data=array()
                        while($video_res = mysqli_fetch_array($video_data))
                        {
//                             echo "<div class='item'>";
//                             echo "    <input type='checkbox' id='check$week'>";
//                             echo  "<label for='check1'>week $week:</label>";
                         "current date:".$var = Date("Y-m-d")."<br>";
//                 
                            
                         "each week start date:".$eachweekstartdate = $video_res['start_date']."<br>";
                            
                         "each week end date:".$eachweekenddate = $video_res['end_date']."<br>";
                         //echo $var;
//                            return;
                        // echo   $eachweekstartdate;
                             if( ($eachweekstartdate <= $var))// && ( $var <= $eachweekenddate) )
                             {
//                                 echo "display week wise video<br>";
                                   $count_video_per_week = "select COUNT(v.v_week_id) as totalvideo FROM tblweek as w,tblvideo as v where w.week_id = v.v_week_id AND v.v_week_id=$video_res[week_id]";
                                   //echo $count_video_per_week;
//                                    return;
                                $totalvideo = mysqli_query($conn,$count_video_per_week);
                                 $countvideo = mysqli_fetch_array($totalvideo);
//                                 echo "<pre>";
//                                 echo print_r($countvideo);
//                                 
                                 // echo $countvideo;
                                    
//                                    echo "Hii niku";
//                                    print_r($fetch_exam_data);
//                                 return;
                                 echo  "<ul>";
//                                 echo "hello";
                                 while($countvideo['totalvideo'] > 0 )
                                 {
                                     
//                                     echo $countvideo['totalvideo']."<br>";
//                                    echo "<lable>".$fetch_exam_data['examname']."</lable>";
                                     
//                                     $_SESSION['videoid'] = $video_res['video_id'];
//                                   echo "<li>Hii niku</li>";
                                    $vid[$i]=$video_res['video_id'];        
                                     echo  "<li><a href='getvideo.php?videoid=$video_res[v_id]&course_id=$video_res[course_id]' id='getvideo'>";?>
                                     <video controlslist="nodownload" controls style="height:95%;width:95%;">
    <source src="<?php echo "../admin/themes/metronic/theme/default/demo1/dist/assets/media/video/".$video_res[v_path];?>" type="video/mp4">
</video>
<?php echo $video_res[v_name];?>
                                  <?php   echo "</a></li>";
    
                                     $i++;
                                     break;
  
                                 }
                                 echo "</ul>";
                              
                             }
                             else
                             {

                             }
                            
                            
                      }

                        echo "</div>";
                    ?>
                    <?php
                    echo "<div class='item'>";
                        echo "    <input type='checkbox' id='check1'>";
                        echo  "<label for='check1'>Exams:</label>";
                         $select_exam ="select * from tblexam as e,tblweek as w where w.week_id = e.week_id AND w.course_id =$courseid";
 
                        $select_exam_data = mysqli_query($conn,$select_exam);
      
                        echo "<ul>";
                        ?>
                    <?php
                             while($select_exam_res = mysqli_fetch_array($select_exam_data))
                             {
                                 $var = Date("Y-m-d");
//                              echo "<br>";
                               $eachweekstartdate = $select_exam_res['start_date'];
                               $eachweekenddate = $select_exam_res['end_date'];
                                
                                
//                                 return;
                                 if(($eachweekstartdate <= $var)) //&& ( $var <= $eachweekenddate))
                                 {
                                     
//                                   
//                                        $eachweekenddate;
                                        $date = date('Y-m-d');
                                        $prevweekdate=date('Y-m-d',strtotime($eachweekenddate.'-1 days'));
//                                       
                                     
                                          echo "<li><a  href='getexam.php?examid=$select_exam_res[exam_id]&course_id=$courseid' id='getvideo'>".$select_exam_res['exam_name']."</a></li>";
//                            
                                 }
                                 
                             }
                              echo "</ul>";
                    echo "</div>";
                    
                    ?>
                  <!--    -------------------------Ending Dynamic week ----------------------- -->

                </nav>
                </div>
                               
                <div class="col-md-9">
<!--
                  <div class="row">
                    <div class="col-md-4 text-center" style="border-right:1px solid #000;"><a href="#" class="link" style="color:#000;"><i class="fas fa-fast-backward fa-2x"></i></a></div>
                    <div class="col-md-4 text-center" style="border-right:1px solid #000;">
                     
                        
                    <?php
//                            echo "<a href=''><i class='fas fa-film fa-2x' style='color:#000;'></i></a>";
                        ?>
                      
                        
                      
                    </div>
                    <div class="col-md-4 text-center" style="border-right:1px solid #000;"><a href="#" class="link" style="color:#000;"><i class="fas fa-fast-forward fa-2x"></i></a></div>
                    <hr style="border-bottom: 1px solid #aaa;margin-top:30px;">
                  </div>
-->
                   
                  <div class="row">
                    <div class="col-md-10">
                             <div class="row" style="margin-left:10px;margin-bottom: 10px;margin-right: 10px; border-radius:10px;">
                                    <h2>
                                     <?php 
                                        $select = "SELECT * from tblweek as w ,tblexam as e,tblcourse as c WHERE w.course_id = c.course_id AND e.week_id = w.week_id AND c.course_id=".$_GET['course_id']." AND e.exam_id=".$_GET['examid']; 
//                                        echo $select;
//                                        return;
                                        
                                        $data = mysqli_fetch_array(mysqli_query($conn,$select));
                                        
                                        echo $data['chap_name'].">>".$data['exam_name'];
                                        
                                      ?>
                                 
                                     </h2>
                                     <h3 style="padding:0px;margin:5px;">Graded Quiz:Instruction</h3>
                                     <h5 style="color: red;;margin:5px;">Note:-Please Read instruction properly before attempt exam.</h5>
                                    <p style="padding: 0px;margin:5px;color:#646464A;">In this quiz all question are compulary.Though you can get most of them right by just watching the video more than once.A better way to would be to actually follow the video instruction and then only gives an exam or test.</p>
                                     
                                     <p style="padding: 0px;margin:5px;color:#646464A;">
                                        If you do not attempt any question then it will consider as a zero Mark.
                                        The right answer will be consider as 1 mark ,<b>there is no nagative marking</b>.
                                     </p>
                                 
                                    <p style="padding: 0px;margin:5px;color:#646464A;">
                                    This Graded quiz section will have total of 10 questions.<br>
                                    <b>You have only one attempt,so make sure you submit the answer only after carefully reading the question and options.</b>
                                    </p>
                                     <p style="padding: 0px;margin:5px;color:#646464A;">
                                        Use the "Submit" to submit Your Answer. <b>You can see correct answer once respected week finished.</b>
                                    </p>
                                     <?php 
                                    $examid = $_GET['examid'];
                                    $course_id = $_GET['course_id'];
                                        ?>
                                    <a href="innerexam.php?examid=<?php echo $examid;?>&course_id=<?php echo $course_id;?>" class="btn btn-primary shadow">Start Exam</a><br>
                                    
                                     <?php                    
                                        $select = "select distinct w.start_date,w.end_date FROM tblweek as w,tblexam as e,tblquestionmcq as q WHERE w.week_id = e.week_id AND e.exam_id = q.exam_id AND w.course_id=".$_GET['course_id']." AND e.exam_id=".$_GET['examid'];
                                    //  echo $select;
                                        $record_date = mysqli_fetch_array(mysqli_query($conn,$select));
//                                        echo "<pre>";
//                                      print_r($record_date);
                                        $todaydate = date('Y-m-d');
                                        if($todaydate > $record_date['end_date'])
                                        {
                                        ?>
                                         <a href="innerexam.php?examid=<?php echo $examid;?>&course_id=<?php echo $course_id;?>" name="showans" id="showans" class="btn btn-primary shadow" style="margin-top:10px;">Click To see Answer</a>
<!--                                        <input type="button" name="showans" id="showans" value=" Show Answer" class="btn  btn-success" >-->
                                        
                                        <?php
                                        }
                                        ?>
                                </div>
                                
                    </div>        
                    <div class="col-md-2" style="border-left:1px solid #000;">
                        <h3>More Videos</h3>
                        <a href="youtubevideo.php">
                            <img src="images/courses/bg.jpeg" alt="click here" height="150px" width="150px;">
                            <p>click here for more videos</p>
                        </a>
                   
                                <h3>Books</h3>
                    <?php
                        $select_book = "select * from tblpdf limit 0,1";
                        $data_book = mysqli_query($conn,$select_book);
                        while($res_book = mysqli_fetch_assoc($data_book))
                        {
                            $path = "../admin/themes/metronic/theme/default/demo1/dist/assets/media/book/"."$res_book[pdf_path]";
                            $img="../admin/themes/metronic/theme/default/demo1/dist/assets/media/bookimage/"."$res_book[pdf_image]";
                            ?>
                            <?php ?>
                                <a href="<?php echo $path;?>">
                                    <img src="<?php echo $img; ?>" alt="click here" height="150px">
                                    <p><?php echo "$res_book[pdf_name]";?></p>
                               </a>
                        <?php }


                       
                        
                        //echo "<a href='"."../admin/themes/metronic/theme/default/demo1/dist/assets/media/pdf/".$path."'>"."<img src='$img;">."</a>";
                          //  echo "<br>";
                    ?>
                    <a href="allbooks.php"><button class="btn btn-transparent btn-info btn-blue">view all E-Books</button></a>
                       
                    </div>
                  </div>
                </div>
             </div>
            </div>
      
    
    
    
    
    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
  	<script type="text/javascript" src="assets/assets/js/nivo-lightbox.min.js"></script>
      <script src="assets/js/sweetalert.min.js"></script>
    <script>
      $(document).ready(function(){
        $('#allans').hide();
//        $('#quiz').hide();
        
          $('#showans').click(function(){
            
//            $('#allans').html("<pre style='margin-top:5px;'>Show Question Answer Here</pre>");
            $('#allans').show();
        });
      });
    </script>


      <script>
function checksub()
{
    return confirm("NOTE:if you have remain to mark any question marks consider as ZERO(0)?\nAre You Sure To Submit??");
    
}
    
</script>
  </body>
  </html>