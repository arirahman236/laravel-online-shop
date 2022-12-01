<!DOCTYPE html>
<html lang="en">
  <head>
    <title>@yield('title') | {{ Custom::getShopData('name') }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700">
    <link rel="stylesheet" href="{{asset('fonts/icomoon/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/user/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/user/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('css/user/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('css/user/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/user/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/user/aos.css')}}">
    <link rel="stylesheet" href="{{asset('css/user/style.css')}}">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>

    <!- Favicon -->
    <link rel="icon" href="{{asset('images/logo/logo.png')}}">

    <script type="text/javascript"
    src="https://app.sandbox.midtrans.com/snap/snap.js"
    data-client-key="SB-Mid-client-HGGrMTVq_2X_AnkS"></script>

    @yield('css')

  </head>
  <body>

  <div class="site-wrap">
    @include('user.layouts.partials.header')

    @yield('content')

    @include('user.layouts.partials.footer')
  </div>

  <script src="{{asset('js/user/jquery-3.3.1.min.js')}}"></script>
  <script src="{{asset('js/user/jquery-ui.js')}}"></script>
  <script src="{{asset('js/user/popper.min.js')}}"></script>
  <script src="{{asset('js/user/bootstrap.min.js')}}"></script>
  <script src="{{asset('js/user/owl.carousel.min.js')}}"></script>
  <script src="{{asset('js/user/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{asset('js/user/aos.js')}}"></script>

  <script src="{{asset('js/user/main.js')}}"></script>

  <!-- JQuery -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    <!-- Slick JS -->    
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <!-- Our Script -->
    <script>
        $(document).ready(function(){
            $('.slider').slick({
                autoplay: true,
                autoplaySpeed: 2500,
                dots: true
            });
        });
    </script>
  @yield('js')

  </body>
</html>
