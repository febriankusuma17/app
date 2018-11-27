<!doctype html>
<html class="no-js" lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="author" content="M_Adnan" />
<!-- Document Title -->
<title><?= $title ?></title>

<!-- Favicon -->
<link rel="shortcut icon" href="<?php echo base_url();?>assets/dokter/images/logo_icon_dark.png" type="image/x-icon">
<link rel="icon" href="<?php echo base_url();?>assets/dokter/images/logo_icon_dark.png" type="image/x-icon">

<!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/web/rs-plugin/css/settings.css" media="screen" />

<!-- StyleSheets -->
<link rel="stylesheet" href="<?php echo base_url();?>assets/web/css/ionicons.min.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/web/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/web/css/font-awesome.min.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/web/css/main.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/web/css/style.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/web/css/responsive.css">

<!-- Fonts Online -->
<link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900|Raleway:200,300,400,500,600,700,800,900" rel="stylesheet">

<!-- JavaScripts -->
<script src="<?php echo base_url();?>assets/web/js/vendors/modernizr.js"></script>
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<!-- Page Loader
<div id="loader">
  <div class="position-center-center">
    <div class="cssload-thecube">
      <div class="cssload-cube cssload-c1"></div>
      <div class="cssload-cube cssload-c2"></div>
      <div class="cssload-cube cssload-c4"></div>
      <div class="cssload-cube cssload-c3"></div>
    </div>
  </div>
</div> -->

<!-- Page Wrapper -->
<div id="wrap">
  <div class="top-bar">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <p>Welcome To Our Medical & Research Center</p>
        </div>
        <div class="col-sm-6">
          <div class="social-icons"> <a href="#."><i class="fa fa-facebook"></i></a> <a href="#."><i class="fa fa-twitter"></i></a> <a href="#."><i class="fa fa-dribbble"></i></a> <a href="#."><i class="fa fa-instagram"></i></a> </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Header -->
  <header class="header-style-2">
    <div class="container">
      <div class="logo"> <a href=""><img src="<?php echo base_url();?>assets/web/images/logo.png" alt=""></a> </div>
      <div class="head-info">
        <ul>
          <li> <i class="fa fa-phone"></i>
          <?php foreach ($kontak as $k) { ?>
            <p><?php echo $k->content; ?></p>
          <?php } ?>
          </li>
          <li> <i class="fa fa-envelope-o"></i>
          <?php foreach ($email as $k) { ?>
            <p><?php echo $k->content; ?></p>
          <?php } ?>
          </li>
          <li> <i class="fa fa-map-marker"></i>
          <?php foreach ($alamat as $k) { ?>
            <p><?php echo $k->content; ?></p>
          <?php } ?>
          </li>
        </ul>
      </div>
    </div>