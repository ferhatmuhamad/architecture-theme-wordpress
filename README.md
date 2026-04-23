# IKP Theme — CV. Istimewa Karya Presisi

Custom WordPress theme untuk **CV. Istimewa Karya Presisi (IKP)** — perusahaan General Supplier, Architecture & Kontraktor di Yogyakarta dengan pengalaman 15 tahun.

---

## Overview

| Item | Detail |
|------|--------|
| **Klien** | CV. Istimewa Karya Presisi |
| **Website** | https://ikp.co.id |
| **Tagline** | General Supplier, Architecture and Kontraktor |
| **Lokasi** | Padukuhan Surah, Bimomartani, Ngemplak, Sleman, Yogyakarta 55584 |
| **Telp/WA** | +62 822-2567-2526 |
| **Email** | istimewakaryapresisi@gmail.com |

---

## Tech Stack

- **WordPress 6.x** (custom theme, no parent theme)
- **Tailwind CSS** via CDN (akan di-compile di PR akhir)
- **ACF Free** — fields diregister via PHP (`acf_add_local_field_group()`)
- **Custom Post Types**: `proyek`, `artikel`, `layanan`
- **Font**: Poppins via Google Fonts
- **No page builder** — full custom theme

---

## Brand Colors

```css
:root {
  --color-primary:   #336FA2; /* Biru — header, button utama, link */
  --color-secondary: #CC191A; /* Merah — aksen, highlight penting */
  --color-tertiary:  #6B982F; /* Hijau — CTA "Konsultasi Sekarang" */
}
```

---

## Struktur Folder

```
ikp-theme/
├── style.css                    # WordPress theme header + CSS vars
├── functions.php                # Theme setup, includes
├── header.php                   # Global header + nav
├── footer.php                   # Global footer
├── index.php                    # Fallback template
├── front-page.php               # Homepage
├── inc/
│   ├── enqueue.php              # Enqueue scripts & styles
│   ├── custom-post-types.php    # CPT: proyek, artikel, layanan
│   ├── acf-fields.php           # ACF fields via PHP
│   ├── theme-setup.php          # Theme support, menus, image sizes
│   └── helpers.php              # Helper functions
├── template-parts/
│   ├── header/nav.php
│   ├── footer/footer-content.php
│   └── sections/                # Homepage sections
│       ├── hero.php
│       ├── layanan.php
│       ├── tentang-singkat.php
│       ├── keunggulan.php
│       ├── proyek-terbaru.php
│       ├── artikel-terbaru.php
│       └── cta-kontak.php
└── assets/
    ├── css/custom.css
    ├── js/main.js
    └── images/logo-placeholder.svg
```

---

## PR Status

| PR | Status | Deskripsi |
|----|--------|-----------|
| **PR 1** (ini) | ✅ Done | Setup theme + Homepage lengkap |
| PR 2 | 🔜 Next | Halaman Layanan, Proyek (archive + single) |
| PR 3 | 🔜 Next | Halaman Artikel, Profil Perusahaan, Kontak |
| PR Final | 🔜 Next | Build Tailwind, SEO schema, optimasi performa |

---

## Cara Setup

Lihat [INSTALL.md](INSTALL.md) untuk panduan lengkap instalasi.

**Quick start:**
1. Upload folder `ikp-theme/` ke `wp-content/themes/`
2. Aktifkan theme di WP Admin → Appearance → Themes
3. Install plugin: ACF (free), Contact Form 7
4. Set homepage statis di Settings → Reading
5. Setup menu Primary di Appearance → Menus

---

## Lisensi

GPL v2 or later — sesuai lisensi WordPress.
