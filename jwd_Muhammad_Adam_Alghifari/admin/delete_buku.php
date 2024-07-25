<?php
include 'config/koneksi.php';

$id_buku = $_GET['id_buku'];
mysqli_query($db, "DELETE FROM tabel_buku WHERE id_buku='$id_buku'");
header('Location: admin.php');
?>