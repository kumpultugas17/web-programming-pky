<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        button {
            background: salmon;
            color: #fff;
            font-size: 11pt;
            width: 180px;
            border: none;
            border-radius: 3px;
            padding: 10px 20px;
        }

        button:hover {
            background: sandybrown;
            color: black;
        }

        input,
        select {
            width: 180px;
            font-size: 11pt;
            padding: 5px;
            box-sizing: border-box;
        }
    </style>
</head>

<body>
    <h1>Aplikasi Penggajian Perminggu</h1>
    <fieldset>
        <legend>INPUT DATA</legend>
        <form action="" method="POST">
            <div>
                <label>Nama</label> <br>
                <input type="text" name="nama" placeholder="Masukkan Nama"> <br>
            </div>
            <div style="margin-top: 0.5rem;">
                <label>Golongan</label> <br>
                <select name="golongan">
                    <option selected>Pilih Golongan</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                </select> <br>
            </div>
            <div style="margin-top: 0.5rem;">
                <label>Jam Kerja</label> <br>
                <input type="number" name="jk" placeholder="Masukkan Jam Kerja"> <br>
            </div>
            <div style="margin-top: 0.5rem;">
                <button type="submit" name="submit">Submit</button>
            </div>
        </form>
    </fieldset>
    <?php
    if (isset($_POST['submit'])) :
        // soal 1
        $nama = $_POST['nama'];
        $golongan = $_POST['golongan'];
        $jam_kerja = $_POST['jk'];

        // soal 2
        switch ($golongan) {
            case 'A':
                $gajiperjam = 8000;
                break;

            case 'B':
                $gajiperjam = 10000;
                break;

            case 'C':
                $gajiperjam = 12000;
                break;

            default:
                $gajiperjam = 14000;
                break;
        }

        // soal 3
        $gaji = 48 * $gajiperjam;
        if ($jam_kerja > 48) {
            $lembur = ($jam_kerja - 48) * 15000;
        } else {
            $lembur = 0;
        }

        // soal 4
        $totalgaji = $gaji + $lembur;
    ?>
        <fieldset>
            <legend>OUTPUT DATA</legend>
        <?php
        // soal 5
        echo "Nama : {$nama}<br>";
        echo "Golongan : {$golongan}<br>";
        echo "Jam Kerja : {$jam_kerja}<br>";
        echo "Gaji Perjam : {$gajiperjam}<br>";
        echo "Gaji Perminggu : {$gaji}<br>";
        echo "Lembur : {$lembur}<br>";
        echo "Total Gaji : {$totalgaji}<br>";
    endif
        ?>
        </fieldset>
</body>

</html>