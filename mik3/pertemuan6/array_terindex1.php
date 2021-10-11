<?php
$pc1 = 'Motherboard';
$pc2 = 'RAM';
$pc3 = 'Processor';

echo $pc1 . ', ' . $pc2 . ', ' . $pc3;
echo '<br><br>';
// $pc = array();
$pc = ['Motherboard', 'RAM', 'Processor', 'Hardisk', 'Power Supplay', 'Mouse', 'Monitor'];

echo $pc[0] . ', ' . $pc[1] . ', ' . $pc[2];
echo '<br><br>';
echo '<ul>';
for ($i = 0; $i < count($pc); $i++) {
    echo '<li>' . $pc[$i] . '</li>';
}
echo '</ul>';

echo '<ul>';
foreach ($pc as $item) {
    echo '<li>' . $item . '</li>';
}
echo '</ul>';
