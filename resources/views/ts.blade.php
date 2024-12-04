<!DOCTYPE html>
<html lang="id">
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
                        <a href="{{ url('/home') }}" class="text-white hover:text-gray-200">Beranda</a>
                        <a href="{{ url('/layanan') }}" class="text-white hover:text-gray-200">Layanan</a>
                        <a href="{{ url('/rekomendasi') }}" class="text-white hover:text-gray-200">Rekomendasi</a>
                        <a href="{{ url('/about') }}" class="text-white hover:text-gray-200" >Kontak</a>
                    </div>
                </div>
            </nav>

    <div class="bg-white p-6 shadow-md max-w-3xl mx-auto mt-10 rounded-lg">
        <h1 class="text-3xl font-bold mb-4">Telaga Sunyi</h1>
        
        <div class="grid grid-cols-2 gap-4">
            <img src="\assets\img\Telaga Sunyi (1).jpeg" alt="Telaga Sunyi 1" class="rounded-lg">
            <img src="\assets\img\Telaga Sunyi (2).jpeg" alt="Telaga Sunyi 2" class="rounded-lg">
        </div>

        <div class="mt-8">
            <div class="flex items-start space-x-4 mb-4">
                <img src="https://img.icons8.com/?size=100&id=7880&format=png&color=000000" alt="Lokasi" class="w-10 h-10">
                <div>
                    <h2 class="text-xl font-bold">Lokasi Telaga Sunyi di Purwokerto</h2>
                    <p>Telaga Sunyi termasuk sebagai destinasi wisata yang strategis, letaknya hanya sekitar 16 kilometer dari pusat kota. Lebih tepatnya, Telaga Sunyi berada di Desa Limpakuwus, Kecamatan Sumbang, Kabupaten Banyumas, Jawa Tengah. Hanya dengan menempuh waktu 30 menit saja, kamu dan orang-orang terdekat sudah bisa sampai di tempat wisata alam yang indah ini, loh!</p>
                </div>
            </div>
            <div class="flex items-start space-x-4 mb-4">
                <img src="https://img.icons8.com/?size=100&id=kJHq4oMOMvtA&format=png&color=000000" alt="Jam buka" class="w-10 h-10">
                <div>
                    <h2 class="text-xl font-bold">Jam buka Telaga Sunyi:</h2>
                    <p>Telaga Sunyi buka setiap hari, mulai dari Senin sampai Minggu<br>07.00 - 17.00</p>
                </div>
            </div>
            <div class="flex items-start space-x-4 mb-4">
                <img src="https://img.icons8.com/ios-filled/50/000000/ticket.png" alt="Harga tiket" class="w-10 h-10">
                <div>
                    <h2 class="text-xl font-bold">Harga Tiket Masuk</h2>
                    <p>Rp15.000</p>
                </div>
            </div>
        </div>

        <div class="mt-8">
            <h2 class="text-2xl font-bold mb-4">Aktivitas Seru di Telaga Sunyi</h2>
            <ul class="space-y-4">
                <li class="flex items-center space-x-4">
                    <img src="https://img.icons8.com/?size=100&id=11800&format=png&color=000000" alt="Berenang" class="w-10 h-10">
                    <span>Berenang di Kolam Telaga Sunyi</span>
                </li>
                <li class="flex items-center space-x-4">
                    <img src="https://img.icons8.com/?size=100&id=9892&format=png&color=000000" alt="Diving" class="w-10 h-10">
                    <span>Diving dan Snorkeling</span>
                </li>
                <li class="flex items-center space-x-4">
                    <img src="https://img.icons8.com/?size=100&id=95243&format=png&color=000000" alt="Mendoan" class="w-10 h-10">
                    <span>Menyicipi Mendoan Khas Banyumas yang Lezat</span>
                </li>
                <li class="flex items-center space-x-4">
                    <img src="https://img.icons8.com/?size=100&id=9883&format=png&color=000000" alt="Gua" class="w-10 h-10">
                    <span>Menelusuri Gua di Telaga Sunyi</span>
                </li>
                <li class="flex items-center space-x-4">
                    <img src="https://img.icons8.com/?size=100&id=bb9u1vRTvtaU&format=png&color=000000" alt="Selfie" class="w-10 h-10">
                    <span>Selfie di Bawah Air</span>
                </li>
            </ul>
        </div>
    </div>
</body>
</html>