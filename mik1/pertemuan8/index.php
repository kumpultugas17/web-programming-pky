<?php 
require 'function_data.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>Products</th>
            <th>Price</th>
            <th>Qty</th>
            <th>Total</th>
            <th>Aksi</th>
        </tr>
        <?php foreach ($products as $row): ?>
            <tr>
                <td><?= $row['products_name']; ?></td>
                <td><?= rupiah($row['price']); ?></td>
                <td><?= $row['qty']; ?></td>
                <td><?= rupiah(total($row['price'], $row['qty']));?></td>
                <td><a href="">Edit</a> | <a href="">Hapus</a></td>
            </tr>
            <?php 
            $total[] = total($row['price'], $row['qty']);
            $subtotal = array_sum($total);
            ?>
        <?php endforeach; ?>
        <tr>
            <td colspan="5">Subtotal : <?= rupiah($subtotal); ?></td>
        </tr>
    </table>
</body>
</html>