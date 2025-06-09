@extends('user.layouts.app')

@section('content')
<!-- ========================
       page title
    =========================== -->
    <section class="page-title page-title-layout2 bg-overlay bg-overlay-2 bg-parallax text-center">
        <div class="bg-img"><img src="{{ asset('assets/images/page-titles/12.jpg') }}" alt="background"></div>
        <div class="container">
          <div class="row">
            <div class="col-12">
              <h1 class="pagetitle__heading mb-0">Our Services</h1>
              <a href="#careers" class="scroll-down">
                <i class="icon-arrow-down"></i>
              </a>
            </div><!-- /.col-12 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
        <div class="breadcrumb-wrapper bg-white">
          <div class="container">
            <div class="row">
              <div class="col-12">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Services</li>
                  </ol>
                </nav>
              </div><!-- /.col-12 -->
            </div><!-- /.row -->
          </div><!-- /.container -->
        </div><!-- /.breadcrumb-wrapper -->
      </section><!-- /.page-title -->

      <!-- ========================
          Services Layout 1
      =========================== -->
      <section class="services-layout1 pt-120 pb-90">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
              <div class="heading text-center mb-50">
                <h2 class="heading__subtitle">Pioneering the Future of Modular Construction</h2>
                <h3 class="heading__title">A Trusted Provider of Comprehensive Modular Building Solutions for Construction, Design, and Installation.</h3>
              </div><!-- /.heading -->
            </div><!-- /.col-lg-6 -->
          </div><!-- /.row -->
          <div class="row">
            <!-- service item #1 -->
            <div class="col-sm-12 col-md-6 col-lg-4">
              <div class="service-item">
                <div class="service__img">
                  <img src="{{ asset('assets/images/pbb-img/service/modular-constraction-solution-4.jpg') }}" alt="service" loading="lazy" style="max-height: 32.8vh !important; min-width: 100% !important;">
                </div><!-- /.service__img -->
                <div class="service__body">
                  <h4 class="service__title">Heavy Equipment & Industrial Solutions</h4>
                  <p class="service__desc">Rugged solutions built for maximum durability and performance in the toughest industrial environments.</p>
                  <a href="{{ route('user.service.heavy-equipment-and-industrial-solutions') }}" class="btn btn__secondary btn__outlined btn__custom">
                    <span>Read More</span>
                    <i class="icon-arrow-right"></i>
                  </a>
                </div><!-- /.service__body -->
              </div><!-- /.service-item -->
            </div><!-- /.col-lg-4 -->
            <!-- service item #1 -->

            <!-- service item #2 -->
            <div class="col-sm-12 col-md-6 col-lg-4">
              <div class="service-item">
                <div class="service__img">
                  <img src="{{ asset('assets/images/pbb-img/service/modular-constraction-solution-4.jpg') }}" alt="service" loading="lazy" style="max-height: 32.8vh !important; min-width: 100% !important;">
                </div><!-- /.service__img -->
                <div class="service__body">
                  <h4 class="service__title">Advanced Energy & Electrical Systems</h4>
                  <p class="service__desc">Smart energy and electrical systems built for efficiency, safety, and scalable performance.</p>
                  <a href="{{ route('user.service.advanced-energy-and-electrical-systems') }}" class="btn btn__secondary btn__outlined btn__custom">
                    <span>Read More</span>
                    <i class="icon-arrow-right"></i>
                  </a>
                </div><!-- /.service__body -->
              </div><!-- /.service-item -->
            </div><!-- /.col-lg-4 -->
            <!-- service item #2 -->

            <!-- service item #3 -->
            <div class="col-sm-12 col-md-6 col-lg-4">
              <div class="service-item">
                <div class="service__img">
                  <img src="{{ asset('assets/images/pbb-img/service/modular-constraction-solution-4.jpg') }}" alt="service" loading="lazy" style="max-height: 32.8vh !important; min-width: 100% !important;">
                </div><!-- /.service__img -->
                <div class="service__body">
                  <h4 class="service__title">Smart Mobility & Automotive Parts</h4>
                  <p class="service__desc">Innovative automotive components crafted for intelligent, efficient, and future-ready mobility.</p>
                  <a href="{{ route('user.service.smart-mobility-and-automotive-parts') }}" class="btn btn__secondary btn__outlined btn__custom">
                    <span>Read More</span>
                    <i class="icon-arrow-right"></i>
                  </a>
                </div><!-- /.service__body -->
              </div><!-- /.service-item -->
            </div><!-- /.col-lg-4 -->
            <!-- service item #3 -->

            <!-- service item #4 -->
            <div class="col-sm-12 col-md-6 col-lg-4">
              <div class="service-item">
                <div class="service__img">
                  <img src="{{ asset('assets/images/pbb-img/service/modular-constraction-solution-4.jpg') }}" alt="service" loading="lazy" style="max-height: 32.8vh !important; min-width: 100% !important;">
                </div><!-- /.service__img -->
                <div class="service__body">
                  <h4 class="service__title">Instrumentation & Measurement Solutions</h4>
                  <p class="service__desc">High-precision tools for accurate measurement, monitoring, and industrial optimization.</p>
                  <a href="{{ route('user.service.instrumentation-and-measurement-solutions') }}" class="btn btn__secondary btn__outlined btn__custom">
                    <span>Read More</span>
                    <i class="icon-arrow-right"></i>
                  </a>
                </div><!-- /.service__body -->
              </div><!-- /.service-item -->
            </div><!-- /.col-lg-4 -->
            <!-- service item #4 -->

            <!-- service item #5 -->
            <div class="col-sm-12 col-md-6 col-lg-4">
              <div class="service-item">
                <div class="service__img">
                  <img src="{{ asset('assets/images/pbb-img/service/modular-constraction-solution-4.jpg') }}" alt="service" loading="lazy" style="max-height: 32.8vh !important; min-width: 100% !important;">
                </div><!-- /.service__img -->
                <div class="service__body">
                  <h4 class="service__title">Sustainable Building Material, Modular & Infrastructure</h4>
                  <p class="service__desc">Eco-friendly materials and modular systems built for fast, efficient, and sustainable development.</p>
                  <a href="{{ route('user.service.heavy-equipment-and-industrial-solutions') }}" class="btn btn__secondary btn__outlined btn__custom">
                    <span>Read More</span>
                    <i class="icon-arrow-right"></i>
                  </a>
                </div><!-- /.service__body -->
              </div><!-- /.service-item -->
            </div><!-- /.col-lg-4 -->
            <!-- service item #5 -->

            <!-- service item #6 -->
            <div class="col-sm-12 col-md-6 col-lg-4">
              <div class="service-item">
                <div class="service__img">
                  <img src="{{ asset('assets/images/pbb-img/service/modular-constraction-solution-4.jpg') }}" alt="service" loading="lazy" style="max-height: 32.8vh !important; min-width: 100% !important;">
                </div><!-- /.service__img -->
                <div class="service__body">
                  <h4 class="service__title">Precision Digital & IT Solutions</h4>
                  <p class="service__desc">Advanced digital and IT solutions that power intelligent automation and data-driven transformation.</p>
                  <a href="{{ route('user.service.precision-digital-and-it-solutions') }}" class="btn btn__secondary btn__outlined btn__custom">
                    <span>Read More</span>
                    <i class="icon-arrow-right"></i>
                  </a>
                </div><!-- /.service__body -->
              </div><!-- /.service-item -->
            </div><!-- /.col-lg-4 -->
            <!-- service item #6 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /.Services Layout 1 -->

      <!-- ======================
      Features Layout 2
      ========================= -->
      <section class="features-layout2 pt-120 pb-80">
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
@endsection
