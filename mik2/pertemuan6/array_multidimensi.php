<?php
$products = [
    [
        'name' => 'AMD Ryzen 3',
        'merk' => 'Lenovo',
        'price' => 8069000
    ],
    [
        'name' => 'Asus ROG GI502',
        'merk' => 'Asus',
        'price' => 9750000
    ],
    [
        'name' => 'Dell Inspiration 3443',
        'merk' => 'Dell',
        'price' => 6999000
    ],
    [
        'name' => 'MSI Modern 14',
        'merk' => 'MSI',
        'price' => 8499000
    ]
];
// var_dump($products);
?>

<table border="1" cellpadding="0" cellspacing="0">
    <tr style="background-color: black; color: white; ">
        <th style="padding: 7px">No</th>
        <th style="padding: 7px">Product Name</th>
        <th style="padding: 7px">Merk</th>
        <th style="padding: 7px">Price</th>
    </tr>
    <?php $no=1; ?>
    <?php foreach ($products as $product) : ?>
        <tr>
            <td style="padding: 5px; text-align: center">
                <?= $no++; ?>
            </td>
            <td style="padding: 5px">
                <?= $product['name']; ?> 
            </td>
            <td style="padding: 5px">
                <?= $product['merk']; ?>
            </td>
            <td style="padding: 5px">
                <?= $product['price']; ?>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
