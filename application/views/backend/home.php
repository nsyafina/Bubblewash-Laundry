<!-- Begin Page Content -->
<div class="container-fluid">

 <!-- Content Row -->
 <div class="row">

  <div class="col-xl-6 col-md-4 mb-4">
    <div class="card h-100 py-2 bg-selamat">
     <div class="card-body">
       <div class="row no-gutters align-items-center">
         <img src="img/logo/short_logo.jpg" class="img-selamat">
         <div class="col mr-2">
          <div class="text-md font-weight-bold text-white text-uppercase mb-1 teks-selamat" style="margin-left: 125px; margin-top: 10px;">Selamat Datang Admin!</div>
          <div class="text-md font-weight text-white mb-1 teks-selamat" style="margin-left: 125px;">Selamat Datang & Selamat Bekerja <strong>^.^</strong></div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
  <div class="card shadow h-100 py-2" style="background-image: linear-gradient( rgba(18, 56, 137, 0.4), white); border-left: 2px solid #12389F; border-right: 2px solid #12389F;">
   <div class="card-body">
    <div class="row no-gutters align-items-center">
     <div class="col mr-2">
      <div class="text-xs font-weight-bold text-uppercase mb-1" style="color: #12389F; font-size: 16px; -webkit-text-stroke: 1px rgba(0, 0, 0, 0.1);">Total Transaksi Kiloan
      </div>
      <div class="row no-gutters align-items-center">
       <div class="col-auto">
        <div class="h2 mb-0 mr-3 font-weight-bold" style="color: #12389F; -webkit-text-stroke: 1px rgba(0, 0, 0, 0.1);"><?= $total_transaksi ?></div>
      </div>
    </div>
  </div>
  <div class="col-auto">
    <i class="fas fa-dollar-sign fa-3x mt-3" style="color: #12389F;"></i>
  </div>
</div>
</div>
</div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
 <div class="card shadow h-100 py-2" style="background-image: linear-gradient( rgba(18, 56, 137, 0.4), white); border-left: 2px solid #12389F; border-right: 2px solid #12389F;">
   <div class="card-body">
    <div class="row no-gutters align-items-center">
     <div class="col mr-2">
      <div class="text-xs font-weight-bold text-uppercase mb-1" style="color: #12389F; font-size: 16px; -webkit-text-stroke: 1px rgba(0, 0, 0, 0.1);">
      Total Transaksi Satuan</div>
      <div class="h2 mb-0 font-weight-bold" style="color: #12389F; -webkit-text-stroke: 1px rgba(0, 0, 0, 0.1);"><?= $total_transaksi_satuan ?></div>
    </div>
    <div class="col-auto">
      <i class="fas fa-dollar-sign fa-3x mt-3" style="color: #12389F;"></i>
    </div>
  </div>
</div>
</div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
  <div class="card shadow h-100 py-2" style="background-image: linear-gradient( rgba(201, 0, 0, 0.3), white) ; border-left: 2px solid #C90000; border-right: 2px solid #C90000; -webkit-text-stroke: 1px rgba(0, 0, 0, 0.1);">
   <div class="card-body">
    <div class="row no-gutters align-items-center">
     <div class="col mr-2">
      <div class="text-xs font-weight-bold text-uppercase mb-1" style="color: #C90000; font-size: 16px;">
      Pesanan Baru Kiloan</div>
      <div class="h2 mb-0 font-weight-bold" style="color: #C90000; -webkit-text-stroke: 1px rgba(0, 0, 0, 0.1);"><?= $transaksi_baru ?></div>
    </div>
    <div class="col-auto">
     <i class="fas fa-download fa-3x mt-3" style="color: #C90000;"></i>
   </div>
 </div>
</div>
</div>
</div>

<!-- Pending Requests Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
  <div class="card shadow h-100 py-2" style="background-image: linear-gradient( rgba(255, 165, 0, 0.3), white); border-left: 2px solid orange; border-right: 2px solid orange;">
   <div class="card-body">
    <div class="row no-gutters align-items-center">
     <div class="col mr-2">
      <div class="text-xs font-weight-bold text-uppercase mb-1" style="color: orange; font-size: 15px; -webkit-text-stroke: 1px rgba(0, 0, 0, 0.1);">
      Pesanan Proses Kiloan</div>
      <div class="h2 mb-0 font-weight-bold" style="color: orange; -webkit-text-stroke: 1px rgba(0, 0, 0, 0.1);"><?= $transaksi_proses ?></div>
    </div>
    <div class="col-auto">
     <i class="fas fa-undo fa-3x mt-3" style="color: orange"></i>
   </div>
 </div>
</div>
</div>
</div>

<div class="col-xl-3 col-md-6 mb-4">
  <div class="card shadow h-100 py-2" style="background-image: linear-gradient( rgba(12, 213, 241, 0.3), white); border-left: 2px solid #0CD5F1; border-right: 2px solid #0CD5F1;">
   <div class="card-body">
     <div class="row no-gutters align-items-center">
       <div class="col mr-2">
        <div class="text-xs font-weight-bold text-uppercase mb-1" style="color: #0CD5F1; font-size: 15px; ; -webkit-text-stroke: 1px rgba(0, 0, 0, 0.1);">
        Pesanan Ready Kiloan</div>
        <div class="h2 mb-0 font-weight-bold" style="color: #0CD5F1; -webkit-text-stroke: 1px rgba(0, 0, 0, 0.1);"><?= $transaksi_siap_diambil ?></div>
      </div>
      <div class="col-auto">
        <i class="fas fa-dollar-sign fa-3x mt-3" style="color: #0CD5F1"></i>
      </div>
    </div>
  </div>
</div>
</div>

<div class="col-xl-3 col-md-6 mb-4">
  <div class="card shadow h-100 py-2" style="background-image: linear-gradient( rgba(2, 215, 2, 0.3), white); border-left: 2px solid #02D702; border-right: 2px solid #02D702;">
   <div class="card-body">
     <div class="row no-gutters align-items-center">
       <div class="col mr-2">
        <div class="text-xs font-weight-bold text-uppercase mb-1" style="color: #02D702; font-size: 15px; ;-webkit-text-stroke: 1px rgba(0, 0, 0, 0.1);">
         Pesanan Selesai Kiloan</div>
         <div class="h2 mb-0 font-weight-bold" style="color: #02D702 ;-webkit-text-stroke: 1px rgba(0, 0, 0, 0.1);"><?= $transaksi_selesai ?></div>
       </div>
       <div class="col-auto">
         <i class="fas fa-check fa-3x mt-3" style="color: #02D702"></i>
       </div>
     </div>
   </div>
 </div>
</div>



<!-- Pending Requests Card Example -->

</div>

<div class="row">
 <div class="col-xl-3 col-md-6 mb-4">
   <div class="card shadow h-100 py-2" style="background-image: linear-gradient( rgba(201, 0, 0, 0.3), white) ; border-left: 2px solid #C90000; border-right: 2px solid #C90000;">
     <div class="card-body">
       <div class="row no-gutters align-items-center">
         <div class="col mr-2">
          <div class="text-xs font-weight-bold text-uppercase mb-1" style="color: #C90000; font-size: 16px; ; -webkit-text-stroke: 1px rgba(0, 0, 0, 0.1);">Pesanan Baru Satuan</div>
          <div class="h2 mb-0 font-weight-bold" style="color: #C90000 ; -webkit-text-stroke: 1px rgba(0, 0, 0, 0.1);"><?= $transaksi_baru_satuan ?></div>
        </div>
        <div class="col-auto">
         <i class="fas fa-download fa-3x mt-3" style="color: #C90000"></i>
       </div>
     </div>
   </div>
 </div>
</div>

<div class="col-xl-3 col-md-6 mb-4">
 <div class="card shadow h-100 py-2" style="background-image: linear-gradient( rgba(255, 165, 0, 0.3), white); border-left: 2px solid orange; border-right: 2px solid orange;">
   <div class="card-body">
     <div class="row no-gutters align-items-center">
       <div class="col mr-2">
         <div class="text-xs font-weight-bold text-uppercase mb-1" style="color: orange; font-size: 15px; ; -webkit-text-stroke: 1px rgba(0, 0, 0, 0.1);">
         Pesanan Proses Satuan</div>
         <div class="h2 mb-0 font-weight-bold" style="color: orange ; -webkit-text-stroke: 1px rgba(0, 0, 0, 0.1);"><?= $transaksi_proses_satuan ?></div>
       </div>
       <div class="col-auto">
         <i class="fas fa-undo fa-3x mt-3" style="color: orange"></i>
       </div>
     </div>
   </div>
 </div>
</div>

<div class="col-xl-3 col-md-6 mb-4">
 <div class="card shadow h-100 py-2" style="background-image: linear-gradient( rgba(12, 213, 241, 0.3), white); border-left: 2px solid #0CD5F1; border-right: 2px solid #0CD5F1;">
   <div class="card-body">
     <div class="row no-gutters align-items-center">
       <div class="col mr-2">
         <div class="text-xs font-weight-bold text-uppercase mb-1" style="color: #0CD5F1; font-size: 15px; ; -webkit-text-stroke: 1px rgba(0, 0, 0, 0.1);">
         Pesanan Ready Satuan</div>
         <div class="h2 mb-0 font-weight-bold" style="color: #0CD5F1 ; -webkit-text-stroke: 1px rgba(0, 0, 0, 0.1);"><?= $transaksi_siap_diambil_satuan ?></div>
       </div>
       <div class="col-auto">
         <i class="fas fa-dollar-sign fa-3x mt-3" style="color: #0CD5F1"></i>
       </div>
     </div>
   </div>
 </div>
</div>

<div class="col-xl-3 col-md-6 mb-4">
 <div class="card shadow h-100 py-2" style="background-image: linear-gradient( rgba(2, 215, 2, 0.3), white); border-left: 2px solid #02D702; border-right: 2px solid #02D702;">
   <div class="card-body">
     <div class="row no-gutters align-items-center">
       <div class="col mr-2">
         <div class="text-xs font-weight-bold text-uppercase mb-1" style="color: #02D702; font-size: 15px; ; -webkit-text-stroke: 1px rgba(0, 0, 0, 0.1);">
         Pesanan Selesai Satuan</div>
         <div class="h2 mb-0 font-weight-bold" style="color: #02D702 ; -webkit-text-stroke: 1px rgba(0, 0, 0, 0.1);"><?= $transaksi_selesai_satuan ?></div>
       </div>
       <div class="col-auto">
         <i class="fas fa-check fa-3x mt-3" style="color: #02D702"></i>
       </div>
     </div>
   </div>
 </div>
</div>
</div>

<div class="row">
  <div class="col-xl-3 col-md-6 mb-4">
   <div class="card shadow h-100 py-2" style="background-image: linear-gradient( rgba(18, 56, 137, 0.4), white); border-left: 2px solid #12389F; border-right: 2px solid #12389F;">
     <div class="card-body">
      <div class="row no-gutters align-items-center">
       <div class="col mr-2">
         <div class="text-xs font-weight-bold text-uppercase mb-1" style="color: #12389F; font-size: 16px; ; -webkit-text-stroke: 1px rgba(0, 0, 0, 0.1);">
         Jumlah Konsumen</div>
         <div class="h2 mb-0 font-weight-bold" style="color: #12389F; ; -webkit-text-stroke: 1px rgba(0, 0, 0, 0.1);"><?= $total_konsumen ?></div>
       </div>
       <div class="col-auto">
         <i class="fas fa-users fa-3x mt-3" style="color: #12389F;"></i>
       </div>
     </div>
   </div>
 </div>
</div>
<div class="col-xl-3 col-md-6 mb-4">
 <div class="card shadow h-100 py-2" style="background-image: linear-gradient( rgba(18, 56, 137, 0.4), white); border-left: 2px solid #12389F; border-right: 2px solid #12389F;">
   <div class="card-body">
     <div class="row no-gutters align-items-center">
       <div class="col mr-2">
         <div class="text-xs font-weight-bold text-uppercase mb-1" style="color: #12389F; font-size: 16px; ; -webkit-text-stroke: 1px rgba(0, 0, 0, 0.1);">
         Data Jenis Barang</div>
         <div class="h2 mb-0 font-weight-bold" style="color: #12389F; ; -webkit-text-stroke: 1px rgba(0, 0, 0, 0.1);"><?= $data_jenis_barang ?></div>
       </div>
       <div class="col-auto">
         <i class="fas fa-box-open fa-3x mt-3" style="color: #12389F;"></i>
       </div>
     </div>
   </div>
 </div>
</div>

<div class="col-xl-3 col-md-6 mb-4">
 <div class="card shadow h-100 py-2" style="background-image: linear-gradient( rgba(18, 56, 137, 0.4), white); border-left: 2px solid #12389F; border-right: 2px solid #12389F;">
   <div class="card-body">
    <div class="row no-gutters align-items-center">
     <div class="col mr-2">
       <div class="text-xs font-weight-bold text-uppercase mb-1" style="color: #12389F; font-size: 16px; ; -webkit-text-stroke: 1px rgba(0, 0, 0, 0.1);">
       Data Paket</div>
       <div class="h2 mb-0 font-weight-bold" style="color: #12389F; ; -webkit-text-stroke: 1px rgba(0, 0, 0, 0.1);"><?= $data_paket ?></div>
     </div>
     <div class="col-auto">
      <i class="fas fa-box-open fa-3x mt-3" style="color: #12389F;"></i>
    </div>
  </div>
</div>
</div>
</div>


</div>
<!-- Content Row -->

<div class="row">

 <!-- Area Chart -->
 <div class="col-xl-8 col-lg-7">

 </div>

 <!-- Pie Chart -->
 <div class="col-xl-4 col-lg-5">

 </div>
</div>

<!-- Content Row -->
<div class="row">

 <!-- Content Column -->
 <div class="col-lg-6 mb-4">





 </div>

 <div class="col-lg-6 mb-4">





 </div>
</div>

</div>
 <!-- /.container-fluid -->