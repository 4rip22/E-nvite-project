<?php

session_start();
include "../db/koneksi.php";


$error_password_lama = '';
$error_password_konfirmasi = '';

if (isset($_POST['submit'])) {
    $admin_id = $_SESSION['ID']; // ID pengguna dari sesi
    $password_lama = $_POST['passwordlama'];
    $password_baru = $_POST['passwordbaru'];
    $konfirmasi_password = $_POST['konfirmasipassword'];

    // Ambil password lama dari database
    $query = "SELECT Password FROM Admin WHERE ID='$admin_id'";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $password_db = $row['Password'];

        // Verifikasi password lama
        if ($password_lama === $password_db) {
            // Validasi konfirmasi password
            if ($password_baru === $konfirmasi_password) {
                // Update password baru di database
                $update_query = "UPDATE admin SET Password='$password_baru' WHERE ID='$admin_id'";
                if (mysqli_query($conn, $update_query)) {
                    echo "<script>
                            Swal.fire({
                              icon: 'success',
                              title: 'Berhasil',
                              text: 'Password berhasil diubah',
                              confirmButtonText: 'OK'
                            }).then((result) => {
                              if (result.isConfirmed) {
                                window.location.href = '../Admin/profileadmin.php';
                              }
                            });
                          </script>";
                } else {
                    echo "Gagal mengubah password.";
                }
            } else {
                $error_password_konfirmasi = "Password tidak cocok.";
            }
        } else {
            $error_password_lama = "Password lama anda salah.";
        }
    } else {
        echo "Pengguna tidak ditemukan.";
    }
}
?>