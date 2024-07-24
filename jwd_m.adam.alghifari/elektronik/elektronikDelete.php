<?php
include '../koneksi.php';

$id_elektronik = $_GET['id_elektronik'];

// Menjalankan query DELETE
$result = mysqli_query($con, "DELETE FROM tabel_elektronik WHERE id_elektronik = '$id_elektronik'");

// Mengecek hasil query
if ($result) {
    echo "<script>window.location.href ='elektronikRead.php';</script>";
} else {
    echo "Error: " . mysqli_error($con);
}

// Menutup koneksi
mysqli_close($con);
?>