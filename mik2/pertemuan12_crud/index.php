<!DOCTYPE html>
<html lang="en">

<head>
    <title>CRUD</title>
</head>

<body>

    <?php
    // koneksi database
    include 'connection.php';
    // Fungsi tambah data (create)
    function tambah($koneksi)
    {
        if (isset($_POST['btn_simpan'])) {
            $id = time();
            $nm_tanaman = $_POST['nm_tanaman'];
            $hasil_panen = $_POST['hasil_panen'];
            $lama_tanam = $_POST['lama_tanam'];
            $tgl_panen = $_POST['tgl_panen'];

            echo $id.' '.$nm_tanaman.' '.$hasil_panen.' '.$lama_tanam.' '.$tgl_panen;
            if (!empty($nm_tanaman) && !empty($hasil_panen) && !empty($lama_tanam) && !empty($tgl_panen)) {
                echo "simpan";
                $sql = "INSERT INTO tabel_panen SET
                id = '$id',
                nama_tanaman = '$nm_tanaman',
                hasil_panen = '$hasil_panen',
                laman_tanam = '$lama_tanam',  
                tanggal_panen = '$tgl_panen'";
                $simpan = mysqli_query($koneksi, $sql);
                if ($simpan && isset($_GET['aksi'])) {
                    if ($_GET['aksi'] == 'create') {
                        header('location:index.php');
                    }
                }
            } else {
                $pesan = "Tidak dapat menyimpan, data belum lengkap!";
            }
        }

    ?>
        <!-- Bagian Form -->
        <form action="" method="post">
            <fieldset>
                <legend>
                    <h3>Tambah Data</h3>
                </legend>
                <div class="form-group">
                    <label>Nama Tanaman</label>
                    <input type="text" name="nm_tanaman">
                </div>
                <div class="form-group">
                    <label>Hasil Panen</label>
                    <input type="number" name="hasil_panen"> Kg
                </div>
                <div class="form-group">
                    <label>Lama Tanam</label>
                    <input type="number" name="lama_tanam"> Bulan
                </div>
                <div class="form-group">
                    <label>Tanggal Panen</label>
                    <input type="date" name="tgl_panen">
                </div>
                <div class="form-group">
                    <input type="submit" name="btn_simpan" value="Simpan" />
                    <input type="reset" name="reset" value="Bersihkan" />
                </div>
                <p><?php echo isset($pesan) ? $pesan : "" ?></p>
            </fieldset>
        </form>
    <?php
    }
    ?>

    <?php
    function tampil_data($koneksi)
    {
        $sql = "SELECT * FROM tabel_panen";
        $query = mysqli_query($koneksi, $sql);

        echo "<fieldset>";
        echo "<legend><h2>Data Panen</h2></legend>";
        echo "<table border='1' cellpadding='10'>";
        echo "
            <tr>
                <td>ID</td>
                <td>Nama Tanaman</td>
                <td>Hasil Panen</td>
                <td>Lama Tanam</td>
                <td>Tanggal Panen</td>
                <td>Tindakan</td>
            </tr>
        ";
        while ($data = mysqli_fetch_array($query)) {
    ?>
            <tr>
                <td><?= $data['id'] ?></td>
                <td><?= $data['nama_tanaman'] ?></td>
                <td><?= $data['hasil_panen'] ?></td>
                <td><?= $data['lama_tanam'] ?></td>
                <td><?= $data['tanggal_panen'] ?></td>
                <td>Tombol</td>
            </tr>
    <?php
        }
        echo "<table>";
        echo "</fieldset>";
    }
    ?>

    <?php
    if (isset($_GET['aksi'])) {
    } else {
        tambah($koneksi);
        tampil_data($koneksi);
    }
    ?>
</body>

</html>