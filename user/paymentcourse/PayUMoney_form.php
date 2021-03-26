<?php
include_once("connection.php");
session_start();
if(!isset($_SESSION['id']))
{
  header("../Location:page-login.php");
}
else
{
  $id=$_SESSION['id'];
  //$cid=$_REQUEST['cid'];
}
?>
<?php

$MERCHANT_KEY = "2BoC3SfV";
$SALT = "fibfytW2nn";
// Merchant Key and Salt as provided by Payu.

$PAYU_BASE_URL = "https://sandboxsecure.payu.in";		// For Sandbox Mode
//$PAYU_BASE_URL = "https://secure.payu.in";			// For Production Mode

$action = '';

$posted = array();
if(!empty($_POST)) {
    //print_r($_POST);
  foreach($_POST as $key => $value) {    
    $posted[$key] = $value; 
	
  }
}
//$id=$_SESSION['id'];
$formError = 0;

if(empty($posted['txnid'])) {
  // Generate random transaction id
  $txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
} else {
  $txnid = $posted['txnid'];
}
$hash = '';
$eid=$_REQUEST['eid'];
//echo $eid;
// Hash Sequence
$hashSequence = "key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5|udf6|udf7|udf8|udf9|udf10";
if(empty($posted['hash']) && sizeof($posted) > 0) {
  if(
          empty($posted['key'])
          || empty($posted['txnid'])
          || empty($posted['amount'])
          || empty($posted['firstname'])
          || empty($posted['email'])
          || empty($posted['phone'])
          || empty($posted['productinfo'])
          || empty($posted['surl'])
          || empty($posted['furl'])
		  || empty($posted['service_provider'])
  ) {
    $formError = 1;
  } else {
    //$posted['productinfo'] = json_encode(json_decode('[{"name":"tutionfee","description":"","value":"500","isRequired":"false"},{"name":"developmentfee","description":"monthly tution fee","value":"1500","isRequired":"false"}]'));
	$hashVarsSeq = explode('|', $hashSequence);
    $hash_string = '';	
	foreach($hashVarsSeq as $hash_var) {
      $hash_string .= isset($posted[$hash_var]) ? $posted[$hash_var] : '';
      $hash_string .= '|';
    }

    $hash_string .= $SALT;


    $hash = strtolower(hash('sha512', $hash_string));
    $action = $PAYU_BASE_URL . '/_payment';
  }
} elseif(!empty($posted['hash'])) {
  $hash = $posted['hash'];
  $action = $PAYU_BASE_URL . '/_payment';
  //echo $action;
}
?>
<html>
  <head>
    <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
  <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="css/util.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <script>
    var hash = '<?php echo $hash ?>';
    function submitPayuForm() {
      if(hash == '') {
        return;
      }
      var payuForm = document.forms.payuForm;
      payuForm.submit();
    }
  </script>
  </head>
  <body onload="submitPayuForm()">
    <div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
    <br/>
    <?php if($formError) { ?>
	
      <span style="color:red">Please fill all mandatory fields.</span>
      <br/>
      <br/>
    <?php } ?>
    <form action="<?php echo $action; ?>" method="post" name="payuForm" class="login100-form validate-form" width="900px">
      <input type="hidden" name="key" value="<?php echo $MERCHANT_KEY ?>" />
      <input type="hidden" name="hash" value="<?php echo $hash ?>"/>
      <input type="hidden" name="txnid" value="<?php echo $txnid ?>" />
      <span class="login100-form-title p-b-49">
            payment
          </span>
      <table>
        <tr>
          <td><span class="label-input1000"><i class="fa fa-inr" style="font-size: 36px;"></i></span> </td>
          <td><input name="amount" class="input100 underborder" value="<?php echo "$_REQUEST[fees]";?>" readonly /></td>
        </tr>
        <tr>
          <td><input type="hidden" name="firstname" class="input100" id="firstname" value="<?php echo "$id";?>" readonly /></td>
        </tr>
        <tr>
          <td><span class="label-input1000"><i class="fa fa-envelope icon" style="font-size: 36px;"></i></span> </td>
          <td><input name="email" class="input100 underborder" id="email" value="<?php echo "$_REQUEST[email]";?>" size="150"  readonly/></td>
        </tr>
        <tr>
          <td><span class="label-input1000"><i class="fa fa-phone" style="font-size: 36px;"></i></span> </td>
          <td><input name="phone" class="input100 underborder" value="<?php echo "$_REQUEST[mobile]";?>" readonly/></td>
        </tr>
        <tr>
          <td><input type="hidden" class="input100" readonly name="productinfo" value="<?php echo "$eid"; ?>"></td>
        </tr>
        <tr>
          <td colspan="3"><input type="hidden" name="surl" value="http://localhost/edunet/user/paymentcourse/success.php" size="64" /></td>
        </tr>
        <tr>
          <td colspan="3"><input type="hidden" name="furl" value="http://localhost/edunet/user/paymentcourse/failure.php" size="64" /></td>
        </tr>

        <tr>
          <td colspan="3"><input type="hidden" name="service_provider" value="payu_paisa" size="64" /></td>
        </tr>
        <tr>
          <?php if(!$hash) { ?>

            <td colspan="4">
              <div class="container-login100-form-btn">
            <div class="wrap-login100-form-btn">
              <div class="login100-form-bgbtn"></div><button class="login100-form-btn">
                Pay
              </button>
            </div>
          </div>
        </td>
          <?php } ?>
        </tr>
      </table>
    </form>
  </center>
</div>
</div>
</div>
  </body>
</html>
