<?php
	include_once("connection.php");
	session_start();
	if(isset($_SESSION['id']))
	{
		$id=$_SESSION['id'];
	}
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<!-- Mirrored from grandetest.com/theme/edumy-html/page-instructors-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Jan 2020 17:30:44 GMT -->
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
<title>Edunet || Instructor Details</title>
<!-- Favicon -->
<link href="images/favicon.ico" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
<link href="images/favicon.ico" sizes="128x128" rel="shortcut icon" />

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="wrapper">
	<div class="preloader"></div>

	<!-- Main Header Nav -->
	<?php include_once("subheader.php"); ?>

	<!-- Inner Page Breadcrumb -->
	<section class="inner_page_breadcrumb">
		</section>
<?php
       
        //echo $cid;
        $fid=$_REQUEST['iid'];
        //echo $fid;
         $query1="select * from tblfaculty where f_id=$fid";

        //echo $query;
        $res1=mysqli_query($conn,$query1);
        $result1=mysqli_fetch_array($res1);
        $photofac=$result1['f_photo_path'];
      
        $teachername=$result1['f_name'];
   ?>
	<!-- Our Team Members -->
	<section class="our-team">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="instructor_personal_infor">
						<div class="instructor_thumb text-center" style="padding-top: 100px;">
							
							<img src="<?php echo "../admin/themes/metronic/theme/default/demo1/dist/assets/media/faculty/".$photofac;?>" alt="Image Not Found" class="img-thumbnail" style="height:50vh;width:auto;border-radius:0%;">
							<h1 style="color: #000;
    font-size: 35px;
    margin-bottom: 0;
  text-transform: capitalize;"><?php echo $teachername;?></h1>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 col-lg-8 col-xl-9">
					<div class="row">
						<div class="col-lg-12">
							<div class="instructor_personal_infor">
								<h4>Hello! This is my story.</h4>
								<p>Hello! <?php echo "$result1[f_description]";?></p>
								<ul class="instructor_estimate">
									<li>Included in my estimate:</li>
									<li>Custom illustrations</li>
									<li>Stock images</li>
									<li>Any final files you need</li>
								</ul>
								<p>If you have a specific budget or deadline, let me know and I will work with you!</p>
								<h4>My Education</h4>
								<div class="my_resume_eduarea">
									<?php $words = explode(",", $result1['f_qualification']); 
										?>
										<?php 
										$c=1;
										foreach($words as $word)
{ 
									if($c % 2 == 1)
									{ ?>
									<div class="content">
										<div class="circle"></div>
										
										<h4 style="text-transform:capitalize;text-align: left;"><?php echo $word;?></h4>
									</div>
							<?php	}
								else
								{ ?>
									<div class="content style2">
										<div class="circle"></div>
										<h4 style="text-transform:capitalize;text-align: left;"><?php echo $word;?></h4>
									</div>
								<?php }
								$c= $c+1;
									 } ?>
									
								</div>
								<h4>My courses</h4>
								<section class="our-team pb40">
		<div class="container">
			<div class="row">
	<?php
		//$daa=date("Y-m-d");
		$fid=$_REQUEST['iid'];
		$select="select * from tblcourse where course_t_id=$fid";
		$res=mysqli_query($conn,$select);
		$count=mysqli_num_rows($res);
		if($count>0)
		{
		while($result=mysqli_fetch_array($res))
		{ ?>
			<div class="col-lg-6 col-xl-4">
							<div class="top_courses">
								<div class="thumb">
									<img class="img-whp" src="<?php echo "../admin/themes/metronic/theme/default/demo1/dist/assets/media/course/"."$result[course_photo_path]";?>" alt="No Image Available" style="height:250px;">
								</div>
								<div class="details">
									<div class="tc_content">
										<?php ?>
										<h5 style="text-transform: capitalize;"><?php echo "$result[course_name]";?></h5>
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
										<div class="tc_price float-right"><strike><i class="fa fa-inr" style="font-size:18px;"></i>  12000</strike>                  <i class="fa fa-inr" style="font-size:18px;"></i><?php echo "$result[course_prize]";?></div>
									</div>
									<div class="text-center" style="padding-top:10px;padding-bottom: 20px;">
                      
                            </div>
									
								</div>
							</div>
						</div>
	<?php	}
}
else
{
	//echo "<h1>No courses are available</h1>";
		echo "<h1><div class='text-danger' style='padding-left:450px;'>No courses are available</div></h1>";
			
}
		?>
					</div>
				</div>
			</section>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-xl-3">
					<div class="selected_filter_widget style2 mb30">
						<div class="siderbar_contact_widget">
							<h4>Contact</h4>
							<p>Phone Number</p>
							<i><?php echo $result1['f_ph_no'];?></i>
							<p>Email</p>
							<i><a href="https://grandetest.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="9df4f3fbf2ddfcf1f4e9e8fbfcf3b3fef2f0"><?php echo $result1['f_emailid'];?></a></i>
						</div>
					</div>
					<?php 
						$selectcourse="select count(*) from tblcourse where course_t_id=$fid";
						//echo $selectcourse;
						$datacourse=mysqli_query($conn,$selectcourse);
						$countcourse=mysqli_fetch_array($datacourse);
						$count=$countcourse[0];
						$selectstudent="select count(user_id) from tblusercourse where course_id In (SELECT course_id FROM `tblcourse` WHERE `course_t_id` = $fid)";
						//echo $selectstudent;
						$datastudent=mysqli_query($conn,$selectstudent);
						$countstudent=mysqli_fetch_array($datastudent);
						$counts=$countstudent[0];

					?>
					<div class="selected_filter_widget style2">
						<div class="siderbar_contact_widget">
							<p>Current status</p>
							<?php if ($result1['f_status']=='Active')
							{ ?>
								<i class="text-success">Active</i>
							<?php }
							else
								{ ?>
									<i class="text-danger">De-Active</i>
								 <?php }
							?>
							<p>Students</p>
							<i><?php echo $counts;?></i>
							<p>Courses</p>
							<i><?php echo $count;?></i>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Our Footer -->
	<?php include_once("footer.php"); ?>
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

<!-- Mirrored from grandetest.com/theme/edumy-html/page-instructors-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Jan 2020 17:30:44 GMT -->
</html>