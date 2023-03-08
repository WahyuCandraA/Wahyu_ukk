<div class="row">
    <div class="col-lg-12">
        <div class="card card-primary card-outline">
            <div class="card-header">
                <h5 class="card-title">
                    <?= $judul ?>
                </h5>
                <div class="card-tools">
                    <a href="<?= base_url('member') ?>" class="btn btn-success"><i
                            class="fa fa-arrow-left"></i>Kembali</a>
                </div>
            </div>
            <div class="card-body">

                <div class="row">
                    <div class="col-md-12">
                        <form method="POST">
                            <div class="form-group">
                                <label for="">Id Pelanggan</label>
                                <input type="number" name="id_member" id="id_member" class="form-control"
                                    placeholder="Id Pelanggan" required="" value="<?= id('tb_member', 'id_member') ?>"
                                    readonly>
                            </div>
                            <div class="form-group">
                                <label for="">Nama Pelanggan</label>
                                <input type="text" name="nama_member" id="nama_member" class="form-control"
                                    placeholder="Nama Pelanggan" required="">
                            </div>
                            <div class="form-group">
                                <label for="">Alamat</label>
                                <input type="text" name="alamat" id="alamat" class="form-control" placeholder="alamat"
                                    required="">
                            </div>
                            <div class="form-group">
                                <label for="">Jenis Kelamin</label>
                                <select name="jenis_kelamin" id="jenis_kelamin" class="form-control" required="">
                                    <option value="L">Laki - Laki</option>
                                    <option value="P">Perempuan</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Telepon</label>
                                <input name="tlp" id="tlp" class="form-control" placeholder="Telepon" required="">
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