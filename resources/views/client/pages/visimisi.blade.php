@extends('client.default')
@section('content')
<div class="container blogging-style">
<div class="row">

  @include('client.partials.hot-news')
  
  <div class="col-lg-3 col-md-4 col-sm-5 mid-sec top-margin pull-left">
    <div class="row"> 
      <div class="col-sm-16 wow fadeInLeft animated" data-wow-delay="0.5s">
        <ul class="list-group">
          <li class="list-group-item"> <a href="#"> Menu </a></li>
          <li class="list-group-item"> <a href="#"> Menu </a></li>
          <li class="list-group-item"> <a href="#"> Menu <span class="badge">8</span></a> </li>
          <li class="list-group-item"> <a href="#"> Menu </a></li>
          <li class="list-group-item"> <a href="#"> Menu </a></li>
          <li class="list-group-item"> <a href="#"> Menu </a></li>
        </ul>
      </div>
    </div>
  </div>

  <div class="col-lg-13 col-md-6 col-sm-6 col-xs-16 pull-left">
    <div class="row"> 
      
      <div class="col-sm-16 business  wow fadeInDown animated" data-wow-delay="1s" data-wow-offset="50">
        <div class="main-title-outer pull-left">
          <div class="main-title">VISI & MISI</div>
          <div class="span-outer"><span class="pull-right text-danger last-update"><span class="ion-android-data icon"></span>Terakhir update: 2 hari yang lalu</span> </div>
        </div>
            <div class="row">
              <div class="col-md-16 col-sm-10 col-xs-16">
                <div class="topic">
                  <h3>VISI</h3>
                  <p>Menjadi lembaga pengembangan perbankan dan jasa keuangan yang terpercaya dan terkemuka di ASEAN</p>
                  <h3>MISI</h3>
                  <ul>
                    <li>Meningkatkan kualitas sumber daya manusia perbankan dan jasa keuangan melalui pengembangan pengetahuan, keterampilan dan sikap (knowledge, skill, attitude) dan mendukung pengebangan industri perbankan yang sehat dan berkualitas</li>
                    <li>Meningkatkan pengetahuan masyarakat tentang perbankan, bank sentran dan perbankan lainnya, guna menudukung pengembangan industri perbankan dan jasa keuangan.</li>
                  </ul>
                </div>
              </div>
            </div>
      </div>

    </div>
  </div>

</div>
</div>
@stop