<!--begin::Page title-->
<div data-kt-swapper="true" data-kt-swapper-mode="{default: 'prepend', lg: 'prepend'}"
    data-kt-swapper-parent="{default: '#kt_app_content_container', lg: '#kt_app_header_wrapper'}"
    class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
    <h1 class="page-heading d-flex text-dark fw-bold fs-3 align-items-center my-0">
        {{ isset($data['title']) ? $data['title'] : 'Unknown'; }}
    </h1>
    <!--
    <span class="h-20px border-gray-300 border-start mx-4"></span>
    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 ">
        <li class="breadcrumb-item text-muted">
            <a href="/metronic8/demo1/../demo1/index.html" class="text-muted text-hover-primary">
                Home
            </a>
        </li>
        <li class="breadcrumb-item">
            <span class="bullet bg-gray-400 w-5px h-2px"></span>
        </li>
        <li class="breadcrumb-item text-muted">
            Chat
        </li>
    </ul>-->
</div>
<!--end::Page title-->
