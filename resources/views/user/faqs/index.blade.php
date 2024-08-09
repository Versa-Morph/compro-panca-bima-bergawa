@extends('user.layouts.app')

@section('content')
    <!-- ========================
       page title
    =========================== -->
    <section class="page-title page-title-layout1 bg-overlay bg-overlay-2 bg-parallax text-center">
        <div class="bg-img"><img src="{{ asset('assets/images/page-titles/6.jpg') }}" alt="background"></div>
        <div class="container">
          <div class="row">
            <div class="col-12">
              <h1 class="pagetitle__heading mb-0">FAQs</h1>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item"><a href="#">Company</a></li>
                  <li class="breadcrumb-item active" aria-current="page">FAQs</li>
                </ol>
              </nav>
              <a href="#faqs" class="scroll-down">
                <i class="icon-arrow-down"></i>
              </a>
            </div><!-- /.col-xl-6 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /.page-title -->

      <!-- ======================
         FAQ
      ========================= -->
      <section id="faqs" class="faq pt-130 pb-100">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-8 offset-lg-2">
              <div class="heading-layout2 text-center mb-50">
                <h2 class="heading__subtitle">What Are You Looking For?</h2>
                <h3 class="heading__title">Frequently Asked Questions</h3>
              </div><!-- /.heading -->
            </div><!-- /.col-lg-8 -->
          </div><!-- /.row -->
          <div class="row" id="accordion">
            <div class="col-sm-12 col-md-12 col-lg-6">
              <div class="accordion-item">
                <div class="accordion-item__header" data-toggle="collapse" data-target="#collapse1">
                  <a class="accordion-item__title" href="#">Which Plan Is Right For Me?</a>
                </div><!-- /.accordion-item-header -->
                <div id="collapse1" class="collapse" data-parent="#accordion">
                  <div class="accordion-item__body">
                    <p>With any financial product that you buy, it is important that you know you are getting the best
                      advice from a reputable company as often</p>
                  </div><!-- /.accordion-item-body -->
                </div>
              </div><!-- /.accordion-item -->
              <div class="accordion-item">
                <div class="accordion-item__header" data-toggle="collapse" data-target="#collapse2">
                  <a class="accordion-item__title" href="#">Do I have to commit to a contract?</a>
                </div><!-- /.accordion-item-header -->
                <div id="collapse2" class="collapse" data-parent="#accordion">
                  <div class="accordion-item__body">
                    <p>With any financial product that you buy, it is important that you know you are getting the best
                      advice from a reputable company as often</p>
                  </div><!-- /.accordion-item-body -->
                </div>
              </div><!-- /.accordion-item -->
              <div class="accordion-item opened">
                <div class="accordion-item__header" data-toggle="collapse" data-target="#collapse3">
                  <a class="accordion-item__title" href="#">What Payment Methods Are Available?</a>
                </div><!-- /.accordion-item-header -->
                <div id="collapse3" class="collapse show" data-parent="#accordion">
                  <div class="accordion-item__body">
                    <p>With any financial product that you buy, it is important that you know you are getting the best
                      advice from a reputable company as often</p>
                  </div><!-- /.accordion-item-body -->
                </div>
              </div><!-- /.accordion-item -->
              <div class="accordion-item">
                <div class="accordion-item__header" data-toggle="collapse" data-target="#collapse4">
                  <a class="accordion-item__title" href="#">What if I pick the wrong plan?</a>
                </div><!-- /.accordion-item-header -->
                <div id="collapse4" class="collapse" data-parent="#accordion">
                  <div class="accordion-item__body">
                    <p>With any financial product that you buy, it is important that you know you are getting the best
                      advice from a reputable company as often</p>
                  </div><!-- /.accordion-item-body -->
                </div>
              </div><!-- /.accordion-item -->
              <div class="accordion-item">
                <div class="accordion-item__header" data-toggle="collapse" data-target="#collapse5">
                  <a class="accordion-item__title" href="#">Any contracts or commitments?</a>
                </div><!-- /.accordion-item-header -->
                <div id="collapse5" class="collapse" data-parent="#accordion">
                  <div class="accordion-item__body">
                    <p>With any financial product that you buy, it is important that you know you are getting the best
                      advice from a reputable company as often</p>
                  </div><!-- /.accordion-item-body -->
                </div>
              </div><!-- /.accordion-item -->
            </div><!-- /.col-lg-6 -->
            <div class="col-sm-12 col-md-12 col-lg-6">
              <div class="accordion-item">
                <div class="accordion-item__header" data-toggle="collapse" data-target="#collapse6">
                  <a class="accordion-item__title" href="#">What are my payment options?</a>
                </div><!-- /.accordion-item-header -->
                <div id="collapse6" class="collapse" data-parent="#accordion">
                  <div class="accordion-item__body">
                    <p>With any financial product that you buy, it is important that you know you are getting the best
                      advice from a reputable company as often</p>
                  </div><!-- /.accordion-item-body -->
                </div>
              </div><!-- /.accordion-item -->
              <div class="accordion-item">
                <div class="accordion-item__header" data-toggle="collapse" data-target="#collapse7">
                  <a class="accordion-item__title" href="#">How does the free trial work?</a>
                </div><!-- /.accordion-item-header -->
                <div id="collapse7" class="collapse" data-parent="#accordion">
                  <div class="accordion-item__body">
                    <p>With any financial product that you buy, it is important that you know you are getting the best
                      advice from a reputable company as often</p>
                  </div><!-- /.accordion-item-body -->
                </div>
              </div><!-- /.accordion-item -->
              <div class="accordion-item">
                <div class="accordion-item__header" data-toggle="collapse" data-target="#collapse8">
                  <a class="accordion-item__title" href="#">What Payment Methods Are Available?</a>
                </div><!-- /.accordion-item-header -->
                <div id="collapse8" class="collapse" data-parent="#accordion">
                  <div class="accordion-item__body">
                    <p>With any financial product that you buy, it is important that you know you are getting the best
                      advice from a reputable company as often</p>
                  </div><!-- /.accordion-item-body -->
                </div>
              </div><!-- /.accordion-item -->
              <div class="accordion-item">
                <div class="accordion-item__header" data-toggle="collapse" data-target="#collapse9">
                  <a class="accordion-item__title" href="#">How does the free trial work?</a>
                </div><!-- /.accordion-item-header -->
                <div id="collapse9" class="collapse" data-parent="#accordion">
                  <div class="accordion-item__body">
                    <p>With any financial product that you buy, it is important that you know you are getting the best
                      advice from a reputable company as often</p>
                  </div><!-- /.accordion-item-body -->
                </div>
              </div><!-- /.accordion-item -->
              <div class="accordion-item opened">
                <div class="accordion-item__header" data-toggle="collapse" data-target="#collapse10">
                  <a class="accordion-item__title" href="#">If I have questions, where can I find answers? </a>
                </div><!-- /.accordion-item-header -->
                <div id="collapse10" class="collapse show" data-parent="#accordion">
                  <div class="accordion-item__body">
                    <p>With any financial product that you buy, it is important that you know you are getting the best
                      advice from a reputable company as often</p>
                  </div><!-- /.accordion-item-body -->
                </div>
              </div><!-- /.accordion-item -->
            </div><!-- /.col-lg-6 -->
          </div><!-- /.row -->
          <div class="row">
            <div class="col-12">
              <p class="text__link text-center mb-0">Sustainable, reliable & affordable energy systems,
                <a href="#">
                  <span>Find Your Solution</span> <i class="icon-arrow-right"></i>
                </a>
              </p>
            </div><!-- /.col-12 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /.FAQ -->

      <!-- ===========================
        Banner layout 4
      ============================= -->
      <section class="banner-layout4 py-0">
        <div class="container-fluid px-0">
          <div class="row row-no-gutter">
            <div class="col-sm-12 col-md-12 col-lg-6 background-banner">
              <div class="bg-img"><img src="{{ asset('assets/images/banners/10.jpg') }}" alt="banner"></div>
            </div><!-- /.col-lg-6 -->
            <div class="col-sm-12 col-md-12 col-lg-6">
              <div class="inner-padding bg-primary">
                <div class="heading-layout2 heading-light mb-50">
                  <h3 class="heading__title">Energize Society With Sustainable And Reliable Energy Systems!</h3>
                  <p class="heading__desc">In recent years, new capacity across the solar value chain become necessary to
                    support the PV market’s growth. However, the capital required to establish and scale-up wafer, solar
                    cell and solar module manufacturing facilities.</p>
                </div><!-- /.heading -->
                <div class="row fancybox-light">
                  <!-- fancybox item #1 -->
                  <div class="col-sm-6">
                    <div class="fancybox-item">
                      <div class="fancybox__icon">
                        <i class="icon-hydro-power3"></i>
                      </div><!-- /.fancybox-icon -->
                      <div class="fancybox__content">
                        <h4 class="fancybox__title">Save Your Money</h4>
                        <p class="fancybox__desc">Save money on utilities or increase the value of your home by installing
                          solar panels as a great option.
                        </p>
                      </div><!-- /.fancybox-content -->
                    </div><!-- /.fancybox-item -->
                  </div><!-- /.col-sm-4 -->
                  <!-- fancybox item #2 -->
                  <div class="col-sm-6">
                    <div class="fancybox-item">
                      <div class="fancybox__icon">
                        <i class="icon-biosphere"></i>
                      </div><!-- /.fancybox-icon -->
                      <div class="fancybox__content">
                        <h4 class="fancybox__title">5Stars Customer Service</h4>
                        <p class="fancybox__desc">Understand that we must go above our customer expectations during each
                          interaction always.
                        </p>
                      </div><!-- /.fancybox-content -->
                    </div><!-- /.fancybox-item -->
                  </div><!-- /.col-sm-4 -->
                  <!-- fancybox item #3 -->
                </div><!-- /.row -->
                <a href="{{ route('user.request-quote') }}" class="btn btn__white btn__white-style2 mt-20">
                  <i class="icon-arrow-right"></i>
                  <span>Request A Quote</span>
                </a>
              </div>
            </div><!-- /.col-lg-6 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /.Banner layout 4 -->

      <!-- ======================
      Testimonials
      ========================= -->
      <section class="testimonials-layout1 pb-0">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
              <div class="heading text-center mb-40">
                <h2 class="heading__subtitle color-primary">Customers Doing it Their Way</h2>
                <h3 class="heading__title">Our Customers Share Their Experiences & Insights</h3>
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
                  <h4 class="cta__title">Design & Shipping</h4>
                  <p class="cta__desc">We collaborate with you to design and deliver a system that meets your utility
                    usage and selecting equips.</p>
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
                  <h4 class="cta__title">Design & Shipping</h4>
                  <p class="cta__desc">Whether you want to install the system on your own or hire local contractors
                    directly managing installation.</p>
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
              <p class="text__link text-center mb-0">Discover independence through the power of solar,
                <a href="#">
                  <span>Explore Our Plans</span> <i class="icon-arrow-right"></i>
                </a>
              </p>
            </div><!-- /.col-12 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /.cta layout1 -->
@endsection
