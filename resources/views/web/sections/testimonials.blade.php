@if (count($testimonials))
<section class="testimonials py-5">
    <div class="container-fluid">
        <div id="testimonials-carousel" class="carousel slide" data-bs-ride="carousel">

            <div class="carousel-inner">
                @foreach ($testimonials as $testimonial)
                <div class="carousel-item {{ ($loop->first) ? 'active' : '' }} align-items-center">
                    <div class="image-wrapper mb-3">
                        <img class="img-fluid" src="{{ asset( $testimonial->post_featured_image ?? option('aamsnm_testimonial_image') ) }}" alt="alternative">
                    </div>
                    <div class="text-wrapper">
                        <div class="testimonial-text">{!! $testimonial->post_content !!}</div>
                        <div class="testimonial-author">{{ $testimonial->post_title }}</div>
                    </div>
                </div>
                @endforeach
            </div>

            <button class="carousel-control-prev text-white font-weight-bold" type="button" data-bs-target="#testimonials-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            
            <button class="carousel-control-next text-white font-weight-bold" type="button" data-bs-target="#testimonials-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>

        </div>
    </div>
</section>
@endif