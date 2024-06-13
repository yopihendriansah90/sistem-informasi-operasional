<?php
include('../../conf/config.php');
$id=$_POST['id'];
$masa_aktif= $_POST['masa_aktif'];
$nomor_uji= $_POST['nomor_uji'];

$query=mysqli_query($koneksi,"UPDATE ujikir SET masa_aktif='$masa_aktif',nomor_uji='$nomor_uji' WHERE id='$id'");
    header('Location: ../index.php?page=data-kir');

?>