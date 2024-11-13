@extends('user.layouts.app')

@section('content')
    <!-- ========================
       page title
    =========================== -->
    <section class="page-title page-title-layout2 bg-overlay bg-overlay-2 bg-parallax">
        <div class="bg-img"><img src="{{ asset('assets/images/pbb-img/service/supply-chain-4.jpg') }}" alt="background"></div>
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6">
              <h1 class="pagetitle__heading mb-0">{{ $service }}</h1>
              <p class="pagetitle__desc">Efficient procurement and sourcing of high-quality materials for modular construction, reducing lead times and maintaining strict quality standards.</p>
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
                <p class="text__block-desc">Our Supply Chain & Material Sourcing service ensures that all materials required for your projects are sourced efficiently, cost-effectively, and with the highest quality standards. We leverage a global network of trusted suppliers to provide materials that meet the specific needs of each project, from raw materials to finished products. By focusing on long-term partnerships with manufacturers and suppliers, we can offer competitive pricing and reliable delivery schedules.</p>
                <p class="text__block-desc">Our team works closely with you to understand your material requirements, helping to select the most suitable products while adhering to your project timelines and budget. With years of experience in managing supply chains across industries, we ensure that all material logistics are streamlined, minimizing delays and preventing project disruptions.</p>
              </div><!-- /.text-block -->

              <div class="row">
                <!-- gallery item #1 -->
                <div class="col-sm-6">
                  <div class="gallery-item">
                    <a class="popup-gallery-item" href="{{ asset('assets/images/pbb-img/service/supply-chain-1.jpg') }}">
                      <img src="{{ asset('assets/images/pbb-img/service/supply-chain-1.jpg') }}" alt="gallery img" style="max-height: 30vh !important; min-width: 100% !important;">
                    </a>
                  </div><!-- /.gallery-item -->
                </div><!-- /.col-sm-6 -->
                <!-- gallery item #2 -->
                <div class="col-sm-6">
                  <div class="gallery-item">
                    <a class="popup-gallery-item" href="{{ asset('assets/images/pbb-img/service/supply-chain-2.jpg') }}">
                      <img src="{{ asset('assets/images/pbb-img/service/supply-chain-2.jpg') }}" alt="gallery img" style="max-height: 30vh !important; min-width: 100% !important;">
                    </a>
                  </div><!-- /.gallery-item -->
                </div><!-- /.col-sm-6 -->
              </div><!-- /.row -->

              <div class="text__block mb-30">
                <h5 class="text__block-title">How It Works?!</h5>
                <p class="text__block-desc">We begin by thoroughly assessing your project’s material needs and sourcing requirements. Our team then identifies the most reliable suppliers and manufacturers who meet your quality standards and budget constraints. After sourcing the materials, we manage the entire supply chain process, ensuring that each product is delivered on time and in perfect condition.</p>
                <p class="text__block-desc">Throughout the process, we maintain close communication with both suppliers and clients, providing regular updates and addressing any concerns. Our team also manages any logistical challenges, ensuring smooth transportation, customs handling, and storage.</p>
              </div>
              <div class="video-banner mb-70">
                <img src="{{ asset('assets/images/pbb-img/service/supply-chain-3.jpg') }}" alt="banner">
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
                <p class="text__block-desc">With years of experience in sourcing materials for construction, manufacturing, and infrastructure projects, our expertise ensures that you receive the best products at competitive prices. We handle every aspect of the supply chain, from sourcing to delivery, so you don’t have to worry about material availability or delays. Here’s why we’re the best partner for your material sourcing needs:</p>
              </div>
              <div class="row features-layout3">
                <!-- Feature item #1 -->
                <div class="col-sm-4">
                  <div class="feature-item">
                    {{-- <div class="feature__icon">
                      <i class="icon-hydro-power3"></i>
                    </div> --}}
                    <h4 class="feature__title">Global Network</h4>
                    <p class="feature__desc">We have access to a worldwide network of suppliers, ensuring high-quality materials at the best prices.</p>
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
                    <h4 class="feature__title">Efficient Logistics</h4>
                    <p class="feature__desc">We manage the entire logistics process, from sourcing to delivery, ensuring materials arrive on time and in excellent condition.</p>
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
                    <h4 class="feature__title">Custom Solutions</h4>
                    <p class="feature__desc">We work closely with you to understand your project’s unique requirements and provide tailored material sourcing solutions.</p>
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
                    <a class="accordion-item__title" href="#!">How does supply chain management help my project stay on track?</a>
                  </div><!-- /.accordion-item-header -->
                  <div id="collapse1" class="collapse" data-parent="#accordion">
                    <div class="accordion-item__body">
                      <p>We ensure that all materials are sourced and delivered on time, preventing delays and disruptions, so your project progresses smoothly.</p>
                    </div><!-- /.accordion-item-body -->
                  </div>
                </div><!-- /.accordion-item -->
                <div class="accordion-item">
                  <div class="accordion-item__header" data-toggle="collapse" data-target="#collapse2">
                    <a class="accordion-item__title" href="#!">What types of materials do you source?</a>
                  </div><!-- /.accordion-item-header -->
                  <div id="collapse2" class="collapse" data-parent="#accordion">
                    <div class="accordion-item__body">
                      <p>We can source a wide range of materials, from construction raw materials to finished goods and specialized products, based on the specific needs of your project.</p>
                    </div><!-- /.accordion-item-body -->
                  </div>
                </div><!-- /.accordion-item -->
                <div class="accordion-item">
                  <div class="accordion-item__header" data-toggle="collapse" data-target="#collapse3">
                    <a class="accordion-item__title" href="#!">Why is your sourcing service more cost-effective?</a>
                  </div><!-- /.accordion-item-header -->
                  <div id="collapse3" class="collapse" data-parent="#accordion">
                    <div class="accordion-item__body">
                      <p>By leveraging our extensive supplier network, we can negotiate better pricing and pass the savings on to you, while ensuring quality and reliability.</p>
                    </div><!-- /.accordion-item-body -->
                  </div>
                </div><!-- /.accordion-item -->
              </div><!-- /.accordion -->
            </div><!-- /.col-lg-8 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /.Text Content Section -->
@endsection
