
<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "db_buku_tamu";
$conn = mysqli_connect($host, $user, $password, $dbname);

// Memeriksa koneksi
if (!$conn) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}
?>
