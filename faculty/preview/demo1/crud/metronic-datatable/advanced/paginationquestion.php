<?php
session_start();
$facultyid=$_SESSION['facultyid'];
$connect = mysqli_connect("localhost", "root", "", "edunet");
//echo "<script>alert('$facultyid');</script>";
if (isset($_POST['readrecord']))
{
$record_per_page = 5;
$page = '';
$sortcat = '';
$output = '';
$query='';
$dat='';
if (isset($_POST["page"])) {
  $page = $_POST["page"];
} else {
  $page = 1;
}
if (isset($_POST["search"])) {
  if ($_POST["search"]) {
    $search = $_POST["search"];
  }
}
$start_from = ($page - 1) * $record_per_page;

$query = "SELECT * FROM tblquestionmcq as e ,tblcourse as c where e.course_id=c.course_id and c.course_t_id=$facultyid  ORDER BY q_id LIMIT $start_from, $record_per_page";
//echo "<script>alert('$query');</script>";
if(empty($search))
{
if (isset($_POST["sort"])) {
  $dat=$_POST["sort"];
  $query = "SELECT * FROM tblquestionmcq as e ,tblcourse as c where e.course_id=c.course_id and c.course_t_id=$facultyid ORDER BY $dat LIMIT $start_from, $record_per_page";
  //$result = mysqli_query($connect, $query);
  //$sortcat=$dat;
}
}
else
{
  $dat=$_POST["sort"];
  if($dat=="default"){$dat="q_id";}
  $query = "SELECT * FROM tblquestionmcq as e ,tblcourse as c WHERE CONCAT(`q_id`,`question`,`option1`,`option2`,`option3`,`option4`,`answer`,`explanation`) LIKE '%$search%' and e.course_id=c.course_id and c.course_t_id=$facultyid ORDER BY $dat LIMIT $start_from,$record_per_page";
  
}

$result = mysqli_query($connect, $query);


?>

<table class="kt-datatable__table" width="100%" style="display: block; max-height: 350px;">
  <thead class="kt-datatable__head ">
    <tr class="kt-datatable__row" style="left:0px;">
      
     
      <th class="kt-datatable__cell kt-datatable__cell--sort ">
        <span  ><a href="#" class="btn btn-outline-primary" name='sortid' onclick="load_data('1','q_id','<?php if (isset($search)) {echo "$search";} ?>');">question Id&nbsp;<span class="fas fa-sort"></span></a></span>
      </th>
      <th class="kt-datatable__cell kt-datatable__cell--sort ">
        <span  ><a href="#" class="btn btn-outline-primary " name='sortname' onclick="load_data('1','question','<?php if (isset($search)) {echo "$search";} ?>');">Question&nbsp;<span class="fas fa-sort"></span></a></span>
      </th>

      <th class="kt-datatable__cell kt-datatable__cell--sort ">
        <span  ><a href="#" class="btn btn-outline-primary " name='sortop1' onclick="load_data('1','option1','<?php if (isset($search)) { echo "$search";} ?>');">Option-1&nbsp;<span class="fas fa-sort"></span></a></span>
      </th>
        <th class="kt-datatable__cell kt-datatable__cell--sort ">
          <span  ><a href="#" class="btn btn-outline-primary" name='sortop2' onclick="load_data('1','option2','<?php if (isset($search)) { echo "$search";} ?>');">Option-2&nbsp;<span class="fas fa-sort"></span></a></span>
        </th>
        <th class="kt-datatable__cell kt-datatable__cell--sort">
          <span  ><a href="#" class="btn btn-outline-primary" name='sortop3' onclick="load_data('1','option3','<?php if (isset($search)) { echo "$search";} ?>');">Option-3&nbsp;<span class="fas fa-sort"></span></a></span>
        </th>
        <th class="kt-datatable__cell kt-datatable__cell--sort">
          <span  ><a href="#" class="btn btn-outline-primary " name='sortop4' onclick="load_data('1','option4','<?php if (isset($search)) { echo "$search";} ?>');">Option-4&nbsp;<span class="fas fa-sort"></span></a></span>
        </th>
        <th class="kt-datatable__cell kt-datatable__cell--sort">
        <span  ><a href="#" class="btn btn-outline-primary" name='sortans' onclick="load_data('1','answer','<?php if (isset($search)) {echo "$search";} ?>');">Answer&nbsp;<span class="fas fa-sort"></span></a></span>
        </th>
        <th class="kt-datatable__cell kt-datatable__cell--sort">
        <span  ><a href="#" class="btn btn-outline-primary" name='sortexp' onclick="load_data('1','explanation','<?php if (isset($search)) {echo "$search";} ?>');">Explanation&nbsp;<span class="fas fa-sort"></span></a></span>
        </th>
        <th class="kt-datatable__cell kt-datatable__cell--sort">
        <span  ><a href="#" class="btn btn-outline-primary" name='sortexm' onclick="load_data('1','exam_id','<?php if (isset($search)) {echo "$search";} ?>');">Exam&nbsp;<span class="fas fa-sort"></span></a></span>
        </th>
        <th class="kt-datatable__cell kt-datatable__cell--sort">
        <span  ><a href="#" class="btn btn-outline-primary" name='sortcourse' onclick="load_data('1','course_id','<?php if (isset($search)) {echo "$search";} ?>');">Course&nbsp;<span class="fas fa-sort"></span></a></span>
        </th>
      <th data-field="Actions" data-autohide-disabled="false" class="kt-datatable__cell--left kt-datatable__cell kt-datatable__cell--sort">
        <span  ><a href="#" class="btn btn-outline-primary">Action</a></span>
      </th>
    </tr>   
  </thead>
  <tbody class="kt-datatable__body" style="max-height: 230px; overflow: auto;">
    <?php
    while ($row = mysqli_fetch_array($result)) {
      $cpid = $row["q_id"];
      $exid=$row["exam_id"];
      $cid=$row["course_id"];
      $que1="SELECT * FROM tblexam where exam_id='$exid'";
      $re1=mysqli_query($connect,$que1);
      $row1=mysqli_fetch_array($re1);
      $que2="SELECT * FROM tblcourse where course_id='$cid'";
      $re2=mysqli_query($connect,$que2);
      $row2=mysqli_fetch_array($re2);

    ?>
      <tr data-row="0" class="kt-datatable__row center" style="left: 0px;">
        
        <!--<td class="kt-datatable__cell--center kt-datatable__cell kt-datatable__cell--check" data-field="RecordID"><span style="width: 20px;"><label class="kt-checkbox kt-checkbox--single kt-checkbox--solid"><input type="checkbox" class="delct" name="language[]" id="language1" value="<?php # echo $_POST['q_id']  ?>">&nbsp;<span></span></label></span></td> -->
        <td class="kt-datatable__cell "><span ><?php echo $row["q_id"]; ?></span>
        </td>
        
        <td class="kt-datatable__cell "><span><?php echo $row["question"]; ?></span>
        </td>
       <!-- 
        <td  class="kt-datatable__cell"><span ><#?php echo $row["question_type"]; ?></span>
        </td>
    -->
        <td  class="kt-datatable__cell "><span ><?php echo $row["option1"]; ?></span>
        </td>
        <td  class="kt-datatable__cell "><span ><?php echo $row["option2"]; ?></span>
        </td>
        <td  class="kt-datatable__cell "><span ><?php echo $row["option3"]; ?></span>
        </td>
        <td  class="kt-datatable__cell "><span ><?php echo $row["option4"]; ?></span>
        </td>
        <td  class="kt-datatable__cell"><span ><?php echo $row["answer"]; ?></span>
        </td>
        <td  class="kt-datatable__cell"><span ><?php echo $row["explanation"]; ?></span>
        </td>
        <td  class="kt-datatable__cell"><span ><?php echo $row1["exam_name"]; ?></span>
        </td>
        <td  class="kt-datatable__cell"><span ><?php echo $row2["course_name"]; ?></span>
        </td>
        <td class="kt-datatable__cell--left kt-datatable__cell" data-field="Actions" data-autohide-disabled="false"><span style="overflow: visible; position: relative;">
             
             <a href="http://localhost/edunet/faculty/preview/demo1/custom/apps/user/edit-question.php?id=<?php echo $cpid;?>" class="btn btn-sm btn-clean btn-icon btn-icon-sm" title="Edit details">
              <i class="flaticon2-file"></i> </a> 

              <button  onclick="DeleteCompany('<?php echo $cpid; ?>')" value="<?php echo $row['q_id']; ?>" name="btndelete" class="btn_delete btn btn-sm btn-clean btn-icon btn-icon-sm" id="btn_delete" data-id3="<?php echo $row['q_id']; ?> " title="Delete"> <i  data-id4="'.<?php echo $raw["q_id"]; ?> .'" id="btn_deleteicon" class="flaticon2-delete"></i> </button>
          </span>
        </td>
      </tr>
    <?php    } ?>
  </tbody>
</table>
<br />
<div align="center">
 
  <?php
  
  $page_query = "SELECT * from tblquestionmcq as e ,tblcourse as c where e.course_id=c.course_id and c.course_t_id=$facultyid ORDER BY q_id";
  
  $page_result = mysqli_query($connect, $page_query);
  $total_records = mysqli_num_rows($page_result);
  $total_pages = ceil($total_records / $record_per_page);

  //if($page='del')
  //{
   // $id=$_GET['id'];
    //echo "<script> alert('delete from tblquestionmcq where q_id=$id');</script>";
    //$deletequery = "delete from tblquestionmcq where q_id=$id";
    //mysqli_query($con,$deletequery);
  //}
  //echo "<script>alert($_POST['delid']);</script>";
  
  

  for ($i = 1; $i <= $total_pages; $i++) {
  ?>
    <span class="pagination_link btn btn-outline-primary" style="cursor:pointer;" id="<?php echo $i ?>"><?php echo $i ?></span>
  <?php

  }

  ?>
</div>
<?php
        }
if(isset($_POST["delid"])){
  $deleteid=$_POST['delid'];
 // echo "<script>alert('urvesh');</script>";
  //$cpid= $_POST['deleteid'];
  //echo "alert('in delete')";
  $deletequery = "delete from tblquestionmcq where q_id='$deleteid'";
  mysqli_query($connect,$deletequery);
}


?>