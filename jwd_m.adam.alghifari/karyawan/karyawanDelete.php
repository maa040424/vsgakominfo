<?php
include '../koneksi.php';

$id_karyawan = $_GET['id_karyawan'];

$sql = "DELETE FROM tabel_karyawan WHERE id_karyawan='$id_karyawan'";

if (mysqli_query($con, $sql)) {
    echo "<script>alert('Data berhasil dihapus'); window.location.href ='karyawanRead.php';</script>";
} else {
    echo "Error: " . mysqli_error($con);
}

mysqli_close($con);
?>