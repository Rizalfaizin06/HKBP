@extends('layouts.app')

@section('title', 'Galeri - HKBP')

@section('content')
    <!-- Hero Section -->
    <section class="relative h-96 mt-16">
        <div class="absolute inset-0 bg-gradient-to-r from-blue-900 to-blue-700">
            <div class="absolute inset-0 bg-black opacity-50"></div>
            <img src="https://images.unsplash.com/photo-1506905925346-21bda4d32df4?w=1920" alt="Galeri HKBP"
                class="w-full h-full object-cover mix-blend-overlay">
        </div>

        <div class="relative container mx-auto px-4 h-full flex items-center justify-center">
            <div class="text-white text-center">
                <h1 class="text-5xl md:text-6xl font-bold mb-4">Galeri</h1>
                <p class="text-xl md:text-2xl">Dokumentasi Kegiatan & Momen Berkesan</p>
            </div>
        </div>
    </section>

    <!-- Breadcrumb -->
    <div class="bg-white border-b">
        <div class="container mx-auto px-4 py-4">
            <div class="flex items-center text-sm text-gray-600">
                <a href="{{ route('home') }}" class="hover:text-blue-900">Home</a>
                <i class="fas fa-chevron-right mx-2 text-xs"></i>
                <span class="text-blue-900 font-semibold">Galeri</span>
            </div>
        </div>
    </div>

    <!-- Filter Tabs -->
    <section class="py-8 bg-white sticky top-16 z-40 shadow-sm">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap gap-3 justify-center">
                <button onclick="filterGallery('all')"
                    class="filter-btn active px-6 py-2 rounded-full font-semibold transition">
                    <i class="fas fa-th mr-2"></i>Semua
                </button>
                <button onclick="filterGallery('foto')" class="filter-btn px-6 py-2 rounded-full font-semibold transition">
                    <i class="fas fa-camera mr-2"></i>Foto
                </button>
                <button onclick="filterGallery('video')" class="filter-btn px-6 py-2 rounded-full font-semibold transition">
                    <i class="fas fa-video mr-2"></i>Video
                </button>
                <button onclick="filterGallery('ibadah')"
                    class="filter-btn px-6 py-2 rounded-full font-semibold transition">
                    <i class="fas fa-church mr-2"></i>Ibadah
                </button>
                <button onclick="filterGallery('acara')" class="filter-btn px-6 py-2 rounded-full font-semibold transition">
                    <i class="fas fa-calendar-alt mr-2"></i>Acara Khusus
                </button>
                <button onclick="filterGallery('pelayanan')"
                    class="filter-btn px-6 py-2 rounded-full font-semibold transition">
                    <i class="fas fa-hands-helping mr-2"></i>Pelayanan
                </button>
            </div>
        </div>
    </section>

    <!-- Gallery Grid -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div id="galleryGrid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                <!-- Foto Item 1 -->
                <div class="gallery-item foto ibadah group cursor-pointer"
                    onclick="openLightbox('https://images.unsplash.com/photo-1438232992991-995b7058bbb3?w=1200', 'Ibadah Minggu', 'Kebaktian Minggu Pagi - 19 Januari 2026')">
                    <div class="relative overflow-hidden rounded-lg shadow-lg">
                        <img src="https://images.unsplash.com/photo-1438232992991-995b7058bbb3?w=600" alt="Ibadah Minggu"
                            class="w-full h-64 object-cover group-hover:scale-110 transition duration-300">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-transparent opacity-0 group-hover:opacity-100 transition duration-300">
                            <div class="absolute bottom-0 left-0 right-0 p-4 text-white">
                                <h3 class="font-bold text-lg">Ibadah Minggu</h3>
                                <p class="text-sm">19 Januari 2026</p>
                            </div>
                        </div>
                        <div
                            class="absolute top-3 right-3 bg-blue-900 text-white px-3 py-1 rounded-full text-xs font-semibold">
                            <i class="fas fa-camera mr-1"></i>Foto
                        </div>
                    </div>
                </div>

                <!-- More gallery items would continue here with similar structure -->
                <!-- For brevity, showing structure only -->
            </div>
        </div>
    </section>

    <!-- Image Lightbox Modal -->
    <div id="lightboxModal" class="hidden fixed inset-0 bg-black bg-opacity-90 z-50 flex items-center justify-center p-4">
        <button onclick="closeLightbox()"
            class="absolute top-4 right-4 text-white text-4xl hover:text-gray-300 transition z-10">
            <i class="fas fa-times"></i>
        </button>
        <div class="max-w-6xl w-full">
            <img id="lightboxImage" src="" alt="" class="w-full h-auto max-h-screen object-contain">
            <div class="text-white text-center mt-4">
                <h3 id="lightboxTitle" class="text-2xl font-bold mb-2"></h3>
                <p id="lightboxDesc" class="text-gray-300"></p>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        // Gallery Filter
        function filterGallery(category) {
            const items = document.querySelectorAll('.gallery-item');
            const buttons = document.querySelectorAll('.filter-btn');

            buttons.forEach(btn => {
                btn.classList.remove('active', 'bg-blue-900', 'text-white');
                btn.classList.add('bg-gray-200', 'text-gray-700');
            });
            event.target.classList.add('active', 'bg-blue-900', 'text-white');
            event.target.classList.remove('bg-gray-200', 'text-gray-700');

            items.forEach(item => {
                if (category === 'all') {
                    item.style.display = 'block';
                } else if (item.classList.contains(category)) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        }

        // Initialize filter buttons
        document.querySelectorAll('.filter-btn').forEach(btn => {
            btn.classList.add('bg-gray-200', 'text-gray-700');
        });
        document.querySelector('.filter-btn.active').classList.remove('bg-gray-200', 'text-gray-700');
        document.querySelector('.filter-btn.active').classList.add('bg-blue-900', 'text-white');

        // Lightbox functionality
        function openLightbox(imageSrc, title, description) {
            document.getElementById('lightboxImage').src = imageSrc;
            document.getElementById('lightboxTitle').textContent = title;
            document.getElementById('lightboxDesc').textContent = description;
            document.getElementById('lightboxModal').classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        }

        function closeLightbox() {
            document.getElementById('lightboxModal').classList.add('hidden');
            document.body.style.overflow = 'auto';
        }

        // Close modals with Escape key
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') {
                closeLightbox();
            }
        });

        // Close modals when clicking outside
        document.getElementById('lightboxModal').addEventListener('click', (e) => {
            if (e.target.id === 'lightboxModal') {
                closeLightbox();
            }
        });
    </script>

    <style>
        .filter-btn.active {
            background-color: #1e3a8a;
            color: white;
        }

        .gallery-item {
            animation: fadeIn 0.5s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .gallery-item {
            transition: all 0.3s ease;
        }
    </style>
@endpush