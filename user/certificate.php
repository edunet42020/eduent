<?php
include_once("connection.php");
session_start();
if(!isset($_SESSION['id']))
{
	header("Location:page-login.php");
}
require_once("fpdf.php");
if(isset($_GET['userid']) && isset($_GET['courseid']))
{
    
    $select = "SELECT * FROM  tblcourse as c,tbluser as u,tblusercourse as uc WHERE u.u_id =uc.user_id AND c.course_id = uc.course_id AND c.course_id=".$_GET['courseid']." AND u.u_id=".$_GET['userid'];
     $s="select serial_no from tblcertificate where course_id=$_GET[courseid] and user_id=$_GET[userid]";
     //echo $s;
    $row = mysqli_query($conn,$select);
    $count=mysqli_query($conn,$s);
    $c=mysqli_num_rows($count);
    $cid=$_GET['courseid'];
    $select_date="SELECT MAX(`end_date`) as 'end' from tblweek where course_id = $cid";
    //echo $select_date;
    $res=mysqli_query($conn,$select_date);
    $result=mysqli_fetch_array($res);
    if($c>0)
    {
        $res=mysqli_fetch_array($count);
        $srno=$res['serial_no'];
    }
    else
    {
        $srno=rand();
        $ins="INSERT INTO `tblcertificate` (`certificate_id`, `serial_no`, `user_id`, `course_id`) VALUES (NULL, $srno,$_GET[userid],$_GET[courseid])";
        //echo $ins;
        mysqli_query($conn,$ins);
    }        
        $data = mysqli_fetch_array($row);
        //$i="insert into tblcertificate";
        $background = "images/certificate.png";
        $backgroundXPos =5;
        $backgroundYPos =5;
        $backgroundWidth =290;
        $backgroundHeight=200;
    //    $grade  = "A";
        $institute = "Edunet";
        $username =$data['u_first_name']." ".$data['u_middle_name']." ".$data['u_last_name'];
        $coursename=$data['course_name'];
        $pdf = new FPDF();
        $pdf = new FPDF('L', 'mm', 'A4' );//portarit,milimitere,page size
        $pdf->SetTextColor(0,0,0);//rgb
        $pdf->AddPage();//add page
        $pdf->Image( $background, $backgroundXPos, $backgroundYPos, $backgroundWidth,$backgroundHeight );
    //    $pdf->Image($logo,150,10,50);
        $pdf->SetMargins(98,80);
        $pdf->SetFont( 'Arial', 'B', 25 );
        $pdf->SetTextColor(0,0,0);//rgb
        $pdf->Ln(95);
        //$pdf=SetDisplayMode('real');
        $pdf->Cell(0,0,ucwords($username),0,0,'L');
    //    $pdf->SetFont( 'Arial', 'B',12);
    //    $pdf->Ln(9);
    //    $pdf->Write(20,$grade);
        $pdf->SetFont( 'Arial', 'BI', 26 );
       $pdf->Ln(17);
         $pdf->SetMargins(140,100);
        $pdf->Cell(0,15,ucwords($coursename),0,0,'L');
    //    $pdf->SetFont( 'Arial', 'B', 12 );
    //    $pdf->Ln(5);
    //    $pdf->Write(19,$discription );
         $pdf->SetFont( 'Arial', 'BU', 10 );
      
         $pdf->SetMargins(265,300);
          $pdf->Ln(47);
           $today = $result['end'];
        $pdf->Cell(50,20,ucwords($today),0,0,'F');

$pdf->SetFont( 'Arial', 'BU', 10 );
      
         $pdf->SetMargins(100,950);
          $pdf->Ln(0);
           //$today = date('Y-m-d');
         
        //  $today=rand();
        $pdf->Cell(0,20,ucwords($srno),0,0,'L');


    
      $pdf->Output("certificate.pdf","D");    
    
}
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Edunet || certificate</title>
        <link href="images/favicon.ico" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
<link href="images/favicon.ico" sizes="128x128" rel="shortcut icon" />
    </head>
    <body>
        
    </body> 
</html> 