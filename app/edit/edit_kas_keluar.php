<?php
$id     =$_GET['id'];
$query  =mysqli_query($koneksi,"SELECT * FROM kas_keluar WHERE id='$id'");
$view   = mysqli_fetch_array($query);

?>
<section class="content">
    <div class="container-fluid">
        <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Edit Pengeluaran Kas</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <form method="POST" action="update/update_kas_keluar.php" enctype="multipart/form-data">
              <div class="modal-body">
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Tanggal</label>
                        <input type="hidden" value="<?=$view['id'] ?>" name="id">
                        <input type="hidden" value="<?=$view['id_lokasi'] ?>" name="id_lokasi">
                        
                        <input type="date" class="form-control" placeholder="" name="tanggal"  value="<?=$view['tanggal'] ?>">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Jumlah Pengeluaran</label>
                        <input type="text" id="jumlah" class="form-control" placeholder="0" name="jumlah" value="<?=$view['jumlah'] ?>">
                      </div>
                    </div>
                  </div>



                              
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Keterangan</label>                        
                        <textarea name="keterangan" id="keterangan" class="form-control" rows="5"><?=$view['keterangan'] ?></textarea>
                      </div>
                    </div>

                    <div class="col-sm-6">
                     <label class="form-label" for="customFile">Upload Foto Nota</label>
                        <input type="file" name="foto" class="form-control" id="customFile" <?=($view['foto'] == '') ? "required" : ""; ?> />
                        <input type="hidden"value="<?=$view['foto'] ?>" name="foto">
                    </div>
                  </div>

                  <div class="row mt-3">
                    <div class="col-sm-12">
                    <img width="50%" src="foto/nota/<?=$view['foto']?>" class="rounded mx-auto d-block" alt="Foto Nota">
                    </div>
                  </div>
                <div class="modal-footer justify-content-between">
                  <a href="index.php?page=data-kas-keluar" class="btn btn-danger" >Batal</a>
                  <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                </div>
              </div>
            </form>
              </div>
              <!-- /.card-body -->
            </div>
        </div>
</section>
