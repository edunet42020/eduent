<?php

session_start();
if(!isset($_SESSION['facultyid']))
{
    header("Location:../../index.php");
}
else
{
    $id=$_SESSION['facultyid'];
}
?>
<?php

require("../../../connection.php");

define("ROOT_PATH", $_SERVER["DOCUMENT_ROOT"]);
define("rootpath","C:/xampp/htdocs/edunet/admin/preview/demo1");

?>
<!DOCTYPE html>
<html lang="en">
<!-- begin::Head -->

<head>
    <meta charset="utf-8" />

    <title>Edunet</title>
    <meta name="description" content="Single and group record selection">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="../../../../../themes/favicon.ico" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
<link href="../../../../../themes/favicon.ico" sizes="128x128" rel="shortcut icon" />
    <link href="../../../../../themes/metronic/theme/default/demo1/dist/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
      <link rel="stylesheet" href="../../../../../themes/metronic/theme/default/demo1/dist/assets/css/popup.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ajaxy/1.6.1/scripts/jquery.ajaxy.min.js" integrity="sha256-jfr3oM7h2TWPi2Q0O0vPuRh+pc0eSfWfpZ2nHXt8tFQ=" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="all.min.css">

    <!--begin::Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Roboto:300,400,500,600,700">
    <!--end::Fonts -->

    <!--begin:: Datatable link -->
    <script src="../../../../../themes/metronic/theme/default/demo1/dist/assets/jquery.min.js" type="text/javascript"></script>
    <link href="../../../../../themes/metronic/theme/default/demo1/dist/assets/datatable/dataTables.min.css" />
    <link href="../../../../../themes/metronic/theme/default/demo1/dist/assets/datatable/jquery.dataTables.min.css" />


    <script src="../../../../../themes/metronic/theme/default/demo1/dist/assets/datatable/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="../../../../../themes/metronic/theme/default/demo1/dist/assets/datatable/js/dataTables.min.js" type="text/javascript"></script>
    <script src="../../../../../themes/metronic/theme/default/demo1/dist/assets/datatable/js/dataTables.bootstrap.min.js" type="text/javascript"></script>

    <!--end:: Datatable link -->

    <!--begin::Global Theme Styles(used by all pages) -->
    <link href="../../../../../themes/metronic/theme/default/demo1/dist/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="../../../../../themes/metronic/theme/default/demo1/dist/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Global Theme Styles -->

    <!--begin::Layout Skins(used by all pages) -->

    <link href="../../../../../themes/metronic/theme/default/demo1/dist/assets/css/skins/header/base/light.css" rel="stylesheet" type="text/css" />
    <link href="../../../../../themes/metronic/theme/default/demo1/dist/assets/css/skins/header/menu/light.css" rel="stylesheet" type="text/css" />
    <link href="../../../../../themes/metronic/theme/default/demo1/dist/assets/css/skins/brand/dark.css" rel="stylesheet" type="text/css" />
    <link href="../../../../../themes/metronic/theme/default/demo1/dist/assets/css/skins/aside/dark.css" rel="stylesheet" type="text/css" />
    <!--end::Layout Skins -->

    <link rel="shortcut icon" href="https://keenthemes.com/metronic/themes/metronic/theme/default/demo1/dist/assets/media/logos/favicon.ico" />

    <style>
        th,td{
            width:160px;
        }
        </style>
</head>
<!-- end::Head -->

<!-- begin::Body -->

<body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--fixed kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading">

    <!-- begin:: Page -->
    <!-- begin:: Header Mobile -->
    <div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed ">
        <div class="kt-header-mobile__logo">
            <a href="../../../index.php">
                <img alt="Logo" src="../../../../../themes/metronic/theme/default/demo1/dist/assets/media/logos/logo-light.png" />
            </a>
        </div>
        <div class="kt-header-mobile__toolbar">
            <button class="kt-header-mobile__toggler kt-header-mobile__toggler--left" id="kt_aside_mobile_toggler"><span></span></button>

            <button class="kt-header-mobile__toggler" id="kt_header_mobile_toggler"><span></span></button>

            <button class="kt-header-mobile__topbar-toggler" id="kt_header_mobile_topbar_toggler"><i class="flaticon-more"></i></button>
        </div>
    </div>
    <!-- end:: Header Mobile -->
    <div class="kt-grid kt-grid--hor kt-grid--root">
    <?php
        require(rootpath."/asideindex.php");
    ?>
        <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">
        <?php
        require(rootpath."/headerindex.php");
    ?>
            
            <div class="kt-portlet kt-portlet--mobile">
                <div class="kt-portlet__head kt-portlet__head--lg">
                    <div class="kt-portlet__head-label">
                        <span class="kt-portlet__head-icon">
                            <i class="kt-font-brand flaticon2-line-chart"></i>
                        </span>
                        <h3 class="kt-portlet__head-title">
                            User Datatable
                            <small>User Details</small>
                        </h3>
                    </div>
                    <!--
                    <div class="kt-portlet__head-toolbar">
                        <div class="kt-portlet__head-wrapper">
                            <div class="dropdown dropdown-inline">
                                <a href="http://localhost/edunet/preview/demo1/custom/apps/user/add-user.php" style="color:#fff;" type="button" class="btn btn-brand btn-icon-sm">
                                        
                                
                                <i class="flaticon2-plus"></i> Add New
                                
                            
                            </a>
                            </div>
                        </div>
                    </div>
-->
                </div>

                <div class="kt-portlet__body">
                    <!--begin: Search Form -->
                    <div class="kt-form kt-form--label-right kt-margin-t-20 kt-margin-b-10">
                        <div class="row align-items-center">
                            <div class="col-xl-8 order-2 order-xl-1">
                                <div class="row align-items-center">
                                    <div class="col-md-4 kt-margin-b-20-tablet-and-mobile">
                                        <div class="kt-input-icon kt-input-icon--left">
                                            <input type="text" class="form-control" placeholder="Search..." id="search_cate">
                                            <span class="kt-input-icon__icon kt-input-icon__icon--left">
                                                <span><i class="la la-search"></i></span>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-xl-4 order-1 order-xl-2 kt-align-right">
                                <a href="#" class="btn btn-default kt-hidden">
                                    <i class="la la-cart-plus"></i> New Order
                                </a>
                                <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg d-xl-none">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end: Search Form -->

                    <!--begin: Selected Rows Group Action Form -->
                    <div class="kt-form kt-form--label-align-right kt-margin-t-20 collapse" id="kt_datatable_group_action_form1">
                        <div class="row align-items-center">
                            <div class="col-xl-12">
                                <div class="kt-form__group kt-form__group--inline">
                                    <div class="kt-form__label kt-form__label-no-wrap">
                                        <label class="kt-font-bold kt-font-danger-">Selected
                                            <span id="kt_datatable_selected_number1">0</span>
                                            records:</label>
                                    </div>
                                    <div class="kt-form__control">
                                        <div class="btn-toolbar">
                                            <div class="dropdown">
                                                <button type="button" class="btn btn-brand btn-sm dropdown-toggle" data-toggle="dropdown">
                                                    Update status
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Pending</a>
                                                    <a class="dropdown-item" href="#">Delivered</a>
                                                    <a class="dropdown-item" href="#">Canceled</a>
                                                </div>
                                            </div>
                                            &nbsp;&nbsp;&nbsp;
                                            <button class="btn btn-sm btn-danger" type="button" id="kt_datatable_delete_all1">Delete All</button>
                                            &nbsp;&nbsp;&nbsp;
                                            <button class="btn btn-sm btn-success" type="button" data-toggle="modal" data-target="#kt_modal_fetch_id_server">Fetch Selected
                                                Records</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end: Selected Rows Group Action Form -->
                </div>
                <div class="kt-portlet__body kt-portlet__body--fit">
                    <!--begin: Datatable -->

                    <div class="table-responsive kt-datatable kt-datatable--default kt-datatable--brand kt-datatable--scroll kt-datatable--loaded" id="pagination_data">
                    </div>

                </div>
            </div>
        </div>
        <!-- end:: Content -->
    </div>

    <!-- begin:: Footer -->
    <?php 
                    require_once("../../../footer.php");
               ?>
    <!-- end:: Footer -->
    </div>
    </div>
    </div>
    <!-- end:: Page -->


    <!-- begin::Scrolltop -->
    <div id="kt_scrolltop" class="kt-scrolltop">
        <i class="fa fa-arrow-up"></i>
    </div>
    <!-- end::Scrolltop -->


    <!-- begin::Global Config(global config for global JS sciprts) -->
    <script>
        var KTAppOptions = {
            "colors": {
                "state": {
                    "brand": "#5d78ff",
                    "dark": "#282a3c",
                    "light": "#ffffff",
                    "primary": "#5867dd",
                    "success": "#34bfa3",
                    "info": "#36a3f7",
                    "warning": "#ffb822",
                    "danger": "#fd3995"
                },
                "base": {
                    "label": [
                        "#c5cbe3",
                        "#a1a8c3",
                        "#3d4465",
                        "#3e4466"
                    ],
                    "shape": [
                        "#f0f3ff",
                        "#d9dffa",
                        "#afb4d4",
                        "#646c9a"
                    ]
                }
            }
        };
    </script>
    <!-- end::Global Config -->

    <!--begin::Global Theme Bundle(used by all pages) -->
    <script src="../../../../../themes/metronic/theme/default/demo1/dist/assets/plugins/global/plugins.bundle.js" type="text/javascript"></script>
    <script src="../../../../../themes/metronic/theme/default/demo1/dist/assets/js/scripts.bundle.js" type="text/javascript"></script>
    <!--end::Global Theme Bundle -->


    <!--begin::Page Scripts(used by this page) -->
    <script src="../../../../../themes/metronic/theme/default/demo1/dist/assets/js/pages/crud/metronic-datatable/advanced/record-selection.js" type="text/javascript"></script>
    <!--end::Page Scripts -->
</body>
<!-- end::Body -->

</html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ajaxy/1.6.1/scripts/jquery.ajaxy.min.js" integrity="sha256-jfr3oM7h2TWPi2Q0O0vPuRh+pc0eSfWfpZ2nHXt8tFQ=" crossorigin="anonymous"></script>



<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>


<script>
    function check_uncheck_checkbox(isChecked) {
        if (isChecked) {
            $('input[name="language[]"]').each(function() {
                this.checked = true;
            });
        } else {
            $('input[name="language[]"]').each(function() {
                this.checked = false;
            });
        }
    }


    $(document).ready(function() {
        load_data();
    });

    function load_data(page, sort, search) {
        var readrecord="readrecord";
        $.ajax({
            url: "pagination.php",
            method: "POST",
            data: {
                page: page,
                search: search,
                sort: sort,
                readrecord: readrecord,
            },
            success: function(data) {
                $('#pagination_data').html(data);
            }
        })
    }

    function DeleteCompany(deleteid){
    var conf = confirm("Are You sure want to delete...");
    if(conf == true) {
    $.ajax({
        url:"pagination.php",
        method:'POST',
        data: {
                delid: deleteid,
            },

        success:function(data, status){
            load_data();
        }
});
}
}

    function deleteuser(id){

            if(confirm("Are You sure want to delete...")) {
                $.ajax({
                    url:"pagination.php",   
                    method:'POST',
                    data:{delete_id:id},

                success:function(data){
                    load_data();
                 }
        });
    }
}
    
    $('#search_cate').keyup(function() {
        var search = $(this).val();
        if (search != '') {
            load_data("1","default",search);
        } else {
            load_data();
        }
    });


    $(document).on('click', '.pagination_link', function() {
        var page = $(this).attr("id");
        load_data(page);
    });
</script>