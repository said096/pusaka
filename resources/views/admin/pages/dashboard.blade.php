@extends('admin.default')
@section('content')
<section id="content" class="animated fadeIn">
  <div class="row mb10">
    <div class="col-sm-6 col-md-3">
      <div class="panel bg-alert light of-h mb10">
        <div class="pn pl20 p5">
          <div class="icon-bg">
            <i class="fa fa-comments-o"></i>
          </div>
          <h2 class="mt15 lh15">
            <b>523</b>
          </h2>
          <h5 class="text-muted">Comments</h5>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-md-3">
      <div class="panel bg-info light of-h mb10">
        <div class="pn pl20 p5">
          <div class="icon-bg">
            <i class="fa fa-twitter"></i>
          </div>
          <h2 class="mt15 lh15">
            <b>348</b>
          </h2>
          <h5 class="text-muted">Tweets</h5>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-md-3">
      <div class="panel bg-danger light of-h mb10">
        <div class="pn pl20 p5">
          <div class="icon-bg">
            <i class="fa fa-bar-chart-o"></i>
          </div>
          <h2 class="mt15 lh15">
            <b>267</b>
          </h2>
          <h5 class="text-muted">Reach</h5>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-md-3">
      <div class="panel bg-warning light of-h mb10">
        <div class="pn pl20 p5">
          <div class="icon-bg">
            <i class="fa fa-envelope"></i>
          </div>
          <h2 class="mt15 lh15">
            <b>714</b>
          </h2>
          <h5 class="text-muted">Comments</h5>
        </div>
      </div>
    </div>
  </div>

  <!-- Admin-panels -->
  <div class="admin-panels fade-onload">

    <div class="row">

      <!-- Three Pane Widget -->
      <div class="col-md-12 admin-grid">

        <div class="panel" id="p0">
          <div class="panel-heading">
            <span class="panel-title">Data Panel Widget</span>
          </div>
          <div class="panel-body mnw700 of-a">
            <div class="row">

              <!-- Chart Column -->
              <div class="col-md-4 pln br-r mvn15">
                <h5 class="ml5 mt20 ph10 pb5 br-b fw600">Pengunjung
                  <small class="pull-right fw600">13,253
                    <span class="text-primary">(8,251)</span>
                  </small>
                </h5>
                <div id="high-column2" style="width: 100%; height: 255px; margin: 0 auto"></div>
              </div>

              <!-- Multi Text Column -->
              <div class="col-md-4 br-r">
                <h5 class="mt5 mbn ph10 pb5 br-b fw600">Top Konten
                  <small class="pull-right fw600 text-primary">Lihat Laporan </small>
                </h5>
                <table class="table mbn tc-med-1 tc-bold-last tc-fs13-last">
                  <thead>
                    <tr class="hidden">
                      <th>Sumber</th>
                      <th>Jumlah</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <i class="fa fa-circle text-warning fs8 pr15"></i>
                        <span>Menu</span>
                      </td>
                      <td>1,926</td>
                    </tr>
                    <tr>
                      <td>
                        <i class="fa fa-circle text-warning fs8 pr15"></i>
                        <span>Menu</span>
                      </td>
                      <td>1,254</td>
                    </tr>
                    <tr>
                      <td>
                        <i class="fa fa-circle text-warning fs8 pr15"></i>
                        <span>Menu</span>
                      </td>
                      <td>783</td>
                    </tr>
                  </tbody>
                </table>
                <h5 class="mt15 mbn ph10 pb5 br-b fw600">Top Konten
                  <small class="pull-right fw600 text-primary">Lihat Laporan </small>
                </h5>
                <table class="table mbn tc-med-1 tc-bold-last tc-fs13-last">
                  <thead>
                    <tr class="hidden">
                      <th>Sumber</th>
                      <th>Jumlah</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <i class="fa fa-circle text-warning fs8 pr15"></i>
                        <span>Konten A</span>
                      </td>
                      <td>988</td>
                    </tr>
                    <tr>
                      <td>
                        <i class="fa fa-circle text-warning fs8 pr15"></i>
                        <span>Konten B</span>
                      </td>
                      <td>612</td>
                    </tr>
                    <tr>
                      <td>
                        <i class="fa fa-circle text-warning fs8 pr15"></i>
                        <span>Konten C</span>
                      </td>
                      <td>256</td>
                    </tr>
                  </tbody>
                </table>
              </div>

              <!-- Flag/Icon Column -->
              <div class="col-md-4">
                <h5 class="mt5 ph10 pb5 br-b fw600">Sumber
                  <small class="pull-right fw600 text-primary">Status </small>
                </h5>
                <table class="table mbn">
                  <tbody>
                    <tr>
                      <td class="va-m fw600 text-muted">
                        <span class="flag-xs flag-us mr5 va-b"></span> Konten</td>
                      <td class="fs15 fw600 text-right">28%</td>
                    </tr>
                    <tr>
                      <td class="va-m fw600 text-muted">
                        <span class="flag-xs flag-tr mr5 va-b"></span> Konten</td>
                      <td class="fs15 fw600 text-right">25%</td>
                    </tr>
                    <tr>
                      <td class="va-m fw600 text-muted">
                        <span class="flag-xs flag-fr mr5 va-b"></span> Konten</td>
                      <td class="fs15 fw600 text-right">22%</td>
                    </tr>
                    <tr>
                      <td class="va-m fw600 text-muted">
                        <span class="flag-xs flag-in mr5 va-b"></span> Konten</td>
                      <td class="fs15 fw600 text-right">18%</td>
                    </tr>
                    <tr>
                      <td class="va-m fw600 text-muted">
                        <span class="flag-xs flag-es mr5 va-b"></span> Konten</td>
                      <td class="fs15 fw600 text-right">15%</td>
                    </tr>
                    <tr>
                      <td class="va-m fw600 text-muted">
                        <span class="flag-xs flag-de mr5 va-b"></span> Konten</td>
                      <td class="fs15 fw600 text-right">12%</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@stop