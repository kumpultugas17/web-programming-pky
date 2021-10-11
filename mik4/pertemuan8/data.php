<?php 
require 'function_1.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Data Barang</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>Nama Barang</th>
            <th>Harga Barang</th>
            <th>Jumlah</th>
            <th>Sub Total</th>
        </tr>
        <?php foreach ($data as $item) { ?>
            <tr>
                <td><?= $item['nama_barang']; ?></td>
                <td><?= rupiah($item['harga_barang']); ?></td>
                <td><?= $item['jumlah']; ?></td>
                <td><?= rupiah(total($item['harga_barang'], $item['jumlah'])); ?></td>
            </tr>
            <?php 
            $a[] = total($item['harga_barang'], $item['jumlah']);
            $b = array_sum($a);
        } ?>
        <tr>
            <td colspan="4">Total : <?= rupiah($b); ?></td>
        </tr>
    </table>
</body>
</html>