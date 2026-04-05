<?php

require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");

if (isset($_POST["cari"])) {
    $mahasiswa = cari($_POST["keyword"]);
}
;


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
    <br>
    <form action="" method="post">

        <input type="text" name="keyword" size="40" autofocus placeholder="masukkan npm/nama/jurusan/..."
            autocomplete="off">
        <button type="submit" name="cari">Cari!</button>

    </form>

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
                    <a href="ubah.php?id=<?= $row['id'] ?>">Ubah</a> |
                    <a href="hapus.php?id=<?= $row["id"] ?>" onclick="return confirm('yakin ingin menghapus?')">Hapus</a>
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