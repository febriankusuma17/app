    <!-- Nav -->
    <nav class="navbar ownmenu">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-open-btn" aria-expanded="false"> <span><i class="fa fa-navicon"></i></span> </button>
        </div>
        
        <!-- NAV -->
        <div class="collapse navbar-collapse" id="nav-open-btn">
          <ul class="nav">
            <li class="<?php if($title=='Beranda') echo 'active'; ?>"><a href="<?php echo base_url();?>">Beranda</a></li>
            <li class="<?php if($title=='Pendaftaran Online Pasien') echo 'active'; ?>"><a href="<?php echo base_url();?>index.php/Controller_web/pendaftaran">Pendaftaran Pasien</a></li>
            <li class="<?php if($title=='Cek Token Pasien') echo 'active'; ?>"><a href="services.html">Cek Token Pasien</a></li>
            <li class="<?php if($title=='Data Dokter') echo 'active'; ?>"><a href="index.html" class="dropdown-toggle" data-toggle="dropdown">Data Dokter</a></li>
            <li class="<?php if($title=='Hubungi Kami') echo 'active'; ?>"><a href="doctors.html">Hubungi Kami</a></li>
            <li><a href="appointment.html">Login Dokter</a></li>
            <li><a href="gallery.html">Login Admin</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <!-- End Header -->