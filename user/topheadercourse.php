<nav class="navbar navbar-default navbar-inverse shadow" style="padding-bottom: 10px; ">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
     <div class="navbar-header">
      <a class="navbar-brand" href="#">
        <img alt="Brand" src="images/header-logo.png">
      </a>
      <h1 style="color: white;padding-left: 70px;">
        Edunet
      </h1>
    </div>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="list_two" style="padding-top: 15px;padding-left: 55px;"><a href="index.php">Home<span class="sr-only"></span></a></li>
        <li class="list_two" style="padding-top: 15px;padding-left: 55px;"><a href="coursedashboard.php?course_id=<?php echo $courseid; ?>">Course Detail<span class="sr-only"></span></a></li>
        <li class="list_two" style="padding-top: 15px;padding-left: 55px;"><a href="innercourse.php?course_id=<?php echo $courseid;?>"><?php if(isset($course_name)){ echo $course_name; }?> videos</a></li>
        <li class="list_two" style="padding-top: 15px;padding-left: 55px;"><a href="progress.php?course_id=<?php echo $courseid;?>">Progress</a></li>
        <li class="list_two" style="padding-top: 15px;padding-left:55px;"><a href="schedual.php?course_id=<?php echo $courseid;?>">Schedule</a></li>
        
     </ul>
    </div>
    <!-- /.navbar-collapse -->
  </div>

  <!-- /.container-fluid -->
</nav>