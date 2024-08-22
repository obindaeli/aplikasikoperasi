
      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="<?=base_url('Administrator/dashboard')?>">E-KOPERASI NB</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">EKOP</a>
          </div>
          
          <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="dropdown">
              <a href="<?=base_url('Dashboard')?>" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
             
            </li>

            <?php //if ($this->session->userdata('id_level') == 1) : ?>

            <li class="menu-header">Master</li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
                <i class="fas fa-columns"></i> <span>Data</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="<?=base_url('Dashboard/Kecamatan')?>">Kecamatan</a></li>
                <li><a class="nav-link" href="<?=base_url('Dashboard/Desa')?>">Desa</a></li>
                <li><a class="nav-link" href="<?=base_url('Dashboard/Pengguna')?>">Pengguna</a></li>
              </ul>
            </li>
             

            <?php //elseif ($this->session->userdata('id_level') == 5) : ?>
              <li class="menu-header">Modul</li>
                <li class="dropdown">
                  <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
                    <i class="fas fa-columns"></i> <span>Koperasi</span></a>
                  <ul class="dropdown-menu">
                    <li><a class="nav-link" href="<?=base_url('Koperasi/koperasi')?>">Data Koperasi</a></li>
                    <li><a class="nav-link" href="<?=base_url('Koperasi/rat')?>">Laporan RAT</a></li>
                  </ul>
                </li>
            
            <?php //elseif ($this->session->userdata('id_level') == 6) : ?>


            <?php //endif; ?>

           
            <!-- <li class="menu-header">Dokumen</li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="far fa-user"></i> <span>Eksaminasi</span></a>
              <ul class="dropdown-menu">
                <li><a href="auth-forgot-password.html">Pengajuan Baru</a></li> 
                <li><a href="auth-login.html">Pengajuan Diproses</a></li> 
                <li><a href="auth-register.html">Pengajuan Ditolak</a></li> 
                <li><a href="auth-reset-password.html">Pengajuan Selesai</a></li> 
              </ul>
            </li> -->
          </ul>     
        </aside>
      </div>