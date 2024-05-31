<?php
$id     =$_GET['id'];
$query  =mysqli_query($koneksi,"SELECT * FROM view_karyawan_sim WHERE id='$id'");
$view   = mysqli_fetch_array($query);

?>
<section class="content">
    <div class="container-fluid">
        <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Edit Data SIM</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <form method="POST" action="update/update_sim.php" enctype="multipart/form-data">
              <div class="modal-body">
            
                  <div class="row">
               
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Nama</label>
                        <input type="hidden" value="<?=$view['id'] ?>" name="id">
                        <input type="hidden" value="<?=$view['fotoSim'] ?>" name="fotoSim">
                        
                        <input type="text" class="form-control" placeholder="Nama karyawan" name="nama" value="<?=$view['nama'] ?>" readonly>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>NIK</label>
                        <input type="text" class="form-control" placeholder="Nomor NIK" name="nik" value="<?=$view['nik'] ?>" readonly>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- textarea -->
                      <div class="form-group">
                        <label>Nomor SIM</label>
                        <input type="text" class="form-control" placeholder="Nomor SIM" name="nomorSim" value="<?=$view['nomorSim'] ?>" required>
                      </div>
                    </div>
                    <div class="col-sm-6">
                        <label>Masa aktif SIM</label>
                        <input type="date" class="form-control" placeholder="" name="masaAktif" value="<?=$view['masaAktif'] ?>" required>
                      </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                     <label class="form-label" for="customFile">Upload Foto SIM</label>
                        <input type="file" name="foto" class="form-control" id="customFile" <?=($view['fotoSim'] == '') ? "required" : ""; ?> />
                    </div>
                    <div class="col-sm-6">
                    <label>Foto SIM</label>
                      <img src="foto/sim/<?=$view['fotoSim'] ?>" alt="Foto SIM" width="100%" class="rounded float-right">

                    </div>
                  </div>

              
                      
         
                </div>
                <div class="modal-footer justify-content-between">
                  <a href="index.php?page=data-sim" class="btn btn-danger" >Batal</a>
                  <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                </div>
              </div>
            </form>
              </div>
              <!-- /.card-body -->
            </div>
        </div>
</section>