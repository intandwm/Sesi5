<?php
    include("konfigurasi.php");

     $cnn = mysqli_connect(DBHOST, DBUSER,DBPASS , DBNAME, DBPORT);

     if($cnn){
        $tbel ="tbUSER";
        $Sql = "CREATE TABLE $tbel(
            id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY ,
            nama VARCHAR(30) NOT NULL,
            email VARCHAR(255) NOT NULL,
            username VARCHAR(20),
            passkey VARCHAR(255),
            iduser varchar (255)
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