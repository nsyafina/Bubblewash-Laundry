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
    <h1 class="h3 mb-3 text-gray-800"><?= $judul; ?></h1>
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
      <div class="card-body">
        <form method="post" action="<?= base_url('transaksi/simpansatuan') ?>">
          <div class="form-group">
            <label>Kode Transaksi</label>
            <input type="text" name="kode_transaksi" value="<?= "TRS" . date('Ymd') . $kode_transaksi ?>" class="form-control" readonly>
          </div>
          <div class="form-group">
            <label>Nama Konsumen</label>
            <select name="kode_konsumen" class="form-control" required>
              <option value="">-Pilih Konsumen-</option>
              <?php
              foreach ($konsumen as $row) { ?>
                <option value="<?= $row->kode_konsumen ?>"><?= $row->nama_konsumen ?></option>
              <?php } ?>
            </select>
          </div>
          <div class="form-group">
            <label>Nama Paket</label>
            <select name="kode_paket" id="paket" class="form-control" required>
              <option value="">-Pilih Paket-</option>
              <?php
              foreach ($paket as $row) { ?>
                <option value="<?= $row->kode_paket ?>"><?= $row->nama_paket ?></option>
              <?php } ?>
            </select>
          </div>
          <div class="form-group">
            <label>Harga Paket</label>
            <input type="text" id="harga" class="form-control" placeholder="Harga Paket" readonly>
          </div>
          <div class="form-group">
            <label>Jenis Barang</label>
            <select name="kode_jenis" id="jenis" class="form-control" required>
              <option value="">-Pilih Jenis Barang-</option>
              <?php
              foreach ($jenis as $row) { ?>
                <option value="<?= $row->kode_jenis ?>"><?= $row->jenis_barang ?></option>
              <?php } ?>
            </select>
          </div>
          <div class="form-group">
            <label>Harga Jenis Barang</label>
            <input type="text" id="hargajenis" class="form-control" placeholder="Harga Jenis Barang" readonly>
          </div>
          <div class="form-group">
            <label>Jumlah Barang</label>
            <input type="number" name="qty" id="qty" class="form-control" placeholder="Input Jumlah" required>
          </div>
          <div class="form-group">
            <label>Grand Total</label>
            <input type="number" name="grand_total" id="grand_total" class="form-control" placeholder="Input Grand Total" readonly>
          </div>
          <div class="form-group" hidden>
            <label>Tanggal Masuk</label>
            <input type="text" name="tgl_masuk" value="<?= $tgl_masuk; ?>" class="form-control" placeholder="Input Grand Total">
          </div>
          <div class="form-group">
            <label>Bayar</label>
            <select name="bayar" class="form-control">
              <option value="">-Pilih Status Bayar-</option>
              <option value="Lunas">Lunas</option>
              <option value="Belum Lunas">Belum Lunas</option>
            </select>
          </div>
          <div class="form-group" hidden>
            <label>Status</label>
            <input type="text" name="status" value="Baru" class="form-control" placeholder="Input Status">
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary">Simpan</button>

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

  $('#jenis').change(function() {
    var kode_jenis = $(this).val();
    $.ajax({
      url: '<?= base_url() ?>transaksi/getHargaJenis',
      data: {
        kode_jenis: kode_jenis
      },
      method: 'post',
      dataType: 'JSON',
      success: function(hasil) {
        $('#hargajenis').val(hasil.harga_jenis);
      }
    });
  });

  /*$('#berat').keyup(function() {
    var berat = $(this).val();
    var harga = document.getElementById('harga').value;
    var hargajenis = document.getElementById('hargajenis').value;
    $('#grand_total').val ( harga + hargajenis * berat );
  });*/

  $('#qty').keyup(function() {
    var qty = parseFloat($(this).val()); // ParseFloat untuk mengonversi nilai berat menjadi angka desimal
    var harga = parseFloat(document.getElementById('harga').value); // ParseFloat untuk mengonversi nilai harga menjadi angka desimal
    var hargajenis = parseFloat(document.getElementById('hargajenis').value); // ParseFloat untuk mengonversi nilai hargajenis menjadi angka desimal
    var grand_total = harga + hargajenis * qty; // Menghitung grand total
    $('#grand_total').val(grand_total.toFixed(0)); // Mengatur nilai grand total ke input dengan id "grand_total" dan membatasi jumlah angka desimal menjadi 2
  });
</script>