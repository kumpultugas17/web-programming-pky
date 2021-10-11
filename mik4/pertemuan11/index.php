<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <h3>Aplikasi Penggajian Perminggu</h3>
    <fieldset>
        <legend>INPUT DATA</legend>
        <form action="" method="post">
            <div style="margin-top: 0.5rem">
                <label>Nama</label> <br>
                <input type="text" name="nama"> <br>
            </div>
            <div style="margin-top: 0.5rem">
                <label>Golongan</label> <br>
                <input type="text" name="golongan"> <br>
            </div>
            <div style="margin-top: 0.5rem">
                <label>Jam Kerja</label> <br>
                <input type="number" name="jamker"> <br>
            </div>
            <div style="margin-top: 0.5rem">
                <button type="submit" name="kirim">Submit</button>
            </div>
        </form>
    </fieldset>
    <?php
    if (isset($_POST['kirim'])) {
        // 1
        $nama = $_POST['nama'];
        $gol = $_POST['golongan'];
        $jk = $_POST['jamker'];

        // 2
        switch ($gol) {
            case 'A':
                $upah_perjam = 8000;
                break;

            case 'B':
                $upah_perjam = 10000;
                break;

            case 'C':
                $upah_perjam = 12000;
                break;

            default:
                $upah_perjam = 14000;
                break;
        }

        // 3
        $upah = 48 * $upah_perjam;

        // 4
        if ($jk > 48) {
            $lembur = ($jk - 48) * 15000;
        } else {
            $lembur = 0;
        }

        $total = $upah + $lembur;
    ?>
        <fieldset>
            <legend>OUTPUT DATA</legend>
            <?php
            // 5
            echo "Nama : {$nama}<br>";
            echo "Golongan : {$gol}<br>";
            echo "Jam Kerja : {$jk}<br>";
            echo "Upah Perjam : {$upah_perjam}<br>";
            echo "Upah : {$upah}<br>";
            echo "Lembur : {$lembur}<br>";
            echo "Total Gaji : {$total}<br>";
            ?>
        </fieldset>
    <?php
    }
    ?>
</body>

</html>