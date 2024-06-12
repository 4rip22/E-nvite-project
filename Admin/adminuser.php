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
    <link href="
https://cdn.jsdelivr.net/npm/sweetalert2@11.11.0/dist/sweetalert2.min.css
" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Admin User</title>
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
        <div class="flex justify-center items-center p-5 bg-white relative ">
            <h1 class="text-xl font-semibold">Users</h1>
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

        <a href="adminusercreate.php">
            <div
                class="font-bold flex  absolute mx-[5rem] top-20 shadow-lg outline-none bg-blue-900 p-3 rounded-xl text-white hover:bg-blue-950 transition duration-300 ">
                Tambah Data
                <i class='bx bxs-user-plus text-2xl ml-2'></i>
            </div>
        </a>

        <div class="flex justify-end absolute top-20 -my-auto right-20">
            <input id="searchInput" type="text" placeholder="Cari Data..."
                class="p-3 border-4 border-blue-200 rounded-full">
            <span class="flex absolute top-4 justify-center right-4 opacity-25 items-center text-2xl cursor-pointer"
                id="searchIcon">
                <i class='bx bx-search'></i>
            </span>
        </div>





        <!-- table -->
        <div
            class="relative flex flex-col my-auto mx-auto w-[90%] h-[70%] overflow-auto text-gray-700 shadow-md rounded-xl bg-clip-border">
            <table class="w-full table-auto min-w-max text-center border-collapse border-8 border-slate-100">
                <thead>
                    <tr class="bg-gray-200 border-b-2 border-black border-opacity-50">
                        <th class="p-4 w-2 bg-stone-300">
                            <p class="block font-sans text-sm antialiased font-bold leading-none ">
                                ID
                            </p>
                        </th>
                        <th class="p-4 bg-stone-400 w-72">
                            <p class="block font-sans text-sm antialiased font-bold leading-none ">
                                Nama
                            </p>
                        </th>
                        <th class="p-4 bg-stone-300 w-64  ">
                            <p class="block font-sans text-sm antialiased font-bold leading-none ">
                                Email
                            </p>
                        </th>
                        <th class="p-4 bg-stone-400  w-40   ">
                            <p class="block font-sans text-sm antialiased font-bold leading-none">
                                NO Wa
                            </p>
                        </th>
                        <th class="p-4 bg-stone-300 ">
                            <p class="block font-sans text-sm antialiased font-bold leading-none  ">
                                Action
                            </p>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <style>
                        tbody tr:nth-child(even) {
                            background-color: lightgray;
                            border-radius: 30px;

                        }
                    </style>
                    <?php if (mysqli_num_rows($result) > 0): ?>
                        <?php while ($row = mysqli_fetch_assoc($result)): ?>
                            <tr class="bg-white user-row">
                                <td class="p-4 border-b>
                                    <p class="block font-sans text-sm antialiased font-normal leading-normal ">
                                        <?= $row["ID"] ?>
                                    </p>
                                </td>
                                <td class="p-4 border-b ">
                                    <p class="block font-sans text-sm antialiased font-normal leading-normal ">
                                        <?= $row["Nama"] ?>
                                    </p>
                                </td>
                                <td class="p-4 border-b ">
                                    <p class="block font-sans text-sm antialiased font-normal leading-normal ">
                                        <?= $row["Email"] ?>
                                    </p>
                                </td>
                                <td class="p-4 border-b ">
                                    <p class="block font-sans text-sm antialiased font-normal leading-normal ">
                                        <?= $row["No Wa"] ?>
                                    </p>
                                </td>
                                <td class="p-4 border-b ">
                                    <div class="flex items-center justify-center  ">
                                        <a href="edit.php?id=<?= $row["ID"] ?>"
                                            class=" font-sans text-sm antialiased font-medium hover:border-b-2 hover:border-red-800 ">
                                            Edit
                                        </a>
                                        <a href="edit.php?id=<?= $row["ID"] ?>" class="pt-[0.3rem] hover:text-blue-500">
                                            <i class='bx bxs-edit text-2xl '></i>
                                        </a>
                                        <a href="javascript:void(0)" onclick="confirmDelete(<?= $row['ID'] ?>)"
                                            class="pt-[0.3rem] ml-5 hover:text-red-500">
                                            <i class='bx bxs-trash text-2xl'></i>
                                        </a>

                                    </div>
                                </td>
                            </tr>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>

        <script src="
https://cdn.jsdelivr.net/npm/sweetalert2@11.11.0/dist/sweetalert2.all.min.js
"></script>
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
        </script>

        <script>
            // fungsi delete confirm
            function confirmDelete(id) {
                Swal.fire({
                    title: "Apakah Anda yakin?",
                    text: "Anda tidak akan dapat mengembalikan ini!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Ya, Hapus"
                }).then((result) => {
                    if (result.isConfirmed) {
                        Swal.fire({
                            title: "Terhapus!",
                            text: "Data sudah terhapus!.",
                            icon: "success"
                        });
                        setTimeout(function () {
                            window.location.href = '../Admin/delete.php?id=' + id;
                        }, 7000);
                    }
                });
            }
        </script>

        <script>
            // Fungsi pencarian
            const searchInput = document.getElementById('searchInput');
            const searchIcon = document.getElementById('searchIcon');
            const rows = document.querySelectorAll('.user-row');

            function searchRows() {
                const query = searchInput.value.toLowerCase();
                rows.forEach(row => {
                    const nama = row.querySelector('td:nth-child(2) p').textContent.toLowerCase();
                    const email = row.querySelector('td:nth-child(3) p').textContent.toLowerCase();
                    const noWa = row.querySelector('td:nth-child(4) p').textContent.toLowerCase();

                    if (nama.includes(query) || email.includes(query) || noWa.includes(query)) {
                        row.style.display = '';
                    } else {
                        row.style.display = 'none';
                    }
                });
            }

            searchInput.addEventListener('input', searchRows);
            searchIcon.addEventListener('click', searchRows);
        </script>

        <script>
            //Fungsi untuk menampilkan atau menyembunyikan dropdown menu
            const adminIcon = document.getElementById('adminIcon');
            const dropdownMenu = document.getElementById('dropdownMenu');

            adminIcon.addEventListener('click', () => {
                dropdownMenu.classList.toggle('hidden');
            });

            //Fungsi untuk menutup dropdown menu ketika mengklik di luar area dropdown
            window.addEventListener('click', function (event) {
                if (!adminIcon.contains(event.target) && !dropdownMenu.contains(event.target)) {
                    dropdownMenu.classList.add('hidden');
                }
            });
        </script>

</body>



</html>