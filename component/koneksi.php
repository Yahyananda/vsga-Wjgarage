<?php
$host = "localhost";
$user = "root";
$pass = "";
$name = "wjgarage";

$konek = mysqli_connect($host, $user, $pass, $name);
if (!$konek) {
    die("Koneksi Gagal : " . mysqli_connect_error());
}
// or die ('eror'); juga bisa digunakan