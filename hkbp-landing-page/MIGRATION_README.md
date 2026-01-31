# HKBP Landing Page - Laravel Migration

Migrasi lengkap dari folder UI (HTML statis) ke Laravel Application dengan preservasi UI yang sama persis.

## ✅ Yang Sudah Dibuat

### 1. Assets

- ✅ Semua gambar dari `UI/assets/` telah dicopy ke `public/assets/`
    - logo.jpg
    - gereja.jpeg
    - hero.jpg, hero.webp, hero2.jpg

### 2. Layout Template

- ✅ `resources/views/layouts/app.blade.php`
    - Navigation bar dengan active state detection
    - Footer dengan social media links
    - Mobile menu functionality
    - Smooth scrolling

### 3. Page Templates (Blade Files)

Semua halaman telah diconvert dengan UI yang sama persis:

- ✅ `resources/views/home.blade.php` - Homepage dengan hero, jadwal ibadah, berita, warta
- ✅ `resources/views/tentang.blade.php` - About page dengan sejarah, visi/misi, profil pendeta & majelis
- ✅ `resources/views/warta.blade.php` - Warta jemaat dengan arsip dan search functionality
- ✅ `resources/views/berita.blade.php` - Berita dengan kategori dan filter
- ✅ `resources/views/pelayanan.blade.php` - Pelayanan dengan modal detail untuk setiap bidang
- ✅ `resources/views/galeri.blade.php` - Galeri foto & video dengan lightbox
- ✅ `resources/views/kontak.blade.php` - Kontak dengan form, map, dan info kontak

### 4. Routes

File `routes/web.php` sudah dikonfigurasi dengan semua route:

```php
Route::get('/', ...)->name('home');
Route::get('/tentang', ...)->name('tentang');
Route::get('/warta', ...)->name('warta');
Route::get('/berita', ...)->name('berita');
Route::get('/pelayanan', ...)->name('pelayanan');
Route::get('/galeri', ...)->name('galeri');
Route::get('/kontak', ...)->name('kontak');
```

## 🎨 Teknologi Yang Digunakan

- **Laravel** - Backend framework
- **Blade Templates** - Templating engine
- **Tailwind CSS** - Styling (via CDN)
- **Font Awesome 6.4.0** - Icons (via CDN)
- **Vanilla JavaScript** - Interactivity

## 🚀 Cara Menjalankan

1. **Pastikan di folder Laravel:**

    ```bash
    cd C:\DATA\PROJECT\HKBP\hkbp-landing-page
    ```

2. **Install dependencies (jika belum):**

    ```bash
    composer install
    npm install
    ```

3. **Copy environment file:**

    ```bash
    cp .env.example .env
    ```

4. **Generate application key:**

    ```bash
    php artisan key:generate
    ```

5. **Run development server:**

    ```bash
    php artisan serve
    ```

6. **Buka di browser:**
    ```
    http://localhost:8000
    ```

## 📁 Struktur File

```
hkbp-landing-page/
├── public/
│   └── assets/               # Gambar dari UI folder
│       ├── logo.jpg
│       ├── gereja.jpeg
│       └── ...
├── resources/
│   └── views/
│       ├── layouts/
│       │   └── app.blade.php # Layout utama (nav + footer)
│       ├── home.blade.php
│       ├── tentang.blade.php
│       ├── warta.blade.php
│       ├── berita.blade.php
│       ├── pelayanan.blade.php
│       ├── galeri.blade.php
│       └── kontak.blade.php
└── routes/
    └── web.php               # Semua routes
```

## ✨ Fitur Yang Sudah Diimplementasikan

### Home Page

- Hero section dengan gambar gereja
- Jadwal ibadah (3 waktu ibadah)
- Berita terbaru (3 berita)
- Warta jemaat terbaru
- Call to action section

### Tentang Kami

- Sejarah HKBP dengan timeline
- Visi & Misi
- Profil Pendeta Resort & Pembantu Pendeta
- Profil Sintua (6 orang)
- Profil Parhalado (6 orang)
- Struktur organisasi
- Nilai-nilai gereja
- Statistik HKBP

### Warta Jemaat

- Warta minggu ini (featured)
- Arsip warta dengan tabel
- Search functionality
- Filter by year
- Preview modal
- Download PDF button

### Berita

- Grid berita dengan gambar
- Search real-time
- Filter by kategori
- Pagination
- Kategori: Semua, Kegiatan, Pengumuman, Pelayanan, Pemuda

### Pelayanan

- 6 bidang pelayanan:
    - Sekolah Minggu
    - NHKBP (Pemuda)
    - ODHKBP (Perempuan)
    - LHKBP (Laki-laki)
    - Mamre (Lansia)
    - Paduan Suara
- Modal detail untuk setiap pelayanan
- Informasi lengkap program dan jadwal

### Galeri

- Filter by kategori (Semua, Foto, Video, Ibadah, Acara Khusus, Pelayanan)
- Lightbox untuk foto dengan navigation
- Video modal untuk video YouTube
- Keyboard shortcuts (arrow keys, escape)
- 11 item (8 foto + 3 video)

### Kontak

- 3 info cards (Alamat, Telepon, Email)
- Google Maps embed
- Contact form dengan validasi
- Office hours
- Bank account info dengan copy to clipboard
- Social media links
- Form submission success modal

## 🔧 Catatan Teknis

1. **Asset Paths**: Semua path gambar sudah diubah menggunakan `{{ asset('assets/...') }}`
2. **Routes**: Semua link internal menggunakan `{{ route('...') }}`
3. **Active Navigation**: Navigation otomatis highlight page yang aktif
4. **JavaScript**: Semua JavaScript dari HTML asli sudah dipindahkan ke `@push('scripts')`
5. **Responsive**: Semua halaman fully responsive dengan Tailwind CSS
6. **Modal**: Modal system untuk preview (warta, pelayanan, galeri, kontak)
7. **External CDN**: Menggunakan CDN untuk Tailwind CSS dan Font Awesome

## 🎯 UI/UX Features

- ✅ Smooth scrolling untuk anchor links
- ✅ Mobile menu toggle
- ✅ Hover effects pada cards dan buttons
- ✅ Transition animations
- ✅ Sticky navigation
- ✅ Modal dialogs
- ✅ Form validation
- ✅ Search & filter functionality
- ✅ Lightbox gallery
- ✅ Responsive design untuk semua device

## 📱 Responsive Breakpoints

- Mobile: < 768px
- Tablet: 768px - 1024px
- Desktop: > 1024px

Semua halaman sudah ditest dan responsive untuk semua ukuran layar.

## ⚡ Next Steps (Opsional)

Jika ingin menambahkan fitur dinamis:

1. **Database Integration**
    - Buat models untuk Berita, Warta, Galeri
    - Buat migrations dan seeders
    - Update controllers untuk dynamic content

2. **Contact Form**
    - Implementasi email sending
    - Save ke database
    - Form validation backend

3. **Admin Panel**
    - CRUD untuk berita
    - Upload warta PDF
    - Manage galeri

4. **Optimization**
    - Compile Tailwind CSS locally
    - Minify JavaScript
    - Image optimization

## 📞 Support

Jika ada pertanyaan atau issue, silakan check dokumentasi Laravel di https://laravel.com/docs
