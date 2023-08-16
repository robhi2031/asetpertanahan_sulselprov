<!--begin::Header-->
<div id="kt_app_header" class="app-header shadow" data-kt-sticky="true" data-kt-sticky-activate="{default: true, lg: true}" data-kt-sticky-name="app-header-minimize" data-kt-sticky-offset="{default: '200px', lg: '0'}" data-kt-sticky-animation="false">
    <!--begin::Header container-->
    <div class="app-container  container-xxl d-flex align-items-stretch justify-content-between" id="kt_app_header_container">
        <!--begin::Logo-->
        <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0 me-lg-15" id="headerLogo">
            <a href="/metronic8/demo1/../demo1/index.html">
                <svg class="bd-placeholder-img rounded w-50 h-20px h-lg-30px app-sidebar-logo-default theme-light-show" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <rect width="100%" height="100%" fill="#868e96"></rect>
                </svg>
                <svg class="bd-placeholder-img rounded w-50 h-20px h-lg-30px app-sidebar-logo-default theme-dark-show" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <rect width="100%" height="100%" fill="#868e96"></rect>
                </svg>
            </a>
        </div>
        <!--end::Logo-->
        <!--begin::Header wrapper-->
        <div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1" id="kt_app_header_wrapper">
            @include('frontend.partials.menus')
            @include('frontend.partials.navbar')
        </div>
        <!--end::Header wrapper-->
    </div>
    <!--end::Header container-->
</div>
<!--end::Header-->