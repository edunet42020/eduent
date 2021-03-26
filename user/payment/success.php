<?php
$status=$_POST["status"];
$firstname=$_POST["firstname"];
$amount=$_POST["amount"];
$txnid=$_POST["txnid"];
$posted_hash=$_POST["hash"];
$key=$_POST["key"];
$productinfo=$_POST["productinfo"];
$email=$_POST["email"];
$mobile=$_POST["phone"];
$salt="";
include_once("connection.php");
$ins="insert into tblpaymentevent(p_ammount,first_name,email,event_id) values($amount,'$firstname','$email',$productinfo)";
$d=mysqli_query($conn,$ins);
//echo $ins;
$s="select p_id from tblpaymentevent where first_name='$firstname' and email='$email' and event_id=$productinfo";
$res=mysqli_query($conn,$s);
$result=mysqli_fetch_array($res);
$pay=$result['p_id'];
$ins1="insert into tbluserevent(event_id,payment_id) values($productinfo,$pay)";
//echo $ins1;
mysqli_query($conn,$ins1);
?>

<?php
//post
$ph=$_REQUEST['phone'];
$url="https://www.sms4india.com/api/v1/sendCampaign";
$message = "this message is from edunet... You are successfully regestred for the event";// urlencode your message
// urlencode your message
$curl = curl_init();
curl_setopt($curl, CURLOPT_POST, 1);// set post data to true
curl_setopt($curl, CURLOPT_POSTFIELDS, "apikey=B7S9PPUUZ0MUFH119CLMYRT161ZYLIK1&secret=DYC3W7Z7X8RHQCRK&usetype=stage&phone=$ph&senderid='edunet'&message=$message");// post data
// query parameter values must be given without squarebrackets.
 // Optional Authentication:
curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($curl);
curl_close($curl);
//echo $result;
//echo $result;
?>
<?php


//header("location:../passgeneration.php?eid=$productinfo&fname=$firstname&emailid=$email");
//echo $d;
// Salt should be same Post Request 

/*If (isset($_POST["additionalCharges"])) {
       $additionalCharges=$_POST["additionalCharges"];
        $retHashSeq = $additionalCharges.'|'.$salt.'|'.$status.'|||||||||||'.$email.'|'.$firstname.'|'.$productinfo.'|'.$amount.'|'.$txnid.'|'.$key;
  } else {
        $retHashSeq = $salt.'|'.$status.'|||||||||||'.$email.'|'.$firstname.'|'.$productinfo.'|'.$amount.'|'.$txnid.'|'.$key;
         }
		 $hash = hash("sha512", $retHashSeq);
       if ($hash != $posted_hash) {
	       echo "Invalid Transaction. Please try again";
		   } else {
          echo "<h3>Thank You. Your order status is ". $status .".</h3>";
          echo "<h4>Your Transaction ID for this transaction is ".$txnid.".</h4>";
          echo "<h4>We have received a payment of Rs. " . $amount . ". Your order will soon be shipped.</h4>";
		   }*/
?>	
<html dir="ltr" lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="academy, college, coursera, courses, education, elearning, kindergarten, lms, lynda, online course, online education, school, training, udemy, university">
<meta name="description" content="Edumy - LMS Online Education Course & School HTML Template">
<meta name="CreativeLayers" content="ATFN">
<!-- css file -->
<link rel="stylesheet" href="../css/bootstrap.min.css">
<link rel="stylesheet" href="../css/style.css">
<!-- Responsive stylesheet -->
<link rel="stylesheet" href="../css/responsive.css">
<!-- Title -->
<title>Edunet</title>
<!-- Favicon -->
<link href="images/favicon.ico" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
<link href="images/favicon.ico" sizes="128x128" rel="shortcut icon" />

</head>
<body>
  <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script type="text/javascript" src="../js/jquery-3.3.1.js"></script>
<script type="text/javascript" src="../js/jquery-migrate-3.0.0.min.js"></script>
<script type="text/javascript" src="../js/popper.min.js"></script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<script type="text/javascript" src="../js/jquery.mmenu.all.js"></script>
<script type="text/javascript" src="../js/ace-responsive-menu.js"></script>
<script type="text/javascript" src="../js/bootstrap-select.min.js"></script>
<script type="text/javascript" src="../js/snackbar.min.js"></script>
<script type="text/javascript" src="../js/simplebar.js"></script>
<script type="text/javascript" src="../js/parallax.js"></script>
<script type="text/javascript" src="../js/scrollto.js"></script>
<script type="text/javascript" src="../js/jquery-scrolltofixed-min.js"></script>
<script type="text/javascript" src="../js/jquery.counterup.js"></script>
<script type="text/javascript" src="../js/wow.min.js"></script>
<script type="text/javascript" src="../js/progressbar.js"></script>
<script type="text/javascript" src="../js/slider.js"></script>
<script type="text/javascript" src="../js/timepicker.js"></script>
<script type="text/javascript" src="../js/wow.min.js"></script>
<!-- Custom script for all pages --> 
<script type="text/javascript" src="../js/script.js"></script>
<script type="text/javascript" src="../assets/js/nivo-lightbox.min.js"></script>
<script type="text/javascript" src="../assets/js/sweetalert.min.js"></script>

</body>
</html>
<?php
               
                echo "<script>
                                swal('Done!','message send successfully','success');
                              </script>";
                              echo "<meta http-equiv='Refresh' content='1; URL=http://localhost/edunet/user/passgeneration.php?eid=$productinfo&fname=$firstname&emailid=$email&phno=$mobile'/>";
?>