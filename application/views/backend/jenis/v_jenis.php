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

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-body" style="border: 1px solid rgba(18, 56, 137, 0.4); box-shadow: inset -3px -3px rgba(18, 56, 137, 0.4); border-radius: 10px">
      <div class="row">
        <div class="col-md-12">
          <a href="<?= base_url('jenis/tambah_jenis') ?>" class="btn" style="background-color: #12389F; color: white; box-shadow: inset -3px -3px rgba(0, 0, 0, 0.4);"><i class="fas fa-plus fa-sm mb-1 mx-1"></i> Tambah Jenis Barang</a><br><br>
        </div>
      </div>
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th style="border: 1px solid rgba(18, 56, 137, 1); color: white; background-color: rgba(18, 56, 137, 1);">No.</th>
              <th style="border: 1px solid rgba(18, 56, 137, 1); color: white; background-color: rgba(18, 56, 137, 1);">Kode jenis</th>
              <th style="border: 1px solid rgba(18, 56, 137, 1); color: white; background-color: rgba(18, 56, 137, 1);">Jenis Barang</th>
              <th style="border: 1px solid rgba(18, 56, 137, 1); color: white; background-color: rgba(18, 56, 137, 1);">Harga</th>
              <th style="border: 1px solid rgba(18, 56, 137, 1); color: white; background-color: rgba(18, 56, 137, 1);">Gambar</th>
              <th style="border: 1px solid rgba(18, 56, 137, 1); color: white; background-color: rgba(18, 56, 137, 1);">Opsi</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $no = 1;
            foreach ($data as $row) { ?>
              <tr>
                <td width="20px" style="border: 1px solid rgba(18, 56, 137, 0.5); color: #12389F; background-color: rgba(18, 56, 137, 0.3);"><?= $no++; ?></td>
                <td style="border: 1px solid rgba(18, 56, 137, 0.5); color: #12389F; background-color: rgba(18, 56, 137, 0.3);"><?= $row->kode_jenis; ?></td>
                <td style="border: 1px solid rgba(18, 56, 137, 0.5); color: #12389F; background-color: rgba(18, 56, 137, 0.3);"><?= $row->jenis_barang; ?></td>
                <td style="border: 1px solid rgba(18, 56, 137, 0.5); color: #12389F; background-color: rgba(18, 56, 137, 0.3);">Rp. <?= number_format($row->harga_jenis, 0, '.', '.'); ?>,-</td>
                <td style="border: 1px solid rgba(18, 56, 137, 0.5); color: #12389F; background-color: rgba(18, 56, 137, 0.3);"><a href="<?= base_url('img/service/') . $row->gambar ?>" target="_blank">
                  <img src="<?= base_url('img/service/') . $row->gambar ?>" alt="" width="90">
                </a>
              </td>

              <td style="border: 1px solid rgba(18, 56, 137, 0.5); color: #12389F; background-color: rgba(18, 56, 137, 0.3);">
                <a href="<?= base_url() ?>jenis/edit/<?= $row->kode_jenis; ?>" class="btn btn-sm" style="background-color: #12389F; color: white; box-shadow: inset -3px -3px rgba(0, 0, 0, 0.4);"><i class="fa fa-edit"></i></a>
                <a href="<?= base_url() ?>jenis/delete/<?= $row->kode_jenis; ?>" class="btn btn-sm" style="background-color: orange; color: black; box-shadow: inset -3px -3px rgba(0, 0, 0, 0.4);" onclick="return confirm('Yakin akan menghapus data paket <?= $row->kode_jenis ?> ?');"><i class="fa fa-trash"></i></a>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
</div>