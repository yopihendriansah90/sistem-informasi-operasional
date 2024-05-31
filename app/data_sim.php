

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

            <!-- /.card -->

            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Data SIM Karyawan</h3>
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
                    <th>NIK</th>
                    <th>NO. SIM</th>
                    <th>Masa Aktif SIM</th>
                    <th>Foto</th>
                    <th>Aaction</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php 
                    $no=0;
                    $query=mysqli_query($koneksi,"SELECT * FROM view_karyawan_sim");
                    while($sim=mysqli_fetch_array($query)){

                    $no++;
                    ?>
                  <tr>
                    <td width='5'><?php echo $no;?></td>
                    <td><?php echo $sim['nama'] ?></td>
                    <td><?php echo $sim['nik'] ?></td>
                    <td><?php echo $sim['nomorSim'] ?></td>
                    <td><?php echo date("d-m-Y",strtotime($sim['masaAktif'])) ?></td>
                    <td >
                      <?php 
                      if (!file_exists('foto/sim/'.$sim['fotoSim'])||$sim['fotoSim']==''){
                        echo "File tidak tersedia";
                      }else{
                      ?>
                      <a href="foto/sim/<?=$sim['fotoSim']?>" download class="btn btn-primary">Download SIM</a>
                      <?php 
                   
                      }
                      ?>
                    </td>
                    <td>
                      <a onclick="hapus_data(<?php echo $sim['id']?>)" class="btn btn-sm btn-danger m-1">Hapus</a>
                      <a href="index.php?page=edit-sim&&id=<?php echo $sim['id'];?>" class="btn btn-sm btn-success m-1">Edit</a>
                      
                      <a class="view-data-sim btn btn-sm btn-primary m-1" data-toggle="modal"
                       data-target="#modal-view" href="#" data-nama="<?php echo $sim['nama'] ?>"
                      data-target="#modal-view" href="#" data-nik="<?php echo $sim['nik'] ?>"
                      data-target="#modal-view" href="#" data-nomorSim="<?php echo $sim['nomorSim'] ?>"
                      data-target="#modal-view" href="#" data-masaAktif="<?php echo $sim['masaAktif'] ?>"
                      data-target="#modal-view" href="#" data-fotoSim="<?php echo $sim['fotoSim'] ?>"
                      
                      

                      
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
                    <th>NIK</th>
                    <th>NO. SIM</th>
                    <th>Masa Aktif SIM</th>
                    <th>Foto</th>
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
            <form method="POST" action="add/tambah_sim.php" enctype="multipart/form-data">
              <div class="modal-body">
            
                  <div class="row">
               
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Pilih Nama Karyawan</label>

                        <select class="form-control" id="karyawan" required>
                          <option value="">Pilih Karyawan</option>
                        </select>
                        <input type="hidden" id="selectedKaryawanId" name="nik">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Nomor SIM</label>
                        <input type="text" class="form-control" placeholder="Nomor SIM" name="nomorSim" maxlength="20" required>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- textarea -->
                      <div class="form-group">
                        <label>Masa Aktif SIM</label>
                        <input type="date" class="form-control" placeholder="" name="masaAktif" required>
                      </div>
                    </div>
                      <div class="col-sm-6">
                          <label class="form-label" for="customFile">Upload Foto SIM</label>
                          <input type="file" name="foto" class="form-control" id="customFile" required />
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
              <h4 class="modal-title">View Data SIM</h4>
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
          window.location=("delete/hapus_sim.php?id="+data_id);
          // if(result.isConfirmed){

          // }
        });
      }
    });
  }
</script>