@extends('web.layouts.master')

@section('title', $post->post_title)
@section('description', $post->extract_text)

@section('content')
@includeIf('web.includes.header')
<section class="pt-5 team-member-page">
    <div class="container">
        <div class="row">

            <div class="col-lg-8">
                <div class="row">

                    <div class="col-lg-4 mb-5">
                        <img src="{{ asset($post->post_featured_image ?? 'img/featured/featured.jpg') }}" alt="" class="img-fluid rounded-circle">
                    </div>
                    <div class="col-lg-8 py-5">
                        <h2 class="pb-2">{{ $post->post_title }}</h2>
                    </div>
                    @if ($post->post_content)
                    <div class="page col-lg-12 pb-5 mb-5 px-lg-4">
                        <div class="page-content post-body" id="postBody">
                            {!! $post->post_content !!}
                        </div>
                    </div>
                    @else
                    <div class="col-lg-12 mb-5 pb-5"></div>
                    @endif

                    @if (!is_null($posts))
                        @if (count($posts))
                            @foreach ($posts as $member)
                            <div class="col-12 col-sm-6 col-lg-4 col-md-4 wow fadeInUp team mb-5 bg-white" data-wow-delay="0.7s">
                                <div class="team-item rounded overflow-hidden">
                                    <div class="overflow-hidden">
                                        <a href="{{ ($member->slug) ? url($member->slug) : '#' }}">
                                            <img class="img-fluid" src="{{ asset($member->post_featured_image ?? 'img/team/team.jpg') }}" alt="">
                                        </a>
                                    </div>
                                    <div class="team-text bg-light text-center p-1">
                                        <h5 class="py-3">{{ str_limit($member->post_title, 17) }}</h5>
                                        <p class="text-primary">Designation</p>
                                        <div class="team-social text-center">
                                            <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                            <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                            <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        @endif
                    @endif
                    
                </div>
            </div>

            <div class="col-lg-3 offset-lg-1 sticky-lg right-column">
                <div class="row">
                    <div class="page-menu-items col-lg-12 py-3 d-none">
                        <h5>Related Links</h5>
                        <ul class="list-group list-group-flush">
                            <a class="list-group-item list-group-item-action" href="#">Page Menu Item one</a>
                        </ul>
                    </div>
                    @includeIf('web.widgets.advert')
                </div>
            </div>
            
        </div>
    </div>
</section>
@endsection
