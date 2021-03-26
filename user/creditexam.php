<?php
include_once("connection.php");
session_start();
if(!isset($_SESSION['id']))
{
	header("Location:page-login.php");
}
else
{
	$id=$_SESSION['id'];
}
if(isset($_SESSION['credit_exam_id']))
{
    if($_SESSION['credit_exam_id']==$id)
    {
        echo "<meta http-equiv='Refresh' content='1; URL=http://localhost/edunet/user/index.php?ceex'/>"; 
    }
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
<!-- Responsive stylesheet -->
<link rel="stylesheet" href="css/responsive.css">
<!-- Title -->
<title>Edunet || credit exam</title>
<!-- Favicon -->
<link href="images/favicon.ico" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
<link href="images/favicon.ico" sizes="128x128" rel="shortcut icon" />
</head>
<body>
	<div class="wrapper">
	<div class="preloader"></div>

	<!-- Main Header Nav -->
<?php 
	include_once("subheader.php");
?>			
    <section class="inner_page_breadcrumb">
	</section>
	<table>
		<form name="myform" method="get" action="">
	       <div class="row">
                <div class="col-md-10">
                    <form action="" method="post" name="exam" class="shadow" style="padding: 10px; border-radius:20px;">   
                        <div id="quiz-time-left"></div>
                        <table style="margin-left: 10%;">
                            <?php
                            $today = date('Y-m-d');
                            $select = "SELECT * FROM tblcreditexam WHERE ce_date='$today'";
                            $data = mysqli_query($conn,$select);
                            $int = 1;
                            while($res = mysqli_fetch_array($data))
                            {
                                $que_id[$int] =$res['ce_id'];
                                $type="radio";
                                $qcnt=4;
                                ?>
                                <tr>
                                    <td style="padding:2px;"><label class="form-control"  style="border-width:3px;height: auto;"><?php echo "Q:".$int;?></label></td>
                                    <td style="padding:2px;"><label class="form-control" id="<?php echo "Q".$res[ce_id];?>" style="border-width:3px;height: auto;"><?php echo "<code style='padding:5px;'>"; echo $res['ce_question'];echo "</code>"?></label>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <label class="form-control">
                                            <span style="padding:10px;">A:</span>
                                            <input type="radio" name="<?php if($type=="checkbox"){echo $int."[]";}else{ echo $int; }?>" value="1" id="ch"><?php echo "&nbsp;&nbsp;".$res['ce_op1'];?>
                                        </label>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <label class="form-control">
                                            <span style="padding:10px;">B:</span>
                                            <input type="radio" name="<?php if($type=="checkbox"){echo $int."[]";}else{ echo $int; }?>" value="2" id="ch" 
                                               ><?php echo "&nbsp;&nbsp;".$res['ce_op2'];?>
                                        </label>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" >
                                        <label class="form-control">
                                            <span style="padding:10px;">C:</span>
                                            <input type="radio" name="<?php if($type=="checkbox"){echo $int."[]";}else{ echo $int; }?>" value="3" id="ch" ><?php echo "&nbsp;&nbsp;".$res['ce_op3'];?>
                                        </label>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" >
                                        <label class="form-control">
                                            <span style="padding:10px;">D:</span>
                                            <input type="radio" name="<?php if($type=="checkbox"){echo $int."[]";}else{ echo $int; }?>" value="4" id="ch"><?php echo "&nbsp;&nbsp;".$res['ce_op4'];?>
                                        </label>
                                    </td>
                                </tr>  
                            <?php
                              $int++;  
                            }
                            $int--;
                            ?>
                            <tr>
                                <td colspan="2">
                                    <input type="submit" name="submitexam" onclick="checksub();" value="submit" class="btn btn-block btn-info" style="margin-top:10px;"> 
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>        
            </form>
        </table>
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
        <script type="text/javascript" src="js/wow.min.js"></script>
        <script type="text/javascript" src="js/script.js"></script>
        <script type="text/javascript" src="js/sweetalert.min.js"></script>
        <script>
        function checksub()
        {
            return confirm("NOTE:if you have remain to mark any question marks consider as ZERO(0)?\nAre You Sure To Submit??");
        }  
        </script>
    </body>
</html>
<?php
	if(isset($_REQUEST['submitexam']))
		{
            
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

                $q= "select count(*) from tblcreditexam where ce_id=".$que_id[$j]." and ans= '".$an."'";
               // echo $q;
                $r = mysqli_fetch_array(mysqli_query($conn,$q));
        //        echo $q."<br>";
                //print_r($r);
                }
                $insert_score = "INSERT INTO tblcreditdemo VALUES(null,'$r[0]',$id)";
              //  echo $insert_score;
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
            $noc=0;
            echo $reult_show;
            $se="select count(score) from tblcreditdemo where uid=$id and score=1";
            //echo $se;
            $r11=mysqli_query($conn,$se);
            $rcount=mysqli_fetch_array($r11);
            $noc=$rcount['count(score)'];
            $s_credit="select no_of_credit from tblcredit where u_id=$id";
            $scr=mysqli_query($conn,$s_credit);
            $m=mysqli_fetch_array($scr);
            //echo $noc;
            //echo $m['no_of_credit'];
            $count_credit=mysqli_num_rows($scr);
            if($count_credit>0)
            {
            	$noc=$noc+$m['no_of_credit'];
            	$update="update tblcredit set no_of_credit=$noc where u_id=$id";
            	//echo $update;
            	mysqli_query($conn,$update);
            }
            else
            {
            	$ins="insert into tblcredit values(null,$id,$noc)";
            	//echo $ins;
            	mysqli_query($conn,$ins);	
            }
            $d="delete from tblcreditdemo where uid=$id";
            mysqli_query($conn,$d);
            $_SESSION['credit_exam_id'] = $id;

            $_SESSION['start'] = time();

            $_SESSION['expire'] = $_SESSION['start'] + (24 * 60 * 60) ;
           // header("Location:index.php"); 
            echo "<meta http-equiv='Refresh' content='1; URL=http://localhost/edunet/user/index.php'/>";       
}
?>