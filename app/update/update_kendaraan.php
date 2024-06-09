<?php
include('../../conf/config.php');
$id=$_POST['id'];
$nomor_kendaraan= $_POST['nomor_kendaraan'];
$model= $_POST['model'];
$merek= $_POST['merek'];
$tahun= $_POST['tahun'];
$warna= $_POST['warna'];
$nomor_mesin= $_POST['nomor_mesin'];
$nomor_rangka= $_POST['nomor_rangka'];

$query=mysqli_query($koneksi,"UPDATE kendaraan SET nomor_kendaraan='$nomor_kendaraan',model='$model',merek='$merek',tahun='$tahun',warna='$warna',nomor_mesin='$nomor_mesin',nomor_rangka='$nomor_rangka' WHERE id='$id'");
// if(!$query){
    // echo " error : ".mysqli_error($koneksi);
    // }        
        header('Location: ../index.php?page=data-kendaraan');
        // }

?>