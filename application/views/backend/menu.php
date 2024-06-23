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

  // Daftar halaman yang ingin ditandai sebagai aktif
  $active_pages = array(
    'dashboard',
    'konsumen',
    'paket',
    'transaksi/tambah',
    'transaksi/riwayat',
    'laporan',
    'login/logout'
    // Tambahkan halaman lain di sini jika diperlukan
  );

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
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item <?php if ($current_page == 'dashboard') echo 'active'; ?>">
      <a class="nav-link" href="<?= base_url('dashboard') ?>">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span style="font-size: 14px;">Dashboard</span></a>
      </li>

      <!-- Nav Item - Data Konsumen -->
      <li class="nav-item <?php if ($current_page == 'konsumen' || $current_page == 'konsumen/tambah_konsumen'|| $current_page == 'konsumen/index' || strpos($current_page, 'konsumen/edit') !== false) echo 'active'; ?>">
        <a href="<?= base_url('konsumen') ?>" class="nav-link">
          <i class="fas fa-fw fa-users"></i>
          <span style="font-size: 14px;">Data Konsumen</span></a>
        </li>

        <!-- Nav Item - Data Jenis -->
        <li class="nav-item <?php if ($current_page == 'jenis' || $current_page == 'jenis/tambah_jenis'|| $current_page == 'jenis/index' || strpos($current_page, 'jenis/edit/') !== false) echo 'active'; ?>">
          <a class="nav-link" href="<?= base_url('jenis') ?>">
            <i class="fas fa-fw fa-box-open"></i>
            <span style="font-size: 14px;">Data Jenis Barang</span></a>
          </li>

          <!-- Nav Item - Data Paket -->
          <li class="nav-item <?php if ($current_page == 'paket' || $current_page == 'paket/tambah_paket'|| $current_page == 'paket/index' || strpos($current_page, 'paket/edit/') !== false) echo 'active'; ?>">
            <a class="nav-link" href="<?= base_url('paket') ?>">
              <i class="fas fa-fw fa-box-open"></i>
              <span style="font-size: 14px;">Data Paket</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Tambah Transaksi -->
            <li class="nav-item <?php if ($current_page == 'transaksi/tambah') echo 'active'; ?>">
              <a class="nav-link" href="<?= base_url('transaksi/tambah') ?>">
                <i class="fas fa-fw fa-dollar-sign"></i>
                <span style="font-size: 14px;">Tambah Transaksi Kiloan</span></a>
              </li>

              <!-- Nav Item - Riwayat Transaksi -->
              <li class="nav-item <?php if ($current_page == 'transaksi/riwayat' || strpos($current_page, 'transaksi/edit_transaksi/') !== false) echo 'active'; ?>">
                <a class="nav-link" href="<?= base_url('transaksi/riwayat') ?>">
                  <i class="fas fa-fw fa-history"></i>
                  <span style="font-size: 14px;">Riwayat Transaksi Kiloan</span></a>
                </li>

                <!-- Nav Item - Laporan -->
                <li class="nav-item <?php if ($current_page == 'laporan') echo 'active'; ?>">
                  <a class="nav-link" href="<?= base_url('laporan') ?>">
                    <i class="fas fa-fw fa-file-alt"></i>
                    <span style="font-size: 14px;">Laporan Transaksi Kiloan</span></a>
                  </li>

                  <!-- Divider -->
                  <hr class="sidebar-divider my-0">

                  <!-- Nav Item - Tambah Transaksi -->
                  <li class="nav-item <?php if ($current_page == 'transaksi/satuan') echo 'active'; ?>">
                    <a class="nav-link" href="<?= base_url('transaksi/satuan') ?>">
                      <i class="fas fa-fw fa-dollar-sign"></i>
                      <span style="font-size: 14px;">Tambah Transaksi Satuan</span></a>
                    </li>

                    <!-- Nav Item - Riwayat Transaksi -->
                    <li class="nav-item <?php if ($current_page == 'transaksi/riwayatsatuan' || strpos($current_page, 'transaksi/edit_transaksi_satuan/') !== false) echo 'active'; ?>">
                      <a class="nav-link" href="<?= base_url('transaksi/riwayatsatuan') ?>">
                        <i class="fas fa-fw fa-history"></i>
                        <span style="font-size: 14px;">Riwayat Transaksi Satuan</span></a>
                      </li>

                      <!-- Nav Item - Laporan -->
                      <li class="nav-item <?php if ($current_page == 'laporan_satuan') echo 'active'; ?>">
                        <a class="nav-link" href="<?= base_url('laporan_satuan') ?>">
                          <i class="fas fa-fw fa-file-alt"></i>
                          <span style="font-size: 14px;">Laporan Transaksi Satuan</span></a>
                        </li>

                        <!-- Divider -->
                        <hr class="sidebar-divider my-0">

                        <!-- Nav Item - Logout -->
                        <li class="nav-item <?php if ($current_page == 'login/logout') echo 'active'; ?>">
                          <a class="nav-link" href="<?= base_url('login/logout') ?>">
                            <i class="fas fa-sign-out-alt"></i>
                            <span style="font-size: 16px;">Logout</span></a>
                          </li>

                          <!-- Sidebar Toggler (Sidebar) -->
                          <div class="text-center d-none d-md-inline">
                            <button class="rounded-circle border-0" id="sidebarToggle"></button>
                          </div>

                        </ul>
                        <!-- End of Sidebar -->
                      </body>

                      </html>