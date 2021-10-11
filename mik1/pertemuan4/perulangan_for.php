<?php
    echo "Menampilkan angka tanpa perulangan<br>";
    echo 'angka -> 1<br>';
    echo 'angka -> 2<br>';
    echo 'angka -> 3<br>';
    echo 'angka -> 4<br>';
    echo 'angka -> 5<br>';

    echo "<br>Menampilkan angka dengan perulangan for<br>";
    for ($i=1; $i<=10; $i++) {
        if ($i % 2 == 0) {
            echo 'angka -> '.$i.'<br>';
        }
    }
    for ($i=10; $i>=1; $i--) {
      if ($i % 2 != 0) {
        echo 'angka -> '.$i.'<br>';
      }
    }
?>