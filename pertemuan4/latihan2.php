<?php 

$mahasiswa = [
    ["Ali Zulfikar", "987654321", "Teknik Informatika"],
    ["Zul", "12345678", "Sistem Informasi"]
];

$data_mahasiswa = [
    [
        "nama" => "Ali Zulfikar",
        "nrp" => "987654321",
        "jurusan" => "Teknik Informatika"
    ],
    [
        "nama" => "Zul",
        "nrp" => "12345678",
        "jurusan" => "Sistem Informasi"
    ]
    ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2</title>
</head>
<body>
    <h1>
        Daftar Mahasiswa <i>with Array</i>
    </h1>

    <ul>
        <?php foreach($mahasiswa as $mhs) : ?>
            <li>
                <ul>
                    <li>Nama : <?= $mhs[0]; ?></li>
                    <li>NIM : <?= $mhs[1]; ?></li>
                    <li>Jurusan : <?= $mhs[2]; ?></li>
                </ul>
            </li>
            <?= "<br>"; ?>
        <?php endforeach; ?>
    </ul>

    <h1>
        Daftar Mahasiswa <i>with Array Associative</i>
    </h1>

    <ul>
        <?php foreach($data_mahasiswa as $mhs) : ?>
            <li>
                <ul>
                    <li>Nama : <?= $mhs["nama"]; ?></li>
                    <li>NIM : <?= $mhs["nrp"]; ?></li>
                    <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
                </ul>
            </li>
            <?= "<br>"; ?>
        <?php endforeach; ?>
</body>
</html>