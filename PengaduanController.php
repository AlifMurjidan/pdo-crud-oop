<?php

include 'ConnectPDO.php';

class PengaduanController extends ConnectPDO {
    public function index()
    {
        /**
         * Menampilkan semua pengaduan yang di ajukan
         */
        
        $query = "SELECT * FROM pengaduan";
        $index = $this->pdo->prepare($query);
        $index->execute();
        $result = $index->fetchAll(PDO::FETCH_OBJ);

        return $result;
    }

    public function create()
    {
        header("Location: view/pengaduan/create.php");
    }
    
    public function store($request)
    {
        /**
         * Mengajukan pengaduan baru
         * dan untuk mengambil parameter request pada update
         */

        $tgl        = date("Y-m-d H:i:s");
        $nik        = $request['nik'];
        $laporan    = $request['laporan'];
        $status     = 0;
        $foto = $_FILES['foto']['name']; // Membuat variabel foto dan mengambil nama file yang diupload
        $tmp = $_FILES['foto']['tmp_name']; // Mengambil url/path folder tempat penyimpanan file sementara

        $fotobaru = date('dmYHis').$foto;
        
        $path = "img/".$fotobaru;
        if(move_uploaded_file($tmp, $path)){

        $query = "INSERT INTO pengaduan (tgl_pengaduan, nik, isi_laporan, foto, status) VALUES ('$tgl', '$nik', '$laporan', '$fotobaru', '$status')";
        $store = $this->pdo->prepare($query);
        $store->execute();

        echo "<script>
            alert('Berhasil mengajukan pengaduan!')
            window.location.href='view/pengaduan/index.php'
            </script>";
        } else {
            echo "<script>
            alert('Gagal mengajukan pengaduan, Cek kembali!!!')
            window.location.href='view/pengaduan/index.php'
            </script>";
        }
    }

    public function show($id)
    {
        $query = "SELECT * FROM pengaduan WHERE id_pengaduan = $id";
        $show = $this->pdo->prepare($query);
        $show->execute();
        $result = $show->fetch(PDO::FETCH_OBJ);

        return $result;
    }

    public function edit($id)
    {
        $query = "SELECT * FROM pengaduan WHERE id_pengaduan = $id";
        $edit = $this->pdo->prepare($query);
        $edit->execute();
        $result = $edit->fetch(PDO::FETCH_OBJ);

        return $result;
    }

    public function update($request, $id)
    {
        $isi    = $request['isi_laporan'];
        $foto = $_FILES['foto']['name'];
        $tmp = $_FILES['foto']['tmp_name'];

        $query = "SELECT foto FROM  pengaduan WHERE id_pengaduan = $id";
        $index = $this->pdo->prepare($query);
        $index->execute();
        $result = $index->fetch(PDO::FETCH_OBJ);



        if (empty($foto)){ // Jika user  tidak memilih untuk tidak mengganti foto
        $query = "UPDATE pengaduan SET isi_laporan = '$isi' WHERE id_pengaduan = $id";
        $update = $this->pdo->prepare($query);
        $update->execute(); // Eksekusi query update data

        echo "<script>
            alert('Berhasil mengubah pengaduan!')
            window.location.href='view/pengaduan/index.php'
            </script>";

        } else {
            
            $fotobaru = date('dmYHis').$foto;

            $path = "../../img/".$fotobaru; // Untuk set path / folder tempat menyimpan foto
            if(move_uploaded_file($tmp, $path)){
                $query = "UPDATE pengaduan SET foto = '$fotobaru' WHERE id_pengaduan = $id";
                $store = $this->pdo->prepare($query);
                unlink("../../img/.$result->foto"); // Untuk mengganti foto dan tanggal upload serta result diambil dari show
                $store->execute(); // Eksekusi untuk query

                echo "<script
                alert ('Berhasil mengubah pengaduan dan gambar!!!')
                window.location.href='view/pengaduan/index.php'
                </script>";
            }
        }

    }

    public function destroy($id)
    {
        $query = "DELETE FROM pengaduan WHERE id_pengaduan = $id";
        $destroy = $this->pdo->prepare($query);
        $destroy->execute();

        echo "<script>
            alert('Berhasil menghapus pengaduan!')
            window.location.href='index.php'
            </script>";
    }
}

$pengaduan = new PengaduanController();

if (isset($_POST['store'])) {
    $pengaduan->store($_POST); // Merupakan parameter superglobal post(request) dan file
}

if (isset($_POST['update'])) {
    $pengaduan->update($_POST, $_GET['id']); // Merupakan parameter superglobal get(id) dan post(request)
}

if (isset($_POST['destroy'])) {
    $pengaduan->destroy($_GET); // Merupakan parameter superglobal get(id)
}
