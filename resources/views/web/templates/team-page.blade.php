@extends('web.layouts.master')

@section('title', $post->post_title)

@section('content')
@includeIf('web.includes.header', [
    'headerTitle' => $post->post_title,
    'headerImage' => option('aamsnm_events_header_image', config('events.option.aamsnm_events_header_image', 'img/event.jpg')),
    'slug' => $post->slug
])
<section class="container-xxl py-5 team-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="text-capitalize">{{ $post->post_title }}</h3>
                        <div class="">
                            {!! $post->post_content !!}
                        </div>
                    </div>
                    @if (!is_null($posts))
                        @if (count($posts))
                            @foreach ($posts as $member)
                            <div class="col-12 col-sm-6 col-lg-4 col-md-4 wow fadeInUp team" data-wow-delay="0.7s">
                                <div class="team-item position-relative rounded overflow-hidden py-4">
                                    <div class="overflow-hidden">
                                        <a href="{{ ($member->slug) ? url($member->slug) : '#' }}">
                                            <img class="img-fluid" src="{{ asset($member->post_featured_image ?? 'img/team/team.jpg') }}" alt="">
                                        </a>
                                    </div>
                                    <div class="team-text bg-light text-center p-1">
                                        <h5 class="py-3">{{ str_limit($member->post_title, 17) }}</h5>
                                        <p class="text-primary font-weight-bold small">Designation</p>
                                        <div class="team-social text-center text-primary">
                                            <a class="btn btn-square" href=""><i class="fab fa-facebook"></i></a>
                                            <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                            <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <div class="col-lg-12 py-2">
                                {{ $posts->links() }}
                            </div>
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
