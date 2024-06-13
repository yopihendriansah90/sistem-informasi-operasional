<?php
$id     =$_GET['id'];
$query  =mysqli_query($koneksi,"SELECT * FROM view_kir WHERE id='$id'");
$view   = mysqli_fetch_array($query);

?>
<section class="content">
    <div class="container-fluid">
        <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Edit KIR</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <form method="POST" action="update/update_kir.php" enctype="multipart/form-data">
              <div class="modal-body">
                    <input type="hidden" name="id" value="<?=$view['id']?>">
                  <div class="row">
               
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Plat Nomor Kendaraan</label>
                        <select class="form-control" id="kendaraan_kir" disabled>
                          <option value="<?=$view['id_kendaraan'] ?>"><?=$view['nomor_kendaraan'] ?></option>
                        </select>
                        <input type="hidden" id="selectedID" name="id_kendaraan" value="<?=$view['id_kendaraan'] ?>">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Nomor Uji KIR</label>
                        <input type="text" id="nomor_uji" class="form-control" placeholder="Nomor Uji KIR" name="nomor_uji" value="<?=$view['nomor_uji'] ?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Masa Berlaku</label>
                        <input type="date" id="masa_aktif" class="form-control" placeholder="Masa Berlaku" name="masa_aktif" value="<?=$view['masa_aktif'] ?>">
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