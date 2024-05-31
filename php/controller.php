<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "db_undangan";

$mysql = mysqli_connect($host, $user, $pass, $db);

    if($mysql){
    die("Connection failed: " . mysqli_connect_error());
    };


?>