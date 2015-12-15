<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PusakaNegara</title>
  <meta name="keywords" content="PusakaNegara">
  <meta name="description" content="PusakaNegara - Pusat Kajian Keuangan Negara">
  <meta name="author" content="digmilabs">
  <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
  <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600,800' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="{{ asset('css/ionicons.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
  <link rel="stylesheet" href="{{ asset('css/custom-green.css') }}" id="style">
  <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">
  <link rel="stylesheet" href="{{ asset('css/owl.transitions.css') }}">
  <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
</head>
<body>

  <div id="preloader">
    <div id="status"></div>
  </div>

  <div class="wrapper">
    @include('client.partials.header')
    @yield('content')
    @include('client.partials.footer')
    @include('client.partials.modals')
  </div>

  <script src="{{ asset('js/jquery.min.js') }}"></script>
  <script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
  <script src="{{ asset('js/bootstrap.js') }}"></script>
  <script src="{{ asset('js/style-switcher.js') }}"></script>
  <script src="{{ asset('js/wow.min.js') }}"></script>
  <script src="{{ asset('js/moment.min.js') }}"></script>
  <script src="{{ asset('js/jquery.ticker.js') }}"></script>
  <script src="{{ asset('js/owl.carousel.js') }}"></script>
  <script src="{{ asset('js/jquery.magnific-popup.js') }}"></script>
  <script src="{{ asset('js/jquery.simpleWeather.min.js') }}"></script>
  <script src="{{ asset('js/jquery.pickmeup.js') }}"></script>
  <script src="{{ asset('js/jquery.scrollUp.js') }}"></script>
  <script src="{{ asset('js/jquery.nicescroll.js') }}"></script>
  <script src="{{ asset('js/jquery.nicescroll.plus.js') }}"></script>
  <script src="{{ asset('js/masonry.pkgd.js') }}"></script>
  <script src="{{ asset('js/enquire.js') }}"></script>
  <script src="{{ asset('js/custom-fun.js') }}"></script>
</body>
</html>