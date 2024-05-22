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
        <form method="post" action="<?= base_url('paket/update') ?>">
          <div class="form-group">
            <label>Kode Paket</label>
            <input type="text" name="kode_paket" value="<?= $data['kode_paket']; ?>"  class="form-control" readonly>
          </div>
          <div class="form-group">
            <label>Nama Paket</label>
            <input type="text" name="nama_paket" value="<?= $data['nama_paket']; ?>" class="form-control" placeholder="Input Nama Paket" required>
          </div>
          <div class="form-group">
            <label>Harga Paket</label>
            <input type="text" name="harga_paket" value="<?= $data['harga_paket']; ?>" class="form-control" placeholder="Input Harga Paket" required>
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="<?= base_url('paket') ?>" class="btn btn-danger">Batal</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>

</html>