@extends('layouts.common')
@section('title','Home')

@section('content')

    <main class="main">
        <div class="page-content">

            @include('common.home.slider')

            <section class="pt-10 mt-7 appear-animate" data-animation-options="{
                    'delay': '.3s'
                }">
                <div class="container">
                    <h2 class="title title-center mb-5">Brands</h2>
                    <div class="row">
                        @foreach($shops as $shop)
                            <div class="col-xs-6 col-lg-3 mb-4">
                                <div class="category category-default1 category-absolute banner-radius overlay-zoom">
                                    <a href="/shop/{{$shop->shop_id}}/{{getTitleToUrl($shop->shop_name)}}">
                                        <figure class="category-media">
                                            <img src="{{$shop->shop_image}}" alt="category"
                                                 width="280"
                                                 height="280" style="background-color: #8c8c8d;"/>
                                        </figure>
                                    </a>

                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>


            <section class="product-wrapper mt-6 mt-md-10 pt-4 mb-10 pb-2 container appear-animate"
                     data-animation-options="{
                    'delay': '.6s'
                }">
                <h2 class="title title-center">Our Featured</h2>
                <div class="owl-carousel owl-theme row cols-2 cols-md-3 cols-lg-4 cols-xl-5" data-owl-options="{
                        'items': 5,
                        'nav': false,
                        'loop': false,
                        'dots': true,
                        'margin': 20,
                        'responsive': {
                            '0': {
                                'items': 2
                            },
                            '768': {
                                'items': 3
                            },
                            '992': {
                                'items': 4
                            },
                            '1200': {
                                'items': 5,
                                'dots': false,
                                'nav': true
                            }
                        }
                    }">
                    @foreach($new_products as $product)
                        <div class="product text-center">
                            <figure class="product-media">
                                <a href="product.html">
                                    <img src="/cassets/images/demos/demo1/products/product5.jpg"
                                         alt="Blue Pinafore Denim Dress"
                                         width="220" height="245" style="background-color: #f2f3f5;"/>
                                </a>

                                <div class="product-action">
                                    <a href="/product/{{$product->product_id}}/{{getTitleToUrl($product->product_name)}}"
                                       class="btn-product" title="Quick View">Details</a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <div class="product-cat">
                                    <a href="shop-grid-3cols.html">Watches</a>
                                </div>
                                <h3 class="product-name">
                                    <a href="product.html">{{$product->product_name}}</a>
                                </h3>

                                <div class="product-price">
                                    <ins class="new-price">{{$product->regular_price}} Tk</ins>
                                    <del class="old-price">{{$product->selling_price}} Tk</del>
                                </div>

                            </div>
                        </div>
                    @endforeach

                </div>
            </section>


            <section class="banner-group mt-4">
                <div class="container">
                    <h2 class="title d-none">Banner Group</h2>

                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-sm-6 mb-4">
                            <div class="banner banner-3 banner-fixed banner-radius content-middle appear-animate"
                                 data-animation-options="{'name': 'fadeInLeftShorter', 'duration': '1s', 'delay': '.2s'}">
                                <figure>
                                    <img src="/images/promotional_slider/banner.gif" alt="banner" width="100%"
                                         height="auto" style="background-color: #836648;"/>
                                </figure>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 mb-4">
                            <div class="banner banner-3 banner-fixed banner-radius content-middle appear-animate"
                                 data-animation-options="{'name': 'fadeInLeftShorter', 'duration': '1s', 'delay': '.2s'}">
                                <figure>
                                    <img src="/images/promotional_slider/banner.gif" alt="banner" width="100%"
                                         height="auto" style="background-color: #836648;"/>
                                </figure>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 mb-4">
                            <div class="banner banner-3 banner-fixed banner-radius content-middle appear-animate"
                                 data-animation-options="{'name': 'fadeInLeftShorter', 'duration': '1s', 'delay': '.2s'}">
                                <figure>
                                    <img src="/images/promotional_slider/banner.gif" alt="banner" width="100%"
                                         height="auto" style="background-color: #836648;"/>
                                </figure>
                            </div>
                        </div>

                    </div>
                </div>
            </section>


            <section class="blog-post-wrapper mt-6 mt-md-10 pt-7 appear-animate"
                     data-animation-options="{'name': 'fadeIn', 'duration': '1s'}">
                <div class="container">
                    <h2 class="title title-center">News</h2>
                    <div class="owl-carousel owl-theme post-slider row cols-lg-3 cols-sm-2 cols-1" data-owl-options="{
                            'nav': false,
                            'dots': true,
                            'margin': 20,
                            'responsive': {
                                '0': {
                                    'items': 1
                                },
                                '576': {
                                    'items': 2
                                },
                                '992': {
                                    'items': 3,
                                    'dots': false
                                }
                            }
                        }">
                        @foreach($news as $news)
                            <div class="blog-post mb-4">
                                <article class="post post-frame overlay-zoom">
                                    <figure class="post-media">
                                        <a href="post-single.html">
                                            <img src="/cassets/images/blog/frame/1.jpg" alt="Blog post" width="340"
                                                 height="206"
                                                 style="background-color: #919fbc;"/>
                                        </a>
                                        <div class="post-calendar">
                                            <span class="post-day">19</span>
                                            <span class="post-month">JAN</span>
                                        </div>
                                    </figure>
                                    <div class="post-details">
                                        <h4 class="post-title"><a href="post-single.html">20% Off Coupon for Cyber
                                                Week</a></h4>
                                        <p class="post-content">Lorem ipsum dolor sit amet,onadipiscing elit, sedsd
                                            doeiu smod tempo...</p>
                                        <a href="post-single.html" class="btn btn-primary btn-link btn-underline">Read
                                            More<i class="d-icon-arrow-right"></i></a>
                                    </div>
                                </article>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>

            <section class="mt-2 pb-6 pt-10 pb-md-10 appear-animate" data-animation-options="{
                    'delay': '.3s'
                }">
                <h2 class="title d-none">Our Brand</h2>
                <div class="container">
                    <div
                        class="owl-carousel owl-theme row brand-carousel cols-xl-6 cols-lg-5 cols-md-4 cols-sm-3 cols-2"
                        data-owl-options="{
                            'nav': false,
                            'dots': false,
                            'autoplay': true,
                            'margin': 20,
                            'loop': true,
                            'responsive': {
                                '0': {
                                    'items': 2
                                },
                                '576': {
                                    'items': 3
                                },
                                '768': {
                                    'items': 4
                                },
                                '992': {
                                    'items': 5
                                },
                                '1200': {
                                    'items': 6
                                }
                            }
                        }">
                        <figure><img src="/cassets/images/brands/1.png" alt="brand" width="180" height="100"/>
                        </figure>
                        <figure><img src="/cassets/images/brands/2.png" alt="brand" width="180" height="100"/>
                        </figure>
                        <figure><img src="/cassets/images/brands/3.png" alt="brand" width="180" height="100"/>
                        </figure>
                        <figure><img src="/cassets/images/brands/4.png" alt="brand" width="180" height="100"/>
                        </figure>
                        <figure><img src="/cassets/images/brands/5.png" alt="brand" width="180" height="100"/>
                        </figure>
                        <figure><img src="/cassets/images/brands/6.png" alt="brand" width="180" height="100"/>
                        </figure>
                    </div>
                </div>
            </section>

        </div>
    </main>


@endsection
