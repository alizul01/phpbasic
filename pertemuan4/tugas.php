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
    <title>Theater</title>
</head>
<body>
    <h1>
        Daftar Film
    </h1>

    <ul>
        <?php foreach($film as $film) : ?>
            <li>
                <ul>
                    <li>Poster : <img src="img/<?= $film["Poster"]; ?>.jpg" width="100"></li>
                    <li>Judul : <?= $film["Judul"]; ?></li>
                    <li>Genre : <?= $film["Genre"]; ?></li>
                    <li>Rating : <?= $film["Rating"]; ?></li>
                    <li>Sutradara : <?= $film["Sutradara"]; ?></li>
                </ul>
            </li>
            <?= "<br>"; ?>
        <?php endforeach; ?>
</body>
</html>