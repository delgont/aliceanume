@extends('web.layouts.master')

@section('title', $post->post_title)
@section('description', $post->extract_text)

@section('content')
    @includeIf('web.includes.header', [
        'header' => str_limit($post->post_title, 30),
        'headerImage' => $post->post_featured_image,
        'slug' => $post->slug
        ])
    <section class="pt-5 default-page">
        <div class="container">
            <div class="row">

                <div class="col-lg-8">
                    <div class="row">

                        @if ($post->post_content)
                        <div class="page col-lg-12 pb-5">
                            <h3 class="pb-2">{{ $post->post_title }}</h3>
                            <div class="page-content post-body" id="postBody">
                                {!! $post->post_content !!}
                            </div>
                        </div>
                        @endif

                        <div class="col-lg-12 page-posts">
                            <div class="row">
                                @if (!is_null($postsOfType) && count($postsOfType) > 0)
                                    @foreach ($postsOfType as $postOfType)
                                    <div class="col-12 col-sm-6 col-md-6 col-lg-6 post-item mb-5">
                                        <div class="set-bg rounded post-featured-image" data-setbg="{{ ($postOfType->post_featured_image) ? asset($postOfType->post_featured_image) : asset('img/featured/featured.jpg') }}"></div>
                                        <div class="post-item-content py-3 px-lg-2">
                                            <h6 class="display-7 mb-1 text-capitalize">{{ str_limit($postOfType->post_title, 50) }}</h6>
                                            @if (count($postOfType->categories))
                                                @foreach ($postOfType->categories as $category)
                                                <small class="text-dark"><i class="fa fa-tag text-primary"></i> {{ $category->name }}</small>
                                                @endforeach
                                            @endif
                                            <p class="mb-1">
                                                {{ str_limit($postOfType->extract_text, 150) }}
                                                @if ($postOfType->slug)
                                                    <a href="{{ url($postOfType->slug) }}" class="text-primary small ml-2">Read More</a>
                                                @endif
                                            </p>
                                            
                                        </div>
                                    </div>
                                    @endforeach
                                @else
                                    @if ($post->posts && count($post->posts) >0)
                                        @foreach ($post->posts as $post)
                                        <div class="col-12 col-sm-6 col-md-6 col-lg-6 post-item mb-5">
                                            <div class="set-bg rounded post-featured-image" data-setbg="{{ ($post->post_featured_image) ? asset($post->post_featured_image) : asset('img/featured/featured.jpg') }}"></div>
                                            <div class="post-item-content py-3 px-lg-2">
                                                <h5 class="display-7 mb-1 text-capitalize">{{ $post->post_title }}</h5>
                                                @if (count($post->categories))
                                                    @foreach ($post->categories as $category)
                                                    <small class="text-dark"><i class="fa fa-tag text-primary"></i> {{ $category->name }}</small>
                                                    @endforeach
                                                @endif
                                                <p class="mb-1">
                                                    {{ str_limit($post->extract_text, 150) }}
                                                    @if ($post->slug)
                                                        <a href="{{ url($post->slug) }}" class="text-primary">Read More</a>
                                                    @endif
                                                </p>
                                                
                                            </div>
                                        </div>
                                        @endforeach
                                    @endif
                                @endif
                                
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 offset-lg-1 sticky-lg right-column">
                    <div class="row">
                        @include('web.widgets.page-menu-items', ['post' => $post])
                        @includeIf('web.widgets.advert')
                    </div>
                </div>
                
            </div>
        </div>
    </section>


@endsection
