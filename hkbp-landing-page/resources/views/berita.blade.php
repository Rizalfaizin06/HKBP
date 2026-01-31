@extends('layouts.app')

@section('title', 'Berita - HKBP')

@section('content')
    <!-- Hero Section -->
    <section class="relative h-96 mt-16">
        <div class="absolute inset-0 bg-gradient-to-r from-blue-900 to-blue-700">
            <div class="absolute inset-0 bg-black opacity-50"></div>
            <img src="https://images.unsplash.com/photo-1504711434969-e33886168f5c?w=1920" alt="Berita HKBP"
                class="w-full h-full object-cover mix-blend-overlay">
        </div>

        <div class="relative container mx-auto px-4 h-full flex items-center justify-center">
            <div class="text-white text-center">
                <h1 class="text-5xl md:text-6xl font-bold mb-4">Berita</h1>
                <p class="text-xl md:text-2xl">Informasi dan Kegiatan Terkini dari Gereja</p>
            </div>
        </div>
    </section>

    <!-- Breadcrumb -->
    <div class="bg-white border-b">
        <div class="container mx-auto px-4 py-4">
            <div class="flex items-center text-sm text-gray-600">
                <a href="{{ route('home') }}" class="hover:text-blue-900">Home</a>
                <i class="fas fa-chevron-right mx-2 text-xs"></i>
                <span class="text-blue-900 font-semibold">Berita</span>
            </div>
        </div>
    </div>

    <!-- Berita List Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-6xl mx-auto">
                <!-- Search & Filter -->
                <div class="bg-gray-50 rounded-lg p-6 mb-12">
                    <div class="grid md:grid-cols-3 gap-4">
                        <div class="md:col-span-2">
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Cari Berita</label>
                            <div class="relative">
                                <input type="text" id="searchInput" placeholder="Cari berdasarkan judul atau kategori..."
                                    class="w-full px-4 py-3 pl-10 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-900 focus:border-transparent">
                                <i class="fas fa-search absolute left-3 top-4 text-gray-400"></i>
                            </div>
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Kategori</label>
                            <select id="categoryFilter"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-900 focus:border-transparent">
                                <option value="all">Semua Kategori</option>
                                <option value="kegiatan">Kegiatan</option>
                                <option value="pengumuman">Pengumuman</option>
                                <option value="pelayanan">Pelayanan</option>
                                <option value="pemuda">Pemuda</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Berita Grid -->
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8" id="beritaGrid">
                    <!-- Berita 1 -->
                    <div class="bg-white rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition berita-item"
                        data-category="pemuda" data-search="retreat pemuda hkbp 2026">
                        <img src="https://pmkkundip.org/wp-content/uploads/2015/12/20151202153037.jpg?w=640"
                            alt="Retreat Pemuda" class="w-full h-48 object-cover">
                        <div class="p-6">
                            <div class="flex items-center justify-between mb-2">
                                <span
                                    class="text-xs font-semibold text-blue-900 bg-blue-100 px-3 py-1 rounded-full">Pemuda</span>
                                <div class="flex items-center text-sm text-gray-500">
                                    <i class="far fa-calendar mr-2"></i>
                                    <span>20 Jan 2026</span>
                                </div>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 mb-2">Retreat Pemuda HKBP 2026</h3>
                            <p class="text-gray-600 mb-4">Kegiatan retreat pemuda NHKBP dengan tema "Generasi Baru, Iman
                                yang Teguh" akan dilaksanakan pada bulan Februari mendatang...</p>
                            <a href="#" class="text-blue-900 font-semibold hover:text-blue-700 inline-flex items-center">
                                Baca Selengkapnya <i class="fas fa-arrow-right ml-2"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Berita 2 -->
                    <div class="bg-white rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition berita-item"
                        data-category="pelayanan" data-search="pelayanan sosial januari 2026">
                        <img src="https://kas.or.id/wp-content/uploads/2025/05/WhatsApp-Image-2025-05-09-at-08.53.40-1024x576.jpeg"
                            alt="Pelayanan Sosial" class="w-full h-48 object-cover">
                        <div class="p-6">
                            <div class="flex items-center justify-between mb-2">
                                <span
                                    class="text-xs font-semibold text-green-900 bg-green-100 px-3 py-1 rounded-full">Pelayanan</span>
                                <div class="flex items-center text-sm text-gray-500">
                                    <i class="far fa-calendar mr-2"></i>
                                    <span>15 Jan 2026</span>
                                </div>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 mb-2">Pelayanan Sosial Januari 2026</h3>
                            <p class="text-gray-600 mb-4">Tim pelayanan sosial HKBP mengadakan bakti sosial di panti
                                asuhan
                                dan memberikan bantuan kepada yang membutuhkan...</p>
                            <a href="#" class="text-blue-900 font-semibold hover:text-blue-700 inline-flex items-center">
                                Baca Selengkapnya <i class="fas fa-arrow-right ml-2"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Berita 3 -->
                    <div class="bg-white rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition berita-item"
                        data-category="kegiatan" data-search="ibadah syukur tahun baru">
                        <img src="https://images.unsplash.com/photo-1507692049790-de58290a4334?w=600" alt="Ibadah Syukur"
                            class="w-full h-48 object-cover">
                        <div class="p-6">
                            <div class="flex items-center justify-between mb-2">
                                <span
                                    class="text-xs font-semibold text-purple-900 bg-purple-100 px-3 py-1 rounded-full">Kegiatan</span>
                                <div class="flex items-center text-sm text-gray-500">
                                    <i class="far fa-calendar mr-2"></i>
                                    <span>10 Jan 2026</span>
                                </div>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 mb-2">Ibadah Syukur Tahun Baru</h3>
                            <p class="text-gray-600 mb-4">Ibadah syukur awal tahun 2026 berlangsung khidmat dengan
                                mengucap
                                syukur atas berkat Tuhan sepanjang tahun...</p>
                            <a href="#" class="text-blue-900 font-semibold hover:text-blue-700 inline-flex items-center">
                                Baca Selengkapnya <i class="fas fa-arrow-right ml-2"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Berita 4 -->
                    <div class="bg-white rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition berita-item"
                        data-category="pengumuman" data-search="pengumuman jadwal ibadah natal">
                        <img src="https://images.unsplash.com/photo-1482575832494-771f74bf6857?w=600" alt="Natal"
                            class="w-full h-48 object-cover">
                        <div class="p-6">
                            <div class="flex items-center justify-between mb-2">
                                <span
                                    class="text-xs font-semibold text-red-900 bg-red-100 px-3 py-1 rounded-full">Pengumuman</span>
                                <div class="flex items-center text-sm text-gray-500">
                                    <i class="far fa-calendar mr-2"></i>
                                    <span>5 Jan 2026</span>
                                </div>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 mb-2">Pengumuman Jadwal Ibadah Natal</h3>
                            <p class="text-gray-600 mb-4">Pengumuman jadwal lengkap ibadah Natal 2025 dan Tahun Baru
                                2026 untuk seluruh jemaat HKBP...</p>
                            <a href="#" class="text-blue-900 font-semibold hover:text-blue-700 inline-flex items-center">
                                Baca Selengkapnya <i class="fas fa-arrow-right ml-2"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Berita 5 -->
                    <div class="bg-white rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition berita-item"
                        data-category="kegiatan" data-search="seminar keluarga kristen">
                        <img src="https://images.unsplash.com/photo-1511632765486-a01980e01a18?w=600" alt="Seminar"
                            class="w-full h-48 object-cover">
                        <div class="p-6">
                            <div class="flex items-center justify-between mb-2">
                                <span
                                    class="text-xs font-semibold text-purple-900 bg-purple-100 px-3 py-1 rounded-full">Kegiatan</span>
                                <div class="flex items-center text-sm text-gray-500">
                                    <i class="far fa-calendar mr-2"></i>
                                    <span>1 Jan 2026</span>
                                </div>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 mb-2">Seminar Keluarga Kristen</h3>
                            <p class="text-gray-600 mb-4">Seminar membangun keluarga Kristen yang harmonis dengan
                                pembicara dari berbagai gereja...</p>
                            <a href="#" class="text-blue-900 font-semibold hover:text-blue-700 inline-flex items-center">
                                Baca Selengkapnya <i class="fas fa-arrow-right ml-2"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Berita 6 -->
                    <div class="bg-white rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition berita-item"
                        data-category="pemuda" data-search="persekutuan pemuda desember">
                        <img src="https://images.unsplash.com/photo-1529156069898-49953e39b3ac?w=600" alt="Persekutuan"
                            class="w-full h-48 object-cover">
                        <div class="p-6">
                            <div class="flex items-center justify-between mb-2">
                                <span
                                    class="text-xs font-semibold text-blue-900 bg-blue-100 px-3 py-1 rounded-full">Pemuda</span>
                                <div class="flex items-center text-sm text-gray-500">
                                    <i class="far fa-calendar mr-2"></i>
                                    <span>28 Des 2025</span>
                                </div>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 mb-2">Persekutuan Pemuda Desember</h3>
                            <p class="text-gray-600 mb-4">Persekutuan pemuda bulan Desember dengan tema "Menyongsong
                                Tahun Baru dengan Iman yang Baru"...</p>
                            <a href="#" class="text-blue-900 font-semibold hover:text-blue-700 inline-flex items-center">
                                Baca Selengkapnya <i class="fas fa-arrow-right ml-2"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- No Results Message -->
                <div id="noResults" class="hidden text-center py-12">
                    <i class="fas fa-search text-gray-400 text-5xl mb-4"></i>
                    <p class="text-gray-600 text-lg">Tidak ada berita yang ditemukan</p>
                    <p class="text-gray-500 text-sm mt-2">Coba gunakan kata kunci atau filter lain</p>
                </div>

                <!-- Pagination -->
                <div class="mt-12 flex justify-center">
                    <div class="flex space-x-2">
                        <button
                            class="px-4 py-2 bg-white border border-gray-300 rounded-lg text-gray-600 hover:bg-gray-50 transition disabled:opacity-50"
                            disabled>
                            <i class="fas fa-chevron-left"></i>
                        </button>
                        <button class="px-4 py-2 bg-blue-900 text-white rounded-lg font-semibold">1</button>
                        <button
                            class="px-4 py-2 bg-white border border-gray-300 rounded-lg text-gray-600 hover:bg-gray-50 transition">2</button>
                        <button
                            class="px-4 py-2 bg-white border border-gray-300 rounded-lg text-gray-600 hover:bg-gray-50 transition">
                            <i class="fas fa-chevron-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script>
        // Search and Filter Functionality
        const searchInput = document.getElementById('searchInput');
        const categoryFilter = document.getElementById('categoryFilter');
        const beritaItems = document.querySelectorAll('.berita-item');
        const noResults = document.getElementById('noResults');

        function filterBerita() {
            const searchTerm = searchInput.value.toLowerCase();
            const selectedCategory = categoryFilter.value;
            let visibleCount = 0;

            beritaItems.forEach(item => {
                const searchData = item.getAttribute('data-search');
                const itemCategory = item.getAttribute('data-category');

                const matchesSearch = searchData.includes(searchTerm);
                const matchesCategory = selectedCategory === 'all' || itemCategory === selectedCategory;

                if (matchesSearch && matchesCategory) {
                    item.style.display = '';
                    visibleCount++;
                } else {
                    item.style.display = 'none';
                }
            });

            // Show/hide no results message
            if (visibleCount === 0) {
                noResults.classList.remove('hidden');
            } else {
                noResults.classList.add('hidden');
            }
        }

        searchInput.addEventListener('input', filterBerita);
        categoryFilter.addEventListener('change', filterBerita);
    </script>
@endpush