<?php
function umur($thn_skg, $thn_lhr) {
    return $thn_skg-$thn_lhr;
}

function perkenalan($nama='..', $sekolah='..', $jurusan='..') {
    echo 'Hai, ...<br>';
    echo 'Nama Saya '.$nama.'<br>';
    echo 'Asal sekolah '.$sekolah.'<br>';
    echo 'Kuliah di ELTIBIZ Jurusan '.$jurusan.'<br>';
    echo 'Umur saya saat ini : '.umur(2021, 1995).'<br>';
}

perkenalan('Abdullah', 'SMAN 10 Banjarmasin', 'MIK');
echo '<hr>';
perkenalan('M. Iqbal Adenan', 'SMKN 1 Sampit', 'ADP');
echo '<hr>';
perkenalan();

function persegi($panjang=0, $lebar=0) 
{
    $luas = $panjang*$lebar;
    return $luas;
}
echo '<hr>';
echo 'Luas adalah : '.persegi(12, 12);
echo '<br>Luas adalah : '.persegi(5, 12);

function keterangan($angka) {
    if ($angka % 2 == 0) {
        $ket = 'Genap';
    } else {
        $ket = 'Ganjil';
    }
    return $ket;
}

$persegi = persegi(9, 7);
echo '<br>Keterangan : '.$persegi.'('.keterangan($persegi).')';