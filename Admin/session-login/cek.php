<?php

// Cek apakah pengguna sudah login
if (isset($_SESSION['ID'])) {
    // Jika sudah login,maka sistem akan arahkan ke halaman admin
    header("Location: adminlogin.php");
    exit();
}

?>