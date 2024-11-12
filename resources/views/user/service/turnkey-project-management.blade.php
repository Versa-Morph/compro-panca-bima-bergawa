@extends('user.layouts.app')

@section('content')
    <!-- ========================
       page title
    =========================== -->
    <section class="page-title page-title-layout2 bg-overlay bg-overlay-2 bg-parallax">
        <div class="bg-img"><img src="assets/images/page-titles/13.jpg" alt="background"></div>
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6">
              <h1 class="pagetitle__heading mb-0">{{ $service }}</h1>
              <p class="pagetitle__desc">Full management of modular construction projects from concept through completion, including timelines, logistics, and coordination with other contractors.</p>
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
                        <a href="{{ route('user.service.on-site-installation') }}"><span>On-Site Installation & Assembly</span></a>
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
                    <p class="widget__desc mb-30">Our worldwide presence ensures the timeliness, cost efficiency
                      compliance
                      adherence required to ensure your production timelines are met.
                    </p>
                    <a href="request-quote.html" class="btn btn__white btn__outlined btn__block mb-30">
                      Schedule An Appointment
                    </a>
                    <div class="contact__number d-none d-xl-flex align-items-center">
                      <i class="icon-phone"></i>
                      <a href="tel:5565454117">55 654 541 17</a>
                    </div>
                  </div><!-- /.widget-download -->
                </div><!-- /.widget-help -->
                <div class="widget widget-download">
                  <h5 class="widget__title">Download</h5>
                  <div class="widget__content">
                    <a href="#" class="btn btn__secondary btn__block btn__hover3">
                      <span>Company Brochure</span>
                      <img src="{{ asset('assets/images/icons/pdf.png') }}" alt="pdf">
                    </a>
                  </div><!-- /.widget-content -->
                </div><!-- /.widget-download -->
              </aside><!-- /.sidebar -->
            </div><!-- /.col-lg-4 -->
            <div class="col-sm-12 col-md-12 col-lg-8">
              <div class="text__block mb-30">
                <h5 class="text__block-title">Overview</h5>
                <p class="text__block-desc">Our Turnkey Project Management service provides a comprehensive, hassle-free solution where we manage your entire project from start to finish. From initial design and planning to the final handover of a fully operational system, we take care of every detail. We coordinate all aspects of the project, ensuring all resources, timelines, and budgets are efficiently managed so you can focus on your core business.</p>
                <p class="text__block-desc">With a focus on delivering projects on time and within budget, we offer a seamless experience by overseeing all phases: procurement, design, construction, installation, and final commissioning. As your trusted partner, we guarantee that the final product is fully functional, ready for use, and meets all your specifications.</p>
              </div><!-- /.text-block -->

              <div class="row">
                <!-- gallery item #1 -->
                <div class="col-sm-6">
                  <div class="gallery-item">
                    <a class="popup-gallery-item" href="{{ asset('assets/images/gallery/4.jpg') }}">
                      <img src="{{ asset('assets/images/gallery/4.jpg') }}" alt="gallery img">
                    </a>
                  </div><!-- /.gallery-item -->
                </div><!-- /.col-sm-6 -->
                <!-- gallery item #2 -->
                <div class="col-sm-6">
                  <div class="gallery-item">
                    <a class="popup-gallery-item" href="{{ asset('assets/images/gallery/5.jpg') }}">
                      <img src="{{ asset('assets/images/gallery/5.jpg') }}" alt="gallery img">
                    </a>
                  </div><!-- /.gallery-item -->
                </div><!-- /.col-sm-6 -->
              </div><!-- /.row -->

              <div class="text__block mb-30">
                <h5 class="text__block-title">How It Works?!</h5>
                <p class="text__block-desc">Our Turnkey Project Management begins with an in-depth consultation where we understand your specific needs and objectives. We then create a customized plan, outlining every phase of the project, from the design and procurement process to construction and installation. Once the project is underway, we handle all day-to-day operations, including coordinating with suppliers, managing subcontractors, and ensuring all milestones are met.</p>
                <p class="text__block-desc">Throughout the project, we maintain constant communication with you, providing regular updates and addressing any concerns or adjustments. Once completed, we perform a thorough inspection and ensure that everything is fully operational before delivering the finished project to you.</p>
              </div>
              <div class="video-banner mb-70">
                <img src="{{ asset('assets/images/banners/8.jpg') }}" alt="banner">
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
                <p class="text__block-desc">By choosing our Turnkey Project Management service, you get a single point of contact for your entire project, simplifying communication and eliminating the need to manage multiple contractors. Our experienced team ensures that your project is delivered on time, within budget, and to the highest quality standards. Here’s why we are the best choice:</p>
              </div>
              <div class="row features-layout3">
                <!-- Feature item #1 -->
                <div class="col-sm-4">
                  <div class="feature-item">
                    {{-- <div class="feature__icon">
                      <i class="icon-hydro-power3"></i>
                    </div> --}}
                    <h4 class="feature__title">Comprehensive Management</h4>
                    <p class="feature__desc">From design to final handover, we handle every detail, ensuring a seamless and hassle-free experience.</p>
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
                    <h4 class="feature__title">Expert Coordination</h4>
                    <p class="feature__desc">We manage all resources, timelines, and subcontractors, ensuring smooth coordination across all project phases.</p>
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
                    <h4 class="feature__title">Commitment to Quality</h4>
                    <p class="feature__desc">We adhere to strict quality control measures and ensure that the final product meets or exceeds your expectations.</p>
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
                    <a class="accordion-item__title" href="#!">How does turnkey project management reduce my workload?</a>
                  </div><!-- /.accordion-item-header -->
                  <div id="collapse1" class="collapse" data-parent="#accordion">
                    <div class="accordion-item__body">
                      <p>We handle all aspects of the project, including planning, design, procurement, construction, and installation, allowing you to focus on your business without having to manage multiple contractors.</p>
                    </div><!-- /.accordion-item-body -->
                  </div>
                </div><!-- /.accordion-item -->
                <div class="accordion-item">
                  <div class="accordion-item__header" data-toggle="collapse" data-target="#collapse2">
                    <a class="accordion-item__title" href="#!">What guarantees do you provide for the project’s completion?</a>
                  </div><!-- /.accordion-item-header -->
                  <div id="collapse2" class="collapse" data-parent="#accordion">
                    <div class="accordion-item__body">
                      <p>We ensure that the project is completed on time, within budget, and to your specifications, with a detailed contract outlining all deliverables and timelines.</p>
                    </div><!-- /.accordion-item-body -->
                  </div>
                </div><!-- /.accordion-item -->
                <div class="accordion-item">
                  <div class="accordion-item__header" data-toggle="collapse" data-target="#collapse3">
                    <a class="accordion-item__title" href="#!">Why is turnkey project management cost-effective?</a>
                  </div><!-- /.accordion-item-header -->
                  <div id="collapse3" class="collapse" data-parent="#accordion">
                    <div class="accordion-item__body">
                      <p>By managing every phase of the project, we streamline the process, avoid unnecessary delays, and optimize resource use, leading to cost savings and reduced risks.</p>
                    </div><!-- /.accordion-item-body -->
                  </div>
                </div><!-- /.accordion-item -->
              </div><!-- /.accordion -->
            </div><!-- /.col-lg-8 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /.Text Content Section -->
@endsection
