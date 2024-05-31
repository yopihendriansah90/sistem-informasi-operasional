              <div class="row">       
               <div class="col-sm-6">
                 <div class="form-group"> 
                  <label for="">Nama</label>
                   <input type="text" class="form-control" placeholder="Nama Driver" name="nama" value="<?=$_POST['nama'] ?>" readonly>
                 </div>
               </div>
               <div class="col-sm-6"> 
                 <!-- text input -->
                 <div class="form-group">
                   <label>NIK</label>
                   <input type="text" class="form-control" placeholder="Nomor NIK" name="nik" value="<?=$_POST['nik'] ?>" readonly>
                 </div>
               </div>
             </div>

             <div class="row">
               <div class="col-sm-6">
       
                 <div class="form-group">
                   <label>Tempat lahir</label>
                   <input type="text" class="form-control" placeholder="Tempat lahir" name="templahir" value="<?=$_POST['tempLahir'] ?>" readonly>
                 </div>
               </div>
               <div class="col-sm-6">

                   <label>Tanggal lahir</label>
                   <input type="date" class="form-control" placeholder="" name="tgllahir" value="<?=$_POST['tglLahir'] ?>" readonly>
                 </div>
             </div>
             <div class="row">
               <div class="col-sm-6">
       
                 <div class="form-group">
                   <label for="textalamat">Alamat</label>
                  
                    <textarea class="form-control" id="textalamat" rows="8" readonly><?=$_POST['alamat'] ?></textarea>
                    
                 </div>
               </div>
               <div class="col-sm-6">
                <div class="form-group">
                  <label class="form-label" for="customFile">Foto KTP</label><br>
                  <img src="foto/ktp/<?=$_POST['fotoKtp'] ?>" alt="dasdf" width="100%" class="rounded">
                </div>
             </div>
                 