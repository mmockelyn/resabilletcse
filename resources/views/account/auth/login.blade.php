@extends("front.layouts.layout")

@section("css")

@endsection

@section("content")
    <section class="page-header page-header-modern bg-color-light-scale-1 page-header-lg">
        <div class="container">
            <div class="row">
                <div class="col-md-12 align-self-center p-static order-2 text-center">
                    <h1 class="font-weight-bold text-dark">Connexion / Inscription</h1>
                </div>
                <div class="col-md-12 align-self-center order-1">
                    <ul class="breadcrumb d-block text-center">
                        <li><a href="#">Acceuil</a></li>
                        <li class="active">Authentification</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="container py-4">

        <div class="row justify-content-center">
            <div class="col-md-4 col-lg-4 mb-5 mb-lg-0">
                <h2 class="font-weight-bold text-5 mb-0">Connexion</h2>
                <form action="/" id="frmSignIn" method="post" class="needs-validation">
                    <div class="row">
                        <div class="form-group col">
                            <label class="form-label text-color-dark text-3">Adresse Email <span class="text-color-danger">*</span></label>
                            <input type="text" value="" name="email" class="form-control form-control-lg text-4" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col">
                            <label class="form-label text-color-dark text-3">Mot de Passe <span class="text-color-danger">*</span></label>
                            <input type="password" value="" name="password" class="form-control form-control-lg text-4" required>
                        </div>
                    </div>
                    <div class="row justify-content-between">
                        <div class="form-group col-md-auto">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="rememberme">
                                <label class="form-label custom-control-label cur-pointer text-2" for="rememberme">Remember Me</label>
                            </div>
                        </div>
                        <div class="form-group col-md-auto">
                            <a class="text-decoration-none text-color-dark text-color-hover-primary font-weight-semibold text-2" href="#">Mot de passe oublié ?</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col">
                            <button type="submit" class="btn btn-primary btn-modern w-100 text-uppercase rounded-0 font-weight-bold text-3 py-3" data-loading-text="Loading...">Connexion</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-8 col-lg-8">
                <h2 class="font-weight-bold text-5 mb-0">Vous n'avez pas de compte ? Enregistrez-vous</h2>
                <p>Afin de vous identifier correctement, veuillez indiquer si vous êtes un comité ou une TPE.</p>
                <section class="call-to-action call-to-action-quaternary mb-5">
                    <div class="col-sm-9 col-lg-9">
                        <div class="call-to-action-content text-start">
                            <h3>INSCRIVEZ-VOUS AFIN DE BÉNÉFICIER DE REMISE SUR LES PARCS, SORTIES, CONCERTS.</h3>
                            <p class="mb-0 opacity-7">A PARTIR DE 9,90 € PAR MOIS</p>
                        </div>
                    </div>
                    <div class="col-sm-3 col-lg-3">
                        <div class="call-to-action-btn">
                            <a href="{{ route('register') }}" target="_blank" class="btn btn-modern text-2 btn-primary border-0">M'inscrire</a>
                        </div>
                    </div>
                </section>
            </div>
        </div>

    </div>
@endsection

@section("script")

@endsection
