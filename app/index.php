<!DOCTYPE html>
<html lang="en">

<?php
session_start(); 
if(!$_SESSION['nama']){
  header('Location: ../index.php?session=expired');
}
include('header.php'); 
?>
<?php include('../conf/config.php'); ?>
<body class="hold-transition sidebar-mini layout-fixed sidebar-collapse">
<div class="wrapper">

  <!-- Preloader -->

  <?php include('preloader.php'); ?>


  <!-- Navbar --> 
  <?php include('navbar.php'); ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <?php include('logo.php'); ?>

    <!-- Sidebar -->
    <?php include('sidebar.php'); ?>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <?php include('content_header.php'); ?>
    <!-- /.content-header -->

    <!-- Main content -->
    <?php
    if(isset($_GET['page'])){

      if($_GET['page']=='dashboard'){
        include('dashboard.php'); 
      }elseif($_GET['page']=='data-karyawan'){
        include('data_karyawan.php');
      }elseif($_GET['page']=='edit-karyawan'){
        include('edit/edit_karyawan.php');
      }elseif($_GET['page']=='data-sim'){
        include('data_sim.php');
      }elseif($_GET['page']=='edit-sim'){
        include('edit/edit_sim.php');
      }elseif($_GET['page']=='data-bpjs'){
        include('data_bpjs2.php');
      }elseif($_GET['page']=='edit-bpjs'){
        include('edit/edit_bpjs.php');
      }elseif($_GET['page']=='data-kendaraan'){
        include('data_kendaraan.php');
      }elseif($_GET['page']=='edit-kendaraan'){
        include('edit/edit_kendaraan.php');
      }elseif($_GET['page']=='data-stnk'){
        include('data_stnk.php');
      }elseif($_GET['page']=='data-kir'){
        include('data_kir.php');
      }elseif($_GET['page']=='edit-kir'){
        include('edit/edit_kir.php');
      }elseif($_GET['page']=='data-kas-keluar'){
        include('data_kas_keluar2.php');
      }elseif($_GET['page']=='data-kas-keluar-all'){
        include('data_kas_keluar2.php');
      }elseif($_GET['page']=='edit-kas-keluar'){
        include('edit/edit_kas_keluar.php');
      }elseif($_GET['page']=='data-lokasi'){
        include('data_lokasi.php');
      }elseif($_GET['page']=='edit-lokasi'){
        include('edit/edit_lokasi.php');
      }elseif($_GET['page']=='data-pengajuan-kas'){
        include('data_pengajuan_kas.php');
      }else{
        include('not_found.php'); 
      }
    }else{
      include('dashboard.php'); 
    }
    ?>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  <?php include('footer.php'); ?>
  
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

</body>
</html>
