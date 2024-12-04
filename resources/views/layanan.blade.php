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

            <div class="mb-12">
                    <h2 class="text-2xl font-bold text-white mb-6">Layanan Kami</h2>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <div class="bg-white p-6 rounded-lg shadow-md">
                            <svg class="w-12 h-12 mb-4 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"></path></svg>
                            <p class="text-gray-700">Daftar destinasi wisata keluarga terbaik</p>
                        </div>
                        <div class="bg-white p-6 rounded-lg shadow-md">
                            <svg class="w-12 h-12 mb-4 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            <p class="text-gray-700">Rekomendasi paket wisata sesuai budget</p>
                        </div>
                        <div class="bg-white p-6 rounded-lg shadow-md">
                            <svg class="w-12 h-12 mb-4 text-yellow-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                            <p class="text-gray-700">Panduan wisata lengkap untuk keluarga</p>
                        </div>
                    </div>
                </div>
</body>
</html>