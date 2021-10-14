<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Aplikasi Penggajian Perminggu</title>
   <style>
      .form-group {
         margin-top: 0.5rem;
      }

      .form-input {
         box-sizing: border-box;
         width: 200px;
         padding: 3px 7px;
      }

      .btn {
         background: salmon;
         border: none;
         color: white;
         padding: 4px 6px;
      }

      .btn:hover {
         background: #fa8200;
         color: #000000;
      }

      .table {
         color: #444;
         border-collapse: collapse;
         width: 100%;
         border: 1px solid #f2f5f7;
      }

      .table tr th {
         background: salmon;
         color: #fff;
         font-weight: normal;
      }

      .table tr:hover {
         background-color: #f5f5f5;
      }

      .table tr:nth-child(even) {
         background-color: #f28000;
         color: white;
      }

      .table,
      th,
      td {
         text-align: center;
         padding: 8px 15px;
      }

      body {
         font-family: 'consolas';
      }
   </style>
</head>

<body>
   <h2>Aplikasi Penggajian</h2>
   <fieldset>
      <legend>INPUT DATA</legend>
      <form action="" method="POST">
         <div class="form-group">
            <label>Nama</label><br>
            <input type="text" name="nama" placeholder="Masukkan nama lengkap" class="form-input" required>
         </div>
         <div class="form-group">
            <label>Golongan</label><br>
            <select name="golongan" class="form-input">
               <option selected>Pilih Golongan</option>
               <option value="A">A</option>
               <option value="B">B</option>
               <option value="C">C</option>
               <option value="D">D</option>
            </select>
         </div>
         <div class="form-group">
            <label>Jam Kerja</label> <br>
            <input type="number" name="jam_kerja" placeholder="Masukkan jumlah jam kerja" class="form-input" required>
         </div>
         <div class="form-group">
            <button type="submit" name="submit" class="btn">Submit</button>
         </div>
      </form>
   </fieldset>
   <?php
   if (isset($_POST['submit'])) :
      // soal 1
      $nama = $_POST['nama'];
      $golongan = $_POST['golongan'];
      $jam_kerja = $_POST['jam_kerja'];

      switch ($golongan) {
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

      // soal 2
      $upah = 48 * $upah_perjam;

      // soal 3
      if ($jam_kerja > 48) {
         $lembur = ($jam_kerja - 48) * 15000;
      } else {
         $lembur = 0;
      }

      // soal 4
      $total = $upah + $lembur;
   ?>
      <fieldset>
         <legend>OUTPUT DATA</legend>
      <?php
      // soal 5
      echo "Nama Karyawan : {$nama}<br>";
      echo "Golongan : {$golongan}<br>";
      echo "Jam Kerja : {$jam_kerja}<br>";
      echo "Gaji Perjam : {$upah_perjam}<br>";
      echo "Upah : {$upah}<br>";
      echo "Lembur : {$lembur}<br>";
      echo "Total : {$total}<br>";
   endif
      ?>
      </fieldset>
      <fieldset>
         <legend>DATA TABLE</legend>
         <table class="table">
            <thead>
               <tr>
                  <th>Nama</th>
                  <th>Golongan</th>
                  <th>Jam Kerja</th>
                  <th>Upah Perjam</th>
                  <th>Upah</th>
                  <th>Lembur</th>
                  <th>Total Upah</th>
               </tr>
            </thead>
            <tbody>
               <tr>
                  <td><?= $nama; ?></td>
                  <td><?= $golongan; ?></td>
                  <td><?= $jam_kerja; ?></td>
                  <td><?= $upah_perjam; ?></td>
                  <td><?= $upah; ?></td>
                  <td><?= $lembur; ?></td>
                  <td><?= $total; ?></td>
               </tr>
               <tr>
                  <td><?= $nama; ?></td>
                  <td><?= $golongan; ?></td>
                  <td><?= $jam_kerja; ?></td>
                  <td><?= $upah_perjam; ?></td>
                  <td><?= $upah; ?></td>
                  <td><?= $lembur; ?></td>
                  <td><?= $total; ?></td>
               </tr>
               <tr>
                  <td><?= $nama; ?></td>
                  <td><?= $golongan; ?></td>
                  <td><?= $jam_kerja; ?></td>
                  <td><?= $upah_perjam; ?></td>
                  <td><?= $upah; ?></td>
                  <td><?= $lembur; ?></td>
                  <td><?= $total; ?></td>
               </tr>
            </tbody>
         </table>
      </fieldset>
</body>

</html>