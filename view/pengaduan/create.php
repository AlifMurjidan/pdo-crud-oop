<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi User</title>
</head>
<body>
    <form action="../../PengaduanController.php" method="POST">
        <label for="tgl_pengaduan">Tanggal</label>
        <input type="date" name="tgl_pengaduan" id="tgl_pengaduan" required>
        <label for="nik">NIK</label>
        <input type="text" name="nik" id="nik" required>
        <label for="laporan">Laporan</label>
        <input type="text" name="laporan" id="laporan" required>
        <label for="foto">Foto</label>
        <input type="text" name="foto" id="foto" required>

        <input type="submit" name="store" value="Tambah Pengaduan Baru">
    </form>
</body>
</html>