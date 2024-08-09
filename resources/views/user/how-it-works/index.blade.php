@extends('user.layouts.app')

@section('content')
    <!-- ========================
       page title
    =========================== -->
    <section class="page-title page-title-layout1 bg-overlay bg-overlay-2 bg-parallax text-center">
        <div class="bg-img"><img src="{{ asset('assets/images/page-titles/2.jpg') }}" alt="background"></div>
        <div class="container">
          <div class="row">
            <div class="col-12">
              <h1 class="pagetitle__heading mb-0">How It Works!</h1>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item"><a href="#">Company</a></li>
                  <li class="breadcrumb-item active" aria-current="page">How It Works!</li>
                </ol>
              </nav>
              <a href="#features" class="scroll-down">
                <i class="icon-arrow-down"></i>
              </a>
            </div><!-- /.col-xl-6 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /.page-title -->

      <!-- ======================
      Features Layout 2
      ========================= -->
      <section id="features" class="features-layout2 pt-120 pb-80">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-5">
              <h2 class="heading__subtitle color-primary">Making Tomorrow Different Today.</h2>
              <h3 class="heading__title">Energize Society With Sustainable And Reliable Energy Systems!</h3>
              <p class="heading__desc mb-20">In recent years, new capacity across the solar value chain has
                become
                necessary to support the PV market’s growth. However, the capital required to establish and scale-up
                wafer, solar cell and solar module manufacturing facilities is considerable. </p>
              <a href="#" class="btn btn__primary btn__outlined btn__custom mb-40">
                <i class="icon-arrow-right"></i>
                <span>Explore All Features!</span>
              </a>
            </div><!-- /col-lg-5 -->

            <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-1">
              <div class="row">
                <!-- Feature item #1 -->
                <div class="col-sm-6">
                  <div class="feature-item">
                    <div class="feature__icon">
                      <i class="icon-hydro-power3"></i>
                    </div>
                    <h4 class="feature__title">Save Your Money</h4>
                    <p class="feature__desc">Save money on utilities or increase the value of your home by installing
                      solar
                    </p>
                  </div><!-- /.feature-item -->
                </div><!-- /.col-sm-6 -->
                <!-- Feature item #2 -->
                <div class="col-sm-6">
                  <div class="feature-item">
                    <div class="feature__icon">
                      <i class="icon-biosphere"></i>
                    </div>
                    <h4 class="feature__title">5Stars Customer Service</h4>
                    <p class="feature__desc">Understand that we must go above our customer expectations during each
                      interaction always.
                    </p>
                  </div><!-- /.feature-item -->
                </div><!-- /.col-sm-6 -->
                <!-- Feature item #3 -->
                <div class="col-sm-6">
                  <div class="feature-item">
                    <div class="feature__icon">
                      <i class="icon-eco-house"></i>
                    </div>
                    <h4 class="feature__title">Your Home Is Energy</h4>
                    <p class="feature__desc">Everyday the sun provides us with abundance of free energy by placing solar
                    </p>
                  </div><!-- /.feature-item -->
                </div><!-- /.col-sm-6 -->
                <!-- Feature item #4 -->
                <div class="col-sm-6">
                  <div class="feature-item">
                    <div class="feature__icon">
                      <i class="icon-energy2"></i>
                    </div>
                    <h4 class="feature__title">Consult & Planning</h4>
                    <p class="feature__desc">Our remote industrial solar systems are designed to reliably power our
                      clients
                    </p>
                  </div><!-- /.feature-item -->
                </div><!-- /.col-sm-6 -->
                <!-- Feature item #5 -->
                <div class="col-sm-6">
                  <div class="feature-item">
                    <div class="feature__icon">
                      <i class="icon-electric-car"></i>
                    </div>
                    <h4 class="feature__title">Certified Engineers</h4>
                    <p class="feature__desc">Our sales engineers on our staff have experience and can design any complete
                    </p>
                  </div><!-- /.feature-item -->
                </div><!-- /.col-sm-6 -->
                <!-- Feature item #6 -->
                <div class="col-sm-6">
                  <div class="feature-item feature-item-custom">
                    <div class="feature__icon">
                      <i class="icon-wind-socket"></i>
                    </div>
                    <h4 class="feature__title">Awards & <br> Milestones</h4>
                    <p class="feature__desc">Benefiting from nearly 20 years experience.</p>
                  </div><!-- /.feature-item -->
                </div><!-- /.col-sm-6 -->
              </div><!-- /.row -->
            </div><!-- /.col-lg-6 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /.Features Layout 2 -->

      <!-- =========================
         Banner layout 2
        =========================== -->
      <section class="banner-layout2 pt-130 pb-130">
        <div class="bg-img">
          <img src="{{ asset('assets/images/banners/12.jpg') }}" alt="background">
        </div>
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-7">
              <div class="text-block">
                <div class="slick-carousel"
                  data-slick='{"slidesToShow": 1, "slidesToScroll": 1, "arrows": true, "dots": false'>
                  <div class="heading heading-layout2">
                    <h2 class="heading__subtitle">How It Works, Step One:</h2>
                    <h3 class="heading__title">We Design & Ship.</h3>
                    <p class="heading__desc">We collaborate with you to design and deliver a system that meets your
                      utility
                      usage and needs, We also selecting equipment from 66+ manufacturers so you do not have to be
                      worried
                      or compromise with your money or with your effort.</p>
                  </div>
                  <div class="heading heading-layout2">
                    <h2 class="heading__subtitle">How It Works, Step Two:</h2>
                    <h3 class="heading__title">Contract Or Install</h3>
                    <p class="heading__desc">We collaborate with you to design and deliver a system that meets your
                      utility
                      usage and needs, We also selecting equipment from 66+ manufacturers so you do not have to be
                      worried
                      or compromise with your money or with your effort.</p>
                  </div>
                </div>
              </div><!-- /.text-block -->
            </div><!-- /.col-xl-7 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /.Banner layout 2 -->

      <!-- ======================
      Testimonials
      ========================= -->
      <section class="testimonials-layout1 pb-0">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
              <div class="heading text-center mb-40">
                <h2 class="heading__subtitle color-primary">Customers Doing it Their Way</h2>
                <h3 class="heading__title">Our Customers Share Their Experiences & Insights</h3>
              </div><!-- /.heading -->
            </div><!-- /.col-lg-6 -->
          </div><!-- /.row -->
          <div class="row">
            <div class="col-12">
              <img src="{{ asset('assets/images/backgrounds/map2.png') }}" alt="map">
              <!-- Testimonial #1 -->
              <div class="testimonial-box">
                <div class="testimonial__thumb">
                  <img src="{{ asset('assets/images/testimonials/thumbs/1.png') }}" alt="author thumb">
                  <span class="pulsing-animation pulsing-animation-1"></span>
                  <span class="pulsing-animation pulsing-animation-2"></span>
                  <span class="pulsing-animation pulsing-animation-3"></span>
                </div><!-- /.testimonial-thumb -->
                <div class="testimonial__panel">
                  <div class="testimonial__desc">
                    As one of the world's largest ITService Providers with over 120 engineers and IT support staff are
                    ready to help.
                  </div>
                </div><!-- /.testimonial-panel -->
              </div><!-- /. testimonial-box -->
              <!-- Testimonial #2 -->
              <div class="testimonial-box">
                <div class="testimonial__thumb">
                  <img src="{{ asset('assets/images/testimonials/thumbs/2.png') }}" alt="author thumb">
                  <span class="pulsing-animation pulsing-animation-1"></span>
                  <span class="pulsing-animation pulsing-animation-2"></span>
                  <span class="pulsing-animation pulsing-animation-3"></span>
                </div><!-- /.testimonial-thumb -->
                <div class="testimonial__panel">
                  <div class="testimonial__desc">
                    As one of the world's largest ITService Providers with over 120 engineers and IT support staff are
                    ready to help.
                  </div>
                </div><!-- /.testimonial-panel -->
              </div><!-- /. testimonial-box -->
              <!-- Testimonial #3 -->
              <div class="testimonial-box">
                <div class="testimonial__thumb">
                  <img src="{{ asset('assets/images/testimonials/thumbs/3.png') }}" alt="author thumb">
                  <span class="pulsing-animation pulsing-animation-1"></span>
                  <span class="pulsing-animation pulsing-animation-2"></span>
                  <span class="pulsing-animation pulsing-animation-3"></span>
                </div><!-- /.testimonial-thumb -->
                <div class="testimonial__panel">
                  <div class="testimonial__desc">
                    As one of the world's largest ITService Providers with over 120 engineers and IT support staff are
                    ready to help.
                  </div>
                </div><!-- /.testimonial-panel -->
              </div><!-- /. testimonial-box -->
              <!-- Testimonial #4 -->
              <div class="testimonial-box testimonial-hover-left">
                <div class="testimonial__thumb">
                  <img src="{{ asset('assets/images/testimonials/thumbs/4.png') }}" alt="author thumb">
                  <span class="pulsing-animation pulsing-animation-1"></span>
                  <span class="pulsing-animation pulsing-animation-2"></span>
                  <span class="pulsing-animation pulsing-animation-3"></span>
                </div><!-- /.testimonial-thumb -->
                <div class="testimonial__panel">
                  <div class="testimonial__desc">
                    As one of the world's largest ITService Providers with over 120 engineers and IT support staff are
                    ready to help.
                  </div>
                </div><!-- /.testimonial-panel -->
              </div><!-- /. testimonial-box -->
              <!-- Testimonial #5 -->
              <div class="testimonial-box testimonial-hover-left">
                <div class="testimonial__thumb">
                  <img src="{{ asset('assets/images/testimonials/thumbs/5.png') }}" alt="author thumb">
                  <span class="pulsing-animation pulsing-animation-1"></span>
                  <span class="pulsing-animation pulsing-animation-2"></span>
                  <span class="pulsing-animation pulsing-animation-3"></span>
                </div><!-- /.testimonial-thumb -->
                <div class="testimonial__panel">
                  <div class="testimonial__desc">
                    As one of the world's largest ITService Providers with over 120 engineers and IT support staff are
                    ready to help.
                  </div>
                </div><!-- /.testimonial-panel -->
              </div><!-- /. testimonial-box -->
              <!-- Testimonial #6 -->
              <div class="testimonial-box">
                <div class="testimonial__thumb">
                  <img src="{{ asset('assets/images/testimonials/thumbs/1.png') }}" alt="author thumb">
                  <span class="pulsing-animation pulsing-animation-1"></span>
                  <span class="pulsing-animation pulsing-animation-2"></span>
                  <span class="pulsing-animation pulsing-animation-3"></span>
                </div><!-- /.testimonial-thumb -->
                <div class="testimonial__panel">
                  <div class="testimonial__desc">
                    As one of the world's largest ITService Providers with over 120 engineers and IT support staff are
                    ready to help.
                  </div>
                </div><!-- /.testimonial-panel -->
              </div><!-- /. testimonial-box -->
              <!-- Testimonial #7 -->
              <div class="testimonial-box">
                <div class="testimonial__thumb">
                  <img src="{{ asset('assets/images/testimonials/thumbs/4.png') }}" alt="author thumb">
                  <span class="pulsing-animation pulsing-animation-1"></span>
                  <span class="pulsing-animation pulsing-animation-2"></span>
                  <span class="pulsing-animation pulsing-animation-3"></span>
                </div><!-- /.testimonial-thumb -->
                <div class="testimonial__panel">
                  <div class="testimonial__desc">
                    As one of the world's largest ITService Providers with over 120 engineers and IT support staff are
                    ready to help.
                  </div>
                </div><!-- /.testimonial-panel -->
              </div><!-- /. testimonial-box -->
            </div><!-- /.col-12 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /.testimonials -->

      <!-- ======================
      Cta Layout1
      ========================= -->
      <section class="cta-layout1 pt-0">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-6">
              <div class="cta__item d-flex">
                <div class="cta__icon custom-icon">
                  <i class="icon-solar-panel"></i>
                </div><!-- /.cta__icon -->
                <div class="cta__body">
                  <h4 class="cta__title">Design & Shipping</h4>
                  <p class="cta__desc">We collaborate with you to design and deliver a system that meets your utility
                    usage and selecting equips.</p>
                  <a href="#" class="btn btn__link btn__primary">
                    <i class="icon-arrow-right"></i>
                    <span>Schedule A Visit</span>
                  </a>
                </div><!-- /.cta__body -->
              </div><!-- /.cta__item -->
            </div><!-- /.col-md-6 -->
            <div class="col-sm-12 col-md-6">
              <div class="cta__item d-flex">
                <div class="cta__icon custom-icon">
                  <i class="icon-energy"></i>
                </div><!-- /.cta__icon -->
                <div class="cta__body">
                  <h4 class="cta__title">Design & Shipping</h4>
                  <p class="cta__desc">Whether you want to install the system on your own or hire local contractors
                    directly managing installation.</p>
                  <a href="#" class="btn btn__link btn__primary">
                    <i class="icon-arrow-right"></i>
                    <span>Schedule A Visit</span>
                  </a>
                </div><!-- /.cta__body -->
              </div><!-- /.cta__item -->
            </div><!-- /.col-md-6 -->
          </div><!-- /.cta -->
          <div class="row">
            <div class="col-12">
              <p class="text__link text-center mb-0">Discover independence through the power of solar,
                <a href="#">
                  <span>Explore Our Plans</span> <i class="icon-arrow-right"></i>
                </a>
              </p>
            </div><!-- /.col-12 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.cta layout1 -->
@endsection
