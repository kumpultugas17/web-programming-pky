<?php 
$barang = [
    [
        'nama_barang' => 'Mouse',
        'harga' => 290000,
        'jumlah' => 9
    ],
    [
        'nama_barang' => 'Monitor',
        'harga' => 2750000,
        'jumlah' => 13
    ],
    [
        'nama_barang' => 'Keyboard',
        'harga' => 375000,
        'jumlah' => 7
    ]
];

function total($harga, $jumlah) {
    return $harga*$jumlah;
}

function rupiah($nominal) {
    return 'Rp'.number_format($nominal, 0,',','.');
}