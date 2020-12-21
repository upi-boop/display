<?php
require 'koneksi.php';
    $id = $_GET["id"];

    if(hapus($id)>0){
            echo '<script type="text/javascript"> alert("berhasil"); </script>';
            header('Location:../produk.php');
        }else{
           echo '<script type="text/javascript"> alert("gagal"); </script>';
           header('Location:../produk.php');
        }

function hapus($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM produk WHERE id =$id");
    return mysqli_affected_rows($conn);
}
        