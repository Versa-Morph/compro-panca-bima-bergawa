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
              <p class="pagetitle__desc">Production of custom modular units that meet international standards, offering flexibility in size, layout, and purpose to align with diverse project needs.</p>
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
                <p class="text__block-desc">Our Custom Modular Manufacturing service offers fully customizable modular solutions designed to meet the unique needs of diverse industries, including residential, commercial, and industrial sectors. This approach allows clients to streamline construction timelines, reduce on-site labor, and ensure precise quality control by assembling modules in a factory-controlled environment before delivering them to the project site. With our expertise, clients receive adaptable, high-quality modular units that are designed for longevity and easy installation.</p>
                <p class="text__block-desc">By embracing modular construction, clients benefit from cost-effective, flexible solutions that meet high standards of durability and efficiency. Each module is crafted to seamlessly integrate with existing structures or operate independently, providing an ideal solution for projects with tight schedules or specialized requirements.</p>
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
                <p class="text__block-desc">We start by collaborating with clients to understand their design and functionality needs, which form the foundation for each custom module. Our engineering and design teams then develop modular blueprints that align with these specifications, ensuring both form and function are optimized.</p>
                <p class="text__block-desc">After design approval, our team moves to production, where each module is built in our factory with strict quality control measures. Once complete, the modules are transported to the project site for quick and easy assembly, drastically reducing construction time and on-site disruption.</p>
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
                <p class="text__block-desc">Our Custom Modular Manufacturing service combines advanced manufacturing techniques with a commitment to quality, enabling us to deliver reliable, custom-built solutions for any project. Our process is efficient, adaptable, and designed to meet the exact specifications of each client. Here’s why clients rely on us:</p>
              </div>
              <div class="row features-layout3">
                <!-- Feature item #1 -->
                <div class="col-sm-4">
                  <div class="feature-item">
                    {{-- <div class="feature__icon">
                      <i class="icon-hydro-power3"></i>
                    </div> --}}
                    <h4 class="feature__title">Precision Engineering</h4>
                    <p class="feature__desc">Our factory-controlled environment allows for precise construction, ensuring each module meets stringent quality standards.</p>
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
                    <h4 class="feature__title">Tailored to Your Needs</h4>
                    <p class="feature__desc">We customize every aspect of the module to match the client’s project requirements, providing unparalleled flexibility.</p>
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
                    <h4 class="feature__title">Efficient Delivery & Installation</h4>
                    <p class="feature__desc">Our streamlined production and transport process significantly reduce on-site labor, time, and associated costs.</p>
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
                    <a class="accordion-item__title" href="#!">How does modular manufacturing reduce costs?</a>
                  </div><!-- /.accordion-item-header -->
                  <div id="collapse1" class="collapse" data-parent="#accordion">
                    <div class="accordion-item__body">
                      <p>Factory-controlled production minimizes material waste, shortens timelines, and lowers on-site labor costs, making it a cost-effective construction option.</p>
                    </div><!-- /.accordion-item-body -->
                  </div>
                </div><!-- /.accordion-item -->
                <div class="accordion-item">
                  <div class="accordion-item__header" data-toggle="collapse" data-target="#collapse2">
                    <a class="accordion-item__title" href="#!">What customization options are available?</a>
                  </div><!-- /.accordion-item-header -->
                  <div id="collapse2" class="collapse" data-parent="#accordion">
                    <div class="accordion-item__body">
                      <p>We offer extensive customization for dimensions, materials, and finishes, allowing each module to meet specific aesthetic and functional needs.</p>
                    </div><!-- /.accordion-item-body -->
                  </div>
                </div><!-- /.accordion-item -->
                <div class="accordion-item">
                  <div class="accordion-item__header" data-toggle="collapse" data-target="#collapse3">
                    <a class="accordion-item__title" href="#!">Why choose modular over traditional construction?</a>
                  </div><!-- /.accordion-item-header -->
                  <div id="collapse3" class="collapse" data-parent="#accordion">
                    <div class="accordion-item__body">
                      <p>Modular solutions are faster, often more affordable, and maintain consistent quality through controlled manufacturing environments, resulting in a reliable and flexible alternative to traditional building methods.</p>
                    </div><!-- /.accordion-item-body -->
                  </div>
                </div><!-- /.accordion-item -->
              </div><!-- /.accordion -->
            </div><!-- /.col-lg-8 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /.Text Content Section -->
@endsection
