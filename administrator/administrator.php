           
<?php

session_start();

if (!isset($_SESSION["login_user"])){
    header("Location:index.php");
    exit;
    
}
require 'header.php';
require 'sidebar.php';

?>

<div class="card row ml-5 mr-5">
  <!-- Header -->
    <!-- Header -->
    <div class="header pb-6 d-flex align-items-center" style="min-height: 500px; background-image: url(); background-size: cover; background-position: center top;">
      <!-- Mask -->
      <span class="mask bg-gradient-default opacity-8"></span>
      <!-- Header container -->
      <div class="container-fluid d-flex align-items-center">
        <div class="row">
          <div class="col-lg-7 col-md-10">
            <h1 class="display-2 text-white">Hello Jesse</h1>
            <p class="text-white mt-0 mb-5">This is your profile page. You can see the progress you've made with your work and manage your projects or assigned tasks</p>
            <a href="#!" class="btn btn-neutral">Cek Toko</a>
            <a href="#!" class="btn btn-neutral">Cek Order</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
  

       

<?php
require 'footer.php';
?>