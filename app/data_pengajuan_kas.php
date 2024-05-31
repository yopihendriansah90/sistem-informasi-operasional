<?php include ('fungsi.php'); ?>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

            <!-- /.card -->

            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Data Pengajuan Kas</h3>
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
                    <th>ID Invoice</th>
                    <th>Tanggal</th>
                    <th>Total</th>
                    <th>Aaction</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php 
                    $no=0;
                    $query=mysqli_query($koneksi,"SELECT * FROM invoices");
                    while($pengajuan=mysqli_fetch_array($query)){

                    $no++;
                    ?>
                  <tr>
                    <td width='5'><?php echo $no;?></td>
                    <td><?php echo $pengajuan['id'] ?></td>
                    <td><?php echo $pengajuan['tanggal'] ?></td>
                    <td><?php echo CurrencyFormatter::intToCurrency($pengajuan['total']) ?></td>
                    <td>
                      <a onclick="hapus_data(<?php echo $pengajuan['id']?>)" class="btn btn-sm m-0"><i class="fas fa-trash text-danger"></i></a>
                      <a href="index.php?page=edit-lokasi&&id=<?php echo $pengajuan['id'];?>" class="btn btn-sm m-0"><i class="fas fa-edit text-warning"></i></a>
                      
                      <a class="view-data-lokasi btn btn-sm m-0" data-toggle="modal"
                       data-target="#modal-view" href="#" data-nama="<?php echo $pengajuan['id'] ?>"
                      ><i class="fas fa-eye text-primary"></i>
                    </a>
                    </td>
                    
                  </tr>
                   <?php } ?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>No</th>
                    <th>ID Invoice</th>
                    <th>Tanggal</th>
                    <th>Total</th>
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
            <form id="pengajuanForm" method="POST" action="add/tambah_pengajuan.php" enctype="multipart/form-data">
  <div class="modal-body">
    <div class="row">
      <div class="col-sm-12">
        <div class="card-body">
          <table class="table table-bordered table-hover">
            <thead>
              <tr>
                <th style="width: 10px">#</th>
                <th>Nama pengeluaran</th>
                <th>Jumlah pengeluaran</th>
              </tr>
            </thead>
            <?php 
              $no = 0;
              $query = mysqli_query($koneksi, "SELECT * FROM kas_keluar WHERE id_invoices IS NULL");
              while($pengajuan = mysqli_fetch_array($query)) {
                $no++;
            ?>
            <tbody>
              <tr>
                <td><?php echo $no; ?>.</td>
                <td><?php echo $pengajuan['keterangan']; ?></td>
                <td class="jumlah-pengeluaran"><?php echo $pengajuan['jumlah']; ?></td>
                <td class="hidden-id" style="display: none;"><?php echo $pengajuan['id']; ?></td>
              </tr>
            </tbody>
            <?php } ?>
            <tfoot>
              <tr>
                <th style="width: 10px">#</th>
                <th>Nama pengeluaran</th>
                <th>Jumlah pengeluaran</th>
              </tr>
            </tfoot>
          </table>
          <p>Total: <span id="totalAmount">Rp 0</span></p>
        </div>
      </div>
    </div>
  </div>
  <div class="modal-footer justify-content-between">
    <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
    <button type="submit" class="btn btn-primary">Kirim Pengajuan</button>
  </div>
</form>

<script>
  document.addEventListener("DOMContentLoaded", function() {
    let totalAmount = 0;
    const jumlahPengeluaranElements = document.querySelectorAll(".jumlah-pengeluaran");
    jumlahPengeluaranElements.forEach(function(element) {
      totalAmount += parseFloat(element.textContent) || 0;
    });
    document.getElementById("totalAmount").textContent = 'Rp ' + totalAmount.toLocaleString('id-ID');
  });

  document.getElementById("pengajuanForm").addEventListener("submit", function(event) {
    const form = event.target;
    const hiddenIdElements = document.querySelectorAll(".hidden-id");
    
    hiddenIdElements.forEach(function(element) {
      const input = document.createElement("input");
      input.type = "hidden";
      input.name = "ids[]";
      input.value = element.textContent;
      form.appendChild(input);
    });

    const totalAmount = document.getElementById("totalAmount").textContent.replace('Rp ', '').replace(/\./g, '');
    const inputTotal = document.createElement("input");
    inputTotal.type = "hidden";
    inputTotal.name = "totalAmount";
    inputTotal.value = totalAmount;
    form.appendChild(inputTotal);

    const inputDate = document.createElement("input");
    inputDate.type = "hidden";
    inputDate.name = "currentDate";
    inputDate.value = new Date().toISOString().split('T')[0];
    form.appendChild(inputDate);
  });
</script>


          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>


<!-- Modal View Data  -->
<div class="modal fade" id="modal-view">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">View Data Lokasi</h4>
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
</script>