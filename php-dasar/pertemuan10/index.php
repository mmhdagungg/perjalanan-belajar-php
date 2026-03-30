<?php

require 'functions.php';

$mahasiswa = query("SELECT * FROM mahasiswa");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>
    <a href="tambah.php">Tambah Data Mahasiswa</a>
    <br>


    <table border="1" cellpading="15" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>NPM</th>
            <th>Jurusan</th>
            <th>Nama</th>
            <th>Email</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach ($mahasiswa as $row): ?>
            <tr>
                <td>
                    <?= $i; ?>
                </td>
                <td>
                    <a href="">Ubah</a> |
                    <a href="hapus.php?id=<?= $row["id"] ?>">Hapus</a>
                </td>
                <td>
                    <img src="img/<?php echo $row["gambar"] ?>" alt="" width=110px>
                </td>
                <td>
                    <?= $row["npm"]; ?>
                </td>
                <td>
                    <?= $row["jurusan"]; ?>
                </td>
                <td>
                    <?= $row["nama"]; ?>
                </td>
                <td>
                    <?= $row["email"]; ?>
                </td>
            </tr>
            <?php $i++; ?>
        <?php endforeach ?>
    </table>
</body>

</html>