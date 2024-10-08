@extends('user.layouts.app')

@section('content')
    <!-- ========================
       page title
    =========================== -->
    <section class="page-title page-title-layout1 bg-overlay bg-overlay-2 bg-parallax text-center">
        <div class="bg-img"><img src="{{ asset('assets/images/page-titles/14.jpg') }}" alt="background"></div>
        <div class="container">
          <div class="row">
            <div class="col-12">
              <h1 class="pagetitle__heading mb-0">Request Quote</h1>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Request Quote</li>
                </ol>
              </nav>
              <a href="#contact" class="scroll-down">
                <i class="icon-arrow-down"></i>
              </a>
            </div><!-- /.col-xl-6 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /.page-title -->


      <!-- ===========================
        contact layout 2
      ============================= -->
      <section id="contact" class="contact-layout2 pt-130 pb-110">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-5">
              <div class="heading mb-40 pb-30 border-bottom">
                <h2 class="heading__subtitle">Save Money, Save The Environment!</h2>
                <h3 class="heading__title">Request A Detailed Solar Estimate for Your Home</h3>
                <p class="heading__desc">Receive an accurate quote within 3-5 days when you fill out the form on this
                  page. Ideal for people who are ready to start the design and buying process today.
                </p>
              </div><!-- /.heading -->
              <h5>Or, You Can Give Us A Call:</h5>
              <div class="contact__number d-none d-xl-flex align-items-center mb-30">
                <i class="icon-phone"></i>
                <a href="tel:5565454117" class="color-primary">55 654 541 17</a>
              </div>
              <p>We will get back to you within 24 hours, or call us everyday, 09:00 AM - 12:00 PM. Or you can send us
                Email <a href="mailto:Solatec@7oroof.com">Solatec@7oroof.com</a></p>
            </div><!-- /.col-xl-6 -->
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6 offset-xl-1">
              <div class="contact-panel mb-0">
                <form class="contact-panel__form" method="post" action="assets/php/contact.php" id="contactForm"
                  novalidate="novalidate">
                  <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                      <h4 class="contact-panel__title">Request A Quote</h4>
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
                    <div class="col-12">
                      <span class="font-weight-bold color-heading d-block mb-15 mt-10">System Data</span>
                    </div><!-- /.col-12 -->
                    <div class="col-sm-6">
                      <div class="form-group">
                        <select class="form-control">
                          <option value="0">System Installer?</option>
                          <option value="1">System Installer 1</option>
                          <option value="1">System Installer 2</option>
                        </select>
                      </div>
                    </div><!-- /.col-sm-6 -->
                    <div class="col-sm-6">
                      <div class="form-group">
                        <select class="form-control">
                          <option value="0">System Installer?</option>
                          <option value="1">System Installer 1</option>
                          <option value="1">System Installer 2</option>
                        </select>
                      </div>
                    </div><!-- /.col-sm-6 -->
                    <div class="col-sm-6">
                      <div class="form-group">
                        <select class="form-control">
                          <option value="0">Monthly electric usage ?</option>
                          <option value="1">100</option>
                          <option value="2">200</option>
                        </select>
                      </div>
                    </div><!-- /.col-sm-6 -->
                    <div class="col-sm-6">
                      <div class="form-group">
                        <select class="form-control">
                          <option value="0">Solar system type?</option>
                          <option value="1">Solar system 1</option>
                          <option value="2">Solar system 2</option>
                        </select>
                      </div>
                    </div><!-- /.col-sm-6 -->
                    <div class="col-sm-6">
                      <div class="form-group">
                        <select class="form-control">
                          <option value="0">Solar panels place?</option>
                          <option value="1">Solar panels 1</option>
                          <option value="2">Solar panels 2</option>
                        </select>
                      </div>
                    </div><!-- /.col-sm-6 -->
                    <div class="col-sm-6">
                      <div class="form-group">
                        <select class="form-control">
                          <option value="0">Materials on your roof?</option>
                          <option value="1">Materials 1</option>
                          <option value="2">Materials 2</option>
                        </select>
                      </div>
                    </div><!-- /.col-sm-6 -->
                    <div class="col-12">
                      <span class="font-weight-bold color-heading d-block mb-15 mt-10">Preferred Contact Method</span>
                      <div class="d-flex">
                        <div class="form-group input-radio mr-30">
                          <label class="label-radio">All
                            <input type="radio" name="contact" checked>
                            <span class="radio-indicator"></span>
                          </label>
                        </div><!-- /.input-radio -->
                        <div class="form-group input-radio mr-30">
                          <label class="label-radio">Email
                            <input type="radio" name="contact">
                            <span class="radio-indicator"></span>
                          </label>
                        </div><!-- /.input-radio -->
                        <div class="form-group input-radio">
                          <label class="label-radio">Phone
                            <input type="radio" name="contact">
                            <span class="radio-indicator"></span>
                          </label>
                        </div><!-- /.input-radio -->
                      </div>
                    </div><!-- /.col-12 -->
                    <div class="col-12">
                      <button type="submit" class="btn btn__primary btn__block">
                        <i class="icon-arrow-right"></i> <span>Submit Request</span>
                      </button>
                      <div class="contact-result"></div>
                    </div><!-- /.col-12 -->
                  </div><!-- /.row -->
                </form>
              </div>
            </div><!-- /.col-xl-6 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /.contact layout 2 -->
@endsection
