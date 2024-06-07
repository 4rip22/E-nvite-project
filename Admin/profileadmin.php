<?php
session_start();
include "../db/koneksi.php";

$sql = "SELECT * FROM admin";
$result = mysqli_query($conn, $sql);

if (isset($_SESSION['ID'])) {
    $admin_id = $_SESSION['ID'];
    $admin_nama = $_SESSION['nama'];
    $admin_email = $_SESSION['email'];
    $admin_pass = $_SESSION['pw'];

} else {
    // Redirect ke halaman login jika sesi tidak ditemukan
    header("Location: loginadmin.php");
    exit();
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../src/output.css">
    <link rel="shortcut icon" href="../img/admin.ico" type="image/x-icon">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gluten:wght@100..900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.11.0/dist/sweetalert2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rock+Salt&display=swap" rel="stylesheet">


    <title>Profil Admin</title>
</head>

<body class="h-screen flex">
    <!-- sidebar -->
    <div class="bg-blue-950 text-white h-screen pt-5 w-64 relative z-20 transition-all duration-300 ease-in-out"
        id="sidebar">
        <div class="flex items-center justify-center bg-slate-100 p-3 rounded-full mx-auto" id="logo-container"
            style="width: 5rem;">
            <img src="../img/logo.png" alt="Logo" class="w-full h-auto">
        </div>
        <span class="block text-center mt-2" id="logo-text">E-nvite</span>
        <div class="flex items-center justify-end px-7 mt-7 mb-5">
            <button class="px-2 py-1 bg-blue-800 text-white rounded focus:outline-none border-2 border-white"
                id="hamburger">
                ☰
            </button>
        </div>
        <ul class="space-y-2 px-2" id="menu">
            <li>
                <a href="adminlogin.php"
                    class="flex items-center py-2 px-4 transition duration-300 ease-in-out bg-red-400 hover:bg-red-400 rounded">
                    <i class='bx bxs-dashboard bx-sm'></i>
                    <span class="ml-2">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="adminuser.php"
                    class="flex items-center py-2 px-4 transition duration-300 ease-in-out hover:bg-red-400 rounded">
                    <i class='bx bxs-user bx-sm'></i>
                    <span class="ml-2">User</span>
                </a>
            </li>
            <li>
                <a href="#"
                    class="flex items-center py-2 px-4 transition duration-300 ease-in-out hover:bg-red-400 rounded">
                    <i class='bx bxs-cart bx-sm'></i>
                    <span class="ml-2">Pesanan</span>
                </a>
            </li>
            <li>
                <a href="#"
                    class="flex items-center py-2 px-4 transition duration-300 ease-in-out hover:bg-red-400 rounded">
                    <i class='bx bxs-file bx-sm'></i>
                    <span class="ml-2">Template</span>
                </a>
            </li>
            <li>
                <a href="#" onclick="confirmLogout()"
                    class="flex items-center py-2 px-4 mt-[15rem] transition duration-300 ease-in-out hover:bg-red-400 rounded">
                    <i class='bx bxs-log-out bx-sm'></i>
                    <span class="ml-2">Log Out </span>
                </a>
            </li>
        </ul>

    </div>

    <style>
        /* Tambahkan CSS untuk menyembunyikan teks ketika sidebar diperkecil */
        #sidebar.w-20 .hidden {
            display: none;
        }

        #sidebar a {
            display: flex;
            align-items: center;
        }

        #logo-container {
            width: 5rem;
        }

        #logo-container img {
            width: 100%;
            height: auto;
        }

        #logo-text {
            color: white;
            font-family: "Gluten", "sans-serif";
            font-size: large;


        }

        #sidebar.w-20 #logo-text {
            display: none;
        }
    </style>
    <script>
        const sidebar = document.getElementById('sidebar');
        const hamburger = document.getElementById('hamburger');
        const menu = document.getElementById('menu');

        hamburger.addEventListener('click', () => {
            sidebar.classList.toggle('w-64');
            sidebar.classList.toggle('w-20');

            if (sidebar.classList.contains('w-64')) {
                hamburger.classList.add('border-2', 'border-white');
                document.getElementById('logo-container').style.width = '5rem';
                document.getElementById('logo-text').classList.remove('hidden');
                menu.querySelectorAll('span').forEach(span => {
                    span.classList.remove('hidden');
                });
            } else {
                hamburger.classList.remove('border-2', 'border-white');
                document.getElementById('logo-container').style.width = '3rem';
                document.getElementById('logo-text').classList.add('hidden');
                menu.querySelectorAll('span').forEach(span => {
                    span.classList.add('hidden');
                });
            }
        });
    </script>
    <!-- sidebar end -->

    <!-- navbar -->
    <div class="flex-1 flex flex-col bg-gray-300">
        <!-- Header -->
        <div class="bg-blue-900 text-white p-3 flex justify-end">
            <div class="relative mr-10 font-medium text-lg flex items-center justify-center">
                Hi, Admin 🫰
                <span class="relative">
                    <img src="../img/admin.ico" alt="admin" id="adminIcon"
                        class="w-12 ml-3 p-2 bg-slate-300 rounded-full cursor-pointer">
                    <div id="dropdownMenu"
                        class="hidden absolute -right-10 mt-3 w-40 bg-blue-900 rounded-b-lg shadow-lg z-20">
                        <a href="profileadmin.php"
                            class="flex items-center px-4 mx-2 my-2 py-1 text-white text-base hover:bg-red-400 rounded-xl">
                            <i class="fa-solid fa-user-tie mr-2"></i>
                            Profile
                        </a>
                        <a href="#" onclick="confirmLogout()"
                            class="flex items-center px-4 mx-2 my-2 py-1 text-white text-base hover:bg-red-400 rounded-xl">
                            <i class="fa-solid fa-sign-out-alt mr-2"></i>
                            Log Out
                        </a>
                        <a href="#"
                            class="flex items-center px-4 mx-2 my-2 py-1 text-white text-base hover:bg-red-400 rounded-xl">
                            <i class="fa-solid fa-comment-dots mr-2"></i>
                            Masukan
                        </a>
                    </div>
                </span>
            </div>
        </div>

        <!-- Content -->
        <div class="flex justify-center items-center p-4 bg-white relative">
            <h1 class="text-xl font-semibold ml-7">Profil Admin</h1>
            <div class="bottom-border"></div>
            <style>
                .bottom-border::after {
                    content: '';
                    position: absolute;
                    bottom: 0;
                    left: 0;
                    width: 100%;
                    height: 2px;
                    box-shadow: 0 7px 10px rgba(0, 0, 0, 0.5);
                }
            </style>
        </div>

        <!-- Profile Section -->

        <div class="flex flex-col items-center bg-slate-100 h-screen mx-5 my-5 rounded">
            <img src="../img/admin.ico" alt="Admin" class=" w-52 h-52 rounded-full mt-5 mx-auto">

            <div class="text-center block space-y-1">
                <h2 class="text-2xl font-semibold my-7" style="font-family: 'Rock Salt';"><?= $admin_nama ?></h2>
                <h1 class="font-bold text-xl">Account <span
                        class="bg-green-600 rounded-lg px-2 text-white inline-flex items-center justify-center my-auto">
                        Active</span></h1>
                <p class="text-gray-600"><?= $admin_id ?></p>
                <p class="text-gray-600"><?= $admin_email ?></p>
                <p class="text-gray-600"><?= $admin_pass ?></p>
            </div>
            <a href="ubahpw.php">
                <button type="button"
                    class="bg-blue-900 hover:bg-blue-950 transition duration-300 ease-in-out px-5 py-2 mt-4 rounded-xl flex justify-center items-center text-white font-semibold">Ubah
                    Password?</button>
            </a>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.11.0/dist/sweetalert2.all.min.js"></script>
    <script>
        // Fungsi untuk menampilkan atau menyembunyikan dropdown menu
        const adminIcon = document.getElementById('adminIcon');
        const dropdownMenu = document.getElementById('dropdownMenu');

        adminIcon.addEventListener('click', () => {
            dropdownMenu.classList.toggle('hidden');
        });

        // Fungsi untuk menutup dropdown menu ketika mengklik di luar area dropdown
        window.addEventListener('click', function (event) {
            if (!adminIcon.contains(event.target) && !dropdownMenu.contains(event.target)) {
                dropdownMenu.classList.add('hidden');
            }
        });

        // Fungsi untuk menampilkan pesan konfirmasi saat logout
        function confirmLogout() {
            Swal.fire({
                title: 'Konfirmasi Keluar',
                text: 'Apakah Anda yakin ingin keluar?',
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Keluar',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Redirect ke halaman logout jika pengguna menekan "Logout"
                    window.location.href = '../Admin/logoutadmin.php';
                }
            });
        }
    </script>
</body>
</html>