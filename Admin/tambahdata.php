<?php

include "../db/koneksi.php";
include "../Admin/session-login/ceklogin.php";


if (isset($_POST["submit"])) {
    $nama = htmlspecialchars($_POST["nama"]);
    $email = htmlspecialchars($_POST["email"]);
    $password = hash("sha256", $_POST["password"]);
    $no_wa = htmlspecialchars($_POST["no_wa"]);


    $sql = "INSERT INTO user (Nama, Email, Password, `No Wa`) VALUES ('$nama','$email', '$password', '$no_wa')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        $_SESSION["berhasil_menambahkan_data"] = true;
        header("Location: adminusercreate.php");
    } else {
        header("Location: adminusercreate.php?failed=Gagal");
    }
}


?>