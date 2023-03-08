<div class="row">
    <div class="col-lg-12">
        <div class="card card-primary card-outline">
            <div class="card-header">
                <h5 class="card-title">
                    <?= $judul ?>
                </h5>
            </div>
            <div class="card-body">
                <form method="post">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Kode Invoice</label>
                                <input type="text" name="kd_invoice" id="kd_invoice" class="form-control"
                                    value="<?= $transaksi['kd_invoice'] ?>" readonly>
                            </div>
                            <div class="form-group">
                                <input type="hidden" name="tgl" id="tgl" class="form-control"
                                    value="<?= $transaksi['tgl'] ?>">
                            </div>
                            <div class="form-group">
                                <input type="hidden" name="batas_waktu" id="batas_waktu" class="form-control"
                                    value="<?= $transaksi['batas_waktu'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="">Tanggal Bayar</label>
                                <input type="datetime-local" name="tgl_bayar" id="tgl_bayar" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Total Bayar</label>
                                <input autocomplete="off" type="text" class="form-control total_bayar" name="total_bayar" value="<?= $transaksi['total_bayar'] ?>" readonly>
                            </div>
                            <div class="form-group">
                                <label for="">Kembalian</label>
                                <input autocomplete="off" type="text" class="form-control kembalian" name="kembalian" readonly>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Status</label>
                                <select name="status" id="status" class="form-control">
                                    <option value="baru">Baru</option>
                                    <option value="proses">Proses</option>
                                    <option value="selesai">Selesai</option>
                                    <option value="diambil">Diambil</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Status Pembayaran</label>
                                <select name="dibayar" id="dibayar" class="form-control">
                                    <option value="dibayar">Dibayar</option>
                                    <option value="belum_dibayar">Belum dibauar</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Cash</label>
                                <input autocomplete="off" type="text" class="form-control cash" name="cash" placeholder="Cash">
                            </div>
                        </div>
                    </div>

                    <hr>
                    <div class="row">
                        <div class="col-md-4">
                            <a href="<?= base_url('transaksi') ?>" class="btn btn-block btn-success">Kembali</a>
                        </div>
                        <div class="col-md-4">
                            <button class="btn btn-block btn-primary">Ubah</button>
                        </div>
                    </div>
                    <hr>
                </form>

            </div>
        </div><!-- /.card -->
    </div>
</div>