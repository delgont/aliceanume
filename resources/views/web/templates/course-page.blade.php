@extends('web.layouts.master')

@section('title', $post->post_title)
@section('description', $post->extract_text)

@section('content')

@includeIf('web.includes.header', [
    'headerTitle' => 'Academic Program - '.str_limit($post->post_title, 25),
    'headerImage' => $post->post_featured_image ?? option('aamsnm_events_header_image', config('events.option.aamsnm_events_header_image', 'img/event.jpg')),
    'slug' => $post->slug
])

<section id="coursePage" class="course-page py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 course">
                <div class="text-container">
                    <h2>{{ $post->post_title }}</h2>
                    <div>
                        {!! $post->post_content !!}
                    </div>
                </div> <!-- end of text-container -->
            </div> <!-- end of col -->
            <div class="col-lg-6">
                <div class="image-container">
                    <img class="img-fluid shadow-sm rounded border border-primary" src="{{ asset($post->post_featured_image ?? 'img/details.png') }}" alt="">
                </div> 
            </div> 
        </div> 
    </div> 
</section>

@includeIf('web.sections.posts')

@endsection
