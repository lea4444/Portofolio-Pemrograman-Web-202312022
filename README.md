
# 📁 Proyek Portofolio Pemrograman Web

Selamat datang di repository *Portofolio Pemrograman Web 202312022*. Repository ini berisi kumpulan modul pembelajaran praktik dari mata kuliah Pemrograman Web.

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

Pastikan kamu telah menginstal perangkat berikut:

- ✅ Git
- ✅ Visual Studio Code
- ✅ Web Browser (Chrome, Firefox, dll)
- ✅ PHP (XAMPP, Laragon, atau PHP Standalone)
- ✅ Editor teks (disarankan: VS Code)

---

## ⚙️ Setup Proyek

### 🔻 1. Clone Repository

```bash
git clone https://github.com/lea4444/Portofolio-Pemrograman-Web-202312022.git
cd Portofolio-Pemrograman-Web-202312022
```

---

### 📂 2. Setup Struktur Folder

Pastikan struktur direktori berisi folder modul seperti berikut:

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

Gunakan perintah berikut untuk membuat dan pindah ke branch tugas:

```bash
git checkout -b tugas/modul-1-3
```

Untuk branch lainnya:

```bash
git checkout -b tugas/modul-4
git checkout -b tugas/modul-5
git checkout -b tugas/modul-6
```

---

### 💾 4. Git Add, Commit, Push

Setelah mengedit atau menambahkan file:

```bash
git add .
git commit -m "Upload modul 1-3"
git push origin tugas/modul-1-3
```

Ganti pesan commit dan nama branch sesuai kebutuhan.

---

### 🧱 5. Pengerjaan Tiap Modul

#### 📘 Modul 1–3
- **Modul 1 HTML**: Membuat struktur dasar HTML (`index.html`)
- **Modul 2 CSS**: Menambahkan styling menggunakan file CSS (`style.css`)
- **Modul 3 Bootstrap**: Menggunakan komponen dari Bootstrap (`bootstrap.html`)

#### 📙 Modul 4
- JavaScript dasar: membuat script untuk interaksi (event, DOM, alert, dll)

#### 📗 Modul 5
- Dasar PHP: Membuat form input sederhana (`buku_tamu.php`) + validasi data

#### 📕 Modul 6
- PHP CRUD: Menampilkan, menambah, edit, dan hapus data menggunakan PHP

---

## 📌 Catatan Tambahan

- Pastikan setiap branch hanya berisi modul yang sesuai
- Selalu `git pull origin main` sebelum membuat branch baru
- Jika ingin menghapus branch:
  ```bash
  git branch -d tugas/modul-6
  git push origin --delete tugas/modul-6
  ```

---

📌 *Dokumentasi ini dibuat untuk membantu proses pengerjaan tugas akhir portofolio Pemrograman Web.*
