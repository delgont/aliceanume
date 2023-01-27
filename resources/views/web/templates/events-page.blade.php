@extends('web.layouts.master')

@section('title', 'Upcoming Events')

@section('content')
    @includeIf('web.includes.header', [
        'headerTitle' => 'Our Upcoming Events',
        'headerImage' => option('aamsnm_events_header_image', config('events.option.aamsnm_events_header_image', 'img/event.jpg')),
        'slug' => option( 'aamsnm_events_route_prefix', config( 'events.options.aamsnm_events_route_prefix', 'upcoming-events' ))
        ])
    <!-- Events Section -->
    <section class="events py-5 bg-light">
        <div class="container">
            <div class="row">
                @if (isset($events) && count($events) > 0)
                    @foreach ($events as $event)
                    <div class="col-12 col-sm-6 col-md-6 col-lg-4 my-2 event-item">
                        <div class="row">
                            <div class="col-10 col-sm-9 col-md-9 col-lg-10 order-2">
                                <div class="set-bg rounded post-featured-image event-fatured-image shadow-md" data-setbg="{{ asset($event->featured_image ?? 'img/event.jpg') }}"></div>
                                <div class="p-2 event-text">
                                    <h5 class="event-title mb-0">{{ str_limit( $event->title , 45 ) }}</h5>
                                    <p class="small mb-0">
                                        {{ $event->extract_text }}
                                    </p>
                                    <a href="{{ route('anume.web.events.show', ['slug' => $event->slug ]) }}" class="small text-primary btn btn-sm btn-white">Read More</a>
                                </div>
                            </div>
                            <div class="col-2 col-sm-3 col-md-3 col-lg-2 order-1 date">
                                <span class="rounded-circle">
                                    <h3 class="m-0">34</h3>
                                </span>
                                <span class="rounded-circle">DEC</span>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="col-lg-12 py-2">
                        {{ $events->links() }}
                    </div>
                @else
                @for ($i = 0; $i < 3; $i++)
                <div class="col-12 col-sm-6 col-md-6 col-lg-4 my-1 event-item">
                    <div class="row">
                        <div class="col-10 col-sm-9 col-md-9 col-lg-10 order-2">
                            <div class="set-bg rounded event-featured-image post-featured-image shadow-md" data-setbg=""></div>
                            <div class="p-2">
                                <div class="bg-info p-2 w-100 rounded m-1"></div>
                                <div class="bg-info p-1 w-100 rounded"></div>
                            </div>
                        </div>
                        <div class="col-2 col-sm-3 col-md-3 col-lg-2 order-1 date">
                            <span class="rounded-circle">
                                <h3 class="m-0"></h3>
                            </span>
                            <span class="rounded-circle"></span>
                        </div>
                    </div>
                </div>
                @endfor
                @endif
            </div>
        </div>
    </section>
@endsection
