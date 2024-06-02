<?php
$servername = "localhost";
$user = "root";
$pass = "";
$db = "db_undangan";

$conn = mysqli_connect($servername, $user, $pass, $db);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
} else {
    echo "Koneksi berhasil!";
}

?>