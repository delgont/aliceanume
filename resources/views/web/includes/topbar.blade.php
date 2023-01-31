<div class="top-bar text-white-50 row gx-0 align-items-center d-none d-lg-flex" style="background: linear-gradient(rgba(0, 29, 35, .5), rgba(0, 29, 35, .5));">
    <div class="col-lg-5 px-5 text-start text-white">
        <small><i class="fa fa-map-marker-alt me-2"></i>{{ option('aamsnm_address', config('web.options.aamsnm_address')) }}</small>
        <small class="ms-4"><i class="fa fa-envelope me-2"></i>{{ option('aamsnm_email', config('web.options.aamsnm_email')) }}</small>
    </div>
    <div class="col-lg-5 px-5 text-">
        @if ($topBarMenuItems)
            @if (count($topBarMenuItems) > 0)
                @foreach ($topBarMenuItems as $menuItem)
                    <small><a class="text-white ms-3" href="{{ $menuItem->menuable->url }}">{{ $menuItem->label }}</a></small>
                @endforeach
            @else
                
            @endif
        @else
            
        @endif
        <small><a class="text-white ms-3" href="{{ route('anume.web.events') }}">{{ 'Upcoming Events' }}</a></small>
    </div>
    <div class="col-lg-2 px-5 text-end">
        <small class="me-2">Follow Us:</small>
        <a class="text-white-50 ms" href="{{ option('aamsnm_facebook', config('web.aamsnm_facebook')) }}" target="_blank"><i class="fab fa-facebook-f"></i></a>
        <a class="text-white-50 ms-3" href=""><i class="fab fa-twitter"></i></a>
        <a class="text-white-50 ms-3 d-none" href=""><i class="fab fa-linkedin-in"></i></a>
        <a class="text-white-50 ms-3 d-none" href=""><i class="fab fa-instagram"></i></a>
    </div>
</div>