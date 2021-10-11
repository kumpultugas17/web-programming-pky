<?php
// $array1 = array('Motherboard');
// $array2 = ['Motherboar'];

// echo $array1[0];
// echo $array2[0];

$pc = [
    'Motherboard', //index 0
    'RAM', //index 1
    'Hadrdisk', //index 2
    'Processor', //index 3
    'Power Supply', //index 4
];

echo $pc[0] . '<br>';
echo $pc[1] . '<br>';
echo $pc[2] . '<br>';
echo $pc[3] . '<br>';
echo $pc[4] . '<br><br>';

for ($i = 0; $i < count($pc); $i++) {
    echo $pc[$i] . '<br>';
}
echo 'Jumlah data array :' . count($pc) . '<br>';

foreach ($pc as $row) {
    echo $row . '<br>';
}
