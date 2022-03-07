<!--begin::Header-->
<div id="kt_header" class="header">
    <!--begin::Container-->
    <div class="container-fluid d-flex align-items-center flex-wrap justify-content-between" id="kt_header_container">
        <!--begin::Page title-->
        <div class="page-title d-flex flex-column align-items-start justify-content-center flex-wrap me-2 pb-5 pb-lg-0 pt-7 pt-lg-0" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', lg: '#kt_header_container'}">
            <!--begin::Heading-->
            <h1 class="d-flex flex-column text-dark fw-bolder my-0 fs-1">{{ $title }}</h1>
            <!--end::Heading-->
        </div>
        <!--end::Page title=-->
        <!--begin::Wrapper-->
        <div class="d-flex d-lg-none align-items-center ms-n3 me-2">
            <!--begin::Aside mobile toggle-->
            <div class="btn btn-icon btn-active-icon-primary" id="kt_aside_toggle">
                <!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
                <span class="svg-icon svg-icon-1 mt-1">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
											<path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z" fill="black" />
											<path opacity="0.3" d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z" fill="black" />
										</svg>
									</span>
                <!--end::Svg Icon-->
            </div>
            <!--end::Aside mobile toggle-->
            <!--begin::Logo-->
            @if(Route::currentRouteName() == 'register')
                <a href="{{ route('home') }}" class="d-flex align-items-center">
                    <img alt="Logo" src="/storage/logo_long.png" class="h-30px" />
                </a>
            @else
                <a href="{{ route('home') }}" class="d-flex align-items-center">
                    <img alt="Logo" src="/storage/logo_long.png" class="h-30px" />
                </a>
            @endif
            <!--end::Logo-->
        </div>
        <!--end::Wrapper-->
        @if(Route::currentRouteName() != 'register')
            <!--begin::Topbar-->
                <div class="d-flex align-items-center flex-shrink-0">
                    <!--begin::Activities-->
                    <div class="d-flex align-items-center ms-3 ms-lg-4">
                        <!--begin::Drawer toggle-->
                        <div class="btn btn-icon btn-color-gray-700 btn-active-color-primary btn-outline btn-outline-secondary w-40px h-40px" id="kt_activities_toggle">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen007.svg-->
                            <span class="svg-icon svg-icon-1">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
												<path opacity="0.3" d="M12 22C13.6569 22 15 20.6569 15 19C15 17.3431 13.6569 16 12 16C10.3431 16 9 17.3431 9 19C9 20.6569 10.3431 22 12 22Z" fill="black" />
												<path d="M19 15V18C19 18.6 18.6 19 18 19H6C5.4 19 5 18.6 5 18V15C6.1 15 7 14.1 7 13V10C7 7.6 8.7 5.6 11 5.1V3C11 2.4 11.4 2 12 2C12.6 2 13 2.4 13 3V5.1C15.3 5.6 17 7.6 17 10V13C17 14.1 17.9 15 19 15ZM11 10C11 9.4 11.4 9 12 9C12.6 9 13 8.6 13 8C13 7.4 12.6 7 12 7C10.3 7 9 8.3 9 10C9 10.6 9.4 11 10 11C10.6 11 11 10.6 11 10Z" fill="black" />
											</svg>
										</span>
                            <!--end::Svg Icon-->
                        </div>
                        <!--end::Drawer toggle-->
                    </div>
                    <!--end::Activities-->
                    <!--begin::Chat-->
                    <div class="d-flex align-items-center ms-3 ms-lg-4">
                        <!--begin::Drawer wrapper-->
                        <div class="btn btn-icon btn-color-gray-700 btn-active-color-primary btn-outline btn-outline-secondary w-40px h-40px position-relative" id="kt_drawer_chat_toggle">
                            <!--begin::Svg Icon | path: icons/duotune/communication/com003.svg-->
                            <span class="svg-icon svg-icon-1">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
												<path opacity="0.3" d="M2 4V16C2 16.6 2.4 17 3 17H13L16.6 20.6C17.1 21.1 18 20.8 18 20V17H21C21.6 17 22 16.6 22 16V4C22 3.4 21.6 3 21 3H3C2.4 3 2 3.4 2 4Z" fill="black" />
												<path d="M18 9H6C5.4 9 5 8.6 5 8C5 7.4 5.4 7 6 7H18C18.6 7 19 7.4 19 8C19 8.6 18.6 9 18 9ZM16 12C16 11.4 15.6 11 15 11H6C5.4 11 5 11.4 5 12C5 12.6 5.4 13 6 13H15C15.6 13 16 12.6 16 12Z" fill="black" />
											</svg>
										</span>
                            <!--end::Svg Icon-->
                            <!--begin::Bullet-->
                            <span class="bullet bullet-dot bg-success h-6px w-6px position-absolute translate-middle top-0 start-50 animation-blink"></span>
                            <!--end::Bullet-->
                        </div>
                        <!--end::Drawer wrapper-->
                    </div>
                    <!--end::Chat-->
                    <!--begin::Sidebar Toggler-->
                    <!--end::Sidebar Toggler-->
                </div>
                <!--end::Topbar-->
        @endif
    </div>
    <!--end::Container-->
</div>
<!--end::Header-->
