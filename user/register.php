<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "envite";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Collect and sanitize input data
$nama = mysqli_real_escape_string($conn, $_POST['nama']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = password_hash($_POST['password'], PASSWORD_BCRYPT); // Hash the password
$nomor = mysqli_real_escape_string($conn, $_POST['nomor']);

// Insert user data into the database
$sql = "INSERT INTO user (nama, email, password, nomor) VALUES ('$nama', '$email', '$password', '$nomor')";

if ($conn->query($sql) === TRUE) {
    echo "Registration successful!";
    // Redirect to login page or another page
    header("Location: loginUser.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
