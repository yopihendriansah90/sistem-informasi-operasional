<?php
$id     =$_GET['id'];
$query  =mysqli_query($koneksi,"SELECT * FROM lokasi WHERE id='$id'");
$view   = mysqli_fetch_array($query);

?>
<section class="content">
    <div class="container-fluid">
        <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Edit Lokoasi</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <form method="POST" action="update/update_lokasi.php" enctype="multipart/form-data">
              <div class="modal-body">
            
                  <div class="row">
               
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Nama Lokasi</label>
                        <input type="hidden" value="<?=$view['id'] ?>" name="id">
                        
                        <input type="text" class="form-control" placeholder="Nama lokasi" name="nama" value="<?=$view['nama'] ?>">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" id="alamat" class="form-control" placeholder="Alamat" name="nama" value="<?=$view['alamat'] ?>">
                      </div>
                    </div>
                  </div>
                <div class="modal-footer justify-content-between">
                  <a href="index.php?page=data-lokasi" class="btn btn-danger" >Batal</a>
                  <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                </div>
              </div>
            </form>
              </div>
              <!-- /.card-body -->
            </div>
        </div>
</section>