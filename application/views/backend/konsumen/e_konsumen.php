<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<style>
  *{
    font-family: serif;
  }
</style>
<body>
  <div class="container-fluid">
    <h1 class="h3 mb-3 text-gray-800"><?= $judul; ?></h1>
    <div class="card shadow mb-4">
      <div class="card-body">
        <form method="post" action="<?= base_url('konsumen/update') ?>">
          <div class="form-group">
            <label>Kode Konsumen</label>
            <input type="text" name="kode_konsumen" value="<?= $konsumen['kode_konsumen']; ?>" class="form-control" readonly>
          </div>
          <div class="form-group">
            <label>Nama Konsumen</label>
            <input type="text" name="nama_konsumen" value="<?= $konsumen['nama_konsumen']; ?>" class="form-control" placeholder="Input Nama Konsumen" required>
          </div>
          <div class="form-group">
            <label>Alamat Konsumen</label>
            <textarea name="alamat_konsumen" rows="3" class="form-control" placeholder="Input Alamat" required><?= $konsumen['alamat_konsumen']; ?></textarea>
          </div>
          <div class="form-group">
            <label>No Telepon</label>
            <input type="text" name="no_telp" value="<?= $konsumen['no_telp']; ?>" class="form-control" placeholder="Input No Telp" required>
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="<?= base_url('konsumen') ?>" class="btn btn-danger">Batal</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>

</html>