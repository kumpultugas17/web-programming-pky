<?php
    $data = [
        'Kalteng', 
        'Kalsel', 
        'Kalbar', 
        'Kaltim'
    ];

    echo '<table border=1>
            <tr>
                <th>No</th>
                <th>Provinsi</th>
        </tr>';
        $no = 1;
    foreach ($data as $provinsi) {
        echo '<tr>
            <td>'.$no.'</td>
            <td>'.$provinsi.'</td>
        </tr>';
        $no++;
    }
    echo '<tr><td colspan=2>'.count($data).'</td></tr>
    </table>';
?>