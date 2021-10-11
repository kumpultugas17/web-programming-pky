<?php
$a=1; //awal
$b=10; //akhir
while ($a <= $b) {
    if ($a % 2 == 0) {
        echo $a.'. Hello World! -> Genap<br>';
    } else {
        echo $a.'. Hello World!  -> Ganjil<br>';
    }
    $a++;
}