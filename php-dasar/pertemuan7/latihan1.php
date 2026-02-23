<?php

$cars = [
    [
        "merk" => "Honda",
        "type" => "SUV",
        "cc" => 1500,
        "warna" => "merah"
    ],
    [
        "merk" => "Honda",
        "type" => "MPV",
        "cc" => 1800,
        "warna" => "biru"
    ],
    [
        "merk" => "Mercy",
        "type" => "sedan",
        "cc" => 2800,
        "warna" => "silver"
    ],
    [
        "merk" => "Toyota",
        "type" => "city-car",
        "cc" => 1200,
        "warna" => "kuning"
    ],
    [
        "merk" => "BMW",
        "type" => "sedan",
        "cc" => 3400,
        "warna" => "merah"
    ]
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Daftar Mobil</h1>

    <?php foreach ($cars as $car): ?>
        <ul>
            <li>
                <a href="latihan2.php?nama=<?= $car["merk"]; ?>
                    &type=<?= $car['type'] ?>
                    &cc=<?= $car['cc'] ?>
                    &warna=<?= $car['warna'] ?>">
                    <?php echo $car["merk"] ?>
                </a>
            </li>
        </ul>
    <?php endforeach ?>

</body>

</html>