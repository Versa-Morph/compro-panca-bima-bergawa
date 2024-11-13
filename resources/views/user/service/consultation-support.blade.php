@extends('user.layouts.app')

@section('content')
    <!-- ========================
       page title
    =========================== -->
    <section class="page-title page-title-layout2 bg-overlay bg-overlay-2 bg-parallax">
        <div class="bg-img"><img src="{{ asset('assets/images/pbb-img/service/consultation-support-3.jpg') }}" alt="background"></div>
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6">
              <h1 class="pagetitle__heading mb-0">{{ $service }}</h1>
              <p class="pagetitle__desc">Professional consultation and technical support throughout the project lifecycle to address client needs, from planning to post-construction maintenance.</p>
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
                <p class="text__block-desc">Our Consultation & Technical Support service is designed to provide expert guidance and solutions throughout every phase of your project. From initial planning and design to post-installation support, we work closely with clients to offer insights and advice that optimize both the performance and efficiency of their projects. Our team of experienced professionals offers deep technical expertise in modular construction and related fields, ensuring that every decision made enhances the overall project outcome.</p>
                <p class="text__block-desc">We understand that each project presents its own unique challenges, and that’s why our consultation and technical support are tailored to meet your specific needs. By providing comprehensive solutions, we help mitigate risks, improve workflows, and ensure that all technical aspects of the project are fully addressed, allowing you to focus on your core objectives.</p>
              </div><!-- /.text-block -->

              <div class="row">
                <!-- gallery item #1 -->
                <div class="col-sm-6">
                  <div class="gallery-item">
                    <a class="popup-gallery-item" href="{{ asset('assets/images/pbb-img/service/consultation-support-1.jpg') }}">
                      <img src="{{ asset('assets/images/pbb-img/service/consultation-support-1.jpg') }}" alt="gallery img">
                    </a>
                  </div><!-- /.gallery-item -->
                </div><!-- /.col-sm-6 -->
                <!-- gallery item #2 -->
                <div class="col-sm-6">
                  <div class="gallery-item">
                    <a class="popup-gallery-item" href="{{ asset('assets/images/pbb-img/service/consultation-support-2.jpg') }}">
                      <img src="{{ asset('assets/images/pbb-img/service/consultation-support-2.jpg') }}" alt="gallery img">
                    </a>
                  </div><!-- /.gallery-item -->
                </div><!-- /.col-sm-6 -->
              </div><!-- /.row -->

              <div class="text__block mb-30">
                <h5 class="text__block-title">How It Works?!</h5>
                <p class="text__block-desc">Our consultation begins with a detailed assessment of your project’s requirements, followed by a strategic discussion to identify key technical challenges and opportunities. We provide solutions that are both innovative and practical, helping to streamline processes and ensure high-quality results.</p>
                <p class="text__block-desc">Once the project is underway, our technical support team is available for ongoing assistance. Whether it’s troubleshooting issues or providing further technical advice, we’re always ready to step in and help resolve any concerns, ensuring your project stays on track and within scope.</p>
              </div>
              <div class="video-banner mb-70">
                <img src="{{ asset('assets/images/pbb-img/service/consultation-support-4.png') }}" alt="banner">
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
                <p class="text__block-desc">With decades of combined experience in the industry, our consultation and technical support services offer clients the assurance of informed, accurate, and effective solutions. Our team is committed to providing timely support and expert advice, making sure your project runs smoothly from start to finish. Here’s why clients trust us with their consultation and technical support needs:</p>
              </div>
              <div class="row features-layout3">
                <!-- Feature item #1 -->
                <div class="col-sm-4">
                  <div class="feature-item">
                    {{-- <div class="feature__icon">
                      <i class="icon-hydro-power3"></i>
                    </div> --}}
                    <h4 class="feature__title">Expert Knowledge</h4>
                    <p class="feature__desc">Our team includes seasoned professionals with in-depth knowledge of construction, engineering, and the latest technologies in the industry.</p>
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
                    <h4 class="feature__title">Tailored Solutions</h4>
                    <p class="feature__desc">We offer personalized consultation and support based on the unique needs and specifications of each project.</p>
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
                    <h4 class="feature__title">Ongoing Support</h4>
                    <p class="feature__desc">From design to installation and beyond, our team is committed to providing continuous technical support to ensure the project’s success.</p>
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
                    <a class="accordion-item__title" href="#!">What kind of technical advice can you provide?</a>
                  </div><!-- /.accordion-item-header -->
                  <div id="collapse1" class="collapse" data-parent="#accordion">
                    <div class="accordion-item__body">
                      <p>We offer a wide range of services including design optimization, troubleshooting, performance improvements, and ensuring compliance with local regulations and standards.</p>
                    </div><!-- /.accordion-item-body -->
                  </div>
                </div><!-- /.accordion-item -->
                <div class="accordion-item">
                  <div class="accordion-item__header" data-toggle="collapse" data-target="#collapse2">
                    <a class="accordion-item__title" href="#!">How do you ensure your consultation is effective?</a>
                  </div><!-- /.accordion-item-header -->
                  <div id="collapse2" class="collapse" data-parent="#accordion">
                    <div class="accordion-item__body">
                      <p>We focus on understanding the project’s unique requirements, using that knowledge to propose practical, efficient solutions tailored to specific challenges.</p>
                    </div><!-- /.accordion-item-body -->
                  </div>
                </div><!-- /.accordion-item -->
                <div class="accordion-item">
                  <div class="accordion-item__header" data-toggle="collapse" data-target="#collapse3">
                    <a class="accordion-item__title" href="#!">Can I rely on your team after the project is completed?</a>
                  </div><!-- /.accordion-item-header -->
                  <div id="collapse3" class="collapse" data-parent="#accordion">
                    <div class="accordion-item__body">
                      <p>Yes, our support doesn’t end at project completion. We offer ongoing technical support to ensure your project continues to perform optimally and any issues are quickly addressed.</p>
                    </div><!-- /.accordion-item-body -->
                  </div>
                </div><!-- /.accordion-item -->
              </div><!-- /.accordion -->
            </div><!-- /.col-lg-8 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /.Text Content Section -->
@endsection
