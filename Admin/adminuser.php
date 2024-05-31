<?php
include "db/koneksi.php";

$sql = "SELECT * FROM user";
$result = mysqli_query($conn, $sql);
?>







<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../E-nvite/src/output.css">
    <link rel="shortcut icon" href="img/admin.ico" type="image/x-icon">

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gluten:wght@100..900&display=swap" rel="stylesheet">


    <title>Admin User</title>
</head>

<body class="h-screen flex">
    <!-- sidebar -->
    <div class="bg-blue-950 text-white h-screen pt-5 w-64 relative z-20 transition-all duration-300 ease-in-out"
        id="sidebar">
        <div class="flex items-center justify-center bg-slate-100 p-3 rounded-full mx-auto" id="logo-container"
            style="width: 5rem;">
            <img src="../E-nvite/img/logo.png" alt="Logo" class="w-full h-auto">
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
                <a href="#"
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
            <div class="mr-10 font-medium text-lg flex items-center justify-center">Admin
                <span><img src="../E-nvite/img/admin.ico" alt="admin"
                        class="w-12 ml-3 p-2 bg-slate-300 rounded-full"></span>
            </div>
        </div>
        <!-- Content -->
        <div class="flex-col p-4 bg-white relative ">
            <h1 class="text-xl font-semibold ml-7  ">User</h1>
            <div class="bottom-border"></div>
        </div>

        <!-- table -->
        <a href="adminusercreate.php">
            <div
                class="font-bold absolute top-40 start-80 flex items-center shadow-md outline-none bg-amber-900 p-3 rounded-xl text-white hover:bg-amber-950 ">
                Tambah Data
                <i class='bx bxs-user-plus text-2xl ml-2'></i>
            </div>
        </a>



        <div
            class="relative flex flex-col mt-24 mx-auto w-[90%]  overflow-auto text-gray-700 bg-white shadow-md rounded-xl bg-clip-border">
            <table class="w-full  table-auto min-w-max text-center">
                <thead>
                    <tr class="bg-gray-200 border-b-2 border-black border-opacity-50">
                        <th class="p-4 w-2 bg-red-400">
                            <p class="block font-sans text-sm antialiased font-semibold leading-none ">
                                ID
                            </p>
                        </th>
                        <th class="p-4 bg-slate-400 w-72">
                            <p class="block font-sans text-sm antialiased font-semibold leading-none ">
                                Nama
                            </p>
                        </th>
                        <th class="p-4 bg-yellow-300 w-64  ">
                            <p class="block font-sans text-sm antialiased font-semibold leading-none ">
                                Email
                            </p>
                        </th>
                        <th class="p-4 bg-green-400  w-40   ">
                            <p class="block font-sans text-sm antialiased font-semibold leading-none">
                                NO Wa
                            </p>
                        </th>
                        <th class="p-4 bg-orange-400 ">
                            <p class="block font-sans text-sm antialiased font-semibold leading-none  ">
                                Action
                            </p>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (mysqli_num_rows($result) > 0): ?>
                        <?php while ($row = mysqli_fetch_assoc($result)): ?>
                            <tr>
                                <td class="p-4 border-b">
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
                                        <a href="delete.php?id=<?= $row["ID"] ?>" onclick="return confirm('Apa anda yakin?')"
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

        <style>
            .bottom-border::after {
                content: '';
                position: absolute;
                bottom: 0;
                left: 0;
                width: 100%;
                height: 2px;
                box-shadow: 0 7px 10px rgba(0, 0, 0, 0.5);
                /* Gradient transparan */
            }
        </style>

        <script>

        </script>
</body>



</html>