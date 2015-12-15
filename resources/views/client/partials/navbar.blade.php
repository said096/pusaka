  <div class="nav-search-outer">
    <nav class="navbar navbar-inverse" role="navigation">
      <div class="container">
        <div class="row">
          <div class="col-sm-16"><a href="javascript:(0)" class="toggle-search pull-right"><span class="ion-ios7-search"></span></a>
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse"><span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
              <ul class="nav navbar-nav text-uppercase main-nav">
                <li class="active"><a href="{{ route('pages.home') }}">beranda</a></li>
                <li class="dropdown">
                  <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">profil<span class="ion-ios7-arrow-down nav-icn"></span></a>
                  <ul class="dropdown-menu text-capitalize" role="menu">
                    <li><a href="{{ route('pages.visimisi') }}"><span class="ion-ios7-arrow-right nav-sub-icn"></span>organisasi</a></li>
                    <li><a href="{{ route('pages.visimisi') }}"><span class="ion-ios7-arrow-right nav-sub-icn"></span>visi & misi</a></li>
                    <li><a href="{{ route('pages.visimisi') }}"><span class="ion-ios7-arrow-right nav-sub-icn"></span>laporan</a></li>
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">publikasi<span class="ion-ios7-arrow-down nav-icn"></span></a>
                  <ul class="dropdown-menu text-capitalize" role="menu">
                    <li><a href="{{ route('pages.book') }}"><span class="ion-ios7-arrow-right nav-sub-icn"></span>buku</a></li>
                    <li><a href="{{ route('pages.book') }}"><span class="ion-ios7-arrow-right nav-sub-icn"></span>majalan</a></li>
                    <li><a href="{{ route('pages.book') }}"><span class="ion-ios7-arrow-right nav-sub-icn"></span>jurnal</a></li>
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">e-data<span class="ion-ios7-arrow-down nav-icn"></span></a>
                  <ul class="dropdown-menu text-capitalize" role="menu">
                    <li><a href="#"><span class="ion-ios7-arrow-right nav-sub-icn"></span>peraturan</a></li>
                    <li><a href="#"><span class="ion-ios7-arrow-right nav-sub-icn"></span>IHPS BPK RI</a></li>
                    <li><a href="#"><span class="ion-ios7-arrow-right nav-sub-icn"></span>Sub menu tambahan opsional</a></li>
                  </ul>
                </li>
                <li><a href="{{ route('pages.consult') }}">konsultasi</a></li>
                <li class="dropdown">
                  <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">pelatihan<span class="ion-ios7-arrow-down nav-icn"></span></a>
                  <ul class="dropdown-menu text-capitalize" role="menu">
                    <li><a href="{{ route('pages.training-info') }}"><span class="ion-ios7-arrow-right nav-sub-icn"></span>info</a></li>
                    <li><a href="{{ route('pages.training-register') }}"><span class="ion-ios7-arrow-right nav-sub-icn"></span>daftar</a></li>
                  </ul>
                </li>
                <li><a href="{{ route('pages.contact') }}">hubungi</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <div class="search-container ">
        <div class="container">
          <form action="#" method="" role="search">
            <input id="search-bar" placeholder="Tulis lalu tekan enter..." autocomplete="off">
          </form>
        </div>
      </div>

    </nav>
  </div>