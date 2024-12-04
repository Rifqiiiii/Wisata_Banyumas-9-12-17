<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destinasi Wisata Keluarga</title>
    <link href="/dist/output.css" rel="stylesheet">
    @vite('resources/css/app.css')
</head>
<body>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rekomendasi Destinasi Wisata Keluarga</title>
</head>
<body class="font-sans">
    <div class="relative min-h-screen">
        <!-- Background Image -->
        <div class="absolute inset-0 z-0">
            <img src="\assets\img\Foto.jpg" alt="Pemandangan alam" class="w-full h-full object-cover">
        </div>

        <!-- Content Overlay -->
        <div class="relative z-10 min-h-screen flex flex-col">
            <!-- Navigation -->
            <nav class="bg-transparent p-4">
                <div class="container mx-auto flex justify-between items-center">
                    <img src="\assets\img\LOGO_BANYUMAS-removebg-preview.png" alt="Logo" class="h-12">
                    <div class="hidden md:flex space-x-4">
                        <a href="{{ url('/') }}" class="text-white hover:text-gray-200">Beranda</a>
                        <a href="{{ url('/layanan') }}" class="text-white hover:text-gray-200">Layanan</a>
                        <a href="{{ url('/rekomendasi') }}" class="text-white hover:text-gray-200">Rekomendasi</a>
                        <a href="{{ url('/about') }}" class="text-white hover:text-gray-200" >Kontak</a>
                    </div>
                    <button class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">Login</button>
                </div>
            </nav>


     <!-- Contact Form -->
     <div class="bg-blue-500 rounded-lg p-6 shadow-lg">
                    <h2 class="text-2xl font-bold text-white mb-4">Masih Bingung? Butuh Konsultasi?</h2>
                    <form class="space-y-4">
                        <input type="text" placeholder="Nama" class="w-full p-2 rounded">
                        <input type="email" placeholder="Email" class="w-full p-2 rounded">
                        <textarea placeholder="Pesan" class="w-full p-2 rounded" rows="3"></textarea>
                        <button type="submit" class="bg-white text-blue-500 px-6 py-2 rounded font-bold hover:bg-gray-100">Kirim</button>
                    </form>
                </div>
            </main>

            <!-- Footer -->
            <footer class="bg-gray-800 text-white py-4">
                <div class="container mx-auto text-center">
                    <p>&copy; 2024 Rekomendasi Wisata Keluarga. All rights reserved.</p>
                </div>
            </footer>
</body>
</html>