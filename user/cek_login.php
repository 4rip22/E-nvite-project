<?php
    session_start();
    include '../db/koneksi.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $Email = $_POST['email'];
        $Password = $_POST['password'];

        $sql = "SELECT * FROM user WHERE email='$Email'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            if (password_verify($Password, $row['password'])) {
                $_SESSION['nama'] = $row['nama'];
                $_SESSION['email'] = $row['email'];
                header("Location: landingpage.html");
                exit();
            } else {
                echo "Invalid password.";
            }
        } else {
            echo "No user found with that email.";
        }

        $conn->close();
    }
    ?>