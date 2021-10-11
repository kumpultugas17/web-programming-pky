<?php

$mahasiswa = [
    'nama' => ['M. Iqbal Adenan', 'Agus Setiawan'],
    'jurusan' => ['MIK', 'ADP'],
    'jk' => ['Laki-laki', 'Perempuan'],
    'alamat' => ['Banjarmasin', 'Palangkaraya']
];

echo 'Nama Lengkap : ' . $mahasiswa['nama'][1];
echo '<br>Jurusan : ' . $mahasiswa['jurusan'][0];
echo '<br>Jenis Kelamin : ' . $mahasiswa['jk'][0];
echo '<br>Alamat : ' . $mahasiswa['alamat'][1];
