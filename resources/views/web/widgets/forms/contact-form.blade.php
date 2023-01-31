<div class="px-2 py-3">
    <form action="{{ route('anume.web.contact.send') }}" method="POST" class="row" id="contactForm" class="contact-form">
        @csrf
        <div class="col-md-12 col-lg-12">
            <h2 class="mb-4">If You Have Any Query, Please Contact Us</h2>
            <p class="mb-">
                Feel free to send as your message, Fill out the form below.
            </p>
            <hr class="mb-3" />

        </div>
        <div class="col-md-6 col-lg-6 mb-3">
            <div class="form-floating">
                <input type="text" name="name" class="form-control" placeholder="*Your Name" id="name" />
                <label for="name">Your Name</label>
            </div>
            <small class="text-danger error-name">{{ $errors->first('name') }}</small>
        </div>
        <div class="col-md-6 col-lg-6 mb-3">
            <div class="form-floating">
                <input type="text" name="email" class="form-control" placeholder="*Your email address" id="email" />
                <label for="email">Email Address</label>
            </div>
            <small class="text-danger error-email">{{ $errors->first('email') }}</small>
        </div>
        <div class="col-lg-12 mb-3">
            <input type="text" name="subject" class="form-control" placeholder="Subject" id="subject" />
            <small class="text-danger error-subject">{{ $errors->first('subject') }}</small>
    
        </div>
        <div class="col-lg-12 mb-3">
            <textarea name="message" id="message" placeholder="*Your message here" id="message" rows="5" class="form-control"></textarea>
            <small class="text-danger error-message">{{ $errors->first('message') }}</small>
    
        </div>
        <div class="col-lg-12 mb-3">
            <button type="submit" class="btn btn-primary w-100 py-3">Send Message</button>
        </div>

        <div class="col-lg-12">
            <div class="alert alert-primary alert-dismissible fade {{ (session('message')) ? 'show' : '' }}" id="contactAlert" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
                <strong>Good!</strong> <span class="message-holder">{{ session('message') }}</span>
            </div>
        </div>

    </form>
</div>