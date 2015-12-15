@extends('client.default')
@section('content')
  <div class="container blogging-style">
    <div class="row"> 
      
      <div class="col-lg-3 col-md-4 col-sm-5"></div>
      
      <div class="col-lg-9 col-md-8 col-sm-6 col-xs-16 pull-left">
        <div class="row"> 

          <div class="col-sm-16 business wow fadeInDown animated" data-wow-delay="1s" data-wow-offset="50">
              <div class="row">
                <div class="main-title-outer pull-left">
                  <div class="main-title">BUAT AKUN</div>
                </div>
                <div class="col-sm-16 col-md-16 col-lg-16">
                  <form role="form">
                    <p class="text-center">Kerahasiaan data anda kami jaga dengan baik. Kami tidak pernah memberikan data anda kepada pihak lain.</p>
                    <div class="form-group">
                      <input type="text" name="name" id="name" class="form-control" placeholder="Nama Lengkap" tabindex="7">
                    </div>
                    <div class="form-group">
                      <input type="email" name="email" id="email" class="form-control " placeholder="Alamat Email" tabindex="4">
                    </div>
                    <div class="form-group">
                      <input type="text" name="pekerjaan" id="pekerjaan" class="form-control" placeholder="Pekerjaan" tabindex="7">
                    </div>
                    <div class="form-group">
                      <input type="text" name="instansi" id="instansi" class="form-control" placeholder="Instansi" tabindex="7">
                    </div>
                    <div class="row">
                      <div class="col-sm-7">
                        <div class="form-group">
                          <input type="text" name="tmp_lahir" id="tmp_lahir" class="form-control " placeholder="Tempat Lahir" tabindex="5">
                        </div>
                      </div>
                      <div class="col-sm-3">
                        <div class="form-group">
                          <select id="tgl" name="tgl" class="form-control">
                            <option value="0">Tanggal</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-sm-3">
                        <div class="form-group">
                          <select id="bln" name="bln" class="form-control">
                            <option value="0">Bulan</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-sm-3">
                        <div class="form-group">
                          <select id="thn" name="thn" class="form-control">
                            <option value="0">Tahun</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-5">
                        <div class="form-group">
                          <select id="kec" name="kec" class="form-control">
                            <option value="0">Kecamatan</option>
                            <option value="">Data belum ada</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-sm-5">
                        <div class="form-group">
                          <select id="kab" name="kab" class="form-control">
                            <option value="0">Kabupaten</option>
                            <option value="">Data belum ada</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <select id="pro" name="pro" class="form-control">
                            <option value="0">Propinsi</option>
                            <option value="">Data belum ada</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-8">
                        <div class="form-group">
                          <input type="password" name="password" id="password" class="form-control " placeholder="Password" tabindex="5">
                        </div>
                      </div>
                      <div class="col-sm-8">
                        <div class="form-group">
                          <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Ulangi Password" tabindex="6">
                        </div>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-16">
                        <input type="submit" value="Daftar" class="btn btn-danger btn-block btn-lg" tabindex="7">
                      </div>
                    </div>
                  </form>
                </div>
              </div>
          </div>
          
        </div>
      </div>

      <div class="col-sm-3 hidden-xs right-sec"></div>

    </div>
  </div>
@stop