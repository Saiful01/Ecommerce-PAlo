@extends('layouts.common')
@section('title','Home')

@section('content')


    <main class="main">
        <nav class="breadcrumb-nav">
            <div class="container">
                <ul class="breadcrumb">
                    <li><a href="demo1.html"><i class="d-icon-home"></i></a></li>
                    <li>Shop</li>
                </ul>
            </div>
        </nav>
        <div class="page-content pb-10 mb-3">
            <div class="container">
                <div class="row gutter-lg main-content-wrap">
                    <aside class="col-lg-3 sidebar sidebar-fixed shop-sidebar sticky-sidebar-wrapper">
                        <div class="sidebar-overlay"></div>
                        <a href="#" class="sidebar-toggle"><i class="fas fa-chevron-right"></i></a>
                        <a class="sidebar-close" href="#"><i class="d-icon-times"></i></a>
                        <div class="sidebar-content">
                            <div class="pin-wrapper" style="height: 1704.06px;"><div class="sticky-sidebar" style="border-bottom: 0px none rgb(102, 102, 102); width: 272.5px;">
                                    <div class="widget widget-collapsible">
                                        <h3 class="widget-title">All Categories<span class="toggle-btn"></span></h3>
                                        <ul class="widget-body filter-items search-ul">
                                            <li><a href="#">Accessosries</a></li>
                                            <li class="with-ul">
                                                <a href="#">Bags<i class="fas fa-chevron-down"></i></a>
                                                <ul style="display: block">
                                                    <li><a href="#">Backpacks &amp; Fashion Bags</a></li>
                                                </ul>
                                            </li>
                                            <li class="with-ul">
                                                <a href="#">Electronics<i class="fas fa-chevron-down"></i></a>
                                                <ul>
                                                    <li><a href="#">Computer</a></li>
                                                    <li><a href="#">Gaming &amp; Accessosries</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">For Fitness</a></li>
                                            <li><a href="#">Home &amp; Kitchen</a></li>
                                            <li><a href="#">Men's</a></li>
                                            <li><a href="#">Shoes</a></li>
                                            <li><a href="#">Sporting Goods</a></li>
                                            <li><a href="#">Summer Season's</a></li>
                                            <li><a href="#">Travel &amp; Clothing</a></li>
                                            <li><a href="#">Watches</a></li>
                                            <li><a href="#">Women’s</a></li>
                                        </ul>
                                    </div>
                                    <div class="widget widget-collapsible">
                                        <h3 class="widget-title">Filter by Price<span class="toggle-btn"></span></h3>
                                        <div class="widget-body mt-3">
                                            <form action="#">
                                                <div class="filter-price-slider noUi-target noUi-ltr noUi-horizontal"><div class="noUi-base"><div class="noUi-connects"><div class="noUi-connect" style="transform: translate(0%, 0px) scale(1, 1);"></div></div><div class="noUi-origin" style="transform: translate(-100%, 0px); z-index: 5;"><div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="100.0" aria-valuenow="0.0" aria-valuetext="18.00"></div></div><div class="noUi-origin" style="transform: translate(0%, 0px); z-index: 4;"><div class="noUi-handle noUi-handle-upper" data-handle="1" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="100.0" aria-valuenow="100.0" aria-valuetext="35.00"></div></div></div></div>

                                                <div class="filter-actions">
                                                    <div class="filter-price-text mb-4">Price:
                                                        <span class="filter-price-range">$18 - $35</span>
                                                    </div>
                                                    <button type="submit" class="btn btn-dark btn-filter btn-rounded">Filter</button>
                                                </div>
                                            </form><!-- End Filter Price Form -->
                                        </div>
                                    </div>
                                    <div class="widget widget-collapsible">
                                        <h3 class="widget-title">Size<span class="toggle-btn"></span></h3>
                                        <ul class="widget-body filter-items">
                                            <li><a href="#">Extra Large</a></li>
                                            <li><a href="#">Large</a></li>
                                            <li><a href="#">Medium</a></li>
                                            <li><a href="#">Small</a></li>
                                        </ul>
                                    </div>
                                    <div class="widget widget-collapsible">
                                        <h3 class="widget-title">Color<span class="toggle-btn"></span></h3>
                                        <ul class="widget-body filter-items">
                                            <li><a href="#">Black</a></li>
                                            <li><a href="#">Blue</a></li>
                                            <li><a href="#">Green</a></li>
                                            <li><a href="#">White</a></li>
                                        </ul>
                                    </div>
                                    <div class="widget widget-collapsible">
                                        <h3 class="widget-title">Brands<span class="toggle-btn"></span></h3>
                                        <ul class="widget-body filter-items">
                                            <li><a href="#">Cinderella</a></li>
                                            <li><a href="#">Comedy</a></li>
                                            <li><a href="#">Rightcheck</a></li>
                                            <li><a href="#">SkillStar</a></li>
                                            <li><a href="#">SLS</a></li>
                                        </ul>
                                    </div>
                                </div></div>
                        </div>
                    </aside>
                    <div class="col-lg-9 main-content">
                        <div class="shop-banner-default banner mb-1" style="background-image: url('/cassets/images/shop/banner.jpg'); background-color: #4e6582;">
                            <div class="banner-content">
                                <h4 class="banner-subtitle font-weight-bold ls-normal text-uppercase text-white">
                                    Riode Shop</h4>
                                <h1 class="banner-title font-weight-bold text-white">Banner with Sidebar</h1>
                                <a href="#" class="btn btn-white btn-outline btn-icon-right btn-rounded text-normal">Discover
                                    now<i class="d-icon-arrow-right"></i></a>
                            </div>
                        </div>
                        <nav class="toolbox sticky-toolbox sticky-content fix-top">
                            <div class="toolbox-left">
                                <div class="toolbox-item toolbox-sort select-box text-dark">
                                    <label>Sort By :</label>
                                    <select name="orderby" class="form-control">
                                        <option value="default">Default</option>
                                        <option value="popularity" selected="selected">Most Popular</option>
                                        <option value="rating">Average rating</option>
                                        <option value="date">Latest</option>
                                        <option value="price-low">Sort forward price low</option>
                                        <option value="price-high">Sort forward price high</option>
                                        <option value="">Clear custom sort</option>
                                    </select>
                                </div>
                            </div>
                            <div class="toolbox-right">
                                <div class="toolbox-item toolbox-show select-box text-dark">
                                    <label>Show :</label>
                                    <select name="count" class="form-control">
                                        <option value="12">12</option>
                                        <option value="24">24</option>
                                        <option value="36">36</option>
                                    </select>
                                </div>
                                <div class="toolbox-item toolbox-layout">
                                    <a href="shop-list.html" class="d-icon-mode-list btn-layout"></a>
                                    <a href="shop.html" class="d-icon-mode-grid btn-layout active"></a>
                                </div>
                            </div>
                        </nav>
                        <div class="row cols-2 cols-sm-3 product-wrapper">
                            <div class="product-wrap">
                                <div class="product">
                                    <figure class="product-media">
                                        <a href="product.html">
                                            <img src="/cassets/images/shop/1.jpg" alt="product" width="280" height="315">
                                        </a>
                                        <div class="product-label-group">
                                            <label class="product-label label-new">new</label>
                                            <label class="product-label label-sale">12% OFF</label>
                                        </div>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal" data-target="#addCartModal" title="Add to cart"><i class="d-icon-bag"></i></a>
                                            <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                        </div>
                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                                View</a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <div class="product-cat">
                                            <a href="shop-grid-3col.html">Bags &amp; Backpacks</a>
                                        </div>
                                        <h3 class="product-name">
                                            <a href="product.html">Women's Fashion Handbag</a>
                                        </h3>
                                        <div class="product-price">
                                            <ins class="new-price">$53.99</ins><del class="old-price">$67.99</del>
                                        </div>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width:60%"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product.html" class="rating-reviews">( 16 reviews )</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrap">
                                <div class="product">
                                    <figure class="product-media">
                                        <a href="product.html">
                                            <img src="/cassets/images/shop/2.jpg" alt="product" width="280" height="315">
                                        </a>
                                        <div class="product-label-group">
                                            <label class="product-label label-sale">25% OFF</label>
                                        </div>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal" data-target="#addCartModal" title="Add to cart"><i class="d-icon-bag"></i></a>
                                            <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                        </div>
                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                                View</a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <div class="product-cat">
                                            <a href="shop-grid-3col.html">Bags &amp; Backpacks</a>
                                        </div>
                                        <h3 class="product-name">
                                            <a href="product.html">Mackintosh Poket Backpack</a>
                                        </h3>
                                        <div class="product-price">
                                            <ins class="new-price">$125.99</ins><del class="old-price">$160.99</del>
                                        </div>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width:60%"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product.html" class="rating-reviews">( 8 reviews )</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrap">
                                <div class="product">
                                    <figure class="product-media">
                                        <a href="product.html">
                                            <img src="/cassets/images/shop/3.jpg" alt="product" width="280" height="315">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal" data-target="#addCartModal" title="Add to cart"><i class="d-icon-bag"></i></a>
                                            <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                        </div>
                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                                View</a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <div class="product-cat">
                                            <a href="shop-grid-3col.html">Shoes</a>
                                        </div>
                                        <h3 class="product-name">
                                            <a href="product.html">Converse Blue Trainaing Shoes</a>
                                        </h3>
                                        <div class="product-price">
                                            <span class="price">$111.00</span>
                                        </div>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width:40%"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product.html" class="rating-reviews">( 4 reviews )</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrap">
                                <div class="product">
                                    <figure class="product-media">
                                        <a href="product.html">
                                            <img src="/cassets/images/shop/4.jpg" alt="product" width="280" height="315">
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal" data-target="#addCartModal" title="Add to cart"><i class="d-icon-bag"></i></a>
                                            <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                        </div>
                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                                View</a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <div class="product-cat">
                                            <a href="shop-grid-3col.html">Clothing</a>
                                        </div>
                                        <h3 class="product-name">
                                            <a href="product.html">Fashionable Orginal Trucker</a>
                                        </h3>
                                        <div class="product-price">
                                            <span class="price">$78.64</span>
                                        </div>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width:40%"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product.html" class="rating-reviews">( 2 reviews )</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrap">
                                <div class="product">
                                    <figure class="product-media">
                                        <a href="product.html">
                                            <img src="/cassets/images/shop/5.jpg" alt="product" width="280" height="315">
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal" data-target="#addCartModal" title="Add to cart"><i class="d-icon-bag"></i></a>
                                            <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                        </div>
                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                                View</a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <div class="product-cat">
                                            <a href="shop-grid-3col.html">Watches</a>
                                        </div>
                                        <h3 class="product-name">
                                            <a href="product.html">Fashion Man Watch</a>
                                        </h3>
                                        <div class="product-price">
                                            <span class="price">$314.41</span>
                                        </div>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width:20%"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product.html" class="rating-reviews">( 14 reviews )</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrap">
                                <div class="product">
                                    <figure class="product-media">
                                        <a href="product.html">
                                            <img src="/cassets/images/shop/6.jpg" alt="product" width="280" height="315">
                                        </a>
                                        <div class="product-label-group">
                                            <label class="product-label label-sale">20% off</label>
                                        </div>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal" data-target="#addCartModal" title="Add to cart"><i class="d-icon-bag"></i></a>
                                            <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                        </div>
                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                                View</a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <div class="product-cat">
                                            <a href="shop-grid-3col.html">Clothing</a>
                                        </div>
                                        <h3 class="product-name">
                                            <a href="product.html">Men Beautiful Clothing</a>
                                        </h3>
                                        <div class="product-price">
                                            <ins class="new-price">$93.42</ins><del class="old-price">$127.72</del>
                                        </div>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width:100%"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product.html" class="rating-reviews">( 36 reviews )</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrap">
                                <div class="product">
                                    <figure class="product-media">
                                        <a href="product.html">
                                            <img src="/cassets/images/shop/7.jpg" alt="product" width="280" height="315">
                                        </a>
                                        <div class="product-label-group">
                                            <label class="product-label label-new">new</label>
                                        </div>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal" data-target="#addCartModal" title="Add to cart"><i class="d-icon-bag"></i></a>
                                            <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                        </div>
                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                                View</a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <div class="product-cat">
                                            <a href="shop-grid-3col.html">Shoes</a>
                                        </div>
                                        <h3 class="product-name">
                                            <a href="product.html">Converse Training Shoes</a>
                                        </h3>
                                        <div class="product-price">
                                            <span class="price">$113.00</span>
                                        </div>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width:80%"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product.html" class="rating-reviews">( 11 reviews )</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrap">
                                <div class="product">
                                    <figure class="product-media">
                                        <a href="product.html">
                                            <img src="/cassets/images/shop/8.jpg" alt="product" width="280" height="315">
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal" data-target="#addCartModal" title="Add to cart"><i class="d-icon-bag"></i></a>
                                            <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                        </div>
                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                                View</a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <div class="product-cat">
                                            <a href="shop-grid-3col.html">Women</a>
                                        </div>
                                        <h3 class="product-name">
                                            <a href="product.html">Women Beautiful Headgear</a>
                                        </h3>
                                        <div class="product-price">
                                            <span class="price">$78.24</span>
                                        </div>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width:40%"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product.html" class="rating-reviews">( 8 reviews )</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrap">
                                <div class="product">
                                    <figure class="product-media">
                                        <a href="product.html">
                                            <img src="/cassets/images/shop/9.jpg" alt="product" width="280" height="315">
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal" data-target="#addCartModal" title="Add to cart"><i class="d-icon-bag"></i></a>
                                            <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                        </div>
                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                                View</a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <div class="product-cat">
                                            <a href="shop-grid-3col.html">Accessories</a>
                                        </div>
                                        <h3 class="product-name">
                                            <a href="product.html">Hand Electric Cell</a>
                                        </h3>
                                        <div class="product-price">
                                            <span class="price">26.00</span>
                                        </div>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width:100%"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product.html" class="rating-reviews">( 6 reviews )</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrap">
                                <div class="product">
                                    <figure class="product-media">
                                        <a href="product.html">
                                            <img src="/cassets/images/shop/10.jpg" alt="product" width="280" height="315">
                                        </a>
                                        <div class="product-label-group">
                                            <label class="product-label label-new">new</label>
                                        </div>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal" data-target="#addCartModal" title="Add to cart"><i class="d-icon-bag"></i></a>
                                            <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                        </div>
                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                                View</a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <div class="product-cat">
                                            <a href="shop-grid-3col.html">Bags &amp; Backpacks</a>
                                        </div>
                                        <h3 class="product-name">
                                            <a href="product.html">A Dress-suit Valise</a>
                                        </h3>
                                        <div class="product-price">
                                            <span class="price">$189.23</span>
                                        </div>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width:80%"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product.html" class="rating-reviews">( 26 reviews )</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrap">
                                <div class="product">
                                    <figure class="product-media">
                                        <a href="product.html">
                                            <img src="/cassets/images/shop/11.jpg" alt="product" width="280" height="315">
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal" data-target="#addCartModal" title="Add to cart"><i class="d-icon-bag"></i></a>
                                            <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                        </div>
                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                                View</a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <div class="product-cat">
                                            <a href="shop-grid-3col.html">men</a>
                                        </div>
                                        <h3 class="product-name">
                                            <a href="product.html">Converse Season Shoes</a>
                                        </h3>
                                        <div class="product-price">
                                            <span class="price">$135.62</span>
                                        </div>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width:40%"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product.html" class="rating-reviews">( 7 reviews )</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrap">
                                <div class="product">
                                    <figure class="product-media">
                                        <a href="product.html">
                                            <img src="/cassets/images/shop/12.jpg" alt="product" width="280" height="315">
                                        </a>
                                        <div class="product-label-group">
                                            <label class="product-label label-sale">8% off</label>
                                        </div>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart" data-toggle="modal" data-target="#addCartModal" title="Add to cart"><i class="d-icon-bag"></i></a>
                                            <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                        </div>
                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                                View</a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <div class="product-cat">
                                            <a href="shop-grid-3col.html">Watches</a>
                                        </div>
                                        <h3 class="product-name">
                                            <a href="product.html">Man's Black Wrist Watch</a>
                                        </h3>
                                        <div class="product-price">
                                            <ins class="new-price">$280.25</ins><del class="old-price">$310.24</del>
                                        </div>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width:40%"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product.html" class="rating-reviews">( 3 reviews )</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <nav class="toolbox toolbox-pagination">
                            <p class="show-info">Showing 12 of 56 Products</p>
                            <ul class="pagination">
                                <li class="page-item disabled">
                                    <a class="page-link page-link-prev" href="#" aria-label="Previous" tabindex="-1" aria-disabled="true">
                                        <i class="d-icon-arrow-left"></i>Prev
                                    </a>
                                </li>
                                <li class="page-item active" aria-current="page"><a class="page-link" href="#">1</a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item page-item-dots"><a class="page-link" href="#">6</a></li>
                                <li class="page-item">
                                    <a class="page-link page-link-next" href="#" aria-label="Next">
                                        Next<i class="d-icon-arrow-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection