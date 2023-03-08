<div class="row">
    <div class="col-lg-12">
        <div class="card card-primary card-outline">
            <div class="card-header">
                <h5 class="card-title">
                    <?= $judul ?>
                </h5>
                <div class="card-tools">
                    <a href="<?= base_url('outlet') ?>" class="btn btn-success"><i
                            class="fa fa-arrow-left"></i>Kembali</a>
                </div>
            </div>
            <div class="card-body">

                <div class="row">
                    <div class="col-md-12">
                        <form method="POST"">
                            <div class=" form-group">
                            <input type="hidden" name="id_outlet" id="id_outlet" class="form-control"
                                placeholder="Id outlet" required="" value="<?= $outlet['id_outlet'] ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Nama outlet</label>
                        <input type="text" name="nama_outlet" id="nama_outlet" class="form-control"
                            placeholder="Nama outlet" required="" value="<?= $outlet['nama_outlet'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Alamat</label>
                        <input type="text" name="alamat" id="alamat" class="form-control" placeholder="alamat"
                            required="" value="<?= $outlet['alamat'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Telepon</label>
                        <input type="number" name="tlp" id="tlp" class="form-control" placeholder="Telepon" required=""
                            value="<?= $outlet['tlp'] ?>">
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