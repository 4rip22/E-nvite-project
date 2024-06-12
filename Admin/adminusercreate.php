<?php
include "../db/koneksi.php";
include "../Admin/session-login/ceklogin.php";

$sql = "SELECT * FROM user";
$result = mysqli_query($conn, $sql);


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

    <title>Admin User Create</title>
</head>

<body class="h-screen flex ">
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
                    class="flex items-center py-2 px-4 transition duration-300 ease-in-out hover:bg-red-400 rounded">
                    <i class='bx bxs-dashboard bx-sm'></i>
                    <span class="ml-2">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="adminuser.php"
                    class="flex items-center py-2 px-4 transition duration-300 ease-in-out bg-red-400 hover:bg-red-400 rounded">
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
        <div class="flex-col p-4 bg-white relative ">
            <h1 class="text-xl font-semibold ml-7  ">Add User</h1>
            <div class="bottom-border"></div>
        </div>

        <div class="my-auto flex items-center justify-center ">
            <div class="bg-white p-6 rounded shadow-md w-full max-w-4xl  ">
                <h2 class="text-2xl font-bold mb-6 text-center">Tambah Data Baru</h2>
                <form action="tambahdata.php" method="post" class="space-y-4">
                    <div>
                        <label for="nama" class="block text-gray-700 font-medium mb-2">Nama<span
                                class="text-red-500">*</span></label>
                        <input type="text" id="nama" name="nama" required placeholder="Masukkan Nama Lengkap Anda"
                            class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div>
                        <label for="email" class="block text-gray-700 font-medium mb-2">Email<span
                                class="text-red-500">*</span></label>
                        <input type="email" id="email" name="email" required placeholder="Masukkan Email Anda"
                            class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div>
                        <label for="no_wa" class="block text-gray-700 font-medium mb-2">Nomor WhatsApp<span
                                class="text-red-500">*</span></label>
                        <input type="tel" id="no_wa" name="no_wa" pattern="\d+" required
                            placeholder="Masukkan Nomor WhatsApp Anda"
                            class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div>
                        <label for="password" class="block text-gray-700 font-medium mb-2">Password<span
                                class="text-red-500">*</span></label>
                        <div class="relative flex flex-row-reverse">
                            <input type="password" id="password" name="password" pattern="(?=.*\d)(?=.*[A-Z]).{8,}"
                                required placeholder="Masukkan Password Anda"
                                class="relative w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500 pr-10">
                            <span class="absolute my-2 mx-4 text-lg ">
                                <i class="far fa-eye cursor-pointer" id="togglePassword"></i>
                            </span>
                        </div>
                        <p class="font-medium text-sm opacity-50">Password harus memiliki min. 8 karakter, 1 angka, 1
                            huruf kapital</p>
                    </div>

                    <div class="text-center">
                        <button type="submit" name="submit"
                            class="w-full bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600 focus:outline-none focus:bg-blue-600">Tambahkan</button>
                    </div>
                </form>
                <a href="adminuser.php">
                    <div class="text-center mt-1">
                        <button type="submit"
                            class="w-full bg-red-500 text-white py-2 px-4 rounded hover:bg-red-600 focus:outline-none focus:bg-red-700">Batal</button>
                    </div>
                </a>
            </div>
        </div>

        <!-- modal -->
        <?php if (isset($_SESSION["berhasil_menambahkan_data"])): ?>
            <div class="fixed inset-0 opacity-80 bg-black z-40"></div>
            <div class="absolute w-full top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 z-50">
                <div class="max-w-lg mx-auto h-52 bg-white rounded-xl">
                    <h1 class="text-center font-bold text-3xl py-5">Data Berhasil Ditambahkan</h1>
                    <div class="flex flex-col items-center text-green-700">
                        <i class='bx bx-check-square text-6xl'></i>
                        <a class="py-2 px-4 bg-blue-600 rounded text-white font-semibold" href="adminuser.php">Ok</a>
                    </div>
                    </a>
                </div>
            </div>
            <?php unset($_SESSION["berhasil_menambahkan_data"]); ?>
        <?php endif; ?>
    </div>

    <!-- modal -->
    <?php
    if (isset($_SESSION["berhasil_update_data"])): ?>
        <div class="fixed inset-0 opacity-80 bg-black z-40"></div>
        <div class="absolute w-full top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 z-50">
            <div class="max-w-lg mx-auto h-52 bg-white rounded-xl">
                <h1 class="text-center font-bold text-3xl py-5">Data Berhasil Di Update</h1>
                <div class="flex flex-col items-center text-green-700">
                    <i class='bx bx-check-square text-6xl'></i>
                    <a class="py-2 px-4 bg-blue-600 rounded-full text-white font-semibold" href="adminuser.php">Ok</a>
                </div>
                </a>
            </div>
        </div>
        <?php
        unset($_SESSION["berhasil_update_data"]);
    endif; ?>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.11.0/dist/sweetalert2.all.min.js"></script>
    <script src="https://kit.fontawesome.com/e24f6244ee.js" crossorigin="anonymous"></script>
    <script>
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

        document.getElementById('togglePassword').addEventListener('click', function () {
            const passwordInput = document.getElementById('password');
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);

            // Toggle the eye icon
            this.classList.toggle('fa-eye');
            this.classList.toggle('fa-eye-slash');
        });
    </script>

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
    </script>
</body>

</html>