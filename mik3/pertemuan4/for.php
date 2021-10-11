<?php
    echo 'Menampilkan angka tanpa perulangan<br>';
    echo '1<br>';
    echo '2<br>';
    echo '3<br>';
    echo '4<br>';
    echo '5<br>';
    echo 'Menampilkan dengan perulangan<br>';
    for ($i=1; $i<=7; $i++) {
        if ($i % 2 == 0) {
            echo $i.' = <span style="color:red">Genap</span><br>';
        } else {
            echo $i.' = Ganjil<br>';
        }
    }
?>