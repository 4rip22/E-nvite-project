<?php
// Database connection
include '../db/koneksi.php';

// Collect and sanitize input data
$email = $_POST['email'];
$password = $_POST['password'];

// Prepare and execute the SQL statement
$stmt = $conn->prepare("SELECT * FROM user WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if (password_verify($password, $row['Password'])) {
        // Start session and redirect to the homepage
        session_start();
        $_SESSION['user_id'] = $row['ID'];
        echo "Login successful!";
        header("Location: homepage.html");
        exit();
    } else {
        // Password is incorrect
        header("Location: loginUser.php?error=Invalid password");
        exit();
    }
} else {
    // No user found with that email
    header("Location: loginUser.php?error=No user found with that email");
    exit();
}

// Close the statement and connection
$stmt->close();
$conn->close();
?>
