<!DOCTYPE html>
<html lang="en">
<!-- Head BEGIN -->
<head>
  <meta charset="utf-8">
  <title>@yield('title')</title>

  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <meta content="Metronic Shop UI description" name="description">
  <meta content="Metronic Shop UI keywords" name="keywords">
  <meta content="keenthemes" name="author">

  <meta property="og:site_name" content="-CUSTOMER VALUE-">
  <meta property="og:title" content="-CUSTOMER VALUE-">
  <meta property="og:description" content="-CUSTOMER VALUE-">
  <meta property="og:type" content="website">
  <meta property="og:image" content="-CUSTOMER VALUE-"><!-- link to image for socio -->
  <meta property="og:url" content="-CUSTOMER VALUE-">

  <link rel="shortcut icon" href="favicon.ico">

  <!-- Fonts START -->
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|PT+Sans+Narrow|Source+Sans+Pro:200,300,400,600,700,900&amp;subset=all" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900&amp;subset=all" rel="stylesheet" type="text/css"><!--- fonts for slider on the index page -->
  <!-- Fonts END -->

  <!-- Global styles START -->
  <link href="{{ asset('assets') }}/home/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="{{ asset('assets') }}/home/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Global styles END -->

  <!-- Page level plugin styles START -->
  <link href="{{ asset('assets') }}/home/pages/css/animate.css" rel="stylesheet">
  <link href="{{ asset('assets') }}/home/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet">
  <link href="{{ asset('assets') }}/home/plugins/owl.carousel/assets/owl.carousel.css" rel="stylesheet">
  <!-- Page level plugin styles END -->

  <!-- Theme styles START -->
  <link href="{{ asset('assets') }}/home/pages/css/components.css" rel="stylesheet">
  <link href="{{ asset('assets') }}/home/pages/css/slider.css" rel="stylesheet">
  <link href="{{ asset('assets') }}/home/pages/css/style-shop.css" rel="stylesheet" type="text/css">
  <link href="{{ asset('assets') }}/home/corporate/css/style.css" rel="stylesheet">
  <link href="{{ asset('assets') }}/home/corporate/css/style-responsive.css" rel="stylesheet">
  <link href="{{ asset('assets') }}/home/corporate/css/themes/red.css" rel="stylesheet" id="style-color">
  <link href="{{ asset('assets') }}/home/corporate/css/custom.css" rel="stylesheet">
  <!-- Theme styles END -->
</head>
<!-- Head END -->
<body class="ecommerce">
    @include('home._preHeader')

    @include('home._header')
    @yield('sidebar')
    @yield('slider')
    @yield('content')

    @include('home._footer')



    @yield('javascript')
    <script src="{{ asset('assets') }}/home/plugins/jquery.min.js" type="text/javascript"></script>
    <script src="{{ asset('assets') }}/home/plugins/jquery-migrate.min.js" type="text/javascript"></script>
    <script src="{{ asset('assets') }}/home/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="{{ asset('assets') }}/home/corporate/scripts/back-to-top.js" type="text/javascript"></script>
    <script src="{{ asset('assets') }}/home/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- END CORE PLUGINS -->

    <!-- BEGIN PAGE LEVEL JAVASCRIPTS (REQUIRED ONLY FOR CURRENT PAGE) -->
    <script src="{{ asset('assets') }}/home/plugins/fancybox/source/jquery.fancybox.pack.js" type="text/javascript"></script><!-- pop up -->
    <script src="{{ asset('assets') }}/home/plugins/owl.carousel/owl.carousel.min.js" type="text/javascript"></script><!-- slider for products -->
    <script src='{{ asset('assets') }}/home/plugins/zoom/jquery.zoom.min.js' type="text/javascript"></script><!-- product zoom -->
    <script src="{{ asset('assets') }}/home/plugins/bootstrap-touchspin/bootstrap.touchspin.js" type="text/javascript"></script><!-- Quantity -->

    <script src="{{ asset('assets') }}/home/corporate/scripts/layout.js" type="text/javascript"></script>
    <script src="{{ asset('assets') }}/home/pages/scripts/bs-carousel.js" type="text/javascript"></script>
    <script type="text/javascript">
        jQuery(document).ready(function() {
            Layout.init();
            Layout.initOWL();
            Layout.initImageZoom();
            Layout.initTouchspin();
            Layout.initTwitter();

            Layout.initFixHeaderWithPreHeader();
            Layout.initNavScrolling();
        });
    </script>
    <!-- END PAGE LEVEL JAVASCRIPTS -->


</body>
</html>
