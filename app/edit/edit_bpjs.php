<?php
$id     =$_GET['id'];
$query  =mysqli_query($koneksi,"SELECT * FROM view_karyawan_bpjs WHERE id='$id'");
$view   = mysqli_fetch_array($query);

?>
<section class="content">
    <div class="container-fluid">
        <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Edit BPJS Ketenagakerjaan</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <form method="POST" action="update/update_bpjs.php" enctype="multipart/form-data">
              <div class="modal-body">
            
                  <div class="row">
               
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Nama</label>
                        <input type="hidden" value="<?=$view['id'] ?>" name="id">
                        
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
                        <label>Nomor BPJS Ketenagakerjaan</label>
                        <input type="text" class="form-control" placeholder="Nomor BPJS Ketenagakerjaan" name="nomorBpjs" value="<?=$view['nomorBpjs'] ?>" required>
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