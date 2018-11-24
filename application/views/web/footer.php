  <!-- Footer -->
  <footer class="footer-2">
    <div class="container">
      <div class="row"> 
        
        <!-- Support -->
        <div class="col-sm-4">
        <img src="<?php echo base_url();?>assets/web/images/logo-light.png" />
          <div class="about-foot">
          <?php foreach ($alamat as $k) { ?>
            <p><?php echo $k->content; ?></p>
          <?php } ?>
          </div>
        </div>
        
        <!-- Latest Blog News -->
        <div class="col-md-3">
          <h6>BERITA TERBARU</h6>
          <div class="latest-post-small"> 
            
            <!-- Blog News -->
            <div class="media">
              <div class="media-left"> <a href="#." class="post-img"><img src="<?php echo base_url();?>assets/web/images/footer-post-img-1.png" alt=""></a> </div>
              <div class="media-body"> <a href="#.">The Hospital Department Patient</a> <span>16/02/17</span> </div>
            </div>
            
            <!-- Blog News -->
            <div class="media">
              <div class="media-left"> <a href="#." class="post-img"><img src="<?php echo base_url();?>assets/web/images/footer-post-img-2.png" alt=""></a> </div>
              <div class="media-body"> <a href="#.">The Hospital Department Patient</a> <span>16/02/17</span> </div>
            </div>
            
            <!-- Blog News -->
            <div class="media">
              <div class="media-left"> <a href="#." class="post-img"><img src="<?php echo base_url();?>assets/web/images/footer-post-img-3.png" alt=""></a> </div>
              <div class="media-body"> <a href="#.">The Department Of Hospital  Patient</a> <span>16/02/17</span> </div>
            </div>
          </div>
        </div>
        
        <!-- Support -->
        <div class="col-sm-2">
          <h6>SPESIALIS</h6>
          <ul class="links-footer ser">
          <?php foreach ($spesialis2 as $k) { ?>
          <li><a href="#">Spesialis <?php echo $k->nama_spesialis ?></a></li>
          <?php } ?>
          </ul>
        </div>
        
        <!-- Conatct -->
        <div class="col-sm-3">
          <div class="con-info">
            <h6>Contact Us</h6>
            <?php foreach ($alamat as $k) { ?>
               <p>Alamat:<?php echo $k->content; ?></p>
            <?php } ?>
            <ul>
              <li class="mobile">
              <?php foreach ($kontak as $k) { ?>
                <p>Wa: <?php echo $k->content; ?></p>
              <?php } ?>
              </li>
              <li class="email">
              <?php foreach ($email as $k) { ?>
                <p>Email: <?php echo $k->content; ?></p>
              <?php } ?>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer>
  
  <!-- Rights -->
  <div class="rights style-2">
    <div class="container">
    <?php foreach ($footer as $k) { ?>
     <p><?php echo $k->content; ?></p>
    <?php } ?>
    </div>
  </div>
  
  <!-- GO TO TOP  --> 
  <a href="#" class="cd-top"><i class="fa fa-angle-up"></i></a> 
  <!-- GO TO TOP  --> 
</div>
<!-- End Page Wrapper --> 

<!-- JavaScripts --> 
<script src="<?php echo base_url();?>assets/web/js/vendors/jquery/jquery.min.js"></script> 
<script src="<?php echo base_url();?>assets/web/js/vendors/wow.min.js"></script> 
<script src="<?php echo base_url();?>assets/web/js/vendors/bootstrap.min.js"></script> 
<script src="<?php echo base_url();?>assets/web/js/vendors/own-menu.js"></script> 
<script src="<?php echo base_url();?>assets/web/js/vendors/jquery.sticky.js"></script> 
<script src="<?php echo base_url();?>assets/web/js/vendors/owl.carousel.min.js"></script> 
<script src="<?php echo base_url();?>assets/web/js/vendors/jquery.magnific-popup.min.js"></script> 

<!-- SLIDER REVOLUTION 4.x SCRIPTS  --> 
<script type="text/javascript" src="<?php echo base_url();?>assets/web/rs-plugin/js/jquery.tp.t.min.js"></script> 
<script type="text/javascript" src="<?php echo base_url();?>assets/web/rs-plugin/js/jquery.tp.min.js"></script> 
<script src="<?php echo base_url();?>assets/web/js/main.js"></script>
</body>
</html>