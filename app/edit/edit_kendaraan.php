<?php
$id     =$_GET['id'];
$query  =mysqli_query($koneksi,"SELECT * FROM kendaraan WHERE id='$id'");
$view   = mysqli_fetch_array($query);
?>
<section class="content">
    <div class="container-fluid">
        <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Edit Data Kendaraan</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <form method="POST" action="update/update_kendaraan.php" enctype="multipart/form-data">
              <div class="modal-body">
            
                <div class="row">
                
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Plat Nomor / Nomor Kendaraan</label>
                    <input type="hidden" name="id" value="<?=$view['id'] ?>">
                    <input type="text" class="form-control" placeholder="Nomor Kendaraan" name="nomor_kendaraan" maxlength="10" required value="<?=$view['nomor_kendaraan'] ?>">
                  </div>
                </div>
                <div class="col-sm-6">
                  <!-- text input -->
                  <div class="form-group">
                    <label>Model</label>
                    <input type="text" class="form-control" placeholder="Model" name="model" maxlength="30" required value="<?=$view['model'] ?>">
                  </div>
                </div>
              </div>

              <!-- awal kolom -->
              <div class="row">
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label for="merek">Merek Kendaraan</label>
                          <input type="text" id="merek" class="form-control" placeholder="Merek Kendaraan" name="merek" maxlength="25" required value="<?=$view['merek'] ?>">
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label for="tahun">Tahun Pembuatan</label>
                          <input type="number" id="tahun" class="form-control" placeholder="YYYY" name="tahun" maxlength="4" required value="<?=$view['tahun'] ?>">
                      </div>
                      </div>  
                    </div>
                    <!-- akhir kolom -->
                    <!-- awal kolom -->
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label for="nomor_mesin">Nomor Mesin</label>
                          <input type="text" id="nomor_mesin" class="form-control" placeholder="Nomor Mesin" name="nomor_mesin" maxlength="25" required value="<?=$view['nomor_mesin'] ?>">
                      </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label for="nomor_rangka">Nomor Rangka</label>
                          <input type="text" id="nomor_rangka" class="form-control" placeholder="Nomor Rangka" name="nomor_rangka" maxlength="25" required value="<?=$view['nomor_rangka'] ?>">
                        </div>
                      </div>  
                    </div>
                    <!-- akhir kolom -->
                    <!-- awal kolom -->
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label for="warna">Warna</label>
                          <input type="text" id="warna" class="form-control" placeholder="Warna Kendaraan" name="warna" maxlength="20" required value="<?=$view['warna'] ?>">
                        </div>
                      </div> 
                    </div>
                    <!-- akhir kolom -->

                <div class="modal-footer justify-content-between">
                  <a href="index.php?page=data-kendaraan" class="btn btn-danger" >Batal</a>
                  <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                </div>
              </div>
            </form>
              </div>
              <!-- /.card-body -->
            </div>
        </div>
</section>