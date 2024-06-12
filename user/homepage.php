<?php
include "../db/koneksi.php";

include "../user/session-user/cekloginuser.php";
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.2/tailwind.min.css">
    <title>E-nvite - Homepage</title>
    <style>
        /* Custom styles */
        .custom-header-padding {
            padding-top: 50px;
            /* Adjust this value to set the desired top padding */
        }

        #home {
            background-image: url('../img/smartmockups2.jpg');
            background-size: cover;
            background-position: center;
            color: white;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
            height: 35vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
        }
    </style>
</head>

<body>
    <header class="text-gray-700 body-font fixed top-0 left-0 w-full z-10 border-b border-gray-200"
        style="background-color: white;">
        <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
            <div class="flex items-center">
                <img src="../img/logo.png" alt="E-nvite" class="h-8 mr-4">
                <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0" href="#">
                    <span class="ml-3 text-2xl font-medium text-indigo-500">E-nvite</span>
                </a>
            </div>
            <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center mr-4">
                <a class="mr-5 hover:text-gray-900 font-medium mr-10" href="#home">Home</a>
                <a class="mr-5 hover:text-gray-900 font-medium mr-10" href="#desain">Desain</a>
                <a class="mr-5 hover:text-gray-900 font-medium mr-10" href="pesanan.html">Pesanan</a>
                <a class="mr-5 hover:text-gray-900 font-medium mr-10" href="profile.html">Profile</a>
            </nav>
        </div>
    </header>

    <section id="home" class="text-gray-700 body-font custom-header-padding">
        <div class="container mx-auto flex flex-col items-center justify-center h-full">
            <div class="flex-grow flex flex-col items-center justify-center text-center">
                <h1 class="title-font sm:text-4xl text-4xl mb-4 font-medium text-white">SELAMAT DATANG!</h1>
                <p class="mb-8 leading-relaxed text-white">Ayo mulai buat undangan online mu!</p>
            </div>
        </div>
    </section>
    <section id="desain" class="text-gray-700 body-font border-t border-gray-200 h-screen">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-wrap w-full mb-20 flex-col items-center text-center">
                <h1 class="sm:text-3xl text-2xl text-indigo-500 font-medium title-font mb-2 text-gray-900">Desain</h1>
                <p class="lg:w-1/2 w-full leading-relaxed text-base">Pilih kategori desain</p>
            </div>
            <div class="flex flex-wrap -m-4">
                <div class="p-4 md:w-1/3">
                    <div class="flex rounded-lg h-full bg-gray-100 p-8 flex-col">
                        <h2 class="text-gray-900 text-lg title-font font-medium text-3xl mb-4 text-center">Mewah</h2>
                        <div class="flex items-center mb-3">
                            <img src="../img/luxury.jpg" alt="E-nvite"
                                class="w-80 h-80 aspect-square w-full rounded-object-cover">
                        </div>
                        <div class="flex-grow">
                            <p class="leading-relaxed text-base">Desain mewah sangat cocok untuk acara pernikahan.</p>
                            <a class="mt-3 text-indigo-500 inline-flex items-center" href="mewah.html">Buat
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="p-4 md:w-1/3">
                    <div class="flex rounded-lg h-full bg-gray-100 p-8 flex-col">
                        <h2 class="text-gray-900 text-lg title-font font-medium text-3xl mb-4 text-center">Elegan</h2>
                        <div class="flex items-center mb-3">
                            <img src="../img/elegant.png" alt="E-nvite"
                                class="w-80 h-80 aspect-square w-full rounded-object-cover">
                        </div>
                        <div class="flex-grow">
                            <p class="leading-relaxed text-base">Desain elegan cocok untuk acara-acara formal seperti
                                gala dinner sampai pernikahan di mana kesan profesional dan kemewahan sangat diutamakan.
                            </p>
                            <a class="mt-3 text-indigo-500 inline-flex items-center" href="Elegant.html">Buat
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="p-4 md:w-1/3">
                    <div class="flex rounded-lg h-full bg-gray-100 p-8 flex-col">
                        <h2 class="text-gray-900 text-lg title-font font-medium text-3xl mb-4 text-center">Fun</h2>
                        <div class="flex items-center mb-3">
                            <img src="../img/fun.jpeg" alt="E-nvite"
                                class="w-80 h-80 aspect-square w-full rounded-object-cover">
                        </div>
                        <div class="flex-grow">
                            <p class="leading-relaxed text-base">Pilihan yang tepat untuk acara-acara seperti pesta
                                ulang tahun atau acara perusahaan yang membutuhkan suasana yang lebih santai dan
                                menyenangkan.</p>
                            <a class="mt-3 text-indigo-500 inline-flex items-center" href="Fun.html">Buat
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="harga" class="text-gray-700 body-font border-t border-gray-200 mt-28">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-wrap w-full mb-20 flex-col items-center text-center">
                <h1 class="sm:text-3xl text-2xl text-indigo-500 font-medium title-font mb-2 text-gray-900">Harga</h1>
                <p class="lg:w-1/2 w-full leading-relaxed text-base">Berbagai pilihan harga</p>
            </div>
            <div class="flex flex-wrap -m-4">
                <div class="xl:w-1/3 md:w-1/2 p-4">
                    <div
                        class="border border-gray-300 p-6 rounded-lg transition transform hover:translate-y-2 hover:border-green-500">
                        <h2 class="text-lg text-gray-900 font-medium title-font mb-2">Basic</h2>
                        <p class="leading-relaxed text-base">Mulai dari 10 ribu rupiah!</p>
                    </div>
                </div>
                <div class="xl:w-1/3 md:w-1/2 p-4">
                    <div
                        class="border border-gray-300 p-6 rounded-lg transition transform hover:translate-y-2 hover:border-yellow-500">
                        <h2 class="text-lg text-gray-900 font-medium title-font mb-2">Pro</h2>
                        <p class="leading-relaxed text-base">Mulai dari 25 ribu rupiah!</p>
                    </div>
                </div>
                <div class="xl:w-1/3 md:w-1/2 p-4">
                    <div
                        class="border border-gray-300 p-6 rounded-lg transition transform hover:translate-y-2 hover:border-blue-500">
                        <h2 class="text-lg text-gray-900 font-medium title-font mb-2">Enterprise</h2>
                        <p class="leading-relaxed text-base">Mulai dari 100 ribu rupiah!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="text-gray-700 body-font border-t border-gray-200">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-wrap w-full mb-20 flex-col items-center text-center">
                <h1 class="sm:text-3xl text-2xl text-indigo-500 font-medium title-font mb-2 text-gray-900">
                    Langkah-langkah pembuatan</h1>
                <p class="lg:w-1/2 w-full leading-relaxed text-base">Kemudahan dalam membuat undangan</p>
            </div>
            <div class="flex flex-wrap -m-4">
                <div class="xl:w-1/3 md:w-1/2 p-4">
                    <div
                        class="border border-gray-300 p-6 rounded-lg transition transform hover:translate-y-1 hover:border-indigo-500">
                        <h2 class="text-lg text-gray-900 font-medium title-font mb-2">Langkah 1</h2>
                        <p class="leading-relaxed text-base">Buat akun baru dengan cara mengisikan email dan password
                            atau daftar menggunakan akun Google.</p>
                    </div>
                </div>
                <div class="xl:w-1/3 md:w-1/2 p-4">
                    <div
                        class="border border-gray-300 p-6 rounded-lg transition transform hover:translate-y-2 hover:border-indigo-500">
                        <h2 class="text-lg text-gray-900 font-medium title-font mb-2">Langkah 2</h2>
                        <p class="leading-relaxed text-base">Isi informasi lengkap, lokasi dan waktu acara, pilih desain
                            undangan dan upload foto ke galeri.</p>
                    </div>
                </div>
                <div class="xl:w-1/3 md:w-1/2 p-4">
                    <div
                        class="border border-gray-300 p-6 rounded-lg transition transform hover:translate-y-1 hover:border-indigo-500">
                        <h2 class="text-lg text-gray-900 font-medium title-font mb-2">Langkah 3</h2>
                        <p class="leading-relaxed text-base">Setelah undangan selesai dibuat, Kamu dapat langsung
                            menyebarkan ke keluarga atau kerabat lalu pantau kehadiran serta ucapan dari tamu.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="text-gray-700 body-font border-t border-gray-200">
        <div class="container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col">
            <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
                <img src="../img/logo.png" alt="E-nvite" class="h-10">
                <span class="ml-3 text-xl">E-nvite</span>
            </a>
            <p class="text-sm text-gray-500 sm:ml-6 sm:mt-0 mt-4">© 2024 E-nvite —
                <a href="https://twitter.com/e-nvite" class="text-gray-600 ml-1" rel="noopener noreferrer"
                    target="_blank">@e-nvite</a>
            </p>
            <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
                <a class="text-gray-500" href="https://www.facebook.com/e-nvite" target="_blank">
                    <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        class="w-5 h-5" viewBox="0 0 24 24">
                        <path
                            d="M18 2h-3a6 6 0 00-6 6v3H6a1 1 0 00-1 1v4a1 1 0 001 1h3v5a1 1 0 001 1h4a1 1 0 001-1v-5h3a1 1 0 001-1v-4a1 1 0 00-1-1h-3V8a2 2 0 012-2h3z">
                        </path>
                    </svg>
                </a>
                <a class="ml-3 text-gray-500" href="https://twitter.com/e-nvite" target="_blank">
                    <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        class="w-5 h-5" viewBox="0 0 24 24">
                        <path
                            d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
                        </path>
                    </svg>
                </a>
                <a class="ml-3 text-gray-500" href="https://www.instagram.com/e-nvite" target="_blank">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                        <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                        <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37z"></path>
                        <path d="M17.5 6.5h.01"></path>
                    </svg>
                </a>
                <a class="ml-3 text-gray-500" href="https://www.linkedin.com/company/e-nvite" target="_blank">
                    <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
                        <path stroke="none"
                            d="M16 8a6 6 0 00-11.42 2 6.43 6.43 0 00.2 1.53A6 6 0 008 8h2c0 1.65-1.67 3-3 3H5a3 3 0 00-3 3v5h3v-5h2a3 3 0 003 3 3 3 0 003-3v-1a2.7 2.7 0 00-.5-.82A3 3 0 0016 8zm-1.5 7.5H15v-1c0-.85-.67-1.5-1.5-1.5H12v2h2.5zm-3-3H12v-1.5H10a1.5 1.5 0 00-1.5 1.5v1.5H9v-2H8V15h1.5zm-1.5 2.5H7V15H6v2h1zm0-4H6V8h1zm-2 4H4v-2h1zm-1-4V8h1zm3-3h1v2h-1zm2 0h1v2h-1zm0 4h1v2h-1z">
                        </path>
                    </svg>
                </a>
            </span>
        </div>
    </footer>
    <script>
        document.querySelectorAll('nav a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();

                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>
</body>

</html>