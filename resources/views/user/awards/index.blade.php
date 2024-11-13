@extends('user.layouts.app')

@section('content')
    <!-- ========================
       page title
    =========================== -->
    <section class="page-title page-title-layout1 bg-overlay bg-overlay-2 bg-parallax text-center">
        <div class="bg-img"><img src="{{ asset('assets/images/page-titles/4.jpg') }}" alt="background"></div>
        <div class="container">
          <div class="row">
            <div class="col-12">
              <h1 class="pagetitle__heading mb-0">Recognition </h1>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item"><a href="#">Company</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Awards & Recognition</li>
                </ol>
              </nav>
              <a href="#awards" class="scroll-down">
                <i class="icon-arrow-down"></i>
              </a>
            </div><!-- /.col-xl-6 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /.page-title -->

      <!-- ===========================
        awards
      ============================= -->
      <section id="awards" class="awards pb-70">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-8 offset-lg-2">
              <div class="heading-layout2 text-center mb-50">
                <h2 class="heading__subtitle">A Global Leader in Modular Construction Solutions</h2>
                <h3 class="heading__title">We Are Ready to Revolutionize the Construction Industry, All We Need Is to Build It Right!</h3>
              </div><!-- /.heading -->
            </div><!-- /.col-lg-8 -->
          </div><!-- /.row -->
          <div class="row">
            <!-- feature item #1 -->
            <div class="col-sm-12 col-md-4 col-lg-4">
              <div class="feature-item">
                {{-- <div class="feature__img">
                  <img src="{{ asset('assets/images/awards/1.jpg') }}" alt="certificate" class="img-fluid">
                </div><!-- /.feature-img --> --}}
                <div class="feature__body">
                  <h4 class="feature__title">Family Business Award</h4>
                  <p class="feature__desc">We believe that strong partnerships are the key to our success. We collaborate with trusted global suppliers to deliver the highest quality modular solutions.</p>
                </div><!-- /.feature-content -->
              </div><!-- /.feature-item -->
            </div><!-- /.col-lg-4 -->
            <!-- feature item #2 -->
            <div class="col-sm-12 col-md-4 col-lg-4">
              <div class="feature-item">
                {{-- <div class="feature__img">
                  <img src="{{ asset('assets/images/awards/2.jpg') }}" alt="certificate" class="img-fluid">
                </div><!-- /.feature-img --> --}}
                <div class="feature__body">
                  <h4 class="feature__title">Excellence in Exporting</h4>
                  <p class="feature__desc">We are committed to transparent communication and integrity in every interaction. Our goal is to provide practical solutions without excuses.</p>
                </div><!-- /.feature-content -->
              </div><!-- /.feature-item -->
            </div><!-- /.col-lg-4 -->
            <!-- feature item #3 -->
            <div class="col-sm-12 col-md-4 col-lg-4">
              <div class="feature-item">
                {{-- <div class="feature__img">
                  <img src="{{ asset('assets/images/awards/3.jpg') }}" alt="certificate" class="img-fluid">
                </div><!-- /.feature-img --> --}}
                <div class="feature__body">
                  <h4 class="feature__title">Top Leading Global Trade </h4>
                  <p class="feature__desc">As experts in modular construction, we monitor every step of the process to ensure that your project’s logistics and execution are handled smoothly and efficiently.</p>
                </div><!-- /.feature-content -->
              </div><!-- /.feature-item -->
            </div><!-- /.col-lg-4 -->
            <!-- feature item #4 -->
            <div class="col-sm-12 col-md-4 col-lg-4">
              <div class="feature-item">
                {{-- <div class="feature__img">
                  <img src="{{ asset('assets/images/awards/4.jpg') }}" alt="certificate" class="img-fluid">
                </div><!-- /.feature-img --> --}}
                <div class="feature__body">
                  <h4 class="feature__title">Sales Excellence Award</h4>
                  <p class="feature__desc">Our growth is driven by long-term partnerships, ensuring that our clients receive top-quality service and support throughout their modular construction journey.</p>
                </div><!-- /.feature-content -->
              </div><!-- /.feature-item -->
            </div><!-- /.col-lg-4 -->
            <!-- feature item #5 -->
            <div class="col-sm-12 col-md-4 col-lg-4">
              <div class="feature-item">
                {{-- <div class="feature__img">
                  <img src="{{ asset('assets/images/awards/5.jpg') }}" alt="certificate" class="img-fluid">
                </div><!-- /.feature-img --> --}}
                <div class="feature__body">
                  <h4 class="feature__title">Construction Excellence</h4>
                  <p class="feature__desc">We pride ourselves on delivering honest, straightforward communication and reliable solutions, without compromises, ensuring the highest standards in construction.</p>
                </div><!-- /.feature-content -->
              </div><!-- /.feature-item -->
            </div><!-- /.col-lg-4 -->
            <!-- feature item #6 -->
            <div class="col-sm-12 col-md-4 col-lg-4">
              <div class="feature-item">
                {{-- <div class="feature__img">
                  <img src="{{ asset('assets/images/awards/6.jpg') }}" alt="certificate" class="img-fluid">
                </div><!-- /.feature-img --> --}}
                <div class="feature__body">
                  <h4 class="feature__title">Safety Award</h4>
                  <p class="feature__desc">Safety is at the heart of everything we do. We monitor and manage every logistical and operational aspect of our projects to ensure a safe and successful completion.</p>
                </div><!-- /.feature-content -->
              </div><!-- /.feature-item -->
            </div><!-- /.col-lg-4 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /.awards -->

      <!-- ===========================
        Banner layout 3
      ============================= -->
      <section class="banner-layout3 bg-overlay bg-overlay-primary">
        <div class="bg-img"><img src="{{ asset('assets/images/banners/5.jpg') }}" alt="banner"></div>
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6">
              <div class="heading-layout2 heading-light mb-40">
                <h2 class="heading__title">Providing Value To Our ClientsThrough Ongoing Product & Innovation.</h2>
              </div><!-- /.heading -->
              <div class="row counter-light">
                <div class="col-sm-6">
                  <div class="counter-item">
                    <h4 class="counter">6,154</h4>
                    <p class="counter__desc">Projects And Systems Completed in 2021</p>
                  </div>
                  <p class="color-gray">Yet those that embrace change are thriving, building bigger, better, faster, and
                    stronger products
                  </p>
                  <ul class="list-items list-items-layout2 list-items-light list-unstyled">
                    <li>Download Brochures</li>
                    <li>Pricing and Plans</li>
                    <li>Request Quote</li>
                  </ul>
                </div><!-- /.col-sm-6 -->
                <div class="col-sm-6">
                  <div class="counter-item">
                    <h4 class="counter">2,419</h4>
                    <p class="counter__desc">Qualified Employees & Workers With Us</p>
                  </div>
                  <p class="color-gray">You are helping lead the charge; we can help you build on your past and prepare
                    future changing faster.
                  </p>
                  <ul class="list-items list-items-layout2 list-items-light list-unstyled">
                    <li>Our Leadership Team</li>
                    <li>Awards & Regognition</li>
                    <li>Join Our Team</li>
                  </ul>
                </div><!-- /.col-sm-6 -->
              </div><!-- /.row -->
            </div><!-- /.col-lg-6 -->
            <div class="col-sm-12 col-md-12 col-lg-6 position-static">
              <div class="map-container">
                <img src="{{ asset('assets/images/backgrounds/map3.png') }}" alt="map">
                {{-- <div class="fancybox-layout2">
                  <!-- fancybox #1 -->
                  <div class="fancybox-item">
                    <div class="fancybox__thumb"></div><!-- /.fancybox-thumb -->
                    <div class="fancybox__panel d-flex">
                      <div class="fancybox__icon">
                        <i class="icon-solar-panel"></i>
                      </div>
                      <div class="fancybox__body">
                        <h4 class="fancybox__title">887</h4>
                        <p class="fancybox__desc">Awards Milestones Awarded To Us.</p>
                      </div>
                    </div><!-- /.fancybox-panel -->
                  </div><!-- /. fancybox-item -->
                  <!-- fancybox #2 -->
                  <div class="fancybox-item">
                    <div class="fancybox__thumb"></div><!-- /.fancybox-thumb -->
                    <div class="fancybox__panel d-flex">
                      <div class="fancybox__icon">
                        <i class="icon-solar-panel"></i>
                      </div>
                      <div class="fancybox__body">
                        <h4 class="fancybox__title">887</h4>
                        <p class="fancybox__desc">Awards Milestones Awarded To Us.</p>
                      </div>
                    </div><!-- /.fancybox-panel -->
                  </div><!-- /. fancybox-item -->
                  <!-- fancybox #3 -->
                  <div class="fancybox-item">
                    <div class="fancybox__thumb"></div><!-- /.fancybox-thumb -->
                    <div class="fancybox__panel d-flex">
                      <div class="fancybox__icon">
                        <i class="icon-solar-panel"></i>
                      </div>
                      <div class="fancybox__body">
                        <h4 class="fancybox__title">319</h4>
                        <p class="fancybox__desc">Awards Milestones Awarded To Us.</p>
                      </div>
                    </div><!-- /.fancybox-panel -->
                  </div><!-- /. fancybox-item -->
                  <!-- fancybox #4 -->
                  <div class="fancybox-item fancybox-hover-left">
                    <div class="fancybox__thumb"></div><!-- /.fancybox-thumb -->
                    <div class="fancybox__panel d-flex">
                      <div class="fancybox__icon">
                        <i class="icon-solar-panel"></i>
                      </div>
                      <div class="fancybox__body">
                        <h4 class="fancybox__title">471</h4>
                        <p class="fancybox__desc">Awards Milestones Awarded To Us.</p>
                      </div>
                    </div><!-- /.fancybox-panel -->
                  </div><!-- /. fancybox-item -->
                  <!-- fancybox #5 -->
                  <div class="fancybox-item fancybox-hover-left">
                    <div class="fancybox__thumb"></div><!-- /.fancybox-thumb -->
                    <div class="fancybox__panel d-flex">
                      <div class="fancybox__icon">
                        <i class="icon-solar-panel"></i>
                      </div>
                      <div class="fancybox__body">
                        <h4 class="fancybox__title">887</h4>
                        <p class="fancybox__desc">Awards Milestones Awarded To Us.</p>
                      </div>
                    </div><!-- /.fancybox-panel -->
                  </div><!-- /. fancybox-item -->
                  <!-- fancybox #6 -->
                  <div class="fancybox-item fancybox-hover-left">
                    <div class="fancybox__thumb"></div><!-- /.fancybox-thumb -->
                    <div class="fancybox__panel d-flex">
                      <div class="fancybox__icon">
                        <i class="icon-solar-panel"></i>
                      </div>
                      <div class="fancybox__body">
                        <h4 class="fancybox__title">887</h4>
                        <p class="fancybox__desc">Awards Milestones Awarded To Us.</p>
                      </div>
                    </div><!-- /.fancybox-panel -->
                  </div><!-- /. fancybox-item -->
                </div><!-- /.fancybox-layout2 --> --}}
              </div>
            </div><!-- /.col-lg-6 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /.Banner layout 3 -->

      <!-- ===========================
        cta layout 2
      ============================= -->
      <section class="cta-layout2">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="cta-container d-flex flex-wrap">
                <div class="cta__item d-flex">
                  <div class="cta__icon custom-icon">
                    <i class="icon-solar-panel"></i>
                  </div><!-- /.cta__icon -->
                  <div class="cta__body">
                    <h4 class="cta__title">Design & Shipping</h4>
                    <p class="cta__desc">We collaborate with you to design and deliver a system that meets your utility
                      usage and selecting equipments.</p>
                    <a href="#" class="btn btn__link btn__primary">
                      <i class="icon-arrow-right"></i>
                      <span>Schedule A Visit</span>
                    </a>
                  </div><!-- /.cta__body -->
                </div><!-- /.cta__item -->
                <div class="cta__item d-flex">
                  <div class="cta__icon custom-icon">
                    <i class="icon-energy"></i>
                  </div><!-- /.cta__icon -->
                  <div class="cta__body">
                    <h4 class="cta__title">Contract & Install</h4>
                    <p class="cta__desc">Whether you want to install the system on your own or hire local contractors
                      directly managing the installation.</p>
                    <a href="#" class="btn btn__link btn__primary">
                      <span>Request A Quote</span>
                      <i class="icon-arrow-right"></i>
                    </a>
                  </div><!-- /.cta__body -->
                </div><!-- /.cta__item -->
              </div><!-- /.cta -->
            </div><!-- /.col-12 -->
          </div><!-- /.row -->
          <div class="row">
            <div class="col-12">
              <p class="text__link text-center mt-40 mb-0">Discover independence through the power of solar,
                <a href="#">
                  <span>Explore Our Plans</span> <i class="icon-arrow-right"></i>
                </a>
              </p>
            </div><!-- /.col-12 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /.cta layout 2 -->

      <!-- =====================
           testimonials
        ======================== -->
      {{-- <section class="testimonials-layout2 pt-0 pb-60">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="slick-carousel gutter-20"
                data-slick='{"slidesToShow": 2, "arrows": false, "dots": true, "infinite": true, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 1}}]}'>
                <!-- Testimonial #1 -->
                <div class="testimonial-item d-flex">
                  <div class="testimonial__thumb">
                    <img src="{{ asset('assets/images/testimonials/thumbs/1.png') }}" alt="thumb">
                  </div><!-- /.testimonial__thumb -->
                  <div>
                    <div class="testimonial__rating d-flex align-items-center">
                      <div class="mr-20">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                      </div>
                      <strong class="color-primary">Perfect Choice!!</strong>
                    </div><!-- /.testimonial__rating -->
                    <h4 class="testimonial__desc">They were fantastic through the entire purchase process. I had lots of
                      questions and they were patient. My system arrived it was well packed and shipping with xpo.
                    </h4>
                    <div class="testimonial__meta">
                      <h4 class="testimonial__meta-title">Ahmed Abdallah</h4>
                      <p class="testimonial__meta-desc">Front End Developer</p>
                    </div><!-- /.testimonial-meta -->
                  </div>
                </div><!-- /. testimonial-item -->
                <!-- Testimonial #2 -->
                <div class="testimonial-item d-flex">
                  <div class="testimonial__thumb">
                    <img src="{{ asset('assets/images/testimonials/thumbs/2.png') }}" alt="thumb">
                  </div><!-- /.testimonial__thumb -->
                  <div>
                    <div class="testimonial__rating d-flex align-items-center">
                      <div class="mr-20">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                      </div>
                      <strong class="color-primary">Excellent!!</strong>
                    </div><!-- /.testimonial__rating -->
                    <h4 class="testimonial__desc">They helped lead me through the process of system selection, site layout
                      and placing my order. They were very knowledgeable and has provided guidance each step.
                    </h4>
                    <div class="testimonial__meta">
                      <h4 class="testimonial__meta-title">John Peter</h4>
                      <p class="testimonial__meta-desc">pro systems</p>
                    </div><!-- /.testimonial-meta -->
                  </div>
                </div><!-- /. testimonial-item -->
                <!-- Testimonial #3 -->
                <div class="testimonial-item d-flex">
                  <div class="testimonial__thumb">
                    <img src="{{ asset('assets/images/testimonials/thumbs/3.png') }}" alt="thumb">
                  </div><!-- /.testimonial__thumb -->
                  <div>
                    <div class="testimonial__rating d-flex align-items-center">
                      <div class="mr-20">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                      </div>
                      <strong class="color-primary">Perfect Choice!!</strong>
                    </div><!-- /.testimonial__rating -->
                    <h4 class="testimonial__desc">They were fantastic through the entire purchase process. I had lots of
                      questions and they were patient. My system arrived it was well packed and shipping with xpo.
                    </h4>
                    <div class="testimonial__meta">
                      <h4 class="testimonial__meta-title">Ahmed Abdallah</h4>
                      <p class="testimonial__meta-desc">Digital Media Manager</p>
                    </div><!-- /.testimonial-meta -->
                  </div>
                </div><!-- /. testimonial-item -->
              </div><!-- /.carousel -->
            </div><!-- /.col-lg-12 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /.testimonials --> --}}

      <!-- =====================
           Clients
        ======================== -->
      <section class="clients border-top py-0">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="slick-carousel"
                data-slick='{"slidesToShow": 6, "arrows": false, "dots": false, "autoplay": true,"autoplaySpeed": 2000, "infinite": true, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 4}}, {"breakpoint": 767, "settings": {"slidesToShow": 3}}, {"breakpoint": 480, "settings": {"slidesToShow": 2}}]}'>
                <div class="client">
                  <a href="#"><img src="{{ asset('assets/images/clients/1.png') }}" alt="client"></a>
                </div><!-- /.client -->
                <div class="client">
                  <a href="#"><img src="{{ asset('assets/images/clients/2.png') }}" alt="client"></a>
                </div><!-- /.client -->
                <div class="client">
                  <a href="#"><img src="{{ asset('assets/images/clients/3.png') }}" alt="client"></a>
                </div><!-- /.client -->
                <div class="client">
                  <a href="#"><img src="{{ asset('assets/images/clients/4.png') }}" alt="client"></a>
                </div><!-- /.client -->
                <div class="client">
                  <a href="#"><img src="{{ asset('assets/images/clients/5.png') }}" alt="client"></a>
                </div><!-- /.client -->
                <div class="client">
                  <a href="#"><img src="{{ asset('assets/images/clients/6.png') }}" alt="client"></a>
                </div><!-- /.client -->
                <div class="client">
                  <a href="#"><img src="{{ asset('assets/images/clients/3.png') }}" alt="client"></a>
                </div><!-- /.client -->
                <div class="client">
                  <a href="#"><img src="{{ asset('assets/images/clients/4.png') }}" alt="client"></a>
                </div><!-- /.client -->
              </div><!-- /.carousel -->
            </div><!-- /.col-lg-12 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /.clients -->
@endsection
