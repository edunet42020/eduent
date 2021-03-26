<?php

require("connection.php");
define("ROOT_PATH", $_SERVER["DOCUMENT_ROOT"]);
define("rootpath","C:/xampp/htdocs/edunet/admin/preview/demo1");

?>
<?php
session_start();
if(!isset($_SESSION['AdminUsername']))
{
    header("Location:../../../../../adminlogin.php");
}    
    $select_email = "SELECT * FROM  tbluser";
//    echo $select_email;
    
    require 'PHPMailer/PHPMailerAutoload.php';
        $res = mysqli_query($con,$select_email);
       // $row = mysqli_num_rows($res);
        while($data=mysqli_fetch_array($res))
        {
                $emailsend = $data['u_email_id'];
                
                $mail = new PHPMailer;
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
                $mail->Body    = '<h3>we are going to take exam for you</h3>
                <li>that is based on some general knowledge questions</li>
                <li>you can attempt it for only today</li>
                <li>these scores gives you credit and every 100 credit gives 10% discount of purchase of any course</li>
                <li>Any regestred user can attempt quiz.</li><a href="http://localhost/edunet/user/creditexam.php">Click here for attend quiz</a>';
                

                if(!$mail->send()) 
                {
                    header("Location:sendemail.php?emailmsg=fail"); 
                } 
                else 
                {
                    header("Location:index.php?emailmsg=ok");
                }
}
?>