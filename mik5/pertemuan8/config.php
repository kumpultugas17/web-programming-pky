<?php
$barang = [
    [
        'nama_barang' => 'Kopi',
        'harga_barang' => 14500,
        'stok' => 7
    ],
    [
        'nama_barang' => 'Teh',
        'harga_barang' => 10500,
        'stok' => 16
    ],
    [
        'nama_barang' => 'Gula',
        'harga_barang' => 12500,
        'stok' => 23
    ]
];

function rupiah($nominal) {
    return 'Rp'.number_format($nominal,0,',','.');
}

function total($a, $b) {
    return $a*$b;
}
?>