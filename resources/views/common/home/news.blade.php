<div class="container mb-6">
    <h2 class="title title-simple title-center ls-m">News</h2>
    <div class="posts grid post-grid row" data-grid-options="{
                        'layoutMode': 'fitRows'
                    }" style="position: relative; height: 599.968px;">
        @foreach($news as $res)
            <div class="grid-item col-sm-6 col-lg-4 lifestyle shopping winter-sale"
                 style="position: absolute; left: 0%; top: 0px;">
                <article class="post post-mask gradient">
                    <figure class="post-media overlay-zoom">
                        <a href="{{$res->news_link}}" target="_blank">
                            <img src="{{$res->news_image}}" width="250" height="250" alt="post">
                        </a>
                    </figure>
                    <div class="post-details">
                        <h4 class="post-title"><a href="{{$res->news_link}}" target="_blank">{{$res->news_title}}</a>
                        </h4>
                        <a href="{{$res->news_link}}" target="_blank" class="btn btn-link btn-underline btn-white">Read
                            more<i class="d-icon-arrow-right"></i></a>
                    </div>
                </article>
            </div>
        @endforeach

    </div>
</div>
