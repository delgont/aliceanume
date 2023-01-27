@extends('web.layouts.master')

@section('title', $post->post_title)
@section('description', $post->extract_text)

@section('content')
@includeIf('web.includes.header')
<section class="default-page py-3">
    <div class="container">
        <div class="row">

            <div class="col-lg-8">
                <div class="row">

                    <div class="post col-lg-12">
                        <div class="row">
                            <div class="col-lg-12">
                                @if ($post->post_featured_image)
                                    <div class="set-bg rounded post-featured-image" data-setbg="{{ asset($post->post_featured_image) }}"></div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <dic class="col-lg-12 py-3">
                        <h3>{{ $post->post_title }}</h3>
                        <div class="post-body" id="postBody">
                            {!! $post->post_content !!}
                        </div>
                    </dic>

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

@includeIf('web.sections.posts')


@endsection
