>
@if (!is_null($posts) && count($posts) > 0)
<section class="posts py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 py-3 text-lg-center d-none">
                <h4>{{ 'Posts' }}</h4>
                <p class="small">Lorem ipsum dolor sit amet consectetur adipisis facilis rem inventore sunt dolorem itaque, aliquam libero vero.</p>
            </div>
                @foreach ($posts as $post)
                    <div class="col-12 col-sm-6 col-md-6 col-lg-4 post-item mb-5">
                        <div class="set-bg rounded-4 post-featured-image pb-3 shadow" data-setbg="{{ ($post->post_featured_image) ? asset($post->post_featured_image) : asset('img/featured/featured.jpg') }}"></div>
                        <div class="post-item-content py-3 px-lg-2">
                            <h6 class="display-7 mb-1 text-capitalize">{{ str_limit($post->post_title, 50) }}</h6>
                            @if (count($post->categories))
                                @foreach ($post->categories as $category)
                                <small class="text-dark"><i class="fa fa-tag text-primary"></i> {{ $category->name }}</small>
                                @endforeach
                            @endif
                            <p class="small">
                                {{ str_limit($post->extract_text, 150) }}
                                @if ($post->slug)
                                    <a href="{{ url($post->slug) }}" class="text-primary small ml-2">Read More</a>
                                @endif
                            </p>
                            
                        </div>
                    </div>
                @endforeach
        </div>
    </div>
</section
@else
                
@endif