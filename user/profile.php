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
<?php
	include_once("connection.php");
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
  <title>Edunet || Profile</title>
  <!-- Favicon -->
  <link href="images/favicon.ico" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
  <link href="images/favicon.ico" sizes="128x128" rel="shortcut icon" />
   <style type="text/css">
 
  .container1
  {
    padding-top: 100px;
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
    padding: 5px;
    border-bottom: 1px solid #808080 ;
  } 
  h2
  { 
    color: #4287f5; 
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
  <section class="home3_about2 pb10 pt30" style="padding-left:9%;padding-top:100px;">
    <form name="myform" action="#" method="post" enctype="multipart/form-data">
      <div class="container1" >
        <div class="nav shadow" style="height:auto;width:auto;">
          <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
          <?php
            $select="select * from tbluser where u_id=$id";
            $res=mysqli_query($conn,$select);
            $result=mysqli_fetch_array($res);?>
            <img class="img-fluid img-thumbnail" src="<?php echo "../admin/themes/metronic/theme/default/demo1/dist/assets/media/user/"."$result[u_photo_path]";?>" alt="brinda" style="height: 350px;width:auto;align-items: center;">
            <input type='file' class='form-control' name='image'/>
          </div>
          <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
            <table style="color:black">
            <input type="hidden" value="<?php echo "../admin/themes/metronic/theme/default/demo1/dist/assets/media/user/"."$result[u_photo_path]";?>" name="oldimage" />
            <tr>
              <th><?php echo " First Name"; ?></th>
              <td><input type="text" name="firstname" id="firstname" value="<?php echo $result['u_first_name']; ?>" style="border: none;"></td>
              <td><small id="firstname_error" title="plz insert name." class="text-danger"></small></td>
            </tr>
            <tr>
              <th scope="row"><?php echo " Middle Name"; ?></th>
              <td><input type="text" name="Middlename" id="middlename" value="<?php echo $result['u_middle_name']; ?>" style="border: none;"></td>
              <td><small id="middlename_error" title="plz insert name." class="text-danger"></small></td>
            </tr>
            <tr>
              <th scope="row"><?php echo " last Name"; ?></th>
              <td><input type="text" name="Lastname" id="lastname" value="<?php echo $result['u_last_name']; ?>" style="border: none;"></td>
              <td><small id="lastname_error" title="plz insert name." class="text-danger"></small></td>
            </tr>
            <tr>
              <th scope="row"><?php echo " Address"; ?></th>
              <td><input name="Address" value="<?php echo $result['u_city'];?>"  style="border: none;" ></td>
              <td><small id="address_error" title="plz insert name." class="text-danger"></small></td>
            </tr>
            <tr>
              <th scope="row"><?php echo " Mobile"; ?></th>
               <td><input type="text" name="mobile" id="mobile" value="<?php echo $result['u_ph_no'];?>" style="border: none;" ></td>
              <td><small id="mobile_error" title="plz insert name." class="text-danger"></small></td>
            </tr>
            <tr>
              <th scope="row"><?php echo " Email"; ?></th>
              <td><input type="text" id="email" name="email" value="<?php echo $result['u_email_id'];?>" style="border: none;width: 270px;" ></td>
              <td><small id="email_error" title="plz insert name." class="text-danger"></small></td>
            </tr>
            <tr>
                <th><input type="submit" class="btn btn-success btngreen btntransparent" value="Save change" name="btn" ></th> 
                <td scope="row"><a href="index.php"><input type="button" class="btn btn-danger btnred btntransparent" value="Back"></a></td>
            </tr>
          </table>
        </div>
      </div>
    </div>
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
<!-- Custom script for all pages --> 
<script type="text/javascript" src="js/script.js"></script>
  <!-- Custom script for all pages --> 
   </body>
</html>
<script>
    $(document).ready(function(){
        // alert("hello");
       // $('#firstname_error').hide();

        $('#firstname').keydown(function(){
           fname = $('#firstname').val();
          var fname_regx = /^[a-zA-Z]{3,20}$/;
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
         $('#middlename').keydown(function(){
           mname = $('#middlename').val();
          var mname_regx = /^[a-zA-Z]{3,16}$/;
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
 $('#lastname').keydown(function(){
           lname = $('#lastname').val();
          var lname_regx = /^[a-zA-Z]{3,16}$/;
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
 $('#mobile').keydown(function(){
          mobile = $('#mobile').val();
          var mobile_regx = /^[0-9]{10}$/;
          if(mobile.match(mobile_regx))
          {
            $('#mobile_error').hide();
          }
          else
          {
            $('#mobile_error').html("Enter Valid Number..");
            $('#mobile_error').show();  
            // $('#mobile').focus();

          }

        });
        
 $('#email').keydown(function(){
          email = $('#email').val();
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


});
</script>
<?php
if(isset($_REQUEST['btn']))
{
   $fname=$_POST['firstname'];
 $mname=$_POST['Middlename'];
 $lastname=$_POST['Lastname'];
 $add=$_POST['Address'];
 $mobile=$_POST['mobile'];
 $email=$_POST['email'];
 $oldimage=$_POST['oldimage'];
// $image=$_POST['image'];

if(empty($fname) || empty($mname) || empty($lastname) || empty($add) || empty($mobile) || empty($email))
    {
      echo "<script>
             $(document).ready(function(){
              $('#firstname_error').html('*');
              $('#middlename_error').html('*');
              $('#lastname_error').html('*');
              $('#address_error').html('*');
              $('#mobile_error').html('*');
              $('#email_error').html('*');
              }); 
            </script>";
            echo "<script>
        swal('Opps!','field should not be empty','error');
        </script>";
        return;
          }
     if($_FILES['image']['size'] != 0)
        {
       $Image=$_FILES['image'];
    $image_tmp_name=$_FILES['image']['tmp_name'];

      // echo $image_path = "assets/images/upload/users/".$_FILES['image']['name'];
      // return;
       $uniquesavename=time().uniqid(rand());   
      
      $upload_folder_name="../admin/themes/metronic/theme/default/demo1/dist/assets/media/user/".$uniquesavename.$_FILES['image']['name'];
       $user_img_type=$_FILES['image']['type'];
  $photo_size = $_FILES['image']['size'];


   $store=$uniquesavename.$_FILES['image']['name'];
if($user_img_type=="image/jpeg" || $user_img_type=="image/jpg" || $user_img_type=="image/png")
           {
            unlink($oldimage);
             move_uploaded_file($image_tmp_name,$upload_folder_name);
       $update = "UPDATE tbluser SET  u_photo_path='$store',u_first_name='$fname', u_middle_name='$mname',u_last_name='$lastname',u_city='$add',u_ph_no=$mobile, u_email_id='$email' where u_id=".$id;
     //  echo $update;
      // return;

      $update=mysqli_query($conn,$update);
       if($update > 0)
                    {
                                          echo "<script>
                                swal('Done!','profile Updated  Successfully..','success');
                              </script>";
                       echo "<meta http-equiv='Refresh' content='1; URL=http://localhost/edunet/user/index.php';>";
     
                    }
                    else
                    {
                        echo "<script>
                                swal('Opps!','profile  Can't Updated..','error');
                              </script>";   
                    }
                           
    }
}
else
{
   $update = "update tbluser set  u_first_name='$fname', u_middle_name='$mname',u_last_name='$lastname',u_city='$add',u_ph_no='$mobile', u_email_id='$email' where u_id=$id"  ;
      // echo $updaste;
      // return;
      $update=mysqli_query($conn,$update);
       if($update > 0)
                    {
                        echo "<script>
                                swal('Done!','profile Updated  Successfully..','success');
                              </script>";
                     echo "<meta http-equiv='Refresh' content='1; URL=http://localhost/edunet/user/index.php';>";
     
                    }
                    else
                    {
                        echo "<script>
                                swal('Opps!','profile  Can't Updated..','error');
                              </script>";   
                    }
      
}
}
?>