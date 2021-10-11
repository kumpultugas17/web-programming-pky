<?php
$i=1;
do {
    if ($i % 2 == 0) {
        echo '<table border=1 bgcolor=aqua>
        <tr><td>'.$i.'</td></tr>
        </table>';
    } else {
        echo '<span style=color;red;background:yellow;>'.$i.'</span>';
    }
    $i++;
}
while ($i <= 10);
