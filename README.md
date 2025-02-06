TICKETING PROJECT

**Deskripsi Proyek**

Ticketing System adalah aplikasi berbasis web yang digunakan untuk mengelola tiket bantuan atau laporan masalah dalam suatu organisasi. Sistem ini memungkinkan pengguna untuk membuat, melihat, memperbarui, dan menyelesaikan tiket dengan peran yang berbeda-beda seperti User, agent users, dan  Admin.

**Fitur Utama**

Autentikasi & Autorisasi
Login & Register
Role Management System (User,agent users, Admin)
Manajemen Tiket:
-User: Melihat tiket
agent users: Membuat tiket dan melihat tiket yang tersedia
-Admin: Memiliki semua akses di dashboard
**Manajemen Pengguna**
Update biodata
Upload/ganti foto profil
Ganti password
**Dashboard Monitoring**
Statistik jumlah tiket
user yang aktif 

**How to use**
Clone the repository with git clone
Copy .env.example file to .env and edit database credentials
Run composer install
Run php artisan key:generate
Run php artisan migrate --seed
Run npm install
Run npm run build or npm run dev 
login dan manage users: admin@admin.com - password
