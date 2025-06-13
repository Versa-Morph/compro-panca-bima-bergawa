@extends('user.layouts.app')

@push('style')
    <style>
        .feature-item {
           height: 28rem;
        }
    </style>
@endpush

@section('content')
    <!-- ========================
       page title
    =========================== -->
    <section class="page-title page-title-layout1 bg-overlay bg-overlay-2 bg-parallax text-center">
        <div class="bg-img"><img src="{{ asset('assets/images/page-titles/1.jpg') }}" alt="background"></div>
        <div class="container">
          <div class="row">
            <div class="col-12">
              <h1 class="pagetitle__heading mb-0">About Us</h1>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item"><a href="#">Company</a></li>
                  <li class="breadcrumb-item active" aria-current="page">About Us</li>
                </ol>
              </nav>
              <a href="#about" class="scroll-down">
                <i class="icon-arrow-down"></i>
              </a>
            </div><!-- /.col-xl-6 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /.page-title -->

      <!-- ========================
        About Layout 1
      =========================== -->
      <section class="about-layout1 pt-130 pb-130">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-7 offset-lg-1">
              <div class="heading__layout2 mb-60">
                <h2 class="heading__subtitle">Pioneering Modular Construction Across Industries</h2>
                <h3 class="heading__title">We Are Ready for Modular Innovation, All We Need Is to Build It Right!</h3>
              </div><!-- /.heading__layout2 -->
            </div><!-- /.col-lg-7 -->
          </div><!-- /.row -->
          <div class="row align-items-center">
            <div class="col-sm-12 col-md-12 col-lg-2">
              <!-- counter item #1 -->
              <div class="counter-item">
                <h4 class="counter">6,154</h4>
                <p class="counter__desc pr-0">Modules Delivered in the Last 5 Years</p>
                <div class="divider__line"></div>
              </div>
              <!-- counter item #2 -->
              <div class="counter-item">
                <h4 class="counter">2,512</h4>
                <p class="counter__desc pr-0">Skilled Professionals & Craftsmen in Our Team</p>
                <div class="divider__line"></div>
              </div>
              <!-- counter item #3 -->
              <div class="counter-item">
                <h4 class="counter">0,241</h4>
                <p class="counter__desc pr-0">Industry Awards & Recognitions</p>
                <div class="divider__line"></div>
              </div>
            </div><!-- /.col-lg-2 -->
            <div class="col-sm-12 col-md-12 col-lg-5">
              <div class="video-banner-layout2">
                <img src="{{ asset('assets/images/pbb-img/modular-inovation.jpg') }}" alt="about" class="w-100">
                {{-- <div class="video-has-img">
                  <img src="{{ asset('assets/images/video/1.jpg') }}" alt="video">
                  <a class="video__btn video__btn-white popup-video" href="https://www.youtube.com/watch?v=nrJtHemSPW4">
                    <div class="video__player">
                      <i class="fa fa-play"></i>
                    </div>
                  </a>
                  <span class="video__btn-title">Watch Our Intro!</span>
                </div> --}}
              </div><!-- /.video-banner -->
            </div><!-- /.col-lg-5 -->
            <div class="col-sm-12 col-md-12 col-lg-5">
              <div class="about__text">
                <div class="text__icon">
                  <i class="icon-green-energy3"></i>
                </div>
                <p class="heading__desc font-weight-medium color-secondary mb-30">
                    We lead the shift towards more sustainable, efficient, and adaptable construction solutions. Through our advanced modular technologies, we build communities and drive progress—this is our mission!
                </p>
                <p class="heading__desc mb-20">
                    The growing need for rapid urban development and the demand for sustainable infrastructure present unique challenges. Nearly a billion people still lack access to adequate housing, the cornerstone of social and economic development.
                </p>
                <p class="heading__desc mb-20">
                    How can we meet the increasing demand for modern infrastructure while ensuring sustainability and making our world a better place?
                </p>
                <div class="d-flex align-items-center mt-30">
                  <a href="{{ route('user.service') }}" class="btn btn__secondary mr-30">
                    <i class="icon-arrow-right"></i> <span>Learn More</span>
                  </a>
                  {{-- <img src="{{ asset('assets/images/about/singnture.png') }}" alt="singnture"> --}}
                </div>
              </div><!-- /.about__text -->
            </div><!-- /.col-lg-5 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /.About Layout 1 -->

      <!-- ======================
      Features Layout 1
      ========================= -->
      <section class="features-layout1 pt-120 pb-80">
        <div class="bg-img"><img src="{{ asset('assets/images/backgrounds/3.jpg') }}" alt="background"></div>
        <div class="container">
          <div class="row mb-40">
            <div class="col-12">
              <h2 class="heading__subtitle color-primary">Building Tomorrow Today.</h2>
            </div><!-- /col-12 -->
            <div class="col-sm-12 col-md-12 col-lg-5">
              <h3 class="heading__title color-white">Transforming Construction with Sustainable and Innovative Modular Solutions!</h3>
            </div><!-- /col-lg-5 -->
            <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-1">
              <p class="heading__desc color-gray mb-20">In recent years, the demand for efficient, high-quality modular solutions has surged. However, the capital and expertise required to establish and scale-up modular construction facilities are substantial. </p>
              <p class="heading__desc color-gray mb-30">Together, these factors pose challenges to maintaining growth and sustainability in the modular construction industry.</p>
              <a href="#" class="btn btn__primary btn__outlined btn__custom">
                <i class="icon-arrow-right"></i>
                <span>Explore All Features!</span>
              </a>
            </div><!-- /.col-lg-6 -->
          </div><!-- /.row -->
          <div class="row">
            <div class="col-12">
              <div class="slick-carousel"
                data-slick='{"slidesToShow": 4, "slidesToScroll": 4, "arrows": false, "dots": true, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 3, "slidesToScroll": 3}}, {"breakpoint": 767, "settings": {"slidesToShow": 1, "slidesToScroll": 1}}]}'>
                <!-- Feature item #1 -->
                <div class="feature-item">
                  <div class="feature__icon">
                    <i class="icon-hydro-power3"></i>
                  </div>
                  <h4 class="feature__title">Optimize Your Investment</h4>
                  <p class="feature__desc">Save on construction costs and increase the value of your property with our cutting-edge modular solutions.</p>
                  <a href="#" class="btn__link">
                    <i class="icon-arrow-right icon-filled"></i>
                    <span>Explore More</span>
                  </a>
                </div><!-- /.feature-item -->
                <!-- Feature item #2 -->
                <div class="feature-item">
                  <div class="feature__icon">
                    <i class="icon-eco-house"></i>
                  </div>
                  <h4 class="feature__title">5-Star Customer Service</h4>
                  <p class="feature__desc">We are committed to exceeding customer expectations with every interaction, ensuring that our service is always top-notch. </p>
                  <a href="#" class="btn__link">
                    <i class="icon-arrow-right icon-filled"></i>
                    <span>Explore More</span>
                  </a>
                </div><!-- /.feature-item -->
                <!-- Feature item #3 -->
                <div class="feature-item">
                  <div class="feature__icon">
                    <i class="icon-energy2"></i>
                  </div>
                  <h4 class="feature__title">Innovative Modular Solutions</h4>
                  <p class="feature__desc">Every project benefits from our extensive experience and commitment to delivering modular units that meet diverse needs, from residential to industrial applications.</p>
                  <a href="#" class="btn__link">
                    <i class="icon-arrow-right icon-filled"></i>
                    <span>Explore More</span>
                  </a>
                </div><!-- /.feature-item -->
                <!-- Feature item #4 -->
                <div class="feature-item">
                  <div class="feature__icon">
                    <i class="icon-electric-car"></i>
                  </div>
                  <h4 class="feature__title">Consult & Planning</h4>
                  <p class="feature__desc">Our team provides expert consultation and planning services, ensuring that your modular project is executed flawlessly and efficiently.</p>
                  <a href="#" class="btn__link">
                    <i class="icon-arrow-right icon-filled"></i>
                    <span>Explore More</span>
                  </a>
                </div><!-- /.feature-item -->
                <!-- Feature item #5 -->
                <div class="feature-item">
                  <div class="feature__icon">
                    <i class="icon-eco-house"></i>
                  </div>
                  <h4 class="feature__title">Certified Experts</h4>
                  <p class="feature__desc">Our team of certified engineers and construction professionals brings years of experience, capable of designing and executing any modular project to perfection.</p>
                  <a href="#" class="btn__link">
                    <i class="icon-arrow-right icon-filled"></i>
                    <span>Explore More</span>
                  </a>
                </div><!-- /.feature-item -->
                <!-- Feature item #6 -->
                <div class="feature-item">
                  <div class="feature__icon">
                    <i class="icon-energy2"></i>
                  </div>
                  <h4 class="feature__title">Consult & Planning</h4>
                  <p class="feature__desc">Our team provides expert consultation and planning services, ensuring that your modular project is executed flawlessly and efficiently.</p>
                  <a href="#" class="btn__link">
                    <i class="icon-arrow-right icon-filled"></i>
                    <span>Explore More</span>
                  </a>
                </div><!-- /.feature-item -->
                <!-- Feature item #7 -->
                <div class="feature-item">
                  <div class="feature__icon">
                    <i class="icon-electric-car"></i>
                  </div>
                  <h4 class="feature__title">Awards & Milestones</h4>
                  <p class="feature__desc">With nearly 20 years of experience in the industry, we are proud of our track record of success and recognition in the modular construction field.</p>
                  <a href="#" class="btn__link">
                    <i class="icon-arrow-right icon-filled"></i>
                    <span>Explore More</span>
                  </a>
                </div><!-- /.feature-item -->
              </div><!-- /.carousel-->
            </div><!-- /.col-12 -->
          </div><!-- /.row -->
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6">
              <div class="read-note d-flex flex-wrap mt-60">
                <div class="rating mb-10 mr-50">
                  <i class="fas fa-star color-primary"></i>
                  <i class="fas fa-star color-primary"></i>
                  <i class="fas fa-star color-primary"></i>
                  <i class="fas fa-star color-primary"></i>
                  <i class="fas fa-star color-primary"></i>
                </div>
                <p class="read-note__text">
                  <span class="font-weight-bold text-underlined-primary color-primary">99.9% Customer Satisfaction</span>
                  based on 750+ reviews and 20,000 Objective Resource
                </p>
              </div>
            </div>
          </div>
        </div><!-- /.container -->
      </section><!-- /.Features Layout 1 -->

      <!-- =========================
         Banner layout 1
        =========================== -->
      <section class="banner-layout1 py-0">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-7">
              <div class="text-block">
                <div class="banner__text">
                  <p>Enhancing Efficiency and Performance in Modular Construction
                    With our extensive experience in the modular industry, we provide comprehensive material sourcing, financing, and supply chain expertise at every stage of the project.</p>
                </div><!-- /.banner__text -->
                <ul class="list-items list-items-layout2 list-unstyled mb-0">
                  <li>Expert On-Site Service and Support</li>
                  <li>Consistent Quality for Optimal Performance</li>
                  <li>Minimized Issues Through Superior Monitoring</li>
                </ul>
              </div><!-- /.text-block -->
            </div><!-- /.col-lg-7 -->
            <div class="col-sm-12 col-md-12 col-lg-5">
              <div class="img-block">
                <img src="{{ asset('assets/images/pbb-img/building.jpg') }}" alt="banner">
              </div><!-- /.img-block -->
            </div><!-- /.col-lg-5 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /.Banner layout 1 -->

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
            <div class="col-sm-12 col-md-6 col-lg-4">
              <div class="service-item">
                <div class="service__img">
                  <img src="{{ asset('assets/images/pbb-img/modular-solution/module-1.jpg') }}" alt="service" loading="lazy" style="max-height: 32.8vh !important; min-width: 100% !important;">
                </div><!-- /.service__img -->
                <div class="service__body">
                  <h4 class="service__title">Heavy Equipment & Industrial Solutions</h4>
                  <p class="service__desc">Engineered for strength and durability, our heavy equipment and industrial solutions are built to handle the most demanding operations, delivering unmatched performance, efficiency, and longevity in tough environments.</p>
                  <a href="{{ route('user.service.heavy-equipment-and-industrial-solutions') }}" class="btn btn__secondary btn__outlined btn__custom">
                    <span>Read More</span>
                    <i class="icon-arrow-right"></i>
                  </a>
                </div><!-- /.service__body -->
              </div><!-- /.service-item -->
            </div><!-- /.col-lg-4 -->

            <div class="col-sm-12 col-md-6 col-lg-4">
              <div class="service-item">
                <div class="service__img">
                  <img src="{{ asset('assets/images/pbb-img/modular-solution/module-2.jpg') }}" alt="service" loading="lazy" style="max-height: 32.8vh !important; min-width: 100% !important;">
                </div><!-- /.service__img -->
                <div class="service__body">
                  <h4 class="service__title">Advanced Energy & Electrical Systems</h4>
                  <p class="service__desc">Powering the future with intelligent design, our advanced energy and electrical systems provide safe, efficient, and scalable solutions for energy distribution and control across diverse industrial landscapes.</p>
                  <a href="{{ route('user.service.advanced-energy-and-electrical-systems') }}" class="btn btn__secondary btn__outlined btn__custom">
                    <span>Read More</span>
                    <i class="icon-arrow-right"></i>
                  </a>
                </div><!-- /.service__body -->
              </div><!-- /.service-item -->
            </div><!-- /.col-lg-4 -->

            <div class="col-sm-12 col-md-6 col-lg-4">
              <div class="service-item">
                <div class="service__img">
                  <img src="{{ asset('assets/images/pbb-img/modular-solution/module-3.jpg') }}" alt="service" loading="lazy" style="max-height: 32.8vh !important; min-width: 100% !important;">
                </div><!-- /.service__img -->
                <div class="service__body">
                  <h4 class="service__title">Smart Mobility & Automotive Parts</h4>
                  <p class="service__desc">Powering the future with intelligent design, our advanced energy and electrical systems provide safe, efficient, and scalable solutions for energy distribution and control across diverse industrial landscapes.</p>
                  <a href="{{ route('user.service.smart-mobility-and-automotive-parts') }}" class="btn btn__secondary btn__outlined btn__custom">
                    <span>Read More</span>
                    <i class="icon-arrow-right"></i>
                  </a>
                </div><!-- /.service__body -->
              </div><!-- /.service-item -->
            </div><!-- /.col-lg-4 -->

            <div class="col-sm-12 col-md-6 col-lg-4">
              <div class="service-item">
                <div class="service__img">
                  <img src="{{ asset('assets/images/pbb-img/modular-solution/module-4.jpg') }}" alt="service" loading="lazy" style="max-height: 32.8vh !important; min-width: 100% !important;">
                </div><!-- /.service__img -->
                <div class="service__body">
                  <h4 class="service__title">Instrumentation & Measurement Solutions</h4>
                  <p class="service__desc">Precision at its core, our instrumentation and measurement solutions deliver accurate, real-time insights essential for process optimization, quality assurance, and regulatory compliance across industries.</p>
                  <a href="{{ route('user.service.instrumentation-and-measurement-solutions') }}" class="btn btn__secondary btn__outlined btn__custom">
                    <span>Read More</span>
                    <i class="icon-arrow-right"></i>
                  </a>
                </div><!-- /.service__body -->
              </div><!-- /.service-item -->
            </div><!-- /.col-lg-4 -->

            <div class="col-sm-12 col-md-6 col-lg-4">
              <div class="service-item">
                <div class="service__img">
                  <img src="{{ asset('assets/images/pbb-img/modular-solution/module-5.jpg') }}" alt="service" loading="lazy" style="max-height: 32.8vh !important; min-width: 100% !important;">
                </div><!-- /.service__img -->
                <div class="service__body">
                  <h4 class="service__title">Sustainable Building Material, Modular & Infrastructure</h4>
                  <p class="service__desc">Built for resilience and sustainability, our innovative building materials and modular infrastructure systems accelerate construction timelines while reducing environmental impact, promoting green and efficient development.</p>
                  <a href="{{ route('user.service.sustainable-building-material-modular-and-infrastructure') }}" class="btn btn__secondary btn__outlined btn__custom">
                    <span>Read More</span>
                    <i class="icon-arrow-right"></i>
                  </a>
                </div><!-- /.service__body -->
              </div><!-- /.service-item -->
            </div><!-- /.col-lg-4 -->

            <div class="col-sm-12 col-md-6 col-lg-4">
              <div class="service-item">
                <div class="service__img">
                  <img src="{{ asset('assets/images/pbb-img/modular-solution/module-6.jpg') }}" alt="service" loading="lazy" style="max-height: 32.8vh !important; min-width: 100% !important;">
                </div><!-- /.service__img -->
                <div class="service__body">
                  <h4 class="service__title">Precision Digital & IT Solutions</h4>
                  <p class="service__desc">Transforming operations through innovation, our precision digital and IT solutions empower businesses with intelligent automation, seamless connectivity, and data-driven decision-making tools tailored for the digital era.</p>
                  <a href="{{ route('user.service.precision-digital-and-it-solutions') }}" class="btn btn__secondary btn__outlined btn__custom">
                    <span>Read More</span>
                    <i class="icon-arrow-right"></i>
                  </a>
                </div><!-- /.service__body -->
              </div><!-- /.service-item -->
            </div><!-- /.col-lg-4 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /.Services Layout 1 -->
@endsection
