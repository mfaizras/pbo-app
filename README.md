
# Gudang 2IA21

menciptakan platform yang memfasilitasi mahasiswa dalam mengakses, berbagi, dan mengelola materi pembelajaran secara efisien. Portal ini dirancang untuk memperkaya pengalaman belajar mahasiswa dengan meningkatkan kolaborasi antar sesama mahasiswa dalam berbagi pengetahuan dan materi pembelajaran.

## Deployment

Untuk menjalankan program ini adalah dnegan cara

### Persiapan

- Jalankan perintah `composer install` untuk menginstal semua depedensi yang diperlukana program
- Jalankan `cp env .env` Untuk membuat sebua file Environment Variabel Baru
- Setting `.env` file sesuai dengan konfigurasi anda. Yang perlu di setting adalah baseUrl, Database Connection
- Jalankan `php spark migrate` untuk membuat database 

### Menjalankan program
#### XAMPP
- Pindahkan semua File ke Dalam folder `htdocs` dari folder XAMPP. 
- Jalankan XAMPP
- Buka project program

#### Development Server
- Buka root Folder project
- Jalankan perintah `php spark serve` untuk memulai development server spark

## Authors

Made by Kelompok 2
- Ahmad Nur Fauzi Sahputra (50422129)
- Andika Galuh Pamungkas (50422208)
- Dewi Safira Permata Sari (50422411)
- Farriz Abdillah Mukmin (50422536)
- Muhammad Faiz Rashid (51422029)


## Environment Variables

To run this project, you will need to add the following environment variables to your .env file

`app_baseURL`

`database.default.database`

`database.default.username`

`database.default.password`

`CI_ENVIRONMENT`

