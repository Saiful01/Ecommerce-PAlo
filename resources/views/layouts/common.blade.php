<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from d-themes.com/html/riode/demo2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 11 Apr 2021 12:45:52 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>Online Fashion Fair 2021</title>

    <meta name="keywords" content="HTML5 Template"/>
    <meta name="description" content="Riode - Ultimate eCommerce Template">
    <meta name="author" content="D-THEMES">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="/cassets/images/icons/favicon.png">

    <script>
        WebFontConfig = {
            google: {families: ['Poppins:300,400,500,600,700,800']}
        };
        (function (d) {
            var wf = d.createElement('script'), s = d.scripts[0];
            wf.src = 'js/webfont.js';
            wf.async = true;
            s.parentNode.insertBefore(wf, s);
        })(document);
    </script>


    <link rel="stylesheet" type="text/css" href="/cassets/vendor/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="/cassets/vendor/animate/animate.min.css">

    <!-- Plugins CSS File -->
    <link rel="stylesheet" type="text/css" href="/cassets/vendor/magnific-popup/magnific-popup.min.css">
    <link rel="stylesheet" type="text/css" href="/cassets/vendor/owl-carousel/owl.carousel.min.css">

    <!-- Main CSS File -->
    <link rel="stylesheet" type="text/css" href="/cassets/css/demo2.min.css">
    <style>
        .header-top {
            border-bottom: 0px;
        }

    </style>
</head>

<body class="home">

<div class="page-wrapper">
    <h1 class="d-none">Online Fashion Fair 2021</h1>
    <header class="header" style="background-color:#FDB700">
        {{--<div class="header-top" style="background-color:#FDB700">
            <div class="container">
                <div class="header-left">
                    <p class="welcome-msg">Welcome to Online Fashion Fair 2021!</p>
                </div>
                <div class="header-right">

                    <!-- End DropDown Menu -->
                    <span class="divider"></span>
                    <a href="contact-us.html" class="contact d-lg-show"><i class="d-icon-map"></i>Contact</a>
                    <a href="#" class="help d-lg-show"><i class="d-icon-info"></i> Need Help</a>
                    <a class="login-link" href="ajax/login.html" data-toggle="login-modal"><i
                            class="d-icon-user"></i>Sign in</a>
                    <span class="delimiter">/</span>
                    <a class="register-link ml-0" href="ajax/login.html" data-toggle="login-modal">Register</a>
                    <!-- End of Login -->
                </div>
            </div>
        </div>
        <!-- End HeaderTop -->--}}
        <div class="header-middle sticky-header fix-top sticky-content" style="background-color:#FDB700">
            <div class="container">
                <div class="header-left">
                    <a href="#" class="mobile-menu-toggle">
                        <i class="d-icon-bars2"></i>
                    </a>
                    <a href="/" class="logo">
                        <img src="/cassets/images/demos/demo2/logo.png" alt="logo" width="153" height="44"/>
                    </a>
                    <!-- End Logo -->

                    <div class="header-search hs-simple">
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
                <div class="header-right">
                    <a href="tel:#" class="icon-box icon-box-side">
                        <div class="icon-box-icon mr-0 mr-lg-2">
                            <i class="d-icon-phone"></i>
                        </div>
                        <div class="icon-box-content d-lg-show">
                            <h4 class="icon-box-title">Call Us Now:</h4>
                            <p>0(800) 123-456</p>
                        </div>
                    </a>
                    <span class="divider"></span>
                    {{-- <a href="wishlist.html" class="wishlist">
                         <i class="d-icon-heart"></i>
                     </a>--}}
                    <span class="divider"></span>
                    <div class="dropdown cart-dropdown type2 mr-0 mr-lg-2">
                        <a href="#" class="cart-toggle label-block link">
                            {{--  <div class="cart-label d-lg-show">
                                  <span class="cart-name">Shopping Cart:</span>
                                  <span class="cart-price">$0.00</span>
                              </div>--}}
                            <i class="d-icon-bag"><span class="cart-count"></span></i>
                        </a>
                    {{--    <div class="dropdown-box">
                            <div class="products scrollable">
                                <div class="product product-cart">
                                    <figure class="product-media">
                                        <a href="product.html">
                                            <img src="/cassets/images/cart/product-1.jpg" alt="product" width="80"
                                                 height="88"/>
                                        </a>
                                        <button class="btn btn-link btn-close">
                                            <i class="fas fa-times"></i><span class="sr-only">Close</span>
                                        </button>
                                    </figure>
                                    <div class="product-detail">
                                        <a href="product.html" class="product-name">Riode White Trends</a>
                                        <div class="price-box">
                                            <span class="product-quantity">1</span>
                                            <span class="product-price">$21.00</span>
                                        </div>
                                    </div>

                                </div>
                                <!-- End of Cart Product -->
                                <div class="product product-cart">
                                    <figure class="product-media">
                                        <a href="product.html">
                                            <img src="/cassets/images/cart/product-2.jpg" alt="product" width="80"
                                                 height="88"/>
                                        </a>
                                        <button class="btn btn-link btn-close">
                                            <i class="fas fa-times"></i><span class="sr-only">Close</span>
                                        </button>
                                    </figure>
                                    <div class="product-detail">
                                        <a href="product.html" class="product-name">Dark Blue Women’s
                                            Leomora Hat</a>
                                        <div class="price-box">
                                            <span class="product-quantity">1</span>
                                            <span class="product-price">$118.00</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- End of Cart Product -->
                            </div>
                            <!-- End of Products  -->
                            <div class="cart-total">
                                <label>Subtotal:</label>
                                <span class="price">$139.00</span>
                            </div>
                            <!-- End of Cart Total -->
                            <div class="cart-action">
                                <a href="cart.html" class="btn btn-dark btn-link">View Cart</a>
                                <a href="checkout.html" class="btn btn-dark"><span>Go To Checkout</span></a>
                            </div>
                            <!-- End of Cart Action -->
                        </div>--}}
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

        <div class="header-bottom d-lg-show" style="background-color:#FDB700">
            <div class="container">
                <div class="header-left">
                    <nav class="main-nav">
                        <ul class="menu menu-active-underline">
                            <li class="active">
                                <a href="/">Home</a>
                            </li>
                            {{--<li>
                                <a href="#">Categories</a>
                                <div class="megamenu">
                                    <div class="row">
                                        <div class="col-6 col-sm-4 col-md-3 col-lg-4">
                                            <h4 class="menu-title">Variations 1</h4>
                                            <ul>
                                                <li><a href="shop-banner-sidebar.html">Banner With Sidebar</a></li>
                                                <li><a href="shop-boxed-banner.html">Boxed Banner</a></li>
                                                <li><a href="shop-infinite-scroll.html">Infinite Ajaxscroll</a></li>
                                                <li><a href="shop-horizontal-filter.html">Horizontal Filter</a>
                                                </li>
                                                <li><a href="shop-navigation-filter.html">Navigation Filter<span
                                                            class="tip tip-hot">Hot</span></a></li>

                                                <li><a href="shop-off-canvas.html">Off-Canvas Filter</a></li>
                                                <li><a href="shop-right-sidebar.html">Right Toggle Sidebar</a></li>
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
                                                <img src="/cassets/images/menu/banner-1.jpg" alt="Menu banner" width="221"
                                                     height="330"/>
                                            </figure>
                                            <div class="banner-content y-50">
                                                <h4 class="banner-subtitle font-weight-bold text-primary ls-m">Sale.
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
                            </li>--}}
                            <li>
                                <a href="about-us.html">About Us</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="header-right">
                    <a href="#"><i class="d-icon-card"></i>Special Offers</a>
                </div>
            </div>
        </div>
    </header>
    <!-- End Header -->

    <main class="main demo2-cls mt-3">
        <div class="page-content">
            <div class="container">
                @yield('content')

            </div>
        </div>
    </main>
    <!-- End of Main -->

    <footer class="footer appear-animate">
        <div class="container">
            <div class="footer-middle">
                <div class="row">
                    <div class="col-lg-4 col-sm-6">
                        <div class="widget widget-about">
                            <a href="demo2.html" class="logo-footer mb-4">
                                <img src="/cassets/images/demos/demo2/logo-footer.png" alt="logo-footer" width="150"
                                     height="43"/>
                            </a>
                            <div class="widget-body">
                                <p class="ls-s">Fringilla urna porttitor rhoncus dolor purus<br/>
                                    luctus venenatis lectus magna fringilla diam<br/>
                                    maecenas ultricies mi eget mauris.</p>
                                <a href="mailto:mail@riode.com">Riode@example.com</a>
                            </div>
                        </div>
                        <!-- End of Widget -->
                    </div>
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-lg-4 col-sm-4">
                                <div class="widget">
                                    <h4 class="widget-title">About Us</h4>
                                    <ul class="widget-body">
                                        <li><a href="about-us.html">About Us</a></li>
                                        <li><a href="#">Order History</a></li>
                                        <li><a href="#">Returns</a></li>
                                        <li><a href="#">Custom Service</a></li>
                                        <li><a href="#">Terms &amp; Condition</a></li>
                                    </ul>
                                </div>
                                <!-- End of Widget -->
                            </div>
                            <div class="col-lg-4 col-sm-4">
                                <div class="widget">
                                    <h4 class="widget-title">Customer Service</h4>
                                    <ul class="widget-body">
                                        <li><a href="#">Payment Methods</a></li>
                                        <li><a href="#">Money-back Guarantee!</a></li>
                                        <li><a href="#">Returns</a></li>
                                        <li><a href="#">Shipping</a></li>
                                        <li><a href="#">Terms and Conditions</a></li>
                                    </ul>
                                </div>
                                <!-- End of Widget -->
                            </div>
                            <div class="col-lg-4 col-sm-4">
                                <div class="widget">
                                    <h4 class="widget-title">My Account</h4>
                                    <ul class="widget-body">
                                        <li><a href="#">Sign In</a></li>
                                        <li><a href="cart.html">View Cart</a></li>
                                        <li><a href="wishlist.html">My Wishlist</a></li>
                                        <li><a href="#">Track My Order</a></li>
                                        <li><a href="#">Help</a></li>
                                    </ul>
                                </div>
                                <!-- End of Widget -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of FooterMiddle -->
            <div class="footer-bottom">
                <div class="footer-left">
                    <figure class="payment">
                        <img src="/cassets/images/payment.png" alt="payment" width="159" height="29"/>
                    </figure>
                </div>
                <div class="footer-center">
                    <p class="copyright">Riode eCommerce &copy; 2021. All Rights Reserved</p>
                </div>
                <div class="footer-right">
                    <div class="social-links">
                        <a href="#" class="social-link social-facebook fab fa-facebook-f"></a>
                        <a href="#" class="social-link social-twitter fab fa-twitter"></a>
                        <a href="#" class="social-link social-linkedin fab fa-linkedin-in"></a>
                    </div>
                </div>
            </div>
            <!-- End of FooterBottom -->
        </div>
    </footer>
    <!-- End of Footer -->
</div>


<!-- Plugins JS File -->
<script src="/cassets/vendor/jquery/jquery.min.js"></script>
<script src="/cassets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
<script src="/cassets/vendor/elevatezoom/jquery.elevatezoom.min.js"></script>
<script src="/cassets/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="/cassets/vendor/isotope/isotope.pkgd.min.js"></script>

<script src="/cassets/vendor/owl-carousel/owl.carousel.min.js"></script>
<!-- Main JS File -->
<script src="/cassets/js/main.min.js"></script>
</body>
</html>



