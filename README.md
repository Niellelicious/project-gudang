📦 Gudang App
**Gudang App** adalah aplikasi web sederhana untuk mengelola data barang di gudang.
Aplikasi ini dibuat menggunakan **PHP Native, MySQL, Bootstrap, dan Chart.js**.
Sistem memiliki fitur **login, dashboard, manajemen barang, dan manajemen user** dengan role **admin dan user**.

🚀 Fitur
* 🔐 Login & Logout sistem
* 📊 Dashboard dengan grafik
* 📦 CRUD Data Barang (Tambah, Edit, Hapus)
* 👤 Manajemen User (Admin)
* 🔑 Role Access (Admin & User)

Teknologi
* PHP Native
* MySQL
* Bootstrap 5
* Bootstrap Icons
* Chart.js
* HTML & CSS

📂 Struktur Project
gudang-app
│
├── index.php
├── dashboard.php
│
├── config
│   └── koneksi.php
│
├── auth
│   ├── login.php
│   ├── proses_login.php
│   └── logout.php
│
├── barang
│   ├── index.php
│   ├── tambah.php
│   ├── edit.php
│   ├── update_barang.php
│   └── hapus.php
│
├── user
│   ├── index.php
│   ├── tambah.php
│   └── hapus.php

🗄 Database
Nama database:
gudang_db
Tabel `barang`
```sql
CREATE TABLE barang (
id INT AUTO_INCREMENT PRIMARY KEY,
nama_barang VARCHAR(100),
stok INT,
tanggal_masuk DATE
);
```
Tabel `users`
```sql
CREATE TABLE users (
id INT AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(50),
password VARCHAR(50),
role ENUM('admin','user')
);
```

⚙️ Cara Menjalankan
1. Clone repository
   git clone https://github.com/username/gudang-app.git
2. Pindahkan ke folder server
   xampp/htdocs/gudang-app
3. Buat database
   gudang_db
4. Import tabel database
5. Jalankan di browser
   http://localhost/gudang-app

👨‍💻 Developer
Project ini dibuat sebagai latihan pengembangan web menggunakan **PHP Native dan MySQL**.
