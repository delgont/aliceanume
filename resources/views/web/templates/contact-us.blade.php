@extends('web.layouts.master')

@section('title', 'Contact Us')
@section('description', 'Contact Us')

@section('content')

@includeIf('web.includes.header', [
    'headerTitle' => 'Contact Us',
    'headerImage' => 'img/header/header-2.jpg',
    'slug' => 'contact us'
])

@includeIf('web.sections.contact-us')

@endsection
