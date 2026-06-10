# DAMAKESMAS Frontend

Website pelayanan kesehatan Kota Denpasar — Denpasar Mantap Kesehatan Masyarakat.

## Menjalankan Project

```bash
php -S localhost:8080
```

Atau taruh di folder `htdocs` (XAMPP/MAMP), akses lewat `http://localhost/nama-folder/`.

> **Nama folder bebas** — project otomatis menyesuaikan URL.

## Struktur

```
├── index.php              ← Beranda
├── config.php             ← Konfigurasi path & URL otomatis
├── assets/
│   ├── css/               ← variables, typography, components, utilities
│   └── js/                ← app, navbar, modal, animation
├── components/            ← navbar, hero, filter-bar, table, map, footer
├── pages/                 ← profile, pelayanan-publik, statistik, titik-faskes, login
└── docs/design-system/    ← colors, typography, spacing
```

## Login Demo

| Username | Password |
|---|---|
| `admin` | apa saja |

## Tech Stack

- PHP Native · Tailwind CSS CDN · Vanilla JavaScript
