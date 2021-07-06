 <!-- Chart JS -->
 <script src="<?= base_url('assets/plugins/chart.js/chart.bundle.js'); ?>"></script>
 <!-- Page-Title -->
 <div class="row">
     <div class="col-sm-12">
         <div class="page-title-box">
             <div class="btn-group float-right">
                 <ol class="breadcrumb hide-phone p-0 m-0">
                     <li class="breadcrumb-item"><a href="#">Menu</a></li>
                     <li class="breadcrumb-item active">Dashboard</li>
                 </ol>
             </div>
             <h4 class="page-title">Dashboard</h4>
         </div>
     </div>
 </div>
 <!-- end page title end breadcrumb -->


 <div class="row">
     <div class="col-12">
         <div class="card-box">
             <h4 class="header-title mb-4">Overview</h4>

             <div class="text-center mt-4 mb-4">
                 <div class="row">
                     <div class="col-md-6 col-xl-3">
                         <div class="card-box widget-flat border-custom bg-custom text-white">
                             <i class="fa fa-user-o"></i>
                             <h3 class="m-b-10">100</h3>
                             <p class="text-uppercase m-b-5 font-13 font-600">Total Kunjungan</p>
                         </div>
                     </div>
                     <div class="col-md-6 col-xl-3">
                         <div class="card-box bg-primary widget-flat border-primary text-white">
                             <i class="fi-archive"></i>
                             <h3 class="m-b-10">32</h3>
                             <p class="text-uppercase m-b-5 font-13 font-600">Total Produk</p>
                         </div>
                     </div>
                     <div class="col-md-6 col-xl-3">
                         <div class="card-box widget-flat border-success bg-success text-white">
                             <i class="fa fa-money"></i>
                             <h3 class="m-b-10">Rp. 1,000,000</h3>
                             <p class="text-uppercase m-b-5 font-13 font-600">Total Penjualan</p>
                         </div>
                     </div>
                     <div class="col-md-6 col-xl-3">
                         <div class="card-box bg-danger widget-flat border-danger text-white">
                             <i class="fa fa-list-alt"></i>
                             <h3 class="m-b-10">250</h3>
                             <p class="text-uppercase m-b-5 font-13 font-600">Total Pesanan</p>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- end row -->



 <div class="row">
     <div class="col-xl-6">
         <div class="card-box">
             <h4 class="header-title">Pesanan Terlaris</h4>

             <div class="table-responsive">
                 <table class="table table-hover table-centered m-0">

                     <thead>
                         <tr>
                             <th>Nama Produk</th>
                             <th>Kategori</th>
                             <th>Harga</th>
                             <th>Total Pesanan</th>
                         </tr>
                     </thead>
                     <tbody>
                         <tr>
                             <td>
                                 <h5 class="m-0 font-weight-normal">Tonkotsu Ramen</h5>
                             </td>

                             <td>
                                 Makanan Utama
                             </td>

                             <td>
                                 Rp. 70,000
                             </td>

                             <td>
                                 150
                             </td>
                         </tr>

                         <tr>

                             <td>
                                 <h5 class="m-0 font-weight-normal">Nasi Goreng</h5>
                             </td>

                             <td>
                                 Makanan Utama
                             </td>

                             <td>
                                 Rp. 25,000
                             </td>

                             <td>
                                 125
                             </td>
                         </tr>
                         <tr>

                             <td>
                                 <h5 class="m-0 font-weight-normal">Chicken Udon</h5>
                             </td>

                             <td>
                                 Makanan Utama
                             </td>

                             <td>
                                 Rp. 60,000
                             </td>

                             <td>
                                 100
                             </td>
                         </tr>
                         <tr>

                             <td>
                                 <h5 class="m-0 font-weight-normal">Chicken Katsu Ramen</h5>
                             </td>

                             <td>
                                 Makanan Utama
                             </td>

                             <td>
                                 Rp. 60,000
                             </td>

                             <td>
                                 75
                             </td>
                         </tr>
                         <tr>

                             <td>
                                 <h5 class="m-0 font-weight-normal">Pecel Lele</h5>
                             </td>

                             <td>
                                 Makanan Utama
                             </td>

                             <td>
                                 Rp. 15,000
                             </td>

                             <td>
                                 50
                             </td>
                         </tr>

                     </tbody>
                 </table>
             </div>

         </div>
     </div>

     <div class="col-xl-6">
         <div class="card-box">
             <h4 class="header-title">Grafik Penjualan Tahun 2021</h4>
             <canvas id="bar" height="350" class="mt-4"></canvas>

         </div>
     </div>
 </div>
 <!-- end row -->