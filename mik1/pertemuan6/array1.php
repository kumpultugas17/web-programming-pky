<?php
$pc1 = 'Motherboard';
$pc2 = 'RAM';
$pc3 = 'Hardisk';
$pc4 = 'Processor';
$pc5 = 'VGA';

echo $pc1.', '.$pc2.', '.$pc3.', '.$pc4.', '.$pc5;
echo '<br><br>';
// $pc = array();
$pc = [
    'Motherboard', //index 0
    'RAM', //index 1
    'Hardisk', //index 2
    'Processor', //index 3
    'VGA', //index 4
    'Mouse',
    'Monitor'
];

echo $pc[0].', '.$pc[1].', '.$pc[2].', '.$pc[3].', '.$pc[4];
echo '<br>';

echo '<ul>';
for ($i=0; $i<count($pc); $i++) {
    echo '<li>'.$pc[$i].'</li>';
}
echo '</ul>';

echo '<br>';
echo '<ul>';
foreach ($pc as $item) {
    echo '<li>'.$item.'</li>';
}
echo '</ul>';