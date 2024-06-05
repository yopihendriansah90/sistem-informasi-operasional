

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

            <!-- /.card -->

            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Data Kendaraan</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-lg">
                  Tambah Data
                </button>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Plat Nomor</th>
                    <th>Model</th>
                    <th>Merk</th>
                    <th>Tahun</th>
                    <th>Warna</th>
                    <th>Nomor Mesin</th>
                    <th>NOmor Rangka</th>
                    <th>Aaction</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php 
                    $no=0;
                    $query=mysqli_query($koneksi,"SELECT * FROM Kendaraan");
                    while($kendaraan=mysqli_fetch_array($query)){

                    $no++;
                    ?>
                  <tr>
                    <td width='5'><?php echo $no;?></td>
                    <td><?php echo $kendaraan['nomor_kendaraan'] ?></td>
                    <td><?php echo $kendaraan['model'] ?></td>
                    <td><?php echo $kendaraan['merek'] ?></td>
                    <td><?php echo $kendaraan['tahun'] ?></td>
                    <td><?php echo $kendaraan['warna'] ?></td>
                    <td><?php echo $kendaraan['nomor_mesin'] ?></td>
                    <td><?php echo $kendaraan['nomor_rangka'] ?></td>
                    <td>
                      <a onclick="hapus_data(<?php echo $kendaraan['id']?>)" class="btn btn-sm btn-danger m-1">Hapus</a>
                      <a href="index.php?page=edit-bpjs&&id=<?php echo $kendaraan['id'];?>" class="btn btn-sm btn-success m-1">Edit</a>
                      
                      <a class="view-data-kendaraan btn btn-sm btn-primary m-1" data-toggle="modal"
                       data-target="#modal-view" href="#" data-nomor_kendaraan="<?php echo $kendaraan['nomor_kendaraan'] ?>"
                      data-target="#modal-view" href="#" data-model="<?php echo $kendaraan['model'] ?>"
                      data-target="#modal-view" href="#" data-merek="<?php echo $kendaraan['merek'] ?>"
                      data-target="#modal-view" href="#" data-tahun="<?php echo $kendaraan['tahun'] ?>"
                      data-target="#modal-view" href="#" data-warna="<?php echo $kendaraan['warna'] ?>"
                      data-target="#modal-view" href="#" data-nomor_mesin="<?php echo $kendaraan['nomor_mesin'] ?>"
                      data-target="#modal-view" href="#" data-nomor_rangka="<?php echo $kendaraan['nomor_rangka'] ?>"
                      
                      

                      
                      >View Data
                    </a>
                    </td>
                    
                  </tr>
                   <?php } ?>
                  </tbody>
                  <tfoot>
                  <tr>
                  <tr>
                    <th>No</th>
                    <th>Plat Nomor</th>
                    <th>Model</th>
                    <th>Merk</th>
                    <th>Tahun</th>
                    <th>Warna</th>
                    <th>Nomor Mesin</th>
                    <th>NOmor Rangka</th>
                    <th>Aaction</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
      <div class="modal fade" id="modal-lg">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Tambah Data</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form method="POST" action="add/tambah_kendaraan.php" enctype="multipart/form-data">
              <div class="modal-body">
            
                  <div class="row">
               
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Plat Nomor / Nomor Kendaraan</label>
                        <input type="text" class="form-control" placeholder="Nomor Kendaraan" name="nomor_kendaraan" maxlength="10" required>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Model</label>
                        <input type="text" class="form-control" placeholder="Model" name="model" maxlength="30" required>
                      </div>
                    </div>
                  </div>

                  <div class="row">
               
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Merek</label>
                        <input type="text" class="form-control" placeholder="Merek Kendaraan" name="merek" maxlength="20" required>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Tahun Pembuatan / Perakitan</label>
                        <input type="number" class="form-control" placeholder="Tahun Pembuatan / Perakitan" name="tahun" maxlength="4" required>
                      </div>
                    </div>
                  </div>      
                  <div class="row">
               
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Nomor Mesin</label>
                        <input type="text" class="form-control" placeholder="Nomor Mesin" name="nomor_mesin" maxlength="20" required>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Nomor Rangka</label>
                        <input type="text" class="form-control" placeholder="Nomor Rangka" name="nomor_rangka" maxlength="20" required>
                      </div>
                    </div>
                  </div>                                     
                  <div class="row">
               
               <div class="col-sm-6">
                 <div class="form-group">
                   <label>Warna</label>
                   <input type="text" class="form-control" placeholder="Warna Kendaraan" name="warna" maxlength="20" required>
                 </div>
               </div>
             </div>  
              </div>
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                  <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
              </div>
            </form>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>


<!-- Modal View Data  -->
<div class="modal fade" id="modal-view">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">View Data Kendaraan</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form method="get">
            <div class="modal-body" id="hasil-view-data">
        
            </div>
              <div class="modal-footer justify-content-right">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                
              </div>
            </div>
          </form>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
<!-- akhir modal view data -->
<script>
  function hapus_data(data_id){
    // alert('Ok');
    Swal.fire({
      title: "Apakah kamu yakin?",
      text: "Data yang sudah dihapus tidak bisa dikembalikan lagi",
      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      cancelButtonText: "Batal",
      confirmButtonText: "Iya, hapus sekarang!"
    }).then((result) => {
      if (result.isConfirmed) {
        Swal.fire({
          title: "Terhapus!",
          text: "Kamu berhasil menghapus data itu",
          icon: "success",
          confirmButtonText: "OKE"
        }).then((result)=>{
          window.location=("delete/hapus_kendaraan.php?id="+data_id);
          // if(result.isConfirmed){

          // }
        });
      }
    });
  }
</script>