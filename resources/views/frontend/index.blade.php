{{-- @extends('frontend.layouts', ['activeMenu' => 'Beranda', 'activeSubMenu' => '']) --}}
{{-- @section('content') --}}
<!--begin::Content wrapper-->
<div class="d-flex flex-column flex-column-fluid">
    <!--begin::Content-->
    <div id="kt_app_content" class="app-content">
        <!--begin::Block-->
        <div class="pb-10">
            <div class="slider-container">
                <div id="head-tinySlider" class="my-slider">
                    <div class="slider-item">
                        <div class="text-center">
                            <img src="https://www.jqueryscript.net/demo/Powerful-Customizable-jQuery-Carousel-Slider-OWL-Carousel/demos/assets/fullimage1.jpg" class="card-rounded shadow w-100 mw-100" alt="" />
                        </div>
                    </div>
                    
                    <div class="slider-item">
                        <div class="text-center">
                            <img src="https://www.jqueryscript.net/demo/Powerful-Customizable-jQuery-Carousel-Slider-OWL-Carousel/demos/assets/fullimage2.jpg" class="card-rounded shadow w-100 mw-100" alt="" />
                        </div>
                    </div>
                    
                    <div class="slider-item">
                        <div class="text-center">
                            <img src="https://www.jqueryscript.net/demo/Powerful-Customizable-jQuery-Carousel-Slider-OWL-Carousel/demos/assets/fullimage3.jpg" class="card-rounded shadow w-100 mw-100" alt="" />
                        </div>
                    </div>
                </div>
                <div class="css-bth2c6 carousel-nav">
                    <button type="button" class="css-1hqp0og prev">prev</button>
                </div>
                <div class="css-9a4fvc carousel-nav">
                    <button type="button" class="css-1x6s881 next">next</button>
                </div>
            </div>
        </div>
        <!--begin::About-->
        <div class="card">
            <div class="card-body p-5 px-lg-19 py-lg-16">
                <div class="row mb-10">
                    <div class="col-md-12">

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <!--begin::About-->
                        <div class="text-center mb-15">
                            <h3 class="fs-2hx text-dark mb-5">Tentang Aplikasi</h3>
                            <div class="fs-5 text-muted fw-semibold">
                                Within the last 10 years, we have sold over 100,000 admin theme copies that
                                have been  <br/>successfully deployed by small businesses to global enterprises    
                            </div>
                        </div>
                        <!--end::About-->
                    </div>
                </div>
            </div>
        </div>
        <!--end::About-->
    </div>
    <!--end::Content-->
</div>
<!--end::Content wrapper-->
{{-- @endsection --}}
<script src="{{ asset('/dist/scripts/frontend/main.init.js') }}"></script>
