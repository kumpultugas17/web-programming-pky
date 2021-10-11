<?php

$login = [
    'admin', //index 0
    'admin12', //index 1
    'M. Iqbal Adenan' //index 2
];

if ($login[0] === 'admin' && $login[1] === 'admin123') {
    echo 'Selamat datang ' . $login[2] . ' di Website kami!!';
} else {
    echo 'Gagal login!!!';
}
