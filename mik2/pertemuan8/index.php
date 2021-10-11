<?php
require 'data.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Data Barang</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama Barang</th>
            <th>Harga</th>
            <th>Jumlah</th>
            <th>Total</th>
            <th>Aksi</th>
        </tr>
        <?php $no=1; ?>
        <?php foreach ($barang as $item): ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $item['nama_barang']; ?></td>
                <td><?= rupiah($item['harga']); ?></td>
                <td><?= $item['jumlah']; ?></td>
                <td><?= rupiah(total($item['harga'], $item['jumlah'])); ?></td>
                <td>
                    <a href="">Edit</a> |
                    <a href="">Hapus</a>
                </td>
            </tr>
            <?php $total[]=total($item['harga'], $item['jumlah']); ?>
            <?php $subtotal = array_sum($total); ?>
        <?php endforeach ?>
        <tr>
            <td colspan="6">Subtotal : <?= rupiah($subtotal); ?></td>
        </tr>
    </table>
</body>
</html>