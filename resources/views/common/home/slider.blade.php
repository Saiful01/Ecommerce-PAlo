<section class="intro-section">

    <div
        class="owl-carousel owl-theme row owl-dot-inner owl-dot-white intro-slider animation-slider cols-1 gutter-no"
        data-owl-options="{
                        'nav': false,
                        'dots': true,
                        'loop': false,
                        'items': 1,
                        'autoplay': false,
                        'autoplayTimeout': 8000
                    }">
        @foreach($sliders as $slider)
        <div class="banner banner-fixed intro-slide1" style="background-color: #46b2e8;">
            <figure>
                <img src="{{$slider->slider_image}}" alt="intro-banner" width="1903"
                     height="630" style="background-color: #34ace5;"/>
            </figure>
        </div>
        @endforeach
    </div>

</section>
