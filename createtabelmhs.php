<?php
    include("konfigurasi.php");

     $cnn = mysqli_connect(DBHOST, DBUSER,DBPASS , DBNAME, DBPORT);

     if($cnn){
        $tbel ="tbMHS";
        $Sql = "CREATE TABLE $tbel(
            id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY ,
            nama VARCHAR(35) ,
            nim VARCHAR(10),
            alamat VARCHAR(255),
            telp VARCHAR(15),
            prodi varchar (25),
            jeniskelamin varchar(2),
            tgllahir date
        ) " ;
        $hasil = mysqli_query($cnn, $Sql );
        if($hasil){
            echo "Pembuatan tabel" . $tbel . "Sukses";
        }else{
            echo "Pembuatan tabel" . $tbel . "Gagal";
        }

     }else{
        echo "koneksi ke Mysql Gagal";
     }