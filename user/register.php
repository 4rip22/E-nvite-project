<?php
  // Include database connection
  include '../db/koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Nama = $_POST['nama'];
    $Email = $_POST['email'];
    $Password = password_hash($_POST['password'], PASSWORD_BCRYPT); 
    $Nomor = $_POST['nomor'];

    // Insert data into database
    $sql = "INSERT INTO user (nama, email, password, nomor) VALUES ('$Nama', '$Email', '$Password', '$Nomor')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        header("Location: loginUser.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>