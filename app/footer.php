  <footer class="main-footer">
    <strong>Created By Yopi Hendriansah.</strong>
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


  $('.testing').click(function(){
  //   var nama = $(this).attr('data-nama');
  //   var nik = $(this).attr('data-nik');
  //   var tempLahir = $(this).attr('data-tempLahir');
  //   var tglLahir = $(this).attr('data-tglLahir');
  //   var alamat = $(this).attr('data-alamat');
  //   var createdDate = $(this).attr('data-createdDate');
  //   var modifiedDate = $(this).attr('data-modifiedDate');
  //   var fotoKtp = $(this).attr('data-fotoKtp');

    
  
  //   $.ajax({
  //     url:"view/view-data-karyawan.php",
  //     dataType:"html",
  //     method:"POST",
  //     data:{nama:nama,nik:nik,tempLahir:tempLahir,tglLahir:tglLahir,alamat,fotoKtp:fotoKtp,createdDate:createdDate,modifiedDate:modifiedDate},
  //     success: function(data){
  //       $('#hasil-view-data').html(data);
  //     }
  // });
  console.log('test');
});


  // // view data sim
  // $('.view-data-sim').click(function(){
  //   var nama = $(this).attr('data-nama');
  //   var nik = $(this).attr('data-nik');
  //   var nomorSim = $(this).attr('data-nomorSim');
  //   var masaAktif = $(this).attr('data-masaAktif');
  //   var fotoSim = $(this).attr('data-fotoSim');

  //   console.log(nama);
  
  //   $.ajax({
  //     url:"view/view-data-sim.php",
  //     dataType:"html",
  //     method:"POST",
  //     data:{nama:nama,nik:nik,nomorSim:nomorSim,masaAktif:masaAktif,fotoSim:fotoSim},
  //     success: function(data){
  //       $('#hasil-view-data').html(data);
  //     }
  // });
  //   // console.log(nik);
  // });



  // // view data BPJS Ketenagakerjaan
  // $('.view-data-bpjs').click(function(){
  //   var nama = $(this).attr('data-nama');
  //   var nik = $(this).attr('data-nik');
  //   var nomorBpjs = $(this).attr('data-nomorBpjs');
  //   console.log(nama);
  
  //   $.ajax({
  //     url:"view/view-data-bpjs.php",
  //     dataType:"html",
  //     method:"POST",
  //     data:{nama:nama,nik:nik,nomorBpjs:nomorBpjs},
  //     success: function(data){
  //       $('#hasil-view-data').html(data);
  //     }
  // });
  //   console.log(nomorBpjs);
  // });



  //   // view data Kendaraan
  //   $('.view-data-s').click(function(){
  //     console.log('ok');
  //     var tanggal = $(this).attr('data-tanggal');
  //     var jumlah = $(this).attr('data-jumlah');
  //     var keterangan = $(this).attr('data-keterangan');
  //     var id_lokasi = $(this).attr('data-id_lokasi');
  //     var status = $(this).attr('data-status');
  //     var id_invoices = $(this).attr('data-id_invoices');
  //     $.ajax({
  //       url:"view/view-data-kas-keluar.php",
  //       dataType:"html",
  //       method:"POST",
  //       data:{tanggal:tanggal,jumlah:jumlah,keterangan:keterangan,id_lokasi:id_lokasi,status:status,id_invoices:id_invoices},
  //       success: function(data){
  //         $('#hasil-view-data').html(data);
  //       }
  //   });
      
  // });

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

  // $(document).ready(function(){
  //   setInterval(function(){
  //     $('#report-mhs').load("banner.php");
  //   },1000);
  // });


  //mengambild ata dari karyawan dengan ajax
//   $(document).ready(function(){
//     // Ketika halaman dimuat, ambil data karyawan dan bangun dropdown
//     $.ajax({
//         url: 'get_karyawan.php', // Ganti dengan URL file PHP yang akan mengambil data karyawan
//         method: 'GET',
//         dataType:"json",
//         success: function(response) {
//           var dataKaryawan = response;
//             var dropdown = $('#karyawan');
//             $.each(dataKaryawan, function(index, karyawan) {
//                 dropdown.append($('<option></option>').attr('value', karyawan.nik).text(karyawan.nama + ' - ' + karyawan.nik));
//             });
//         }
//     });
    
//     // Ketika karyawan dipilih, simpan ID-nya ke dalam hidden input
//     $('#karyawan').change(function(){
//         var selectedKaryawanId = $(this).val();
//         $('#selectedKaryawanId').val(selectedKaryawanId);
//     });
// });


//   //mengambild ata dari karyawan yang belum dapat bpjs dengan ajax
//   $(document).ready(function(){
//     // Ketika halaman dimuat, ambil data karyawan dan bangun dropdown
//     $.ajax({
//         url: 'get_karyawanbpjs.php', // Ganti dengan URL file PHP yang akan mengambil data karyawan
//         method: 'GET',
//         dataType:"json",
//         success: function(response) {
//           var dataKaryawan = response;
//             var dropdown = $('#karyawanbpjs');
//             $.each(dataKaryawan, function(index, karyawan) {
//                 dropdown.append($('<option></option>').attr('value', karyawan.nik).text(karyawan.nama + ' - ' + karyawan.nik));
//             });
//         }
//     });
    
//     // Ketika karyawan dipilih, simpan ID-nya ke dalam hidden input
//     $('#karyawanbpjs').change(function(){
//         var selectedID = $(this).val();
//         $('#selectedID').val(selectedID);
//     });
// });


  //mengambild ata dari karyawan yang belum dapat bpjs dengan ajax
  $(document).ready(function(){
    // Ketika halaman dimuat, ambil data karyawan dan bangun dropdown
    $.ajax({
        url: 'get_karyawanbpjs.php', // Ganti dengan URL file PHP yang akan mengambil data karyawan
        method: 'GET',
        dataType:"json",
        success: function(response) {
          var dataKaryawan = response;
            var dropdown = $('#karyawanbpjs');
            $.each(dataKaryawan, function(index, karyawan) {
                dropdown.append($('<option></option>').attr('value', karyawan.nik).text(karyawan.nama + ' - ' + karyawan.nik));
            });
        }
    });
    
    // Ketika karyawan dipilih, simpan ID-nya ke dalam hidden input
    $('#karyawanbpjs').change(function(){
        var selectedID = $(this).val();
        $('#selectedID').val(selectedID);
    });
});
  


  //mengambil data lokasi
  $(document).ready(function(){
    // Ketika halaman dimuat, ambil data lokasi dan bangun dropdown
    $.ajax({
        url: 'get/get_lokasi.php', // Ganti dengan URL file PHP yang akan mengambil data lokasi
        method: 'GET',
        dataType:"json",
        success: function(response) {
          var dataLokasi = response;
            var dropdown = $('#lokasi');
            $.each(dataLokasi, function(index, lokasi) {
                dropdown.append($('<option></option>').attr('value', lokasi.id).text(lokasi.nama));
            });
        }
    });
    
    // Ketika karyawan dipilih, simpan ID-nya ke dalam hidden input
    $('#lokasi').change(function(){
        var selectedID = $(this).val();
        $('#selectedID').val(selectedID);
    });
});






</script>