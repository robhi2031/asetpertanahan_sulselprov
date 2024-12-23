<!--begin::Navbar-->
<div class="app-navbar flex-shrink-0">
    <!--begin::Login Button-->
    <div class="d-flex align-items-center mx-2 mx-md-0">
        <a href="{{ url('/auth') }}" class="btn btn-sm btn-primary fw-bold">
            <i class="ki-outline ki-entrance-left fs-3"></i> Login
        </a>
    </div>
    <!--end::Login Button-->
    <div class="app-navbar-item d-lg-none mx-2" title="Show header menu">
        <div class="btn btn-flex btn-icon btn-active-color-primary w-30px h-30px" id="kt_app_header_menu_toggle">
            <i class="ki-outline ki-element-4 fs-1"></i>
        </div>
    </div>
    <!--begin::User menu--
    <div class="app-navbar-item ms-3 ms-lg-5" id="kt_header_user_menu_toggle">
        <!--begin::Menu wrapper--
        <div class="cursor-pointer symbol symbol-35px symbol-md-45px"
            data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
            data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
            <img class="symbol symbol-circle symbol-35px symbol-md-45px"
                src="/metronic8/demo30/assets/media/avatars/300-13.jpg" alt="user" />
        </div>
        <!--begin::User account menu--
        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px"
            data-kt-menu="true">
            <!--begin::Menu item--
            <div class="menu-item px-3">
                <div class="menu-content d-flex align-items-center px-3">
                    <!--begin::Avatar--
                    <div class="symbol symbol-50px me-5">
                        <img alt="Logo"
                            src="/metronic8/demo30/assets/media/avatars/300-13.jpg" />
                    </div>
                    <!--end::Avatar--

                    <!--begin::Username--
                    <div class="d-flex flex-column">
                        <div class="fw-bold d-flex align-items-center fs-5">
                            Max Smith <span
                                class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2">Pro</span>
                        </div>

                        <a href="#"
                            class="fw-semibold text-muted text-hover-primary fs-7">
                            max@kt.com </a>
                    </div>
                    <!--end::Username--
                </div>
            </div>
            <!--end::Menu item--
            <!--begin::Menu separator--
            <div class="separator my-2"></div>
            <!--end::Menu separator--
            <!--begin::Menu item--
            <div class="menu-item px-5">
                <a href="/metronic8/demo30/../demo30/account/overview.html"
                    class="menu-link px-5">
                    My Profile
                </a>
            </div>
            <!--end::Menu item--
            <!--begin::Menu item--
            <div class="menu-item px-5">
                <a href="/metronic8/demo30/../demo30/apps/projects/list.html"
                    class="menu-link px-5">
                    <span class="menu-text">My Projects</span>
                    <span class="menu-badge">
                        <span
                            class="badge badge-light-danger badge-circle fw-bold fs-7">3</span>
                    </span>
                </a>
            </div>
            <!--end::Menu item--
            <!--begin::Menu item--
            <div class="menu-item px-5"
                data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
                <a href="#" class="menu-link px-5">
                    <span class="menu-title">My Subscription</span>
                    <span class="menu-arrow"></span>
                </a>
                <!--begin::Menu sub--
                <div class="menu-sub menu-sub-dropdown w-175px py-4">
                    <!--begin::Menu item--
                    <div class="menu-item px-3">
                        <a href="/metronic8/demo30/../demo30/account/referrals.html"
                            class="menu-link px-5">
                            Referrals
                        </a>
                    </div>
                    <!--end::Menu item--
                    <!--begin::Menu item--
                    <div class="menu-item px-3">
                        <a href="/metronic8/demo30/../demo30/account/billing.html"
                            class="menu-link px-5">
                            Billing
                        </a>
                    </div>
                    <!--end::Menu item--
                    <!--begin::Menu item--
                    <div class="menu-item px-3">
                        <a href="/metronic8/demo30/../demo30/account/statements.html"
                            class="menu-link px-5">
                            Payments
                        </a>
                    </div>
                    <!--end::Menu item--
                    <!--begin::Menu item--
                    <div class="menu-item px-3">
                        <a href="/metronic8/demo30/../demo30/account/statements.html"
                            class="menu-link d-flex flex-stack px-5">
                            Statements
                            <span class="ms-2 lh-0" data-bs-toggle="tooltip"
                                title="View your statements">
                                <i class="ki-outline ki-information-5 fs-5"></i> </span>
                        </a>
                    </div>
                    <!--end::Menu item--
                    <!--begin::Menu separator--
                    <div class="separator my-2"></div>
                    <!--end::Menu separator--
                    <!--begin::Menu item--
                    <div class="menu-item px-3">
                        <div class="menu-content px-3">
                            <label
                                class="form-check form-switch form-check-custom form-check-solid">
                                <input class="form-check-input w-30px h-20px"
                                    type="checkbox" value="1" checked="checked"
                                    name="notifications" />
                                <span class="form-check-label text-muted fs-7">
                                    Notifications
                                </span>
                            </label>
                        </div>
                    </div>
                    <!--end::Menu item--
                </div>
                <!--end::Menu sub--
            </div>
            <!--end::Menu item--
            <!--begin::Menu item--
            <div class="menu-item px-5">
                <a href="/metronic8/demo30/../demo30/account/statements.html"
                    class="menu-link px-5">
                    My Statements
                </a>
            </div>
            <!--end::Menu item--
            <!--begin::Menu separator--
            <div class="separator my-2"></div>
            <!--end::Menu separator--
            <!--begin::Menu item--
            <div class="menu-item px-5"
                data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
                <a href="#" class="menu-link px-5">
                    <span class="menu-title position-relative">
                        Mode
                        <span class="ms-5 position-absolute translate-middle-y top-50 end-0">
                            <i class="ki-outline ki-night-day theme-light-show fs-2"></i> <i
                                class="ki-outline ki-moon theme-dark-show fs-2"></i> </span>
                    </span>
                </a>
                <!--begin::Menu--
                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-150px"
                    data-kt-menu="true" data-kt-element="theme-mode-menu">
                    <!--begin::Menu item--
                    <div class="menu-item px-3 my-0">
                        <a href="#" class="menu-link px-3 py-2"
                            data-kt-element="mode" data-kt-value="light">
                            <span class="menu-icon" data-kt-element="icon">
                                <i class="ki-outline ki-night-day fs-2"></i> </span>
                            <span class="menu-title">
                                Light
                            </span>
                        </a>
                    </div>
                    <!--end::Menu item--
                    <!--begin::Menu item--
                    <div class="menu-item px-3 my-0">
                        <a href="#" class="menu-link px-3 py-2"
                            data-kt-element="mode" data-kt-value="dark">
                            <span class="menu-icon" data-kt-element="icon">
                                <i class="ki-outline ki-moon fs-2"></i> </span>
                            <span class="menu-title">
                                Dark
                            </span>
                        </a>
                    </div>
                    <!--end::Menu item--
                    <!--begin::Menu item--
                    <div class="menu-item px-3 my-0">
                        <a href="#" class="menu-link px-3 py-2"
                            data-kt-element="mode" data-kt-value="system">
                            <span class="menu-icon" data-kt-element="icon">
                                <i class="ki-outline ki-screen fs-2"></i> </span>
                            <span class="menu-title">
                                System
                            </span>
                        </a>
                    </div>
                    <!--end::Menu item--
                </div>
                <!--end::Menu--
            </div>
            <!--end::Menu item--
            <!--begin::Menu item--
            <div class="menu-item px-5"
                data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
                <a href="#" class="menu-link px-5">
                    <span class="menu-title position-relative">
                        Language
                        <span
                            class="fs-8 rounded bg-light px-3 py-2 position-absolute translate-middle-y top-50 end-0">
                            English <img class="w-15px h-15px rounded-1 ms-2"
                                src="/metronic8/demo30/assets/media/flags/united-states.svg"
                                alt="" />
                        </span>
                    </span>
                </a>
                <!--begin::Menu sub--
                <div class="menu-sub menu-sub-dropdown w-175px py-4">
                    <!--begin::Menu item--
                    <div class="menu-item px-3">
                        <a href="/metronic8/demo30/../demo30/account/settings.html"
                            class="menu-link d-flex px-5 active">
                            <span class="symbol symbol-20px me-4">
                                <img class="rounded-1"
                                    src="/metronic8/demo30/assets/media/flags/united-states.svg"
                                    alt="" />
                            </span>
                            English
                        </a>
                    </div>
                    <!--end::Menu item--
                    <!--begin::Menu item--
                    <div class="menu-item px-3">
                        <a href="/metronic8/demo30/../demo30/account/settings.html"
                            class="menu-link d-flex px-5">
                            <span class="symbol symbol-20px me-4">
                                <img class="rounded-1"
                                    src="/metronic8/demo30/assets/media/flags/spain.svg"
                                    alt="" />
                            </span>
                            Spanish
                        </a>
                    </div>
                    <!--end::Menu item--
                    <!--begin::Menu item--
                    <div class="menu-item px-3">
                        <a href="/metronic8/demo30/../demo30/account/settings.html"
                            class="menu-link d-flex px-5">
                            <span class="symbol symbol-20px me-4">
                                <img class="rounded-1"
                                    src="/metronic8/demo30/assets/media/flags/germany.svg"
                                    alt="" />
                            </span>
                            German
                        </a>
                    </div>
                    <!--end::Menu item--
                    <!--begin::Menu item--
                    <div class="menu-item px-3">
                        <a href="/metronic8/demo30/../demo30/account/settings.html"
                            class="menu-link d-flex px-5">
                            <span class="symbol symbol-20px me-4">
                                <img class="rounded-1"
                                    src="/metronic8/demo30/assets/media/flags/japan.svg"
                                    alt="" />
                            </span>
                            Japanese
                        </a>
                    </div>
                    <!--end::Menu item--
                    <!--begin::Menu item--
                    <div class="menu-item px-3">
                        <a href="/metronic8/demo30/../demo30/account/settings.html"
                            class="menu-link d-flex px-5">
                            <span class="symbol symbol-20px me-4">
                                <img class="rounded-1"
                                    src="/metronic8/demo30/assets/media/flags/france.svg"
                                    alt="" />
                            </span>
                            French
                        </a>
                    </div>
                    <!--end::Menu item--
                </div>
                <!--end::Menu sub--
            </div>
            <!--end::Menu item--
            <!--begin::Menu item--
            <div class="menu-item px-5 my-1">
                <a href="/metronic8/demo30/../demo30/account/settings.html"
                    class="menu-link px-5">
                    Account Settings
                </a>
            </div>
            <!--end::Menu item--
            <!--begin::Menu item--
            <div class="menu-item px-5">
                <a href="/metronic8/demo30/../demo30/authentication/layouts/corporate/sign-in.html"
                    class="menu-link px-5">
                    Sign Out
                </a>
            </div>
            <!--end::Menu item--
        </div>
        <!--end::User account menu--
        <!--end::Menu wrapper--
    </div>
    <!--end::User menu-->

    <!--begin::Header menu toggle-->
    <!--end::Header menu toggle-->
</div>
<!--end::Navbar-->