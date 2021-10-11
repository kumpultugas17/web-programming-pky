<?php
    $x=1; //Angka awal
    $y=7; //Batas akhir

    while ($y >= $x) {
        if ($y % 2 == 0) {
            echo '<b>Hello world! <- '.$y.' Genap</b><br>';
        } else {
            echo '<i>Hello world! <- '.$y.' Ganjil</i><br>';
        }
        $y--;
    }
    echo 'Perulangan selesai!';
