@component('mail::layout')
@slot('header')
@endslot

{{ $message }}


@slot('footer')
    @component('mail::footer')
        <p> &copy; {{ date('Y') }} <b>AAMSNM</b></p>
    @endcomponent
@endslot
@endcomponent