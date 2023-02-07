<?php

include '../../PengaduanController.php';
$result = $pengaduan->index();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengaduan</title>
</head>
<body>
    <h1>List Pengaduan Masyarakat</h1>
    <hr>
    <?php if ($result != null) : ?>
        <?php foreach ($result as $index) : ?>
            
        <div class="card">
            <td>Tanggal : <?= $index->tgl_pengaduan ?></td><br>
            <td>NIK : <?= $index->nik ?></td><br>
            <td>Status :
            <?php if ($index->status == 0) : ?>
                Belum diproses
            <?php elseif ($index->status == 'Proses') : ?>
                Sedang diproses
            <?php elseif ($index->status == 'Selesai') : ?>
                Selesai diproses
            <?php endif ; ?></td><br>
            
            <br>
                    <a href="show.php?id=<?= $index->id_pengaduan ?>" style="color: #000000;text-decoration:none">Detail</a>
                    <!-- <a href="edit.php?id=<?= $index->id_pengaduan ?>">Edit</a> -->
                    <a href="delete.php?id=<?= $index->id_pengaduan?>" 
                    class="btn btn-danger btn-md">Hapus</a>
                    <hr>
        </div>
        </a>
        
        <?php endforeach; ?>
    <?php else : ?>
        <h3>List Pengaduan Masih Kosong</h3>
    <?php endif; ?>
    <a href="create.php" class="btn btn-success">Tambah</a>
</body>
</html>


