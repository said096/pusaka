<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>AdminPanel</title>
  <meta name="keywords" content="PusakNegara - Konten web">
  <meta name="description" content="PusakNegara - Pusat Kajian Keuangan Negara">
  <meta name="author" content="digmilabs">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600'>
  <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/theme.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/admin-forms.css') }}">
  <!-- Summernote CSS  -->
  <link rel="stylesheet" type="text/css" href="{{ asset('admin/plugins/summernote/summernote.css') }}">
  <link rel="shortcut icon" href="{{ asset('admin/img/favicon.ico') }}">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<body class="dashboard-page sb-l-o sb-r-c">
  @include('panel.partials.skin-toolbox')
  <div id="main">
    @include('panel.partials.header')
    @include('panel.partials.side-bar')
    <section id="content_wrapper">
      @include('panel.partials.top-bar')
      @include('panel.partials.breadcrumbs')
      @yield('content')
      @include('panel.partials.footer')
    </section>
  </div>
  <script src="{{ asset('admin/js/jquery/jquery-1.11.1.min.js') }}"></script>
  <script src="{{ asset('admin/js/jquery/jquery-ui.min.js') }}"></script>
  <script src="{{ asset('admin/plugins/highcharts/highcharts.js') }}"></script>
  <script src="{{ asset('admin/plugins/sparkline/jquery.sparkline.min.js') }}"></script>
  <script src="{{ asset('admin/plugins/circles/circles.js') }}"></script>
  <script src="{{ asset('admin/plugins/jvectormap/jquery.jvectormap.min.js') }}"></script>
  <script src="{{ asset('admin/plugins/jvectormap/assets/jquery-jvectormap-us-lcc-en.js') }}"></script>
  <script src="{{ asset('admin/js/utility.js') }}"></script>
  <script src="{{ asset('admin/js/demo.js') }}"></script>
  <script src="{{ asset('admin/js/main.js') }}"></script>
  <script src="{{ asset('admin/js/widgets.js') }}"></script>
  <!-- Summernote Plugin -->
  <script src="{{ asset('admin/plugins/summernote/summernote.min.js') }}"></script>
  <script type="text/javascript">
  jQuery(document).ready(function() {

    "use strict";
    Core.init();
    Demo.init();

    // Init Widget Demo JS
    // demoHighCharts.init();

    // Because we are using Admin Panels we use the OnFinish
    // callback to activate the demoWidgets. It's smoother if
    // we let the panels be moved and organized before
    // filling them with content from various plugins

    // Init plugins used on this page
    // HighCharts, JvectorMap, Admin Panels

    // Init Admin Panels on widgets inside the ".admin-panels" container
    $('.admin-panels').adminpanel({
      grid: '.admin-grid',
      draggable: true,
      preserveGrid: true,
      mobile: false,
      onStart: function() {
        // Do something before AdminPanels runs
      },
      onFinish: function() {
        $('.admin-panels').addClass('animated fadeIn').removeClass('fade-onload');
        // Init the rest of the plugins now that the panels
        // have had a chance to be moved and organized.
        // It's less taxing to organize empty panels
        demoHighCharts.init();
        runVectorMaps(); // function below
      },
      onSave: function() {
        $(window).trigger('resize');
      }
    });

    // Init Summernote Plugin
    $('.summernote').summernote({
      height: 255, //set editable area's height
      focus: false, //set focus editable area after Initialize summernote
      oninit: function() {},
      onChange: function(contents, $editable) {},
    });

    // Init Inline Summernote Plugin
    $('.summernote-edit').summernote({
      airMode: true,
      focus: false //set focus editable area after Initialize summernote            
    });

  });
  </script>

  <!-- END: PAGE SCRIPTS -->

</body>

</html>
