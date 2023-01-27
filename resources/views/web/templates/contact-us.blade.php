@extends('web.layouts.master')

@section('title', 'Contact Us')
@section('description', 'Contact Us')

@section('content')

@includeIf('web.includes.header', [
    'headerTitle' => 'Contact Us',
    'headerImage' => option('aamsnm_events_header_image', config('events.option.aamsnm_events_header_image', 'img/event.jpg')),
    'slug' => 'contact us'
])

@includeIf('web.sections.contact-us')

@endsection
