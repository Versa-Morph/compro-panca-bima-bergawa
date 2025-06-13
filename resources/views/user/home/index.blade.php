@extends('user.layouts.app')
@push('style')
<style>
.img-modular {
    height: 150px; /* Sesuaikan tinggi sesuai kebutuhan */
    width: 100%; /* Memastikan lebar menyesuaikan secara proporsional */
    object-fit: cover; /* Memastikan gambar tetap bagus tanpa distorsi */
    display: block; /* Menghindari ada ruang kosong di bawah gambar */
}
.service__body {
    height: 370px !important;
}
</style>
@endpush
@section('content')
    <!-- ============================
        Slider
    ============================== -->
    <section class="slider">
        <div class="slick-carousel carousel-arrows-light carousel-dots-light m-slides-0" data-slick='{"slidesToShow": 1, "arrows": true, "dots": true, "speed": 700,"fade": true,"cssEase": "linear"}'>
          <div class="slide-item align-v-h bg-overlay bg-overlay-2">
            <div class="bg-img"><img src="{{ asset('assets/images/banner-hero/header-1.jpg') }}" alt="slide img"></div>
            <div class="container">
              <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-8">
                  <div class="slide__body">
                    <span class="slide__subtitle">Rugged solutions built for maximum durability and performance in the toughest industrial environments</span>
                    <h2 class="slide__title">Built to Endure, Engineered to Perform</h2>
                    <p class="slide__desc">Our heavy equipment and industrial solutions are designed to thrive in demanding conditions. With robust construction and advanced engineering, they deliver reliable performance and long service life. Perfect for industries that require strength, precision, and minimal downtime.</p>
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
          <div class="slide-item align-v-h bg-overlay bg-overlay-2">
            <div class="bg-img"><img src="{{ asset('assets/images/banner-hero/header-2.jpg') }}" alt="slide img"></div>
            <div class="container">
              <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-8">
                  <div class="slide__body">
                    <span class="slide__subtitle">Smart energy and electrical systems built for efficiency, safety, and scalable performance</span>
                    <h2 class="slide__title">Smart Power for a Smarter Future</h2>
                    <p class="slide__desc">Our advanced energy and electrical systems empower operations with intelligent, efficient, and secure power management. From distribution to control, every component is engineered for maximum safety and flexibility. Ideal for modern infrastructures seeking sustainable and resilient energy solutions.</p>
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
          <div class="slide-item align-v-h bg-overlay bg-overlay-2">
            <div class="bg-img"><img src="{{ asset('assets/images/banner-hero/header-3.jpg') }}" alt="slide img"></div>
            <div class="container">
              <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-8">
                  <div class="slide__body">
                    <span class="slide__subtitle">Innovative automotive components crafted for intelligent, efficient, and future-ready mobility</span>
                    <h2 class="slide__title">Driving Innovation, Powering Mobility</h2>
                    <p class="slide__desc">Our smart mobility solutions bring next-generation performance to automotive systems. From safety-enhancing features to energy-efficient designs, each part is built to adapt to tomorrow’s transport needs. We help move industries toward a smarter and more connected future.</p>
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
            <div class="bg-img"><img src="{{ asset('assets/images/banner-hero/header-4.jpg') }}" alt="slide img"></div>
            <div class="container">
              <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-8">
                  <div class="slide__body">
                    <span class="slide__subtitle">High-precision tools for accurate measurement, monitoring, and industrial optimization</span>
                    <h2 class="slide__title">Measure with Confidence, Act with Precision</h2>
                    <p class="slide__desc">Our instrumentation and measurement systems deliver real-time accuracy you can trust. Designed for critical industries, they ensure consistent quality and reliable insights. Whether for process control or compliance, our tools help optimize performance and decision-making.</p>
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
            <div class="bg-img"><img src="{{ asset('assets/images/banner-hero/header-5.jpg') }}" alt="slide img"></div>
            <div class="container">
              <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-8">
                  <div class="slide__body">
                    <span class="slide__subtitle">Eco-friendly materials and modular systems built for fast, efficient, and sustainable development</span>
                    <h2 class="slide__title">Build Smart, Live Sustainable</h2>
                    <p class="slide__desc">Our sustainable building materials and modular infrastructure solutions streamline construction while reducing environmental impact. Designed for flexibility and rapid deployment, they support modern development goals. Perfect for green buildings and infrastructure that balances speed with responsibility.</p>
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
            <div class="bg-img"><img src="{{ asset('assets/images/banner-hero/header-6.jpg') }}" alt="slide img"></div>
            <div class="container">
              <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-8">
                  <div class="slide__body">
                    <span class="slide__subtitle">Advanced digital and IT solutions that power intelligent automation and data-driven transformation</span>
                    <h2 class="slide__title">Digital Precision, Business Vision</h2>
                    <p class="slide__desc">We deliver cutting-edge digital and IT systems that transform the way businesses operate. From smart automation to deep analytics, our solutions unlock efficiency, scalability, and innovation. Built for organizations ready to thrive in a digitally connected world.</p>
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
                    <img src="{{ asset('assets/images/pbb-img/modular-solution/module-1.jpg') }}" class="img-modular" alt="service" loading="lazy">
                  </div><!-- /.service__img -->
                  <div class="service__body">
                    <h4 class="service__title">Heavy Equipment & Industrial Solutions</h4>
                    <p class="service__desc">
                        Engineered for strength and durability, our heavy equipment and industrial solutions are built to handle the most demanding operations, delivering unmatched performance, efficiency, and longevity in tough environments.
                    </p>
                    {{-- <a href="{{ route('user.service.heavy-equipment-and-industrial-solutions') }}" class="btn btn__secondary btn__outlined btn__custom">
                      <span>Read More</span>
                      <i class="icon-arrow-right"></i>
                    </a> --}}
                  </div><!-- /.service__body -->
                </div><!-- /.service-item -->
                <div class="service-item">
                  <div class="service__img">
                    <img src="{{ asset('assets/images/pbb-img/modular-solution/module-2.jpg') }}" class="img-modular" alt="service" loading="lazy">
                  </div><!-- /.service__img -->
                  <div class="service__body">
                    <h4 class="service__title">Advanced Energy & Electrical Systems</h4>
                    <p class="service__desc">
                        Powering the future with intelligent design, our advanced energy and electrical systems provide safe, efficient, and scalable solutions for energy distribution and control across diverse industrial landscapes.
                    </p>
                    {{-- <a href="{{ route('user.service.advanced-energy-and-electrical-systems') }}" class="btn btn__secondary btn__outlined btn__custom">
                      <span>Read More</span>
                      <i class="icon-arrow-right"></i>
                    </a> --}}
                  </div><!-- /.service__body -->
                </div><!-- /.service-item -->
                <div class="service-item">
                  <div class="service__img">
                    <img src="{{ asset('assets/images/pbb-img/modular-solution/module-3.jpg') }}" class="img-modular" alt="service" loading="lazy">
                  </div><!-- /.service__img -->
                  <div class="service__body">
                    <h4 class="service__title">Smart Mobility & Automotive Parts</h4>
                    <p class="service__desc">
                        Powering the future with intelligent design, our advanced energy and electrical systems provide safe, efficient, and scalable solutions for energy distribution and control across diverse industrial landscapes.
                    </p>
                    {{-- <a href="{{ route('user.service.smart-mobility-and-automotive-parts') }}" class="btn btn__secondary btn__outlined btn__custom">
                      <span>Read More</span>
                      <i class="icon-arrow-right"></i>
                    </a> --}}
                  </div><!-- /.service__body -->
                </div><!-- /.service-item -->
                <!-- service item #2 -->
                <div class="service-item">
                  <div class="service__img">
                    <img src="{{ asset('assets/images/pbb-img/modular-solution/module-4.jpg') }}" class="img-modular" alt="service" loading="lazy">
                  </div><!-- /.service__img -->
                  <div class="service__body">
                    <h4 class="service__title">Instrumentation & Measurement Solutions</h4>
                    <p class="service__desc">
                        Precision at its core, our instrumentation and measurement solutions deliver accurate, real-time insights essential for process optimization, quality assurance, and regulatory compliance across industries.
                    </p>
                    {{-- <a href="{{ route('user.service.instrumentation-and-measurement-solutions') }}" class="btn btn__secondary btn__outlined btn__custom">
                      <span>Read More</span>
                      <i class="icon-arrow-right"></i>
                    </a> --}}
                  </div><!-- /.service__body -->
                </div><!-- /.service-item -->
                <!-- service item #3 -->
                <div class="service-item">
                  <div class="service__img">
                    <img src="{{ asset('assets/images/pbb-img/modular-solution/module-5.jpg') }}" class="img-modular" alt="service" loading="lazy">
                  </div><!-- /.service__img -->
                  <div class="service__body">
                    <h4 class="service__title">Sustainable Building Material, Modular & Infrastructure</h4>
                    <p class="service__desc">
                        Built for resilience and sustainability, our innovative building materials and modular infrastructure systems accelerate construction timelines while reducing environmental impact, promoting green and efficient development.
                    </p>
                    {{-- <a href="{{ route('user.service.sustainable-building-material-modular-and-infrastructure') }}" class="btn btn__secondary btn__outlined btn__custom">
                      <span>Read More</span>
                      <i class="icon-arrow-right"></i>
                    </a> --}}
                  </div><!-- /.service__body -->
                </div><!-- /.service-item -->
                <!-- service item #4 -->
                <div class="service-item">
                  <div class="service__img">
                    <img src="{{ asset('assets/images/pbb-img/modular-solution/module-6.jpg') }}" class="img-modular" alt="service" loading="lazy">
                  </div><!-- /.service__img -->
                  <div class="service__body">
                    <h4 class="service__title">Precision Digital & IT Solutions</h4>
                    <p class="service__desc">
                        Transforming operations through innovation, our precision digital and IT solutions empower businesses with intelligent automation, seamless connectivity, and data-driven decision-making tools tailored for the digital era.
                    </p>
                    {{-- <a href="{{ route('user.service.precision-digital-and-it-solutions') }}" class="btn btn__secondary btn__outlined btn__custom">
                      <span>Read More</span>
                      <i class="icon-arrow-right"></i>
                    </a> --}}
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
      {{-- <section class="portfolio-layout3 portfolio-carousel pt-120">
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
      </section><!-- /.portfolio Layout 3 --> --}}

      <!-- ======================
      Partner
      ========================= -->
      <section class="testimonials-layout1 pb-5">
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
            <div class="col">
                <img src="{{ asset('assets/images/logos/MGMCOAL.png') }}" alt="Client" class="d-block mx-auto">
            </div>
            <div class="col">
                <img src="{{ asset('assets/images/logos/alfaenergy.png') }}" alt="Client" class="d-block mx-auto">
            </div>
            <div class="col">
                <img src="{{ asset('assets/images/logos/barotech-solusi.png') }}" alt="Client" class="d-block mx-auto">
            </div>
            <div class="col">
                <img src="{{ asset('assets/images/logos/DJS.png') }}" alt="Client" class="d-block mx-auto">
            </div>
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /.testimonials -->

      <!-- ======================
      Partner
      ========================= -->
      <section class="testimonials-layout1 pb-5">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
              <div class="heading text-center mb-40">
                <h2 class="heading__subtitle color-primary">Partners Building Success Together</h2>
                <h3 class="heading__title">Our Partners Reveal How Collaboration Drives Success</h3>
              </div><!-- /.heading -->
            </div><!-- /.col-lg-6 -->
          </div><!-- /.row -->
          <div class="row">
            <div class="carouselTickerLogos2 carouselTicker_vertical" id="slide-logos">
                <ul class="carouselTicker__list list-logos">
                    <li class="carouselTicker__item">
                        <div class="item-logo"><img src="{{ asset('assets/images/logos/UNILON.png') }}" alt="Partner"></div>
                    </li>
                    <li class="carouselTicker__item">
                        <div class="item-logo"><img src="{{ asset('assets/images/logos/SUMITOMO.png') }}" alt="Partner"></div>
                    </li>
                    <li class="carouselTicker__item">
                        <div class="item-logo"><img src="{{ asset('assets/images/logos/YUEMA.png') }}" alt="Partner"></div>
                    </li>
                    <li class="carouselTicker__item">
                        <div class="item-logo"><img src="{{ asset('assets/images/logos/ITR.png') }}" alt="Partner"></div>
                    </li>
                    <li class="carouselTicker__item">
                        <div class="item-logo"><img src="{{ asset('assets/images/logos/CLIK.png') }}" alt="Partner"></div>
                    </li>
                    <li class="carouselTicker__item">
                        <div class="item-logo"><img src="{{ asset('assets/images/logos/WEARPRO.png') }}" alt="Partner"></div>
                    </li>
                    <li class="carouselTicker__item">
                        <div class="item-logo"><img src="{{ asset('assets/images/logos/TELEVIC.png') }}" alt="Partner"></div>
                    </li>
                    <li class="carouselTicker__item">
                        <div class="item-logo"><img src="{{ asset('assets/images/logos/VCOM.png') }}" alt="Partner"></div>
                    </li>
                    <li class="carouselTicker__item">
                        <div class="item-logo"><img src="{{ asset('assets/images/logos/PULSAFEEDER.png') }}" alt="Partner"></div>
                    </li>
                    <li class="carouselTicker__item">
                        <div class="item-logo"><img src="{{ asset('assets/images/logos/EBARA.png') }}" alt="Partner"></div>
                    </li>
                    <li class="carouselTicker__item">
                        <div class="item-logo"><img src="{{ asset('assets/images/logos/IHI.png') }}" alt="Partner"></div>
                    </li>
                    <li class="carouselTicker__item">
                        <div class="item-logo"><img src="{{ asset('assets/images/logos/HOLSET.png') }}" alt="Partner"></div>
                    </li>
                    <li class="carouselTicker__item">
                        <div class="item-logo"><img src="{{ asset('assets/images/logos/CLOVER.png') }}" alt="Partner"></div>
                    </li>
                    <li class="carouselTicker__item">
                        <div class="item-logo"><img src="{{ asset('assets/images/logos/BORGWARNER.png') }}" alt="Partner"></div>
                    </li>
                    <li class="carouselTicker__item">
                        <div class="item-logo"><img src="{{ asset('assets/images/logos/GARRET.png') }}" alt="Partner"></div>
                    </li>
                </ul>
            </div>
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /.testimonials -->

      <!-- ======================
      Cta Layout1
      ========================= -->
      <section class="cta-layout1 pt-5">
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
@endsection
