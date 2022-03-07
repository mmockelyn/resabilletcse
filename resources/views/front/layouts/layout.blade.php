<!DOCTYPE html>
<html>
<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>{{ config('app.name') }}</title>

    {!! SEO::generate() !!}

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="site.webmanifest">
    <link rel="mask-icon" href="safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

    <!-- Web Fonts  -->
    <link id="googleFonts" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7CShadows+Into+Light&display=swap" rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="/front/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/front/vendor/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="/front/vendor/animate/animate.compat.css">
    <link rel="stylesheet" href="/front/vendor/simple-line-icons/css/simple-line-icons.min.css">
    <link rel="stylesheet" href="/front/vendor/owl.carousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="/front/vendor/owl.carousel/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="/front/vendor/magnific-popup/magnific-popup.min.css">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="/front/css/theme.css">
    <link rel="stylesheet" href="/front/css/theme-elements.css">
    <link rel="stylesheet" href="/front/css/theme-blog.css">
    <link rel="stylesheet" href="/front/css/theme-shop.css">

    <!-- Skin CSS -->
    <link id="skinCSS" rel="stylesheet" href="/front/css/skins/skin-corporate-5.css">

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="/front/css/custom.css">
    @livewireStyles
    @yield("css")

    <!-- Head Libs -->
    <script src="/front/vendor/modernizr/modernizr.min.js"></script>

</head>
<body data-plugin-page-transition class="loading-overlay-showing" data-loading-overlay data-plugin-options="{'hideDelay': 500, 'effect': 'floatBars'}">
<div class="loading-overlay">
    <div class="bounce-loader">
        <div class="cssload-float-bars-container">
            <ul class="cssload-float-bars-flex-container">
                <li>
                    <span class="cssload-float-bars-loading"></span>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="body">
    @include("front.layouts.includes.header")

    <div role="main" class="main">
        @yield("content")
    </div>

</div>

<!-- Vendor -->
<script src="/front/vendor/jquery/jquery.min.js"></script>
<script src="/front/vendor/jquery.appear/jquery.appear.min.js"></script>
<script src="/front/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="/front/vendor/jquery.cookie/jquery.cookie.min.js"></script>
<script src="/front/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/front/vendor/jquery.validation/jquery.validate.min.js"></script>
<script src="/front/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
<script src="/front/vendor/jquery.gmap/jquery.gmap.min.js"></script>
<script src="/front/vendor/lazysizes/lazysizes.min.js"></script>
<script src="/front/vendor/isotope/jquery.isotope.min.js"></script>
<script src="/front/vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="/front/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="/front/vendor/vide/jquery.vide.min.js"></script>
<script src="/front/vendor/vivus/vivus.min.js"></script>

<!-- Admin Extension Specific Page Vendor -->
<script src="/front/admin/vendor/jquery-validation/jquery.validate.js"></script>
<script src="/front/admin/vendor/bootstrap-wizard/jquery.bootstrap.wizard.js"></script>
<script src="/front/admin/vendor/pnotify/pnotify.custom.js"></script>

<!-- Admin Extension -->
<script src="/front/admin/js/theme.admin.extension.js"></script>

<!-- Admin Extension Examples -->
<script src="/front/admin/js/examples/examples.wizard.js"></script>

<!-- Theme Base, Components and Settings -->
<script src="/front/js/theme.js"></script>

<!-- Theme Custom -->
<script src="/front/js/custom.js"></script>

<!-- Theme Initialization Files -->
<script src="/front/js/theme.init.js"></script>
@livewireScripts
@yield("script")

</body>
</html>
