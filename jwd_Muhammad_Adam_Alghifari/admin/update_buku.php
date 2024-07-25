<?php
include 'config/koneksi.php';

$id_buku = $_POST['id_buku'];
$kategori = $_POST['kategori'];
$nama_buku = $_POST['nama_buku'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];
$id_penerbit = $_POST['id_penerbit'];

mysqli_query($db, "UPDATE tabel_buku SET kategori='$kategori', nama_buku='$nama_buku', harga='$harga', stok='$stok', id_penerbit='$id_penerbit' WHERE id_buku='$id_buku'");
header('Location: admin.php');
?>