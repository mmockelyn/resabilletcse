@extends("account.layouts.layout")

@section("css")

@endsection

@section("content")
    <div class="container-fluid" id="kt_content_container">
        <div class="stepper stepper-pills stepper-column d-flex flex-column flex-xl-row flex-row-fluid" id="account_stepper">
            <!--begin::Aside-->
            <div class="card d-flex justify-content-center justify-content-xl-start flex-row-auto w-100 w-xl-300px w-xxl-400px me-9">
                <!--begin::Wrapper-->
                <div class="card-body px-6 px-lg-10 px-xxl-15 py-20">
                    <!--begin::Nav-->
                    <div class="stepper-nav">
                        <!--begin::Step 1-->
                        <div class="stepper-item current" data-kt-stepper-element="nav">
                            <!--begin::Line-->
                            <div class="stepper-line w-40px"></div>
                            <!--end::Line-->
                            <!--begin::Icon-->
                            <div class="stepper-icon w-40px h-40px">
                                <i class="stepper-check fas fa-check"></i>
                                <span class="stepper-number">1</span>
                            </div>
                            <!--end::Icon-->
                            <!--begin::Label-->
                            <div class="stepper-label">
                                <h3 class="stepper-title">Code Inscription</h3>
                            </div>
                            <!--end::Label-->
                        </div>
                        <!--end::Step 1-->
                        <!--begin::Step 3-->
                        <div class="stepper-item" data-kt-stepper-element="nav">
                            <!--begin::Line-->
                            <div class="stepper-line w-40px"></div>
                            <!--end::Line-->
                            <!--begin::Icon-->
                            <div class="stepper-icon w-40px h-40px">
                                <i class="stepper-check fas fa-check"></i>
                                <span class="stepper-number">2</span>
                            </div>
                            <!--end::Icon-->
                            <!--begin::Label-->
                            <div class="stepper-label">
                                <h3 class="stepper-title">Mes Informations</h3>
                            </div>
                            <!--end::Label-->
                        </div>
                        <!--end::Step 3-->
                    </div>
                    <!--end::Nav-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--begin::Aside-->
            <!--begin::Content-->
            <div class="card d-flex flex-row-fluid flex-center">
                <!--begin::Form-->
                <form action="{{ route('register') }}" method="post" class="card-body py-20 w-100 w-xl-700px px-9" novalidate="novalidate" id="kt_create_account_form">
                    <!--begin::Step 1-->
                    <div class="current" data-kt-stepper-element="content">
                        <!--begin::Wrapper-->
                        @csrf
                        <div class="w-100">
                            <!--begin::Heading-->
                            <div class="pb-10 pb-lg-15">
                                <!--begin::Title-->
                                <h2 class="fw-bolder d-flex align-items-center text-dark">Code d'inscription
                                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Si vous avez reçu un code pour les avantages sociaux, remplissez le champs ci dessous sinon cliquez sur 'générer un code'"></i></h2>
                                <!--end::Title-->
                            </div>
                            <!--end::Heading-->
                            <!--begin::Input group-->
                            <div class="fv-row">
                                <div class="d-flex">
                                    <x-front.form.input
                                        name="code"
                                        type="text"
                                        label="Code D'inscription"
                                        required="true"
                                        autofocus
                                        placeholder="Code reçu par un commercial ou cliquer sur 'générer'"
                                        class="flex-grow-0"/>

                                    <button id="kt_share_earn_link_copy_button" class="btn btn-light fw-bolder flex-shrink-0"
                                            data-clipboard-target="#kt_share_earn_link_input" data-value="resabillet1">Générer un code</button>

                                </div>
                            </div>
                            <!--end::Input group-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Step 1-->
                    <!--begin::Step 3-->
                    <div data-kt-stepper-element="content">
                        <!--begin::Wrapper-->
                        <div class="w-100">
                            <!--begin::Heading-->
                            <div class="pb-10 pb-lg-12">
                                <!--begin::Title-->
                                <h2 class="fw-bolder text-dark">Mes Informations</h2>
                                <!--end::Title-->
                                <!--begin::Notice-->
                                <div class="text-muted fw-bold fs-6">Parlons de vous !</div>
                                <!--end::Notice-->
                            </div>
                            <!--end::Heading-->
                            <x-front.form.input
                                name="email"
                                type="email"
                                label="Adresse Mail"
                                required="true"
                                autocomplete="on"
                            />
                            <div class="fv-row mb-10" data-kt-password-meter="true">
                                <div class="position-relative mb-3">
                                    <x-front.form.input
                                        name="password"
                                        type="password"
                                        label="Mot de passe"
                                        required="true"
                                        autocomplete="off"
                                        placeholder="Use 8 or more characters with a mix of letters, numbers & symbols."
                                        class="form-control-lg form-control-solid"
                                    />

                                    <!--begin::Visibility toggle-->
                                    <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2"
                                          data-kt-password-meter-control="visibility">
                                        <i class="bi bi-eye-slash fs-2"></i>

                                        <i class="bi bi-eye fs-2 d-none"></i>
                                    </span>
                                </div>
                                <div class="d-flex align-items-center mb-3" data-kt-password-meter-control="highlight">
                                    <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                                    <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                                    <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                                    <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
                                </div>
                            </div>
                            <x-front.form.input
                                name="password_confirmation"
                                type="password"
                                label="Confirmation du mot de passe"
                                required="true"
                            />
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <x-front.form.input
                                        name="firstname"
                                        type="text"
                                        label="Nom"
                                        required="true"
                                    />
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <x-front.form.input
                                        name="lastname"
                                        type="text"
                                        label="Prénom"
                                        required="true"
                                    />
                                </div>
                            </div>
                            <div class="fv-row mb-10">
                                <label for="exampleFormControlInput1" class="required form-label">Quel type de client êtes vous ?</label>
                                <select class="form-control form-select" data-control="select2" id="type_cpt" name="type_cpt" data-placeholder="Quel type de client êtes vous ?" data-live-search="false" onchange="selectTypeAccount(this)">
                                    <option value=""></option>
                                    <option value="0">Comité d'entreprise</option>
                                    <option value="1">Association CSE</option>
                                    <option value="2">Collectivité territorial (Mairie, Administration,etc...)</option>
                                    <option value="3">TPE,PME,PMI Adhérant d'une association (+11 Salariés)</option>
                                    <option value="4">Association</option>
                                    <option value="5">Particulier</option>
                                </select>
                                @error('type_cpt')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div id="result_type_cpt_comite">
                                <div class="alert alert-dismissible bg-primary d-flex flex-column flex-sm-row w-100 p-5 mb-10">
                                    <!--begin::Icon-->
                                    <!--begin::Svg Icon | path: icons/duotune/files/fil024.svg-->
                                    <span class="svg-icon svg-icon-2hx svg-icon-light me-4 mb-5 mb-sm-0">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
											<path opacity="0.3" d="M14 2H6C4.89543 2 4 2.89543 4 4V20C4 21.1046 4.89543 22 6 22H18C19.1046 22 20 21.1046 20 20V8L14 2Z" fill="black"></path>
											<path d="M20 8L14 2V6C14 7.10457 14.8954 8 16 8H20Z" fill="black"></path>
											<rect x="13.6993" y="13.6656" width="4.42828" height="1.73089" rx="0.865447" transform="rotate(45 13.6993 13.6656)" fill="black"></rect>
											<path d="M15 12C15 14.2 13.2 16 11 16C8.8 16 7 14.2 7 12C7 9.8 8.8 8 11 8C13.2 8 15 9.8 15 12ZM11 9.6C9.68 9.6 8.6 10.68 8.6 12C8.6 13.32 9.68 14.4 11 14.4C12.32 14.4 13.4 13.32 13.4 12C13.4 10.68 12.32 9.6 11 9.6Z" fill="black"></path>
										</svg>
									</span>
                                    <!--end::Svg Icon-->
                                    <!--end::Icon-->
                                    <!--begin::Content-->
                                    <div class="d-flex flex-column text-light pe-0 pe-sm-10">
                                        <h4 class="mb-2 text-light">Information</h4>
                                        <span>Les comptes ouvert par cette interface sont nominatif, si vous agissez pour le nom de votre comité, appellez-nous au 0899 492 648 afin de disposer de notre grille tarifaire !</span>
                                    </div>
                                    <!--end::Content-->
                                </div>
                            </div>
                            <div id="result_type_cpt_cse">
                                <div class="alert alert-dismissible bg-primary d-flex flex-column flex-sm-row w-100 p-5 mb-10">
                                    <!--begin::Icon-->
                                    <!--begin::Svg Icon | path: icons/duotune/files/fil024.svg-->
                                    <span class="svg-icon svg-icon-2hx svg-icon-light me-4 mb-5 mb-sm-0">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
											<path opacity="0.3" d="M14 2H6C4.89543 2 4 2.89543 4 4V20C4 21.1046 4.89543 22 6 22H18C19.1046 22 20 21.1046 20 20V8L14 2Z" fill="black"></path>
											<path d="M20 8L14 2V6C14 7.10457 14.8954 8 16 8H20Z" fill="black"></path>
											<rect x="13.6993" y="13.6656" width="4.42828" height="1.73089" rx="0.865447" transform="rotate(45 13.6993 13.6656)" fill="black"></rect>
											<path d="M15 12C15 14.2 13.2 16 11 16C8.8 16 7 14.2 7 12C7 9.8 8.8 8 11 8C13.2 8 15 9.8 15 12ZM11 9.6C9.68 9.6 8.6 10.68 8.6 12C8.6 13.32 9.68 14.4 11 14.4C12.32 14.4 13.4 13.32 13.4 12C13.4 10.68 12.32 9.6 11 9.6Z" fill="black"></path>
										</svg>
									</span>
                                    <!--end::Svg Icon-->
                                    <!--end::Icon-->
                                    <!--begin::Content-->
                                    <div class="d-flex flex-column text-light pe-0 pe-sm-10">
                                        <h4 class="mb-2 text-light">Information</h4>
                                        <span>Les comptes ouvert par cette interface sont nominatif, si vous agissez pour le nom de votre association de CSE, appellez-nous au 0899 492 648 afin de disposer de notre grille tarifaire !</span>
                                    </div>
                                    <!--end::Content-->
                                </div>
                            </div>
                            <div id="result_type_cpt_collectivite">
                                <div class="alert alert-dismissible bg-primary d-flex flex-column flex-sm-row w-100 p-5 mb-10">
                                    <!--begin::Icon-->
                                    <!--begin::Svg Icon | path: icons/duotune/files/fil024.svg-->
                                    <span class="svg-icon svg-icon-2hx svg-icon-light me-4 mb-5 mb-sm-0">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
											<path opacity="0.3" d="M14 2H6C4.89543 2 4 2.89543 4 4V20C4 21.1046 4.89543 22 6 22H18C19.1046 22 20 21.1046 20 20V8L14 2Z" fill="black"></path>
											<path d="M20 8L14 2V6C14 7.10457 14.8954 8 16 8H20Z" fill="black"></path>
											<rect x="13.6993" y="13.6656" width="4.42828" height="1.73089" rx="0.865447" transform="rotate(45 13.6993 13.6656)" fill="black"></rect>
											<path d="M15 12C15 14.2 13.2 16 11 16C8.8 16 7 14.2 7 12C7 9.8 8.8 8 11 8C13.2 8 15 9.8 15 12ZM11 9.6C9.68 9.6 8.6 10.68 8.6 12C8.6 13.32 9.68 14.4 11 14.4C12.32 14.4 13.4 13.32 13.4 12C13.4 10.68 12.32 9.6 11 9.6Z" fill="black"></path>
										</svg>
									</span>
                                    <!--end::Svg Icon-->
                                    <!--end::Icon-->
                                    <!--begin::Content-->
                                    <div class="d-flex flex-column text-light pe-0 pe-sm-10">
                                        <h4 class="mb-2 text-light">Information</h4>
                                        <span>Les comptes ouvert par cette interface sont nominatif, si vous agissez pour le nom de votre collectivité territorial, appellez-nous au 0899 492 648 afin de disposer de notre grille tarifaire !</span>
                                    </div>
                                    <!--end::Content-->
                                </div>
                            </div>
                            <div id="result_type_cpt_part">
                                <x-front.form.input
                                    name="address"
                                    type="text"
                                    label="Adresse Postal"
                                    required="true"
                                />
                                <div class="row">
                                    <div class="col-md-4 col-sm-12">
                                        <x-front.form.input
                                            name="postal"
                                            type="text"
                                            label="Code Postal"
                                            required="true"
                                        />
                                    </div>
                                    <div class="col-md-8 col-sm-12">
                                        <x-front.form.input
                                            name="city"
                                            type="text"
                                            label="Ville"
                                            required="true"
                                        />
                                    </div>
                                </div>
                                <x-front.form.input
                                    name="phone"
                                    type="text"
                                    label="Téléphone"
                                    required="true"
                                />
                            </div>
                            <div id="result_type_cpt_pro">
                                <x-front.form.input
                                    name="company"
                                    type="text"
                                    label="Société"
                                />
                                <div class="fv-row mb-10">
                                    <label for="exampleFormControlInput1" class="required form-label">Siret</label>
                                    <input type="text" class="form-control form-control-solid" name="siret" id="field_siret" placeholder="Numéro de Siret" onkeyup="verifSiret()"/>
                                    <p id="help_siret"></p>
                                </div>
                                <x-front.form.input
                                    name="address_pro"
                                    type="text"
                                    label="Adresse Postal"
                                />
                                <div class="row">
                                    <div class="col-md-4 col-sm-12">
                                        <x-front.form.input
                                            name="postal_pro"
                                            type="text"
                                            label="Code Postal"
                                            required="true"
                                        />
                                    </div>
                                    <div class="col-md-8 col-sm-12">
                                        <x-front.form.input
                                            name="city_pro"
                                            type="text"
                                            label="Ville"
                                            required="true"
                                        />
                                    </div>
                                </div>
                                <x-front.form.input
                                    name="phone"
                                    type="text"
                                    label="Téléphone"
                                    required="true"
                                />
                                <x-front.form.input
                                    name="nb_salarie"
                                    type="text"
                                    label="Nombre de salarie"
                                    help="true"
                                    help-text="Insérez le nombre de salarié de l'entreprise tous secteurs confondue, y compris vous !"
                                />
                            </div>
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Step 3-->
                    <!--begin::Actions-->
                    <div class="d-flex flex-stack pt-10">
                        <!--begin::Wrapper-->
                        <div class="mr-2">
                            <button type="button" class="btn btn-lg btn-light-primary me-3" data-kt-stepper-action="previous">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr063.svg-->
                                <span class="svg-icon svg-icon-4 me-1">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<rect opacity="0.5" x="6" y="11" width="13" height="2" rx="1" fill="black" />
														<path d="M8.56569 11.4343L12.75 7.25C13.1642 6.83579 13.1642 6.16421 12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75L5.70711 11.2929C5.31658 11.6834 5.31658 12.3166 5.70711 12.7071L11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25C13.1642 17.8358 13.1642 17.1642 12.75 16.75L8.56569 12.5657C8.25327 12.2533 8.25327 11.7467 8.56569 11.4343Z" fill="black" />
													</svg>
												</span>
                                <!--end::Svg Icon-->Back</button>
                        </div>
                        <!--end::Wrapper-->
                        <!--begin::Wrapper-->
                        <div>
                            <button type="submit" class="btn btn-lg btn-primary me-3" data-kt-stepper-action="submit">
													<span class="indicator-label">Submit
                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
													<span class="svg-icon svg-icon-3 ms-2 me-0">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black" />
															<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black" />
														</svg>
													</span>
                                                        <!--end::Svg Icon--></span>
                                <span class="indicator-progress">Please wait...
													<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            </button>
                            <button type="button" class="btn btn-lg btn-primary" data-kt-stepper-action="next">Continue
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                <span class="svg-icon svg-icon-4 ms-1 me-0">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black" />
														<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black" />
													</svg>
												</span>
                                <!--end::Svg Icon--></button>
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Actions-->
                </form>
                <!--end::Form-->
            </div>
            <!--end::Content-->
        </div>
    </div>
@endsection

@section("script")
    <script src="/account/assets/plugins/custom/formrepeater/formrepeater.bundle.js"></script>
    @include("account.script.auth.register")
@endsection
