<?php
include('../../conf/config.php');
$id=$_POST['id'];
$nama= $_POST['nama'];
$nik= $_POST['nik'];
$templahir= $_POST['templahir'];
$tgllahir= $_POST['tgllahir'];
$alamat= $_POST['alamat'];
$foto= $_POST['fotoktp'];

if(!$_FILES['foto']['name']==''){
    // nama foto
    $nama_file = $_FILES['foto']['name'];
    // Mengganti setiap spasi dengan underscore
    $nama_tanpa_spasi = str_replace(' ', '_', $nama);
    // Mendapatkan format file
    $formatFile = pathinfo($nama_file, PATHINFO_EXTENSION);
    $nama_file_uploaded = 'ktp_'.$nama_tanpa_spasi.date("_YmdHis").'.'.$formatFile;
    //uplado foto
    $file_tmp = $_FILES['foto']['tmp_name'];
    $proses_upload=move_uploaded_file($file_tmp,'../foto/ktp/'.$nama_file_uploaded);
    unlink('../foto/ktp/'.$foto);
 
    $query=mysqli_query($koneksi,"UPDATE as_karyawan SET nama='$nama',nik='$nik',tempLahir='$templahir',tgllahir='$tgllahir',alamat='$alamat',fotoKtp='$nama_file_uploaded' WHERE id='$id'");
}else{
    $query=mysqli_query($koneksi,"UPDATE as_karyawan SET nama='$nama',nik='$nik',tempLahir='$templahir',tgllahir='$tgllahir',alamat='$alamat',fotoKtp='$foto' WHERE id='$id'");

}

header('Location: ../index.php?page=data-karyawan');
?>