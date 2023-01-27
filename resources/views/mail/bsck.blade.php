@component('mail::layout')
@slot('header')
    @component('mail::header', ['url' => 'heleo'])
        <img src="{{ asset('storage/media/logo.png') }}" alt="hello">
    @endcomponent
@endslot

# {{ $contact->name }}

{{ $message }}


@slot('footer')
    @component('mail::footer')
        <p> &copy; {{ date('Y') }} PACOSS</p>
    @endcomponent
@endslot
@endcomponent