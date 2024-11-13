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
                    <h3 class="heading__title">Consultation & Planning</h3>
                    <p class="heading__desc">We begin by understanding your project needs and objectives. Our team will work closely with you to assess site conditions, define requirements, and outline a tailored modular solution that aligns with your vision.</p>
                  </div>
                  <div class="heading heading-layout2">
                    <h2 class="heading__subtitle">How It Works, Step Two:</h2>
                    <h3 class="heading__title">Contract or Design Approval</h3>
                    <p class="heading__desc">After finalizing the design, we move forward with contract approval or design confirmation. This step ensures that every detail meets your expectations and that we are aligned on project scope, timeline, and budget.</p>
                  </div>
                  <div class="heading heading-layout2">
                    <h2 class="heading__subtitle">How It Works, Step Three:</h2>
                    <h3 class="heading__title">Manufacturing & Assembly</h3>
                    <p class="heading__desc">Our expert team begins the manufacturing process at our facility, utilizing state-of-the-art technologies and high-quality materials. Each modular unit is carefully assembled to meet stringent quality standards before it’s ready for delivery.</p>
                  </div>
                  <div class="heading heading-layout2">
                    <h2 class="heading__subtitle">How It Works, Step Four:</h2>
                    <h3 class="heading__title">Delivery & Installation</h3>
                    <p class="heading__desc">We coordinate the logistics and delivery of your modular units, ensuring on-time arrival to your project site. Our team can also assist with on-site installation, providing seamless assembly to meet your project timeline.</p>
                  </div>
                  <div class="heading heading-layout2">
                    <h2 class="heading__subtitle">How It Works, Step Five:</h2>
                    <h3 class="heading__title">Final Inspection & Handover</h3>
                    <p class="heading__desc">Once the installation is complete, we conduct a thorough inspection to ensure every aspect of the project meets your expectations. After approval, we hand over the completed project, ready for you to use and enjoy.</p>
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
                    The team accelerated our commercial project without compromising on quality. Highly professional and timely service.
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
                    Impressed with the quality standards. From design to installation, everything met our expectations.
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
                    Responsive and innovative solutions helped us save time and costs on modular needs.
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
                    As a contractor on large projects, we rely on their consistent quality and on-time delivery.
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
                    Our modular project collaboration was outstanding, with top-notch technical support and fast production timelines.
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
                    They enabled us to create eco-friendly solutions, perfectly aligning with our green building goals.
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
                    Their expertise and attention to detail made a significant difference in our project’s success. Truly dependable partners.
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
@endsection
