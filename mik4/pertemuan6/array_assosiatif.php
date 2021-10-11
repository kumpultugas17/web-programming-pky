<?php
$mahasiswa = [
    'nama' => ['M. Iqbal Adenan', 'Agus Setiawan'],
    'jurusan' => ['MIK', 'ADP'],
    'alamat' => ['Banjarmasin', 'Banjarmasin']
];

echo 'Nama saya : ' . $mahasiswa['nama'][0] . '<br>';
echo 'Jurusan : ' . $mahasiswa['jurusan'][0] . '<br>';
echo 'Alamat : ' . $mahasiswa['alamat'][0] . '<br><br>';

echo 'Nama saya : ' . $mahasiswa['nama'][1] . '<br>';
echo 'Jurusan : ' . $mahasiswa['jurusan'][1] . '<br>';
echo 'Alamat : ' . $mahasiswa['alamat'][1] . '<br><br>';


echo '<table border=1>';
echo '<tr>
        <th>Nama Lengkap</th>
        <th>Jurusan</th>
        <th>Alamat</th>
    </tr>';
echo '<tr>
    <td>' . $mahasiswa['nama'][0] . '</td>
    <td>' . $mahasiswa['jurusan'][0] . '</td>
    <td>' . $mahasiswa['alamat'][0] . '</td>
</tr>';
echo '<tr>
    <td>' . $mahasiswa['nama'][1] . '</td>
    <td>' . $mahasiswa['jurusan'][1] . '</td>
    <td>' . $mahasiswa['alamat'][1] . '</td>
</tr>';
echo '</table>';
