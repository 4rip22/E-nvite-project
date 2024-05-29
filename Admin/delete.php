<?php

include "db/koneksi.php";

$id = $_GET["id"];
$sql = "DELETE FROM user WHERE id='$id'";
$result = mysqli_query($conn, $sql);

if ($result) {
    header("Location: adminuser.php");
} else {
    echo "<script>alert('Gagal menghapus data');</script>";
}

?>