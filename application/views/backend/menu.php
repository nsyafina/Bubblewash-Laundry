<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    .bg_menu {
      background-image: linear-gradient(#000080, #87CEFA);
    }
  </style>
</head>

<body>
  <?php
  // Mendapatkan URI dari halaman yang sedang dibuka
  $current_page = uri_string();
  ?>

  <!-- Sidebar -->
  <ul class="navbar-nav bg_menu bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('dashboard') ?>">
      <div class="image">
        <img src="<?= base_url() ?>img/logo/short_logo.jpg" class="brand-image img-circle elevation-3" style="width: 55px; margin-left: 0px;">
      </div>
      <div class="sidebar-brand-text" style="margin-left: 10px;">BubbleWash Laundry</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <div class="sidebar-heading" style="font-size: 12px;">
      Home
    </div>

    <!-- Nav Item - Dashboard -->
    <li class="nav-item <?php if ($current_page == 'dashboard') echo 'active'; ?>">
      <a class="nav-link" href="<?= base_url('dashboard') ?>">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span style="font-size: 15px;">Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <div class="sidebar-heading" style="font-size: 12px;">
        Master Data
      </div>

      <!-- Menu Item -->
      <li class="nav-item <?php if (in_array($current_page, ['konsumen', 'jenis', 'paket']) || strpos($current_page, 'konsumen/edit') !== false || strpos($current_page, 'konsumen/tambah_konsumen') !== false || strpos($current_page, 'konsumen/index') !== false || strpos($current_page, 'jenis/edit') !== false || strpos($current_page, 'jenis/tambah_jenis') !== false || strpos($current_page, 'paket/edit') !== false || strpos($current_page, 'paket/tambah_paket') !== false) echo 'active'; ?>">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-box-open"></i>
          <span style="font-size: 15px;">Daftar Data</span>
        </a>
        <div id="collapsePages" class="collapse <?php if (in_array($current_page, ['konsumen', 'jenis', 'paket']) || strpos($current_page, 'konsumen/edit') !== false || strpos($current_page, 'konsumen/index') !== false || strpos($current_page, 'konsumen/tambah_konsumen') !== false || strpos($current_page, 'jenis/edit') !== false || strpos($current_page, 'jenis/tambah_jenis') !== false || strpos($current_page, 'paket/edit') !== false || strpos($current_page, 'paket/tambah_paket') !== false) echo 'show'; ?>" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item <?php if (strpos($current_page, 'konsumen') !== false) echo 'active'; ?>" href="<?= base_url('konsumen') ?>">
              <i class="fas fa-fw fa-users"></i> Data Konsumen
            </a>
            <a class="collapse-item <?php if (strpos($current_page, 'jenis') !== false) echo 'active'; ?>" href="<?= base_url('jenis') ?>">
              <i class="fas fa-fw fa-tshirt"></i> Data Jenis Pakaian
            </a>
            <a class="collapse-item <?php if (strpos($current_page, 'paket') !== false) echo 'active'; ?>" href="<?= base_url('paket') ?>">
              <i class="fas fa-fw fa-archive"></i> Data Paket
            </a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <div class="sidebar-heading" style="font-size: 12px;">
        Transaksi
      </div>

      <!-- Menu Item untuk Transaksi Kiloan -->
      <li class="nav-item <?php if (strpos($current_page, 'transaksi/tambah') !== false || (strpos($current_page, 'transaksi/riwayat') !== false && strpos($current_page, 'transaksi/riwayatsatuan') === false) || strpos($current_page, 'transaksi/edit_transaksi') !== false || (strpos($current_page, 'laporan') !== false && strpos($current_page, 'laporan_satuan') === false)) echo 'active'; ?>">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-dollar-sign"></i>
          <span style="font-size: 15px;">Transaksi Kiloan</span>
        </a>
        <div id="collapseTwo" class="collapse <?php if (strpos($current_page, 'transaksi/tambah') !== false || (strpos($current_page, 'transaksi/riwayat') !== false && strpos($current_page, 'transaksi/riwayatsatuan') === false) || (strpos($current_page, 'transaksi/edit_transaksi') !== false && strpos($current_page, 'transaksi/edit_transaksi_satuan') === false) || (strpos($current_page, 'laporan') !== false && strpos($current_page, 'laporan_satuan') === false)) echo 'show'; ?>" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item <?php if (strpos($current_page, 'transaksi/tambah') !== false) echo 'active'; ?>" href="<?= base_url('transaksi/tambah') ?>"><i class="fas fa-plus fa-sm mb-1 mx-1"></i> Tambah Transaksi</a>
            <a class="collapse-item <?php if (strpos($current_page, 'transaksi/riwayat') !== false && strpos($current_page, 'transaksi/riwayatsatuan') === false || strpos($current_page, 'transaksi/edit_transaksi') !== false) echo 'active'; ?>" href="<?= base_url('transaksi/riwayat') ?>"><i class="fas fa-fw fa-history"></i> Riwayat Transaksi</a>
            <a class="collapse-item <?php if (strpos($current_page, 'laporan') !== false && strpos($current_page, 'laporan_satuan') === false) echo 'active'; ?>" href="<?= base_url('laporan') ?>"><i class="fas fa-fw fa-file-alt"></i> Laporan Transaksi</a>
          </div>
        </div>
      </li>

      <!-- Menu Item untuk Transaksi Satuan -->
      <li class="nav-item <?php if (strpos($current_page, 'transaksi/satuan') !== false || strpos($current_page, 'transaksi/riwayatsatuan') !== false || strpos($current_page, 'laporan_satuan') !== false || strpos($current_page, 'transaksi/edit_transaksi_satuan') !== false) echo 'active'; ?>">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-dollar-sign"></i>
          <span style="font-size: 15px;">Transaksi Satuan</span>
        </a>
        <div id="collapseUtilities" class="collapse <?php if (strpos($current_page, 'transaksi/satuan') !== false || strpos($current_page, 'transaksi/riwayatsatuan') !== false || strpos($current_page, 'laporan_satuan') !== false || strpos($current_page, 'transaksi/edit_transaksi_satuan') !== false) echo 'show'; ?>" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item <?php if (strpos($current_page, 'transaksi/satuan') !== false) echo 'active'; ?>" href="<?= base_url('transaksi/satuan') ?>"><i class="fas fa-plus fa-sm mb-1 mx-1"></i> Tambah Transaksi</a>
            <a class="collapse-item <?php if (strpos($current_page, 'transaksi/riwayatsatuan') !== false || strpos($current_page, 'transaksi/edit_transaksi_satuan') !== false) echo 'active'; ?>" href="<?= base_url('transaksi/riwayatsatuan') ?>"><i class="fas fa-fw fa-history"></i> Riwayat Transaksi</a>
            <a class="collapse-item <?php if (strpos($current_page, 'laporan_satuan') !== false) echo 'active'; ?>" href="<?= base_url('laporan_satuan') ?>"><i class="fas fa-fw fa-file-alt"></i> Laporan Transaksi</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Nav Item - Logout -->
      <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal">
          <i class="fas fa-fw fa-sign-out-alt"></i>
          <span style="font-size: 15px;">Logout</span>
        </a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url('assets/vendor/jquery/jquery.min.js') ?>"></script>
    <script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('assets/vendor/jquery-easing/jquery.easing.min.js') ?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('assets/js/sb-admin-2.min.js') ?>"></script>

  </body>

  </html>