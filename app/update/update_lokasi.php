<?php
include('../../conf/config.php');
$id=$_POST['id'];
$nama= $_POST['nama'];
$alamat= $_POST['alamat'];
$query=mysqli_query($koneksi,"UPDATE lokasi SET nama='$nama',alamat='$alamat' WHERE id='$id'");


header('Location: ../index.php?page=data-lokasi');
?>