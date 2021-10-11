<?php 
function perkenalan($nama='...', $jur='...', $sekolah='...', $thn_skg=0, $thn_lhr=0) {
  echo 'Nama saya '.$nama.'<br>';
  echo 'Saya kuliah di ELTIBIZ jurusan '.$jur.'<br>';
  echo 'Asal Sekolah dari '.$sekolah.'<br>';
  $umur = $thn_skg-$thn_lhr;
  echo 'Umur saya saat ini adalah '.$umur.' tahun<br>';
}

perkenalan('Iqbal Adenan', 'MIK', 'SMKN 1 Sampit', 2021, 1994);
echo '<hr>';
perkenalan('Agus Setiawan', 'ADP', 'SMAN 10 Banjarmasin', 2021, 1992);
echo '<hr>';

function cari($angka) {
    if ($angka % 2 == 0) {
        $hasil = 'Genap';
    } else {
        $hasil = 'Ganjil';
    }
    return $hasil;
}
echo 'Nilainya adalah : '.cari(7);
echo '<br><hr>';
function penggajian($gp, $lembur) {
    if ($lembur > 5) {
        $h = 0.2*$gp;
    } else {
        $h = 0.1*$gp;
    }
    $total = $gp+$h;
    return $total;
}

function rupiah($nominal) {
    return 'Rp'.number_format($nominal, 0, ',','.');
}

echo 'Total Gaji Bersih : '.rupiah(penggajian(2000000, 15));
echo '<br>Total Gaji Bersih : '.rupiah(penggajian(7000000, 2));
?>