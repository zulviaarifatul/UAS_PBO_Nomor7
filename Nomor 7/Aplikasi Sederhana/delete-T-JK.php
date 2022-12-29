<?php
include 'koneksi.php';
if(isset($_GET['id_jk'])){
    $delete = mysqli_query($conn, "DELETE FROM tbl_jk WHERE id_jk = '".$_GET['id_jk']."' ");
    header('location:T-JK.php');
}

?>