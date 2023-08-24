<!--begin::Javascript-->
<script>
    var hostUrl = "{{ asset('/dist/') }}";
</script>
<!--begin::Global Javascript Bundle(mandatory for all pages)-->
<script src="{{ asset('/dist/plugins/global/plugins.bundle.js') }}"></script>
<script src="{{ asset('/dist/js/scripts.bundle.js') }}"></script>
<!--end::Global Javascript Bundle-->
<!--begin::Vendors Javascript(used for this page only)-->
@foreach ($data['js'] as $dt)
    @if(str_contains($dt, 'https://'))
        <script src="{{ $dt }}"></script>
    @else
        <script src="{{ asset($dt) }}"></script>
    @endif
@endforeach
<!--end::Vendors Javascript-->
<!--end::Javascript-->