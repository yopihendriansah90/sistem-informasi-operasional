              <div class="row">       
               <div class="col-sm-6">
                 <div class="form-group"> 
                  <label for="">Nama</label>
                   <input type="text" class="form-control" placeholder="Nama Karyawan" name="nama" value="<?=$_POST['nama'] ?>" readonly>
                 </div>
               </div>
               <div class="col-sm-6">
                 <div class="form-group">
                   <label>NIK</label>
                   <input type="text" class="form-control" placeholder="Nomor NIK" name="nik" value="<?=$_POST['nik'] ?>" readonly>
                 </div>
               </div>
             </div>

             <div class="row">
               <div class="col-sm-6">
       
                 <div class="form-group">
                   <label>Nomor SIM</label>
                   <input type="text" class="form-control" placeholder="Nomor SIM" name="nomorSim" value="<?=$_POST['nomorSim'] ?>" readonly>
                 </div>
               </div>
               <div class="col-sm-6">

                   <label>Masa aktif SIM</label>
                   <input type="date" class="form-control" placeholder="" name="masaAktif" value="<?=$_POST['masaAktif'] ?>" readonly>
                 </div>
             </div>
             <div class="row">
               <div class="col-sm-6">
                <div class="form-group">
                  <label class="form-label" for="customFile">Foto SIM</label><br>
                  <img src="foto/sim/<?=$_POST['fotoSim'] ?>" alt="Foto SIM" width="100%" class="rounded">
                </div>
             </div>
                 