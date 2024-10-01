
<html>
<head>
    <title>Data Tamu</title>
</head>
<body>
    <?php
    echo "<h1>Inilah data para tamu yang terdaftar</h1><br>";
    ?>
    <p><a href="daftar.php">Daftar Tamu</a></p>
    <?php
    include "koneksi.php";
    $tampilkan_isi = "SELECT * FROM tb_buku_tamu ORDER BY id_buku_tamu ASC";
    $tampilkan_isi_sql = mysqli_query($conn, $tampilkan_isi);
    ?>
    <table width="850" border="1" cellspacing="0" cellpadding="2">
        <tr>
            <th width="50">No</th>
            <th width="200">Nama</th>
            <th width="200">Alamat</th>
            <th width="200">No Telp</th>
            <th width="50">Usia</th>
            <th width="150" colspan="2">Operasi</th>
        </tr>
    <?php
    while ($isi = mysqli_fetch_row($tampilkan_isi_sql)) {
        echo "<tr>
                <td>{$isi[0]}</td>
                <td>{$isi[1]}</td>
                <td>{$isi[2]}</td>
                <td>{$isi[3]}</td>
                <td>{$isi[4]}</td>
                <td><a href='hapus.php?id={$isi[0]}'>Delete</a> | <a href='edit.php?id={$isi[0]}'>Edit</a></td>
              </tr>";
    }
    ?>
    </table>
</body>
</html>
