@extends('web.layouts.master')

@section('title', $post->post_title)
@section('description', $post->extract_text)

@section('content')

@includeIf('web.includes.header', [
    'headerTitle' => ' ',
    'headerImage' => option('aamsnm_header_image', config('events.option.aamsnm_header_image', 'img/event.jpg')),
    'slug' => $post->slug
])

<section class="container-fluid overflow-hidden py-5 px-lg-0">
    <div class="container feature px-lg-0">
        <div class="row g-0 mx-lg-0">
            <div class="col-lg-6 feature-text py-5 wow fadeIn" data-wow-delay="0.1s">
                <div class="p-lg-4 ps-lg-0">
                    <p class="d-inline-block border rounded-pill py-1 px-4">Academic Program</p>
                    <h1 class="mb-4">{{ $post->post_title }}</h1>
                    <div>
                        {!! $post->post_content !!}
                    </div>
                </div>
            </div>
            <div class="col-lg-6 pe-lg-0 wow fadeIn" data-wow-delay="0.5s" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <img class="position-absolute img-fluid w-100 h-100" src="{{ asset($post->post_featured_image ?? 'img/details.png') }}" style="object-fit: cover;" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
@includeIf('web.sections.posts')

@endsection
