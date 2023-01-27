@if (count($slides))
<div class="container-fluid p-0 home-slider">
    <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            @foreach ($slides as $slide)
            <div class="carousel-item @if ($loop->first) {{ 'active' }} @endif">
                <img class="w-100" src="{{ asset( $slide->post_featured_image ?? option('aamsnm_header_image') ) }}" alt="Image" class="" />
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-10 content p-3 rounded">
                                <h2 class="display-6 text-white mb-2 animated slideInDown">{{ str_limit($slide->post_title , 100)}}</h2>
                                <p class="text-white mb-5 animated slideInDown small">{{str_limit( $slide->extract_text, 150) }}</p>
                                @if ($slide->slug)
                                <a class="btn btn-primary py-2 px-3 animated slideInDown action-btn font-weight-bold text-white" href="{{ ($slide->slug) ? url($slide->slug) : '#' }}">
                                    Learn More
                                    <div class="d-inline-flex ms-2">
                                        <i class="fa fa-arrow-right"></i>
                                    </div>
                                </a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            
        </div>
        <button class="carousel-control-prev text-white font-weight-bold" type="button" data-bs-target="#header-carousel"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next text-white font-weight-bold" type="button" data-bs-target="#header-carousel"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
@else
@includeIf('web.includes.home-header', [
        'header' => '',
        'headerImage' => 'img/header/header.jpg',
        'slug' => ''
        ])
@endif