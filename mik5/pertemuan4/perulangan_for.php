<?php
echo 'Ini tidak menggunakan perulangan<br>';
echo 'angka 1<br>';
echo 'angka 2<br>';
echo 'angka 3<br>';
echo 'angka 4<br>';
echo 'angka 5<br>';

echo 'Ini menggunakan perulangan for<br>';
$x = 1;
$y = 6;
for ($i = $x; $i <= $y; $i++) {
    if ($i % 2 == 0) {
        echo '<h2>angka ' . $i . '</h2><br>';
    } else {
        echo '<h4>angka ' . $i . '</h4><br>';
    }
    // echo 'angka '.$i.'<br>';
}
