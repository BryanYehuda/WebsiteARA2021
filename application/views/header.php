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
  <link rel="apple-touch-icon" href="<?php echo base_url(); ?>assets/images/logo_ara.png">
  <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/logo_ara.png">
  <!-- Meta End -->

  <!-- Link Start -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
  <link href="<?php echo base_url(); ?>assets/css/designed.css" type="text/css" rel="stylesheet" media="screen,projection" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <!-- <link href="<?php echo base_url(); ?>assets/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/> -->
  <!-- <link rel="manifest" href="<?php echo base_url(); ?>assets/manifest.json"> -->
  <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/favicon.ico" type="image/x-icon">
  <link rel="icon" href="<?php echo base_url(); ?>assets/images/favicon.ico" type="image/x-icon">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <!-- Link End -->
</head>

<body>
  <!--Navbar Start-->
  <!-- <nav class="black" role="navigation"> -->
    <nav class="color-blue-designed" role="navigation">
      <div class="nav-wrapper container-designed-navbar">
        <a id="logo-container" href="#" class="brand-logo"><img class="responsive-img"
          src="<?php echo base_url(); ?>assets/images/logo_black_ara_2.png" width="30" height="auto"
          style="padding-top: 7.5px;"><img class="responsive-img"
          src="<?php echo base_url(); ?>assets/images/logo_black_ara.png" width="60" height="auto" style="padding-top: 7.5px;">
        </a>
        <ul class="right hide-on-med-and-down">
          <li><a class="waves-effect font-color-header-designed" href="<?php echo base_url(); ?>"><strong>HOME</strong></a></li>
          <li><a class="waves-effect font-color-header-designed" href="<?php echo base_url(); ?>pendaftaran"><strong>PENDAFTARAN</strong></a></li>
          <li>
            <?php if ($this->session->userdata('kategori') == 'iot') { ?>
              <a class="waves-effect font-color-header-designed" href="<?php echo base_url(); ?>iot"><strong>Dashboard IoT</strong></a>
              <a class="waves-effect font-color-header-designed" href="<?php echo base_url(); ?>logout"><strong>LOGOUT</strong></a>
            <?php } else if ($this->session->userdata('kategori') == 'ctf') { ?>
              <a class="waves-effect font-color-header-designed" href="<?php echo base_url(); ?>ctf"><strong>Dashboard CTF</strong></a>
              <a class="waves-effect font-color-header-designed" href="<?php echo base_url(); ?>logout"><strong>LOGOUT</strong></a>
            <?php } else if ($this->session->userdata('kategori') == 'olimpiade') { ?>
              <a class="waves-effect font-color-header-designed" href="<?php echo base_url(); ?>olimpiade"><strong>Dashboard Olimpiade</strong></a>
              <a class="waves-effect font-color-header-designed" href="<?php echo base_url(); ?>logout"><strong>LOGOUT</strong></a>
            <?php } else { ?>
              <a class="waves-effect font-color-header-designed" href="<?php echo base_url(); ?>login"><strong>LOGIN</strong></a>
            <?php } ?>
          </li>
        </ul>

        <ul id="nav-mobile" class="sidenav">
          <li><a class="waves-effect font-color-header-designed" href="<?php echo base_url(); ?>"><strong>HOME</strong></a></li>
          <li><a class="waves-effect font-color-header-designed" href="<?php echo base_url(); ?>pendaftaran"><strong>PENDAFTARAN</strong></a></li>
          <li><?php if ($this->session->userdata('kategori') == 'iot') { ?>
              <a class="waves-effect font-color-header-designed" href="<?php echo base_url(); ?>iot"><strong>Dashboard IoT</strong></a>
              <a class="waves-effect font-color-header-designed" href="<?php echo base_url(); ?>logout"><strong>LOGOUT</strong></a>
            <?php } else if ($this->session->userdata('kategori') == 'ctf') { ?>
              <a class="waves-effect font-color-header-designed" href="<?php echo base_url(); ?>ctf"><strong>Dashboard CTF</strong></a>
              <a class="waves-effect font-color-header-designed" href="<?php echo base_url(); ?>logout"><strong>LOGOUT</strong></a>
            <?php } else { ?>
              <a class="waves-effect font-color-header-designed" href="<?php echo base_url(); ?>login"><strong>LOGIN</strong></a>
            <?php } ?></li>
        </ul>
        <a href="#" data-target="nav-mobile" class="sidenav-trigger left"><i class="material-icons"
          style="color: black;">menu</i></a>

      <!-- <ul id="nav-mobile" class="collapsible" data-collapsible="accordion">
        <li>
          <div id="nav-mobile" class="collapsible-header">
            <i class="material-icons" style="color: black;">menu</i>
          </div>
          <div id="nav-mobile" class="collapsible-body">
            <ul>
              <li><a class="waves-effect font-color-header-designed" href="<?php echo base_url(); ?>">HOME</a></li>
              <li><a class="waves-effect font-color-header-designed"
                  href="<?php echo base_url(); ?>pendaftaran">PENDAFTARAN</a></li>
            </ul>
          </div>
        </li>
      </ul> -->
    </div>
  </nav>

  <!--Navbar Ends-->