<div class="container-fluid">
    <?php
    if (!empty($this->session->flashdata('info'))) { ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="icon fas fa-check"></i> <strong>Selamat!</strong> <?= $this->session->flashdata('info') ?>
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
                    <a href="<?= base_url('konsumen/tambah_konsumen') ?>" class="btn" style="background-color: #12389F; color: white; box-shadow: inset -3px -3px rgba(0, 0, 0, 0.4);"><i class="fas fa-plus fa-sm mb-1 mx-1"></i> Tambah Konsumen</a> <br>
                </div>
            </div>
            <br>
            <div class="table-responsive">
            	<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                   <thead>
                       <tr>
                         <th style="border: 1px solid rgba(18, 56, 137, 1); color: white; background-color: rgba(18, 56, 137, 1);">No.</th>
                         <th style="border: 1px solid rgba(18, 56, 137, 1); color: white; background-color: rgba(18, 56, 137, 1);">Kode</th>
                         <th style="border: 1px solid rgba(18, 56, 137, 1); color: white; background-color: rgba(18, 56, 137, 1);">Nama Konsumen</th>
                         <th style="border: 1px solid rgba(18, 56, 137, 1); color: white; background-color: rgba(18, 56, 137, 1);">Alamat</th>
                         <th style="border: 1px solid rgba(18, 56, 137, 1); color: white; background-color: rgba(18, 56, 137, 1);">No. Telepon</th>
                         <th style="border: 1px solid rgba(18, 56, 137, 1); color: white; background-color: rgba(18, 56, 137, 1);">Opsi</th>
                     </tr>
                 </thead>
                 <tbody>
                    <?php
                    $no = 1;
                    foreach ($data as $row) { ?>
                        <tr>
                            <td width="20px" style="border: 1px solid rgba(18, 56, 137, 0.5); color: #12389F; background-color: rgba(18, 56, 137, 0.3);"><?= $no++; ?></td>
                            <td style="border: 1px solid rgba(18, 56, 137, 0.5); color: #12389F; background-color: rgba(18, 56, 137, 0.3);"><?= $row->kode_konsumen; ?></td>
                            <td style="border: 1px solid rgba(18, 56, 137, 0.5); color: #12389F; background-color: rgba(18, 56, 137, 0.3);"><?= $row->nama_konsumen; ?></td>
                            <td style="border: 1px solid rgba(18, 56, 137, 0.5); color: #12389F; background-color: rgba(18, 56, 137, 0.3);"><?= $row->alamat_konsumen; ?></td>
                            <td style="border: 1px solid rgba(18, 56, 137, 0.5); color: #12389F; background-color: rgba(18, 56, 137, 0.3);"><?= $row->no_telp; ?></td>
                            <td style="border: 1px solid rgba(18, 56, 137, 0.5); color: #12389F; background-color: rgba(18, 56, 137, 0.3);">
                                <a href="<?= base_url() ?>konsumen/edit/<?= $row->kode_konsumen; ?>" class="btn btn-sm" style="background-color: #12389F; color: white; box-shadow: inset -3px -3px rgba(0, 0, 0, 0.4);"><i class="fa fa-edit"></i></a>
                                <a href="<?= base_url() ?>konsumen/delete/<?= $row->kode_konsumen; ?>" class="btn btn-sm" style="background-color: orange; color: black; box-shadow: inset -3px -3px rgba(0, 0, 0, 0.4);" onclick="return confirm('Yakin akan menghapus data konsumen <?= $row->kode_konsumen ?> ?');"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>