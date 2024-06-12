<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "envite";


$conn = mysqli_connect($servername, $username, $password, $db);

if (!$conn) {
    die("Gagal koneksi" . mysqli_connect_error());
}
?>