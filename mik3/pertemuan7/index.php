<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pertemuan 7</title>
    <style>
        .left {
            float: left;
            width: 50%;
        }

        .right {
            float: right;
            width: 50%;
        }

        .container {
            width: 100%;
        }
    </style>
</head>
<?php
session_start();

if (!$_SESSION['nama_admin']) {
    header('Location:login.php');
}
?>

<body>
    <div class="container">
        Hai, <?= $_SESSION['nama_admin']; ?> <br>
        <a href="logout.php">Logout</a>
    </div>
    <div class="left">
        <h5><u>Input Data</u></h5>
        <form action="" method="POST">
            <table>
                <tr>
                    <td>Nama Lengkap</td>
                    <td>:</td>
                    <td><input type="text" name="nama"></td>
                </tr>
                <tr>
                    <td>NIM</td>
                    <td>:</td>
                    <td><input type="text" name="nim"></td>
                </tr>
                <tr>
                    <td>Jurusan</td>
                    <td>:</td>
                    <td><input type="text" name="jurusan"></td>
                </tr>
                <tr>
                    <td>Nilai Tugas</td>
                    <td>:</td>
                    <td><input type="text" name="tugas"></td>
                </tr>
                <tr>
                    <td>Nilai UTS</td>
                    <td>:</td>
                    <td><input type="text" name="uts"></td>
                </tr>
                <tr>
                    <td>Nilai UAS</td>
                    <td>:</td>
                    <td><input type="text" name="uas"></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><button type="submit" name="hitung">Submit</button></td>
                </tr>
            </table>
        </form>
    </div>
    <div class="right">
        <h5><u>Output Data</u></h5>
        <?php
        if (isset($_POST['hitung'])) :
            $nama_lengkap = $_POST['nama'];
            $nim = $_POST['nim'];
            $jurusan = $_POST['jurusan'];
            $tugas = $_POST['tugas'];
            $uts = $_POST['uts'];
            $uas = $_POST['uas'];

            $na = ($tugas * 0.2) + ($uts * 0.3) + ($uas * 0.5);

            if ($na > 85) {
                $nh = 'A';
            } elseif ($na > 75) {
                $nh = 'B';
            } elseif ($na > 65) {
                $nh = 'C';
            } elseif ($na > 45) {
                $nh = 'D';
            } else {
                $nh = 'E';
            }

            $ket = ($na > 65) ? '<span style=color:green; font-weight:bold;>LULUS</span>' : '<span style=color:red; font-weight:bold;>TIDAK LULUS</span>';
        ?>
            <table>
                <tr>
                    <td>Nama Lengkap</td>
                    <td>:</td>
                    <td><?php echo $nama_lengkap; ?></td>
                </tr>
                <tr>
                    <td>NIM</td>
                    <td>:</td>
                    <td><?php echo $nim; ?></td>
                </tr>
                <tr>
                    <td>Jurusan</td>
                    <td>:</td>
                    <td><?php echo $jurusan; ?></td>
                </tr>
                <tr>
                    <td>Nilai Tugas</td>
                    <td>:</td>
                    <td><?php echo $tugas; ?></td>
                </tr>
                <tr>
                    <td>Nilai UTS</td>
                    <td>:</td>
                    <td><?php echo $uts; ?></td>
                </tr>
                <tr>
                    <td>Nilai UAS</td>
                    <td>:</td>
                    <td><?php echo $uas; ?></td>
                </tr>
                <tr>
                    <td>Nilai Akhir</td>
                    <td>:</td>
                    <td><?php echo $na; ?></td>
                </tr>
                <tr>
                    <td>Nilai Huruf</td>
                    <td>:</td>
                    <td><?php echo $nh; ?></td>
                </tr>
                <tr>
                    <td>Keterangan</td>
                    <td>:</td>
                    <td><?php echo $ket; ?></td>
                </tr>
            </table>
        <?php endif; ?>
    </div>
</body>

</html>