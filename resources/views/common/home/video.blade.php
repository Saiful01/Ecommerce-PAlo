<div class="container mb-6">
    <h2 class="title title-simple title-center ls-m">Videos</h2>
    <div class="posts grid post-grid row" data-grid-options="{
                        'layoutMode': 'fitRows'
                    }" style="position: relative; height: 599.968px;">
        @foreach($videos as $res)
            <div class="grid-item col-sm-6 col-lg-4 lifestyle shopping winter-sale"
                 style="position: absolute; left: 0%; top: 0px;">
                <article class="post post-mask gradient">
                    <iframe width="420" height="315"
                            src="{{$res->link}}">
                    </iframe>

                </article>
            </div>
        @endforeach

    </div>
</div>
