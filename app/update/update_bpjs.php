<?php
include('../../conf/config.php');
$id=$_POST['id'];
$nik= $_POST['nik'];
$nomorBpjs= $_POST['nomorBpjs'];
$query=mysqli_query($koneksi,"UPDATE as_bpjs SET nomorBpjs='$nomorBpjs',nik='$nik' WHERE id='$id'");


header('Location: ../index.php?page=data-bpjs');
?>