<?php
$id     =$_GET['id'];
$query  =mysqli_query($koneksi,"SELECT * FROM view_pajak WHERE id='$id'");
$view   = mysqli_fetch_array($query);

?>
<section class="content">
    <div class="container-fluid">
        <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Edit Pajak Kendaraan</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <form method="POST" action="update/update_stnk.php" enctype="multipart/form-data">
              <div class="modal-body">
            
                  <div class="row">
               
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Nomor Plat Kendaraan</label>
                        <input type="hidden" value="<?=$view['id'] ?>" name="id">
                        
                        <select class="form-control" id="kendaraan_stnk" disabled>
                          <option value="<?=$view['id_kendaraan'] ?>"><?=$view['nomor_kendaraan'] ?></option>
                        </select></div>
                    </div>
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Pajak 1 Tahun</label>
                        <input type="date" id="pajak1thn" class="form-control" placeholder="Alamat" name="pajak1thn" value="<?=$view['pajak1thn'] ?>">
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Pajak 5 Tahun</label>
                        <input type="date" id="pajak5thn" class="form-control" placeholder="Alamat" name="pajak5thn" value="<?=$view['pajak5thn'] ?>">
                      </div>
                    </div>
              </div>

                <div class="modal-footer justify-content-between">
                  <a href="index.php?page=data-stnk" class="btn btn-danger" >Batal</a>
                  <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                </div>
              </div>

              
            </form>
              </div>
              <!-- /.card-body -->
            </div>
        </div>
</section>