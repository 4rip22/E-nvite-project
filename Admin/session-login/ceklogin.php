<?php
//jika dia belum login maka dia akan tetap di halaman login, tidak bisa akses halaman lain
session_start();
if (!isset($_SESSION['ID'])) {
    header("Location: loginadmin.php");
    exit();
}
?>