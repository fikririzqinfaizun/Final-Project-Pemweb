# Final-Project-Pemweb

# 🏆 Nazarick Cup — Sistem Manajemen Turnamen E-Sport Online

> Aplikasi web manajemen turnamen e-sport berbasis **CodeIgniter 3**, dikembangkan sebagai project akhir mata kuliah Pemrograman Web II — Universitas Jenderal Soedirman.

---

## 👥 Tim Pengembang

| Nama | NIM |
|------|-----|
| Ahmadin Irfan Fauzi | H1H024060 |
| Fikri Rizqin Faizun | H1H024068 |
| Muhammad Raihan Izzuddin Ismadi | H1H024056 |

**Kelas:** B &nbsp;|&nbsp; **Dosen Pengampu:** Mohammad Irham Akbar

---

## 📌 Deskripsi

Nazarick Cup adalah platform yang memudahkan penyelenggaraan turnamen e-sport secara online. Dibuat karena banyak komunitas gaming yang masih mengelola turnamen pakai Google Form + grup WA, yang ujungnya data berantakan dan admin kewalahan.

Dengan aplikasi ini, semua proses mulai dari **pendaftaran tim**, **verifikasi pembayaran**, **bracket pertandingan**, sampai **komunikasi peserta-admin** bisa dilakukan dalam satu platform.

**Game yang didukung:**
- Mobile Legends: Bang Bang
- PUBG Mobile
- Honor of Kings
- Valorant
- DOTA 2

---

## ✨ Fitur Utama

- 🔐 **Autentikasi** — Login & Register dengan pembeda role admin/user, password di-hash dengan `password_hash()`
- 📊 **Dashboard Statistik** — Ringkasan total turnamen, tim, peserta, dan pertandingan secara realtime
- 🏅 **Manajemen Turnamen (CRUD)** — Buat, edit, hapus turnamen, lengkap dengan toggle ketersediaan
- 📋 **Pendaftaran Tim** — Form pendaftaran dengan 5 pemain inti + 2 cadangan, biaya Rp 50.000
- ✅ **Verifikasi Pembayaran** — Admin konfirmasi pembayaran, peserta langsung update statusnya
- 🎯 **Bracket Visual** — Visualisasi bracket Round 1 → Semi Final → Final dengan efek glassmorphism
- 📅 **Manajemen Pertandingan** — Input hasil match dan update status pertandingan
- 💬 **Real-Time Chat** — AJAX polling 2 detik, support kirim gambar (bukti transfer, dll)
- 👥 **Manajemen Tim** — Admin kelola semua tim, user pantau status tim sendiri

---

## 🛠️ Teknologi yang Digunakan

| Kategori | Teknologi |
|----------|-----------|
| Bahasa Pemrograman | PHP 7.x |
| Framework | CodeIgniter 3 |
| Frontend | Bootstrap 5, jQuery 3.6.0 |
| Database | MySQL / MariaDB |
| Web Server | Apache + mod_rewrite |
| Tools | Git, VS Code, XAMPP, Composer |
| Font & Icon | Google Fonts (Poppins), Font Awesome |

---

## ⚙️ Cara Instalasi

### Prasyarat
- XAMPP (Apache + MySQL) sudah terinstall
- PHP versi 7.x ke atas
- Git (opsional)

### Langkah-langkah

**1. Clone repository ini**
```bash
git clone https://github.com/username/nama-repo.git
```
Atau download ZIP dan ekstrak ke folder `htdocs` XAMPP.

**2. Pindahkan folder ke htdocs**
```
C:/xampp/htdocs/tournament-online/
```

**3. Import database**
- Buka phpMyAdmin di `http://localhost/phpmyadmin`
- Buat database baru dengan nama `tournament_online`
- Import file `tournament_online.sql` yang ada di root folder project

**4. Konfigurasi database**

Edit file `application/config/database.php`:
```php
$db['default'] = array(
    'hostname' => 'localhost',
    'username' => 'root',
    'password' => '',       // sesuaikan jika ada password
    'database' => 'tournament_online',
    'dbdriver' => 'mysqli',
    ...
);
```

**5. Konfigurasi base URL**

Edit file `application/config/config.php`:
```php
$config['base_url'] = 'http://localhost/tournament-online/';
```

**6. Aktifkan mod_rewrite**

Pastikan file `.htaccess` ada di root folder. Isinya:
```apache
RewriteEngine On
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule ^(.*)$ index.php/$1 [L]
```

**7. Jalankan aplikasi**
- Nyalakan Apache dan MySQL di XAMPP
- Buka browser dan akses `http://localhost/tournament-online/`

---

## 🔑 Akun Default

| Role | Username | Password |
|------|----------|----------|
| Admin | `admin` | `admin123` |
| User | `marchilo123` | *(lihat database)* |

> ⚠️ Segera ganti password default setelah pertama kali login.

---

## 📁 Struktur Folder

```
tournament-online/
├── application/
│   ├── controllers/     # Logic aplikasi (Admin, User, Auth, dll)
│   ├── models/          # Query database
│   ├── views/           # Tampilan halaman
│   └── config/          # Konfigurasi CI3
├── assets/
│   ├── css/             # Custom stylesheet
│   ├── js/              # JavaScript
│   └── uploads/         # Gambar upload (banner, chat)
├── system/              # Core CodeIgniter 3
├── .htaccess
├── index.php
└── tournament_online.sql
```

---

## 🗄️ Struktur Database

| Tabel | Deskripsi |
|-------|-----------|
| `users` | Data akun pengguna (admin & user) |
| `turnamen` | Data event turnamen |
| `peserta` | Data pendaftaran tim beserta pemain |
| `tim` | Data tim terdaftar |
| `bracket` | Data pertandingan dan bracket |
| `bracket_round` | Konfigurasi babak per game |
| `pertandingan` | Hasil pertandingan |
| `messages` | Riwayat chat user-admin |
| `banner` | Gambar banner halaman utama |

---

## 🚧 Kendala & Rencana Pengembangan

**Yang belum sempat diimplementasikan:**
- [ ] Generate laporan PDF otomatis (struktur view sudah ada)
- [ ] Notifikasi otomatis via email/WhatsApp
- [ ] Fitur reset password mandiri
- [ ] Halaman profil user

**Rencana ke depan:**
- [ ] Migrasi chat dari AJAX polling ke WebSocket
- [ ] Integrasi payment gateway (Midtrans)
- [ ] Dukungan multi-bahasa
- [ ] Deployment ke hosting publik

---

## 📄 Lisensi

Project ini dibuat untuk keperluan akademik — mata kuliah **Pemrograman Web II**, Program Studi Teknik Komputer, Fakultas Teknik, Universitas Jenderal Soedirman. Tidak untuk diperjualbelikan.

---

<p align="center">Made with ☕ by Tim Nazarick — Unsoed 2026</p>
