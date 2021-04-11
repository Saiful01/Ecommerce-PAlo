<h1 class="d-none">Welcome to Firebox</h1>
<header class="header">

    <div class="header-top">
        <div class="container">
            <div class="header-left">
                <div class="social-links inline-links d-lg-show">
                    <a href="#" class="social-link social-twitter fab fa-twitter"></a>
                    <a href="#" class="social-link social-linkedin fab fa-linkedin-in"></a>
                    <a href="#" class="social-link social-facebook fab fa-facebook-f"></a>
                    <a href="#" class="social-link social-pinterest fab fa-pinterest-p"></a>
                </div>
                <p class="welcome-msg">Welcome to Firebox</p>
            </div>
            <div class="header-right">

                <!-- End DropDown Menu -->
            {{-- <div class="dropdown ml-5">
                 <a href="#language">ENG</a>
                 <ul class="dropdown-box">
                     <li>
                         <a href="#USD">ENG</a>
                     </li>
                     <li>
                         <a href="#EUR">FRH</a>
                     </li>
                 </ul>
             </div>--}}
            <!-- End DropDown Menu -->
                <span class="divider"></span>
                <a href="#" class="contact d-lg-show"><i class="d-icon-map"></i>Contact</a>
                <a class="login-link" href="/customer/login" data-toggle="login-modal"><i
                        class="d-icon-user"></i>Sign in</a>
                <span class="delimiter">/</span>
                <a class="register-link ml-0" href="/customer/login" data-toggle="login-modal">Register</a>
                <!-- End of Login -->
            </div>
        </div>
    </div>
    <!-- End HeaderTop -->
    <div class="header-middle">
        <div class="container">
            <div class="header-left">
                <a href="#" class="mobile-menu-toggle">
                    <i class="d-icon-bars2"></i>
                </a>
                <a href="/" class="logo d-block d-lg-none">
                    <img src="/images/logo.jpg" alt="logo" width="150" height="42"/>
                </a>
                <!-- End Logo -->

                <div class="header-search hs-simple d-lg-show">
                    <form action="#" class="input-wrapper">
                        <input type="text" class="form-control" name="search" autocomplete="off"
                               placeholder="Search..." required/>
                        <button class="btn btn-search" type="submit">
                            <i class="d-icon-search"></i>
                        </button>
                    </form>
                </div>
                <!-- End Header Search -->
            </div>
            <div class="header-center justify-content-center">
                <a href="/" class="logo d-lg-show">
                    <img src="/images/logo.jpg" alt="logo" width="150" height="42"/>
                </a>
            </div>
            <div class="header-right">
                <a href="tel:#" class="icon-box icon-box-side">
                    <div class="icon-box-icon mr-2">
                        <i class="d-icon-phone"></i>
                    </div>
                    <div class="icon-box-content d-lg-show">
                        <h4 class="icon-box-title">Call Us Now:</h4>
                        <p>01721768044</p>
                    </div>
                </a>
                <span class="divider"></span>

                <div class="dropdown cart-dropdown cart-offcanvas type2 mr-0 mr-lg-2">
                    <a href="#" class="cart-toggle label-block link">
                        <div class="cart-label d-lg-show ls-normal">
                            <span class="cart-name ls-m">Shopping Cart:</span>
                            <span class="cart-price" ng-bind="total_price"></span>
                        </div>
                        <i class="d-icon-bag"><span class="cart-count" ng-bind="total_product"></span></i>
                    </a>
                    <div class="cart-overlay"></div>
                    <!-- End Cart Toggle -->
                    <div class="dropdown-box">
                        <div class="cart-header">
                            <h4 class="cart-title">Shopping Cart</h4>
                            <a href="#" class="btn btn-dark btn-link btn-icon-right btn-close">close<i
                                    class="d-icon-arrow-right"></i><span class="sr-only">Cart</span></a>
                        </div>

                        <div class="products scrollable">


                            <div class="product product-cart" ng-repeat="product in total_products" ng-cloak>
                                <figure class="product-media">
                                    <a href="#">
                                        <img src="@{{ product.options.image }}" alt="product" width="80"
                                             height="88"/>
                                    </a>
                                    <button class="btn btn-link btn-close" ng-click="removeItem(product.rowId)">
                                        <i class="fas fa-times"></i><span class="sr-only">Close</span>
                                    </button>
                                </figure>
                                <div class="product-detail">
                                    <a href="#" class="product-name">@{{ product.name }}</a>
                                    <div class="price-box">
                                        <span class="product-quantity">@{{ product.qty }}</span>
                                        <span class="product-price">@{{ product.price }}</span>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <!-- End of Products  -->
                        <div class="cart-total">
                            <label>Subtotal:</label>
                            <span class="price">@{{ total_price }}</span>
                        </div>
                        <!-- End of Cart Total -->
                        <div class="cart-action">
                            <a href="/cart" class="btn btn-dark btn-link">View Cart</a>
                            <a href="/cart" class="btn btn-dark"><span>Go To Checkout</span></a>
                        </div>
                        <!-- End of Cart Action -->
                    </div>
                    <!-- End Dropdown Box -->
                </div>
                <div class="header-search hs-toggle mobile-search">
                    <a href="#" class="search-toggle">
                        <i class="d-icon-search"></i>
                    </a>
                    <form action="#" class="input-wrapper">
                        <input type="text" class="form-control" name="search" autocomplete="off"
                               placeholder="Search your keyword..." required/>
                        <button class="btn btn-search" type="submit">
                            <i class="d-icon-search"></i>
                        </button>
                    </form>
                </div>
                <!-- End of Header Search -->
            </div>
        </div>

    </div>

    <div class="header-bottom sticky-header fix-top sticky-content has-dropdown">
        <div class="container">
            <div class="inner-wrap">
                <div class="header-left">
                    <div class="dropdown category-dropdown menu-fixed with-sidebar has-border">
                        <a href="#" class="text-white category-toggle"><i
                                class="d-icon-bars2"></i><span>Categories</span></a>
                        <div class="dropdown-box">
                            <ul class="menu vertical-menu category-menu">
                                <li><a href="#" class="menu-title">Browse Our Categories</a></li>
                                @foreach($popular_categories as $parent_category)

                                    @if(count($parent_category->categories)>0)
                                        <li class="submenu">
                                            <a href="/parent-categories/{{$parent_category->parent_category_id}}/{{getTitleToUrl($parent_category->parent_category_name_en)}}">{{$parent_category->parent_category_name_en}}</a>
                                            <ul>
                                                @foreach($parent_category->categories as $category)
                                                    @if(count($category->sub_categories)>0)
                                                        <li class="">
                                                            <a href="/categories/{{$category->category_id}}/{{getTitleToUrl($parent_category->category_name_en)}}">{{$category->category_name_en}}</a>
                                                            {{--<ul>
                                                                @foreach($category->sub_categories as $sub_category)
                                                                    <a href="/sub-categories/{{$sub_category->sub_category_id}}/{{getTitleToUrl($sub_category->sub_category_name_en)}}">{{$sub_category->sub_category_name_en}}</a>
                                                                @endforeach
                                                            </ul>--}}
                                                        </li>

                                                    @else
                                                        <li><a href="/categories/{{$category->category_id}}/{{getTitleToUrl($parent_category->category_name_en)}}">{{$category->category_name_en}}</a></li>
                                                    @endif

                                                @endforeach
                                            </ul>
                                        </li>
                                    @else
                                        <li><a href="/parent-categories/{{$parent_category->parent_category_id}}/{{getTitleToUrl($parent_category->parent_category_name_en)}}">{{$parent_category->parent_category_name_en}}</a></li>
                                    @endif


                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <nav class="main-nav">
                        <ul class="menu">
                            <li class="active">
                                <a href="/">Home</a>
                            </li>
                            {{--  <li>
                                  <a href="#">Categories</a>
                                  <div class="megamenu">
                                      <div class="row">
                                          <div class="col-6 col-sm-4 col-md-3 col-lg-4">
                                              <h4 class="menu-title">Variations 1</h4>
                                              <ul>
                                                  <li><a href="shop-banner-sidebar.html">Banner With Sidebar</a>
                                                  </li>
                                                  <li><a href="shop-boxed-banner.html">Boxed Banner</a></li>
                                                  <li><a href="shop-infinite-scroll.html">Infinite Ajaxscroll</a>
                                                  </li>
                                                  <li><a href="shop-horizontal-filter.html">Horizontal Filter
                                                          1</a></li>
                                                  <li><a href="shop-navigation-filter.html">Horizontal Filter
                                                          2<span class="tip tip-hot">Hot</span></a></li>

                                                  <li><a href="shop-off-canvas.html">Off-Canvas Filter</a></li>
                                                  <li><a href="shop-right-sidebar.html">Right Toggle Sidebar</a>
                                                  </li>
                                              </ul>
                                          </div>
                                          <div class="col-6 col-sm-4 col-md-3 col-lg-4">
                                              <h4 class="menu-title">Variations 2</h4>
                                              <ul>

                                                  <li><a href="shop-grid-3cols.html">3 Columns Mode<span
                                                              class="tip tip-new">New</span></a></li>
                                                  <li><a href="shop-grid-4cols.html">4 Columns Mode</a></li>
                                                  <li><a href="shop-grid-5cols.html">5 Columns Mode</a></li>
                                                  <li><a href="shop-grid-6cols.html">6 Columns Mode</a></li>
                                                  <li><a href="shop-grid-7cols.html">7 Columns Mode</a></li>
                                                  <li><a href="shop-grid-8cols.html">8 Columns Mode</a></li>
                                                  <li><a href="shop-list.html">List Mode</a></li>
                                              </ul>
                                          </div>
                                          <div
                                              class="col-6 col-sm-4 col-md-3 col-lg-4 menu-banner menu-banner1 banner banner-fixed">
                                              <figure>
                                                  <img src="/cassets/images/menu/banner-1.jpg" alt="Menu banner"
                                                       width="221" height="330"/>
                                              </figure>
                                              <div class="banner-content y-50">
                                                  <h4 class="banner-subtitle font-weight-bold text-primary ls-m">
                                                      Sale.
                                                  </h4>
                                                  <h3 class="banner-title font-weight-bold"><span
                                                          class="text-uppercase">Up to</span>70% Off</h3>
                                                  <a href="#" class="btn btn-link btn-underline">shop now<i
                                                          class="d-icon-arrow-right"></i></a>
                                              </div>
                                          </div>
                                          <!-- End Megamenu -->
                                      </div>
                                  </div>
                              </li>
  --}}
                            <li>
                                <a href="/about">About Us</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="header-right">
                    <nav class="main-nav">
                        <ul class="menu">
                            <li>
                                <a href="#">Limited Time Offer</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- End HeaderBottom -->
</header>
<!-- End Header -->
