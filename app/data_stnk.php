

    <!-- Main content -->
    <script src="dist/js/calcdate.js"></script>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

            <!-- /.card -->

            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Data Pajak STNK Kendaraan</h3>


            

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
                    <th>Nomor Kendaraan</th>
                    <th>Pajak 1 tahun</th>
                    <th>Pajak 5 tahun</th>
                    <th>Created Date</th>
                    <th>Modified Date</th>
                    <th>Aaction</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php 
                    $no=0;
                    $query=mysqli_query($koneksi,"SELECT pk.*,k.nomor_kendaraan FROM pajakkendaraan pk JOIN kendaraan k ON pk.id_kendaraan = k.id ");
                    while($pajak=mysqli_fetch_array($query)){

                    $no++;
                    ?>
                  <tr>
                    <td width='5'><?php echo $no;?></td>
  
                    <td><?php echo $pajak['nomor_kendaraan'] ?></td>
                    <td><?php echo $pajak['pajak1thn'] ?>
                    <div id="1thn<?=$pajak['id']?>"></div>
                        <script>
                            // Mendapatkan nilai PHP dan menyimpannya dalam variabel JavaScript
                            var targetDate= '<?=$pajak['pajak1thn']?>';
                            var id = '1thn<?=$pajak['id']?>';

                            // Memanggil fungsi JavaScript dengan nilai dari PHP
                            calcDate(targetDate,id);
                        </script>
                    </td>
                    <td><?php echo $pajak['pajak5thn'] ?>
                      <div id="5thn<?=$pajak['id']?>"></div>
                          <script>
                              // Mendapatkan nilai PHP dan menyimpannya dalam variabel JavaScript
                              var targetDate = '<?=$pajak['pajak5thn']?>';
                              var id = '5thn<?=$pajak['id']?>';

                              // Memanggil fungsi JavaScript dengan nilai dari PHP
                              calcDate(targetDate,id);
                          </script>
                    </td>
                    <td><?php echo $pajak['createdDate'] ?></td>
                    <td><?php echo $pajak['modifiedDate'] ?></td>
                    <td>
                      <a onclick="hapus_data(<?php echo $pajak['id']?>)" class="btn btn-sm btn-danger m-1">Hapus</a>
                      <a href="index.php?page=edit-bpjs&&id=<?php echo $pajak['id'];?>" class="btn btn-sm btn-success m-1">Edit</a>
                      
                      <a class="view-data-pajak btn btn-sm btn-primary m-1" data-toggle="modal"
                       data-target="#modal-view" href="#" data-nomor_kendaraan="<?php echo $pajak['nomor_kendaraan'] ?>"
                       data-target="#modal-view" href="#" data-pajak1thn="<?php echo $pajak['pajak1thn'] ?>"
                       data-target="#modal-view" href="#" data-pajak5thn="<?php echo $pajak['pajak5thn'] ?>"
                       data-target="#modal-view" href="#" data-createdDate="<?php echo $pajak['createdDate'] ?>"
                       data-target="#modal-view" href="#" data-modifiedDate="<?php echo $pajak['modifiedDate'] ?>"
                  
                      >View
                    </a>
                    </td>
                    
                  </tr>
                   <?php } ?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>No</th>
                    <th>Nomor Kendaraan</th>
                    <th>Pajak 1 tahun</th>
                    <th>Pajak 5 tahun</th>
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
            <form method="POST" action="add/tambah_pajak_kendaraan.php" enctype="multipart/form-data">
              <div class="modal-body">
            
                  <div class="row">
               
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Pilih Nomor Kendaraan</label>

                        <select class="form-control" id="kendaraan" required>
                          <option value="">Pilih Nomor Kendaraan</option>
                        </select>
                        <input type="hidden" id="selectedID" name="id_kendaraan">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Jatuh Tempo Pajak 1 Tahun</label>
                        <input type="date" class="form-control" placeholder="" name="pajak1thn" maxlength="20" required>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                  <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Jatuh Tempo Pajak 5 Tahun</label>
                        <input type="date" class="form-control" placeholder="" name="pajak5thn" maxlength="20" required>
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
              <h4 class="modal-title">View Data Pajak Kendaraan</h4>
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