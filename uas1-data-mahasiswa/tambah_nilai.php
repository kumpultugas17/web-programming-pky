<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   <title>Page Mahasiswa</title>
</head>

<body>
   <?php include '_navbar.php' ?>
   <div class="container">
      <div class="row">
         <div class="col-lg-12">
            <div class="d-flex justify-content-center">
               <div class="card border-primary mt-3 w-75">
                  <div class="card-body text-primary">
                     <h5 class="card-title">INPUT DATA NILAI</h5>
                     <hr>
                     <form action="" method="post">
                        <div class="form-group mb-2">
                           <label for="">NIM</label>
                           <select name="nim" class="form-control">
                              <option selected disabled>Pilih NIM</option>
                              <?php
                              include 'koneksi.php';
                              $sql = $koneksi->query("SELECT nim FROM tabel_mahasiswa");
                              foreach ($sql as $nim) {
                              ?>
                                 <option value="<?= $nim['nim'] ?>"><?= $nim['nim'] ?></option>
                              <?php } ?>
                           </select>
                        </div>
                        <div class="form-group mb-2">
                           <label for="">Mata Kuliah</label>
                           <input type="text" name="matkul" placeholder="Masukkan Mata Kuliah" class="form-control">
                        </div>
                        <div class="form-group mb-2">
                           <label for="">Nilai Tugas</label>
                           <input type="number" name="nt" class="form-control" placeholder="Masukkan Nilai Tugas">
                        </div>
                        <div class="form-group mb-3">
                           <label for="">Nilai UTS</label>
                           <input type="number" name="nuts" class="form-control" placeholder="Masukkan Nilai UTS">
                        </div>
                        <div class="form-group mb-3">
                           <label for="">Nilai UAS</label>
                           <input type="number" name="nuas" class="form-control" placeholder="Masukkan Nilai UAS">
                        </div>
                        <div class="form-group mb-2">
                           <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
                           <button type="reset" class="btn btn-sm btn-secondary">Batal</button>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>