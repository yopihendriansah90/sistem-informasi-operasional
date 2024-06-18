<?php
include('../../conf/config.php');
$id=$_POST['id'];
$pajak1thn= $_POST['pajak1thn'];
$pajak5thn= $_POST['pajak5thn'];;

$query=mysqli_query($koneksi,"UPDATE pajakkendaraan SET pajak1thn='$pajak1thn',pajak5thn='$pajak5thn' WHERE id='$id'");
    header('Location: ../index.php?page=data-stnk');

?>