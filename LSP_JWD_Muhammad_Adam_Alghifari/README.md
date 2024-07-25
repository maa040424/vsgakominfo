
# Klub Motor Kami

Proyek ini merupakan website untuk Klub Motor Kami yang berisi informasi tentang produk-produk yang kami tawarkan, artikel, event, galeri foto, dan informasi tentang klien kami. Website ini juga dilengkapi dengan fitur untuk menambahkan produk baru melalui halaman admin.

## Struktur Direktori

```
LSP_JWD_Muhammad_Adam_Alghifari
├── index.php
├── styles.css
├── navside.php
├── produk.php
├── produk_process.php
├── uploads/
│   ├── [uploaded images]
├── sidebar/
│   ├── artikel.php
│   ├── event.php
│   ├── galeri.php
│   ├── client.php
└── topbar/
    ├── profile.php
    ├── visiMisi.php
    ├── produk.php
    ├── kontak.php
    ├── about.php
    ├── produk_process.php
```

## Instalasi

1. Clone repository ini ke dalam direktori lokal Anda:
    ```
    git clone https://github.com/maa040424/vsgakominfo.git
    ```

2. Pindah ke direktori proyek:
    ```
    cd vsgakominfo/LSP_JWD_Muhammad_Adam_Alghifari
    ```

3. Pastikan Anda memiliki server lokal (seperti XAMPP atau Laragon) yang berjalan.

4. Buat database MySQL dengan nama `db_motor` dan import file `db_motor.sql` yang ada di direktori root proyek ini.

5. Update konfigurasi database di file `produk_process.php`:
    ```php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "db_motor";
    ```

## Penggunaan

### Halaman Utama

- **index.php**: Halaman utama yang berisi kata pengantar dan informasi dasar tentang Klub Motor Kami.

### Produk

- **produk.php**: Halaman yang menampilkan produk-produk yang ditawarkan oleh Klub Motor Kami.
- **produk_process.php**: File PHP yang menangani penambahan produk baru ke dalam database.

### Sidebar dan Topbar

- **navside.php**: File yang berisi navigasi sidebar.
- **sidebar/**: Direktori yang berisi halaman-halaman untuk artikel, event, galeri, dan klien.
- **topbar/**: Direktori yang berisi halaman-halaman untuk profile, visi dan misi, produk, kontak, dan about.

### Upload Gambar

- **uploads/**: Direktori tempat menyimpan gambar-gambar yang di-upload melalui halaman tambah produk.

## Kontribusi

Jika Anda ingin berkontribusi pada proyek ini, silakan buat pull request atau hubungi saya melalui GitHub.

## Lisensi

Proyek ini dilisensikan di bawah [MIT License](LICENSE).

## Kontak

Untuk informasi lebih lanjut, Anda bisa menghubungi saya melalui profil GitHub [Muhammad Adam Alghifari](https://github.com/maa040424).
```
