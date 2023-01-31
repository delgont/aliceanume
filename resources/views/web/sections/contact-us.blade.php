<section class="py-5 contact-us">
    <div class="container">
        <div class="row">

            <div class="col-12 col-sm-12 col-md-12 col-lg-6 mb-4">
                @includeIf('web.widgets.forms.contact-form')
            </div>

            <div class="col-md-12 col-lg-6 mb-4">
                @includeIf('web.widgets.map')
                
            </div>
           

            <div class="col-12 col-sm-12 col-md-5 col-lg-3 col-xl-3 sticky-lg mb-4">
                <div class="row">
                    <div class="col-lg-12 py-3">
                        <h4 class="mb-2">
                            Get in touch
                        </h4>
                        <div class="pl-1">
                            <p class="">
                                We'd love to hear from you. <hr /> Check out our  <a href="" class="text-primary">FAQs pages</a> for answers to the most common questions.
                            </p>
                            <hr />

                            <h5 class="mb-2">Contact Info</h5>
                            <p class="mb-1 text-bold"><i class="fa fa-map-marker p-1 text-primary"></i><small>{{ option('aamsnm_address', 'P.O Box 07 Pallisa, Uganda') }}</small>
                            <br />
                            <i class="fa fa-phone text-primary p-1" style="font-size: 20px"></i> <small>{{ option('aamsnm_phone', '+256 78251 5211') }} </small>
                            <br /> 
                            <i class="fa fa-envelope text-primary p-1" style="font-size: 15px"></i> <small>{{ option('aamsnm_email', 'anume.nursing@ymail.com') }}</small></p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>