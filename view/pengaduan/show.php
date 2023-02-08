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
    <a href="index.php" style="color: #000000;">Kembali</a>  
    <hr>
        <div class="card">
            <td>Tanggal : <?= $show->tgl_pengaduan ?></td><br>
            <td>NIK : <?= $show->nik ?></td><br>
            <td>Laporan : <?= $show->isi_laporan ?></td><br>
            <td>Foto : </td><br>
            <img src='../../img/<?= $show->foto;?>' width='1000'><br>
            <td>Status : <?php if ($show->status == 0) : ?>
                Belum diproses
            <?php elseif ($show->status == 'Proses') : ?>
                Sedang diproses
            <?php elseif ($show->status == 'Selesai') : ?>
                Selesai diproses
            <?php endif ; ?></td><br>
            <br>
            <!-- <div class="card-body">
                <table>
                    <thead>
                        <tr>
                            <th>Tanggal</th>
                            <th>NIK</th>
                            <th>Laporan</th>
                            <th>Foto</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <td><?= $show->tgl_pengaduan ?></td>
                        <td><?= $show->nik ?></td>
                        <td><?= $show->isi_laporan ?></td>
                        <td><img src="../../img/<?= $show->foto; ?>" width="100"></td>
                        <td><?= $show->status ?></td>
                        </tr>
                    </tbody>
                </table>
            </div> -->
        <a href="edit.php?id=<?= $show->id_pengaduan ?>" style="color: #000000;">Edit</a>

            <hr>
        </div>
        
</body>
</html>