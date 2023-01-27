@extends('web.layouts.master')

@section('title', 'Home')

@section('content')
    @includeIf('web.includes.home-slider', ['some' => 'data'])
    @includeIf('web.sections.intro', ['some' => 'data'])
    @includeIf('web.sections.courses', ['some' => 'data'])
    @includeIf('web.sections.news', ['some' => 'data'])
    @includeIf('web.sections.events', ['some' => 'data'])
    @includeIf('web.sections.testimonials', ['some' => 'data'])
    
@endsection
