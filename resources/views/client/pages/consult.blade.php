@extends('client.default')
@section('content')
  <div class="container blogging-style">
    <div class="row"> 
      
      <div class="col-lg-3 col-md-4 col-sm-5"></div>
      
      <div class="col-lg-9 col-md-8 col-sm-6 col-xs-16 pull-left">
        <div class="row"> 

          <div class="col-sm-16 business  wow fadeInDown animated" data-wow-delay="1s" data-wow-offset="50">
            <div class="row">
              <div class="main-title-outer pull-left">
                <div class="main-title">BUTUH BANTUAN? KAMI SIAP MEMBERIKAN SOLUSI!</div>
              </div>
              <div class="col-sm-16 col-md-16 col-lg-16">
                <form role="form">
                  <p style="text-align:justify;">Kami menerima pertanyaan dan konsultasi seputar tata kelola keuangan negara di Pemerintah Pusat (Kementrian/Badan/Lembaga) maupun Pemerintah Daerah. Pertanyaan dan konsultasi akan dijawab setiap 1 (satu) minggu sejak Anda mengirimkannya kepada kami. Selengkapnya silahkan isi form dibawah ini :</p>
                  <div class="form-group">
                    <input type="text" name="name" id="name" class="form-control" placeholder="Nama Lengkap" tabindex="7" required>
                  </div>
                  <div class="form-group">
                    <input type="email" name="email" id="email" class="form-control " placeholder="Alamat Email" tabindex="4" required>
                  </div>
                  <div class="form-group">
                    <input type="text" name="instansi" id="instansi" class="form-control" placeholder="Instansi" tabindex="7" required>
                  </div>
                  <div class="form-group">
                    <input type="text" name="jabatan" id="jabatan" class="form-control" placeholder="Jabatan" tabindex="7" required>
                  </div>
                  <div class="form-group">
                    <div class="list-group">
                      <div class="checkbox list-group-item active">
                          <h4 class="text-center">Jenis Konsultasi</h4>
                      </div>
                      <div class="checkbox list-group-item">
                          <label><input type="checkbox"/> Pengadaan barang/jasa </label>
                      </div>
                      <div class="checkbox list-group-item">
                          <label><input type="checkbox"/> Pelaporan keuangan </label>
                      </div>
                      <div class="checkbox list-group-item">
                          <label><input type="checkbox"/> Review laporan keuangan </label>
                      </div>
                      <div class="checkbox list-group-item">
                          <label><input type="checkbox"/> Penerjemahan regulasi </label>
                      </div>
                      <div class="checkbox list-group-item">
                          <label><input type="checkbox"/> Aset </label>
                      </div>
                      <div class="checkbox list-group-item">
                          <label><input type="checkbox"/> Anggaran </label>
                      </div>
                      <div class="checkbox list-group-item">
                          <label><input type="checkbox"/> Audit </label>
                      </div>
                      <div class="checkbox list-group-item">
                          <label><input type="checkbox"/> Lainnya </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <textarea placeholder="Tulis pertanyaan anda" rows="8" class="form-control" id="questions" name="questions" required></textarea>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-16">
                      <input type="submit" value="Kirim" class="btn btn-danger btn-block btn-lg" tabindex="7">
                    </div>
                  </div>
                  <hr>
                  <p class="text-center">
                    <b>Keterangan :</b> Kami memprioritaskan menjawab pertanyaan/konsultasi bagi member berlangganan peraturan/IHPS/majalah/buku/jurnal. Belum jadi member? <a href="register.blade.php" class="">Buat Akun</a> sekarang.
                  </p>
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