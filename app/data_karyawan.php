

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

            <!-- /.card -->

            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Data Karyawan</h3>
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
                    <th>TTL</th>
                    <th>Alamat</th>
                    <th>KTP</th>
                    <th>Aaction</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php 
                    $no=0;
                    $query=mysqli_query($koneksi,"SELECT * FROM as_karyawan");
                    while($karyawan=mysqli_fetch_array($query)){

                    $no++;
                    ?>
                  <tr>
                    <td width='5'><?php echo $no;?></td>
                    <td><?php echo $karyawan['nama'] ?></td>
                    <td><?php echo $karyawan['nik'] ?></td>
                    <td><?php echo $karyawan['tempLahir'].' '. date("d/m/Y",strtotime($karyawan['tglLahir'])) ?></td>
                    <td><?php echo $karyawan['alamat'] ?></td>
                    <td >
                      <?php 
                      if (!file_exists('foto/ktp/'.$karyawan['fotoKtp']) || $karyawan['fotoKtp']==''){
                        echo "File tidak tersedia";
                      }else{
                      ?>
                        <a href="foto/ktp/<?=$karyawan['fotoKtp']?>" download class="btn btn-primary"><i class="fas fa-download"></i></a>
                      <?php 
                   
                      }
                      ?>
                    </td>
                    <td>
                      <a onclick="hapus_data(<?php echo $karyawan['id']?>)" class="btn btn-sm btn-danger m-1"></i>Hapus</a>
                      <a href="index.php?page=edit-karyawan&&id=<?php echo $karyawan['id'];?>" class="btn btn-sm btn-success m-1">Edit</a>
                      
                      <a class="view-data btn btn-sm btn-primary m-1" data-toggle="modal"
                       data-target="#modal-view" href="#" data-nama="<?php echo $karyawan['nama'] ?>"
                      data-target="#modal-view" href="#" data-nik="<?php echo $karyawan['nik'] ?>"
                      data-target="#modal-view" href="#" data-tempLahir="<?php echo $karyawan['tempLahir'] ?>"
                      data-target="#modal-view" href="#" data-tglLahir="<?php echo $karyawan['tglLahir'] ?>"
                      data-target="#modal-view" href="#" data-alamat="<?php echo $karyawan['alamat'] ?>"
                      data-target="#modal-view" href="#" data-fotoKtp="<?php echo $karyawan['fotoKtp'] ?>"
                      data-target="#modal-view" href="#" data-createdDate="<?php echo $karyawan['createDate'] ?>"
                      data-target="#modal-view" href="#" data-modifiedDate="<?php echo $karyawan['modifiedDate'] ?>"
                      

                      
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
                    <th>TTL</th>
                    <th>Alamat</th>
                    <th>KTP</th>
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
            <form method="POST" action="add/tambah_karyawan.php" enctype="multipart/form-data">
              <div class="modal-body">
            
                  <div class="row">
               
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" placeholder="Nama karyawan" name="nama" required>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>NIK</label>
                        <input type="text" class="form-control" placeholder="Nomor NIK" name="nik" required>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- textarea -->
                      <div class="form-group">
                        <label>Tempat lahir</label>
                        <input type="text" class="form-control" placeholder="Tempat lahir" name="templahir" required>
                      </div>
                    </div>
                    <div class="col-sm-6">
                        <label>Tanggal lahir</label>
                        <input type="date" class="form-control" placeholder="" name="tgllahir" required>
                      </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- textarea -->
                      <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" class="form-control" placeholder="Alamat" name="alamat" required>
                      </div>
                    </div>
                    <div class="col-sm-6">
                     <label class="form-label" for="customFile">Upload Foto KTP</label>
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
              <h4 class="modal-title">View Data Karyawan</h4>
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
          window.location=("delete/hapus_karyawan.php?id="+data_id);
          // if(result.isConfirmed){

          // }
        });
      }
    });
  }
</script>