<?php 
function salam($nama = "Anonim") {
    if (time() < strtotime("12:00")) {
        echo "Selamat Pagi, $nama";
    } elseif (time() >= strtotime("12:00") && time() < strtotime("15:00")) {
        echo "Selamat Siang, $nama";
    } elseif (time() >= strtotime("15:00") && time() < strtotime("18:00")) {
        echo "Selamat Sore, $nama";
    } else {
        echo "Selamat Malam, $nama";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pertemuan 3</title>
</head>
<body>
    <?php
    echo date("l, d-m-Y") . "<br>";
    echo date("l, d-m-y", mktime(0, 0, 0, 3, 24, 2003)) . "<br>";
    ?>

    <?php 
    echo salam("Zul <br>");
    echo strtotime("12:00");
    ?>
</body>
</html>