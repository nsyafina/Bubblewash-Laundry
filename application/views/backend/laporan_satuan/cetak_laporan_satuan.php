<style>
  th {
    font-size: 14px;
    font-family: sans-serif;
    background: #12389F;
    color: white;
  }
</style>


<table width="750" border="0">
  <tr>
    <td style="text-align:center; font-size:24px; font-weight:bold; font-family:sans-serif">Laporan Transaksi Satuan</td>
  </tr>
</table>

<table width="750" border="0">
  <tr>
    <td style="text-align:center; font-size:16px; font-family:sans-serif">Dari Tanggal <?= mediumdate_indo($this->session->userdata('tgl_mulai')); ?> Sampai Tanggal <?= mediumdate_indo($this->session->userdata('tgl_akhir')); ?></td>
  </tr>
</table>
<br><br>

<table width="750" border="1" style="border-collapse: collapse;">
  <tr>
    <th>Tanggal masuk</th>
    <th>Kode Transaksi</th>
    <th>Konsumen</th>
    <th>Paket</th>
    <th>Qty</th>
    <th>Jenis</th>
    <th>Grand Total</th>
    <th>Status</th>
  </tr>

  <?php 
  $total_grand_total = 0; // Variabel untuk menyimpan total grand total

  foreach ($laporan as $row) { 
    $total_grand_total += $row->grand_total; // Menambahkan grand total ke variabel
    ?>
    <tr>
      <td><?= ($row->tgl_masuk); ?></td>
      <td><?= $row->kode_transaksi; ?></td>
      <td><?= $row->nama_konsumen; ?></td>
      <td><?= $row->nama_paket; ?></td>
      <td><?= $row->qty; ?></td>
      <td><?= $row->jenis_barang; ?></td>
      <td>Rp. <?= number_format($row->grand_total, 0, '.', ','); ?>,-</td>
      <td><?= $row->status; ?></td>
    </tr>
  <?php } ?>

  <!-- Baris untuk menampilkan total grand total -->
  <tr>
    <td colspan="6" style="text-align: right; font-weight: bold; font-size: 17px; padding-right: 10px;">Total dari seluruh transaksi satuan </td>
    <td style="font-weight: bold; font-size: 17px">Rp. <?= number_format($total_grand_total, 0, '.', ','); ?>,-</td>
    <td></td>
  </tr>
</table>