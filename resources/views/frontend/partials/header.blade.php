<!--begin::Header-->
<div id="kt_app_header" class="app-header shadow" data-kt-sticky="true"
    data-kt-sticky-activate="{default: false, lg: true}" data-kt-sticky-name="app-header-sticky"
    data-kt-sticky-offset="{default: false, lg: '300px'}">
    <!--begin::Header container-->
    <div class="app-container  container-xxl d-flex align-items-stretch justify-content-between "
        id="kt_app_header_container">
        <!--begin::Header mobile toggle-->
        <div class="d-flex align-items-center d-lg-none ms-n3 me-2" title="Show sidebar menu">
            <div class="btn btn-icon btn-color-gray-600 btn-active-color-primary w-35px h-35px"
                id="kt_app_header_menu_toggle">
                <i class="ki-outline ki-abstract-14 fs-2"></i>
            </div>
        </div>
        <!--end::Header mobile toggle-->
        <!--begin::Logo-->
        <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0 me-lg-15">
            <a href="{{ url('/') }}">
                <img alt="Logo" src="{{ asset('/dist/img/site/logo-small.png') }}"
                    class="h-35px d-lg-none" alt="small-logo" />
                <img alt="Logo" src="{{ asset('/dist/img/site/logo-light.png') }}"
                    class="h-45px d-none d-lg-inline app-sidebar-logo-default theme-light-show" alt="light-logo" />
                <img alt="Logo" src="{{ asset('/dist/img/site/logo-dark.png') }}"
                    class="h-45px d-none d-lg-inline app-sidebar-logo-default theme-dark-show" alt="dark-logo" />
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