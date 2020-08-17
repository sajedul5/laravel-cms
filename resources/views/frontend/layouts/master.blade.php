<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SpicyX | Home</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('public/frontend')}}/assets/img/favicon.ico" type="image/x-icon">

    <!-- Font awesome -->
    <link href="{{asset('public/frontend')}}/assets/css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="{{asset('public/frontend')}}/assets/css/bootstrap.css" rel="stylesheet">
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="{{asset('public/frontend')}}/assets/css/slick.css">
    <!-- Date Picker -->
    <link rel="stylesheet" type="text/css" href="{{asset('public/frontend')}}/assets/css/bootstrap-datepicker.css">
    <!-- Fancybox slider -->
    <link rel="stylesheet" href="{{asset('public/frontend')}}/assets/css/jquery.fancybox.css" type="text/css" media="screen" />
    <!-- Theme color -->
    <link id="switcher" href="{{asset('public/frontend')}}/assets/css/theme-color/default-theme.css" rel="stylesheet">

    <!-- Main style sheet -->
    <link href="{{asset('public/frontend')}}/assets/css/style.css" rel="stylesheet">


    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Tangerine' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Prata' rel='stylesheet' type='text/css'>

  </head>
  <body>

  <!--START SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#">
      <i class="fa fa-angle-up"></i>
      <span>Top</span>
    </a>
  <!-- END SCROLL TOP BUTTON -->
  @include('frontend.layouts.header')
  @yield('content')
  @include('frontend.layouts.footer')


















<!-- jQuery library -->
<script src="{{asset('public/frontend')}}/assets/js/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{asset('public/frontend')}}/assets/js/bootstrap.js"></script>
<!-- Slick slider -->
<script type="text/javascript" src="{{asset('public/frontend')}}/assets/js/slick.js"></script>
<!-- Counter -->
<script type="text/javascript" src="{{asset('public/frontend')}}/assets/js/waypoints.js"></script>
<script type="text/javascript" src="{{asset('public/frontend')}}/assets/js/jquery.counterup.js"></script>
<!-- Date Picker -->
<script type="text/javascript" src="{{asset('public/frontend')}}/assets/js/bootstrap-datepicker.js"></script>
<!-- Mixit slider -->
<script type="text/javascript" src="{{asset('public/frontend')}}/assets/js/jquery.mixitup.js"></script>
<!-- Add fancyBox -->
<script type="text/javascript" src="{{asset('public/frontend')}}/assets/js/jquery.fancybox.pack.js"></script>

<!-- Custom js -->
<script src="{{asset('public/frontend')}}/assets/js/custom.js"></script>

</body>
</html>
