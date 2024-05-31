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
              <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-lg">
                  Tambah Data
                </button>
                <br></br>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Jumlah Pengeluaran</th>
                    <th>Keterangan</th>
                    <th>Lokasi</th>
                    <th>Status</th>
                    <th>Aaction</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php 
                    $no=0;
                    $query=mysqli_query($koneksi,"SELECT * FROM view_kas_keluar");
                    while($lokasi=mysqli_fetch_array($query)){

                    $no++;
                    ?>
                  <tr>
                    <td width='5'><?php echo $no;?></td>
                    <td><?php echo $lokasi['tanggal'] ?></td>
                    <td align="right"><?php echo CurrencyFormatter::intToCurrency($lokasi['jumlah']) ?></td>
                    <td><?php echo $lokasi['keterangan'] ?></td>
                    <td><?php echo $lokasi['lokasi'] ?></td>
                    <td align="center"><?php echo $lokasi['status'] ?></td>
                    <td>
                      <a onclick="hapus_data(<?php echo $lokasi['id']?>)" class="btn btn-sm btn-danger m-1">Hapus</a>
                      <a href="index.php?page=edit-lokasi&&id=<?php echo $lokasi['id'];?>" class="btn btn-sm btn-success m-1">Edit</a>
                      
                      <a class="view-data-kas btn btn-sm btn-primary m-1" data-toggle="modal"
                      data-target="#modal-view-kas" href="#" data-jumlah="<?php echo $lokasi['jumlah'] ?>"  
                      data-target="#modal-view-kas" href="#" data-tanggal="<?php echo $lokasi['tanggal'] ?>"
                      data-target="#modal-view-kas" href="#" data-keterangan="<?php echo $lokasi['keterangan'] ?>"  
                      data-target="#modal-view-kas" href="#" data-lokasi="<?php echo $lokasi['lokasi'] ?>"  
                      data-target="#modal-view-kas" href="#" data-status="<?php echo $lokasi['status'] ?>"  
                      data-target="#modal-view-kas" href="#" data-id_invoices="<?php echo $lokasi['id_invoices'] ?>"  
                      data-target="#modal-view-kas" href="#" data-created_at="<?php echo $lokasi['created_at'] ?>"  
                      data-target="#modal-view-kas" href="#" data-updated_at="<?php echo $lokasi['updated_at'] ?>"  
                      >View Data
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
                        <label for="tanggal">Tanggal</label>
                        <input type="date" id="tanggal" class="form-control" name="tanggal" required>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="jumlah">Jumlah Pengeluaran</label>
                        <input type="text" id="jumlah" class="form-control" placeholder="0" name="jumlah" maxlength="20" oninput="onInputChange(event)" required>
                     </div>
                    </div>  
                  </div>

                  <!-- kolom kedua -->
                  <div class="row">
               
               <div class="col-sm-12">
                 <div class="form-group">
                   <label for="keterangan">Keterangan</label>
                   <textarea name="keterangan" class="form-control" id="keterangan" placeholder="Keterangan pengeluaran kas" required></textarea>
                 </div>
               </div>

               <!-- <div class="col-sm-6">
                 <div class="form-group">
                   <label for="jumlah">Pilih Lokasi</label>
                   <select class="form-control" id="lokasi" required>
                          <option value="">Pilih Lokasi</option>
                        </select>
                        <input type="text" id="selectedID" name="id">
                  </div>
               </div>  
             </div> -->


                      
         
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
<div class="modal fade" id="modal-view-kas">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">View Data Pengeluaran Kas</h4>
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
          window.location=("delete/hapus_lokasi.php?id="+data_id);
          // if(result.isConfirmed){

          // }
        });
      }
    });
  }



  // format mata uang 
function formatRupiah(value, currencySymbol = 'Rp') {
            // Hapus semua karakter non-digit
            const numberString = value.replace(/[^,\d]/g, '');
            const split = numberString.split(',');
            let sisa = split[0].length % 3;
            let rupiah = split[0].substr(0, sisa);
            const ribuan = split[0].substr(sisa).match(/\d{3}/gi);

            // Tambahkan titik jika ada ribuan
            if (ribuan) {
                const separator = sisa ? '.' : '';
                rupiah += separator + ribuan.join('.');
            }

            rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
            return currencySymbol + ' ' + rupiah;
        }

        function onInputChange(event) {
            const input = event.target;
            input.value = formatRupiah(input.value);
        }
</script>