<?php
$SERVER = "localhost";
$user = "root";
$password = "";
$nama_database = "db_artweb";
$db = mysqli_connect($SERVER, $user, $password, $nama_database);
echo "berhasil terkoneksi.......";
if (!$db) {
    die("Gagal terhubung dengan database:" . mysqli_connect_error());
} else {
    echo "berhasil terhubung dengan database";
}
?>