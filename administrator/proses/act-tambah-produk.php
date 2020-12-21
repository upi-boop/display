
<?php
require 'koneksi.php';

if(isset($_POST["submit"])){

    if(tambah($_POST)>0){
        echo "<script type='text/javascript'> alert('berhasil'); </script>";
        header('Location:../produk.php');
    }else{
       echo "<script type='text/javascript'> alert('gagal'); </script>";
       header('Location:../tambah-produk.php');
    }
}

function tambah($data){
    global $conn;

    $nama = htmlspecialchars($data["nama"]);
    $harga = htmlspecialchars($data["harga"]);
    $deskripsi = htmlspecialchars($data["deskripsi"]);

    // upload
    $foto = upload();
    if( !$foto ){
        return false;
    }

    $kode = htmlspecialchars($data["kode"]);
    $link = htmlspecialchars($data["link"]);


    $query = "INSERT INTO produk VALUES ('','$nama', '$harga', '$deskripsi', '$foto','$kode','$link')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function upload(){

    $namaFile = $_FILES['foto']['name'];
    $ukuranFile = $_FILES['foto']['size'];
    $error = $_FILES['foto']['error'];
    $tmpName = $_FILES['foto']['tmp_name'];

    // cek upload gambar

    if($error === 4){
        echo "<script> alert('filih gambar')<script>";
        return false;
    }

    $ekstensiGambarValid = ['jpg','jpeg','png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if( !in_array($ekstensiGambar, $ekstensiGambarValid) ){
     echo "<script> alert('bukan gambar')<script>";
        return false;
    }

    // ukuran gambar

    if( $ukuranFile > 3000000 ){
        echo "<script> alert('gambar kegedean')<script>";
        return false;
    }


    $namaFileBaru = uniqid();
	$namaFileBaru .= '.';
	$namaFileBaru .= $ekstensiGambar;


    // gambar terupload

    move_uploaded_file($tmpName,'../../img/'. $namaFileBaru);
    return $namaFileBaru;

}
?>