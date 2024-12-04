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
        <h1 class="text-3xl font-bold mb-4">Wayang Kulit Gagrag Banyumasan</h1>
        
        <div class="grid grid-cols-2 gap-4">
            <img src="\assets\img\Wayang1.jpeg" alt="Wayang 1" class="rounded-lg">
            <img src="\assets\img\Wayang 2.jpeg" alt="Wayang 2" class="rounded-lg">
        </div>

        <div class="mt-8">
            <div class="flex items-start space-x-4 mb-4">
                <img src="https://img.icons8.com/?size=100&id=77&format=png&color=000000" alt="Info" class="w-10 h-10">
                <div>
                    <h2 class="text-xl font-bold">Deskripsi</h2>
                    <p>Wayang kulit gagrag Banyumasan adalah salah satu gaya pedalangan di tanah Jawa, yang lebih dikenal dengan istilah pakeliran, dan berperan sebagai bentuk seni klangenan serta dijadikan wahana untuk mempertahankan nilai etika, devosional dan hiburan, yang kualitasnya selalu terjaga dan ditangani sungguh-sungguh oleh para pakar yang memahami benar. Pakeliran ini mencakup unsur-unsur yaitu, lakon wayang (penyajian alur cerita dan maknanya), sabet (seluruh gerak wayang), catur (narasi dan cakapan), karawitan (gendhing, sulukan, dan properti panggung). Pakeliran gagrag Banyumasan, mempunyai nuansa kerakyatan yang kental sebagaimana karakter masyarakatnya, jujur dan terus terang, dan hidup serta berkembang di daerah eks-Karesidenan Banyumas, merupakan ekspresi dan sifatnya lebih bebas, sederhana, serta lugas dan mampu bertahan sampai saat ini dalam menghadapi perubahan zaman, karena memperoleh simpati dan dicintai masyarakatnya.</p>
                </div>
            </div>

            <div class="flex items-start space-x-4 mb-4">
                <img src="https://img.icons8.com/?size=100&id=41414&format=png&color=000000" alt="Sejarah Singkat" class="w-10 h-10">
                <div>
                    <h2 class="text-xl font-bold">Sejarah Singkat</h2>
                    <p>Wayang Kulit Gagrag Banyumas memiliki sejarah panjang yang dipengaruhi oleh budaya Kerajaan Mataram, terutama dari Surakarta dan Yogyakarta. Meski demikian, masyarakat Banyumas berhasil mengembangkan gaya khas mereka sendiri yang lebih lugas dan dikenal dengan dialek "ngapak". Gaya ini mencerminkan karakter masyarakat Banyumas yang egaliter dan sederhana, berbeda dari gaya Surakarta yang lebih halus.</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>