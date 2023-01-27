<section class="courses py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 py-lg-3">
                <h3 class="font-weight-bolder">Academic Programs</h3>
            </div>
            @if (count($courses))
                @foreach ($courses as $course)
                <div class="col-md-6 col-lg-4 course-item my-lg-3 my-1">
                    <div class="inner-item p-lg-2 p-2">
                        <a href="{{ url(($course->slug) ?? '/') }}">
                            <h6 class="mb-0 font-weight-bold d-inline mr-5">
                                <i class="fas fa-arrow-right px-2"></i>{{ str_limit($course->post_title, 33) }}
                            </h6>
                        </a>
                    </div>
                </div>
                @endforeach
            @else
                
            @endif
        </div>
    </div>
</section>