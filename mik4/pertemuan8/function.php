<?php 

function perkenalan ($nama='Belum ada nama', $asalsekolah='Belum ada', $jurusan='Belum memilih jurusan', $tahun_sekarang=0, $tahun_lahir=0) {
    $umur = $tahun_sekarang-$tahun_lahir;
    echo 'Hai, nama saya '.$nama.'<br>';
    echo 'Saya kuliah di ELTIBIZ jurusan '.$jurusan.'<br>';
    echo 'Asal sekolah dari '.$asalsekolah.'<br>';
    echo 'Umur saya '.$umur;
    return $umur;
}

// perkenalan();
// echo '<hr>';
// perkenalan();
// echo '<hr>';

// for ($i=1; $i <= 5; $i++) { 
//     perkenalan();
//     echo '<hr>';
// }