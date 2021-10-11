<?php
$a = 1; //mulai
$b = 9; //akhir
while ($a <= $b) {
	if ($a % 2 == 0) {
		echo 'angka -> ' . $a . ' <- genap<br>';
	} else {
		echo 'angka -> ' . $a . ' <- ganjil<br>';
	}
	$a++;
}
echo '==============<br>';
$x = 9; //mulai
$y = 1; //akhir
while ($x >= $y) {
	echo 'angka -> ' . $x . '<br>';
	$x--;
}
