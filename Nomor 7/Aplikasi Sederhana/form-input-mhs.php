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

    <div class="container">
        <br><p class="fw-bold">Input Tabel Mahasiswa</p>
        <form action="" method="POST">
        <div>
            <label class="form-label">ID</label>
            <input type="text" class="form-control" name="id_mhs" required><br>
        </div>
        <div>
            <label class="form-label">NIM</label>
            <input type="text" class="form-control" name="nim" required><br>
        </div>
        <div>
            <label class="form-label">Nama Mahasiswa</label>
            <input type="text" class="form-control" name="nama_mhs" required><br>
        </div>
        <div class="col-auto">
            <label for="autoSizingSelect">Jenis Kelamin</label>
            <select name="jk" class="form-select" id="autoSizingSelect">
            <option selected>pilih...</option>
            <option value="1">Laki-Laki</option>
            <option value="2">Perempuan</option>
            </select><br>
        </div>
        <div>
            <label class="form-label">Alamat</label>
            <input type="text" class="form-control" name="alamat" required><br>
        </div>
        <div>
            <label class="form-label">ID Prodi</label>
            <input type="text" class="form-control" name="prodi" required><br>
        </div>
        <div class="input-group mb-3">
            <label class="input-group-text" for="inputGroupFile01">Upload</label>
            <input type="file" class="form-control" id="inputGroupFile01" name="foto" required>
        </div>
        <div>
            <label class="form-label">Email</label>
            <input type="text" class="form-control" name="email" required><br>
        </div>

        <div>
            <input type="submit" name="simpan" value="Simpan">
        </div>
        </form>
        <?php
        include 'koneksi.php';
        if(isset($_POST['simpan'])){
        $insert = mysqli_query($conn, "INSERT INTO tbl_mhs VALUES (
                                '".$_POST['id_mhs']."',
                                '".$_POST['nim']."',
                                '".$_POST['nama_mhs']."',
                                '".$_POST['jk']."',
                                '".$_POST['alamat']."',
                                '".$_POST['prodi']."',
                                '".$_POST['foto']."',
                                '".$_POST['email']."')");
            if($insert){
                echo 'Berhasil Disimpan';
            }else{
                echo 'Gagal Disimpan';
            }
        }
        ?>
    </div>

  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  </body>
</html>