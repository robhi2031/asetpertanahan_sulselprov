<!--begin::Menu wrapper-->
<div class="app-header-menu app-header-mobile-drawer align-items-stretch" data-kt-drawer="true"
    data-kt-drawer-name="app-header-menu" data-kt-drawer-activate="{default: true, lg: false}"
    data-kt-drawer-overlay="true" data-kt-drawer-width="250px" data-kt-drawer-direction="start"
    data-kt-drawer-toggle="#kt_app_header_menu_toggle" data-kt-swapper="true"
    data-kt-swapper-mode="{default: 'append', lg: 'prepend'}"
    data-kt-swapper-parent="{default: '#kt_app_body', lg: '#kt_app_header_wrapper'}">
    <!--begin::Menu-->
    <div class="
        menu  
        menu-rounded 
        menu-active-bg 
        menu-state-primary 
        menu-column 
        menu-lg-row 
        menu-title-gray-700 
        menu-icon-gray-500 
        menu-arrow-gray-500 
        menu-bullet-gray-500 
        my-5 my-lg-0 align-items-stretch fw-semibold px-2 px-lg-0"
        id="kt_app_header_menu" data-kt-menu="true">
        <!--begin:Menu item-->
        <div data-kt-menu-offset="-50,0" class="menu-item menu-here-bg menu-lg-down-accordion me-0 me-lg-2">
            <a href="{{ url('/app_admin/#/') }}" class="menu-link dashboard">
                <span class="menu-icon">
                    <i class="ki-outline ki-home fs-3"></i>
                </span>
                <span class="menu-title">Dashboard</span>
            </a>
        </div>
        <!--end:Menu item-->
        <!--begin:Menu item-->
        <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start"
            class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2">
            <span class="menu-link master_data">
                <span class="menu-icon">
                    <i class="ki-outline ki-abstract-26 fs-3"></i>
                </span>
                <span class="menu-title">Master Data</span>
                <span class="menu-arrow d-lg-none"></span>
            </span>
            <!--begin:Menu sub-->
            <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown px-lg-2 py-lg-4 w-lg-200px">
                <div class="menu-item">
                    <a class="menu-link kabupaten_kota" href="{{ url('/app_admin/#/manage_kabupatenkota') }}">
                        <span class="menu-icon">
                            <i class="ki-outline ki-archive fs-2"></i>
                        </span>
                        <span class="menu-title">Kabupaten/ Kota</span>
                    </a>
                </div>
                <div class="menu-item">
                    <a class="menu-link kecamatan" href="{{ url('/app_admin/#/manage_kecamatan') }}">
                        <span class="menu-icon">
                            <i class="ki-outline ki-archive fs-2"></i>
                        </span>
                        <span class="menu-title">Kecamatan</span>
                    </a>
                </div>
                <div class="menu-item">
                    <a class="menu-link kelurahan_desa" href="{{ url('/app_admin/#/manage_kelurahandesa') }}">
                        <span class="menu-icon">
                            <i class="ki-outline ki-archive fs-2"></i>
                        </span>
                        <span class="menu-title">Kelurahan/ Desa</span>
                    </a>
                </div>
                <div class="menu-item">
                    <a class="menu-link unit_organisasi" href="{{ url('/app_admin/#/manage_unitorganisasi') }}">
                        <span class="menu-icon">
                            <i class="ki-outline ki-archive fs-2"></i>
                        </span>
                        <span class="menu-title">Unit Organisasi</span>
                    </a>
                </div>
                <div class="menu-item">
                    <a class="menu-link penggunaan" href="{{ url('/app_admin/#/manage_penggunaan') }}">
                        <span class="menu-icon">
                            <i class="ki-outline ki-archive fs-2"></i>
                        </span>
                        <span class="menu-title">Penggunaan</span>
                    </a>
                </div>
            </div>
            <!--end:Menu sub-->
        </div>
        <!--end:Menu item-->
        <!--begin:Menu item-->
        <div data-kt-menu-offset="-50,0" class="menu-item menu-here-bg menu-lg-down-accordion me-0 me-lg-2">
            <a href="{{ url('/app_admin/#/manage_aset') }}" class="menu-link aset">
                <span class="menu-icon">
                    <i class="ki-outline ki-map fs-3"></i>
                </span>
                <span class="menu-title">Data Aset</span>
            </a>
        </div>
        <!--end:Menu item-->
        <!--begin:Menu item-->
        <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start"
            class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2">
            <span class="menu-link settings">
                <span class="menu-icon">
                    <i class="ki-outline ki-setting-2 fs-3"></i>
                </span>
                <span class="menu-title">Settings</span>
                <span class="menu-arrow d-lg-none"></span>
            </span>
            <!--begin:Menu sub-->
            <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown px-lg-2 py-lg-4 w-lg-200px">
                <div class="menu-item">
                    <a class="menu-link systeminfo" href="{{ url('/app_admin/#/manage_systeminfo') }}">
                        <span class="menu-icon">
                            <i class="ki-outline ki-code fs-2"></i>
                        </span>
                        <span class="menu-title">System Info</span>
                    </a>
                </div>
                <div class="menu-item">
                    <a class="menu-link roles" href="{{ url('/app_admin/#/manage_roles') }}">
                        <span class="menu-icon">
                            <i class="ki-outline ki-shield-search fs-2"></i>
                        </span>
                        <span class="menu-title">Roles</span>
                    </a>
                </div>
                <div class="menu-item">
                    <a class="menu-link permissions" href="{{ url('/app_admin/#/manage_permissions') }}">
                        <span class="menu-icon">
                            <i class="ki-outline ki-user-tick fs-2"></i>
                        </span>
                        <span class="menu-title">Permissions</span>
                    </a>
                </div>
                <div class="menu-item">
                    <a class="menu-link users" href="{{ url('/app_admin/#/manage_users') }}">
                        <span class="menu-icon">
                            <i class="ki-outline ki-people fs-2"></i>
                        </span>
                        <span class="menu-title">Users</span>
                    </a>
                </div>
                <div class="menu-item">
                    <a class="menu-link users_activity" href="{{ url('/app_admin/#/users_activity') }}">
                        <span class="menu-icon">
                            <i class="ki-outline ki-watch fs-2"></i>
                        </span>
                        <span class="menu-title">Users Activity</span>
                    </a>
                </div>
            </div>
            <!--end:Menu sub-->
        </div>
        <!--end:Menu item-->
    </div>
    <!--end::Menu-->
</div>
<!--end::Menu wrapper-->