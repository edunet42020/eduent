<?php
include_once("connection.php");
//session_start();
?>
<header class="header-nav menu_style_home_one navbar-scrolltofixed stricky main-menu">
		<div class="container-fluid">
		    <!-- Ace Responsive Menu -->
		    <nav>
		        <!-- Menu Toggle btn-->
		        <div class="menu-toggle">
		            <img class="nav_logo_img img-fluid" src="images/header-logo.png" alt="header-logo.png">
		            <button type="button" id="menu-btn">
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
		        <ul id="respMenu" class="ace-responsive-menu" data-menu-style="horizontal">
		            <li>
		                <a href="index.php"><span class="title">Home</span></a>
		              </li>
		               <li class="list_two">
		                <a href="page-instructors.php"><span class="title">Instructors</span></a>
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
		                        <a href="userdashboard.php?userid=<?php echo "$_SESSION[id]"; ?>">Your Courses List</a>
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
		            <li>
		                <a href="#"><span class="title">Events</span></a>
		                <ul>
		                    <li><a href="allevents.php">Event List</a></li>
		                </ul>
		            </li>
		        <?php 
		            	if(isset($_SESSION['id']))
		            	{ ?>
		            		<li class="last">
		                <a href="allbooks.php"><span class="title">E-Books</span></a>
		            </li>
		             <?php 	}
		            ?>
		            <li>
		               <a href="news.php"><span class="title">News</span></a>
		                </li>
		            </li>
		            <li class="last">
		                <a href="page-contact.php"><span class="title">Contact</span></a>
		            </li>
		            
		        </ul>
	            </ul><!-- Button trigger modal -->
		    </nav>
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
	<div id="page" class="stylehome1 h0">
		<div class="mobile-menu">
			<div class="header stylehome1">
				<div class="main_logo_home2">
		            <img class="nav_logo_img img-fluid float-left mt20" src="images/header-logo.png" alt="header-logo.png">
		            <span>edunet</span>
				</div>
				<ul class="menu_bar_home2">
					<li class="list-inline-item">
	                	<div class="search_overlay">
						  <a id="search-button-listener2" class="mk-search-trigger mk-fullscreen-trigger" href="#">
						    <!--<div id="search-button2"><i class="flaticon-magnifying-glass"></i></div>-->
						  </a>
							<!--<div class="mk-fullscreen-search-overlay" id="mk-search-overlay2">
							    <a href="#" class="mk-fullscreen-close" id="mk-fullscreen-close-button2"><i class="fa fa-times"></i></a>
							    <div id="mk-fullscreen-search-wrapper2">
							      <form method="get" id="mk-fullscreen-searchform2">
							        <input type="text" value="" placeholder="Search courses..." id="mk-fullscreen-search-input2">
							        <i class="flaticon-magnifying-glass fullscreen-search-icon"><input value="" type="submit"></i>
							      </form>
							    </div>
							</div>-->
						</div>				</li>
					<li class="list-inline-item"><a href="#menu"><span></span></a></li>
				</ul>
			</div>
		</div><!-- /.mobile-menu -->
		<nav id="menu" class="stylehome1">
			<ul>
				<li>
		                <a href="index.php"><span class="title">Home</span></a>
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
		                        <a href="userdashboard.php?userid=<?php echo "$_SESSION[id]"; ?>">Your Courses List</a>
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
		            		<li>
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
								</li>
				
								<li><a href="page-contact.php">Contact</a></li>
							</ul>
		</nav>
	</div>
