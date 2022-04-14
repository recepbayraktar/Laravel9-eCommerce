<!DOCTYPE html>
<html lang="en">
<head>
<!-- basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- mobile metas -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<!-- site metas -->
<title>Woods</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">
<!-- bootstrap css -->
<link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/home/css/bootstrap.min.css">
<!-- style css -->
<link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/home/css/style.css">
<!-- Responsive-->
<link rel="stylesheet" href="{{ asset('assets') }}/home/css/responsive.css">
<!-- fevicon -->
<link rel="icon" href="{{ asset('assets') }}/home/images/fevicon.png" type="image/gif" />
<!-- Scrollbar Custom CSS -->
<link rel="stylesheet" href="{{ asset('assets') }}/home/css/jquery.mCustomScrollbar.min.css">
<!-- Tweaks for older IEs-->
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

<!-- owl stylesheets -->
<link rel="stylesheet" href="{{ asset('assets') }}/home/css/owl.carousel.min.css">
<link rel="stylesheet" href="{{ asset('assets') }}/home/css/owl.theme.default.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
@yield('javascript')
</head>
    <div class="header_section">
        @include('home._navbar')
        @include('home._header')
    </div>
    @yield('content')
    @include('home._footer')


    <!-- Javascript files-->
    <script src="{{ asset('assets') }}/home/js/jquery.min.js"></script>
    <script src="{{ asset('assets') }}/home/js/popper.min.js"></script>
    <script src="{{ asset('assets') }}/home/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets') }}/home/js/jquery-3.0.0.min.js"></script>
    <script src="{{ asset('assets') }}/home/js/plugin.js"></script>
    <!-- sidebar -->
    <script src="{{ asset('assets') }}/home/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="{{ asset('assets') }}/home/js/custom.js"></script>
    <!-- javascript -->
    <script src="{{ asset('assets') }}/home/js/owl.carousel.js"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <script>
       $(document).ready(function(){
       $(".fancybox").fancybox({
       openEffect: "none",
       closeEffect: "none"
       });
       </script>



</body>
</html>
