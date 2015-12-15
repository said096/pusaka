<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>AdminPanel</title>
  <meta name="description" content="PusakNegara - Control Panel">
  <meta name="author" content="digmilabs">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600'>
  <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/theme.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/admin-forms.css') }}">
  <link rel="shortcut icon" href="{{ asset('admin/img/favicon.ico') }}">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>

<body class="external-page sb-l-c sb-r-c">
  <div id="main" class="animated fadeIn">
    <section id="content_wrapper">
      <div id="canvas-wrapper">
        <canvas id="demo-canvas"></canvas>
      </div>
      <section id="content">
        <div class="admin-form theme-info">
          <div class="panel panel-info mt10 br-n">
            <div class="heading-border"></div>
            <form method="post" action="{{ route('panel.auth.signin') }}" role="form">
              <div class="panel-body bg-light p30">
                <div class="row">
                  <div class="col-sm-7 pr30">
                    <div class="section {{ $errors->has('username') ? 'has-error' : '' }}">
                      <label for="username" class="field-label text-muted fs18 mb10">Username</label>
                      <label for="username" class="field prepend-icon">
                        <input type="text" name="username" id="username" class="gui-input" placeholder="Username">
                        <label for="username" class="field-icon">
                          <i class="fa fa-user"></i>
                        </label>
                      </label>
                      @if($errors->has('username'))
                        <span class="help-block">{{ $errors->first('username') }}</span>
                      @endif
                    </div>
                    <div class="section {{ $errors->has('password') ? 'has-error' : '' }}">
                      <label for="password" class="field-label text-muted fs18 mb10">Password</label>
                      <label for="password" class="field prepend-icon">
                        <input type="password" name="password" id="password" class="gui-input" placeholder="Password">
                        <label for="password" class="field-icon">
                          <i class="fa fa-lock"></i>
                        </label>
                      </label>
                      @if($errors->has('password'))
                        <span class="help-block">{{ $errors->first('password') }}</span>
                      @endif
                    </div>
                  </div>
                  <div class="col-sm-5 br-l br-grey pl30">
                    <h3 class="mb25"> Informasi Singkat :</h3>
                    <p class="mb15">
                      <span class="fa fa-check text-success pr5"></span> Informasi-informasi singkat</p>
                    <p class="mb15">
                      <span class="fa fa-check text-success pr5"></span> Informasi-informasi singkat</p>
                    <p class="mb15">
                      <span class="fa fa-check text-success pr5"></span> Informasi-informasi singkat</p>
                    <p class="mb15">
                      <span class="fa fa-check text-success pr5"></span> Informasi-informasi singkat</p>
                  </div>
                </div>
              </div>
              <div class="panel-footer clearfix p10 ph15">
                <button type="submit" class="button btn-primary mr10 pull-right">Masuk</button>
                <label class="switch ib switch-primary pull-left input-align mt10">
                  <input type="checkbox" name="remember" id="remember">
                  <label for="remember" data-on="YES" data-off="NO"></label>
                  <span>Remember me</span>
                </label>
              </div>
              <input type="hidden" name="_token" value="{{ Session::token() }}">
            </form>
          </div>
        </div>
      </section>
    </section>
  </div>

  <script src="{{ asset('admin/js/jquery/jquery-1.11.1.min.js') }}"></script>
  <script src="{{ asset('admin/js/jquery/jquery-ui.min.js') }}"></script>
  <script src="{{ asset('admin/plugins/canvasbg/canvasbg.js') }}"></script>
  <script src="{{ asset('admin/js/utility.js') }}"></script>
  <script src="{{ asset('admin/js/demo.js') }}"></script>
  <script src="{{ asset('admin/js/main.js') }}"></script>
  <script type="text/javascript">
  jQuery(document).ready(function() {
    "use strict";
    Core.init();
    Demo.init();
    CanvasBG.init({
      Loc: {
        x: window.innerWidth / 2,
        y: window.innerHeight / 3.3
      },
    });
  });
  </script>
</body>
</html>
