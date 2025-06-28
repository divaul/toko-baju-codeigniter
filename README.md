# Toko Baju Online - CodeIgniter 3

Ini adalah website toko baju online sederhana yang dibuat menggunakan **CodeIgniter 3**. Anda dapat menggunakannya sebagai latihan pengembangan web atau sebagai dasar untuk toko online Anda sendiri.

## Fitur Utama

- Halaman daftar produk
- Detail produk
- Fitur keranjang belanja
- Login pengguna & admin
- Dashboard admin (manajemen produk dan transaksi)

## Persyaratan Sistem

Pastikan Anda telah menginstal:

- PHP versi 5.6 – 7.4
- Web Server (Apache disarankan via XAMPP/Laragon)
- MySQL/MariaDB
- Composer (opsional)

---

## Langkah-langkah Instalasi

### 1. Unduh & Ekstrak

1. Download atau clone project ini:

```bash
git clone https://github.com/divaul/toko-baju-codeigniter.git
```

2. Ekstrak folder tersebut, lalu **ganti nama folder hasil ekstraksi menjadi**:

```
prestige
```

> 📌 Atau bisa juga diganti dengan nama lain sesuai keinginan Anda, misalnya: `tokobajuku`.

### 2. Pindahkan ke Folder Web Server

Jika Anda menggunakan XAMPP, salin folder `prestige` ke dalam:

```
C:/xampp/htdocs/
```

### 3. Buat Database

1. Buka **phpMyAdmin** melalui `http://localhost/phpmyadmin`
2. Buat database baru, misalnya:

```
ecommerce
```

3. Import file `ecommerce.sql` yang ada di dalam folder project (`prestige/ecommerce.sql`)

### 4. Konfigurasi Koneksi Database

Edit file berikut:

```
prestige/application/config/database.php
```

Dan sesuaikan dengan pengaturan lokal Anda, misalnya:

```php
$db['default'] = array(
	'hostname' => 'localhost',
	'username' => 'root',
	'password' => '',
	'database' => 'ecommerce',
	'dbdriver' => 'mysqli',
	...
);
```

### 5. Atur Base URL

Edit file:

```
prestige/application/config/config.php
```

Ubah bagian ini:

```php
$config['base_url'] = 'http://localhost/prestige/';
```

> Jika Anda menggunakan nama folder berbeda, sesuaikan juga URL-nya.

---

## Jalankan Website

Buka browser, lalu akses:

```
http://localhost/prestige/
```

---

## Akun Login

**Admin**
- Username: `admin`
- Password: `12345`

**Pengguna**
- Bisa mendaftar langsung di halaman login pengguna.

---

## Catatan

- Proyek ini hanya untuk pembelajaran atau prototipe.
- Disarankan mengamankan file konfigurasi sebelum dipublikasikan ke server online.
- Bebas untuk dikembangkan dan dimodifikasi sesuai kebutuhan Anda.

---

## Lisensi

Open source dan bebas digunakan dengan lisensi [MIT](LICENSE).
