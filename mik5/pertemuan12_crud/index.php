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

  // --- FUngsi tampil data (Read)
  function tampil_data($koneksi)
  {
    $sql = "SELECT * FROM tabel_panen";
    $query = mysqli_query($koneksi, $sql);

    echo "<fieldset>";
    echo "<legend><h2>Data Penen</h2></legend>";
    echo "<table border='1' cellpadding='10'>";
    echo "<tr>
      <th>ID</th>
      <th>Nama Tanaman</th>
      <th>Hasil Panen</th>
      <th>Lama Tanam</th>
      <th>Tanggal Panen</th>
      <th>Tindakan</th>
    </tr>";
    while ($data = mysqli_fetch_array($query)) {
    ?>
      <tr>
        <td><?= $data['id']; ?></td>
        <td><?= $data['nama_tanaman']; ?></td>
        <td><?= $data['hasil_panen']; ?></td>
        <td><?= $data['lama_tanam']; ?></td>
        <td><?= $data['tanggal_panen']; ?></td>
        <td>
          <a href="index.php?aksi=update&id=<?= $data['id']; ?>&nama=<?= $data['nama_tanaman']; ?>&hasil=<?= $data['hasil_panen']; ?>&lama=<?= $data['lama_tanam']; ?>&tanggal=<?= $data['tanggal_panen']; ?>">Ubah</a> | <a href="">Hapus</a>
        </td>
      </tr>
    <?php
    }
    echo "</table>";
    echo "</fieldset>";
  }

  function ubah($koneksi)
  {
    // ubah data
    if (isset($_POST['btn_ubah'])) {
      $id = $_POST['id'];
      $nm_tanaman = $_POST['nm_tanaman'];
      $hasil = $_POST['hasil'];
      $lama = $_POST['lama'];
      $tgl_panen = $_POST['tgl_panen'];
      
      if (!empty($nm_tanaman) && !empty($hasil) && !empty($lama) && !empty($tgl_panen)) {
        $sql_update = "UPDATE tabel_panen SET nama_tanaman='$nm_tanaman', hasil_panen='$hasil', lama_tanam='$lama', tanggal_panen='$tgl_panen' WHERE id='$id'";
        $update = mysqli_query($koneksi, $sql_update);
        if ($update && isset($_GET['aksi'])) {
          if ($_GET['aksi'] == 'update') {
            header('Location:index.php');
          }
        }
      } else {
        $pesan = "Data tidak lengkap!";
      }
    }
    
    // tampil form ubah
    if (isset($_GET['id'])) {
    ?>
      <a href="index.php?"> &laquo; Home</a>
      <a href="index.php?aksi=create">(+) Tambah Data</a>
      <hr>
      <form action="" method="post">
        <fieldset>
          <legend>
            <h2>Ubah Data</h2>
          </legend>
          <input type="hidden" name="id" value="<?= $_GET['id']; ?>" /> <br>
          <label>Nama Tanaman</label>
          <input type="text" name="nm_tanaman" value="<?= $_GET['nama']; ?>"> <br>
          <label>Hasil Panen</label>
          <input type="number" name="hasil" value="<?= $_GET['hasil']; ?>"> <br>
          <label>Lama Tanam</label>
          <input type="number" name="lama" value="<?= $_GET['lama']; ?>"> <br>
          <label>Tanggal Panen</label>
          <input type="date" name="tgl_panen" value="<?= $_GET['tanggal']; ?>"> <br>
          <input type="submit" name="btn_ubah" value="Simpan Perubahan" /> atau <a href="index.php?aksi=delete&id=<?= $_GET['id'] ?>"> (x) Hapus data ini</a>!
          <br>
          <p><?php echo isset($pesan) ? $pesan : ''; ?></p>
        </fieldset>
      </form>
  <?php
    }
  }
  ?>

  <?php
  // --- pilihan Aksi
  if (isset($_GET['aksi'])) {
    switch ($_GET['aksi']) {
      case "create":
        tambah($koneksi);
        break;
      case "read":
        tampil_data($koneksi);
        break;
      case "update":
        ubah($koneksi);
        break;

      default:
        echo "<h3>Aksi <i>" . $_GET['aksi']
          . "</i> tidak ada!</h3>";
        tambah($koneksi);
        tampil_data($koneksi);
    }
  } else {
    tambah($koneksi);
    tampil_data($koneksi);
  }
  ?>

</body>

</html>