<?php

include "../db/koneksi.php";
include "../Admin/session-login/ceklogin.php";
// query untuk menghpaus user di database table admin
$id = $_GET["id"];
$sql = "DELETE FROM user WHERE ID='$id'";
$result = mysqli_query($conn, $sql);

if ($result) {
    header("Location: adminuser.php");
} else {
    echo "<script>alert('Gagal menghapus data');</script>";
}

?>