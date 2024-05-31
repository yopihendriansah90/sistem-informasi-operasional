<?php
include('../../conf/config.php');
$id     =$_GET['id'];
$query=mysqli_query($koneksi,"DELETE FROM kas_keluar WHERE id='$id'");
header('Location: ../index.php?page=data-kas-keluar');

?>