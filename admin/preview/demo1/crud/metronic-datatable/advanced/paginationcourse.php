<?php
$connect = mysqli_connect("localhost", "root", "", "edunet");
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

$query = "SELECT * FROM tblcourse ORDER BY course_id LIMIT $start_from, $record_per_page";

if(empty($search))
{
if (isset($_POST["sort"])) {
  $dat=$_POST["sort"];
  $query = "SELECT * FROM tblcourse ORDER BY $dat LIMIT $start_from, $record_per_page";
  //$result = mysqli_query($connect, $query);
  //$sortcat=$dat;
}
}
else
{
  $dat=$_POST["sort"];
  if($dat=="default"){$dat="course_id";}
  $query = "SELECT * FROM `tblcourse` WHERE CONCAT(`course_id`, `course_name`, `course_description`,`course_full_description`, `course_status`,`course_start_date`,`course_end_date`, `course_prize`) LIKE '%$search%' ORDER BY $dat LIMIT $start_from,$record_per_page";
  
}

$result = mysqli_query($connect, $query);
?>

<table class="kt-datatable__table" style="display: block; max-height: 350px;">
  <thead class="kt-datatable__head">
    <tr class="kt-datatable__row" style="left: 0px;">
     
          <!--<th data-field="RecordID" class="kt-datatable__cell--center kt-datatable__cell kt-datatable__cell--check">
        <span style="width: 20px;">
          <label class="kt-checkbox kt-checkbox--single kt-checkbox--all kt-checkbox--solid">
            <input type="checkbox" name="checkallct" id="checkallct" onClick="check_uncheck_checkbox(this.checked);">
            <span></span>
          </label>
        </span>
      </th>-->
      <th  data-field="OrderID" class="kt-datatable__cell kt-datatable__cell--sort">
        <span ><button class="btn btn-outline-primary" name='sortid' onclick="load_data('1','course_id','<?php if (isset($search)) { echo "$search";} ?>');">Id&nbsp;<span class="fas fa-sort"></span></button></span>
      </th>
      <th data-field="Status" class="kt-datatable__cell kt-datatable__cell--sort">
        <span ><a href="#" class="btn btn-outline-primary" name='sortphoto' onclick="load_data('1','course_id','<?php if (isset($search)) {echo "$search";} ?>');">Image&nbsp;<span class="fas fa-sort"></span></a></span>
      </th>
      <th data-field="Country" class="kt-datatable__cell kt-datatable__cell--sort">
        <span ><a href="#" class="btn btn-outline-primary" name='sortfname' onclick="load_data('1','course_name','<?php if (isset($search)) {echo "$search";} ?>');">Name&nbsp;<span class="fas fa-sort"></span></a></span>
      </th>
      <th data-field="ShipAddress" class="kt-datatable__cell kt-datatable__cell--sort">
        <span ><a href="#" class="btn btn-outline-primary" name='sortmname' onclick="load_data('1','course_description','<?php if (isset($search)) {echo "$search"; } ?>');">details&nbsp;<span class="fas fa-sort"></span></a></span>
      </th>
      <th data-field="ShipDate" class="kt-datatable__cell kt-datatable__cell--sort">
        <span ><a href="#" class="btn btn-outline-primary" name='sortlname' onclick="load_data('1','course_full_description','<?php if (isset($search)) { echo "$search";} ?>');">Description&nbsp;<span class="fas fa-sort"></span></a></span>
      </th>
      <th data-field="Type" data-autohide-disabled="false" class="kt-datatable__cell kt-datatable__cell--sort">
        <span ><a href="#" class="btn btn-outline-primary" name='sortnumber' onclick="load_data('1','coursr_status','<?php if (isset($search)) { echo "$search";} ?>');">Status&nbsp;<span class="fas fa-sort"></span></a></span>
      </th>
      <th data-field="Type" data-autohide-disabled="false" class="kt-datatable__cell kt-datatable__cell--sort">
        <span ><a href="#" class="btn btn-outline-primary" name='sortnumber' onclick="load_data('1','coursr_start_date','<?php if (isset($search)) { echo "$search";} ?>');">Start Date&nbsp;<span class="fas fa-sort"></span></a></span>
      </th>
      <th data-field="Type" data-autohide-disabled="false" class="kt-datatable__cell kt-datatable__cell--sort">
        <span ><a href="#" class="btn btn-outline-primary" name='sortnumber' onclick="load_data('1','course_end_date','<?php if (isset($search)) { echo "$search";} ?>');">End Date&nbsp;<span class="fas fa-sort"></span></a></span>
      </th>
      <th data-field="Type" data-autohide-disabled="false" class="kt-datatable__cell kt-datatable__cell--sort">
        <span ><a href="#" class="btn btn-outline-primary" name='sortnumber' onclick="load_data('1','course_prize','<?php if (isset($search)) { echo "$search";} ?>');">Fees&nbsp;<span class="fas fa-sort"></span></a></span>
      </th>
      <th data-field="Status" class="kt-datatable__cell kt-datatable__cell--sort">
        <span ><a href="#" class="btn btn-outline-primary" name='sortcat' onclick="load_data('1','category_id','<?php if (isset($search)) {echo "$search";} ?>');">Category&nbsp;<span class="fas fa-sort"></span></a></span>
      </th>
      <th data-field="Actions" data-autohide-disabled="false" class="kt-datatable__cell--left kt-datatable__cell kt-datatable__cell--sort">
        <span ><a href="#" class="btn btn-outline-primary">Action</a></span>
      </th>
    </tr>
  </thead>
  <tbody class="kt-datatable__body" style="max-height: 297px; overflow: auto;">
    <?php
    while ($row = mysqli_fetch_array($result)) {
      $cpid = $row["course_id"];

      $imagepath="../../../../../themes/metronic/theme/default/demo1/dist/assets/media/course/".$row['course_photo_path'];
      $catid=$row['category_id'];
      $qa="SELECT * FROM tblcategory WHERE category_id='$catid'";
      $resa=mysqli_query($connect,$qa);
      $rowcat=mysqli_fetch_array($resa);
    ?>
      <tr data-row="0" class="kt-datatable__row" style="left: 0px;">
       
        <!--<td class="kt-datatable__cell--center kt-datatable__cell kt-datatable__cell--check" data-field="RecordID"><span style="width: 20px;"><label class="kt-checkbox kt-checkbox--single kt-checkbox--solid"><input type="checkbox" class="delct" name="language[]" id="language1" value="<?php # echo $_POST['course_id']  ?>">&nbsp;<span></span></label></span></td> -->
        <td class="kt-datatable__cell"><span ><?php echo $row["course_id"]; ?></span>
        </td>
        <td class="kt-datatable__cell "><img class="kt-media kt-media--circle"  height="60px" width="60px" src="<?php echo $imagepath; ?>" alt="image">
        </td>
        <td  class="kt-datatable__cell"><span ><?php echo $row["course_name"]; ?></span>
        </td>
        </td>
        <td class="kt-datatable__cell"><span><?php echo $row["course_description"]; ?></span>
        </td>
        <td  class="kt-datatable__cell"><span ><?php echo $row["course_full_description"]; ?></span>
        </td>
        <?php 
                    if($row['course_status']=='Active')
                    {
                      echo "<td><p class='kt-font-bold kt-font-success'>Active</p></td>";
                    }
                    else
                    {
                      echo "<td><p class='kt-font-bold kt-font-danger'>Deactive</td>";
                    }
          ?>

        <td data-field="Status" class="kt-datatable__cell"><span ><?php echo $row["course_start_date"]; ?></span>
        </td>
        <td data-field="Status" class="kt-datatable__cell"><span ><?php echo $row["course_end_date"]; ?></span>
        </td>
        
        <td data-field="Status" class="kt-datatable__cell"><span ><?php echo $row["course_prize"]; ?></span>
        </td>
        <td data-field="Category" class="kt-datatable__cell"><span ><?php echo $rowcat['category_name']; ?></span>
        </td>
        <td class="kt-datatable__cell--left kt-datatable__cell" data-field="Actions" data-autohide-disabled="false"><span style="overflow: visible; position: relative;">
             <a href="http://localhost/edunet/admin/preview/demo1/custom/apps/user/edit-course.php?id=<?php echo $cpid;?>" class="btn btn-sm btn-clean btn-icon btn-icon-sm" title="Edit details">
              <i class="flaticon2-file"></i> </a> 
              <button  onclick="DeleteCompany('<?php echo $cpid; ?>')" value="<?php echo $row['course_id']; ?>" name="btndelete" class="btn_delete btn btn-sm btn-clean btn-icon btn-icon-sm" id="btn_delete" data-id3="<?php echo $row['course_id']; ?> " title="Delete"> <i  data-id4="'.<?php echo $raw["course_id"]; ?> .'" id="btn_deleteicon" class="flaticon2-delete"></i> </button>
          </span>
        </td>
      </tr>
    <?php    }?>
  </tbody>
</table>






<br />
<div align="center">
 
  <?php
  $page_query = "SELECT * FROM tblcourse ORDER BY course_id";
  $page_result = mysqli_query($connect, $page_query);
  $total_records = mysqli_num_rows($page_result);
  $total_pages = ceil($total_records / $record_per_page);

  
  
  //if($page='del')
  //{
   // $id=$_GET['id'];
    //echo "<script> alert('delete from tblcourse where course_id=$id');</script>";
    //$deletequery = "delete from tblcourse where course_id=$id";
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
  $query="SELECT * FROM `tblcourse` WHERE course_id=$deleteid";
  $res=mysqli_query($connect,$query);
  while($row=mysqli_fetch_array($res))
  {
    $filepath="../../../../../themes/metronic/theme/default/demo1/dist/assets/media/course/".$row['course_photo_path'];
  }
    $unimage=$filepath;
    unlink($filepath) or die("unlink unsuccessfull".mysqli_error($connect));
    echo "<script>alert('urvesh');</script>";
  //$cpid= $_POST['deleteid'];
  //echo "alert('in delete')";
    $deletequery = "delete from tblcourse where course_id='$deleteid'";
   mysqli_query($connect,$deletequery);
}

?>