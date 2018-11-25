 <!-- Make an Appointment -->
 <section class="main-oppoiment margin-top-100">
      <div class="container">
        <div class="row"> 
          
          <!-- Make an Appointment -->
          <div class="col-lg-7">
            <div class="appointment"> 
              
              <!-- Heading -->
              <div class="heading-block head-left margin-bottom-50">
              <?php
              $message = $this->session->userdata('message');
              $token = $this->session->userdata('token');
              if(!empty($message)){
                echo "<h4>".$message."</h4>";
                echo "Silahkan catat kode token anda untuk melihat hasil pemeriksaan dari rekam medis";
                echo "<h2>Token Anda : ".$token."</h2>";
                $message    = $this->session->unset_userdata('message');
                $token      = $this->session->unset_userdata('token');
              }
              
              else {
              ?>
                <h4>Form Pendaftaran Pasien</h4>
                <hr>
                <span>Silahkan isi formulir berikut untuk melakukan pendaftaran pemeriksaan pasien. Setelah mendaftarkan diri, Anda akan mendapatkan nomor pemeriksaan yang dapat digunakan untuk melihat rekam medis pemeriksaan oleh dokter dimanapun anda berada</span> </div>

              <form class="appointment-form" action="<?= base_url();?>index.php/Controller_web/pendaftaran_save" method="POST">
                <ul class="row">

                  <li>
                    <input type="hidden" id="perawatan_id" name="perawatan_id" class="text" value="<?php echo date("ymdhs", time()); ?>"/>
                  </li>
                  <li class="col-sm-6">
                    <label>
                      <input type="text" id="nama_pasien" name="nama_pasien"class="form-control" placeholder="Nama Anda" required>
                      <i class="icon-user"></i> </label>
                  </li>
                  <li class="col-sm-6">
                    <label>
                      <input type="email" id="email_pasien" name="email_pasien" class="form-control" placeholder="Alamat Email" required>
                      <i class="icon-envelope"></i> </label>
                  </li>
                  <li class="col-sm-6">
                    <label>
                      <input type="text" id="kontak" name="kontak" class="form-control" placeholder="Nomor Handphone" required>
                      <i class="icon-call-in"></i> </label>
                  </li>
                  <li class="col-sm-6">
                    <label>
                      <select class="selectpicker" name="sex">
                        <option>Jenis Kelamin</option>
                        <option>Laki - Laki</option>
                        <option>Perempuan</option>
                      </select>
                      <i class="icon-direction"></i></label>
                  </li>
                  <li class="col-sm-6">
                    <label>
                      <select class="selectpicker" name="spesialis_id">
                        <option>Pilih Spesialis</option>
                        <?php foreach ($spesialis as $s) { ?>
                        <option value="<?php echo $s->spesialis_id; ?>"><?php echo $s->nama_spesialis;?></option>
                        <?php } ?>
                      </select>
                      <i class="icon-key"></i></label>
                  </li>
                  <li class="col-sm-6">
                    <label>
                      <input type="text" id="umur" name="umur" class="form-control"  placeholder="Umur" required>
                      <i class="icon-calendar"></i> </label>
                  </li>
                  <li class="col-sm-12">
                    <label>
                      <textarea class="form-control" id="keluhan_penyakit" name="keluhan_penyakit" placeholder="Masukkan keluhan penyakit yang dialami"></textarea>
                    </label>
                  </li>
                  <li class="col-sm-12">
                    <button type="submit" class="btn">Kirim Formulir Pendaftaran</button>
                  </li>
                </ul>
              </form>
              <?php
                        }
              ?>
              
            </div>
          </div>
        </div>
      </div>
    </section>


    <?php include ('token.php');?>