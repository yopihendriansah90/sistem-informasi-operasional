

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

            <!-- /.card -->

            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Data BPJS Ketenagakerjaan</h3>
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
                    <th>Nama</th>
                    <th>Nomor NIK</th>
                    <th>NO. BPJS</th>
                    <th>Aaction</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php 
                    $no=0;
                    $query=mysqli_query($koneksi,"SELECT * FROM view_karyawan_bpjs");
                    while($bpjs=mysqli_fetch_array($query)){
                    $no++;
                    ?>
                  <tr>
                    <td width='5'><?php echo $no;?></td>
                    <td><?php echo $bpjs['nama'] ?></td>
                    <td><?php echo $bpjs['nik'] ?></td>
                    <td><?php echo $bpjs['nomorBpjs'] ?></td>
                    <td>
                      <a onclick="hapus_data(<?php echo $bpjs['id']?>)" class="btn btn-sm btn-danger m-1">Hapus</a>
                      <a href="index.php?page=edit-bpjs&id=<?php echo $bpjs['id'];?>" class="btn btn-sm btn-success m-1">Edit</a>
                      
                      <a class="view-data-bpjs btn btn-sm btn-primary m-1" data-toggle="modal"
                        data-target="#modal-view" href="#" data-nama="<?php echo $bpjs['nama'] ?>"
                        data-target="#modal-view" href="#" data-nik="<?php echo $bpjs['nik'] ?>"
                        data-target="#modal-view" href="#" data-nomorBpjs="<?php echo $bpjs['nomorBpjs'] ?>"
                                            
                      >View Data
                    </a>
                    </td>
                    
                  </tr>
                   <?php } ?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Nomor NIK</th>
                    <th>Nomor BPJS</th>
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
            <form method="POST" action="add/tambah_bpjs.php" enctype="multipart/form-data">
              <div class="modal-body">
            
                  <div class="row">
               
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Nama</label>
                        <select class="form-control" id="karyawanbpjs" required>
                          <option value="">Pilih Karyawan</option>
                        </select>
                        <input type="hidden" id="selectedID" name="nik">
                      </div>
                    </div>

                    <div class="col-sm-6">
                      <!-- textarea -->
                      <div class="form-group">
                        <label>Nomor BPJS</label>
                        <input type="text" class="form-control" placeholder="Nomor BPJS" name="nomorBpjs" maxlength="20" required>
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
              <h4 class="modal-title">View Data BPJS Ketenagakerjaan</h4>
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
          window.location=("delete/hapus_bpjs.php?id="+data_id);
          // if(result.isConfirmed){

          // }
        });
      }
    });
  }
</script>