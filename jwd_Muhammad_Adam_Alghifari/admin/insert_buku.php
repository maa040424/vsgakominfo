<?php
include 'config/koneksi.php';

$id_buku = $_POST['id_buku'];
$kategori = $_POST['kategori'];
$nama_buku = $_POST['nama_buku'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];
$id_penerbit = $_POST['id_penerbit'];

mysqli_query($db, "INSERT INTO tabel_buku (id_buku, kategori, nama_buku, harga, stok, id_penerbit) VALUES ('$id_buku', '$kategori', '$nama_buku', '$harga', '$stok', '$id_penerbit')");
header('Location: admin.php');
?>