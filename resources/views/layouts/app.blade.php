<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="keywords" content="" />
  <meta name="author" content="" />
  <meta name="robots" content="" />
  <meta name="description" content="@yield('meta_description')"/>
  <meta property="og:title" content="Ace Drive - @yield('web_title')" />
  <meta property="og:description" content="@yield('description')"/>
  <title>Ace Drive - @yield('web_title')</title>
  <!-- Stylesheets -->
  <link rel="stylesheet" type="text/css" href="{{URL::asset("assets/css/bootstrap.css")}}">
  <link rel="stylesheet" type="text/css" href="{{URL::asset("assets/css/style.css")}}">
  <link rel="stylesheet" type="text/css" href="{{URL::asset("assets/css/responsive.css")}}">
  <link rel="stylesheet" type="text/css" href="{{URL::asset("assets/css/color.css")}}">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

  <link rel="shortcut icon" type="image/x-icon" href="{{URL::asset("assets/images/favicon.ico")}}">
  <link rel="icon" type="image/x-icon" href="{{URL::asset("assets/images/favicon.ico")}}">

  <!-- Responsive -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>

<div class="page-wrapper">
     <!-- Header -->
     @include('shared.header')

     <!-- Content -->
     @yield('content')

     <!-- Footer -->
     @include('shared.footer')
</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fas fa-arrow-up"></span></div>

<script src="{{URL::asset("assets/js/jquery.js")}}"></script>
<script src="{{URL::asset("assets/js/popper.min.js")}}"></script>
<script src="{{URL::asset("assets/js/bootstrap.min.js")}}"></script>
<script src="{{URL::asset("assets/js/bootstrap-select.min.js")}}"></script>
<script src="{{URL::asset("assets/js/jquery.fancybox.js")}}"></script>
<script src="{{URL::asset("assets/js/isotope.js")}}"></script>
<script src="{{URL::asset("assets/js/owl.js")}}"></script>
<script src="{{URL::asset("assets/js/appear.js")}}"></script>
<script src="{{URL::asset("assets/js/wow.js")}}"></script>
<script src="{{URL::asset("assets/js/scrollbar.js")}}"></script>
<script src="{{URL::asset("assets/js/TweenMax.min.js")}}"></script>
<script src="{{URL::asset("assets/js/swiper.min.js")}}"></script>
<script src="{{URL::asset("assets/js/jquery.ajaxchimp.min.js")}}"></script>
<script src="{{URL::asset("assets/js/parallax-scroll.js")}}"></script>
<script src="{{URL::asset("assets/js/script.js")}}"></script>


@yield('vendor_js')


</body>
</html>













