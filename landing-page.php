<?php
require 'autoload/header.php';
require 'administrator/proses/koneksi.php';


		 
$data = mysqli_query($conn,"SELECT * FROM produk ORDER BY id DESC");

?>

<nav id="navbar-main" class="navbar navbar-sticky navbar-horizontal navbar-main navbar-expand-lg navbar-light bg-primary ">
     <div class="container">
       <a class="navbar-brand " href="">
       <img src="11.jpg">
         <span class=" text-light">Toko Hijab Jual Helm</span>
       </a>
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
       </button>

       <form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main">
            <div class="form-group mb-0">
              <div class="input-group input-group-alternative input-group-merge">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-search"></i></span>
                </div>
                <input class="form-control" placeholder="Search" type="text">
              </div>
            </div>
            <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </form>
          
       <div class="navbar-collapse navbar-custom-collapse collapse" id="navbar-collapse">
         <div class="navbar-collapse-header">
           <div class="row">
             <div class="col-6 collapse-brand">
               <a href="pages/dashboards/dashboard.html">
                 <!-- <img src="11.jpg"> -->
                    <span class="nav-link-inner--text ">Toko Jilbab Jual Helm</span>
               </a>
             </div>
             
             <div class="col-6 collapse-close">
               <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                 <span></span>
                 <span></span>
               </button>
             </div>
           </div>
         </div>
         <!-- <ul class="navbar-nav mr-auto">
           <li class="nav-item">
             <a href="pages/dashboards/dashboard.html" class="nav-link">
               <span class="nav-link-inner--text">Dashboard</span>
             </a>
           </li>
           <li class="nav-item">
             <a href="pages/examples/pricing.html" class="nav-link">
               <span class="nav-link-inner--text">Pricing</span>
             </a>
           </li>
           <li class="nav-item">
             <a href="pages/examples/login.html" class="nav-link">
               <span class="nav-link-inner--text">Login</span>
             </a>
           </li>
           <li class="nav-item">
             <a href="pages/examples/register.html" class="nav-link">
               <span class="nav-link-inner--text">Register</span>
             </a>
           </li>
           <li class="nav-item">
             <a href="pages/examples/lock.html" class="nav-link">
               <span class="nav-link-inner--text">Lock</span>
             </a>
           </li>
         </ul>
         <hr class="d-lg-none" /> -->
         <ul class="navbar-nav align-items-lg-center ml-lg-auto">
           <li class="nav-item">
             <a class="nav-link nav-link-icon" href="https://www.facebook.com/creativetim" target="_blank" data-toggle="tooltip" title="" data-original-title="Like us on Facebook">
               <i class="fab fa-facebook-square"></i>
               <span class="nav-link-inner--text d-lg-none">Facebook</span>
             </a>
           </li>
           <li class="nav-item">
             <a class="nav-link nav-link-icon" href="https://www.instagram.com/creativetimofficial" target="_blank" data-toggle="tooltip" title="" data-original-title="Follow us on Instagram">
               <i class="fab fa-instagram"></i>
               <span class="nav-link-inner--text d-lg-none">Instagram</span>
             </a>
           </li>
           <li class="nav-item">
             <a class="nav-link nav-link-icon" href="https://twitter.com/creativetim" target="_blank" data-toggle="tooltip" title="" data-original-title="Follow us on Twitter">
               <i class="fab fa-twitter-square"></i>
               <span class="nav-link-inner--text d-lg-none">Twitter</span>
             </a>
           </li>
           <li class="nav-item">
             <a class="nav-link nav-link-icon" href="https://github.com/creativetimofficial" target="_blank" data-toggle="tooltip" title="" data-original-title="Star us on Github">
               <i class="fab fa-github"></i>
               <span class="nav-link-inner--text d-lg-none">Github</span>
             </a>
           </li>
          
         </ul>
       </div>
     </div>
   </nav>

<div class="main-content">
     <!-- Header -->
    <div class="header pt-5 pb-7" style="background-color: #ddd;">
        <div class="container-fluid">
            <div class="row text-center justify-content-center">
                <?php foreach($data as $d):  ?>
                <div class="row col-md-2">
                    <div class="card ml-2"  >
                    <img class="card-img-top" src="img/<?= $d['foto']; ?>">
                    <div class="card-body">
                    <h5 class="h2 card-title mb-0"><?= $d['nama'];?></h5>
                    <h2><span class="badge badge-primary ">Rp.<?= $d['harga'];?></span></h2>
                    <!-- <a href="#modal-default" class="btn btn-sm btn-success badge badge-pill">Detail</a> -->
                 
                    <a href="<?= $d['link']; ?>" class="btn btn-block btn-primary mb-2" role="button">Beli</a>
                    </div>     
                    </div>            
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
  </div>
    
           
    <section class="py-6 pb-9 bg-default"> 

   
    </section>


     <section class="section section-lg pt-lg-0 mt--7">
       <div class="container">
         <div class="row justify-content-center">
           <div class="col-lg-12">
             <div class="row">
               <div class="col-lg-4">
                 <div class="card card-lift--hover shadow border-0">
                   <div class="card-body py-5">
                     <div class="icon icon-shape bg-gradient-primary text-white rounded-circle mb-4">
                       <i class="ni ni-check-bold"></i>
                     </div>
                     <h4 class="h3 text-primary text-uppercase">REVIEW</h4>
                     <p class="description mt-3"> pengiriman nya juga cepat</p>
                     <div>
                       <span class="badge badge-pill badge-primary"></span>
                       <span class="badge badge-pill badge-primary"></span>
                       <span class="badge badge-pill badge-primary"></span>
                     </div>
                   </div>
                 </div>
               </div>
               <div class="col-lg-4">
                 <div class="card card-lift--hover shadow border-0">
                   <div class="card-body py-5">
                     <div class="icon icon-shape bg-gradient-success text-white rounded-circle mb-4">
                       <i class="ni ni-istanbul"></i>
                     </div>
                     <h4 class="h3 text-success text-uppercase">TESTIMONI</h4>
                     <p class="description mt-3">produknya keren.</p>
                     <div>
                       <span class="badge badge-pill badge-success"></span>
                       <span class="badge badge-pill badge-success"></span>
                       <span class="badge badge-pill badge-success"></span>
                     </div>
                   </div>
                 </div>
               </div>
               <div class="col-lg-4">
                 <div class="card card-lift--hover shadow border-0">
                   <div class="card-body py-5">
                     <div class="icon icon-shape bg-gradient-warning text-white rounded-circle mb-4">
                       <i class="ni ni-planet"></i>
                     </div>
                     <h4 class="h3 text-warning text-uppercase">PENGALAMAN</h4>
                     <p class="description mt-3">aku puas</p>
                     <div>
                       <span class="badge badge-pill badge-warning"></span>
                       <span class="badge badge-pill badge-warning"></span>
                       <span class="badge badge-pill badge-warning"></span>
                     </div>
                   </div>
                 </div>
               </div>
             </div>
           </div>
         </div>
       </div>
     </section>
</div>

<?php

require 'autoload/footer.php';