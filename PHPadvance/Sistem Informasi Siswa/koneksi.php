<?php
    $server         = 'localhost';
    $user           = 'root';
    $password       = '';
    $nama_database  = 'sekolah';

    $connection = mysqli_connect($server,$user,$password,$nama_database);

    if (mysqli_connect_errno()){
        echo "Koneksi database gagal : " . mysqli_connect_error();
    }
?>