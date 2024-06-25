<?php
date_default_timezone_set('Asia/Jakarta');
$tgl_masuk = date('Y-m-d h:i:s');

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    *{
      font-family: serif;
    }
  </style>
</head>

<body>

  <div class="container-fluid">
    <?php
    if (!empty($this->session->flashdata('info'))) { ?>
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <i class="icon fas fa-check"></i> <strong>Selamat</strong> <?= $this->session->flashdata('info') ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <?php } ?>

    <div class="card shadow mb-4">
      <div class="card-body" style="border: 1px solid rgba(18, 56, 137, 0.4); box-shadow: inset -3px -3px rgba(18, 56, 137, 0.4); border-radius: 10px">
        <form method="post" action="<?= base_url('transaksi/simpan') ?>">
          <div class="form-group">
            <label style="color: #12389F; font-size: 17px;">Kode Transaksi</label>
            <input style="border: 1px solid rgba(18, 56, 137, 0.6); box-shadow: inset -2px -2px rgba(18, 56, 137, 0.6); border-radius: 10px;" type="text" name="kode_transaksi" value="<?= "TRK" . date('Ymd') . $kode_transaksi ?>" class="form-control" readonly>
          </div>
          <div class="form-group">
            <label style="color: #12389F; font-size: 17px;">Nama Konsumen</label>
            <select style="border: 1px solid rgba(18, 56, 137, 0.6); box-shadow: inset -2px -2px rgba(18, 56, 137, 0.6); border-radius: 10px;" name="kode_konsumen" class="form-control" required>
              <option value="">-Pilih Konsumen-</option>
              <?php
              foreach ($konsumen as $row) { ?>
                <option value="<?= $row->kode_konsumen ?>"><?= $row->nama_konsumen ?></option>
              <?php } ?>
            </select>
          </div>
          <div class="form-group">
            <label style="color: #12389F; font-size: 17px;">Nama Paket</label>
            <select style="border: 1px solid rgba(18, 56, 137, 0.6); box-shadow: inset -2px -2px rgba(18, 56, 137, 0.6); border-radius: 10px;" name="kode_paket" id="paket" class="form-control" required>
              <option value="">-Pilih Paket-</option>
              <?php
              foreach ($paket as $row) { ?>
                <option value="<?= $row->kode_paket ?>"><?= $row->nama_paket ?></option>
              <?php } ?>
            </select>
          </div>
          <div class="form-group">
            <label style="color: #12389F; font-size: 17px;">Harga Paket</label>
            <input style="border: 1px solid rgba(18, 56, 137, 0.6); box-shadow: inset -2px -2px rgba(18, 56, 137, 0.6); border-radius: 10px;" type="text" id="harga" class="form-control" placeholder="Harga Paket" readonly>
          </div>
          <div class="form-group">
            <label style="color: #12389F; font-size: 17px;">Berat (KG)</label>
            <input style="border: 1px solid rgba(18, 56, 137, 0.6); box-shadow: inset -2px -2px rgba(18, 56, 137, 0.6); border-radius: 10px;" type="number" name="berat" id="berat" class="form-control" placeholder="Input Berat (KG)" required>
          </div>
          <div class="form-group">
            <label style="color: #12389F; font-size: 17px;">Grand Total</label>
            <input style="border: 1px solid rgba(18, 56, 137, 0.6); box-shadow: inset -2px -2px rgba(18, 56, 137, 0.6); border-radius: 10px;" type="number" name="grand_total" id="grand_total" class="form-control" placeholder="Input Grand Total" readonly>
          </div>
          <div class="form-group" hidden>
            <label style="color: #12389F; font-size: 17px;">Tanggal Masuk</label>
            <input style="border: 1px solid rgba(18, 56, 137, 0.6); box-shadow: inset -2px -2px rgba(18, 56, 137, 0.6); border-radius: 10px;" type="text" name="tgl_masuk" value="<?= $tgl_masuk; ?>" class="form-control" placeholder="Input Grand Total">
          </div>
          <div class="form-group">
            <label style="color: #12389F; font-size: 17px;">Bayar</label>
            <select style="border: 1px solid rgba(18, 56, 137, 0.6); box-shadow: inset -2px -2px rgba(18, 56, 137, 0.6); border-radius: 10px;" name="bayar" class="form-control" required>
              <option value="">-Pilih Status Bayar-</option>
              <option value="Lunas">Lunas</option>
              <option value="Belum Lunas">Belum Lunas</option>
            </select>
          </div>
          <div class="form-group" hidden>
            <label style="color: #12389F; font-size: 17px;">Status</label>
            <input style="border: 1px solid rgba(18, 56, 137, 0.6); box-shadow: inset -2px -2px rgba(18, 56, 137, 0.6); border-radius: 10px;" type="text" name="status" value="Baru" class="form-control" placeholder="Input Status">
          </div>
          <div class="form-group">
            <button type="submit" class="btn" style="color: white; background-color: #12389F; box-shadow: inset -3px -3px rgba(0, 0, 0, 0.4)">Simpan</button>
            <a href="<?= base_url('transaksi/riwayat') ?>" class="btn" style="color: white; background-color: #C90000; box-shadow: inset -3px -3px rgba(0, 0, 0, 0.4)">Batal</a>

          </div>
        </form>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</body>

</html>

<script>
  $('#paket').change(function() {
    var kode_paket = $(this).val();
    $.ajax({
      url: '<?= base_url() ?>transaksi/getHargaPaket',
      data: {
        kode_paket: kode_paket
      },
      method: 'post',
      dataType: 'JSON',
      success: function(hasil) {
        $('#harga').val(hasil.harga_paket);
      }
    });
  });

  $('#berat').keyup(function() {
    var berat = $(this).val();
    var harga = document.getElementById('harga').value;
    $('#grand_total').val(berat * harga);
  });
</script>