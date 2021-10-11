<?php
$products = [
    [
        'products_name' => 'Laptop Asus',
        'price' => 12500000,
        'qty' => 7
    ],
    [
        'products_name' => 'Laptop Acer',
        'price' => 9750000,
        'qty' => 13
    ],
    [
        'products_name' => 'Laptop Lenovo',
        'price' => 15600000,
        'qty' => 9
    ]
];

function total($harga, $qty) {
    return $harga*$qty;
}

function rupiah($nominal) {
    return 'Rp'.number_format($nominal, 0, ',','.');
}