<?php
include_once("connection.php");
session_start();
if(!isset($_SESSION['AdminUsername']))
{
	header("Location:../../Adminlogin.php");
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="../../themes/favicon.ico" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
<link href="../../themes/favicon.ico" sizes="128x128" rel="shortcut icon" />

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<title>EduNet || All course Reorts</title>
<style>
    *{
        color:#fff;
    }

</style>
</head>

<body class="bg-dark p-3 m-3">
    
    
    
    
    <div class="container">
            <h2 style="text-align: center;padding: 10px;">All course</h2>
            <table class="table table-hover table-responsive">
                <tr>
                    <th>Id</th>
                    <th>Course Photo</th>
                    <th>Course Name</th>
                    <th>Course description</th>
                    <th>Course full description</th>
                    <th>Course status</th>
                    <th>Course start date</th>
                    <th>Course end date</th>
                    <th>Course prize</th>
                    
                </tr>
                <?php
                $data = mysqli_query($con,"SELECT * FROM tblcourse");
                  
                while($res = mysqli_fetch_array($data))
                {

                        echo "<tr>";
                            echo "<td>".$res['course_id']."</td>";
                            echo "<td><img src='../../themes/metronic/theme/default/demo1/dist/assets/media/course/".$res['course_photo_path']."' alt='img not found' style='width:50px;' class='rounded'/></td>";
                            echo "<td>".$res['course_name']."</td>";
                            echo "<td>".$res['course_description']."</td>";
                            echo "<td>".$res['course_full_description']."</td>";
                            echo "<td>".$res['course_status']."</td>";
                            echo "<td>".$res['course_start_date']."</td>";
                            echo "<td>".$res['course_end_date']."</td>";
                            echo "<td>".$res['course_prize']."</td>";
                          
                        echo "</tr>";
                }
            ?>
                </table>

                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                    <input type="button" name="print" value="Generate Report" class="btn btn-block btn-primary" onclick="printpage()"/>
                    <a href="index.php" name="print" class="btn btn-block btn-primary"><i class="fa fa-backword"></i>Go Back</a>
                    </div>
                    <div class="col-md-4"></div>
                </div>
                
        </div>
    
    
    
    
    <script src="js/jquery.min.js"></script> 
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
    <script script language="javascript">
     function printpage()
      {
          window.print();
      }
    </script>
</body>
</html>