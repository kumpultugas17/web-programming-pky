<?php
$mahasiswa = [
    [
        'nama' => 'Agus Setiawan',
        'jurusan' => 'MIK',
        'alamat' => 'Banjarmasin' 
    ],
    [
        'nama' => 'M. Iqbal Adenan',
        'jurusan' => 'AKP',
        'alamat' => 'Palangkaraya' 
    ],
    [
        'nama' => 'Azkadina Razan Fatimah',
        'jurusan' => 'AKP',
        'alamat' => 'Bandung' 
    ],
];
?>
<table border="1">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Jurusan</th>
        <th>Alamat</th>
    </tr>
    <?php $no=1; ?>
    <?php foreach ($mahasiswa as $mhs) { ?>
    <tr>
        <td><?= $no++; ?></td>
        <td><?= $mhs['nama']; ?></td>
        <td><?= $mhs['jurusan']; ?></td>
        <td><?= $mhs['alamat']; ?></td>
    </tr>
    <?php } ?>
</table>