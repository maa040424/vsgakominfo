<?php
include 'config/koneksi.php';

$id_penerbit = $_GET['id_penerbit'];
mysqli_query($db, "DELETE FROM tabel_penerbit WHERE id_penerbit='$id_penerbit'");
header('Location: admin.php');
?>