<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $login = [
        'username' => 'eltibiz',
        'password' => 'rahasia'
    ];
    ?>
    <form action="" method="post">
        <label>Username</label>
        <input type="text" name="username"><br>
        <label>Password</label>
        <input type="text" name="password"><br>
        <button type="submit" name="login">Login</button>
    </form>

    <?php if (isset($_POST['login'])): ?>
        <?php if ($_POST['username'] === $login['username'] && $_POST['password'] === $login['password']): ?>
            ===================================<br>
            <form action="" method="post">
                <label>Nama</label>
                <input type="text" name="nama"><br>
                <label>NIM</label>
                <input type="text" name="nim"><br>
                <label>Nilai Tugas</label>
                <input type="text" name="nilai_tugas"><br>
                <label>Nilai UTS</label>
                <input type="text" name="nilai_uts"><br>
                <label>Nilai UAS</label>
                <input type="text" name="nilai_uas"><br>
                <button type="submit" name="proses">Proses</button>
            </form>
        <?php else: ?>
            <span style="color:red;font-weight=bold;">Username dan Password Salah!!!</span>
        <?php endif ?>
    <?php endif ?>

</body>
</html>

<?php 
if (isset($_POST['proses'])) {
    echo '------------------------------';
    echo '<br>Output';
    echo '<br>------------------------------<br>';
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $nilai_tugas = $_POST['nilai_tugas'];
    $nilai_uts = $_POST['nilai_uts'];
    $nilai_uas = $_POST['nilai_uas'];

    $nilai_akhir = ($nilai_tugas*0.2)+($nilai_uts*0.3)+($nilai_uas*0.5);

    if ($nilai_akhir>85) {
        $grade = 'A';
    } elseif ($nilai_akhir>75) {
        $grade = 'B';
    } elseif ($nilai_akhir>65) {
        $grade = 'C';
    } elseif ($nilai_akhir>45) {
        $grade = 'D';
    } else {
        $grade = 'E';
    }

    $keterangan = $nilai_akhir > 65 ? '<span style=color:green;font-weight:bold;>Lulus</span>' : '<span style=color:red;font-weight=bold;>Tidak Lulus</span>';

    echo 'Nama : '.$nama;
    echo '<br>NIM : '.$nim;
    echo '<br>Nilai Tugas : '.$nilai_tugas;
    echo '<br>Nilai UTS : '.$nilai_uts;
    echo '<br>Nilai UAS : '.$nilai_uas;
    echo '<br>Nilai Akhir : '.$nilai_akhir;
    echo '<br>Grade : '.$grade;
    echo '<br>Keterangan : '.$keterangan;
}
?>