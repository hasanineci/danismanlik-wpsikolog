<!doctype html>
<html lang="tr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') - WPSİKOLOJİ</title>

    <link rel="icon" href="{{ asset('assets/admin/img/mini_logo.png') }}" type="image/png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/admin/css/bootstrap.min.css') }}">
    <!-- themefy CSS -->
    <link rel="stylesheet" href="{{ asset('assets/admin/vendors/themefy_icon/themify-icons.css') }}">
    <!-- select2 CSS -->
    <link rel="stylesheet" href="{{ asset('assets/admin/vendors/niceselect/css/nice-select.css') }}">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="{{ asset('assets/admin/vendors/owl_carousel/css/owl.carousel.css') }}">
    <!-- gijgo css -->
    <link rel="stylesheet" href="{{ asset('assets/admin/vendors/gijgo/gijgo.min.css') }}">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{{ asset('assets/admin/vendors/font_awesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/vendors/tagsinput/tagsinput.css') }}">

    <!-- date picker -->
    <link rel="stylesheet" href="{{ asset('assets/admin/vendors/datepicker/date-picker.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/admin/vendors/vectormap-home/vectormap-2.0.2.css') }}">

    <!-- scrollabe  -->
    <link rel="stylesheet" href="{{ asset('assets/admin/vendors/scroll/scrollable.css') }}">
    <!-- datatable CSS -->
    <link rel="stylesheet" href="{{ asset('assets/admin/vendors/datatable/css/jquery.dataTables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/vendors/datatable/css/responsive.dataTables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/vendors/datatable/css/buttons.dataTables.min.css') }}">
    <!-- text editor css -->
    <link rel="stylesheet" href="{{ asset('assets/admin/vendors/text_editor/summernote-bs4.css') }}">
    <!-- morris css -->
    <link rel="stylesheet" href="{{ asset('assets/admin/vendors/morris/morris.css') }}">
    <!-- metarial icon css -->
    <link rel="stylesheet" href="{{ asset('assets/admin/vendors/material_icon/material-icons.css') }}">

    <!-- menu css  -->
    <link rel="stylesheet" href="{{ asset('assets/admin/css/metisMenu.css') }}">
    <!-- style CSS -->
    <link rel="stylesheet" href="{{ asset('assets/admin/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/css/colors/default.css') }}" id="colorSkinCSS">

    <!-- toastr -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
</head>

<body class="crm_body_bg">

    @include('admin.widgets.sidebar')

    @yield('content')



    <div id="back-top" style="display: none;">
        <a title="Go to Top" href="#">
            <i class="ti-angle-up"></i>
        </a>
    </div>

    <!-- footer  -->
    <script src="{{ asset('assets/admin/js/jquery-3.4.1.min.js') }}"></script>
    <!-- popper js -->
    <script src="{{ asset('assets/admin/js/popper.min.js') }}"></script>
    <!-- bootstarp js -->
    <script src="{{ asset('assets/admin/js/bootstrap.min.js') }}"></script>
    <!-- sidebar menu  -->
    <script src="{{ asset('assets/admin/js/metisMenu.js') }}"></script>
    <!-- waypoints js -->
    <script src="{{ asset('assets/admin/vendors/count_up/jquery.waypoints.min.js') }}"></script>
    <!-- waypoints js -->
    <script src="{{ asset('assets/admin/vendors/chartlist/Chart.min.js') }}"></script>
    <!-- counterup js -->
    <script src="{{ asset('assets/admin/vendors/count_up/jquery.counterup.min.js') }}"></script>

    <!-- nice select -->
    <script src="{{ asset('assets/admin/vendors/niceselect/js/jquery.nice-select.min.js') }}"></script>
    <!-- owl carousel -->
    <script src="{{ asset('assets/admin/vendors/owl_carousel/js/owl.carousel.min.js') }}"></script>

    <!-- responsive table -->
    <script src="{{ asset('assets/admin/vendors/datatable/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/admin/vendors/datatable/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/admin/vendors/datatable/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/admin/vendors/datatable/js/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('assets/admin/vendors/datatable/js/jszip.min.js') }}"></script>
    <script src="{{ asset('assets/admin/vendors/datatable/js/pdfmake.min.js') }}"></script>
    <script src="{{ asset('assets/admin/vendors/datatable/js/vfs_fonts.js') }}"></script>
    <script src="{{ asset('assets/admin/vendors/datatable/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets/admin/vendors/datatable/js/buttons.print.min.js') }}"></script>

    <!-- datepicker  -->
    <script src="{{ asset('assets/admin/vendors/datepicker/datepicker.js') }}"></script>
    <script src="{{ asset('assets/admin/vendors/datepicker/datepicker.en.js') }}"></script>
    <script src="{{ asset('assets/admin/vendors/datepicker/datepicker.custom.js') }}"></script>

    <script src="{{ asset('assets/admin/js/chart.min.js') }}"></script>
    <script src="{{ asset('assets/admin/vendors/chartjs/roundedBar.min.js') }}"></script>

    <!-- progressbar js -->
    <script src="{{ asset('assets/admin/vendors/progressbar/jquery.barfiller.js') }}"></script>
    <!-- tag input -->
    <script src="{{ asset('assets/admin/vendors/tagsinput/tagsinput.js') }}"></script>
    <!-- text editor js -->
    <script src="{{ asset('assets/admin/vendors/text_editor/summernote-bs4.js') }}"></script>
    <script src="{{ asset('assets/admin/vendors/am_chart/amcharts.js') }}"></script>

    <!-- scrollabe  -->
    <script src="{{ asset('assets/admin/vendors/scroll/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/admin/vendors/scroll/scrollable-custom.js') }}"></script>

    <!-- vector map  -->
    <script src="{{ asset('assets/admin/vendors/vectormap-home/vectormap-2.0.2.min.js') }}"></script>
    <script src="{{ asset('assets/admin/vendors/vectormap-home/vectormap-world-mill-en.js') }}"></script>

    <!-- apex chrat  -->
    <script src="{{ asset('assets/admin/vendors/apex_chart/apex-chart2.js') }}"></script>
    <script src="{{ asset('assets/admin/vendors/apex_chart/apex_dashboard.js') }}"></script>

    <script src="{{ asset('assets/admin/vendors/echart/echarts.min.js') }}"></script>


    <script src="{{ asset('assets/admin/vendors/chart_am/core.js') }}"></script>
    <script src="{{ asset('assets/admin/vendors/chart_am/charts.js') }}"></script>
    <script src="{{ asset('assets/admin/vendors/chart_am/animated.js') }}"></script>
    <script src="{{ asset('assets/admin/vendors/chart_am/kelly.js') }}"></script>
    <script src="{{ asset('assets/admin/vendors/chart_am/chart-custom.js') }}"></script>
    <!-- custom js -->
    <script src="{{ asset('assets/admin/js/dashboard_init.js') }}"></script>
    <script src="{{ asset('assets/admin/js/custom.js') }}"></script>

    <!-- toastr -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    @include('admin.widgets.toastr.notifications')

    @yield('js')

</body>

</html>