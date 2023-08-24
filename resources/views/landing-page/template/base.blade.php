<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Berangkut</title>

    <!-- Fav Icon -->
    <link rel="icon" href="{{ asset('assets-admin/static/logo-secondary-small.png') }}" type="image/x-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Permanent+Marker&family=Source+Serif+Pro:wght@400;600&display=swap"
        rel="stylesheet">

    <!-- Stylesheets -->
    <link href="{{ asset('assets-landing/css/font-awesome-all.css') }}" rel="stylesheet">
    <link href="{{ asset('assets-landing/css/fontawesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets-landing/css/flaticon_save_us.css') }}" rel="stylesheet">
    <link href="{{ asset('assets-landing/fonts/flaticon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets-landing/css/owl.css') }}" rel="stylesheet">
    <link href="{{ asset('assets-landing/css/slick-theme.css') }}" rel="stylesheet">
    <link href="{{ asset('assets-landing/css/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('assets-landing/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('assets-landing/css/jquery.fancybox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets-landing/css/magnific-popup.css') }}" rel="stylesheet">
    <link href="{{ asset('assets-landing/css/progresscircle.css') }}" rel="stylesheet">
    <link href="{{ asset('assets-landing/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('assets-landing/css/color.css') }}" rel="stylesheet">
    <link href="{{ asset('assets-landing/css/nice-select.css') }}" rel="stylesheet">
    <link href="{{ asset('assets-landing/css/global.css') }}" rel="stylesheet">
    <link href="{{ asset('assets-landing/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets-landing/css/swiper.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets-landing/css/responsive.css') }}" rel="stylesheet">

</head>

<!-- page wrapper -->

<body>
    <div class="boxed_wrapper">
        @include('landing-page.template.sections.preloader')

        <!-- main header -->
        @include('landing-page.template.sections.header')
        <!-- main-header end -->

        @yield('content')

        <!--footer -->
        @include('landing-page.template.sections.footer')
        <!-- main-footer end -->

    </div>


    <!-- jequery plugins -->
    <script src="{{ asset('assets-landing/js/jquery.js') }}"></script>
    <script src="{{ asset('assets-landing/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets-landing/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets-landing/js/fontawesome.min.js') }}"></script>
    <script src="{{ asset('assets-landing/js/all.min.js') }}"></script>
    <script src="{{ asset('assets-landing/js/owl.js') }}"></script>
    <script src="{{ asset('assets-landing/js/wow.js') }}"></script>
    <script src="{{ asset('assets-landing/js/slick.min.js') }}"></script>
    <script src="{{ asset('assets-landing/js/validation.js') }}"></script>
    <script src="{{ asset('assets-landing/js/progresscircle.js') }}"></script>
    <script src="{{ asset('assets-landing/js/scrollbar.js') }}"></script>
    <script src="{{ asset('assets-landing/js/appear.js') }}"></script>
    <script src="{{ asset('assets-landing/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('assets-landing/js/swiper.min.js') }}"></script>
    <script src="{{ asset('assets-landing/js/parallax.min.js') }}"></script>
    <script src="{{ asset('assets-landing/js/jquery.fancybox.js') }}"></script>
    <script src="{{ asset('assets-landing/js/jquery.magnific-popup.js') }}"></script>
    <script src="{{ asset('assets-landing/js/parallax-scroll.js') }}"></script>
    <script src="{{ asset('assets-landing/js/jquery.paroller.min.js') }}"></script>

    <!-- main-js -->
    <script src="{{ asset('assets-landing/js/script.js') }}"></script>

</body><!-- End of .page_wrapper -->

</html>
