<?php
include 'koneksi.php';
$data_edit = mysqli_query($conn, "SELECT * FROM tbl_prodi WHERE id_prodi = '".$_GET['id_prodi']."'");
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
    <div class="container">
        <br><p class="fw-bold"> Edit Tabel Data Prodi </p>
        <form action="" method="POST">
        <div>
            <label class="form-label">ID</label>
            <input type="text" class="form-control" name="id_prodi" value="<?php echo $result['id_prodi'] ?>" required><br>
        </div>
        <div>
            <label class="form-label">Jenjang</label>
            <input type="text" class="form-control" name="jenjang" value="<?php echo $result['jenjang'] ?>" required><br>
        </div>
        <div>
            <label class="form-label">Prodi</label>
            <input type="text" class="form-control" name="nama_prodi" value="<?php echo $result['nama_prodi'] ?>" required><br>
        </div>

        <div>
            <input type="submit" name="edit" value="Simpan">
        </div>
        </form>
        <?php
        if(isset($_POST['edit'])){
            $update = mysqli_query($conn, "UPDATE tbl_prodi SET id_prodi = '".$_POST['id_prodi']."', jenjang = '".$_POST['jenjang']."', nama_prodi = '".$_POST['nama_prodi']."' WHERE id_prodi = '".$_GET['id_prodi']."'");
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