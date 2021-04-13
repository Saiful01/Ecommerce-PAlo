@extends('layouts.common')
@section('title','Home')

@section('content')

    <main class="main">
        <div class="page-header"
             style="background-image: url('/cassets/images/shop/page-header-back.jpg'); background-color: #3C63A4;">
            <h1 class="page-title">{{$name}}</h1>
            <ul class="breadcrumb">
                <li><a href="/"><i class="d-icon-home"></i></a></li>
                <li class="delimiter">/</li>
                <li>Shop Product</li>
            </ul>
        </div>
        <!-- End PageHeader -->
        <div class="page-content mb-10 pb-6">
            <div class="container">
                <div class="row gutter-lg main-content-wrap">
                    <aside
                        class="col-lg-3 sidebar sidebar-fixed sidebar-toggle-remain shop-sidebar sticky-sidebar-wrapper">
                        <div class="sidebar-overlay"></div>
                        <a class="sidebar-close" href="#"><i class="d-icon-times"></i></a>
                        <div class="sidebar-content">
                            <div class="pin-wrapper" style="height: 1743.06px;">
                                <div class="sticky-sidebar" data-sticky-options="{'top': 10}"
                                     style="border-bottom: 0px none rgb(102, 102, 102); width: 272.5px;">
                                    <div class="filter-actions mb-4">
                                        <a href="#"
                                           class="sidebar-toggle-btn toggle-remain btn btn-outline btn-primary btn-rounded btn-icon-right">Filter<i
                                                class="d-icon-arrow-left"></i></a>

                                    </div>
                                    <div class="widget widget-collapsible">
                                        <h3 class="widget-title">All Categories<span class="toggle-btn"></span></h3>
                                        <ul class="widget-body filter-items search-ul" style="display: block;">
                                            @foreach($popular_categories as $parent_category)
                                                <li class="with-ul show">
                                                    <a href="#">{{$parent_category->parent_category_name_en}}<i
                                                            class="fas fa-chevron-down"></i></a>
                                                    @foreach($parent_category->categories as $category)
                                                        <ul style="display: none;">
                                                            <li><a href="#">{{$category->category_name_en}}</a></li>
                                                        </ul>
                                                    @endforeach

                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </aside>
                    <div class="col-lg-9 main-content">
                        <nav class="toolbox sticky-toolbox sticky-content fix-top">
                            <div class="toolbox-left">
                                <a href="#" class="toolbox-item left-sidebar-toggle btn btn-sm btn-outline btn-primary
											btn-rounded btn-icon-right  d-lg-none">Filter<i
                                        class="d-icon-arrow-right"></i></a>
                                {{--<div class="toolbox-item toolbox-sort select-box text-dark">
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
                                </div>--}}
                            </div>
                        </nav>
                        <div class="row cols-2 cols-sm-3 cols-md-4 product-wrapper">
                            @foreach($products as $res)
                                <div class="product-wrap">
                                    <div class="product">
                                        <figure class="product-media">
                                            <a href="{{$res->product_url}}"
                                               target="_blank">
                                                <img src="{{$res->featured_image}}" alt="product" width="280"
                                                     height="315">
                                            </a>
                                            <div class="product-label-group">
                                                <label class="product-label label-new">new</label>
                                            </div>
                                            {{--   <div class="product-action-vertical">
                                                   <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                      data-target="#addCartModal" title="Add to cart"><i
                                                           class="d-icon-bag"></i></a>
                                                   <a href="#" class="btn-product-icon btn-wishlist"
                                                      title="Add to wishlist"><i
                                                           class="d-icon-heart"></i></a>
                                               </div>--}}
                                            <div class="product-action">
                                                <a href="{{$res->product_url}}"
                                                   target="_blank" class="btn-product " title="Quick View">Quick
                                                    View</a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <div class="product-cat">
                                                <a href="">{{getCategoryName($res->category_id)}}</a>
                                            </div>
                                            <h3 class="product-name">
                                                <a href="{{$res->product_url}}"
                                                   target="_blank">{{$res->product_name}}</a>
                                            </h3>
                                            <div class="product-price">
                                                <span class="price">{{$res->selling_price}}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </main>



@endsection
