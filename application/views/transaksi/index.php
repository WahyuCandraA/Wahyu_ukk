<div class="container-fluid py-4">
    <div class="row my-4">
        <div class="col-lg-12 col-md-6 mb-md-0 mb-4">
            <div class="card">
                <div class="card-header pb-0">
                    <div class="row">
                        <div class="col-lg-6 col-7">
                            <h5 class="card-title">
                                <?= $judul ?>
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <?php if ($message = $this->session->flashdata('message')): ?>
                        <div class="alert alert-success">
                            <strong>Berhasil</strong>
                            <p>
                                <?= $message ?>
                            </p>
                        </div>
                    <?php endif; ?>

                    <div class="table-responsive">
                        <div class="row">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Tgl</th>
                                        <th>Invoice</th>
                                        <th>Outlet</th>
                                        <th>Pelanggan</th>
                                        <th>Nama User</th>
                                        <th>Batas Waktu</th>
                                        <th>Tanggal Bayar</th>
                                        <th>Status</th>
                                        <th>Status Pembayaran</th>
                                        <th>Total</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $index = 1;
                                    foreach ($transaksi as $row): ?>
                                        <tr>
                                            <td>
                                                <?= $index++; ?>
                                            </td>
                                            <td>
                                                <?= $row['tgl']; ?>
                                            </td>
                                            <td>
                                                <?= $row['kd_invoice']; ?>
                                            </td>
                                            <td>
                                                <?= $row['nama_outlet']; ?>
                                            </td>
                                            <td>
                                                <?= $row['nama_member']; ?>
                                            </td>
                                            <td>
                                                <?= $row['nama_user']; ?>
                                            </td>
                                            <td>
                                                <?= $row['batas_waktu']; ?>
                                            </td>
                                            <td>
                                                <?= $row['tgl_bayar']; ?>
                                            </td>
                                            <td>
                                                <?= $row['status']; ?>
                                            </td>
                                            <td>
                                                <?= $row['dibayar']; ?>
                                            </td>
                                            <td>
                                                <?="Rp." . number_format($row['total_bayar']); ?>
                                            </td>
                                            <td>
                                                <a class="btn btn-primary" href="<?= base_url('transaksi/ubah/') . $row['id_transaksi'] ?>"><i class="fa fa-edit"></i></a>
                                                <a class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin?')" href="<?= base_url('transaksi/hapus/') . $row['id_transaksi'] ?>"><i class="fa fa-trash"></i></a>
                                                        <a target="_blank" class="btn btn-success my-1" href="<?= base_url() ?>transaksi/cetak/<?= $row['kd_invoice'] ?>"><i class="fa fa-print"></i></a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>