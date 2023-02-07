<?php

include '../../PengaduanController.php';

$id_pengaduan = $_GET['id'];
$show = $pengaduan->show($id_pengaduan);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman User</title>
</head>
<body>
    <hr>
        <div class="card">
            <td>Tanggal : <?= $show->tgl_pengaduan ?></td><br>
            <td>NIK : <?= $show->nik ?></td><br>
            <td>Laporan : <?= $show->isi_laporan ?></td><br>
            <td>Foto : <?= $show->foto ?></td><br>
            <td>Status : <?= $show->status ?></td><br>
            <br>
        <a href="edit.php?id=<?= $show->id_pengaduan ?>">Edit</a>

            <hr>
        </div>
        
</body>
</html>