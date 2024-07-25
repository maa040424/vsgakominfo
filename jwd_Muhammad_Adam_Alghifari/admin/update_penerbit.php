<?php
include 'config/koneksi.php';

$id_penerbit = $_POST['id_penerbit'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$kota = $_POST['kota'];
$telepon = $_POST['telepon'];

mysqli_query($db, "UPDATE tabel_penerbit SET nama='$nama', alamat='$alamat', kota='$kota', telepon='$telepon' WHERE id_penerbit='$id_penerbit'");
header('Location: admin.php');
?>