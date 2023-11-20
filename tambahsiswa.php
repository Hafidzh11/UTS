
<?php

include 'Koneksi.php';

$nama = $_POST['nama'];
$email = $_POST['umur'];
$password = $_POST['alamat'];

$query = "INSERT INTO siswa VALUES(NULL, '$nama', '$umur','$alamat')";
mysqli_query($koneksi, $query);

header("Location: ./pendaftaran.php");
