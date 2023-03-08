<div class="row">
        <div class="col-lg-12">
           <div class="card card-primary card-outline">
               <div class="card-header">
                   <h5 class="card-title"><?= $judul?></h5>
                   <div class="card-tools">
                       <a href="<?= base_url('outlet/tambah')?>" class="btn btn-primary"><i class="fa fa-plus"></i>Tambah Data</a>
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
                                    <th>Nama Outlet</th>
                                    <th>Alamat</th>
                                    <th>Telepon</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $index = 1; foreach ($outlet as $row): ?>
                                    <tr>
                                        <td><?= $index++ ;?></td>
                                        <td><?= $row['nama_outlet'] ;?></td>
                                        <td><?= $row['alamat'] ;?></td>
                                        <td><?= $row['tlp'] ;?></td>
                                        <td>
                                            <a class="btn btn-primary" href="<?= base_url('outlet/ubah/') . $row['id_outlet'] ?>"><i class="fa fa-edit"></i></a>
                                            <a class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin?')" href="<?= base_url('outlet/hapus/') . $row['id_outlet'] ?>"><i class="fa fa-trash"></i></a>
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
          
      