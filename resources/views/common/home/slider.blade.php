<section class="intro-section">
    <div class="row">
        <div class="col-12 mb-4">
            <div
                class="owl-carousel owl-theme row owl-dot-inner owl-dot-white intro-slider animation-slider cols-1 gutter-no"
                data-owl-options="{
                                    'nav': false,
                                    'dots': true,
                                    'loop': true,
                                    'items': 1,
                                    'autoplay': false
                                }">
                @foreach($sliders as $slider)
                    <div class="banner banner-fixed intro-slide1 content-center content-middle"
                         style="background-color: #444342;">
                        <figure>
                            <img src="{{$slider->slider_image}}" alt="intro-banner" width="1180"
                                 height="600" style="background-color: #444342;"/>
                        </figure>
                        {{--      <div class="banner-content">
                                  <h4 class="banner-subtitle font-weight-semi-bold text-white ls-normal lh-1 mb-0 text-uppercase text-left slide-animate"
                                      data-animation-options="{'name': 'fadeInRightShorter', 'duration': '1.2s', 'delay': '.3s'}">
                                      Men’s wear</h4>
                                  <h2 class="banner-title text-uppercase text-white slide-animate"
                                      data-animation-options="{'name': 'fadeInRightShorter', 'duration': '1.2s', 'delay': '.3s'}">
                                      Collection</h2>
                                  <h5 class="font-weight-normal text-white lh-1 ls-normal text-right mb-1 slide-animate"
                                      data-animation-options="{'name': 'fadeInUpShorter', 'duration': '1s', 'delay': '1s'}">
                                      Start at <span class="text-secondary font-weight-bold">$19.99</span>
                                  </h5>
                              </div>--}}
                    </div>

                @endforeach
            </div>
        </div>
    </div>
</section>
