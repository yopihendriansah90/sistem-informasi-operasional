  <footer class="main-footer">
    <strong>Created By <a class="link-secondary" href="https://www.linkedin.com/in/yopihendriansah/" target="_blank" rel="noopener noreferrer"> Yopi Hendriansah.</a></strong>
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0.0
    </div>
  </footer>


<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<!-- <script src="plugins/sparklines/sparkline.js"></script> -->
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<!-- <script src="dist/js/demo.js"></script> -->
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!-- <script src="dist/js/pages/dashboard.js"></script> -->
<script src="plugins/sweetalert2/sweetalert2.min.js"></script>

<!-- DataTables  & Plugins -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="plugins/jszip/jszip.min.js"></script>
<script src="plugins/pdfmake/pdfmake.min.js"></script>
<script src="plugins/pdfmake/vfs_fonts.js"></script>
<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>



<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });


// ======================================================================================

    // view data lokasi proyek
    $('.view-data-lokasi').click(function(){
      var nama = $(this).attr('data-nama');
      var alamat = $(this).attr('data-alamat');
      var created_at = $(this).attr('data-created_at');
      var updated_at = $(this).attr('data-updated_at');
      $.ajax({
        url:"view/view-data-lokasi.php",
        dataType:"html",
        method:"POST",
        data:{nama:nama,alamat:alamat,created_at:created_at,updated_at:updated_at},
        success: function(data){
          $('#hasil-view-data').html(data);
        }
    });
  });
      // penutup view data lokasi


    // view data kendaraan
    $('.view-data-kendaraan').click(function(){
      var nomor_kendaraan = $(this).attr('data-nomor_kendaraan');
      var model = $(this).attr('data-model');
      var merek = $(this).attr('data-merek');
      var tahun = $(this).attr('data-tahun');
      var warna = $(this).attr('data-warna');
      var nomor_mesin = $(this).attr('data-nomor_mesin');
      var nomor_rangka = $(this).attr('data-nomor_rangka');
      var createdDate = $(this).attr('data-createdDate');
      var modifiedDate = $(this).attr('data-modifiedDate');


      $.ajax({
        url:"view/view-data-kendaraan.php",
        dataType:"html",
        method:"POST",
        data:{nomor_kendaraan:nomor_kendaraan,model:model,merek:merek,tahun:tahun,warna:warna,nomor_mesin:nomor_mesin,nomor_rangka:nomor_rangka,createdDate:createdDate,modifiedDate:modifiedDate},
        success: function(data){
          $('#hasil-view-data').html(data);
        }
    });
  });
      





   // view data kas keluar
   $('.view-data-kas').click(function(){
      var tanggal = $(this).attr('data-tanggal');
      var jumlah = $(this).attr('data-jumlah');
      var keterangan = $(this).attr('data-keterangan');
      var lokasi = $(this).attr('data-lokasi');
      var status = $(this).attr('data-status');
      var id_invoices = $(this).attr('data-id_invoices');
      var foto = $(this).attr('data-foto');
      var created_at = $(this).attr('data-created_at');
      var updated_at = $(this).attr('data-updated_at');
      console.log(tanggal);
      $.ajax({
        url:"view/view-data-kas-keluar.php",
        dataType:"html",
        method:"POST",
        data:{tanggal:tanggal,jumlah:jumlah,keterangan:keterangan,lokasi:lokasi,status:status,id_invoices:id_invoices,foto:foto,created_at:created_at,updated_at:updated_at},
        success: function(data){
          $('#hasil-view-data').html(data);
          console.log(status);
        }
    });
  });




  //mengambil data kendadraan
  $(document).ready(function(){
    // Ketika halaman dimuat, ambil data lokasi dan bangun dropdown
    $.ajax({
        url: 'get/get_kendaraan.php', // Ganti dengan URL file PHP yang akan mengambil data kendaraan
        method: 'GET',
        dataType:"json",
        success: function(response) {
          var dataKendaraan = response;
            var dropdown = $('#kendaraan');
            $.each(dataKendaraan, function(index, kendaraan) {
                dropdown.append($('<option></option>').attr('value', kendaraan.id).text(kendaraan.nomor_kendaraan));
            });
        }
    });
    
    // Ketika karyawan dipilih, simpan ID-nya ke dalam hidden input
    $('#kendaraan').change(function(){
        var selectedID = $(this).val();
        $('#selectedID').val(selectedID);
    });
});
      
  // ========================================batasnormal=============================

  







  

//   //mengambil data lokasi
//   $(document).ready(function(){
//     // Ketika halaman dimuat, ambil data lokasi dan bangun dropdown
//     $.ajax({
//         url: 'get/get_lokasi.php', // Ganti dengan URL file PHP yang akan mengambil data lokasi
//         method: 'GET',
//         dataType:"json",
//         success: function(response) {
//           var dataLokasi = response;
//             var dropdown = $('#lokasi');
//             $.each(dataLokasi, function(index, lokasi) {
//                 dropdown.append($('<option></option>').attr('value', lokasi.id).text(lokasi.nama));
//             });
//         }
//     });
    
//     // Ketika karyawan dipilih, simpan ID-nya ke dalam hidden input
//     $('#lokasi').change(function(){
//         var selectedID = $(this).val();
//         $('#selectedID').val(selectedID);
//     });
// });






</script>