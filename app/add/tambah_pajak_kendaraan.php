<?php
include('../../conf/config.php');

$id_kendaraan= $_POST['id_kendaraan'];
$pajak1thn= $_POST['pajak1thn'];
$pajak5thn= $_POST['pajak5thn'];
$query=mysqli_query($koneksi,"INSERT INTO pajakkendaraan(pajak1thn, pajak5thn,id_kendaraan) VALUES ('$pajak1thn','$pajak5thn','$id_kendaraan')");
if(!$query){
    echo "error : ".mysqli_error($koneksi);
    die();
    }else{

        header('Location: ../index.php?page=data-stnk');
    }

?>