<?php


require "koneksi.php";

if(isset($_POST["submit"])){
    if(registrasi($_POST)>0){
        echo "berhasil";
    }else{
        echo mysqli_error($conn);
    }
    }


function registrasi($data){
    global $conn;

    $username = strtolower(stripcslashes($data["username"]));
    $password = mysqli_real_escape_string($conn,$data["password"]);
    $password2 = mysqli_real_escape_string($conn,$data["password2"]);


    // cek user ada atau tidak 
    $result = mysqli_query($conn,"SELECT username FROM user WHERE username='$username'");

    if(mysqli_fetch_assoc($result)){
        echo "<script type='text/javascript'> alert('username terdaftar '); </script>";
        return false;
    }

    if ($password !== $password2){
        echo "<script type='text/javascript'> alert('pasword tidak sama'); </script>";

        return false;
    }

        // enkripsi
        $password = password_hash($password, PASSWORD_DEFAULT);

            mysqli_query($conn, "INSERT INTO user VALUES('','$username','$password')");

            return mysqli_affected_rows($conn);


}