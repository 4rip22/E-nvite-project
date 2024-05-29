<?php
include "db/koneksi.php"
    ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/admin.ico" type="image/x-icon">
    <link rel="stylesheet" href="src/output.css">
    <title>Login Admin</title>

</head>

<body class="flex flex-col items-center justify-center min-h-screen bg-cover bg-center backdrop-blur-sm "
    style="background-image: url('img/bg.jpg')">
    <div class="flex w-full lg:w-1/2 justify-center items-center bg-slate-400 bg-opacity-20 space-y-8 py-8 rounded-lg">
        <div class="w-full px-8 md:px-32 lg:px-24">
            <form class="bg-white rounded-md shadow-2xl p-5">
                <h1 class="text-gray-800 font-bold text-2xl mb-1 flex justify-center items-center">Hello ADMIN!</h1>
                <p class="text-sm font-normal text-gray-600  flex justify-center items-center">Welcome Back!</p>
                <div class="flex items-center justify-center pt-2 pb-5"><img src="img/key.png" alt="" width="40"></div>
                <div
                    class="flex items-center border-2 mb-8 py-2 px-3 rounded-2xl focus-within:ring-2 focus-within:ring-blue-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2"
                            d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                    </svg>
                    <input id="email" class=" pl-2 w-full outline-none border-none" type="email" name="email"
                        placeholder="Email Address" required />
                </div>
                <div
                    class="flex items-center border-2 mb-12 py-2 px-3 rounded-2xl focus-within:ring-2 focus-within:ring-blue-500 ">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path fillRule="evenodd"
                            d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                            clipRule="evenodd" />
                    </svg>
                    <input class="pl-2 w-full outline-none border-none" type="password" name="password" id="password"
                        placeholder="Password" required />
                </div>
                <button type="submit" name="submit"
                    class="block w-full bg-indigo-600 mt-5 py-2 rounded-2xl hover:bg-indigo-700 hover:-translate-y-1 transition-all duration-500 text-white font-semibold mb-2">Login</button>
            </form>
            <footer class="py-4">
            <div class=" container mx-auto flex justify-center items-center text-xs font-normal italic text-white text-opacity-50">
                <p>&copy;Copyright2024 | E-nvite</p>
            </div>
        </footer>
        </div>

        
</body>

</html>