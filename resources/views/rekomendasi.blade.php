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
                        <a href="{{ url('/home') }}" class="text-white hover:text-gray-200">Beranda</a>
                        <a href="{{ url('/layanan') }}" class="text-white hover:text-gray-200">Layanan</a>
                        <a href="{{ url('/rekomendasi') }}" class="text-white hover:text-gray-200">Rekomendasi</a>
                        <a href="{{ url('/about') }}" class="text-white hover:text-gray-200" >Kontak</a>
                    </div>
                   
                </div>
            </nav>

            <div class="mb-12">
    <h2 class="text-2xl font-bold text-white mb-6">Rekomendasi Wisata</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        <!-- Card 1 -->
        <div class="bg-white rounded-lg overflow-hidden shadow-md">
            <img src="\assets\img\TS.jpg" alt="Air Terjun" class="w-full h-48 object-cover">
            <div class="p-4">
                <h3 class="font-bold text-lg mb-2">Air Terjun Indah</h3>
                <p class="text-gray-600 mb-4">Nikmati keindahan alam air terjun yang memukau</p>
                <a href="{{ url('/ts') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Detail</a>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="bg-white rounded-lg overflow-hidden shadow-md">
            <img src="\assets\img\Gorengan.jpg" alt="Kuliner" class="w-full h-48 object-cover">
            <div class="p-4">
                <h3 class="font-bold text-lg mb-2">Wisata Kuliner</h3>
                <p class="text-gray-600 mb-4">Jelajahi aneka ragam kuliner khas daerah</p>
                <a href="{{ url('/mendoan') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Detail</a>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="bg-white rounded-lg overflow-hidden shadow-md">
            <img src="\assets\img\Rumah Lengger.jpg" alt="Museum" class="w-full h-48 object-cover">
            <div class="p-4">
                <h3 class="font-bold text-lg mb-2">Rumah Lengger Banyumas</h3>
                <p class="text-gray-600 mb-4">Jelajahi Keindahan Tradisi, Rasakan Pesona Budaya!</p>
                <a href="{{ url('/wayang') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Detail</a>
            </div>
        </div>

        <!-- Card 4 -->
        <div class="bg-white rounded-lg overflow-hidden shadow-md">
            <img src="\assets\img\JenSud (2).jpeg" alt="Taman Hiburan" class="w-full h-48 object-cover">
            <div class="p-4">
                <h3 class="font-bold text-lg mb-2">Museum Sejarah</h3>
                <p class="text-gray-600 mb-4">Ayo Menapaktilasi Warisan Leluhur, Wisata Sejarah yang Penuh Cerita!</p>
                <a href="{{ url('/jensud') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Detail</a>
            </div>
        </div>
    </div>
</div>
</body>
</html>