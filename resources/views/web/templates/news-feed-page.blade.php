@extends('web.layouts.master')

@section('title', $post->post_title)
@section('description', $post->extract_text)

@section('content')
@includeIf('web.includes.header')
<!-- News Feed Page Section  -->
<section class="news-feed-page bg-white py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 news-list">
                @if (count($posts) > 0)
                    <div class="row">
                        @foreach ($posts as $post)
                            @if ($loop->first)
                            <div class="col-lg-12">
                                <div class="news-item pb-4 first">
                                    <div class="post-featured-image news-featured-image set-bg rounded" data-setbg="{{ asset($post->post_featured_image) }}"></div>
                                    <div class="news-content py-3 px-2">
                                        <h5><a href="">{{ str_limit($post->post_title, 200) }}</a></h5>
                                        <div class="news-meta">
                                            <small><i class="fa fa-calendar"></i> {{ $post->created_at }}</small>
                                            @if ($post->author)
                                            <small><i class="fa fa-user"></i> {{ $post->author->name }}</small>
                                            @endif
                                        </div>
                                        <p class="small">{{ $post->extract_text }} <a href="{{ ($post->slug) ? url($post->slug) : '#' }}" class="text-primary small ml-2">Read More</a></p>
                                    </div>
                                </div>
                            </div>
                            @else
                            <div class="col-lg-6">
                                <div class="news-item pb-4">
                                    <div class="post-featured-image news-featured-image set-bg rounded" data-setbg="{{ asset($post->post_featured_image) }}"></div>
                                    <div class="news-content py-3 px-2">
                                        <h6 class="display-7 mb-1 text-capitalize">{{ str_limit($post->post_title, 90) }}</h6>
                                        <div class="news-meta">
                                            <small><i class="fa fa-calendar"></i> {{ $post->created_at }}</small>
                                            @if ($post->author)
                                            <small><i class="fa fa-user"></i> {{ $post->author->name }}</small>
                                            @endif
                                        </div>
                                        <p class="small">{{ str_limit($post->extract_text, 150) }} <a href="{{ ($post->slug) ? url($post->slug) : '#' }}" class="text-primary small ml-2">Read More</a></p>
                                    </div>
                                </div>
                            </div>
                            @endif
                        @endforeach
                    </div>
                    <div class="news-pageination">
                        {{ $posts->links() }}
                    </div>
                @endif
            </div>
            <!-- sidebar -->
            <div class="col-sm-8 col-md-5 col-lg-4 col-xl-3 offset-xl-1 offset-0 pl-xl-0 sticky-lg right-column widgets">
               <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-12">
                                <h5>News Archives</h5>
                            </div>
                            @for ($i = 1; $i < 4; $i++)
                            <div class="col-lg-12 news-item">
                                <div class="row py-2">
                                    <div class="col-lg-4 set-bg post-featured-image news-featured-image rounded" data-setbg="{{ 'img/blog/'.$i.'.jpg' }}"></div>
                                    <div class="col-lg-8">
                                        <p class="small">The news headline hello there</p>
                                        
                                    </div>
                                </div>
                            </div>
                            @endfor
                        </div>
                    </div>
               </div>
            </div>
        </div>
    </div>
</section>
<!-- Blog page section end -->
@endsection
