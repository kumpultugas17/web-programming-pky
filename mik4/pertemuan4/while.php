<?php
// Perulangan dengan While
$x = 1;
$y = 10;
while ($x <= $y) {
    if ($x % 2 == 0) {
        echo 'Angka : ' .$x. ' Genap<br>';
    } else {
        echo 'Angka : ' .$x. ' Ganjil<br>';
    }
    $x++;
}
// 10 - 1
// while ($y >= $x) {
//     echo $y . '<br>';
//     $y--;
// }
