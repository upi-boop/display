        
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



<div class="card row ml-5 mr-5">
        <!-- Card header -->
        <div class="card-header border-0">
          <div class="row">
            <div class="col-6">
              <h3 class="mb-0">Produk Active</h3>
            </div>
            <div class="col-6 text-right">
              <a href="tambah-produk.php" class="btn btn-sm btn-neutral btn-round btn-icon" data-toggle="tooltip" data-original-title="Edit product">
                <span class="btn-inner--icon"><i class="fas fa-user-edit"></i></span>
                <span class="btn-inner--text">Tambah Produk</span>
              </a>
            </div>
          </div>
        </div>
        <!-- Light table -->
        <div class="table-responsive">
          <table class="table align-items-center table-flush">
            <thead class="thead-light">
              <tr>
                <th>No</th>
                <th>Gambar</th>
                <th>Nama Produk</th>
                <th>Harga</th>
                <th>Deskripsi</th>
                <th>Kode Barang</th>
                <th>Link</th>
                <th></th>
              </tr>
            </thead>
      <?php 
		 
     $no = 1;

    //  pagination 
          $perPage = 8 ;        //perhalaman
          $page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] :1 ;

          $start = ($page>1) ? ($page * $perPage) - $perPage :0;    

            
          $article = "SELECT * FROM produk LIMIT $start, $perPage";
          $result2 = mysqli_query($conn,$article);

          $all = "SELECT * FROM produk";
          $result = mysqli_query($conn,$all);
          $total = mysqli_num_rows($result);


          $pages = ceil($total/$perPage);


		   
          while($row = mysqli_fetch_assoc($result2)) {
          
			?>
            <tbody>
              <tr>
                <td class="table-user">
                 <?= $no++;?>
                </td>
                <td class="table-user">
                <img src="../img/<?= $row['foto']; ?>" width="50">
                </td>
                <td class="table-user">
                 <?= $row['nama'];?>
                </td>
                <td class="table-user">
                 <?= $row['harga'];?>
                </td>
                <td class="table-user">
                 <?= $row['deskripsi'];?>
                </td>
                <td class="table-user">
                <?= $row['kode'];?>
                </td>
                <td class="table-user">
                <?= $row['link'];?>
                </td>
          
                <td class="table-actions">
                  <a href="update-produk.php?id=<?= $row['id'];?>" class="table-action" data-toggle="tooltip" data-original-title="Edit product">
                    <i class="fas fa-user-edit"></i>
                  </a>
                  <a href="proses/act-hapus-produk.php?id=<?= $row['id'];?>" class="table-action table-action-delete" data-toggle="tooltip" data-original-title="Delete product">
                    <i class="fas fa-trash"></i>
                  </a>
                </td>
              </tr>
            </tbody>
        <?php }; ?>
          </table>
         
        </div>
      </div>
      
      
<div class="card-footer py-4">
              <nav aria-label="...">
                <ul class="pagination justify-content-end mb-0">
                 

            <?php for($i=1; $i<=$pages; $i++){ ?>

              <li class="page-item active"> 
            <a class="page-link" href="?halaman= <?= $i?> "> <?= $i?><span class="sr-only">(current)</span> </a>
                
            </li>
            <?php }?>
                  <li class="page-item">
                    <a class="page-link" href="">
                  <i class="fas fa-angle-right"></i>
                      <span class="sr-only">Next</span>
                    </a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>

<?php
            
require 'footer.php';
?>