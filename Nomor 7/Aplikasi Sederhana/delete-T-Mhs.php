<?php
include 'koneksi.php';
if(isset($_GET['nim'])){
    $delete = mysqli_query($conn, "DELETE FROM tbl_mhs WHERE nim = '".$_GET['nim']."' ");
    header('location:T-Mhs.php');
}

?>