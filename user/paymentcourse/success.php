<?php
$status=$_POST["status"];
$firstname=$_POST["firstname"];
$amount=$_POST["amount"];
$txnid=$_POST["txnid"];
$posted_hash=$_POST["hash"];
$key=$_POST["key"];
$productinfo=$_POST["productinfo"];
$email=$_POST["email"];
$salt="";
include_once("connection.php");
$ins="insert into tblpaymentcourse(amount,user_id,course_id) values($amount,$firstname,$productinfo)";
$d=mysqli_query($conn,$ins);
$s="select payment_id from tblpaymentcourse where user_id=$firstname and course_id=$productinfo";
$res=mysqli_query($conn,$s);
$result=mysqli_fetch_array($res);
$pay=$result['payment_id'];
//echo $s;
$insc="insert into tblusercourse(user_id,course_id,payment_id) values($firstname,$productinfo,$pay)";
//echo $insc;
mysqli_query($conn,$insc);
header("location:../index.php?msg1='ok'");
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