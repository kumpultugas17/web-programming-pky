<?php
$jurusan = ['ADP', 'AKP', 'MIK', 'ITS'];
echo '<table border=1>';
foreach ($jurusan as $isi) {
    echo '<tr>
            <td>' . $isi . '</td>
        </tr>
    ';
}
echo '</table>';
