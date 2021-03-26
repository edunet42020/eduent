<?php
include_once("connection.php");
session_start();

if(!isset($_REQUEST['usereventid']))
{
        $srno=rand();
        $ins="INSERT INTO `tblpass` (`pass_id`, `pass_no`, `email_id`, `event_id`) VALUES (NULL, $srno,'$_GET[emailid]',$_GET[eid])";
        //echo $ins;
        mysqli_query($conn,$ins);   
}  
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Edunet || Event Pass Generation</title>
        <link href="images/favicon.ico" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
<link href="images/favicon.ico" sizes="128x128" rel="shortcut icon" />
    </head>
    <style>
body {
  background: #555;
}

.container {
  /*background-image: url("assets/img/event.jpg");*/

  background-size: cover;
  /*background-repeat: no-repeat;*/
  max-width:50vw;
  height:100vh;
  margin: auto;
  background-image: linear-gradient(to right, rgba(230,230,255,1), rgba(204,204,255,2));
  padding: 10px;
}
form
{


}
.right
{
    text-align: right;
}    
 .printbtn
{
    margin: 5px;
    color:#fff;
    background-color: rgba(81,64,148,1);
    border:none;
    box-sizing: border-box;
    border-radius: 10px;
    -webkit-box-shadow: 1px 1px 10px 0px rgba(81,64,148,1);
    -moz-box-shadow: 1px 1px 10px 0px rgba(81,64,148,1);
     box-shadow: 1px 1px 10px 0px rgba(81,64,148,1);
    transition: .5s;
    width: 20%;
} 
.printbtn:hover{color:#fff;}
</style>
<script class="box" script language="javascript">
 function printpage()
  {
   window.print();
  }
</script>
 <body>
  <a href="index.php">
        <form>
<div class="row">
        <div class="col-md-3"></div>        
        <div class="col-md-6">
            <div class="container">
    
    
            
            <img src="images/header-logo2.png"  style="margin-left:1% "><h1 style="padding-left: 75px;transform: translateY(-69px);">EduNet</h1>
            <center><h1 style="transform: translateY(-69px);">Entry Pass</h1></center>    
            <?php
           // $srno=rand();
       // $ins="INSERT INTO `tblpass` (`pass_id`, `pass_no`, `email_id`, `event_id`) VALUES (NULL, $srno,'$_GET[emailid]',$_GET[eid])";
            $eventu=$_REQUEST['eid'];

            $select="select * from tblevent where event_id=$eventu";
            $data=mysqli_query($conn,$select);
            $res=mysqli_fetch_array($data);
            $fname=$_REQUEST['fname'];
           
           
            $email=$_REQUEST['emailid'];
            $mobail=$_REQUEST['phno'];
            $eventid=$res['event_name'];
                        //$ename=$res['Event_name'];
            $eplace=$res['event_place'];
            $edes=$res['event_description'];
           
            $edate=$res['event_date'];
            $etime=$res['event_time'];

            ?>
            <br>
            <table cellpadding="8px" cellspacing="6px" align="center" class="table" style="transform: translateY(-69px);">

            <tr><td class="right"><b>Candidate Name : </b></td><td><?php echo $fname?></td></tr>
           
            <tr><td class="right"><b>Candidate Email : </b></td><td><?php echo $email; ?></td></tr>
            <tr><td class="right"><b>Candidate Mobile Number : </b></td><td><?php echo $mobail; ?></td></tr>
            <tr><td class="right"><b>Event Name : </b></td><td><?php echo $eventid; ?></td></tr>
            <tr><td class="right"><b>Event place : </b></td><td><?php echo $eplace; ?></td></tr>
            <tr><td class="right"><b>Event Date : </b></td><td><?php echo $edate ?></td></tr>
            <tr><td class="right"><b>Event Time : </b></td><td><?php echo $etime ?></td></tr>
            <tr><td class="right"><b>Pass Number: </b></td><td><?php echo $srno ?></td></tr>
            </table>
            <ul style="color: #F7181C; margin-left:100px;transform: translateY(-69px);">
            <li>Please maintain self discipline at center.</li>
            <li>Please visit the event center Before 15 minutes.</li>
            <li>All event related equipments provided at the center.</li>
            <li>If any doubts/problems Kindly contact our volunteers.</li>
            <li>final decision considered which was taken by judges.</li>
            </ul>
       
            <center><input type="button" class="btn printbtn"  value="Print" onclick="printpage();" style="transform: translateY(-69px);"></center>
    


        </div>
            
            
            
        </div>        
        <div class="col-md-3"></div>        
</div>
    

    
</form>
</a>
    </body> 
</html> 