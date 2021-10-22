<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>crud-mik3</title>
</head>

<body>
   <?php
   include 'connection.php';
   // --Fungsi tambah data (create)
   function tambah($koneksi)
   {
      if (isset($_POST['btn_simpan'])) {
         $id = time();
         $nama_tanaman = $_POST['nama_tanaman'];
         $hasil_panen = $_POST['hasil_panen'];
         $lama_tanam = $_POST['lama_tanam'];
         $tanggal_panen = $_POST['tanggal_panen'];

         if (!empty($nama_tanaman) && !empty($hasil_panen) && !empty($lama_tanam) && !empty($tanggal_panen)) {
            $sql = "INSERT INTO tabel_panen SET
            id = '$id',
            nama_tanaman = '$nama_tanaman',
            hasil_panen = '$hasil_panen',
            lama_tanam = '$lama_tanam',
            tanggal_panen = '$tanggal_panen'";
            mysqli_query($koneksi, $sql);
         } else {
            $pesan = "Tidak dapat menyimpan, data belum lengkap!";
         }
      }
   ?>

      <!-- form tambah data -->
      <form action="" method="post">
         <fieldset>
            <legend>
               <h2>Tambah Data</h2>
            </legend>
            <label>Nama Tanaman</label>
            <input type="text" name="nama_tanaman" style="margin-top: 0.5rem;" /> <br>
            <label>Hasil Panen</label>
            <input type="number" name="hasil_panen" style="margin-top: 0.5rem;" /> kg <br>
            <label>Lama Tanam</label>
            <input type="number" name="lama_tanam" style="margin-top: 0.5rem;" /> bulan <br>
            <label>Tanggal Panen</label>
            <input type="date" name="tanggal_panen" style="margin-top: 0.5rem;" /> <br>
            <input type="submit" name="btn_simpan" value="Simpan" />
            <input type="reset" value="Bersihkan" style="margin-top: 0.5rem;" /> <br>
            <p><?php echo isset($pesan) ? $pesan : ""; ?></p>
         </fieldset>
      </form>

   <?php
   }
   // Tutup fungsi tambah

   // Fungsi baca data (read)
   function tampil_data($koneksi)
   {
      $sql = "SELECT * FROM tabel_panen";
      $query = mysqli_query($koneksi, $sql);

      echo "<fieldset>";
      echo "<legend><h2>Data Panen</h2></legend>";
      echo "<table border='1' cellpadding='10'>";
      echo "<tr>
         <th>ID</th>
         <th>Nama Tanaman</th>
         <th>Hasil Panen</th>
         <th>Lama Tanam</th>
         <th>Tanggal Panen</th>
         <th>Tindakan</th>
      </tr>";
      while($data = mysqli_fetch_array($query)) {
      ?>
         <tr>
            <td><?= $data['id']; ?></td>
            <td><?= $data['nama_tanaman']; ?></td>
            <td><?= $data['hasil_panen']; ?></td>
            <td><?= $data['lama_tanam']; ?></td>
            <td><?= $data['tanggal_panen']; ?></td>
            <td><a href="">Edit</a> | <a href="">Hapus</a></td>
         </tr>
      <?php
      }   
      echo "</table>";
      echo "</fieldset>";
   }

   if (isset($_GET['aksi'])) {
      echo 'Proses dijalankan';
   } else {
      tambah($koneksi);
      tampil_data($koneksi);
   }
   ?>
</body>

</html>