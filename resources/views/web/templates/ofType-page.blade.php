@extends('web.layouts.master')

@section('title', 'Home')

@section('content')
    @includeIf('web.includes.header', ['header' => 'Of Type Page'])

    <section class="container-xxl py-5">
        <div class="container border-bottom pb-4">
            <div class="row">
                <div class="col-lg-7">
                    <span class="badge bg-primary px-2 py-1 shadow-1-strong mb-3 py-2">News of the day</span>
                    <h4><strong>Facilis consequatur eligendi</strong></h4>
                    <div class="bg-image hover-overlay ripple shadow-2-strong rounded-5 py-3" data-mdb-ripple-color="light">
                        <img src="https://mdbcdn.b-cdn.net/img/new/slides/080.webp" class="img-fluid" />
                        <a href="#!">
                          <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                        </a>
                    </div>
                    <div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit quasi nulla voluptatum veniam dolor asperiores aliquam eligendi! Ipsam deleniti facere voluptate! Sint fugiat fugit aliquam rem explicabo in delectus mollitia!</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit quasi nulla voluptatum veniam dolor asperiores aliquam eligendi! Ipsam deleniti facere voluptate! Sint fugiat fugit aliquam rem explicabo in delectus mollitia!</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit quasi nulla voluptatum veniam dolor asperiores aliquam eligendi! Ipsam deleniti facere voluptate! Sint fugiat fugit aliquam rem explicabo in delectus mollitia!</p>
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-1">

                </div>
            </div>
        </div>
    </section>
    <section class="py-5 container-xxl">
        <div class="container">
            <div class="row gx-lg-5">
                
                <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                  <div>
                    <!-- Featured image -->
                    <div class="bg-image hover-overlay shadow-1-strong ripple rounded-5 mb-4"
                      data-mdb-ripple-color="light">
                      <img src="https://mdbcdn.b-cdn.net/img/new/fluid/city/113.webp" class="img-fluid" />
                      <a href="#!">
                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                      </a>
                    </div>
          
                    <!-- Article data -->
                    <div class="row mb-3">
                      <div class="col-6">
                        <a href="" class="text-info">
                          <i class="fas fa-plane"></i>
                          Travels
                        </a>
                      </div>
          
                      <div class="col-6 text-end">
                        <u> 15.07.2020</u>
                      </div>
                    </div>
          
                    <!-- Article title and description -->
                    <a href="" class="text-dark">
                      <h5>This is title of the news</h5>
          
                      <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, iste aliquid. Sed
                        id nihil magni, sint vero provident esse numquam perferendis ducimus dicta
                        adipisci iusto nam temporibus modi animi laboriosam?
                      </p>
                    </a>
                    <hr />
                  </div>
                  <!-- News block -->
                </div>
          
                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                  <!-- News block -->
                  <div>
                    <!-- Featured image -->
                    <div class="bg-image hover-overlay shadow-1-strong rounded-5 ripple mb-4"
                      data-mdb-ripple-color="light">
                      <img src="https://mdbcdn.b-cdn.net/img/new/fluid/city/011.webp" class="img-fluid"
                        alt="Brooklyn Bridge" />
                      <a href="#!">
                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                      </a>
                    </div>
          
                    <!-- Article data -->
                    <div class="row mb-3">
                      <div class="col-6">
                        <a href="" class="text-danger">
                          <i class="fas fa-chart-pie"></i>
                          Business
                        </a>
                      </div>
          
                      <div class="col-6 text-end">
                        <u> 15.07.2020</u>
                      </div>
                    </div>
          
                    <!-- Article title and description -->
                    <a href="" class="text-dark">
                      <h5>This is title of the news</h5>
          
                      <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, iste aliquid. Sed
                        id nihil magni, sint vero provident esse numquam perferendis ducimus dicta
                        adipisci iusto nam temporibus modi animi laboriosam?
                      </p>
                    </a>
          
                    <hr />
                  </div>
                  <!-- News block -->
                </div>
          
                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                  <!-- News block -->
                  <div>
                    <!-- Featured image -->
                    <div class="bg-image hover-overlay shadow-1-strong rounded-5 ripple mb-4"
                      data-mdb-ripple-color="light">
                      <img src="https://mdbcdn.b-cdn.net/img/new/fluid/city/018.webp" class="img-fluid"
                        alt="Golden Gate National Recreation Area" />
                      <a href="#!">
                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                      </a>
                    </div>
          
                    <!-- Article data -->
                    <div class="row mb-3">
                      <div class="col-6">
                        <a href="" class="text-warning">
                          <i class="fas fa-code"></i>
                          Technology
                        </a>
                      </div>
          
                      <div class="col-6 text-end">
                        <u> 15.07.2020</u>
                      </div>
                    </div>
          
                    <!-- Article title and description -->
                    <a href="" class="text-dark">
                      <h5>This is title of the news</h5>
          
                      <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, iste aliquid. Sed
                        id nihil magni, sint vero provident esse numquam perferendis ducimus dicta
                        adipisci iusto nam temporibus modi animi laboriosam?
                      </p>
                    </a>
          
                  </div>
                  <!-- News block -->
                </div>
              </div>
        </div>
    </section>
@endsection