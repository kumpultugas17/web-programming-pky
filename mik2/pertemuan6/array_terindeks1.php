<?php
echo 'Array Terindeks<br><br>';

$pc1 = 'Motherboard';
$pc2 = 'Processor';
$pc3 = 'Hardisk';

echo $pc1.', '.$pc2.', '.$pc3;
echo '<br><br>';
// $pc = array();
$pc = ['Motherboard', 'Processor', 'Hardisk', 'RAM', 'Power Supplay', 'Monitor', 'Mouse'];

echo $pc[0].', '.$pc[1].', '.$pc[2];
echo '<br><br>';
echo '<ul>';
for ($i=0; $i < count($pc); $i++) { 
   echo '<li>'.$pc[$i].'</li>';
}
echo '</ul>';

echo '<ul>';
foreach ($pc as $item) {
    echo '<li>'.$item.'</li>';
}
echo '</ul>';