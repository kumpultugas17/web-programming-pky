<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Page Jurusan</title>
</head>

<body>
    <?php include '_navbar.php' ?>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card mt-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <h4>DATA JURUSAN</h4>
                            </div>
                            <div class="col-md-6">
                                <form action="" method="post">
                                    <div class="mb-3 row">
                                        <label class="col-sm-2 col-form-label">Jurusan</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" placeholder="Masukkan Jurusan">
                                        </div>
                                    </div>
                                    <div class="float-end">
                                        <button type="button" class="btn btn-sm btn-primary">Simpan</button>
                                        <button type="reset" class="btn btn-sm btn-secondary">Batal</button>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-6">
                                <table class="table table-hover table-bordered table-sm">
                                    <thead>
                                        <tr class="text-center">
                                            <th>No</th>
                                            <th>Jurusan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php include 'koneksi.php' ?>
                                        <?php $sql = $koneksi->query("SELECT * FROM tabel_jurusan"); ?>
                                        <?php $no = 1; ?>
                                        <?php foreach ($sql as $row) { ?>
                                            <tr>
                                                <td class="text-center"><?= $no++; ?></td>
                                                <td class="text-center"><?= $row['jurusan'] ?></td>
                                                <td class="text-center">
                                                    <a href="" class="btn btn-sm btn-warning">Ubah</a>
                                                    <a href="" class="btn btn-sm btn-danger">Hapus</a>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>