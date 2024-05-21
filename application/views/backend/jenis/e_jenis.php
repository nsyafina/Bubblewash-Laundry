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
    <div class="card shadow mb-4">
      <div class="card-body">
        <form method="post" action="<?= base_url('jenis/update') ?>">
          <div class="form-group">
            <label>Kode Jenis</label>
            <input type="text" name="kode_jenis" value="<?= $data['kode_jenis']; ?>"  class="form-control" readonly>
          </div>
          <div class="form-group">
            <label>Jenis Barang</label>
            <input type="text" name="jenis_barang" value="<?= $data['jenis_barang']; ?>" class="form-control" placeholder="Input Nama Paket" required>
          </div>
          <div class="form-group">
            <label>Harga</label>
            <input type="text" name="harga_jenis" value="<?= $data['harga_jenis']; ?>" class="form-control" placeholder="Input Harga Paket" required>
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="<?= base_url('jenis') ?>" class="btn btn-danger">Batal</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>

</html>