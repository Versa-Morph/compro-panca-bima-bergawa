@extends('user.layouts.app')

@section('content')
<!-- ========================
       page title
    =========================== -->
    <section class="page-title pt-30 pb-30">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-sm-12 col-md-12 col-lg-12">
              <nav>
                <ol class="breadcrumb justify-content-center mb-20">
                  <li class="breadcrumb-item"><a href="{{ route('user.home') }}">Home</a></li>
                  <li class="breadcrumb-item"><a href="{{ route('user.news') }}">News</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Detail</li>
                </ol>
              </nav>
            </div><!-- /.col-xl-6 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /.page-title -->

      <!-- ======================
        Blog Single
      ========================= -->
      <section class="blog blog-single pt-0 pb-40">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-8">
              <div class="post-item mb-0">
                <div class="post__img">
                  <a href="#">
                    <img src="{{ asset('assets/images/blog/grid/1.jpg') }}" alt="post image">
                  </a>
                </div><!-- /.entry-img -->
                <div class="post__body">
                  <div class="post__meta d-flex align-items-center">
                    <div class="post__cat">
                      <a href="#">Engineering</a><a href="#">Distribution</a>
                    </div><!-- /.post-meta-cat -->
                    <span class="post__date">Jan 20, 2020</span>
                    <span class="post__author">By: <a href="#">Ahmed</a></span>
                    <span class="post__comments">Comments:<a href="#"> 2</a></span>
                  </div><!-- /.post-meta -->
                  <h1 class="post__title">The Influence of Environmental Conditions in Arctic Regions</h1>
                  <div class="post__desc">
                    <p>The key requirement of this work package is the development of a database (and supporting summary
                      report), compiling information for potential renewable energy business and technology solutions to
                      help overcome environmental and climatic challenges in the NPA programme region. Technology
                      solutions cover installation, operation and maintenance of equipment, not the design and manufacture
                      of components.</p>
                    <p>The objective of the database is to identify the main environmental and climatic challenges, and
                      outline technological and business solutions to these challenges, creating a database of these for 8
                      different categories of renewable energy technology. It is designed for use by new and existing
                      renewable energy businesses, to inform them of the challenges they may face in developing their
                      business and how these will be overcome.</p>
                    <p>A range of examples (where available) have been highlighted on how the challenges identified have
                      been overcome. Specific regional related innovations and smart solutions from local business on
                      technology driven RE-solutions have been documented, with the intention of passing on this knowledge
                      to other regions in the NPA not involved in the GREBE Project.</p>
                    <p>Global climate change impacts Europe in many ways, including: changes in average and extreme
                      temperature and precipitation, warmer oceans, rising sea level and shrinking snow and ice cover on
                      land and at sea. These weather phenomenons have led to a range of impacts on ecosystems,
                      socio-economic sectors and human health and safety. There is no doubt that the changes in climate
                      will have a strong impact in our daily life, whether we accept extreme weather conditions as a new
                      phenomenon or not.</p>
                    <p>Adaptation to the past history data, present observed and future predicted impacts will in the
                      coming decades be needed, as well as be complementary to global climate mitigation actions. Narvik
                      Science Park has made a report on this in the GREBE-Project.</p>
                  </div><!-- /.post-desc -->
                </div><!-- /.entry-content -->
              </div><!-- /.post-item -->
              <div class="blog-share d-flex flex-wrap align-items-center justify-content-between mb-30">
                <strong class="mr-20 color-heading">Share This Article</strong>
                <ul class="list-unstyled social-icons d-flex mb-0">
                  <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                  <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fab fa-google"></i></a></li>
                </ul>
              </div><!-- /.blog-share -->
              <div class="blog-tags d-flex flex-wrap mb-30">
                <strong class="mr-20 color-heading">Tags</strong>
                <ul class="list-unstyled d-flex flex-wrap mb-0">
                  <li><a href="#">Solar</a></li>
                  <li><a href="#">Insights</a></li>
                  <li><a href="#">Systems</a></li>
                  <li><a href="#">Battery</a></li>
                  <li><a href="#">Research</a></li>
                  <li><a href="#">Enenrgy</a></li>
                </ul>
              </div><!-- /.blog-tags -->
              <div class="widget-nav d-flex justify-content-between mb-40 pt-30 pb-30 border-top border-bottom">
                <a href="#" class="widget-nav__prev d-flex flex-wrap">
                  <div class="widget-nav__img">
                    <img src="{{ asset('assets/images/blog/grid/2.jpg') }}" alt="blog thumb">
                  </div>
                  <div class="widget-nav__content">
                    <span>Previous Post</span>
                    <h5 class="widget-nav__ttile mb-0">Energy Research Will Help Eagles Coexist Wind</h5>
                  </div>
                </a><!-- /.widget-prev  -->
                <a href="#" class="widget-nav__next d-flex flex-wrap">
                  <div class="widget-nav__img">
                    <img src="{{ asset('assets/images/blog/grid/3.jpg') }}" alt="blog thumb">
                  </div>
                  <div class="widget-nav__content">
                    <span>Next Post</span>
                    <h5 class="widget-nav__ttile mb-0">The Middle East’s Top New Alternative Energy Source</h5>
                  </div>
                </a><!-- /.widget-next  -->
              </div>
              <div class="widget blog-author d-flex flex-wrap mb-70">
                <div class="blog-author__avatar">
                  <img src="{{ asset('assets/images/blog/author/1.jpg') }}" alt="avatar">
                </div><!-- /.author-avatar  -->
                <div class="blog-author__content">
                  <h6 class="blog-author__name">Mahmoud Baghagho</h6>
                  <p class="blog-author__bio">Founded by Begha over many cups of tea at her kitchen table in 2009, our
                    brand promise is simple: to
                    provide powerful digital marketing solutions to small and medium businesses.</p>
                  <ul class="social-icons list-unstyled mb-0">
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-vimeo-v"></i></a> </li>
                    <li><a href="#"><i class="fab fa-linkedin"></i></a> </li>
                  </ul>
                </div><!-- /.author-content  -->
              </div><!-- /.blog-author  -->
              <div class="blog-comments">
                <h5 class="blog-widget__title">2 comments</h5>
                <ul class="comments-list list-unstyled">
                  <li class="comment__item">
                    <div class="comment__avatar">
                      <img src="{{ asset('assets/images/blog/author/2.png') }}" alt="avatar">
                    </div>
                    <div class="comment__content">
                      <h6 class="comment__author">Richard Muldoone</h6>
                      <span class="comment__date">Feb 28, 2017 - 08:07 pm</span>
                      <p class="comment__desc">The example about the mattress sizing page you mentioned in the last WBF
                        can be a perfect example
                        of new keywords and content, and broadening the funnel as well. I can only imagine the sale
                        numbers if that was the site of a mattress selling company.</p>
                      <a class="comment__reply" href="#">reply</a>
                    </div>
                    <ul class="nested__comment list-unstyled">
                      <li class="comment__item">
                        <div class="comment__avatar">
                          <img src="{{ asset('assets/images/blog/author/3.png') }}" alt="avatar">
                        </div>
                        <div class="comment__content">
                          <h6 class="comment__author">Mike Dooley</h6>
                          <span class="comment__date">Feb 28, 2017 - 08:22 pm</span>
                          <p class="comment__desc">The example about the mattress sizing page you mentioned in the last
                            WBF can be a perfect
                            example of new keywords and content, and broadening the funnel as well. I can only imagine the
                            sale numbers if that was the site of a mattress selling company.</p>
                          <a class="comment__reply" href="#">reply</a>
                        </div>
                      </li><!-- /.comment -->
                    </ul><!-- /.nested-comment -->
                  </li><!-- /.comment -->
                </ul><!-- /.comments-list -->
              </div><!-- /.blog-comments -->
              <div class="post-widget blog-comments-form">
                <h5 class="post__widget-title">Leave A Reply</h5>
                <form>
                  <div class="row">
                    <div class="col-sm-12 col-md-4 col-lg-4">
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Name:">
                      </div><!-- /.form-group -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-sm-12 col-md-4 col-lg-4">
                      <div class="form-group">
                        <input type="email" class="form-control" placeholder="Email:">
                      </div><!-- /.form-group -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-sm-12 col-md-4 col-lg-4">
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Website:">
                      </div><!-- /.form-group -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-sm-12 col-md-12 col-lg-12">
                      <div class="form-group">
                        <textarea class="form-control" placeholder="Comment"></textarea>
                      </div><!-- /.form-group -->
                    </div><!-- /.col-lg-12 -->
                    <div class="col-12">
                      <button type="submit" class="btn btn__primary btn__xl">
                        <i class="icon-arrow-right"></i> <span>Submit Comment</span>
                      </button>
                    </div><!-- /.col-lg-12 -->
                  </div><!-- /.row -->
                </form>
              </div><!-- /.blog-comments-form -->
            </div><!-- /.col-lg-8 -->
            <div class="col-sm-12 col-md-12 col-lg-4">
              <aside class="sidebar">
                <div class="widget widget-search">
                  <h5 class="widget__title">Search</h5>
                  <div class="widget__content">
                    <form class="widget__form-search">
                      <input type="text" class="form-control" placeholder="Search...">
                      <button class="btn" type="submit"><i class="icon-search"></i></button>
                    </form>
                  </div><!-- /.widget-content -->
                </div><!-- /.widget-search -->
                <div class="widget widget-posts">
                  <h5 class="widget__title">Recent Posts</h5>
                  <div class="widget__content">
                    <!-- post item #1 -->
                    <div class="widget-post-item d-flex align-items-center">
                      <div class="widget-post__img">
                        <a href="#"><img src="{{ asset('assets/images/blog/grid/2.jpg') }}" alt="thumb"></a>
                      </div><!-- /.widget-post-img -->
                      <div class="widget-post__content">
                        <span class="widget-post__date">Sep 19, 2022</span>
                        <h4 class="widget-post__title"><a href="#">Succession Risks That Threaten Your Leadership</a>
                        </h4>
                      </div><!-- /.widget-post-content -->
                    </div><!-- /.widget-post-item -->
                    <!-- post item #2 -->
                    <div class="widget-post-item d-flex align-items-center">
                      <div class="widget-post__img">
                        <a href="#"><img src="{{ asset('assets/images/blog/grid/3.jpg') }}" alt="thumb"></a>
                      </div><!-- /.widget-post-img -->
                      <div class="widget-post__content">
                        <span class="widget-post__date">July 7, 2022</span>
                        <h4 class="widget-post__title"><a href="#">Do Employee Surveys Tell About Employee?</a>
                        </h4>
                      </div><!-- /.widget-post-content -->
                    </div><!-- /.widget-post-item -->
                    <!-- post item #3 -->
                    <div class="widget-post-item d-flex align-items-center">
                      <div class="widget-post__img">
                        <a href="#"><img src="{{ asset('assets/images/blog/grid/6.jpg') }}" alt="thumb"></a>
                      </div><!-- /.widget-post-img -->
                      <div class="widget-post__content">
                        <span class="widget-post__date">March 13, 2022</span>
                        <h4 class="widget-post__title"><a href="#">Succession Risks That Threaten Your Leadership</a>
                        </h4>
                      </div><!-- /.widget-post-content -->
                    </div><!-- /.widget-post-item -->
                  </div><!-- /.widget-content -->
                </div><!-- /.widget-posts -->
                <div class="widget widget-categories">
                  <h5 class="widget__title">Categories</h5>
                  <div class="widget-content">
                    <ul class="list-unstyled mb-0">
                      <li><a href="#"><span class="cat-count">4</span><span>Wind Generators</span></a></li>
                      <li><a href="#"><span class="cat-count">0</span><span>Solar PV Materials</span></a></li>
                      <li><a href="#"><span class="cat-count">3</span><span>Battery Materials</span></a></li>
                      <li><a href="#"><span class="cat-count">2</span><span>Refined Products</span></a></li>
                      <li><a href="#"><span class="cat-count">4</span><span>Solar Modules</span></a></li>
                      <li><a href="#"><span class="cat-count">1</span><span>Biodiesel Fuel</span></a></li>
                    </ul>
                  </div><!-- /.widget-content -->
                </div><!-- /.widget-categories -->
                <div class="widget widget-tags">
                  <h5 class="widget__title">Tags</h5>
                  <div class="widget-content">
                    <ul class="list-unstyled mb-0">
                      <li><a href="#">Insights</a></li>
                      <li><a href="#">Industry</a></li>
                      <li><a href="#">Modern</a></li>
                      <li><a href="#">Corporate</a></li>
                      <li><a href="#">Business</a></li>
                    </ul>
                  </div><!-- /.widget-content -->
                </div><!-- /.widget-tags -->
              </aside><!-- /.sidebar -->
            </div><!-- /.col-lg-4 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /.blog Single -->
@endsection
