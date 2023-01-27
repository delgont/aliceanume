@extends('web.layouts.master')

@section('title', $post->post_title)
@section('description', $post->extract_text)

@section('content')

@includeIf('web.includes.header', [
    'headerTitle' => $post->post_title,
    'headerImage' => option('aamsnm_events_header_image', config('events.option.aamsnm_events_header_image', 'img/event.jpg')),
    'slug' => $post->slug
])

<section class="default-page py-3">
    <div class="container">
        <div class="row">

            <div class="col-lg-8 post">
                <div class="row">

                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-12">
                                @if ($post->post_featured_image)
                                    <div class="set-bg rounded post-featured-image" data-setbg="{{ asset($post->post_featured_image) }}"></div>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 py-3">
                        <h3>{{ $post->post_title }}</h3>
                        <div class="post-body" id="postBody">
                            {!! $post->post_content !!}
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-lg-3 offset-lg-1 sticky-lg right-column widgets">
                <div class="row">

                    @if ($post->menu)
                        @if (count($post->menu->menuitems))
                        <div class="widget col-lg-12">
                            <h4 class="widget-title mb-1 text-capitalize">{{ $post->menu->name }}</h4>
                            <ul class="p-1">
                                @foreach ($post->menu->menuitems as $menuitem)
                                    <li><a href="{{ url(($menuitem->menuable->slug) ?? '/') }}">{{ $menuitem->label }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                    @endif

                    @includeIf('web.widgets.advert')

                </div>
            </div>

        </div>
    </div>
</section>
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
                        <div class="set-bg rounded post-featured-image pb-3" data-setbg="{{ ($post->post_featured_image) ? asset($post->post_featured_image) : asset('img/featured/featured.jpg') }}"></div>
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
</section>
@else
                
@endif
@endsection
