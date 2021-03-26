<?php
	include_once("connection.php");
	session_start();
if(!isset($_SESSION['id']))
{
}
else
{
		$id=$_SESSION['id'];
		$query="select u_first_name , u_last_name , u_photo_path from tbluser where u_id=$id";
		//echo $query;
		$res=mysqli_query($conn,$query);
		$result=mysqli_fetch_array($res);
		$username = $result['u_first_name']." ".$result['u_last_name'];
		
		$photo=$result['u_photo_path'];
	
	}
?>
<div class="header_top home3">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-4 col-xl-4">
					<ul class="home3_header_top_contact pull-left">
						<li class="list-inline-item"><a href="#">98765 43210</a></li>
						<li class="list-inline-item"><a href="#"><span class="__cf_email__" data-cfemail="ef878a838380af8a8b9a8296c18c8082">edunetbrm@gmail.com</span></a></li>
					</ul>
				</div>
				<div class="col-lg-8 col-md-8 col-sm-8 col-xl-8">
			       <ul class="sign_up_btn pull-right dn-smd mt15 home3">

			 <?php 
			 if(isset($_SESSION['id']))
			 {  
			  $today = date('Y-m-d');  
	
			 $s1="select ce_date from tblcreditexam where ce_date='$today'";
	
			 $res1=mysqli_query($conn,$s1);
			 $c1=mysqli_num_rows($res1);
			 if($c1>0)
			 { ?>
			 	<li class="list-inline-item"><a href="creditexam.php" class="btn btn-md"><i class="flaticon-megaphone"></i><span class="dn-md">Attend exam</span></a></li>
			 <?php }
			 } ?>
			 
			 			 <li class="list-inline-item"><a class="btn btn-md" href="#popup1"><i class="flaticon-megaphone"></i><span class="dn-md">verify cerificate</a></span></li>
						<div id="popup1" class="overlay1" style="padding-top: 150px;">
						    <div class="popup1">
						        <a class="close1" href="#">&times;</a>
						        <div class="content1">
						           <form action="" method="post">
							<div class="heading1">
								<h3 class="text-center">certificate verification</h3>
							</div>
							 <div class="form-group1">
							 	 <label>certificate serial number:</label>
						    	<input type="number" class="form-control" placeholder="enter certificate serial number" id="cn" name="cn">
							</div>
							<br>
							<button type="submit" class="btn btn-log btn-block btn-thm2 btn-success" name="btncheck">verify</button>
						</form>
						        </div>
						    </div>
						</div>
						<?php
		             
						if(!isset($_SESSION['id']))
						{
		               ?>

		                <li class="list-inline-item"><a href="../faculty/regestration.php" class="btn btn-md"><i class="flaticon-megaphone"></i><span class="dn-md">   Teach on EduNet</span></a></li>
		              <?php } ?>
		               <?php
		             
						if(!isset($_SESSION['id']))
						{
		               ?>
		                
		              
		                <li class="list-inline-item"><a href="#" class="btn btn-md" data-toggle="modal" data-target="#exampleModalCenter"><i class="flaticon-user"></i> <span class="dn-md">Login/Register</span></a></li>
		                <div class="sign_up_modal modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-hidden="true">
	  	<div class="modal-dialog modal-dialog-centered" role="document">
	    	<div class="modal-content">
		      	<div class="modal-header">
		        	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		      	</div>
	    		<ul class="sign_up_tab nav nav-tabs" id="myTab" role="tablist">
				  	<li class="nav-item">
				    	<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Login</a>
				  	</li>
				  	<li class="nav-item">
				    	<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Register</a>
				  	</li>
				</ul>
				<div class="tab-content" id="myTabContent">
				  	<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
						<div class="login_form">
							<form action="checkuser.php" name="myform">
								<div class="heading">
									<h3 class="text-center">Login to your account</h3>
									<p class="text-center">Don't have an account? <a class="text-thm" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Sign Up!</a></p>
								</div>
								 <div class="form-group">
							    	<input type="email" class="form-control" id="username" placeholder="Email Address" name="userid">
							    	<small id="username_error" class="text-danger"></small>
								</div>
								<div class="form-group">
							    	<input type="password" class="form-control" id="pass" placeholder="Password" name="userpwd">
							    	<small id="pass_error" class="text-danger"></small>
								</div>
								<div class="form-group form-check">
									<input type="checkbox" class="form-check-input" id="exampleCheck1">
									<label class="form-check-label" for="exampleCheck1">Remember me</label>
									<a class="tdu text-thm float-right" href="forgetpassword.php">Forgot Password?</a>
								</div>
								<button type="submit" class="btn-log btn-block btn-thm2" name="btnlogin">Login</button>
							</form>
						</div>
				  	</div>
				  	<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
						<div class="sign_up_form">
							<div class="heading">
								<h3 class="text-center">Create New Account</h3>
								<p class="text-center">Have an account? <a class="text-thm" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Login</a></p>
							</div>
								<form action="#" enctype="multipart/form-data" method="post">
								 <div class="text-center alert-success col-md-offset-4 col-md-4 col-sm-offset-4 col-sm-4" style="padding:5px;" id="signin_success"></div>
           						 <div class="text-center alert-danger col-md-offset-4 col-md-4 col-sm-offset-4 col-sm-4" style="padding:5px;" id="signin_error"></div>
								<div class="form-group">
							    	<input type="text" class="form-control" id="firstname" name="firstname" placeholder="enter your first name">
							    	<small id="firstname_error" class="text-danger"></small>
								</div>
								<div class="form-group">
							    	<input type="text" class="form-control" id="middlename" name="middlename" placeholder="enter your middle name">
							    	<small id="middlename_error" class="text-danger"></small>
								</div>
								<div class="form-group">
							    	<input type="text" class="form-control" id="lastname" name="lastname" placeholder="enter your last name">
							    	<small id="lastname_error" class="text-danger"></small>
								</div>
								<div class="form-group">
               						 <label for="">Uploade Photo:</label>
                					<input type="file" class="form-control" id="filename" placeholder="Attach File.." name="photo">
                					<small id="photo_error" class="text-danger"></small>
             					 </div>
             					 <div class="form-group">
							    	<input type="text" class="form-control" id="address" name="address" placeholder="enter your City">
							    	<small id="address_error" class="text-danger"></small>
								</div>
								 <div class="form-group">
							    	<input type="text" class="form-control" id="mobile" name="mobile" placeholder="enter your phone number">
							    	<small id="number_error" class="text-danger"></small>
								</div>
								 <div class="form-group">
							    	<input type="email" class="form-control" id="email" name="email" placeholder="enter your Email Address">
							    	<small id="email_error" class="text-danger"></small>
								</div>
								<div class="form-group">
							    	<input type="password" class="form-control" id="pass" name="pass" placeholder="enter your Password">
							    	<small id="pass_error" class="text-danger"></small>
								</div>
								<button type="submit" class="btn-log btn-block btn-thm2" name="btnsu">Register</button>
							</form>
						</div>
				  	</div>
				</div>
	    	</div>
	  	</div>
	</div>

		                <?php 
		            }
		            else
		            { ?>
		    
        				
        				
	  
        				<div class="ht_left_widget home3 float-right">
					<ul>
						<li class="list-inline-item">
							<div class="header_top_lang_widget">
								<div class="ht-widget-container">
									<div class="vertical-wrapper"> 
										<h2 class="dn-md" style="color:white;font-family:'Nunito';
    font-size: 14px;
    line-height: 1.2;">
											<img src="<?php echo "../admin/themes/metronic/theme/default/demo1/dist/assets/media/user/".$photo; ?>" class="rounded-circle" alt="" style="height:30px;width:30px;">
											<span class="text-title" style="text-transform: capitalize;"><?php echo "  ".$username;?></span> <i class="fa fa-angle-down show-down" aria-hidden="true"></i>
										</h2>
							<div class="content-vertical">
											<ul id="vertical-menu" class="mega-vertical-menu nav navbar-nav">
												<li><a href="profile.php">Profile</a></li>
												<li><a href="?userid=<?php echo $id ?>#popup2">Change password</a></li>
												<li><a onclick="return checksign();" href="usersignout.php">Sign out</a></li>
												<li><a onclick="return check();" href="delete.php">Delete account</a></li>

						</ul>
					</div>				</div>
					<div id="popup2" class="overlay1" style="padding-top: 150px;">
						    <div class="popup1">
						        <a class="close1" href="#">&times;</a>
						        <div class="heading1">
								<h3 class="text-center">Change Password</h3>
							</div>
						        <div class="content1">
						                           <form method="post" action="">
                    <div class="alert alert-danger" id="change_failed"></div>
                    <div class="alert alert-danger" id="ummatch_password"></div>
                    <div class="alert alert-success" id="change_success"></div>
                   
             
                    <div class="form-group">
                      
                      <input type="password" class="form-control" placeholder="Current password" id="currentpassword" name="currentpassword"/>
                        <small id="current_error" class="text-danger"></small>
                    </div>
                    <div class="form-group"> 
                      
                        <input type="password" class="form-control" placeholder="New Password" id="newpassword" name="newpassword"/>
                        <small id="new_error" class="text-danger"></small>
                    </div>
                    <div class="form-group">
                      
                        <input type="password" class="form-control" placeholder="Confirm Password" id="confirmpassword" name="confirmpassword"/>
                        <small id="confirm_error" class="text-danger"></small>
                    </div>
                    <div class="form-group">
                    <input type="submit" class="btn btn-log btn-block btn-thm2 btn-success"  value="Change Password" name="changepassword">
                  
                	</div>
                  <div class="form-group">
                  
                </div>
                </form>
						        </div>
						    </div>
						</div>
			</div>
		</div>
	</li>
					</ul>
				</div>

		         <?php   }
		        
		        ?>
		         
				</div>
			</div>
		</div>
	</div>
	<!-- Main Header Nav -->
	<header class="header-nav menu_style_home_three navbar-scrolltofixed stricky main-menu">
		<div class="container-fluid">
		    <!-- Ace Responsive Menu -->
		    <nav>
		        <!-- Menu Toggle btn-->
		        <div class="menu-toggle">
		            <img class="nav_logo_img img-fluid" src="images/header-logo3.png" alt="header-logo3.png">
		            <b">
utton type="button" id="menu-btn">
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		            </button>
		        </div>
		        <a href="#" class="navbar_brand float-left dn-smd">
		            <img class="logo1 img-fluid" src="images/header-logo.png" alt="header-logo.png">
		            <img class="logo2 img-fluid" src="images/header-logo2.png" alt="header-logo2.png">
		            <span>edunet</span>
		        </a>
		      
				<div class="ht_left_widget home3 float-left">
					<ul>
						<li class="list-inline-item">
							<div class="header_top_lang_widget">
								<div class="ht-widget-container">
									<div class="vertical-wrapper">
										<h2 class="title-vertical home3">
											<span class="text-title">category</span> <i class="fa fa-angle-down show-down" aria-hidden="true"></i>
										</h2>
							<div class="content-vertical">
											<ul id="vertical-menu" class="mega-vertical-menu nav navbar-nav">
						<?php
							$select="select * from tblcategory";
					
							$res=mysqli_query($conn,$select);
							while($result=mysqli_fetch_array($res))
							{ ?>
									
												<li><a href="course.php?cat_id=<?php echo "$result[category_id]";?>"><?php echo "$result[category_name]";?></a></li>
							<?php }
						?>
										
						</ul>
					</div>
					</ul>
				</div>
		        <ul id="respMenu" class="ace-responsive-menu" data-menu-style="horizontal">
		            <li class="last">
		                <a href="page-contact.php"><span class="title">Contact</span></a>
		            </li>
		              <li class="list_four">
		                <a href="news.php"><span class="title">News</span></a>
		                </li>
		            <li class="list_three">
		                
		                <a href="#"><span class="title">Events</span></a>
		                <ul>
		                    <li><a href="allevents.php">Event List</a></li>
		                </ul>
		                
		            </li>
		            <li class="list_two">
		                <a href="#"><span class="title">Courses</span></a>
		                 <?php
		             
						if(!isset($_SESSION['id']))
						{
		               ?>
	                	<ul>
		                    <li>
		                        <a href="allcourses.php">Course</a>
		                        <!-- Level Three-->
		       
		                    </li>
		                    
	                	</ul> <?php } 
	                	else
	                		{ ?>
	                			<ul>
	                				<li>
		                        <a href="allcourses.php">All Courses</a>
		                        <!-- Level Three-->
		       
		                    </li>
		                    <li>
		                        <a href="allbooks.php"><b>E-Books</b></a>
		                    </li>
		                    <li>
		                        <a href="userdashboard.php?userid=<?php echo "$_SESSION[id]"; ?>"><b>Your Courses List</b></a>
		                    </li>
		                    <?php 
		                    	$s="select course_name,course_id from tblcourse where course_id in(sELECT course_id FROM `tblusercourse` where user_id =$id)";
		                    	//echo $s;
		                    	$d=mysqli_query($conn,$s);
		                    	while($d1=mysqli_fetch_array($d))
		                    	{//echo $d1['course_name'];?>
		                     <li>
		                        <a href="coursedashboard.php?course_id=<?php echo "$d1[course_id]"; ?>"><?php echo $d1['course_name'];?></a>
		                    </li>
		                    <?php } ?>	
		                   
		                </ul>
	                		<?php } ?>
		            </li>
		             <li class="list_two">
		                <a href="page-instructors.php"><span class="title">Instructors</span></a>
		            </li>
		            <li class="list_one">
		                <a href="index.php"><span class="title">Home</span></a>
		            </li>
		        </ul>
		    </nav>
		    <!-- End of Responsive Menu -->
		</div>
	</header>
	<!-- Modal Search Button Bacground Overlay -->
    <div class="search_overlay dn-992">
		<div class="mk-fullscreen-search-overlay" id="mk-search-overlay">
		    <a href="#" class="mk-fullscreen-close" id="mk-fullscreen-close-button"><i class="fa fa-times"></i></a>
		    <div id="mk-fullscreen-search-wrapper">
		      <form method="get" id="mk-fullscreen-searchform">
		        <input type="text" value="" placeholder="Search courses..." id="mk-fullscreen-search-input">
		        <i class="flaticon-magnifying-glass fullscreen-search-icon"><input value="" type="submit"></i>
		      </form>
		    </div>
		</div>
	</div>

	<!-- Main Header Nav For Mobile -->
	<div id="page" class="stylehome1 home3 h0">
		<div class="mobile-menu">
			<div class="header stylehome1">
				<div class="main_logo_home2">
		            <img class="nav_logo_img img-fluid float-left mt20" src="images/header-logo.png" alt="header-logo.png">
		            <span>edunet</span>
				</div>
				<ul class="menu_bar_home2">
					<li class="list-inline-item">
	                	<div class="search_overlay">
						  	<!--<a id="search-button-listener2" class="mk-search-trigger mk-fullscreen-trigger" href="#">
						   		<div id="search-button2"><i class="flaticon-magnifying-glass"></i></div>
						  	</a>-->
							<div class="mk-fullscreen-search-overlay" id="mk-search-overlay2">
							    <a href="#" class="mk-fullscreen-close" id="mk-fullscreen-close-button2"><i class="fa fa-times"></i></a>
							    <div id="mk-fullscreen-search-wrapper2">
							      	<form method="get" id="mk-fullscreen-searchform2">
							        	<input type="text" value="" placeholder="Search courses..." id="mk-fullscreen-search-input2">
							        	<i class="flaticon-magnifying-glass fullscreen-search-icon"><input value="" type="submit"></i>
							      	</form>
							    </div>
							</div>
						</div>
					</li>
					<li class="list-inline-item"><a href="#menu"><span></span></a></li>
				</ul>
			</div>
		</div><!-- /.mobile-menu -->
		<nav id="menu" class="stylehome1">
			<ul>
				<li><span>Home</span>
	                <li><a href="index.php">home</a></li>
				</li>
				 <li class="list_two">
		                <a href="#"><span class="title">Courses</span></a>
		                 <?php
		             
						if(!isset($_SESSION['id']))
						{
		               ?>
	                	<ul>
		                    <li>
		                        <a href="allcourses.php">Course</a>
		                        <!-- Level Three-->
		       
		                    </li>
		                    
	                	</ul> <?php } 
	                	else
	                		{ ?>
	                			<ul>
		                   
		                    	<li>
		                        <a href="allcourses.php">All Courses</a>
		                        <!-- Level Three-->
		       
		                    </li>
		                    <li>
		                        <a href="userdashboard.php?userid=<?php echo "$_SESSION[id]"; ?>"><b>Courses List</b></a>
		                    </li>
		                    	<?php 
		                    	$s="select course_name,course_id from tblcourse where course_id in(sELECT course_id FROM `tblusercourse` where user_id =$id)";
		                    	//echo $s;
		                    	$d=mysqli_query($conn,$s);
		                    	while($d1=mysqli_fetch_array($d))
		                    	{//echo $d1['course_name'];?>
		                     <li>
		                        <a href="coursedashboard.php?course_id=<?php echo "$d1[course_id]"; ?>"><?php echo $d1['course_name'];?></a>
		                    </li>
		                    <?php } ?>	
		                </ul>
	                		<?php } ?>

		            </li>
		            <?php 
		            	if(isset($_SESSION['id']))
		            	{ ?>
		            		<li class="last">
		                <a href="allbooks.php"><span class="title">E-Books</span></a>
		            </li>
		             <?php 	} ?>
				<li><a href="page-instructors.php">Instructors</a>
				</li>
				<li><span>Events</span>
					<ul>
					<li><a href="allevents.php">Event List</a></li>
					</ul>
				</li>
	                    <li><a href="news.php">news</a></li>
			
				<li><a href="page-contact.php">Contact</a></li>
				<li><a href="verify.php">verify certificate</a></li>
				 <?php if(isset($_SESSION['id']))
				 {  
			  		$today = date('Y-m-d');  
			 		//echo $today; 	
				 $s1="select ce_date from tblcreditexam where ce_date='$today'";
				 //echo $s1;
				 $res1=mysqli_query($conn,$s1);
				 $c1=mysqli_num_rows($res1);
				 if($c1>0)
			 	 { ?>
			 		<li><a href="creditexam.php">attend an exam</a></li>
		   <?php }
			 	} ?>
				<?php  if(isset($_SESSION['id']))
				{?>
					<li class="list_two">
		                <a href="#"><img src="<?php echo "../admin/themes/metronic/theme/default/demo1/dist/assets/media/user/".$photo; ?>" class="rounded-circle" alt="" style="height:7vh;width:auto;"><span class="title"><?php echo "  ".$username;?></span></a>
		                <ul>
		                    <li>
		                        <a href="profile.php">Profile</a>
		                    </li>
		                    <li>
		                        <a href="changepassword.php?userid=<?php echo $id ?>">Change password</a>
		                    </li>
		                    <li>
		                        <a onclick="return checksign();" href="usersignout.php">Sign Out</a>
		                    </li>
		                    <li>
		                        <a onclick="return check();" href="delete.php">Delete Account</a>
		                    </li>
	                	</ul>
		               </li>
			<?php } 
			else
				{ ?>
					<li><a href="page-login.php"><span class="flaticon-user"></span> Login</a></li>
				<li><a href="page-register.php"><span class="flaticon-edit"></span> Register</a></li>
				<?php } ?>
			</ul>
		</nav>
	</div>
	