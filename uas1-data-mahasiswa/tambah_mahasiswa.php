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
                     <h5 class="card-title">INPUT DATA MAHASISWA</h5>
                     <hr>
                     <form action="" method="post">
                        <div class="form-group mb-2">
                           <label for="">NIM</label>
                           <input type="text" name="nim" placeholder="Masukkan NIM" class="form-control">
                        </div>
                        <div class="form-group mb-2">
                           <label for="">Nama Lengkap</label>
                           <input type="text" name="nama_lengkap" placeholder="Masukkan Nama Lengkap" class="form-control">
                        </div>
                        <div class="form-group mb-2">
                           <label for="">Jurusan</label>
                           <select name="jurusan" class="form-control">
                              <option selected disabled>Pilih Jurusan</option>
                              <?php
                              include 'koneksi.php';
                              $sql = $koneksi->query("SELECT jurusan FROM tabel_jurusan");
                              foreach ($sql as $jurusan) {
                              ?>
                                 <option value="<?= $jurusan['id'] ?>"><?= $jurusan['jurusan'] ?></option>
                              <?php } ?>
                           </select>
                        </div>
                        <div class="form-group mb-2">
                           <label>Jenis Kelamin</label><br>
                           <input type="radio" name="jk" value="l" for="laki"> <label for="laki">Laki-laki</label><br>
                           <input type="radio" name="jk" value="p" for="bini"> <label for="bini">Perempuan</label>
                        </div>
                        <div class="form-group mb-2">
                           <label for="">Alamat</label>
                           <textarea rows="5" class="form-control" placeholder="Masukkan Alamat Lengkap"></textarea>
                        </div>
                        <div class="form-group mb-2">
                           <label for="">Telepon</label>
                           <input type="number" name="telepon" class="form-control" placeholder="Masukkan Nomor Telepon/WA">
                        </div>
                        <div class="form-group mb-3">
                           <label for="">Telepon</label>
                           <input type="email" name="email" class="form-control" placeholder="Masukkan E-Mail">
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