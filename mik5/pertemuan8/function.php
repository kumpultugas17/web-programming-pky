<?php

function perkenalan($nama='belum ada nama', $sekolah='tidak sekolah', $jurusan='belum dipilih', $thn_sekarang=0, $thn_lahir=0) {
    echo 'Hai, nama saya '.$nama.'<br>';
    echo 'Asal sekolah '.$sekolah.'<br>';
    echo 'Saya kuliah di ELTIBIZ jurusan '.$jurusan.'<br>';
    $umur = $thn_sekarang - $thn_lahir;
    echo 'Umur saya saat ini '.$umur.'<br>';
}

// for ($i=1; $i <= 10; $i++) { 
//     perkenalan();
//     echo '<hr>';
// }

perkenalan('M. Iqbal adenan', 'SMKN 1 Sampit', 'MIK', 2021, 1996);
echo "<hr>";
perkenalan('Agus Setiawan', 'SMAN 10 Banjarmasin', 'ADP', 2021, 1992);
echo "<hr>";
perkenalan();

function luassegitiga ($alas, $tinggi) {
    $luas = (0.5*$alas)*$tinggi;
    return $luas;
}
echo "<br>Luas Segitiga adalah ".luassegitiga(5, 9);
echo "<br>Luas Segitiga adalah ".luassegitiga(19, 25);
?>