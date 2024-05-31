
       <!-- awalan row / bari -->
        <div class="row">
          <div class="col-sm-6">
            <div class="form-group">
              <label>Tanggal</label>
              <input type="date" class="form-control" placeholder="" name="tanggal" value="<?=$_POST['tanggal']?>" readonly>

            </div>
          </div>
          <div class="col-sm-6">
            <!-- text input -->
            <div class="form-group">
              <label>Jumlah Pengeluaran</label>
              <input type="number" class="form-control" placeholder="Jumlah Pengeluaran" name="jumlah" maxlength="10" value="<?=$_POST['jumlah']?>" readonly>
            </div>
          </div>
        </div>
        <!-- akhiran row / baris -->

        <!-- awalan row / bari -->
        <div class="row">
          <div class="col-sm-6">
            <div class="form-group">
              <label>Keterangan</label>
              <textarea name="keterangan" id="" class="form-control" readonly><?=$_POST['keterangan']?></textarea>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label>Lokasi</label>
              <input type="text" class="form-control"  name="lokasi" maxlength="10" value="<?=$_POST['lokasi']?>" readonly>         
            </div>
          </div>
        </div>
        <!-- akhiran row / baris -->

          <!-- awalan row / bari -->
          <div class="row">
          <div class="col-sm-6">
            <div class="form-group">
              <label>Status</label>
              <input type="text" class="form-control" name="status" maxlength="10" value="<?=$_POST['status']?>" readonly>         
              
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label>ID Invois</label>
              <input type="text" class="form-control" name="id_invoice" maxlength="10" value="<?=$_POST['id_invoices']?>" readonly>         
            </div>
          </div>
        </div>
        <!-- akhiran row / baris -->

        <!-- awalan row / bari -->
        <div class="row">
          <div class="col-sm-6">
            <div class="form-group">
              <label>Created at</label>
              <input type="text" class="form-control" name="created_at" value="<?=$_POST['created_at']?>" readonly>         
              
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label>Updated at</label>
              <input type="text" class="form-control" name="updated_at" value="<?=$_POST['updated_at']?>" readonly>         
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-12">
          <img width="100%" src="foto/nota/<?=$_POST['foto']?>" class="rounded mx-auto d-block" alt="foto nota">
          </div>
        </div>
        <!-- akhiran row / baris -->