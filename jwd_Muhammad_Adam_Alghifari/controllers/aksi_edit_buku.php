<?php
// Menyertakan file koneksi ke database
include "../config/koneksi.php";

// Memeriksa apakah tombol submit telah diklik
if (isset($_POST['submit'])) {
    // Mengambil data dari form yang dikirimkan melalui metode POST
    $id_buku = $_POST['id_buku'];
    $kategori = $_POST['kategori'];
    $nama_buku = $_POST['nama_buku'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    $id_penerbit = $_POST['id_penerbit'];

    // Menjalankan query untuk mengupdate data buku berdasarkan id_buku
    mysqli_query($db, "UPDATE tabel_buku SET id_buku='$id_buku', kategori='$kategori',nama_buku='$nama_buku',harga='$harga',stok='$stok',id_penerbit='$id_penerbit' WHERE id_buku= '$id_buku'");

    // Mengarahkan pengguna kembali ke halaman index setelah query berhasil dijalankan
    header("location: ../index.php");
}
?>