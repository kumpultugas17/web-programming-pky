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
        [
            $usr = 'admin',
            $pwd = 'rahasia'
        ]
    ];
    ?>
    <h5>Login</h5>
    <form action="" method="post">
        <label>Username</label>
        <input type="text" name="usr"><br>
        <label>Password</label>
        <input type="text" name="pwd"><br>
        <button type="submit" name="login">Login</button>
    </form>
    <?php 
    if (isset($_POST['login'])) {
        $usr = $_POST['usr'];
        $pwd = $_POST['pwd'];

        if ($usr === 'admin' && $pwd === 'rahasia') {
            ?>
            <h5>Menghitung Nilai Rata-Rata & Nilai Akhir</h5>
            <form action="" method="post">
                <label>Nama Lengkap</label>
                <input type="text" name="nama"><br>
                <label>NIM</label>
                <input type="text" name="nim"><br>
                <label>Web Programming</label>
                <input type="text" name="wp"><br>
                <label>Web Desain</label>
                <input type="text" name="wd"><br>
                <label>Database MySQL</label>
                <input type="text" name="db"><br>
                <!-- <input type="submit" name="submit" value="Proses"> -->
                <button type="submit" name="submit">Proses</button>
            </form>
            <?php
        } else {
            echo 'Gagal Login';
        }
    }
    ?>
</body>
</html>
<?php
echo "<h5>Output</h5>";
echo "===================================<br>";
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $wp = $_POST['wp'];
    $wd = $_POST['wd'];
    $db = $_POST['db'];

    $rata_rata = ($wp + $wd + $db) / 3;
    if ($rata_rata < 46) {
        $grade = 'E';
    } elseif ($rata_rata < 61) {
        $grade = 'D';
    } elseif ($rata_rata < 76) {
        $grade = 'C';
    } elseif ($rata_rata < 86) {
        $grade = 'B';
    } else {
        $grade = 'A';
    }
    
    if ($rata_rata > 60) {
        $keterangan = 'Lulus';
    } else {
        $keterangan = 'Tidak Lulus';
    }

    echo "Nama Lengkap : ".$nama;
    echo "<br>NIM : ".$nim;
    echo "<br>Nilai Web Programming : ".$wp;
    echo "<br>Nilai Web Desain : ".$wd;
    echo "<br>Nilai Database MySQL : ".$db;
    echo "<br>Nilai Rata-rata : ".$rata_rata;
    echo "<br>Grade : ".$grade;
    echo "<br>Keterangan : " ;
    echo $keterangan === 'Lulus' ? "<span style=color:green;font-weight:bold;>".$keterangan."</span>" : "<span style=color:red;font-weight:bold;>".$keterangan."</span>";
}
?>