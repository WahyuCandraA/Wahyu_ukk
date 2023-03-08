<div class="row">
    <div class="col-lg-12">
        <div class="card card-primary card-outline">
            <div class="card-header">
                <h5 class="card-title">
                    <?= $judul ?>
                </h5>
                <div class="card-tools">
                    <a href="<?= base_url('user') ?>" class="btn btn-success"><i
                            class="fa fa-arrow-left"></i>Kembali</a>
                </div>
            </div>
            <div class="card-body">

                <div class="row">
                    <div class="col-md-12">
                        <form method="POST">
                            <div class="form-group">
                                <input type="hidden" name="id_user" id="id_user" class="form-control"
                                    placeholder="Id user" required="" value="<?= $user['id_user'] ?>" required readonly>
                            </div>
                            <div class="form-group">
                                <label for="">Outlet</label>
                                <select name="id_outlet" id="id_outlet" class="form-control" required>
                                    <option value="">Pilih - Outlet</option>
                                    <?php foreach ($outlet as $row): ?>
                                        <option <?= $row['id_outlet'] == $user['id_outlet'] ? 'selected' : '' ?>
                                            value="<?= $row['id_outlet'] ?>"><?= $row['nama_outlet'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Nama user</label>
                                <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama user"
                                    required="" value="<?= $user['nama'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="">Username</label>
                                <input type="text" name="username" id="username" class="form-control"
                                    placeholder="Username" required="" value="<?= $user['username'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="password" name="password" id="password" class="form-control"
                                    placeholder="password" required="">
                            </div>
                            <div class="form-group">
                                <label for="">Role</label>
                                <select name="role" id="role" class="form-control" required="">
                                    <option <?= $user['role'] == 'admin' ? 'selected' : '' ?> value="admin">Admin</option>
                                    <option <?= $user['role'] == 'kasir' ? 'selected' : '' ?> value="kasir">Kasir</option>
                                    <option <?= $user['role'] == 'owner' ? 'selected' : '' ?> value="owner">Owner</option>
                                </select>
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