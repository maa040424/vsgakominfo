<?php
include '../koneksi.php';

$supplier_id = $_GET['supplier_id'];

// Menjalankan query DELETE
$result = mysqli_query($con, "DELETE FROM tabel_supplier WHERE supplier_id = '$supplier_id'");

// Mengecek hasil query
if ($result) {
    echo "<script>window.location.href ='supplierRead.php';</script>";
} else {
    echo "Error: " . mysqli_error($con);
}

// Menutup koneksi
mysqli_close($con);
?>