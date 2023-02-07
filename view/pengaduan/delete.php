<?php

include '../../PengaduanController.php';
$id_pengaduan = $_GET['id'];
$destroy = $pengaduan->destroy($id_pengaduan);

$query = "DELETE FROM pengaduan WHERE id_pengaduan = $id";
$destroy = $this->pdo->prepare($query);
header('location: index.php');
?>