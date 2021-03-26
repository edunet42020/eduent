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
$query = "SELECT * FROM tblpdf ORDER BY pdf_id LIMIT $start_from, $record_per_page";
/*
if (isset($search)) {
  $query = "SELECT * FROM `tblpdf` WHERE CONCAT(`pdf_id`, `pdf_name`, `u_middle_name`, `u_last_name`, `u_photo_path`, `u_ph_no`) LIKE '%$search%' LIMIT $start_from,$record_per_page";
} else {
  $query = "SELECT * FROM tblpdf ORDER BY pdf_id LIMIT $start_from, $record_per_page";
}
*/
if(empty($search))
{
if (isset($_POST["sort"])) {
  $dat=$_POST["sort"];
  $query = "SELECT * FROM tblpdf ORDER BY $dat LIMIT $start_from, $record_per_page";
  //$result = mysqli_query($connect, $query);
  //$sortcat=$dat;
}
}
else
{
  $dat=$_POST["sort"];
  if($dat=="default"){$dat="pdf_id";}
  $query = "SELECT * FROM `tblpdf` WHERE CONCAT(`pdf_id`,`pdf_name`) LIKE '%$search%' ORDER BY $dat LIMIT $start_from,$record_per_page";
}

/*if ($sortcat == "id") {
  if (isset($search)) {
    $query = "SELECT * FROM `tblpdf` WHERE CONCAT(`pdf_id`, `pdf_name`, `u_middle_name`, `u_last_name`, `u_photo_path`, `u_ph_no`) LIKE '%$search%' ORDER BY pdf_id LIMIT $start_from,$record_per_page";
  } else {
    $query = "SELECT * FROM tblpdf ORDER BY pdf_id LIMIT $start_from, $record_per_page";
  }
} elseif ($sortcat == "firstname") {
  if (isset($search)) {
    $query = "SELECT * FROM `tblpdf` WHERE CONCAT(`pdf_id`, `pdf_name`, `u_middle_name`, `u_last_name`, `u_photo_path`, `u_ph_no`) LIKE '%$search%' ORDER BY pdf_name LIMIT $start_from,$record_per_page";
  } else {
    $query = "SELECT * FROM tblpdf ORDER BY u_fist_name LIMIT $start_from, $record_per_page";
  }
} elseif ($sortcat == "middlename") {
  if (isset($search)) {
    $query = "SELECT * FROM `tblpdf` WHERE CONCAT(`pdf_id`, `pdf_name`, `u_middle_name`, `u_last_name`, `u_photo_path`, `u_ph_no`) LIKE '%$search%' ORDER BY u_middle_name LIMIT $start_from,$record_per_page";
  } else {
    $query = "SELECT * FROM tblpdf ORDER BY u_middle_name LIMIT $start_from, $record_per_page";
  }
} elseif ($sortcat == "lastname") {
  if (isset($search)) {
    $query = "SELECT * FROM `tblpdf` WHERE CONCAT(`pdf_id`, `pdf_name`, `u_middle_name`, `u_last_name`, `u_photo_path`, `u_ph_no`) LIKE '%$search%' ORDER BY u_last_name LIMIT $start_from,$record_per_page";
  } else {
    $query = "SELECT * FROM tblpdf ORDER BY u_last_name LIMIT $start_from, $record_per_page";
  }
} elseif ($sortcat == "phptopath") {
  if (isset($search)) {
    $query = "SELECT * FROM `tblpdf` WHERE CONCAT(`pdf_id`, `pdf_name`, `u_middle_name`, `u_last_name`, `u_photo_path`, `u_ph_no`) LIKE '%$search%' ORDER BY u_photo_path LIMIT $start_from,$record_per_page";
  } else {
    $query = "SELECT * FROM tblpdf ORDER BY u_photo_path LIMIT $start_from, $record_per_page";
  }
} elseif ($sortcat == "phptopath") {
  if (isset($search)) {
    $query = "SELECT * FROM `tblpdf` WHERE CONCAT(`pdf_id`, `pdf_name`, `u_middle_name`, `u_last_name`, `u_photo_path`, `u_ph_no`) LIKE '%$search%' ORDER BY u_ph_no LIMIT $start_from,$record_per_page";
  } else {
    $query = "SELECT * FROM tblpdf ORDER BY u_ph_no LIMIT $start_from, $record_per_page";
  }
} else {
  if (isset($search)) {
    $query = "SELECT * FROM `tblpdf` WHERE CONCAT(`pdf_id`, `pdf_name`, `u_middle_name`, `u_last_name`, `u_photo_path`, `u_ph_no`) LIKE '%$search%' LIMIT $start_from,$record_per_page";
  } else {
    $query = "SELECT * FROM tblpdf LIMIT $start_from, $record_per_page";
  }
}

if (isset($search)) {
  $query = "SELECT * FROM `tblpdf` WHERE CONCAT(`pdf_id`, `pdf_name`, `u_middle_name`, `u_last_name`, `u_photo_path`, `u_ph_no`) LIKE '%$search%' LIMIT $start_from,$record_per_page";
} else {
  $query = "SELECT * FROM tblpdf ORDER BY pdf_id LIMIT $start_from, $record_per_page";
}
*/
$result = mysqli_query($connect, $query);


?>

<table class="kt-datatable__table" style="display: block; max-height: 370px;">
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
        <span ><button class="btn btn-outline-primary" name='sortid' onclick="load_data('1','pdf_id','<?php if (isset($search)) { echo "$search";} ?>');">Book Id&nbsp;<span class="fas fa-sort"></span></button></span>
      </th>
      <th data-field="ShipAddress" class="kt-datatable__cell kt-datatable__cell--sort">
        <span ><a href="#" class="btn btn-outline-primary" name='sortmname' onclick="load_data('1','pdf_id','<?php if (isset($search)) {echo "$search"; } ?>');">Book&nbsp;<span class="fas fa-sort"></span></a></span>
      </th>
      <th data-field="Country" class="kt-datatable__cell kt-datatable__cell--sort">
        <span ><a href="#" class="btn btn-outline-primary" name='sortfname' onclick="load_data('1','pdf_name','<?php if (isset($search)) {echo "$search";} ?>');">Book Name&nbsp;<span class="fas fa-sort"></span></a></span>
      </th>
      <th data-field="Country" class="kt-datatable__cell kt-datatable__cell--sort">
        <span ><a href="#" class="btn btn-outline-primary" name='sortfname' onclick="load_data('1','pdf_path','<?php if (isset($search)) {echo "$search";} ?>');">Book&nbsp;<span class="fas fa-sort"></span></a></span>
      </th>
      <th data-field="Actions" data-autohide-disabled="false" class="kt-datatable__cell--left kt-datatable__cell kt-datatable__cell--sort">
        <span ><a href="#" class="btn btn-outline-primary">Action</a></span>
      </th>
    </tr>
  </thead> 
  <tbody class="kt-datatable__body" style="max-height: 297px; overflow: auto;">
    <?php
    while ($row = mysqli_fetch_array($result)) {
      $cpid = $row["pdf_id"];
      $pdf="../../../../../themes/metronic/theme/default/demo1/dist/assets/media/book/".$row['pdf_path'];
      $imagepath="../../../../../themes/metronic/theme/default/demo1/dist/assets/media/bookimage/".$row['pdf_image'];
    ?>
      <tr data-row="0" class="kt-datatable__row" style="left: 0px;">
        
        <!--<td class="kt-datatable__cell--center kt-datatable__cell kt-datatable__cell--check" data-field="RecordID"><span style="width: 20px;"><label class="kt-checkbox kt-checkbox--single kt-checkbox--solid"><input type="checkbox" class="delct" name="language[]" id="language1" value="<?php # echo $_POST['pdf_id']  ?>">&nbsp;<span></span></label></span></td> -->
        <td data-field="categoryid" class="kt-datatable__cell"><span ><?php echo $row["pdf_id"]; ?></span>
        </td>
        <td data-field="categoryimage" class="kt-datatable__cell" ><img width="100px" height="100px" class=" kt-media kt-media--xl" src="<?php echo $imagepath; ?>" alt="image">
        </td>
        <td  class="kt-datatable__cell "><span class="kt-font-bold " ><?php echo $row["pdf_name"]; ?></spanclass=>
        </td>
        <td class="kt-datatable__cell "><span ><b><a href="<?php echo $pdf; ?>">
            View Pdf
        </a></b></span>
        </td>
       
        
       
        <td class="kt-datatable__cell--left kt-datatable__cell" data-field="Actions" data-autohide-disabled="false">
          <span style="overflow: visible; position: relative; width: 110px;">
            <!-- <a href="http://localhost/edunet/admin/preview/demo1/custom/apps/user/edit-user.php?id=<?php echo $cpid;?>" class="btn btn-sm btn-clean btn-icon btn-icon-sm" title="Edit details">
              <i class="flaticon2-file"></i> </a>-->
              <button  onclick="DeleteCompany('<?php echo $cpid; ?>')" value="<?php echo $row['pdf_id']; ?>" name="btndelete" class="btn_delete btn btn-sm btn-clean btn-icon btn-icon-sm" id="btn_delete" data-id3="<?php echo $row['pdf_id']; ?> " title="Delete"> <i  data-id4="'.<?php echo $raw["pdf_id"]; ?> .'" id="btn_deleteicon" class="flaticon2-delete"></i> </button>
          </span>
        </td>
      </tr>
    <?php    } ?>
  </tbody>
</table>
<br />
<div align="center">
  <?php
  $page_query = "SELECT * FROM tblpdf ORDER BY pdf_id";
  $page_result = mysqli_query($connect, $page_query);
  $total_records = mysqli_num_rows($page_result);
  $total_pages = ceil($total_records / $record_per_page);
  //if($page='del')
  //{
   // $id=$_GET['id'];
    //echo "<script> alert('delete from tblpdf where pdf_id=$id');</script>";
    //$deletequery = "delete from tblpdf where pdf_id=$id";
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
  $query="SELECT * FROM `tblpdf` WHERE pdf_id=$deleteid";
  $res=mysqli_query($connect,$query);
  while($row=mysqli_fetch_array($res))
  {
    $filepath="../../../../../themes/metronic/theme/default/demo1/dist/assets/media/book/".$row['pdf_path'];
    $fileimage="../../../../../themes/metronic/theme/default/demo1/dist/assets/media/bookimage/".$row['pdf_image'];
  }
  $unimage=$filepath.$new_path;
  $unpdf=$fileimage.$new_path;
  unlink($unimage) or die("unlink unsuccessfull".mysqli_error($connect));
  unlink($unpdf) or die("unlink unsuccessfull".mysqli_error($connect));
  $deletequery = "delete from tblpdf where pdf_id='$deleteid'";
  mysqli_query($connect,$deletequery);
}


?>