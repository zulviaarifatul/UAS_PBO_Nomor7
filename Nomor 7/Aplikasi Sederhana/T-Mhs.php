<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <title>Zulvia PBO</title>
  </head>
  <body>
        <nav class="navbar navbar-expand-lg bg-info">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Tugas PBO</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link" href="T-Mhs.php">Tabel Mahasiswa</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="T-JK.php">Tabel Jenis Kelamin</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="T-Prodi.php">Tabel Prodi</a>
                </li>
            </ul>
            </div>
        </div>
        </nav>

    <div class="content">
    <div class="container">
        <br><p class="fw-bold" >Tabel Mahasiswa</p>

        <table class="table table-bordered table-hover" width="50%">
            <thead>
                <tr class="table-info" style="text-align:center">
                    <th scope="col" width="40px">ID</th>
                    <th scope="col">Nim</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Prodi</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Email</th>
                    <th scope="col">Opsi</th>
                </tr>
            </thead>

            <?php
            include 'koneksi.php';
            $query = "SELECT * FROM tbl_mhs INNER JOIN tbl_prodi ON tbl_mhs.prodi = tbl_prodi.id_prodi INNER JOIN tbl_jk ON tbl_mhs.jk = tbl_jk.id_jk;";
            $select = mysqli_query($conn, $query);
            while($hasil = mysqli_fetch_array($select)){
            ?>
            <tbody>
                <td><?php echo $hasil['id_mhs'] ?></td>
                <td><?php echo $hasil['nim'] ?></td>
                <td><?php echo $hasil['nama_mhs'] ?></td>
                <td><?php echo $hasil['nama'] ?></td>
                <td><?php echo $hasil['alamat'] ?></td>
                <td><?php echo $hasil['nama_prodi'] ?></td>
                <td><?php echo $hasil['foto'] ?></td>
                <td><?php echo $hasil['email'] ?></td>
                <td>
                    <a href="edit-T-Mhs.php?nim=<?php echo $hasil['nim'] ?>">Edit</a> ||
                    <a href="delete-T-Mhs.php?nim=<?php echo $hasil['nim'] ?>">Hapus</a>
                </td>
                <?php } ?>
            </tbody>
        </table>

        <a class="btn btn-info" href="form-input-mhs.php" role="button">Tambah Data</a>     
    </div>  
    </div>  
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
  </body>
</html>