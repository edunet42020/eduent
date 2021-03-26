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
$query = "SELECT * FROM tblfaculty ORDER BY f_id LIMIT $start_from, $record_per_page";
/*
if (isset($search)) {
  $query = "SELECT * FROM `tblfaculty` WHERE CONCAT(`f_id`, `f_name`, `f_ph_no`, `f_description`, `f_photo_path`, `f_qualification`) LIKE '%$search%' LIMIT $start_from,$record_per_page";
} else {
  $query = "SELECT * FROM tblfaculty ORDER BY f_id LIMIT $start_from, $record_per_page";
}
*/
if(empty($search))
{
if (isset($_POST["sort"])) {
  $dat=$_POST["sort"];
  $query = "SELECT * FROM tblfaculty ORDER BY $dat LIMIT $start_from, $record_per_page";
  //$result = mysqli_query($connect, $query);
  //$sortcat=$dat;
}
}
else
{
  $dat=$_POST["sort"];
  if($dat=="default"){$dat="f_id";}
  $query = "SELECT * FROM `tblfaculty` WHERE CONCAT(`f_id`, `f_name`, `f_ph_no`, `f_description`, `f_photo_path`, `f_qualification`) LIKE '%$search%' ORDER BY $dat LIMIT $start_from,$record_per_page";
}
$result = mysqli_query($connect, $query);
?>

<table class="kt-datatable__table" style="display: block; max-height: 350px;">
  <thead class="kt-datatable__head">
    <tr class="kt-datatable__row" style="left: 0px;">
      <th data-field="OrderID" class="kt-datatable__cell kt-datatable__cell--sort">
        <span style="width: 130px;" ><button class="btn btn-outline-primary"  name='sortid' onclick="load_data('1','f_id','<?php if (isset($search)) { echo "$search";} ?>');">Faculty Id&nbsp;<span class="fas fa-sort"></span></button></span>
      </th>
      <th data-field="Status" class="kt-datatable__cell kt-datatable__cell--sort">
        <span style="width: 130px;" ><a href="#" class="btn btn-outline-primary"  name='sortphoto' onclick="load_data('1','f_id','<?php if (isset($search)) { echo "$search";} ?>');">Photo&nbsp;<span class="fas fa-sort"></span></a></span>
      </th>
      <th data-field="Country" class="kt-datatable__cell kt-datatable__cell--sort">
        <span style="width: 130px;" ><a href="#" class="btn btn-outline-primary"  name='sortfname' onclick="load_data('1','f_name','<?php if (isset($search)) { echo "$search";} ?>');">Name&nbsp;<span class="fas fa-sort"></span></a></span>
      </th>
      <th data-field="ShipAddress" class="kt-datatable__cell kt-datatable__cell--sort">
        <span style="width: 130px;" ><a href="#" class="btn btn-outline-primary"  name='sortmname' onclick="load_data('1','f_ph_no','<?php if (isset($search)) { echo "$search";} ?>');">Phone&nbsp;<span class="fas fa-sort"></span></a></span>
      </th>
      <th data-field="ShipDate" class="kt-datatable__cell kt-datatable__cell--sort">
        <span style="width: 130px;" ><a href="#" class="btn btn-outline-primary"  name='sortlname' onclick="load_data('1','f_name','<?php if (isset($search)) { echo "$search";} ?>');">Expertise&nbsp;<span class="fas fa-sort"></span></a></span>
      </th>

      <th data-field="Type" data-autohide-disabled="false" class="kt-datatable__cell kt-datatable__cell--sort">
        <span style="width: 130px;" ><a href="#" class="btn btn-outline-primary"  name='sortnumber' onclick="load_data('1','f_qualification','<?php if (isset($search)) { echo "$search";} ?>');">Qualification&nbsp;<span class="fas fa-sort"></span></a></span>
      </th>
      <th data-field="ShipDate" class="kt-datatable__cell kt-datatable__cell--sort">
        <span style="width: 130px;"><a href="#" class="btn btn-outline-primary" name='sortlname' onclick="load_data('1','f_status','<?php if (isset($search)) { echo "$search";} ?>');">Status&nbsp;<span class="fas fa-sort"></span></a></span>
      </th>
      <th data-field="Actions" data-autohide-disabled="false" class="kt-datatable__cell--left kt-datatable__cell kt-datatable__cell--sort">
        <span style="width: 130px;" ><a href="#" class="btn btn-outline-primary">Action</a></span>
      </th>
    </tr>
  </thead>
  <tbody class="kt-datatable__body" style="max-height: 297px; overflow: auto;">
    <?php
    while ($row = mysqli_fetch_array($result)) {
      $cpid = $row["f_id"];
      $imagepath="../../../../../themes/metronic/theme/default/demo1/dist/assets/media/faculty/".$row['f_photo_path'];
    ?>
      <tr data-row="0" class="kt-datatable__row" style="left: 0px;">
      
        <td data-field="OrderID" class="kt-datatable__cell"><span style="width: 110px;    "><?php echo $row["f_id"]; ?></span>
        </td>
        <td data-field="categoryimage" class="kt-datatable__cell kt-media kt-media--xl kt-media--circle" ><img  src="<?php echo $imagepath; ?>" alt="image"><span style="width: 30px;"></span>
        </td>
        <td data-field="Country" class="kt-datatable__cell"><span style="width: 90px;"><?php echo $row["f_name"]; ?></span>
        </td>
        <td data-field="ShipAddress" class="kt-datatable__cell"><span style="width: 110px;"><?php echo $row["f_ph_no"]; ?></span>
        </td>
        <td data-field="ShipDate" class="kt-datatable__cell"><span style="width: 110px;"><?php echo $row["f_description"]; ?></span>
        </td>
        <td data-field="Type" data-autohide-disabled="false" class="kt-datatable__cell">
          <span style="width: 110px;"><span class="kt-badge kt-badge--primary kt-badge--dot"></span>&nbsp;<span class="kt-font-bold kt-font-primary"><?php echo $row["f_qualification"]; ?></span></span>
        </td>
        <td data-field="Type" data-autohide-disabled="false" class="kt-datatable__cell" style="width:110px;">
        <?php 
                    if($row['f_status']=='Active')
                    {
                      echo "<p class='kt-font-bold kt-font-success'>$row[f_status]</p>";
                    }
                    else
                    {
                      echo "<p class='kt-font-bold kt-font-danger'>$row[f_status]</p>";
                    }
          ?>
        </td>
        <td class="kt-datatable__cell--left kt-datatable__cell" data-field="Actions" data-autohide-disabled="false"><span style="overflow: visible; position: relative; width: 110px;">
            
            </div> <a href="http://localhost/edunet/admin/preview/demo1/custom/apps/user/edit-faculty.php?id=<?php echo $cpid;?>" class="btn btn-sm btn-clean btn-icon btn-icon-sm" title="Edit details">
              <i class="flaticon2-file"></i> </a> 
              <button  onclick="DeleteCompany('<?php echo $cpid; ?>')" value="<?php echo $row['f_id']; ?>" name="btndelete" class="btn_delete btn btn-sm btn-clean btn-icon btn-icon-sm" id="btn_delete" data-id3="<?php echo $row['f_id']; ?> " title="Delete"> <i  data-id4="'.<?php echo $raw["f_id"]; ?> .'" id="btn_deleteicon" class="flaticon2-delete"></i> </button>
          </span>
        </td>
      </tr>
    <?php    } ?>
  </tbody>
</table>






<br />
<div align="center">
  <?php
  $page_query = "SELECT * FROM tblfaculty ORDER BY f_id";
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
  $query="SELECT * FROM `tblfaculty` WHERE f_id=$deleteid";
  $res=mysqli_query($connect,$query);
  while($row=mysqli_fetch_array($res))
  {
    $filepath="../../../../../themes/metronic/theme/default/demo1/dist/assets/media/faculty/".$row['f_photo_path'];
  }
  $unimage=$filepath;
  unlink($filepath) or die("unlink unsuccessfull".mysqli_error($connect));
 
  $deletequery = "delete from tblfaculty where f_id='$deleteid'";
  mysqli_query($connect,$deletequery);
}


?>