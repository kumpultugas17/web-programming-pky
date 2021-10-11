<?php

$user = [
    'eltibiz', //index 0
    'admin123', //index 1
    'M. Iqbal Adenan' //index 2
];

if ($user[0] === 'eltibiz' && $user[1] === 'admin123') {
    echo 'Selamat datang, '.$user[2].' di website kami!!';
} else {
    echo 'Username dan Password anda tidak sesuai!';
}