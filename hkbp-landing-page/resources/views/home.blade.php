@extends('layouts.app')

@section('title', 'HKBP - Huria Kristen Batak Protestan')

@section('content')
    <!-- Hero Section -->
    <section class="relative h-screen mt-16" id="home">
        <div class="absolute inset-0 ">
            <div class="absolute inset-0 bg-black opacity-50"></div>
            <img src="{{ asset('assets/gereja.jpeg') }}" alt="Gereja HKBP" class="w-full h-full object-cover ">
        </div>

        <div class="relative container mx-auto px-4 h-full flex items-center justify-center">
            <div class="text-white max-w-3xl text-center">
                <h1 class="text-5xl md:text-6xl font-bold mb-4">Selamat Datang di </h1>
                <h1 class="text-4xl md:text-5xl font-bold mb-4">HKBP Ressort Taman Wisma Asri </h1>
                <p class="text-xl md:text-2xl mb-8">Bersama Melayani, Bersama Bertumbuh dalam Kasih Kristus</p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="#jadwal"
                        class="bg-white text-blue-900 px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transition text-center">
                        Jadwal Ibadah
                    </a>
                    <a href="#livestream"
                        class="bg-transparent border-2 border-white text-white px-8 py-3 rounded-lg font-semibold hover:bg-white hover:text-blue-900 transition text-center">
                        <i class="fas fa-play-circle mr-2"></i>Live Stream
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Jadwal Ibadah Section -->
    <section class="py-16 bg-white scroll-mt-20" id="jadwal">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-gray-800 mb-4">Jadwal Ibadah Minggu Ini</h2>
                <p class="text-gray-600">Minggu, 26 Januari 2026 - Minggu Epifania III</p>
            </div>

            <div class="grid md:grid-cols-3 gap-6 max-w-5xl mx-auto">
                <!-- Ibadah 1 -->
                <div class="bg-blue-50 rounded-lg p-6 border-l-4 border-blue-900">
                    <div class="flex items-center mb-4">
                        <i class="fas fa-church text-blue-900 text-2xl mr-3"></i>
                        <h3 class="text-xl font-bold text-gray-800">Ibadah I</h3>
                    </div>
                    <div class="space-y-2 text-gray-700">
                        <p><i class="far fa-clock mr-2"></i>07:00 - 08:30 WIB</p>
                        <p><i class="fas fa-map-marker-alt mr-2"></i>Gedung Utama</p>
                        <p class="text-sm pt-2 border-t border-blue-200">Kebaktian Umum</p>
                    </div>
                </div>

                <!-- Ibadah 2 -->
                <div class="bg-blue-50 rounded-lg p-6 border-l-4 border-blue-900">
                    <div class="flex items-center mb-4">
                        <i class="fas fa-church text-blue-900 text-2xl mr-3"></i>
                        <h3 class="text-xl font-bold text-gray-800">Ibadah II</h3>
                    </div>
                    <div class="space-y-2 text-gray-700">
                        <p><i class="far fa-clock mr-2"></i>09:00 - 10:30 WIB</p>
                        <p><i class="fas fa-map-marker-alt mr-2"></i>Gedung Utama</p>
                        <p class="text-sm pt-2 border-t border-blue-200">Kebaktian Umum + Sekolah Minggu</p>
                    </div>
                </div>

                <!-- Ibadah 3 -->
                <div class="bg-blue-50 rounded-lg p-6 border-l-4 border-blue-900">
                    <div class="flex items-center mb-4">
                        <i class="fas fa-church text-blue-900 text-2xl mr-3"></i>
                        <h3 class="text-xl font-bold text-gray-800">Ibadah III</h3>
                    </div>
                    <div class="space-y-2 text-gray-700">
                        <p><i class="far fa-clock mr-2"></i>17:00 - 18:30 WIB</p>
                        <p><i class="fas fa-map-marker-alt mr-2"></i>Gedung Utama</p>
                        <p class="text-sm pt-2 border-t border-blue-200">Kebaktian Sore</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Berita Terbaru Section -->
    <section class="py-16 bg-gray-100">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-gray-800 mb-4">Berita Terbaru</h2>
                <p class="text-gray-600">Informasi dan kegiatan terkini dari gereja</p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Berita 1 -->
                <div class="bg-white rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition">
                    <img src="https://pmkkundip.org/wp-content/uploads/2015/12/20151202153037.jpg?w=640"
                        alt="Retreat Pemuda" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <div class="flex items-center text-sm text-gray-500 mb-2">
                            <i class="far fa-calendar mr-2"></i>
                            <span>20 Januari 2026</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Retreat Pemuda HKBP 2026</h3>
                        <p class="text-gray-600 mb-4">Kegiatan retreat pemuda NHKBP dengan tema "Generasi Baru, Iman
                            yang Teguh" akan dilaksanakan pada bulan Februari mendatang...</p>
                        <a href="{{ route('berita') }}" class="text-blue-900 font-semibold hover:text-blue-700">
                            Baca Selengkapnya <i class="fas fa-arrow-right ml-1"></i>
                        </a>
                    </div>
                </div>

                <!-- Berita 2 -->
                <div class="bg-white rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition">
                    <img src="https://kas.or.id/wp-content/uploads/2025/05/WhatsApp-Image-2025-05-09-at-08.53.40-1024x576.jpeg"
                        alt="Natal Bersama" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <div class="flex items-center text-sm text-gray-500 mb-2">
                            <i class="far fa-calendar mr-2"></i>
                            <span>15 Januari 2026</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Pelayanan Sosial Januari 2026</h3>
                        <p class="text-gray-600 mb-4">Tim pelayanan sosial HKBP mengadakan bakti sosial di panti asuhan
                            dan memberikan bantuan kepada yang membutuhkan...</p>
                        <a href="{{ route('berita') }}" class="text-blue-900 font-semibold hover:text-blue-700">
                            Baca Selengkapnya <i class="fas fa-arrow-right ml-1"></i>
                        </a>
                    </div>
                </div>

                <!-- Berita 3 -->
                <div class="bg-white rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition">
                    <img src="https://images.unsplash.com/photo-1507692049790-de58290a4334?w=600" alt="Ibadah Syukur"
                        class="w-full h-48 object-cover">
                    <div class="p-6">
                        <div class="flex items-center text-sm text-gray-500 mb-2">
                            <i class="far fa-calendar mr-2"></i>
                            <span>10 Januari 2026</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Ibadah Syukur Tahun Baru</h3>
                        <p class="text-gray-600 mb-4">Ibadah syukur awal tahun 2026 berlangsung khidmat dengan mengucap
                            syukur atas berkat Tuhan sepanjang tahun...</p>
                        <a href="{{ route('berita') }}" class="text-blue-900 font-semibold hover:text-blue-700">
                            Baca Selengkapnya <i class="fas fa-arrow-right ml-1"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="text-center mt-8">
                <a href="{{ route('berita') }}"
                    class="inline-block bg-blue-900 text-white px-8 py-3 rounded-lg font-semibold hover:bg-blue-800 transition">
                    Lihat Semua Berita
                </a>
            </div>
        </div>
    </section>

    <!-- Warta Jemaat Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-12">
                    <h2 class="text-4xl font-bold text-gray-800 mb-4">Warta Jemaat Terbaru</h2>
                    <p class="text-gray-600">Informasi lengkap kegiatan gereja minggu ini</p>
                </div>

                <div class="bg-gradient-to-r from-blue-900 to-blue-700 rounded-lg shadow-xl overflow-hidden">
                    <div class="md:flex">
                        <div class="md:w-1/3 bg-blue-800 p-8 flex items-center justify-center">
                            <div class="text-center text-white">
                                <i class="far fa-file-pdf text-6xl mb-4"></i>
                                <p class="text-sm uppercase tracking-wide">Warta Jemaat</p>
                                <p class="text-3xl font-bold mt-2">Minggu III</p>
                                <p class="text-lg">Epifania</p>
                            </div>
                        </div>
                        <div class="md:w-2/3 p-8 text-white">
                            <h3 class="text-2xl font-bold mb-4">Warta Minggu, 26 Januari 2026</h3>
                            <div class="space-y-3 mb-6">
                                <div class="flex items-start">
                                    <i class="fas fa-check-circle mr-3 mt-1"></i>
                                    <p>Jadwal ibadah dan pelayanan minggu ini</p>
                                </div>
                                <div class="flex items-start">
                                    <i class="fas fa-check-circle mr-3 mt-1"></i>
                                    <p>Pengumuman kegiatan gereja</p>
                                </div>
                                <div class="flex items-start">
                                    <i class="fas fa-check-circle mr-3 mt-1"></i>
                                    <p>Daftar petugas kebaktian</p>
                                </div>
                                <div class="flex items-start">
                                    <i class="fas fa-check-circle mr-3 mt-1"></i>
                                    <p>Renungan dan bacaan alkitab</p>
                                </div>
                            </div>
                            <div class="flex flex-col sm:flex-row gap-3">
                                <a href="#"
                                    class="bg-white text-blue-900 px-6 py-3 rounded-lg font-semibold hover:bg-gray-100 transition text-center">
                                    <i class="fas fa-download mr-2"></i>Download PDF
                                </a>
                                <a href="{{ route('warta') }}#arsip"
                                    class="bg-transparent border-2 border-white text-white px-6 py-3 rounded-lg font-semibold hover:bg-white hover:text-blue-900 transition text-center">
                                    Arsip Warta
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 bg-gradient-to-r from-blue-900 to-blue-700 text-white">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-4xl font-bold mb-4">Bergabunglah Bersama Kami</h2>
                <p class="text-xl mb-8">Mari bersama-sama bertumbuh dalam iman dan melayani Tuhan</p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="#livestream"
                        class="bg-white text-blue-900 px-8 py-4 rounded-lg font-semibold hover:bg-gray-100 transition inline-flex items-center justify-center">
                        <i class="fas fa-video mr-2"></i>Tonton Live Stream
                    </a>
                    <a href="{{ route('kontak') }}"
                        class="bg-transparent border-2 border-white text-white px-8 py-4 rounded-lg font-semibold hover:bg-white hover:text-blue-900 transition inline-flex items-center justify-center">
                        <i class="fas fa-map-marker-alt mr-2"></i>Kunjungi Kami
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection