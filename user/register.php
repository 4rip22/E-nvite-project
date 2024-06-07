
<?php
include '../db/controller.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Nama = $_POST['nama'];
    $Email = $_POST['email'];
    $Password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $Nomor = $_POST['nomor'];

    $sql = "INSERT INTO user (nama, email, password, nomor) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $Nama, $Email, $Password, $Nomor);

    if ($stmt->execute()) {
        header("Location: loginUser.php");
        
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $stmt->close();
    $conn->close();
}
?>
