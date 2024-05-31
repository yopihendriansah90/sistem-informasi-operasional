
<nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
                <a href="index.php?page=dashboard" class="nav-link">
                  <i class="nav-icon fas fa-th"></i>
                  <p>
                    Dashboard
                  <span class="right badge badge-danger">New</span>
                  </p>
                </a>
              </li>
      
              <li class="nav-item ">
                  <a href="#" class="nav-link active">
                    <i class="nav-icon fas fa-users"></i>
                    <p>
                      Master Karyawan
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="index.php?page=data-karyawan" class="nav-link <?php 
                        if(isset($_GET['page'])){
                          echo ($_GET['page'] == 'data-karyawan') ? "active" : "";
                        }
                    ?>">
                      <i class="far fa-circle nav-icon"></i>
                      
                      <p>Data Karyawan</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="index.php?page=data-sim" class="nav-link <?php 
                      if(isset($_GET['page'])){
                        echo ($_GET['page'] == 'data-sim') ? "active" : "";
                      }
                    ?>">
                      <i class="far fa-circle nav-icon"></i>
                      <p> Data SIM Karyawan</p>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a href="index.php?page=data-bpjs" class="nav-link 
                    <?php
                        if(isset($_GET['page'])){
                          echo ($_GET['page'] == 'data-bpjs') ? "active" : "";
                        }
                    ?>
                    ">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Data BPJS Karyawan</p>
                    </a>
                  </li> 

                </ul>
              </li>



              <!-- menu grup kedua -->

              <li class="nav-item ">
                  <a href="#" class="nav-link active">
                    <i class="nav-icon fas fa-truck"></i>
                    <p>
                      Master Kendaraan
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="index.php?page=data-kendaraan" class="nav-link <?php 
                        if(isset($_GET['page'])){
                          echo ($_GET['page'] == 'data-kendaraan') ? "active" : "";
                        }
                    ?>">
                      <i class="far fa-circle nav-icon"></i>
                      
                      <p>Data Kendaraan</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="index.php?page=data-stnk" class="nav-link <?php 
                      if(isset($_GET['page'])){
                        echo ($_GET['page'] == 'data-stnk') ? "active" : "";
                      }
                    ?>">
                      <i class="far fa-circle nav-icon"></i>
                      <p> Data Pajak STNK</p>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a href="index.php?page=data-stnk" class="nav-link 
                    <?php
                        if(isset($_GET['page'])){
                          echo ($_GET['page'] == 'data-stnk') ? "active" : "";
                        }
                    ?>
                    ">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Data Uji KIR</p>
                    </a>
                  </li> 

                </ul>
              </li>
             <!-- menu grup Proyek  -->
             <li class="nav-item ">
                  <a href="#" class="nav-link active">
                    <i class="nav-icon fas fa-building"></i>
                    <p>
                      Master Proyek
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>
                  <!-- awalan ul -->
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="index.php?page=data-lokasi" class="nav-link <?php 
                          if(isset($_GET['page'])){
                            echo ($_GET['page'] == 'data-lokasi') ? "active" : "";
                          }
                      ?>">
                        <i class="far fa-circle nav-icon"></i>
                        
                        <p>Lokasi Proyek</p>
                      </a>
                   </li>

                  <!-- ahiran UL -->
                  </ul>
                </li>


             <!-- menu grup Laporan Keuangan  -->
                <li class="nav-item ">
                  <a href="#" class="nav-link active">
                    <i class="nav-icon fas fa-coins"></i>
                    <p>
                      Laporan Keuangan
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>
                  <!-- awalan ul -->
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="index.php?page=data-kas-keluar" class="nav-link <?php 
                          if(isset($_GET['page'])){
                            echo ($_GET['page'] == 'data-kas-keluar') ? "active" : "";
                          }
                      ?>">
                        <i class="far fa-circle nav-icon"></i>
                        
                        <p>Data Kas Keluar</p>
                      </a>
                   </li>
                   <li class="nav-item">
                      <a href="index.php?page=data-pengajuan-kas" class="nav-link <?php 
                          if(isset($_GET['page'])){
                            echo ($_GET['page'] == 'data-pengajuan-kas') ? "active" : "";
                          }
                      ?>">
                        <i class="far fa-circle nav-icon"></i>
                        
                        <p>Data Pengajuan Kas</p>
                      </a>
                   </li>


                  <!-- akhiran UL -->
                  </ul>
                </li>


              <!-- Logout -->
              <li class="nav-item">
                    <a href="logout.php" class="nav-link text-red">
                      <i class="nav-icon fas fa-power-off"></i>
                      <p>
                        Logout
                      </p>
                    </a>
                  </li>
                      

          </ul>
      </nav>