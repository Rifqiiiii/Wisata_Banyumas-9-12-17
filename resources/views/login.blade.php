<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <!-- Tambahkan link Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex items-center justify-center min-h-screen bg-[url('/assets/bg.jpg')] bg-cover bg-center">
<form id="Loginform" class="bg-white bg-opacity-50 p-8 rounded-lg shadow-md w-96">
        <div class="login-container">
            <h2 class="text-2xl font-bold mb-6 text-center">Login</h2>
            
            <label for="username" class="block text-sm font-medium mb-2">Username</label>
            <input type="text" name="username" id="username" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
            
            <label for="password" class="block text-sm font-medium mt-4 mb-2">Password</label>
            <input type="password" name="password" id="password" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
            
            <button type="submit" class="w-full bg-blue-500 text-white py-2 px-4 rounded-lg mt-6 hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400">
                Login
            </button>
        </div>
    </form>
    <script>
        document.getElementById('Loginform').addEventListener('submit', function(event){
    event.preventDefault();

    const correctUsername = 'travel';
    const correctPassword = '123';

    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;

    if (username === correctUsername && password === correctPassword){
        alert("login berhasil");
        window.location.href = '/home';
    }else{
        alert("username atau password tidak sesuai");
    }

});
    </script>
</body>
</html>
