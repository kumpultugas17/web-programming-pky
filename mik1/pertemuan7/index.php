<?php
$login = [
    'usr' => 'eltibiz',
    'pwd' => 'rahasia'
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Pertemuan 7</title>
</head>

<body>
    <form action="" method="post">
        <table>
            <tr>
                <td>Username</td>
                <td>:</td>
                <td><input type="text" name="usr"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td>:</td>
                <td><input type="password" name="pwd"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><button type="submit" name="login">Login</button></td>
            </tr>
        </table>
    </form>
    <?php if (isset($_POST['login'])) : ?>
        <?php if ($login['usr'] === $_POST['usr'] && $login['pwd'] === $_POST['pwd']) : ?>
            <form action="" method="post">
                <label>Nama Lengkap</label>
                <input type="text" name="nama"><br>
                <label>NIM</label>
                <input type="text" name="nim"><br>
                <label>Jurusan</label>
                <input type="text" name="jurusan"><br>
                <label>Nilai Tugas</label>
                <input type="text" name="tugas"><br>
                <label>Nilai UTS</label>
                <input type="text" name="uts"><br>
                <label>Nilai UAS</label>
                <input type="text" name="uas"><br>
                <button type="submit" name="proses">Kirim</button>
            </form>
        <?php else : ?>
            <h3>Username dan Password Tidak sesuai!!</h3>
        <?php endif; ?>
    <?php endif; ?>
</body>

</html>

<?php
if (isset($_POST['proses'])) {
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $jurusan = $_POST['jurusan'];
    $tugas = $_POST['tugas'];
    $uts = $_POST['uts'];
    $uas = $_POST['uas'];
    $na = ($tugas * 0.2) + ($uts * 0.3) + ($uas * 0.5);

    if ($na > 84) {
        $grade = 'A';
    } elseif ($na > 75) {
        $grade = 'B';
    } elseif ($na > 65) {
        $grade = 'C';
    } elseif ($na > 45) {
        $grade = 'D';
    } else {
        $grade = 'E';
    }
    // If ternary
    $ket = $na > 65 ? '<span style=color:green;font-weight:bold;>Lulus</span>' : '<span style=color:red;font-weight:bold>Tidak Lulus</span>';

    echo 'Output';
    echo '<br>========================';
    echo '
        <table> 
            <tr>
                <td>Nama Lengkap</td>
                <td>:</td>
                <td>' . $nama . '</td>
            </tr>
            <tr>
                <td>NIM</td>
                <td>:</td>
                <td>' . $nim . '</td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td>:</td>
                <td>' . $jurusan . '</td>
            </tr>
            <tr>
                <td>Nilai Tugas</td>
                <td>:</td>
                <td>' . $tugas . '</td>
            </tr>
            <tr>
                <td>Nilai UTS</td>
                <td>:</td>
                <td>' . $uts . '</td>
            </tr>
            <tr>
                <td>Nilai UAS</td>
                <td>:</td>
                <td>' . $uas . '</td>
            </tr>
            <tr>
                <td>Nilai Akhir</td>
                <td>:</td>
                <td>' . $na . '</td>
            </tr>
            <tr>
                <td>Nilai Huruf</td>
                <td>:</td>
                <td>' . $grade . '</td>
            </tr>
            <tr>
                <td>Keterangan</td>
                <td>:</td>
                <td>' . $ket . '</td>
            </tr>
        </table>
    ';
}

?>