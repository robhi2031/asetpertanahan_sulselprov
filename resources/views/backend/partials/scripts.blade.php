<!--begin::Javascript-->
<script>
    var hostUrl = "{{ asset('/dist/') }}";
</script>
<!--begin::Global Javascript Bundle(mandatory for all pages)-->
<script src="{{ asset('/dist/plugins/global/plugins.bundle.js') }}"></script>
<script src="{{ asset('/dist/js/scripts.bundle.js') }}"></script>
<script src="{{ asset('/dist/plugins/angular-1.2.13/angular.min.js') }}"></script>
<script src="{{ asset('/dist/plugins/AngularUI/ui-router.min.js') }}"></script>
<!--end::Global Javascript Bundle-->
<!--begin::Vendors Javascript(used for this page only)-->
@foreach ($data['js'] as $dt)
    <script src="{{ asset($dt) }}"></script>
@endforeach
<!--end::Vendors Javascript-->
<!--end::Javascript-->