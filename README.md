Oke, noted!  
Kalau kamu pakai **Laravel 12**, README tadi tinggal **sedikit aku revisi** supaya lebih akurat.

Ini versi revisinya:

```markdown
# Test API Marketplace

Project ini adalah contoh aplikasi sederhana menggunakan Laravel 12 untuk melakukan pencarian produk dari API marketplace eksternal (dummyjson.com).

## Fitur

- Cari produk berdasarkan kata kunci.
- Menampilkan hasil pencarian dalam bentuk grid kartu produk responsif.
- Informasi produk yang ditampilkan: gambar, nama produk, harga, kategori, dan rating.
- Menampilkan pesan "Produk tidak ditemukan" jika hasil pencarian kosong.

## Teknologi yang Digunakan

- Laravel 12
- Bootstrap 5.3
- HTTP Client Laravel (Fitur `Http::get`)
- API: [DummyJSON Products API](https://dummyjson.com/docs/products)

## Cara Menjalankan Project

1. Clone repository ini:
   ```bash
   git clone https://github.com/username/test-api-marketplace.git
   ```

2. Masuk ke direktori project:
   ```bash
   cd test-api-marketplace
   ```

3. Install dependencies:
   ```bash
   composer install
   ```

4. Salin file environment:
   ```bash
   cp .env.example .env
   ```

5. Generate application key:
   ```bash
   php artisan key:generate
   ```

6. Jalankan server lokal:
   ```bash
   php artisan serve
   ```

7. Akses aplikasi melalui browser:
   ```
   http://127.0.0.1:8000
   ```

## API Endpoint yang Digunakan

- DummyJSON Search Products:
  ```
  https://dummyjson.com/products/search?q={kata_kunci}
  ```

## Pratinjau
| <img src="/public/tampilan.jpeg" alt="Tampilan" width="100%"> |

## License

Proyek ini dibuat untuk tujuan pembelajaran. Bebas digunakan dan dimodifikasi.

