@extends('user.layouts.app')

@section('content')
    <!-- ============================
        Slider
    ============================== -->
    <section class="slider">
        <div class="slick-carousel carousel-arrows-light carousel-dots-light m-slides-0" data-slick='{"slidesToShow": 1, "arrows": true, "dots": true, "speed": 700,"fade": true,"cssEase": "linear"}'>
          <div class="slide-item align-v-h bg-overlay bg-overlay-2">
            <div class="bg-img"><img src="{{ asset('assets/images/sliders/1.jpg') }}" alt="slide img"></div>
            <div class="container">
              <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-8">
                  <div class="slide__body">
                    <span class="slide__subtitle">Modular Solutions for Commercial, Residential & Industrial Projects</span>
                    <h2 class="slide__title">Building the Future, One Module at a Time!</h2>
                    <p class="slide__desc">As a leader in modular construction, we offer high-quality, customizable modular solutions for all types of projects. Our products are designed to be delivered swiftly and efficiently, whether for urban developments or remote locations.</p>
                    <div class="d-flex">
                      <a href="{{ route('user.service') }}" class="btn btn__primary mr-30">
                        <i class="icon-arrow-right"></i><span>More About Us</span>
                      </a>
                      <a href="{{ route('user.about-us') }}" class="btn btn__white">More About Us!</a>
                    </div>
                  </div><!-- /.slide__body -->
                </div><!-- /.col-xl-8 -->
              </div><!-- /.row -->
            </div><!-- /.container -->
          </div><!-- /.slide-item -->
          <div class="slide-item align-v-h bg-overlay">
            <div class="bg-img"><img src="{{ asset('assets/images/sliders/2.jpg') }}" alt="slide img"></div>
            <div class="container">
              <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-8">
                  <div class="slide__body">
                    <span class="slide__subtitle">Sustainable Modular Units for Every Industry</span>
                    <h2 class="slide__title">Transforming Spaces with Quality and Innovation!</h2>
                    <p class="slide__desc">We are committed to providing sustainable, high-performance modular units for commercial, residential, and industrial applications. Our global partnerships allow us to offer advanced modular solutions with rapid delivery and installation.</p>
                    <div class="d-flex">
                      <a href="{{ route('user.service') }}" class="btn btn__primary mr-30">
                        <i class="icon-arrow-right"></i><span>More About Us</span>
                      </a>
                      <a href="{{ route('user.about-us') }}" class="btn btn__white">More About Us!</a>
                    </div>
                  </div><!-- /.slide__body -->
                </div><!-- /.col-xl-8 -->
              </div><!-- /.row -->
            </div><!-- /.container -->
          </div><!-- /.slide-item -->
          <div class="slide-item align-v-h bg-overlay">
            <div class="bg-img"><img src="{{ asset('assets/images/sliders/3.jpg') }}" alt="slide img"></div>
            <div class="container">
              <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-8">
                  <div class="slide__body">
                    <span class="slide__subtitle">High-Performance Modular Systems for All Needs</span>
                    <h2 class="slide__title">Innovation Meets Efficiency in Every Unit!</h2>
                    <p class="slide__desc">With exclusive access to the latest modular technology, we deliver reliable and cost-effective modular systems tailored to your project requirements. Experience unmatched quality and fast deployment for your construction needs.</p>
                    <div class="d-flex">
                      <a href="{{ route('user.service') }}" class="btn btn__primary mr-30">
                        <i class="icon-arrow-right"></i><span>More About Us</span>
                      </a>
                      <a href="{{ route('user.about-us') }}" class="btn btn__white">More About Us!</a>
                    </div>
                  </div><!-- /.slide__body -->
                </div><!-- /.col-xl-8 -->
              </div><!-- /.row -->
            </div><!-- /.container -->
          </div><!-- /.slide-item -->
        </div><!-- /.carousel -->
      </section><!-- /.slider -->

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
      services Layout 2
      ========================= -->
      <section class="services-layout2 pt-120">
        <div class="bg-img"><img src="{{ asset('assets/images/backgrounds/5.jpg') }}" alt="background"></div>
        <div class="container">
          <div class="row mb-70">
            <div class="col-12">
              <h2 class="heading__subtitle color-primary">Building a Better Future Today.</h2>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-5">
              <h3 class="heading__title color-white">
                A Leading Provider of Modular Solutions for Developers, Builders & Contractors.
              </h3>
            </div><!-- /col-lg-5 -->
            <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-1">
                <p class="heading__desc font-weight-bold color-gray mb-30">
                    Our modular expertise focuses on delivering innovative construction solutions that reduce project timelines, optimize costs, and enhance the overall performance of your developments.
                </p>
              <div class="d-flex align-items-center">
                <a href="{{ route('user.request-quote') }}" class="btn btn__primary btn__primary-style2 mr-30">
                  <i class="icon-arrow-right"></i>
                  <span>Request A Quote</span>
                </a>
                <a href="{{ route('user.service') }}" class="btn btn__white btn__link">
                  <i class="icon-arrow-right"></i>
                  <span>Explore All Services</span>
                </a>
              </div>
            </div><!-- /.col-lg-6 -->
          </div><!-- /.row -->
          <div class="row">
            <div class="col-12">
              <div class="slick-carousel carousel-arrows-light"
                data-slick='{"slidesToShow": 4, "slidesToScroll": 4, "arrows": true, "dots": true, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 2, "slidesToScroll": 2}}, {"breakpoint": 767, "settings": {"slidesToShow": 1, "slidesToScroll": 1}}]}'>
                <!-- service item #1 -->
                <div class="service-item">
                  <div class="service__img">
                    <img src="{{ asset('assets/images/services/1.jpg') }}" alt="service" loading="lazy">
                  </div><!-- /.service__img -->
                  <div class="service__body">
                    <h4 class="service__title">Rapid Build Commercial Units</h4>
                    <p class="service__desc">
                        Perfect for businesses needing swift setups, our commercial units offer flexible designs that cater to retail, office spaces, and more—delivered and installed within weeks.
                    </p>
                    <a href="{{ route('user.service.detail') }}" class="btn btn__secondary btn__outlined btn__custom">
                      <span>Read More</span>
                      <i class="icon-arrow-right"></i>
                    </a>
                  </div><!-- /.service__body -->
                </div><!-- /.service-item -->
                <!-- service item #2 -->
                <div class="service-item">
                  <div class="service__img">
                    <img src="{{ asset('assets/images/services/2.jpg') }}" alt="service" loading="lazy">
                  </div><!-- /.service__img -->
                  <div class="service__body">
                    <h4 class="service__title">Residential Modular Homes</h4>
                    <p class="service__desc">
                        Tailored for modern living, our residential packages provide sustainable, energy-efficient homes that can be customized to suit any lifestyle or location.
                    </p>
                    <a href="{{ route('user.service.detail') }}" class="btn btn__secondary btn__outlined btn__custom">
                      <span>Read More</span>
                      <i class="icon-arrow-right"></i>
                    </a>
                  </div><!-- /.service__body -->
                </div><!-- /.service-item -->
                <!-- service item #3 -->
                <div class="service-item">
                  <div class="service__img">
                    <img src="{{ asset('assets/images/services/3.jpg') }}" alt="service" loading="lazy">
                  </div><!-- /.service__img -->
                  <div class="service__body">
                    <h4 class="service__title">Industrial Modular Complexes</h4>
                    <p class="service__desc">
                        Designed for factories, warehouses, and industrial facilities, our modular complexes are built to withstand heavy usage while offering scalable and adaptable spaces.
                    </p>
                    <a href="{{ route('user.service.detail') }}" class="btn btn__secondary btn__outlined btn__custom">
                      <span>Read More</span>
                      <i class="icon-arrow-right"></i>
                    </a>
                  </div><!-- /.service__body -->
                </div><!-- /.service-item -->
                <!-- service item #4 -->
                <div class="service-item">
                  <div class="service__img">
                    <img src="{{ asset('assets/images/services/4.jpg') }}" alt="service" loading="lazy">
                  </div><!-- /.service__img -->
                  <div class="service__body">
                    <h4 class="service__title">Educational and Healthcare Facilities</h4>
                    <p class="service__desc">
                        Delivering high-quality, safe, and functional spaces for schools, clinics, and hospitals with rapid deployment to meet urgent community needs.
                    </p>
                    <a href="{{ route('user.service.detail') }}" class="btn btn__secondary btn__outlined btn__custom">
                      <span>Read More</span>
                      <i class="icon-arrow-right"></i>
                    </a>
                  </div><!-- /.service__body -->
                </div><!-- /.service-item -->
                <!-- service item #5 -->
                <div class="service-item">
                  <div class="service__img">
                    <img src="{{ asset('assets/images/services/5.jpg') }}" alt="service" loading="lazy">
                  </div><!-- /.service__img -->
                  <div class="service__body">
                    <h4 class="service__title">Hospitality and Leisure Units</h4>
                    <p class="service__desc">
                        From hotels to recreational facilities, our hospitality solutions offer aesthetically pleasing and functional spaces that enhance guest experiences.
                    </p>
                    <a href="{{ route('user.service.detail') }}" class="btn btn__secondary btn__outlined btn__custom">
                      <span>Read More</span>
                      <i class="icon-arrow-right"></i>
                    </a>
                  </div><!-- /.service__body -->
                </div><!-- /.service-item -->
                <!-- service item #6 -->
                <div class="service-item">
                  <div class="service__img">
                    <img src="{{ asset('assets/images/services/6.jpg') }}" alt="service" loading="lazy">
                  </div><!-- /.service__img -->
                  <div class="service__body">
                    <h4 class="service__title">Remote and Offsite Solutions</h4>
                    <p class="service__desc">
                        Ideal for remote locations, our offsite packages provide all-in-one modular units designed for mining, oil & gas, and other industries operating in challenging environments.
                    </p>
                    <a href="{{ route('user.service.detail') }}" class="btn btn__secondary btn__outlined btn__custom">
                      <span>Read More</span>
                      <i class="icon-arrow-right"></i>
                    </a>
                  </div><!-- /.service__body -->
                </div><!-- /.service-item -->
              </div><!-- /.carousel-->
            </div><!-- /.col-12 -->
          </div><!-- /.row -->
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-5">
              <p class="read-note__text">
                <strong class="color-white">We lead the shift towards more sustainable, reliable, and efficient building systems. Find the modular solution that meets your needs and helps build a better tomorrow. </strong>
                {{-- <a href="#" class="text-underlined-primary color-primary font-weight-bold">
                  <span>Find Your Solution </span> <i class="icon-arrow-right"></i>
                </a> --}}
              </p>
            </div><!-- /.col-lg-5 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /.services Layout 2 -->

      <!-- ======================
      Features Layout 2
      ========================= -->
      <section class="features-layout2 pt-120">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-5">
              <h2 class="heading__subtitle color-primary">Building Tomorrow Today.</h2>
              <h3 class="heading__title">Transforming Construction with Sustainable and Innovative Modular Solutions!</h3>
              <p class="heading__desc mb-30">
                In recent years, the demand for efficient, high-quality modular solutions has surged. However, the capital and expertise required to establish and scale-up modular construction facilities are substantial. Together, these factors pose challenges to maintaining growth and sustainability in the modular construction industry.
              </p>
              {{-- <p class="heading__desc mb-40">Together, these factors pose a serious challenge to sustainable operation and
                growth of global solar manufacturers.</p> --}}
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
                    <h4 class="feature__title">Optimize Your Investment</h4>
                    <p class="feature__desc">
                        Save on construction costs and increase the value of your property with our cutting-edge modular solutions.
                    </p>
                  </div><!-- /.feature-item -->
                </div><!-- /.col-sm-6 -->
                <!-- Feature item #2 -->
                <div class="col-sm-6">
                  <div class="feature-item">
                    <div class="feature__icon">
                      <i class="icon-biosphere"></i>
                    </div>
                    <h4 class="feature__title">5-Star Customer Service</h4>
                    <p class="feature__desc">
                        We are committed to exceeding customer expectations with every interaction, ensuring that our service is always top-notch.
                    </p>
                  </div><!-- /.feature-item -->
                </div><!-- /.col-sm-6 -->
                <!-- Feature item #3 -->
                <div class="col-sm-6">
                  <div class="feature-item">
                    <div class="feature__icon">
                      <i class="icon-eco-house"></i>
                    </div>
                    <h4 class="feature__title">Innovative Modular Solutions</h4>
                    <p class="feature__desc">
                        Every project benefits from our extensive experience and commitment to delivering modular units that meet diverse needs, from residential to industrial applications.
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
                    <p class="feature__desc">
                        Our team provides expert consultation and planning services, ensuring that your modular project is executed flawlessly and efficiently.
                    </p>
                  </div><!-- /.feature-item -->
                </div><!-- /.col-sm-6 -->
                <!-- Feature item #5 -->
                <div class="col-sm-6">
                  <div class="feature-item">
                    <div class="feature__icon">
                      <i class="icon-electric-car"></i>
                    </div>
                    <h4 class="feature__title">Certified Experts</h4>
                    <p class="feature__desc">
                        Our team of certified engineers and construction professionals brings years of experience, capable of designing and executing any modular project to perfection.
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
                    <p class="feature__desc">
                        With nearly 20 years of experience in the industry, we are proud of our track record of success and recognition in the modular construction field.
                    </p>
                  </div><!-- /.feature-item -->
                </div><!-- /.col-sm-6 -->
              </div><!-- /.row -->
            </div><!-- /.col-lg-6 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /.Features Layout 2 -->

      <!-- ======================
     portfolio Layout 3
      ========================= -->
      <section class="portfolio-layout3 portfolio-carousel pt-120">
        <div class="bg-img"><img src="{{ asset('assets/images/backgrounds/5.jpg') }}" alt="background"></div>
        <div class="container">
          <div class="row mb-60">
            <div class="col-12">
              <h2 class="heading__subtitle color-primary">Elevating Modular Construction Excellence.</h2>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-5">
              <h3 class="heading__title color-white">Latest Projects, Solutions, and Innovations</h3>
            </div><!-- /col-lg-5 -->
            <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-1">
              <p class="heading__desc font-weight-bold color-gray mb-30">
                With our cutting-edge modular technologies, a clear focus on customer needs, and a dedicated team of 1,210 professionals, we are transforming the construction landscape. Let’s build a better future today!
              </p>
              <a href="{{ route('user.service') }}" class="btn btn__white btn__outlined">
                <i class="icon-arrow-right"></i>
                <span>Our Core Values</span>
              </a>
            </div><!-- /.col-lg-6 -->
          </div><!-- /.row -->
          <div class="row">
            <div class="col-12">
              <div class="carousel-container">
                <div class="slick-carousel carousel-arrows-light carousel-dots-light"
                  data-slick='{"slidesToShow": 3, "slidesToScroll": 3, "arrows": true, "dots": true, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 2 ,"slidesToScroll": 2}}, {"breakpoint": 767, "settings": {"slidesToShow": 2,"slidesToScroll": 2}}, {"breakpoint": 480, "settings": {"slidesToShow": 1,"slidesToScroll": 1}}]}'>
                  <!-- portfolio item #1 -->
                  <div class="portfolio-item">
                    <div class="portfolio__img">
                      <img src="{{ asset('assets/images/portfolio/grid/1.jpg') }}" alt="portfolio img">
                    </div><!-- /.portfolio-img -->
                    <div class="portfolio__body">
                      <div class="portfolio__cat">
                        <a href="#">Finance</a><a href="#">Supply Chain</a>
                      </div><!-- /.portfolio-cat -->
                      <h4 class="portfolio__title"><a href="#">Expanding The Solar Supply Chain Finance Program</a></h4>
                      <p class="portfolio__desc">We has announced the expansion of its solar supply chain finance (SCF)
                        program for PV module manufacturers...</p>
                      <a href="{{ route('user.projects.detail') }}" class="btn btn__primary btn__sm">
                        <i class="icon-arrow-right"></i>
                        <span>Explore More</span>
                      </a>
                    </div><!-- /.portfolio__body -->
                  </div><!-- /.portfolio-item -->
                  <!-- portfolio item #2 -->
                  <div class="portfolio-item">
                    <div class="portfolio__img">
                      <img src="{{ asset('assets/images/portfolio/grid/2.jpg') }}" alt="portfolio img">
                    </div><!-- /.portfolio-img -->
                    <div class="portfolio__body">
                      <div class="portfolio__cat">
                        <a href="#">Wind Energy</a><a href="#">Innovations</a>
                      </div><!-- /.portfolio-cat -->
                      <h4 class="portfolio__title"><a href="#">Addressing Wind Energy Innovation Challenges</a></h4>
                      <p class="portfolio__desc">We has announced the expansion of its solar supply chain finance (SCF)
                        program for PV module manufacturers...</p>
                      <a href="{{ route('user.projects.detail') }}" class="btn btn__primary btn__sm">
                        <i class="icon-arrow-right"></i>
                        <span>Explore More</span>
                      </a>
                    </div><!-- /.portfolio__body -->
                  </div><!-- /.portfolio-item -->
                  <!-- portfolio item #3 -->
                  <div class="portfolio-item">
                    <div class="portfolio__img">
                      <img src="{{ asset('assets/images/portfolio/grid/3.jpg') }}" alt="portfolio img">
                    </div><!-- /.portfolio-img -->
                    <div class="portfolio__body">
                      <div class="portfolio__cat">
                        <a href="#">Electric Vehicle</a><a href="#">Infrastructures</a>
                      </div><!-- /.portfolio-cat -->
                      <h4 class="portfolio__title"><a href="#">Smarter Ways to Manage EV Charging Infrastructures</a></h4>
                      <p class="portfolio__desc">We has announced the expansion of its solar supply chain finance (SCF)
                        program for PV module manufacturers...</p>
                      <a href="{{ route('user.projects.detail') }}" class="btn btn__primary btn__sm">
                        <i class="icon-arrow-right"></i>
                        <span>Explore More</span>
                      </a>
                    </div><!-- /.portfolio__body -->
                  </div><!-- /.portfolio-item -->
                  <!-- portfolio item #4 -->
                  <div class="portfolio-item">
                    <div class="portfolio__img">
                      <img src="{{ asset('assets/images/portfolio/grid/4.jpg') }}" alt="portfolio img">
                    </div><!-- /.portfolio-img -->
                    <div class="portfolio__body">
                      <div class="portfolio__cat">
                        <a href="#">Green Energy</a><a href="#">ECO</a>
                      </div><!-- /.portfolio-cat -->
                      <h4 class="portfolio__title"><a href="#">New Public Attitude Tracker Towards Renewable Energy</a>
                      </h4>
                      <p class="portfolio__desc">We has announced the expansion of its solar supply chain finance (SCF)
                        program for PV module manufacturers...</p>
                      <a href="{{ route('user.projects.detail') }}" class="btn btn__primary btn__sm">
                        <i class="icon-arrow-right"></i>
                        <span>Explore More</span>
                      </a>
                    </div><!-- /.portfolio__body -->
                  </div><!-- /.portfolio-item -->
                  <!-- portfolio item #5 -->
                  <div class="portfolio-item">
                    <div class="portfolio__img">
                      <img src="{{ asset('assets/images/portfolio/grid/5.jpg') }}" alt="portfolio img">
                    </div><!-- /.portfolio-img -->
                    <div class="portfolio__body">
                      <div class="portfolio__cat">
                        <a href="#">Infrastructures</a><a href="#">Gas</a>
                      </div><!-- /.portfolio-cat -->
                      <h4 class="portfolio__title"><a href="#">Dangerous Environmental Impacts of Natural Gas</a></h4>
                      <p class="portfolio__desc">We has announced the expansion of its solar supply chain finance (SCF)
                        program for PV module manufacturers...</p>
                      <a href="{{ route('user.projects.detail') }}" class="btn btn__primary btn__sm">
                        <i class="icon-arrow-right"></i>
                        <span>Explore More</span>
                      </a>
                    </div><!-- /.portfolio__body -->
                  </div><!-- /.portfolio-item -->
                  <!-- portfolio item #6 -->
                  <div class="portfolio-item">
                    <div class="portfolio__img">
                      <img src="{{ asset('assets/images/portfolio/grid/6.jpg') }}" alt="portfolio img">
                    </div><!-- /.portfolio-img -->
                    <div class="portfolio__body">
                      <div class="portfolio__cat">
                        <a href="#">Finance</a><a href="#">Supply Chain</a>
                      </div><!-- /.portfolio-cat -->
                      <h4 class="portfolio__title"><a href="#">Expanding The Solar Supply Chain Finance Program</a></h4>
                      <p class="portfolio__desc">We has announced the expansion of its solar supply chain finance (SCF)
                        program for PV module manufacturers...</p>
                      <a href="{{ route('user.projects.detail') }}" class="btn btn__primary btn__sm">
                        <i class="icon-arrow-right"></i>
                        <span>Explore More</span>
                      </a>
                    </div><!-- /.portfolio__body -->
                  </div><!-- /.portfolio-item -->
                </div><!-- /.carousel-->
                <a href="{{ route('user.projects') }}" class="view-projects d-none d-xl-flex">All Projects</a>
              </div><!-- /.carousel-container -->
            </div><!-- /.col-12 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /.portfolio Layout 3 -->

      <!-- ======================
      Testimonials
      ========================= -->
      <section class="testimonials-layout1 pb-0">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
              <div class="heading text-center mb-40">
                <h2 class="heading__subtitle color-primary">Clients Shaping Their Own Success</h2>
                <h3 class="heading__title">Our Clients Share Their Experiences & Insights</h3>
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
                  <h4 class="cta__title">Custom Design & Delivery</h4>
                  <p class="cta__desc">
                    We work closely with you to design and deliver modular solutions that meet your specific needs, ensuring that every detail aligns with your project requirements.
                  </p>
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
                  <h4 class="cta__title">Flexible Installation Options</h4>
                  <p class="cta__desc">
                    Choose between self-installation or working with local contractors to manage the installation process directly, giving you full control over how your modular units are set up.
                  </p>
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
              <p class="text__link text-center mb-0">
                Discover the possibilities of modular construction tailored to your needs.
                <a href="#">
                  <span>Explore Our Solutions Today!</span> <i class="icon-arrow-right"></i>
                </a>
              </p>
            </div><!-- /.col-12 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /.cta layout1 -->

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
              <strong class="text-center d-block mt-40">Receive an accurate quote within 3-5 days when you fill out the
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
