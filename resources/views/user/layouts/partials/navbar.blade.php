<header class="header header-layout1">
    <div class="header-topbar">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="d-flex align-items-center justify-content-between">
                        <ul class="contact__list d-flex flex-wrap align-items-center list-unstyled mb-0">
                            <li>
                                <i class="icon-mail"></i>
                                <a href="mailto:marketing@bimabergawa.com">Email: marketing@bimabergawa.com</a>
                            </li>
                            <li>
                                <i class="icon-clock"></i>
                                <a href="{{ route('user.contact') }}">Mon - Sat: 8:00 am - 6:00 pm</a>
                            </li>
                            <li>
                                <i class="icon-location color-primary"></i>
                                <a href="https://maps.app.goo.gl/CDJZYe8nXkdoMG6y7" class="color-primary">Get Directions</a>
                            </li>
                        </ul><!-- /.contact__list -->
                        <div class="d-flex align-items-center">
                            <form class="header-topbar__search mr-20">
                                <input type="text" class="form-control" placeholder="Type Your Search Words...">
                                <button class="header-topbar__search-btn"><i class="fa fa-search"></i></button>
                            </form>

                            <ul class="social-icons list-unstyled mb-0 mr-20">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            </ul><!-- /.social-icons -->

                            <!-- Google Translate Element (Hidden) -->
                            <div id="google_translate_element" style="display:none;"></div>

                            <!-- Custom Dropdown -->
                            <div class="dropdown lang-dropdown">
                                <button class="dropdown-toggle lang-dropdown-toggle" id="langDropdown" data-toggle="dropdown">
                                    <img src="{{ asset('assets/images/flags/united kingdom.png') }}" width="30" alt="en"> <span>English</span>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="langDropdown">
                                    <a class="dropdown-item" href="#" onclick="translateLanguage('en')">
                                        <img src="{{ asset('assets/images/flags/united kingdom.png') }}" alt="en" width="30"> <span>English</span>
                                    </a>
                                    <a class="dropdown-item" href="#" onclick="translateLanguage('id')">
                                        <img src="{{ asset('assets/images/flags/indonesia.png') }}" alt="id" width="30"> <span>Indonesia</span>
                                    </a>
                                    <a class="dropdown-item" href="#" onclick="translateLanguage('zh-CN')">
                                        <img src="{{ asset('assets/images/flags/china.png') }}" alt="zh" width="30"> <span>China</span>
                                    </a>
                                    <a class="dropdown-item" href="#" onclick="translateLanguage('ja')">
                                        <img src="{{ asset('assets/images/flags/japan.png') }}" alt="jp" width="30"> <span>Japan</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- /.col-12 -->
            </div><!-- /.row -->
        </div>
    </div><!-- /.header-top -->
    <nav class="navbar navbar-expand-lg sticky-navbar">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('user.home') }}">
                <img src="{{ asset('assets/images/logo-pbb_htllogo.png') }}" width="200" class="logo" alt="logo">
            </a>

            <button class="navbar-toggler" type="button">
                <span class="menu-lines"><span></span></span>
            </button>

            <div class="collapse navbar-collapse" id="mainNavigation">
                <ul class="navbar-nav">
                    <li class="nav__item">
                        <a href="{{ route('user.home') }}" class="nav__item-link {{ request()->routeIs('user.home') ? 'active' : '' }}">Home</a>
                    </li>
                    <li class="nav__item has-dropdown">
                        <a href="#!" class="nav__item-link {{ request()->routeIs(['user.about-us', 'user.team', 'user.awards', 'user.faqs', 'user.gallery']) ? 'active' : '' }}">Company</a>
                        <button class="dropdown-toggle" data-toggle="dropdown"></button>

                        <ul class="dropdown-menu">
                            <li class="nav__item">
                                <a href="{{ route('user.about-us') }}" class="nav__item-link {{ request()->routeIs('user.about-us') ? 'active' : '' }}">About Us</a>
                            </li>

                            {{-- <li class="nav__item">
                                <a href="{{ route('user.team') }}" class="nav__item-link {{ request()->routeIs('user.team') ? 'active' : '' }}">Leadership Team</a>
                            </li> --}}

                            <li class="nav__item">
                                <a href="{{ route('user.awards') }}" class="nav__item-link {{ request()->routeIs('user.awards') ? 'active' : '' }}">Awards & Recognition</a>
                            </li>

                            <li class="nav__item">
                                <a href="{{ route('user.faqs') }}" class="nav__item-link {{ request()->routeIs('user.faqs') ? 'active' : '' }}">Help & FAQs</a>
                            </li>

                            <li class="nav__item">
                                <a href="{{ route('user.gallery') }}" class="nav__item-link {{ request()->routeIs('user.gallery') ? 'active' : '' }}">Our Gallery</a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav__item">
                        <a href="{{ route('user.how-it-works') }}" class="nav__item-link {{ request()->routeIs('user.how-it-works') ? 'active' : '' }}">How It Works</a>
                    </li>

                    <li class="nav__item">
                        <a href="{{ route('user.service') }}" class="nav__item-link {{ request()->routeIs('user.service') ? 'active' : '' }}">Services</a>
                    </li>

                    {{-- <li class="nav__item">
                        <a href="{{ route('user.projects') }}" class="nav__item-link {{ request()->routeIs('user.projects') ? 'active' : '' }}">Projects</a>
                    </li> --}}

                    <li class="nav__item">
                        <a href="{{ route('user.news') }}" class="nav__item-link {{ request()->routeIs('user.news') ? 'active' : '' }}">News</a>
                    </li>

                    <li class="nav__item">
                        <a href="{{ route('user.careers') }}" class="nav__item-link {{ request()->routeIs('user.careers') ? 'active' : '' }}">Careers</a>
                    </li>

                    <li class="nav__item">
                        <a href="{{ route('user.contact') }}" class="nav__item-link {{ request()->routeIs('user.contact') ? 'active' : '' }}">Contact Us</a>
                    </li>
                </ul>

                <button class="close-mobile-menu d-block d-lg-none"><i class="fas fa-times"></i></button>
            </div>

            <div class="contact__number d-none d-xl-flex align-items-center">
                <i class="icon-phone"></i>
                <a href="#!">+62 852 1308 8243</a>
            </div>

            <ul class="navbar-actions d-none d-xl-flex align-items-center list-unstyled mb-0">
                <li>
                    <a href="{{ route('user.request-quote') }}" class="btn btn__primary">
                        <span>Request A Quote</span>
                        <i class="icon-arrow-right"></i>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</header>
