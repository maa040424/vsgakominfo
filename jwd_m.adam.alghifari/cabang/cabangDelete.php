<?php
include '../koneksi.php';

$id_cabang = $_GET['id_cabang'];

// Menjalankan query DELETE
$sql = "DELETE FROM tabel_cabang WHERE id_cabang='$id_cabang'";
$result = mysqli_query($con, $sql);

// Mengecek hasil query
if ($result) {
    echo "<script>alert('Record deleted successfully'); window.location.href ='cabangRead.php';</script>";
} else {
    echo "Error: " . mysqli_error($con);
}

// Menutup koneksi
mysqli_close($con);
?>