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
<title>Edunet || User's dashboard</title>
<!-- Favicon -->
<link href="images/favicon.ico" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
<link href="images/favicon.ico" sizes="128x128" rel="shortcut icon" />
</head>
<body>
	<?php
		$query="select u_first_name , u_last_name , u_photo_path from tbluser where u_id=$id";
		//echo $query;
		$res=mysqli_query($conn,$query);
		$result=mysqli_fetch_array($res);
		$username = $result['u_first_name']." ".$result['u_last_name'];
		//$user_name=$result[u_first_name]." ".$result[u_last_name];
		//echo $username;
		$photo=$result['u_photo_path'];
		//echo $photo;
	?>
	<div class="wrapper">
		<div class="preloader"></div>
		<!-- Main Header Nav -->
		<?php 
			include_once("subheader.php");
		?>			
		<section class="inner_page_breadcrumb">
		</section>
		<div class="container-fluid" style="margin-top:52px;">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<h3 class="text-uppercase display-3">your courses</h3>
				<hr style="border:1px solid #cccccc;">
			</div>
		</div>
		<section class="our-team pb40">
			<div class="container">
				<div class="row">
				<?php
					$cat_id=$_REQUEST['userid'];
					$select="select * from tblusercourse as uc ,tbluser as u , tblcourse as c where uc.user_id=$cat_id and c.course_id=uc.course_id and u.u_id=$cat_id";
					$res=mysqli_query($conn,$select);
					$count=mysqli_num_rows($res);
					if($count > 0)
					{
						while($result=mysqli_fetch_array($res))
						{ ?>
							<div class="col-lg-6 col-xl-4">
								<div class="top_courses">
									<div class="thumb">
										<img class="img-whp" width="550px" height="275px" src="<?php echo "../admin/themes/metronic/theme/default/demo1/dist/assets/media/course/"."$result[course_photo_path]";?>" alt="brinda">
										<div class="overlay">
											<div class="tag">Best Seller</div>
											<?php 
										 $startdate=strtotime($result['course_start_date']);
                              $enddate=strtotime($result['course_end_date']);
											$day=abs($enddate - $startdate);
                              // $day = $day/60/60/24;
                              $year=floor($day / (365*60*60*24));
                              $month=floor(($day - $year * 365*60*60*24)/(30*60*60*24));
                              $day = round($day/60/60/24);
                              while($day>=30)
                              {
                                $day=$day-30;
                              }
										?>

											<a class="tc_preview_course" href="#"><?php echo $month."  Months and ".$day." days ";?></a>
										</div>
									</div>
								<div class="details">
								<div class="tc_content">
									<?php $t=$result['course_t_id'];
										$q1="select f_name,f_photo_path from tblfaculty where f_id=$t";
										$facultyname=mysqli_query($conn,$q1);
										$res22=mysqli_fetch_array($facultyname);
										$fname=$res22['f_name']; ?>
										<img src="<?php echo "../admin/themes/metronic/theme/default/demo1/dist/assets/media/faculty/"."$res22[f_photo_path]";?>" class="rounded-circle course-image">

										<p style="padding-left: 90px;transform: translateY(-80%);">By    <a href="#"><?php echo $fname;?></a></p>
										
									<h5><?php echo "$result[course_name]";?></h5>
									<p><?php echo "$result[course_description]";?></p>
									<?php 
										$s=date_create($result['course_start_date']);
										$e=date_create($result['course_end_date']);
										$start=date_format($s,"d/m/Y");
										$end=date_format($e,"d/m/Y");
									?>
									<h5>Course start Date:<?php echo $start;?></h5>
									<h5>Course end Date:<?php echo $end;?></h5>
								</div>
								<div class="tc_footer">
									<div class="tc_price float-left">
										<?php 
								            $_SESSION['courseid']=$result['course_id'];
								            $enddate=date_create($result['course_end_date']);
								            $enddateformate=date_format($enddate,"d/m/Y");

								            $date = $result['course_end_date'];
								            $today = date('Y-m-d');
								          // echo $today.">=".$date;
								            //echo $date;
								            $dd = strtotime($date);
								            $to = strtotime($today);
								            if($to >= $dd)
                							{
								                $select_result = "SELECT * FROM tblresult WHERE user_id=".$id." AND course_id=".$result['course_id'];
								                //echo $select_result;
								                $row = mysqli_query($conn,$select_result);
								                $select_row_result = mysqli_num_rows($row);
								                $fail = mysqli_fetch_array($row);
                    
                   						 		if($fail['r_score'] > 40)
                    							{ ?>
                         							<div class="tc_price float-right"><a class="tc_preview_course" href="certificate.php?userid=<?php echo "$id"; ?>&courseid=<?php echo "$result[course_id]"; ?>"><button class="btn btn-success btngreen btntransparent">download certificate</button></a></div>  
                					<?php   }
                    						else
                    						{ 
                    		
					                    		echo "<div class=\"tc_price float-right\"><button class=\"btn btn-danger btnred btntransparent\" onclick=\"return checkresult();\">download certificate</button></div>";
					                        
						                        echo "<script>
						                            function checkresult()
						                            {
						                                swal('Sorry!','You are not Qualified For certificate','error');
						                            }
						                            </script>";
                    						}                   
                						}
       										?>
										</div>
										<div class="tc_price float-right"><a class="tc_preview_course" href="coursedashboard.php?course_id=<?php echo "$result[course_id]";?>"><button class="btn btn-info btnblue btntransparent" style="width:175px;">Watch Videos</button></a></div>
									</div>
								</div>
							</div>
						</div>
			<?php	}
				}
				else
				{ ?>
					<h1 class="btn btn-danger btnred btntransparent" style="border-radius:0px;border:0px;width:1320px;">You are not enroll in any course</h1>
				<?php }
				?>
			</div>
		</div>
	</section>
	<div class="row">
		<div class="col-md-12 col-sm-12">
			<h4 class="display-3">Trending course</h4>
			<hr style="border:1px solid #cccccc;">
		</div>
	</div>
		<section class="our-team pb40">
		<div class="container">
			<div class="row">
	<?php
		//$cat_id=$_REQUEST['cat_id'];

		$daa=date("Y-m-d");
		$select="select * from tblcourse where course_end_date >= '$daa'";
		//echo $select;
		$res=mysqli_query($conn,$select);
		$c=mysqli_num_rows($res);
		if($c>=1)
		{
		while($result=mysqli_fetch_array($res))
		{
		?>

			<div class="col-lg-6 col-xl-4">
							<div class="top_courses">
								<div class="thumb">
									<img class="img-whp" width="550px" height="275px" src="<?php echo "../admin/themes/metronic/theme/default/demo1/dist/assets/media/course/"."$result[course_photo_path]";?>" alt="No Image is Available">
									<div class="overlay">
										<div class="tag">Best Seller</div>
										<?php 
										 $startdate=strtotime($result['course_start_date']);
                              $enddate=strtotime($result['course_end_date']);
											$day=abs($enddate - $startdate);
                              // $day = $day/60/60/24;
                              $year=floor($day / (365*60*60*24));
                              $month=floor(($day - $year * 365*60*60*24)/(30*60*60*24));
                              $day = round($day/60/60/24);
                              while($day>=30)
                              {
                                $day=$day-30;
                              }
										?>

											<a class="tc_preview_course" href="#"><?php echo $month."  Months and ".$day." days ";?></a>
											
								</div>
							</div>
								<div class="details">
									<div class="tc_content">
										<?php $t=$result['course_t_id'];
										$q1="select f_name,f_photo_path from tblfaculty where f_id=$t";
										$facultyname=mysqli_query($conn,$q1);
										$res22=mysqli_fetch_array($facultyname);
										$fname=$res22['f_name']; ?>
										<img src="<?php echo "../admin/themes/metronic/theme/default/demo1/dist/assets/media/faculty/"."$res22[f_photo_path]";?>" class="rounded-circle course-image">

										<p style="padding-left: 90px;transform: translateY(-80%);">By    <a href="#"><?php echo $fname;?></a></p>
										
										<h5><?php echo "$result[course_name]";?></h5>
										<?php 
											$s=date_create($result['course_start_date']);
											$e=date_create($result['course_end_date']);
											$start=date_format($s,"d/m/Y");
											$end=date_format($e,"d/m/Y");
										?>
										<h5>Course start Date:<?php echo $start;?></h5>
										<h5>Course end Date:<?php echo $end;?></h5>
									</div>
									<div class="tc_footer">
										<div class="tc_price float-right"><strike><i class="fa fa-inr" style="font-size:18px;"></i>  12000</strike>                  <i class="fa fa-inr" style="font-size:18px;"></i>  <?php echo "$result[course_prize]";?></div>
									</div>
									<div class="text-center" style="padding-top:10px;padding-bottom: 20px;">
                      <?php
                      if(isset($_SESSION['id']))
                      {
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
		                            {		                            ?>
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
		                                <button class="btn btn-success btngreen btntransparent" >Enroll now</button>
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
                     	<?php echo "<a href='coursedetail.php?course_id=$result[course_id]&teacher_id=$result[course_t_id]' class='btn btn-info btnblue btntransparent'>Read More</a>"; ?>
										
                     
                            </div>
									
								</div>
							</div>
						</div>
	<?php	}
}
else
{ ?>
	<h1><div class="btn btn-danger btnred btntransparent" style="width:1320px;">no courses are available , check later</div></h1>
<?php }
		?>
					</div>
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
</body>

</html>
