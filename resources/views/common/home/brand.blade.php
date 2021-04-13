<section class="default-section">
    <h2 class="title title-center">Brand</h2>
    <div class="row">
        @foreach($shops as $res)
            <div class="col-sm-6 col-lg-2 mb-4">
                <div class="category category-default category-absolute overlay-zoom">
                    <a href="#">
                        <figure class="category-media">
                            <img src="{{$res->shop_image}}" alt="category" width="280" height="280">
                        </figure>
                    </a>
                    <div class="category-content">
                        <h4 class="category-name text-white" ><a href="">{{$res->shop_name}}</a></h4>
                        <a href="/shop/{{$res->shop_id}}/{{getTitleToUrl($res->shop_name)}}" class="btn btn-primary">Shop Now</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>
