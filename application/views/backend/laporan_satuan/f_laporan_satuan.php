<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>$judul</title>
</head>

<body>

  <div class="container-fluid">

    <div class="card shadow mb-4">
      <div class="card-body" style="border: 1px solid rgba(18, 56, 137, 0.4); box-shadow: inset -3px -3px rgba(18, 56, 137, 0.4); border-radius: 10px">
        <form action="<?= base_url('laporan_satuan/cetak_laporan_satuan'); ?>" method="post" class="form-user">
          <div class="form-group row">
            <label style="color: #12389F; font-size: 17px;" class="col-sm-2 col-form-label">Tanggal Mulai</label>
            <div class="col-sm-4">
              <input style="border: 1px solid rgba(18, 56, 137, 0.6); box-shadow: inset -2px -2px rgba(18, 56, 137, 0.6); border-radius: 10px;" type="date" name="tgl_mulai" class="form-control" required>
            </div>
          </div>

          <div class="form-group row">
            <label style="color: #12389F; font-size: 17px;" class="col-sm-2 col-form-label">Tanggal Akhir</label>
            <div class="col-sm-4">
              <input style="border: 1px solid rgba(18, 56, 137, 0.6); box-shadow: inset -2px -2px rgba(18, 56, 137, 0.6); border-radius: 10px;" type="date" name="tgl_akhir" class="form-control" required>
            </div>
          </div>

          <div class="form-group row">
            <label style="color: #12389F; font-size: 17px;" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-4">
              <button type="submit" class="btn" style="background-color: #12389F; color: white; box-shadow: inset -3px -3px rgba(0, 0, 0, 0.4);">Submit</button>
            </div>
          </div>

        </form>
      </div>
    </div>
  </div>

</body>

</html>