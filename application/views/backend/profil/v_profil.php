<!-- Begin Page Content -->
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-6 justify-content-x">
      <?= $this->session->flashdata('pesan'); ?>
    </div>
  </div>
  <div class="card mb-2" style="max-width: 540px;">
    <div class="row no-gutters">
      <div class="col-md-4">
        <img src="<?= base_url('img/profile/') .
        $user->image; ?>" class="card-img" style="border-radius: 0px;" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body" style="background-image: linear-gradient(#000080, #64B8ED);">
          <h4 class="card-title" style="color: white"><?= $user->username;?></h4>
          <p class="card-text" style="color: white;">Jadi member sejak: <br><b><?= date(
            'd F Y', $user->tanggal_input
            ); ?></b></p>
            <a href="<?= base_url('user/ubahProfil'); ?>" class="btn" style="background-color: #12389F; color: white;"><i class="fas fa-user-edit"></i> Ubah
            Profil</a>
          </div>
        </div>
      </div>
    </div>
    <!-- /.container-fluid -->
  </div>
<!-- End of Main Content -->