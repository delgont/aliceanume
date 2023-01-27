@component('mail::layout')
@slot('header')
@endslot

## `Contact Us Message`

`{{ $data['message'] }}`
<hr />
`{{ $data['names'] }}` <br />
<b>Email:</b>   `{{ $data['email'] }}.`<br />

@slot('footer')
    @component('mail::footer')
        <p> &copy; {{ date('Y') }} <b>AAMSNM</b></p>
    @endcomponent
@endslot
@endcomponent