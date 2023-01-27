<section class="container-xxl py-5 team-section">
    <div class="container">
        <div class="text-lg-left mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 100%;">
            <h3 class="display-7 mb-5">Meet Our Team</h3>
        </div>
        <div class="row g-4">
            @if (count($team))
                @foreach ($team as $member)
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item position-relative rounded overflow-hidden">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ asset('img/team/team.jpg') }}" alt="">
                        </div>
                        <div class="team-text bg-light text-center p-4">
                            <h5>{{ $member->post_title }}</h5>
                            <p class="text-primary">Designation</p>
                            <div class="team-social text-center">
                                <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            @endif
        </div>
    </div>
</section>