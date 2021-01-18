<!DOCTYPE html>

<html lang="en">

<head>
  <!-- Meta Start -->
  <meta charset="UTF-8" />
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>ARA 2021 HMIT ITS</title>
  <meta name="description" content="ARA 2021 - For A Better Future!" />
  <meta name="theme-color" content="#2bdcfb" />
  <link rel="apple-touch-icon" href="<?php echo base_url(); ?>assets/images/logo.png">
  <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/logo.png">
  <!-- Meta End -->

  <!-- Link Start -->
  <!-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> -->
  <!-- <link href="<?php echo base_url(); ?>assets/css/materialize.css" type="text/css" rel="stylesheet"
    media="screen,projection" /> -->
  <link rel="manifest" href="<?php echo base_url(); ?>assets/manifest.json">
  <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/favicon.ico" type="image/x-icon">
  <link rel="icon" href="<?php echo base_url(); ?>assets/images/favicon.ico" type="image/x-icon">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <!-- Link End -->

  <!-- Custom Start -->
  <!--Import Google Icon Font-->
  <!-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> -->
  <!--Import materialize.css-->
  <!-- <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" /> -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="<?php echo base_url(); ?>assets/css/designed.css" type="text/css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <!-- Custom End -->
</head>

<body class="container" style="background-color: #111;color: whitesmoke;">
  <?php 
  if($this->session->has_userdata("panitia_logged_in")) { ?>
  <h2 style="padding-top: 10px;" class="text-center row">
    <div class="text-left col-xs-6">
      <a href="<?php echo base_url('panitiaaraonly');?>" draggable="false">Home</a>
    </div>
    <div class="text-right col-xs-6">
      <a href="<?php echo base_url('panitiaaraonly/logout');?>" draggable="false">Logout</a>
    </div>
  </h2>
  <br>
  <?php } ?>
  <h1 class="text-center"><b>
      <?php 
      if($this->session->has_userdata("panitia_logged_in")) echo 'Panitia '; 
      ?>
      ARA 2020
    </b></h1>
  <?php if(isset($onpage)) { ?>
  <h2 class="text-center"><b>
      <?php echo strtoupper($onpage); ?>
    </b></h2>
  <br>
  <div class="row">
    <div class="input-field col s12" style="color: white;">
      <!-- <?php //echo form_open_multipart('panitiaaraonly/fetch/' . $onpage); ?> -->
      <div class="row">
        <!-- <div class="col s9 l9"> -->
        <!-- <div class="col s12 l12">
          <input placeholder="Cari" id="keyword" name="keyword"
            style="color: white;border-color: whitesmoke;" value="<?= set_value('keyword'); ?>">
        </div> -->
        <!-- <div class="col s3 l3">
          <input
            style="color: white;background-color: #70B2E2;width: 100%;vertical-align: middle;height: 47px;font-size: medium;"
            type="submit" value="Search">
        </div> -->
      </div>
      <!-- <?php //echo form_close(); ?> -->
    </div>
  </div>
  <?php 
    } ?>

  </div>