<!-- POPUP DOCTOR -->
<div id="pop-open" class="zoom-anim-dialog mfp-hide pop-open-style">
        <div class="pop_up row"> 
          <!-- Doctor Image -->
          <div class="col-sm-6 no-padding-left"> <img class="img-responsive" src="<?php echo base_url();?>assets/web/images/doctor-2-2.jpg" alt="" > </div>
          <div class="col-sm-6">
            <div class="doctor-in">
              <h5><u>Cek Token</u></h5>
              Masukan Nomor Token Anda Ketika Melakukan Pendaftaran:
              
             <form action="<?= base_url();?>index.php/Controller_web/cek_token" method="POST">
             	<input type="text" id="token" name="token" class="form-control" placeholder="Masukan Nomor Token Anda Disini" required />
                <button type="submit" class="btn">Cek Hasil Pemeriksaan</button>
             </form> 
               
            </div>
          </div>
        </div>
      </div>


