@extends('user.layouts.app')

@section('content')
    <!-- ========================
       page title
    =========================== -->
    <section class="page-title page-title-layout2 bg-overlay bg-overlay-2 bg-parallax">
        <div class="bg-img"><img src="{{ asset('assets/images/pbb-img/modular-solution/module-5.jpg') }}" alt="background"></div>
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6">
              <h1 class="pagetitle__heading mb-0">{{ $service }}</h1>
              <p class="pagetitle__desc">Rugged solutions built for maximum durability and performance in the toughest industrial environments.</p>
              <div class="d-flex align-items-center mt-30">
                <a href="{{ route('user.request-quote') }}" class="btn btn__primary mr-30">
                  <i class="icon-arrow-right"></i> <span>Request a quote</span>
                </a>
                <a href="{{ route('user.about-us') }}" class="btn btn__white">more about us</a>
              </div>
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
                    <li class="breadcrumb-item"><a href="{{ route('user.service') }}">Services</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $service }}</li>
                  </ol>
                </nav>
              </div><!-- /.col-12 -->
            </div><!-- /.row -->
          </div><!-- /.container -->
        </div><!-- /.breadcrumb-wrapper -->
      </section><!-- /.page-title -->

      <!-- ======================
        Text Content Section
      ========================= -->
      <section class="text-content-section pb-90">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-4">
              <aside class="sidebar has-marign-right mb-30">
                <div class="widget widget-categories">
                  <h5 class="widget__title">Services</h5>
                  <div class="widget-content">
                    <ul class="list-unstyled">
                      <li>
                        <a href="{{ route('user.service.heavy-equipment-and-industrial-solutions') }}" class="active"><span>Heavy Equipment & Industrial Solutions</span></a>
                      </li>
                      <li>
                        <a href="{{ route('user.service.advanced-energy-and-electrical-systems') }}"><span>Advanced Energy & Electrical Systems</span></a>
                      </li>
                      <li>
                        <a href="{{ route('user.service.smart-mobility-and-automotive-parts') }}"><span>Smart Mobility & Automotive Parts</span></a>
                      </li>
                      <li>
                        <a href="{{ route('user.service.instrumentation-and-measurement-solutions') }}"><span>Instrumentation & Measurement Solutions</span></a>
                      </li>
                      <li>
                        <a href="{{ route('user.service.sustainable-building-material-modular-and-infrastructure') }}"><span>Sustainable Building Material, Modular & Infrastructure</span></a>
                      </li>
                      <li>
                        <a href="{{ route('user.service.precision-digital-and-it-solutions') }}"><span>Precision Digital & IT Solutions</span></a>
                      </li>
                    </ul>
                  </div><!-- /.widget-content -->
                </div><!-- /.widget-categories -->
                <div class="widget widget-help bg-overlay bg-overlay-primary">
                  <div class="bg-img"><img src="{{ asset('assets/images/banners/7.jpg') }}" alt="banner"></div>
                  <div class="widget__content">
                    <h5 class="widget__title">Dedicated Customer Teams & Agile Services</h5>
                    <p class="widget__desc mb-30">Our strong local presence ensures timely, cost-effective solutions and strict quality adherence, so your construction timelines are met seamlessly and efficiently.</p>
                    <a href="{{ route('user.request-quote') }}" class="btn btn__white btn__outlined btn__block mb-30">
                      Schedule An Appointment
                    </a>
                    <div class="contact__number d-none d-xl-flex align-items-center">
                      <i class="icon-phone"></i>
                      <a href="#!">+62 852 1308 8243</a>
                    </div>
                  </div><!-- /.widget-download -->
                </div><!-- /.widget-help -->
                <div class="widget widget-download">
                  <h5 class="widget__title">Download</h5>
                  <div class="widget__content">
                    <a href="{{ asset('assets/images/pbb-img/service/Modular_Brochure_PT_PANCA_BIMA_BERGAWA .pdf') }}" target="_blank" class="btn btn__secondary btn__block btn__hover3">
                      <span>Modular Brochure</span>
                      <img src="{{ asset('assets/images/icons/pdf.png') }}" alt="pdf">
                    </a>
                    <a href="{{ asset('assets/images/pbb-img/service/Spare_part_Brochure_Panca_Bima_Bergawa.pdf') }}" target="_blank" class="btn btn__secondary btn__block btn__hover3 mt-3">
                      <span>Spare part Brochure</span>
                      <img src="{{ asset('assets/images/icons/pdf.png') }}" alt="pdf">
                    </a>
                  </div><!-- /.widget-content -->
                </div><!-- /.widget-download -->
              </aside><!-- /.sidebar -->
            </div><!-- /.col-lg-4 -->
            <div class="col-sm-12 col-md-12 col-lg-8">
              <div class="text__block mb-30">
                <h5 class="text__block-title">Overview</h5>
                <p class="text__block-desc">Sustainable infrastructure is no longer optional—it’s the foundation of future-ready development. Our Sustainable Building Material, Modular & Infrastructure solutions are designed to reduce environmental impact while accelerating construction timelines and improving structural integrity.</p>
                <p class="text__block-desc">We offer eco-friendly materials, prefabricated modular systems, and smart infrastructure technologies that balance performance, cost-efficiency, and sustainability for residential, commercial, and industrial projects.</p>
              </div><!-- /.text-block -->

              <div class="portfolio-layout3">
                    <div id="filtered-items-wrap">
                        <div class="slick-carousel carousel-arrows-light"
                            data-slick='{"slidesToShow": 2, "slidesToScroll": 2, "arrows": true, "dots": true, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 2, "slidesToScroll": 2}}, {"breakpoint": 767, "settings": {"slidesToShow": 1, "slidesToScroll": 1}}]}'>
                            <!-- portfolio item #1 -->
                            <div class="mix filter-infractures pt-4">
                                <div class="portfolio-item">
                                    <div class="portfolio__img">
                                        <img src="{{ asset('assets/images/portfolio/grid/1.jpg') }}" alt="portfolio img">
                                    </div><!-- /.portfolio-img -->
                                    <div class="portfolio__body">
                                        <div class="portfolio__cat">
                                        </div><!-- /.portfolio-cat -->
                                        <h4 class="portfolio__title">Eco-Friendly Building Materials</h4>
                                        <p class="portfolio__desc">Sustainable building materials designed to reduce environmental impact while maintaining durability, safety, and performance in modern construction.</p>
                                    </div><!-- /.portfolio__body -->
                                </div><!-- /.portfolio-item -->
                            </div><!-- /.col-lg-4 -->

                            <div class="mix filter-infractures pt-4">
                                <div class="portfolio-item">
                                    <div class="portfolio__img">
                                        <img src="{{ asset('assets/images/portfolio/grid/1.jpg') }}" alt="portfolio img">
                                    </div><!-- /.portfolio-img -->
                                    <div class="portfolio__body">
                                        <div class="portfolio__cat">
                                        </div><!-- /.portfolio-cat -->
                                        <h4 class="portfolio__title">Prefabricated Infrastructure</h4>
                                        <p class="portfolio__desc">Modular and prefabricated infrastructure systems enabling faster, cleaner, and more efficient construction with reduced on-site labor and waste.</p>
                                    </div><!-- /.portfolio__body -->
                                </div><!-- /.portfolio-item -->
                            </div><!-- /.col-lg-4 -->

                            <div class="mix filter-infractures pt-4">
                                <div class="portfolio-item">
                                    <div class="portfolio__img">
                                        <img src="{{ asset('assets/images/portfolio/grid/1.jpg') }}" alt="portfolio img">
                                    </div><!-- /.portfolio-img -->
                                    <div class="portfolio__body">
                                        <div class="portfolio__cat">
                                        </div><!-- /.portfolio-cat -->
                                        <h4 class="portfolio__title">Green Materials</h4>
                                        <p class="portfolio__desc">Innovative eco-conscious materials made from recycled or renewable sources, supporting green building initiatives and long-term sustainability.</p>
                                    </div><!-- /.portfolio__body -->
                                </div><!-- /.portfolio-item -->
                            </div><!-- /.col-lg-4 -->

                            <div class="mix filter-infractures pt-4">
                                <div class="portfolio-item">
                                    <div class="portfolio__img">
                                        <img src="{{ asset('assets/images/portfolio/grid/1.jpg') }}" alt="portfolio img">
                                    </div><!-- /.portfolio-img -->
                                    <div class="portfolio__body">
                                        <div class="portfolio__cat">
                                        </div><!-- /.portfolio-cat -->
                                        <h4 class="portfolio__title">Tools & Work Equipment</h4>
                                        <p class="portfolio__desc">Reliable tools and industrial-grade equipment built for precision, durability, and safety across a variety of construction and technical applications.</p>
                                    </div><!-- /.portfolio__body -->
                                </div><!-- /.portfolio-item -->
                            </div><!-- /.col-lg-4 -->
                        </div><!-- /.row -->
                    </div>
              </div>

              <div class="text__block mb-30">
                <h5 class="text__block-title">How It Works?!</h5>
                <p class="text__block-desc">Our approach starts with material innovation—using recycled, low-emission, and high-durability resources for sustainable building. We then apply modular engineering techniques that allow rapid deployment, scalability, and reduced on-site labor.</p>
                <p class="text__block-desc">By integrating smart systems—such as energy-efficient insulation, water management, and structural monitoring—we create infrastructure that not only lasts but adapts to changing needs and environmental conditions.</p>
              </div>
              <div class="video-banner mb-70">
                <img src="{{ asset('assets/images/pbb-img/service/modular-constraction-solution-3.jpg') }}" alt="banner">
                {{-- <a class="video__btn video__btn-white popup-video" href="https://www.youtube.com/watch?v=nrJtHemSPW4">
                  <div class="video__player">
                    <i class="fa fa-play"></i>
                  </div>
                </a> --}}
                <!-- <a class="video__btn video__btn-white popup-video" href="https://www.youtube.com/watch?v=nrJtHemSPW4">
                  <div class="video__player">
                    <i class="fa fa-play"></i>
                  </div>
                </a> -->
              </div><!-- /.video-banner -->
              <div class="text__block mb-30">
                <h5 class="text__block-title">Why Us!</h5>
                <p class="text__block-desc">We don’t just build structures—we build smarter, greener futures. Our solutions are crafted with a long-term sustainability mindset and industry-proven innovation.</p>
              </div>
              <div class="row features-layout3">
                <!-- Feature item #1 -->
                <div class="col-sm-4">
                  <div class="feature-item">
                    {{-- <div class="feature__icon">
                      <i class="icon-hydro-power3"></i>
                    </div> --}}
                    <h4 class="feature__title">Eco-Friendly Materials</h4>
                    <p class="feature__desc">Sourced and designed to minimize carbon footprint.</p>
                    {{-- <a href="#" class="btn__link">
                      <i class="icon-arrow-right icon-filled"></i>
                      <span>Explore More</span>
                    </a> --}}
                  </div><!-- /.feature-item -->
                </div><!-- /.col-sm-4 -->
                <!-- Feature item #2 -->
                <div class="col-sm-4">
                  <div class="feature-item">
                    {{-- <div class="feature__icon">
                      <i class="icon-biosphere"></i>
                    </div> --}}
                    <h4 class="feature__title">Modular Efficiency</h4>
                    <p class="feature__desc">Faster construction, lower cost, and minimal waste.</p>
                    {{-- <a href="#" class="btn__link">
                      <i class="icon-arrow-right icon-filled"></i>
                      <span>Explore More</span>
                    </a> --}}
                  </div><!-- /.feature-item -->
                </div><!-- /.col-sm-4 -->
                <!-- Feature item #3 -->
                <div class="col-sm-4">
                  <div class="feature-item">
                    {{-- <div class="feature__icon">
                      <i class="icon-eco-house"></i>
                    </div> --}}
                    <h4 class="feature__title">Smart Integration</h4>
                    <p class="feature__desc">Infrastructure embedded with IoT-ready monitoring and control systems.</p>
                    {{-- <a href="#" class="btn__link">
                      <i class="icon-arrow-right icon-filled"></i>
                      <span>Explore More</span>
                    </a> --}}
                  </div><!-- /.feature-item -->
                </div><!-- /.col-sm-4 -->
              </div><!-- /.row -->

              <h5 class="fz-25 mt-20">Key Benefits</h5>
              <div id="accordion" class="mb-60">
                <div class="accordion-item">
                  <div class="accordion-item__header" data-toggle="collapse" data-target="#collapse1">
                    <a class="accordion-item__title" href="#!">How do modular systems improve construction?</a>
                  </div><!-- /.accordion-item-header -->
                  <div id="collapse1" class="collapse" data-parent="#accordion">
                    <div class="accordion-item__body">
                      <p>Modular systems drastically cut construction time, reduce labor needs, and enable consistent quality through factory-controlled production.</p>
                    </div><!-- /.accordion-item-body -->
                  </div>
                </div><!-- /.accordion-item -->
                <div class="accordion-item">
                  <div class="accordion-item__header" data-toggle="collapse" data-target="#collapse2">
                    <a class="accordion-item__title" href="#!">Are your materials compliant with green building standards?</a>
                  </div><!-- /.accordion-item-header -->
                  <div id="collapse2" class="collapse" data-parent="#accordion">
                    <div class="accordion-item__body">
                      <p>Yes, our materials meet international green certifications like LEED, BREEAM, and SNI for sustainable construction.</p>
                    </div><!-- /.accordion-item-body -->
                  </div>
                </div><!-- /.accordion-item -->
                <div class="accordion-item">
                  <div class="accordion-item__header" data-toggle="collapse" data-target="#collapse3">
                    <a class="accordion-item__title" href="#!">Can this be used in both urban and rural projects?</a>
                  </div><!-- /.accordion-item-header -->
                  <div id="collapse3" class="collapse" data-parent="#accordion">
                    <div class="accordion-item__body">
                      <p> Absolutely our solutions are flexible and scalable for housing, schools, clinics, and commercial buildings in diverse environments.</p>
                    </div><!-- /.accordion-item-body -->
                  </div>
                </div><!-- /.accordion-item -->
              </div><!-- /.accordion -->
            </div><!-- /.col-lg-8 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /.Text Content Section -->
@endsection
