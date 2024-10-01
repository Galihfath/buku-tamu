
<html>
    <head>
        <title>Buku Tamu</title>
    </head>
    <body>
        <?php
        echo "<h1>Selamat datang di Buku Tamu Website kami!</h1><br>";
        ?>
        <p><a href="daftar.php">Isi Buku Tamu</a></p>
        <?php
        include "koneksi.php";
        $tampilkan_isi = "SELECT * FROM tb_buku_tamu ORDER BY id_buku_tamu DESC";
        $tampilkan_isi_sql = mysqli_query($conn, $tampilkan_isi);
        echo "<table border='1' cellpadding='5' cellspacing='0'>";
        echo "<tr><th>No</th><th>Nama</th><th>Alamat</th><th>Pesan</th></tr>";
        while ($isi = mysqli_fetch_array($tampilkan_isi_sql)) {
            $no = $isi['id_buku_tamu'];
            $nama = $isi['nama'];
            $alamat = $isi['alamat'];
            $pesan = $isi['pesan'];
            echo "<tr align='center'><td>$no</td><td>$nama</td><td>$alamat</td><td>$pesan</td></tr>";
        }
        echo "</table>";
        ?>
    </body>
</html>
