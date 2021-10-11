<?php
$login = [
    'eltibiz', //username
    'rahasia123', //password
    'M. Iqbal Adenan' //name
];

if ($login[0] === 'eltibiz' && $login[1] === 'rahasia') {
    echo 'Hai, ' . $login[2] . '...<br>';
    echo 'Selamat datang diwebsite kami !!!';
} else {
    echo '<span style=color:red;>Username dan Password tidak sesuai!!!</span>';
}
