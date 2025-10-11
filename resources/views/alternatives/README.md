# Alternatif Desain Hero Section

Berikut adalah beberapa alternatif desain Hero Section yang bisa digunakan untuk website property agency Anda:

## 1. Hero dengan Video Background (`hero-video.blade.php`)
- Menggunakan video sebagai latar belakang
- Memberikan kesan dinamis dan profesional
- Cocok untuk menampilkan properti mewah

## 2. Hero dengan Carousel Gambar (`hero-carousel.blade.php`)
- Menampilkan beberapa gambar dalam slideshow
- Memungkinkan menampilkan berbagai jenis properti
- Dilengkapi dengan navigasi dan pagination

## 3. Hero dengan Efek Parallax (`hero-parallax.blade.php`)
- Memberikan efek gerakan parallax saat scrolling
- Menciptakan kedalaman visual
- Membutuhkan library tambahan (parallax.js)

## 4. Hero dengan Animasi Teks (`hero-animated.blade.php`)
- Teks dengan efek animasi typing
- Animasi fade-in dan slide-up
- Memberikan kesan interaktif dan menarik

## 5. Hero dengan Form Pencarian (`hero-search.blade.php`)
- Menyertakan form pencarian properti langsung
- Praktis untuk pengunjung yang ingin langsung mencari
- Dilengkapi dengan filter lokasi, tipe, dan harga

## 6. Hero Minimalis dengan Gradient (`hero-minimal.blade.php`)
- Desain minimalis dengan gradient background
- Tampilan modern dan clean
- Menampilkan preview UI dalam bentuk mockup

## Cara Menggunakan:
1. Pilih salah satu file desain yang diinginkan
2. Salin isinya ke file `welcome.blade.php` Anda
3. Sesuaikan bagian yang menggunakan data `$hero` sesuai kebutuhan
4. Tambahkan library/library tambahan yang diperlukan (jika ada)

## Catatan:
- Semua desain menggunakan data dinamis dari model Hero
- Pastikan library tambahan (Swiper, Parallax.js) sudah dimuat jika menggunakan alternatif 2 atau 3
- Untuk alternatif 1, Anda perlu menyediakan file video di folder `public/videos/`