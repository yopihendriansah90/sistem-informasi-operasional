<?php
include('../../conf/config.php');
$masa_aktif= $_POST['masa_aktif'];
$nomor_uji= strtoupper($_POST['nomor_uji']);
$id_kendaraan= $_POST['id_kendaraan'];

$query=mysqli_query($koneksi,"INSERT INTO ujikir(masa_aktif, nomor_uji,id_kendaraan) VALUES ('$masa_aktif','$nomor_uji','$id_kendaraan')");
header('Location: ../index.php?page=data-kir');
?>