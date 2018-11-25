<!-- Doctor Profile -->
<section class="p-t-b-150 doctor-profile light-gry-bg">
      <div class="container">
        <div class="row"> 
          <!-- Doctor Image -->
          <div class="col-sm-5"> <img class="img-responsive profile-img" src="<?php echo base_url();?>assets/web/images/doctor-2-2.jpg" alt="" > </div>
          <div class="col-sm-7">
            <div class="doctor-in"> <i class="flaticon-heartbeat icon icon-big"></i>
              <h5>Hasil Cek Medis Anda</h5>
              <span>Nomor Token Anda: <h5><?php echo $progress_info->perawatan_id; ?></h5></span> 
              <!-- Personal Info -->
              <div class="personal-info">
            	Hasil Pemeriksaan Anda: <br />
              <?php echo $progress_info->detail; ?>
              
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <?php include ('token.php');?>