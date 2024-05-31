<?php
include('../../conf/config.php');
$id=$_POST['id'];
$nama= $_POST['nama'];
$nik= $_POST['nik'];
$nomorSim= $_POST['nomorSim'];
$masaAktifSim= $_POST['masaAktif'];
$foto= $_POST['fotoSim'];
if(!$_FILES['foto']['name']==''){
    // nama foto
    $nama_file = $_FILES['foto']['name'];
    // Mengganti setiap spasi dengan underscore
    $nama_tanpa_spasi = str_replace(' ', '_', $nama);
    // Mendapatkan format file
    $formatFile = pathinfo($nama_file, PATHINFO_EXTENSION);
    $nama_file_uploaded = 'sim_'.$nama_tanpa_spasi.date("_YmdHis").'.'.$formatFile;
    //uplado foto
    $file_tmp = $_FILES['foto']['tmp_name'];
    $proses_upload=move_uploaded_file($file_tmp,'../foto/sim/'.$nama_file_uploaded);
    if(file_exists('../foto/sim/'.$foto)){
        unlink('../foto/sim/'.$foto);
    }
 
    $query=mysqli_query($koneksi,"UPDATE as_sim SET nomorSim='$nomorSim',masaAktif='$masaAktifSim', fotoSim='$nama_file_uploaded' WHERE id='$id'");
}else{
    $query=mysqli_query($koneksi,"UPDATE as_sim SET nomorSim='$nomorSim',masaAktif='$masaAktifSim', fotoSim='$foto' WHERE id='$id'");

}

header('Location: ../index.php?page=data-sim');
?>