

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

            <!-- /.card -->

            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Data KIR Kendaraan</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-lg">
                  Tambah Data
                </button>
                <br></br>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Plant Nomor Kendaraan</th>
                    <th>Nomor Uji Kendaraan</th>
                    <th>Sisa Bulan</th>
                    <th>Sisa Hari</th>
                    <th>Masa Berlaku</th>
                    <th>Status</th>
                    <th>Created Date</th>
                    <th>Modified Date</th>
                    <th>Aaction</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php 
                    $no=0;
                    $query=mysqli_query($koneksi,"SELECT * FROM view_kir");
                    while($data=mysqli_fetch_array($query)){


                    $no++;
                    ?>
                  <tr>
                    <td width='5'><?php echo $no;?></td>
                    <td><?php echo $data['nomor_kendaraan']?></td>
                    <td><?php echo $data['nomor_uji'] ?></td>
                    <td><?php echo $data['sisa_bulan'] ?></td>
                    <td><?php echo $data['sisa_hari'] ?></td>
                    <td><?php echo $data['masa_aktif'] ?></td>
                    <td><?php echo $data['status'] ?></td>
                    <td><?php echo $data['createdDate'] ?></td>
                    <td><?php echo $data['modifiedDate'] ?></td>
                    <td>
                      <a onclick="hapus_data(<?php echo $data['id']?>)" class="btn btn-sm btn-danger m-1">Hapus</a>
                      <a href="index.php?page=edit-kir&id=<?php echo $data['id'];?>" class="btn btn-sm btn-success m-1">Edit</a>
                      
                      <a class="view-data-kir btn btn-sm btn-primary m-1" data-toggle="modal"
                       data-target="#modal-view" href="#" data-nomor_kendaraan="<?php echo $data['nomor_kendaraan'] ?>"
                      data-target="#modal-view" href="#" data-nomor_uji="<?php echo $data['nomor_uji'] ?>"  
                      data-target="#modal-view" href="#" data-masa_aktif="<?php echo $data['masa_aktif'] ?>"  
                      data-target="#modal-view" href="#" data-sisa_bulan="<?php echo $data['sisa_bulan'] ?>"  
                      data-target="#modal-view" href="#" data-sisa_hari="<?php echo $data['sisa_hari'] ?>"  
                      data-target="#modal-view" href="#" data-status="<?php echo $data['status'] ?>"  
                      data-target="#modal-view" href="#" data-createdDate="<?php echo $data['createdDate'] ?>"  
                      data-target="#modal-view" href="#" data-modifiedDate="<?php echo $data['modifiedDate'] ?>"  
                      >View Data
                    </a>
                    </td>
                    
                  </tr>
                   <?php } ?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>No</th>
                    <th>Plant Nomor Kendaraan</th>
                    <th>Nomor Uji Kendaraan</th>
                    <th>Sisa Bulan</th>
                    <th>Sisa Hari</th>
                    <th>Masa Berlaku</th>
                    <th>Status</th>
                    <th>Created Date</th>
                    <th>Modified Date</th>
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
            <form method="POST" action="add/tambah_kir.php" enctype="multipart/form-data">
              <div class="modal-body">
            
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Plat Nomor Kendaraan</label>
                        <select class="form-control" id="kendaraan_kir" required>
                          <option value="">Pilih Plat Nomor Kendaraan</option>
                        </select>
                        <input type="hidden" id="selectedID" name="id_kendaraan">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="nomor_uji">Nomor Uji Kendaraan</label>
                        <input type="text" id="nomor_uji" class="form-control text-uppercase" placeholder="Nomor Uji Kendaraan" name="nomor_uji" maxlength="20" required>
                     </div>
                    </div>  
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="masa_aktif">Masa Berlaku</label>
                        <input type="date" id="masa_aktif" class="form-control" placeholder="" name="masa_aktif" required>
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
              <h4 class="modal-title">View Data KIR</h4>
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
          window.location=("delete/hapus_kir.php?id="+data_id);
          // if(result.isConfirmed){

          // }
        });
      }
    });
  }
</script>