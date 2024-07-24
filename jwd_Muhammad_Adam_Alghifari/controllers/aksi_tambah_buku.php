<?php
include "../config/koneksi.php";

if (isset($_POST['submit'])) {
    $id_buku = $_POST['id_buku'];
    $kategori = $_POST['kategori'];
    $nama_buku = $_POST['nama_buku'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    $id_penerbit = $_POST['id_penerbit'];

    if (!$id_buku || !$kategori || !$nama_buku || !$harga || !$stok) {
        echo "<script>
        alert('Mohon seluruh data harus diisi!');
        window.location.href ='tambah_data_buku.php';
        </script>";
    } else {
        $result = mysqli_query($db, "INSERT INTO tabel_buku(id_buku,kategori,nama_buku,harga,stok,id_penerbit) VALUES('$id_buku','$kategori','$nama_buku','$harga','$stok','$id_penerbit')");
        header("location: ../index.php");
    }
}
