<?php

$mahasiswa = [
    'nama' => ['M. Iqbal Adenan', 'Agus Setiawan'],
    'jurusan' => ['MIK', 'ITS', 'AKP', 'ADP'],
    'jk' => ['Laki-laki', 'Perempuan'],
    'alamat' => ['Banjarmasin', 'Sampit', 'Palangkaraya']
];

echo 'Saya adalah ' . $mahasiswa['nama'][1] . ', kuliah di ELTIBIZ jurusan ' . $mahasiswa['jurusan'][3] . ' tinggal di ' . $mahasiswa['alamat'][2] . ' dan saya ' . $mahasiswa['jk'][0];
echo '<br><br>';
echo 'Saya adalah ' . $mahasiswa['nama'][0] . ', kuliah di ELTIBIZ jurusan ' . $mahasiswa['jurusan'][2] . ' tinggal di ' . $mahasiswa['alamat'][1] . ' dan saya ' . $mahasiswa['jk'][0];
