<?php
// Menyertakan file koneksi ke database
include "../config/koneksi.php";

// Memeriksa apakah tombol submit telah diklik
if (isset($_POST['submit'])) {
    // Mengambil data dari form yang dikirimkan melalui metode POST
    $id_buku = $_POST['id_buku'];
    $kategori = $_POST['kategori'];
    $nama_buku = $_POST['nama_buku'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    $id_penerbit = $_POST['id_penerbit'];

    // Memeriksa apakah semua data sudah diisi
    if (!$id_buku || !$kategori || !$nama_buku || !$harga || !$stok) {
        // Jika ada data yang kosong, tampilkan pesan peringatan dan arahkan kembali ke halaman tambah data buku
        echo "<script>
        alert('Mohon seluruh data harus diisi!');
        window.location.href ='tambah_data_buku.php';
        </script>";
    } else {
        // Jika semua data diisi, jalankan query untuk menambahkan data buku ke tabel
        $result = mysqli_query($db, "INSERT INTO tabel_buku(id_buku,kategori,nama_buku,harga,stok,id_penerbit) VALUES('$id_buku','$kategori','$nama_buku','$harga','$stok','$id_penerbit')");
        // Arahkan pengguna kembali ke halaman index setelah data berhasil ditambahkan
        header("location: ../index.php");
    }
}
?>