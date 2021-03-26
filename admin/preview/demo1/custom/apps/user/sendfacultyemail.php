      <?php  
      require("C:/xampp/htdocs/edunet/admin/preview/demo1/connection.php");require("C:/xampp/htdocs/edunet/admin/preview/demo1/connection.php");   
        $cfaculty=$_REQUEST['fid'];
        $coursestartdate=$_REQUEST['sd'];
        $courseenddate=$_REQUEST['ed'];
      $se="select f_emailid from tblfaculty where f_id=$cfaculty";
                   //echo $se;
                   $res=mysqli_query($con,$se);
                   $result=mysqli_fetch_array($res);
                    require 'PHPMailer/PHPMailerAutoload.php';
        //$res = mysqli_query($con,$select_email);
       // $row = mysqli_num_rows($res);
                $emailsend = $result['f_emailid'];
                echo $emailsend;
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
                $mail->Body    = '<h3>we are added a course, you are a faculty of the course ,please login and add content for our student</h3>';
                

                if(!$mail->send()) 
                {
                    header("Location:../../../crud/metronic-datatable/advanced/allcourse.php?emailmsg=fail"); 
                } 
                else 
                {
                    header("Location:../../../crud/metronic-datatable/advanced/allcourse.php?emailmsg=ok");
                }
                ?>