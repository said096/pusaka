@extends('client.default')
@section('content')
  <section>
    <div class="container ">
      <div class="row "> 
        <div class="col-sm-16">
          <div class="row">

            <div class="main-title-outer pull-left">
              <div class="main-title">Hubungi Kami</div>
            </div>

            <div class="col-sm-11">
              <form action="" method="post" name="" class="comment-form">

                <div class="row">
                  <div class="form-group col-xs-16 col-sm-8 name-field">
                    <input type="text" name="nama" id="nama" placeholder="Nama Lengkap" required class="form-control">
                  </div>
                  <div class="form-group col-xs-16 col-sm-8 email-field">
                    <input type="email" name="email" id="email" placeholder="Alamat Email" required class="form-control" >
                  </div>
                  <div class="form-group col-xs-16 col-sm-16 email-field">
                    <input type="text" name="subject" id="subject" placeholder="Hal" required class="form-control" >
                  </div>
                  <div class="form-group col-xs-16 col-sm-16">
                    <textarea name="pesan" id="pesan" placeholder="Tulis pesan anda..." rows="8" class="form-control" required></textarea>
                  </div>
                </div>

                <div class="form-group">
                  <button class="btn btn-danger" type="submit">Kirim</button>
                </div>

                <hr>
                <p class="text-center">Pusat Kajian Keuangan Negara<br /> Centre for Public Finance Studies</p>

              </form>
            </div>

            <div class="col-sm-4  adress">
              <address>
	              <strong>Alamat</strong><br>
	              Jl. Alamat kantor, Kantor alamat pusat<br>
	              Jakarta Pusat 12345<br>
	              Phone: (123) 456-7890
              </address>
              <address>
	              <strong>Advertising mail</strong><br>
	              <a href="mailto:#">advertising@keuangan.or.id</a>
              </address>
              <strong>Social Network</strong><br>
              <ul class="list-inline">
                <li><a href="#"><span class="ion-social-twitter"></span></a></li>
                <li><a href="#"><span class="ion-social-facebook"></span></a></li>
                <li><a href="#"><span class="ion-social-googleplus"></span></a></li>
              </ul>
            </div>
            
          </div>
        </div>
        
      </div>
    </div>
  </section>
@stop