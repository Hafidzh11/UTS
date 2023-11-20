<?php

$koneksi = mysqli_connect('localhost', 'root', '', 'db_uts');

if ($koneksi) {
    // echo "database terhubung";
    echo "<script> alert('database connect') </script>";
}

// $query = "INSERT INTO tamu VALUES(NULL, 'Sandi', 'sandi@itg.ac.id')";

// mysqli_query($koneksi, $query);
