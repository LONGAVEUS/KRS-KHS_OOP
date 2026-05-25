# 🏛️ Sistem Pengisian KRS dan KHS
https://github.com/LONGAVEUS/KRS-KHS_OOP/blob/main/README.md
<p align="center">
  <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-rgb-red.svg" width="300" alt="Laravel Logo">
</p>

<p align="center">
  <img src="https://img.shields.io/badge/Laravel-12.x-FF2D20?style=for-the-badge&logo=laravel" alt="Laravel Version">
  <img src="https://img.shields.io/badge/Tailwind_CSS-3.x-38B2AC?style=for-the-badge&logo=tailwind-css" alt="Tailwind Version">
  <img src="https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white" alt="MySQL">
</p>

<p align="center">
<img width="804" height="354" alt="image" src="https://github.com/user-attachments/assets/762718ca-245f-4bdf-8362-0a48480655ad" />
</p>

---

## 👥 Kelompok 8 (IF-2PD-08)

Proyek ini dikembangkan oleh Kelompok 8 sebagai bagian dari tugas praktikum Pemrograman Berorientasi Objek (PBO):

* **Arnol Hutagalung** (3312511130) - *Ketua Tim & Programmer  Mata Kuliah*
* **Wulan Fawwazia** (3312501105) - *Anggota & Programmer Nilai*
* **Naila Tenri Azera Narang** (3312501116) - *Anggota & Programmer KRS*

---

## 🚀 Fitur Aplikasi (Modul Web Testing OOP)

Aplikasi ini mengimplementasikan pemodelan objek database (*Object-Relational Mapping*) untuk mensimulasikan kebutuhan fungsional sistem akademik:
1.  **Manajemen Mata Kuliah:** CRUD data mata kuliah menggunakan komponen UI Flowbite serta method kustom PBO `tampilkanInfoMK()`.
2.  **Sistem Pengisian KRS:** Penambahan mata kuliah ke dalam lembar KRS mahasiswa memanfaatkan relasi *Many-to-Many* melalui tabel pivot `krs_detail` dan kalkulasi otomatis total SKS.
3.  **Pengelolaan Nilai Mahasiswa:** Proses penginputan nilai angka simulasi yang memanfaatkan method kustom `konversiKeHuruf()` untuk merubah angka menjadi nilai mutu huruf (A, B, C, D, E).

---

## 🛠️ Panduan Instalasi Lokal

Ikuti langkah-langkah berikut untuk menjalankan proyek ini di perangkat lokal Anda setelah melakukan *clone* atau *pull* dari GitHub:

### 1. Gandakan File Environment
```bash
cp .env.example .env
