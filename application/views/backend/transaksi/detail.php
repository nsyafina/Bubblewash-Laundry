<style>
  td {
    font-size: 12px;
    font-family: sans-serif;
  }

  h3 {
    font-size: 16px;
  }

  hr {
    border: 0;
    border-top: 2px solid lightslategray;
  }

  .tabel,
  .tabel th,
  .tabel td {
    border: 1px solid black;
    border-collapse: collapse;
  }

  .tabel th {
    font-family: sans-serif;
    font-size: 12px;
    background: #12389F;
    color: white;
  }

  .web{
    color: rgba(19, 57, 158, 1);
    border-bottom: 1px solid rgba(19, 57, 158, 0.4);
  }

</style>


<table>
  <tr>
    <td width="400">
      <h3> BubbleWash Laundry</h3>
    </td>
    <td>
      <h3>NOTA PESANAN</h3>
    </td>
  </tr>
  <tr>
    <td>Alamat : Jl. Raya Casablanca No.88, Menteng Dalam, Tebet, Jakarta Selatan 12870. (Pusat)</td>
  </tr>
  <tr>
    <td>No. Telp : 0857-7908-2884 (Admin Jakarta)</td>
  </tr>
  <tr>
    <td>Website : <span class="web">http://localhost/bubblewash-laundry</span></td>
  </tr>
</table>

<hr><br>

<table>
  <tr>
    <td width="80">Konsumen :</td>
    <td width="100"><?= $transaksi['nama_konsumen']; ?></td>
    <td width="70">Kode Transaksi :</td>
    <td><?= $transaksi['kode_transaksi']; ?></td>
  </tr>
  <tr>
    <td width="80">Alamat :</td>
    <td width="250"><?= $transaksi['alamat_konsumen']; ?></td>
    <td width="80">Tanggal Masuk :</td>
    <td><?= $transaksi['tgl_masuk']; ?></td>
  </tr>
  <tr>
    <td width="80">Telp :</td>
    <td width="250"><?= $transaksi['no_telp']; ?></td>
    <td width="80">Tanggal Ambil :</td>
    <?php if ($transaksi['tgl_ambil'] != '0000-00-00 00:00:00') { ?>
      <td style="color: #12389F"><?= $transaksi['tgl_ambil']; ?></td>
    <?php } else { ?>
      <td style="color: #C90000;">Belum diambil</td>
    <?php } ?>
  </tr>
</table>
<br><br>

<table class="tabel" width="500">
  <tr>
    <th>Paket Laundry</th>
    <th>Berat (KG)</th>
    <th>Harga</th>
    <th>Subtotal</th>
  </tr>
  <tr>
    <td><?= $transaksi['nama_paket']; ?></td>
    <td><?= $transaksi['berat']; ?></td>
    <td>Rp.<?= number_format($transaksi['harga_paket'], 0, '.', '.'); ?>,-</td>
    <td>Rp.<?= number_format($transaksi['grand_total'], 0, '.', '.'); ?>,-</td>
  </tr>
  <tr>
    <td colspan="3" style="text-align: right; font-weight: bold; font-size: 14px; padding-right: 5px">Grand Total</td>
    <td style="font-weight: bold; font-size: 14px">Rp.<?= number_format($transaksi['grand_total'], 0, '.', '.'); ?>,-</td>
  </tr>
</table>
<br><br>

<table>
  <tr>
    <td style="font-size: 14px; font-weight: bold">Keterangan</td>
  </tr>
  <tr>
    <td>1. Pengambilan cucian harus membawa nota.</td>
  </tr>
  <tr>
    <td>2. Cucian luntur bukan tanggung jawab kami.</td>
  </tr>
  <tr>
    <td>3. Hitung dan periksa sebelum pergi.</td>
  </tr>
  <tr>
    <td>4. Klaim kekurangan / kehilangan cucian setelah meninggalkan laundry tidak dilayani.</td>
  </tr>
</table>