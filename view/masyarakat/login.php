<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login User</title>
</head>
<body>
    <form action="../../MasyarakatController.php" method="POST">
        <label for="nik">NIK</label>
        <input type="text" name="nik" id="nik" required>
        <label for="password">Password</label>
        <input type="password" name="password" id="password" required>

        <input type="submit" name="login" value="Masuk">
    </form>
</body>
</html>