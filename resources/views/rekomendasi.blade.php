<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destinasi Wisata Keluarga</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
    @vite('resources/css/app.css')
</head>
<body>
    <div class="bg-cover bg-center h-screen">
        <header class="flex justify-between items-center px-4 py-2 bg-white">
            <img src="Foto-Foto/LOGO_BANYUMAS-removebg-preview.png" alt="Logo" class="h-12">
            <nav>
                <ul class="flex space-x-4">
                    <li><a href="Beranda.html" class="text-blue-500">Beranda</a></li>
                    <li><a href="Layanan.html">Layanan</a></li>
                    <li><a href="Rekomendasi.html">Rekomendasi</a></li>
                    <li><a href="Kontak.html">Kontak</a></li>
                </ul>
            </nav>
            <a href="Login.html" class="bg-green-500 text-white px-4 py-2 rounded-md">Masuk</a>
        </header>

        <section class="bg-white p-6 shadow-md max-w-5xl mx-auto mt-10 rounded-lg">
            <h2 class="text-2xl font-bold mb-4">Rekomendasi Wisata</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="wisata-item">
                    <img src="Foto-Foto/TS.jpg" alt="Wisata Alam" class="w-full h-48 object-cover rounded-t-lg" loading="lazy">
                    <div class="bg-gray-100 p-4 rounded-b-lg">
                        <h3 class="text-xl font-bold mb-2">Wisata Alam</h3>
                        <p class="mb-2">Wisata Alam</p>
                        <a href="TS.html" class="bg-blue-500 text-white px-4 py-2 rounded-md inline-block">Lihat</a>
                        <p class="mt-2">Segarkan Jiwa dan Raga, Jelajahi Keindahan Alam!</p>
                    </div>
                </div>
                <div class="wisata-item">
                    <img src="Foto-Foto/Gorengan.jpg" alt="Mendoan" class="w-full h-48 object-cover rounded-t-lg" loading="lazy">
                    <div class="bg-gray-100 p-4 rounded-b-lg">
                        <h3 class="text-xl font-bold mb-2">Mendoan</h3>
                        <p class="mb-2">Wisata Kuliner</p>
                        <a href="Mendoan.html" class="bg-blue-500 text-white px-4 py-2 rounded-md inline-block">Lihat</a>
                        <p class="mt-2">Serunya Berpetualang dengan Rasa, Wisata Kuliner Penuh Kejutan!</p>
                    </div>
                </div>
                <div class="wisata-item">
                    <img src="Foto-Foto/Rumah Lengger.jpg" alt="Rumah Lengger Banyumas" class="w-full h-48 object-cover rounded-t-lg" loading="lazy">
                    <div class="bg-gray-100 p-4 rounded-b-lg">
                        <h3 class="text-xl font-bold mb-2">Rumah Lengger Banyumas</h3>
                        <p class="mb-2">Wisata Budaya</p>
                        <a href="Wayang.html" class="bg-blue-500 text-white px-4 py-2 rounded-md inline-block">Lihat</a>
                        <p class="mt-2">Jelajahi Keindahan Tradisi, Rasakan Pesona Budaya!</p>
                    </div>
                </div>
                <div class="wisata-item">
                    <img src="Foto-Foto/JenSud.jpg" alt="Wisata Sejarah" class="w-full h-48 object-cover rounded-t-lg" loading="lazy">
                    <div class="bg-gray-100 p-4 rounded-b-lg">
                        <h3 class="text-xl font-bold mb-2">Wisata Sejarah</h3>
                        <p class="mb-2">Wisata Sejarah</p>
                        <a href="JenSud.html" class="bg-blue-500 text-white px-4 py-2 rounded-md inline-block">Lihat</a>
                        <p class="mt-2">Ayo Menapaktilasi Warisan Leluhur, Wisata Sejarah yang Penuh Cerita!</p>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>
</html>