<?php
$mahasiswa = [
    [
        'nama' => 'Ahmad',
        'jurusan' => 'MIK',
        'jenis_kelamin' => 'Laki-laki'
    ],
    [
        'nama' => 'Mustofa',
        'jurusan' => 'ADP',
        'jenis_kelamin' => 'Laki-laki'
    ],
    [
        'nama' => 'Hani',
        'jurusan' => 'AKP',
        'jenis_kelamin' => 'Perempuan'
    ]
];
?>

<table border="1">
    <tr>
        <th>Nama</th>
        <th>Jurusan</th>
        <th>Jenis Kelamin</th>
    </tr>
    <?php foreach ($mahasiswa as $mhs) { ?>
        <tr>
            <td><?= $mhs['nama']; ?></td>
            <td><?= $mhs['jurusan']; ?></td>
            <td><?= $mhs['jenis_kelamin']; ?></td>
        </tr>
    <?php } ?>
</table>