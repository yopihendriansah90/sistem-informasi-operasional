<?php
include('../../conf/config.php');

$nomor_kendaraan= $_POST['nomor_kendaraan'];
$model= $_POST['model'];
$merek= $_POST['merek'];
$tahun= $_POST['tahun'];
$warna= $_POST['warna'];
$nomor_mesin= $_POST['nomor_mesin'];
$nomor_rangka= $_POST['nomor_rangka'];

$query=mysqli_query($koneksi,"INSERT INTO kendaraan(nomor_kendaraan, model,merek,tahun,warna,nomor_mesin,nomor_rangka) VALUES ('$nomor_kendaraan','$model','$merek','$tahun','$warna','$nomor_mesin','$nomor_rangka')");
// if(!$query){
//     echo " Error: ".mysqli_error($koneksi);
//     die();
// }
header('Location: ../index.php?page=data-kendaraan');


?>
