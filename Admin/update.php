<?php
session_start();
include "../db/koneksi.php";
// var_dump($_POST);

if (isset($_POST["submit"])) {

    $id = $_POST["id"];
    $nama = htmlspecialchars($_POST["nama"]);
    $email = htmlspecialchars($_POST["email"]);
    $no_wa = htmlspecialchars($_POST["no_wa"]);

    $sql = "UPDATE user SET Nama='$nama', Email='$email', `Nomor`='$no_wa' WHERE ID='$id'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        $_SESSION["berhasil_update_data"] = true;
        header("Location: adminusercreate.php");
    } else {
        header("Location: adminusercreate.php");
    }
}

?>