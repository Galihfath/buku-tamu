
<?php
include "koneksi.php";
$id = $_GET['id'];
$query = "DELETE FROM tb_buku_tamu WHERE id_buku_tamu='$id'";
$result = mysqli_query($conn, $query) OR die(mysqli_error($conn));
echo 'Data Berhasil dihapus.';
?>
