<!-- Bnr Header -->
<section class="sub-bnr" data-stellar-background-ratio="0.5">
    <div class="position-center-center">
      <div class="container">
        <h3>KAMI TEAM</h3>
        <h1>DOKTER PROFESSIONAL</h1>
        
        <!-- Breadcrumb -->
        <ol class="breadcrumb">
          <li><a href="<?php echo base_url();?>">BERANDA</a></li>
          <li class="active">Data Dokter</li>
        </ol>
      </div>
    </div>
  </section>

   <!-- DOCTOR LIST -->
   <section class="p-t-b-150">
      <div class="container">
      
      <!-- Heading -->
      <div class="heading-block">
        <h4>Team Dokter Kami</h4>
        <hr>
      
      <!-- OUR TEAM -->
      <div class="our-team"> 
        
        <!-- Team  -->
        <div class="team-part">
          <div class="row"> 
            

            <?php foreach ($dokter as $d) { ?>
            <!-- Team Member -->
            <div class="col-sm-4">
              <article> 
                <!-- Team Img -->
                <div class="team-img"> <img class="img-responsive" src="<?php echo base_url();?>file/dokter/<?php echo $d->foto; ?>" alt=""> 
                
                <!-- Team Name -->
                <div class="team-name">
                  <h6><?php echo $d->nama_dokter; ?></h6>
                  <p>Spesialis <?php echo $d->spesialis; ?></p>
                </div>
              </article>
            </div>

            <?php } ?>
            
          </div>
        </div>
      </div>
    </section>







    <?php include ('token.php');?>