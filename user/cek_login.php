<?php
session_start();
include '../db/koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $Email = $_POST['email'];
    $Password = $_POST['password'];

    // Menggunakan prepared statements untuk keamanan
    $stmt = $conn->prepare("SELECT * FROM user WHERE email = ?");
    $stmt->bind_param("s", $Email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $data = $result->fetch_assoc();
        
        // Verifikasi password
        if (password_verify($Password, $data['password'])) {
            $_SESSION['email'] = $data['email']; // Store email
            $_SESSION['nama'] = $data['nama']; // Store nama

            header("Location: landingpage.html");
            exit();
        } else {
            $error_message = "Password salah.";
            echo $error_message;
        }
    } else {
        $error_message = "Email atau password salah.";
        echo $error_message;
    }

    $stmt->close();
    $conn->close();
} else {
    header("Location: loginUser.php");
    exit();
}
?>
