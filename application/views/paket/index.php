<div class="row">
        <div class="col-lg-12">
           <div class="card card-primary card-outline">
               <div class="card-header">
                   <h5 class="card-title"><?= $judul?></h5>
                   <div class="card-tools">
                       <a href="<?= base_url('paket/tambah')?>" class="btn btn-primary"><i class="fa fa-plus"></i>Tambah Data</a>
                   </div>
               </div>
              <div class="card-body">

                <div class="row">
                    <div class="col-md-12">

                    <?php if ($message = $this->session->flashdata('message')): ?>
                    <div class="alert alert-success">
                        <strong>Berhasil</strong>
                        <p><?= $message?></p>
                    </div>
                    <?php  endif; ?>

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Nama Outlet</th>
                                    <th>Jenis</th>
                                    <th>Harga</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $index = 1; foreach ($paket as $row): ?>
                                    <tr>
                                        <td><?= $index++ ;?></td>
                                        <td><?= $row['nama_paket'] ;?></td>
                                        <td><?= $row['nama_outlet'] ;?></td>
                                        <td><?= $row['jenis'] ;?></td>
                                        <td><?= "Rp. " . number_format($row['harga']) ;?></td>
                                        <td>
                                            <a class="btn btn-primary" href="<?= base_url('paket/ubah/') . $row['id_paket'] ?>"><i class="fa fa-edit"></i></a>
                                            <a class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin?')" href="<?= base_url('paket/hapus/') . $row['id_paket'] ?>"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <?php endforeach ;?>
                            </tbody>
                        </table>
                    </div>
                </div>
              </div>
            </div><!-- /.card -->
          </div>
      </div>
          
      