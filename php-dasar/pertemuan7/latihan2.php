<?php
if (
    !isset($_GET["nama"]) ||
    !isset($_GET["type"]) ||
    !isset($_GET["cc"]) ||
    !isset($_GET["warna"])
) {
    // rediricet ke latihan1.php
    header("Location: latihan1.php");
    exit;
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
</head>

<body>

    <ul>
        <li> Merk :<?= $_GET["nama"] ?></li>
        <li>Type:
            <?= $_GET["type"] ?>
        </li>
        <li>CC:
            <?= $_GET["cc"] ?>
        </li>
        <li>Warna:
            <?= $_GET["warna"] ?>
        </li>
    </ul>

    <a href="latihan1.php">kembali ke daftar mobil</a>


</body>

</html>