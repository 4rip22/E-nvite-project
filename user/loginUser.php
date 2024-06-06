
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login User</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/loginUser.css">
</head>
<body class="flex items-center justify-center h-screen">
    <!-- Kontainer utama untuk form login -->
    <div class="form-container bg-white p-8 rounded-lg shadow-md-lg w-full max-w-sm">
        <h2 class="text-2xl font-bold mb-6 text-center">Login</h2>
        <form action="set_login.php" method="POST">
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
            <button type="submit" class="w-full bg-purple-800 text-bold text-white py-2 rounded-lg border border-transparent transition-all hover:bg-white hover:text-purple-800 hover:border-purple-800 hover:text-bold">Login</button>
        </form>
        <a class="block text-center mt-4 text-blue-500 text-bold" href="../user/signUpUser.php">SIGN UP?</a>
    </div>
</body>
</html>
