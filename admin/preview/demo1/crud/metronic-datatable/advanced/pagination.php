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
$query = "SELECT * FROM tbluser ORDER BY u_id LIMIT $start_from, $record_per_page";
/*
if (isset($search)) {
  $query = "SELECT * FROM `tbluser` WHERE CONCAT(`u_id`, `u_first_name`, `u_middle_name`, `u_last_name`, `u_photo_path`, `u_ph_no`) LIKE '%$search%' LIMIT $start_from,$record_per_page";
} else {
  $query = "SELECT * FROM tbluser ORDER BY u_id LIMIT $start_from, $record_per_page";
}
*/
if(empty($search))
{
if (isset($_POST["sort"])) {
  $dat=$_POST["sort"];
  $query = "SELECT * FROM tbluser ORDER BY $dat LIMIT $start_from, $record_per_page";
  //$result = mysqli_query($connect, $query);
  //$sortcat=$dat;
}
}
else
{
  $dat=$_POST["sort"];
  if($dat=="default"){$dat="u_id";}
  $query = "SELECT * FROM `tbluser` WHERE CONCAT(`u_id`, `u_first_name`, `u_middle_name`, `u_last_name`, `u_photo_path`, `u_ph_no`) LIKE '%$search%' ORDER BY $dat LIMIT $start_from,$record_per_page";
}

/*if ($sortcat == "id") {
  if (isset($search)) {
    $query = "SELECT * FROM `tbluser` WHERE CONCAT(`u_id`, `u_first_name`, `u_middle_name`, `u_last_name`, `u_photo_path`, `u_ph_no`) LIKE '%$search%' ORDER BY u_id LIMIT $start_from,$record_per_page";
  } else {
    $query = "SELECT * FROM tbluser ORDER BY u_id LIMIT $start_from, $record_per_page";
  }
} elseif ($sortcat == "firstname") {
  if (isset($search)) {
    $query = "SELECT * FROM `tbluser` WHERE CONCAT(`u_id`, `u_first_name`, `u_middle_name`, `u_last_name`, `u_photo_path`, `u_ph_no`) LIKE '%$search%' ORDER BY u_first_name LIMIT $start_from,$record_per_page";
  } else {
    $query = "SELECT * FROM tbluser ORDER BY u_fist_name LIMIT $start_from, $record_per_page";
  }
} elseif ($sortcat == "middlename") {
  if (isset($search)) {
    $query = "SELECT * FROM `tbluser` WHERE CONCAT(`u_id`, `u_first_name`, `u_middle_name`, `u_last_name`, `u_photo_path`, `u_ph_no`) LIKE '%$search%' ORDER BY u_middle_name LIMIT $start_from,$record_per_page";
  } else {
    $query = "SELECT * FROM tbluser ORDER BY u_middle_name LIMIT $start_from, $record_per_page";
  }
} elseif ($sortcat == "lastname") {
  if (isset($search)) {
    $query = "SELECT * FROM `tbluser` WHERE CONCAT(`u_id`, `u_first_name`, `u_middle_name`, `u_last_name`, `u_photo_path`, `u_ph_no`) LIKE '%$search%' ORDER BY u_last_name LIMIT $start_from,$record_per_page";
  } else {
    $query = "SELECT * FROM tbluser ORDER BY u_last_name LIMIT $start_from, $record_per_page";
  }
} elseif ($sortcat == "phptopath") {
  if (isset($search)) {
    $query = "SELECT * FROM `tbluser` WHERE CONCAT(`u_id`, `u_first_name`, `u_middle_name`, `u_last_name`, `u_photo_path`, `u_ph_no`) LIKE '%$search%' ORDER BY u_photo_path LIMIT $start_from,$record_per_page";
  } else {
    $query = "SELECT * FROM tbluser ORDER BY u_photo_path LIMIT $start_from, $record_per_page";
  }
} elseif ($sortcat == "phptopath") {
  if (isset($search)) {
    $query = "SELECT * FROM `tbluser` WHERE CONCAT(`u_id`, `u_first_name`, `u_middle_name`, `u_last_name`, `u_photo_path`, `u_ph_no`) LIKE '%$search%' ORDER BY u_ph_no LIMIT $start_from,$record_per_page";
  } else {
    $query = "SELECT * FROM tbluser ORDER BY u_ph_no LIMIT $start_from, $record_per_page";
  }
} else {
  if (isset($search)) {
    $query = "SELECT * FROM `tbluser` WHERE CONCAT(`u_id`, `u_first_name`, `u_middle_name`, `u_last_name`, `u_photo_path`, `u_ph_no`) LIKE '%$search%' LIMIT $start_from,$record_per_page";
  } else {
    $query = "SELECT * FROM tbluser LIMIT $start_from, $record_per_page";
  }
}

if (isset($search)) {
  $query = "SELECT * FROM `tbluser` WHERE CONCAT(`u_id`, `u_first_name`, `u_middle_name`, `u_last_name`, `u_photo_path`, `u_ph_no`) LIKE '%$search%' LIMIT $start_from,$record_per_page";
} else {
  $query = "SELECT * FROM tbluser ORDER BY u_id LIMIT $start_from, $record_per_page";
}
*/
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
        <span style="width: 130px;"><a class="btn btn-outline-primary" name='sortid' onclick="load_data('1','u_id','<?php if (isset($search)) { echo "$search";} ?>');">User Id&nbsp;<span class="fas fa-sort"></span></a></span>
      </th>
      <th data-field="Status" class="kt-datatable__cell kt-datatable__cell--sort">
        <span style="width: 130px;"><a href="#" class="btn btn-outline-primary" name='sortphoto' onclick="load_data('1','u_photo_path','<?php if (isset($search)) {echo "$search";} ?>');">Photo Path&nbsp;<span class="fas fa-sort"></span></a></span>
      </th>
      <th data-field="Country" class="kt-datatable__cell kt-datatable__cell--sort">
        <span style="width: 130px;"><a href="#" class="btn btn-outline-primary" name='sortfname' onclick="load_data('1','u_first_name','<?php if (isset($search)) {echo "$search";} ?>');">First Name&nbsp;<span class="fas fa-sort"></span></a></span>
      </th>
      <th data-field="ShipAddress" class="kt-datatable__cell kt-datatable__cell--sort">
        <span style="width: 130px;"><a href="#" class="btn btn-outline-primary" name='sortmname' onclick="load_data('1','u_middle_name','<?php if (isset($search)) {echo "$search"; } ?>');">Middle Name&nbsp;<span class="fas fa-sort"></span></a></span>
      </th>
      <th data-field="ShipDate" class="kt-datatable__cell kt-datatable__cell--sort">
        <span style="width: 130px;"><a href="#" class="btn btn-outline-primary" name='sortlname' onclick="load_data('1','u_last_name','<?php if (isset($search)) { echo "$search";} ?>');">Last Name&nbsp;<span class="fas fa-sort"></span></a></span>
      </th>
        <th data-field="ShipDate" class="kt-datatable__cell kt-datatable__cell--sort">
          <span style="width: 130px;"><a href="#" class="btn btn-outline-primary" name='sortlname' onclick="load_data('1','u_status','<?php if (isset($search)) { echo "$search";} ?>');">Status&nbsp;<span class="fas fa-sort"></span></a></span>
        </th>
     
      <th data-field="Type" data-autohide-disabled="false" class="kt-datatable__cell kt-datatable__cell--sort">
        <span style="width: 130px;"><a href="#" class="btn btn-outline-primary" name='sortnumber' onclick="load_data('1','u_ph_no','<?php if (isset($search)) { echo "$search";} ?>');">Mobile&nbsp;<span class="fas fa-sort"></span></a></span>
      </th>
      <th data-field="Actions" data-autohide-disabled="false" class="kt-datatable__cell--left kt-datatable__cell kt-datatable__cell--sort">
        <span style="width: 130px;"><a href="#" class="btn btn-outline-primary">Action</a></span>
      </th>
    </tr>
  </thead>
  <tbody class="kt-datatable__body" style="max-height: 297px; overflow: auto;">
    <?php
    while ($row = mysqli_fetch_array($result)) {
      $cpid = $row["u_id"];
      
      $imagepath="../../../../../themes/metronic/theme/default/demo1/dist/assets/media/user/".$row['u_photo_path'];
      
    ?>
      <tr data-row="0" class="kt-datatable__row" style="left: 0px;">
       
        <!--<td class="kt-datatable__cell--center kt-datatable__cell kt-datatable__cell--check" data-field="RecordID"><span style="width: 20px;"><label class="kt-checkbox kt-checkbox--single kt-checkbox--solid"><input type="checkbox" class="delct" name="language[]" id="language1" value="<?php # echo $_POST['u_id']  ?>">&nbsp;<span></span></label></span></td> -->
        <td data-field="OrderID" class="kt-datatable__cell"><span style="width: 110px;"><?php echo $row["u_id"]; ?></span>
        </td>
        <td data-field="categoryimage" class="kt-datatable__cell kt-media kt-media--xl kt-media--circle" ><img  src="<?php echo $imagepath; ?>" alt="image"><span style="width: 50px;"></span>
        </td>
        <td data-field="Country" class="kt-datatable__cell"><span style="width: 110px;"><?php echo $row["u_first_name"]; ?></span>
        </td>
        <td data-field="ShipAddress" class="kt-datatable__cell"><span style="width: 110px;"><?php echo $row["u_middle_name"]; ?></span>
        </td>
        <td data-field="ShipDate" class="kt-datatable__cell"><span style="width: 110px;"><?php echo $row["u_last_name"]; ?></span>
        </td>
        <td data-field="Type" data-autohide-disabled="false" class="kt-datatable__cell" style="width:110px;">
        <?php 
                    if($row['u_status']=='Active')
                    {
                      echo "<p class='kt-font-bold kt-font-success'>$row[u_status]</p>";
                    }
                    else
                    {
                      echo "<p class='kt-font-bold kt-font-danger'>$row[u_status]</p>";
                    }
          ?>
        </td>
        <td data-field="Type" data-autohide-disabled="false" class="kt-datatable__cell">
          <span style="width: 110px;"><span class="kt-badge kt-badge--primary kt-badge--dot"></span>&nbsp;<span class="kt-font-bold kt-font-primary"><?php echo $row["u_ph_no"]; ?></span></span>
        </td>
       
        <td class="kt-datatable__cell--left kt-datatable__cell" data-field="Actions" data-autohide-disabled="false"><span style="overflow: visible; position: relative; width: 110px;">
             <a href="http://localhost/edunet/admin/preview/demo1/custom/apps/user/edit-user.php?id=<?php echo $cpid;?>" class="btn btn-sm btn-clean btn-icon btn-icon-sm" title="Edit details">
              <i class="flaticon2-file"></i> </a> 
              <button  onclick="DeleteCompany('<?php echo $cpid; ?>')" value="<?php echo $row['u_id']; ?>" name="btndelete" class="btn_delete btn btn-sm btn-clean btn-icon btn-icon-sm" id="btn_delete" data-id3="<?php echo $row['u_id']; ?> " title="Delete"> <i  data-id4="'.<?php echo $raw["u_id"]; ?> .'" id="btn_deleteicon" class="flaticon2-delete"></i> </button>
          </span>
        </td>
      </tr>
    <?php    } ?>
  </tbody>
</table>






<br />
<div align="center">
 
  <?php
  $page_query = "SELECT * FROM tbluser ORDER BY u_id";
  $page_result = mysqli_query($connect, $page_query);
  $total_records = mysqli_num_rows($page_result);
  $total_pages = ceil($total_records / $record_per_page);

  
  
  //if($page='del')
  //{
   // $id=$_GET['id'];
    //echo "<script> alert('delete from tbluser where u_id=$id');</script>";
    //$deletequery = "delete from tbluser where u_id=$id";
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
  $query="SELECT * FROM `tbluser` WHERE u_id=$deleteid";
  $res=mysqli_query($connect,$query);
  while($row=mysqli_fetch_array($res))
  {
    $filepath="../../../../../themes/metronic/theme/default/demo1/dist/assets/media/user/".$row['u_photo_path'];
  }
  $unimage=$filepath;
  unlink($filepath) or die("unlink unsuccessfull".mysqli_error($connect));
  //$cpid= $_POST['deleteid'];
  //echo "alert('in delete')";
  $deletequery = "delete from tbluser where u_id='$deleteid'";
  mysqli_query($connect,$deletequery);
}


?>