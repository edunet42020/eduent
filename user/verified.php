<?php
	include_once("connection.php");
	session_start();
	if(isset($_REQUEST['cn']))
	{
		$cn=$_REQUEST['cn'];
		//echo $cn;
	}
	else
	{
		header("location:index.php");
	}
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
 
<!-- Responsive stylesheet -->
<link rel="stylesheet" href="css/responsive.css">
<!-- Title -->
<title>Edunet || page-Certificate verified</title>
<!-- Favicon -->
<link href="images/favicon.ico" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
<link href="images/favicon.ico" sizes="128x128" rel="shortcut icon" />
<style type="text/css">
	.pad{
		padding-bottom: 20px;
	}
	.lpad{
		padding-left:65px;
	}
	.lpadd{
		padding-left: 45px;
	}
	table
  { 
      border-collapse:separate; 
      border-spacing: 0 10px; 
  } 
  th
  { 
    color: black; 
  } 
  th,td{ 
    width: 0px; 
    text-align: center; 
    border:none; 
    padding: 0px;
    border-bottom: 1px solid #808080 ;
  } 
  h2
  { 
    color: #4287f5; 
  } 
   .container1
  {
    padding-top: 0px;
    padding-right: auto;
       padding-left: auto;
  }
</style>
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

<?php 
	$select="select * from tblcertificate where serial_no = $cn";
	//echo $select;
	$res=mysqli_query($conn,$select);
	$result=mysqli_fetch_array($res);
	$course_id=$result['course_id'];
	$user_id=$result['user_id'];
	//echo $course_id." ".$user_id;
	$select_course="select * from tblcourse where course_id=$course_id";
	//echo $select_course;
	$rescourse=mysqli_query($conn,$select_course);
	$resultcourse=mysqli_fetch_array($rescourse);
	$select_user="select * from tbluser where u_id=$user_id";
	//echo $select_course;
	$resuser=mysqli_query($conn,$select_user);
	$resultuser=mysqli_fetch_array($resuser);
	$select_result="select * from tblresult where user_id=$user_id and course_id=$course_id";
	//echo $select_result;
	$resresult=mysqli_query($conn,$select_result);
	$resultresult=mysqli_fetch_array($resresult);
?>
<section style="padding:20px;">
	 <form name="myform" action="#" method="post">
	         <section class="home3_about2 pb10 pt30">
			
		          <div class="container1">
		    
		            <div class="nav shadow" style="height:auto;width:auto;">
			        
					        <div class="col-lg-5 col-md-6 col-sm-12 col-xs">
  						<a href="<?php echo "../admin/themes/metronic/theme/default/demo1/dist/assets/media/user/"."$resultuser[u_photo_path]"?>">
  						        <img class="img-thumbnail" src="<?php echo "../admin/themes/metronic/theme/default/demo1/dist/assets/media/user/"."$resultuser[u_photo_path]";?>" alt="brinda" style="height: 350px;width:auto;padding-left: 80px;">
  						    </a>
					        </div>
         
					      <div class="col-lg-7 col-md-6 col-sm-12 col-xs-12">
						      <table style="color:black">
																		  <tr>
									  <th class="pad lpadd" style="padding-top: 40px;"><?php echo "Student Name"; ?></th>
									  <td class="pad lpad" style="padding-top: 40px;text-transform: capitalize;"><?php echo $resultuser['u_first_name']." ".$resultuser['u_middle_name']." ".$resultuser['u_last_name'];?></td>
                								  </tr>
								<tr>
									<th class="pad lpadd"><?php echo " Course Name"; ?></th>
									<td class="pad lpad"><?php echo $resultcourse['course_name']; ?></td>
                 
								</tr>
								<tr>
									<th class="pad lpadd"><?php echo "course start date"; ?></th>
									<?php 
										$date=date("d-m-Y");

									?>
									<td class="pad lpad"><?php echo $date/*$resultcourse['course_start_date']; */?></td>
                 
								</tr>
								<tr>
									<th class="pad lpadd"><?php echo " course end date"; ?></th>
									<td class="pad lpad"><?php echo $resultcourse['course_end_date'];?></td>

								</tr>
								<tr>
									<th class="pad lpadd"><?php echo " percentage	"; ?></th>
									 <td class="pad lpad"><?php echo $resultresult['r_score'];?> %</td>
                
								</tr>
								<tr>
									<th class="pad lpadd"><?php echo " Email"; ?></th>
									<td class="pad lpad"><?php echo $resultuser['u_email_id'];?><td>

								</tr>
								
					    </table>
				    </div>
			    </div>
		    </div>
	    </section>
    </form>
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
<!-- Custom script for all pages --> 
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/sweetalert.min.js"></script>
<script type="text/javascript" src="assets/js/nivo-lightbox.min.js"></script>
</body>
<?Php
	  if(isset($_REQUEST['cn']))
	{
		echo "<script>
	        swal('Done!','certificate verified','success');               
	    	</script>";
    }
?>
</html>