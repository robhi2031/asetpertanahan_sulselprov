@extends('frontend.layouts', ['activeMenu' => 'Beranda', 'activeSubMenu' => ''])
@section('content')
<div class="py-5">
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
<!--begin::Beranda card-->
<div class="card">
    <div class="card-body">
        <!--begin::About-->
        <div class="text-center">
            <h3 class="fs-1 text-dark mb-5">Tentang Aplikasi</h3>
            <div class="fs-5 fw-semibold text-gray-600">
                <p>Konten belum tersedia</p>
            </div>
        </div>
        <!--end::About-->
    </div>
</div>
<!--end::Beranda card-->
@endsection
