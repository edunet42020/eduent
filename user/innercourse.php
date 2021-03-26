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
$vid = array();
$i=0;
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
   //echo $select_first;
    //echo $weekid;
    $select_first_data = mysqli_query($conn,$select_first);
    $select_first_data_ans = mysqli_fetch_array($select_first_data);
    $first_week_title = $select_first_data_ans['week_title'];
    $first_week_name = $select_first_data_ans['chap_name'];
    $first_video_name = $select_first_data_ans['v_name'];
    $first_videoid = $select_first_data_ans['v_id'];
    $first_video_path  =$select_first_data_ans['v_path'];
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Edunet || Inner course</title>

   
<link href="images/favicon.ico" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
<link href="images/favicon.ico" sizes="128x128" rel="shortcut icon" />

    <!-- Bootstrap CSS -->    
     <link rel="stylesheet" href="assets/css/bootstrap.min.css"> 
      <link rel="stylesheet" href="css/stylebutton.css">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->

<!--		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css" integrity="sha384-PmY9l28YgO4JwMKbTvgaS7XNZJ30MK9FAZjjzXtlqyZCqBY6X6bXIkM++IkyinN+" crossorigin="anonymous">-->
		<!-- Fonts Awesome -->
	<link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/solid.css" integrity="sha384-r/k8YTFqmlOaqRkZuSiE9trsrDXkh07mRaoGBMoDcmA58OHILZPsk29i2BsFng1B" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/regular.css" integrity="sha384-IG162Tfx2WTn//TRUi9ahZHsz47lNKzYOp0b6Vv8qltVlPkub2yj9TVwzNck6GEF" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/brands.css" integrity="sha384-BKw0P+CQz9xmby+uplDwp82Py8x1xtYPK3ORn/ZSoe6Dk3ETP59WCDnX+fI1XCKK" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/fontawesome.css" integrity="sha384-4aon80D8rXCGx9ayDt85LbyUHeMWd3UiBaWliBlJ53yzm9hqN21A+o1pqoyK04h+" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/innernav1.css">
  

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
        width: 20%;
/*        padding: 5px;*/
    }
    .certificate:hover
    {
            color: #fff;
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
                      //  $select_exam = "SELECT COUNT(examid) as totalexam,examno,examname FROM exammst WHERE week_id=".$video_res['week_id'];
                              
//                           echo $select_exam;
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
                                     <video controls controlslist="nodownload" style="height:95%;width:95%;" muted noplay>
    <source src="<?php echo "../admin/themes/metronic/theme/default/demo1/dist/assets/media/video/".$video_res[v_path];?>" type="video/mp4">
</video>
<?php echo $video_res[v_name];?>
                                  <?php   echo "</a></li>";
//                                        
                                     
//                                    $countvideo['totalvideo'] = $countvideo['totalvideo']-1; 
//                                     echo $countvideo['totalvideo'];
                                     
//                                     echo "<pre>";
//                                     echo current($vid);echo "<br>";
//                                     echo next($vid);echo "<br>";
//                                     print_r($vid);
//                                    echo "value of i=".$i;echo "<br>";
//                                    echo "current = ".current($vid);echo "<br>";
//                                    echo "next    = ".next($vid);echo "<br>";
//                                    echo "prev    = ".prev($vid);
                                     
                                     $i++;
                                     break;
//                                     return;
                                     
                                 }
                                 echo "</ul>";
                                 
//                                 echo "hello world";
//                                 break;
//                                 return;
                                 
                             }
                             else
                             {
//                                 echo "Comming soon....<br>";
//                                 break;
//                                 $count_video_per_week = "SELECT COUNT(v.week_id) FROM weekmst as w,videomst as v,w.week_id = v.week_id AND v.week_id=".$video_res['week_id'];
//                                    echo $count_video_per_week;
//                                 return;
                             }
                            
                            
                            
//                        echo  "<ul>";
//                        echo  "<li><a href='getvideo.php?videoid=$video_res[video_id]&course_id=$video_res[Course_id]' id='getvideo'>$video_res[video_name]</a></li>";
//                        echo "</ul>";
                        }
//                    echo "<ul><li>$fetch_exam_data[examname]</li></ul>";
                        echo "</div>";
                    ?>
                    <?php
                    echo "<div class='item'>";
                        echo "    <input type='checkbox' id='check1'>";
                        echo  "<label for='check1'>Exams:</label>";
                         $select_exam ="select * from tblexam as e,tblweek as w where w.week_id = e.week_id AND w.course_id =$courseid";
                        
                       //echo $select_exam;
//                    return;
                        $select_exam_data = mysqli_query($conn,$select_exam);
//                      $select_exam_res = mysqli_fetch_array($select_exam_data);
                        
//                    echo "<pre>";
//                    print_r($select_exam_res);
            
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
//                                        $prevweekdate;echo "<br>";
                                       /* if($date >= $prevweekdate)
                                        {
                                            $sendmail=1;
                                        }
                                        else
                                        {
                                            $sendmail=0;
                                        }*/
                                     
//                                        return;
                                     
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
                 <?php 
                 if(isset($_GET['videoid']))
                 {
                     $_SESSION['videoid']=$videoid = $_GET['videoid'];
                     $video_select = "select * from tblvideo AS v,tblweek AS w WHERE w.week_id = v.v_week_id AND v.v_id=$videoid";
                   //echo $video_select;
//                     return;
                     $video_result = mysqli_query($conn,$video_select);
                     $video_content = mysqli_fetch_array($video_result);
                     $video_heading = $video_content['v_name'];
                     $week_title = $video_content['week_title'];
                     $week_name = $video_content['chap_name'];
                     
                     $video_path =$video_content['v_path'];
                     $video_desc=$video_content['v_description'];
                     //$video_sub_path =$video_content['video_subtitle'];
//                     echo "<pre> video_result varialble";
//                     print_r($video_result);
//                     echo "<pre> fetch recored..";
//                     print_r($video_content);
//                     return;
                 }
                 ?>
                 
                <div class="col-md-9">
                    <?php
//                    print_r($vid);
//                    $cur  = current($vid);
//                    $next = next($vid);
//                    $prev = prev($vid);
                    echo "<br>";
                    ?>
                  <div class="row">
                    <div class="col-md-4 text-center"></div>
                    <div class="col-md-4 text-center" style="border-left:1px solid #000;border-right:1px solid #000;">
                        <?php
                            if(isset($video_heading)){echo "<a href='getvideo.php?videoid=$videoid&course_id=$video_content[course_id]' style='text-decoration:none;color:#000'><i class='fas fa-film fa-2x'></i></a>";}else{ echo "<a href='getvideo.php?videoid=$first_videoid&course_id=$courseid' style='text-decoration:none;color:#000'><i class='fas fa-film fa-2x'></i></a>";}
                        ?>
                      
                    </div>
                    <div class="col-md-4 text-center"></div>
                    <hr style="border-bottom: 1px solid #aaa;margin-top:30px;">
                  </div>
                   
                  <div class="row">
                    <div class="col-md-10">
                          
                      <h3 class="text-capitalize"><?php if(isset($week_title) && isset($week_title)){echo "$week_title:$week_name >";}else{ echo "$first_week_title:$first_week_name >";}
                          
                          ?>
                         
                          <?php  if(isset($video_heading)){echo "<a href='getvideo.php?videoid=$videoid&course_id=$video_content[course_id]' style='text-decoration:none;color:#000'>$video_heading</a>";}else{ echo "<a href='getvideo.php?videoid=$first_videoid&course_id=$courseid' style='text-decoration:none;color:#000'>$first_video_name</a>";}
                          
                          ?></h3>
                      <video controls style="height:100%;width:100%;">
                          <source src="<?php if(isset($video_path)){ echo "../admin/themes/metronic/theme/default/demo1/dist/assets/media/video/".$video_path;}else{echo "../admin/themes/metronic/theme/default/demo1/dist/assets/media/video/".$first_video_path;}?>" type="video/mp4">
                      </video>
                      
                      <div>
                          <?php 
                            echo $video_desc;
                         ?>
                      </div>
                
                      <!--<div>Click To Dwonload Subtitle <a href="<?php if(isset($video_subtitle)){ echo $video_subtitle;}else{echo $first_video_subtitle;}?>" download><i class="fas fa-download"></i></a></div>-->
<!--                      <div>Click To Dwonload<a href=""> txt Format Subtitle</a></div>-->
                      <h3 style="margin-left: 20px;">Ungraded Question:</h3>
                    
                        <div class="row">
                          <?php 
                            $select_demo ="select * from tblquestionmcq where course_id=$_REQUEST[course_id]";
//                           echo $select_demo;
                            $data_demo = mysqli_query($conn,$select_demo);
//                            print_r($data_demo);
                            $res_demo = mysqli_fetch_array($data_demo);
                          ?>
                <form action="" method="post">
                        <table style="margin-left: 30px;">
                            
                            <tr>
                                <td><label class="form-control" id="question"><code><?php echo $res_demo['question'];?></code></label></td>
                            </tr>
                            <tr>
                            <input type="hidden" name="dqid" value="<?php echo $res_demo['demoquestion_id'];?>">    
                                    <tr>
                                        <td><label class="form-control">A: <input type="radio" name="ra" id="opa" value="1"><?php echo $res_demo['option1'];?> </label></td>
                                    </tr>
                                    <tr>
                                        <td><label class="form-control">B: <input type="radio" name="ra" id="opb" value="2"><?php echo $res_demo['option2'];?></label></td>
                                    </tr>
                                    <tr>
                                        <td><label class="form-control">C:<input type="radio" name="ra" id="opc" value="3"><?php echo $res_demo['option3'];?> </label></td>
                                    </tr>
                                    <tr>
                                        <td><label class="form-control">D:<input type="radio" name="ra" id="opd" value="4"><?php echo $res_demo['option4'];?>  </label></td>
                                    </tr>
                            </tr>
                        </table>   
                    <?php
                            $select_attempt = "select * from tbldemoscore as d, tbldemoquestion as q WHERE q.d_q_id = d.demo_question_id and d.demo_question_id=".$res_demo['demo_question_id'];
//                            echo $select_attempt;
//                          return;
                            $select_attempt_data = mysqli_query($conn,$select_attempt);
                            $select_attempt_res = mysqli_fetch_array($select_attempt_data);
                          ?>
                            <?php 
                    
                                if($select_attempt_res['no_of_attempt']==0)
                                {
                            ?>
                                <input type="submit" name="subans" value="Submit" class="btn certificate" style="margin-left:30px;">
                              <?php
                                }
                                else
                                {
                                ?>
                                <input type="hidden" name="subans" value="Submit" class="btn btn-info" style="margin:2px;">
                                <?php
                                }
                                ?>
                          <?php
                            if($select_attempt_res['no_of_attempt']==1)
                            {
                                ?>
                               <div class="col-md-12" ><input type="button" name="showans" value="ShowAnsewer" class="btn certificate" id="showans" style="margin-left: 30px;">
                              <div id="anssolution" style="margin-top: 10px;">
                                <pre><?php echo $select_attempt_res['explanation'];?></pre>
                              </div>
                            <?php
                            }
                            else
                            {
                                ?>
                                <div class="col-md-12"><input type="hidden" name="showans" value="ShowAnsewer" class="btn btn-info" id="showans">
                        <?php
                            }

                          ?>
                          </form>   
                        </div>
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
    <script type="text/javascript" src="assets/js/nivo-lightbox.min.js"></script>
    <script type="text/javascript" src="assets/js/sweetalert.min.js"></script>

    <script>
      $(document).ready(function(){
        $('#anssolution').hide();
        
          $('#showans').click(function(){
            
//            $('#anssolution').html("<pre style='margin-top:5px;'>Show Question Answer Here</pre>");
            $('#anssolution').show();
        });
//          
//        $('#getvideo').click(function(){
//            
//           alert(document.getElementById('getvideo').value);
//           
//        });
      });
    </script>
  </body>
  </html>
