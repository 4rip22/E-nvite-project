<?php
session_start();
include "db/koneksi.php";

$id = $_GET["id"];
$query = "SELECT * FROM user WHERE id='$id'";
$data = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
    <link rel="shortcut icon" href="img/admin.ico" type="image/x-icon">
    <link rel="stylesheet" href="src/output.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body class="bg-gray-100 min-h-screen flex items-center justify-center ">
    <div class="bg-white p-8 rounded shadow-md w-full max-w-2xl">
        <h2 class="text-2xl font-bold mb-6 text-center">Edit Data</h2>
        <?php while ($d = mysqli_fetch_array($data)): ?>
            <form action="update.php" method="post" class="space-y-4">
                <div>
                    <input type="hidden" name="id" value="<?php echo $d["ID"] ?>">
                    <label for="nama" class="block text-gray-700 font-medium mb-2">Nama<span
                            class="text-red-500">*</span></label>
                    <input type="text" id="nama" name="nama" value="<?php echo $d["Nama"] ?>" required
                        placeholder="Masukkan Nama Lengkap"
                        class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <div>
                    <label for="email" class="block text-gray-700 font-medium mb-2">Email<span
                            class="text-red-500">*</span></label>
                    <input type="email" id="email" name="email" value="<?php echo $d["Email"] ?>" required
                        placeholder="Masukkan Email"
                        class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <div>
                    <label for="no_wa" class="block text-gray-700 font-medium mb-2">Nomor WhatsApp<span
                            class="text-red-500">*</span></label>
                    <input type="tel" id="no_wa" name="no_wa" pattern="\d+" value="<?php echo $d["No Wa"] ?>" required
                        placeholder="Masukkan Nomor Whatsapp"
                        class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <div class="text-center">
                    <button type="submit" name="submit"
                        class="w-full bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600 focus:outline-none focus:bg-blue-600">Update</button>
                </div>
            </form>
        <?php endwhile; ?>
        <a href="adminuser.php">
            <div class="text-center">
                <button type="submit"
                    class="w-full bg-red-500 text-white py-2 px-4 rounded hover:bg-red-600 focus:outline-none focus:bg-red-700 mt-1">Batal</button>
            </div>
        </a>

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
</body>

</html>