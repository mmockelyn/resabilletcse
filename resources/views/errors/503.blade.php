<!DOCTYPE html>
<html>
<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Maintenance - {{ config('app.name') }}</title>

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

    <!-- Head Libs -->
    <script src="/front/vendor/modernizr/modernizr.min.js"></script>

</head>
<body data-plugin-page-transition>

<div class="body coming-soon">
    <header id="header" data-plugin-options="{'stickyEnabled': false}">
        <div class="header-body border border-top-0 border-end-0 border-start-0">
            <div class="header-container container py-2">
                <div class="header-row">
                    <div class="header-column">
                        <div class="header-row">
                            <p class="mb-0 text-dark"><strong>Entrer en contact !</strong> <a href="tel:{{ \App\Models\Core\Shop::first()->phone }}" class="text-color-dark text-color-hover-primary">{{ \App\Models\Core\Shop::first()->phone }}</a></span><span class="d-none d-sm-inline-block ps-1"> | <a href="#">{{ \App\Models\Core\Shop::first()->email }}</a></span></p>
                        </div>
                    </div>
                    <div class="header-column justify-content-end">
                        @if(config('app.env') == 'local')
                            <strong>V.</strong>{{ \App\Services\Github::latestMasterVersion() }}
                        @else
                            <strong>V.</strong>{{ \App\Services\Github::latestDeployVersion() }}
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div role="main" class="main" style="min-height: calc(100vh - 393px);">
        <div class="container">
            <div class="row mt-5">
                <div class="col text-center">
                    <div class="logo">
                        <a href="{{ route('home') }}">
                            <img width="180" src="/storage/logo_long.png" alt="{{ config('app.name') }}">
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <hr class="solid my-5">
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <div class="overflow-hidden mb-2">
                        <h2 class="font-weight-normal text-7 mb-0 appear-animation" data-appear-animation="maskUp">
                            <strong class="font-weight-extra-bold">Site en maintenance</strong>
                        </h2>
                    </div>
                    <div class="overflow-hidden mb-1">
                        <p class="lead mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200">Le site Web est en cours de maintenance.<br>Merci de revenir plus tard.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <hr class="solid my-5">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="row">
                        <div class="col-lg-4 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="600">
                            <div class="feature-box">
                                <div class="feature-box-icon">
                                    <i class="far fa-life-ring"></i>
                                </div>
                                <div class="feature-box-info">
                                    <h4 class="text-4 text-uppercase mb-1 font-weight-bold">Que ce passe t-il ?</h4>
                                    <p class="mb-4">Afin de vous fournir un service de qualité, notre infrastructure est mis à jours à intervalle régulier afin d'améliorer la sécurité de notre infrastructure et aporter certaines améliorations.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="400">
                            <div class="feature-box">
                                <div class="feature-box-icon">
                                    <i class="far fa-clock"></i>
                                </div>
                                <div class="feature-box-info">
                                    <h4 class="text-4 text-uppercase mb-1 font-weight-bold">Revenez plus tard</h4>
                                    <p class="mb-4">Nous savons que voir notre site en maintenance ne doit pas vous faire plaisir, main en règle général cette maintenance ne dure pas plus de 10 minutes.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="600">
                            <div class="feature-box">
                                <div class="feature-box-icon">
                                    <i class="far fa-envelope"></i>
                                </div>
                                <div class="feature-box-info">
                                    <h4 class="text-4 text-uppercase mb-1 font-weight-bold">Gardez le contact</h4>
                                    <p class="mb-4">Il n'y a que le site qui est en maintenance, nous sommes toujours là pour répondre à vos attentes par téléphone {{ \App\Models\Core\Shop::first()->phone }} ou par mail {{ \App\Models\Core\Shop::first()->email }}.</p>
                                    <p>Si ce n'est pas le cas, alors notre équipe à très certainement été décimé.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer id="footer">
        <div class="container">
            <div class="row py-5">
                <div class="col-md-4 d-flex justify-content-center justify-content-md-start mb-4 mb-lg-0">
                    <a href="#" class="logo pe-0 pe-lg-3 ps-3 ps-md-0">
                        <img alt="Porto Website Template" src="/storage/logo_long.png" height="32">
                    </a>
                </div>
                <div class="col-md-8 d-flex justify-content-center justify-content-md-end mb-4 mb-lg-0">
                    <div class="row">
                        <div class="col-md-6 mb-3 mb-md-0">
                            <div class="ms-3 text-center text-md-end">
                                <h5 class="text-3 mb-0 text-color-light">LES SABLES D'OLONNE</h5>
                                <p class="text-4 mb-0">
                                    <i class="fab fa-whatsapp text-color-primary top-1 p-relative"></i><span class="ps-1"><a href="tel:{{ \App\Models\Core\Shop::first()->phone }}" class="text-color-hover-light">{{ \App\Models\Core\Shop::first()->phone }}</a></span></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="ms-3 text-center text-md-end">
                                <h5 class="text-3 mb-0 text-color-light">LOS ANGELES</h5>
                                <p class="text-4 mb-0"><i class="fab fa-whatsapp text-color-primary top-1 p-relative"></i><span class="ps-1"><a href="tel:012345679" class="text-color-hover-light">(123) 465-7890</a></span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright footer-copyright-style-2">
            <div class="container py-2">
                <div class="row py-4">
                    <div class="col-md-4 d-flex align-items-center justify-content-center justify-content-md-start mb-2 mb-lg-0">
                        <p>© Copyright 2022. All Rights Reserved.</p>
                    </div>
                    <div class="col-md-8 d-flex align-items-center justify-content-center justify-content-md-end mb-4 mb-lg-0">
                        <p><i class="far fa-envelope text-color-primary top-1 p-relative"></i><a href="mailto:{{ \App\Models\Core\Shop::first()->email }}" class="opacity-7 ps-1">{{ \App\Models\Core\Shop::first()->email }}</a></p>
                        <!--<ul class="footer-social-icons social-icons social-icons-clean social-icons-icon-light ms-3">
                            <li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f text-2"></i></a></li>
                            <li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter text-2"></i></a></li>
                            <li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in text-2"></i></a></li>
                        </ul>-->
                    </div>
                </div>
            </div>
        </div>
    </footer>
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

<!-- Theme Base, Components and Settings -->
<script src="/front/js/theme.js"></script>

<!-- Theme Custom -->
<script src="/front/js/custom.js"></script>

<!-- Theme Initialization Files -->
<script src="/front/js/theme.init.js"></script>

</body>
</html>
