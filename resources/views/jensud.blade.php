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


  <div class="bg-white p-6 shadow-md max-w-3xl mx-auto mt-10 rounded-lg">
    <h1 class="text-2xl font-bold mb-4">Monumen Jendral Sudirman</h1>

    <div class="grid grid-cols-2 gap-4">
      <div>
        <img src="\assets\img\JenSud (1).jpeg" alt="Monumen Jendral Sudirman" class="w-full h-auto rounded-lg">
      </div>
      <div>
        <img src="\assets\img\JenSud (2).jpeg" alt="Monumen Jendral Sudirman" class="w-full h-auto rounded-lg">
      </div>
    </div>

    <div class="mt-6">
      <div class="flex items-center mb-2">
        <img src="https://img.icons8.com/?size=100&id=7880&format=png&color=000000" alt="Lokasi" class="w-10 h-10 mr-2">
        <div>
          <h2 class="text-xl font-bold">Lokasi Monumen</h2>
          <p>Monumen Panglima Besar Jenderal Soedirman berada dipintu masuk kota Purwokerto dari arah barat tepatnya sebelah timur Sungai Logawa.</p>
        </div>
      </div>

      <div class="flex items-center mb-2">
        <img src="https://img.icons8.com/?size=100&id=kJHq4oMOMvtA&format=png&color=000000" alt="Jam buka" class="w-10 h-10 mr-2">
        <div>
          <h2 class="text-xl font-bold">Jam Operasional</h2>
          <p>Senin - Minggu (07.30 - 17.00 WIB)</p>
        </div>
      </div>

      <div class="flex items-center mb-2">
        <img src="https://img.icons8.com/ios-filled/50/000000/ticket.png" alt="Harga tiket" class="w-10 h-10 mr-2">
        <div>
          <h2 class="text-xl font-bold">Harga Tiket Masuk</h2>
          <p>Dewasa: Rp. 3.000<br>Anak - anak: Rp. 2.000</p>
        </div>
      </div>

      <div class="flex items-center mb-2">
        <img src="https://img.icons8.com/?size=100&id=X6kYh8hdntqy&format=png&color=000000" alt="Deskripsi" class="w-10 h-10 mr-2">
        <div>
          <h2 class="text-xl font-bold">Deskripsi</h2>
          <p>Monumen ini terdiri dari dua lantai. Pada lantai bawah berisi foto-foto perjuangan Panglima Besar Jenderal Soedirman dalam merebut Yogyakarta kembali sebagai Ibukota Indonesia (pada saat itu) dari kolonial Belanda. Pada lantai dua berisi relief sejarah bangsa Indonesia dalam Perang kemerdekaan 1945 dan patung Jenderal Soedirman duduk diatas punggung kuda yang terbuat dari perunggu seberat 5,5 ton dengan tiggi 4,5 meter. Terlahir dengan nama Soedirman pada hai Senin Pon tanggal 24 Januari 1916, atau dalam hitungan jawa bertepatan dengan tanggal 18 Maulud 1846 Wuku Galungan. Pendidikan dimuli dari HIS dan dilanjutkan di MULO Wiworotomo Cilacap. Aktif dalam kepanduan Bangsa Indonesia (KBI) an Hizbul Wathon (HW). Sekolanya di HIK Surakarta tidak dapat dilanjutkan karena ayahnya meninggal dan kembali ke Cilacap. Sebelum bergabung dengan tentara beliau pernah menjadi guru HIS Muhammadiyah Cilacap.</p>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>