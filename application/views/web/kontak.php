<!-- Bnr Header -->
<section class="sub-bnr" data-stellar-background-ratio="0.5">
    <div class="position-center-center">
      <div class="container">
        <h3>KAMI PENYEDIA JASA KESEHATAN PROFESSIONAL</h3>
        <h1>HUBUNGI KAMI</h1>
        
        <!-- Breadcrumb -->
        <ol class="breadcrumb">
          <li><a href="<?php echo base_url();?>">BERANDA</a></li>
          <li class="active">Hubungi Kami</li>
        </ol>
      </div>
    </div>
  </section>


 <!-- What We Do -->
 <section class="p-t-b-150 padding-bottom-0">
      <div class="row light-gry-bg"> 
        
        <!-- What We Do -->
        <div class="col-lg-6">
          <div class="inside-sapce"> 
            
            <!-- Heading -->
            <div class="heading-block head-left margin-bottom-50">
              <h2>Temukan Kami Di</h2>
              <hr>
               
            </div>
            
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3978.494867468107!2d98.05281217714709!3d4.317708075901908!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x303775d3eaa61f8d%3A0x9eb0c35d8ef9b175!2sUniversitas+Islam+Tamiang!5e0!3m2!1sen!2sid!4v1493049306196" width="100%" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
         
         <br /><br />    
            <!-- BOXES -->
    <section class="contact-box">
      <div class="container">
        <div class="row"> 
          
          <!-- Shop Location -->
          <div class="col-md-7">
            <div class="boxes-in">
              <h6>INFO RUMAH SAKIT</h6>
              <ul class="location">
                <li> <i class="fa fa-location-arrow"></i>
                 <?php foreach ($alamat as $k) { ?>
            <p><?php echo $k->content; ?></p>
            <?php } ?>
                </li>
                <li> <i class="fa fa-phone"></i>
                  <?php foreach ($kontak as $k) { ?>
            		<p><?php echo $k->content; ?></p>
            		<?php } ?>
                </li>
                <li> <i class="fa fa-envelope"></i>
                  <?php foreach ($email as $k) { ?>
            <p><?php echo $k->content; ?></p>
            <?php } ?>
                </li>
                <li> <i class="fa fa-clock-o"></i>
                  <p>24 Jam Non Stop</p>
                </li>
              </ul>
            </div>
          </div>
          
          
        </div>
      </div>
    </section> 
             
             
          </div>
        </div>
        
        <?php
              	$message = $this->session->userdata('message');
					if($message) {
							echo "<h5>".$message."</h5>";
							$messaage = $this->session->unset_userdata('message');
						}
        ?>
        <!-- Make an Appointment -->
        <div class="col-lg-6">
          <div class="inside-sapce appointment bg"> 
            
            <!-- Heading -->
            <div class="heading-block head-left margin-bottom-50 white">
              <h2>Tinggalkan Pesan</h2>
              <hr>
              <span>Silahkan isi formulir berikut untuk mengirim komentas, pertanyaan, dan lainnya.</span> </div>
              
              <span>
              
              </span>
            <form class="appointment-form" action="<?= base_url();?>index.php/Controller_web/kontak_kirim" method="POST">
              <ul class="row">
                <li class="col-sm-6">
                  <label>
                    <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama Anda" required>
                    <i class="icon-user"></i> </label>
                </li>
                <li class="col-sm-6">
                  <label>
                    <input type="email" id="email" name="email" class="form-control" placeholder="Alamat Email" required>
                    <i class="icon-envelope"></i> </label>
                </li>
                <li class="col-sm-6">
                  <label>
                    <input type="text" id="hp" name="hp" class="form-control" placeholder="Nomor Kontak" required>
                    <i class="icon-call-in"></i> </label>
                </li>
                <li class="col-sm-6">
                  <label>
                    <select class="selectpicker" id="sex" name="sex">
                      <option>Jenis Kelamin</option>
                      <option>Laki-Laki</option>
                      <option>Perempuan</option>
                    </select>
                    <i class="icon-direction"></i></label>
                </li>
                
                <li class="col-sm-12">
                  <label>
                    <textarea class="form-control" id="message" name="message" placeholder="Masukan Pesan atau Komentar Anda Disini"></textarea>
                  </label>
                </li>
                <li class="col-sm-12">
                  <button type="submit" class="btn">Kirim Pesan atau Komentar</button>
                </li>
              </ul>
            </form>
          </div>
        </div>
      </div>
    </section>

<?php include ('token.php');?>