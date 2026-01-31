@extends('layouts.app')

@section('title', 'Pelayanan - HKBP')

@section('content')
    <!-- Hero Section -->
    <section class="relative h-96 mt-16">
        <div class="absolute inset-0 bg-gradient-to-r from-blue-900 to-blue-700">
            <div class="absolute inset-0 bg-black opacity-50"></div>
            <img src="https://images.unsplash.com/photo-1511632765486-a01980e01a18?w=1920" alt="Pelayanan HKBP"
                class="w-full h-full object-cover mix-blend-overlay">
        </div>

        <div class="relative container mx-auto px-4 h-full flex items-center justify-center">
            <div class="text-white text-center">
                <h1 class="text-5xl md:text-6xl font-bold mb-4">Pelayanan</h1>
                <p class="text-xl md:text-2xl">Melayani dengan Kasih di Setiap Generasi</p>
            </div>
        </div>
    </section>

    <!-- Breadcrumb -->
    <div class="bg-white border-b">
        <div class="container mx-auto px-4 py-4">
            <div class="flex items-center text-sm text-gray-600">
                <a href="{{ route('home') }}" class="hover:text-blue-900">Home</a>
                <i class="fas fa-chevron-right mx-2 text-xs"></i>
                <span class="text-blue-900 font-semibold">Pelayanan</span>
            </div>
        </div>
    </div>

    <!-- Overview Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-800 mb-4">Bidang Pelayanan HKBP</h2>
                <div class="w-24 h-1 bg-blue-900 mx-auto mb-6"></div>
                <p class="text-gray-600 text-lg">
                    Kami melayani dengan kasih di berbagai bidang untuk membangun jemaat yang dewasa dalam iman,
                    dari anak-anak hingga lansia, dari pemuda hingga orang tua.
                </p>
            </div>

            <!-- Grid Pelayanan -->
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto">
                <!-- Sekolah Minggu -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition group cursor-pointer"
                    onclick="showDetail('sekolahMinggu')">
                    <div
                        class="h-48 bg-gradient-to-br from-yellow-400 to-orange-500 flex items-center justify-center relative overflow-hidden">
                        <i class="fas fa-child text-white text-6xl group-hover:scale-110 transition"></i>
                        <div class="absolute inset-0 bg-black opacity-0 group-hover:opacity-10 transition"></div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-2xl font-bold text-gray-800 mb-2">Sekolah Minggu</h3>
                        <p class="text-gray-600 mb-4">Pembinaan iman untuk anak-anak usia 3-12 tahun dengan metode
                            pembelajaran yang menyenangkan.</p>
                        <div class="flex items-center text-blue-900 font-semibold">
                            <span>Lihat Detail</span>
                            <i class="fas fa-arrow-right ml-2 group-hover:translate-x-2 transition"></i>
                        </div>
                    </div>
                </div>

                <!-- NHKBP (Pemuda) -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition group cursor-pointer"
                    onclick="showDetail('nhkbp')">
                    <div
                        class="h-48 bg-gradient-to-br from-blue-500 to-purple-600 flex items-center justify-center relative overflow-hidden">
                        <i class="fas fa-users text-white text-6xl group-hover:scale-110 transition"></i>
                        <div class="absolute inset-0 bg-black opacity-0 group-hover:opacity-10 transition"></div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-2xl font-bold text-gray-800 mb-2">NHKBP (Pemuda)</h3>
                        <p class="text-gray-600 mb-4">Naposobuhi HKBP untuk pemuda usia 13-35 tahun, mengembangkan
                            kepemimpinan dan spiritualitas.</p>
                        <div class="flex items-center text-blue-900 font-semibold">
                            <span>Lihat Detail</span>
                            <i class="fas fa-arrow-right ml-2 group-hover:translate-x-2 transition"></i>
                        </div>
                    </div>
                </div>

                <!-- ODHKBP (Perempuan) -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition group cursor-pointer"
                    onclick="showDetail('odhkbp')">
                    <div
                        class="h-48 bg-gradient-to-br from-pink-400 to-red-500 flex items-center justify-center relative overflow-hidden">
                        <i class="fas fa-female text-white text-6xl group-hover:scale-110 transition"></i>
                        <div class="absolute inset-0 bg-black opacity-0 group-hover:opacity-10 transition"></div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-2xl font-bold text-gray-800 mb-2">ODHKBP (Perempuan)</h3>
                        <p class="text-gray-600 mb-4">Organisasi Perempuan HKBP yang mengembangkan pelayanan dan
                            pemberdayaan kaum perempuan.</p>
                        <div class="flex items-center text-blue-900 font-semibold">
                            <span>Lihat Detail</span>
                            <i class="fas fa-arrow-right ml-2 group-hover:translate-x-2 transition"></i>
                        </div>
                    </div>
                </div>

                <!-- LHKBP (Laki-laki) -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition group cursor-pointer"
                    onclick="showDetail('lhkbp')">
                    <div
                        class="h-48 bg-gradient-to-br from-green-500 to-teal-600 flex items-center justify-center relative overflow-hidden">
                        <i class="fas fa-male text-white text-6xl group-hover:scale-110 transition"></i>
                        <div class="absolute inset-0 bg-black opacity-0 group-hover:opacity-10 transition"></div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-2xl font-bold text-gray-800 mb-2">LHKBP (Laki-laki)</h3>
                        <p class="text-gray-600 mb-4">Organisasi Laki-laki HKBP yang fokus pada pembinaan spiritual dan
                            kepemimpinan keluarga.</p>
                        <div class="flex items-center text-blue-900 font-semibold">
                            <span>Lihat Detail</span>
                            <i class="fas fa-arrow-right ml-2 group-hover:translate-x-2 transition"></i>
                        </div>
                    </div>
                </div>

                <!-- Mamre (Lansia) -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition group cursor-pointer"
                    onclick="showDetail('mamre')">
                    <div
                        class="h-48 bg-gradient-to-br from-indigo-500 to-blue-600 flex items-center justify-center relative overflow-hidden">
                        <i class="fas fa-heart text-white text-6xl group-hover:scale-110 transition"></i>
                        <div class="absolute inset-0 bg-black opacity-0 group-hover:opacity-10 transition"></div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-2xl font-bold text-gray-800 mb-2">Mamre (Lansia)</h3>
                        <p class="text-gray-600 mb-4">Pelayanan khusus untuk jemaat lanjut usia dengan program kesehatan
                            dan spiritual.</p>
                        <div class="flex items-center text-blue-900 font-semibold">
                            <span>Lihat Detail</span>
                            <i class="fas fa-arrow-right ml-2 group-hover:translate-x-2 transition"></i>
                        </div>
                    </div>
                </div>

                <!-- Paduan Suara -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition group cursor-pointer"
                    onclick="showDetail('paduanSuara')">
                    <div
                        class="h-48 bg-gradient-to-br from-purple-500 to-pink-600 flex items-center justify-center relative overflow-hidden">
                        <i class="fas fa-music text-white text-6xl group-hover:scale-110 transition"></i>
                        <div class="absolute inset-0 bg-black opacity-0 group-hover:opacity-10 transition"></div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-2xl font-bold text-gray-800 mb-2">Paduan Suara</h3>
                        <p class="text-gray-600 mb-4">Pelayanan musik dan pujian untuk memperindah ibadah dan memuliakan
                            Tuhan.</p>
                        <div class="flex items-center text-blue-900 font-semibold">
                            <span>Lihat Detail</span>
                            <i class="fas fa-arrow-right ml-2 group-hover:translate-x-2 transition"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal Detail Pelayanan -->
    <div id="detailModal" class="hidden fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center p-4">
        <div class="bg-white rounded-lg max-w-4xl w-full max-h-screen overflow-y-auto">
            <div class="sticky top-0 bg-white border-b px-6 py-4 flex items-center justify-between">
                <h3 id="modalTitle" class="text-2xl font-bold text-gray-800"></h3>
                <button onclick="closeDetail()" class="text-gray-500 hover:text-gray-700">
                    <i class="fas fa-times text-2xl"></i>
                </button>
            </div>
            <div id="modalContent" class="p-6"></div>
        </div>
    </div>

    <!-- CTA Section -->
    <section class="py-16 bg-gradient-to-r from-blue-900 to-blue-700 text-white">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-4xl font-bold mb-4">Bergabunglah dalam Pelayanan</h2>
                <p class="text-xl mb-8">Tuhan memanggil setiap kita untuk melayani sesuai dengan karunia dan talenta
                    yang diberikan</p>
                <a href="{{ route('kontak') }}"
                    class="bg-white text-blue-900 px-8 py-4 rounded-lg font-semibold hover:bg-gray-100 transition inline-flex items-center">
                    <i class="fas fa-hands-helping mr-2"></i>Hubungi Kami
                </a>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script>
        // Due to character limit, I'll include essential pelayanan data only
        const pelayananData = {
            sekolahMinggu: {
                title: 'Sekolah Minggu',
                content: '<div class="space-y-6"><div class="flex items-center space-x-4 pb-4 border-b"><div class="w-16 h-16 bg-gradient-to-br from-yellow-400 to-orange-500 rounded-full flex items-center justify-center"><i class="fas fa-child text-white text-3xl"></i></div><div><h4 class="text-xl font-bold text-gray-800">Sekolah Minggu</h4><p class="text-gray-600">Usia 3-12 Tahun</p></div></div><div><h5 class="font-bold text-gray-800 mb-3">Tentang Program</h5><p class="text-gray-600">Sekolah Minggu adalah program pembinaan iman untuk anak-anak yang dirancang dengan metode pembelajaran yang menyenangkan dan interaktif.</p></div></div>'
            },
            nhkbp: {
                title: 'NHKBP (Pemuda)',
                content: '<div class="space-y-6"><div class="flex items-center space-x-4 pb-4 border-b"><div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-purple-600 rounded-full flex items-center justify-center"><i class="fas fa-users text-white text-3xl"></i></div><div><h4 class="text-xl font-bold text-gray-800">NHKBP (Naposobuhi HKBP)</h4><p class="text-gray-600">Usia 13-35 Tahun</p></div></div><div><h5 class="font-bold text-gray-800 mb-3">Tentang NHKBP</h5><p class="text-gray-600">Naposobuhi HKBP adalah wadah persekutuan pemuda HKBP yang fokus pada pengembangan spiritual, kepemimpinan, dan talenta kaum muda.</p></div></div>'
            },
            odhkbp: {
                title: 'ODHKBP (Perempuan)',
                content: '<div class="space-y-6"><div class="flex items-center space-x-4 pb-4 border-b"><div class="w-16 h-16 bg-gradient-to-br from-pink-400 to-red-500 rounded-full flex items-center justify-center"><i class="fas fa-female text-white text-3xl"></i></div><div><h4 class="text-xl font-bold text-gray-800">ODHKBP</h4><p class="text-gray-600">Perempuan Dewasa</p></div></div><div><h5 class="font-bold text-gray-800 mb-3">Tentang ODHKBP</h5><p class="text-gray-600">Organisasi Perempuan HKBP adalah wadah pembinaan dan pemberdayaan kaum perempuan dalam gereja.</p></div></div>'
            },
            lhkbp: {
                title: 'LHKBP (Laki-laki)',
                content: '<div class="space-y-6"><div class="flex items-center space-x-4 pb-4 border-b"><div class="w-16 h-16 bg-gradient-to-br from-green-500 to-teal-600 rounded-full flex items-center justify-center"><i class="fas fa-male text-white text-3xl"></i></div><div><h4 class="text-xl font-bold text-gray-800">LHKBP</h4><p class="text-gray-600">Laki-laki Dewasa</p></div></div><div><h5 class="font-bold text-gray-800 mb-3">Tentang LHKBP</h5><p class="text-gray-600">Organisasi Laki-laki HKBP adalah wadah pembinaan spiritual dan pengembangan kepemimpinan kristiani bagi kaum laki-laki.</p></div></div>'
            },
            mamre: {
                title: 'Mamre (Lansia)',
                content: '<div class="space-y-6"><div class="flex items-center space-x-4 pb-4 border-b"><div class="w-16 h-16 bg-gradient-to-br from-indigo-500 to-blue-600 rounded-full flex items-center justify-center"><i class="fas fa-heart text-white text-3xl"></i></div><div><h4 class="text-xl font-bold text-gray-800">Mamre</h4><p class="text-gray-600">Lanjut Usia 60+ Tahun</p></div></div><div><h5 class="font-bold text-gray-800 mb-3">Tentang Mamre</h5><p class="text-gray-600">Mamre adalah pelayanan khusus untuk jemaat lanjut usia yang memberikan perhatian pada kebutuhan spiritual, kesehatan, dan sosial mereka.</p></div></div>'
            },
            paduanSuara: {
                title: 'Paduan Suara',
                content: '<div class="space-y-6"><div class="flex items-center space-x-4 pb-4 border-b"><div class="w-16 h-16 bg-gradient-to-br from-purple-500 to-pink-600 rounded-full flex items-center justify-center"><i class="fas fa-music text-white text-3xl"></i></div><div><h4 class="text-xl font-bold text-gray-800">Paduan Suara</h4><p class="text-gray-600">Pelayanan Musik & Pujian</p></div></div><div><h5 class="font-bold text-gray-800 mb-3">Tentang Paduan Suara</h5><p class="text-gray-600">Paduan Suara HKBP adalah pelayanan musik gerejawi yang bertujuan memperindah ibadah dan memuliakan nama Tuhan melalui nyanyian pujian.</p></div></div>'
            }
        };

        function showDetail(pelayanan) {
            const modal = document.getElementById('detailModal');
            const modalTitle = document.getElementById('modalTitle');
            const modalContent = document.getElementById('modalContent');

            const data = pelayananData[pelayanan];
            modalTitle.textContent = data.title;
            modalContent.innerHTML = data.content;

            modal.classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        }

        function closeDetail() {
            const modal = document.getElementById('detailModal');
            modal.classList.add('hidden');
            document.body.style.overflow = 'auto';
        }

        // Close modal when clicking outside
        document.getElementById('detailModal').addEventListener('click', (e) => {
            if (e.target.id === 'detailModal') {
                closeDetail();
            }
        });

        // Close modal with Escape key
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') {
                closeDetail();
            }
        });
    </script>
@endpush