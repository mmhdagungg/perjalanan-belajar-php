<?php
// koneksi database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

// ambil data mahasiswa
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");
// var_dump($result);

// ambil data (fetch) mahasiswa dari object result
// mysqli_fecth_row()
// mysqli_fecth_assoc()
// mysqli_fecth_array()
// mysqli_fecth_object()

$mhs = mysqli_fetch_row($result);
var_dump($mhs)


    // mysqli_fecth_assoc()

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
            <th>NRP</th>
            <th>Nama</th>
            <th>Email</th>
        </tr>
        <tr>
            <td>1</td>
            <td>
                <a href="">Ubah</a> |
                <a href="">Hapus</a>
            </td>
            <td>
                <img src="../img/agung.png" alt="" width=110px;>
            </td>
            <td>1402021084</td>
            <td>Moehammad Agung</td>
            <td>mmhdagung7@gmai.com</td>
        </tr>
    </table>
</body>

</html>