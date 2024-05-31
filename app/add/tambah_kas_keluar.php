<?php
include('../../conf/config.php');
include('../fungsi.php');


$tanggal= $_POST['tanggal'];
$jumlah= $_POST['jumlah'];
$keterangan= $_POST['keterangan'];
$lokasi= 2;
$jumlah2= bersihkanNominal($jumlah);

// nama foto
$nama_file = $_FILES['foto']['name'];
// Mengganti setiap spasi dengan underscore
$nama_tanpa_spasi = str_replace(' ', '_', $lokasi);
// Mendapatkan format file
$formatFile = pathinfo($nama_file, PATHINFO_EXTENSION);
$nama_file_uploaded = 'nota_'.$nama_tanpa_spasi.date("_YmdHis").'.'.$formatFile;
//uplado foto
$file_tmp = $_FILES['foto']['tmp_name'];
move_uploaded_file($file_tmp,'../foto/nota/'.$nama_file_uploaded);


$query=mysqli_query($koneksi,"INSERT INTO kas_keluar(tanggal, jumlah,keterangan,id_lokasi,foto) VALUES ('$tanggal','$jumlah2','$keterangan','$lokasi','$nama_file_uploaded')");
header('Location: ../index.php?page=data-kas-keluar');
// if($query){
//     echo "ok";

// }else{
//     echo "tidak ok".mysqli_error($koneksi);
// }

?>