<section class="mt-10 pt-3 mb-6">
    <h2 class="title title-simple title-center ls-m">New Products</h2>

    <div class="product-wrapper row">
        @foreach($new_products as $res)
            <div class="col-lg-3 col-md-4 col-6 mb-4">
                <div class="product appear-animate" data-animation-options="{
                                    'name': 'fadeInLeftShorter',
                                    'delay': '.4s'
                                }">
                    <figure class="product-media">
                        <a href="{{$res->product_url}}" target="_blank">
                            <img src="{{$res->featured_image}}" alt="Blue Pinafore Denim Dress"
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
                            <a href="{{$res->product_url}}" target="_blank" class="btn-product "
                               title="Quick View">Quick
                                View</a>
                        </div>
                    </figure>
                    <div class="product-details">
                        <div class="product-cat">
                            <a href="">{{getCategoryName($res->category_id)}}</a>
                        </div>
                        <h3 class="product-name">
                            <a href="{{$res->product_url}}" target="_blank">{{$res->product_name}}</a>
                        </h3>
                        <div class="product-price">
                            <span class="price">{{$res->selling_price}}</span>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>
