<?php
session_start();
include "../db/controller.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Email = $_POST["email"];
    $Password = $_POST["password"];

    $stmt = $conn->prepare("SELECT * FROM user WHERE Email = ?");
    $stmt->bind_param("s", $Email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();

        if (password_verify($Password, $user['Password'])) {
            $_SESSION['user_id'] = $user['ID'];
            $_SESSION['user_email'] = $user['Email'];
            header('Location: ../dashboard/dashboard.php');
            exit();
        } else {
            $error = "Kata sandi tidak valid.";
        }
    } else {
        $error = "Pengguna dengan email ini tidak ditemukan.";
    }

    $stmt->close();
    $conn->close();

    header('Location: loginUser.php?error=' . urlencode($error));
    exit();
}
?>
