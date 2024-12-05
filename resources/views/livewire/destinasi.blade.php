<head>
    @vite('resources/css/app.css')
</head>
<div class="container mx-auto p-6">
    <h2 class="text-2xl font-bold text-white mb-6">Rekomendasi Wisata</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        @foreach ($destinasi as $item)
            <div class="bg-white rounded-lg overflow-hidden shadow-md">
                <!-- Path gambar -->
                <img src="{{ asset('storage/' . $item->foto) }}" alt="{{ $item->nama_wisata }}" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="font-bold text-lg mb-2">{{ $item->nama_wisata }}</h3>
                    <p class="text-gray-600 mb-4">{{ $item->deskripsi }}</p>
                    <a href="#" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Detail</a>
                </div>
            </div>
        @endforeach
    </div>
</div>
