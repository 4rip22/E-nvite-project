<?php
include "../db/controller.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Nama = $_POST['nama']; 
    $Email = $_POST['email'];
    $Password = password_hash($_POST['password'], PASSWORD_BCRYPT); 
    $Nomor = $_POST['nomor'];

    $sql = "INSERT INTO user (Nama, Email, Password, Nomor) VALUES ('$Nama', '$Email', '$Password', '$Nomor')";

    if (mysqli_query($conn, $sql)) {
        header('Location: ../user/loginUser.php');
        exit();
    } else {
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }
}
?>
