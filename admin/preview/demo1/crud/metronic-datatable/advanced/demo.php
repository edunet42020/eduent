<?php
session_start();
if(!isset($_SESSION['AdminUsername']))
{
    header("Location:../../../../../adminlogin.php");
}
else
{
    $id=$_SESSION['AdminUsername'];
}
?>

<?php
require("../../../connection.php");

$querys = "SELECT * FROM tbluser ORDER BY u_id";
$results = mysqli_query($con, $querys);

$result_per_page = 5;
$num_of_result = mysqli_num_rows($results);
$number_of_pages = ceil($num_of_result / $result_per_page);

if (!isset($_GET['page'])) {
    $page = 1;
} else {
    $page = $_GET['page'];
}

$firstnum = ($page - 1) * $result_per_page;

$sql = "SELECT * FROM tbluser ORDER BY u_id LIMIT " . $firstnum . ',' . $result_per_page . '';

$result = mysqli_query($con, $sql);

?>
<!DOCTYPE html>
<html lang="en">
<!-- begin::Head -->

<head>
    <meta charset="utf-8" />

    <title>Edunet</title>
    <meta name="description" content="Single and group record selection">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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

    <!-- Hotjar Tracking Code for keenthemes.com -->
    <script>
        (function(h, o, t, j, a, r) {
            h.hj = h.hj || function() {
                (h.hj.q = h.hj.q || []).push(arguments)
            };
            h._hjSettings = {
                hjid: 1070954,
                hjsv: 6
            };
            a = o.getElementsByTagName('head')[0];
            r = o.createElement('script');
            r.async = 1;
            r.src = t + h._hjSettings.hjid + j + h._hjSettings.hjsv;
            a.appendChild(r);
        })(window, document, 'https://static.hotjar.com/c/hotjar-', '.js?sv=');
    </script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-37564768-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-37564768-1');
    </script>
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
        require("../../../aside.php");
        ?>
        <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">
            <?php

            require("../../../headerfile.php");

            ?>
            <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

                <!-- begin:: Subheader -->
                <div class="kt-subheader   kt-grid__item" id="kt_subheader">
                    <div class="kt-container  kt-container--fluid ">
                        <div class="kt-subheader__main">
                            <h3 class="kt-subheader__title">

                                Record Selection </h3>

                            <span class="kt-subheader__separator kt-hidden"></span>
                            <div class="kt-subheader__breadcrumbs">
                                <a href="#" class="kt-subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>
                                <span class="kt-subheader__breadcrumbs-separator"></span>
                                <a href="#" class="kt-subheader__breadcrumbs-link">
                                    Crud </a>
                                <span class="kt-subheader__breadcrumbs-separator"></span>
                                <a href="#" class="kt-subheader__breadcrumbs-link">
                                    KTDatatable </a>
                                <span class="kt-subheader__breadcrumbs-separator"></span>
                                <a href="#" class="kt-subheader__breadcrumbs-link">
                                    Advanced </a>
                                <span class="kt-subheader__breadcrumbs-separator"></span>
                                <a href="#" class="kt-subheader__breadcrumbs-link">
                                    Record Selection </a>
                                <!-- <span class="kt-subheader__breadcrumbs-link kt-subheader__breadcrumbs-link--active">Active link</span> -->
                            </div>
                        </div>
                        <div class="kt-subheader__toolbar">
                            <div class="kt-subheader__wrapper">
                                <a href="#" class="btn kt-subheader__btn-primary">
                                    Actions &nbsp;
                                    <!--<i class="flaticon2-calendar-1"></i>-->
                                </a>

                                <div class="dropdown dropdown-inline" data-toggle="kt-tooltip" title="Quick actions" data-placement="left">
                                    <a href="#" class="btn btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--success kt-svg-icon--md">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <polygon points="0 0 24 0 24 24 0 24" />
                                                <path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                <path d="M11,14 L9,14 C8.44771525,14 8,13.5522847 8,13 C8,12.4477153 8.44771525,12 9,12 L11,12 L11,10 C11,9.44771525 11.4477153,9 12,9 C12.5522847,9 13,9.44771525 13,10 L13,12 L15,12 C15.5522847,12 16,12.4477153 16,13 C16,13.5522847 15.5522847,14 15,14 L13,14 L13,16 C13,16.5522847 12.5522847,17 12,17 C11.4477153,17 11,16.5522847 11,16 L11,14 Z" fill="#000000" />
                                            </g>
                                        </svg>
                                        <!--<i class="flaticon2-plus"></i>-->
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-md dropdown-menu-right">
                                        <!--begin::Nav-->
                                        <ul class="kt-nav">
                                            <li class="kt-nav__head">
                                                Add anything or jump to:
                                                <i class="flaticon2-information" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more..."></i>
                                            </li>
                                            <li class="kt-nav__separator"></li>
                                            <li class="kt-nav__item">
                                                <a href="#" class="kt-nav__link">
                                                    <i class="kt-nav__link-icon flaticon2-drop"></i>
                                                    <span class="kt-nav__link-text">Order</span>
                                                </a>
                                            </li>
                                            <li class="kt-nav__item">
                                                <a href="#" class="kt-nav__link">
                                                    <i class="kt-nav__link-icon flaticon2-calendar-8"></i>
                                                    <span class="kt-nav__link-text">Ticket</span>
                                                </a>
                                            </li>
                                            <li class="kt-nav__item">
                                                <a href="#" class="kt-nav__link">
                                                    <i class="kt-nav__link-icon flaticon2-telegram-logo"></i>
                                                    <span class="kt-nav__link-text">Goal</span>
                                                </a>
                                            </li>
                                            <li class="kt-nav__item">
                                                <a href="#" class="kt-nav__link">
                                                    <i class="kt-nav__link-icon flaticon2-new-email"></i>
                                                    <span class="kt-nav__link-text">Support Case</span>
                                                    <span class="kt-nav__link-badge">
                                                        <span class="kt-badge kt-badge--success">5</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="kt-nav__separator"></li>
                                            <li class="kt-nav__foot">
                                                <a class="btn btn-label-brand btn-bold btn-sm" href="#">Upgrade
                                                    plan</a>
                                                <a class="btn btn-clean btn-bold btn-sm" href="#" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more...">Learn more</a>
                                            </li>
                                        </ul>
                                        <!--end::Nav-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end:: Subheader -->
                <!-- begin:: Content -->
                <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

                    <!--begin: Selected Rows Group Action Form -->
                    <div class="kt-form kt-form--label-align-right kt-margin-t-20 collapse" id="kt_datatable_group_action_form">
                        <div class="row align-items-center">
                            <div class="col-xl-12">
                                <div class="kt-form__group kt-form__group--inline">
                                    <div class="kt-form__label kt-form__label-no-wrap">
                                        <label class="kt-font-bold kt-font-danger-">Selected
                                            <span id="kt_datatable_selected_number">0</span>
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
                                            <button class="btn btn-sm btn-danger" type="button" id="kt_datatable_delete_all">Delete All</button>
                                            &nbsp;&nbsp;&nbsp;
                                            <button class="btn btn-sm btn-success" type="button" data-toggle="modal" data-target="#kt_modal_fetch_id">Fetch
                                                Selected Records</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end: Selected Rows Group Action Form -->
                </div>
            </div>
            <div class="kt-portlet kt-portlet--mobile">
                <div class="kt-portlet__head kt-portlet__head--lg">
                    <div class="kt-portlet__head-label">
                        <span class="kt-portlet__head-icon">
                            <i class="kt-font-brand flaticon2-line-chart"></i>
                        </span>
                        <h3 class="kt-portlet__head-title">
                            AJAX Datatable
                            <small>data loaded from remote data source</small>
                        </h3>
                    </div>
                    <div class="kt-portlet__head-toolbar">
                        <div class="kt-portlet__head-wrapper">
                            <a href="#" class="btn btn-clean btn-icon-sm">
                                <i class="la la-long-arrow-left"></i>
                                Back
                            </a>
                            &nbsp;
                            <div class="dropdown dropdown-inline">
                                <button type="button" class="btn btn-brand btn-icon-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="flaticon2-plus"></i> Add New
                                </button>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <ul class="kt-nav">
                                        <li class="kt-nav__section kt-nav__section--first">
                                            <span class="kt-nav__section-text">Choose an action:</span>
                                        </li>
                                        <li class="kt-nav__item">
                                            <a href="#" class="kt-nav__link">
                                                <i class="kt-nav__link-icon flaticon2-open-text-book"></i>
                                                <span class="kt-nav__link-text">Reservations</span>
                                            </a>
                                        </li>
                                        <li class="kt-nav__item">
                                            <a href="#" class="kt-nav__link">
                                                <i class="kt-nav__link-icon flaticon2-calendar-4"></i>
                                                <span class="kt-nav__link-text">Appointments</span>
                                            </a>
                                        </li>
                                        <li class="kt-nav__item">
                                            <a href="#" class="kt-nav__link">
                                                <i class="kt-nav__link-icon flaticon2-bell-alarm-symbol"></i>
                                                <span class="kt-nav__link-text">Reminders</span>
                                            </a>
                                        </li>
                                        <li class="kt-nav__item">
                                            <a href="#" class="kt-nav__link">
                                                <i class="kt-nav__link-icon flaticon2-contract"></i>
                                                <span class="kt-nav__link-text">Announcements</span>
                                            </a>
                                        </li>
                                        <li class="kt-nav__item">
                                            <a href="#" class="kt-nav__link">
                                                <i class="kt-nav__link-icon flaticon2-shopping-cart-1"></i>
                                                <span class="kt-nav__link-text">Orders</span>
                                            </a>
                                        </li>
                                        <li class="kt-nav__separator kt-nav__separator--fit">
                                        </li>
                                        <li class="kt-nav__item">
                                            <a href="#" class="kt-nav__link">
                                                <i class="kt-nav__link-icon flaticon2-rocket-1"></i>
                                                <span class="kt-nav__link-text">Projects</span>
                                            </a>
                                        </li>
                                        <li class="kt-nav__item">
                                            <a href="#" class="kt-nav__link">
                                                <i class="kt-nav__link-icon flaticon2-chat-1"></i>
                                                <span class="kt-nav__link-text">User Feedbacks</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="kt-portlet__body">
                    <!--begin: Search Form -->
                    <div class="kt-form kt-form--label-right kt-margin-t-20 kt-margin-b-10">
                        <div class="row align-items-center">
                            <div class="col-xl-8 order-2 order-xl-1">
                                <div class="row align-items-center">
                                    <div class="col-md-4 kt-margin-b-20-tablet-and-mobile">
                                        <div class="kt-input-icon kt-input-icon--left">
                                            <input type="text" class="form-control" placeholder="Search..." id="generalSearch">
                                            <span class="kt-input-icon__icon kt-input-icon__icon--left">
                                                <span><i class="la la-search"></i></span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-4 kt-margin-b-20-tablet-and-mobile">
                                        <div class="kt-form__group kt-form__group--inline">
                                            <div class="kt-form__label">
                                                <label>Status:</label>
                                            </div>
                                            <div class="kt-form__control">
                                                <select class="form-control bootstrap-select" id="kt_form_status">
                                                    <option value="">All</option>
                                                    <option value="1">Pending</option>
                                                    <option value="2">Delivered</option>
                                                    <option value="3">Canceled</option>
                                                    <option value="4">Success</option>
                                                    <option value="5">Info</option>
                                                    <option value="6">Danger</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 kt-margin-b-20-tablet-and-mobile">
                                        <div class="kt-form__group kt-form__group--inline">
                                            <div class="kt-form__label">
                                                <label>Type:</label>
                                            </div>
                                            <div class="kt-form__control">
                                                <select class="form-control bootstrap-select" id="kt_form_type">
                                                    <option value="">All</option>
                                                    <option value="1">Online</option>
                                                    <option value="2">Retail</option>
                                                    <option value="3">Direct</option>
                                                </select>
                                            </div>
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
                    <div class="kt-datatable kt-datatable--default kt-datatable--brand kt-datatable--scroll kt-datatable--loaded" id="pagination_data" style="">

                    </div>

                    <!--begin::Modal-->
                    <div class="modal fade" id="kt_modal_fetch_id" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="kt-scrollable" data-scrollbar-shown="true" data-scrollable="true" data-height="200">
                                        <ul class="kt-datatable_selected_ids"></ul>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Modal-->

                    <!--begin::Modal-->
                    <div class="modal fade" id="kt_modal_fetch_id_server" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="kt-scrollable" data-scrollbar-shown="true" data-scrollable="true" data-height="200">
                                        <ul class="kt-datatable_selected_ids"></ul>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Modal-->
                </div>
            </div>
        </div>
        <!-- end:: Content -->
    </div>

    <!-- begin:: Footer -->
    <div class="kt-footer  kt-grid__item kt-grid kt-grid--desktop kt-grid--ver-desktop" id="kt_footer">
        <div class="kt-container  kt-container--fluid ">
            <div class="kt-footer__copyright">
                2020&nbsp;&copy;&nbsp;<a href="http://keenthemes.com/metronic" target="_blank" class="kt-link">Keenthemes</a>
            </div>
            <div class="kt-footer__menu">
                <a href="http://keenthemes.com/metronic" target="_blank" class="kt-footer__menu-link kt-link">About</a>
                <a href="http://keenthemes.com/metronic" target="_blank" class="kt-footer__menu-link kt-link">Team</a>
                <a href="http://keenthemes.com/metronic" target="_blank" class="kt-footer__menu-link kt-link">Contact</a>
            </div>
        </div>
    </div>
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

    <!-- begin::Sticky Toolbar -->
    <ul class="kt-sticky-toolbar" style="margin-top: 30px;">
        <li class="kt-sticky-toolbar__item kt-sticky-toolbar__item--success" id="kt_demo_panel_toggle" data-toggle="kt-tooltip" title="Check out more demos" data-placement="right">
            <a href="#" class=""><i class="flaticon2-drop"></i></a>
        </li>
        <li class="kt-sticky-toolbar__item kt-sticky-toolbar__item--brand" data-toggle="kt-tooltip" title="Layout Builder" data-placement="left">
            <a href="../../../builder.php"><i class="flaticon2-gear"></i></a>
        </li>
        <li class="kt-sticky-toolbar__item kt-sticky-toolbar__item--warning" data-toggle="kt-tooltip" title="Documentation" data-placement="left">
            <a href="https://keenthemes.com/metronic/?page=docs" target="_blank"><i class="flaticon2-telegram-logo"></i></a>
        </li>

        <li class="kt-sticky-toolbar__item kt-sticky-toolbar__item--danger" id="kt_sticky_toolbar_chat_toggler" data-toggle="kt-tooltip" title="Chat Example" data-placement="left">
            <a href="#" data-toggle="modal" data-target="#kt_chat_modal"><i class="flaticon2-chat-1"></i></a>
        </li>
    </ul>
    <!-- end::Sticky Toolbar -->

    <!--Begin:: Chat-->
    <div class="modal fade- modal-sticky-bottom-right" id="kt_chat_modal" role="dialog" data-backdrop="false">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="kt-chat">
                    <div class="kt-portlet kt-portlet--last">
                        <div class="kt-portlet__head">
                            <div class="kt-chat__head ">
                                <div class="kt-chat__left">
                                    <div class="kt-chat__label">
                                        <a href="#" class="kt-chat__title">Jason Muller</a>
                                        <span class="kt-chat__status">
                                            <span class="kt-badge kt-badge--dot kt-badge--success"></span> Active
                                        </span>
                                    </div>
                                </div>
                                <div class="kt-chat__right">
                                    <div class="dropdown dropdown-inline">
                                        <button type="button" class="btn btn-clean btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="flaticon-more-1"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-md">
                                            <!--begin::Nav-->
                                            <ul class="kt-nav">
                                                <li class="kt-nav__head">
                                                    Messaging
                                                    <i class="flaticon2-information" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more..."></i>
                                                </li>
                                                <li class="kt-nav__separator"></li>
                                                <li class="kt-nav__item">
                                                    <a href="#" class="kt-nav__link">
                                                        <i class="kt-nav__link-icon flaticon2-group"></i>
                                                        <span class="kt-nav__link-text">New Group</span>
                                                    </a>
                                                </li>
                                                <li class="kt-nav__item">
                                                    <a href="#" class="kt-nav__link">
                                                        <i class="kt-nav__link-icon flaticon2-open-text-book"></i>
                                                        <span class="kt-nav__link-text">Contacts</span>
                                                        <span class="kt-nav__link-badge">
                                                            <span class="kt-badge kt-badge--brand  kt-badge--rounded-">5</span>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="kt-nav__item">
                                                    <a href="#" class="kt-nav__link">
                                                        <i class="kt-nav__link-icon flaticon2-bell-2"></i>
                                                        <span class="kt-nav__link-text">Calls</span>
                                                    </a>
                                                </li>
                                                <li class="kt-nav__item">
                                                    <a href="#" class="kt-nav__link">
                                                        <i class="kt-nav__link-icon flaticon2-dashboard"></i>
                                                        <span class="kt-nav__link-text">Settings</span>
                                                    </a>
                                                </li>
                                                <li class="kt-nav__item">
                                                    <a href="#" class="kt-nav__link">
                                                        <i class="kt-nav__link-icon flaticon2-protected"></i>
                                                        <span class="kt-nav__link-text">Help</span>
                                                    </a>
                                                </li>
                                                <li class="kt-nav__separator"></li>
                                                <li class="kt-nav__foot">
                                                    <a class="btn btn-label-brand btn-bold btn-sm" href="#">Upgrade
                                                        plan</a>
                                                    <a class="btn btn-clean btn-bold btn-sm" href="#" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more...">Learn more</a>
                                                </li>
                                            </ul>
                                            <!--end::Nav-->
                                        </div>
                                    </div>

                                    <button type="button" class="btn btn-clean btn-sm btn-icon" data-dismiss="modal">
                                        <i class="flaticon2-cross"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="kt-portlet__body">
                            <div class="kt-scroll kt-scroll--pull" data-height="410" data-mobile-height="225">
                                <div class="kt-chat__messages kt-chat__messages--solid">
                                    <div class="kt-chat__message kt-chat__message--success">
                                        <div class="kt-chat__user">
                                            <span class="kt-media kt-media--circle kt-media--sm">
                                                <img src="../../../../../themes/metronic/theme/default/demo1/dist/assets/media/users/100_12.jpg" alt="image">
                                            </span>
                                            <a href="#" class="kt-chat__username">Jason Muller</span></a>
                                            <span class="kt-chat__datetime">2 Hours</span>
                                        </div>
                                        <div class="kt-chat__text">
                                            How likely are you to recommend our company<br> to your friends and family?
                                        </div>
                                    </div>
                                    <div class="kt-chat__message kt-chat__message--right kt-chat__message--brand">
                                        <div class="kt-chat__user">
                                            <span class="kt-chat__datetime">30 Seconds</span>
                                            <a href="#" class="kt-chat__username">You</span></a>
                                            <span class="kt-media kt-media--circle kt-media--sm">
                                                <img src="../../../../../themes/metronic/theme/default/demo1/dist/assets/media/users/300_21.jpg" alt="image">
                                            </span>
                                        </div>
                                        <div class="kt-chat__text">
                                            Hey there, we’re just writing to let you know that you’ve<br> been
                                            subscribed to a repository on GitHub.
                                        </div>
                                    </div>
                                    <div class="kt-chat__message kt-chat__message--success">
                                        <div class="kt-chat__user">
                                            <span class="kt-media kt-media--circle kt-media--sm">
                                                <img src="../../../../../themes/metronic/theme/default/demo1/dist/assets/media/users/100_12.jpg" alt="image">
                                            </span>
                                            <a href="#" class="kt-chat__username">Jason Muller</span></a>
                                            <span class="kt-chat__datetime">30 Seconds</span>
                                        </div>
                                        <div class="kt-chat__text">
                                            Ok, Understood!
                                        </div>
                                    </div>
                                    <div class="kt-chat__message kt-chat__message--right kt-chat__message--brand">
                                        <div class="kt-chat__user">
                                            <span class="kt-chat__datetime">Just Now</span>
                                            <a href="#" class="kt-chat__username">You</span></a>
                                            <span class="kt-media kt-media--circle kt-media--sm">
                                                <img src="../../../../../themes/metronic/theme/default/demo1/dist/assets/media/users/300_21.jpg" alt="image">
                                            </span>
                                        </div>
                                        <div class="kt-chat__text">
                                            You’ll receive notifications for all issues, pull requests!
                                        </div>
                                    </div>
                                    <div class="kt-chat__message kt-chat__message--success">
                                        <div class="kt-chat__user">
                                            <span class="kt-media kt-media--circle kt-media--sm">
                                                <img src="../../../../../themes/metronic/theme/default/demo1/dist/assets/media/users/100_12.jpg" alt="image">
                                            </span>
                                            <a href="#" class="kt-chat__username">Jason Muller</span></a>
                                            <span class="kt-chat__datetime">2 Hours</span>
                                        </div>
                                        <div class="kt-chat__text">
                                            You were automatically <b class="kt-font-brand">subscribed</b> <br>because
                                            you’ve been given access to the repository
                                        </div>
                                    </div>
                                    <div class="kt-chat__message kt-chat__message--right kt-chat__message--brand">
                                        <div class="kt-chat__user">
                                            <span class="kt-chat__datetime">30 Seconds</span>
                                            <a href="#" class="kt-chat__username">You</span></a>
                                            <span class="kt-media kt-media--circle kt-media--sm">
                                                <img src="../../../../../themes/metronic/theme/default/demo1/dist/assets/media/users/300_21.jpg" alt="image">
                                            </span>
                                        </div>

                                        <div class="kt-chat__text">
                                            You can unwatch this repository immediately <br>by clicking here: <a href="#" class="kt-font-bold kt-link"></a>
                                        </div>
                                    </div>
                                    <div class="kt-chat__message kt-chat__message--success">
                                        <div class="kt-chat__user">
                                            <span class="kt-media kt-media--circle kt-media--sm">
                                                <img src="../../../../../themes/metronic/theme/default/demo1/dist/assets/media/users/100_12.jpg" alt="image">
                                            </span>
                                            <a href="#" class="kt-chat__username">Jason Muller</span></a>
                                            <span class="kt-chat__datetime">30 Seconds</span>
                                        </div>
                                        <div class="kt-chat__text">
                                            Discover what students who viewed Learn <br>Figma - UI/UX Design Essential
                                            Training also viewed
                                        </div>
                                    </div>
                                    <div class="kt-chat__message kt-chat__message--right kt-chat__message--brand">
                                        <div class="kt-chat__user">
                                            <span class="kt-chat__datetime">Just Now</span>
                                            <a href="#" class="kt-chat__username">You</span></a>
                                            <span class="kt-media kt-media--circle kt-media--sm">
                                                <img src="../../../../../themes/metronic/theme/default/demo1/dist/assets/media/users/300_21.jpg" alt="image">
                                            </span>
                                        </div>
                                        <div class="kt-chat__text">
                                            Most purchased Business courses during this sale!
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="kt-portlet__foot">
                            <div class="kt-chat__input">
                                <div class="kt-chat__editor">
                                    <textarea placeholder="Type here..." style="height: 50px"></textarea>
                                </div>
                                <div class="kt-chat__toolbar">
                                    <div class="kt_chat__tools">
                                        <a href="#"><i class="flaticon2-link"></i></a>
                                        <a href="#"><i class="flaticon2-photograph"></i></a>
                                        <a href="#"><i class="flaticon2-photo-camera"></i></a>
                                    </div>
                                    <div class="kt_chat__actions">
                                        <button type="button" class="btn btn-brand btn-md  btn-font-sm btn-upper btn-bold kt-chat__reply">reply</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--ENd:: Chat-->

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
<script>
    $(document).ready(function() {
        load_data();

        function load_data(page) {
            $.ajax({
                url: "pagination.php",
                method: "POST",
                data: {
                    page: page
                },
                success: function(page) {
                    $(#pagination_data).html(data);
                }
            })
        }
        $(document).on('click','pagination_link ',function(){
            var page=$(this).attr("id");
        })
        load_data(page);


    });
</script>