<?php
session_start();
if (!$_SESSION['auth']) {
    header('Location: masyarakat/index.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-light">
    <?= "Selamat Datang," . $_SESSION['auth'] ?>
    <form action="../MasyarakatController.php" method="post">
        <input type="submit" name="logout" value="keluar">
    </form>
</body>
</html>