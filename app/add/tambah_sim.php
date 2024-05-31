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
$nomorSim= $_POST['nomorSim'];
$masaAktifSim= $_POST['masaAktif'];

$query  =mysqli_query($koneksi,"SELECT * FROM as_karyawan WHERE nik='$nik'");
$view   = mysqli_fetch_array($query);
$nama=$view['nama'];



$createdDate = getDateTimeJakarta();
$modifiedDate = getDateTimeJakarta();


// nama foto
$nama_file = $_FILES['foto']['name'];
// Mengganti setiap spasi dengan underscore
$nama_tanpa_spasi = str_replace(' ', '_', $nama);
// Mendapatkan format file
$formatFile = pathinfo($nama_file, PATHINFO_EXTENSION);
$nama_file_uploaded = 'sim_'.$nama_tanpa_spasi.date("_YmdHis").'.'.$formatFile;
//uplado foto
$file_tmp = $_FILES['foto']['tmp_name'];
move_uploaded_file($file_tmp,'../foto/sim/'.$nama_file_uploaded);

$query=mysqli_query($koneksi,"INSERT INTO as_sim(nik, nomorSim, masaAktif, fotoSim) VALUES ('$nik','$nomorSim','$masaAktifSim','$nama_file_uploaded')");
header('Location: ../index.php?page=data-sim');

?>