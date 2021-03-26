<?php
include_once("connection.php");
session_start();
if(!isset($_SESSION['AdminUsername']))
{
	header("Location:Adminlogin.php");
}


if(isset($_GET['feedbackid']))
{
    $fid = $_GET['feedbackid'];
    
    $select_email = "SELECT * FROM  feedbackmst WHERE feedback_id=".$fid;
//    echo $select_email;
    
    
        $res = mysqli_query($con,$select_email);
        $row = mysqli_num_rows($res);
        $data=mysqli_fetch_array($res);
        $emailsend = $data['email'];
        if($row > 0)
        {
    
                require 'PHPMailerAutoload.php';

                $mail = new PHPMailer;

                //$mail->SMTPDebug = 3;                               // Enable verbose debug output

                $mail->isSMTP();                                      // Set mailer to use SMTP
                $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
                $mail->SMTPAuth = true;                               // Enable SMTP authentication
                $mail->Username = 'matrixeducation.1999@gmail.com';                 // SMTP username
                $mail->Password = 'matrixeducation';                           // SMTP password
                $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
                $mail->Port = 465;                                    // TCP port to connect to

                $mail->setFrom('matrixeducation.1999@gmail.com', 'Matrix Education');
                $mail->addAddress($emailsend);     // Add a recipient
                //$mail->addAddress('ellen@example.com');               // Name is optional
                $mail->addReplyTo('matrixeducation.1999@gmail.com');
                //$mail->addCC('cc@example.com');
                //$mail->addBCC('bcc@example.com');

                //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
                //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
                $mail->isHTML(true);                                  // Set email format to HTML

                $mail->Subject = 'This Mail Send By Matrix Education';
                $mail->Body    = '<h3>we will definately work on it. Your problem will be solved as soon as possible.</h3><p>Thank You For your feedback</p>';
                $mail->AltBody = 'Please Click Upper given link to change Youe Password!!';

                if(!$mail->send()) 
                {
//                    echo "	<script>   
//                            $(document).ready(function(){
//                              $('#login_failed').html('Email Could not Be Sent. Please Connect To Internet.');    
//                              $('#login_failed').show();
//                            });
//                        </script>";
                    header("Location:userfeedback.php?emailmsg=fail");
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
                    $update = "UPDATE feedbackmst SET is_email=1 WHERE email='$emailsend'";   
                    echo $update;
                    mysqli_query($con,$update);
//                    return;
                    header("Location:userfeedback.php?emailmsg=ok");
                }
    }
}
?>