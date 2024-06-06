<?php

// Cek apakah pengguna sudah login
if (isset($_SESSION['ID'])) {
    // Jika sudah login, arahkan ke halaman admin
    header("Location: adminlogin.php");
    exit();
}

?>