<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title','Laravel')</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="/melody/vendors/iconfonts/font-awesome/css/all.min.css">
    <link rel="stylesheet" href="/melody/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="/melody/vendors/css/vendor.bundle.addons.css">
    <!-- main:css -->
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/melody/css/style.css">

    @yield('css')
</head>
<body>
    <div class="container-scroller">
        @include('layouts.navbar')
    <!-- BODY -->
    <div class="container-fluid page-body-wrapper">
        
        @include('layouts.navigation')

        <!-- CONTENT -->
        <div class="main-panel">
        <div class="content-wrapper">

            @yield('content')

        </div>
            
        <!-- FOOTER -->
        <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2023. All rights reserved.</span>
            
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">
                
            </div>
        </footer>
        </div>
        <!-- main-panel ends -->
    </div>
    </div>

    <!-- plugins:js -->
    <script src="/melody/vendors/js/vendor.bundle.base.js"></script>
    <script src="/melody/vendors/js/vendor.bundle.addons.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="/melody/js/off-canvas.js"></script>
    <script src="/melody/js/hoverable-collapse.js"></script>
    <script src="/melody/js/misc.js"></script>
    <script src="/melody/js/settings.js"></script>
    <script src="/melody/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="/melody/js/dashboard.js"></script>
    <!-- End custom js for this page-->
    @yield('scripts')
</body>


</html>
