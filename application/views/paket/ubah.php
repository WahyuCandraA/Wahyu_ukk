<div class="row">
    <div class="col-lg-12">
        <div class="card card-primary card-outline">
            <div class="card-header">
                <h5 class="card-title">
                    <?= $judul ?>
                </h5>
                <div class="card-tools">
                    <a href="<?= base_url('paket') ?>" class="btn btn-success"><i
                            class="fa fa-arrow-left"></i>Kembali</a>
                </div>
            </div>
            <div class="card-body">

                <div class="row">
                    <div class="col-md-12">
                        <form method="POST">
                            <div class="form-group">
                                <input type="hidden" name="id_paket" id="id_paket" class="form-control"
                                    placeholder="Id Paket" required="" value="<?= $paket['id_paket'] ?>" readonly>
                            </div>
                            <div class="form-group">
                                <label for="">Outlet</label>
                                <select name="id_outlet" id="id_outlet" class="form-control" required>
                                    <option value="">Pilih Outlet</option>
                                    <?php foreach ($outlet as $row): ?>
                                        <option <?= $row['id_outlet'] == $paket['id_outlet'] ? 'selected' : '' ?>
                                            value="<?= $row['id_outlet'] ?>"><?= $row['nama_outlet'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Nama Paket</label>
                                <input type="numer" name="nama_paket" id="nama_paket" class="form-control"
                                    placeholder="Nama Paket" required="" value="<?= $paket['nama_paket'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="">Jenis</label>
                                <select name="jenis" id="jenis" class="form-control" required="">
                                    <option <?= $paket['jenis'] == '' ? 'selected' : '' ?> value="">Pilih Jenis</option>
                                    <option <?= $paket['jenis'] == 'kiloan' ? 'selected' : '' ?> value="kiloan">kiloan
                                    </option>
                                    <option <?= $paket['jenis'] == 'selimut' ? 'selected' : '' ?> value="selimut">selimut
                                    </option>
                                    <option <?= $paket['jenis'] == 'bed cover' ? 'selected' : '' ?> value="bed_cover">bed
                                        cover</option>
                                    <option <?= $paket['jenis'] == 'kaos' ? 'selected' : '' ?> value="kaos">kaos</option>
                                    <option <?= $paket['jenis'] == 'lainnya' ? 'selected' : '' ?> value="lainnya">lainnya
                                    </option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Harga</label>
                                <input type="numer" name="harga" id="harga" class="form-control" placeholder="Harga"
                                    required="" value="<?= $paket['harga'] ?>">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div><!-- /.card -->
    </div>
</div>