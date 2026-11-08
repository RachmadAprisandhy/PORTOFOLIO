# Portofolio IT Generalist

Website portofolio satu halaman dengan Laravel 12, Blade, CSS, dan JavaScript.

## Menjalankan di Windows / Laragon

```powershell
cd portfolio
composer install
copy .env.example .env
php artisan key:generate
php artisan serve
```

Buka alamat yang ditampilkan oleh `php artisan serve`. Jika `.env` belum pernah dibuat, perintah Composer Laravel biasanya membuatnya saat instalasi awal. Project memakai SQLite secara default.

## Menyiapkan versi statis untuk Vercel

Website ini tidak memakai backend atau database untuk halaman portofolionya. Untuk Vercel, buat hasil HTML statis beserta asetnya:

```powershell
npm run export:static
```

Folder `vercel-static` menjadi sumber situs statis. Saat mengimpor repo di Vercel, atur **Root Directory** ke `vercel-static`; tidak perlu build command. Jika isi halaman atau aset berubah, jalankan perintah export lagi sebelum commit dan push ke GitHub.

## Bagian website

- Beranda dan spesialisasi web, mobile, serta machine learning.
- Tentang, pilihan proyek, pengalaman, dan kontak.
- Menu mobile, navigasi lompat, dan animasi ringan saat gulir.

## Menambahkan foto profil

Simpan foto sebagai `public/images/profile.jpg`. Foto akan tampil di lingkaran tengah ilustrasi pada bagian hero. Gunakan foto potret dengan wajah di tengah agar pemotongan lingkarannya tetap pas.

## Sebelum dipublikasikan

Nama, email, GitHub, dan LinkedIn telah diisi. Lengkapi institusi, organisasi, jabatan, periode pengalaman, serta detail teknologi dan hasil proyek setelah dikonfirmasi. Tambahkan angka hasil dan tautan demo hanya jika datanya dapat dibuktikan. Jangan mengunggah `.env` atau rahasia lain ke Git.

## Aset

Font DM Sans, Manrope, dan DM Mono dimuat dari Google Fonts. Jika situs harus berjalan sepenuhnya tanpa koneksi internet, unduh font tersebut dan layani sebagai aset lokal sebelum deployment.
