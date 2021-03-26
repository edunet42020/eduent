<?php
//pagination.php  
$connect = mysqli_connect("localhost", "root", "", "edunet");
$record_per_page = 5;
$page = '';
$output = '';
if (isset($_POST["page"])) {
    $page = $_POST["page"];
} else {
    $page = 1;
}
$start_from = ($page - 1) * $record_per_page;
$query = "SELECT * FROM tbluser ORDER BY u_id DESC LIMIT $start_from, $record_per_page";
$result = mysqli_query($connect, $query);
$output .= "  
      <table class='table table-bordered'>  
           <tr> 
            <th width='30%'>user_id</th>   
                <th width='30%'>first Name</th>  
                <th width='30%'>middle</th>  
           </tr>  
 ";

while ($row = mysqli_fetch_array($result)) {
    $output .= '  
           <tr>  
           <td>' . $row["u_id"] . '</td>     
           <td>' . $row["u_first_name"] . '</td>
                <td>' . $row["u_middle_name"] . '</td>    
           </tr>  
      ';
}

?>
<table id="edunetdatatable" class="kt-datatable__table" style="display: block; max-height: 350px;">
    <thead class="kt-datatable__head">
        <tr class="kt-datatable__row" style="left: 0px;">
            <th class="kt-datatable__cell kt-datatable__toggle-detail"><span></span>
            </th>
            <th data-field="RecordID" class="kt-datatable__cell--center kt-datatable__cell kt-datatable__cell--check">
                <span style="width: 20px;">
                    <label class="kt-checkbox kt-checkbox--single kt-checkbox--all kt-checkbox--solid">
                        <input type="checkbox">&nbsp;
                        <span></span>
                    </label>
                </span>
            </th>
            <th data-field="OrderID" class="kt-datatable__cell kt-datatable__cell--sort">
                <span style="width: 110px;">User-ID</span>
            </th>
            <th data-field="Country" class="kt-datatable__cell kt-datatable__cell--sort">
                <span style="width: 110px;">First Name</span>
            </th>
            <th data-field="ShipAddress" class="kt-datatable__cell kt-datatable__cell--sort">
                <span style="width: 110px;">Middle Name</span>
            </th>
            <th data-field="ShipDate" class="kt-datatable__cell kt-datatable__cell--sort">
                <span style="width: 110px;">Last Name</span>
            </th>
            <th data-field="Status" class="kt-datatable__cell kt-datatable__cell--sort">
                <span style="width: 110px;">Photo path</span>
            </th>
            <th data-field="Type" data-autohide-disabled="false" class="kt-datatable__cell kt-datatable__cell--sort">
                <span style="width: 110px;">Phone Number</span>
            </th>
            <th data-field="Actions" data-autohide-disabled="false"
                class="kt-datatable__cell--left kt-datatable__cell kt-datatable__cell--sort">
                <span style="width: 110px;">Actions</span>
            </th>
        </tr>
    </thead>
    <tbody class="kt-datatable__body" style="max-height: 297px; overflow: auto;">
    ";
<?php
                                while ($row = mysqli_fetch_array($result)) 
                                {
                                    echo "<tr data-row='0' class='kt-datatable__row' style='left: 0px;'>
                                            <td class='kt-datatable__cell kt-datatable__toggle-detail'><a class='kt-datatable__toggle-detail' href=''><i class='fa fa-caret-right'></i></a></td>
                                            <td class='kt-datatable__cell--center kt-datatable__cell kt-datatable__cell--check' data-field='RecordID'><span style='width: 20px;'><label class='kt-checkbox kt-checkbox--single kt-checkbox--solid'><input type='checkbox' value='1'>&nbsp;<span></span></label></span></td>
                                            <td data-field='OrderID' class='kt-datatable__cell'><span style='width: 110px;'>'" . $row['u_id'] . "'</span>
                                            </td>
                                            <td data-field='Country' class='kt-datatable__cell'><span style='width: 110px;'>'" . $row['u_first_name'] . "'</span>
                                            </td> 
                                            <td data-field='ShipAddress' class='kt-datatable__cell'><span style='width: 110px;'>'" . $row['u_middle_name'] . "'</span>
                                            </td>
                                            <td data-field='ShipDate' class='kt-datatable__cell'><span style='width: 110px;'>'" . $row['u_last_name'] . "</span>
                                            </td>
                                            <td data-field='Status' class='kt-datatable__cell'><span style='width: 110px;'><span class='kt-badge  kt-badge--primary kt-badge--inline kt-badge--pill'>'" . $row['u_photo_path'] . "'</span></span>
                                            </td>
                                            <td data-field='Type' data-autohide-disabled='false' class='kt-datatable__cell'>
                                                <span style='width: 110px;'><span class='kt-badge kt-badge--primary kt-badge--dot'></span>&nbsp;<span class='kt-font-bold kt-font-primary'>'" . $row['u_ph_no'] . "'</span></span>
                                            </td>
                                            <td class='kt-datatable__cell--left kt-datatable__cell' data-field='Actions' data-autohide-disabled='false'><span style='overflow: visible; position: relative; width: 110px;'>
                                                    <div class='dropdown'> <a href='javascript:;' class='btn btn-sm btn-clean btn-icon btn-icon-sm' data-toggle='dropdown'> <i class='flaticon2-settings'></i> </a>
                                                        <div class='dropdown-menu dropdown-menu-right'> <a class='dropdown-item' href='#'><i class='la la-edit'></i> Edit Details</a> <a class='dropdown-item' href='#'><i class='la la-leaf'></i> Update
                                                                Status</a> <a class='dropdown-item' href='#'><i class='la la-print'></i> Generate Report</a>
                                                        </div>
                                                    </div> <a href='javascript:;' class='btn btn-sm btn-clean btn-icon btn-icon-sm' title='Edit details'>
                                                        <i class='flaticon2-file'></i> </a> <a href='javascript:;' class='btn btn-sm btn-clean btn-icon btn-icon-sm' title='Delete'> <i class='flaticon2-delete'></i> </a>
                                                </span>
                                            </td>
                                        </tr>";
                                }
echo "
    </tbody>
</table>
";








$output .= '</table><br /><div align="center">';
$page_query = "SELECT * FROM tbluser ORDER BY u_id DESC";
$page_result = mysqli_query($connect, $page_query);
$total_records = mysqli_num_rows($page_result);
$total_pages = ceil($total_records / $record_per_page);
for ($i = 1; $i <= $total_pages; $i++) {

    $output .= "<span class='pagination_link kt-datatable__pager-link kt-datatable__pager-link-number'  style='cursor:pointer; padding:6px; border:1px solid #ccc;' id='" . $i . "'>" . $i . "</span>";
}
$output .= '</div><br /><br />';
echo $output;