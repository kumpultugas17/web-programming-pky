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
                <div class="card mt-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <h4>DATA MAHASISWA</h4>
                            </div>
                            <div class="col-sm-6">
                                <a href="tambah_mahasiswa.php" class="btn btn-sm btn-primary float-end">Tambah Data</a>
                            </div>
                        </div>
                        <table class="table table-hover table-bordered table-sm">
                            <thead>
                                <tr class="text-center">
                                    <th>No</th>
                                    <th>NIM</th>
                                    <th>Nama Lengkap</th>
                                    <th>Jurusan</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Telepon</th>
                                    <th>E-Mail</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php require 'koneksi.php'; ?>
                                <?php $sql = $koneksi->query("SELECT * FROM tabel_mahasiswa INNER JOIN tabel_jurusan ON tabel_mahasiswa.jurusan_id = tabel_jurusan.id"); ?>
                                <?php $no = 1; ?>
                                <?php foreach ($sql as $row) { ?>
                                    <tr>
                                        <td class="text-center" style="width: 50px;"><?= $no++; ?></td>
                                        <td class="text-center"><?= $row['nim'] ?></td>
                                        <td><?= $row['nama'] ?></td>
                                        <td><?= $row['jurusan'] ?></td>
                                        <td><?= $row['jenis_kelamin'] == 'l' ? 'Laki-laki' : 'Perempuan' ?></td>
                                        <td><?= $row['telepon'] ?></td>
                                        <td><?= $row['email'] ?></td>
                                        <td class="text-center" style="width: 140px;">
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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>