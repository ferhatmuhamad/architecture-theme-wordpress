# Panduan Instalasi IKP Theme

Panduan lengkap untuk menginstall tema IKP di hosting WordPress Anda.

---

## Prasyarat

- WordPress 6.x sudah terinstall di hosting
- Akses FTP/File Manager atau SSH ke hosting
- Plugin: ACF (Advanced Custom Fields) Free, Contact Form 7

---

## Langkah-Langkah Instalasi

### 1. Download / Clone Repository

```bash
git clone https://github.com/ferhatmuhamad/architecture-theme-wordpress.git
```

Atau download sebagai ZIP dari GitHub.

### 2. Upload Folder Theme ke Hosting

Upload folder `ikp-theme/` ke direktori:

```
wp-content/themes/ikp-theme/
```

**Via FTP (FileZilla / WinSCP):**
- Connect ke hosting via FTP
- Navigate ke `public_html/wp-content/themes/`
- Upload folder `ikp-theme/`

**Via File Manager Hosting (cPanel/Directadmin):**
- Login ke cPanel → File Manager
- Navigate ke `public_html/wp-content/themes/`
- Upload & extract file ZIP

**Via SSH:**
```bash
cd /var/www/html/wp-content/themes/
git clone https://github.com/ferhatmuhamad/architecture-theme-wordpress.git temp
mv temp/ikp-theme ./ikp-theme
rm -rf temp
```

### 3. Aktifkan Theme di WP Admin

1. Login ke WordPress Admin (`/wp-admin`)
2. Buka **Appearance → Themes**
3. Cari "IKP - Istimewa Karya Presisi"
4. Klik **Activate**

### 4. Install Plugin Wajib

Buka **Plugins → Add New** dan install:

| Plugin | Fungsi |
|--------|--------|
| **Advanced Custom Fields (ACF)** | Custom fields untuk konten homepage & proyek |
| **Contact Form 7** | Form kontak di halaman Kontak |

Setelah install, **Activate** kedua plugin.

### 5. Set Homepage

1. Buat halaman baru: **Pages → Add New**
   - Title: `Home`
   - Klik **Publish**
2. Buka **Settings → Reading**
3. Pilih **A static page**
4. Pada **Homepage**, pilih halaman `Home`
5. Klik **Save Changes**

### 6. Setup Menu Navigasi

1. Buka **Appearance → Menus**
2. Buat menu baru dengan nama `Primary Menu`
3. Tambahkan halaman:
   - Home
   - Layanan Kami
   - Proyek Kami
   - Artikel
   - Profil Perusahaan
   - Kontak Kami
4. Di bagian **Menu Settings**, centang **Primary Menu**
5. Klik **Save Menu**

### 7. Isi Konten via ACF (Homepage)

1. Buka **Pages → Home → Edit**
2. Scroll ke bawah, isi field ACF:
   - **Hero**: judul, subtitle, CTA text, background image
   - **Tentang**: eyebrow, judul, teks, gambar
   - **Keunggulan**: tambah item di repeater
3. Klik **Update**

### 8. Tambah Custom Post Type Content

**Proyek:**
- Buka **Proyek Kami → Add New**
- Isi judul, deskripsi, Featured Image
- Isi field ACF: Lokasi, Tahun, Klien, Kategori, Galeri

**Layanan:**
- Buka **Layanan → Add New**
- Isi judul, deskripsi, Featured Image

**Artikel:**
- Buka **Artikel → Add New**
- Isi judul, konten, excerpt, Featured Image

---

## Konfigurasi Tambahan (Opsional)

### Upload Logo

1. Buka **Appearance → Customize → Site Identity**
2. Upload logo IKP (PNG/SVG, rekomendasi: 300x80px)
3. **Publish**

### Social Media Links

Tambahkan link sosial media di **Appearance → Customize** atau edit langsung di `ikp-theme/template-parts/footer/footer-content.php`.

---

## Troubleshooting

| Masalah | Solusi |
|---------|--------|
| Halaman home tidak tampil benar | Pastikan template homepage diset ke "Front Page Template" |
| ACF fields tidak muncul | Pastikan plugin ACF sudah aktif |
| Gambar tidak tampil | Cek URL gambar dan pastikan folder `uploads` writable |
| Menu tidak tampil | Pastikan menu sudah di-assign ke lokasi "Primary Menu" |

---

## Support

- **Developer**: ferhatmuhamad
- **Klien**: CV. Istimewa Karya Presisi
- **Email**: istimewakaryapresisi@gmail.com
