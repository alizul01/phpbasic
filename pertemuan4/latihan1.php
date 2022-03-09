<?php 

$hari = array(
    "Senin",
    "Selasa",
    "Rabu",
    "Kamis",
    "Jumat",
    "Sabtu",
    "Minggu"
);

$bulan = array(
    "Januari",
    "Februari",
    "Maret",
    "April",
    "Mei",
    "Juni",
    "Juli",
    "Agustus",
    "September",
    "Oktober",
    "November",
    "Desember"
);


$angka = array(1, 4, 9, 16, 25, 36, 49, 64, 81, 100);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div {
            margin: 10px;
            padding: 10px;
            background-color: lightblue;
            display: inline-block;
        }
    </style>
</head>
<body>
    <?php foreach($angka as $a) : ?>
        <div>
            <?php echo $a; ?>
        </div>
    <?php endforeach; ?>
</body>
</html>