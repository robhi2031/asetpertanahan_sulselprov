@extends('backend.layouts', ['activeMenu' => 'SETTINGS', 'activeSubMenu' => 'Roles'])
@section('content')
<!--begin::card-->
<div class="card my-3 my-lg-6">
    <!--begin::Card header-->
    <div class="card-header border-0">
        <!--begin::Card title-->
        <div class="card-title">
            <h3 class="fw-bolder fs-2 text-gray-900">
                <i class="fas fa-th-list fs-2 text-gray-900 me-2"></i> Master Data Roles
            </h3>
        </div>
        <!--end::Card title-->
        <!--begin::Card toolbar--
        <div class="card-toolbar">
            <div class="d-flex justify-content-end">
                <button type="button" class="btn btn-sm btn-primary me-2" id="btn-addRole" onclick="_addRole();"><i class="las la-plus fs-3"></i> Tambah</button>
            </div>
        </div>
        <!--end::Card Toolbar-->
    </div>
    <!--end::Card header-->
    <!--begin::Body-->
    <div class="card-body">
        <div id="grid"></div>
    </div>
    <!--end::Body-->
</div>
<!--end::card-->
@endsection
