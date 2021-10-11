<?php
$data = [
    [
        'nama_barang' => 'Indomie Goreng',
        'harga_barang' => '3500',
        'jumlah' => '7'
    ],
    [
        'nama_barang' => 'Minyak Goreng',
        'harga_barang' => '35000',
        'jumlah' => '10'
    ],
    [
        'nama_barang' => 'Sarden',
        'harga_barang' => '3500',
        'jumlah' => '17'
    ]
];

function rupiah($harga) {
    $hasil = 'Rp '.number_format($harga,0,',','.');
    return $hasil;
}

function total($hrg, $jml) {
    return $hrg*$jml;
}
?>

