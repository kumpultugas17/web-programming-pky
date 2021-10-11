<?php

$login = [
    'eltibiz', //username
    'admin123', //password
    'M. Iqbal Adenan'
];

if ($login[0] === 'eltibiz' && $login[1] === 'admin123') {
    echo 'Selamat datang, '.$login[2]. ' di Website kami.<br>';
    echo '<a href=array1.php>Array 1</a>';
} else {
    echo 'Gagal Login!!!';
}