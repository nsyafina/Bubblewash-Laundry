<?php
date_default_timezone_set('Asia/Jakarta');
$tgl_masuk = date('Y-m-d h:i:s');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Transaksi</title>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>

<body>
  <div class="container-fluid">
    <div class="card shadow mb-4">
      <div class="card-body" style="border: 1px solid rgba(18, 56, 137, 0.4); box-shadow: inset -3px -3px rgba(18, 56, 137, 0.4); border-radius: 10px">
        <form method="post" action="<?= base_url('transaksi/update') ?>">
          <!-- Kode Transaksi -->
          <div class="form-group">
            <label style="color: #12389F; font-size: 17px;">Kode Transaksi</label>
            <input type="text" name="kode_transaksi" value="<?= $transaksi['kode_transaksi']; ?>" class="form-control" readonly style="border: 1px solid rgba(18, 56, 137, 0.6); box-shadow: inset -2px -2px rgba(18, 56, 137, 0.6); border-radius: 10px;">
          </div>
          <!-- Nama Konsumen -->
          <div class="form-group">
            <label style="color: #12389F; font-size: 17px;">Nama Konsumen</label>
            <select name="kode_konsumen" class="form-control" style="border: 1px solid rgba(18, 56, 137, 0.6); box-shadow: inset -2px -2px rgba(18, 56, 137, 0.6); border-radius: 10px;">
              <?php foreach ($konsumen as $row) { ?>
                <option value="<?= $row->kode_konsumen ?>" <?= $transaksi['kode_konsumen'] == $row->kode_konsumen ? 'selected' : '' ?>>
                  <?= $row->nama_konsumen ?>
                </option>
              <?php } ?>
            </select>
          </div>
          <!-- Nama Paket -->
          <div class="form-group">
            <label style="color: #12389F; font-size: 17px;">Nama Paket</label>
            <select name="kode_paket" id="paket" class="form-control" style="border: 1px solid rgba(18, 56, 137, 0.6); box-shadow: inset -2px -2px rgba(18, 56, 137, 0.6); border-radius: 10px;">
              <?php foreach ($paket as $row) { ?>
                <option value="<?= $row->kode_paket ?>" <?= $transaksi['kode_paket'] == $row->kode_paket ? 'selected' : '' ?>>
                  <?= $row->nama_paket ?>
                </option>
              <?php } ?>
            </select>
          </div>
          <!-- Harga Paket -->
          <div class="form-group">
            <label style="color: #12389F; font-size: 17px;">Harga Paket</label>
            <input type="text" id="harga" value="<?= $transaksi['harga_paket']; ?>" class="form-control" readonly style="border: 1px solid rgba(18, 56, 137, 0.6); box-shadow: inset -2px -2px rgba(18, 56, 137, 0.6); border-radius: 10px;">
          </div>
          <!-- Berat -->
          <div class="form-group">
            <label style="color: #12389F; font-size: 17px;">Berat (KG)</label>
            <input type="number" name="berat" value="<?= $transaksi['berat']; ?>" id="berat" class="form-control" required style="border: 1px solid rgba(18, 56, 137, 0.6); box-shadow: inset -2px -2px rgba(18, 56, 137, 0.6); border-radius: 10px;">
          </div>
          <!-- Grand Total -->
          <div class="form-group">
            <label style="color: #12389F; font-size: 17px;">Grand Total</label>
            <input type="number" name="grand_total" id="grand_total" class="form-control" value="<?= $transaksi['grand_total']; ?>" readonly style="border: 1px solid rgba(18, 56, 137, 0.6); box-shadow: inset -2px -2px rgba(18, 56, 137, 0.6); border-radius: 10px;">
          </div>
          <!-- Tanggal Masuk (hidden) -->
          <div class="form-group" hidden>
            <label style="color: #12389F; font-size: 17px;">Tanggal Masuk</label>
            <input type="text" name="tgl_masuk" value="<?= $tgl_masuk; ?>" class="form-control" style="border: 1px solid rgba(18, 56, 137, 0.6); box-shadow: inset -2px -2px rgba(18, 56, 137, 0.6); border-radius: 10px;">
          </div>
          <!-- Status Pembayaran -->
          <div class="form-group">
            <label style="color: #12389F; font-size: 17px;">Bayar</label>
            <select name="bayar" class="form-control" style="border: 1px solid rgba(18, 56, 137, 0.6); box-shadow: inset -2px -2px rgba(18, 56, 137, 0.6); border-radius: 10px;">
              <option value="Lunas" <?= $transaksi['bayar'] == "Lunas" ? 'selected' : '' ?>>Lunas</option>
              <option value="Belum Lunas" <?= $transaksi['bayar'] == "Belum Lunas" ? 'selected' : '' ?>>Belum Lunas</option>
            </select>
          </div>
          <!-- Status (hidden) -->
          <div class="form-group" hidden>
            <label style="color: #12389F; font-size: 17px;">Status</label>
            <input type="text" name="status" value="Baru" class="form-control" style="border: 1px solid rgba(18, 56, 137, 0.6); box-shadow: inset -2px -2px rgba(18, 56, 137, 0.6); border-radius: 10px;">
          </div>
          <!-- Tombol Aksi -->
          <div class="form-group">
            <button type="submit" class="btn" style="color: white; background-color: #12389F; box-shadow: inset -3px -3px rgba(0, 0, 0, 0.4)">Update</button>
            <a href="<?= base_url('transaksi/riwayat') ?>" class="btn" style="color: white; background-color: #c90000; box-shadow: inset -3px -3px rgba(0, 0, 0, 0.4)">Batal</a>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Script untuk mengubah harga dan grand total -->
  <script>
    $(document).ready(function() {
      // Ketika pilihan paket berubah
      $('#paket').change(function() {
        var kode_paket = $(this).val();
        $.ajax({
          url: '<?= base_url() ?>transaksi/getHargaPaket',
          data: { kode_paket: kode_paket },
          method: 'POST',
          dataType: 'JSON',
          success: function(response) {
            $('#harga').val(response.harga_paket);
            updateGrandTotal();
          }
        });
      });

      // Ketika berat berubah
      $('#berat').keyup(function() {
        updateGrandTotal();
      });

      // Fungsi untuk menghitung grand total
      function updateGrandTotal() {
        var berat = $('#berat').val();
        var harga = $('#harga').val();
        var grand_total = berat * harga;
        $('#grand_total').val(grand_total);
      }
    });
  </script>
</body>

</html>