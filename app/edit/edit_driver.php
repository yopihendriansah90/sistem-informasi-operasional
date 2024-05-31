<?php
$id     =$_GET['id'];
$query  =mysqli_query($koneksi,"SELECT * FROM as_karyawan WHERE id='$id'");
$view   = mysqli_fetch_array($query);
?>
<section class="content">
    <div class="container-fluid">
        <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Edit Data Driver</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <form method="POST" action="update/update_driver.php" enctype="multipart/form-data">
              <div class="modal-body">
            
                  <div class="row">
               
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Nama</label>
                        <input type="hidden" value="<?=$view['id'] ?>" name="id">
                        <input type="hidden" value="<?=$view['fotoKtp'] ?>" name="fotoktp">
                        
                        <input type="text" class="form-control" placeholder="Nama Driver" name="nama" value="<?=$view['nama'] ?>">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>NIK</label>
                        <input type="text" class="form-control" placeholder="Nomor NIK" name="nik" value="<?=$view['nik'] ?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- textarea -->
                      <div class="form-group">
                        <label>Tempat lahir</label>
                        <input type="text" class="form-control" placeholder="Tempat lahir" name="templahir" value="<?=$view['tempLahir'] ?>">
                      </div>
                    </div>
                    <div class="col-sm-6">
                        <label>Tanggal lahir</label>
                        <input type="date" class="form-control" placeholder="" name="tgllahir" value="<?=$view['tglLahir'] ?>">
                      </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- textarea -->
                      <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" class="form-control" placeholder="Alamat" name="alamat" value="<?=$view['alamat'] ?>">
                      </div>
                    </div>
                    <div class="col-sm-6">
                     <label class="form-label" for="customFile">Upload Foto KTP</label>
                        <input type="file" name="foto" class="form-control" id="customFile" />
                    </div>
                  </div>
                  <!-- menampilkan image -->
                  <div class="row">
                      <div class="col-sm-12">
                        <img src="foto/ktp/<?=$view['fotoKtp'] ?>" alt="dasdf" width="20%" class="rounded float-right">
                      </div>
                      <div class="col-sm-12">
                        <p class="float-right">
                          <?=$view['fotoKtp'] ?>
                        </p>

                      </div>
                  </div>
              
                      
         
                </div>
                <div class="modal-footer justify-content-between">
                  <a href="index.php?page=data-driver" class="btn btn-danger" >Batal</a>
                  <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                </div>
              </div>
            </form>
              </div>
              <!-- /.card-body -->
            </div>
        </div>
</section>