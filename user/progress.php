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
{
     $courseid = $_GET['course_id'];
    $_SESSION['courseid']=$courseid;
    $select = "select * from tblcourse where course_id=$courseid";
    $data = mysqli_query($conn,$select);
    $result = mysqli_fetch_array($data);
    $course_name = $result['course_name'];
    $course_descrition=$result['course_full_description'];
    
    
    $courseenddate = $result['course_end_date'];
    
//    echo "<br>";
    $todaydate = date('Y-m-d');
    //echo $todaydate." >= ".$courseenddate;
        $select_result_user = "select * from tblresult where user_id=$Userid and course_id=$courseid";
        //echo $select_result_user;
        $data_result = mysqli_query($conn,$select_result_user);
        $rows = mysqli_num_rows($data_result);
        //echo $rows;
        if($rows<=0)
        {
             $select_question = "select COUNT(q_id) as totalquestion from tblquestionmcq where course_id=$courseid";
            //echo $select_question;
            $count_question = mysqli_query($conn,$select_question);
            $total_question = mysqli_fetch_array($count_question);
            //$total_question['totalquestion'];
            
            echo "<br>";
            
            $select_total_score = "select SUM(score) AS total from tblscore WHERE user_id=$Userid and exam_id IN(select exam_id from tblexam WHERE course_id=$courseid)";
//echo $select_total_score;    
            $select_total_score_date = mysqli_query($conn,$select_total_score);
            $total = mysqli_fetch_array($select_total_score_date);
        
//            echo $total['total'];
//            echo "<br>";
            
            
            $per = ($total['total'] * 100)/$total_question['totalquestion'];
            
//            echo "persantage=".$per;

//            echo "<br>";
//            return;
            $grade=$per;
            $insert_result = "insert into tblresult VALUES(null,'$grade',$Userid,$courseid)";
 //echo $insert_result;
            mysqli_query($conn,$insert_result);
        }
        else
        {
//            echo "generate<br>";
            $select_question = "select COUNT(q_id) as totalquestion from tblquestionmcq where course_id=$courseid";
            //echo $select_question;
            $count_question = mysqli_query($conn,$select_question);
            $total_question = mysqli_fetch_array($count_question);
            //$total_question['totalquestion'];
            
            echo "<br>";
            
            $select_total_score = "select SUM(score) AS total from tblscore WHERE user_id=$Userid and exam_id IN(select exam_id from tblexam WHERE course_id=$courseid)";
//echo $select_total_score;    
            $select_total_score_date = mysqli_query($conn,$select_total_score);
            $total = mysqli_fetch_array($select_total_score_date);
        
//            echo $total['total'];
//            echo "<br>";
            
            
            $per = ($total['total'] * 100)/$total_question['totalquestion'];
            
//            echo "persantage=".$per;

//            echo "<br>";
//            return;
            $grade=$per;
           
            
            $insert_result = "update tblresult set r_score='$grade' where user_id=$Userid and course_id=$courseid";

 //echo $insert_result;
//            return;
            mysqli_query($conn,$insert_result);
        }

//    return;
    
}
$cntweek = array();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Edunet || Progress</title>

   
<link href="images/favicon.ico" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
<link href="images/favicon.ico" sizes="128x128" rel="shortcut icon" />
    
     <link rel="stylesheet" href="assets/css/bootstrap.min.css"> 
 
	<link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
  <link rel="stylesheet" href="assets/css/innernav.css">

    <style>
     .row
    {
        background:#19182d; 
        color: #fff;margin: 0px;
        padding: 10px;
        border-radius: 10px;
    }
    .row .box h2
    {
        text-align: center;
        font-size: 20px;
        color:#fff;
        text-transform: uppercase;
    }
    .row .box .chart    
    {

        position: relative;
        width:90px;
        height: 90px;
        margin: 0 auto;
        text-align: center;
        font-size:20px;
        line-height: 90px;
        color:#fff;
    }
    .row .box canvas
    {
        position: absolute;
        top: 0;
        left: 0;
    }
    </style>
  <body> 

    
  <?php include_once("topheadercourse.php");?>

    
        <div class="container shadow" style="border:1px solid #787576;width:99.9%;">
            <div class="container-fluid" style="border-bottom:2px solid #787576;margin-bottom:5px;">
<!--                <h1 class="text-capitalize" >Welcome to Matrix Education</h1>-->
                <h3 class="text-uppercase" ><?php echo $course_name;?></h3>
            </div>
            <div class="row  shadow">
                <div class="col-md-9 col-sm-9">
                    <div class="row">
                        <?php 
                        
                        $select_num_week = "select * from tblweek where course_id=$courseid";
//                        echo $select_num_week;
                        $data_week_data =mysqli_query($conn,$select_num_week);
//                        echo "<pre>";
//                        print_r($data_week_data);
                        while($res = mysqli_fetch_array($data_week_data))
                        {

                             $select_score = "select COUNT(s.question_id) as totquestion ,sum(s.score) As total from tblscore as s,tblexam as e where s.exam_id = e.exam_id and e.week_id=$res[week_id] and s.user_id=$Userid";
//                            echo $select_score;echo "<br>";
                            $data_score = mysqli_fetch_array(mysqli_query($conn,$select_score));
//                            print_r($data_score);
                                
                              
                            $avg = isset($data_score['total'],$data_score['totquestion'])?round(($data_score['total']*100)/$data_score['totquestion']):0;                            
                            ?>
                            <div class="col-md-3 box">
                                <div class="chart" data-percent="<?php echo $avg?>"><?php echo $avg?>%</div>
                                <h2><?php echo $res['week_title'];?></h2>
                            </div>

                            <?php
                        }
                        
                        ?>
                    </div>
                    
                    <?php
                    
                    $select_result = "select * from tblresult where user_id=$Userid and course_id=$courseid";
                    $grade_result = mysqli_fetch_array(mysqli_query($conn,$select_result));
                    
                    $per1 = $grade_result['r_score'];
                    $grade="";
                    if($per1>=95){
                        $grade="O";//O
                    }elseif($per1>=90){
                        $grade="A";//A
                    }elseif($per1>=85){
                        $grade="B";//B
                    }elseif($per1>=75){
                        $grade="C";//C
                    }elseif($per1>=65){
                        $grade="D";//D
                    }else if($per1>=50){
                        $grade="E";//E
                    }else if($per1<=35){
                        $grade="F";
                    }
                    else
                    {
                        $grade="NotYet";
                    }
                    ?>
                    
                    <div class="col-md-3 box" style="padding-left: 440px;">
                                <div class="chart" data-percent="<?php echo $per1?>"><?php echo $grade_result['r_score']."%"?></div>
                                <h2><?php echo "Over All percentage ";?></h2>
                            </div>
                    
                   
                    
                    
                    
   
                        
                    
<!--                    repeating row..-->
                    <?php                    
                    $select_week = mysqli_query($conn,"select * from tblweek as w,tblexam as e WHERE w.week_id=e.week_id AND w.course_id=$_GET[course_id]");
                    $int=0;
                    while($week = mysqli_fetch_assoc($select_week))
                    {
                        $cntweek[] = $week;
                        $int++;
                    }
                    $int--;
//                    echo "<pre>";
//                    echo $cntweek[0]['week_id'];
//                    print_r($cntweek);
//                    return;
                    ?>
                    <div class="row">
                        <div class="col-md-12">
                            <?php 
                                for($i=0;$i<=$int;$i++)
                                {
                                ?>
                                    <div class="row" >
                                <div class="col-md-2"></div>
                                    <div class="col-md-8" style="border:1px solid #ECECEC;margin-left:10px;">
                                    <h4><?php echo $cntweek[$i]['chap_name'];?>>><?php echo $cntweek[$i]['exam_name'];?></h4>
                                    Problem Score:
                                    <?php
                                        $select = "SELECT * FROM tblscore as s , tblquestionmcq as q ,tblexam as e,tbluser as ur WHERE ur.u_id = s.user_id AND q.q_id = s.question_id AND q.exam_id = s.exam_id AND e.exam_id = q.exam_id AND  e.course_id=".$_GET['course_id']." AND e.week_id =".$cntweek[$i]['week_id']." AND e.exam_id=".$cntweek[$i]['exam_id']." AND ur.u_id=".$Userid;
//                                        
                                   // echo $select;
                                   //     
                                        $data = mysqli_query($conn,$select);
                                        while($res = mysqli_fetch_assoc($data))
                                        {
//                                            echo "<pre>";
//                                            print_r($res);
                                    ?>
                                        <?php echo $res['score']."/1";?>
                                        <?php 
                                        
                                        }
                                        echo "<br>";
                                        $select_total_score_data = "select count(s.score_id) as totalquestion,sum(s.score) as totalscore FROM tblscore as s , tblquestionmcq as q ,tblexam as e,tbluser as ur WHERE ur.u_id = s.user_id AND q.q_id = s.question_id AND q.exam_id = s.exam_id AND e.exam_id = q.exam_id AND  e.course_id=".$_GET['course_id']." AND e.week_id =".$cntweek[$i]['week_id']." AND e.exam_id=".$cntweek[$i]['exam_id']." AND ur.u_id=".$Userid;
                                    //  echo $select_total_score_data;
                                        $fetchsum=mysqli_fetch_array(mysqli_query($conn,$select_total_score_data));
                                         echo "Total attmepted Question Are:".$fetchsum['totalquestion'];echo "<br>";
                                        echo "Total Correct Answer Are:".$fetchsum['totalscore'];echo "<br>";
                                        echo "Total Wrong Answer Are:"; 
                                        echo $fetchsum['totalquestion']-$fetchsum['totalscore'];
                                        ?>
                                </div>
                                <div class="col-md-2"></div>
                            </div>
                            <?php    
                                }
                            ?>    
                        </div>
                    </div>
                </div>
              <div class="col-md-3 col-sm-3">
                <div class="jumbotron" style="padding-left:10px;padding-top:10px;">
                <div style="padding-bottom:10px;" class="text-success">Some Important Dates:</div>
                  <div style="color: #FF8F39;">
                  <?php  echo "Today's Date is:";
                          $today = date("M d,Y");
                        echo $today;      
                  ?>
                  </div>
                  <div style="color: #FF8F39;">
                    <?php 
                            echo "Start date:";
                              $startdate=date_create($result['course_start_date']);
                              $startdateformate=date_format($startdate,"M d,Y");
                              echo $startdateformate;
                              
                    ?>
                  </div>
                  <div style="color: #FF8F39;">
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
    <script type="text/javascript" src="assets/js/jquery.easypiechart.js"></script>
    
    <script>
    $(function() {
        $('.chart').easyPieChart({
           size:90,
           barColor:'#17d3e6',
           scaleColor:false,
           lineWidth:15,
           trackColor:'#373737',
           lineCap:'circle',
           animate:1000
        });
    });
</script>

  </body>
  </html>