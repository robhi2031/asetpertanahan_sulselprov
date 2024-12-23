<!--begin::Fonts(mandatory for all pages)-->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700"/>
<!--end::Fonts-->
<!--begin::Vendor Stylesheets(used for this page only)-->
@foreach ($data['css'] as $dt)
    @if(str_contains($dt, 'https://'))
        <link rel="stylesheet" href="{{ $dt }}">
    @else
        <link rel="stylesheet" href="{{ asset($dt) }}">
    @endif
@endforeach
<!--end::Vendor Stylesheets-->
<!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
<link href="{{ asset('/dist/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('/dist/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
<!--end::Global Stylesheets Bundle-->
<!-- Base Route JS -->
<script src="{{ asset('/dist/js/base_route.js') }}"></script>
<script>
    // Frame-busting to prevent site from being loaded within a frame without permission (click-jacking)
    if (window.top != window.self) {
        window.top.location.replace(window.self.location.href);
    }
</script>