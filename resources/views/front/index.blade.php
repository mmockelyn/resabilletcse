@extends("front.layouts.layout")

@section("css")

@endsection

@section("content")
    <div class="owl-carousel owl-carousel-light owl-carousel-light-init-fadeIn owl-theme manual dots-inside dots-horizontal-center show-dots-hover dots-light nav-style-1 nav-inside nav-inside-plus nav-dark nav-lg nav-font-size-lg show-nav-hover mb-0" data-plugin-options="{'autoplayTimeout': 7000}" data-dynamic-height="['700px','700px','700px','550px','500px']" style="height: 700px;">
        <div class="owl-stage-outer">
            <div class="owl-stage">

                <!-- Carousel Slide 1 -->
                <div class="owl-item position-relative overlay overlay-show overlay-op-7" data-dynamic-height="['700px','700px','700px','550px','500px']" style="background-image: url(/storage/parallax/paris.jpg); background-size: cover; background-position: center;">
                    <div class="container position-relative z-index-3 h-100">
                        <div class="row justify-content-center align-items-center h-100">
                            <div class="col-lg-12 text-center">
                                <div class="d-flex flex-column align-items-center justify-content-center h-100">
                                    <h1 class="text-color-light font-weight-extra-bold text-12-5 line-height-3 mb-2 appear-animation" data-appear-animation="blurIn" data-appear-animation-delay="500" data-plugin-options="{'minWindowWidth': 0}">PLATEFORME EUROPEENNE DE REDUCTIONS ET AVANTAGES SOCIAUX</h1>
                                    <p class="text-4-5 text-color-light font-weight-light opacity-7 text-center mb-5" data-plugin-animated-letters data-plugin-options="{'startDelay': 1000, 'minWindowWidth': 0, 'animationSpeed': 30}">Reconnu par plus de 40 000 utilisateurs satisfaits.</p>
                                    <a href="{{ route('register') }}" class="btn btn-light btn-outline text-color-light text-color-hover-dark font-weight-bold text-3 btn-px-5 py-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1800" data-plugin-options="{'minWindowWidth': 0}">Commencez maintenant! Créez votre compte!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="owl-dots mb-5">
            <button role="button" class="owl-dot active"><span></span></button>
            <button role="button" class="owl-dot"><span></span></button>
        </div>
    </div>
    <div class="container text-center">
        <h2 class="font-weight-bold m-2">
            CHOISISSEZ VOTRE ABONNEMENT ANNUEL PARMI LES PACKS SUIVANTS:<br>
            PROFITEZ DE MULTIPLES REDUCTIONS, LOISIRS, SHOPPINGS, SEJOURS & VOYAGES
        </h2>
    </div>
    <section class="parallax section section-text-light section-parallax m-0" data-plugin-parallax="" data-plugin-options="{'speed': 1.5, 'parallaxHeight': '210%'}" data-image-src="img/parallax/parallax-2.jpg" style="position: relative; overflow: hidden;">
        <div class="parallax-background" style="background-image: url(/storage/parallax/7.jpg); background-size: cover; position: absolute; top: 0px; left: 0px; width: 100%; height: 210%; transform: translate3d(0px, -102.348px, 0px); background-position-x: 50%;"></div>
        <section class="call-to-action">
            <div class="container">
                <div class="row">
                    <div class="col-sm-9 col-lg-9">
                        <div class="call-to-action-content">
                            <h2 class="font-weight-bold text-start">OFFRE EXCEPTIONNELLE ENTREPRISES - TPE - PME - PMI - INDEPENDANT - ASSOCIATION</h2>
                        </div>
                    </div>
                    <div class="col-sm-3 col-lg-3">
                        <div class="call-to-action-btn">
                            <a href="{{ route('register') }}" target="_blank" class="btn btn-modern btn-xl text-2 btn-primary btn-outline btn-arrow-effect-1">10,00 € HT / AN <i class="fas fa-arrow-right ms-2"></i> </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
    <section class="parallax section section-text-light section-parallax m-0" data-plugin-parallax="" data-plugin-options="{'speed': 1.5, 'parallaxHeight': '210%'}" data-image-src="img/parallax/parallax-2.jpg" style="position: relative; overflow: hidden;">
        <div class="parallax-background" style="background-image: url(/storage/parallax/2.jpg); background-size: cover; position: absolute; top: 0px; left: 0px; width: 100%; height: 210%; transform: translate3d(0px, -102.348px, 0px); background-position-x: 50%;"></div>
        <section class="call-to-action">
            <div class="container">
                <div class="row">
                    <div class="col-sm-9 col-lg-9">
                        <div class="call-to-action-content">
                            <h2 class="font-weight-bold text-start">OFFRE EXCEPTIONNELLE PARTICULIER - FAMILLE</h2>
                        </div>
                    </div>
                    <div class="col-sm-3 col-lg-3">
                        <div class="call-to-action-btn">
                            <a href="{{ route('register') }}" target="_blank" class="btn btn-modern btn-xl text-2 btn-primary btn-outline btn-arrow-effect-1">15,00 € HT / AN <i class="fas fa-arrow-right ms-2"></i> </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
    <section class="parallax section section-text-light section-parallax m-0" data-plugin-parallax="" data-plugin-options="{'speed': 1.5, 'parallaxHeight': '210%'}" data-image-src="img/parallax/parallax-2.jpg" style="position: relative; overflow: hidden;">
        <div class="parallax-background" style="background-image: url(/storage/parallax/1.jpg); background-size: cover; position: absolute; top: 0px; left: 0px; width: 100%; height: 210%; transform: translate3d(0px, -102.348px, 0px); background-position-x: 50%;"></div>
        <section class="call-to-action">
            <div class="container">
                <div class="row">
                    <div class="col-sm-9 col-lg-9">
                        <div class="call-to-action-content">
                            <h2 class="font-weight-bold text-start">OFFRE EXCEPTIONNELLE CE - CSE - COLLECTIVITE - MAIRIE</h2>
                        </div>
                    </div>
                    <div class="col-sm-3 col-lg-3">
                        <div class="call-to-action-btn">
                            <a href="{{ route('register') }}" target="_blank" class="btn btn-modern btn-xl text-2 btn-primary btn-outline btn-arrow-effect-1">Contactez-nous <i class="fas fa-arrow-right ms-2"></i> </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
    <div class="m-5"></div>
    <div class="container border border-danger mt-3 mb-3 p-5">
        <div class="row">
            <div class="col-md-6 col-sm-12 text-center">
                <h2 class="font-weight-bold">FRANCEBILLETREDUC</h2>
                <div class="">
                    <span>Particulier</span><br><br>
                    <span>PROFITEZ DE REDUCTIONS & AVANTAGES SOCIAUX</span>
                    <span>
                        AUX MEME TITRE QUE TOUT SALARIES<br>
                        + AYANTS DROITS<br>
                        DES COMITES D’ENTREPRISES SOCIAUX<br>
                        ECONOMIQUES EN FRANCE<br>
                    </span>
                    <i class="fas fa-arrow-down fa-4x text-info mb-3"></i><br>
                    <span>
                        VISIONNEZ EN VIDEO VOS AVANTAGES REDUCS
                    </span>
                    <i class="fas fa-arrow-down fa-4x text-info mb-3"></i><br><br>
                    <video src="/storage/video.mp4" poster="/storage/video.png" playsinline controls>
                        <source src="/storage/video.mp4" type="video/mp4">
                    </video>
                </div>
            </div>
        </div>
    </div>
@endsection

@section("script")

@endsection
