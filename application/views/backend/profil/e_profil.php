<!-- Begin Page Content -->
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-9">
      <?= form_open_multipart('user/ubahprofil'); ?>
      <div class="form-group row">
        <label for="username" class="col-sm-2 col-form-label" style="color: #12389F;">Username</label>
        <div class="col-sm-10">
          <input style="border: 1px solid rgba(18, 56, 137, 0.6); box-shadow: inset -2px -2px rgba(18, 56, 137, 0.6); border-radius: 10px;" type="text" class="form-control" id="username" name="username" value="<?= $user->username; ?>">
          <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
      </div>
      <div class="form-group row">
        <div class="col-sm-2" style="color: #12389F;">Gambar</div>
        <div class="col-sm-10">
          <div class="row">
            <div class="col-sm-3">
              <img src="<?= base_url('img/profile/') . $user->image; ?>" class="img-thumbnail" style="border: 1px solid #12389F;" alt="Profile Image">
            </div>
            <div class="col-sm-9">
              <div class="custom-file">
                <input style="border: 1px solid rgba(18, 56, 137, 0.6); box-shadow: inset -2px -2px rgba(18, 56, 137, 0.6); border-radius: 10px;" type="file" class="custom-file-input" id="image" name="image">
                <label style="border: 1px solid rgba(18, 56, 137, 0.6); box-shadow: inset -2px -2px rgba(18, 56, 137, 0.6); border-radius: 10px;" class="custom-file-label" for="image">Pilih file</label>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="form-group row justify-content-end">
        <div class="col-sm-10">
          <div class="row">
            <div class="col-sm-2">
              <button type="submit" class="btn btn-block" style="color: white; background-color: #12389F; box-shadow: inset -3px -3px rgba(0, 0, 0, 0.4)">Ubah</button>
            </div>
            <div class="col-sm-2">
              <button type="button" class="btn btn-block" style="color: white; background-color: #c90000; box-shadow: inset -3px -3px rgba(0, 0, 0, 0.4)" onclick="window.history.go(-1)">Kembali</button>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
<!-- /.container-fluid -->