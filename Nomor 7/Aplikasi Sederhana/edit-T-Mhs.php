<?php
include 'koneksi.php';
$data_edit = mysqli_query($conn, "SELECT * FROM tbl_mhs INNER JOIN tbl_prodi ON tbl_mhs.prodi = tbl_prodi.id_prodi INNER JOIN tbl_jk ON tbl_mhs.jk = tbl_jk.id_jk WHERE nim = '".$_GET['nim']."'");
$result = mysqli_fetch_array($data_edit);
?>

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
                <a class="nav-link" href="T-Mhs.php">Data Mahasiswa</a>
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

    <br>
    <div class="container">
        <br><p class="fw-bold"> Edit Tabel Mahasiswa</p>
        <form action="" method="POST">
        <div>
            <label class="form-label">ID</label>
            <input type="text" class="form-control" name="id_mhs" value="<?php echo $result['id_mhs'] ?>" required><br>
        </div>
        <div>
            <label class="form-label">NIM</label>
            <input type="text" class="form-control" name="nim" value="<?php echo $result['nim'] ?>" required><br>
        </div>
        <div>
            <label class="form-label">Nama Mahasiswa</label>
            <input type="text" class="form-control" name="nama_mhs" value="<?php echo $result['nama_mhs'] ?>" required><br>
        </div>
        <div class="col-auto">
            <label for="autoSizingSelect">Jenis Kelamin</label>
            <select name="jk" class="form-select" id="autoSizingSelect">
            <option selected value="<?php echo $result['nama'] ?>"><?php echo $result['nama'] ?></option>
            <option value="1">Laki-Laki</option>
            <option value="2">Perempuan</option>
            </select><br>
        </div>
        <div>
            <label class="form-label">Alamat</label>
            <input type="text" class="form-control" name="alamat" value="<?php echo $result['alamat'] ?>" required><br>
        </div>
        <div>
            <label class="form-label">Prodi</label>
            <input type="text" class="form-control" name="prodi" value="<?php echo $result['nama_prodi'] ?>" required><br>
        </div>
        <div class="input-group mb-3">
            <label class="input-group-text" for="inputGroupFile01">Upload</label>
            <input type="file" class="form-control" id="inputGroupFile01" name="foto" required>
        </div>
        <div>
            <label class="form-label">Email</label>
            <input type="text" class="form-control" name="email" value="<?php echo $result['email'] ?>" required><br>
        </div>

        <div>
            <input type="submit" name="edit" value="Simpan">
        </div>
        </form>
        <?php
        if(isset($_POST['edit'])){
            $update = mysqli_query($conn, "UPDATE tbl_mhs SET id_mhs = '".$_POST['id_mhs']."', nama_mhs = '".$_POST['nama_mhs']."', alamat = '".$_POST['alamat']."', foto = '".$_POST['foto']."', email = '".$_POST['email']."' WHERE nim = '".$_GET['nim']."'");
            if($update){
                echo 'Berhasil edit';
            }else{
                echo 'Gagal edit';
            }
        }
        ?>
    </div>
    
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  </body>
</html>