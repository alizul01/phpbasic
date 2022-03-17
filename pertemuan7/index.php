<?php 

require 'functions.php';
$rows = query("SELECT * FROM anggota");

// ambil data dari tabel wri
$result = mysqli_query($conn, "SELECT * FROM anggota");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/512/4297/4297861.png" type="image/x-icon">

</head>

<body>
    
    <h1 class="text-center">Data Anggota WRI</h1>
    <a href="tambah.php" class="btn btn-primary mb-3">Tambah Data</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Nama</th>
                <th scope="col">No Telepon</th>
                <th scope="col">Angkatan</th>
                <th scope="col">Miniclass</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
          <?php foreach($rows as $row) : ?>
            <tr>
                <th scope="row"><?= $row["id_anggota"]; ?></th>
                <td><?= $row["nama_anggota"]; ?></td>
                <td><?= $row["no_telpon"]; ?></td>
                <td><?= $row["angkatan"]; ?></td>
                <td><?= $row["miniclass"]; ?></td>
                <td> <button class="btn btn-primary">Edit</button> <a class="btn btn-danger" href="hapus.php?id=<?= $row["id_anggota"]; ?>" onclick="return confirm('Yakin?');">Hapus</a> </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>