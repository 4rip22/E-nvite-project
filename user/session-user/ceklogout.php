<?php

// Cek apakah pengguna sudah login
if (isset($_SESSION['user_id'])) {
    // Jika sudah login,maka sistem akan arahkan ke halaman admin
    header("Location: homepage.php");
    exit();
}

?>