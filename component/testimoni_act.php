<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];
    $testimoni = $_POST['testimoni'];

    $sql = "INSERT INTO daftar_klien (nama, testimoni) VALUES ('$nama', '$testimoni')";
    if (mysqli_query($konek, $sql)) {
        echo "Testimoni berhasil ditambahkan!";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($konek);
    }

    mysqli_close($konek);
    header("Location: testimoni.php"); // Redirect back to the main page
    exit();
}