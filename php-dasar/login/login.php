<?php

// cek apakah tombol sudah diklik?
if (isset($_POST["submit"])) {
    // cek apakah usname dan pass benar?
    if ($_POST["username"] == "admin" && $_POST["password"] == "123") {
        header("Location: admin.php");
        exit;
    } else {
        $error = true;
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman login</title>
</head>

<body>
    <?php if (isset($error)): ?>
        <p style="color: red; font-style: italic;">Username / Password salah!</p>
    <?php endif ?>
    <h1>Login Admin</h1>

    <ul>
        <form action="" method="post">
            <li>
                <label for="username">Username : </label>
                <input type="text" name="username" id="username">
            </li>
            <br />
            <li>
                <label for="password">Password : </label>
                <input type="password" name="password" id="password">
            </li>
            <li>
                <button type="submit" name="submit">LOGIN</button>
            </li>
        </form>
    </ul>
</body>

</html>