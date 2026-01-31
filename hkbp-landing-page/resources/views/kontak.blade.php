@extends('layouts.app')

@section('title', 'Kontak - HKBP')

@section('content')
    <!-- Hero Section -->
    <section class="relative h-96 mt-16">
        <div class="absolute inset-0 bg-gradient-to-r from-blue-900 to-blue-700">
            <div class="absolute inset-0 bg-black opacity-50"></div>
            <img src="https://images.unsplash.com/photo-1423666639041-f56000c27a9a?w=1920" alt="Kontak HKBP"
                class="w-full h-full object-cover mix-blend-overlay">
        </div>

        <div class="relative container mx-auto px-4 h-full flex items-center justify-center">
            <div class="text-white text-center">
                <h1 class="text-5xl md:text-6xl font-bold mb-4">Hubungi Kami</h1>
                <p class="text-xl md:text-2xl">Mari Terhubung dan Bersekutu Bersama</p>
            </div>
        </div>
    </section>

    <!-- Breadcrumb -->
    <div class="bg-white border-b">
        <div class="container mx-auto px-4 py-4">
            <div class="flex items-center text-sm text-gray-600">
                <a href="{{ route('home') }}" class="hover:text-blue-900">Home</a>
                <i class="fas fa-chevron-right mx-2 text-xs"></i>
                <span class="text-blue-900 font-semibold">Kontak</span>
            </div>
        </div>
    </div>

    <!-- Contact Info Cards -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-3 gap-8 max-w-5xl mx-auto mb-16">
                <!-- Alamat -->
                <div
                    class="bg-gradient-to-br from-blue-50 to-white rounded-lg shadow-lg p-8 text-center hover:shadow-xl transition">
                    <div class="w-16 h-16 bg-blue-900 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-map-marker-alt text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Alamat</h3>
                    <p class="text-gray-600">Jl. Gereja Raya No. 123<br>Kelurahan Menteng<br>Jakarta Pusat 10310<br>DKI
                        Jakarta</p>
                </div>

                <!-- Telepon -->
                <div
                    class="bg-gradient-to-br from-blue-50 to-white rounded-lg shadow-lg p-8 text-center hover:shadow-xl transition">
                    <div class="w-16 h-16 bg-blue-900 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-phone text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Telepon</h3>
                    <p class="text-gray-600 mb-2">
                        <a href="tel:+622112345678" class="hover:text-blue-900 transition">(021) 1234-5678</a>
                    </p>
                    <p class="text-gray-600">
                        <a href="https://wa.me/6281234567890" class="hover:text-blue-900 transition">
                            <i class="fab fa-whatsapp mr-1"></i>0812-3456-7890
                        </a>
                    </p>
                </div>

                <!-- Email -->
                <div
                    class="bg-gradient-to-br from-blue-50 to-white rounded-lg shadow-lg p-8 text-center hover:shadow-xl transition">
                    <div class="w-16 h-16 bg-blue-900 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-envelope text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Email</h3>
                    <p class="text-gray-600 mb-2">
                        <a href="mailto:info@hkbp.or.id" class="hover:text-blue-900 transition">info@hkbp.or.id</a>
                    </p>
                    <p class="text-gray-600">
                        <a href="mailto:pendeta@hkbp.or.id" class="hover:text-blue-900 transition">pendeta@hkbp.or.id</a>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Map & Form Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="max-w-6xl mx-auto">
                <div class="grid lg:grid-cols-2 gap-8">
                    <!-- Map -->
                    <div>
                        <h2 class="text-3xl font-bold text-gray-800 mb-6">Lokasi Kami</h2>
                        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                            <div class="h-96 bg-gray-200">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.521260322283!2d106.8195613!3d-6.1944491!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f5d2e764b12d%3A0x3d2ad6e1e0e9bcc8!2sNational%20Monument!5e0!3m2!1sen!2sid!4v1234567890"
                                    width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy">
                                </iframe>
                            </div>
                            <div class="p-6 bg-blue-900 text-white">
                                <h4 class="font-bold mb-2">Petunjuk Arah</h4>
                                <ul class="text-sm space-y-1 text-blue-100">
                                    <li><i class="fas fa-circle text-xs mr-2"></i>15 menit dari Stasiun Gambir</li>
                                    <li><i class="fas fa-circle text-xs mr-2"></i>10 menit dari Bundaran HI</li>
                                    <li><i class="fas fa-circle text-xs mr-2"></i>Dekat dengan halte Busway Menteng</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Contact Form -->
                    <div>
                        <h2 class="text-3xl font-bold text-gray-800 mb-6">Kirim Pesan</h2>
                        <div class="bg-white rounded-lg shadow-lg p-8">
                            <form id="contactForm" class="space-y-6">
                                @csrf
                                <div>
                                    <label class="block text-gray-700 font-semibold mb-2">Nama Lengkap *</label>
                                    <input type="text" id="nama"
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-900 focus:border-transparent transition"
                                        placeholder="Masukkan nama lengkap Anda" required>
                                </div>

                                <div class="grid md:grid-cols-2 gap-4">
                                    <div>
                                        <label class="block text-gray-700 font-semibold mb-2">Email *</label>
                                        <input type="email" id="email"
                                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-900 focus:border-transparent transition"
                                            placeholder="email@example.com" required>
                                    </div>
                                    <div>
                                        <label class="block text-gray-700 font-semibold mb-2">Telepon</label>
                                        <input type="tel" id="telepon"
                                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-900 focus:border-transparent transition"
                                            placeholder="0812-xxxx-xxxx">
                                    </div>
                                </div>

                                <div>
                                    <label class="block text-gray-700 font-semibold mb-2">Subjek *</label>
                                    <select id="subjek"
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-900 focus:border-transparent transition"
                                        required>
                                        <option value="">Pilih Subjek</option>
                                        <option value="informasi">Informasi Umum</option>
                                        <option value="ibadah">Jadwal Ibadah</option>
                                        <option value="pelayanan">Bergabung dalam Pelayanan</option>
                                        <option value="pastoral">Kunjungan Pastoral</option>
                                        <option value="doa">Permintaan Doa</option>
                                        <option value="lainnya">Lainnya</option>
                                    </select>
                                </div>

                                <div>
                                    <label class="block text-gray-700 font-semibold mb-2">Pesan *</label>
                                    <textarea id="pesan" rows="5"
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-900 focus:border-transparent transition resize-none"
                                        placeholder="Tulis pesan Anda di sini..." required></textarea>
                                </div>

                                <button type="submit"
                                    class="w-full bg-blue-900 text-white px-8 py-4 rounded-lg font-semibold hover:bg-blue-800 transition flex items-center justify-center">
                                    <i class="fas fa-paper-plane mr-2"></i>Kirim Pesan
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Office Hours -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-3xl font-bold text-gray-800 mb-8 text-center">Jam Pelayanan Kantor</h2>
                <div class="bg-gradient-to-r from-blue-900 to-blue-700 rounded-lg shadow-xl p-8 text-white">
                    <div class="grid md:grid-cols-2 gap-8">
                        <div>
                            <h3 class="text-xl font-bold mb-4 flex items-center">
                                <i class="far fa-calendar mr-3"></i>Hari Kerja
                            </h3>
                            <div class="space-y-3">
                                <div class="flex justify-between items-center pb-2 border-b border-blue-600">
                                    <span>Senin - Jumat</span>
                                    <span class="font-semibold">09:00 - 17:00</span>
                                </div>
                                <div class="flex justify-between items-center pb-2 border-b border-blue-600">
                                    <span>Sabtu</span>
                                    <span class="font-semibold">09:00 - 14:00</span>
                                </div>
                                <div class="flex justify-between items-center">
                                    <span>Minggu & Hari Libur</span>
                                    <span class="font-semibold text-yellow-300">Tutup</span>
                                </div>
                            </div>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold mb-4 flex items-center">
                                <i class="fas fa-church mr-3"></i>Jadwal Ibadah
                            </h3>
                            <div class="space-y-3">
                                <div class="flex justify-between items-center pb-2 border-b border-blue-600">
                                    <span>Ibadah I (Minggu)</span>
                                    <span class="font-semibold">07:00 WIB</span>
                                </div>
                                <div class="flex justify-between items-center pb-2 border-b border-blue-600">
                                    <span>Ibadah II (Minggu)</span>
                                    <span class="font-semibold">09:00 WIB</span>
                                </div>
                                <div class="flex justify-between items-center">
                                    <span>Ibadah Sore (Minggu)</span>
                                    <span class="font-semibold">17:00 WIB</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Success Modal -->
    <div id="successModal" class="hidden fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center p-4">
        <div class="bg-white rounded-lg max-w-md w-full p-8 text-center">
            <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                <i class="fas fa-check text-green-600 text-3xl"></i>
            </div>
            <h3 class="text-2xl font-bold text-gray-800 mb-2">Pesan Terkirim!</h3>
            <p class="text-gray-600 mb-6">Terima kasih telah menghubungi kami. Pesan Anda akan segera kami proses.</p>
            <button onclick="closeSuccessModal()"
                class="bg-blue-900 text-white px-8 py-3 rounded-lg font-semibold hover:bg-blue-800 transition">
                Tutup
            </button>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        // Contact Form
        document.getElementById('contactForm').addEventListener('submit', (e) => {
            e.preventDefault();

            // Get form values
            const nama = document.getElementById('nama').value;
            const email = document.getElementById('email').value;
            const telepon = document.getElementById('telepon').value;
            const subjek = document.getElementById('subjek').value;
            const pesan = document.getElementById('pesan').value;

            // Here you would normally send the data to a server
            console.log('Form Data:', { nama, email, telepon, subjek, pesan });

            // Show success modal
            document.getElementById('successModal').classList.remove('hidden');

            // Reset form
            document.getElementById('contactForm').reset();
        });

        // Close Success Modal
        function closeSuccessModal() {
            document.getElementById('successModal').classList.add('hidden');
        }

        // Close modal when clicking outside
        document.getElementById('successModal').addEventListener('click', (e) => {
            if (e.target.id === 'successModal') {
                closeSuccessModal();
            }
        });
    </script>

    <style>
        @keyframes fade-in {
            from {
                opacity: 0;
                transform: translateY(10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fade-in {
            animation: fade-in 0.3s ease-out;
        }
    </style>
@endpush