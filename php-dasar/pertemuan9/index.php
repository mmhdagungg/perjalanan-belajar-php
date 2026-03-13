<?php
// koneksi database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

// ambil data mahasiswa
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");
// var_dump($result);

// ambil data (fetch) mahasiswa dari object result
// mysqli_fecth_row() mengembalikan array numeric
// mysqli_fecth_assoc() mengembalikan array assoc
// mysqli_fecth_array() 
// mysqli_fecth_object()

// while ($mhs = mysqli_fetch_assoc($result)) {

//     var_dump($mhs);
// }


// foreach ($result as $r) {
//     var_dump($r);
// }


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
        <?php while ($row = mysqli_fetch_assoc($result)): ?>
            <tr>
                <td><?= $i; ?></td>
                <td>
                    <a href="">Ubah</a> |
                    <a href="">Hapus</a>
                </td>
                <td>
                    <img src="img\<?php $row["gambar"] ?>" alt="" width=110px;>
                </td>
                <td><?= $row["npm"]; ?></td>
                <td><?= $row["jurusan"]; ?></td>
                <td><?= $row["nama"]; ?></td>
                <td><?= $row["email"]; ?></td>
            </tr>
            <?php $i++; ?>
        <?php endwhile ?>
    </table>
</body>

</html>