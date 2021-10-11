<?php
    $matkul = [
        'Spreadsheet',
        'Wordprocessing',
        'Power Point',
        'Desain Grafis',
        'Troubleshooting',
        'Bahasa Inggris',
        'Etika',
        'Database SQL',
        'Web Desain',
        'Web Programming'
    ];
    echo '<table border=1 style=border-spacing:0px;padding:0>';
    echo '<tr bgcolor=yellow>
    <th>Nomor</th>
    <th>Mata Kuliah</th>
    </tr>';
    $no=1;
    foreach ($matkul as $data) :
        echo '<tr>
        <td>'.$no++.'</td>
        <td>'.$data.'</td>
        </tr>';
    endforeach;
    echo '<tr bgcolor=yellow><td colspan=2 align=center>Total : '.count($matkul).' Data</td></tr>';
    echo '</table>';
?>