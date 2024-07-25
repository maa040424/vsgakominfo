<?php
// Menyertakan file koneksi ke database
include "../config/koneksi.php";

// Mengambil ID buku dari parameter URL
$id_buku = $_GET['id_buku'];

// Menjalankan query untuk menghapus data buku berdasarkan id_buku
$result = mysqli_query($db, "DELETE FROM tabel_buku WHERE id_buku='$id_buku'");

// Memeriksa apakah query berhasil dijalankan atau tidak
if (!$result) {
    // Jika gagal, tampilkan pesan error dan hentikan eksekusi
    die("Terjadi kesalahan saat menghapus database");
} else {
    // Jika berhasil, tampilkan pesan konfirmasi dan arahkan kembali ke halaman index
    echo "<script>
        alert('Berhasil menghapus Database Buku dengan ID Buku $id_buku');
        window.location.href='../index.php';
      </script>";
}
?>