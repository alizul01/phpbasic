<!-- Theater Cashier Project - PHP -->

<?php 

$film = [
    [
        "Poster" => "endgame",
        "Judul" => "Avengers: Endgame",
        "Genre" => "Action, Adventure, Sci-Fi",
        "Rating" => "8.8",
        "Sutradara" => "Anthony Russo, Joe Russo",
    ],
    [
        "Poster" => "infinity_war",
        "Judul" => "Avengers: Infinity War",
        "Genre" => "Action, Adventure, Sci-Fi",
        "Rating" => "8.5",
        "Sutradara" => "Anthony Russo, Joe Russo",
    ],
    [
        "Poster" => "age_of_ultron",
        "Judul" => "Avengers: Age of Ultron",
        "Genre" => "Action, Adventure, Sci-Fi",
        "Rating" => "8.4",
        "Sutradara" => "Anthony Russo, Joe Russo",
    ],
    [
        "Poster" => "what_if",
        "Judul" => "Avengers: What If",
        "Genre" => "Action, Adventure, Sci-Fi",
        "Rating" => "8.3",
        "Sutradara" => "Anthony Russo, Joe Russo"
    ],
    [
        "Poster" => "captain_marvel",
        "Judul" => "Captain Marvel",
        "Genre" => "Action, Adventure, Sci-Fi",
        "Rating" => "8.4",
        "Sutradara" => "Anthony Russo, Joe Russo"
    ]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET Study</title>
</head>
<body>
    <h1>
        Daftar Film
    </h1>

    <ul>
        <?php foreach($film as $film) : ?>
                <ul>
                        <a href="latihan2.php?Judul=<?=$film["Judul"]; ?>&Poster=<?= $film["Poster"]; ?>&Genre=<?= $film["Genre"] ?>&Rating=<?= $film["Rating"] ?>&Sutradara=<?= $film["Sutradara"]; ?>"><img src="img/<?= $film["Poster"]; ?>.jpg" width="100"></a></li>
                    <li>Judul : <?= $film["Judul"]; ?></li>
                </ul>
            <?= "<br>"; ?>
        <?php endforeach; ?>
</body>
</html>