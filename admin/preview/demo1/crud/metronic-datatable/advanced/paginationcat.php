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
$query = "SELECT * FROM tblcategory ORDER BY category_id LIMIT $start_from, $record_per_page";
/*
if (isset($search)) {
  $query = "SELECT * FROM `tblcategory` WHERE CONCAT(`category_id`, `category_name`, `u_middle_name`, `u_last_name`, `u_photo_path`, `u_ph_no`) LIKE '%$search%' LIMIT $start_from,$record_per_page";
} else {
  $query = "SELECT * FROM tblcategory ORDER BY category_id LIMIT $start_from, $record_per_page";
}
*/
if(empty($search))
{
if (isset($_POST["sort"])) {
  $dat=$_POST["sort"];
  $query = "SELECT * FROM tblcategory ORDER BY $dat LIMIT $start_from, $record_per_page";
  //$result = mysqli_query($connect, $query);
  //$sortcat=$dat;
}
}
else
{
  $dat=$_POST["sort"];
  if($dat=="default"){$dat="category_id";}
  $query = "SELECT * FROM `tblcategory` WHERE CONCAT(`category_id`, `category_name`) LIKE '%$search%' ORDER BY $dat LIMIT $start_from,$record_per_page";
}

/*if ($sortcat == "id") {
  if (isset($search)) {
    $query = "SELECT * FROM `tblcategory` WHERE CONCAT(`category_id`, `category_name`, `u_middle_name`, `u_last_name`, `u_photo_path`, `u_ph_no`) LIKE '%$search%' ORDER BY category_id LIMIT $start_from,$record_per_page";
  } else {
    $query = "SELECT * FROM tblcategory ORDER BY category_id LIMIT $start_from, $record_per_page";
  }
} elseif ($sortcat == "firstname") {
  if (isset($search)) {
    $query = "SELECT * FROM `tblcategory` WHERE CONCAT(`category_id`, `category_name`, `u_middle_name`, `u_last_name`, `u_photo_path`, `u_ph_no`) LIKE '%$search%' ORDER BY category_name LIMIT $start_from,$record_per_page";
  } else {
    $query = "SELECT * FROM tblcategory ORDER BY u_fist_name LIMIT $start_from, $record_per_page";
  }
} elseif ($sortcat == "middlename") {
  if (isset($search)) {
    $query = "SELECT * FROM `tblcategory` WHERE CONCAT(`category_id`, `category_name`, `u_middle_name`, `u_last_name`, `u_photo_path`, `u_ph_no`) LIKE '%$search%' ORDER BY u_middle_name LIMIT $start_from,$record_per_page";
  } else {
    $query = "SELECT * FROM tblcategory ORDER BY u_middle_name LIMIT $start_from, $record_per_page";
  }
} elseif ($sortcat == "lastname") {
  if (isset($search)) {
    $query = "SELECT * FROM `tblcategory` WHERE CONCAT(`category_id`, `category_name`, `u_middle_name`, `u_last_name`, `u_photo_path`, `u_ph_no`) LIKE '%$search%' ORDER BY u_last_name LIMIT $start_from,$record_per_page";
  } else {
    $query = "SELECT * FROM tblcategory ORDER BY u_last_name LIMIT $start_from, $record_per_page";
  }
} elseif ($sortcat == "phptopath") {
  if (isset($search)) {
    $query = "SELECT * FROM `tblcategory` WHERE CONCAT(`category_id`, `category_name`, `u_middle_name`, `u_last_name`, `u_photo_path`, `u_ph_no`) LIKE '%$search%' ORDER BY u_photo_path LIMIT $start_from,$record_per_page";
  } else {
    $query = "SELECT * FROM tblcategory ORDER BY u_photo_path LIMIT $start_from, $record_per_page";
  }
} elseif ($sortcat == "phptopath") {
  if (isset($search)) {
    $query = "SELECT * FROM `tblcategory` WHERE CONCAT(`category_id`, `category_name`, `u_middle_name`, `u_last_name`, `u_photo_path`, `u_ph_no`) LIKE '%$search%' ORDER BY u_ph_no LIMIT $start_from,$record_per_page";
  } else {
    $query = "SELECT * FROM tblcategory ORDER BY u_ph_no LIMIT $start_from, $record_per_page";
  }
} else {
  if (isset($search)) {
    $query = "SELECT * FROM `tblcategory` WHERE CONCAT(`category_id`, `category_name`, `u_middle_name`, `u_last_name`, `u_photo_path`, `u_ph_no`) LIKE '%$search%' LIMIT $start_from,$record_per_page";
  } else {
    $query = "SELECT * FROM tblcategory LIMIT $start_from, $record_per_page";
  }
}

if (isset($search)) {
  $query = "SELECT * FROM `tblcategory` WHERE CONCAT(`category_id`, `category_name`, `u_middle_name`, `u_last_name`, `u_photo_path`, `u_ph_no`) LIKE '%$search%' LIMIT $start_from,$record_per_page";
} else {
  $query = "SELECT * FROM tblcategory ORDER BY category_id LIMIT $start_from, $record_per_page";
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
        <span ><button class="btn btn-outline-primary" name='sortid' onclick="load_data('1','category_id','<?php if (isset($search)) { echo "$search";} ?>');">Category Id&nbsp;<span class="fas fa-sort"></span></button></span>
      </th>
      <th data-field="ShipAddress" class="kt-datatable__cell kt-datatable__cell--sort">
        <span ><a href="#" class="btn btn-outline-primary" name='sortmname' onclick="load_data('1','category_id','<?php if (isset($search)) {echo "$search"; } ?>');">Image&nbsp;<span class="fas fa-sort"></span></a></span>
      </th>
      <th data-field="Country" class="kt-datatable__cell kt-datatable__cell--sort">
        <span ><a href="#" class="btn btn-outline-primary" name='sortfname' onclick="load_data('1','category_name','<?php if (isset($search)) {echo "$search";} ?>');">Category Name&nbsp;<span class="fas fa-sort"></span></a></span>
      </th>
      
     
      <th data-field="Actions" data-autohide-disabled="false" class="kt-datatable__cell--left kt-datatable__cell kt-datatable__cell--sort">
        <span ><a href="#" class="btn btn-outline-primary">Action</a></span>
      </th>
    </tr>
  </thead>
  <tbody class="kt-datatable__body" style="max-height: 297px; overflow: auto;">
    <?php
    while ($row = mysqli_fetch_array($result)) {
      $cpid = $row["category_id"];
      $imagepath="../../../../../themes/metronic/theme/default/demo1/dist/assets/media/category/".$row['category_photo_path'];
      
    ?>
      <tr data-row="0" class="kt-datatable__row" style="left: 0px;">
        <!--<td class="kt-datatable__cell--center kt-datatable__cell kt-datatable__cell--check" data-field="RecordID"><span style="width: 20px;"><label class="kt-checkbox kt-checkbox--single kt-checkbox--solid"><input type="checkbox" class="delct" name="language[]" id="language1" value="<?php # echo $_POST['category_id']  ?>">&nbsp;<span></span></label></span></td> -->
        <td data-field="categoryid" class="kt-datatable__cell"><span ><?php echo $row["category_id"]; ?></span>
        </td>
         <td data-field="categoryimage"  class="kt-datatable__cell" ><img height="80px" width="80px" class="kt-media kt-media--circle" src="<?php echo $imagepath; ?>" alt="image">
        </td>
        <td data-field="categoryname" class="kt-datatable__cell "><span class="kt-font-bold kt-font-primary"><?php echo $row["category_name"]; ?></spanclass=>
        </td>
       
        
        <?php 
          if($row['category_name']=="other")
          { ?>
              <td>No Actions available</td>
          <?php }
          else
          {
        ?>
        <td class="kt-datatable__cell--left kt-datatable__cell" data-field="Actions" data-autohide-disabled="false">
          <span style="overflow: visible; position: relative; width: 110px;">
            <!-- <a href="http://localhost/edunet/admin/preview/demo1/custom/apps/user/edit-user.php?id=<?php echo $cpid;?>" class="btn btn-sm btn-clean btn-icon btn-icon-sm" title="Edit details">
              <i class="flaticon2-file"></i> </a>-->
              <button  onclick="DeleteCompany('<?php echo $cpid; ?>')" value="<?php echo $row['category_id']; ?>" name="btndelete" class="btn_delete btn btn-sm btn-clean btn-icon btn-icon-sm" id="btn_delete" data-id3="<?php echo $row['category_id']; ?> " title="Delete"> <i  data-id4="'.<?php echo $raw["category_id"]; ?> .'" id="btn_deleteicon" class="flaticon2-delete"></i> </button>
          </span>
        </td>
       <?php }
      ?>
    </tr>
    <?php    } ?>
  
  </tbody>
</table>






<br />
<div align="center">
 
  <?php
  $page_query = "SELECT * FROM tblcategory ORDER BY category_id";
  $page_result = mysqli_query($connect, $page_query);
  $total_records = mysqli_num_rows($page_result);
  $total_pages = ceil($total_records / $record_per_page);

  
  
  //if($page='del')
  //{
   // $id=$_GET['id'];
    //echo "<script> alert('delete from tblcategory where category_id=$id');</script>";
    //$deletequery = "delete from tblcategory where category_id=$id";
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
  //echo "<script>alert('urvesh');</script>";
  $query="SELECT * FROM `tblcategory` WHERE category_id=$deleteid";
  $res=mysqli_query($connect,$query);
  while($row=mysqli_fetch_array($res))
  {
    $filepath="../../../../../themes/metronic/theme/default/demo1/dist/assets/media/category/".$row['category_photo_path'];
  }
  $unimage=$filepath.$new_path;
  unlink($unimage) or die("unlink unsuccessfull".mysqli_error($connect));
  $deletequery = "delete from tblcategory where category_id='$deleteid'";
  mysqli_query($connect,$deletequery);
}


?>