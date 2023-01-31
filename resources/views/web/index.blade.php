@extends('web.layouts.master')

@section('title', 'Home')

@section('content')
    @includeIf('web.includes.home-slider', ['some' => 'data'])

    @if (option('aamsnm_show_intro_section_on_home_page', true))
        @includeIf('web.sections.intro', ['some' => 'data'])
    @else
        
    @endif

    @includeIf('web.sections.courses', ['some' => 'data'])
    @includeIf('web.sections.news', ['some' => 'data'])
    @includeIf('web.sections.events', ['some' => 'data'])
    @includeIf('web.sections.testimonials', ['some' => 'data'])
    
@endsection
