<?php 
//! Pertemuan 2 - Php Dasar
print "<h1>Hello World!</h1>";
echo 123;
echo "<br>";
echo true;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
    <h1>Halo, selamat datang 
        <?php echo "di tutorial PHP"; ?>
    </h1>

    <p>
        <?php 
            $nama = "Ali Zulfikar";
            $umur = "18";
            $pekerjaan = "Mahasiswa";
            echo "Nama saya $nama, umur saya $umur tahun, dan pekerjaan saya $pekerjaan";
        ?>
    </p>
</body>
</html>