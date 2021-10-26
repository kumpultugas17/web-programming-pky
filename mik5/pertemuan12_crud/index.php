<!DOCTYPE html>
<html>

<head>
  <title>CRUD Pertanian</title>
<body>

  <?php
  //memasukkan file untuk koneksi ke database
  include 'koneksi.php';
  // --- Fungsi tambah data (Create)
  function tambah($koneksi)
  {

    if (isset($_POST['btn_simpan'])) {
      $id = time();
      $nm_tanaman = $_POST['nm_tanaman'];
      $hasil = $_POST['hasil'];
      $lama = $_POST['lama'];
      $tgl_panen = $_POST['tgl_panen'];

      if (
        !empty($nm_tanaman) && !empty($hasil)
        && !empty($lama) && !empty($tgl_panen)
      ) {
        $sql = "INSERT INTO tabel_panen set
				id= '$id',
				nama_tanaman='$nm_tanaman',
				hasil_panen ='$hasil', 
				lama_tanam= '$lama',
				tanggal_panen = '$tgl_panen'";
        $simpan = mysqli_query($koneksi, $sql);
        if ($simpan && isset($_GET['aksi'])) {
          if ($_GET['aksi'] == 'create') {
            header('location: index.php');
          }
        }
      } else {
        $pesan = "Tidak dapat menyimpan, data belum lengkap!";
      }
    }

  ?>
    <!-- membuat form -->
    <form action="" method="POST">
      <fieldset>
        <legend>
          <h2>Tambah data</h2>
        </legend>
        <label>Nama tanaman
          <input type="text" name="nm_tanaman" /></label> <br>
        <label>Hasil panen
          <input type="number" name="hasil" /> kg</label><br>
        <label>Lama tanam
          <input type="number" name="lama" /> bulan</label> <br>
        <label>Tanggal panen
          <input type="date" name="tgl_panen" /></label> <br>
        <br>
        <label>
          <input type="submit" name="btn_simpan" value="Simpan" />
          <input type="reset" name="reset" value="Besihkan" />
        </label>
        <br>
        <p><?php echo isset($pesan) ? $pesan : "" ?></p>
      </fieldset>
    </form>
  <?php
  }
  // ini adalah tutup kurung fungsi tambah data
  ?>

  <?php
  // --- pilihan Aksi
  if (isset($_GET['aksi'])) {
    switch ($_GET['aksi']) {
      case "create":
        tambah($koneksi);
        break;
      case "read":
        // tampil_data($koneksi);
        break;

      default:
        echo "<h3>Aksi <i>" . $_GET['aksi']
          . "</i> tidak ada!</h3>";
        tambah($koneksi);
        // tampil_data($koneksi);
    }
  } else {
    tambah($koneksi);
    //tampil_data($koneksi);
  }
  ?>

</body>

</html>