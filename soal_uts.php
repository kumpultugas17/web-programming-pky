<!DOCTYPE html>
<html lang="en">
<head>
    <title>UJIAN TENGAH SEMESTER (UTS)</title>
    <style>
    .container {
        width: 100%;
        text-align: center;
    }
    .left {
        float: left;
        width: 50%;
    }
    .right {
        float: right;
        width: 50%;
    }
</style>
</head>
<body>
    <div class="container">
        <b><u>Isilah data dibawah ini</u></b><br>
        Nama Lengkap : ... <br>
        NIM : ... <br>
        Jurusan : ... <br>
    </div>
    <hr>
    <div class="left">
        <h5><u>Bagian Input</u></h5>
        <form action="" method="post">
            <label for="">Nama Karyawan :</label><br>
            <input type="text" name="nama_karyawan"><br>
            <label for="">Golongan Jabatan :</label><br>
            <input type="text" name="golongan"><br>
            <label for="">Tahun masuk kerja :</label><br>
            <input type="number" name="tahun"><br><br>
            <input type="submit" name="hitung_gaji" value="Hitung Gaji">
        </form>
    </div>
    <div class="right">
        <h5><u>Bagian Output</u></h5>
        <?php
        if (isset($_POST['hitung_gaji'])) :
            $nama_karyawan = $_POST['nama_karyawan'];
            $golongan = $_POST['golongan'];
            $tahun = $_POST['tahun'];

            if ($golongan == 'A') {
                $gp = 3500000;
            } elseif ($golongan == 'B') {
                $gp = 2750000;
            } elseif ($golongan == 'C') {
                $gp = 2200000;
            } else {
                $gp = 1500000;
            }

            $masa_kerja = 2021 - $tahun;

            $bonus = ($tahun>=5) ? 2000000 : 750000 ;

            $gb = $gp + $bonus;
            ?>

            <table>
                <tr>
                    <td>Nama Karyawan</td>
                    <td>:</td>
                    <td><?= $nama_karyawan; ?></td>
                </tr>
                <tr>
                    <td>Golongan</td>
                    <td>:</td>
                    <td><?= $golongan; ?></td>
                </tr>
                <tr>
                    <td>Masa Kerja</td>
                    <td>:</td>
                    <td><?= $masa_kerja; ?></td>
                </tr>
                <tr>
                    <td>Gaji Pokok</td>
                    <td>:</td>
                    <td><?= $gp; ?></td>
                </tr>
                <tr>
                    <td>Bonus</td>
                    <td>:</td>
                    <td><?= $bonus; ?></td>
                </tr>
                <tr>
                    <td>Gaji Bersih</td>
                    <td>:</td>
                    <td><?= $gb; ?></td>
                </tr>
            </table>
        <?php endif; ?>
    </div>
</body>
</html>