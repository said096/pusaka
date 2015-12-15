@extends('admin.default')
@section('content')
<section id="content" class="animated fadeIn">
	<div class="content-header">
		<h2>Tulis berita dengan <b class="text-primary">Mudah</b> disini</h2>
		<p class="lead">Gunakan bahasa yang singkat padat dan jelas.</p>
	</div>
    <div class="admin-form theme-primary mw1000 center-block">
      <div class="panel panel-primary heading-border">
        <form method="post" action="/" id="admin-form">
          <div class="panel-body">

            <div class="section-divider mv40">
              <span> Tulis Berita </span>
            </div>
			
			      <div class="panel">
	            <div class="panel-body pn of-h" id="summer-demo">
	              <div class="summernote" style="height: 400px;"><b>Summernote</b> Editor...</div>
	            </div>
	            <!-- <div class="panel-body bg-light br-t-n ptn ph20" id="summer-demo2">
	            					<div class="summernote-edit"></div>
	            </div> -->
          	</div>

            <div class="section">
              <label for="foto" class="field file">
                <span class="button btn-primary"> Unggah Foto </span>
                <input type="file" class="gui-file" name="foto" id="filefoto" onChange="document.getElementById('foto').value = this.value;">
                <input type="text" class="gui-input" id="foto" placeholder="Unggah gambar dengan resolusi 200x500 pixel" readonly>
              </label>
            </div>

            <div class="section row">

              <div class="col-md-6 pad-r40 border-right">
	            <div class="section-divider mv40">
	              <span> Kategori Berita </span>
	            </div>
                <div class="option-group field">
                  <label for="female" class="option option-primary block">
                    <input type="radio" name="gender" id="female" value="id_kategori">
                    <span class="radio"></span> Nama Kategori
                  </label>
                </div>
              </div>

              <div class="col-md-6 pl40">
	            <div class="section-divider mv40">
	              <span> Penanda Berita </span>
	            </div>
                <div class="option-group field">
                  <label class="option block option-primary">
                    <input type="checkbox" name="languages" value="id_tag">
                    <span class="checkbox"></span> Nama Tag
                  </label>
                </div>
              </div>

            </div>

          </div>

          <div class="panel-footer text-right">
            <button type="submit" class="button btn-primary"> Terbitkan </button>
            <button type="reset" class="button"> Batal </button>
          </div>

        </form>
      </div>
    </div>
</section>
@stop