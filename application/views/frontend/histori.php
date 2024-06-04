<!------------------------------------------------------------ History ------------------------------------------------------------>
  <div class="container mt-4 mb-5">
    <div class="histori">
      <h1 class="cek">─ Check Status Laundry ─</h1>
      <form method="post" action="<?= base_url('histori') ?>">
      <div class="container">
        <div class="row my-4">
          <div class="col-md-10">
            <input type="text" name="kode_transaksi" class="form-control box-form-cek" placeholder="Silahkan Masukkan Kode Transaksi Anda!" required>
          </div>
          <div class="col-md-2">
            <button type="submit" class="btn btn-histori">Cek Status</button>
          </div>
        </div>
      </div>
    </form>

    <div class="container">
      <div class="tabellll">
        <table class="table table-bordered table-striped mb-5" style="border: 1px solid rgba(0, 0, 0, 0.4);">
          <thead class="tabel-transaksi">
            <tr>
              <th>Nama Konsumen</th>
              <th>Tanggal Masuk</th>
              <th>Paket</th>
              <th>Jenis Barang</th>
              <th>Total</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>
            <?php
            if (!empty($data)) {
              foreach ($data as $row) { ?>
                <tr>
                  <td><?= $row->nama_konsumen; ?></td>
                  <td><?= $row->tgl_masuk; ?></td>
                  <td><?= $row->nama_paket; ?></td>
                  <td><?= isset($row->jenis_barang) ? $row->jenis_barang : '-'; ?></td>

                  <td>Rp. <?= number_format($row->grand_total); ?>,-</td>
                  <td><?= $row->status; ?></td>
                </tr>
              <?php }
            } else { ?>
              <tr>
                <td colspan="6" class="">Tidak Ada Data</td>
              </tr>
            <?php }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
  <!---------------------------------------------------------- History End ---------------------------------------------------------->

