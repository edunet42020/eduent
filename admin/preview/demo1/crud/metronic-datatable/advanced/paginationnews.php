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
$query = "SELECT * FROM tblnews ORDER BY news_id LIMIT $start_from, $record_per_page";

if(empty($search))
{
if (isset($_POST["sort"])) {
  $dat=$_POST["sort"];
  $query = "SELECT * FROM tblnews ORDER BY $dat LIMIT $start_from, $record_per_page";
  //$result = mysqli_query($connect, $query);
  //echo $query;
  //$sortcat=$dat;
}
}
else
{
  $dat=$_POST["sort"];
  if($dat=="default"){$dat="news_id";}
  $query = "SELECT * FROM `tblnews` WHERE CONCAT(`news_id`, `news_title`, `news_description`,  `news_date`,`news_image_path`) LIKE '%$search%' ORDER BY $dat LIMIT $start_from,$record_per_page";
}
$result = mysqli_query($connect, $query);
?>
<table class="kt-datatable__table" style="display: block; max-height: 350px;">
  <thead class="kt-datatable__head">
    <tr class="kt-datatable__row" style="left: 0px;">
      
      
      <th data-field="OrderID" class="kt-datatable__cell kt-datatable__cell--sort">
        <span style="width: 110px;"><button class="btn btn-outline-primary" name='sortid' onclick="load_data('1','news_id','<?php if (isset($search)) { echo "$search";} ?>');">News Id&nbsp;<span class="fas fa-sort"></span></button></span>
      </th>
      <th data-field="Country" class="kt-datatable__cell kt-datatable__cell--sort">
        <span style="width: 110px;"><a href="#" class="btn btn-outline-primary" name='sortfname' onclick="load_data('1','news_title','<?php if (isset($search)) {echo "$search";} ?>');">News Title&nbsp;<span class="fas fa-sort"></span></a></span>
      </th>
      
      <th data-field="ShipDate" class="kt-datatable__cell kt-datatable__cell--sort">
        <span style="width: 110;"><a href="#" class="btn btn-outline-primary" name='sortlname' onclick="load_data('1','news_description','<?php if (isset($search)) { echo "$search";} ?>');">Description&nbsp;<span class="fas fa-sort"></span></a></span>
      </th>
      
      <th data-field="Type" data-autohide-disabled="false" class="kt-datatable__cell kt-datatable__cell--sort">
        <span style="width: 110px;"><a href="#" class="btn btn-outline-primary" name='sortnumber' onclick="load_data('1','news_date','<?php if (isset($search)) { echo "$search";} ?>');">News Date&nbsp;<span class="fas fa-sort"></span></a></span>
      </th>
      <th data-field="Type" data-autohide-disabled="false" class="kt-datatable__cell kt-datatable__cell--sort">
        <span style="width: 110px;"><a href="#" class="btn btn-outline-primary" name='sortnumber' onclick="load_data('1','news_image_path','<?php if (isset($search)) { echo "$search";} ?>');">News photo&nbsp;<span class="fas fa-sort"></span></a></span>
      </th>
      
      <th data-field="Actions" data-autohide-disabled="false" class="kt-datatable__cell--left kt-datatable__cell kt-datatable__cell--sort">
        <span style="width: 110px;"><a href="#" class="btn btn-outline-primary">Action</a></span>
      </th>
    </tr>
  </thead>
  <tbody class="kt-datatable__body" style="max-height: 297px; overflow: auto;">
    <?php
    while ($row = mysqli_fetch_array($result)) {
      $cpid = $row["news_id"];


       $imagepath="../../../../../themes/metronic/theme/default/demo1/dist/assets/media/news/".$row['news_image_path'];
      
    ?>
      <tr data-row="0" class="kt-datatable__row" style="left: 0px;">
        
        <!--<td class="kt-datatable__cell--center kt-datatable__cell kt-datatable__cell--check" data-field="RecordID"><span style="width: 20px;"><label class="kt-checkbox kt-checkbox--single kt-checkbox--solid"><input type="checkbox" class="delct" name="language[]" id="language1" value="<?php # echo $_POST['event_id']  ?>">&nbsp;<span></span></label></span></td> -->
        <td data-field="OrderID" class="kt-datatable__cell"><span style="width: 110px;"><?php echo $row["news_id"]; ?></span>
        </td>
        <td data-field="Country" class="kt-datatable__cell"><span style="width: 110px;"><?php echo $row["news_title"]; ?></span>
        </td>
        </td>
        
        <td data-field="ShipAddress" class="kt-datatable__cell"><span style="width: 110px;"><?php echo $row["news_description"]; ?></span>
        </td>
        
        <td data-field="Type" data-autohide-disabled="false" class="kt-datatable__cell">
          <span style="width: 110px;"><span class="kt-badge kt-badge--primary kt-badge--dot"></span>&nbsp;<span class="kt-font-bold kt-font-primary"><?php echo $row["news_date"]; ?></span></span>
        </td>
        </td>
      <td class="kt-datatable__cell "><img class="kt-media kt-media--circle"  height="60px" width="60px" src="<?php echo $imagepath; ?>" alt="image">
        </td>
        </td>
      
        
        <td class="kt-datatable__cell--left kt-datatable__cell" data-field="Actions" data-autohide-disabled="false"><span style="overflow: visible; position: relative; width: 110px;">
            
              <button  onclick="DeleteCompany('<?php echo $cpid; ?>')" value="<?php echo $row['event_id']; ?>" name="btndelete" class="btn_delete btn btn-sm btn-clean btn-icon btn-icon-sm" id="btn_delete" data-id3="<?php echo $row['event_id']; ?> " title="Delete"> <i  data-id4="'.<?php echo $raw["event_id"]; ?> .'" id="btn_deleteicon" class="flaticon2-delete"></i> </button>
          </span>
        </td>
      </tr>
    <?php    } ?>
  </tbody>
</table>






<br />
<div align="center">
 
  <?php
  $page_query = "SELECT * FROM tblnews ORDER BY news_id";
  $page_result = mysqli_query($connect, $page_query);
  $total_records = mysqli_num_rows($page_result);
  $total_pages = ceil($total_records / $record_per_page);

  
  
  //if($page='del')
  //{
   // $id=$_GET['id'];
    //echo "<script> alert('delete from tblnews where event_id=$id');</script>";
    //$deletequery = "delete from tblnews where event_id=$id";
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
  $query="SELECT * FROM `tblnews` WHERE news_id=$deleteid";
  $res=mysqli_query($connect,$query);
  while($row=mysqli_fetch_array($res))
  {
    $filepath="../../../../../themes/metronic/theme/default/demo1/dist/assets/media/news/".$row['news_image_path'];
  }
  //echo "<script>alert('urvesh');</script>";
  //$cpid= $_POST['deleteid'];
  //echo "alert('in delete')";
 
    unlink($filepath) or die("unlink unsuccessfull".mysqli_error($connect));
  $deletequery = "delete from tblnews where news_id='$deleteid'";
  mysqli_query($connect,$deletequery);
}


?>