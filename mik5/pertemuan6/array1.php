<?php
$pc1 = 'Motherboard';
$pc2 = 'RAM';
$pc3 = 'Processor';

echo $pc1 . ', ' . $pc2 . ', ' . $pc3;
echo '<br>';
echo '<br>';
// $pc = array('Motherboard', 'RAM', 'Processor');
$pc = [
    'Motherboard', //index 0
    'RAM', //index 1
    'Processor', //index 2
    'Hardisk', //index 3
    'Power Supplay', //index 4
    'VGA', //index 5
    'Spreaker'
];

echo $pc[0] . ', ' . $pc[1] . ', ' . $pc[2] . ', ' . $pc[3] . ', ' . $pc[4] . ', ' . $pc[5];

echo '<br><br>';

for ($i = 0; $i < count($pc); $i++) {
    echo $pc[$i] . ', ';
}

echo '<br><br>';

foreach ($pc as $item) {
    echo $item . ', ';
}