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

$nomor_kendaraan= $_POST['nomor_kendaraan'];
$model= $_POST['model'];
$merek= $_POST['merek'];
$tahun= $_POST['tahun'];
$warna= $_POST['warna'];
$nomor_mesin= $_POST['nomor_mesin'];
$nomor_rangka= $_POST['nomor_rangka'];

$createdDate = getDateTimeJakarta();
$modifiedDate = getDateTimeJakarta();
$query=mysqli_query($koneksi,"INSERT INTO Kendaraan(nomor_kendaraan, model,merek,tahun,warna,nomor_mesin,nomor_rangka) VALUES ('$nomor_kendaraan','$model','$merek','$tahun','$warna','$nomor_mesin','$nomor_rangka')");
header('Location: ../index.php?page=data-kendaraan');


?>