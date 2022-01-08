<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'db-mhs-uas1';

$koneksi = mysqli_connect($servername, $username, $password, $database);

if (!$koneksi) {
  die("Koneksi database gagal!, " . mysqli_connect_error());
}