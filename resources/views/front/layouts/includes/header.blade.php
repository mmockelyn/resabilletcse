<header id="header" class="header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyChangeLogo': true, 'stickyStartAt': 120, 'stickyHeaderContainerHeight': 70}">
    <div class="header-body border-top-0">
        <div class="header-top header-top-borders">
            <div class="container h-100">
                <div class="header-row h-100">
                    <div class="header-column justify-content-start">
                        <div class="header-row">
                            <nav class="header-nav-top">
                                <ul class="nav nav-pills">
                                    <li class="nav-item nav-item-borders py-2 d-none d-sm-inline-flex">
                                        <span class="ps-0">
                                            <i class="far fa-dot-circle text-4 text-color-primary" style="top: 1px;"></i>
                                            {{ \App\Models\Core\Shop::first()->address }} {{ \App\Models\Core\Shop::first()->postal }} {{ \App\Models\Core\Shop::first()->city }}
                                        </span>
                                    </li>
                                    <li class="nav-item nav-item-borders py-2">
                                        <a href="tel:123-456-7890"><i class="fab fa-whatsapp text-4 text-color-primary" style="top: 0;"></i> {{ \App\Models\Core\Shop::first()->phone }}</a>
                                    </li>
                                    <li class="nav-item nav-item-borders py-2 d-none d-md-inline-flex">
                                        <a href="mailto:mail@domain.com"><i class="far fa-envelope text-4 text-color-primary" style="top: 1px;"></i> {{ \App\Models\Core\Shop::first()->email }}</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="header-column justify-content-end">
                        <div class="header-row">
                            <nav class="header-nav-top">
                                <ul class="nav nav-pills">
                                    <li class="nav-item nav-item-borders py-2 d-none d-lg-inline-flex">
                                        @if(config('app.env') == 'local')
                                            <strong>V.</strong>{{ \App\Services\Github::latestMasterVersion() }}
                                        @else
                                            <strong>V.</strong>{{ \App\Services\Github::latestDeployVersion() }}
                                        @endif
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-container container">
            <div class="header-row">
                <div class="header-column">
                    <div class="header-row">
                        <div class="header-logo">
                            <a href="index.html">
                                <img alt="{{ config('app.name') }}" width="200" data-sticky-width="125" src="/storage/logo_long.png">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="header-column justify-content-end">
                    <div class="header-row">
                        <div class="header-nav header-nav-stripe order-2 order-lg-1">
                            <div class="header-nav-main header-nav-main-square header-nav-main-effect-1 header-nav-main-sub-effect-1">
                                <nav class="collapse">
                                    <ul class="nav nav-pills" id="mainNav">
                                        <li>
                                            <a class="{{ currentRouteActiveFront('home') }}" href="{{ route('home') }}">
                                                Accueil
                                            </a>
                                        </li>
                                        <li>
                                            <a class="{{ currentRouteActiveFront('front.billetterie.index') }}" href="{{ route('front.billetterie.index') }}">
                                                Billetterie
                                            </a>
                                        </li>
                                        <li>
                                            <a class="{{ currentRouteActiveFront('front.annuaire.index') }}" href="{{ route('front.annuaire.index') }}">
                                                Annuaire
                                            </a>
                                        </li>
                                        <li>
                                            <a class="{{ currentRouteActiveFront('front.partenaire.index') }}" href="{{ route('front.partenaire.index') }}">
                                                Nos partenaires
                                            </a>
                                        </li>
                                        <li>
                                            <a class="{{ currentRouteActiveFront('front.contact.index') }}" href="{{ route('front.contact.index') }}">
                                                Nous contacter
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <button class="btn header-btn-collapse-nav" data-bs-toggle="collapse" data-bs-target=".header-nav-main nav">
                                <i class="fas fa-bars"></i>
                            </button>
                        </div>
                        @guest()
                            <div class="header-nav-features header-nav-features-no-border header-nav-features-lg-show-border order-1 order-lg-2">
                                <div class="header-nav-feature header-nav-features-cart d-inline-flex ms-2">
                                    <a href="{{ route('login') }}" class="" data-bs-toggle="tooltip" title="Connexion">
                                        <img src="/back/assets/media/icons/duotune/communication/com006.svg" width="24" alt="" class="header-nav-top-icon-img">
                                    </a>
                                </div>
                            </div>
                        @else
                            <div class="header-nav-features header-nav-features-no-border header-nav-features-lg-show-border order-1 order-lg-2">
                                <div class="header-nav-feature header-nav-features-user header-nav-features-user-logged d-inline-flex mx-2 pe-2" id="headerAccount">
                                    <a href="#" class="header-nav-features-toggle">
                                        <i class="far fa-user"></i> {{ auth()->user()->lastname }} {{ auth()->user()->firstname }}
                                    </a>
                                    <div class="header-nav-features-dropdown header-nav-features-dropdown-mobile-fixed header-nav-features-dropdown-force-right" id="headerTopUserDropdown">
                                        <div class="row">
                                            <div class="col-8">
                                                <p class="mb-0 pb-0 text-2 line-height-1 pt-1">Bonjour,</p>
                                                <p><strong class="text-color-dark text-4">{{ auth()->user()->lastname }} {{ auth()->user()->firstname }}</strong></p>
                                            </div>
                                            <div class="col-4">
                                                <div class="d-flex justify-content-end">
                                                    <img class="rounded-circle" width="40" height="40" alt="" src="{{ Gravatar::get(auth()->user()->email) }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <ul class="nav nav-list-simple flex-column text-3">
                                                    <li class="nav-item"><a class="nav-link" href="#">My Profile</a></li>
                                                    <li class="nav-item"><a class="nav-link" href="#">My Orders</a></li>
                                                    <li class="nav-item"><a class="nav-link border-bottom-0" href="#">Log Out</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endguest
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
