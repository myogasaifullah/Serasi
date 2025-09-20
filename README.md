# Serasi - Laravel Application dengan Google Sheets Database

Aplikasi web Laravel untuk mengelola aspirasi dengan integrasi Google Sheets sebagai database. Aplikasi ini dapat dihosting di GitHub Pages dengan konfigurasi otomatis.

## 🚀 Fitur Utama

- ✅ Formulir aspirasi publik
- ✅ Panel admin untuk mengelola aspirasi
- ✅ Pencarian dan filter data
- ✅ Sistem status (tinjau, proses, tolak, selesai)
- ✅ Integrasi Google Sheets sebagai database
- ✅ Hosting otomatis di GitHub Pages
- ✅ Responsive design dengan Tailwind CSS

## 📋 Persyaratan

- PHP 8.2 atau lebih tinggi
- Composer
- Node.js dan npm
- Akun Google dengan akses Google Sheets API
- Repository GitHub

## 🛠️ Setup dan Instalasi

### 1. Clone Repository

```bash
git clone <repository-url>
cd serasi
```

### 2. Install Dependencies

```bash
# Install PHP dependencies
composer install

# Install Node.js dependencies
npm install

# Build assets
npm run build
```

### 3. Setup Google Sheets API

#### a. Buat Project Google Cloud Console
1. Kunjungi [Google Cloud Console](https://console.cloud.google.com/)
2. Buat project baru atau pilih project yang ada
3. Enable Google Sheets API
4. Buat Service Account dan download file credentials JSON

#### b. Setup Google Sheet
1. Buat Google Sheet baru
2. Copy Sheet ID dari URL (format: `https://docs.google.com/spreadsheets/d/[SHEET_ID]/edit`)
3. Setup header di baris pertama:
   ```
   | nama | npm | email | telpon | kategori | deskripsi_laporan | status | pesan_balasan | created_at | updated_at |
   ```

#### c. Konfigurasi Environment
1. Copy `.env.example` ke `.env`
2. Update konfigurasi berikut:

```env
DB_CONNECTION=sheets
GOOGLE_SHEET_ID=your_google_sheet_id_here
GOOGLE_SHEET_NAME=Data Serasi
```

3. Letakkan file credentials JSON di `storage/app/google-credentials.json`

### 4. Setup Aplikasi

```bash
# Generate application key
php artisan key:generate

# Setup storage link
php artisan storage:link

# Jalankan migrasi (opsional, hanya untuk cache/session)
php artisan migrate
```

### 5. Jalankan Development Server

```bash
# Menggunakan Laravel Sail (opsional)
./vendor/bin/sail up

# Atau jalankan langsung
php artisan serve
```

## 🚀 Deploy ke GitHub Pages

### 1. Setup Repository Secrets

Di repository GitHub Anda, buka Settings > Secrets and variables > Actions:

1. **GOOGLE_SHEET_ID**: ID dari Google Sheet Anda
2. **GOOGLE_CREDENTIALS**: Isi file credentials JSON (base64 encoded)

### 2. Push ke Main Branch

```bash
git add .
git commit -m "Setup Google Sheets integration and GitHub Pages deployment"
git push origin main
```

### 3. Enable GitHub Pages

1. Buka Settings > Pages
2. Pilih Source: "GitHub Actions"
3. Deploy akan otomatis berjalan

## 📁 Struktur Project

```
serasi/
├── app/
│   ├── Http/Controllers/
│   │   └── SerasiController.php    # Controller utama
│   ├── Models/
│   │   ├── Serasi.php             # Model dengan Google Sheets
│   │   └── SerasiQuery.php        # Query builder
│   └── Services/
│       └── GoogleSheetsService.php # Service Google Sheets
├── config/
│   └── database.php               # Konfigurasi database
├── public/                        # Static files
├── resources/views/               # Blade templates
├── routes/web.php                 # Routes
└── .github/workflows/deploy.yml   # GitHub Actions
```

## 🔧 Konfigurasi

### Environment Variables

| Variable | Deskripsi | Default |
|----------|-----------|---------|
| `DB_CONNECTION` | Database driver | `sheets` |
| `GOOGLE_SHEET_ID` | Google Sheet ID | - |
| `GOOGLE_SHEET_NAME` | Nama worksheet | `Data Serasi` |

### Google Sheets Structure

Worksheet harus memiliki header di baris pertama:

```csv
nama,npm,email,telpon,kategori,deskripsi_laporan,status,pesan_balasan,created_at,updated_at
```

## 🛠️ Pengembangan

### Menambah Field Baru

1. Update `app/Models/Serasi.php` - tambah field di `$fillable`
2. Update `app/Services/GoogleSheetsService.php` - update mapping
3. Update views jika diperlukan

### Debug

Untuk debug Google Sheets API:

```php
// Enable debug logging
Log::info('Google Sheets Debug', [
    'spreadsheet_id' => env('GOOGLE_SHEET_ID'),
    'sheet_name' => env('GOOGLE_SHEET_NAME')
]);
```

## 📊 Monitoring

- Check GitHub Actions untuk status deployment
- Monitor Google Cloud Console untuk API usage
- Check browser console untuk JavaScript errors

## 🤝 Kontribusi

1. Fork repository
2. Buat feature branch (`git checkout -b feature/amazing-feature`)
3. Commit changes (`git commit -m 'Add amazing feature'`)
4. Push ke branch (`git push origin feature/amazing-feature`)
5. Buat Pull Request

## 📝 Lisensi

Distributed under the MIT License. See `LICENSE` for more information.

## 📞 Support

Untuk support, email [your-email@example.com] atau buat issue di GitHub.

---

**Catatan**: Pastikan Google Sheet Anda memiliki permission yang tepat dan credentials JSON tersimpan dengan aman.
