<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
          content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, material pro admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, material design, material dashboard bootstrap 5 dashboard template">
    <meta name="description"
          content="Admin Pro is powerful and clean admin dashboard template">
    <meta name="robots" content="noindex,nofollow">
    <title>Buglink64 - Admin</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/materialpro/" />
    <link rel="icon" type="image/png" sizes="16x16" href="/dashboard/assets/images/favicon.png">
    @yield('styles')
    <link href="/dashboard/css/style.min.css" rel="stylesheet">
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
</head>

<body>
<div id="main-wrapper">
    @include('inc.header')
    @include('inc.aside')
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="row page-titles">
            <div class="col-md-5 col-12 align-self-center">
                <h3 class="text-themecolor mb-0">tarter Page</h3>
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">tarter Page</li>
                </ol>
            </div>
            <div class="col-md-7 col-12 align-self-center d-none d-md-block">
                <div class="d-flex mt-2 justify-content-end">
                    <div class="d-flex me-3 ms-2">
                        <div class="chart-text me-2">
                            <h6 class="mb-0"><small>THIS MONTH</small></h6>
                            <h4 class="mt-0 text-info">$58,356</h4>
                        </div>
                        <div class="spark-chart">
                            <div id="monthchart"></div>
                        </div>
                    </div>
                    <div class="d-flex ms-2">
                        <div class="chart-text me-2">
                            <h6 class="mb-0"><small>LAST MONTH</small></h6>
                            <h4 class="mt-0 text-primary">$48,356</h4>
                        </div>
                        <div class="spark-chart">
                            <div id="lastmonthchart"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            @yield('content')
        </div>
        <footer class="footer text-center">
            All Rights Reserved by Materialpro admin.
        </footer>
    </div>
</div>
<div class="chat-windows"></div>
<!-- -------------------------------------------------------------- -->
<!-- All Jquery -->
<!-- -------------------------------------------------------------- -->
<script src="/dashboard/assets/libs/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="/dashboard/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<!-- apps -->
<script src="/dashboard/js/app.min.js"></script>
<script src="/dashboard/js/app.init.js"></script>
<script src="/dashboard/js/app-style-switcher.js"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="/dashboard/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
<script src="/dashboard/assets/extra-libs/sparkline/sparkline.js"></script>
<!--Wave Effects -->
<script src="/dashboard/js/waves.js"></script>
<!--Menu sidebar -->
<script src="/dashboard/js/sidebarmenu.js"></script>
<!--Custom JavaScript -->
<script src="/dashboard/js/feather.min.js"></script>
<script src="/dashboard/js/custom.min.js"></script>
@yield('scripts')
</body>

</html>
