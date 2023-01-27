@if (count($news))
<section class="news py-5 section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 py-3">
                <h3>Latest News</h3>
            </div>
            @foreach ($news as $newsItem)
                <a href="{{ url(($newsItem->slug) ?? '/') }}" class="news-item col-12 col-sm-12 {{ ($loop->first) ? 'col-md-5' : 'col-md-3' }} col-lg-4 rounded py-2" data-toggle="tooltip" title="Click to see read more about this post">
                    @if ($newsItem->post_featured_image)
                        <div class="set-bg rounded post-featured-image shadow-md" data-setbg="{{ asset($newsItem->post_featured_image) }}"></div>
                    @endif
                    <div class="news-content py-3">
                        <div class="categories py-1">
                            @if (count( $newsItem->categories ))
                                @foreach ( $newsItem->categories as $category )
                                    <div class="text-capitalize d-inline mr-2 category p-1 px-lg-2 py-lg-1 font-weight-bold rounded mb-2"><small>{{ $category->name }}</small></div>
                                @endforeach
                            @endif
                        </div>
                        <h6 class="mb-0" data-toggle="tooltip" title="{{ $newsItem->post_title }}">{{ str_limit($newsItem->post_title, 50) }}</h6>
                        <p class="small">{{ str_limit($newsItem->extract_text, 100) }} </p>
                    </div>
                </a>
            @endforeach
            
        </div>
    </div>
</section>   
@else
<section class="news py-5 section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 py-3">
                <h3>Latest News</h3>
            </div>
            @for ($i = 0; $i < 4; $i++)
            <div class="col-12 col-sm-6 col-md-3 col-lg-3 col-xl-3">
                <div class="py-5 empty rounded mb-2">
                    <div class="py-3"></div>
                </div>
                <div class="py-2 px-2">
                    <div class="p-2 bg-info rounded"></div>
                    <div class="p-1 bg-info rounded mt-1"></div>
                </div>
            </div>
            @endfor
        </div>
    </div>
</section>   
@endif
