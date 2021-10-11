<?php
$mahasiswa = [
    [
        'nama' => 'M. Iqbal Adenan',
        'jurusan' => 'MIK',
    ],
    [
        'nama' => 'Agus Setiawan',
        'jurusan' => 'ADP',
    ],
    [
        'nama' => 'Roni',
        'jurusan' => 'AKP',
    ],
    [
        'nama' => 'Lisa',
        'jurusan' => 'ITS',
    ]
];
// foreach ($mahasiswa as $mhs) {
//     echo $mhs['nama'];
// }
?>

<table border="1">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Jurusan</th>
    </tr>
    <?php $no=1; ?>
    <?php foreach ($mahasiswa as $mhs) { ?>
        <tr>
            <td><?= $no++; ?> </td>
            <td><?= $mhs['nama']; ?></td>
            <td><?= $mhs['jurusan']; ?></td>
        </tr>
    <?php } ?>
</table>