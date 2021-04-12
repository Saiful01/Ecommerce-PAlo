<div class="row">
    @foreach($half_banner as $res)

        <div class="col-md-6 mb-4">
            <div class="banner banner-fixed intro-banner intro-banner1 content-middle appear-animate"
                 data-animation-options="{
                                    'name': 'fadeInUpShorter',
                                    'delay': '.3s'
                                }">
                <figure>
                    <img src="{{$res->slider_image}}" width="580" height="249"
                         alt="banner" style="background-color: #eca5a9;"/>
                </figure>
                {{-- <div class="banner-content">
                     <h4
                         class="banner-subtitle ls-normal text-white text-uppercase font-weight-normal lh-1">
                         New Arrivals</h4>
                     <h3 class="banner-title text-white font-weight-bold ls-md">
                         Women's Sale
                     </h3>
                     <a href="demo2-shop.html"
                        class="btn btn-white btn-link btn-underline font-weight-semi-bold">Shop
                         Now<i class="d-icon-arrow-right"></i></a>
                 </div>--}}
            </div>
        </div>
    @endforeach
</div>
