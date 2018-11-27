<!-- Traffic sources -->
<div class="panel panel-flat">
						<div class="panel-heading">
							<h6 class="panel-title">Selamat Datang, <b><?php echo $this->session->userdata('nama_dokter');?></b></h6>
                            <hr>
							<div class="heading-elements">
								
							</div>
						</div>

						<div class="panel-heading">
							<div class="row">
								
<span class='label border-left-primary label-striped'>Silahkan klik pada Nomor Token untuk mengentry hasil pemeriksaan.</span> <br /></br>
<table width="100%" border="1" class="table" bordercolor="#66CCCC" cellspacing="0" cellpadding="0">
  <tr class="bg-primary">
    <td align="center">No.</td>
    <td align="center">Id Spesialis</td>
    <td align="center">Nomor Perawatan/No.Token</td>
    <td align="center">Nama Pasien</td>
    <td align="center">umur</td>
    <td align="center">Jenis Kelamin</td>
    <td align="center">Email</td>
    <td align="center">Keluhan Penyakit</td>
    <td align="center">Progress</td>
    </tr>
    <?php $no=1; ?>
    <?php foreach ($pasien as $p) { ?>
  <tr>
    <td align="center"><?php echo $no++; ?></td>
    <td align="center"><?php echo $p->spesialis_id; ?> </td>
    <td align="center"><a href="<?= base_url();?>index.php/dokter/proses_perawatan/<?php echo $p->perawatan_id; ?>" class="btn btn-primary btn-rounded legitRipple"><i class="icon-book3"></i> <?php echo $p->perawatan_id; ?></a></td>
    <td><?php echo $p->nama_pasien; ?></td>
    <td align="center"><?php echo $p->umur; ?></td>
    <td align="center"><?php echo $p->sex; ?></td>
    <td><?php echo $p->email_pasien; ?></td>
    <td><?php echo $p->keluhan_penyakit; ?></td>
    <td>
    <?php
    if($p->progress ==1) { echo "<span class='label label-primary'>Selesai Diproses</span>";}
	   else
	   { echo "<span class='label label-warning'>Belum Diproses</span>"; }
	?>
    </td>
    </tr>
    <?php } ?>
</table>

                                
							</div>
						</div>

						<div class="position-relative" id="traffic-sources"></div>
					</div>
					<!-- /traffic sources -->
