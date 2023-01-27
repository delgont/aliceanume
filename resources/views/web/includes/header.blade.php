  <div class="container-fluid page-header wow fadeIn" data-wow-delay="0.1s" style="background-image: linear-gradient(rgba(0, 29, 35, .5), rgba(0, 29, 35, .5)), url({{ ($headerImage) ? asset($headerImage) : asset(option('aamsnm_header_image')) }})">
    <div class="container text-center">
        <h1 class="display-6 text-white text-capitalize animated slideInDown mb-4">
            @isset($headerTitle)
                {{$headerTitle}}
            @endisset
        </h1>
            
    </div>
</div>

<!-- Breadcrumbs -->
@isset ($slug)
    @php
        $breadcrumb = explode('/', $slug)
    @endphp
    <div class="ex-basic-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumbs font-weight-bold text-capitalize">
                        <a href="{{ url($slug) }}">Home</a>
                        @foreach ($breadcrumb as $key => $value)
                            <i class="fa fa-angle-double-right text-primary"></i><span>{{ str_limit(str_replace('-', ' ', $value), 40) }}</span>
                        @endforeach
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
@endisset
<!-- end of breadcrumbs -->