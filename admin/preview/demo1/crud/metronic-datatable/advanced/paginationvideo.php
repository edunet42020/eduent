<?php

//pagination.php  
$connect = mysqli_connect("localhost", "root", "", "edunet");
if (isset($_POST['readrecord']))
{
$record_per_page = 5;
$page = '';
$sortcat = '';
$output = '';
$query='';
$dat='';
$filepath="";

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
$query = "SELECT * FROM tblvideo ORDER BY v_id LIMIT $start_from, $record_per_page";
/*
if (isset($search)) {
  $query = "SELECT * FROM `tblvideo` WHERE CONCAT(`v_id`, `v_name`, `u_middle_name`, `u_last_name`, `u_photo_path`, `u_ph_no`) LIKE '%$search%' LIMIT $start_from,$record_per_page";
} else {
  $query = "SELECT * FROM tblvideo ORDER BY v_id LIMIT $start_from, $record_per_page";
}
*/
if(empty($search))
{
if (isset($_POST["sort"])) {
  $dat=$_POST["sort"];
  $query = "SELECT * FROM tblvideo ORDER BY $dat LIMIT $start_from, $record_per_page";
  //$result = mysqli_query($connect, $query);
  //$sortcat=$dat;
}
}
else
{
  $dat=$_POST["sort"];
  if($dat=="default"){$dat="v_id";}
  $query = "SELECT * FROM `tblvideo` WHERE CONCAT(`v_id`, `v_name`,`v_description`,`v_course_id`,`v_week_id`,`v_f_id`) LIKE '%$search%' ORDER BY $dat LIMIT $start_from,$record_per_page";
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
      <th data-field="OrderID" class="kt-datatable__cell kt-datatable__cell--sort">
        <span ><button class="btn btn-outline-primary" name='sortid' onclick="load_data('1','v_id','<?php if (isset($search)) { echo "$search";} ?>');">Video Id&nbsp;<span class="fas fa-sort"></span></button></span>
      </th>
      <th data-field="ShipAddress" class="kt-datatable__cell kt-datatable__cell--sort">
        <span ><a href="#" class="btn btn-outline-primary" name='sortmname' onclick="load_data('1','v_id','<?php if (isset($search)) {echo "$search"; } ?>');">Video&nbsp;<span class="fas fa-sort"></span></a></span>
      </th>
      <th data-field="Country" class="kt-datatable__cell kt-datatable__cell--sort">
        <span ><a href="#" class="btn btn-outline-primary" name='sortfname' onclick="load_data('1','v_name','<?php if (isset($search)) {echo "$search";} ?>');">Video Name&nbsp;<span class="fas fa-sort"></span></a></span>
      </th>
      <th data-field="Country" class="kt-datatable__cell kt-datatable__cell--sort">
        <span ><a href="#" class="btn btn-outline-primary" name='sortfname' onclick="load_data('1','v_description','<?php if (isset($search)) {echo "$search";} ?>');">Description&nbsp;<span class="fas fa-sort"></span></a></span>
      </th>
      <th data-field="Country" class="kt-datatable__cell kt-datatable__cell--sort">
        <span ><a href="#" class="btn btn-outline-primary" name='sortfname' onclick="load_data('1','v_course_id','<?php if (isset($search)) {echo "$search";} ?>');">Course&nbsp;<span class="fas fa-sort"></span></a></span>
      </th>
      <th data-field="Country" class="kt-datatable__cell kt-datatable__cell--sort">
        <span ><a href="#" class="btn btn-outline-primary" name='sortfname' onclick="load_data('1','v_f_id','<?php if (isset($search)) {echo "$search";} ?>');">Faculty&nbsp;<span class="fas fa-sort"></span></a></span>
      </th>
      <th data-field="Country" class="kt-datatable__cell kt-datatable__cell--sort">
        <span ><a href="#" class="btn btn-outline-primary" name='sortfname' onclick="load_data('1','v_week_id','<?php if (isset($search)) {echo "$search";} ?>');">Week&nbsp;<span class="fas fa-sort"></span></a></span>
      </th>
      
      <th data-field="Actions" data-autohide-disabled="false" class="kt-datatable__cell--left kt-datatable__cell kt-datatable__cell--sort">
        <span style="width: 150px;"><a href="#" class="btn btn-outline-primary">Action</a></span>
      </th>
    </tr>
  </thead>
  <tbody class="kt-datatable__body" style="max-height: 297px; overflow: auto;">
    <?php
    while ($row = mysqli_fetch_array($result)) {
      $cpid = $row["v_id"];
      $imagepath="../../../../../themes/metronic/theme/default/demo1/dist/assets/media/video/".$row['v_path'];
      $qa="SELECT * FROM tblcourse WHERE course_id='$row[v_course_id]'";
      $qb="SELECT * FROM tblfaculty WHERE f_id='$row[v_f_id]'";
      $qc="SELECT * FROM tblweek WHERE week_id='$row[v_week_id]'";
      $resa=mysqli_query($connect,$qa);
      $resb=mysqli_query($connect,$qb);
      $resc=mysqli_query($connect,$qc);
      $rowa=mysqli_fetch_array($resa);
      $rowb=mysqli_fetch_array($resb);
      $rowc=mysqli_fetch_array($resc);
    ?>
      <tr data-row="0" class="kt-datatable__row" style="left: 0px;">
        
        <!--<td class="kt-datatable__cell--center kt-datatable__cell kt-datatable__cell--check" data-field="RecordID"><span style="width: 20px;"><label class="kt-checkbox kt-checkbox--single kt-checkbox--solid"><input type="checkbox" class="delct" name="language[]" id="language1" value="<?php # echo $_POST['v_id']  ?>">&nbsp;<span></span></label></span></td> -->
        <td data-field="categoryid" class="kt-datatable__cell"><span style="width: 55px;"><?php echo $row["v_id"]; ?></span>
        </td>
         <td data-field="categoryimage" style="width:130px;" class="kt-datatable__cell kt-media kt-media--xl kt-media--circle" >
            <video controls width="130vw" style="border-radius: 8px; ">
                <source src="<?php  echo $imagepath ;?>"/>
            </video>
        </td>
        <td  class="kt-datatable__cell "><span class="kt-font-bold kt-font-primary" ><?php echo $row["v_name"]; ?></spanclass=>
        </td>
        <td  class="kt-datatable__cell"><span ><?php echo $row["v_description"]; ?></span>
        </td>
        <td class="kt-datatable__cell"><span ><?php echo $rowa["course_name"]; ?></span>
        </td>
        <td class="kt-datatable__cell"><span ><?php echo $rowb["f_name"]; ?></span>
        </td>
        <td class="kt-datatable__cell"><span ><?php echo $rowc["week_title"]; ?></span>
        </td>
       
        
       
        <td class="kt-datatable__cell--left kt-datatable__cell" data-field="Actions" data-autohide-disabled="false">
          <span style="overflow: visible; position: relative; width: 110px;">
            <!-- <a href="http://localhost/edunet/admin/preview/demo1/custom/apps/user/edit-user.php?id=<?php echo $cpid;?>" class="btn btn-sm btn-clean btn-icon btn-icon-sm" title="Edit details">
              <i class="flaticon2-file"></i> </a>-->
              <button  onclick="DeleteCompany('<?php echo $cpid; ?>')" value="<?php echo $row['v_id']; ?>" name="btndelete" class="btn_delete btn btn-sm btn-clean btn-icon btn-icon-sm" id="btn_delete" data-id3="<?php echo $row['v_id']; ?> " title="Delete"> <i  data-id4="'.<?php echo $raw["v_id"]; ?> .'" id="btn_deleteicon" class="flaticon2-delete"></i> </button>
          </span>
        </td>
      </tr>
    <?php    } ?>
  </tbody>
</table>






<br />
<div align="center">
 
  <?php
  $page_query = "SELECT * FROM tblvideo ORDER BY v_id";
  $page_result = mysqli_query($connect, $page_query);
  $total_records = mysqli_num_rows($page_result);
  $total_pages = ceil($total_records / $record_per_page);

  
  
  //if($page='del')
  //{
   // $id=$_GET['id'];
    //echo "<script> alert('delete from tblvideo where v_id=$id');</script>";
    //$deletequery = "delete from tblvideo where v_id=$id";
    //mysqli_query($connect,$deletequery);
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
  //echo "<script>alert('urvesh');</script>";
  $query="SELECT * FROM `tblvideo` WHERE v_id=$deleteid";
  $res=mysqli_query($connect,$query);
  while($row=mysqli_fetch_array($res))
  {
    $filepath="../../../../../themes/metronic/theme/default/demo1/dist/assets/media/video/".$row['v_path'];
  }
  $unimage=$filepath.$new_path;
  unlink($unimage) or die("unlink unsuccessfull".mysqli_error($connect));
  $deletequery = "delete from tblvideo where v_id='$deleteid'";
  mysqli_query($connect,$deletequery);
}


?>