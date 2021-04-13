@extends('layouts.common')
@section('title','Home')

@section('content')


    <main class="main">
        <nav class="breadcrumb-nav">
            <div class="container">
                <ul class="breadcrumb">
                    <li><a href="/"><i class="d-icon-home"></i></a></li>
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
                            <div class="pin-wrapper" style="height: 1704.06px;">
                                <div class="sticky-sidebar"
                                     style="border-bottom: 0px none rgb(102, 102, 102); width: 272.5px;">
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


                                </div>
                            </div>
                        </div>
                    </aside>
                    <div class="col-lg-9 main-content">
                        <div class="shop-banner-default banner mb-1"
                             style="background-image: url('/cassets/images/shop/banner.jpg'); background-color: #4e6582;">
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
                            @foreach($products as $product)

                                @include('common.product.single_product')

                            @endforeach
                        </div>
                        {{--<nav class="toolbox toolbox-pagination">
                            <p class="show-info">Showing 12 of 56 Products</p>
                            <ul class="pagination">
                                <li class="page-item disabled">
                                    <a class="page-link page-link-prev" href="#" aria-label="Previous" tabindex="-1"
                                       aria-disabled="true">
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
                        </nav>--}}
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
