<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi User</title>
</head>
<body>
    <form action="../../MasyarakatController.php" method="POST">
        <label for="nik">NIK</label>
        <input type="text" name="nik" id="nik" required>
        <label for="nama">Nama</label>
        <input type="text" name="nama" id="nama" required>
        <label for="username">Username</label>
        <input type="text" name="username" id="username" required>
        <label for="telp">Telepon</label>
        <input type="text" name="telp" id="telp" required>
        <label for="password">Password</label>
        <input type="password" name="password" id="password" required>
        <label for="confirm_password">Konfirmasi Password</label>
        <input type="password" name="confirm_password" id="confirm_password" required>

        <input type="submit" name="register" value="Daftar">
    </form>
</body>
</html>