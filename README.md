# CRUD Mahasiswa CodeIgniter 3
Project ini adalah contoh CRUD sederhana untuk input data mahasiswa menggunakan CodeIgniter 3.
## Fitur
- Menampilkan data mahasiswa
- Menambah data mahasiswa
- Mengedit data mahasiswa
- Menghapus data mahasiswa
- Validasi form
- Validasi NIM tidak boleh sama
- Tampilan sederhana dengan CSS
## Struktur Folder
```text
CRUD_Mahasiswa_CI3/
├── application/
│ ├── controllers/
│ │ └── Mahasiswa.php
│ ├── models/
│ │ └── Mahasiswa_model.php
│ ├── views/
│ │ ├── layouts/
│ │ │ ├── header.php
│ │ │ └── footer.php
│ │ └── mahasiswa/
│ │ ├── index.php
│ │ ├── tambah.php
│ │ └── edit.php
│ └── config/
│ ├── routes.php
│ ├── autoload.php
│ ├── database.php
│ └── config.php.example
├── assets/
│ └── css/
│ └── style.css
├── database/
│ └── ci3_crud_mahasiswa.sql
├── .htaccess
└── README.md
```
## Cara Menjalankan
### 1. Siapkan CodeIgniter 3
Download dan siapkan project CodeIgniter 3 di folder `htdocs` atau `www`.
contoh folder :
```text
htdocs/CRUD_Mahasiswa_CI3/
```
Catatan: Paket ini berisi file aplikasi CRUD, bukan folder core `system` CodeIgniter 3. Jadi gunakan project CodeIgniter 3 
yang sudah ada, lalu copy file dari paket ini ke project tersebut.
### 2. Copy File Project
Copy folder berikut ke dalam project CodeIgniter 3:
```text
application/controllers/Mahasiswa.php
application/models/Mahasiswa_model.php
application/views/layouts/
application/views/mahasiswa/
assets/css/style.css
application/config/routes.php
application/config/autoload.php
application/config/database.php
```
### 3. Import Database
Buka phpMyAdmin, lalu import file:
```text
database/ci3_crud_mahasiswa.sql
```
Database yang dibuat:
```text
ci3_crud_mahasiswa
```
Tabel yang dibuat:
```text
mahasiswa
```
### 4. Atur Koneksi Database
Buka file:
```text
application/config/database.php
```
Sesuaikan bagian ini:
```php
'hostname' => 'localhost',
'username' => 'root',
'password' => '',
'database' => 'ci3_crud_mahasiswa',
```
### 5. Atur Base URL
Buka file:
```text
application/config/config.php
```
Ubah menjadi:
```php
$config['base_url'] = 'http://localhost/CRUD_Mahasiswa_CI3/';
$config['index_page'] = 'index.php';
```
Kalau nama folder project berbeda, sesuaikan nama foldernya.
### 6. Akses Project
Buka browser :
```text
http://localhost/CRUD_Mahasiswa_CI3/index.php/mahasiswa
```
atau jika sudah memakai `.htaccess` dan mod_rewrite aktif:
```text
http://localhost/CRUD_Mahasiswa_CI3/mahasiswa
```
## Alur MVC
### Model
File:
```text
application/models/Mahasiswa_model.php
```
Model bertugas berhubungan langsung dengan database, seperti mengambil data, menyimpan data, mengubah data, dan menghapus 
data.
### View
Folder:
```text
application/views/mahasiswa/
```
View bertugas menampilkan halaman kepada pengguna, seperti tabel data mahasiswa, form tambah, dan form edit.
### Controller
File:
```text
application/controllers/Mahasiswa.php
```
Controller menjadi penghubung antara Model dan View. Controller menerima request dari user, memanggil model, lalu 
menampilkan view.
## URL Penting
```text
Data Mahasiswa : /index.php/mahasiswa
Tambah Data : /index.php/mahasiswa/tambah
Edit Data : /index.php/mahasiswa/edit/{id}
Hapus Data : /index.php/mahasiswa/hapus/{id}
```
## Field Data Mahasiswa
- NIM
- Nama Mahasiswa
- Program Studi
- Jenis Kelamin
- Semester
- Alamat
- No HP
## Catatan Error Umum
### Error base_url() tidak dikenali
Pastikan helper url sudah aktif di:
```text
application/config/autoload.php
```
```php
$autoload['helper'] = array('url', 'form');
### Error form_open() tidak dikenali pastikan helper form sudah aktif
```php
$autoload['helper'] = array('url', 'form');
```
### Error database
Pastikan database sudah di-import dan nama database di `database.php` sudah benar.
### Halaman 404
Pastikan nama controller adalah:
```text
Mahasiswa.php
```
Nama class di dalamnya:
```php
class Mahasiswa extends CI_Controller
```