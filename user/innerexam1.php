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
    <title>Edunet ||  Inner exam</title>

   
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
<script>
window.onbeforeunload = function() {
        return false;//"Dude, are you sure you want to leave? Think of the kittens!";
    }
window.unload=function(){null};
history.pushState(null, null, document.URL);
window.addEventListener('popstate', function () {
    history.pushState(null, null, document.URL);
});
//$(document).ready(function(){
//     $(document).on("keydown", disableF5);
//});      
    function disableF5(e) { if ((e.which || e.keyCode) == 116 || (e.which || e.keyCode) == 82) e.preventDefault(); };
//
//$(document).ready(function(){
//     $(document).on("keydown", disableF5);
//});
    window.onbeforeunload = function() { return "Your work will be lost."; };
      </script>
      
    
  <?php include_once("topheadercourse.php");?>

   
        <div class="container shadow" style="border:1px solid #787576;width:99.9%;margin-top:5px;">
            <div class="container-fluid" style="margin-bottom:5px;padding-top:10px;">
             <div class="row">
                <div class="col-md-3" style="border-right:1px solid #787576;">
                <nav>
                    
                    
                    
                    
                    
<!--          -------------------  Stating dynamic week -----------------------          -->
                    
                    <?php
                 
//                        $video_res = mysqli_fetch_array($video_data);
                          $video_link = "select * from tblvideo as v, tblweek as w where v.v_week_id = w.week_id AND w.course_id = v.v_course_id and w.course_id = $courseid and v_week_id=$weekid";
//                       echo $video_link;
//                    return;
                        $video_data = mysqli_query($conn,$video_link);
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
                                     <video controls controlslist="nodownload" style="height:95%;width:95%;">
    <source src="<?php echo "../admin/themes/metronic/theme/default/demo1/dist/assets/media/video/".$video_res[v_path];?>" type="video/mp4">
</video>
<?php echo $video_res[v_name];?>
                                  <?php   echo "</a></li>";
                                     
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
                                
                                //echo $eachweekstartdate."    "."<="."   ".$var;
//                                 return;
                                 if(($eachweekstartdate <= $var)) //&& ( $var <= $eachweekenddate))
                                 {
                                     
//                                   
//                                        $eachweekenddate;
                                        $date = date('Y-m-d');
                                        $prevweekdate=date('Y-m-d',strtotime($eachweekenddate.'-1 days'));                                
                                          echo "<li><a  href='getexam.php?examid=$select_exam_res[exam_id]&course_id=$courseid' id='getvideo'>".$select_exam_res['exam_name']."</a></li>";
//                            
                                 }
                                 
                             }
                              echo "</ul>";
                    echo "</div>";
                    
                    ?>
                </nav>
                </div>
                 
                <div class="col-md-9">                   
                  <div class="row">
                    <div class="col-md-10">
                        <form action="" method="post" name="exam" class="shadow" style="padding: 10px; border-radius:20px;">   
                        <div id="quiz-time-left"></div>
                        <table style="margin-left: 10%;">
                            <?php
                            $select = "SELECT * FROM tblquestionmcq WHERE exam_id=".$_GET['examid']." AND course_id=".$_GET['course_id']." order by rand()";
                            //echo $select;
                            $data = mysqli_query($conn,$select);
                            $int = 1;
                            while($res = mysqli_fetch_array($data))
                            {
                                    //print_r($res);
                                  $que_id[$int] =$res['q_id'];
//                                print_r($res);
                                if($res[question_type]==1)
                                {    
                                    $type="radio";
                                    $qcnt=4;
                                }
                                else if($res[question_type]==2)
                                {
                                    $type="checkbox";
                                    $qcnt=4;
                                }
                                else if($res[question_type]==4)
                                {
                                    $type="radio";
                                    $qcnt=2;
                                }
                                else if($res[question_type]==3)
                                {
                                    $type="text";
                                    $qcnt=1;
                                }
                                
                              ?>

                            <tr >
                                
                                <td style="padding:2px;"><label class="form-control"  style="border-width:3px;height: auto;"><?php echo "Q:".$int;?></label></td>
                                <td style="padding:2px;"><label class="form-control" id="<?php echo "Q".$res[question_id];?>" style="border-width:3px;height: auto;"><?php echo "<code style='padding:5px;'>"; echo $res['question'];echo "</code>"?></label>
                                </td>
                            </tr>
                            <tr>
                                <?php if($qcnt==1){ ?>
                                <tr>
                                    <td colspan="2" >
                                        <input type="<?php echo $type;?>" name="<?php echo $int;?>" value="Plz. Write full answer" id="ch" onFocus="this.value='';" class="form-control" style="margin-top:10px;"><br>
                                        <span style="color:red;">NOTE: if there is Nothing We consider it You Don't know the answer..!!!</span>
                                    </td>
                                </tr>  
                                <?php } if($qcnt==2 or $qcnt==4){ ?>
                                <tr>
                                    <td colspan="2">
                                       <label class="form-control"><span style="padding:10px;">A:</span>
                                        <input type="<?php echo $type;?>" name="<?php if($type=="checkbox"){echo $int."[]";}else{ echo $int; }?>" value="1" id="ch"><?php echo "&nbsp;&nbsp;".$res['option1'];?></label>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <label class="form-control"><span style="padding:10px;">B:</span>
                                        <input type="<?php echo $type;?>" name="<?php if($type=="checkbox"){echo $int."[]";}else{ echo $int; }?>" value="2" id="ch" 
                                               ><?php echo "&nbsp;&nbsp;".$res['option2'];?></label>
                                    </td>
                                </tr>
                                <?php }if($qcnt==4){ ?>
                                <tr>
                                    <td colspan="2" >
                                        <label class="form-control"><span style="padding:10px;">C:</span>
                                        <input type="<?php echo $type;?>" name="<?php if($type=="checkbox"){echo $int."[]";}else{ echo $int; }?>" value="3" id="ch" ><?php echo "&nbsp;&nbsp;".$res['option3'];?></label>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" >
                                        <label class="form-control"><span style="padding:10px;">D:</span>
                                        <input type="<?php echo $type;?>" name="<?php if($type=="checkbox"){echo $int."[]";}else{ echo $int; }?>" value="4" id="ch"><?php echo "&nbsp;&nbsp;".$res['option4'];?></label>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tr>
                            <?php
                              $int++;  
                            }
                            $int--;
                            ?>
                            <tr>
                                <?php
                                    $select_score = "select DISTINCT no_of_attempt,exam_id FROM tblscore WHERE user_id=".$Userid." AND exam_id=".$_GET['examid'];
//                                    echo $select_score;
                                    $select_record = mysqli_query($conn,$select_score);
                                    $record = mysqli_fetch_array($select_record);
                                
                                    $select_end_date = "SELECT DISTINCT w.start_date,w.end_date FROM tblweek as w,tblexam as e,tblquestionmcq as q WHERE w.week_id = e.week_id AND e.exam_id = q.exam_id AND w.course_id=".$_GET['course_id']." AND e.exam_id=".$_GET['examid'];
                                    
                                    $fetch_end_date = mysqli_fetch_array(mysqli_query($conn,$select_end_date));
                                    //print_r($fetch_end_date);
                                    
//                                        echo "<pre>";
                                        //print_r($fetch_end_date['end_date']);

                                      $todaynewdate = date('Y-m-d');
                                    if($todaynewdate <= $fetch_end_date['end_date'])
                                    {
                                        //echo $record['no_of_attempt'];
                                        if($record['no_of_attempt']==0)
                                        {?>
                                            <td colspan="2">
                                                <input type="submit" name="submitexam" value="submit" onClick="return checksub()" class="btn btn-block btn-info" style="margin-top:10px;"> 
                                            </td> 
                                
                                
                                        <?php    
                                        }
                                    }
                                    else
                                    {
                                       echo "<td colspan='2'>";
                                       echo "<p class='btn btn-block btn-danger' style='margin-top:10px;'>Your One Attempt is done.</p>"; 
                                       echo "</td>";   
                                    }
                                
                                ?>
                               
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <?php
                                    
                                    $select = "SELECT DISTINCT w.start_date,w.end_date FROM tblweek as w,tblexam as e,tblquestionmcq as q WHERE w.week_id = e.week_id AND e.exam_id = q.exam_id AND w.course_id=".$_GET['course_id']." AND e.exam_id=".$_GET['examid'];
//                                    echo $select;
                                    $record_date = mysqli_fetch_array(mysqli_query($conn,$select));
//                                    echo "<pre>";
//                                    print_r($record_date);
                                        $todaydate = date('Y-m-d');
                                        if($todaydate > $record_date['end_date'])
                                        {
                                        ?>
                                        <input type="button" name="showans" id="showans" value=" Show Answer" class="btn btn-block btn-success" style="margin-top:10px;">
                                        <div id="allans" style="margin-top: 5px;">
                                    
                                        <?php
                                            $select_ans = "SELECT DISTINCT *  FROM tblweek as w,tblexam as e,tblquestionmcq as q WHERE w.week_id = e.week_id AND e.exam_id = q.exam_id AND w.course_id=".$_GET['course_id']." AND e.exam_id=".$_GET['examid'];
                                            //echo $select_ans; 
                                            $show_ans = mysqli_query($conn,$select_ans);
                                            $int=1;
                                            echo "<div style='background-color:#262626;color:#fff;padding:10px;'>";  
                                            while($show_explaination = mysqli_fetch_array($show_ans))
                                            {
                                                //print_r($show_explaination);
                                                echo "<div style='margin:5px;padding:5px;border:1px solid #fff;font-family:arial;font-size:15px;' >";
                                                echo "Question $int:".$show_explaination['question'];
                                                echo "<br>";
                                                echo "Explaination:<b>".$show_explaination['explanation']."</b>";
                                                echo "<br>";
                                                echo    "</div>";
                                                    
                                            $int++;
                                            }
                                        ?>
                                    </div>
                                        </div>  
                                        <?php   
                                    
                                        }
                                        else
                                        {
                                        ?>
                                        <input type="button" name="hidden" value=" You can see ans after completing week" onClick="" class="btn btn-block btn-info" style="margin-top:10px;">
                                        <?php   
                                        }
                                        ?>
                                    
                                </td>
                            </tr>
                        </table>
                           
        
    </form>
                    
                        
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
        $('#allans').hide();
//        $('#quiz').hide();
        
          $('#showans').click(function(){
            
//            $('#allans').html("<pre style='margin-top:5px;'>Show Question Answer Here</pre>");
            $('#allans').show();
        });
//          
//        $('#startquiz').click(function(){
//            $('#quiz').show();
//        });
        
//          
//        $('#getvideo').click(function(){
//            
//           alert(document.getElementById('getvideo').value);
//           
//        });
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
<?php
//echo "submit form";
if(isset($_POST['submitexam']))
{
    
        $select_no_of_attempt = "SELECT * FROM tblscore WHERE exam_id=".$_GET['examid']." AND user_id=".$Userid;
        $row = mysqli_fetch_array(mysqli_query($conn,$select_no_of_attempt));
        if($row > 0)
        {
           echo "<script>
                    swal('Opps!','You Alredy Attempted Exam','error');
                </script>";
            $url  = "http://localhost/edunet/user/innerexam.php?exam_id=".$_GET['examid']."&course_id=".$_GET['course_id'];
//        echo $url;
//        return;
//        echo "<script>alert('You Have 30sec to check show Answer');</script>";
         echo "<meta http-equiv='Refresh' content='5; URL=".$url."'/>";
        }
        else
        {
             $examid  = $_GET['examid'];
        //    return;
            $cnt=0;
            $reult_show="<script>";
            for($j=1;$j<=$int;$j++)
            {
                $an = (isset($_REQUEST[$j]))?$_REQUEST[$j]:"Unattempted";
                if($an=="Unattempted"){
                    $r[0]=$an;
                }else if($an=="Plz. Write full answer" or $an==""){
                    $r[0]="Unattempted";
                }else{
                    $an = (gettype($an)=="array")?implode(",",$an):$an;
        //            echo "<h1>The Q1  :".$q1."---</h1>=+";

                $q= "select count(*) from tblquestionmcq where q_id=".$que_id[$j]." and answer= '".$an."'";
               // echo $q;
                $r = mysqli_fetch_array(mysqli_query($conn,$q));
        //        echo $q."<br>";
                //print_r($r);
                }
                $insert_score = "INSERT INTO tblscore VALUES(null,'$r[0]','1',$que_id[$j],$examid,$Userid)";
                //echo $insert_score;
        //        echo "<h1>".$insert_score."</h1>";
                mysqli_query($conn,$insert_score);
        //            return;

                if($an == "" or $an=="Unattempted")
                { 

                    $r[0]="Unattempted";
        //            echo "<script>alert('$r[0]');</script>";
                }
        //        echo $q."--------";
                $reult_show.="document.getElementById('Q".$que_id[$j]."').style.border='2px solid";
                if($r[0]=="Unattempted"){
                    $reult_show.=" #F0E656';";
                }else if($r[0]){
                    $reult_show.=" #18E91C';";
                }else{
                    $reult_show.=" #FF3636';";    
                }

//                echo "Q".$que_id[$j]." is Correct(1)/Incorrect(0):".($r[0])."<br>";

                $cnt+=isset($r[0])?$r[0]:0;
            }
            $reult_show.="  </script>"; 
//            echo "Correct Ans: $cnt of $int Question.<br>";
//            echo "Incorrect Ans: ".($int-$cnt)." of $int Question.";

            echo $reult_show;

        }
}

 ?>  
