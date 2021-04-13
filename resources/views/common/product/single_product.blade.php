<div class="product text-center">
    <figure class="product-media">
        <a href="{{$product->product_url}}">
            <img src="{{$product->featured_image}}"
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
            <a href="/"></a>
        </div>
        <h3 class="product-name">
            <a href=""/product/{{$product->product_id}}/{{getTitleToUrl($product->product_name)}}">{{$product->product_name}}</a>
        </h3>

        <div class="product-price">
            <ins class="new-price">{{$product->regular_price}} Tk</ins>
            <del class="old-price">{{$product->selling_price}} Tk</del>
        </div>

    </div>
</div>
