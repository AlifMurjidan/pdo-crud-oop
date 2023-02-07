<?php

include '../../PengaduanController.php';

$id_pengaduan = $_GET['id'];
$edit = $pengaduan->edit($id_pengaduan);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Edit Pengaduan</title>
</head>
<body>
<table class="table table-dark table-striped">
    <form action="../../PengaduanController.php?id=<?=$edit->id_pengaduan?>" method="POST">
        <p>
        <label for="isi_laporan">Laporan :</label>
        <input type="text" name="isi_laporan" id="isi_laporan" value="<?=$edit->isi_laporan?>" required>
        </p>
        <p>
       <label for="foto">Foto :</label>
        <input type="text" name="foto" id="foto" value="<?=$edit->foto?>" required>
        </p>
        <br>
        <!-- <label for="status">Status</label>
        <input type="text" name="status" id="status" value="<?=$status['status']?>" required> -->
        <input type="submit" name="update" value="Ubah Data">
    </form>
    </table>
</body>
</html>