<?php
include('../../conf/config.php');

$nama= $_POST['nama'];
$alamat= $_POST['alamat'];
$query=mysqli_query($koneksi,"INSERT INTO lokasi(nama, alamat) VALUES ('$nama','$alamat')");
header('Location: ../index.php?page=data-lokasi');

?>