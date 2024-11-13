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
                  <h4 class="service__title">Modular Construction Solutions</h4>
                  <p class="service__desc">Design and production of high-quality modular units to meet specific client needs and project requirements.</p>
                  <a href="{{ route('user.service.modular-construction') }}" class="btn btn__secondary btn__outlined btn__custom">
                    <span>Read More</span>
                    <i class="icon-arrow-right"></i>
                  </a>
                </div><!-- /.service__body -->
              </div><!-- /.service-item -->
            </div><!-- /.col-lg-4 -->
            <!-- service item #2 -->
            <!-- service item #1 -->
            <div class="col-sm-12 col-md-6 col-lg-4">
              <div class="service-item">
                <div class="service__img">
                  <img src="{{ asset('assets/images/pbb-img/service/project-design-planning-2.jpg') }}" alt="service" loading="lazy" style="max-height: 32.8vh !important; min-width: 100% !important;">
                </div><!-- /.service__img -->
                <div class="service__body">
                  <h4 class="service__title">Project Design & Planning &nbsp;&nbsp;&nbsp;&nbsp;</h4>
                  <p class="service__desc">Comprehensive design and planning services, including architectural, engineering, and feasibility studies to ensure efficient and sustainable project execution.</p>
                  <a href="{{ route('user.service.project-design') }}" class="btn btn__secondary btn__outlined btn__custom">
                    <span>Read More</span>
                    <i class="icon-arrow-right"></i>
                  </a>
                </div><!-- /.service__body -->
              </div><!-- /.service-item -->
            </div><!-- /.col-lg-4 -->
            <!-- service item #2 -->
            <div class="col-sm-12 col-md-6 col-lg-4">
              <div class="service-item">
                <div class="service__img">
                  <img src="{{ asset('assets/images/pbb-img/service/eco-friendly-4.jpg') }}" alt="service" loading="lazy" style="max-height: 32.8vh !important; min-width: 100% !important;">
                </div><!-- /.service__img -->
                <div class="service__body">
                  <h4 class="service__title">Eco-Friendly & Sustainable Building Solutions</h4>
                  <p class="service__desc">Use of environmentally friendly materials and practices, incorporating energy-efficient designs and renewable energy options.</p>
                  <a href="{{ route('user.service.eco-friendly-building') }}" class="btn btn__secondary btn__outlined btn__custom">
                    <span>Read More</span>
                    <i class="icon-arrow-right"></i>
                  </a>
                </div><!-- /.service__body -->
              </div><!-- /.service-item -->
            </div><!-- /.col-lg-4 -->
            <!-- service item #3 -->
            <div class="col-sm-12 col-md-6 col-lg-4">
              <div class="service-item">
                <div class="service__img">
                  <img src="{{ asset('assets/images/pbb-img/service/custom-modular-manufacturing-2.jpg') }}" alt="service" loading="lazy" style="max-height: 32.8vh !important; min-width: 100% !important;">
                </div><!-- /.service__img -->
                <div class="service__body">
                  <h4 class="service__title">Custom Modular Manufacturing</h4>
                  <p class="service__desc">Production of custom modular units that meet international standards, offering flexibility in size, layout, and purpose to align with diverse project needs.</p>
                  <a href="{{ route('user.service.custom-modular-manufacturing') }}" class="btn btn__secondary btn__outlined btn__custom">
                    <span>Read More</span>
                    <i class="icon-arrow-right"></i>
                  </a>
                </div><!-- /.service__body -->
              </div><!-- /.service-item -->
            </div><!-- /.col-lg-4 -->
            <!-- service item #4 -->
            <div class="col-sm-12 col-md-6 col-lg-4">
              <div class="service-item">
                <div class="service__img">
                  <img src="{{ asset('assets/images/pbb-img/service/on-site-installation-4.jpg') }}" alt="service" loading="lazy" style="max-height: 32.8vh !important; min-width: 100% !important;">
                </div><!-- /.service__img -->
                <div class="service__body">
                  <h4 class="service__title">Supervise Installation & Assembly</h4>
                  <p class="service__desc">Comprehensive supervision services with on-site support and quality assurance integration of modular components.</p>
                  <a href="{{ route('user.service.supervise-installation-and-assembly') }}" class="btn btn__secondary btn__outlined btn__custom">
                    <span>Read More</span>
                    <i class="icon-arrow-right"></i>
                  </a>
                </div><!-- /.service__body -->
              </div><!-- /.service-item -->
            </div><!-- /.col-lg-4 -->
            <!-- service item #5 -->
            <div class="col-sm-12 col-md-6 col-lg-4">
              <div class="service-item">
                <div class="service__img">
                  <img src="{{ asset('assets/images/pbb-img/service/turnkey-project-management-4.jpg') }}" alt="service" loading="lazy" style="max-height: 32.8vh !important; min-width: 100% !important;">
                </div><!-- /.service__img -->
                <div class="service__body">
                  <h4 class="service__title">Turnkey Project Management &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h4>
                  <p class="service__desc">Full management of modular construction projects from concept through completion, including timelines, logistics, and coordination with other contractors.</p>
                  <a href="{{ route('user.service.turnkey-project-management') }}" class="btn btn__secondary btn__outlined btn__custom">
                    <span>Read More</span>
                    <i class="icon-arrow-right"></i>
                  </a>
                </div><!-- /.service__body -->
              </div><!-- /.service-item -->
            </div><!-- /.col-lg-4 -->
            <!-- service item #6 -->
            <div class="col-sm-12 col-md-6 col-lg-4">
              <div class="service-item">
                <div class="service__img">
                  <img src="{{ asset('assets/images/pbb-img/service/supply-chain-3.jpg') }}" alt="service" loading="lazy" style="max-height: 32.8vh !important; min-width: 100% !important;">
                </div><!-- /.service__img -->
                <div class="service__body">
                  <h4 class="service__title">Supply Chain & Material Sourcing</h4>
                  <p class="service__desc">Efficient procurement and sourcing of high-quality materials for modular construction, reducing lead times and maintaining strict quality standards.</p>
                  <a href="{{ route('user.service.supply-chain-sourcing') }}" class="btn btn__secondary btn__outlined btn__custom">
                    <span>Read More</span>
                    <i class="icon-arrow-right"></i>
                  </a>
                </div><!-- /.service__body -->
              </div><!-- /.service-item -->
            </div><!-- /.col-lg-4 -->
            <div class="col-sm-12 col-md-6 col-lg-4">
              <div class="service-item">
                <div class="service__img">
                  <img src="{{ asset('assets/images/pbb-img/service/consultation-support-3.jpg') }}" alt="service" loading="lazy" style="max-height: 32.8vh !important; min-width: 100% !important;">
                </div><!-- /.service__img -->
                <div class="service__body">
                  <h4 class="service__title">Consultation & Technical Support</h4>
                  <p class="service__desc">Professional consultation and technical support throughout the project lifecycle to address client needs, from planning to post-construction maintenance.</p>
                  <a href="{{ route('user.service.consultation-support') }}" class="btn btn__secondary btn__outlined btn__custom">
                    <span>Read More</span>
                    <i class="icon-arrow-right"></i>
                  </a>
                </div><!-- /.service__body -->
              </div><!-- /.service-item -->
            </div><!-- /.col-lg-4 -->
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
