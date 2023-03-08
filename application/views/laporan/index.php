<div class="row">
          <div class="col-lg-12">
            <div class="card card-primary card-outline" style="border-color: #FF99bb;">
              <div class="card-header">
                <h5 class="card-title"><?=  $judul ?></h5>
              </div>
            <div class="card-body">
             <div class="row">
               <div class="col-md-12">
                <form target="_blank" action="<?= base_url('laporan/pdf') ?>" method="get">
                  <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                         <label for="dari">Dari</label>
                         <input type="date" name="dari" id="dari" class="form-control">
                        </div>
                        <div class="form-group">
                         <label for="sampai">Sampai</label>
                         <input type="date" name="sampai" id="sampai" class="form-control">
                        </div>
                       <div class="form-group">
                         <label for="id_paket">Paket</label>
                         <select name="id_paket" id="id_paket" class="form-control">
                           <option value="">Semua Paket</option>
                           <?php foreach ($paket as $row) :?>
                           <option value="<?= $row['id_paket'] ?>"><?= $row['nama_paket'] ?></option>
                           <?php endforeach ?>
                         </select>
                       </div>
                       <div class="form-group">
                         <label for="id_outlet">Outlet</label>
                         <select name="id_outlet" id="id_outlet" class="form-control">
                           <option value="">Semua Outlet</option>
                           <?php foreach ($outlet as $row) :?>
                           <option value="<?= $row['id_outlet'] ?>"><?= $row['nama_outlet'] ?></option>
                           <?php endforeach ?>
                         </select>
                       </div>
                       <div class="form-group">
                         <label for="">Status Pembayaran</label>
                         <select name="dibayar" id="dibayar" class="form-control">
                           <option value="">Status Pembayaran</option>
                           <option value="dibayar">di bayar</option>
                           <option value="belum_dibayar">belum dibayar</option>
                         </select>
                       </div>
                      <div class="form-group">
                        <button type="submit" name="submit" class="btn btn-block btn-primary">Cetak</button>
                      </div>
                    </div>
                  </div>
                </form>
              <hr>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>