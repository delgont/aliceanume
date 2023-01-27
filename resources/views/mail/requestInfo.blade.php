@component('mail::layout')
@slot('header')
@endslot

## `Info Request`

`{{ $data['message'] }}`
<hr />
`{{ $data['names'] }}` <br />
<b>Address:</b> `{{ $data['address'] }}.`<br />
<b>Email:</b>   `{{ $data['email'] }}.`<br />
<b>Phone:</b>   `{{ $data['phone'] }}.` <br />

@slot('footer')
    @component('mail::footer')
        <p> &copy; {{ date('Y') }} <b>AAMSNM</b></p>
    @endcomponent
@endslot
@endcomponent