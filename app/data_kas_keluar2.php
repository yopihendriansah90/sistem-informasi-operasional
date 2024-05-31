
<?php include('fungsi.php'); ?>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

            <!-- /.card -->

            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Data Pengeluaran Kas</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <button type="button" class="btn btn-info mb-3" data-toggle="modal" data-target="#modal-lg">
                  Tambah Data
                </button>
                <a href="?page=data-kas-keluar" class="btn btn-warning mb-3">
                  Belum Diajukan
                </a>            
                <a href="?page=data-kas-keluar-all" class="btn btn-primary mb-3">
                  Semua Data
                </a>

                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Jumlah Pengeluaran</th>
                    <th>Keterangan</th>
                    <th>Lokasi</th>
                    <th>Foto</th>
                    <th>Status</th>
                    <th>Aaction</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php 
                    $no=0;
                    if($_GET['page']=='data-kas-keluar-all'){
                      $query=mysqli_query($koneksi,"SELECT * FROM view_kas_keluar");
                    }else{
                      $query=mysqli_query($koneksi,"SELECT * FROM view_kas_keluar WHERE id_invoices IS NULL");
                    }
                    while($kaskeluar=mysqli_fetch_array($query)){

                    $no++;
                    ?>
                  <tr>
                    <td width='5'><?php echo $no;?></td>
                    <td><?php echo $kaskeluar['tanggal'] ?></td>
                    <td align="right"><?php echo CurrencyFormatter::intToCurrency($kaskeluar['jumlah']) ?></td>
                    <td><?php echo $kaskeluar['keterangan'] ?></td>
                    <td><?php echo $kaskeluar['lokasi'] ?></td>
                    <td>
                        
                    <?php 

                      if (!file_exists('foto/nota/'.$kaskeluar['foto']) || $kaskeluar['foto']==''){
                        echo "File tidak tersedia";
                      }else{
                      ?>
                        <a href="foto/nota/<?=$kaskeluar['foto']?>" download class="btn btn-primary"><i class="fas fa-download"></i> Download</a>
                      <?php 
                   
                      }
                      ?>
                    </td>
                    <td align="center"><?php echo $kaskeluar['status'] ?></td>
                    <td align="center">
                      <a onclick="hapus_data(<?php echo $kaskeluar['id']?>)" class="btn btn-sm btn-danger m-1">Delete</a>
                      <a href="index.php?page=edit-kas-keluar&&id=<?php echo $kaskeluar['id'];?>" class="btn btn-sm btn-warning m-1">Edit</a>
                      
                      <a class="view-data-kas btn btn-sm btn-primary m-1" data-toggle="modal"
                       data-target="#modal-view" href="#" data-tanggal="<?php echo $kaskeluar['tanggal'] ?>"
                      data-target="#modal-view" href="#" data-jumlah="<?php echo $kaskeluar['jumlah'] ?>"  
                      data-target="#modal-view" href="#" data-keterangan="<?php echo $kaskeluar['keterangan'] ?>"  
                      data-target="#modal-view" href="#" data-lokasi="<?php echo $kaskeluar['lokasi'] ?>"  
                      data-target="#modal-view" href="#" data-status="<?php echo $kaskeluar['status'] ?>"  
                      data-target="#modal-view" href="#" data-id_invoices="<?php echo $kaskeluar['id_invoices'] ?>"  
                      data-target="#modal-view" href="#" data-foto="<?php echo $kaskeluar['foto'] ?>"  
                      data-target="#modal-view" href="#" data-created_at="<?php echo $kaskeluar['created_at'] ?>"  
                      data-target="#modal-view" href="#" data-updated_at="<?php echo $kaskeluar['updated_at'] ?>"  
                      >View
                    </a>
                    </td>
                    
                  </tr>
                   <?php } ?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Jumlah Pengeluaran</th>
                    <th>Keterangan</th>
                    <th>Lokasi</th>
                    <th>Foto</th>
                    <th>Status</th>
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
            <form method="POST" action="add/tambah_kas_keluar.php" enctype="multipart/form-data">
              <div class="modal-body">
            
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="nama">Tanggal</label>
                        <input type="date" id="nama" class="form-control" placeholder="" name="tanggal" required>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="jumlah">Jumlah Pengeluaran</label>
                        <input type="number" id="jumlah" class="form-control" placeholder="0" name="jumlah" maxlength="20" required>
                     </div>
                    </div>  
                  </div>
                  <!-- awalan row -->
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="keterangan">Keterangan</label>
                      <textarea name="keterangan" id="keterangan" class="form-control" require></textarea>  
                      </div>
                    </div> 

                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="keterangan">Upload Nota Pembayaran</label>
                        <input type="file" name="foto" class="form-control" id="customFile" required />
                      </div>
                    </div> 
                  </div>
                  <!-- akhiran row -->
                      
         
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
              <h4 class="modal-title">View Data Pengeluaran KAS</h4>
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
          window.location=("delete/hapus_kas_keluar.php?id="+data_id);
          // if(result.isConfirmed){

          // }
        });
      }
    });
  }
</script>