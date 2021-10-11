<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <style>
   .left {
      float: left;
      width: 50%;
      background-color: whitesmoke;
   }
   .right {
      float: right;
      width: 50%;
      background-color: aqua;
   }
</style>
</head>
<body>
   <div class="left">
      <form action="" method="post">
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
               <td><input type="number" name="tugas"></td>
            </tr>
            <tr>
               <td>Nilai UTS</td>
               <td>:</td>
               <td><input type="number" name="uts"></td>
            </tr>
            <tr>
               <td>Nilai UAS</td>
               <td>:</td>
               <td><input type="number" name="uas"></td>
            </tr>
            <tr>
               <td></td>
               <td></td>
               <td><button type="submit" name="kirim">Submit</button></td>
            </tr>
         </table>
      </form>
   </div>
   <div class="right">
      <?php
      if (isset($_POST['kirim'])) {
         $nama = $_POST['nama'];
         $nim = $_POST['nim'];
         $jurusan = $_POST['jurusan'];
         $tugas = $_POST['tugas'];
         $uts = $_POST['uts'];
         $uas = $_POST['uas'];

         $n_angka = ($tugas*0.2)+($uts*0.3)+($uas*0.5);

         if ($n_angka>85) {
            $n_huruf = 'A';
         } elseif ($n_angka>75) {
            $n_huruf = 'B';
         } elseif ($n_angka>65) {
            $n_huruf = 'C';
         } elseif ($n_angka>45) {
            $n_huruf = 'D';
         } else {
            $n_huruf = 'E';
         }

         $ket = ($n_angka>65) ? '<span style=color:green; font-weight:bold;>LULUS</span>' : '<span style=color:red; font-weight:bold;>TIDAK LULUS</span>';
         ?>
         <table>
            <tr>
               <td>Nama Lengkap</td>
               <td>:</td>
               <td><?= $nama; ?></td>
            </tr>
            <tr>
               <td>NIM</td>
               <td>:</td>
               <td><?= $nim; ?></td>
            </tr>
            <tr>
               <td>Jurusan</td>
               <td>:</td>
               <td><?= $jurusan; ?></td>
            </tr>
            <tr>
               <td>Nilai Tugas</td>
               <td>:</td>
               <td><?= $tugas; ?></td>
            </tr>
            <tr>
               <td>Nilai UTS</td>
               <td>:</td>
               <td><?= $uts; ?></td>
            </tr>
            <tr>
               <td>Nilai UAS</td>
               <td>:</td>
               <td><?= $uas; ?></td>
            </tr>
            <tr>
               <td>Nilai Angka</td>
               <td>:</td>
               <td><?= $n_angka; ?></td>
            </tr>
            <tr>
               <td>Nilai Huruf</td>
               <td>:</td>
               <td><?= $n_huruf; ?></td>
            </tr>
            <tr>
               <td>Keterangan</td>
               <td>:</td>
               <td><?= $ket; ?></td>
            </tr>
         </table>
      <?php } ?>
   </div>
</body>
</html>