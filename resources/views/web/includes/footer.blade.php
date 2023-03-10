<footer>
    <div class="container-fluid bg-dark text-light footer">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Address</h5>
                    <p class="mb-2 small text-light"><i class="fa fa-map-marker-alt me-3"></i>{{ option('aamsnm_address', config('web.options.aamsnm_address')) }}</p>
                    <p class="mb-2 small"><i class="fa fa-phone-alt me-3"></i>{{ option('aamsnm_phone', config('web.options.aamsnm_phone')) }}</p>
                    <p class="mb-2 small"><i class="fa fa-envelope me-3"></i>{{ option('aamsnm_email', config('web.options.aamsnm_email')) }}</p>
                    <div class="d-flex pt-2 social-links">
                        <a class="btn btn-outline-light  rounded-circle d-none" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light rounded-circle" href="{{ option('aamsnm_facebook', config('web.options.aamsnm_facebook')) }}" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light rounded-circle d-none" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light rounded-circle d-none" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 d-none">
                    <h5 class="text-light mb-4">Services</h5>
                    <a class="btn btn-link" href="">Cardiology</a>
                    <a class="btn btn-link" href="">Pulmonary</a>
                    <a class="btn btn-link" href="">Neurology</a>
                    <a class="btn btn-link" href="">Orthopedics</a>
                    <a class="btn btn-link" href="">Laboratory</a>
                </div>
                @if ($footerMenuItems)
                    <div class="col-lg-3 col-md-6">
                    @if (count($footerMenuItems))
                        <h5 class="text-light mb-4">Quick Links</h5>
                        @foreach ($footerMenuItems as $menuItem)
                            <a class="btn btn-link" href="{{ $menuItem->menuable->url }}">{{ $menuItem->label }}</a>
                        @endforeach
                    @endif
                    </div>
                @else
                    
                @endif
                <div class="col-lg-3 col-md-6 newsletter">
                    <h5 class="text-light mb-4">Newsletter</h5>
                    <p class="small">{{ option('news_signup_message', 'Subscribe to ournewsletter and stay updated') }}</p>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                        <button type="button" class="btn btn-primary text-light py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">Alice Anume</a>, All Rights Reserved.
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <!--/*** This template is free as long as you keep the footer author???s credit link/attribution link/backlink. If you'd like to use the template without the footer author???s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Developed, Designed & Maintained By <a class="border-bottom" href="https://github.com/delgont">Delgont</a>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>