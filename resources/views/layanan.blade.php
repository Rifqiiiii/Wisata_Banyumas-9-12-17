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

        <div class="grid grid-cols-3 gap-4 p-6 bg-white shadow-md max-w-3xl mx-auto mt-10 rounded-lg">
            <div class="flex flex-col items-center">
                <img src="https://img.icons8.com/ios-filled/50/000000/medal.png" alt="Rekomendasi" class="h-12 w-12">
                <p class="mt-2 text-center">Kami merekomendasikan destinasi wisata yang wajib kalian kunjungi</p>
            </div>
            <div class="flex flex-col items-center">
                <img src="https://img.icons8.com/ios-filled/50/000000/ticket.png" alt="Harga tiket" class="h-12 w-12">
                <p class="mt-2 text-center">Memberi tahu harga tiket masuk untuk lokasi wisata</p>
            </div>
            <div class="flex flex-col items-center">
                <img src="https://img.icons8.com/ios-filled/50/000000/map-marker.png" alt="Lokasi wisata" class="h-12 w-12">
                <p class="mt-2 text-center">Memberi tahu anda lokasi wisata ingin anda kunjungi dan wisata terdekat disekitar anda</p>
            </div>
        </div>
    </div>
</body>
</html>