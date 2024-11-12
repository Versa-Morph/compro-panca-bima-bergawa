<!-- ===========================
    contact layout 2
    ============================= -->
    <section class="contact-layout2 pb-0 bg-overlay bg-overlay-primary-gradient">
    <div class="bg-img"><img src="{{ asset('assets/images/banners/2.jpg') }}" alt=""></div>
    <div class="container">
        <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6">
            <div class="col-inner">
            <div class="heading-layout2 heading-light mb-60">
                <h2 class="heading__subtitle">Save Money, Build Sustainably!</h2>
                <h3 class="heading__title mb-0">
                Delivering Value Through Continuous Innovation and Excellence.
                </h3>
                <p class="heading__desc">
                At PT Panca Bima Bergawa, we provide top-tier modular solutions while partnering with leading industry manufacturers to enhance product features, streamline delivery times, and optimize project budgets. Our focus on innovation ensures we deliver exceptional value and performance.
                </p>
            </div><!-- /.heading -->
            <div class="row fancybox-light">
                <!-- fancybox item #1 -->
                <div class="col-sm-4">
                <div class="fancybox-item">
                    <div class="fancybox__icon">
                    <i class="icon-biosphere2"></i>
                    </div><!-- /.fancybox-icon -->
                    <div class="fancybox__content">
                    <h4 class="fancybox__title mb-0">Environmental Responsibility</h4>
                    </div><!-- /.fancybox-content -->
                </div><!-- /.fancybox-item -->
                </div><!-- /.col-sm-4 -->
                <!-- fancybox item #2 -->
                <div class="col-sm-4">
                <div class="fancybox-item">
                    <div class="fancybox__icon">
                    <i class="icon-tube"></i>
                    </div><!-- /.fancybox-icon -->
                    <div class="fancybox__content">
                    <h4 class="fancybox__title mb-0">Customized Solutions</h4>
                    </div><!-- /.fancybox-content -->
                </div><!-- /.fancybox-item -->
                </div><!-- /.col-sm-4 -->
                <!-- fancybox item #3 -->
                <div class="col-sm-4">
                <div class="fancybox-item">
                    <div class="fancybox__icon">
                    <i class="icon-electric-charge"></i>
                    </div><!-- /.fancybox-icon -->
                    <div class="fancybox__content">
                    <h4 class="fancybox__title mb-0">Performance Excellence</h4>
                    </div><!-- /.fancybox-content -->
                </div><!-- /.fancybox-item -->
                </div><!-- /.col-sm-4 -->
            </div><!-- /.row -->
            </div>
        </div><!-- /.col-xl-6 -->
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6">
            <div class="contact-panel">
            <form class="contact-panel__form" method="post" action="assets/php/contact.php" id="contactForm"
                novalidate="novalidate">
                <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <h4 class="contact-panel__title">Request A Quote</h4>
                    <p>
                    Please fill out the form below to request a quote for our modular solutions. Our team will get in touch with you shortly to discuss your requirements.
                    </p>
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
                <div class="col-sm-6">
                    <span class="font-weight-bold color-heading">Project Type</span>
                    <div class="form-group">
                    <select class="form-control">
                        <option value="Commercial">Commercial</option>
                        <option value="Residential">Residential</option>
                        <option value="Industrial">Industrial</option>
                        <option value="Educational">Educational</option>
                        <option value="Healthcare">Healthcare</option>
                        <option value="Hospitality">Hospitality</option>
                    </select>
                    </div>
                </div><!-- /.col-sm-6 -->
                <div class="col-sm-6">
                    <span class="font-weight-bold color-heading">Modular Units Needed</span>
                    <div class="form-group">
                    <select class="form-control">
                        <option value="Office Spaces">Office Spaces</option>
                        <option value="Homes">Homes</option>
                        <option value="Warehouses">Warehouses</option>
                        <option value="Classrooms">Classrooms</option>
                        <option value="Clinics">Clinics</option>
                        <option value="Hotels">Hotels</option>
                    </select>
                    </div>
                </div><!-- /.col-sm-6 -->
                <div class="col-sm-6">
                    <span class="font-weight-bold color-heading">Project Location</span>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="City" id="city"
                        name="city">
                    </div>
                </div><!-- /.col-sm-6 -->
                <div class="col-sm-6">
                    <span class="font-weight-bold color-heading">Budget Range</span>
                    <div class="form-group">
                    <select class="form-control">
                        <option value="Under $50,000">Under $50,000</option>
                        <option value="$50,000 - $100,000">$50,000 - $100,000</option>
                        <option value="$100,000 - $250,000">$100,000 - $250,000</option>
                        <option value="$250,000 - $500,000">$250,000 - $500,000</option>
                        <option value="Over $500,000">Over $500,000</option>
                    </select>
                    </div>
                </div><!-- /.col-sm-6 -->
                <div class="col-sm-12 mb-3">
                    <span class="font-weight-bold color-heading">Estimated Timeline</span>
                    <div class="row">
                    <div class="col-md-6">
                        <input type="month" class="form-control" placeholder="start_date" id="start_date"
                        name="start_date">
                    </div>
                    <div class="col-md-6">
                        <input type="month" class="form-control" placeholder="end_date" id="end_date"
                        name="end_date">
                    </div>
                    </div>
                </div><!-- /.col-sm-6 -->
                <div class="col-sm-12">
                    <div class="form-group">
                    <span class="font-weight-bold color-heading">Preferred Contact Method</span>

                    <select class="form-control">
                        <option value="all">All</option>
                        <option value="Email">Email</option>
                        <option value="phone">Phone</option>
                    </select>
                    </div>
                </div><!-- /.col-sm-6 -->

                <div class="col-12">
                    <button class="btn w-100 text-white" style="background-color: rgb(70 162 218);" type="submit">Submit</button>
                </div>
                </div><!-- /.row -->
            </form>
            </div>
        </div><!-- /.col-xl-6 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
    </section><!-- /.contact layout 2 -->

    <!-- =====================
        Clients
    ======================== -->
    <section class="clients clients-layout2 border-bottom py-0">
    <div class="container">
        <div class="row align-items-center">
        <div class="col-sm-12 col-md-12 col-lg-6">
            {{-- <div class="slick-carousel"
            data-slick='{"slidesToShow": 3, "arrows": false, "dots": false, "autoplay": true,"autoplaySpeed": 2000, "infinite": true, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 3}}, {"breakpoint": 767, "settings": {"slidesToShow": 3}}, {"breakpoint": 480, "settings": {"slidesToShow": 2}}]}'>
            <div class="client">
                <a href="#"><img src="{{ asset('assets/images/clients/1.png') }}" alt="client"></a>
            </div><!-- /.client -->
            <div class="client">
                <a href="#"><img src="{{ asset('assets/images/clients/2.png') }}" alt="client"></a>
            </div><!-- /.client -->
            <div class="client">
                <a href="#"><img src="{{ asset('assets/images/clients/3.png') }}" alt="client"></a>
            </div><!-- /.client -->
            <div class="client">
                <a href="#"><img src="{{ asset('assets/images/clients/4.png') }}" alt="client"></a>
            </div><!-- /.client -->
            <div class="client">
                <a href="#"><img src="{{ asset('assets/images/clients/5.png') }}" alt="client"></a>
            </div><!-- /.client -->
            <div class="client">
                <a href="#"><img src="{{ asset('assets/images/clients/6.png') }}" alt="client"></a>
            </div><!-- /.client -->
            <div class="client">
                <a href="#"><img src="{{ asset('assets/images/clients/3.png') }}" alt="client"></a>
            </div><!-- /.client -->
            <div class="client">
                <a href="#"><img src="{{ asset('assets/images/clients/4.png') }}" alt="client"></a>
            </div><!-- /.client -->
            </div><!-- /.carousel --> --}}
        </div><!-- /.col-lg-6 -->
        <div class="col-sm-12 col-md-12 col-lg-6">
            <strong class="text-center d-block mt-60 mb-20">Receive an accurate quote within 3-5 days when you fill out the
            form on this page. Or, give us a call:
            <a href="tel:00201061245741" class="text-underlined-primary">(002) 01061245741</a>
            </strong>
        </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
    </section><!-- /.clients -->

    <!-- ======================
    Blog Grid
    ========================= -->
    {{-- <section class="post-grid pb-60">
    <div class="container">
        <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
            <div class="heading text-center mb-50">
            <h2 class="heading__subtitle">News & Announcements</h2>
            <h3 class="heading__title">Recent Articles</h3>
            </div><!-- /.heading -->
        </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        <div class="row">
        <!-- Post Item #1 -->
        <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="post-item">
            <div class="post__img">
                <a href="{{ route('user.news.detail') }}">
                <img src="{{ asset('assets/images/blog/grid/1.jpg') }}" alt="post image" loading="lazy">
                </a>
                <span class="post__date">Jan 20, 2020</span>
            </div><!-- /.post-img -->
            <div class="post__body">
                <div class="post__meta d-flex align-items-center">
                <div class="post__cat">
                    <a href="#">Oil & Gas</a><a href="#">Insights</a>
                </div><!-- /.post-meta-cat -->
                <a class="post__author" href="#">Mike Dooley</a>
                </div><!-- /.post-meta -->
                <h4 class="post__title"><a href="#">Filing Solar Power Permits in 2020? Consider the Following Important
                    Factors
                </a></h4>
                <p class="post__desc">All of these factors are important to consider when permitting your solar system,
                and can help streamline your process. Take the time to consider...
                </p>
                <a href="{{ route('user.news.detail') }}" class="btn btn__secondary btn__outlined btn__custom">
                <i class="icon-arrow-right"></i>
                <span>Read More</span>
                </a>
            </div><!-- /.post-content -->
            </div><!-- /.post-item -->
        </div><!-- /.col-lg-4 -->
        <!-- Post Item #2 -->
        <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="post-item">
            <div class="post__img">
                <a href="{{ route('user.news.detail') }}">
                <img src="{{ asset('assets/images/blog/grid/2.jpg') }}" alt="post image" loading="lazy">
                </a>
                <span class="post__date">Jan 20, 2020</span>
            </div><!-- /.post-img -->
            <div class="post__body">
                <div class="post__meta d-flex align-items-center">
                <div class="post__cat">
                    <a href="#">Oil & Gas</a><a href="#">Insights</a>
                </div><!-- /.post-meta-cat -->
                <a class="post__author" href="#">Mike Dooley</a>
                </div><!-- /.post-meta -->
                <h4 class="post__title"><a href="#">Filing Solar Power Permits in 2020? Consider the Following Important
                    Factors
                </a></h4>
                <p class="post__desc">Batteries are the most expensive part of a solar system. Between an
                appropriately-size battery bank and a battery-based inverter like the Outback Ra
                </p>
                <a href="{{ route('user.news.detail') }}" class="btn btn__secondary btn__outlined btn__custom">
                <i class="icon-arrow-right"></i>
                <span>Read More</span>
                </a>
            </div><!-- /.post-content -->
            </div><!-- /.post-item -->
        </div><!-- /.col-lg-4 -->
        <!-- Post Item #3 -->
        <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="post-item">
            <div class="post__img">
                <a href="{{ route('user.news.detail') }}">
                <img src="{{ asset('assets/images/blog/grid/3.jpg') }}" alt="post image" loading="lazy">
                </a>
                <span class="post__date">Jan 20, 2020</span>
            </div><!-- /.post-img -->
            <div class="post__body">
                <div class="post__meta d-flex align-items-center">
                <div class="post__cat">
                    <a href="#">Oil & Gas</a><a href="#">Insights</a>
                </div><!-- /.post-meta-cat -->
                <a class="post__author" href="#">Mike Dooley</a>
                </div><!-- /.post-meta -->
                <h4 class="post__title"><a href="#">Filing Solar Power Permits in 2020? Consider the Following Important
                    Factors
                </a></h4>
                <p class="post__desc">Department of Energy, which is why we have funded six teams to improve
                technologies that will protect eagles sharing airspace with the new wind ...
                </p>
                <a href="{{ route('user.news.detail') }}" class="btn btn__secondary btn__outlined btn__custom">
                <i class="icon-arrow-right"></i>
                <span>Read More</span>
                </a>
            </div><!-- /.post-content -->
            </div><!-- /.post-item -->
        </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
    </section><!-- /.blog Grid --> --}}

<footer class="footer">
    <div class="footer-primary">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 footer-widget footer-widget-contact">
                    <h6 class="footer-widget-title">Quick Contact</h6>

                    <div class="footer-widget-content">
                        <p class="mb-20">If you have any questions or need help, feel free to contact with our team.</p>
                        <div class="contact__number d-flex align-items-center mb-30">
                            <i class="icon-phone"></i>
                            <a href="tel:5565454117" class="color-primary">55 654 541 17</a>
                        </div>

                        <p class="mb-20">2307 Beverley Rd Brooklyn, New York 11226 United States.</p>
                        <a href="#" class="btn__location">
                            <i class="icon-location"></i>
                            <span>Get Directions</span>
                        </a>
                    </div>
                </div>

                <div class="col-6 col-sm-6 col-md-6 col-lg-2 col-xl-2 footer-widget footer-widget-nav">
                    <h6 class="footer-widget-title">Company</h6>
                    <div class="footer-widget-content">
                        <nav>
                            <ul class="list-unstyled">
                                <li><a href="{{ route('user.about-us') }}">About Us</a></li>
                                <li><a href="{{ route('user.team') }}">Leadership Team</a></li>
                                <li><a href="{{ route('user.news') }}">News & Media</a></li>
                                <li><a href="{{ route('user.projects') }}">Our Projects</a></li>
                                <li><a href="{{ route('user.contact') }}">Contacts</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>

                <div class="col-6 col-sm-6 col-md-6 col-lg-2 col-xl-2 footer-widget footer-widget-nav">
                    <h6 class="footer-widget-title">Services</h6>
                    <div class="footer-widget-content">
                        <nav>
                            <ul class="list-unstyled">
                                <li><a href="{{ route('user.projects.detail') }}">Wind Generators</a></li>
                                <li><a href="{{ route('user.projects.detail') }}">Solar PV Materials</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>

                <div class="col-6 col-sm-6 col-md-6 col-lg-2 col-xl-2 footer-widget footer-widget-nav">
                    <h6 class="footer-widget-title">Support</h6>
                    <div class="footer-widget-content">
                        <nav>
                            <ul class="list-unstyled">
                                <li><a href="#">Terms & Conditions</a></li>
                                <li><a href="#">Shipping Policy</a></li>
                                <li><a href="#">Delivery Tips</a></li>
                                <li><a href="#">Returns</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>

                <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 footer-widget footer-widget-align-right">
                    <h6 class="footer-widget-title">Products Catalogue</h6>
                    <div class="footer-widget-content">
                        <a href="{{ route('user.request-quote') }}" class="btn btn__primary btn__primary-style2 btn__download mb-60">
                            <i class="icon-download"></i>
                            <span>Download PDF</span>
                        </a>
                        <ul class="social-icons list-unstyled">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-copyrights">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 d-flex justify-content-between">
                    <nav>
                        <ul class="copyright__nav d-flex flex-wrap list-unstyled mb-0">
                            <li><a href="#">Terms & Conditions</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Sitemap</a></li>
                        </ul>
                    </nav>

                    <p class="mb-0">
                        <span class="color-gray">&copy; 2024 Panca Bima Bergawa, All Rights Reserved.</span>
                    </p>
                </div><!-- /.col-lg-12 -->
            </div>
        </div>
    </div><!-- /.footer-copyrights-->
</footer><!-- /.Footer -->
