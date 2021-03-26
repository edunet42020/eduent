<?php
session_start();

$connect = mysqli_connect("localhost", "root", "", "edunet");
//$fid=$_SESSION["facultyid"];
$facultyid=$_SESSION['facultyid'];
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

$query = "SELECT * FROM tblsyllabus where course_id in (select course_id from tblcourse where course_t_id=$facultyid) LIMIT $start_from, $record_per_page";
if(empty($search))
{
if (isset($_POST["sort"])) {
  $dat=$_POST["sort"];
  $query = "SELECT * FROM tblsyllabus ORDER BY $dat LIMIT $start_from, $record_per_page";
  //$result = mysqli_query($connect, $query);
  //$sortcat=$dat;
}
}
else
{
  $dat=$_POST["sort"];
  if($dat=="default"){$dat="syllabus_id";}
  $query = "SELECT * FROM tblsyllabus as s,tblcourse as c where CONCAT(`syllabus_id`,`chap1`,`chap2`,`chap3`,`chap4`,`course_name`) LIKE '%$search%' and c.course_t_id=$facultyid ORDER BY $dat LIMIT $start_from,$record_per_page"; 
}
//echo $query;
$result = mysqli_query($connect, $query);
?>
<table class="kt-datatable__table" width="100%" style="display: block; max-height: 350px;">
  <thead class="kt-datatable__head ">
    <tr class="kt-datatable__row" style="left:0px;">   
      <th class="kt-datatable__cell kt-datatable__cell--sort ">
        <span  ><a href="#" class="btn btn-outline-primary" name='sortid' onclick="load_data('1','syllabus_id','<?php if (isset($search)) {echo "$search";} ?>');">Id&nbsp;<span class="fas fa-sort"></span></a></span>
      </th>
      <th class="kt-datatable__cell kt-datatable__cell--sort ">
        <span  ><a href="#" class="btn btn-outline-primary " name='sortname' onclick="load_data('1','chap1','<?php if (isset($search)) {echo "$search";} ?>');">chapter 1&nbsp;<span class="fas fa-sort"></span></a></span>
      </th>
      <th class="kt-datatable__cell kt-datatable__cell--sort ">
        <span  ><a href="#" class="btn btn-outline-primary " name='sortop1' onclick="load_data('1','chap2','<?php if (isset($search)) { echo "$search";} ?>');">chapter 2&nbsp;<span class="fas fa-sort"></span></a></span>
      </th>
        <th class="kt-datatable__cell kt-datatable__cell--sort ">
          <span  ><a href="#" class="btn btn-outline-primary" name='sortop2' onclick="load_data('1','chap3','<?php if (isset($search)) { echo "$search";} ?>');">chapter 3&nbsp;<span class="fas fa-sort"></span></a></span>
        </th>
         <th class="kt-datatable__cell kt-datatable__cell--sort ">
          <span  ><a href="#" class="btn btn-outline-primary" name='sortop2' onclick="load_data('1','chap4','<?php if (isset($search)) { echo "$search";} ?>');">chapter 4&nbsp;<span class="fas fa-sort"></span></a></span>
        </th>
        <th class="kt-datatable__cell kt-datatable__cell--sort">
          <span  ><a href="#" class="btn btn-outline-primary" name='sortop3' onclick="load_data('1','course_id','<?php if (isset($search)) { echo "$search";} ?>');">Course Name&nbsp;<span class="fas fa-sort"></span></a></span>
        </th>
      <th data-field="Actions" data-autohide-disabled="false" class="kt-datatable__cell--left kt-datatable__cell kt-datatable__cell--sort">
        <span  ><a href="#" class="btn btn-outline-primary">Action</a></span>
      </th>
    </tr>   
  </thead>
  <tbody class="kt-datatable__body" style="max-height: 230px; overflow: auto;">
    <?php
    while ($row = mysqli_fetch_array($result)) {
      $cpid = $row["syllabus_id"];
      $ch1= $row['chap1'];
         $ch2= $row['chap2'];
            $ch3= $row['chap3'];
               $ch4= $row['chap4'];
      $cid=$row["course_id"];
      $que2="SELECT * FROM tblcourse where course_id='$cid'";
      $re2=mysqli_query($connect,$que2);
      $row2=mysqli_fetch_array($re2);
    ?>
      <tr data-row="0" class="kt-datatable__row center" style="left: 0px;">
        <!--<td class="kt-datatable__cell--center kt-datatable__cell kt-datatable__cell--check" data-field="RecordID"><span style="width: 20px;"><label class="kt-checkbox kt-checkbox--single kt-checkbox--solid"><input type="checkbox" class="delct" name="language[]" id="language1" value="<?php # echo $_POST['syllabus_id']  ?>">&nbsp;<span></span></label></span></td> -->
        <td class="kt-datatable__cell "><span ><?php echo $row["syllabus_id"]; ?></span>
        </td>
        <td class="kt-datatable__cell "><span><?php echo $row["chap1"]; ?></span>
        </td>
         <td class="kt-datatable__cell "><span><?php echo $row["chap2"]; ?></span>
        </td>
         <td class="kt-datatable__cell "><span><?php echo $row["chap3"]; ?></span>
        </td>
         <td class="kt-datatable__cell "><span><?php echo $row["chap4"]; ?></span>
        </td>

       <!-- 
        <td  class="kt-datatable__cell"><span ><#?php echo $row["exam_no_type"]; ?></span>
        </td>
    -->
      
        <td  class="kt-datatable__cell "><span ><?php echo $row2["course_name"]; ?></span>
        </td>
        <td class="kt-datatable__cell--left kt-datatable__cell" data-field="Actions" data-autohide-disabled="false"><span style="overflow: visible; position: relative;">
             
             <a href="http://localhost/edunet/faculty/preview/demo1/custom/apps/user/edit-exam.php?id=<?php echo $cpid;?>" class="btn btn-sm btn-clean btn-icon btn-icon-sm" title="Edit details">
              <i class="flaticon2-file"></i> </a> 

              <button  onclick="DeleteCompany('<?php echo $cpid; ?>')" value="<?php echo $row['syllabus_id']; ?>" name="btndelete" class="btn_delete btn btn-sm btn-clean btn-icon btn-icon-sm" id="btn_delete" data-id3="<?php echo $row['syllabus_id']; ?> " title="Delete"> <i  data-id4="'.<?php echo $raw["syllabus_id"]; ?> .'" id="btn_deleteicon" class="flaticon2-delete"></i> </button>
          </span>
        </td>
      </tr>
    <?php    } ?>
  </tbody>
</table>
<br />
<div align="center">
  <?php
  $page_query = "SELECT * FROM tblsyllabus ORDER BY syllabus_id";
  $page_result = mysqli_query($connect, $page_query);
  $total_records = mysqli_num_rows($page_result);
  $total_pages = ceil($total_records / $record_per_page);
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
  $deletequery = "DELETE FROM tblsyllabus WHERE syllabus_id='$deleteid'";
  mysqli_query($connect,$deletequery);
}
?>