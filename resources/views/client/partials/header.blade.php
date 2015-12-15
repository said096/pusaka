<div class="header-toolbar">
  <div class="container">
    <div class="row">
      <div class="col-md-16 text-uppercase">
        <div class="row">
          <div class=" col-xs-16 col-sm-8">
            <ul id="inline-popups" class="list-inline">
              <li class="hidden-xs"><a href="{{ route('pages.advertising') }}">Iklan</a></li>
              <li><a href="#signin" class="open-popup-link" data-effect="mfp-zoom-in">Masuk</a></li>
              <li><a href="{{ route('pages.signup') }}">Buat Akun</a></li>
              <li><a href="{{ asset('pages.about') }}">Tentang</a></li>
            </ul>
          </div>
          <div class="col-xs-16 col-sm-8">
            <div class="row">
              <div id="time-date"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="sticky-header">
  <div class="container header">
    <div class="row">
      <div class="col-sm-5 col-md-5 wow fadeInUpLeft animated"><a class="navbar-brand" href="{{ route('pages.home') }}">pusakanegara</a></div>
      <div class="col-sm-11 col-md-11 hidden-xs text-right"><img src="images/ads/468-60-ad.gif" width="468" height="60" alt=""/></div>
    </div>
  </div>
  @include('client.partials.navbar')
</div>