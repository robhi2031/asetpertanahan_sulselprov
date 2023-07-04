{{-- @extends('frontend.layouts', ['activeMenu' => 'Beranda', 'activeSubMenu' => '']) --}}
{{-- @section('content') --}}
<!--begin::Content wrapper-->
<div class="d-flex flex-column flex-column-fluid">
    <!--begin::Content-->
    <div id="kt_app_content" class="app-content mt-10">
        <input id="save" value="save" type="button" />
        <div id="map"></div>
        <div id="geojson"></div>
    </div>
    <!--end::Content-->
</div>
<!--end::Content wrapper-->
{{-- @endsection --}}
<!-- Replace the value of the key parameter with your own API key. -->
<script src="https://maps.googleapis.com/maps/api/js?libraries=drawing&callback=initMap&key=AIzaSyDECMLwt8UyWPgkKVqEqf5QGFcqOsP6VKs" async defer></script>
<script src="{{ asset('/dist/scripts/frontend/map_aset.init.js') }}"></script>
