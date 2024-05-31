<?php
include('../../conf/config.php');

// Fungsi untuk mendapatkan tanggal dan waktu saat ini di Jakarta
function getDateTimeJakarta() {
    // Set zona waktu ke Asia/Jakarta
    date_default_timezone_set('Asia/Jakarta');
    
    // Mendapatkan tanggal dan waktu saat ini di Jakarta
    $datetime_jakarta = date('Y-m-d H:i:s');
    
    return $datetime_jakarta;
}



$nik= $_POST['nik'];
$nomorBpjs= $_POST['nomorBpjs'];

$createdDate = getDateTimeJakarta();
$modifiedDate = getDateTimeJakarta();
$query=mysqli_query($koneksi,"INSERT INTO as_bpjs(nik, nomorBpjs) VALUES ('$nik','$nomorBpjs')");
header('Location: ../index.php?page=data-bpjs');

?>