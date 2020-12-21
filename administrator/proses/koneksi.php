<?php

$conn = mysqli_connect("localhost","root","","tokoku");

if (mysqli_connect_errno()){
    echo "koneksi gagal".mysqli_connect_error();
    exit();
}