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
                <img src="{{ asset('assets/images/about/1.jpg') }}" alt="about" class="w-100">
                <div class="video-has-img">
                  <img src="{{ asset('assets/images/video/1.jpg') }}" alt="video">
                  <a class="video__btn video__btn-white popup-video" href="https://www.youtube.com/watch?v=nrJtHemSPW4">
                    <div class="video__player">
                      <i class="fa fa-play"></i>
                    </div>
                  </a>
                  <span class="video__btn-title">Watch Our Intro!</span>
                </div>
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
                  <img src="{{ asset('assets/images/about/singnture.png') }}" alt="singnture">
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
                <img src="{{ asset('assets/images/banners/1.png') }}" alt="banner">
              </div><!-- /.img-block -->
            </div><!-- /.col-lg-5 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /.Banner layout 1 -->

      <!-- ===========================
        portfolio layout1
      ============================= -->
      <section class="portfolio-layout1">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="heading-layout2 mb-40">
                <h3 class="heading__title">Latest Projects</h3>
              </div><!-- /.heading -->
            </div><!-- /.col-lg-12 -->
          </div><!-- /.row -->
          <div class="row">
            <!-- portfolio item #1 -->
            <div class="col-sm-6 col-md-6 col-lg-4">
              <div class="portfolio-item">
                <div class="portfolio__img">
                  <img src="{{ asset('assets/images/portfolio/grid/1.jpg') }}" alt="portfolio img">
                </div><!-- /.portfolio-img -->
                <div class="portfolio__body">
                  <div class="portfolio__cat">
                    <a href="{{ route('user.projects.detail') }}">Finance</a><a href="{{ route('user.projects.detail') }}">Supply Chain</a>
                  </div><!-- /.portfolio-cat -->
                  <h4 class="portfolio__title"><a href="{{ route('user.projects.detail') }}">Expanding The Solar Supply Chain Finance Program</a></h4>
                </div><!-- /.portfolio__body -->
              </div><!-- /.portfolio-item -->
            </div><!-- /.col-lg-4 -->
            <!-- portfolio item #2 -->
            <div class="col-sm-6 col-md-6 col-lg-4">
              <div class="portfolio-item">
                <div class="portfolio__img">
                  <img src="{{ asset('assets/images/portfolio/grid/2.jpg') }}" alt="portfolio img">
                </div><!-- /.portfolio-img -->
                <div class="portfolio__body">
                  <div class="portfolio__cat">
                    <a href="{{ route('user.projects.detail') }}">Wind Energy</a><a href="{{ route('user.projects.detail') }}">Innovations</a>
                  </div><!-- /.portfolio-cat -->
                  <h4 class="portfolio__title"><a href="{{ route('user.projects.detail') }}">Addressing Wind Energy Innovation Challenges</a></h4>
                </div><!-- /.portfolio__body -->
              </div><!-- /.portfolio-item -->
            </div><!-- /.col-lg-4 -->
            <!-- portfolio item #3 -->
            <div class="col-sm-6 col-md-6 col-lg-4">
              <div class="portfolio-item">
                <div class="portfolio__img">
                  <img src="{{ asset('assets/images/portfolio/grid/3.jpg') }}" alt="portfolio img">
                </div><!-- /.portfolio-img -->
                <div class="portfolio__body">
                  <div class="portfolio__cat">
                    <a href="{{ route('user.projects.detail') }}">Electric Vehicle</a><a href="{{ route('user.projects.detail') }}">Infrastructures</a>
                  </div><!-- /.portfolio-cat -->
                  <h4 class="portfolio__title"><a href="{{ route('user.projects.detail') }}">Smarter Ways to Manage EV Charging Infrastructures</a></h4>
                </div><!-- /.portfolio__body -->
              </div><!-- /.portfolio-item -->
            </div><!-- /.col-lg-4 -->
            <!-- portfolio item #4 -->
            <div class="col-sm-6 col-md-6 col-lg-4">
              <div class="portfolio-item">
                <div class="portfolio__img">
                  <img src="{{ asset('assets/images/portfolio/grid/4.jpg') }}" alt="portfolio img">
                </div><!-- /.portfolio-img -->
                <div class="portfolio__body">
                  <div class="portfolio__cat">
                    <a href="{{ route('user.projects.detail') }}">Green Energy</a><a href="{{ route('user.projects.detail') }}">ECO</a>
                  </div><!-- /.portfolio-cat -->
                  <h4 class="portfolio__title"><a href="{{ route('user.projects.detail') }}">New Public Attitude Tracker Towards Renewable Energy</a></h4>
                </div><!-- /.portfolio__body -->
              </div><!-- /.portfolio-item -->
            </div><!-- /.col-lg-4 -->
            <!-- portfolio item #5 -->
            <div class="col-sm-6 col-md-6 col-lg-4">
              <div class="portfolio-item">
                <div class="portfolio__img">
                  <img src="{{ asset('assets/images/portfolio/grid/5.jpg') }}" alt="portfolio img">
                </div><!-- /.portfolio-img -->
                <div class="portfolio__body">
                  <div class="portfolio__cat">
                    <a href="{{ route('user.projects.detail') }}">Infrastructures</a><a href="{{ route('user.projects.detail') }}">Gas</a>
                  </div><!-- /.portfolio-cat -->
                  <h4 class="portfolio__title"><a href="{{ route('user.projects.detail') }}">Dangerous Environmental Impacts of Natural Gas</a></h4>
                </div><!-- /.portfolio__body -->
              </div><!-- /.portfolio-item -->
            </div><!-- /.col-lg-4 -->
            <!-- portfolio item #6 -->
            <div class="col-sm-6 col-md-6 col-lg-4">
              <div class="portfolio-item">
                <div class="portfolio__img">
                  <img src="{{ asset('assets/images/portfolio/grid/6.jpg') }}" alt="portfolio img">
                </div><!-- /.portfolio-img -->
                <div class="portfolio__body">
                  <div class="portfolio__cat">
                    <a href="{{ route('user.projects.detail') }}">Finance</a><a href="{{ route('user.projects.detail') }}">Supply Chain</a>
                  </div><!-- /.portfolio-cat -->
                  <h4 class="portfolio__title"><a href="{{ route('user.projects.detail') }}">Expanding The Solar Supply Chain Finance Program</a></h4>
                </div><!-- /.portfolio__body -->
              </div><!-- /.portfolio-item -->
            </div><!-- /.col-lg-4 -->
            <!-- portfolio item #7 -->
            <div class="col-sm-6 col-md-6 col-lg-4 portfolio-hidden">
              <div class="portfolio-item">
                <div class="portfolio__img">
                  <img src="{{ asset('assets/images/portfolio/grid/1.jpg') }}" alt="portfolio img">
                </div><!-- /.portfolio-img -->
                <div class="portfolio__body">
                  <div class="portfolio__cat">
                    <a href="{{ route('user.projects.detail') }}">Finance</a><a href="{{ route('user.projects.detail') }}">Supply Chain</a>
                  </div><!-- /.portfolio-cat -->
                  <h4 class="portfolio__title"><a href="{{ route('user.projects.detail') }}">Expanding The Solar Supply Chain Finance Program</a></h4>
                </div><!-- /.portfolio__body -->
              </div><!-- /.portfolio-item -->
            </div><!-- /.col-lg-4 -->
            <!-- portfolio item #8 -->
            <div class="col-sm-6 col-md-6 col-lg-4 portfolio-hidden">
              <div class="portfolio-item">
                <div class="portfolio__img">
                  <img src="{{ asset('assets/images/portfolio/grid/3.jpg') }}" alt="portfolio img">
                </div><!-- /.portfolio-img -->
                <div class="portfolio__body">
                  <div class="portfolio__cat">
                    <a href="{{ route('user.projects.detail') }}">Finance</a><a href="{{ route('user.projects.detail') }}">Supply Chain</a>
                  </div><!-- /.portfolio-cat -->
                  <h4 class="portfolio__title"><a href="{{ route('user.projects.detail') }}">Expanding The Solar Supply Chain Finance Program</a></h4>
                </div><!-- /.portfolio__body -->
              </div><!-- /.portfolio-item -->
            </div><!-- /.col-lg-4 -->
            <!-- portfolio item #9 -->
            <div class="col-sm-6 col-md-6 col-lg-4 portfolio-hidden">
              <div class="portfolio-item">
                <div class="portfolio__img">
                  <img src="{{ asset('assets/images/portfolio/grid/2.jpg') }}" alt="portfolio img">
                </div><!-- /.portfolio-img -->
                <div class="portfolio__body">
                  <div class="portfolio__cat">
                    <a href="{{ route('user.projects.detail') }}">Finance</a><a href="{{ route('user.projects.detail') }}">Supply Chain</a>
                  </div><!-- /.portfolio-cat -->
                  <h4 class="portfolio__title"><a href="{{ route('user.projects.detail') }}">Expanding The Solar Supply Chain Finance Program</a></h4>
                </div><!-- /.portfolio__body -->
              </div><!-- /.portfolio-item -->
            </div><!-- /.col-lg-4 -->
          </div><!-- /.row -->
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 text-center">
              <button type="button" class="btn btn__primary btn__loadMore loadMoreportfolio">
                <i class="icon-arrow-right"></i><span>Explore All Projects</span>
              </button>
            </div><!-- /.col-lg-12 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /.portfolio layout1 -->

      <!-- ===========================
        contact layout 2
      ============================= -->
      <section class="contact-layout2 pb-0 bg-overlay bg-overlay-primary-gradient">
        <div class="bg-img"><img src="{{ asset('assets/images/banners/2.jpg') }}" alt=""></div>
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6">
              <div class="col-inner">
                <div class="heading-layout2 heading-light mb-60">
                  <h2 class="heading__subtitle">Save Money, Build Sustainably!</h2>
                  <h3 class="heading__title mb-0">
                    Delivering Value Through Continuous Innovation and Excellence.
                  </h3>
                  <p class="heading__desc">
                    At PT Panca Bima Bergawa, we provide top-tier modular solutions while partnering with leading industry manufacturers to enhance product features, streamline delivery times, and optimize project budgets. Our focus on innovation ensures we deliver exceptional value and performance.
                  </p>
                </div><!-- /.heading -->
                <div class="row fancybox-light">
                  <!-- fancybox item #1 -->
                  <div class="col-sm-4">
                    <div class="fancybox-item">
                      <div class="fancybox__icon">
                        <i class="icon-biosphere2"></i>
                      </div><!-- /.fancybox-icon -->
                      <div class="fancybox__content">
                        <h4 class="fancybox__title mb-0">Environmental Responsibility</h4>
                      </div><!-- /.fancybox-content -->
                    </div><!-- /.fancybox-item -->
                  </div><!-- /.col-sm-4 -->
                  <!-- fancybox item #2 -->
                  <div class="col-sm-4">
                    <div class="fancybox-item">
                      <div class="fancybox__icon">
                        <i class="icon-tube"></i>
                      </div><!-- /.fancybox-icon -->
                      <div class="fancybox__content">
                        <h4 class="fancybox__title mb-0">Customized Solutions</h4>
                      </div><!-- /.fancybox-content -->
                    </div><!-- /.fancybox-item -->
                  </div><!-- /.col-sm-4 -->
                  <!-- fancybox item #3 -->
                  <div class="col-sm-4">
                    <div class="fancybox-item">
                      <div class="fancybox__icon">
                        <i class="icon-electric-charge"></i>
                      </div><!-- /.fancybox-icon -->
                      <div class="fancybox__content">
                        <h4 class="fancybox__title mb-0">Performance Excellence</h4>
                      </div><!-- /.fancybox-content -->
                    </div><!-- /.fancybox-item -->
                  </div><!-- /.col-sm-4 -->
                </div><!-- /.row -->
              </div>
            </div><!-- /.col-xl-6 -->
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6">
              <div class="contact-panel">
                <form class="contact-panel__form" method="post" action="assets/php/contact.php" id="contactForm"
                  novalidate="novalidate">
                  <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                      <h4 class="contact-panel__title">Request A Quote</h4>
                      <p>
                        Please fill out the form below to request a quote for our modular solutions. Our team will get in touch with you shortly to discuss your requirements.
                      </p>
                    </div> <!-- /.col-lg-12 -->
                    <div class="col-sm-6">
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Name" id="contact-name" name="contact-name"
                          required>
                      </div>
                    </div><!-- /.col-sm-6 -->
                    <div class="col-sm-6 col-md-6 col-lg-6">
                      <div class="form-group">
                        <input type="email" class="form-control" placeholder="Email" id="contact-email"
                          name="contact-email" required>
                      </div>
                    </div><!-- /.col-sm-6 -->
                    <div class="col-sm-6">
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Phone" id="contact-Phone"
                          name="contact-phone">
                      </div>
                    </div><!-- /.col-sm-6 -->
                    <div class="col-sm-6">
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Address" id="contact-address"
                          name="contact-address" required>
                      </div>
                    </div><!-- /.col-sm-6 -->
                    <div class="col-sm-6">
                        <span class="font-weight-bold color-heading">Project Type</span>
                      <div class="form-group">
                        <select class="form-control">
                          <option value="Commercial">Commercial</option>
                          <option value="Residential">Residential</option>
                          <option value="Industrial">Industrial</option>
                          <option value="Educational">Educational</option>
                          <option value="Healthcare">Healthcare</option>
                          <option value="Hospitality">Hospitality</option>
                        </select>
                      </div>
                    </div><!-- /.col-sm-6 -->
                    <div class="col-sm-6">
                        <span class="font-weight-bold color-heading">Modular Units Needed</span>
                      <div class="form-group">
                        <select class="form-control">
                          <option value="Office Spaces">Office Spaces</option>
                          <option value="Homes">Homes</option>
                          <option value="Warehouses">Warehouses</option>
                          <option value="Classrooms">Classrooms</option>
                          <option value="Clinics">Clinics</option>
                          <option value="Hotels">Hotels</option>
                        </select>
                      </div>
                    </div><!-- /.col-sm-6 -->
                    <div class="col-sm-6">
                        <span class="font-weight-bold color-heading">Project Location</span>
                        <div class="form-group">
                          <input type="text" class="form-control" placeholder="City" id="city"
                            name="city">
                        </div>
                    </div><!-- /.col-sm-6 -->
                    <div class="col-sm-6">
                      <span class="font-weight-bold color-heading">Budget Range</span>
                      <div class="form-group">
                        <select class="form-control">
                          <option value="Under $50,000">Under $50,000</option>
                          <option value="$50,000 - $100,000">$50,000 - $100,000</option>
                          <option value="$100,000 - $250,000">$100,000 - $250,000</option>
                          <option value="$250,000 - $500,000">$250,000 - $500,000</option>
                          <option value="Over $500,000">Over $500,000</option>
                        </select>
                      </div>
                    </div><!-- /.col-sm-6 -->
                    <div class="col-sm-12 mb-3">
                      <span class="font-weight-bold color-heading">Estimated Timeline</span>
                      <div class="row">
                        <div class="col-md-6">
                          <input type="month" class="form-control" placeholder="start_date" id="start_date"
                            name="start_date">
                        </div>
                        <div class="col-md-6">
                          <input type="month" class="form-control" placeholder="end_date" id="end_date"
                            name="end_date">
                        </div>
                      </div>
                    </div><!-- /.col-sm-6 -->
                    <div class="col-sm-12">
                      <div class="form-group">
                        <span class="font-weight-bold color-heading">Preferred Contact Method</span>

                        <select class="form-control">
                          <option value="all">All</option>
                          <option value="Email">Email</option>
                          <option value="phone">Phone</option>
                        </select>
                      </div>
                    </div><!-- /.col-sm-6 -->

                    <div class="col-12">
                      <button class="btn btn-success w-100" type="submit">Submit</button>
                    </div>
                  </div><!-- /.row -->
                </form>
              </div>
            </div><!-- /.col-xl-6 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /.contact layout 2 -->

      <!-- =====================
           Clients
        ======================== -->
      <section class="clients clients-layout2 border-bottom py-0">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-sm-12 col-md-12 col-lg-6">
              <div class="slick-carousel"
                data-slick='{"slidesToShow": 3, "arrows": false, "dots": false, "autoplay": true,"autoplaySpeed": 2000, "infinite": true, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 3}}, {"breakpoint": 767, "settings": {"slidesToShow": 3}}, {"breakpoint": 480, "settings": {"slidesToShow": 2}}]}'>
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
            </div><!-- /.col-lg-6 -->
            <div class="col-sm-12 col-md-12 col-lg-6">
              <strong class="text-center d-block mt-30">Receive an accurate quote within 3-5 days when you fill out the
                form on this page. Or, give us a call:
                <a href="tel:00201061245741" class="text-underlined-primary">(002) 01061245741</a>
              </strong>
            </div><!-- /.col-lg-6 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /.clients -->

      <!-- ======================
        Blog Grid
      ========================= -->
      <section class="post-grid pb-60">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
              <div class="heading text-center mb-50">
                <h2 class="heading__subtitle">News & Announcements</h2>
                <h3 class="heading__title">Recent Articles</h3>
              </div><!-- /.heading -->
            </div><!-- /.col-lg-6 -->
          </div><!-- /.row -->
          <div class="row">
            <!-- Post Item #1 -->
            <div class="col-sm-12 col-md-6 col-lg-4">
              <div class="post-item">
                <div class="post__img">
                  <a href="{{ route('user.news.detail') }}">
                    <img src="{{ asset('assets/images/blog/grid/1.jpg') }}" alt="post image" loading="lazy">
                  </a>
                  <span class="post__date">Jan 20, 2020</span>
                </div><!-- /.post-img -->
                <div class="post__body">
                  <div class="post__meta d-flex align-items-center">
                    <div class="post__cat">
                      <a href="#">Oil & Gas</a><a href="#">Insights</a>
                    </div><!-- /.post-meta-cat -->
                    <a class="post__author" href="#">Mike Dooley</a>
                  </div><!-- /.post-meta -->
                  <h4 class="post__title"><a href="#">Filing Solar Power Permits in 2020? Consider the Following Important
                      Factors
                    </a></h4>
                  <p class="post__desc">All of these factors are important to consider when permitting your solar system,
                    and can help streamline your process. Take the time to consider...
                  </p>
                  <a href="{{ route('user.news.detail') }}" class="btn btn__secondary btn__outlined btn__custom">
                    <i class="icon-arrow-right"></i>
                    <span>Read More</span>
                  </a>
                </div><!-- /.post-content -->
              </div><!-- /.post-item -->
            </div><!-- /.col-lg-4 -->
            <!-- Post Item #2 -->
            <div class="col-sm-12 col-md-6 col-lg-4">
              <div class="post-item">
                <div class="post__img">
                  <a href="{{ route('user.news.detail') }}">
                    <img src="{{ asset('assets/images/blog/grid/2.jpg') }}" alt="post image" loading="lazy">
                  </a>
                  <span class="post__date">Jan 20, 2020</span>
                </div><!-- /.post-img -->
                <div class="post__body">
                  <div class="post__meta d-flex align-items-center">
                    <div class="post__cat">
                      <a href="#">Oil & Gas</a><a href="#">Insights</a>
                    </div><!-- /.post-meta-cat -->
                    <a class="post__author" href="#">Mike Dooley</a>
                  </div><!-- /.post-meta -->
                  <h4 class="post__title"><a href="#">Filing Solar Power Permits in 2020? Consider the Following Important
                      Factors
                    </a></h4>
                  <p class="post__desc">Batteries are the most expensive part of a solar system. Between an
                    appropriately-size battery bank and a battery-based inverter like the Outback Ra
                  </p>
                  <a href="{{ route('user.news.detail') }}" class="btn btn__secondary btn__outlined btn__custom">
                    <i class="icon-arrow-right"></i>
                    <span>Read More</span>
                  </a>
                </div><!-- /.post-content -->
              </div><!-- /.post-item -->
            </div><!-- /.col-lg-4 -->
            <!-- Post Item #3 -->
            <div class="col-sm-12 col-md-6 col-lg-4">
              <div class="post-item">
                <div class="post__img">
                  <a href="{{ route('user.news.detail') }}">
                    <img src="{{ asset('assets/images/blog/grid/3.jpg') }}" alt="post image" loading="lazy">
                  </a>
                  <span class="post__date">Jan 20, 2020</span>
                </div><!-- /.post-img -->
                <div class="post__body">
                  <div class="post__meta d-flex align-items-center">
                    <div class="post__cat">
                      <a href="#">Oil & Gas</a><a href="#">Insights</a>
                    </div><!-- /.post-meta-cat -->
                    <a class="post__author" href="#">Mike Dooley</a>
                  </div><!-- /.post-meta -->
                  <h4 class="post__title"><a href="#">Filing Solar Power Permits in 2020? Consider the Following Important
                      Factors
                    </a></h4>
                  <p class="post__desc">Department of Energy, which is why we have funded six teams to improve
                    technologies that will protect eagles sharing airspace with the new wind ...
                  </p>
                  <a href="{{ route('user.news.detail') }}" class="btn btn__secondary btn__outlined btn__custom">
                    <i class="icon-arrow-right"></i>
                    <span>Read More</span>
                  </a>
                </div><!-- /.post-content -->
              </div><!-- /.post-item -->
            </div><!-- /.col-lg-4 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /.blog Grid -->
@endsection
