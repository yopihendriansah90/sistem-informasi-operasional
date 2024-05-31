<?php
include('../../conf/config.php');
$id     =$_GET['id'];
$query  =mysqli_query($koneksi,"SELECT * FROM as_sim WHERE id='$id'");
$view   = mysqli_fetch_array($query);
$foto=$view['fotoSim'];

if(file_exists('../foto/sim/'.$foto)){
    unlink('../foto/sim/'.$foto);
}
$query=mysqli_query($koneksi,"DELETE FROM as_sim WHERE id='$id'");
header('Location: ../index.php?page=data-sim');

?>