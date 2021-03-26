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
<link rel="stylesheet" href="css/styleevent.css">
 
<!-- Responsive stylesheet -->
<link rel="stylesheet" href="css/responsive.css">
<!-- Title -->
<title>Edunet || Event</title>
<!-- Favicon -->
<link href="images/favicon.ico" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
<link href="images/favicon.ico" sizes="128x128" rel="shortcut icon" />
<script type="text/javascript">
        function check()
        {
             swal('oops!','Regestration closed','error');
        }
        function check1()
         {
              swal('Done!','Regestration Comming soon','success');
        }
    </script>
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
	    <div class="event-area default-padding" style="padding-top: 80px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                	<?php 
                	$id=$_REQUEST['eid'];
                	$query="select * from tblevent where event_id=$id";
							//echo $query;
							$res=mysqli_query($conn,$query);
							$count=mysqli_num_rows($res);
							if($count>0)
							{
							while($result=mysqli_fetch_array($res))
								{ ?>

                    <div class="event-items">
                        <!-- Single Item -->
                        <div class="item">
                            <div class="col-md-5 thumb"><img width="550px" height="275px" src="<?php echo "../admin/themes/metronic/theme/default/demo1/dist/assets/media/event/"."$result[event_photo_path]"; ?>" alt="No Image Available"></div>
                            <div class="col-md-7 info">
                                <div class="info-box">
                                    <div class="date">
                                    	<?php $eventdate=date_create($result['event_date']);
                    $eventformate=date_format($eventdate,"d");
                    $eventmon=date_format($eventdate,"M, Y");?>
                                        <strong><?php echo $eventformate;?></strong> <?php echo $eventmon;?>
                                    </div>
                                    <div class="content">
                                        <h4>
                                            <a href="#"><?php echo "$result[event_name]";?></a>
                                        </h4>
                                        <ul>
                                            <li><i class="fas fa-clock"></i><?php echo "$result[event_time]"; ?></li>
                                            <li><i class="fas fa-map-marked-alt"></i><?php echo "$result[event_place]"; ?></li>
                                            <li><i class=""></i> <?php echo "$result[event_fees]"; ?> </li>
                                        </ul>
                                        <p>
                                            <?php echo "$result[event_description]"; ?>
                                        </p>
                                        <div class="">
                                            <a href="#" class="">
                                                <?php $date = $result['event_end_regestration_date'];
			                    						$today = date('Y-m-d');
			                 						  				$sdate = $result['event_start_regestration_date'];
			                   								 $dd = strtotime($date);
			                   								 $to = strtotime($today);
			                    							$sto = strtotime($sdate);
                    									?>
                    									<?php
                    									if($sto > $to)
                    {
                       echo "<h1><button class='btn btn-success btngreen text-center btntransparent' onclick=\"check1()\">Registration Comming soon</button></h1>"; 
                    }
                    else if($to > $dd)
                    {
//                        echo strtotime($todate)."is larger date<br>";
                          echo "<h1><button class='btn btn-danger btnred btn-rm btn text-center btntransparent' onclick=\"check()\">Registration close</button></h1>";
//                           
                    }
                    else
                    {  //                        echo "end date is larger";?>
                <h1><a href="regestrationevent.php?e_id=<?php echo "$result[event_id]";?>&fees=<?php echo "$result[event_fees]"; ?>">
														<button class='btn btn-success btngreen btntransparent '>Register</button></a></h1>

                     <?php } ?>
												
                                            </a>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        
                        
                    </div>
                <?php } 
            }?>
                </div>
                
            </div>
        </div>
    </div>
	<!-- Inner Page Breadcrumb -->
	
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
<script type="text/javascript" src="js/sweetalert.min.js"></script>
<!-- Custom script for all pages --> 
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="assets/js/nivo-lightbox.min.js"></script>
<script type="text/javascript" src="assets/js/sweetalert.min.js"></script>

</body>
</html>
