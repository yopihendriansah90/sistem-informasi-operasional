<?php
include('../../conf/config.php');
$nama= $_GET['nama'];
$nim= $_GET['nim'];
$semester= $_GET['semester'];
$query=mysqli_query($koneksi,"INSERT INTO tb_mahasiswa (nama,nim,semester)VALUES('$nama','$nim','$semester')");
header('Location: ../index.php?page=data-mahasiswa');

?>