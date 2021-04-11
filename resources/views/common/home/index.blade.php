@extends('layouts.common')
@section('title','Home')

@section('content')

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

            <div class="col-md-6 mb-4">
                <div class="banner banner-fixed intro-banner intro-banner1 content-middle appear-animate"
                     data-animation-options="{
                                    'name': 'fadeInUpShorter',
                                    'delay': '.3s'
                                }">
                    <figure>
                        <img src="/cassets/images/demos/demo2/banners/1.jpg" width="580" height="249"
                             alt="banner" style="background-color: #eca5a9;"/>
                    </figure>
                    <div class="banner-content">
                        <h4
                            class="banner-subtitle ls-normal text-white text-uppercase font-weight-normal lh-1">
                            New Arrivals</h4>
                        <h3 class="banner-title text-white font-weight-bold ls-md">
                            Women's Sale
                        </h3>
                        <a href="demo2-shop.html"
                           class="btn btn-white btn-link btn-underline font-weight-semi-bold">Shop
                            Now<i class="d-icon-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <div class="banner banner-fixed intro-banner intro-banner2 content-middle appear-animate"
                     data-animation-options="{
                                    'name': 'fadeInUpShorter',
                                    'delay': '.5s'
                                }">
                    <figure>
                        <img src="/cassets/images/demos/demo2/banners/2.jpg" width="580" height="249"
                             alt="banner" style="background-color: #494442;"/>
                    </figure>
                    <div class="banner-content">
                        <h4
                            class="banner-subtitle ls-normal text-white text-uppercase font-weight-normal lh-1">
                            Trending</h4>
                        <h3 class="banner-title text-white font-weight-bold ls-md">
                            New Sneaker
                        </h3>
                        <a href="demo2-shop.html"
                           class="btn btn-white btn-link btn-underline btn-white font-weight-semi-bold">Shop
                            Now<i class="d-icon-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="default-section">
        <h2 class="title title-center">Brand</h2>
        <div class="row">
            <div class="col-sm-6 col-lg-3 mb-4">
                <div class="category category-default category-absolute overlay-zoom">
                    <a href="#">
                        <figure class="category-media">
                            <img src="/cassets/images/categories/category1.jpg" alt="category" width="280" height="280">
                        </figure>
                    </a>
                    <div class="category-content">
                        <h4 class="category-name"><a href="shop.html">For Men's</a></h4>
                        <a href="#" class="btn btn-primary">Shop Now</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 mb-4">
                <div class="category category-default category-absolute overlay-zoom">
                    <a href="#">
                        <figure class="category-media">
                            <img src="/cassets/images/categories/category2.jpg" alt="category" width="150" height="100">
                        </figure>
                    </a>
                    <div class="category-content">
                        <h4 class="category-name"><a href="shop.html">Accessories</a></h4>
                        <a href="#" class="btn btn-primary">Shop Now</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 mb-4">
                <div class="category category-default category-absolute overlay-zoom">
                    <a href="#">
                        <figure class="category-media">
                            <img src="/cassets/images/categories/category3.jpg" alt="category" width="280" height="280">
                        </figure>
                    </a>
                    <div class="category-content">
                        <h4 class="category-name"><a href="shop.html">Fashionable Women's</a></h4>
                        <a href="#" class="btn btn-primary">Shop Now</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 mb-4">
                <div class="category category-default category-absolute overlay-zoom">
                    <a href="#">
                        <figure class="category-media">
                            <img src="/cassets/images/categories/category4.jpg" alt="category" width="280" height="280">
                        </figure>
                    </a>
                    <div class="category-content">
                        <h4 class="category-name"><a href="shop.html">Cosmetic</a></h4>
                        <a href="#" class="btn btn-primary">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mt-10 pt-3 mb-6">
        <h2 class="title title-simple title-center ls-m">Best Selling</h2>

        <div class="product-wrapper row">
            <div class="col-lg-3 col-md-4 col-6 mb-4">
                <div class="product appear-animate" data-animation-options="{
                                    'name': 'fadeInLeftShorter',
                                    'delay': '.4s'
                                }">
                    <figure class="product-media">
                        <a href="demo2-product.html">
                            <img src="/cassets/images/demos/demo2/products/1.jpg" alt="Blue Pinafore Denim Dress"
                                 width="280" height="315" style="background-color: #f2f3f5;"/>
                        </a>
                        <div class="product-label-group">
                            <label class="product-label label-new">new</label>
                        </div>
                        <div class="product-action-vertical">
                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                               data-target="#addCartModal" title="Add to cart"><i
                                    class="d-icon-bag"></i></a>
                            <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i
                                    class="d-icon-heart"></i></a>
                        </div>
                        <div class="product-action">
                            <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                View</a>
                        </div>
                    </figure>
                    <div class="product-details">
                        <div class="product-cat">
                            <a href="demo2-shop.html">Women</a>
                        </div>
                        <h3 class="product-name">
                            <a href="demo2-product.html">Comfortable Brown Scart</a>
                        </h3>
                        <div class="product-price">
                            <span class="price">$140.00</span>
                        </div>
                        <div class="ratings-container">
                            <div class="ratings-full">
                                <span class="ratings" style="width:100%"></span>
                                <span class="tooltiptext tooltip-top"></span>
                            </div>
                            <a href="demo2-product.html" class="rating-reviews">( 12 reviews )</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6 mb-4">
                <div class="product appear-animate" data-animation-options="{
                                    'name': 'fadeInLeftShorter',
                                    'delay': '.2s'
                                }">
                    <figure class="product-media">
                        <a href="demo2-product.html">
                            <img src="/cassets/images/demos/demo2/products/2.jpg" alt="Blue Pinafore Denim Dress"
                                 width="280" height="315" style="background-color: #f2f3f5;"/>
                        </a>
                        <div class="product-label-group">
                            <label class="product-label label-sale">27% off</label>
                        </div>
                        <div class="product-action-vertical">
                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                               data-target="#addCartModal" title="Add to cart"><i
                                    class="d-icon-bag"></i></a>
                            <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i
                                    class="d-icon-heart"></i></a>
                        </div>
                        <div class="product-action">
                            <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                View</a>
                        </div>
                    </figure>
                    <div class="product-details">
                        <div class="product-cat">
                            <a href="demo2-shop.html">Clothing</a>
                        </div>
                        <h3 class="product-name">
                            <a href="demo2-product.html">Cotton-padded Clothing</a>
                        </h3>
                        <div class="product-price">
                            <ins class="new-price">$125.99</ins>
                            <del class="old-price">$160.99</del>
                        </div>
                        <div class="ratings-container">
                            <div class="ratings-full">
                                <span class="ratings" style="width:60%"></span>
                                <span class="tooltiptext tooltip-top"></span>
                            </div>
                            <a href="demo2-product.html" class="rating-reviews">( 8 reviews )</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6 mb-4">
                <div class="product appear-animate" data-animation-options="{
                                    'name': 'fadeInRightShorter',
                                    'delay': '.2s'
                                }">
                    <figure class="product-media">
                        <a href="demo2-product.html">
                            <img src="/cassets/images/demos/demo2/products/3.jpg" alt="Blue Pinafore Denim Dress"
                                 width="280" height="315" style="background-color: #f2f3f5;"/>
                        </a>
                        <div class="product-action-vertical">
                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                               data-target="#addCartModal" title="Add to cart"><i
                                    class="d-icon-bag"></i></a>
                            <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i
                                    class="d-icon-heart"></i></a>
                        </div>
                        <div class="product-action">
                            <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                View</a>
                        </div>
                    </figure>
                    <div class="product-details">
                        <div class="product-cat">
                            <a href="demo2-shop.html">Shoes</a>
                        </div>
                        <h3 class="product-name">
                            <a href="demo2-product.html">Season Sports Sneaker</a>
                        </h3>
                        <div class="product-price">
                            <span class="price">$78.64</span>
                        </div>
                        <div class="ratings-container">
                            <div class="ratings-full">
                                <span class="ratings" style="width:40%"></span>
                                <span class="tooltiptext tooltip-top"></span>
                            </div>
                            <a href="demo2-product.html" class="rating-reviews">( 2 reviews )</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6 mb-4">
                <div class="product appear-animate" data-animation-options="{
                                    'name': 'fadeInRightShorter',
                                    'delay': '.4s'
                                }">
                    <figure class="product-media">
                        <a href="demo2-product.html">
                            <img src="/cassets/images/demos/demo2/products/4.jpg" alt="Blue Pinafore Denim Dress"
                                 width="280" height="315" style="background-color: #f2f3f5;"/>
                        </a>
                        <div class="product-label-group">
                            <label class="product-label label-new">New</label>
                        </div>
                        <div class="product-action-vertical">
                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                               data-target="#addCartModal" title="Add to cart"><i
                                    class="d-icon-bag"></i></a>
                            <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i
                                    class="d-icon-heart"></i></a>
                        </div>
                        <div class="product-action">
                            <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                View</a>
                        </div>
                    </figure>
                    <div class="product-details">
                        <div class="product-cat">
                            <a href="demo2-shop.html">Clothing</a>
                        </div>
                        <h3 class="product-name">
                            <a href="demo2-product.html">Women Red Fur Overcoat</a>
                        </h3>
                        <div class="product-price">
                            <span class="price">$184.00</span>
                        </div>
                        <div class="ratings-container">
                            <div class="ratings-full">
                                <span class="ratings" style="width:80%"></span>
                                <span class="tooltiptext tooltip-top"></span>
                            </div>
                            <a href="demo2-product.html" class="rating-reviews">( 6 reviews )</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6 mb-4">
                <div class="product appear-animate" data-animation-options="{
                                    'name': 'fadeInLeftShorter',
                                    'delay': '.4s'
                                }">
                    <figure class="product-media">
                        <a href="demo2-product.html">
                            <img src="/cassets/images/demos/demo2/products/5.jpg" alt="Blue Pinafore Denim Dress"
                                 width="280" height="315" style="background-color: #f2f3f5;"/>
                        </a>
                        <div class="product-action-vertical">
                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                               data-target="#addCartModal" title="Add to cart"><i
                                    class="d-icon-bag"></i></a>
                            <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i
                                    class="d-icon-heart"></i></a>
                        </div>
                        <div class="product-action">
                            <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                View</a>
                        </div>
                    </figure>
                    <div class="product-details">
                        <div class="product-cat">
                            <a href="demo2-shop.html">Women</a>
                        </div>
                        <h3 class="product-name">
                            <a href="demo2-product.html">Hempen Hood a Mourner</a>
                        </h3>
                        <div class="product-price">
                            <span class="price">$93.24</span>
                        </div>
                        <div class="ratings-container">
                            <div class="ratings-full">
                                <span class="ratings" style="width:40%"></span>
                                <span class="tooltiptext tooltip-top"></span>
                            </div>
                            <a href="demo2-product.html" class="rating-reviews">( 9 reviews )</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6 mb-4">
                <div class="product appear-animate" data-animation-options="{
                                    'name': 'fadeInLeftShorter',
                                    'delay': '.2s'
                                }">
                    <figure class="product-media">
                        <a href="demo2-product.html">
                            <img src="/cassets/images/demos/demo2/products/6.jpg" alt="Blue Pinafore Denim Dress"
                                 width="280" height="315" style="background-color: #f2f3f5;"/>
                        </a>
                        <div class="product-label-group">
                            <label class="product-label label-new">New</label>
                        </div>
                        <div class="product-action-vertical">
                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                               data-target="#addCartModal" title="Add to cart"><i
                                    class="d-icon-bag"></i></a>
                            <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i
                                    class="d-icon-heart"></i></a>
                        </div>
                        <div class="product-action">
                            <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                View</a>
                        </div>
                    </figure>
                    <div class="product-details">
                        <div class="product-cat">
                            <a href="demo2-shop.html">Bags & Backpacks</a>
                        </div>
                        <h3 class="product-name">
                            <a href="demo2-product.html">Women's Season Handbag</a>
                        </h3>
                        <div class="product-price">
                            <span class="price">$61.35</span>
                        </div>
                        <div class="ratings-container">
                            <div class="ratings-full">
                                <span class="ratings" style="width:80%"></span>
                                <span class="tooltiptext tooltip-top"></span>
                            </div>
                            <a href="demo2-product.html" class="rating-reviews">( 63 reviews )</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6 mb-4">
                <div class="product appear-animate" data-animation-options="{
                                    'name': 'fadeInRightShorter',
                                    'delay': '.2s'
                                }">
                    <figure class="product-media">
                        <a href="demo2-product.html">
                            <img src="/cassets/images/demos/demo2/products/7.jpg" alt="Blue Pinafore Denim Dress"
                                 width="280" height="315" style="background-color: #f2f3f5;"/>
                        </a>
                        <div class="product-label-group">
                            <label class="product-label label-sale">13% off</label>
                        </div>
                        <div class="product-action-vertical">
                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                               data-target="#addCartModal" title="Add to cart"><i
                                    class="d-icon-bag"></i></a>
                            <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i
                                    class="d-icon-heart"></i></a>
                        </div>
                        <div class="product-action">
                            <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                View</a>
                        </div>
                    </figure>
                    <div class="product-details">
                        <div class="product-cat">
                            <a href="demo2-shop.html">Shoes</a>
                        </div>
                        <h3 class="product-name">
                            <a href="demo2-product.html">Converse Blue Trainaing Shoes</a>
                        </h3>
                        <div class="product-price">
                            <ins class="new-price">$347.23</ins>
                            <del class="old-price">$386.23</del>
                        </div>
                        <div class="ratings-container">
                            <div class="ratings-full">
                                <span class="ratings" style="width:40%"></span>
                                <span class="tooltiptext tooltip-top"></span>
                            </div>
                            <a href="demo2-product.html" class="rating-reviews">( 14 reviews )</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6 mb-4">
                <div class="product appear-animate" data-animation-options="{
                                    'name': 'fadeInRightShorter',
                                    'delay': '.4s'
                                }">
                    <figure class="product-media">
                        <a href="demo2-product.html">
                            <img src="/cassets/images/demos/demo2/products/8.jpg" alt="Blue Pinafore Denim Dress"
                                 width="280" height="315" style="background-color: #f2f3f5;"/>
                        </a>
                        <div class="product-action-vertical">
                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                               data-target="#addCartModal" title="Add to cart"><i
                                    class="d-icon-bag"></i></a>
                            <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i
                                    class="d-icon-heart"></i></a>
                        </div>
                        <div class="product-action">
                            <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                View</a>
                        </div>
                    </figure>
                    <div class="product-details">
                        <div class="product-cat">
                            <a href="demo2-shop.html">Bags & Backpacks</a>
                        </div>
                        <h3 class="product-name">
                            <a href="demo2-product.html">A Dress-Suit Valise</a>
                        </h3>
                        <div class="product-price">
                            <span class="price">$78.23</span>
                        </div>
                        <div class="ratings-container">
                            <div class="ratings-full">
                                <span class="ratings" style="width:100%"></span>
                                <span class="tooltiptext tooltip-top"></span>
                            </div>
                            <a href="demo2-product.html" class="rating-reviews">( 53 reviews )</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container mb-6">
        <h2 class="title title-simple title-center ls-m">News</h2>
        <div class="posts grid post-grid row" data-grid-options="{
                        'layoutMode': 'fitRows'
                    }" style="position: relative; height: 599.968px;">
            <div class="grid-item col-sm-6 col-lg-4 lifestyle shopping winter-sale" style="position: absolute; left: 0%; top: 0px;">
                <article class="post post-mask gradient">
                    <figure class="post-media overlay-zoom">
                        <a href="">
                            <img src="/cassets/images/blog/mask/1.jpg" width="380" height="280" alt="post">
                        </a>
                    </figure>
                    <div class="post-details">
                        <div class="post-meta">
                            on <a href="#" class="post-date">Jun 22, 2018</a>
                            | <a href="#" class="post-comment"><span>2</span> Comments</a>
                        </div>
                        <h4 class="post-title"><a href="">Explore Fashion Trending For Women
                                In Autumn
                                2020</a>
                        </h4>
                        <a href="" class="btn btn-link btn-underline btn-white">Read more<i class="d-icon-arrow-right"></i></a>
                    </div>
                </article>
            </div>
            <div class="grid-item col-sm-6 col-lg-4 lifestyle sport" style="position: absolute; left: 33.332%; top: 0px;">
                <article class="post post-mask gradient">
                    <figure class="post-media overlay-zoom">
                        <a href="">
                            <img src="/cassets/images/blog/mask/2.jpg" width="380" height="250" alt="post">
                        </a>
                    </figure>
                    <div class="post-details">
                        <div class="post-meta">
                            on <a href="#" class="post-date">Nov 6, 2019</a>
                            | <a href="#" class="post-comment"><span>7</span> Comments</a>
                        </div>
                        <h4 class="post-title"><a href="">Complete Set Of Ski Tools</a>
                        </h4>
                        <a href="" class="btn btn-link btn-underline btn-white">Read more<i class="d-icon-arrow-right"></i></a>
                    </div>
                </article>
            </div>
            <div class="grid-item col-sm-6 col-lg-4 fashion lifestyle" style="position: absolute; left: 66.664%; top: 0px;">
                <article class="post post-mask gradient">
                    <figure class="post-media overlay-zoom">
                        <a href="">
                            <img src="/cassets/images/blog/mask/3.jpg" width="380" height="250" alt="post">
                        </a>
                    </figure>
                    <div class="post-details">
                        <div class="post-meta">
                            on <a href="#" class="post-date">Nov 18, 2019</a>
                            | <a href="#" class="post-comment"><span>9</span> Comments</a>
                        </div>
                        <h4 class="post-title"><a href="">Women's Trending Sunglasses And
                                Clothing</a>
                        </h4>
                        <a href="" class="btn btn-link btn-underline btn-white">Read more<i class="d-icon-arrow-right"></i></a>
                    </div>
                </article>
            </div>
            <div class="grid-item col-sm-6 col-lg-4 travel summer-sale" style="position: absolute; left: 0%; top: 299.984px;">
                <article class="post post-mask gradient">
                    <figure class="post-media overlay-zoom">
                        <a href="">
                            <img src="/cassets/images/blog/mask/4.jpg" width="380" height="250" alt="post">
                        </a>
                    </figure>
                    <div class="post-details">
                        <div class="post-meta">
                            on <a href="#" class="post-date">Jun 6, 2019</a>
                            | <a href="#" class="post-comment"><span>3</span> Comments</a>
                        </div>
                        <h4 class="post-title"><a href="">Women's Fashion Summer Dress</a>
                        </h4>
                        <a href="" class="btn btn-link btn-underline btn-white">Read more<i class="d-icon-arrow-right"></i></a>
                    </div>
                </article>
            </div>
            <div class="grid-item col-sm-6 col-lg-4 travel hobbies" style="position: absolute; left: 33.332%; top: 299.984px;">
                <article class="post post-mask gradient">
                    <figure class="post-media overlay-zoom">
                        <a href="">
                            <img src="/cassets/images/blog/mask/5.jpg" width="380" height="250" alt="post">
                        </a>
                    </figure>
                    <div class="post-details">
                        <div class="post-meta">
                            on <a href="#" class="post-date">May 17, 2018</a>
                            | <a href="#" class="post-comment"><span>4</span> Comments</a>
                        </div>
                        <h4 class="post-title"><a href="">Explore Fashion Ipad And
                                Accessories</a>
                        </h4>
                        <a href="" class="btn btn-link btn-underline btn-white">Read more<i class="d-icon-arrow-right"></i></a>
                    </div>
                </article>
            </div>
            <div class="grid-item col-sm-6 col-lg-4 hobbies" style="position: absolute; left: 66.664%; top: 299.984px;">
                <article class="post post-mask gradient">
                    <figure class="post-media overlay-zoom">
                        <a href="">
                            <img src="/cassets/images/blog/mask/6.jpg" width="380" height="250" alt="post">
                        </a>
                    </figure>
                    <div class="post-details">
                        <div class="post-meta">
                            on <a href="#" class="post-date">Nov 22, 2020</a>
                            | <a href="#" class="post-comment"><span>9</span> Comments</a>
                        </div>
                        <h4 class="post-title"><a href="">The Best Choice For Spending
                                Time</a>
                        </h4>
                        <a href="" class="btn btn-link btn-underline btn-white">Read more<i class="d-icon-arrow-right"></i></a>
                    </div>
                </article>
            </div>
        </div>
    </div>



@endsection
