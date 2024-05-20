<div class="container-fluid">
    <h1 class="h3 mb-3 text-gray-800"><?= $judul; ?></h1>
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
    	<div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <a href="<?= base_url('konsumen/tambah_konsumen') ?>" class="btn btn-primary"><i class="fas fa-plus fa-sm mb-1 mx-1"></i> Tambah Konsumen</a> <br>
                </div>
            </div>
            <br>
        	<div class="table-responsive">
            	<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                	<thead>
                   		<tr>
                        	<th>No.</th>
                        	<th>Kode</th>
                        	<th>Nama Konsumen</th>
                        	<th>Alamat</th>
                        	<th>No. Telepon</th>
                        	<th>Opsi</th>
                    	</tr>
                	</thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($data as $row) { ?>
                            <tr>
                            <td width="20px"><?= $no++; ?></td>
                            <td><?= $row->kode_konsumen; ?></td>
                            <td><?= $row->nama_konsumen; ?></td>
                            <td><?= $row->alamat_konsumen; ?></td>
                            <td><?= $row->no_telp; ?></td>
                            <td>
                                <a href="<?= base_url() ?>konsumen/edit/<?= $row->kode_konsumen; ?>" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a>
                                <a href="<?= base_url() ?>konsumen/delete/<?= $row->kode_konsumen; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin akan menghapus data konsumen <?= $row->kode_konsumen ?> ?');"><i class="fa fa-trash"></i></a>
                            </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>