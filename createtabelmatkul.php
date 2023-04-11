<?php
    include("konfigurasi.php");

     $cnn = mysqli_connect(DBHOST, DBUSER,DBPASS , DBNAME, DBPORT);

     if($cnn){
        $tbel ="tbMATKUL";
        $Sql = "CREATE TABLE $tbel(
            id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY ,
            kodeMK VARCHAR (8),
            Matakuliah VARCHAR(50),
            SKS INT
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