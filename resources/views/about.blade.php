<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
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