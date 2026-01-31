<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'HKBP - Huria Kristen Batak Protestan')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    @stack('styles')
</head>

<body class="bg-gray-50">
    <!-- Navigation -->
    <nav class="bg-white shadow-md fixed w-full top-0 z-50">
        <div class="container mx-auto px-4">
            <div class="flex items-center justify-between py-4">
                <div class="flex items-center space-x-3">
                    <div class="w-12 h-12 bg-white rounded-full flex items-center justify-center ">
                        <img src="{{ asset('assets/logo.jpg') }}" alt="HKBP Logo" class="w-10 h-10 object-contain">
                    </div>
                    <div>
                        <h1 class="text-xl font-bold text-gray-800">HKBP Ressort Taman Wisma Asri</h1>
                        <p class="text-xs text-gray-600">Huria Kristen Batak Protestan</p>
                    </div>
                </div>

                <!-- Desktop Menu -->
                <div class="hidden md:flex space-x-8">
                    <a href="{{ route('home') }}"
                        class="{{ request()->routeIs('home') ? 'text-blue-900 font-semibold' : 'text-gray-700' }} hover:text-blue-900 transition">Home</a>
                    <a href="{{ route('tentang') }}"
                        class="{{ request()->routeIs('tentang') ? 'text-blue-900 font-semibold' : 'text-gray-700' }} hover:text-blue-900 transition">Tentang
                        Kami</a>
                    <a href="{{ route('warta') }}"
                        class="{{ request()->routeIs('warta') ? 'text-blue-900 font-semibold' : 'text-gray-700' }} hover:text-blue-900 transition">Warta
                        Jemaat</a>
                    <a href="{{ route('berita') }}"
                        class="{{ request()->routeIs('berita*') ? 'text-blue-900 font-semibold' : 'text-gray-700' }} hover:text-blue-900 transition">Berita</a>
                    <a href="{{ route('pelayanan') }}"
                        class="{{ request()->routeIs('pelayanan') ? 'text-blue-900 font-semibold' : 'text-gray-700' }} hover:text-blue-900 transition">Pelayanan</a>
                    <a href="{{ route('galeri') }}"
                        class="{{ request()->routeIs('galeri') ? 'text-blue-900 font-semibold' : 'text-gray-700' }} hover:text-blue-900 transition">Galeri</a>
                    <a href="{{ route('kontak') }}"
                        class="{{ request()->routeIs('kontak') ? 'text-blue-900 font-semibold' : 'text-gray-700' }} hover:text-blue-900 transition">Kontak</a>
                </div>

                <!-- Mobile Menu Button -->
                <button class="md:hidden text-gray-700" id="mobileMenuBtn">
                    <i class="fas fa-bars text-2xl"></i>
                </button>
            </div>

            <!-- Mobile Menu -->
            <div class="hidden md:hidden pb-4" id="mobileMenu">
                <a href="{{ route('home') }}"
                    class="block py-2 {{ request()->routeIs('home') ? 'text-blue-900 font-semibold' : 'text-gray-700 hover:text-blue-900' }}">Home</a>
                <a href="{{ route('tentang') }}"
                    class="block py-2 {{ request()->routeIs('tentang') ? 'text-blue-900 font-semibold' : 'text-gray-700 hover:text-blue-900' }}">Tentang
                    Kami</a>
                <a href="{{ route('warta') }}"
                    class="block py-2 {{ request()->routeIs('warta') ? 'text-blue-900 font-semibold' : 'text-gray-700 hover:text-blue-900' }}">Warta
                    Jemaat</a>
                <a href="{{ route('berita') }}"
                    class="block py-2 {{ request()->routeIs('berita*') ? 'text-blue-900 font-semibold' : 'text-gray-700 hover:text-blue-900' }}">Berita</a>
                <a href="{{ route('pelayanan') }}"
                    class="block py-2 {{ request()->routeIs('pelayanan') ? 'text-blue-900 font-semibold' : 'text-gray-700 hover:text-blue-900' }}">Pelayanan</a>
                <a href="{{ route('galeri') }}"
                    class="block py-2 {{ request()->routeIs('galeri') ? 'text-blue-900 font-semibold' : 'text-gray-700 hover:text-blue-900' }}">Galeri</a>
                <a href="{{ route('kontak') }}"
                    class="block py-2 {{ request()->routeIs('kontak') ? 'text-blue-900 font-semibold' : 'text-gray-700 hover:text-blue-900' }}">Kontak</a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    @yield('content')

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-4 gap-8">
                <!-- About -->
                <div>
                    <h3 class="text-xl font-bold mb-4">HKBP</h3>
                    <p class="text-gray-400 text-sm">Huria Kristen Batak Protestan, melayani dengan kasih dan
                        mengabarkan Injil Kristus.</p>
                </div>

                <!-- Quick Links -->
                <div>
                    <h4 class="text-lg font-semibold mb-4">Menu Cepat</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="{{ route('tentang') }}" class="text-gray-400 hover:text-white transition">Tentang
                                Kami</a></li>
                        <li><a href="{{ route('warta') }}" class="text-gray-400 hover:text-white transition">Warta
                                Jemaat</a></li>
                        <li><a href="{{ route('berita') }}" class="text-gray-400 hover:text-white transition">Berita</a>
                        </li>
                        <li><a href="{{ route('pelayanan') }}"
                                class="text-gray-400 hover:text-white transition">Pelayanan</a></li>
                    </ul>
                </div>

                <!-- Contact -->
                <div>
                    <h4 class="text-lg font-semibold mb-4">Kontak</h4>
                    <ul class="space-y-2 text-sm text-gray-400">
                        <li><i class="fas fa-map-marker-alt mr-2"></i>Jl. Gereja No. 123, Jakarta</li>
                        <li><i class="fas fa-phone mr-2"></i>(021) 1234-5678</li>
                        <li><i class="fas fa-envelope mr-2"></i>info@hkbp.or.id</li>
                    </ul>
                </div>

                <!-- Social Media -->
                <div>
                    <h4 class="text-lg font-semibold mb-4">Ikuti Kami</h4>
                    <div class="flex space-x-4">
                        <a href="#"
                            class="w-10 h-10 bg-blue-600 rounded-full flex items-center justify-center hover:bg-blue-700 transition">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#"
                            class="w-10 h-10 bg-pink-600 rounded-full flex items-center justify-center hover:bg-pink-700 transition">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#"
                            class="w-10 h-10 bg-red-600 rounded-full flex items-center justify-center hover:bg-red-700 transition">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="border-t border-gray-800 mt-8 pt-8 text-center text-sm text-gray-400">
                <p>&copy; {{ date('Y') }} HKBP - Huria Kristen Batak Protestan. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Mobile Menu Script -->
    <script>
        const mobileMenuBtn = document.getElementById('mobileMenuBtn');
        const mobileMenu = document.getElementById('mobileMenu');

        mobileMenuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        // Close mobile menu when clicking a link
        const mobileLinks = mobileMenu.querySelectorAll('a');
        mobileLinks.forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.add('hidden');
            });
        });

        // Smooth scrolling
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    </script>

    @stack('scripts')
</body>

</html>