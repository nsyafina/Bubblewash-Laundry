<?php
//koneksi ke database
$koneksi = new mysqli("localhost","root","","laundry");
?>
<!------------------------------------------------------------ Service ------------------------------------------------------------>
<div class="container container-navtabs mt-3">
  <nav class="nav-layanan">
    <div class="nav nav-tabs" id="nav-tab" role="tablist">
      <button class="nav-link menu-layanan active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Unit Laundry</button>
      <button class="nav-link menu-layanan" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Package Laundry</button>
    </div>
  </nav>
</div>
<div class="tab-content" id="nav-tabContent">
  <!-- Unit -->
  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
    <div class="allservice mb-4">
      <h1 class="judul-layanan">─ Unit Laundry ─</h1>
      <div class="container mt-4 mb-5">
        <div class="row row-cols-1 row-cols-md-5 g-2">
          <?php $ambil = $koneksi->query("SELECT * FROM jenis"); ?>
          <?php while($perjenis = $ambil->fetch_assoc()){ ?>
            <div class="col">
              <div class="card layanan">
                <img src="img/service/<?php echo $perjenis['gambar'];?>" class="card-img-top img-layanan" alt="...">
                <div class="card-body body-layanan">
                  <h5 class="card-title title-layanan"><?php echo $perjenis['kode_jenis'];?> | <?php echo $perjenis['jenis_barang'];?></h5>
                  <p class="card-text harga-layanan">IDR. <?php echo number_format($perjenis['harga_jenis']);?>.-</p>
                </div>
              </div>
            </div>
          <?php } ?>
        </div>
      </div>
    </div>

  </div>
  <!-- Unit -->
  <!-- Package -->
  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
    <div class="allservice mb-4">
      <h1 class="judul-layanan">─ Package Laundry ─</h1>
      <div class="container mt-4 mb-5">
        <div class="row row-cols-1 row-cols-md-5 g-2">
          <?php $ambil = $koneksi->query("SELECT * FROM paket"); ?>
          <?php while($perpaket = $ambil->fetch_assoc()){ ?>
            <div class="col">
              <div class="card layanan">
                <img src="img/service/<?php echo $perpaket['gambar'];?>" class="card-img-top img-layanan" alt="...">
                <div class="card-body body-layanan">
                  <h5 class="card-title title-layanan"><?php echo $perpaket['nama_paket'];?></h5>
                  <p class="card-text harga-layanan">IDR. <?php echo number_format($perpaket['harga_paket']);?>.-</p>
                </div>
              </div>
            </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
  <!-- Package -->
</div>




