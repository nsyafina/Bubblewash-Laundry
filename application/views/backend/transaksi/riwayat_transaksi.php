<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    td .btn {
      margin: 3px;
      /* Menambahkan margin 5px ke semua tombol */
    }
  </style>
</head>

<body>
  <!-- Begin Page Content -->
  <div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800"><?= $judul; ?></h1><br>
    <?php
    if (!empty($this->session->flashdata('info'))) { ?>
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <i class="icon fas fa-check"></i> <strong>Selamat</strong> <?= $this->session->flashdata('info') ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <?php } ?>




    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Riwayat Transaksi Kiloan</h6>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>No.</th>
                <th>Tanggal Masuk</th>
                <th>Kode Transaksi</th>
                <th>Nama Konsumen</th>
                <th>Nama Paket</th>
                <th>Berat (KG)</th>
                <th>Grand Total</th>
                <th>Tanggal Ambil</th>
                <th>Status Bayar</th>
                <th>Status</th>
                <th>Opsi</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no = 1;
              foreach ($data as $row) { ?>
                <tr>
                  <td width="20px"><?= $no++; ?></td>
                  <td><?= $row->tgl_masuk; ?></td>
                  <td><?= $row->kode_transaksi; ?></td>
                  <td><?= $row->nama_konsumen; ?></td>
                  <td><?= $row->nama_paket; ?></td>
                  <td><?= $row->berat; ?></td>
                  <td><?= "Rp. " . number_format($row->grand_total, 0, '.', '.'); ?></td>
                  <td><?= $row->tgl_ambil; ?></td>
                  <td><?= $row->bayar; ?></td>
                  <td>
                    <?php if ($row->status == "Baru") { ?>
                      <select name="status" class="badge badge-danger status">
                        <option value="Baru" <?= $row->status == "Baru" ? 'selected' : '' ?>>Baru</option>
                        <option value="<?= $row->kode_transaksi ?> Proses" <?= $row->status == "Proses" ? 'selected' : '' ?>> Proses</option>
                        <option value="<?= $row->kode_transaksi ?> Ready" <?= $row->status == "Ready" ? 'selected' : '' ?>>Ready</option>
                        <option value="<?= $row->kode_transaksi ?> Selesai" <?= $row->status == "Selesai" ? 'selected' : '' ?>> Selesai</option>
                      </select>
                    <?php } else if ($row->status == "Proses") { ?>
                      <select name="status" class="badge badge-warning status">
                        <option value="<?= $row->kode_transaksi ?> Baru" <?= $row->status == "Baru" ? 'selected' : '' ?>>Baru</option>
                        <option value="Proses" <?= $row->status == "Proses" ? 'selected' : '' ?>> Proses</option>
                        <option value="<?= $row->kode_transaksi ?> Ready" <?= $row->status == "Ready" ? 'selected' : '' ?>>Ready</option>
                        <option value="<?= $row->kode_transaksi ?> Selesai" <?= $row->status == "Selesai" ? 'selected' : '' ?>> Selesai</option>
                      </select>
                    <?php } else if ($row->status == "Ready") { ?>
                      <select name="status" class="badge badge-info status">
                        <option value="<?= $row->kode_transaksi ?> Baru" <?= $row->status == "Baru" ? 'selected' : '' ?>>Baru</option>
                        <option value="<?= $row->kode_transaksi ?> Proses" <?= $row->status == "Proses" ? 'selected' : '' ?>>Proses</option>
                        <option value="Ready" <?= $row->status == "Ready" ? 'selected' : '' ?>>Ready</option>
                        <option value="<?= $row->kode_transaksi ?> Selesai" <?= $row->status == "Selesai" ? 'selected' : '' ?>>Selesai</option>
                      </select>
                    <?php } else { ?>
                      <button class="btn btn-success btn-sm dropdown-toggle">Selesai</button>
                    <?php } ?>
                  </td>

                  <?php
                  if ($row->status == "Ready") { ?>
                    <td>
                      <a href="<?= base_url() ?>transaksi/detail/<?= $row->kode_transaksi; ?>" class="btn btn-warning btn-sm"><i class="fa fa-print"></i></a>
                      <!--<a href="#" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a>-->
                    </td>
                  <?php } else if ($row->status == "Selesai") { ?>
                    <td>
                      <a href="<?= base_url() ?>transaksi/detail/<?= $row->kode_transaksi; ?>" class="btn btn-warning btn-sm"><i class="fa fa-print"></i></a>
                      <!--<a href="#" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a>-->
                    </td>
                  <?php } else { ?>
                    <td>
                      <a href="<?= base_url() ?>transaksi/detail/<?= $row->kode_transaksi; ?>" class="btn btn-warning btn-sm"><i class="fa fa-print"></i></a>
                      <a href="<?= base_url() ?>transaksi/edit_transaksi/<?= $row->kode_transaksi; ?>" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a>
                      <a href="<?= base_url() ?>transaksi/delete/<?= $row->kode_transaksi; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Kamu yakin akan membatalkan <?= $row->kode_transaksi ?> ?');">Batalkan</a>
                    </td>


                  <?php } ?>

                </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>




  </div>
  <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
  <script>
    $('.status').change(function() {
      var status = $(this).val();
      var kt = status.split(' ')[0]; // Extract the kode_transaksi part
      var stt = status.substr(status.lastIndexOf(' ') + 1); // Extract the status part after the last space
      $.ajax({
        url: "<?= base_url() ?>transaksi/update_status",
        method: "post",
        data: {
          kt: kt,
          stt: stt
        }
      });
      location.reload();
    });
  </script>


</body>

</html>