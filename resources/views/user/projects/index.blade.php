@extends('user.layouts.app')

@section('content')
<!-- ========================
       page title
    =========================== -->
    <section class="page-title page-title-layout1 bg-overlay bg-overlay-2 bg-parallax text-center">
        <div class="bg-img"><img src="{{ asset('assets/images/page-titles/10.jpg') }}" alt="background"></div>
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
              <h1 class="pagetitle__heading mb-0">Projects</h1>
              <p class="pagetitle__desc mb-0">With our innovative technologies, clear focus on the needs of our customers,
                and 1,210 dedicated employees, we energize society. Let’s make tomorrow different today!</p>
              <a href="#projects" class="scroll-down">
                <i class="icon-arrow-down"></i>
              </a>
            </div><!-- /.col-xl-6 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /.page-title -->

      <!-- ===========================
        portfolio standard
      ============================= -->
      <section id="projects" class="portfolio-layout2">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <ul class="portfolio-filter d-flex flex-wrap justify-content-center list-unstyled">
                <li><a class="filter active" href="#" data-filter="all">ALL Works</a></li>
                <li><a class="filter" href="#" data-filter=".filter-eco">ECO</a></li>
                <li><a class="filter" href="#" data-filter=".filter-finance">Finance</a></li>
                <li><a class="filter" href="#" data-filter=".filter-energy">Green Energy</a></li>
                <li><a class="filter" href="#" data-filter=".filter-infractures">Infractures</a></li>
                <li><a class="filter" href="#" data-filter=".filter-innovations">Innovations</a></li>
              </ul><!-- /.portfolio-filter  -->
            </div><!-- /.col-lg-12 -->
          </div><!-- /.row -->
          <div id="filtered-items-wrap" class="row">
            <!-- portfolio item #1 -->
            <div class="col-sm-6 col-md-6 col-lg-4 mix filter-infractures">
              <div class="portfolio-item">
                <div class="portfolio__img">
                  <img src="{{ asset('assets/images/portfolio/grid/1.jpg') }}" alt="portfolio img">
                </div><!-- /.portfolio-img -->
                <div class="portfolio__body">
                  <div class="portfolio__cat">
                    <a href="{{ route('user.projects.detail') }}">Finance</a><a href="{{ route('user.projects.detail') }}">Supply Chain</a>
                  </div><!-- /.portfolio-cat -->
                  <h4 class="portfolio__title"><a href="{{ route('user.projects.detail') }}">Expanding The Solar Supply Chain Finance Program</a></h4>
                </div><!-- /.portfolio__body -->
              </div><!-- /.portfolio-item -->
            </div><!-- /.col-lg-4 -->
            <!-- portfolio item #2 -->
            <div class="col-sm-6 col-md-6 col-lg-4 mix filter-innovations">
              <div class="portfolio-item">
                <div class="portfolio__img">
                  <img src="{{ asset('assets/images/portfolio/grid/2.jpg') }}" alt="portfolio img">
                </div><!-- /.portfolio-img -->
                <div class="portfolio__body">
                  <div class="portfolio__cat">
                    <a href="{{ route('user.projects.detail') }}">Wind Energy</a><a href="{{ route('user.projects.detail') }}">Innovations</a>
                  </div><!-- /.portfolio-cat -->
                  <h4 class="portfolio__title"><a href="{{ route('user.projects.detail') }}">Addressing Wind Energy Innovation Challenges</a></h4>
                </div><!-- /.portfolio__body -->
              </div><!-- /.portfolio-item -->
            </div><!-- /.col-lg-4 -->
            <!-- portfolio item #3 -->
            <div class="col-sm-6 col-md-6 col-lg-4 mix filter-energy">
              <div class="portfolio-item">
                <div class="portfolio__img">
                  <img src="{{ asset('assets/images/portfolio/grid/3.jpg') }}" alt="portfolio img">
                </div><!-- /.portfolio-img -->
                <div class="portfolio__body">
                  <div class="portfolio__cat">
                    <a href="{{ route('user.projects.detail') }}">Electric Vehicle</a><a href="{{ route('user.projects.detail') }}">Infrastructures</a>
                  </div><!-- /.portfolio-cat -->
                  <h4 class="portfolio__title"><a href="{{ route('user.projects.detail') }}">Smarter Ways to Manage EV Charging Infrastructures</a></h4>
                </div><!-- /.portfolio__body -->
              </div><!-- /.portfolio-item -->
            </div><!-- /.col-lg-4 -->
            <!-- portfolio item #4 -->
            <div class="col-sm-6 col-md-6 col-lg-4 mix filter-finance">
              <div class="portfolio-item">
                <div class="portfolio__img">
                  <img src="{{ asset('assets/images/portfolio/grid/4.jpg') }}" alt="portfolio img">
                </div><!-- /.portfolio-img -->
                <div class="portfolio__body">
                  <div class="portfolio__cat">
                    <a href="{{ route('user.projects.detail') }}">Green Energy</a><a href="{{ route('user.projects.detail') }}">ECO</a>
                  </div><!-- /.portfolio-cat -->
                  <h4 class="portfolio__title"><a href="{{ route('user.projects.detail') }}">New Public Attitude Tracker Towards Renewable Energy</a></h4>
                </div><!-- /.portfolio__body -->
              </div><!-- /.portfolio-item -->
            </div><!-- /.col-lg-4 -->
            <!-- portfolio item #5 -->
            <div class="col-sm-6 col-md-6 col-lg-4 mix filter-eco">
              <div class="portfolio-item">
                <div class="portfolio__img">
                  <img src="{{ asset('assets/images/portfolio/grid/5.jpg') }}" alt="portfolio img">
                </div><!-- /.portfolio-img -->
                <div class="portfolio__body">
                  <div class="portfolio__cat">
                    <a href="{{ route('user.projects.detail') }}">Infrastructures</a><a href="{{ route('user.projects.detail') }}">Gas</a>
                  </div><!-- /.portfolio-cat -->
                  <h4 class="portfolio__title"><a href="{{ route('user.projects.detail') }}">Dangerous Environmental Impacts of Natural Gas</a></h4>
                </div><!-- /.portfolio__body -->
              </div><!-- /.portfolio-item -->
            </div><!-- /.col-lg-4 -->
            <!-- portfolio item #6 -->
            <div class="col-sm-6 col-md-6 col-lg-4 mix filter-innovations">
              <div class="portfolio-item">
                <div class="portfolio__img">
                  <img src="{{ asset('assets/images/portfolio/grid/6.jpg') }}" alt="portfolio img">
                </div><!-- /.portfolio-img -->
                <div class="portfolio__body">
                  <div class="portfolio__cat">
                    <a href="{{ route('user.projects.detail') }}">Finance</a><a href="{{ route('user.projects.detail') }}">Supply Chain</a>
                  </div><!-- /.portfolio-cat -->
                  <h4 class="portfolio__title"><a href="{{ route('user.projects.detail') }}">Expanding The Solar Supply Chain Finance Program</a></h4>
                </div><!-- /.portfolio__body -->
              </div><!-- /.portfolio-item -->
            </div><!-- /.col-lg-4 -->
            <!-- portfolio item #7 -->
            <div class="col-sm-6 col-md-6 col-lg-4 mix filter-eco portfolio-hidden">
              <div class="portfolio-item">
                <div class="portfolio__img">
                  <img src="{{ asset('assets/images/portfolio/grid/1.jpg') }}" alt="portfolio img">
                </div><!-- /.portfolio-img -->
                <div class="portfolio__body">
                  <div class="portfolio__cat">
                    <a href="{{ route('user.projects.detail') }}">Finance</a><a href="{{ route('user.projects.detail') }}">Supply Chain</a>
                  </div><!-- /.portfolio-cat -->
                  <h4 class="portfolio__title"><a href="{{ route('user.projects.detail') }}">Expanding The Solar Supply Chain Finance Program</a></h4>
                </div><!-- /.portfolio__body -->
              </div><!-- /.portfolio-item -->
            </div><!-- /.col-lg-4 -->
            <!-- portfolio item #8 -->
            <div class="col-sm-6 col-md-6 col-lg-4 mix filter-energy portfolio-hidden">
              <div class="portfolio-item">
                <div class="portfolio__img">
                  <img src="{{ asset('assets/images/portfolio/grid/3.jpg') }}" alt="portfolio img">
                </div><!-- /.portfolio-img -->
                <div class="portfolio__body">
                  <div class="portfolio__cat">
                    <a href="{{ route('user.projects.detail') }}">Finance</a><a href="{{ route('user.projects.detail') }}">Supply Chain</a>
                  </div><!-- /.portfolio-cat -->
                  <h4 class="portfolio__title"><a href="{{ route('user.projects.detail') }}">Expanding The Solar Supply Chain Finance Program</a></h4>
                </div><!-- /.portfolio__body -->
              </div><!-- /.portfolio-item -->
            </div><!-- /.col-lg-4 -->
            <!-- portfolio item #9 -->
            <div class="col-sm-6 col-md-6 col-lg-4 mix filter-infractures portfolio-hidden">
              <div class="portfolio-item">
                <div class="portfolio__img">
                  <img src="{{ asset('assets/images/portfolio/grid/2.jpg') }}" alt="portfolio img">
                </div><!-- /.portfolio-img -->
                <div class="portfolio__body">
                  <div class="portfolio__cat">
                    <a href="{{ route('user.projects.detail') }}">Finance</a><a href="{{ route('user.projects.detail') }}">Supply Chain</a>
                  </div><!-- /.portfolio-cat -->
                  <h4 class="portfolio__title"><a href="{{ route('user.projects.detail') }}">Expanding The Solar Supply Chain Finance Program</a></h4>
                </div><!-- /.portfolio__body -->
              </div><!-- /.portfolio-item -->
            </div><!-- /.col-lg-4 -->
          </div><!-- /.row -->
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 text-center">
              <button type="button" class="btn btn__primary btn__outlined btn__custom loadMoreportfolio mt-30">
                <i class="icon-arrow-right"></i> <span>Explore All Projects</span>
              </button>
            </div><!-- /.col-lg-12 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /.portfolio standard -->
@endsection