<?php
$servername = "localhost";
$user = "root";
$pass = "";
$db = "db_undangan";

$conn = mysqli_connect($servername, $user, $pass, $db);

if (!$conn) {
    die("connect Error: " . mysqli_connect_error());
}
?>