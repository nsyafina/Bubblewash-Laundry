<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    * {
      font-family: serif;
    }
  </style>
</head>

<body>
  <div class="container-fluid">
    <div class="card shadow mb-4">
      <div class="card-body" style="border: 1px solid rgba(18, 56, 137, 0.4); box-shadow: inset -3px -3px rgba(18, 56, 137, 0.4); border-radius: 10px">
        <form method="post" action="<?= base_url('paket/update') ?>" enctype="multipart/form-data">
          <div class="form-group">
            <label style="color: #12389F; font-size: 17px;">Kode Paket</label>
            <input style="border: 1px solid rgba(18, 56, 137, 0.6); box-shadow: inset -2px -2px rgba(18, 56, 137, 0.6); border-radius: 10px;" type="text" name="kode_paket" value="<?= $data['kode_paket']; ?>" class="form-control" readonly>
          </div>
          <div class="form-group">
            <label style="color: #12389F; font-size: 17px;">Nama Paket</label>
            <input style="border: 1px solid rgba(18, 56, 137, 0.6); box-shadow: inset -2px -2px rgba(18, 56, 137, 0.6); border-radius: 10px;" type="text" name="nama_paket" value="<?= $data['nama_paket']; ?>" class="form-control" placeholder="Input Nama Paket" required>
          </div>
          <div class="form-group">
            <label style="color: #12389F; font-size: 17px;">Harga Paket</label>
            <input style="border: 1px solid rgba(18, 56, 137, 0.6); box-shadow: inset -2px -2px rgba(18, 56, 137, 0.6); border-radius: 10px;" type="text" name="harga_paket" value="<?= $data['harga_paket']; ?>" class="form-control" placeholder="Input Harga Paket" required>
          </div>
          <div class="form-group">
            <label style="color: #12389F; font-size: 17px;">Estimasi</label>
            <input style="border: 1px solid rgba(18, 56, 137, 0.6); box-shadow: inset -2px -2px rgba(18, 56, 137, 0.6); border-radius: 10px;" type="text" name="estimasi" value="<?= $data['estimasi']; ?>" class="form-control" placeholder="Input Estimasi" required>
          </div>
          <div class="form-group">
            <label style="color: #12389F; font-size: 17px;">Gambar</label>
            <input style="border: 1px solid rgba(18, 56, 137, 0.6); box-shadow: inset -2px -2px rgba(18, 56, 137, 0.6); border-radius: 10px; height: 45px; margin-bottom: 10px;" type="file" name="gambar" value="<?= $data['gambar']; ?>" class="form-control">
            <img src="<?= base_url('img/service/') . $data['gambar'] ?>" alt="" width="200">
          </div>

          <div class="form-group">
            <button type="submit" class="btn" style="color: white; background-color: #12389F; box-shadow: inset -3px -3px rgba(0, 0, 0, 0.4)">Update</button>
            <a href="<?= base_url('paket') ?>" class="btn" style="color: white; background-color: #c90000; box-shadow: inset -3px -3px rgba(0, 0, 0, 0.4)">Batal</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>

</html>