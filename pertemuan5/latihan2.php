<?php 

if(!isset($_GET["Poster"]) || !isset($_GET["Judul"]) || !isset($_GET["Genre"]) || !isset($_GET["Rating"]) || !isset($_GET["Sutradara"])) {
    header("Location: latihan1.php");
    exit;
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data</title>
</head>
<body>

<ul>
        <img src="img/<?= $_GET["Poster"]; ?>.jpg" width="100">
    <li>
        Judul : <?= $_GET["Judul"]; ?>
    </li>
    <li>
        Genre : <?= $_GET["Genre"]; ?>
    </li>
    <li>
        Rating : <?= $_GET["Rating"]; ?>
    </li>
    <li>
        Sutradara : <?= $_GET["Sutradara"]; ?>
    </li>
</ul>
</body>
</html>