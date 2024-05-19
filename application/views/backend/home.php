<!-- Begin Page Content -->
 <div class="container-fluid">

   <!-- Page Heading -->
   <div class="d-sm-flex align-items-center justify-content-between mb-4">
     <h1 class="h3 mb-0 text-gray-800"><i class="fas fa-fw fa-tachometer-alt"></i> Dashboard</h1>

   </div>

   <!-- Content Row -->
   <div class="row">

    <div class="col-xl-6 col-md-4 mb-4">
       <div class="card border-left-info h-100 py-2 bg-selamat">
         <div class="card-body">
           <div class="row no-gutters align-items-center">
               <img src="img/logo/short_logo.jpg" class="img-selamat">
             <div class="col mr-2">
               <div class="text-md font-weight-bold text-white text-uppercase mb-1 teks-selamat" style="margin-left: 100px;">Selamat Datang Admin!</div>
               <div class="text-md font-weight text-white mb-1 teks-selamat" style="margin-left: 100px;">Selamat Datang & Selamat Bekerja <strong>^.^</strong></div>
             </div>
           </div>
         </div>
       </div>
     </div>

     <!-- Earnings (Monthly) Card Example -->
     <div class="col-xl-3 col-md-6 mb-4">
       <div class="card border-left-primary shadow h-100 py-2">
         <div class="card-body">
          <div class="row no-gutters align-items-center">
             <div class="col mr-2">
               <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Transaksi Kiloan
               </div>
               <div class="row no-gutters align-items-center">
                 <div class="col-auto">
                   <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?= $total_transaksi ?></div>
                 </div>
               </div>
             </div>
             <div class="col-auto">
              <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
             </div>
           </div>
         </div>
       </div>
     </div>

     <!-- Earnings (Monthly) Card Example -->
     <div class="col-xl-3 col-md-6 mb-4">
       <div class="card border-left-primary shadow h-100 py-2">
         <div class="card-body">
          <div class="row no-gutters align-items-center">
             <div class="col mr-2">
               <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                 Total Transaksi Satuan</div>
               <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $total_transaksi_satuan ?></div>
             </div>
             <div class="col-auto">
               <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
             </div>
           </div>
         </div>
       </div>
     </div>

     <!-- Earnings (Monthly) Card Example -->
     <div class="col-xl-3 col-md-6 mb-4">
       <div class="card border-left-danger shadow h-100 py-2">
         <div class="card-body">
          <div class="row no-gutters align-items-center">
             <div class="col mr-2">
               <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                 Pesanan Baru Kiloan</div>
               <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $transaksi_baru ?></div>
             </div>
             <div class="col-auto">
               <i class="fas fa-download fa-2x text-gray-300"></i>
             </div>
           </div>
         </div>
       </div>
     </div>

     <!-- Pending Requests Card Example -->
     <div class="col-xl-3 col-md-6 mb-4">
       <div class="card border-left-warning shadow h-100 py-2">
         <div class="card-body">
          <div class="row no-gutters align-items-center">
             <div class="col mr-2">
               <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                 Pesanan Proses Kiloan</div>
               <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $transaksi_proses ?></div>
             </div>
             <div class="col-auto">
               <i class="fas fa-undo fa-2x text-gray-300"></i>
             </div>
           </div>
         </div>
       </div>
     </div>

     <div class="col-xl-3 col-md-6 mb-4">
       <div class="card border-left-info shadow h-100 py-2">
         <div class="card-body">
           <div class="row no-gutters align-items-center">
             <div class="col mr-2">
               <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                 Pesanan Ready Kiloan</div>
               <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $transaksi_siap_diambil ?></div>
             </div>
             <div class="col-auto">
               <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
             </div>
           </div>
         </div>
       </div>
     </div>

     <div class="col-xl-3 col-md-6 mb-4">
       <div class="card border-left-success shadow h-100 py-2">
         <div class="card-body">
           <div class="row no-gutters align-items-center">
             <div class="col mr-2">
               <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                 Pesanan Selesai Kiloan</div>
               <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $transaksi_selesai ?></div>
             </div>
             <div class="col-auto">
               <i class="fas fa-check fa-2x text-gray-300"></i>
             </div>
           </div>
         </div>
       </div>
     </div>

     

     <!-- Pending Requests Card Example -->
     
   </div>

   <div class="row">
     <div class="col-xl-3 col-md-6 mb-4">
       <div class="card border-left-danger shadow h-100 py-2">
         <div class="card-body">
           <div class="row no-gutters align-items-center">
             <div class="col mr-2">
               <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                 Pesanan Baru Satuan</div>
               <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $transaksi_baru_satuan ?></div>
             </div>
             <div class="col-auto">
               <i class="fas fa-download fa-2x text-gray-300"></i>
             </div>
           </div>
         </div>
       </div>
     </div>

     <div class="col-xl-3 col-md-6 mb-4">
       <div class="card border-left-warning shadow h-100 py-2">
         <div class="card-body">
           <div class="row no-gutters align-items-center">
             <div class="col mr-2">
               <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                 Pesanan Proses Satuan</div>
               <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $transaksi_proses_satuan ?></div>
             </div>
             <div class="col-auto">
               <i class="fas fa-undo fa-2x text-gray-300"></i>
             </div>
           </div>
         </div>
       </div>
     </div>

     <div class="col-xl-3 col-md-6 mb-4">
       <div class="card border-left-info shadow h-100 py-2">
         <div class="card-body">
           <div class="row no-gutters align-items-center">
             <div class="col mr-2">
               <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                 Pesanan Ready Satuan</div>
               <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $transaksi_siap_diambil_satuan ?></div>
             </div>
             <div class="col-auto">
               <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
             </div>
           </div>
         </div>
       </div>
     </div>

     <div class="col-xl-3 col-md-6 mb-4">
       <div class="card border-left-success shadow h-100 py-2">
         <div class="card-body">
           <div class="row no-gutters align-items-center">
             <div class="col mr-2">
               <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                 Pesanan Selesai Satuan</div>
               <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $transaksi_selesai_satuan ?></div>
             </div>
             <div class="col-auto">
               <i class="fas fa-check fa-2x text-gray-300"></i>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>

   <div class="row">
    <div class="col-xl-3 col-md-6 mb-4">
       <div class="card border-left-primary shadow h-100 py-2">
         <div class="card-body">
          <div class="row no-gutters align-items-center">
             <div class="col mr-2">
               <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                Jumlah Konsumen</div>
               <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $total_konsumen ?></div>
             </div>
             <div class="col-auto">
               <i class="fas fa-users fa-2x text-gray-300"></i>
             </div>
           </div>
         </div>
       </div>
     </div>
     <div class="col-xl-3 col-md-6 mb-4">
       <div class="card border-left-primary shadow h-100 py-2">
         <div class="card-body">
           <div class="row no-gutters align-items-center">
             <div class="col mr-2">
               <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                 Data Jenis Barang</div>
               <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $data_jenis_barang ?></div>
             </div>
             <div class="col-auto">
               <i class="fas fa-box-open fa-2x text-gray-300"></i>
             </div>
           </div>
         </div>
       </div>
     </div>
     
     <div class="col-xl-3 col-md-6 mb-4">
       <div class="card border-left-primary  shadow h-100 py-2">
         <div class="card-body">
          <div class="row no-gutters align-items-center">
             <div class="col mr-2">
               <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                 Data Paket</div>
               <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $data_paket ?></div>
             </div>
             <div class="col-auto">
               <i class="fas fa-box-open fa-2x text-gray-300"></i>
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