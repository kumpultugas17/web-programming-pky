<?php 

$mahasiswa = [
    'nama' => ['M. Iqbal Adenan', 'Azkadina Razan Fatimah'],
    'jurusan' => ['MIK', 'AKP', 'ADP', 'ITS'],
    'jk' => ['Laki-laki', 'Perempuan']
];

echo 'Nama saya '.$mahasiswa['nama'][1].' kuliah di ELTIBIZ jurusan '.$mahasiswa['jurusan'][2].' dan saya '.$mahasiswa['jk'][1];
echo '<br><br>';
echo 'Nama saya '.$mahasiswa['nama'][0].' kuliah di ELTIBIZ jurusan '.$mahasiswa['jurusan'][3].' dan saya '.$mahasiswa['jk'][0];
