 



<?php

$conn = mysqli_connect("localhost","root","","tokoku");

if (mysqli_connect_errno()){
    echo "koneksi gagal".mysqli_connect_error();
    exit();
}





 $perPage = 8 ;        //perhalaman
 $page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] :1 ;

 $start = ($page>1) ? ($page * $perPage) - $perPage :0;    

  
 $article = "SELECT * FROM produk LIMIT $start, $perPage";
 $result2 = mysqli_query($conn,$article);

 $all = "SELECT * FROM produk";
 $result = mysqli_query($conn,$all);
 $total = mysqli_num_rows($result);


 $pages = ceil($total/$perPage);

 
?>

<?php while($row = mysqli_fetch_assoc($result2)) { ?>

<p><?= $row ["nama"];?></p>

<?php }?>



<div class="card-footer py-4">
              <nav aria-label="...">
                <ul class="pagination justify-content-end mb-0">
                  <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">
                      <i class="fas fa-angle-left"></i>
                      <span class="sr-only">Previous</span>
                    </a>
                  </li>
                  <li class="page-item active"> 	

            <?php for($i=1; $i<=$pages; $i++){ ?>

                      <a href="?halaman= <?= $i?> "> <?= $i?> </a>
                      
            <?php }?>
                  </li>
                      <span class="sr-only">Next</span>
                    </a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>


    
