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
            <h1 class="text-2xl font-bold mb-4">Mendoan</h1>
            
            <div class="grid grid-cols-2 gap-4">
                <img src="\assets\img\Mendo1.jpeg" alt="Mendoan 1" class="w-full h-auto rounded-lg">
                <img src="\assets\img\Mendo2.jpeg" alt="Mendoan 2" class="w-full h-auto rounded-lg">
            </div>

            <div class="mt-6">
                <div class="flex items-start mb-4">
                    <img src="https://img.icons8.com/?size=100&id=77&format=png&color=000000" alt="Info" class="w-10 h-10 mr-4">
                    <div>
                        <h2 class="text-xl font-bold mb-2">Deskripsi</h2>
                        <p>Mendoan tempe disajikan dalam keadaan panas disertai dengan cabe rawit atau sambal kecap. Mendoan tempe dapat dijadikan sebagai lauk makan ataupun makanan ringan untuk menemani minum teh atau kopi saat santai. Mendoan tempe mudah ditemui di warung-warung tradisional di wilayah eks karesidenan Banyumas dan Tegal. Untuk wilayah Banyumas, para pelancong membeli oleh-oleh mendoan tempe di daerah Sawangan, Purwokerto, yang merupakan pusat jajanan khas Purwokerto. Rasa yang "unik" membuat makanan ini menyebar hingga ke luar daerah Banyumas. Tempe Mendoan dapat ditemui di kota-kota besar Jawa Tengah, bahkan hingga ke Jakarta. Di kota-kota lain di Jawa Tengah seperti Semarang, Mendoan lebih merujuk ke tempe goreng tepung, atau di daerah lain disebut tempe kemul, di mana tempe yang berbentuk tipis itu hanya irisan. Hal ini sedikit menimbulkan kerancuan, terutama bagi pendatang dari Jawa Tengah bagian barat.</p>
                    </div>
                </div>

                <div class="flex items-start mb-4">
                    <img src="https://img.icons8.com/?size=100&id=41414&format=png&color=000000" alt="Sejarah Singkat" class="w-10 h-10 mr-4">
                    <div>
                        <h2 class="text-xl font-bold mb-2">Sejarah Singkat</h2>
                        <p>Diketahui, penamaan tempe mendoan disinyalir diambil dari kata mendo yang dalam bahasa Jawa Banyumas yang berarti setengah matang. Dapat dikatakan bahwa nama tempe mendoan diambil dari teknik memasaknya.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>