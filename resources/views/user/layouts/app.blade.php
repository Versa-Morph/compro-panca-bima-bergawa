<!DOCTYPE html>
<html lang="en">

<head>
    @include('user.layouts.partials.head')
    <title>Panca Bima Bergawa</title>
</head>

<body>
  <div class="wrapper">
    <div class="preloader">
      <div class="loading"><span></span><span></span><span></span><span></span></div>
    </div><!-- /.preloader -->

    <!-- =========================
        Header
    =========================== -->

    @include('user.layouts.partials.navbar')
    @yield('content')
    <!-- Google Translate Element (Hidden) -->
    <div id="google_translate_element"></div>
    <!-- ========================
    Footer
    ========================== -->
    @include('user.layouts.partials.footer')

    <button id="scrollTopBtn"><i class="fas fa-long-arrow-alt-up"></i></button>

  </div><!-- /.wrapper -->

  @include('user.layouts.partials.foot')
</body>

</html>
