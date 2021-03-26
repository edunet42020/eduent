<?php

require("../../../connection.php");
define("ROOT_PATH", $_SERVER["DOCUMENT_ROOT"]);
define("rootpath","C:/xampp/htdocs/edunet/admin/preview/demo1");

?>
<?php
session_start();
if(!isset($_SESSION['AdminUsername']))
{
    header("Location:../../../../../adminlogin.php");
}
if(isset($_GET['feedbackid']))
{
    $fid = $_GET['feedbackid'];
    
    $select_email = "SELECT * FROM  tblmessage WHERE m_id=".$fid;
//    echo $select_email;
    
    
        $res = mysqli_query($con,$select_email);
        $row = mysqli_num_rows($res);
        $data=mysqli_fetch_array($res);
        $emailsend = $data['email_id'];
        if($row > 0)
        {
    
                require 'PHPMailer/PHPMailerAutoload.php';

                $mail = new PHPMailer;

                //$mail->SMTPDebug = 3;                               // Enable verbose debug output

                $mail->isSMTP();                                      // Set mailer to use SMTP
                $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
                $mail->SMTPAuth = true;                               // Enable SMTP authentication
                $mail->Username = 'edunetbrm@gmail.com';                 // SMTP username
                $mail->Password = '8zwvepeyul';                           // SMTP password
                $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
                $mail->Port = 465;                                    // TCP port to connect to

                $mail->setFrom('edunetbrm@gmail.com', 'Edunet');
                $mail->addAddress($emailsend);     // Add a recipient
                //$mail->addAddress('ellen@example.com');               // Name is optional
                $mail->addReplyTo('edunetbrm@gmail.com');
                //$mail->addCC('cc@example.com');
                //$mail->addBCC('bcc@example.com');

                //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
                //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
                $mail->isHTML(true);                                  // Set email format to HTML

                $mail->Subject = 'This Mail Send By EduNEt';
                $mail->Body    = '<h3>we will definately work on it. Your problem will be solved as soon as possible.</h3><p>Thank You For your feedback</p>';
                

                if(!$mail->send()) 
                {
//                    echo "	<script>   
//                            $(document).ready(function(){
//                              $('#login_failed').html('Email Could not Be Sent. Please Connect To Internet.');    
//                              $('#login_failed').show();
//                            });
//                        </script>";
                    header("Location:sendemail.php?emailmsg=fail");
//                    echo "please connect Internet";
                } 
                else 
                {
//
//                    echo "	<script>   
//                                  $(document).ready(function(){
//                                    $('#login_success').html('Email Send Successfully.');    
//                                  $('#login_success').show();
//                                });
//                            </script>";
//                    echo "Email Send Successfully";
                    $update = "UPDATE tblfeedback  SET is_email=1 WHERE email_id='$emailsend'";   
                    echo $update;
                    mysqli_query($con,$update);
//                    return;
                    header("Location:allfeedback.php?emailmsg=ok");
                }
    }
}
?>