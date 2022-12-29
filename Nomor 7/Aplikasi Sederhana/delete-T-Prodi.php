<?php
include 'koneksi.php';
if(isset($_GET['id_prodi'])){
    $delete = mysqli_query($conn, "DELETE FROM tbl_prodi WHERE id_prodi = '".$_GET['id_prodi']."' ");
    header('location:T-Prodi.php');
}

?>