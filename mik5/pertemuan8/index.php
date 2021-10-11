<!DOCTYPE html>
<html lang="en">
<head>
    <title>Penerapan Function</title>
</head>
<body>
    <?php
    require 'config.php';
    ?>
    <table border="1">
        <tr>
            <th>Nama Barang</th>
            <th>Harga Barang</th>
            <th>Stok</th>
            <th>Total Harga</th>
        </tr>
        <?php foreach ($barang as $item) : ?>
            <tr>
                <td><?= $item['nama_barang']; ?></td>
                <td><?= rupiah($item['harga_barang']); ?></td>
                <td><?= $item['stok']; ?></td>
                <td><?= rupiah(total($item['harga_barang'], $item['stok'])); ?></td>
            </tr>
            <?php $total[] = total($item['harga_barang'], $item['stok']); ?>
            <?php $subtotal = array_sum($total); ?>
        <?php endforeach ?>
        <tr>
            <td colspan="4">Subtotal : <?= rupiah($subtotal); ?></td>
        </tr>
    </table>
</body>
</html>