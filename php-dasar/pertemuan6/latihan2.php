<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    $mahasiswa = [
        ["Agung", 1402021084, "Teknik Informatika"],
        ["Syadad", 1402021068, "Psikologi"]
    ];
    ?>

    <h1>Daftar Mahasiswa</h1>

    <?php foreach ($mahasiswa as $mhs): ?>

        <ul>
            <li>Nama: <?= $mhs[0] ?></li>
            <li>NPM: <?= $mhs[1] ?></li>
            <li>Prodi: <?= $mhs[2] ?></li>
        </ul>

    <?php endforeach ?>;






</body>

</html>