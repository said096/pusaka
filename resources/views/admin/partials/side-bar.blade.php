<aside id="sidebar_left" class="nano nano-primary affix">

  <div class="sidebar-left-content nano-content">

    <header class="sidebar-header">
      <div class="sidebar-widget menu-widget">
        <div class="row text-center mbn">
          <div class="col-xs-4">
            <a href="#" class="text-primary" data-toggle="tooltip" data-placement="top" title="Dashboard">
              <span class="glyphicon glyphicon-home"></span>
            </a>
          </div>
          <div class="col-xs-4">
            <a href="#" class="text-info" data-toggle="tooltip" data-placement="top" title="Messages">
              <span class="glyphicon glyphicon-inbox"></span>
            </a>
          </div>
          <div class="col-xs-4">
            <a href="#" class="text-alert" data-toggle="tooltip" data-placement="top" title="Tasks">
              <span class="glyphicon glyphicon-bell"></span>
            </a>
          </div>
          <div class="col-xs-4">
            <a href="#" class="text-system" data-toggle="tooltip" data-placement="top" title="Activity">
              <span class="fa fa-desktop"></span>
            </a>
          </div>
          <div class="col-xs-4">
            <a href="#" class="text-danger" data-toggle="tooltip" data-placement="top" title="Settings">
              <span class="fa fa-gears"></span>
            </a>
          </div>
          <div class="col-xs-4">
            <a href="#" class="text-warning" data-toggle="tooltip" data-placement="top" title="Cron Jobs">
              <span class="fa fa-flask"></span>
            </a>
          </div>
        </div>
      </div>
    </header>

    <ul class="nav sidebar-menu">
      <li class="sidebar-label pt20">KATEGORI MENU</li>
      <li class="active">
        <a href="#">
          <span class="glyphicon glyphicon-home"></span>
          <span class="sidebar-title">Dashboard</span>
        </a>
      </li>
      <li>
        <a class="accordion-toggle" href="#">
          <span class="glyphicon glyphicon-blackboard"></span>
          <span class="sidebar-title">Berita</span>
          <span class="caret"></span>
        </a>
        <ul class="nav sub-nav">
          <li>
            <a href="{{ route('panel.pages.create-news') }}">
              <span class="glyphicon glyphicon-pencil"></span> Buat Berita </a>
          </li>
          <li>
            <a href="{{ route('panel.pages.news-list') }}">
              <span class="glyphicon glyphicon-list-alt"></span> Daftar Berita </a>
          </li>
          <li>
            <a class="accordion-toggle" href="#">
              <span class="glyphicon glyphicon-menu-down"></span>
              <span class="sidebar-title"> Atribut Berita </span>
              <span class="caret"></span>
            </a>
            <ul class="nav sub-nav">
              <li>
                <a href="#"> Kategori Berita </a>
              </li>
              <li>
                <a href="#"> Tag-tag Berita </a>
              </li>
            </ul>
          </li>
        </ul>
      </li>
      <!-- <li>
        <a class="accordion-toggle" href="#">
          <span class="glyphicon glyphicon-check"></span>
          <span class="sidebar-title">Menu</span>
          <span class="caret"></span>
        </a>
        <ul class="nav sub-nav">
          <li>
            <a href="#">
              <span class="glyphicon glyphicon-edit"></span> Sub Menu </a>
          </li>
          <li>
            <a href="#">
              <span class="glyphicon glyphicon-calendar"></span> Sub Menu </a>
          </li>
          <li>
            <a href="#">
              <span class="glyphicon glyphicon-check"></span> Sub Menu </a>
          </li>
          <li>
            <a href="#">
              <span class="fa fa-desktop"></span> Sub Menu </a>
          </li>
          <li>
            <a href="#">
              <span class="fa fa-clipboard"></span> Sub Menu </a>
          </li>
        </ul>
      </li> -->

      <!-- <li class="sidebar-label pt20">KATEGORI MENU</li>
      <li>
        <a class="accordion-toggle" href="#">
          <span class="fa fa-diamond"></span>
          <span class="sidebar-title"> Menu </span>
          <span class="caret"></span>
        </a>
        <ul class="nav sub-nav">
          <li>
            <a href="#">
              <span class="fa fa-cube"></span> Sub Menu </a>
          </li>
          <li>
            <a href="#">
              <span class="fa fa-desktop"></span> Sub Menu </a>
          </li>
          <li>
            <a href="#">
              <span class="fa fa-columns"></span> Sub Menu </a>
          </li>
          <li>
            <a href="#">
              <span class="fa fa-dot-circle-o"></span> Sub Menu </a>
          </li>
        </ul>
      </li> -->
      <!-- <li>
        <a class="accordion-toggle" href="#">
          <span class="glyphicon glyphicon-shopping-cart"></span>
          <span class="sidebar-title">Menu</span>
          <span class="caret"></span>
        </a>
        <ul class="nav sub-nav">
          <li>
            <a href="#">
              <span class="glyphicon glyphicon-shopping-cart"></span> Sub Menu
              <span class="label label-xs bg-primary">Info</span>
            </a>
          </li>
          <li>
            <a href="#">
              <span class="glyphicon glyphicon-tags"></span> Sub Menu </a>
          </li>
          <li>
            <a href="#">
              <span class="fa fa-money"></span> Sub Menu </a>
          </li>
          <li>
            <a href="#">
              <span class="fa fa-users"></span> Sub Menu </a>
          </li>
          <li>
            <a href="#">
              <span class="fa fa-gears"></span> Sub Menu </a>
          </li>
        </ul>
      </li> -->
      <!-- <li>
        <a href="#">
          <span class="fa fa-envelope-o"></span>
          <span class="sidebar-title">Menu</span>
        </a>
      </li>
      
      <li class="sidebar-label pt20">KATEGORI MENU</li>
      <li class="sidebar-proj">
        <a href="#">
          <span class="fa fa-dot-circle-o text-primary"></span>
          <span class="sidebar-title">Menu</span>
        </a>
      </li>
      <li class="sidebar-proj">
        <a href="#">
          <span class="fa fa-dot-circle-o text-info"></span>
          <span class="sidebar-title">Menu</span>
        </a>
      </li>
      <li class="sidebar-proj">
        <a href="#">
          <span class="fa fa-dot-circle-o text-danger"></span>
          <span class="sidebar-title">Menu</span>
        </a>
      </li>
      <li class="sidebar-proj">
        <a href="#">
          <span class="fa fa-dot-circle-o text-warning"></span>
          <span class="sidebar-title">Menu</span>
        </a>
      </li>
      
      <li class="sidebar-label pt25 pb10">Menu</li>
      <li class="sidebar-stat">
        <a href="#" class="fs11">
          <span class="fa fa-inbox text-info"></span>
          <span class="sidebar-title text-muted">Progress</span>
          <span class="pull-right mr20 text-muted">35%</span>
          <div class="progress progress-bar-xs mh20 mb10">
            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 35%">
              <span class="sr-only">35%</span>
            </div>
          </div>
        </a>
      </li>
      <li class="sidebar-stat">
        <a href="#" class="fs11">
          <span class="fa fa-dropbox text-warning"></span>
          <span class="sidebar-title text-muted">Progress</span>
          <span class="pull-right mr20 text-muted">58%</span>
          <div class="progress progress-bar-xs mh20">
            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 58%">
              <span class="sr-only">58%</span>
            </div>
          </div>
        </a>
      </li> -->
    </ul>

  </div>
</aside>
