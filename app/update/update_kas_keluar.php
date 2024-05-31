<?php
include('../../conf/config.php');
$id=$_POST['id'];
$tanggal= $_POST['tanggal'];
$jumlah= $_POST['jumlah'];
$lokasi=$_POST['id_lokasi'];
$keterangan= $_POST['keterangan'];
$foto= $_POST['foto'];

if(!$_FILES['foto']['name']==''){
    // nama foto
    $nama_file = $_FILES['foto']['name'];
    // Mengganti setiap spasi dengan underscore
    $nama_tanpa_spasi = str_replace(' ', '_', $lokasi);
    // Mendapatkan format file
    $formatFile = pathinfo($nama_file, PATHINFO_EXTENSION);
    $nama_file_uploaded = 'nota_'.$nama_tanpa_spasi.date("_YmdHis").'.'.$formatFile;
    //uplado foto
    $file_tmp = $_FILES['foto']['tmp_name'];
    $proses_upload=move_uploaded_file($file_tmp,'../foto/nota/'.$nama_file_uploaded);
    unlink('../foto/nota/'.$foto);
    $query=mysqli_query($koneksi,"UPDATE kas_keluar SET tanggal='$tanggal',jumlah='$jumlah',keterangan='$keterangan',id_lokasi='$lokasi',foto='$nama_file_uploaded' WHERE id='$id'");
}else{
    $query=mysqli_query($koneksi,"UPDATE kas_keluar SET tanggal='$tanggal',jumlah='$jumlah',keterangan='$keterangan',id_lokasi='$lokasi',foto='$foto' WHERE id='$id'");

}
header('Location: ../index.php?page=data-kas-keluar');
?>