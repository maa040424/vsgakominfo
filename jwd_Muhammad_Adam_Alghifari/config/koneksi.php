<?php
// Menyimpan informasi server, nama pengguna, kata sandi, dan nama database
$server = "localhost";
$user = "root";
$password = "";
$nama_database = "db_tokobuku";

// Menghubungkan ke database menggunakan informasi yang disimpan
$db = mysqli_connect($server, $user, $password, $nama_database);

// Memeriksa apakah koneksi berhasil atau gagal
if (!$db) {
    // Jika koneksi gagal, tampilkan pesan error
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
} else {
    // Jika koneksi berhasil, tampilkan pesan di konsol browser
    echo "<script>console.log('berhasil terkoneksi')</script>";
}
?>