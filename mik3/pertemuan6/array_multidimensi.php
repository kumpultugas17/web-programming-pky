<?php
$products = [
    [
        'product_name' => 'Laptop 1',
        'merk' => 'asus',
        'price' => 9750000
    ],
    [
        'product_name' => 'Laptop 2',
        'merk' => 'acer',
        'price' => 8550000
    ],
    [
        'product_name' => 'Laptop 3',
        'merk' => 'dell',
        'price' => 7756000
    ],
    [
        'product_name' => 'Laptop 4',
        'merk' => 'lenovo',
        'price' => 11756000
    ]
];
?>
<h4>Harga Laptop Tahin 2021</h4>
<table border="1" cellpadding="0" cellspacing="0">
    <tr style="background-color: black; color:white;">
        <th style="padding: 5px;">No</th>
        <th style="padding: 5px;">Product Name</th>
        <th style="padding: 5px;">Merk</th>
        <th style="padding: 5px;">Price</th>
    </tr>
    <?php $no = 1; ?>
    <?php foreach ($products as $product) : ?>
        <tr>
            <td style="padding: 3px;"><?= $no++; ?></td>
            <td style="padding: 3px;"><?= $product['product_name']; ?></td>
            <td style="padding: 3px;"><?= $product['merk']; ?></td>
            <td style="padding: 3px;"><?= $product['price']; ?></td>
        </tr>
    <?php endforeach; ?>
</table>