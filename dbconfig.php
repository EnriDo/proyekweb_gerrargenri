<?php

    $host = "localhost";
    $user = "root";
    $pass = "";

    $dbname = "academic";
    $conn = mysqli_connect($host, $user, $pass, $dbname);

    if (!$conn){
        die("Koneksi Gagal". mysqli_connect_error());
    }
    
/*if (mysqli_connect("localhost", "root", "", "academic")){
    echo "Koneksi ke MYSQL berhasil";
} else {
    echo "Koneksi ke MYSQL gagal";
} */

?>