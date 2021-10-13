<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Penggajian Perminggu</title>
    <style>
        body {
            font-family: Consolas;
        }

        .form_input {
            margin-top: 0.5rem;
        }

        .input {
            box-sizing: border-box;
            width: 200px;
            padding: 3px;
        }

        .btn {
            border: none;
            background: salmon;
            color: whitesmoke;
            border-radius: 3px;
            padding: 5px 10px;
        }

        .btn:hover {
            background: #fa8012;
            color: black;
        }
    </style>
</head>

<body>
    <h2>Aplikasi Penggajian Sederhana</h2>
    <fieldset>
        <legend>INPUT DATA</legend>
        <form action="" method="POST">
            <div>
                <label for="">Nama Lengkap</label> <br>
                <input type="text" name="nama" class="input" placeholder="Masukkan Nama Lengkap">
            </div>
            <div class="form_input">
                <label for="">Golongan</label> <br>
                <select name="golongan" class="input">
                    <option selected>Pilih Golongan</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                </select>
            </div>
            <div class="form_input">
                <label for="">Jam Kerja</label> <br>
                <input type="number" name="jam_kerja" class="input" placeholder="Masukkan Jumlah Jam Kerja">
            </div>
            <div class="form_input">
                <button type="submit" name="submit" class="btn">Submit</button>
            </div>
        </form>
    </fieldset>
    <?php
    if (isset($_POST['submit'])) :
        // input
        $nama = $_POST['nama'];
        $golongan = $_POST['golongan'];
        $jam_kerja = $_POST['jam_kerja'];

        // soal no 1
        switch ($golongan) {
            case 'A':
                $gaji = 8000;
                break;

            case 'B':
                $gaji = 10000;
                break;

            case 'C':
                $gaji = 12000;
                break;

            default:
                $gaji = 14000;
                break;
        }

        // soal no 2
        $total = 48 * $gaji;

        // soal no 3
        if ($jam_kerja > 48) {
            $lembur = ($jam_kerja - 48) * 15000;
        } else {
            $lembur = 0;
        }

        // soal no 4
        $total_gaji = $total + $lembur;
    ?>
        <fieldset>
            <legend>OUTPUT DATA</legend>
        <?php
        // soal no 5
        echo "Nama karyawan : {$nama}<br>";
        echo "Golongan : {$golongan}<br>";
        echo "Jam Kerja : {$jam_kerja}<br>";
        echo "Gaji Perjam : {$gaji}<br>";
        echo "Gaji Perminggu : {$total}<br>";
        echo "Lembur : {$lembur}<br>";
        echo "Total Gaji : {$total_gaji}<br>";
    endif
        ?>
        </fieldset>

        <fieldset>
            <legend>Data Tabel</legend>
            <table border=1>
                <thead>
                    <tr>
                        <td>Nama Karyawan</td>
                        <td>Golongan</td>
                        <td>Jam Kerja</td>
                        <td>Gaji Perjam</td>
                        <td>Gaji Perminggu</td>
                        <td>Lembur</td>
                        <td>Total Gaji</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?= $nama; ?></td>
                        <td><?= $golongan; ?></td>
                        <td><?= $jam_kerja; ?></td>
                        <td><?= $gaji; ?></td>
                        <td><?= $total; ?></td>
                        <td><?= $lembur; ?></td>
                        <td><?= $total_gaji; ?></td>
                    </tr>
                </tbody>
            </table>
        </fieldset>
</body>

</html>