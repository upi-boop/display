            
<?php


session_start();

if (!isset($_SESSION["login_user"])){
    header("Location:index.php");
    exit;
    
}

require 'header.php';
require 'sidebar.php';
require 'proses/koneksi.php';



?>
  
  

   

  <!-- HTML5 inputs -->
     <div class="card row ml-8 mr-8">
              <!-- Card header -->
              <div class="card-header">
                <h3 class="mb-0">Tambah Produk</h3>
              </div>
              <!-- Card body -->
              <div class="card-body">
                <form action="proses/act-tambah-produk.php" method="POST" enctype="multipart/form-data">
                  <div class="form-group row">
                    <label  class="col-md-2 col-form-label form-control-label">Nama Produk</label>
                    <div class="col-md-10">
                      <input class="form-control" type="text" name="nama" placeholder="Nama" >
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-md-2 col-form-label form-control-label">Harga</label>
                    <div class="col-md-10">
                      <input class="form-control" type="text" name="harga" placeholder="Harga">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-md-2 col-form-label form-control-label">Deskripsi</label>
                    <div class="col-md-10">
                    <textarea class="form-control" name="deskripsi" type ="text" rows="3" placeholder="Deskripsi"></textarea>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-md-2 col-form-label form-control-label">Gambar</label>
                    <div class="col-md-10">
                      <input class="form-control" type="file" name="foto">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-md-2 col-form-label form-control-label">Kode Barang</label>
                    <div class="col-md-10">
                      <input class="form-control" type="text" name="kode" placeholder="Kode barang">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-md-2 col-form-label form-control-label">Link Pembelian</label>
                    <div class="col-md-10">
                      <input class="form-control" type="text" name="link">
                    </div>
                  </div>
                  <div class="col-lg-12 text-right">
                  <button class="btn btn-primary" type="submit" name="submit">Tambah</button>
                  </div>


                </form>
              </div>
            </div>
          </div>
        </div>


      
<?php
require 'footer.php';
?>