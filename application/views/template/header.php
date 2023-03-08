<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Laundry</title>

  <link rel="stylesheet" href="<?= base_url('new_template/') ?>assets/css/bootstrap.css">
  <link rel="stylesheet" href="<?= base_url('vendor/adminlte/') ?>plugins/fontawesome-free/css/all.min.css">

  <link rel="stylesheet" href="<?= base_url('new_template/') ?>assets/vendors/chartjs/Chart.min.css">

  <link rel="stylesheet" href="<?= base_url('new_template/') ?>assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
  <link rel="stylesheet" href="<?= base_url('new_template/') ?>assets/css/app.css">
  <link rel="shortcut icon" href="<?= base_url('new_template/') ?>assets/images/Logo1.png" type="image/x-icon">
  <script src="<?= base_url('vendor/adminlte/') ?>plugins/jquery/jquery.min.js"></script>
</head>

<div id="main">
  <nav class="navbar navbar-header navbar-expand navbar-light">
    <a class="sidebar-toggler" href="#"><span class="navbar-toggler-icon"></span></a>
    <button class="btn navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav d-flex align-items-center navbar-light ms-auto">
        <li class="dropdown">
          <a href="#" data-bs-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <div class="d-none d-md-block d-lg-inline-block">
              <i class="fas fa-user"></i>
              <?= $this->session->userdata('nama') . ' >< ' . $this->session->userdata('role'); ?>
            </div>
          </a>
        </li>
      </ul>
    </div>
  </nav>