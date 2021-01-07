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
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/css/materialize.css" type="text/css" rel="stylesheet"
    media="screen,projection" />
  <!-- <link href="<?php echo base_url(); ?>assets/css/designed.css" type="text/css" rel="stylesheet"
        media="screen,projection" /> -->
  <!-- <link href="<?php echo base_url(); ?>assets/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/> -->
  <!-- <link rel="manifest" href="<?php echo base_url(); ?>assets/manifest.json"> -->
  <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/favicon.ico" type="image/x-icon">
  <link rel="icon" href="<?php echo base_url(); ?>assets/images/favicon.ico" type="image/x-icon">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <!-- Link End -->
  <!-- Custom By Rafael Start -->
  <meta name="viewport" content="width = device-width, initial-scale = 1">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/css/materialize.min.css"> -->
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js"> -->
  </script>
  <link href="<?php echo base_url(); ?>assets/css/designed.css" type="text/css" rel="stylesheet"
    media="screen,projection" />
  <!-- Custom By Rafael End -->
</head>

<body class="container" style="background-color: #111;color: whitesmoke;">
  <h3 class="center"><b>Panitia ARA 2021</b></h3>

  <div class="row">
    <div class="input-field col s12" style="color: white;">
      <form action="<?php echo base_url('panitia/search');?>" method="post">
        <div class="row">
          <div class="col s9 l9">
            <input placeholder="Cari" id="keyword" name="keyword" type="text" class="validate">
          </div>
          <div class="col s3 l3">
            <input
              style="color: white;background-color: #70B2E2;width: 100%;vertical-align: middle;height: 47px;font-size: medium;"
              type="submit" value="Search">
          </div>
        </div>
      </form>
    </div>
  </div>

  <!-- <div class="row">
    <div class="col s12">
      <ul class="tabs color-blue-designed" draggable="false" style="color: white;">
        <li class="tab col s3"><a style="color: white;" draggable="false" class="active" href="#webinar">Webinar</a>
        </li>
        <li class="tab col s3"><a style="color: white;" draggable="false" href="#iot">
            IOT</a></li>
        <li class="tab col s3"><a style="color: white;" draggable="false" href="#olimpiade">
            Olimpiade</a></li>
        <li class="tab col s3"><a style="color: white;" draggable="false" href="#ctf">CTF</a></li>
      </ul>
    </div> -->

  </div>

  <!--Navbar Start-->
  <!-- <nav class="black" role="navigation"> -->
  <!-- <nav class="color-blue-designed" role="navigation">
        <div class="nav-wrapper container-designed">
          <a id="logo-container" href="#" class="brand-logo"><img class="responsive-img" src="<?php echo base_url(); ?>assets/images/logo.png" width="60" height="auto"></a>
          <ul class="right hide-on-med-and-down">
            <li><a class="waves-effect font-color-header-designed" href="<?php echo base_url(); ?>">HOME</a></li>
            <li><a class="waves-effect font-color-header-designed" href="<?php echo base_url(); ?>pendaftaran">PENDAFTARAN</a></li>
          </ul>
          <ul id="nav-mobile" class="sidenav">
            <li><a class="waves-effect font-color-header-designed" href="<?php echo base_url(); ?>">HOME</a></li>
            <li><a class="waves-effect font-color-header-designed" href="<?php echo base_url(); ?>pendaftaran">PENDAFTARAN</a></li>
          </ul>
          <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">MENU</i></a>
        </div>
      </nav> -->
  <!--Navbar Ends-->