<body>
    <div id="app">
        <div id="sidebar" class='active'>
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                <h1>Laundry</h1>
                    <!-- <img src="<?= base_url('new_template/') ?>assets/i mages/logo2.jpg" width="100%" height="200"> -->
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class='sidebar-title'>Main Menu</li>
                        <li class="sidebar-item active ">
                            <a href="<?= base_url('dashboard') ?>" class='sidebar-link'>
                                <i data-feather="home" width="20"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <?php if ($this->session->userdata('role') != 'Owner'): ?>
                            <?php if ($this->session->userdata('role') != 'Admin'): ?>
                                <a href="<?= base_url('member') ?>" class='sidebar-link'>
                                    <i data-feather="user" width="20"></i>
                                    <span>Data Pelanggan</span>
                                </a>
                            <?php endif ?>
                        <?php endif ?>
                        <?php if ($this->session->userdata('role') != 'Kasir'): ?>
                            <?php if ($this->session->userdata('role') != 'Owner'): ?>
                                <li class="sidebar-item  has-sub">
                                    <a href="#" class='sidebar-link'>
                                        <i data-feather="box" width="20"></i>
                                        <span>Data Master</span>
                                    </a>
                                    <ul class="submenu ">
                                        <li>
                                            <a href="<?= base_url('paket') ?>">Data Paket</a>
                                        </li>
                                        <li>
                                            <a href="<?= base_url('outlet') ?>">Data Outlet</a>
                                        </li>
                                        <li>
                                            <a href="<?= base_url('member') ?>">Data Pelanggan</a>
                                        </li>
                                        <li>
                                            <a href="<?= base_url('user') ?>">Data User</a>
                                        </li>
                                    </ul>
                                </li>
                            <?php endif; ?>
                        <?php endif; ?>
                        <?php if ($this->session->userdata('role') != 'Owner'): ?>
                            <li class="sidebar-item  has-sub">
                                <a href="#" class='sidebar-link'>
                                    <i data-feather="dollar-sign" width="20"></i>
                                    <span>Transaksi</span>
                                </a>
                                <ul class="submenu ">
                                    <li>
                                        <a href="<?= base_url('transaksi/tambah') ?>">Transaksi Baru</a>
                                    </li>
                                    <li>
                                        <a href="<?= base_url('transaksi') ?>">Riwayat Transaksi</a>
                                    </li>
                                </ul>
                            </li>
                        <?php endif ?>

                        <li class="sidebar-item  ">
                            <a href="<?= base_url('laporan') ?>" class='sidebar-link'>
                                <i data-feather="book" width="20"></i>
                                <span>Laporan</span>
                            </a>
                        </li>
                        <li class="sidebar-item  ">
                            <a onclick="return confirm('Apakah Anda Ingin Keluar?')"
                                href="<?= base_url('auth/logout') ?>" class='sidebar-link'>
                                <i data-feather="arrow-left" width="20"></i>
                                <span>Logout</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>