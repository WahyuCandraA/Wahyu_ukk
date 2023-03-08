<div class="main-content container-fluid">
  <div class="page-title">
    <h3>Dashboard</h3>
    <p class="text-subtitle text-muted"></p>
  </div>
  <section class="section">
    <div class="row mb-2">
      <div class="col-12 col-md-3">
        <div class="card card-statistic">
          <div class="card-body p-0">
            <div class="d-flex flex-column">
              <div class='px-3 py-3 d-flex justify-content-between'>
                <h5 class='card-title'>Jumlah Transaksi</h5>
                <div class="card-right d-flex align-items-center">
                  <p>
                    <?php echo $jumlah_transaksi[0]["jumlah"] ?>
                  </p>
                </div>
              </div>
              <div class="chart-wrapper">
                <canvas id="canvas1" style="height:100px !important"></canvas>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-3">
        <div class="card card-statistic">
          <div class="card-body p-0">
            <div class="d-flex flex-column">
              <div class='px-3 py-3 d-flex justify-content-between'>
                <h3 class='card-title'>Kasir</h3>
                <div class="card-right d-flex align-items-center">
                  <p>
                    <?php echo $jumlah_kasir[0]["jumlah"] ?>
                  </p>
                </div>
              </div>
              <div class="chart-wrapper">
                <canvas id="canvas2" style="height:100px !important"></canvas>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-3">
        <div class="card card-statistic">
          <div class="card-body p-0">
            <div class="d-flex flex-column">
              <div class='px-3 py-3 d-flex justify-content-between'>
                <h3 class='card-title'>Outlet</h3>
                <div class="card-right d-flex align-items-center">
                  <p>
                    <?php echo $jumlah_outlet[0]["jumlah"] ?>
                  </p>
                </div>
              </div>
              <div class="chart-wrapper">
                <canvas id="canvas3" style="height:100px !important"></canvas>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-3">
        <div class="card card-statistic">
          <div class="card-body p-0">
            <div class="d-flex flex-column">
              <div class='px-3 py-3 d-flex justify-content-between'>
                <h3 class='card-title'>Jumlah Pelanggan</h3>
                <div class="card-right d-flex align-items-center">
                  <p>
                    <?php echo $jumlah_pelanggan[0]["jumlah"] ?>
                  </p>
                </div>
              </div>
              <div class="chart-wrapper">
                <canvas id="canvas4" style="height:100px !important"></canvas>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row mb-4">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h3 class='card-heading p-1 pl-3 text-center'>Selamat Datang di Aplikasi Laundry </h3>
            <h6 class='text-center'>Kami Membantu Permasalahan Anda </h6>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>