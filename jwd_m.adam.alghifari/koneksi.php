<?php
$host = 'localhost';
$user = 'root'; // Ganti dengan username database Anda (default nya root)
$password = ''; // Ganti dengan password database yang telah dibuat (tergantung pengguna)
$database = 'db_tokoelektronik'; // Ganti dengan nama database yang telah dibuat

$con = mysqli_connect($host, $user, $password, $database);

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
?>