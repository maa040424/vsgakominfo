<?php
include "../config/koneksi.php";
$id_buku = $_GET['id_buku'];
$result = mysqli_query($db, "DELETE FROM tabel_buku WHERE id_buku='$id_buku'");
if (!$result) {
    die("Terjadi kesalahan saat menghapus database");
} else {
    echo "<script>
        alert('Berhasil menghapus Database Buku dengan ID Buku $id_buku');
        window.location.href='../index.php';
      </script>";
}
