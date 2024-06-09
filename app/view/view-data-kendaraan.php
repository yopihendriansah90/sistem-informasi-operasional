              <div class="row">
               
               <div class="col-sm-6">
                 <div class="form-group">
                   <label>Plat Nomor / Nomor Kendaraan</label>
                   <input type="text" class="form-control" placeholder="Nomor Kendaraan" name="nomor_kendaraan" maxlength="10" readonly value="<?=$_POST['nomor_kendaraan'] ?>">
                 </div>
               </div>
               <div class="col-sm-6">
                 <!-- text input -->
                 <div class="form-group">
                   <label>Model</label>
                   <input type="text" class="form-control" placeholder="Model" name="model" maxlength="30" readonly value="<?=$_POST['model'] ?>">
                 </div>
               </div>
             </div>

             <!-- awal kolom -->
             <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="merek">Merek Kendaraan</label>
                        <input type="text" id="merek" class="form-control" placeholder="Merek Kendaraan" name="merek" maxlength="25" readonly value="<?=$_POST['merek'] ?>">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="tahun">Tahun Pembuatan</label>
                        <input type="text" id="tahun" class="form-control" placeholder="YYYY" name="tahun" maxlength="4" readonly value="<?=$_POST['tahun'] ?>">
                     </div>
                    </div>  
                  </div>
                  <!-- akhir kolom -->
                   <!-- awal kolom -->
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="nomor_mesin">Nomor Mesin</label>
                        <input type="text" id="nomor_mesin" class="form-control" placeholder="Nomor Mesin" name="nomor_mesin" maxlength="25" readonly value="<?=$_POST['nomor_mesin'] ?>">
                     </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="nomor_rangka">Nomor Rangka</label>
                        <input type="text" id="nomor_rangka" class="form-control" placeholder="Nomor Rangka" name="nomor_rangka" maxlength="25" readonly value="<?=$_POST['nomor_rangka'] ?>">
                      </div>
                    </div>  
                  </div>
                  <!-- akhir kolom -->
                   <!-- awal kolom -->
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="warna">Warna</label>
                        <input type="text" id="warna" class="form-control" placeholder="Warna Kendaraan" name="warna" maxlength="20" readonly value="<?=$_POST['warna'] ?>">
                     </div>
                    </div> 
                    
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="warna">Created Date</label>
                        <input type="text" id="createdDate" class="form-control" placeholder="" name="createdDate" maxlength="20" readonly value="<?=$_POST['createdDate'] ?>">
                     </div>
                    </div> 
                  </div>
                  <!-- akhir kolom -->
                  <!-- awal kolom -->
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="warna">Modified Date</label>
                        <input type="text" id="modifiedDate" class="form-control" placeholder="" name="modifiedDate" maxlength="20" readonly value="<?=$_POST['modifiedDate'] ?>">
                     </div>
                    </div> 

                  <!-- akhir kolom -->