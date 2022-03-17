<?php 


// melakukan koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "dbwri_dasar");

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

function tambah($data) {
    global $conn;

    $nama_anggota = htmlspecialchars($data["nama_anggota"]);
    $no_telpon = htmlspecialchars($data["no_telpon"]);
    $angkatan = htmlspecialchars($data["angkatan"]);
    $miniclass = htmlspecialchars($data["miniclass"]);

    $query = "INSERT INTO anggota VALUES ('', '$nama_anggota', '$no_telpon', '$angkatan', '$miniclass')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM anggota WHERE id_anggota = $id");

    return mysqli_affected_rows($conn);
}

?>