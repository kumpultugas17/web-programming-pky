<?php
$user = [
    'username' => 'eltibiz',
    'password' => 'admin'
];

$mahasiswa = [
    'nama' => ['M. Iqbal Adenan', 'Azkadina'],
    'jurusan' => ['MIK', 'ADP', 'AKP', 'ITS'],
    'jenis_kelamin' => ['Laki-laki', 'Perempuan']
];

if ($user['username'] === 'eltibiz' && $user['password'] === 'admin') {
    echo 'Nama saya '.$mahasiswa['nama'][1].' kuliah di ELTIBIZ jurusan '.$mahasiswa['jurusan'][2].' dan saya '.$mahasiswa['jenis_kelamin'][1];
} else {
    echo '<span style="color: red;">Username dan Password tidak sesuai!!</span>';
}

