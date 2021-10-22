<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'db_pertanian_mik3';

$koneksi = mysqli_connect($servername, $username, $password, $database);

if (!$koneksi) {
   die("Koneksi database gagal!, " . mysqli_connect_error());
}

echo 'Koneksi database berhasil!';