<?php 

$login = [
    'eltibiz', //username index 0
    'admin123', //password index 1
    'M. Iqbal Adenan'
];

if ($login[0] === 'eltibiz'  && $login[1] === 'admin123') {
    echo 'Hai '.$login[2].', Selamat datang di Website kami !!!';
    echo '<a href=array_terindeks1.php>Link</a>';
} else {
    echo 'Username salah !!!';
}