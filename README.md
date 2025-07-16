
# 📁 Proyek Portofolio Pemrograman Web

Selamat datang di repository **Portofolio Pemrograman Web 202312022**.  
Repository ini berisi kumpulan modul praktik dari mata kuliah **Pemrograman Web**, yang dikerjakan secara bertahap menggunakan Git dan GitHub.  
Dokumen ini akan memandu Anda dalam memahami struktur proyek, prasyarat, setup awal, serta detail pengerjaan tiap modul.

---

## 📌 Daftar Isi

- [📁 Struktur Proyek](#-struktur-proyek)
- [🧰 Prasyarat](#-prasyarat)
- [⚙️ Setup Proyek](#️-setup-proyek)
  - [🔻 1. Clone Repository](#1-clone-repository)
  - [📂 2. Setup Struktur Folder](#2-setup-struktur-folder)
  - [🌿 3. Membuat Branch](#3-membuat-branch)
  - [💾 4. Git Add, Commit, Push](#4-git-add-commit-push)
  - [🧱 5. Pengerjaan Tiap Modul](#5-pengerjaan-tiap-modul)
- [📎 Link Modul per Branch](#-link-modul-per-branch)
- [📌 Catatan Tambahan](#-catatan-tambahan)

---

## 📁 Struktur Proyek

```
Portofolio-Pemrograman-Web-202312022/
│
├── Modul 1 HTML/
├── Modul 2 CSS/
├── Modul 3 Bootstrap/
├── Modul 4 JavaScript/
├── Modul 5 Dasar dasar PHP/
├── Modul 6 PHP/
└── README.md
```

---

## 🧰 Prasyarat

Pastikan Anda telah menginstal perangkat berikut di komputer Anda sebelum memulai:

- ✅ [Git](https://git-scm.com/) – untuk kontrol versi dan kolaborasi
- ✅ [Visual Studio Code (VS Code)](https://code.visualstudio.com/) – sebagai editor kode
- ✅ Web Browser (Chrome, Firefox, Edge, dll)
- ✅ [XAMPP](https://www.apachefriends.org/index.html), Laragon, atau PHP standalone – untuk menjalankan file PHP lokal
- ✅ Basic terminal/command line knowledge

---

## ⚙️ Setup Proyek

### 🔻 1. Clone Repository

```bash
git clone https://github.com/lea4444/Portofolio-Pemrograman-Web-202312022.git
cd Portofolio-Pemrograman-Web-202312022
```

---

### 📂 2. Setup Struktur Folder

Pastikan struktur folder Anda seperti berikut:

```plaintext
Modul 1 HTML/
Modul 2 CSS/
Modul 3 Bootstrap/
Modul 4 JavaScript/
Modul 5 Dasar dasar PHP/
Modul 6 PHP/
README.md
```

---

### 🌿 3. Membuat Branch

Setiap modul dikerjakan di branch terpisah. Gunakan perintah berikut:

```bash
git checkout -b tugas/modul-1-3
git checkout -b tugas/modul-4
git checkout -b tugas/modul-5
git checkout -b tugas/modul-6
```

---

### 💾 4. Git Add, Commit, Push

Setelah melakukan perubahan atau menambahkan file baru:

```bash
git add .
git commit -m "Upload modul 1-3"
git push origin tugas/modul-1-3
```

Ganti pesan commit dan nama branch sesuai modul yang sedang Anda kerjakan.

---

### 🧱 5. Pengerjaan Tiap Modul

#### 📘 Modul 1–3 (HTML, CSS, Bootstrap)
- **Modul 1**: Membuat halaman dasar HTML dengan elemen-elemen umum (`index.html`)
- **Modul 2**: Menambahkan gaya visual menggunakan CSS (`style.css`)
- **Modul 3**: Mengintegrasikan komponen Bootstrap untuk tampilan responsif

#### 📙 Modul 4 (JavaScript)
- Menggunakan JavaScript dasar untuk interaksi user: event handling, manipulasi DOM, pop-up alert, dan validasi

#### 📗 Modul 5 (Dasar PHP)
- Membuat form tamu (`buku_tamu.php`) dan validasi input
- Mengenal syntax dasar PHP: variabel, input GET/POST

#### 📕 Modul 6 (CRUD PHP + MySQL)
- Koneksi database menggunakan MySQLi
- Menampilkan, menambahkan, mengedit, dan menghapus data
- Formulir input dengan validasi dan integrasi ke database

---

## 📎 Link Modul per Branch

Setiap modul dikerjakan di branch terpisah agar lebih terstruktur:

- [📄 Modul 1–3: HTML, CSS, Bootstrap](https://github.com/lea4444/Portofolio-Pemrograman-Web-202312022/tree/tugas/modul-1-3)
- [📄 Modul 4: JavaScript Dasar](https://github.com/lea4444/Portofolio-Pemrograman-Web-202312022/tree/tugas/modul-4)
- [📄 Modul 5: Dasar PHP](https://github.com/lea4444/Portofolio-Pemrograman-Web-202312022/tree/tugas/modul-5)
- [📄 Modul 6: CRUD PHP & MySQL](https://github.com/lea4444/Portofolio-Pemrograman-Web-202312022/tree/tugas/modul-6)

---

## 📌 Catatan Tambahan

- 🛠️ Selalu jalankan `git pull origin main` sebelum membuat branch baru, untuk memastikan Anda memiliki versi terbaru
- 🧹 Untuk menghapus branch lokal dan remote (jika perlu):

```bash
git branch -d tugas/modul-6
git push origin --delete tugas/modul-6
```

- 📝 Gunakan penamaan branch yang konsisten (`tugas/modul-nama`) agar rapi dan mudah dilacak

---

📚 *Dokumentasi ini disusun sebagai panduan dalam pengerjaan tugas Portofolio Pemrograman Web 2023/2024.*  

