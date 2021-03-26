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
echo $result;
?>