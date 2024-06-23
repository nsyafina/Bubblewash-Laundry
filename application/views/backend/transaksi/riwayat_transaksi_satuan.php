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
      <div class="card-body" style="border: 1px solid rgba(18, 56, 137, 0.4); box-shadow: inset -3px -3px rgba(18, 56, 137, 0.4); border-radius: 10px">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th style="border: 1px solid rgba(18, 56, 137, 1); color: white; background-color: rgba(18, 56, 137, 1);">No.</th>
                <th style="border: 1px solid rgba(18, 56, 137, 1); color: white; background-color: rgba(18, 56, 137, 1);">Tanggal Masuk</th>
                <th style="border: 1px solid rgba(18, 56, 137, 1); color: white; background-color: rgba(18, 56, 137, 1);">Kode Transaksi</th>
                <th style="border: 1px solid rgba(18, 56, 137, 1); color: white; background-color: rgba(18, 56, 137, 1);">Konsumen</th>
                <th style="border: 1px solid rgba(18, 56, 137, 1); color: white; background-color: rgba(18, 56, 137, 1);">Paket</th>
                <th style="border: 1px solid rgba(18, 56, 137, 1); color: white; background-color: rgba(18, 56, 137, 1);">Jenis Barang</th>
                <th style="border: 1px solid rgba(18, 56, 137, 1); color: white; background-color: rgba(18, 56, 137, 1);">Jumlah Barang</th>
                <th style="border: 1px solid rgba(18, 56, 137, 1); color: white; background-color: rgba(18, 56, 137, 1);">Grand Total</th>
                <th style="border: 1px solid rgba(18, 56, 137, 1); color: white; background-color: rgba(18, 56, 137, 1);">Tanggal Ambil</th>
                <th style="border: 1px solid rgba(18, 56, 137, 1); color: white; background-color: rgba(18, 56, 137, 1);">Status Bayar</th>
                <th style="border: 1px solid rgba(18, 56, 137, 1); color: white; background-color: rgba(18, 56, 137, 1);">Status Laundry</th>
                <th style="border: 1px solid rgba(18, 56, 137, 1); color: white; background-color: rgba(18, 56, 137, 1);">Opsi</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no = 1;
              foreach ($data as $row) { ?>
                <tr>
                  <td width="20px" style="border: 1px solid rgba(18, 56, 137, 0.5); color: #12389F; background-color: rgba(18, 56, 137, 0.3);"><?= $no++; ?></td>
                  <td style="border: 1px solid rgba(18, 56, 137, 0.5); color: #12389F; background-color: rgba(18, 56, 137, 0.3);"><?= $row->tgl_masuk; ?></td>
                  <td style="border: 1px solid rgba(18, 56, 137, 0.5); color: #12389F; background-color: rgba(18, 56, 137, 0.3);"><?= $row->kode_transaksi; ?></td>
                  <td style="border: 1px solid rgba(18, 56, 137, 0.5); color: #12389F; background-color: rgba(18, 56, 137, 0.3);"><?= $row->nama_konsumen; ?></td>
                  <td style="border: 1px solid rgba(18, 56, 137, 0.5); color: #12389F; background-color: rgba(18, 56, 137, 0.3);"><?= $row->nama_paket; ?></td>
                  <td style="border: 1px solid rgba(18, 56, 137, 0.5); color: #12389F; background-color: rgba(18, 56, 137, 0.3);"><?= $row->jenis_barang; ?></td>
                  <td style="border: 1px solid rgba(18, 56, 137, 0.5); color: #12389F; background-color: rgba(18, 56, 137, 0.3);"><?= $row->qty; ?></td>
                  <td style="border: 1px solid rgba(18, 56, 137, 0.5); color: #12389F; background-color: rgba(18, 56, 137, 0.3);"><?= "Rp. " . number_format($row->grand_total, 0, '.', '.'); ?></td>
                  <td style="border: 1px solid rgba(18, 56, 137, 0.5); color: #12389F; background-color: rgba(18, 56, 137, 0.3);"><?= $row->tgl_ambil; ?></td>
                  <td style="border: 1px solid rgba(18, 56, 137, 0.5); color: #12389F; background-color: rgba(18, 56, 137, 0.3);"><?= $row->bayar; ?></td>
                  <td style="border: 1px solid rgba(18, 56, 137, 0.5); color: #12389F; background-color: rgba(18, 56, 137, 0.3);">
                    <?php if ($row->status == "Baru") { ?>
                      <select name="status" class="badge status" style="background-color: #C90000; padding: 6px 5px 6px 4px; border: none; border-radius: 3px; font-size: 14px; font-weight: normal; color: white; box-shadow: inset -3px -3px rgba(0, 0, 0, 0.4)">
                        <option value="Baru" <?= $row->status == "Baru" ? 'selected' : '' ?>>Baru</option>
                        <option value="<?= $row->kode_transaksi ?> Proses" <?= $row->status == "Proses" ? 'selected' : '' ?>> Proses</option>
                        <option value="<?= $row->kode_transaksi ?> Ready" <?= $row->status == "Ready" ? 'selected' : '' ?>>Ready</option>
                        <option value="<?= $row->kode_transaksi ?> Selesai" <?= $row->status == "Selesai" ? 'selected' : '' ?>> Selesai</option>
                      </select>
                    <?php } else if ($row->status == "Proses") { ?>
                      <select name="status" class="badge status" style="background-color: orange; padding: 6px 5px 6px 4px; border: none; border-radius: 3px; font-size: 14px; font-weight: normal; color: black; box-shadow: inset -3px -3px rgba(0, 0, 0, 0.4)">
                        <option value="<?= $row->kode_transaksi ?> Baru" <?= $row->status == "Baru" ? 'selected' : '' ?>>Baru</option>
                        <option value="Proses" <?= $row->status == "Proses" ? 'selected' : '' ?>> Proses</option>
                        <option value="<?= $row->kode_transaksi ?> Ready" <?= $row->status == "Ready" ? 'selected' : '' ?>>Ready</option>
                        <option value="<?= $row->kode_transaksi ?> Selesai" <?= $row->status == "Selesai" ? 'selected' : '' ?>> Selesai</option>
                      </select>
                    <?php } else if ($row->status == "Ready") { ?>
                      <select name="status" class="badge status" style="background-color: #0CD5F1; padding: 6px 5px 6px 4px; border: none; border-radius: 3px; font-size: 14px; font-weight: normal; color: black; box-shadow: inset -3px -3px rgba(0, 0, 0, 0.4)">
                        <option value="<?= $row->kode_transaksi ?> Baru" <?= $row->status == "Baru" ? 'selected' : '' ?>>Baru</option>
                        <option value="<?= $row->kode_transaksi ?> Proses" <?= $row->status == "Proses" ? 'selected' : '' ?>>Proses</option>
                        <option value="Ready" <?= $row->status == "Ready" ? 'selected' : '' ?>>Ready</option>
                        <option value="<?= $row->kode_transaksi ?> Selesai" <?= $row->status == "Selesai" ? 'selected' : '' ?>>Selesai</option>
                      </select>
                    <?php } else { ?>
                      <button class="btn btn-sm" style="background-color: #02D702; padding-right: 15px; padding-left: 15px; border: none; border-radius: 3px; font-size: 14px; font-weight: normal; color: black; box-shadow: inset -3px -3px rgba(0, 0, 0, 0.4)">Selesai</button>
                    <?php } ?>
                  </td>

                  <?php
                  if ($row->status == "Ready") { ?>
                    <td style="border: 1px solid rgba(18, 56, 137, 0.5); color: #12389F; background-color: rgba(18, 56, 137, 0.3);">
                      <a href="<?= base_url() ?>transaksi/detailsatuan/<?= $row->kode_transaksi; ?>" class="btn btn-sm" style="box-shadow: inset -3px -3px rgba(0, 0, 0, 0.4); background-color: orange; color: black;"><i class="fa fa-print"></i></a>
                      <!--<a href="#" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a>-->
                    </td>
                  <?php } else if ($row->status == "Selesai") { ?>
                    <td style="border: 1px solid rgba(18, 56, 137, 0.5); color: #12389F; background-color: rgba(18, 56, 137, 0.3);">
                      <a href="<?= base_url() ?>transaksi/detailsatuan/<?= $row->kode_transaksi; ?>" class="btn btn-sm" style="box-shadow: inset -3px -3px rgba(0, 0, 0, 0.4); background-color: orange; color: black;"><i class="fa fa-print"></i></a>
                      <!--<a href="#" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a>-->
                    </td>
                  <?php } else { ?>
                    <td style="border: 1px solid rgba(18, 56, 137, 0.5); color: #12389F; background-color: rgba(18, 56, 137, 0.3);">
                      <a href="<?= base_url() ?>transaksi/detailsatuan/<?= $row->kode_transaksi; ?>" class="btn btn-sm" style="box-shadow: inset -3px -3px rgba(0, 0, 0, 0.4); background-color: orange; color: black;"><i class="fa fa-print"></i></a>
                      <a href="<?= base_url() ?>transaksi/edit_transaksi_satuan/<?= $row->kode_transaksi; ?>" class="btn btn-sm" style="box-shadow: inset -3px -3px rgba(0, 0, 0, 0.4); background-color: #02D702; color: black;"><i class="fa fa-edit"></i></a>
                      <a href="<?= base_url() ?>transaksi/deletesatuan/<?= $row->kode_transaksi; ?>" style="box-shadow: inset -3px -3px rgba(0, 0, 0, 0.4); background-color: #C90000; color: white;" class="btn btn-sm" onclick="return confirm('Kamu yakin akan membatalkan <?= $row->kode_transaksi ?> ?');"><i class="fa fa-trash"></i></a>
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
        url: "<?= base_url() ?>transaksi/update_statuss",
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