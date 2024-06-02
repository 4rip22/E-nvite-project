<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up User</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/loginUser.css">
</head>
<body class="flex items-center justify-center h-screen">
    <!-- Kontainer utama untuk form login -->
    <div class="form-container bg-white p-8 rounded-lg shadow-md-lg w-full max-w-sm">
        <h2 class="text-2xl font-bold mb-6 text-center">Sign Up</h2>
        <form action="register.php" method="POST">
            <div class="mb-4">
                <label for="nama" class="block text-gray-700">Nama</label>
                <div class="input-group">
                    <input type="text" name="nama" id="nama" placeholder="Nama" class="w-full px-3 py-2 border rounded-lg custom-input1" required>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person icon" viewBox="0 0 16 16">
                        <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z"/>
                    </svg>
                </div>  
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-700">Email</label>
                <div class="input-group">
                    <input type="email" name="email" id="email" placeholder="Email" class="w-full px-3 py-2 border rounded-lg custom-input" required>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope icon" viewBox="0 0 16 16">
                        <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z"/>
                    </svg>
                </div>
            </div>
            <div class="mb-4">
                <label for="password" class="block text-gray-700">Password</label>
                <div class="input-group">
                    <input type="password" name="password" id="password" placeholder="Password" class="w-full px-3 py-2 border rounded-lg custom-input1" required>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-lock icon" viewBox="0 0 16 16">
                        <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2m3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2M5 8h6a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V9a1 1 0 0 1 1-1"/>
                    </svg>
                </div>
            </div>
            <div class="mb-4">
                <label for="nomor" class="block text-gray-700">No Wa</label>
                <div class="input-group">
                    <input type="text" onkeypress="return texttonumber(event)" name="nomor" id="nomor" placeholder="No Wa" class="w-full px-3 py-2 border rounded-lg custom-input1" required>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone icon" viewBox="0 0 16 16">
                        <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1
                        034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z"/>
                    </svg>
                </div>
            </div>
            <button type="submit" class="w-full bg-purple-800 text-bold text-white py-2 rounded-lg border border-transparent transition-all hover:bg-white hover:text-purple-800 hover:border-purple-800 hover:text-bold">Next</button>
        </form>
    </div>
    <script>
        function texttonumber(evt) {
            var charcode = (evt.which) ? evt.which : event.keyCode

            if(charcode > 31 && (charcode < 48 || charcode > 57)){     
                return false;
                return true;
            }
        }
    </script>
</body>
</html>
