<?php 

require 'functions.php';
$conn = mysqli_connect("localhost", "root", "", "dbwri_dasar");

if (isset($_POST["submit"])) {
    if (tambah($_POST) > 0) {
        echo "
            <script>
                alert('Data berhasil ditambahkan!');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data gagal ditambahkan!');
                document.location.href = 'index.php';
            </script>
        ";
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <!-- back to index.php -->
    <a href="index.php" class="btn btn-primary mb-3">Tambah Data</a>
    <div class="container mt-3">
        <h1 class="text-center">Tambah Data Mahasiswa</h1>
        <form action="" method="post">
            <div class="form-group">
                <label for="nama">Nama Anggota</label>
                <input type="text" class="form-control" id="nama_anggota" name="nama_anggota" placeholder="Masukkan Nama">
            </div>
            <div class="form-group">
                <label for="no_telpon">No Telpon</label>
                <input type="text" class="form-control" id="no_telpon" name="no_telpon" placeholder="Masukkan No Telpon">
            </div>
            <div class="form-group">
                <label for="email">Angkatan</label>
                <input type="number" class="form-control" id="angkatan" name="angkatan" placeholder="Masukkan Angkatan">
            </div>
            <div class="form-group">
                <label for="miniclass">Miniclass</label>
                <input type="number" class="form-control" id="miniclass" name="miniclass" placeholder="Masukkan Miniclass">
            </div>
            <button type="submit" class="mt-3 btn btn-primary" name="submit">Tambah Data</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>