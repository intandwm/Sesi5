<?php
    include("konfigurasi.php");

     $cnn = mysqli_connect(DBHOST, DBUSER,DBPASS);

     if($cnn){
       
        $Sql = "CREATE DATABASE " . DBNAME;
        $hasil = mysqli_query($cnn, $Sql );
        if($hasil){
            echo "Pembuatan database" . DBNAME . "Sukses";
        }else{
            echo "Pembuatan database" . DBNAME . "Gagal";
        }

     }else{
        echo "koneksi ke Mysql Gagal";
     }