# TICKETING PROJECT

## 📌 Deskripsi Proyek
Ticketing System adalah aplikasi berbasis web yang digunakan untuk mengelola tiket bantuan atau laporan masalah dalam suatu organisasi. Sistem ini memungkinkan pengguna untuk membuat, melihat, memperbarui, dan menyelesaikan tiket dengan peran yang berbeda-beda seperti **User**, **Agent Users**, dan **Admin**.

## 🚀 Fitur Utama
### **Autentikasi & Autorisasi**
- Login & Register
- Role Management System (**User, Agent Users, Admin**)

### **Manajemen Tiket**
- **User:** Melihat tiket
- **Agent Users:** Membuat tiket dan melihat tiket yang tersedia
- **Admin:** Memiliki semua akses di dashboard

### **Manajemen Pengguna**
- Update biodata
- Upload/ganti foto profil
- Ganti password

### **Dashboard Monitoring**
- Statistik jumlah tiket
- User yang aktif

## 🛠️ How to Use
1. **Clone repository**
   ```sh
   git clone https://github.com/username/ticketing_demo.git
   ```
2. **Copy file `.env.example` menjadi `.env` dan edit kredensial database**
   ```sh
   cp .env.example .env
   ```
3. **Install dependencies**
   ```sh
   composer install
   ```
4. **Generate application key**
   ```sh
   php artisan key:generate
   ```
5. **Migrasi database dan seed data**
   ```sh
   php artisan migrate --seed
   ```
6. **Install dependencies frontend**
   ```sh
   npm install
   ```
7. **Build frontend assets**
   ```sh
   npm run build
   ```
   atau jika ingin development mode:
   ```sh
   npm run dev
   ```
8. **Login & Manage Users**
   - Email: `admin@admin.com`
   - Password: `password`

