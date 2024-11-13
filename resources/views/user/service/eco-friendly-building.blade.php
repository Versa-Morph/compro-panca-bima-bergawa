@extends('user.layouts.app')

@section('content')
    <!-- ========================
       page title
    =========================== -->
    <section class="page-title page-title-layout2 bg-overlay bg-overlay-2 bg-parallax">
        <div class="bg-img"><img src="{{ asset('assets/images/pbb-img/service/eco-friendly-4.jpg') }}" alt="background"></div>
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6">
              <h1 class="pagetitle__heading mb-0">{{ $service }}</h1>
              <p class="pagetitle__desc">Use of environmentally friendly materials and practices, incorporating energy-efficient designs and renewable energy options.</p>
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
                        <a href="{{ route('user.service.modular-construction') }}" class="active"><span>Modular Construction Solutions</span></a>
                      </li>
                      <li>
                        <a href="{{ route('user.service.project-design') }}"><span>Project Design & Planning</span></a>
                      </li>
                      <li>
                        <a href="{{ route('user.service.eco-friendly-building') }}"><span>Eco-Friendly & Sustainable Building Solutions</span></a>
                      </li>
                      <li>
                        <a href="{{ route('user.service.custom-modular-manufacturing') }}"><span>Custom Modular Manufacturing</span></a>
                      </li>
                      <li>
                        <a href="{{ route('user.service.supervise-installation-and-assembly') }}"><span>Supervise Installation & Assembly</span></a>
                      </li>
                      <li>
                        <a href="{{ route('user.service.turnkey-project-management') }}"><span>Turnkey Project Management</span></a>
                      </li>
                      <li>
                        <a href="{{ route('user.service.supply-chain-sourcing') }}"><span>Supply Chain & Material Sourcing</span></a>
                      </li>
                      <li>
                        <a href="{{ route('user.service.consultation-support') }}"><span>Consultation & Technical Support</span></a>
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
                <p class="text__block-desc">Our Eco-Friendly & Sustainable Building Solutions service focuses on creating buildings that minimize environmental impact while maximizing efficiency and sustainability. This approach integrates green building materials, energy-efficient systems, and eco-friendly designs to reduce waste, lower emissions, and create healthier indoor environments. Every project aims to achieve an optimal balance between performance, cost, and environmental responsibility.</p>
                <p class="text__block-desc">From the initial design phase to the final build, we prioritize sustainable practices that reduce the carbon footprint, conserve resources, and provide long-term energy savings. With the growing need for green construction, our sustainable solutions help clients achieve LEED certification standards and meet global sustainability benchmarks, positioning their properties as leaders in environmental stewardship.</p>
              </div><!-- /.text-block -->

              <div class="row">
                <!-- gallery item #1 -->
                <div class="col-sm-6">
                  <div class="gallery-item">
                    <a class="popup-gallery-item" href="{{ asset('assets/images/pbb-img/service/eco-friendly-1.jpg') }}">
                      <img src="{{ asset('assets/images/pbb-img/service/eco-friendly-1.jpg') }}" alt="gallery img">
                    </a>
                  </div><!-- /.gallery-item -->
                </div><!-- /.col-sm-6 -->
                <!-- gallery item #2 -->
                <div class="col-sm-6">
                  <div class="gallery-item">
                    <a class="popup-gallery-item" href="{{ asset('assets/images/pbb-img/service/eco-friendly-3.jpg') }}">
                      <img src="{{ asset('assets/images/pbb-img/service/eco-friendly-3.jpg') }}" alt="gallery img">
                    </a>
                  </div><!-- /.gallery-item -->
                </div><!-- /.col-sm-6 -->
              </div><!-- /.row -->

              <div class="text__block mb-30">
                <h5 class="text__block-title">How It Works?!</h5>
                <p class="text__block-desc">We begin by assessing the specific sustainability goals for each project, such as energy reduction, waste management, and use of renewable resources. Based on these objectives, our team incorporates eco-friendly materials and energy-efficient systems, like solar power and rainwater harvesting, into the building's design. We work with clients to ensure these solutions align with their budget and sustainability targets.</p>
                <p class="text__block-desc">During construction, our team implements eco-friendly building practices, such as sourcing local materials, recycling construction waste, and reducing energy use. Our goal is to create buildings that are not only environmentally responsible but also resilient and cost-effective, delivering lasting value to clients and communities.</p>
              </div>
              <div class="video-banner mb-70">
                <img src="{{ asset('assets/images/pbb-img/service/eco-friendly-2.jpg') }}" alt="banner">
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
                <p class="text__block-desc">With our expertise in sustainable construction, we offer clients a seamless transition to eco-friendly building practices that meet modern environmental standards. Our commitment to sustainability goes beyond design—we actively help clients reduce costs and enhance their properties’ value through eco-conscious choices. Here’s why clients choose us:</p>
              </div>
              <div class="row features-layout3">
                <!-- Feature item #1 -->
                <div class="col-sm-4">
                  <div class="feature-item">
                    {{-- <div class="feature__icon">
                      <i class="icon-hydro-power3"></i>
                    </div> --}}
                    <h4 class="feature__title">Certified Green Expertise</h4>
                    <p class="feature__desc">Our team brings extensive knowledge in sustainable design and construction, helping projects achieve green certifications like LEED.</p>
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
                    <h4 class="feature__title">Custom Sustainable Solutions</h4>
                    <p class="feature__desc">We create tailored sustainability strategies to meet each client’s specific environmental and financial goals.</p>
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
                    <h4 class="feature__title">Long-Term Cost Savings</h4>
                    <p class="feature__desc">By incorporating energy-efficient designs and materials, we deliver solutions that lower operating costs and increase property value over time.</p>
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
                    <a class="accordion-item__title" href="#!">Why are sustainable building solutions cost-effective?</a>
                  </div><!-- /.accordion-item-header -->
                  <div id="collapse1" class="collapse" data-parent="#accordion">
                    <div class="accordion-item__body">
                      <p>Sustainable buildings lower utility expenses and maintenance costs over time, translating into long-term savings for property owners.</p>
                    </div><!-- /.accordion-item-body -->
                  </div>
                </div><!-- /.accordion-item -->
                <div class="accordion-item">
                  <div class="accordion-item__header" data-toggle="collapse" data-target="#collapse2">
                    <a class="accordion-item__title" href="#!">What certifications can be achieved with these solutions?</a>
                  </div><!-- /.accordion-item-header -->
                  <div id="collapse2" class="collapse" data-parent="#accordion">
                    <div class="accordion-item__body">
                      <p>We guide projects toward achieving recognized green certifications, such as LEED, which enhance the building’s market value and environmental credibility.</p>
                    </div><!-- /.accordion-item-body -->
                  </div>
                </div><!-- /.accordion-item -->
                <div class="accordion-item">
                  <div class="accordion-item__header" data-toggle="collapse" data-target="#collapse3">
                    <a class="accordion-item__title" href="#!">How does this benefit the environment?</a>
                  </div><!-- /.accordion-item-header -->
                  <div id="collapse3" class="collapse" data-parent="#accordion">
                    <div class="accordion-item__body">
                      <p>Eco-friendly construction reduces waste, conserves natural resources, and minimizes pollution, contributing to a healthier planet and promoting a sustainable future.</p>
                    </div><!-- /.accordion-item-body -->
                  </div>
                </div><!-- /.accordion-item -->
              </div><!-- /.accordion -->
            </div><!-- /.col-lg-8 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /.Text Content Section -->
@endsection
