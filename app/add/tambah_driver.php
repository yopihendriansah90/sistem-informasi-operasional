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



$nama= $_POST['nama'];
$nik= $_POST['nik'];
$templahir= $_POST['templahir'];
$tgllahir= $_POST['tgllahir'];
$alamat= $_POST['alamat'];
$createdDate = getDateTimeJakarta();
$modifiedDate = getDateTimeJakarta();


// nama foto
$nama_file = $_FILES['foto']['name'];
// Mengganti setiap spasi dengan underscore
$nama_tanpa_spasi = str_replace(' ', '_', $nama);
// Mendapatkan format file
$formatFile = pathinfo($nama_file, PATHINFO_EXTENSION);
$nama_file_uploaded = 'ktp_'.$nama_tanpa_spasi.date("_YmdHis").'.'.$formatFile;
//uplado foto
$file_tmp = $_FILES['foto']['tmp_name'];
move_uploaded_file($file_tmp,'../foto/ktp/'.$nama_file_uploaded);

$query=mysqli_query($koneksi,"INSERT INTO as_karyawan(nik, nama, tempLahir, tglLahir, alamat, fotoKtp, createDate, modifiedDate) VALUES ('$nik','$nama','$templahir','$tgllahir','$alamat','$nama_file_uploaded','$createdDate','$modifiedDate')");
header('Location: ../index.php?page=data-driver');

?>