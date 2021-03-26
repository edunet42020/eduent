<?php
	include_once("connection.php");
	session_start();
	if(!isset($_SESSION['id']))
{
	//header("Location:page-login.php");
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
<title>Edunet || page-about</title>
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
	<!-- Inner Page Breadcrumb -->
	<section class="inner_page_breadcrumb">
	</section>

	<!-- About Text Content -->
	<section class="about-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="about_content">
						<h3>about EduNet</h3>
						<p class="color-black22 mt20">Learning platform that connects world-class instructors with curious minds. We bring best online courses at your fingertips at the most affordable prices.</p>
						<p class="mt15">you can also get a certificate for it and you can use certificate of edunet worldwide.</p>
						<p class="mt25">The EduNEt is the Institute To provide Online Education and established in the year 2020 and it's offering Courses. Considering the growing demand of the present day's professional education, geographical expansion of the World and the increasing number of population, the society has decided to enter in this thrust area of education. An EduNet is one of the premier institutions dedicated to provide quality education in a fully-integrated environment. The Institute is located in the heart of Surat city near S. v. Patel Collage sumul dairy Road. EduNet is committed to achieve excellence in the academic development of students and professionals.</p>
						<p class="mt30">In EduNet, you have one exam after week, most probably on Sunday, you have to attend exam, you have 10 questions per week, once you submit your answer, then after the correct score of the question (1 score per one correct answer) it will increase your credit and once you collect 100 credits then you have gotten 10% discount on enrollment of any course.
</p>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="about_thumb">
						<img class="img-fluid" src="images/about/8.jpg" alt="8.jpg" style="padding-top:75px; ">
					</div>
				</div>
			</div>
			<div class="row mb60">
				<div class="col-lg-12 text-center mt60">
					<h3 class="fz26">Our Story</h3>
				</div>
				<div class="col-lg-12 text-center mt40">
					<ul class="funfact_two_details">
						<li class="list-inline-item">
							<div class="funfact_two text-left">
								<div class="details">
									<h5>CERTIFIED TEACHERS</h5>
									<?php 
										$total="select count(f_id) as total from `tblfaculty`";
										$res1=mysqli_query($conn,$total);
										$row=mysqli_fetch_array($res1);
										$totalteacher=$row['total'];
										//echo $totalteacher;
									?>
									<div class="timer"><?php echo "$totalteacher";?></div>
								</div>
								</div>
						</li>
						<li class="list-inline-item">
							<div class="funfact_two text-left">
								<div class="details">
									<h5>STUDENTS ENROLLED</h5>
									<?php
									$total1="select count(u_id) as total from `tbluser`";
										$res2=mysqli_query($conn,$total1);
										$row1=mysqli_fetch_array($res2);
										$totalstudent=$row1['total'];
										?>
									<div class="timer"><?php echo "$totalstudent";?></div>
								</div>
							</div>
						</li>
						<li class="list-inline-item">
							<div class="funfact_two text-left">
								<div class="details">
									<h5>COMPLETE COURSES</h5>
									<?php
									$total2="select count(course_id) as total from `tblcourse`";
										$res3=mysqli_query($conn,$total2);
										$row2=mysqli_fetch_array($res3);
										$totalcourse=$row2['total'];
										?>
									<div class="timer"><?php echo "$totalcourse";?></div>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6">
					<div class="about_whoweare">
						<h4><a href="allcourses.php"><button class='btn btn-info btnblue btntransparent'>Modern Courses</button></a></h4>
						<p class="mt25"> In our platform, we provide you the best courses with all modern Technologies. We will support you throughout the courses when you need it.</p>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="about_whoweare">
						<h4><a href="page-instructors.php"><button class='btn btn-info btnblue btntransparent'>High-profile Faculties</button></a></h4>
						<p class="mt25"> In our platform, we provide you teachers who have at least 15 years of teaching experience with a gold medalist in their own fields. This teacher will give the topic explanation in a vast and engaging manner.</p>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="about_whoweare">
						<h4><a href="news.php"><button class='btn btn-info btnblue btntransparent'>Latest News</button></a></h4>
						<p class="mt25"> we will provide you with the news on behalf of the topic you have registered on our platform. you will get the news as soon as we get it.</p>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="about_whoweare">
						<h4><a href="allevents.php"><button class='btn btn-info btnblue btntransparent'>Cultural Events</button></a></h4>
						<p class="mt25"> We will provide you with information regarding the events that are happening around the world. The Programming Events will be shown here happening in the global.</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Divider -->
	<section class="divider_home1 bg-img2 parallax" data-stellar-background-ratio="0.3">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="divider-one">
						<p class="color-white">STARTING ONLINE LEARNING</p>
						<h1 class="color-white text-uppercase">Enhance your skIlls wIth best OnlIne courses</h1>
						<a class="btn btn-transparent divider-btn" href="page-login.php">Get Started Now</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<!-- Our Team Members -->
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
									<img class="img img-fluid rounded-circle" src="<?php echo "../admin/themes/metronic/theme/default/demo1/dist/assets/media/faculty/"."$result[f_photo_path]";?>" alt="brinda">
								</div>
								<div class="details">
									<h4><?php echo "$result[f_name]"?></h4>
									<p><?php echo "$result[f_description]"?></p>
								</div>
							</div>
						</div>
						<?php	}
						?>
	</section>

	<!-- Our Testimonials -->
	<section id="our-testimonials" class="our-testimonials">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 offset-lg-3">
					<div class="main-title text-center">
						<h3 class="mt0">What People Say</h3>
						<p>Satisfied User is the best source of advertisement</p>
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
							</li>
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