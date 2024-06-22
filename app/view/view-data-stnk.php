<script src="dist/js/calcdate.js"></script>
              <div class="row">       
                <div class="col-sm-6">
                  <div class="form-group"> 
                    <label for="">Nomor Kendaraan</label>
                    <input type="text" class="form-control" placeholder="Nomor Kendaraan" name="" value="<?=$_POST['nomor_kendaraan'] ?>" readonly>
                  </div>
                </div>
                <div class="col-sm-6">
                 <div class="form-group">
                   <label>Pajak 1 tahun</label>
                   <input type="text" class="form-control" placeholder="Pajak 1 tahun" name="" value="<?=$_POST['pajak1thn'] ?>" readonly>
                   <div id="1thn"></div>
                        <script>
                            // Mendapatkan nilai PHP dan menyimpannya dalam variabel JavaScript
                            var targetDate= '<?=$_POST['pajak1thn']?>';
                            var id = '1thn';

                            // Memanggil fungsi JavaScript dengan nilai dari PHP
                            calcDate(targetDate,id);
                        </script>
                  </div>
               </div>
             </div>

              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                      <label>Pajak 5 tahun</label>
                      <input type="text" class="form-control" placeholder="Pajak 5 tahun" name="" value="<?=$_POST['pajak5thn'] ?>" readonly>
                        <div id="5thn"></div>
                        <script>
                            // Mendapatkan nilai PHP dan menyimpannya dalam variabel JavaScript
                            var targetDate= '<?=$_POST['pajak5thn']?>';
                            var id = '5thn';

                            // Memanggil fungsi JavaScript dengan nilai dari PHP
                            calcDate(targetDate,id);
                        </script>
                  </div>
                </div>

               <div class="col-sm-6">
                 <div class="form-group">
                   <label>Created Date</label>
                   <input type="text" class="form-control" placeholder="" name="" value="<?=$_POST['createdDate'] ?>" readonly>
                 </div>
               </div>
             </div>
             <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Modified Date</label>
                    <input type="text" class="form-control" placeholder="" name="" value="<?=$_POST['modifiedDate'] ?>" readonly>
                  </div>
                </div>
             </div>
                 