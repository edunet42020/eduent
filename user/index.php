<?php
	include_once("connection.php");
		$s1="select * from tblcourse";
		//echo $s1;
		$res1=mysqli_query($conn,$s1);
		while($result1=mysqli_fetch_array($res1))
		{
			$newcourseenddate = $result1['course_end_date'];
            $todaydate = date('Y-m-d');
            if($todaydate >= $newcourseenddate)
            {
                    $update_status = "UPDATE tblcourse SET course_status='De-Active' WHERE course_id=".$result1['course_id'];
                    mysqli_query($conn,$update_status);
            }    
            else
            {
            	$update_status = "UPDATE tblcourse SET course_status='Active' WHERE course_id=".$result1['course_id'];
                    mysqli_query($conn,$update_status);
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
<link rel="stylesheet" href="css/stylebutton.css">
 
<!-- Responsive stylesheet -->
<link rel="stylesheet" href="css/responsive.css">
<link rel="stylesheet" href="css/popup.css">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<!-- Title -->
<title>Edunet || Home</title>
<!-- Favicon -->
<link href="images/favicon.ico" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
<link href="images/favicon.ico" sizes="128x128" rel="shortcut icon" />
<style>
	/*.box-4 {
  //border: 5px solid;
  border-image: conic-gradient(red, yellow, lime, aqua, blue, magenta, red) 1;
  border-radius: 25px;
}*/
</style>
</head>
<body>
<div class="wrapper">
	<div class="preloader"></div>
	<!-- Home Design -->
	<?php
		include_once("header.php");
	?>

	<section class="home-three home3-overlay home3_bgi6">
		<div class="container">
			<div class="row posr">
				<div class="col-lg-12">
					<div class="home-text text-center">
						<h2 class="fz50">Start learning with Edunet</h2>
						<p class="color-white">To achieve great things, two things are needed: a plan and not quite enough time. </p>
						<a class="btn home_btn" href="#about1">Ready to get Started?</a>
					</div>
				</div>
			</div>
			<div class="row_style">
				<svg class="waves" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 300" preserveAspectRatio="none"> <path d="M 1000 280 l 2 -253 c -155 -36 -310 135 -415 164 c -102.64 28.35 -149 -32 -235 -31 c -80 1 -142 53 -229 80 c -65.54 20.34 -101 15 -126 11.61 v 54.39 z"></path><path d="M 1000 261 l 2 -222 c -157 -43 -312 144 -405 178 c -101.11 33.38 -159 -47 -242 -46 c -80 1 -153.09 54.07 -229 87 c -65.21 25.59 -104.07 16.72 -126 16.61 v 22.39 z"></path><path d="M 1000 296 l 1 -230.29 c -217 -12.71 -300.47 129.15 -404 156.29 c -103 27 -174 -30 -257 -29 c -80 1 -130.09 37.07 -214 70 c -61.23 24 -108 15.61 -126 10.61 v 22.39 z"></path></svg>
			</div>
		</div>
	</section>

	<!-- about3 home3 -->
	<section class="home3_about home3_wave" id="about1">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-xl-6">
					<div class="about_home3">
						<h3>What We Do</h3>
						<h5>Learning platform that connects world-class instructors with curious minds. We bring best online courses at your fingertips at the most affordable prices.</h5>
						<p>
						we are allowed you to get the best education from your home or while travelling and at any time. you can also get a certificate for it and you can use certificate of edunet worldwide.</p>
						<h3><a href="page-about.php" class="btn about_btn_home3">View More</a></h3>
					</div>
				</div>
				<div class="col-lg-6 col-xl-6">
					<div class="row">
						<div class="col-sm-6 col-lg-6">
							<div class="home3_about_icon_box one">
								<a href="#">
								<span class="icon"><span class="flaticon-account"></span></span>
								<div class="details">
									<h4>Create Account</h4>
									<p>create your new account to get benefit of online course</p>
								</div>
							</a>
							</div>
						</div>
						<div class="col-sm-6 col-lg-6">
							<div class="home3_about_icon_box two">
								<a href="../faculty/login.php">
								<span class="icon"><span class="flaticon-online"></span></span>
								<div class="details">
									<h4>Create Online Course</h4>
									<p>for creating new course, you have to become a instructor</p>
								</div>
							</a>
							</div>
						</div>
						<div class="col-sm-6 col-lg-6">
							<div class="home3_about_icon_box three">
								<span class="icon"><span class="flaticon-student-1"></span></span>
								<div class="details">
									<h4>Interact with Faculties</h4>
									<p>To clear your doubts put message in your course area.</p>
								</div>
							</div>
						</div>
						
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="about_home3_shape_container">
						<div class="about_home3_shape"><img src="images/about/shape1.png" alt="shape1.png"></div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- School category courses -->
	<section class="school-category-courses pt30">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 offset-lg-3">
					<div class="main-title text-center">
						<h3 class="mt0">Categories Courses</h3>
						<p>Courses that learners in your region are actively enrolling in. Explore and get ahead!</p>
					</div>
				</div>
			</div>
			<div class="row">
				
				
					<?php
						$select="select * from tblcategory";
						//echo $select;
						$res=mysqli_query($conn,$select);
						while($result=mysqli_fetch_array($res))
						{ ?>
							<div class="col-sm-6 col-lg-3">
							<a href="course.php?cat_id=<?php echo "$result[category_id]";?>">
							<div class="img_hvr_box home3" style="background-image: url(../admin/themes/metronic/theme/default/demo1/dist/assets/media/category/<?php echo "$result[category_photo_path]";?>);">
							<div class="overlay">
							<div class="details">
								<h5><?php echo "$result[category_name]";?></h5>
								<?php 
									$cat=$result['category_id'];
									$q="select * from tblcourse where category_id=$cat";
									$c=mysqli_query($conn,$q);
									$cou=mysqli_num_rows($c);
								?>
								<p>over <?php echo $cou;?> courses</p>
							</div>
						</div>
						</div>

					</a>
				</div>
						<?php }
					?>
			

	</div>
</div>
	</section>	


	<!-- Our Popular Courses -->
	<section class="popular-courses pb0 pt0">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 offset-lg-3">
					<div class="main-title text-center">
						<h3 class="mt0">Students Are Viewing</h3>
						<p>Courses that students in your region are actively considering for building their next skill.</p>
					</div>
				</div>
			</div>
			<section class="our-team pb40">
		<div class="container">
			<div class="row">
	<?php
		//$cat_id=$_REQUEST['cat_id'];

		$daa=date("Y-m-d");
		$select="select * from tblcourse where course_end_date >= '$daa' Limit 0,6";
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

	<!-- Our Blog Post -->
	

<section class="popular-courses pb0 pt0">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 offset-lg-3">
					<div class="main-title text-center">
						<h3 class="mt30">Upcoming Events</h3>
						<p>Grant that I may always desire more than I can accomplish.</p>
					</div>
				</div>
			</div>
			<section class="our-team pb40">
		<div class="container">
			<div class="row">
				<?php
	$date=date("Y-m-d");
							//echo $date;
							$query="select * from tblevent where event_date > '$date'  and event_start_regestration_date <= '$date' and  event_end_regestration_date >= '$date' Limit 3";
							//echo $query;
							$res=mysqli_query($conn,$query);
							$count=mysqli_num_rows($res);
							if($count>0)
							{
							while($result=mysqli_fetch_array($res))
								{ ?>


			<div class="col-lg-6 col-xl-4">
							<div class="top_courses">
								<div class="thumb">
									<img class="img-whp" width="550px" height="275px" src="<?php echo "../admin/themes/metronic/theme/default/demo1/dist/assets/media/event/"."$result[event_photo_path]"; ?>" alt="No Image Available">
								</div>
								<div class="details">
									<div class="tc_content">
										<h5><?php echo "$result[event_name]";?></h5>
										
										<?php 
											 $eventdate=date_create($result['event_date']);
                    $eventformate=date_format($eventdate,"d/m/Y");
										?>
										
									</div>
									
									<div class="text-center" style="padding-top:10px;padding-bottom: 20px;">
										<?php $id=$result['event_id'];?>
										<a href="event.php?eid=<?php echo $id?>"><button class="btn btn-info btnblue btntransparent">Read More</button></a>
									</div>
								</div>
							</div>
						</div>
									<?php
								}
							}
							else
							{ ?>
								<h3 class="h3">No Events are available</h3>
							<?php }
						?>			</div>
				</div>
				<div class="row">
			<div class="container">
			<h1><a href="allevents.php"><button class="btn btn-info btnblue btn-rm btn-common text-center btntransparent">view all Events</button></a></h1>
		</div>
		</div>
			</section>
		</div>
	</section>
</div>
<section class="divider_home2 parallax bg-img35" data-stellar-background-ratio="0.3">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 offset-lg-3">
					<div class="main-title text-center">
						<h3 class="color-white mt0">Application Process</h3>
						
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6 col-lg-3 text-center">
					<div class="funfact_one">
						<span style="font-weight: 600; font-family: &quot;Open Sans&quot;; font-size: 16px; color: rgb(255, 255, 255); font-style: normal;">Step 1</span>
						<div class="icon"><span><img src="images/login.png" style="height:55px;"/></span></div>
						<span style="font-weight: 400; font-family: &quot;Open Sans&quot;; font-size: 18px; color: rgb(255, 255, 255); font-style: normal;">Fill Regestration Form</span>
					</div>
				</div>
				<div class="col-sm-6 col-lg-3 text-center">
					<div class="funfact_one">
						<span style="font-weight: 600; font-family: &quot;Open Sans&quot;; font-size: 16px; color: rgb(255, 255, 255); font-style: normal;">Step 2</span>
						<div class="icon"><span><img src="images/form.png"/></span></div>
						<span style="font-weight: 400; font-family: &quot;Open Sans&quot;; font-size: 18px; color: rgb(255, 255, 255); font-style: normal;">Enroll in a course</span>
					</div>
				</div>
				<div class="col-sm-6 col-lg-3 text-center">

					<div class="funfact_one">
						<span style="font-weight: 600; font-family: &quot;Open Sans&quot;; font-size: 16px; color: rgb(255, 255, 255); font-style: normal;">Step 3</span>
						<div class="icon"><span><img src="images/learning.png"/></span></div>
						<span style="font-weight: 400; font-family: &quot;Open Sans&quot;; font-size: 18px; color: rgb(255, 255, 255); font-style: normal;">Start learning</span>
					</div>
				</div>
				<div class="col-sm-6 col-lg-3 text-center">
					<div class="funfact_one">
						<span style="font-weight: 600; font-family: &quot;Open Sans&quot;; font-size: 16px; color: rgb(255, 255, 255); font-style: normal;">Step 4</span>
						<div class="icon"><span><img src="images/certificatelogo.png"/></span></div>
						<span style="font-weight: 400; font-family: &quot;Open Sans&quot;; font-size: 18px; color: rgb(255, 255, 255); font-style: normal;">Get the certificate on course completion</span>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<!-- about3 home3 -->
	<section class="home3_about2 pb10 pt30">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 offset-lg-3">
					<div class="main-title text-center">
						<h3 class="mt0">Top Rating Instructors</h3>
						<p>Edunet instructors are passionate about sharing their knowledge and helping students. They’re experts who stay active in their fields in order to deliver the most up-to-date content.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="instructor_slider_home3">
						<?php
							$query="select * from tblfaculty";
							//echo $query;
							$res=mysqli_query($conn,$query);
							while($result=mysqli_fetch_array($res))
							{ ?>
								<div class="item">
							<div class="instructor_col">
								<div class="thumb">
									<img class="img-fluid  rounded-circle" src="<?php echo "../admin/themes/metronic/theme/default/demo1/dist/assets/media/faculty/"."$result[f_photo_path]";?>" alt="No Image Available">
								</div>
								<div class="details">
									<h4><?php echo "$result[f_name]"?></h4>
									<p><?php //echo "$result[f_description]"?></p>
								</div>
							</div>
						</div>
						<?php	}
						?>
	</section>
	<section id="our-testimonials" class="our-testimonials">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 offset-lg-3">
					<div class="main-title text-center">
						<h3 class="mt0">What People Say</h3>
						<p>Satisfied customer is the best source of advertisement</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6 offset-lg-3">
					<div class="testimonialsec">
						<ul class="tes-nav">
							<li>
								<img class="img-fluid" src="images/feedback/1.jpg" alt="1.jpg"/>
							</li>
							<li>
								<img class="img-fluid" src="images/feedback/2.jpg" alt="2.jpg"/>
							</li>
							<li>
								<img class="img-fluid" src="images/feedback/3.jpg" alt="3.jpg"/>
							</li>
							<li>
								<img class="img-fluid" src="images/feedback/4.jpg" alt="4.jpg"/>
							</li>
						</ul>
						<ul class="tes-for">
							<?php 
							 	$select="select * from tblfeedback limit 4";
							 	$res=mysqli_query($conn,$select);
							 	while($result=mysqli_fetch_array($res))
							 	{							 		
							?>
							<li>
								<div class="testimonial_item">
									<div class="details">
										<h5 class="small text-lowercase"><?php echo "$result[email_id]";?></h5>
										<span class="small text-thm">student</span>
										<p><?php echo "$result[message]";?></p>
									</div>
								</div>
							</li>
								<?php
									}
								?>
							
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>


	<!-- Our Footer -->
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
<script type="text/javascript" src="js/sweetalert.min.js"></script>
<!-- Custom script for all pages --> 
<script type="text/javascript" src="js/script.js"></script>
<script>
    $(document).ready(function(){
       	$('#username_error').hide();
        $('#pass_error').hide();

       
        $('#username').keypress(function(){
          var email = $('#username').val();
          // var email_regx = /^\w+[\+\.w-]*@([\w-]+\.)*\w+[\w-]*\.([a-z]{2,4}|\d+)+/i;
          var email_regx =  /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
          if(email.match(email_regx))
          {
            $('#username_error').hide();
          }
          else
          {
            $('#username_error').html("Enter Valid Email.");
            $('#username_error').show();  
            // $('#email').focus();
          }
        });
        $('#pass').keypress(function(){
          var pass = $('#pass').val();
          // var pass_regx = ;
          if(pass.length > 8 && pass.length < 20)
          {
            $('#pass_error').hide();
          }
          else
          {
            $('#pass_error').html("password must between 8 to 20 character");
            $('#pass_error').show();  
            // $('#pass').focus();  
          }
        });
    });
    </script>
 	 
</body>
</html>
<?php
  if(isset($_REQUEST['btncheck']))
  {
    $cn=$_REQUEST['cn'];
    $se="select * from tblcertificate where serial_no=$cn";
    //echo $se;
    $count=0;
    $res=mysqli_query($conn,$se);
    $count=mysqli_num_rows($res);
    if($count>0)
    {
      
                             //echo "<script>alert('hello');</script>";
                             echo "<meta http-equiv='Refresh' content='1; URL=http://localhost/edunet/user/verified.php?cn=$cn'/>";
    }
    else
    {
       echo "<script>
  swal('Sorry!','certificate not verified','error');
                              
                            </script>";
  
    echo "<meta http-equiv='Refresh' content='1; URL=http://localhost/edunet/user/index.php'/>";
      }
  }
?>
 <script>
    $(document).ready(function(){
        // alert("hello");
        $('#signin_success').hide();
        $('#signin_error').hide();
        // $('#firstname_error').hide();

        $('#firstname').keypress(function(){
           fname = $('#firstname').val();
          var fname_regx = /^[a-zA-Z]{1,20}$/;
          if(fname.match(fname_regx))
          {
            $('#firstname_error').hide();
          }
          else
          {
            $('#firstname_error').html("Enter Valid first Name");
            $('#firstname_error').show();  
            // $('#firstname').focus();

          }

        });

        $('#middlename').keypress(function(){
           mname = $('#middlename').val();
          var mname_regx = /^[a-zA-Z]{1,16}$/;
          if(mname.match(mname_regx))
          {
            $('#middlename_error').hide();
          }
          else
          {
            $('#middlename_error').html("Enter Valid Middle Name");
            $('#middlename_error').show();
            // $('#middlename').focus();

          }

        });

        $('#lastname').keypress(function(){
           lname = $('#lastname').val();
          var lname_regx = /^[a-zA-Z]{1,16}$/;
          if(lname.match(lname_regx))
          {
            $('#lastname_error').hide();
          }
          else
          {
            $('#lastname_error').html("Enter Valid last Name");
            $('#lastname_error').show();  
            // $('#lastname').focus();

          }

        });

        $('#mobile').keypress(function(){
          mobile = $('#mobile').val();
          var mobile_regx = /^[0-9]{10}$/;
          if(mobile.match(mobile_regx))
          {
            $('#number_error').hide();
          }
          else
          {
            $('#number_error').html("Enter Valid Number..");
            $('#number_error').show();  
            // $('#mobile').focus();

          }

        });
        
        $('#filename').keypress(function(){
          filename = $('#filename').val().length;
          // alert(mobile);
          // var mobile_regx = /^[0-9]{10}$/;
          if(filename != 0)
          {
            $('#photo_error').hide();
          }
          else
          {
            $('#photo_error').html("Invalid file format..");
            $('#photo_error').show();  
            // $('#filename').focus();

          }
        });            
        $('#email').keypress(function(){
          var email = $('#email').val();
          // var email_regx = /^\w+[\+\.w-]*@([\w-]+\.)*\w+[\w-]*\.([a-z]{2,4}|\d+)+/i;
          var email_regx =  /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
          if(email.match(email_regx))
          {
            $('#email_error').hide();
          }
          else
          {
            $('#email_error').html("Enter Valid Email.");
            $('#email_error').show();  
            // $('#email').focus();
          }
        });

        $('#pass').keypress(function(){
          var pass = $('#pass').val();
          // var pass_regx = ;
          if(pass.length > 8 && pass.length < 20)
          {
            $('#pass_error').hide();
          }
          else
          {
            $('#pass_error').html("password must between 8 to 20 character");
            $('#pass_error').show();  
            // $('#pass').focus();  
          }
        });
       
        
    });
    </script>
      </body>
</html>
<?php 

if(isset($_POST['btnsu']))
{
  // echo "<script>alert('Button Pressed...');</script>";
  $fname    = $_REQUEST['firstname'];
  $mname    =  $_REQUEST['middlename'];
  $lname    =  $_REQUEST['lastname'];
  $address  =  $_REQUEST['address'];
  $mobile   =  $_REQUEST['mobile'];  
  $photo    = $_FILES['photo'];
  $email    =  $_REQUEST['email'];
  $pass     =  $_REQUEST['pass'];     
   $uniquesavename=time().uniqid(rand());   
  $image_tmp_name=$_FILES['photo']['tmp_name'];
   $upload_folder_name="../admin/themes/metronic/theme/default/demo1/dist/assets/media/user/".$uniquesavename.$_FILES['photo']['name'];
  $user_img_type=$_FILES['photo']['type'];
  $photo_size = $_FILES['photo']['size'];//30720byte = 30kb =0.0293mb = 0.00003gb //2097152

   $store=$uniquesavename.$_FILES['photo']['name'];
  // echo "<script>alert('$image_tmp_name');</script>";
  // echo "<script>alert('$upload_folder_name');</script>";
  // echo "<script>alert('$user_img_type');</script>";
  if( empty($fname) || empty($mname) || empty($lname) || empty($address) || empty($mobile) || empty($photo) || empty($email) || empty($pass))
  {
    echo "<script>   
              $(document).ready(function(){
                  $('#firstname_error').html('*'); 
                  $('#middlename_error').html('*');  
                  $('#lastname_error').html('*');  
                  $('#address_error').html('*');  
                  $('#number_error').html('*');  
                  $('#photo_error').html('*');  
                  $('#email_error').html('*');  
                  $('#pass_error').html('*'); 
                // $('#all_error').show();
              });
          </script>";
  	}
  	else
  	{
        if($user_img_type=="image/jpeg" || $user_img_type=="image/jpg" || $user_img_type=="image/png")
        {
            $encode_pass = base64_encode($pass);
            if(filter_var($email,FILTER_VALIDATE_EMAIL))
            {
                if(preg_match("/^[a-zA-Z]{1,16}$/",$fname))
                {                
                    if(preg_match("/^[a-zA-Z]{1,16}$/",$mname))
                    {               
                        if(preg_match("/^[a-zA-Z]{1,16}$/",$lname))
                        {
                            if(preg_match("/^[0-9]{10}$/",$mobile))
                            {
                               	$select="select * from tbluser where u_email_id='$email'";
                                $res=mysqli_query($conn,$select);
                              	$count=mysqli_num_rows($res);
                             	// echo $count;
                                if($count>0)
	                            {
                                  	echo "<script>   
		                             	$(document).ready(function(){
		                              	$('#email_error').html('email already exists..');    
		                    			$('#email_error').show();
		                                });
                                    </script>";
                                    echo "<meta http-equiv='Refresh' content='1; URL=http://localhost/edunet/user/index.php?eae'/>";
	                            }
	                            else
	                            {
	                                move_uploaded_file($image_tmp_name,$upload_folder_name);
	                                $insert = "insert into tbluser values(NULL,'$fname','$mname','$lname','$store','$address', $mobile,'$email','$encode_pass','Active')";
	                                $insert_row=mysqli_query($conn,$insert);
                                    if($insert_row > 0)
                                    {
	                                    echo "<script>   
	                                        $(document).ready(function(){
	                                        $('#signin_success').html('Sign In success Fully..');    
	                                        $('#signin_success').show();
	                                        });
	                                        </script>";                                                    
	                                    $fullname = $fname." ".$lname;
                                     	require   'PHPMailer/PHPMailerAutoload.php';
										$mail =new PHPMailer();
										$mail ->isSMTP();
										$mail ->SMTPAuth = true;
										$mail ->SMTPSecure = 'ssl';
										$mail ->Host = "smtp.gmail.com";
										$mail ->Port = 465;
										$mail ->isHTML(true);
										$mail ->Username = "edunetbrm@gmail.com";
										$mail ->Password = '8zwvepeyul';
										$mail ->SetFrom("edunetbrm@gmail.com");
										$mail ->Subject = 'hello world';
										$mail->Subject = 'This Mail Send By edunet';
										$mail->Body    = 'you are suceess fully regestred in Edunet';
										$mail->AltBody = 'welcom to Edunet';
										$username=$email;
										$mail ->AddAddress($username, $fullname);

						                if(!$mail->send()) 
						                {
						                    echo "<script>   
						                        $(document).ready(function(){
						                        $('#login_failed').html('Email Could not Be Sent. Please Connect To Internet.');    
						                        $('#login_failed').show();
						                        });
						                    </script>";
						              		unset($_SESSION['fullname']);
						                    unset($_SESSION['userid']);
						                } 
						                else 
						                {
						                    echo "<script>   
						                        $(document).ready(function(){
						                        $('#login_success').html('Email Send Successfully.');    
						                                  $('#login_success').show();
						                        });
						                        </script>";
						                }
                						echo "<meta http-equiv='Refresh' content='1; URL=http://localhost/edunet/user/index.php?surg'/>";
        							}           
                                    else
                                    {
                                      echo "<script>   
                                            $(document).ready(function(){
                                            $('#signin_error').html('Problem In Sign IN..');    
                                            $('#signin_error').show();
                                            });
                                            </script>";
                                        echo "<meta http-equiv='Refresh' content='10; URL=http://localhost/edunet/user/index.php?pisi'/>";
                                    }
                                }
                            }
                            else
                            {
                                echo "<script>   
                                      $(document).ready(function(){
                                         $('#number_error').html('Enter Valid mobile Number); 
                                        $('#number_error').show();
                                      });
                                    </script>";
                            }
                        }
	                    else
	                    {
	                        echo "<script>   
	                                  $(document).ready(function(){
	                                     $('#lastname_error').html('Enter Valid Last Name'); 
	                                    $('#lastname_error').show();
	                                  });
	                                </script>";
	                    }
	                }
                else
                {
                    
                    echo "<script>   
                      $(document).ready(function(){
                         $('#middlename_error').html('Enter Valid Middle Name'); 
                        $('#middlename_error').show();
                      });
                  </script>";
                }
            }
        else
        {
            echo "<script>   
              $(document).ready(function(){
                 $('#firstname_error').html('Enter Valid First Name'); 
                $('#firstname_error').show();
              });
          </script>";
             

        }
    }
else
{
    echo "<script>   
          $(document).ready(function(){
              $('#email_error').html('Please Enter Valid Email');     
            $('#email_error').show();
          });
      </script>";
    
}
      }else
{
echo "<script>   
                  $(document).ready(function(){
                      $('#photo_error').html('Please select valid photpgraph');     
                    $('#photo_error').show();
                  });
              </script>";
            
      
}  
                 }
                    

  }
?>
<?php
	
	if(isset($_REQUEST['userid1']))
	{
		echo "<script>
        swal('Done!','Login sucessfully','success');
      	</script>";
      	echo "<meta http-equiv='Refresh' content='1; URL=http://localhost/edunet/user/index.php'/>";
	}
	if(isset($_REQUEST['usin']))
	{
		echo "<script>  
        swal('Sorry!','you are currently De-Active','error');
        </script>";
        echo "<meta http-equiv='Refresh' content='1; URL=http://localhost/edunet/user/index.php'/>";
	}
	if(isset($_REQUEST['btnlogin']))
	{
		echo "<script>  
        swal('Sorry!','incorrect user-id or password','error');
        </script>";
        echo "<meta http-equiv='Refresh' content='1; URL=http://localhost/edunet/user/index.php'/>";
	}
	if(isset($_REQUEST['surg']))
	{
		echo "<script>
        swal('Done!','Sign-up Successfully,please login','success');
     	</script>";
     	echo "<meta http-equiv='Refresh' content='1; URL=http://localhost/edunet/user/index.php'/>";
	}
	if(isset($_REQUEST['msg1']))
	{
		echo "<script>
        swal('Done!','successfully enrolled','success');
     	</script>";
     	echo "<meta http-equiv='Refresh' content='1; URL=http://localhost/edunet/user/index.php'/>";
	}
	if(isset($_REQUEST['pisi']))
	{
		echo "<script>  
        swal('Sorry!','Problem in sign-up','error');
        </script>";
        echo "<meta http-equiv='Refresh' content='1; URL=http://localhost/edunet/user/index.php'/>";
	}
	
	if(isset($_REQUEST['eae']))
	{
		echo "<script>  
        swal('Sorry!','Email already exists','error');
        </script>";
        echo "<meta http-equiv='Refresh' content='1; URL=http://localhost/edunet/user/index.php'/>";
	}
	if(isset($_REQUEST['ceex']))
	{
		echo "<script>
	        swal('Sorry!','your one attempt is already done','error');               
	    	</script>";
	    	echo "<meta http-equiv='Refresh' content='1; URL=http://localhost/edunet/user/index.php'/>";
    }
     if(isset($_REQUEST['urali']))
	{
		echo "<script>
	        swal('Sorry!','you are already logged in','error');               
	    	</script>";
	    	echo "<meta http-equiv='Refresh' content='1; URL=http://localhost/edunet/user/index.php'/>";
    }
    if(isset($_REQUEST['das']))
	{
		echo "<script>
        swal('Done!','Account deleted Successfully','success');
     	</script>";
     	echo "<meta http-equiv='Refresh' content='1; URL=http://localhost/edunet/user/index.php'/>";
    }
    if(isset($_REQUEST['le']))
	{
		echo "<script>
	        swal('Sorry!','your forget password link was expired','error');               
	    	</script>";
     	echo "<meta http-equiv='Refresh' content='1; URL=http://localhost/edunet/user/index.php'/>";
    }
?>
<?php
if(isset($_SESSION['credit_exam_id']))
{
	//terminate sesstion after 24 hours
	$now = time();
    if($now > $_SESSION['expire'])
    {
    	unset($_SESSION['start']);
    	unset($_SESSION['expire']);
       unset($_SESSION['credit_exam_id']);
    }
}

?>
<script>
    $(document).ready(function(){
      $("#change_failed").hide();
      $("#ummatch_password").hide();
      $("#change_success").hide();
   
   
      $('#currentpassword').keydown(function(){
          // alert("heoolonckjkc");
          var currpass = $('#currentpassword').val();
          // var pass_regx = ;
          if(currpass.length > 8 && currpass.length < 20)
          {
            $('#current_error').hide();
          }
          else
          {
            $('#current_error').html("password must between 8 to 20 character");
            $('#current_error').show();  
            // $('#pass').focus();  
          }
        });

        $('#newpassword').keydown(function(){
          // alert("heoolonckjkc");
          var newpass = $('#newpassword').val();
          // var pass_regx = ;
          if(newpass.length > 8 && newpass.length < 20)
          {
            $('#new_error').hide();
          }
          else
          {
            $('#new_error').html("password must between 8 to 20 character");
            $('#new_error').show();  
            // $('#pass').focus();  
          }
        });
        
        $('#confirmpassword').keydown(function(){
          // alert("heoolonckjkc");
          var confpass = $('#confirmpassword').val();
          // var pass_regx = ;
          if(confpass.length > 8 && confpass.length < 20)
          {
            $('#confirm_error').hide();
          }
          else
          {
            $('#confirm_error').html("password must between 8 to 20 character");
            $('#confirm_error').show();  
            // $('#pass').focus();  
          }
        });
    });

   
  </script>
  <?php
if(isset($_REQUEST['changepassword']))
{
	echo $id;
    $select = "select  * from  tbluser where u_id=$id";
    // echo $select;
    $data = mysqli_query($conn,$select);
    $result = mysqli_fetch_array($data);
    // print_r($result);
    $dbpassword = $result['u_password'];
    $dbuserid   = $result['u_id'];
    // echo $userid;
    // return;
    $dbdecodepass = base64_decode($dbpassword);
    // echo $dbpassword;
    // echo $dbdecodepass;
    if(isset($_REQUEST['changepassword']))
    {
        $formcurrentpassword = $_REQUEST['currentpassword'];
        $formnewpassword = $_REQUEST['newpassword'];
        $formconfirmpassword = $_REQUEST['confirmpassword'];
        if( empty($formcurrentpassword) || empty($formnewpassword) || empty($formconfirmpassword) )
        {
            echo "<script>
                $(document).ready(function(){
                  $('#current_error').html('Enter current password');
                  $('#new_error').html('Enter new password');
                  $('#current_error').show();
                  $('#new_error').show();
                  $('#confirm_error').html('Enter confirm password');
                  $('#confirm_error').show();
                }); 
                </script>";
        }
        else
        {
          if($dbdecodepass == $formcurrentpassword)
          { 

             if($formnewpassword == $formconfirmpassword)
             {
                $encodenewpass = base64_encode($formnewpassword);

                $update = "update tbluser set u_password='$encodenewpass' where u_id=$id";
                $data = mysqli_query($conn,$update);
                // $row  = mysqli_num_rows($data);
                // return;
                // $row = mysqli_num_rows($data);

                if( $data)
                {
                  echo "<script>
                  $(document).ready(function(){
                              $('#change_success').html('password change successfully..');
                              $('#change_success').show(); 
                            });
                        </script>";
                  echo "<meta http-equiv='Refresh' content='1; URL=http://localhost/edunet/user/index.php'/>";                       
                } 
                else
                {
                  echo "<script>
                          $(document).ready(function(){
                            swal('Opps!','Password Does not changed..','error');
                          });
                        </script>";
                }
             }
             else
             {
                  echo "<script>
                          $(document).ready(function(){
                            $('#ummatch_password').html('Confirm Password not match with New Password.');
                            $('#ummatch_password').show(); 
                          });
                      </script>";
             }
              
          }
          else
          {
              echo "<script>
                        $(document).ready(function(){
                           $('#ummatch_password').html('Current password Is Invalid..');
                           $('#ummatch_password').show(); 
                        });
                    </script>";
          }
        }
    }
    else
    {
    	echo "unsucessful.............";
    }
}
?>
<script type="text/javascript">
function check()
{
	var c=confirm("Want To Delete???");
	if(c == true)
		return true;
	else
		return false;
	
	
}
function checksign()
{
	var c=confirm("Want To sign out???");
	if(c == true)
		return true;
	else
		return false;
	
	
}
</script>