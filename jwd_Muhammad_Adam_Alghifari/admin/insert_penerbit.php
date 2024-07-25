<?php
include 'config/koneksi.php';

$id_penerbit = $_POST['id_penerbit'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$kota = $_POST['kota'];
$telepon = $_POST['telepon'];

mysqli_query($db, "INSERT INTO tabel_penerbit (id_penerbit, nama, alamat, kota, telepon) VALUES ('$id_penerbit', '$nama', '$alamat', '$kota', '$telepon')");
header('Location: admin.php');
?>