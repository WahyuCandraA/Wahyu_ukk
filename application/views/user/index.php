<div class="row">
        <div class="col-lg-12">
           <div class="card card-primary card-outline">
               <div class="card-header">
                   <h5 class="card-title"><?= $judul?></h5>
                   <div class="card-tools">
                       <a href="<?= base_url('user/tambah')?>" class="btn btn-primary"><i class="fa fa-plus"></i>Tambah Data</a>
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

                    <?php if ($error = $this->session->flashdata('error')): ?>
                    <div class="alert alert-danger">
                        <strong>Gagal</strong>
                        <p><?= $error?></p>
                    </div>
                    <?php  endif; ?>

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Nama Outlet</th>
                                    <th>Username</th>
                                    <th>Role</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $index = 1; foreach ($user as $row): ?>
                                    <tr>
                                        <td><?= $index++ ;?></td>
                                        <td><?= $row['nama'] ;?></td>
                                        <td><?= $row['nama_outlet'] ;?></td>
                                        <td><?= $row['username'] ;?></td>
                                        <td><?= $row['role'] ;?></td>
                                        <td>
                                            <a class="btn btn-primary" href="<?= base_url('user/ubah/') . $row['id_user'] ?>"><i class="fa fa-edit"></i></a>
                                            <?php if ($this->session->userdata('id_user') != 'Admin'): ?>
                                            <?php if ($row['id_user'] != '1') : ?>
                                            <a class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin?')" href="<?= base_url('user/hapus/') . $row['id_user'] ?>"><i class="fa fa-trash"></i></a>
                                            <?php endif; ?>
                                            <?php endif ?>
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
          
      