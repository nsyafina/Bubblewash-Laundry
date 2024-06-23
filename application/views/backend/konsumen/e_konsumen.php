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
    <div class="card shadow mb-4">
      <div class="card-body" style="border: 1px solid rgba(18, 56, 137, 0.4); box-shadow: inset -3px -3px rgba(18, 56, 137, 0.4); border-radius: 10px">
        <form method="post" action="<?= base_url('konsumen/update') ?>">
          <div class="form-group">
            <label style="color: #12389F">Kode Konsumen</label>
            <input type="text" style="border: 1px solid rgba(18, 56, 137, 0.6); box-shadow: inset -2px -2px rgba(18, 56, 137, 0.6); border-radius: 10px;" name="kode_konsumen" value="<?= $konsumen['kode_konsumen']; ?>" class="form-control" readonly>
          </div>
          <div class="form-group">
            <label style="color: #12389F">Nama Konsumen</label>
            <input type="text" style="border: 1px solid rgba(18, 56, 137, 0.6); box-shadow: inset -2px -2px rgba(18, 56, 137, 0.6); border-radius: 10px;" name="nama_konsumen" value="<?= $konsumen['nama_konsumen']; ?>" class="form-control" placeholder="Input Nama Konsumen" required>
          </div>
          <div class="form-group">
            <label style="color: #12389F">Alamat Konsumen</label>
            <textarea name="alamat_konsumen" style="border: 1px solid rgba(18, 56, 137, 0.6); box-shadow: inset -2px -2px rgba(18, 56, 137, 0.6); border-radius: 10px;" rows="3" class="form-control" placeholder="Input Alamat" required><?= $konsumen['alamat_konsumen']; ?></textarea>
          </div>
          <div class="form-group">
            <label style="color: #12389F">No Telepon</label>
            <input type="text" style="border: 1px solid rgba(18, 56, 137, 0.6); box-shadow: inset -2px -2px rgba(18, 56, 137, 0.6); border-radius: 10px;" name="no_telp" value="<?= $konsumen['no_telp']; ?>" class="form-control" placeholder="Input No Telp" required>
          </div>
          <div class="form-group">
            <button type="submit" class="btn" style="color: white; background-color: #12389F; box-shadow: inset -3px -3px rgba(0, 0, 0, 0.4)">Update</button>
            <a href="<?= base_url('konsumen') ?>" class="btn" style="color: white; background-color: #c90000; box-shadow: inset -3px -3px rgba(0, 0, 0, 0.4)">Batal</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>

</html>