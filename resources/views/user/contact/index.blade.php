@extends('user.layouts.app')

@section('content')
    <!-- =========================
            Google Map
    =========================  -->
    <section class="google-map py-0">
        <iframe frameborder="0" height="500" width="100%"
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3269.1624615747182!2d106.82854107499033!3d-6.213882993774039!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f4088c56757d%3A0x253f935e5b0a44fd!2sGedung%20Wirausaha!5e1!3m2!1sid!2sid!4v1731469191966!5m2!1sid!2sid"></iframe>
      </section><!-- /.GoogleMap -->

      <!-- ==========================
          contact layout 1
      =========================== -->
      <section class="contact-layout1 pb-90">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="contact-panel p-0 box-shadow-none">
                <div class="contact__panel-info mb-30">
                  <div class="contact-info-box">
                    <h4 class="contact__info-box-title">Our Location</h4>
                    <ul class="contact__info-list list-unstyled">
                      <li>Gd. Wirausaha lt.1 Unit 104, Jalan Haji R. Rasuna Said Kavling C5, RT.3/RW.1, Karet, Kecamatan Setiabudi, Daerah Khusus Ibukota Jakarta 12920.</li>
                    </ul><!-- /.contact__info-list -->
                  </div><!-- /.contact-info-box -->
                  <div class="contact-info-box">
                    <h4 class="contact__info-box-title">Quick Contact</h4>
                    <ul class="contact__info-list list-unstyled">
                      <li>Email: <a href="mailto:marketing@bimabergawa.com">marketing@bimabergawa.com</a></li>
                      <li>Whatsapp: <a href="#!">+62 852 1308 8243</a></li>
                      {{-- <li>Support: <a href="mailto:marketing@bimabergawa.com">marketing@bimabergawa.com</a></li> --}}
                    </ul><!-- /.contact__info-list -->
                  </div><!-- /.contact-info-box -->
                  <div class="contact-info-box">
                    <h4 class="contact__info-box-title">Opening Hours</h4>
                    <ul class="contact__info-list list-unstyled">
                      <li>From Monday - Saturday</li>
                      <li>8 am to 6 pm</li>
                    </ul><!-- /.contact__info-list -->
                  </div><!-- /.contact-info-box -->
                  <a href="#" class="btn btn__primary">
                    <i class="icon-arrow-right"></i>
                    <span>Request A Quote</span>
                  </a>
                </div><!-- /.contact__panel-info -->
                <form method="post" action="#!" id="contactForm" class="contact__panel-form mb-30">
                  <div class="row">
                    <div class="col-sm-12">
                      <h4 class="contact__panel-title">Get In Touch</h4>
                      <p class="contact__panel-desc mb-40">Complete control over products allows us to ensure our
                        customers receive the best quality prices and service. We take great pride in everything that we
                        do in our factory.</p>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6">
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Name" id="contact-name" name="contact-name"
                          required>
                      </div>
                    </div><!-- /.col-lg-6 -->
                    <div class="col-sm-6 col-md-6 col-lg-6">
                      <div class="form-group">
                        <input type="email" class="form-control" placeholder="Email" id="contact-email"
                          name="contact-email" required>
                      </div>
                    </div><!-- /.col-lg-6 -->
                    <div class="col-sm-6 col-md-6 col-lg-6">
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Phone" id="contact-Phone"
                          name="contact-phone" required>
                      </div>
                    </div><!-- /.col-lg-6 -->
                    <div class="col-sm-6 col-md-6 col-lg-6">
                      <div class="form-group">
                        <select>
                          <option value="0">Select Your services</option>
                          <option value="Modular Construction Solutions">Modular Construction Solutions</option>
                          <option value="Project Design & Planning">Project Design & Planning </option>
                          <option value="Eco-Friendly & Sustainable Building Solutions">Eco-Friendly & Sustainable Building Solutions</option>
                          <option value="Custom Modular Manufacturing">Custom Modular Manufacturing</option>
                          <option value="Supervise Installation & Assembly">Supervise Installation & Assembly</option>
                          <option value="Turnkey Project Management">Turnkey Project Management</option>
                          <option value="Supply Chain & Material Sourcing">Supply Chain & Material Sourcing</option>
                          <option value="Consultation & Technical Support">Consultation & Technical Support</option>
                        </select>
                      </div>
                    </div><!-- /.col-lg-6 -->
                    <div class="col-sm-12 col-md-12 col-lg-12">
                      <div class="form-group">
                        <textarea class="form-control" placeholder="Additional Details!" placeholder="Message"
                          id="contact-messgae" name="contact-messgae" required></textarea>
                      </div>
                    </div><!-- /.col-lg-12 -->
                    <div class="col-sm-12 col-md-12 col-lg-12">
                      <button type="submit" class="btn btn__secondary">
                        <i class="icon-arrow-right"></i><span>Submit Request</span>
                      </button>
                      <div class="contact-result"></div>
                    </div><!-- /.col-lg-12 -->
                  </div><!-- /.row -->
                </form>
              </div><!-- /.contact__panel -->
            </div><!-- /.col-lg-12 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /.contact layout 1 -->
@endsection
