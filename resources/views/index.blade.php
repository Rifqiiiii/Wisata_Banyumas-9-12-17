<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rekomendasi Destinasi Wisata Keluarga</title>
    <link href="/dist/output.css" rel="stylesheet">
    @vite('resources/css/app.css')
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
                        <a href="#" class="text-white hover:text-gray-200">Beranda</a>
                        <a href="{{ url('/layanan') }}" class="text-white hover:text-gray-200">Layanan</a>
                        <a href="{{ url('/rekomendasi') }}" class="text-white hover:text-gray-200">Rekomendasi</a>
                        <a href="{{ url('/about') }}" class="text-white hover:text-gray-200">Kontak</a>
                    </div>
                </div>
            </nav>

            <!-- Main Content -->
            <main class="flex-grow container mx-auto px-4 py-8">
                <!-- Hero Section -->
                <div class="text-white mb-12">
                    <h1 class="text-4xl md:text-5xl font-bold mb-4">Rekomendasi Destinasi Wisata Keluarga</h1>
                    <p class="text-xl md:text-2xl">Temukan tempat liburan keluarga terbaik di Indonesia</p>
                </div>

                <!-- Services Section -->
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

                <!-- Recommendations Section -->
                <div class="mb-12">
                    <h2 class="text-2xl font-bold text-white mb-6">Rekomendasi Wisata</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                        <div class="bg-white rounded-lg overflow-hidden shadow-md">
                            <img src="\assets\img\TS.jpg" alt="Air Terjun" class="w-full h-48 object-cover">
                            <div class="p-4">
                                <h3 class="font-bold text-lg mb-2">Air Terjun Indah</h3>
                                <p class="text-gray-600 mb-4">Nikmati keindahan alam air terjun yang memukau</p>
                                <a href="{{ url('/ts') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Detail</a>
                            </div>
                        </div>

                        <div class="bg-white rounded-lg overflow-hidden shadow-md">
                            <img src="\assets\img\Gorengan.jpg" alt="Kuliner" class="w-full h-48 object-cover">
                            <div class="p-4">
                                <h3 class="font-bold text-lg mb-2">Wisata Kuliner</h3>
                                <p class="text-gray-600 mb-4">Jelajahi aneka ragam kuliner khas daerah</p>
                                <a href="{{ url('/mendoan') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Detail</a>
                            </div>
                        </div>

                        <div class="bg-white rounded-lg overflow-hidden shadow-md">
                            <img src="\assets\img\Rumah Lengger.jpg" alt="Museum" class="w-full h-48 object-cover">
                            <div class="p-4">
                                <h3 class="font-bold text-lg mb-2">Rumah Lengger Banyumas</h3>
                                <p class="text-gray-600 mb-4">Jelajahi Keindahan Tradisi, Rasakan Pesona Budaya!</p>
                                <a href="{{ url('/wayang') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Detail</a>
                            </div>
                        </div>

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

                <!-- Contact Form -->
                <div class="bg-blue-500 rounded-lg p-6 shadow-lg">
                    <h2 class="text-2xl font-bold text-white mb-4">Masih Bingung? Butuh Konsultasi?</h2>
                    <form id="contactForm" class="space-y-4">
                        <input id="name" type="text" placeholder="Nama" class="w-full p-2 rounded">
                        <input id="email" type="email" placeholder="Email" class="w-full p-2 rounded">
                        <textarea id="message" placeholder="Pesan" class="w-full p-2 rounded" rows="3"></textarea>
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
        </div>
    </div>

    <!-- JavaScript -->
    <script>
        document.getElementById('contactForm').addEventListener('submit', function(event) {
            event.preventDefault(); // Mencegah pengiriman formulir default

            // Ambil nilai input
            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const message = document.getElementById('message').value;

            // Validasi sederhana (opsional)
            if (!name || !email || !message) {
                alert('Harap isi semua bidang!');
                return;
            }

            // Tampilkan notifikasi
            alert(`Terima kasih, ${name}! Pesan Anda telah dikirim.`);

            // Reset formulir
            document.getElementById('contactForm').reset();
        });
    </script>
</body>
</html>
