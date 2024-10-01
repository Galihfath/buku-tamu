
<?php
include "koneksi.php";

// Mengambil data dari form menggunakan method POST dengan pengecekan
$nama = isset($_POST['nama']) ? $_POST['nama'] : '';
$alamat = isset($_POST['alamat']) ? $_POST['alamat'] : '';
$telepon = isset($_POST['telepon']) ? $_POST['telepon'] : '';
$pesan = isset($_POST['pesan']) ? $_POST['pesan'] : '';

if (empty($nama) || empty($alamat) || empty($telepon) || empty($pesan)) {
    die("Semua field harus diisi!");
}

// Perbaikan sintaks query SQL dengan prepared statement untuk keamanan
$stmt = $conn->prepare("INSERT INTO tb_buku_tamu (nama, alamat, telepon, pesan) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $nama, $alamat, $telepon, $pesan);

if ($stmt->execute()) {
    echo "Insert Record Berhasil <br/>";
    echo "Anda Telah berhasil menginput data : <br>";
    echo $nama, "<br />", $alamat, "<br />", $telepon, "<br />", $pesan;
} else {
    echo "Gagal Insert Record: " . $stmt->error;
}
$stmt->close();
?>
<html>
    <body>
        <a href="lihat_data_tabel.php">
            <p>Lihat Data Tamu</p>
        </a>
    </body>
</html>
