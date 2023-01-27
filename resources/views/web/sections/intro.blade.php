<section class="container-xxl py-5 intro bg-white">
    <div class="container">
        <div class="row">

            <div class="col-md-6 order-2 col-lg-6 ">
                <img src="{{ (option('aamsnm_intro_media')) ? asset(option('aamsnm_intro_media')) : asset(option('aamsnm_header_image')) }}" alt="" class="img-fluid rounded shadow-lg" />
            </div>

            <div class="col-md-6 col-lg-6 wow fadeInUp py-lg-4 py-5" data-wow-delay="0.5s">
                <div class="h-100">
                    <div class="intro-content py-lg-4 post-body">
                        {!! option('aamsnm_intro') !!}
                    </div>
                    <a class="btn btn-primary d-none" href="">
                        Learn More
                        <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                            <i class="fa fa-arrow-right"></i>
                        </div>
                    </a>
                    <a class="btn btn-outline-primary d-none" href="">
                        Contact Us
                        <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                            <i class="fa fa-arrow-right"></i>
                        </div>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>
