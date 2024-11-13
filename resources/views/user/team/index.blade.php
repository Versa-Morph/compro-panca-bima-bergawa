@extends('user.layouts.app')

@section('content')
    <!-- ========================
       page title
    =========================== -->
    <section class="page-title page-title-layout1 bg-overlay bg-overlay-2 bg-parallax text-center">
        <div class="bg-img"><img src="{{ asset('assets/images/page-titles/3.jpg') }}" alt="background"></div>
        <div class="container">
          <div class="row">
            <div class="col-12">
              <h1 class="pagetitle__heading mb-0">Leadership</h1>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item"><a href="#">Company</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Leadership Team</li>
                </ol>
              </nav>
              <a href="#team" class="scroll-down">
                <i class="icon-arrow-down"></i>
              </a>
            </div><!-- /.col-xl-6 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /.page-title -->

      <!-- ========================
          Team layout 1
      ========================== -->
      <section id="team" class="team-layout1 pb-30">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h5 class="text-secondary text-center">Under Maintenance</h5>
                </div>
            </div>
          {{-- <div class="row">
            <!-- Member #1 -->
            <div class="col-sm-6 col-md-4 col-lg-4">
              <div class="member">
                <div class="member__img">
                  <img src="{{ asset('assets/images/team/1.jpg') }}" alt="member img">
                </div><!-- /.member-img -->
                <div class="member__info d-flex align-items-center justify-content-between">
                  <div>
                    <h5 class="member__name">Mike Dooley</h5>
                    <p class="member__desc">Chief Executive</p>
                  </div>
                  <ul class="social-icons list-unstyled mb-0">
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                  </ul>
                </div><!-- /.member-info -->
              </div><!-- /.member -->
            </div><!-- /.col-lg-4 -->
            <!-- Member #2 -->
            <div class="col-sm-6 col-md-4 col-lg-4">
              <div class="member">
                <div class="member__img">
                  <img src="{{ asset('assets/images/team/2.jpg') }}" alt="member img">
                </div><!-- /.member-img -->
                <div class="member__info d-flex align-items-center justify-content-between">
                  <div>
                    <h5 class="member__name">Michael Brian</h5>
                    <p class="member__desc">Managing Director</p>
                  </div>
                  <ul class="social-icons list-unstyled mb-0">
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                  </ul>
                </div><!-- /.member-info -->
              </div><!-- /.member -->
            </div><!-- /.col-lg-4 -->
            <!-- Member #3 -->
            <div class="col-sm-6 col-md-4 col-lg-4">
              <div class="member">
                <div class="member__img">
                  <img src="{{ asset('assets/images/team/3.jpg') }}" alt="member img">
                </div><!-- /.member-img -->
                <div class="member__info d-flex align-items-center justify-content-between">
                  <div>
                    <h5 class="member__name">Chris Wensel</h5>
                    <p class="member__desc">Vice President</p>
                  </div>
                  <ul class="social-icons list-unstyled mb-0">
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                  </ul>
                </div><!-- /.member-info -->
              </div><!-- /.member -->
            </div><!-- /.col-lg-4 -->
          </div> <!-- /.row --> --}}
        </div><!-- /.container -->
      </section><!-- /.Team layout 1  -->

      <!-- ========================
          Team layout 2
      ========================== -->
      {{-- <section class="team-layout2 text-center pt-0 pb-30">
        <div class="container">
          <div class="row">
            <!-- Member #1 -->
            <div class="col-sm-6 col-md-6 col-lg-3">
              <div class="member">
                <div class="member__img">
                  <img src="{{ asset('assets/images/team/4.jpg') }}" alt="member img">
                </div><!-- /.member-img -->
                <div class="member__info">
                  <ul class="social-icons justify-content-center list-unstyled mb-0">
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                  </ul>
                  <h5 class="member__name">Richard Muldoone</h5>
                  <p class="member__desc">Legal Officer</p>
                </div><!-- /.member-info -->
              </div><!-- /.member -->
            </div><!-- /.col-lg-3 -->
            <!-- Member #2 -->
            <div class="col-sm-6 col-md-6 col-lg-3">
              <div class="member">
                <div class="member__img">
                  <img src="{{ asset('assets/images/team/5.jpg') }}" alt="member img">
                </div><!-- /.member-img -->
                <div class="member__info">
                  <ul class="social-icons justify-content-center list-unstyled mb-0">
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                  </ul>
                  <h5 class="member__name">Maria Andaloro</h5>
                  <p class="member__desc">HR Officer</p>
                </div><!-- /.member-info -->
              </div><!-- /.member -->
            </div><!-- /.col-lg-3 -->
            <!-- Member #3 -->
            <div class="col-sm-6 col-md-6 col-lg-3">
              <div class="member">
                <div class="member__img">
                  <img src="{{ asset('assets/images/team/6.jpg') }}" alt="member img">
                </div><!-- /.member-img -->
                <div class="member__info">
                  <ul class="social-icons justify-content-center list-unstyled mb-0">
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                  </ul>
                  <h5 class="member__name">Marian Chris</h5>
                  <p class="member__desc">Global Sales</p>
                </div><!-- /.member-info -->
              </div><!-- /.member -->
            </div><!-- /.col-lg-3 -->
            <!-- Member #4 -->
            <div class="col-sm-6 col-md-6 col-lg-3">
              <div class="member">
                <div class="member__img">
                  <img src="{{ asset('assets/images/team/7.jpg') }}" alt="member img">
                </div><!-- /.member-img -->
                <div class="member__info">
                  <ul class="social-icons justify-content-center list-unstyled mb-0">
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                  </ul>
                  <h5 class="member__name">Jack Mudson</h5>
                  <p class="member__desc">Manager</p>
                </div><!-- /.member-info -->
              </div><!-- /.member -->
            </div><!-- /.col-lg-3 -->
          </div> <!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /.Team layout 2  --> --}}
@endsection
